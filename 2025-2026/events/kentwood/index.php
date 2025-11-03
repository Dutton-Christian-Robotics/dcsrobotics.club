<html>
	<head>
		<title>Kentwood Qualifier, 11/1/25</title>
		<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/header.php"; ?>
		<style>
			.if-loading {
				display: none;
			}
			.loading > .if-loading {
				display: flex;
			}
			.loading > *:not(.if-loading) {
				display: none;
			}
			
			#rank {
				font-weight: bold;
			}
		</style>
		<script src="https://cdn.jsdelivr.net/npm/luxon@3.5.0/build/global/luxon.min.js"></script>
	</head>
	<body>
		<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/navbar.php"; ?>

		<div class="position-relative h-20rem">
			<div class="img-header"></div>
			<div class="position-absolute start-0 end-0 text-white text-center" style="bottom:1rem;">
				<h2>DCS Defenders Robotics #15815</h2>
				<h1 class="display-3 text-shadow-3">Kentwood Qualifier, 11/1/25</h1>			
			</div>
		</div>
		

		
		
		
	<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/footer.php"; ?>
	
		<script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script type="module">
			import { loadData } from "/includes/ftc_event.js";
			loadData("2526-FIM-KEQ", {
				// "ending": "TBD!",
				"alliance": "Picked as partner for Alliance 2",
				"awards": [
					"First place, Think Award"
				],
				"advancement": "Advanced to the State Championship",
				"notStarted": {
					"fa-map-location": "East Kentwood High School, Freshman Campus",
					"fa-clock": "7am - 7pm",
					"fa-calendar-star": "Saturday November 1, 2025",
				}
			}, {
				"ftcSeason": "2025",
				"ftcEventKey": "USMIKEQ",
				"streamUrl": "https://www.youtube.com/watch?v=rNXn5fO0kLs",
				"eventInfo": "https://docs.google.com/document/d/e/2PACX-1vQl0g7kexs1imPOsSG1jGo6E1LN-AwiqwPKZRWvKUbLRr2NuWDTXoily3faqkBpIomYkgMNw8s-MhWu/pub"	
			}
			
		);
		</script>
	</body>
</html>