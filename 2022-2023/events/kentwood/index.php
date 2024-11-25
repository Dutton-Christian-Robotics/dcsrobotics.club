<html>
	<head>
		<title>Kentwood Qualifier, 11/05/22</title>
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
				<h1 class="display-3 text-shadow-3">Kentwood Qualifier, 11/05/22</h1>			
			</div>
		</div>
		
		
	<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/footer.php"; ?>
	
		<script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		
		<script type="module">
			import { loadData } from "/includes/ftc_event.js";
			loadData("2223-FIM-MKFQ", {
				"awards": [
					"1st Place, Design Award",
				],
				"alliance": "First pick of Alliance 3",
				"superlative": "Ranked 5th by OPR"
			}, {
				"ftcSeason": "2022",
				"ftcEventKey": "USMIKEQ"
			}
			
		);
		</script>

	</body>
</html>