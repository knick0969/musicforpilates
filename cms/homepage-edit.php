<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage Edit | Music For Pilates CMS</title>
	<?php include('../includes/head-cms.php'); ?>
	<link rel="stylesheet" href="../css/cms.css" />

	<script src='../js/chosen/chosen.jquery.min.js' type="text/javascript"></script>
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
			<form method="post" name="homepage-edit" action="">
				<div class="inputBox">
					<label for="page_title">Page Title <span>(SEO)</span></label>
					<input type="text" class="input" name="page_title" placeholder="Type the page title, for example: Music For Pilates">
				</div>
				<div class="inputBox">
					<label for="page_keywords">Page Keywords <span>(SEO)</span></label>
					<input type="text" class="input" name="page_keywords">
				</div>
				<div class="inputBox">
					<label for="page_description">Page Description <span>(SEO)</span></label>
					<input type="text" class="input" name="page_description">
				</div>
				<div class="divider"></div>
				<div class="inputBox">
					<label for="page_brief_description">Brief Description <span>(Displayed on the Homepage)</span></label>
					<textarea class="input textarea" name="page_brief_description"></textarea>
				</div>
				<div class="inputBox">
					<label for="track_order_select">List of Tracks <span>(Displayed on the Homepage)</span></label>
					<p class="sectionDescription">Select the tracks and the order you want them to be displayed on the Homepage:</p>
					<div class="tracksContainer">
						<div class="trackBox">
							<p class="trackOrder">1st</p>
							<div class="track">
								<p class="trackTitle">Track Title</p>
								<div class="selectContainer">
									<select class="chosen-select" name="track_order_select">
										<option> HEY O HEY O HEY OOO HEY</option>
										<option> HEY O HEY O HEEEEEEEY O</option>
										<option> HEY O HEY O HEEEEEEEY O</option>
										<option> HEY O HEY O HEEEEEEEY O</option>
										<option> HEY O HEY O HEEEEEEEY O</option>
										<option> HEY O HEY O HEEEEEEEY O</option>
										<option> HEY O HEY O HEEEEEEEY O</option>
									</select>
								</div>
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

	<script type="text/javascript">
		$(".chosen-select").chosen();
	</script>


</body>
</html>
