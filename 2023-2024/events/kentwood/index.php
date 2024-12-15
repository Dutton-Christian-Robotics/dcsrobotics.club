<html>
	<head>
		<title>Kentwood Qualifier, 11/4/23</title>
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
				<h1 class="display-3 text-shadow-3">Kentwood Qualifier, 11/4/23</h1>			
			</div>
		</div>
		

		
	<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/footer.php"; ?>
	
		<script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		
		<script type="module">
			import { loadData } from "/includes/ftc_event.js";
			loadData("2324-FIM-KEQ", {
				"captain": "Captain of Alliance 3",
				"awards": [
					"Second place, Innovate Award"
				]
			}, {
				"ftcSeason": "2023",
				"ftcEventKey": "USMIKEQ"
			}, {
				"2324-FIM-KEQ-Q001-1": "https://www.youtube.com/embed/KkevLo5YOhU?si=ozoKtyj9cpfAez9T",
				"2324-FIM-KEQ-Q010-1": "https://www.youtube.com/embed/zmG6CRx-v_Q?si=cNDjlChTqlwSoCm7",
				"2324-FIM-KEQ-Q020-1": "https://www.youtube.com/embed/_uJ-sehOIRw?si=3lT1FO0KKQw2nmUr",
				"2324-FIM-KEQ-Q030-1": "https://www.youtube.com/embed/9n5swKGawpM?si=9D5HJMlr4qJWpPL4",
				"2324-FIM-KEQ-Q038-1": "https://www.youtube.com/embed/35emJ2i1OnU?si=hPgdQf7W5NHXCzIo",
				"2324-FIM-KEQ-Q047-1": "https://www.youtube.com/embed/IBDmphPbeqU?si=BVjHMRz7DFjOXJpl",
				"2324-FIM-KEQ-E201-1": "https://www.youtube.com/embed/hrBQxRAZslY?si=dGIbKiFshCxOo2Rp",
				"2324-FIM-KEQ-E202-1": "https://www.youtube.com/embed/cECZK33izXo?si=T6pNLJuYxyQkYv6k"
				
			}
			
		);
		</script>

	</body>
</html>