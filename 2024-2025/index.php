<?php
	error_reporting(E_ERROR);
	$private = $_GET['pwd'] == "6729";
?><html>
	<head>
		<title>2024-2025: Into The Deep</title>
		<?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/header.php"; ?>
  
	</head>
	<body>
		<?php include "{$_SERVER['DOCUMENT_ROOT']}/includes/navbar.php"; ?>

		<div class="position-relative h-20rem">
			<div class="img-header"></div>
			<div class="position-absolute start-0 end-0 text-white text-center" style="bottom:1rem;">
				<h2>DCS Defenders Robotics #15815</h2>
				<h1 class="display-3 text-shadow-3">Into The Deep</h1>			
			</div>
		</div>	
		
		<div class="p-3 pb-md-2 d-flex flex-wrap justify-content-center align-items-start bg-dark text-white gap-4">
			<div class="d-flex flex-column align-items-center gap-1 col-1 cursor-pointer" onclick="self.location.href='#bot'">
				<i class="fa-solid fa-robot-astromech fa-2x"></i>
				<span class="d-none d-md-block">Bot</span>
			</div>
			<div class="d-none flex-column align-items-center gap-1 col-1 cursor-pointer" onclick="self.location.href='#team'">
				<i class="fa-solid fa-users fa-2x"></i>
				<span class="d-none d-md-block">Team</span>
			</div>
			<div class="d-flex flex-column align-items-center gap-1 col-1 cursor-pointer" onclick="self.location.href='#season'">
				<i class="fa-solid fa-calendar fa-2x"></i>
				<span class="d-none d-md-block">Season</span>
			</div>
			<div class="d-flex flex-column align-items-center gap-1 col-1 cursor-pointer" onclick="self.location.href='#game'">
				<i class="fa-solid fa-hexagon-image fa-2x"></i>
				<span class="d-none d-md-block">Game</span>
			</div>
			<div class="d-flex flex-column align-items-center gap-1 col-1 cursor-pointer" onclick="self.location.href='#organization'">
				<i class="fa-solid fa-sitemap fa-2x"></i>
				<span class="d-none d-md-block">Organization</span>
			</div>
		
		</div>
		
		<div class="p-3 p-md-5 mt-0 gap-3 d-flex flex-column flex-sm-row justify-content-sm-center align-items-start ">
		
			
			<div class="d-flex flex-column text-white rounded rounded-4 bg-black-10 p-4 align-items-center" style="max-width: 50rem; background: ">
				<h5 class="w-auto text-headline fw-normal fs-2 fw-normal text-align-center d-inline-block text-shadow-1"><a name="bot">Meet Our Bot</a></h5>
				<table class="mt-md-3">
					<tbody class="text-white fs-5 align-text-top">
						<tr class="t">
							<td class="p-2 ps-0 text-end"><span class="badge bg-dark">Name</span></td>
							<td class="p-2">The Nautilus</td>
						</tr>
						<tr>
							<td class="p-2 ps-0 text-end"><span class="badge bg-dark">Drivetrain</span></td>
							<td class="p-2">four wheel mecanum, each wheel powered by a REV HD Hex motor with UltraPlanetary Gearbox and 90 Degree Gearbox</td>
						</tr>
						<tr>
							<td class="p-2 ps-0 text-end"><span class="badge bg-dark">Shoulder</span></td>
							<td class="p-2">double-sided gear and chain-driven rotation joint, powered by twin REV HD Hex motors with UltraPlanetary Gearbox and 90 Degree Gearbox</td>
						</tr>
						<tr>
							<td class="p-2 ps-0 text-end"><span class="badge bg-dark">Arm</span></td>
							<td class="p-2">double-sided chain-driven linear extension powered by twin REV HD Hex motors with UltraPlanetary Gearbox</td>
						</tr>
						<tr>
							<td class="p-2 ps-0 text-end"><span class="badge bg-dark">Wrist</span></td>
							<td class="p-2">single servo and spring pivot joint, with physical limits</td>
						</tr>
						<tr>
							<td class="p-2 ps-0 text-end"><span class="badge bg-dark">Intake</span></td>
							<td class="p-2">dual continuous-rotation servos powering compliant wheels</td>
						</tr>
						<tr>
							<td class="p-2 ps-0 text-end"><span class="badge bg-dark">Ascent</span></td>
							<td class="p-2">double set of 3D-printed rung hooks, attached to the robot's arm</td>
						</tr>
						
						<tr class="d-none">
							<td class="p-2 ps-0 text-end"><span class="badge bg-dark">Vision</span></td>
							<td class="p-2">triple detection zone with mean saturation comparison, powered by Aluratek Ultra 2K Live camera and VisionPortal</td>
						</tr>
						<tr class="t d-none">
							<td class="p-2 ps-0 text-end"><span class="badge bg-dark">Awards</span></td>
							<td class="p-2">Innovate Award 2nd place (Kentwood), Motivate Award 3rd place (Fruitport)</td>
						</tr>
		
					</tbody>
				</table>
			</div>
			<div class="d-flex flex-basis-sm-20rem p-2 flex-column  align-items-center">				
				<img src="/images/robots/intothedeep/front_perspective.png" class="w-100 rounded"/>
			</div>
			<div class="d-flex flex-basis-sm-20rem flex-column  align-items-center">				
				<img src="/images/robots/intothedeep/back_perspective.png" class="w-100 bg-white p-1 rounded"/>
			</div>
			
		</div>
		
		<div class="d-flex flex-column p-3 p-md-5 gap-2 justify-content-center align-items-center bg-dark bg-opacity-50">
			<h5 class="w-auto text-headline text-align-center text-md-start fw-normal fs-2 text-white fw-normal d-inline-block text-shadow-1"><a name="season">Our Season</a></h5>
			
			<div class="d-flex m-md-0 gap-3 flex-wrap justify-content-center w-100">
				<div class="card bg-warning flex-grow-1 flex-lg-grow-0 flex-basis-md-30rem">
					<div class="card-body p-4 d-flex gap-3">
						<i class="fa-duotone fa-calendar-star fa-3x text-dark"></i>
						<div>
							<div class="fw-bold text-black-50"><span class="fs-5">Fruitport Qualifier</span><br/><span>11/23/24</span></div>
							<ul class="mt-2 mb-0 pb-0">
								<li>Stay tuned!</li>
							</ul>
						</div>	
					</div>
					<div class="card-footer d-none gap-2">
						<button onclick="window.open('https://www.twitch.tv/theorangealliance3');" target="_new" class="btn btn-secondary btn-sm">Live Stream</button>
						<button onclick="window.open('https://ftc-events.firstinspires.org/2023/USMIFRQ2');" target="_new" class="btn btn-secondary btn-sm">FTC Event Results</button>
						<button onclick="window.open('https://theorangealliance.org/events/2324-FIM-FRQ2/');" target="_new" class="btn btn-secondary btn-sm">Orange Alliance Results</button>
		
					</div>
				</div>
				<div class="card bg-warning flex-grow-1 flex-lg-grow-0 flex-basis-md-30rem">
					<div class="card-body p-4 d-flex gap-3">
						<i class="fa-duotone fa-calendar-star fa-3x text-dark"></i>
						<div>
							<div class="fw-bold text-black-50"><span class="fs-5">Kentwood Qualifier</span><br/><span>11/2/24</span></div>
							<ul class="mt-2 mb-0 pb-0">
								<li>Stay tuned!</li>
							</ul>
						</div>
				
					</div>
					<div class="card-footer d-flex gap-2">
						<button onclick="window.open('https://www.twitch.tv/theorangealliance3');" target="_new" class="btn btn-secondary btn-sm">Live Stream</button>
						<button onclick="window.open('https://ftc-events.firstinspires.org/2024/USMIKEQ');" target="_new" class="btn btn-secondary btn-sm">FTC Event Results</button>
						<button onclick="window.open('https://theorangealliance.org/events/2324-FIM-FRQ2/');" target="_new" class="btn btn-secondary btn-sm d-none">Orange Alliance Results</button>
					
					</div>

					<div class="card-footer d-none gap-2">
						<button onclick="self.location.href='/2023-2024/events/kentwood/';" target="_self" class="btn btn-secondary btn-sm">Event Details</button>
		
		
					</div>
				</div>
				<div class="card bg-warning flex-grow-1 flex-lg-grow-0 flex-basis-md-30rem">
					<div class="card-body p-4 d-flex gap-3">
						<i class="fa-duotone fa-hockey-sticks fa-3x text-dark"></i>
						<div>
							<div class="fw-bold text-black-50"><span class="fs-5">Scrimmage with Calvin Christian and Potter's House </span><br/><span>10/26/24</span></div>
							<ul class="mt-2 mb-0 pb-0 d-none">
								<li>Ranked 9th after 39 qualifying matches</li>
								<li>Ranked 5th by OPR</li>
								<li>First pick by Alliance 3</li>
								<li>Design Award winner</li>
							</ul>
						</div>
				
					</div>
					<div class="card-footer d-none">
						<button onclick="window.open('https://ftc-events.firstinspires.org/2022/USMIKEQx');" target="_new" class="btn btn-secondary btn-sm">FTC Event Results</button>
						<button onclick="window.open('https://theorangealliance.org/events/2223-FIM-MKFQ/');" target="_new" class="btn btn-secondary btn-sm">Orange Alliance Results</button>
				
				
					</div>
				</div>
				
			</div>
		</div>

		<div class="d-flex align-items-center justify-content-center flex-column p-3 p-md-5">
			<h5 class="w-auto text-headline fw-normal fs-2 text-white fw-normal text-align-center d-inline-block text-shadow-1"><a name="game">Meet the Game</a></h5>
		
			<div class="d-flex gap-3 mt-3 flex-column flex-md-row align-items-md-start justify-content-md-center">
				<div class="d-flex flex-basis-sm-40rem p-2 flex-column bg-white align-items-center rounded">
					<img src="/images/intothedeep_logo.png" class="" style="max-height:10rem;width:auto;aspect-ratio:inherit;"/>
					<img src="/images/intothedeep_field.png" class="w-100"/>
				</div>
				<div class="card flex-basis-auto flex-basis-sm-40rem">
					<div class="card-body p-4">
						
						<h3 class="card-title fw-bold">2024-2025 Season Resources</h3>
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-circle-play fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://www.youtube.com/watch?v=ewlDPvRK4U4" target="_blank">Description of the Game</a></div>
								<div class="small text-secondary role-label">This video gives an overview of how the season's game is played.</div>
							</div>
						</div>
				
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-book fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://ftc-resources.firstinspires.org/file/ftc/game/manual" target="_blank">Competition Manual</a></div>
								<div class="small text-secondary role-label">This manual describes the general setup and play of the game.</div>
							</div>
						</div>
						<div class="d-none gap-3 mt-4">
							<div><i class="fa-duotone fa-book fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://firstinspiresst01.blob.core.windows.net/first-in-show-ftc/game-manual-part-2-traditional.pdf" target="_blank">Game Manual, Part 2</a> (traditional events)</div>
								<div class="small text-secondary role-label">The second part of the game manual covers the specifics of the CenterStage game, and is the authoritative source for rules.</div>
							</div>
						</div>
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-file-pdf fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://ftc-resources.firstinspires.org/file/ftc/game/game-one-page" target="_blank">One Page Game Description</a></div>
								<div class="small text-secondary role-label">This document is a quick summary of how the game is played and, more importantly, a summary of how points can be scored.</div>
							</div>
						</div>
						
						<div class="d-none gap-3 mt-4">
							<div><i class="fa-duotone fa-calculator fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://ftc-scoring.firstinspires.org/scoreCalculator" target="_blank">Match Score Calculator</a></div>
								<div class="small text-secondary role-label">Developed by FTC, this webpage allows you to quickly calculate an overall score for a CenterStage match. Note that when using this, you must manually count the number of "mosaics" created on the backdrop.</div>
							</div>
						</div>
		
						<div class="d-none gap-3 mt-4">
							<div><i class="fa-duotone fa-calculator fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://cyberknights.pages.team195.com/ftc/center-stage-score-calculator/" target="_blank">Pixel Backdrop Score Calculator</a></div>
								<div class="small text-secondary role-label">Developed by an FTC team mentor, this tool allows you to quickly calculate a game's pixel point score. Scores are calculated by visually "placing" pixels of different colors on a virtual backdrop. This means that the calculator will help you in determining how many "mosaics" have been created.</div>
							</div>
						</div>
						
						
		
						
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-messages-question fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://ftc-qa.firstinspires.org/" target="_blank">FTC Question and Answer System</a></div>
								<div class="small text-secondary role-label">This board is considered the official place to get answers to questions about the rules, gameplay, or strategy.</div>
							</div>
						</div>
				
				
				
				
				
						<div class="d-none">
							<div class="d-flex gap-3 mt-4">
								<div><i class="fa-duotone fa-book fa-3x text-secondary fa-fw"></i></div>
								<div>
									<div><a href="https://www.firstinspires.org/sites/default/files/uploads/resource_library/ftc/game-manual-part-1-traditional-events.pdf" target="_blank">Game Manual, Part 1</a> (traditional events)</div>
									<div class="small text-secondary role-label">The first part of the game manual covers general topics of how FTC competitions are run.</div>
								</div>
							</div>
							
				
							
							
							<div class="d-flex gap-3 mt-4">
								<div><i class="fa-duotone fa-trophy fa-3x text-secondary fa-fw"></i></div>
								<div>
									<div><a href="https://www.firstinspires.org/sites/default/files/uploads/resource_library/ftc/award-descriptions.pdf" target="_blank">FTC Award Criteria</a></div>
									<div class="small text-secondary role-label">This document describes the criteria for the different awards that an FTC team can win throughout the season.</div>
								</div>
							</div>
							
							<div class="d-flex gap-3 mt-3">
								<div><i class="fa-duotone fa-books fa-3x text-secondary fa-fw"></i></div>
								<div>
									<div><a href="https://www.firstinspires.org/resource-library/ftc/game-and-season-info" target="_blank">FTC Resource Library</a></div>
									<div class="small text-secondary role-label">This page is the definitive place to find information or resources for this year's game.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
			</div>
		</div>

		<div class="d-flex align-items-center justify-content-center flex-column p-3 p-md-5 bg-dark bg-opacity-50">
			<h5 class="w-auto text-headline fw-normal fs-2 text-white fw-normal text-align-center d-inline-block text-shadow-1 mb-3"><a name="organization">Our Team Organization</a></h5>
			<div class="d-flex align-items-start flex-column flex-md-row">
				<div class="col-12 col-md-4 mt-3 p-2 bg-white d-none">
					<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/ek_team_2022-11-04.jpg" alt="Photo of the DCS Robotics team at the East Kentwood qualifier on November 4, 2022." class="w-100"/></a>
				</div>
				<div class="d-flex gap-3 flex-column flex-md-row justify-content-sm-center flex-wrap flex-grow-md-1">
					<div class="card flex-basis-sm-25rem">
						<div class="card-body text-secondary">
							<h5 class="card-title d-flex align-items-center justify-content-between text-dark fw-bold">
								<span>Programming Team</span>
								<i class="fa-duotone fa-rectangle-terminal fa-3x text-secondary"></i>
							</h5>
							<p class="">Tutorials, resources, and instructions for members of the programming team&mdash;or anyone interested in learning more about programming an FTC robot.</p>
							<div class="">
								<a href="/2024-2025/teams/programming" class="btn btn-warning text-dark">Go</a>
							</div>
		
						</div>
						<? if ($private) { ?>
						<div class="card-footer pt-3 team-members">
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Cin M.</div>
									<div class="small text-secondary role-label">7th Grade</div>
								</div>
							</div>
		
							<div class="team-member">
								<div><i class="fa-duotone fa-user-vneck fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Matt Roberts</div>
									<div class="small text-secondary role-label">Coach</div>
								</div>
		
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Whit R.</div>
									<div class="small text-secondary role-label">7th Grade</div>
								</div>
							</div>
		
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Luke S.</div>
									<div class="small text-secondary role-label">8th Grade</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Kenny Z.</div>
									<div class="small text-secondary role-label">7th Grade</div>
								</div>
							</div>
		
		
						</div>
						<? } ?>
					</div>
					<div class="card flex-basis-sm-25rem">
						<div class="card-body text-secondary">
							<h5 class="card-title d-flex align-items-center justify-content-between text-dark">
								<span>Build Team</span>
								<i class="fa-duotone fa-gears fa-3x text-secondary"></i>
							</h5>
							<p class="">Information on construction and design aspects of FTC robots.</p>
							<div class="d-none">
								<a href="/2023-2024/teams/mechanical" class="btn btn-warning text-dark">Go</a>
							</div>
						</div>
						<? if ($private) { ?>
						<div class="card-footer pt-3 team-members">
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Connor G.</div>
									<div class="small text-secondary role-label">7th Grade</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Levi H.</div>
									<div class="small text-secondary role-label">8th Grade</div>
								</div>
							</div>
		
							
		
							<div class="team-member">
								<div><i class="fa-duotone fa-user-vneck fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Joe Klynstra</div>
									<div class="small text-secondary role-label">Mentor</div>
								</div>
							</div>
							
							<div class="team-member">
								<div><i class="fa-duotone fa-user-vneck fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Levi Roodvoets</div>
									<div class="small text-secondary role-label">Mentor</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Will V.</div>
									<div class="small text-secondary role-label">7th Grade</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Channing V.S.</div>
									<div class="small text-secondary role-label">8th Grade</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Annelise W.</div>
									<div class="small text-secondary role-label">8th Grade</div>
								</div>
							</div>
						</div>
						<? } ?>
					</div>
					<div class="card flex-basis-sm-25rem">
						<div class="card-body text-secondary">
							<h5 class="card-title d-flex align-items-center justify-content-between text-dark">
								<span>Marketing &amp; Promotions Team</span>
								<i class="fa-duotone fa-megaphone fa-3x text-secondary"></i>
							</h5>
							<p class="">In charge of pit design, sponsorships, fundraising, apparel design, and other public elements of the team.</p>
							<div class="d-none">
								<a href="/teams/mechanical" class="btn btn-warning text-dark">Go</a>
							</div>
						</div>
						<? if ($private) { ?>
						<div class="card-footer pt-3 team-members">
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Joslyn D.H.</div>
									<div class="small text-secondary role-label">?th Grade</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Abby D.V.</div>
									<div class="small text-secondary role-label">7th Grade</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user-vneck fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Jackie DeVries</div>
									<div class="small text-secondary role-label">Mentor</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user-vneck fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Michele Hoffman</div>
									<div class="small text-secondary role-label">Mentor</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Grace K.</div>
									<div class="small text-secondary role-label">8th Grade</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user-vneck fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Mark Rottman</div>
									<div class="small text-secondary role-label">Mentor</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Ike V.K.</div>
									<div class="small text-secondary role-label">8th Grade</div>
								</div>
							</div>

		
						</div>
						<? } ?>
					</div>
					<div class="card flex-basis-sm-25rem">
						<div class="card-body text-secondary">
							<h5 class="card-title d-flex align-items-center justify-content-between text-dark">
								<span>Strategy Team</span>
								<i class="fa-duotone fa-chess fa-3x text-secondary"></i>
							</h5>
							<p class="">Responsible for high-level game strategy, oversight of competition scouting, and field management.</p>
							<div>
								<a href="/teams/strategy" class="btn btn-warning text-dark d-none">Go</a>
							</div>
						</div>
						<? if ($private) { ?>
						<div class="card-footer pt-3 team-members">
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Jack R.</div>
									<div class="small text-secondary role-label">7th Grade</div>
								</div>
							</div>					
		
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Gage R.</div>
									<div class="small text-secondary role-label">8th Grade</div>
								</div>
							</div>					
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Taylor R.</div>
									<div class="small text-secondary role-label">8th Grade</div>
								</div>
							</div>					
							<div class="team-member">
								<div><i class="fa-duotone fa-user-vneck fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Dan VanKalker</div>
									<div class="small text-secondary role-label">Mentor</div>
								</div>
							</div>
		
						</div>	
						<? } ?>
					</div>
					<div class="card flex-basis-sm-25rem">
					
						<div class="card-body text-secondary">
							<h5 class="card-title d-flex align-items-center justify-content-between text-dark">
								<span>Drive Team</span>
								<i class="fa-duotone fa-steering-wheel fa-3x text-secondary"></i>
							</h5>
							<p class="">Responsible for play of the game during competitions.</p>
							<div>
								<a href="/teams/strategy" class="btn btn-warning text-dark d-none">Go</a>
							</div>
						</div>
						<? if ($private) { ?>	
		
						<div class="card-footer pt-3 team-members">
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Whit R.</div>
									<div class="small text-secondary role-label">7th Grade</div>
									<div class="small text-secondary role-label">Drive Team B</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Gage R.</div>
									<div class="small text-secondary role-label">8th Grade</div>
									<div class="small text-secondary role-label">Drive Team A</div>
								</div>
								
							</div>					
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Channing V.S.</div>
									<div class="small text-secondary role-label">8th Grade</div>
									<div class="small text-secondary role-label">Drive Team A</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Kenny Z.</div>
									<div class="small text-secondary role-label">7th Grade</div>
									<div class="small text-secondary role-label">Drive Team B</div>
								</div>
							</div>

						</div>
						<? } ?>
					</div>
		
					<? if ($private) { ?>	
		
					<div class="card flex-basis-sm-25rem">
						<div class="card-body text-secondary">
							<h5 class="card-title d-flex align-items-center justify-content-between text-dark">
								<span>Other</span>
								<i class="fa-duotone fa-asterisk fa-3x text-secondary"></i>
							</h5>
							<p class="">Coming Soon</p>
							<div>
								<a href="/teams/strategy" class="btn btn-warning text-dark d-none">Go</a>
							</div>
						</div>
						<div class="card-footer pt-3 team-members">
							<div class="team-member">
								<div><i class="fa-duotone fa-user-vneck fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Mike Faber</div>
									<div class="small text-secondary role-label">Coach</div>
								</div>
							</div>
							<div class="team-member">
								<div><i class="fa-duotone fa-user fa-2x text-opacity-50 text-body fa-fw"></i></div>
								<div>
									<div class="text-dark">Gabe M.</div>
									<div class="small text-secondary role-label">8th Grade</div>
								</div>
							</div>
		
					
						</div>
					</div>
					<? } ?>
		
				</div>
			</div>
		</div>
<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/footer.php"; ?>
		<script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/photoModal.php"; ?>				
	</body>
</html>