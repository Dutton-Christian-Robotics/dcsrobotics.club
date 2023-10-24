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
				<h1 class="display-3 text-shadow-3">SKYSTONE</h1>			
			</div>
		</div>		

		<div class="p-3 p-md-5 mt-0 d-flex gap-3 flex-column flex-sm-row justify-content-sm-center align-items-start">
	
			
			<div class="d-flex flex-column text-white ">
				<h5 class="w-auto text-headline fw-normal fs-2 fw-normal text-align-center d-inline-block text-shadow-1">Meet Our Bot</h5>
				<table class="mt-md-3">
					<tbody class="text-white fs-5 align-text-top">
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Name</span></td>
							<td class="p-2">Rocky</td>
						</tr>
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Drivetrain</span></td>
							<td class="p-2">four wheel mecanum powered by four NeveRest Classic 40 motors</td>
						</tr>
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Extension</span></td>
							<td class="p-2">linear slide</td>
						</tr>
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Tilt</span></td>
							<td class="p-2">single axis rotation powered by a REV Core Hex motor</td>
						</tr>
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Grabber 1</span></td>
							<td class="p-2">Original design: fixed-width stone slot with dual compliant wheel intake</td>
						</tr>
						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Grabber 2</span></td>
							<td class="p-2">Revised design: fixed-width stone slot with pivoting front hand, powered by a REV Core Hex motor</td>
						</tr>

						<tr>
							<td class="p-2 ps-0"><span class="badge bg-dark">Foundation<br/>Grabber</span></td>
							<td class="p-2">dual servo-powered, 3D-printed fingers</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="d-flex flex-basis-sm-20rem p-2 flex-column bg-white align-items-center">				
				<img src="/images/photos_fall19/rocky1.jpg" class="w-100"/>
			</div>
			<div class="d-flex flex-basis-sm-20rem p-2 flex-column bg-white align-items-center">				
				<img src="/images/photos_fall19/rocky2.jpg" class="w-100"/>
			</div>
			
		</div>

		<div class="d-flex flex-column p-3 p-md-5 gap-2 justify-content-center align-items-center bg-dark bg-opacity-50">
			<h5 class="w-auto text-headline text-align-center text-md-start fw-normal fs-2 text-white fw-normal d-inline-block text-shadow-1">Our Season</h5>
			
			<div class="d-flex m-md-0 gap-3 flex-wrap justify-content-center w-100">
				<div class="card bg-warning flex-grow-1 flex-lg-grow-0 flex-basis-md-30rem">
					<div class="card-body p-4 d-flex gap-3">
						<i class="fa-duotone fa-calendar-star fa-3x text-dark"></i>
						<div>
							<div class="fw-bold text-black-50"><span class="fs-5">MI State Championship, Battle Creek</span><br/><span>12/13/19 &ndash; 12/14/19</span></div>
							<ul class="mt-2 mb-0 pb-0">
								<li>Our first time at States&mdash;not bad for a team on its 1&frac12; / 2nd season!</li>
								<li>Ranked 9th in the Edison Division after qualification rounds</li>
							</ul>
						</div>	
					</div>
					<div class="card-footer d-flex">
						<button onclick="window.open('https://theorangealliance.org/events/1920-FIM-BC2/rankings');" target="_new" class="btn btn-secondary btn-sm">Orange Alliance Results</button>
				
					</div>
				</div>
		
				<div class="card bg-warning flex-grow-1 flex-lg-grow-0 flex-basis-md-30rem">
					<div class="card-body p-4 d-flex gap-3">
						<i class="fa-duotone fa-calendar-star fa-3x text-dark"></i>
						<div>
							<div class="fw-bold text-black-50"><span class="fs-5">Kentwood Qualifier</span><br/><span>11/2/19</span></div>
							<ul class="mt-2 mb-0 pb-0">
								<li>Placed 9th after the qualification rounds</li>
								<li>First pick for Alliance 2, captained by team 5960 (the Iron Dams), with second pick team 12845 (the Meteors)</li>
								<li>Members of the winning alliance</li>
								<li>Advanced to MI State Championship, Battle Creek</li>
							</ul>
						</div>	
					</div>
					<div class="card-footer d-flex">
						<button onclick="window.open('https://theorangealliance.org/events/1920-FIM-KFQ/rankings');" target="_new" class="btn btn-secondary btn-sm">Orange Alliance Results</button>
		
					</div>
				</div>
			</div>
		</div>

		<div class="p-3 py-md-4 d-flex flex-row flex-wrap justify-content-center gap-3 bg-dark align-items-center">
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_11.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_12.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_13.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_14.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_15.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_16.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_17.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_18.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_19.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_20.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
		</div>


		
		<div class="d-flex align-items-center justify-content-center flex-column p-3 p-md-5">
			<h5 class="w-auto text-headline fw-normal fs-2 text-white fw-normal text-align-center d-inline-block text-shadow-1">Meet the Game</h5>

			<div class="d-flex gap-3 mt-3 flex-column flex-md-row align-items-md-start justify-content-md-center">
				<div class="d-flex flex-basis-sm-40rem p-2 flex-column bg-white align-items-center rounded">
					<img src="/images/FIRST-Skystone-RGB_Primary-full-color.png" class="w-50"/>
					<img src="/images/skystone_field.jpg" class="w-100"/>
				</div>
				<div class="card flex-basis-auto flex-basis-sm-40rem">
					<div class="card-body p-4">
						
						<h3 class="card-title fw-bold">2019-2020 Season Resources</h3>
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-circle-play fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://www.youtube.com/watch?v=XiGB_8Ppnbs" target="_blank">Description of the Game</a></div>
								<div class="small text-secondary role-label">This video gives an overview of how the season's game is played.</div>
							</div>
						</div>
				
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-book fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://www.firstinspires.org/sites/default/files/uploads/resource_library/ftc/2019-2020/skystone-game-manual-part-1.pdf" target="_blank">Game Manual, Part 1</a></div>
								<div class="small text-secondary role-label">The first part of the game manual covers general topics of how FTC competitions are run.</div>
							</div>
						</div>
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-book fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://www.firstinspires.org/sites/default/files/uploads/resource_library/ftc/2019-2020/skystone-game-manual-part-2.pdf" target="_blank">Game Manual, Part 2</a></div>
								<div class="small text-secondary role-label">The second part of the game manual covers the specifics of the SKKYSTONE game, and is the authoritative source for rules.</div>
							</div>
						</div>
						<div class="d-flex gap-3 mt-4">
							<div><i class="fa-duotone fa-file-pdf fa-3x text-secondary fa-fw"></i></div>
							<div>
								<div><a href="https://www.firstinspires.org/sites/default/files/uploads/resource_library/ftc/2019-2020/ftc-spectator-flyer-fy20.pdf" target="_blank">One Page Game Description</a></div>
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
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_0.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_1.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_2.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_3.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_4.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
			<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/img_5.jpg" class="mh-6rem border border-3 border-white rounded"/></a>
		</div>
		
		
		<div class="d-flex align-items-center justify-content-center flex-column p-3 p-md-5">
			<h5 class="w-auto text-headline fw-normal fs-2 text-white fw-normal text-align-center d-inline-block text-shadow-1">Meet the Team</h5>
			<div class="d-flex justify-content-center flex-column flex-md-row">
				<div class="col-12 col-md-4 mt-3 p-2 bg-white">
					<a data-bs-toggle="modal" data-bs-target="#photoModal" class="cursor-pointer"><img src="/images/photos_fall19/team.jpg" alt="Photo of the DCS Robotics team at the state championship on December 14, 2019." class="w-100"/></a>
				</div>
			</div>
		</div>		
		
		
		
		
		
		<div class="p-4 mt-0 d-none bg-dark bg-opacity-50 gap-3 flex-column flex-sm-row justify-content-sm-center align-items-start">

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