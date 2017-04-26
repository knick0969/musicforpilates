<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Music For Pilates | Royalty Free Music for Pilates</title>
	<?php include('includes/head.php'); ?>
	<script src="js/home.js" type="text/javascript"></script>
</head>
<body>
	
	<?php include('includes/header.php'); ?>

	<section class="mainSection">
		<article class="featured container">
			<div class="featuredTrack" id="slide0">
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
			<div class="featuredTrack" id="slide1">
				<div class="trackImage">
					<img src="assets/img/pilates1.jpg">
					<div class="playBtn"></div>
				</div>
				<div class="trackInfo">
					<span class="trackTag">PILATES</span>
					<h1 class="trackTitle">2 Creation of our Dreams</h1>
					<p class="trackDescription">A beautiful, chilled download with calmin piano, flute and pan pipes.</p>
					<a href="#" class="cta blackCta">Buy</a>
				</div>
			</div>
			<div class="featuredTrack" id="slide2">
				<div class="trackImage">
					<img src="assets/img/pilates1.jpg">
					<div class="playBtn"></div>
				</div>
				<div class="trackInfo">
					<span class="trackTag">PILATES</span>
					<h1 class="trackTitle">3 Creation of our Dreams</h1>
					<p class="trackDescription">A beautiful, chilled download with calmin piano, flute and pan pipes.</p>
					<a href="#" class="cta blackCta">Buy</a>
				</div>
			</div>
			<div class="featuredTrack" id="slide3">
				<div class="trackImage">
					<img src="assets/img/pilates1.jpg">
					<div class="playBtn"></div>
				</div>
				<div class="trackInfo">
					<span class="trackTag">PILATES</span>
					<h1 class="trackTitle">4 Creation of our Dreams</h1>
					<p class="trackDescription">A beautiful, chilled download with calmin piano, flute and pan pipes.</p>
					<a href="#" class="cta blackCta">Buy</a>
				</div>
			</div>
			<ul class="bullets">

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

	<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
<script src="js/scrollbar/jquery.mCustomScrollbar.js" type="text/javascript"></script>
<link href="js/scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">

<script>
    (function($){
        $(window).on("load",function(){
            $(".listOfTracks").mCustomScrollbar({
		        axis:"y",
		        theme: 'dark-3'
		      });
        });
    })(jQuery);
</script>

</body>
</html>