export class FtcEvent {
	seasonCode;
	eventCode;
	eventName;
	eventVenueName;
	eventAddress;
	eventCity;
	eventState;
	eventWebsite;
	regionCode;
	hasStarted;
	hasEnded;
	type;
	startDate;
	endDate;
	matches = new Map();
	teams = new Map();

	contructor() {

	}

	matchesForTeam(teamNumber) {
		return Array.from(this.matches.values()).filter((m) => m.hasTeam(teamNumber));
	}
	
	rankForTeam(teamNumber) {
		return this.team(teamNumber).eventRank();
	}
	
	team(teamNumber) {
		return this.teams.get(`${teamNumber}`);
	}
	
}

export class FtcMatch {
	id;
	ftcEvent;
	scheduledStartTime;	
	actualStartTime;
	scores;	
	series;	
	actualStartTime;	
	hasBeenPlayed;
	
	constructor() {

	}

	hasTeam(teamNumber) {
		return this.teams.some((t) => t.teamNumber == teamNumber);
	}

	team(teamNumber) {
		return this.teams.filter((t) => t.teamNumber == teamNumber);
	}

	withoutTeam(teamNumber) {
		return this.teams.filter((t) => t.teamNumber !== teamNumber);
	}

	opponents(teamNumber) {
		const x = this.team(teamNumber)[0];
		return this.teams.filter((t) => t.alliance !== x.alliance);
	}

	partners(teamNumber) {
		const x = this.team(teamNumber)[0];
		return this.teams.filter((t) => (t.alliance == x.alliance) && (t.teamNumber !== teamNumber));
	}
	
	isQualification() {
		return this.tournamentLevel == "Quals";
	}

	isTournament() {
		return this.tournamentLevel !== "Quals";
	}

	matchName() {
		return `${this.tournamentLevel.replace("Quals", "Qualification Match").replace("DoubleElim", "Tournament Match")} ${this.isTournament() ? this.series : this.id}`;
	}
	
	totalPointsRed() {
		if (this.hasBeenPlayed) {
			return this.scores.red.totalPoints;
		} else {
			return undefined;
		}
	}
	
	totalPointsBlue() {
		if (this.hasBeenPlayed) {
			return this.scores.blue.totalPoints;
		} else {
			return undefined;
		}
		
	}

	winningAlliance() {
		if (!this.scores) {
			return "";
		} else if (this.scores.red.totalPoints > this.scores.blue.totalPoints) {
			return "red";
		} else {
			return "blue";
		}
	}
	
	scheduledStartTimeAsLuxon() {
		return luxon.DateTime.fromISO(this.scheduledStartTime);
	}

}

export class FtcTeam {
	teamNumber;
	stats;
	
	eventRank() {
		if (Object.hasOwn(this, 'stats') && !!this.stats) {
			return this.stats.rank;
		} else {
			return "";
		}
	}
	
	
}

export class FtcMatchTeamInfo {
	match;
	alliance;
	station;
	teamNumber;
	allianceRole;
	isSurrogate;
	wasNoShow;
	wasOnField;
	
	isTeam(teamNumber) {
		return `${this.teamNumber}` == `${teamNumber}`;
	}
	
	isRed() {
		return /^r/i.test(this.alliance);
	}

	isBlue() {
		return /^b/i.test(this.alliance);
	}
	
	isWinningAlliance() {
		return this.alliance.toLowerCase() == this.match.winningAlliance().toLowerCase();
	}
}

export class FtcTeamEventStats {
	teamNumber
	team;
	rank;
	wins
	losses;
	ties;
}

class DataApi {

	baseUrl = "";
	seasonCode = "";
	
	eventFieldMapper = {};

	constructor() {}

	getEventMatches() {}

	getEvent() {}
	
	loadEvent() {}

}

export class FtcScoutApi extends DataApi {
	baseUrl = "https://api.ftcscout.org/rest/v1/";
	seasonCode = "";
	
	
	static eventFieldMapper = {
		"seasonCode": "season",
		"regionCode": "regionCode",
		"eventCode": "code",
		"eventName": "name",
		"eventVenue": "venue",
		"eventAddress": "address",
		"eventCity": "city",
		"eventState": "state",
		"type": "type",
		"eventWebsite": "website",
		"startDate": "start",
		"endDate": "end",
		"hasStarted": "started",
		"hasEnded": "finished",
	};
	
