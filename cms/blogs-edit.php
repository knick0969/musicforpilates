<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Blogs Edit | Music For Pilates CMS</title>
	<?php include('includes/head-cms.php'); ?>
</head>
<body>

	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>Blog Post Add/Edit</h1>
			<a href="blogs-post-edit.php" class="cta newpost">ADD NEW POST</a>
		</div>
		<div class="whiteSection">
			<h3>List of Blog Posts</h3>
			<div class="itemsContainer tracksList">
				<!-- <div class="itemBox">
					<div class="item">
						<div class="itemImage">
							<img src="../assets/img/user.png" width="100%" height="100%" alt="track-file-name" class="trackImg">
						</div>
						<div class="itemInfos">
							<p class="title">Blog Post Title</p>
							<p class="keywords"><span>Tags: </span> Chill, calm, serenity, stuff, goes, here, keywords</p>
							<p class="description"><span>Description: </span>This is a pretty chilled out song to make your performance smoother</p>
						</div>
						<a href="blogs-post-edit.php" class="cta editBtn">EDIT</a>
					</div>
				</div>
				<div class="itemBox">
					<div class="item">
						<div class="itemImage">
							<img src="../assets/img/user.png" width="100%" height="100%" alt="track-file-name" class="trackImg">
						</div>
						<div class="itemInfos">
							<p class="title">Blog Post Title</p>
							<p class="keywords"><span>Tags: </span> Chill, calm, serenity, stuff, goes, here, keywords</p>
							<p class="description"><span>Description: </span>This is a pretty chilled out song to make your performance smoother This is a pretty chilled out song to make your performance smoother This is a pretty chilled out song to make your performance smoother This is a pretty chilled out song to make your performance smoother </p>
						</div>
						<a href="blogs-post-edit.php" class="cta editBtn">EDIT</a>
					</div>
				</div>
				<div class="itemBox">
					<div class="item">
						<div class="itemImage">
							<img src="../assets/img/user.png" width="100%" height="100%" alt="track-file-name" class="trackImg">
						</div>
						<div class="itemInfos">
							<p class="title">Blog Post Title</p>
							<p class="keywords"><span>Tags: </span> Chill, calm, serenity, stuff, goes, here, keywords</p>
							<p class="description"><span>Description: </span>This is a pretty chilled out song to make your performance smoother</p>
						</div>
						<a href="blogs-post-edit.php" class="cta editBtn">EDIT</a>
					</div>
				</div>
				<div class="itemBox">
					<div class="item">
						<div class="itemImage">
							<img src="../assets/img/user.png" width="100%" height="100%" alt="track-file-name" class="trackImg">
						</div>
						<div class="itemInfos">
							<p class="title">Blog Post Title</p>
							<p class="keywords"><span>Tags: </span> Chill, calm, serenity, stuff, goes, here, keywords</p>
							<p class="description"><span>Description: </span>This is a pretty chilled out song to make your performance smoother</p>
						</div>
						<a href="blogs-post-edit.php" class="cta editBtn">EDIT</a>
					</div>
				</div> -->		
			</div>		
			<div class="divider"></div>
			<form name="blogs-edit" method="post" class="myValidate">
				<div class="inputBox">
					<label>Page Title <span>(SEO)</span></label>
					<input type="text" class="input" name="postTitle" data-myrules="required" placeholder="Type the page title, for example: Music For Pilates">
				</div>
				<div class="inputBox">
					<label>Post Keywords <span>(SEO)</span></label>
					<input type="text" class="input" name="page_keywords">
				</div>
				<div class="inputBox">
					<label>Page Text<span>(SEO)</span></label>
					<input type="text" class="input" data-myrules="required" name="page_description">
				</div>
				<div class="divider"></div>
				<input type="submit" value="SAVE" class="cta newpost">
			</form>
		</div>
	</section>

	<?php include('includes/overlayMessages.php'); ?>

	<script>

		var send = {};
		send['function'] = 'bloglist';
//		send['id'] = 7;
		var returndata = {};

		$.ajax({
			type:"POST",
			url:"../blogsApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {

				data = data['return'];
				var allblogs = data.length;
				
				for (var i = 0; i < allblogs;  i++) {

					$('.itemsContainer').append('<div class="itemBox"><div class="item"><div class="itemImage"><img src="'+data[i]['coverlink'] +'" width="100%" height="100%" alt="'+data[i]['title'] +'" class="trackImg"></div><div class="itemInfos"><p class="title">'+data[i]['title'] +'</p><p class="keywords"><span>Keywords: '+data[i]['keywords'] +'</p><p class="description">'+data[i]['description'] +'</p></div><a href="blogs-post-edit.php?id='+data[i]['id'] +'" class="cta editBtn">EDIT</a></div></div>');

				};

			},
			error: function (xhr, ajaxOptions, thrownError){
		        $('resultarea').html(xhr['responseText']);
		    }  

		});

	</script>

</body>
</html>
