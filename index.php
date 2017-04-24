<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Music For Pilates | Royalty Free Music for Pilates</title>
	<?php include('includes/head.php'); ?>
</head>
<body>
	
	<?php include('includes/header.php'); ?>

	<section class="mainSection">
		<article class="featured container">
			<div class="featuredTrack">
				<div class="trackImage">
					<img src="assets/img/pilates1.jpg">
					<div class="playBtn"></div>
				</div>
				<div class="trackInfo">
					<span class="trackTag">PILATES</span>
					<h1 class="trackTitle">Creation of our Dreams</h1>
					<p class="trackDescription">A beautiful, chilled download with calmin piano, flute and pan pipes.</p>
					<a href="#" class="cta blackCta">Buy</a>
				</div>
			</div>
			<ul class="bullets">
				<li class="bullet">1</li>
				<li class="bullet">2</li>
				<li class="bullet">3</li>
				<li class="bullet active">4</li>
			</ul>
		</article>
		<article class="about container">
			<div class="sectionTitle container">
				<h1 class="titleh1">About.</h1>
				<div class="line"></div>
				<p class="sectionText">Music description goes here hey, that's a 2 line description only. Music description goes here hey, that's a 2 line description only.</p>
				<a href="#" class="cta blackCta">READ MORE</a>
			</div>
			<div class="aboutPic">
				<img src="assets/img/pilates1.jpg">
			</div>
		</article>
		<div class="greyBackground"></div>
	</section>

	<?php include('includes/music-section.php'); ?>

	<?php include('includes/featured-blog.php'); ?>

	<?php include('includes/footer.php'); ?>

	<script>
	    (function($){
	        $(window).on("load",function(){
	            $(".listOfTracks").mCustomScrollbar({
			        axis:"x",
			        setHeight: 620
			      });
	        });
	    })(jQuery);
	</script>

</body>
</html>