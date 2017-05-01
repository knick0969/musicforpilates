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
				<p class="sectionText" id="homeBlurb"></p>
				<a href="#" class="cta blackCta">READ MORE</a>
			</div>
			<div class="aboutPic" id="homeAboutPic">
				
			</div>
		</article>
		<div class="greyBackground"></div>
	</section>

	<?php include('includes/music-section.php'); ?>

	<?php include('includes/featured-blog.php'); ?>

	<?php include('includes/footer.php'); ?>

	<script>

		var send = {};
		send['function'] = 'homepage';
		send['id'] = 2;
		var returndata = {};

		$.ajax({
			type:"POST",
			url:"contentApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				//returndata = data['return'];
				//$('#resultArea').html(data['data']);
				$('#homeBlurb').html(data['return']['content'])
				$('#homeAboutPic').append('<img src="' + data['return']['image'] + '" class="" align="left">')
				/* For each loop {
					$('#trackContainer').append('<div class="track"><img src="img/'+data['return'][i]['image']+'"><h3>'+data['return'][i]['title']+'</h3><div class="description">'+data['return'][i]['description']+'</div><div class="price">'+data['return'][i]['cost']+'</div><a href="track.php?id='+data['return'][i]['id']+'"><button class="moreInfo">More info</button></div>')
				} */
			},
			error: function (xhr, ajaxOptions, thrownError){
		        //alert(xhr.statusText);
		        //alert(thrownError);
		        //$('#resultArea').html(xhr['responseText']);
		        //console.log(ajaxOptions);
		        //console.log(thrownError);
		    }  
		});

	</script>

</body>
</html>