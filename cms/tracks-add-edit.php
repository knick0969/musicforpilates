<?php 
	$id = $_GET['id'];
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tracks Add/Edit | Music For Pilates CMS</title>
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
			<h1>Add or Edit your Track</h1>
		</div>
		<div class="whiteSection">
			<div class="">
				<div class="inputBox">
					<label>Track Title</label>
					<input type="text" class="input" name="track-title" id="title" placeholder="Type the post title, for example: How music can improve your Pilates performance">
				</div>
				<div class="inputBox">
					<label>Track Tags</label>
					<input type="text" class="input" name="track-tags" id="tags" >
				</div>
				<div class="inputBox">
					<label>Track Description <span>(SEO)</span></label>
					<input type="text" class="input" name="track-description" id="description" >
				</div>
				<div class="divider"></div>

				<div class="inputBox">
					<label>About Us Featured Image</label>
					<div class="dropzone" id="my-awesome-dropzone"></div>		
				</div>
				<input type="hidden" id="imageName" val="">
				<input type="hidden" id="orderposition" val="">
				<div class="divider"></div>
				<!--<div class="inputBox">
					<label>Track File</label>
					<div class="inputFile">
						<input type="file" name="track_file" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
						<label for="file-7"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose an mp3 file</strong></label>
					</div>
				</div>-->
				<div class="inputBox">
					<label>SoundCloud URL <span>Embed URL</span></label>
					<input type="text" class="input" name="track-soundcloudurl" id="soundcloudurl" >
				</div>
				<div class="inputBox">
					<label>Track Duration <span>XX : XX : XX  -  hours:minutes:seconds</span></label>
					<input type="text" class="input" name="track-duration" id="duration" >
				</div>
				<div class="inputBox">
					<label>Track BPM <span>(Beats per Minute)</span></label>
					<input type="text" class="input" name="track-bpm" id="bpm" >
				</div>
				<div class="inputBox">
					<label>Price <span>(AUD)</span></label>
					<input type="text" class="input" name="track-price" id="price" >
				</div>
				<div class="divider"></div>
				<div class="cta newTrack sendData">SAVE TRACK</div>
			</div>
		</div>
	</section>
	
	<script src="../js/inputfile/custom-file-input.js"></script>
	<script src="../js/inputfile/jquery.custom-file-input.js"></script>

	<?php include('includes/overlayMessages.php'); ?>



	<script>

		var myDropzone = new Dropzone("div#my-awesome-dropzone", { 
	    	url: "upload.php",
	    	maxFileSize: 2,
	    	acceptedFiles: '.png, .gif, .jpg, .jpeg',
	    	accept: function(file, done) {

	    		var imageURL = "images/" + file['name'];

	    		console.log(file);
	    		console.log(imageURL);

	    		$('#imageName').val(imageURL);

	    		done();
			    // if (file) {
			    //   console.log(file);
			    // }
			    // else { done(); }
		    }
	    });

		var send = {};
		var postid = <?php echo $id; ?>

		send['function'] = 'track';
		send['id'] = postid;

		var returndata = {};

		$.ajax({
			type:"POST",
			url:"../tracksApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				console.log('hey');
				returndata = data['return'];
				//$('#resultArea').html(data['data']);
				$('#title').val(data['return'][0]['title']);
				$('#description').val(data['return'][0]['description']);
				$('#soundcloudurl').val(data['return'][0]['soundcloudurl']);
				$('#tracklink').val(data['return'][0]['tracklink']);
				$('#deliver').html(data['return'][0]['deliver']);
				$('#price').html(data['return'][0]['price']);
				$('#bpm').val(data['return'][0]['bpm']);
				$('#orderposition').html(data['return'][0]['orderposition']);
				$('#discountcode').val(data['return'][0]['discountcode']);
				$('#duration').val(data['return'][0]['duration']);
				console.log(data);
				//$('#throwImageHere').html('<img src="' . data['return'][1]['coverlink'] . '" class="blogImg" align="left">')

			},
			error: function (xhr, ajaxOptions, thrownError){
		        //$('#resultArea').html(xhr['responseText']);
		        console.log(xhr.responseText);
		    }  
		});

		$(document).ready(function() {
		    $(".sendData").on('click', function(e){
		        e.preventDefault(e);

		        var send = {};

				send['title'] = $('#title').val();
				send['tags'] = $('#tags').val();
				send['keywords'] = $('#keywords').val();
				send['description'] = $('#description').val();
				send['content'] = $('#content').val();

				send['function'] = 'edittrack';
				//send['id'] = 2;
				var data = {};

				$.ajax({
					type:"POST",
					url:"../tracksApi.php",
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
