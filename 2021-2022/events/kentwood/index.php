<html>
	<head>
		<title>Kentwood Qualifier, 11/06/21</title>
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
				<h1 class="display-3 text-shadow-3">Kentwood Qualifier, 11/06/21</h1>			
			</div>
		</div>
		
		
	<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/footer.php"; ?>
	
		<script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		
		<script type="module">
			import { loadData } from "/includes/ftc_event.js";
			loadData("2122-FIM-MKQ", {
				"info1": "First competition after COVID break",
				"info2": "Because of COVID, no one on the team had ever been to a competition before"
			}, {
				"ftcSeason": "2021",
				"ftcEventKey": "USMIKEQ"
			}
			
		);
		</script>

	</body>
</html>