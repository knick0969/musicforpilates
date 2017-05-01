<section class="featuredBlog container">
	<article class="featuredPost">
		<div class="sectionTitle">
			<h1 class="titleh1">Blog.</h1>
			<div class="line"></div>
		</div>
		<div class="postImg" id="throwImageHere">
			<a href="#" title="Read Post post title goes here" class="cta whiteCta">READ POST</a>
		</div>
		<div class="postInfo">
			<p class="postDate" id="db-date-blog"></p>
			<p class="postTitle" id="db-title-blog"></p>
			<p class="postDescription" id="db-description-blog"></p>
		</div>

	</article>
	<div class="darkBlueBackground">
		<a href="blog.php" title="See all Blog posts" class="allposts">ALL POSTS</a>
	</div>
</section>

<script>

	var send = {};
	send['function'] = 'bloglist';
	send['id'] = 1;
	var returndata = {};

	$.ajax({
		type:"POST",
		url:"blogsApi.php",
		dataType:"JSON",
		data:send,
		success: function(data) {
			returndata = data['return'];
			$('#resultArea').html(data['data'])
			$('#db-title-blog').html(data['return'][0]['title'])
			$('#db-description-blog').html(data['return'][0]['description'])
			$('#db-date-blog').html(data['return'][0]['deliver'])
			$('#throwImageHere').append('<img src="' + data['return'][0]['coverlinkfile'] + '" class="" align="left">')
		},
		error: function (xhr, ajaxOptions, thrownError){
	        $('#resultArea').html(xhr['responseText']);
	        alert(xhr.statusText);
	        alert(thrownError);
	        $('#resultArea').html(xhr['responseText']);
	        console.log(ajaxOptions);
	        console.log(thrownError);
	    }  
	});
	
</script>