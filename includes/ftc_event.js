let rankings = null;
let toaEventKey = null;
let ftcEventKey = null;
let ftcSeason = null;
const matchesEl = el('#matches');
import { DomElement, el, div, p, button, i, ul, li, a, span, h } from "/includes/library.js";



function capitalize(s) {
	return s.charAt(0).toUpperCase() + s.slice(1);
}
function sortObjectArray(arr, key, reverse = false) {
	const sortOrder = reverse ? -1 : 1;
	return arr
		.sort((a, b) => {
			let aValue, bValue;
			try {
				if (typeof key == 'function') {
					aValue = key(a);
					bValue = key(b);
				} else {
					aValue = typeof (a)[key] == "string" ? (a)[key].toLowerCase() : (a)[key];
					bValue = typeof (b)[key] == "string" ? (b)[key].toLowerCase() : (b)[key];
				}
				
				if (aValue < bValue) return sortOrder * -1;
				else if (aValue > bValue) return sortOrder * 1;
				else return 0;
			} catch (e) {
				return 0;
			}
		});
}

function rankForTeam(n) {
	const match = rankings.filter((r) => r.team_key == n);
	if (!!match && match.length > 0) {
		return toOrdinal(match[0].rank);
	} else {
		return null;
	}

}

let numberOfMatchesPlayed = 0;

function teamEntryForMatch(t) {
	return li().append(
		a('', `https://ftc-events.firstinspires.org/${ftcSeason}/team/${t.team_key}`)
			.addClass('link-dark link-underline-opacity-25 link-underline-opacity-100-hover link-underline-dark')
			.setValue(
				`${t.team.team_number} &nbsp; ${t.team.team_name_short} (${t.team.city})`
			),
		span(` &ndash; ${rankForTeam(t.team_key)}`)
	)

}

