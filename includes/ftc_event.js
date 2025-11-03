let rankings = null;
let toaEventKey = null;
let ftcEventKey = null;
let ftcSeason = null;
const matchesEl = el('#matches');
import { DomElement, el, div, p, button, i, ul, li, a, span, h, capitalize, toOrdinal } from "/includes/library.js";
import { FtcScoutApi, FtcTeam } from "/includes/api_library.js";

const api = new FtcScoutApi({seasonCode: "2025"});


function rankForTeam(n) {
	const match = rankings.filter((r) => r.team_key == n);
	if (!!match && match.length > 0) {
		return toOrdinal(match[0].rank);
	} else {
		return null;
	}

}

function teamEntryForMatch(t) {
	
	return li().append(
		a('', `https://ftc-events.firstinspires.org/${ftcSeason}/team/${t.teamNumber}`)
			.addClass('link-dark link-underline-opacity-0 link-underline-opacity-100-hover link-underline-dark')
			.setAttribute('target', '_blank')
			.setValue(
				`${t.teamNumber} &ndash; <span class="t${t.teamNumber}-name">?</span> <span class="text-black-50"> &ndash; <span class="t${t.teamNumber}-city">?</span></span>`
				// `${t.teamNumber} &ndash;`
			),
		// span(` &ndash; ${rankForTeam(t.teamNumber)}`)
	)

}

