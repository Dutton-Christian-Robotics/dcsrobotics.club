<html>
	<head>
		<title>Fruitport Qualifier, 11/23/24</title>
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
				<h1 class="display-3 text-shadow-3">Fruitport Qualifier, 11/23/24</h1>			
			</div>
		</div>
		

		
	<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/footer.php"; ?>
	
		<script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		
		<script type="module">
			import { loadData } from "/includes/ftc_event.js";
			loadData("2425-FIM-FRQ2", {
				"alliance": "Picked as partner for Alliance 3",
				"ending": "Member of the 2nd place alliance",
				"superlative": "Team with highest end game ascent average across all matches.",
				"awards": [
					"Third place, Inspire Award"
				],
				"advancement": "Advanced to the State Championship"
			}, {
				"ftcSeason": "2024",
				"ftcEventKey": "USMIFRQ2"
			}
			
		);
		</script>

	</body>
</html>