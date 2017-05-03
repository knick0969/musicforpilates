<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tracks Edit | Music For Pilates CMS</title>
	<?php include('includes/head-cms.php'); ?>
</head>
<body>
	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>Tracks</h1>
			<a href="tracks-add-new.php" class="cta newTrack">ADD NEW TRACK</a>
		</div>
		<div class="whiteSection">	
			<h3>List of Tracks</h3>
			<div class="itemsContainer tracksList">
				<!-- 
				<div class="itemBox">
					<div class="item">
						<div class="itemImage">
							<img src="../assets/img/user.png" width="100%" height="100%" alt="track-file-name" class="trackImg">
						</div>
						<div class="itemInfos">
							<p class="title">Track Title</p>
							<p class="duration"><span>Duration: </span> 1:52</p>
							<p class="keywords"><span>Tags: </span> Chill, calm, serenity, stuff, goes, here, keywords</p>
							<p class="description"><span>Description: </span>This is a pretty chilled out song to make your performance smoother</p>
						</div>
						<a href="tracks-add-edit.php" class="cta editBtn">EDIT</a>
					</div>
				</div>
				 -->
			</div>
			<div class="divider"></div>
			<form method="post" name="tracks-edit">
				<div class="inputBox">
					<label for="page_title">Page Title <span>(SEO)</span></label>
					<input type="text" class="input" name="page_title" placeholder="Type the page title, for example: Music For Pilates" id="title">
				</div>
				<div class="inputBox">
					<label for="page_keywords">Page Keywords <span>(SEO)</span></label>
					<input type="text" class="input" name="page_keywords" id="keywords">
				</div>
				<div class="inputBox">
					<label for="page_description">Page Description <span>(SEO)</span></label>
					<input type="text" class="input" name="page_description" id="description">
				</div>
				<div class="divider"></div>
				<div class="inputBox">
					<label for="brief_description">Brief Description <span>(Displayed on the Page)</span></label>
					<textarea class="input textarea" name="brief_description" id="content"></textarea>
				</div>
				<div class="submitContainer">
					<input type="submit" value="SAVE" class="cta newTrack">
				</div>
			</form>
		</div>
	</section>

	<?php include('includes/overlayMessages.php'); ?>

	<script>
		var send = {};
		send['function'] = 'tracklist';
		//send['enabled'] = 1;
		var data = {};

		$.ajax({
			type:"POST",
			url:"../tracksApi.php",
			//dataType:"JSON",
			data:send,
			success: function(data) {
				//console.log(data['return']);
				data = jQuery.parseJSON(data);
				data = data['return'];

				//console.log(data.length + 'tracks found in total')

				var alltracks = data.length;

			
				//send['content'] = $('#homeBlurb').val();
				
				// loop attempt 2

				for (var i = 0; i < alltracks;  i++) {
					$('.tracksList').append('<div class="itemBox"><div class="item"><div class="itemImage"><img src="'+data[i]['coverlinkfile'] +'" width="100%" height="100%" alt="'+data[i]['title'] +'" class="trackImg"></div><div class="itemInfos"><p class="title">'+data[i]['title'] +'</p><p class="duration">'+data[i]['duration'] +'</p><p class="keywords">'+data[i]['keywords'] +'</p><p class="description">'+data[i]['description'] +'</p></div><a href="tracks-add-edit.php?id='+data[i]['id'] +'" class="cta editBtn">EDIT</a></div></div>');
					//$('#tracksContainer').append('<article class="track"><figure class="trackImg"><div class="priceBox"><p class="price"><span>$</span>'+data[i]['price'] +'</p><p class="aud">aud</p></div><iframe id="soundcloud_widget_'+i+'" width="100%" height="100%" scrolling="no" frameborder="no" src="'+data[i]['soundcloudurl'] +'"></iframe><img src="img/'+data[i]['coverlinkfile'] +'" class="overlayImg"></figure><div class="trackInfo"><p class="trackTitle">'+data[i]['title'] +'</p><p class="trackDuration">'+data[i]['duration'] +'</p><p class="trackDescription">'+data[i]['description'] +'</p><a href="#" class="cta blackCta play">LISTEN</a><a href="#" class="cta blackCta">ADD TO CART</a></div></article>');
				};

			},
			error: function (xhr, ajaxOptions, thrownError){
		        $('resultarea').html(xhr['responseText']);

		    }  
		});


		var send = {};
		send['function'] = 'musicdescription';
		//send['id'] = 3;
		var data = {};

		$.ajax({
			type:"POST",
			url:"../contentApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				//returndata = data['return'];
				//$('#resultArea').html(data['data']);
				$('#keywords').val(data['return']['keywords']);
				$('#description').val(data['return']['description']);
				$('#title').val(data['return']['title']);
				$('#content').val(data['return']['content']);
				
			},
			error: function (xhr, ajaxOptions, thrownError){
				//console.log(data);
		        //alert(xhr.statusText);
		        //alert(thrownError);
		        //$('#resultArea').html(xhr['responseText']);
		        console.log(ajaxOptions);
		        console.log(thrownError);
		        console.log(xhr.responseText);
		    }  
		});

		$(document).ready(function() {
		    $("form").submit(function(e){
		        e.preventDefault(e);

		        var send = {};

				send['title'] = $('#title').val();
				send['keywords'] = $('#keywords').val();
				send['description'] = $('#description').val();
				send['content'] = $('#content').val();

				send['function'] = 'editmusicpage';
				//send['id'] = 2;
				var data = {};

				$.ajax({
					type:"POST",
					url:"../contentApi.php",
					dataType:"JSON",
					data:send,
					// success: function(data) {
					

					// },
					error: function (xhr, ajaxOptions, thrownError){
				        //alert(xhr.statusText);
				        //alert(thrownError);
				        //$('#resultArea').html(xhr['responseText']);
				        //console.log(ajaxOptions);
				        //console.log(thrownError);
				    }  
				});

		        // the script will find all inputs with the class .input
		        // $.each($('.contactInput, .input'),function() {

		        //    if ($(this).val().length == '') {
		        //    // it will check it's value and if its empty, a class error will be applied
		        //     $(this).addClass('error');
		        //     $('.overlayError').addClass('overlayDisplay').delay(3000).fadeOut(1000);
		           
		        //    } else{
		        //     console.log('here');
		        //     $(this).removeClass('error');
		        //     $('.overlaySuccess').addClass('overlayDisplay').delay(3000).fadeOut(1000);
		           
		            

		        //    }
		        // });
		    });
		});

	</script>

</body>
</html>
