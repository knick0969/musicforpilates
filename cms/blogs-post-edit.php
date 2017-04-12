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
			<h1>Blogs</h1>
		</div>
		<div class="whiteSection">
			<form name="blog-post-edit" method="post">
				<div class="inputBox">
					<label>Post Title</label>
					<input type="text" class="input error" name="blogs-post-title" placeholder="Type the post title, for example: How music can improve your Pilates performance">
				</div>
				<div class="inputBox">
					<label>Post Keywords <span>(SEO)</span></label>
					<input type="text" class="input" name="blogs-post-keywords">
				</div>
				<div class="inputBox">
					<label>Post Brief Description <span>(SEO)</span></label>
					<input type="text" class="input" name="blogs-brief-description">
				</div>
				<div class="divider"></div>
				<div class="inputBox">
					<label>Post Content</label>
					<textarea class="input textarea" name="blogs-post-content"></textarea>
				</div>
				<div class="divider"></div>
				<input type="submit" value="SAVE POST" class="cta">
			</form>
		</div>
	</section>

	


</body>
</html>
