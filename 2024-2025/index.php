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
		
		<div class="d-flex flex-column align-items-center p-3">
			<div><i class="fa-duotone fa-block-question fa-10x text-dark"></i></div>
			<div class="fs-2">Information about this season's game will be released September 7, 2024.</div>
		</div>
<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/footer.php"; ?>
		<script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<? include "{$_SERVER['DOCUMENT_ROOT']}/includes/photoModal.php"; ?>				
	</body>
</html>