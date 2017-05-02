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
					<p class="sectionText" id="db-description"></p>
				</div>
				<div class="aboutText">
					<div class="aboutPic">

					</div>
					<div class="aboutText1" id="db-content">

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

	<!--<script>

		var send = {};
		send['function'] = 'aboutus';
		send['id'] = 1;
		var returndata = {};

		$.ajax({
			type:"POST",
			url:"contentApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				returndata = data['return'];
				$('#resultArea').html(data['data'])
				//$('#title').html(data['return'][0]['title'])
				$('#db-content').html(data['return'][0]['content'])
				$('#db-description').html(data['return'][0]['description'])
				//$('#throwImageHere').html('<img src="' . data['return'][1]['coverlink'] . '" class="blogImg" align="left">')
			},
			error: function (xhr, ajaxOptions, thrownError){
		        $('#resultArea').html(xhr['responseText']);
		        alert(xhr.statusText);
	        alert(thrownError);
	        $('#resultArea').html(xhr['responseText']);
	        console.log(ajaxOptions);
	        console.log(thrownError);
		    }  
		});
	</script> -->

	<script>

		var send = {};
		send['function'] = 'aboutus';
		send['id'] = 1;
		var returndata = {};

		$.ajax({
			type:"POST",
			url:"contentApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				//returndata = data['return'];
				//$('#resultArea').html(data['data']);
				$('#db-description').html(data['return']['description'])
				$('#db-content').html(data['return']['content']);
				$('.aboutPic').append('<img src="' + data['return']['image'] + '" class="" align="left">')
			
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