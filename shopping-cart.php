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

	<section class="internalPage cartPage">
		<div class="greyBackground">
			<div class="sectionTitle container">
					<h1 class="titleh1">Shopping Cart.</h1>
					<div class="line"></div>
					<p class="sectionText">Your Shopping Cart is empty</p>
				</div>
			<article class="track">
				<figure class="trackImg" id="">
					<div class="priceBox">
						<p class="price"><span>$</span>25</p>
						<p class="aud">aud</p>
					</div>
					<iframe id="soundcloud_widget" width="100%" height="320" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/150050099&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
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
					<div class="trackQuantity cta blackCta">
						<p>QUANTITY - <span>1</span></p>
						<a href="#" class="cta blackCta remove">-</a>
						<a href="#" class="cta blackCta add">+</a>
					</div>
				</div>
			</article>
			<div class="divider"></div>
			<article class="track">
				<figure class="trackImg" id="">
					<div class="priceBox">
						<p class="price"><span>$</span>25</p>
						<p class="aud">aud</p>
					</div>
					<iframe id="soundcloud_widget" width="100%" height="320" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/150050099&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
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
					<div class="trackQuantity cta blackCta">
						<p>QUANTITY - <span>1</span></p>
						<a href="#" class="cta blackCta remove">-</a>
						<a href="#" class="cta blackCta add">+</a>
					</div>
				</div>
			</article>
			<div class="divider"></div>
			<div class="checkout">
				<p>Total: <span>50.00 AUD</span></p>
				<a href="#" class="cta blackCta play">CHECKOUT</a>
			</div>


		</div>
	</section>

	<script type="text/javascript">
		$(document).ready(function() {
	       
	        var widget = SC.Widget(document.getElementById('soundcloud_widget'));
    		var isPlaying = false;

			widget.bind(SC.Widget.Events.READY, function() {
				console.log('Ready...');
				console.log('click...');
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