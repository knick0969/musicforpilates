<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Music For Pilates | Royalty Free Music for Pilates</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
	<?php include('includes/header.php'); ?>

	<section class="internalPage aboutPage">
		<div class="greyBackground">
			<article class="about">
				<div class="sectionTitle container">
					<h1 class="titleh1">About.</h1>
					<div class="line"></div>
					<p class="sectionText">Music description goes here hey, that's a 2 line description only. Music description goes here hey, that's a 2 line description only.</p>
				</div>
				<div class="aboutText">
					<div class="aboutPic">
						<img alt="About Music for Pilates" src="assets/img/pilates1.jpg">
					</div>
					<div class="aboutText1">
						<p>Lisa Horner, a founder member has been working in the fitness industry for over 22 years, initially training and teaching Aerobics and various different mat classes, but the past 13 years her passion has been in Pilates. She has always struggled to find really good usable music for her classes.</p>
						<p>After many wasted CD purchases and hours spent searching for the ideal download, she decided to create her own music. What better time to embark on a new venture as she emigrated to Brisbane, Australia from the UK in 2012. The beautiful scenery and tranquil days inspiring the creation of calming and relaxing music.</p>
						<p>Lisa is now teaching in amazing places, some classes are out in the open with beautiful Australian backdrops. These tranquil settings are in perfect harmony with ‘Music for Pilates’ albums. Lisa has rigourously tested all the products and they have proven to be highly successful with her clients and professional colleagues.</p>
					</div>
				</div>
				<div class="dj">
					<div class="aboutText1">
						<p class="djName">Lisa Horner</p>
						<p>PJ Hawn, also a founder member, has worked within the music industry as an international songwriter and music producer for over 30 years. He works with multiplatinum international recording artist, musicians and Grammy award winning producers in a wide range of genres and has released tracks, intentionally charting in many countries.</p>
						<p>PJ worked closely with Lisa on all the ‘Music for Pilates’ tracks, recording, mixing and mastering them to a high professional standard.</p>
					</div>
					<div class="djPic">
						<img alt="About Music for Pilates" src="assets/img/pilates1.jpg">
					</div>
				</div>
				<div class="dj leftDj">
					<div class="djPic">
						<img alt="About Music for Pilates" src="assets/img/pilates1.jpg">
					</div>
					<div class="aboutText1">
						<p class="djName">PJ Hawn</p>
						<p>PJ Hawn, also a founder member, has worked within the music industry as an international songwriter and music producer for over 30 years. He works with multiplatinum international recording artist, musicians and Grammy award winning producers in a wide range of genres and has released tracks, intentionally charting in many countries.</p>
						<p>PJ worked closely with Lisa on all the ‘Music for Pilates’ tracks, recording, mixing and mastering them to a high professional standard.</p>
					</div>
				</div>
			</article>
		</div>
	</section>

	<?php include('includes/music-section.php'); ?>

	<?php include('includes/featured-blog.php'); ?>

	<?php include('includes/footer.php'); ?>

	<script>

		var send = {};
		send['function'] = 'about';
		send['id'] = 5;
		var returndata = {};

		$.ajax({
			type:"POST",
			url:"blogsApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				returndata = data['return'];
				$('#resultArea').html(data['data']);
				$('#title').html(data['return'][0]['title'])
				$('#content').html(data['return'][1]['content'])
				$('#throwImageHere').html('<img src="' . data['return'][1]['coverlink'] . '" class="blogImg" align="left">')
			},
			error: function (xhr, ajaxOptions, thrownError){
		        $('#resultArea').html(xhr['responseText']);
		    }  
		});
	</script>

</body>
</html>