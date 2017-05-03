<?php 
	
	//$keywords = $_POST['keywords'];
	//$_POST['title'] = "";
	//$_POST['page_description'] = "";
	//$_POST['page_brief_description'] = "";

	//var_dump(keywords);

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage Edit | Music For Pilates CMS</title>
	<?php include('includes/head-cms.php'); ?>
</head>
<body>

	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>Homepage</h1>
		</div>
		<div class="whiteSection">
			<form method="post" name="homepage-edit" action="">
				<div class="inputBox">
					<label for="page_title">Page Title <span>(SEO)</span></label>
					<input type="text" class="input" name="title" id="home-title" placeholder="Type the page title, for example: Music For Pilates">
				</div>
				<div class="inputBox">
					<label for="page_keywords">Page Keywords <span>(SEO)</span></label>
					<input type="text" class="input" name="keywords" id="home-keywords">
				</div>
				<div class="inputBox">
					<label for="page_description">Page Description <span>(SEO)</span></label>
					<input type="text" class="input" name="description" id="home-description">
				</div>
				<div class="divider"></div>
				<div class="inputBox">
					<label for="page_brief_description">Brief Description <span>(Displayed on the Homepage)</span></label>
					<textarea class="input textarea" name="content" id="homeBlurb"></textarea>
				</div>
				<div class="inputBox">
					<label for="track_order_select">Featured Tracks <span>(Displayed on the Homepage)</span></label>
					<p class="sectionDescription">Select the tracks and the order you want them to be displayed on the Homepage:</p>
					<div class="itemsContainer">
						<div class="itemBox">
							<p class="trackOrder">1st</p>
							<div class="track">
								<div class="selectContainer">
									<select class="inputSelect" name="track_order_select_1">
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
									</select>
								</div>
							</div>
						</div>
						<div class="itemBox">
							<p class="trackOrder">2nd</p>
							<div class="track">
								<div class="selectContainer">
									<select class="inputSelect" name="track_order_select_2">
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
									</select>
								</div>
							</div>
						</div>
						<div class="itemBox">
							<p class="trackOrder">3rd</p>
							<div class="track">
								<div class="selectContainer">
									<select class="inputSelect" name="track_order_select_3">
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
									</select>
								</div>
							</div>
						</div>
						<div class="itemBox">
							<p class="trackOrder">4th</p>
							<div class="track">
								<div class="selectContainer">
									<select class="inputSelect" name="track_order_select_4">
										<option>Select a Track</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
										<option>Track 25 - Music For Pilates</option>
									</select>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="divider"></div>
				<input type="submit" value="SAVE" class="cta">
			</form>
		</div>
	</section>

	<?php include('includes/overlayMessages.php'); ?>

	<script>

		var send = {};
		send['function'] = 'homepage';
		send['id'] = 2;
		var data = {};

		$.ajax({
			type:"POST",
			url:"../contentApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				console.log(data);
				//returndata = data['return'];
				//$('#resultArea').html(data['data']);
				$('#home-keywords').val(data['return']['keywords'])
				$('#home-description').val(data['return']['description'])
				$('#home-title').val(data['return']['title'])
				$('#homeBlurb').html(data['return']['content'])
				
			},
			error: function (xhr, ajaxOptions, thrownError){
				console.log(data);
		        //alert(xhr.statusText);
		        //alert(thrownError);
		        //$('#resultArea').html(xhr['responseText']);
		        //console.log(ajaxOptions);
		        //console.log(thrownError);
		    }  
		});

	$(document).ready(function() {
	    $("form").submit(function(e){
	        e.preventDefault(e);

	        var send = {};

			send['title'] = $('#home-title').val();
			send['keywords'] = $('#home-keywords').val();
			send['description'] = $('#home-description').val();
			send['content'] = $('#homeBlurb').val();

			send['function'] = 'edithomepage';
			send['id'] = 2;
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
