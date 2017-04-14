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
					<div class="inputFile">
						<input type="file" name="file-7[]" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
						<label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose an image</strong></label>
					</div>
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
	
	<script src="../js/inputfile/custom-file-input.js"></script>
	<script src="../js/inputfile/jquery.custom-file-input.js"></script>

</body>
</html>