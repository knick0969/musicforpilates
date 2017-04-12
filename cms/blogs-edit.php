<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Blogs Edit | Music For Pilates CMS</title>
		<?php include('../includes/head-cms.php'); ?>
	<link rel="stylesheet" href="../css/cms.css" />
</head>
<body>

	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>Blog Post Add/Edit</h1>
			<a href="blogs-post-edit.php" class="cta newpost">ADD NEW POST</a>
		</div>
		<div class="whiteSection">
			<form name="blogs-edit" method="post" class="myValidate">
				<div class="inputBox">
					<label>Page Title <span>(SEO)</span></label>
					<input type="text" class="input" name="postTitle" data-myrules="required" placeholder="Type the page title, for example: Music For Pilates">
				</div>
				<div class="inputBox">
					<label>Post Keywords <span>(SEO)</span></label>
					<input type="text" class="input" name="page-keywords">
				</div>
				<div class="inputBox">
					<label>Page Text<span>(SEO)</span></label>
					<input type="text" class="input" data-myrules="required" name="page-description">
				</div>
				<div class="divider"></div>
				<input type="submit" value="SAVE" class="cta newpost">
			</form>
		</div>
	</section>

</body>
</html>
