<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Music For Pilates | Royalty Free Music for Pilates</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
	<?php include('includes/header.php'); ?>

	<section class="internalPage contactPage">
		<div class="greyBackground">
			<article class="contact">
				<div class="sectionTitle container">
					<h1 class="titleh1">Contact.</h1>
					<div class="line"></div>
					<p class="sectionText">It's easy to get in touch with us, simply write the form below or reach us out at music@musicforpilates.com</p>
				</div>
				<form name="contact_form" method="post" action="">
					<div class="inputContainer">
						<!-- <label class="contactLabel" for="contact_name">Your Name</label>-->
						<input type="text" placeholder="Your Name" name="contact_name" class="contactInput">
					</div>
					<div class="inputContainer">
						<!-- <label class="contactLabel" for="contact_email">Your Email</label>-->
						<input type="text" placeholder="Your Email" name="contact_email" class="contactInput">
					</div>
					<div class="inputContainer">
						<!-- <label class="contactLabel" for="contact_phone">Your Phone</label>-->
						<input type="text" placeholder="Your Phone" name="contact_phone" class="contactInput">
					</div>
					<div class="inputContainer">
						<!-- <label class="contactLabel" for="contact_message">Your Message</label>-->
						<textarea placeholder="Your Message" name="contact_message" class="contactInput contactTextarea"></textarea>
					</div>
					<input type="submit" class="contactSubmit" value="Send.">
				</form>
			</article>
		</div>
	</section>

	<script type="text/javascript" src="js/validation.js"></script>

	<div class="sereneBackground"></div>

	<?php include('includes/featured-blog.php'); ?>

	<?php include('includes/footer.php'); ?>

</body>
</html>