	static matchFieldMapper = {
		"id": "id",
		"hasBeenPlayed": "hasBeenPlayed",
		"scheduledStartTime": "scheduledStartTime",
		"actualStartTime": "actualStartTime",
		"tournamentLevel": "tournamentLevel",
		"series": "series",
		"teams": "teams",
		"scores": "scores"
	}
	
	static matchTeamInfoMapper = {
		"alliance": "alliance",
		"station": "station",
		"teamNumber": "teamNumber",
		"allianceRole": "allianceRole",
		"isSurrogate": "surrogate",
		"wasNoShow": "noShow",
		"wasOnField": "onField",
	}
	
	static teamEventStatsMapper = {
		"rank": "rank",
		"teamNumber": "teamNumber",
		"wins": "wins",
		"losses": "losses",
		"ties": "ties"	
	};
	
	static eventTeamMapper = {
		"teamNumber": "teamNumber",
		"stats": "stats"
	}

	constructor(opts = {}) {
		super();
		if (Object.hasOwn(opts, "seasonCode")) {
			this.seasonCode = opts.seasonCode;
		}
	}

	getEventMatchesData(eventCode, season = null) {
		season ??= this.seasonCode;
		return fetch(`${this.baseUrl}events/${season}/${eventCode}/matches`);
	}

	getEventData(eventCode, season = null) {
		season ??= this.seasonCode;
		return fetch(`${this.baseUrl}events/${season}/${eventCode}`);
	}

	getEventTeamsData(eventCode, season = null) {
		season ??= this.seasonCode;
		return fetch(`${this.baseUrl}events/${season}/${eventCode}/teams`);

	}

	getTeamData(teamCode) {
		return fetch(`${this.baseUrl}teams/${teamCode}`);

	}

	async createEvent(eventCode, season = null) {
		season ??= this.seasonCode;
		const json = await this.getEventData(eventCode, season).then((result) => result.json());

		const e = new FtcEvent();
		
		Object.entries(FtcScoutApi.eventFieldMapper).forEach(([a, b]) => {
			e[a] = json[b];
		});

		return e;
	}

	async addMatchesToEvent(event) {
		const matchData = await this.getEventMatchesData(event.eventCode, event.seasonCode).then((results) => results.json());
		matchData.forEach((x) => {
			const m = new FtcMatch();
			Object.entries(FtcScoutApi.matchFieldMapper).forEach(([a, b]) => {
				if (a == "teams") {
					m.teams = x[b].map((y) => {
						const s = new FtcMatchTeamInfo();
						s.match = m;
						Object.entries(FtcScoutApi.matchTeamInfoMapper).forEach(([c, d]) => {
							s[c] = y[d];
						});
						return s;
					});
				} else {
					m[a] = x[b];
					
				}
			});
			// console.debug(m);
			event.matches.set(m.id, m);
		});
	}

	async addTeamsToEvent(event) {
		const teamData = await this.getEventTeamsData(event.eventCode, event.seasonCode).then((results) => results.json());
		teamData.forEach((x) => {
			const t = new FtcTeam();
			Object.entries(FtcScoutApi.eventTeamMapper).forEach(([a, b]) => {
				if ((a == "stats") && !!x[b]) {
					const s = new FtcTeamEventStats();
					Object.entries(FtcScoutApi.teamEventStatsMapper).forEach(([c, d]) => {
						s[c] = x[b][d];
					});
					t.stats = s;
				} else {
					t[a] = x[b];
				}
			});
			
			// Object.assign(t, x);
			// console.debug(t);
			event.teams.set(`${t.teamNumber}`, t);
		});
	}
	
	async loadEvent(eventCode, season = null) {
		const event = await this.createEvent(eventCode, season);
		await this.addMatchesToEvent(event);
		await this.addTeamsToEvent(event);

		return event;
	}

}

// const api = new FtcScoutApi();
// 
// const e = await api.createEvent("2025", "USMIKEQ");
// const matchData = await api.getEventMatchesData("2025", "USMIKEQ").then((results) => results.json());
// matchData.forEach((x) => {
// const m = new FtcMatch();
// // m.ftcEvent = e;
// Object.assign(m, x);
// e.matches.set(m.id, m); 
// })
// 
// e.matches.get(3)