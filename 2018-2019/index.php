<?
	error_reporting(E_ERROR);
	$private = $_GET['pwd'] == "6729";
?><html>
	<head>
		<title>DCS Defenders Robotics</title>
		<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/header.php"; ?>
  
	</head>
	<body>
		<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/navbar.php"; ?>

		<div class="position-relative h-20rem">
			<div class="img-header"></div>
			<div class="position-absolute start-0 end-0 text-white text-center" style="bottom:1rem;">
				<h2>DCS Defenders Robotics #15815</h2>
				<h1 class="display-3 text-shadow-3">Rover Ruckus</h1>			
			</div>
		</div>		

		<div class="p-3 p-md-5 mt-0 d-none gap-3 flex-column flex-sm-row justify-content-sm-center align-items-start">
	
			
			<div class="d-flex flex-column text-white ">
				<h5 class="w-auto text-headline fw-normal fs-2 fw-normal text-align-center d-inline-block text-shadow-1">Meet Our Bot</h5>
				<table class="mt-md-3">
					<tbody class="text-white fs-5 align-text-top">
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Name</span></td>
							<td class="p-2">Edward Scissorlift, aka "Eddy"</td>
						</tr>
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Drivetrain</span></td>
							<td class="p-2">four wheel mecanum, each wheel powered by a REV HD Hex motor with UltraPlanetary Gearbox, geared at 12:1</td>
						</tr>
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Lift</span></td>
							<td class="p-2">double-sided chain-driven scissorlift, powered by twin REV HD Hex motors with UltraPlanetary Gearbox, geared at 60:1</td>
						</tr>
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Grabber</span></td>
							<td class="p-2">servo-powered claw, with rubber bands and 3D-printed fingers</td>
						</tr>
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Awards</span></td>
							<td class="p-2">Design Award 1st place (Kentwood), Design Award 2nd place (Fruitport), Innovation Award 3rd place (Fruitport)</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="d-flex flex-basis-sm-20rem p-2 flex-column bg-white align-items-center">				
				<img src="/images/powerplay_edward1.jpg" class="w-100"/>
			</div>
			<div class="d-flex flex-basis-sm-20rem flex-column bg-white align-items-center">				
				<img src="/images/edward_cad1.jpg" class="w-100"/>
			</div>
			<div class="d-flex flex-basis-sm-20rem flex-column bg-white align-items-center">				
				<img src="/images/edward_cad2.jpg" class="w-100"/>
			</div>
			
		</div>

		<div class="p-3 py-md-4 d-none flex-row flex-wrap justify-content-center gap-3 bg-dark align-items-center">
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fruitport22/picture_001.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fruitport22/picture_002.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fruitport22/picture_003.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fruitport22/picture_004.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fruitport22/picture_005.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fruitport22/picture_006.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fruitport22/picture_007.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
		</div>


		
		<div class="p-3 py-md-4 d-none flex-row flex-wrap justify-content-center gap-3 bg-dark align-items-center">
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_000.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_001.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_002.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_003.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_004.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_005.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_006.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_007.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
		</div>
		


		<div class="d-flex align-items-center justify-content-center flex-column p-3 p-md-5">
			<h5 class="w-auto text-headline fw-normal fs-2 text-white fw-normal text-align-center d-inline-block text-shadow-1">Meet the Game</h5>

			<div class="d-flex gap-3 mt-3 flex-column flex-md-row align-items-md-start justify-content-md-center">
				<div class="d-flex flex-basis-sm-40rem p-2 flex-column bg-white align-items-center rounded">
					<img src="/images/rover_ruckus_logo.jpg" class="w-50"/>
					<img src="/images/rover_ruckus_field.jpg" class="w-100"/>
				</div>
				<div class="card flex-basis-auto flex-basis-sm-40rem">
					<div class="card-body p-4">
						
						<h3 class="card-title fw-bold">2018-2019 Season Resources</h3>
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-circle-play fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://www.youtube.com/watch?v=rR4gR4l2XA8" target="_blank">Description of the Game</a></div>
								<div class="small text-secondary role-label">This video gives an overview of how the season's game is played.</div>
							</div>
						</div>
				
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-book fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://www.firstinspires.org/sites/default/files/uploads/resource_library/ftc/2018-2019/game-manual-part-1.pdf" target="_blank">Game Manual, Part 1</a></div>
								<div class="small text-secondary role-label">The first part of the game manual covers general topics of how FTC competitions are run.</div>
							</div>
						</div>
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-book fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://www.firstinspires.org/sites/default/files/uploads/resource_library/ftc/2018-2019/game-manual-part-2.pdf" target="_blank">Game Manual, Part 2</a></div>
								<div class="small text-secondary role-label">The second part of the game manual covers the specifics of the Rover Ruckus game, and is the authoritative source for rules.</div>
							</div>
						</div>
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-file-pdf fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://www.firstinspires.org/sites/default/files/uploads/resource_library/ftc/2018-2019/first-ftc-spectatorflyer19-ft031-ltr.pdf" target="_blank">One Page Game Description</a></div>
								<div class="small text-secondary role-label">This document is a quick summary of how the game is played and, more importantly, a summary of how points can be scored.</div>
							</div>
						</div>
						
						
						<div class="d-none gap-3 mt-4">
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
		
		<div class="p-3 py-md-4 d-flex flex-row flex-wrap justify-content-center gap-3 bg-dark align-items-center">
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_000.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_001.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_002.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_003.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_004.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_005.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_006.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_007.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
		</div>
		
		<div class="d-flex align-items-center justify-content-center flex-column p-3 p-md-5">
			<h5 class="w-auto text-headline fw-normal fs-2 text-white fw-normal text-align-center d-inline-block text-shadow-1">Meet the Team</h5>
			<div class="d-flex justify-content-center flex-column flex-md-row">
				<div class="col-12 col-md-4 mt-3 p-2 bg-white">
					<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_014.jpg" alt="Photo of the DCS Robotics team at the Gull Lake event on May 18, 2019." class="w-100"/></a>
				</div>
			</div>
		</div>		
		
		<div class="d-flex flex-column p-3 p-md-5 gap-2 justify-content-center align-items-center bg-dark bg-opacity-50">
			<h5 class="w-auto text-headline text-align-center text-md-start fw-normal fs-2 text-white fw-normal d-inline-block text-shadow-1">Our "Season"</h5>
			
			<div class="d-flex m-md-0 gap-3 flex-wrap justify-content-center w-100">
				<div class="card bg-warning flex-grow-1 flex-lg-grow-0 flex-basis-md-30rem">
					<div class="card-body p-4 d-flex gap-3">
						<i class="fa-duotone fa-calendar-star fa-3x text-dark"></i>
						<div>
							<div class="fw-bold text-black-50"><span class="fs-5">Gull Lake Post-Season Event</span><br/><span>5/18/19</span></div>
							<ul class="mt-2 mb-0 pb-0">
								<li>Our first competition ever</li>
								<li>Important lessons learned: robots need to be turned on, and robots can tip over.</li>
							</ul>
						</div>	
					</div>
					<div class="card-footer d-none">
						<button onclick="window.open('https://ftc-events.firstinspires.org/2022/USMIFRQ');" target="_new" class="btn btn-secondary btn-sm">FTC Event Results</button>
						<button onclick="window.open('https://theorangealliance.org/events/2223-FIM-MFFQ1/');" target="_new" class="btn btn-secondary btn-sm">Orange Alliance Results</button>
		
					</div>
				</div>
			</div>
		</div>
		
		<div class="p-3 py-md-4 d-flex flex-row flex-wrap justify-content-center gap-3 bg-dark align-items-center">
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_008.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_009.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_010.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_011.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_012.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_013.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_014.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_015.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_gulllake19/picture_016.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
		</div>
		
		
		
		
		<div class="p-4 mt-0 d-flex bg-dark bg-opacity-50 gap-3 flex-column flex-sm-row justify-content-sm-center align-items-start">

			<div class="card flex-basis-sm-25rem d-none">
				<div class="card-body text-secondary">
					<h3 class="card-title d-flex align-items-center justify-content-between text-dark">
						<span>8th Grade</span>
					</h3>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Angell Chekin</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Emersen Roodvoets</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Lauren VanLaan</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Bradley Bykerk</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Luca Balsitis</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Brayden Teitsma</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Ben ?</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Gavin Griffen</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Mason Rozema</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Lucas Beezhold</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Nate Cardosa</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Caleb Zoodsma</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Kate Koeman</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Milo Cravino</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Kyleigh Rottman</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>

				</div>
				
			</div>
			<div class="card flex-basis-sm-25rem d-none">
				<div class="card-body text-secondary">
					<h3 class="card-title d-flex align-items-center justify-content-between text-dark">
						<span>7th Grade</span>
					</h3>
					<div class="d-flex gap-2 mt-3">
						<div><i class="fa-duotone fa-user fa-3x text-opacity-50 text-body fa-fw"></i></div>
						<div>
							<div class="text-dark">Grant</div>
							<div class="small text-secondary role-label">?</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card flex-basis-sm-25rem d-none">
				<div class="card-body text-secondary">
					<h3 class="card-title d-flex align-items-center justify-content-between text-dark">
						<span>Unknown</span>
					</h3>
					
				</div>
			</div>


		</div>
<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/footer.php"; ?>
		<script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/photoModal.php"; ?>				
	</body>
</html>