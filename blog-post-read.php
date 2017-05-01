<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Music For Pilates | Royalty Free Music for Pilates</title>
	<?php include('includes/head.php'); ?>

</head>
<body>
	<?php include('includes/header.php'); ?>

	<section class="internalPage postPage">
		<div class="greyBackground">
			<div class="sectionTitle container">
				<h1 class="titleh1" id="db-title">Post title goes here.</h1>
				<div class="line"></div>
				<p class="sectionText">Short post description</p>
			</div>
			
			<article class="blogPost" id="throwImageHere">
				<img src="assets/img/pilates1.jpg" id="image" class="blogImg" align="left">
				<p id="content"></p>
			</article>
		</div>
	</section>

	<?php include('includes/footer.php'); ?>

	<script>

		var send = {};
		var postid = <?php	echo $id; ?>

		send['function'] = 'blog';
		send['id'] = postid;

		var returndata = {};

		$.ajax({
			type:"POST",
			url:"blogsApi.php",
			dataType:"JSON",
			data:send,
			success: function(data) {
				returndata = data['return'];
				$('#resultArea').html(data['data']);
				$('#db-title').html(data['return'][0]['title'])
				$('#db-content').html(data['return'][0]['content'])
				$('#db-description').html(data['return'][0]['description'])
				$('#db-author').html(data['return'][0]['author'])
				$('#db-deliver').html(data['return'][0]['deliver'])
				//$('#throwImageHere').html('<img src="' . data['return'][1]['coverlink'] . '" class="blogImg" align="left">')
			},
			error: function (xhr, ajaxOptions, thrownError){
		        $('#resultArea').html(xhr['responseText']);
		    }  
		});
	</script>
</body>
</html>