export async function loadData(eventKey, highlights = {}, links = null, videos = {}) {
	toaEventKey = eventKey;
	if (!!links && !!links.ftcEventKey) {
		ftcEventKey = links.ftcEventKey;
	}
	if (!!links && !!links.ftcSeason) {
		ftcSeason = links.ftcSeason;
	}
	
	const firstDiv = el('body > div');
	
	const navHeader = div().addClass('p-3 pb-md-2 d-flex flex-wrap justify-content-center align-items-start bg-dark text-white gap-4').append(
		div().addClass('d-flex flex-column align-items-center gap-1 col-1 cursor-pointer').append(
			i('fa-solid fa-left fa-2x'),
			span('Back').addClass('d-none d-md-block')
		)
	).onClick(() => {
		self.location.href = '../../index.php';
	});
	
	firstDiv.appendAfter(navHeader);
		
	const highlightsEl = div().addClass('d-flex flex-column gap-4').append(
		div().setId('loading-highlights').addClass('d-flex gap-3 align-items-center').append(
			div().append(i('fa-solid fa-cog fa-spin fa-3x text-black-50 fa-fw')),
			div().append(
				div('One moment&hellip;').addClass("small text-dark fs-5")
			)
		)
	);
	const eventSummaryBody = div().addClass('card-body p-lg-4').append(
		highlightsEl
	);
	
	
	const pageContent = div().addClass('d-flex p-4 gap-3 flex-column flex-md-row align-items-md-start justify-content-md-center flex-wrap').append(
		div().addClass('card bg-warning flex-basis-auto flex-basis-sm-30rem m-3 m-md-0 rounded-4 overflow-hidden').append(
			div().addClass('card-header py-3 bg-black-10').append(
				h(3, 'Event Summary').addClass('card-title fw-bold text-center p-0 m-0 text-warning-emphasis'),
			),
			eventSummaryBody
		)
	)
	
	// firstDiv.parent().insertAfter(pageContent, firstDiv);
	navHeader.appendAfter(pageContent);
	
	const loadingMatches = div().setId('loadingMatches').addClass('card align-self-center bg-black-10 rounded-4').append(
		div().addClass('card-body d-flex flex-column align-items-center text-black-25').append(
			i('fa-solid fa-cog fa-spin fa-3x fa-fw'),
			div("Loading matches...").addClass('fs-3')
		)
	);
	pageContent.append(loadingMatches);

	
	Object.entries(highlights).forEach(([key, value]) => {
		let icon;
		if (key == "notStarted") return;
		if (key == "alliance") {
			icon = "fa-duotone fa-user-group";
		} else if (key == "captain") {
			icon = "fa-duotone fa-user-police";
		} else if (key == "ending") {
			icon = "fa-duotone fa-medal";
		} else if (key == "superlative") {
			icon = "fa-duotone fa-star";
		} else if (/^award/.test(key)) {
			icon = "fa-duotone fa-trophy";
		} else if (key == "advancement") {
			icon = "fa-duotone fa-up";
		} else if (/^info/.test(key)) {
			icon = "fa-duotone fa-circle-info";
		} else {
			icon = "";
		}
		
		if (typeof value !== "object") {
			value = [value];
		}
		
		
		value.forEach((t) => 
			highlightsEl.append(
				div().addClass('d-flex gap-3 align-items-center d-none').append(
					div().append(i(`${icon} fa-3x text-black-50 fa-fw`)),
					div().append(
						div(t).addClass("small text-dark fs-5")
					)
				)
			)
		);
		
	})
	if (!!links) {
		eventSummaryBody.appendAfter(
			div().addClass('card-footer d-flex gap-2 py-3 align-items-center justify-content-center bg-black-10').append(
				!!ftcEventKey ? button('btn btn-dark btn-sm').setValue('FTC Event Results').onClick(() => window.open(`https://ftc-events.firstinspires.org/${ftcSeason}/${ftcEventKey}`)) : null,
				!!links.streamUrl ? button('btn btn-dark btn-sm').setValue('Live Stream').onClick(() => window.open(links.streamUrl)) : null,
				!!links.eventInfo ? button('btn btn-dark btn-sm').setValue('Event Info').onClick(() => window.open(links.eventInfo)) : null,
				!!links.schedule ? a('Schedule', links.schedule).addClass('btn btn-dark text-white btn-sm') : null
			)
		)
	}
	
	
	const event = await api.loadEvent(links.ftcEventKey);
	// console.debug(event);
	
	const teamMatches = event.matchesForTeam("15815");

	
		const loadingHighlights = el('#loading-highlights');
		if (!event.hasStarted) {
			loadingHighlights.appendAfter(
				div().addClass('d-flex gap-3 align-items-center').append(
					div().append(i('fa-duotone fa-hourglass-clock fa-3x text-black-50 fa-fw')),
					div().append(
						div("This event hasn't started yet. Check back later.")
					)
				)
			);
			if (Object.hasOwn(highlights, "notStarted")) {
				loadingHighlights.appendAfter(
					...Object.entries(highlights['notStarted']).map(([key, value]) => {
						return div().addClass('d-flex gap-3 align-items-center').append(
							div().append(i(`fa-duotone ${key} fa-3x text-black-50 fa-fw`)),
							div().append(
								div(value)
							)
						)

					})
				)
			}
			loadingMatches.hide();
			loadingHighlights.hide();

			return;
		}
		let currentRank;
		if (!!teamMatches && teamMatches.length > 0) {
			// console.debug(event.teams.get('15815'));
			currentRank = event.rankForTeam('15815');
		}
		
		let eventStart = null;
		if (!!links && !!links.eventStart) {
			eventStart = luxon.DateTime.fromISO(links.eventStart);
		}
		
		if (!!teamMatches && teamMatches.length > 0) {
			// document.querySelector("#rank").innerText = toOrdinal(teamMatches[0].rank);
			// 
			// document.querySelector("#rank-row").classList.remove('loading');
		} else {
			loadingHighlights.appendAfter(
				div().addClass('d-flex gap-3 align-items-center').append(
					div().append(i('fa-duotone fa-chart-simple fa-3x text-black-50 fa-fw')),
					div().append(
						div(!!eventStart && luxon.DateTime.now() < eventStart ? "This event hasn't started yet. Check back later." : "Rankings and results aren't available yet.")
					)
				)
			);

		}
		let numberOfQualMatchesPlayed = teamMatches.filter((m) => m.hasBeenPlayed && m.isQualification()).length;
		if (numberOfQualMatchesPlayed > 0) {	
			loadingHighlights.appendAfter(
				div().addClass('d-flex gap-3 align-items-center').append(
					div().append(i('fa-duotone fa-chart-simple fa-3x text-black-50 fa-fw')),
					div().append(
						div(`Ranked ${toOrdinal(currentRank)} after ${numberOfQualMatchesPlayed} qualifying matches`).addClass('text-dark fs-5')
					)
				)
			);
		} else {
			loadingMatches.hide();
		}

			
			teamMatches.forEach((m) => {
				let partners, opponents, matchUrl;
				const team = m.team('15815')[0];
				const cardBody = div().addClass('card-body p-lg-4')
				const matchEl = div().addClass('card flex-basis-auto flex-basis-sm-30rem m-3 m-md-0 rounded-4 border-0').append(cardBody);
					

				const matchSummary = h(5)
					.addClass(`py-2 px-4 mt-4 ${team.isRed() ? "text-danger-emphasis" : "text-primary-emphasis"}`)
					.setStyle([['marginLeft', '-1.5rem'], ['marginRight', '-1.5rem']])
					.append(
						span(`${capitalize(team.alliance)} Alliance`).addClass('alliance-color')
					);

				const outcomeIcon = i().addClass('fa-2x fa-duotone');
				cardBody.append(
					h(3).addClass('card-title fw-bold pb-0 mb-0 d-flex justify-content-between align-items-center').append(
						span(m.matchName()),
						outcomeIcon
					),
					matchSummary
				)
				
				
				
				
				// QUESTION: does this work any more?
				if (m.tournamentLevel > 1) {
					const _ = m.match_key.match(/E(\d{1,2})\d{2}-/);
					matchUrl = `https://ftc-events.firstinspires.org/${ftcSeason}/${ftcEventKey}/playoff/${_[1]}/1`;

				} else {
					matchUrl = `https://ftc-events.firstinspires.org/${ftcSeason}/${ftcEventKey}/qualifications/`+m.matchName().replace("Quals ", "");
				}
				
				if (team.isRed()) {
					matchSummary.addClass('bg-danger-subtle');
					partners = m.partners(15815);
					opponents = m.opponents(15815);
					// partners = sortObjectArray(
					// 	m.participants.filter((p) => /R[123]$/.test(p.match_participant_key)),
					// 	(t) => +t.team_key
					// );
					// opponents = sortObjectArray(
					// 	m.participants.filter((p) => /B[123]$/.test(p.match_participant_key)),
					// 	(t) => +t.team_key
					// );


				} else {
					matchSummary.addClass('bg-primary-subtle');
					partners = m.partners(15815);
					opponents = m.opponents(15815);

					// partners = sortObjectArray(
					// 	m.participants.filter((p) => /B[123]$/.test(p.match_participant_key)),
					// 	(t) => +t.team_key
					// );
					// opponents = sortObjectArray(
					// 	m.participants.filter((p) => /R[123]$/.test(p.match_participant_key)),
					// 	(t) => +t.team_key
					// );


				}
		
				// if (m.red_score == -1) {
				if (!m.hasBeenPlayed) {
					if (!!m.scheduledStartTime) {
						// let scheduledTime = luxon.DateTime.fromISO(m.scheduledStartTime);//.plus({hours:5});
						cardBody.addClass('text-secondary mb-3').append(
							h(5, `Scheduled for ${m.scheduledStartTimeAsLuxon.toFormat('t')}`)
						);
						outcomeIcon.addClass('fa-question');

						// matchEl.querySelector('.scheduled-time .time').innerText = scheduledTime.toFormat('t');
						// matchEl.querySelector('.scheduled-time').classList.remove('d-none');
					}
					
					
				} else {
					
					if (team.isWinningAlliance()) {
					// if (m.alliance_color == m.winning_alliance) {
						matchSummary.append(
							span(` <span class="text-black-25">&bull;</span> Win`),
						);
						outcomeIcon.addClass(`fa-thumbs-up ${team.isRed() ? "text-danger-emphasis" : "text-primary-emphasis"}`);
						// matchEl.querySelector('.match-outcome').innerText = "Win";
						// matchEl.querySelector('.thumb-icon').classList.add('fa-thumbs-up');
					} else {
						matchSummary.append(
							span(` <span class="text-black-25">&bull;</span> Loss`),
						);
						outcomeIcon.addClass(`fa-thumbs-down ${team.isRed() ? "text-danger-emphasis" : "text-primary-emphasis"}`);
// 
// 						matchEl.querySelector('.match-outcome').innerText = "Loss";
// 						matchEl.querySelector('.thumb-icon').classList.add('fa-thumbs-down');
					}
					
					
					
					if (team.isRed()) {
						// matchEl.addClass('border-danger');
						outcomeIcon.addClass('text-danger');
						matchSummary.append(
							span(` <span class="text-black-25">&bull;</span> `),
							a(`${m.totalPointsRed()} to ${m.totalPointsBlue()}`, matchUrl)
								.setAttribute('target', '_blank')
								.addClass('text-danger-emphasis link-underline-opacity-25 link-underline-opacity-100-hover link-underline-dark')
						);
						// matchEl.classList.add('border-danger');
						// matchEl.querySelector('.score-1').innerText = m.red_score;
						// matchEl.querySelector('.score-2').innerText = m.blue_score;
			
						// console.debug(partners, opponents);

			
					} else {
						// matchEl.addClass('border-primary');
						outcomeIcon.addClass('text-primary');

						matchSummary.append(
							span(` <span class="text-black-25">&bull;</span> `),
							a(`${m.totalPointsBlue()} to ${m.totalPointsRed()}`, matchUrl)
								.setAttribute('target', '_blank')	
								.addClass('text-primary-emphasis link-underline-opacity-25 link-underline-opacity-100-hover link-underline-dark')
						);
						
						// matchEl.classList.add('border-primary');
						// matchEl.querySelector('.score-1').innerText = m.blue_score;
						// matchEl.querySelector('.score-2').innerText = m.red_score;
						

						// if (m.participants.length > 4) {
						// } else {
						// 	
						// 	partner = m.participants.filter((p) => /B[12]$/.test(p.match_participant_key))[0];
						// 	opponents = m.participants.filter((p) => /R[12]$/.test(p.match_participant_key));
						// }
					}
					
					
				}
				// console.debug(partners, opponents);
				cardBody.append(
					div().append(
						p('Partner' + (!!partners && partners.length > 1 ? 's' : '')).addClass('fw-bold'),
						ul().append(
							(partners ?? []).map((t) => 
								teamEntryForMatch(t)
							)
						),
						p('Opponents').addClass('fw-bold'),
						ul().append(
							(opponents ?? []).map((t) => 
								teamEntryForMatch(t)
							)
						)
					)
				);
				if (!!videos[m.match_key]) {
					cardBody.append(
						DomElement.create('iframe')
							.setStyle([['width', '100%'], ['height', 'auto'], ['aspectRatio', '560/315']])
							.setAttribute('src', videos[m.match_key])
							.setAttribute('frameborder', '0')
							.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share')
							.setAttribute('allowfullscreen', 'true')
					)
				}
				
				// matchEl.querySelector('.partner .team-name').innerText = partner.team.team_name_short;
				// matchEl.querySelector('.partner .team-number').innerText = partner.team.team_number;
				// matchEl.querySelector('.partner .team-location').innerText = partner.team.city;
				// matchEl.querySelector(`.partner a`).setAttribute('href', 'https://ftc-events.firstinspires.org/${ftcSeason}/team/'+partner.team_key);
				// matchEl.querySelector('.partner .rank').innerText = rankForTeam(partner.team_key);
				// 
				// opponents.forEach((o, i) => {
				// 	matchEl.querySelector(`.opponent-${i+1} .team-name`).innerText = o.team.team_name_short;
				// 	matchEl.querySelector(`.opponent-${i+1} .team-number`).innerText = o.team.team_number;
				// 	matchEl.querySelector(`.opponent-${i+1} .team-location`).innerText = o.team.city;
				// 	matchEl.querySelector(`.opponent-${i+1} a`).setAttribute('href', 'https://ftc-events.firstinspires.org/${ftcSeason}/team/'+o.team_key);
				// 	matchEl.querySelector(`.opponent-${i+1} .rank`).innerText = rankForTeam(o.team_key);
				// 	
				// });
				
		
				// matchEl.classList.remove('d-none');
				// console.debug(m.participants);
				
				loadingMatches.hide();
				pageContent.append(matchEl);
				const additionalMatches = el('#additional-matches');
				if (additionalMatches.isValid) {
					pageContent.append(
						additionalMatches.children().map((e) => e.setStyle('order', '1000'))
					);
				}
				// document.querySelector('#matches').append(matchEl);
			});
			highlightsEl.children().forEach((e) => e.show());
			loadingHighlights.hide();

			Array.from(event.teams.values()).forEach((t) => {
				api.getTeamData(t.teamNumber).then((results) => results.json()).then((json) => {
					t.name = json.name;
					t.schoolName = json.name;
					t.state = json.state;
					t.city = json.city;
					Array.from(document.querySelectorAll(`.t${t.teamNumber}-name`)).forEach((x) => x.innerHTML = t.name);
					Array.from(document.querySelectorAll(`.t${t.teamNumber}-city`)).forEach((x) => x.innerHTML = `${t.city}, ${t.state}`);
					// console.debug(`.t${t.teamNumber}-name`);
				});
			})
			
			
			// if (!!match && match.length > 0) {
			// 	document.querySelector("#rank").innerText = toOrdinal(match[0].rank);
			// 	document.querySelector("#num-quals").innerText = match[0].wins + match[0].losses;
			// 	document.querySelector("#rank-row").classList.remove('loading');
			// } else {
			// 	document.querySelector("#rank-message").innerText = "Rankings are not yet available";
			// 	document.querySelector("#rank-row").classList.remove('loading');
			// 	
			// }
		// }) from old toa code
	// }) from old toa code
	// .catch(error => console.error(error));
	
	

}
	
