<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Music For Pilates | Royalty Free Music for Pilates</title>
	<?php include('includes/head.php'); ?>
    <script src="http://w.soundcloud.com/player/api.js"></script>
</head>
<body>
	<?php include('includes/header.php'); ?>

	<section class="internalPage blogPage">
		<div class="greyBackground">
			<div class="sectionTitle container">
				<h1 class="titleh1">Blog.</h1>
				<div class="line"></div>
				<p class="sectionText">Posts by our team at Music For Pilates</p>
			</div>
			<div id="blogList">

			</div>

			<!-- 
				<article class="blog">
					<figure class="blogImg" id="">
						<img src="assets/img/pilates1.jpg" class="overlayImg">
					</figure>
					<div class="blogInfo">
						<p class="blogTags">
							<span><a href="#">pilates</a></span>
							<span><a href="#">yoga</a></span>
							<span><a href="#">zumba</a></span>
							<span><a href="#">jump</a></span>
						</p>
						<p class="blogTitle">blog title goes here</p>
						<p class="blogDescription">blog title goes here blog title goes here blog title goes here blog title goes here blog title goes here blog title goes here. blog title goes here blog blog title goes here blog.</p>
						<a href="blog-post-read.php?id=7" class="cta blackCta play">READ POST</a>
					</div>
				</article>
				<div class="divider"></div>
				<article class="blog">
					<figure class="blogImg" id="">
						<img src="assets/img/pilates1.jpg" class="overlayImg">
					</figure>
					<div class="blogInfo">
						<p class="blogTags">
							<span><a href="#">pilates</a></span>
							<span><a href="#">yoga</a></span>
							<span><a href="#">zumba</a></span>
							<span><a href="#">jump</a></span>
						</p>
						<p class="blogTitle">blog title goes here</p>
						<p class="blogDescription">blog title goes here blog title goes here blog title goes here blog title goes here blog title goes here blog title goes here. blog title goes here blog blog title goes here blog.</p>
						<a href="blog-post-read.php" class="cta blackCta play">READ POST</a>
					</div>
				</article>
				<div class="divider"></div>
				<article class="blog">
					<figure class="blogImg" id="">
						<img src="assets/img/pilates1.jpg" class="overlayImg">
					</figure>
					<div class="blogInfo">
						<p class="blogTags">
							<span><a href="#">pilates</a></span>
							<span><a href="#">yoga</a></span>
							<span><a href="#">zumba</a></span>
							<span><a href="#">jump</a></span>
						</p>
						<p class="blogTitle">blog title goes here</p>
						<p class="blogDescription">blog title goes here Track title goes here Track title goes here Track title goes here Track title goes here Track title goes here. Track title goes here Track Track title goes here Track.</p>
						<a href="blog-post-read.php" class="cta blackCta play">READ POST</a>
					</div>
				</article>
				<div class="divider"></div>
			-->

		</div>
	</section>

	<?php include('includes/footer.php'); ?>

	<script>

		var send = {};
		send['function'] = 'bloglist';
//		send['id'] = 7;
		var returndata = {};

		$.ajax({
			type:"POST",
			url:"blogsApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				//console.log(data['return']);
				//data = jQuery.parseJSON(data);
				data = data['return'];

				//console.log(data.length + 'tracks found in total')

				var allblogs = data.length;
				
				// loop attempt 2

				for (var i = 0; i < allblogs;  i++) {
					//$('#blogList').append('');
					$('#blogList').append('<article class="blog"><figure class="blogImg"><img src="'+data[i]['coverlink'] +'" class="overlayImg"></figure><div class="blogInfo"><p class="blogTitle">'+data[i]['title'] +'</p><p class="blogDescription">'+data[i]['description'] +'</p><a href="blog-post-read.php?id='+data[i]['id'] +'" class="cta blackCta play">READ POST</a></article>');
						console.log(i);


					/*

					<article class="blog">
					<figure class="blogImg" id="">
						<img src="assets/img/pilates1.jpg" class="overlayImg">
					</figure>
					<div class="blogInfo">
						<p class="blogTags">
							<span><a href="#">pilates</a></span>
							<span><a href="#">yoga</a></span>
							<span><a href="#">zumba</a></span>
							<span><a href="#">jump</a></span>
						</p>
						<p class="blogTitle">blog title goes here</p>
						<p class="blogDescription">blog title goes here Track title goes here Track title goes here Track title goes here Track title goes here Track title goes here. Track title goes here Track Track title goes here Track.</p>
						<a href="blog-post-read.php" class="cta blackCta play">READ POST</a>
					</div>
				</article>

					*/
				};

			},
			error: function (xhr, ajaxOptions, thrownError){
		        $('resultarea').html(xhr['responseText']);
		    }  

		});

	</script>

</body>
</html>