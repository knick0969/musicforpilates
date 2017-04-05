<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage Edit | Music For Pilates CMS</title>
	<?php include('../includes/head-cms.php'); ?>
	<link rel="stylesheet" href="../css/cms.css" />
</head>
<body>
	
	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="whiteSection">
			<div class="inputBox">
				<label>Page Title <span>(SEO)</span></label>
				<input type="text" class="input" name="page-title" placeholder="Type the page title, for example: Music For Pilates">
			</div>
			<div class="inputBox">
				<label>Page Keywords <span>(SEO)</span></label>
				<input type="text" class="input" name="page-keywords">
			</div>
			<div class="inputBox">
				<label>Page Description <span>(SEO)</span></label>
				<input type="text" class="input" name="page-description">
			</div>
			<div class="divider"></div>
			<div class="inputBox">
				<label>Brief Description <span>(Displayed on the Homepage)</span></label>
				<textarea class="input textarea" name="page-description"></textarea>
			</div>
		</div>
	</section>

	


</body>
</html>
