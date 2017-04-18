<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tracks Edit | Music For Pilates CMS</title>
	<?php include('../includes/head-cms.php'); ?>
	<link rel="stylesheet" href="../css/cms.css" />
</head>
<body>
	<!-- Includes the blue common sidebar :) -->
	<?php include('includes/sidebar.php'); ?>

	<section class="container">
		<div class="titleSection">
			<h2>Welcome to MFP's CMS</h2>
			<h1>Tracks</h1>
			<a href="tracks-add-edit.php" class="cta newTrack">ADD NEW TRACK</a>
		</div>
		<div class="whiteSection">	
			<h3>List of Tracks</h3>
			<div class="itemsContainer tracksList">
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
			</div>
			<div class="divider"></div>
			<form method="post" name="tracks-edit">
				<div class="inputBox">
					<label for="page-title">Page Title <span>(SEO)</span></label>
					<input type="text" class="input error" name="page-title" placeholder="Type the page title, for example: Music For Pilates">
				</div>
				<div class="inputBox">
					<label for="page-keywords">Page Keywords <span>(SEO)</span></label>
					<input type="text" class="input" name="page-keywords">
				</div>
				<div class="inputBox">
					<label for="page-description">Page Description <span>(SEO)</span></label>
					<input type="text" class="input" name="page-description">
				</div>
				<div class="divider"></div>
				<div class="inputBox">
					<label for="brief-description">Brief Description <span>(Displayed on the Homepage)</span></label>
					<textarea class="input textarea" name="brief-description"></textarea>
				</div>
				<div class="submitContainer">
					<input type="submit" value="SAVE" class="cta newTrack">
				</div>
			</form>
		</div>
	</section>

</body>
</html>
