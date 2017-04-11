<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage Edit | Music For Pilates CMS</title>
	<?php include('../includes/head-cms.php'); ?>
	<link rel="stylesheet" href="../css/cms.css" />
	<link rel="stylesheet" href="../js/chosen/chosen.css" />
</head>
<body>
	
	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>Homepage</h1>
		</div>
		<div class="whiteSection">
			<form method="post" name="" action="">
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
				<div class="inputBox">
					<label>List of Tracks <span>(Displayed on the Homepage)</span></label>
					<p class="sectionDescription">Select the tracks and the order you want them to be displayed on the Homepage:</p>
					<div class="tracksContainer">
						<div class="trackBox">
							<p class="trackOrder">1st</p>
							<div class="track">
								<p class="trackTitle">Track Title</p>
								<select class="chzn-select">
									<option> HEY O HEY O HEY OOO HEY</option>
									<option> HEY O HEY O HEEEEEEEY O</option>
								</select>
							</div>
						</div>
						<div class="trackBox">
							<p class="trackOrder">2nd</p>
							<div class="track">
								
							</div>
						</div>
						<div class="trackBox">
							<p class="trackOrder">3rd</p>
							<div class="track">
								
							</div>
						</div>
						<div class="trackBox">
							<p class="trackOrder">4th</p>
							<div class="track">
								
							</div>
						</div>

					</div>
				</div>
				<div class="divider"></div>
				<input type="submit" value="SAVE" class="cta">
			</form>
		</div>
	</section>

	


<script> $(".chzn-select").chosen(); </script>
</body>
</html>
