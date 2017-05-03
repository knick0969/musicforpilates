<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Blogs Edit | Music For Pilates CMS</title>
	<?php include('includes/head-cms.php'); ?>
	<script type="text/javascript" src="../js/dropzone.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/dropzone.css">
</head>
<body>

	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>About Page</h1>
			<a href="dj-add-edit.php" class="cta newpost">ADD NEW DJ</a>
		</div>
		<div class="whiteSection">
			<h3>List of DJ Profiles</h3>
			<div class="itemsContainer tracksList">
				<div class="itemBox">
					<div class="item">
						<div class="itemImage">
							<img src="../assets/img/user.png" width="100%" height="100%" alt="track-file-name" class="trackImg">
						</div>
						<div class="itemInfos">
							<p class="title">PJ Hawn</p>
							<p class="description"><span>DJ Description: </span>This is a pretty chilled out song to make your performance smoother</p>
						</div>
						<a href="dj-add-edit.php" class="cta editBtn">EDIT</a>
					</div>
					<div class="item">
						<div class="itemImage">
							<img src="../assets/img/user.png" width="100%" height="100%" alt="track-file-name" class="trackImg">
						</div>
						<div class="itemInfos">
							<p class="title">Lisa Horner</p>
							<p class="description"><span>DJ Description: </span>This is a pretty chilled out song to make your performance smoother</p>
						</div>
						<a href="dj-add-edit.php" class="cta editBtn">EDIT</a>
					</div>
				</div>
			</div>		
			<div class="divider"></div>
			<!-- <form name="about-edit" method="post" action=""> -->
				<div class="inputBox">
					<label>Page Title <span>(SEO)</span></label>
					<input type="text" class="input" name="page_title" id="title" placeholder="Type the page title, for example: Music For Pilates">
				</div>
				<div class="inputBox">
					<label>Page Keywords <span>(SEO)</span></label>
					<input type="text" class="input" name="page_keywords" id="keywords">
				</div>
				<div class="inputBox">
					<label>Page Description <span>(SEO)</span></label>
					<input type="text" class="input" name="page_description" id="description">
				</div>
				<div class="divider"></div>
				<!--<div class="inputBox">
					<label>About Us Featured Image</label>
					<div class="inputFile">
						<input type="file" name="post_image" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
						<label for="post_image" id="image"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose an image</strong></label>
					</div>
				</div>-->
				<div class="inputBox">
					<label>About Us Featured Image</label>
					<div class="dropzone" id="my-awesome-dropzone"></div>		
				</div>
				<input type="hidden" id="imageName" val="">
				<div class="divider"></div>
				<div class="inputBox">
					<label>About Us <span>(Displayed on the About Us page and Homepage)</span></label>
					<textarea class="input textarea" name="about_us_text" id="db-content"></textarea>
				</div>
				<div class="divider"></div>
				<div class="cta sendData">SAVE</div>
			<!-- </form> -->
		</div>
	</section>

	<?php include('includes/overlayMessages.php'); ?>

	<script>
		

		var send = {};
		send['function'] = 'aboutus';
		send['id'] = 1;
		var returndata = {};

		$.ajax({
			type:"POST",
			url:"../contentApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				//returndata = data['return'];
				//console.log(data);
				//$('#resultArea').html(data['data']);
				$('#title').val(data['return']['title'])
				$('#description').val(data['return']['description'])
				$('#keywords').val(data['return']['keywords'])
				$('#image span').html(data['return']['image'])
				$('#db-content').html(data['return']['content']);
				$('#imageName').val(data['return']['link']);
				//$('.aboutPic').append('<img src="' + data['return']['image'] + '" class="" align="left">')
			
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

		var myDropzone = new Dropzone("div#my-awesome-dropzone", { 
	    	url: "upload.php",
	    	maxFileSize: 2,
	    	acceptedFiles: '.png, .gif, .jpg, .jpeg',
	    	accept: function(file, done) {

	    		var imageURL = "images/" + file['name'];
				var uploadedfile = file['name'];	    		

	    		console.log(file);
	    		console.log(imageURL);

	    		console.log(imageURL + uploadedfile);

	    		$('#imageName').val(imageURL);

	    		done();
			    // if (file) {
			    //   console.log(file);
			    // }
			    // else { done(); }
		    }
	    });

		$(document).ready(function() {
		    $(".sendData").on('click', function(e){
		        e.preventDefault(e);

		        var send = {};

				send['title'] = $('#title').val();
				send['keywords'] = $('#keywords').val();
				send['description'] = $('#description').val();
				send['content'] = $('#db-content').val();
				send['link'] = $('#imageName').val();

				send['function'] = 'editaboutus';
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

		    });
		    
		});
	</script>

</body>
</html>
