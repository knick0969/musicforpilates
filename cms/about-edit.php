<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>About Us Edit | Music For Pilates CMS</title>
	<?php include('includes/head-cms.php'); ?>
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>

	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>
	
	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>About Us</h1>
		</div>
		<div class="whiteSection">
			<form name="about-edit" method="post">
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
					<label>About Us <span>(Displayed on the About Us page)</span></label>
					<textarea class="input textarea" name="page-description"></textarea>
				</div>
				<div class="divider"></div>
				<input type="submit" value="SAVE" class="cta">
			</div>
		</div>
	</section>

	<?php include('includes/overlayMessages.php'); ?>

</body>
</html>
