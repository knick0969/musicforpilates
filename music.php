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

	<section class="internalPage musicPage">
		<div class="greyBackground">
			<div class="sectionTitle container">
				<h1 class="titleh1">Music.</h1>
				<div class="line"></div>
				<p class="sectionText">Check out our complete list of royalty free tracks</p>
			</div>
			<div id="tracksContainer" class="resultarea">

				<!-- <article class="track">
					<figure class="trackImg" id="">
						<div class="priceBox">
							<p class="price"><span>$</span>25</p>
							<p class="aud">aud</p>
						</div>
						<iframe id="soundcloud_widget" width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/150050099&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
						<img src="assets/img/pilates1.jpg" class="overlayImg">
					</figure>
					<div class="trackInfo">
						<p class="trackTags">
							<span><a href="#">pilates</a></span>
							<span><a href="#">yoga</a></span>
							<span><a href="#">zumba</a></span>
							<span><a href="#">jump</a></span>
						</p>
						<p class="trackTitle">Track title goes here</p>
						<p class="trackDuration">Duration: 15min 52s<span class="trackBpm">68 BPM</span></p>
						<p class="trackDescription">Track title goes here Track title goes here Track title goes here Track title goes here Track title goes here Track title goes here. Track title goes here Track Track title goes here Track.</p>
						<a href="#" class="cta blackCta play">LISTEN</a>
						<a href="#" class="cta blackCta">ADD TO CART</a>
					</div>
				</article>
				<div class="divider"></div>
				<article class="track">
					<figure class="trackImg" id="">
						<div class="priceBox">
							<p class="price"><span>$</span>25</p>
							<p class="aud">aud</p>
						</div>
						<iframe id="soundcloud_widget" width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/150050099&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
						<img src="assets/img/pilates1.jpg" class="overlayImg">
					</figure>
					<div class="trackInfo">
						<p class="trackTags">
							<span><a href="#">pilates</a></span>
							<span><a href="#">yoga</a></span>
							<span><a href="#">zumba</a></span>
							<span><a href="#">jump</a></span>
						</p>
						<p class="trackTitle">Track title goes here</p>
						<p class="trackDuration">Duration: 15min 52s<span class="trackBpm">68 BPM</span></p>
						<p class="trackDescription">Track title goes here Track title goes here Track title goes here Track title goes here Track title goes here Track title goes here. Track title goes here Track Track title goes here Track.</p>
						<a href="#" class="cta blackCta play">LISTEN</a>
						<a href="#" class="cta blackCta">ADD TO CART</a>
					</div>
				</article>
				<div class="divider"></div>
				<article class="track">
					<figure class="trackImg" id="">
						<div class="priceBox">
							<p class="price"><span>$</span>25</p>
							<p class="aud">aud</p>
						</div>
						<iframe id="soundcloud_widget" width="100%" height="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/150050099&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
						<img src="assets/img/pilates1.jpg" class="overlayImg">
					</figure>
					<div class="trackInfo">
						<p class="trackTags">
							<span><a href="#">pilates</a></span>
							<span><a href="#">yoga</a></span>
							<span><a href="#">zumba</a></span>
							<span><a href="#">jump</a></span>
						</p>
						<p class="trackTitle">Track title goes here</p>
						<p class="trackDuration">Duration: 15min 52s<span class="trackBpm">68 BPM</span></p>
						<p class="trackDescription">Track title goes here Track title goes here Track title goes here Track title goes here Track title goes here Track title goes here. Track title goes here Track Track title goes here Track.</p>
						<a href="#" class="cta blackCta play">LISTEN</a>
						<a href="#" class="cta blackCta">ADD TO CART</a>
					</div>
				</article>
				<div class="divider"></div> -->

			</div>
		</div>
	</section>

	<script>
		var send = {};
		send['function'] = 'tracklist';
		//send['enabled'] = 1;
		var data = {};

		$.ajax({
			type:"POST",
			url:"tracksApi.php",
			//dataType:"JSON",
			data:send,
			success: function(data) {
				//console.log(data['return']);
				data = jQuery.parseJSON(data);
				data = data['return'];

				//console.log(data.length + 'tracks found in total')

				var alltracks = data.length;
				
				// loop attempt 2

				for (var i = 0; i < alltracks;  i++) {
					$('#tracksContainer').append('<article class="track"><figure class="trackImg"><div class="priceBox"><p class="price"><span>$</span>'+data[i]['price'] +'</p><p class="aud">aud</p></div><iframe id="soundcloud_widget_'+i+'" width="100%" height="100%" scrolling="no" frameborder="no" src="'+data[i]['soundcloudurl'] +'"></iframe><img src="img/'+data[i]['coverlinkfile'] +'" class="overlayImg"></figure><div class="trackInfo"><p class="trackTitle">'+data[i]['title'] +'</p><p class="trackDuration">'+data[i]['duration'] +'</p><p class="trackDescription">'+data[i]['description'] +'</p><a href="#" class="cta blackCta play">LISTEN</a><a href="#" class="cta blackCta">ADD TO CART</a></div></article>');
				};

			},
			error: function (xhr, ajaxOptions, thrownError){
		        $('resultarea').html(xhr['responseText']);

		    }  
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
	       
	        var widget = SC.Widget(document.getElementById('soundcloud_widget_0'));
	        var widget = SC.Widget(document.getElementById('soundcloud_widget_1'));
	        var widget = SC.Widget(document.getElementById('soundcloud_widget_2'));

    		var isPlaying = false;



			widget.bind(SC.Widget.Events.READY, function() {
				console.log(widget);

			});
			widget.bind(SC.Widget.Events.PLAY , function() {

	            $('.play2').trigger('click');

	        });
		
			$('.play').click(function(e) {

				e.preventDefault();
				var isPlaying = true;
				$(this).toggleClass('listening');
	            $(this).text(function(i, v){
	               return v === 'LISTEN' ? 'LISTENING' : 'LISTEN'
	            });
				$(this).closest('.track').find('.overlayImg').css({
		           'opacity' : '0',
		           'z-index' : '-1'
		        });
				widget.toggle();
			});

		});
	</script>

	<!-- <?php include('includes/featured-blog.php'); ?>-->

	<?php include('includes/footer.php'); ?>

</body>
</html>