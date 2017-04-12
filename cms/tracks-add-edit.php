<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tracks Add/Edit | Music For Pilates CMS</title>
	<?php include('../includes/head-cms.php'); ?>
	<link rel="stylesheet" href="../css/cms.css" />
</head>
<body>
	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>Add or Edit your Track</h1>
		</div>
		<div class="whiteSection">
			<form name="track-edit" method="post">
				<div class="inputBox">
					<label>Track Title</label>
					<input type="text" class="input" name="track-title" placeholder="Type the post title, for example: How music can improve your Pilates performance">
				</div>
				<div class="inputBox">
					<label>Track Tags</label>
					<input type="text" class="input" name="track-tags">
				</div>
				<div class="inputBox">
					<label>Track Description <span>(SEO)</span></label>
					<input type="text" class="input" name="track-description">
				</div>
				<div class="divider"></div>
				<div class="inputBox">
					<label>Track Image</label>
					<textarea class="input textarea" name="track-post-content"></textarea>
				</div>
				<div class="divider"></div>
				<div class="inputBox">
					<label>Track File</label>
					<textarea class="input textarea" name="track-post-content"></textarea>
				</div>
				<div class="inputBox">
					<label>Track Duration <span>XX : XX : XX  -  hours:minutes:seconds</span></label>
					<input type="text" class="input" name="track-description">
				</div>
				<div class="divider"></div>
				<input type="submit" value="SAVE TRACK" class="cta newTrack">
			</form>
		</div>
	</section>

</body>
</html>