export function loadData(eventKey, highlights = {}, links = null) {
	toaEventKey = eventKey;
	if (!!links && !!links.ftcEventKey) {
		ftcEventKey = links.ftcEventKey;
	}
	if (!!links && !!links.ftcSeason) {
		ftcSeason = links.ftcSeason;
	}
	
	const firstDiv = el('body > div');
		
	const highlightsEl = div().addClass('d-flex flex-column').append(
		div().setId('loading-highlights').addClass('d-flex gap-3 mt-4 align-items-center').append(
			div().append(i('fa-solid fa-cog fa-spin fa-3x text-black-50 fa-fw')),
			div().append(
				div('One moment&hellip;').addClass("small text-dark fs-5")
			)
		)
	);
	const eventSummaryBody = div().addClass('card-body p-lg-4').append(
		h(3, 'Event Summary').addClass('card-title fw-bold'),
		highlightsEl
	);
	
	
	const pageContent = div().addClass('d-flex p-4 gap-3 flex-column flex-md-row align-items-md-start justify-content-md-center flex-wrap').append(
		div().addClass('card bg-warning flex-basis-auto flex-basis-sm-30rem m-3 m-md-0 rounded-4').append(
			eventSummaryBody
		)
	)
	
	// firstDiv.parent().insertAfter(pageContent, firstDiv);
	firstDiv.appendAfter(pageContent);
	
	const loadingMatches = div().setId('loadingMatches').addClass('card align-self-center bg-black-10').append(
		div().addClass('card-body d-flex flex-column align-items-center text-black-25').append(
			i('fa-solid fa-cog fa-spin fa-3x fa-fw'),
			div("Loading matches...").addClass('fs-3')
		)
	);
	pageContent.append(loadingMatches);

	
	Object.entries(highlights).forEach(([key, value]) => {
		let icon;
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
		} else {
			icon = "";
		}
		
		if (typeof value !== "object") {
			value = [value];
		}
		
		
		value.forEach((t) => 
			highlightsEl.append(
				div().addClass('d-flex gap-3 mt-4 align-items-center').append(
					div().append(i(`${icon} fa-3x text-black-50 fa-fw`)),
					div().append(
						div(t).addClass("small text-dark fs-5")
					)
				)
			)
		);
		
	})
	if (!!links) {
		highlightsEl.append(
			div().addClass('d-flex gap-3 mt-4 align-items-center').append(
				div().append(i(`fa-duotone fa-link fa-3x text-black-50 fa-fw`)),
				div().addClass('small text-dark gap-2 d-flex').append(
					!!ftcEventKey ? button('btn btn-dark btn-sm').setValue('FTC Event Results').onClick(() => window.open(`https://ftc-events.firstinspires.org/${ftcSeason}/${ftcEventKey}`)) : null,
					!!links.streamUrl ? button('btn btn-dark btn-sm').setValue('Live Stream').onClick(() => window.open(links.streamUrl)) : null
				)
			)
		)
	}

	
	fetch(`https://theorangealliance.org/api/event/${toaEventKey}/rankings?type=quals`, {
		"method": "GET",
		"headers": {
			"Content-Type": "text/json",
			"X-TOA-Key": "9ZoJXFY6GdKBQ50B0RktugDym0EHUXT5eCx5uf5X8tw=",
			"X-Application-Origin": "tester"
		}
	})
	.then((res) => res.json())
	.then((data) => {
		rankings = data;
		const loadingHighlights = el('#loading-highlights');
		const match = data.filter((r) => r.team_key == 15815);
		
		let currentRank;
		if (!!match && match.length > 0) {
			currentRank = match[0].rank;
		}
		
		if (!!match && match.length > 0) {
			// document.querySelector("#rank").innerText = toOrdinal(match[0].rank);
			
			// document.querySelector("#rank-row").classList.remove('loading');
		} else {
			loadingHighlights.appendAfter(
				div().addClass('d-flex gap-3 mt-4 align-items-center').append(
					div().append(i('fa-duotone fa-chart-simple fa-3x text-black-50 fa-fw')),
					div().append(
						div("Rankings and results aren't yet available.")
					)
				)
			);
			// document.querySelector("#rank-message").innerText = "Rankings and results are not yet available";
			// document.querySelector("#rank-row").classList.remove('loading');
			loadingHighlights.hide();
			
		}
		// highlightsEl.removeClass('loading');
		
		fetch(`https://theorangealliance.org/api/event/${toaEventKey}/matches`, {
			"method": "GET",
			"headers": {
				"Content-Type": "text/json",
				"X-TOA-Key": "9ZoJXFY6GdKBQ50B0RktugDym0EHUXT5eCx5uf5X8tw=",
				"X-Application-Origin": "tester"
			}
		})
		.then((res) => res.json())
		.then((data) => {
			numberOfMatchesPlayed = data.filter((m) => m.red_score !== -1 && m.tournament_level == 1).length;
					
			if (numberOfMatchesPlayed > 0) {	
				loadingHighlights.appendAfter(
					div().addClass('d-flex gap-3 mt-4 align-items-center').append(
						div().append(i('fa-duotone fa-chart-simple fa-3x text-black-50 fa-fw')),
						div().append(
							div(`Ranked ${toOrdinal(currentRank)} after ${numberOfMatchesPlayed} qualifying matches`).addClass('text-dark fs-5')
						)
					)
				);
			} else {
				el('#loadingMatches').hide();
			}
			loadingHighlights.hide();


			// document.querySelector("#num-quals").innerText = numberOfMatchesPlayed;
		
			const matches = sortObjectArray(
				data.filter((r, i) => {
					let p = r.participants.filter((m) => m.team_key == 15815);
					// if (r.tournament_level == 1) {

						r.index = i;
					// } else {
						// r.index = `${r.tournament_level}`.split('')[0];
					// }
					if (/FRQ2-E/.test(r.match_key)) {
						r.match_key = r.match_key.replace(/-E/, '-ZE');
					}
					if (p.length == 0) {
						return false;
					} else {
						let q = p[0];
						if (/R[12]$/.test(q.match_participant_key)) {
							r.alliance_color = "red";
						} else {
							r.alliance_color = "blue";
						}
						if (r.red_score > r.blue_score) {
							r.winning_alliance = "red";
							
						} else {
							r.winning_alliance = "blue";
						}
						r.participants.splice(r.participants.indexOf(q), 1);
						return true;
					}
				}),
				"index"
			);
				
			
			matches.forEach((m) => {
				let partners, opponents, matchUrl;
				const cardBody = div().addClass('card-body p-lg-4')
				const matchEl = div().addClass('card flex-basis-auto flex-basis-sm-30rem m-3 m-md-0 rounded-4').append(cardBody);
				const matchSummary = h(5).append(
					span(`${capitalize(m.alliance_color)} Alliance`).addClass('alliance-color')
				);
				const outcomeIcon = i().addClass('float-end fa-3x fa-duotone');
				cardBody.append(
					outcomeIcon,
					h(3, m.match_name.replace("Quals", "Qualification Match")).addClass('card-title fw-bold pb-0 mb-0'),
					matchSummary
				)
				
				
				
				// let matchEl = document.querySelector('#match-template').cloneNode(true);
				// matchEl.setAttribute('id', '');
				// matchEl.querySelector('.match-number').innerText = m.match_name.replace("Quals", "Qualification Match");
				
				// matchEl.querySelector('.alliance-color').innerText = capitalize(m.alliance_color);
				
				if (m.tournament_level > 1) {
					const _ = m.match_key.match(/E(\d{1,2})\d{2}-/);
					matchUrl = `https://ftc-events.firstinspires.org/${ftcSeason}/${ftcEventKey}/playoff/${_[1]}/1`;

				} else {
					matchUrl = `https://ftc-events.firstinspires.org/${ftcSeason}/${ftcEventKey}/qualifications/`+m.match_name.replace("Quals ", "");
				}
				// matchEl.querySelector('.match-link').setAttribute('href', matchUrl);
		
				if (m.red_score == -1) {
					if (!!m.scheduled_time) {
						let scheduledTime = luxon.DateTime.fromISO(m.scheduled_time);//.plus({hours:5});
						cardBody.addClass('text-secondary mb-3').append(
							h(5, `Scheduled for ${scheduledTime.toFormat('t')}`)
						);
						outcomeIcon.addClass('fa-question');

						// matchEl.querySelector('.scheduled-time .time').innerText = scheduledTime.toFormat('t');
						// matchEl.querySelector('.scheduled-time').classList.remove('d-none');
					}
					
					
				} else {
					
					if (m.alliance_color == m.winning_alliance) {
						matchSummary.append(
							span(' &bull; Win')
						);
						outcomeIcon.addClass('fa-thumbs-up');
						// matchEl.querySelector('.match-outcome').innerText = "Win";
						// matchEl.querySelector('.thumb-icon').classList.add('fa-thumbs-up');
					} else {
						matchSummary.append(
							span(' &bull; Loss')
						);
						outcomeIcon.addClass('fa-thumbs-down');
// 
// 						matchEl.querySelector('.match-outcome').innerText = "Loss";
// 						matchEl.querySelector('.thumb-icon').classList.add('fa-thumbs-down');
					}
					
					if (m.alliance_color == "red") {
						// matchEl.addClass('border-danger');
						outcomeIcon.addClass('text-danger');
						matchSummary.append(
							span(' &bull; '),
							a(`${m.red_score} to ${m.blue_score}`, matchUrl)
								.setAttribute('target', '_blank')
								.addClass('link-secondary link-underline-opacity-25 link-underline-opacity-100-hover link-underline-dark')
						);
						// matchEl.classList.add('border-danger');
						// matchEl.querySelector('.score-1').innerText = m.red_score;
						// matchEl.querySelector('.score-2').innerText = m.blue_score;
			
						partners = sortObjectArray(
							m.participants.filter((p) => /R[123]$/.test(p.match_participant_key)),
							(t) => +t.team_key
						);
						opponents = sortObjectArray(
							m.participants.filter((p) => /B[123]$/.test(p.match_participant_key)),
							(t) => +t.team_key
						);

			
					} else {
						// matchEl.addClass('border-primary');
						outcomeIcon.addClass('text-primary');

						matchSummary.append(
							span(' &bull; '),
							a(`${m.blue_score} to ${m.red_score}`, matchUrl).addClass('link-secondary link-underline-opacity-25 link-underline-opacity-100-hover link-underline-dark')
						);
						
						// matchEl.classList.add('border-primary');
						// matchEl.querySelector('.score-1').innerText = m.blue_score;
						// matchEl.querySelector('.score-2').innerText = m.red_score;
						
						partners = sortObjectArray(
							m.participants.filter((p) => /B[123]$/.test(p.match_participant_key)),
							(t) => +t.team_key
						);
						opponents = sortObjectArray(
							m.participants.filter((p) => /R[123]$/.test(p.match_participant_key)),
							(t) => +t.team_key
						);

						// if (m.participants.length > 4) {
						// } else {
						// 	
						// 	partner = m.participants.filter((p) => /B[12]$/.test(p.match_participant_key))[0];
						// 	opponents = m.participants.filter((p) => /R[12]$/.test(p.match_participant_key));
						// }
					}
					
					
				}
								
				cardBody.append(
					div().append(
						p('Partner' + (partners.length > 1 ? 's' : '')).addClass('fw-bold'),
						ul().append(
							partners.map((t) => 
								teamEntryForMatch(t)
							)
						),
						p('Opponents').addClass('fw-bold'),
						ul().append(
							opponents.map((t) => 
								teamEntryForMatch(t)
							)
						)

					)
				);
				
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
				
				el('#loadingMatches').hide();
				pageContent.append(matchEl);
				const additionalMatches = el('#additional-matches');
				if (additionalMatches.isValid) {
					pageContent.append(
						additionalMatches.children().map((e) => e.setStyle('order', '1000'))
					);
				}
				// document.querySelector('#matches').append(matchEl);
			});
			
			
			
			// if (!!match && match.length > 0) {
			// 	document.querySelector("#rank").innerText = toOrdinal(match[0].rank);
			// 	document.querySelector("#num-quals").innerText = match[0].wins + match[0].losses;
			// 	document.querySelector("#rank-row").classList.remove('loading');
			// } else {
			// 	document.querySelector("#rank-message").innerText = "Rankings are not yet available";
			// 	document.querySelector("#rank-row").classList.remove('loading');
			// 	
			// }
		})
	})
	.catch(error => console.error(error));
	
	

}
	
function toOrdinal(n) {
	if (n == 11) {
		return '11th';
	} else if (/1$/.test(n)) {
		return `${n}st`;
	} else if (/2$/.test(n)) {
		return `${n}nd`;
	} else if (/3$/.test(n)) {
		return `${n}rd`;
	} else {
		return `${n}th`;
	}
}
