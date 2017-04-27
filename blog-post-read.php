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
			
			<article class="blogPost">
				<img src="assets/img/pilates1.jpg" class="blogImg" align="left">
				<p id="db-content">Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good.</p>
				<p>Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it.</p>
				<p>Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it, definitely recommend people doing that hey, so good.</p>
				<p>Pilates is the new black. love it, definitely recommend people doing that hey, so good. Pilates is the new black. love it.</p>
			</article>
			


		</div>
	</section>

	<?php include('includes/footer.php'); ?>
<script>

	var send = {};
	send['function'] = 'blog';
	send['id'] = 5;
	var returndata = {};

	$.ajax({
		type:"POST",
		url:"blogsApi.php",
		dataType:"JSON",
		data:send,
		success: function(data) {
			console.log(data['return']);
			returndata = data['return'];
			$('#resultArea').html(data['data']);
			$('#db-title').html(data['return'][0]['title']);
			$('#db-content').html(data['return'][0]['content']);
		},
		error: function (xhr, ajaxOptions, thrownError){
	        alert(xhr.statusText);
	        alert(thrownError);
	        $('#resultArea').html(xhr['responseText']);
	        console.log(ajaxOptions);
	        console.log(thrownError);
	    }  
	});
</script>
</body>
</html>