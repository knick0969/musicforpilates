<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Discount Code Add/Edit | Music For Pilates CMS</title>
	<?php include('includes/head-cms.php'); ?>
</head>
<body>
	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>Add or Edit your Discount Code</h1>
		</div>
		<div class="whiteSection">
			<form name="discount-code-edit" method="post">
				<div class="inputBox">
					<label for="discount_name">Discount Code</label>
					<input type="text" class="input" name="discount_name" placeholder="Type the Discount Code name">
				</div>
				<div class="inputBox">
					<label for="discount_description">Discount Description</label>
					<input type="text" class="input" name="discount_description">
				</div>
				<div class="divider"></div>
				<div class="inputBox">
					<label for="discount_type_percentage">Percentage %</label>
					<input type="radio" value="percentage" class="input" name="discount_type_percentage">
					<label for="discount_type_fixed_amount">Fixed Amount X AUD</label>
					<input type="radio" value="fixed amount" class="input" name="discount_type_percentage">
				</div>
				<div class="divider"></div>
				<div class="inputBox">
					<label for="discount_description">Expiry Date:</label>
					<input type="date" class="input" name="discount_expiry_date">
				</div>
				<input type="submit" value="SAVE CODE" class="cta newTrack">
			</form>
		</div>
	</section>
	
	<script src="../js/inputfile/custom-file-input.js"></script>
	<script src="../js/inputfile/jquery.custom-file-input.js"></script>

	<?php include('includes/overlayMessages.php'); ?>

</body>
</html>
