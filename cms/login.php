<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login | Music For Pilates </title>
	<?php include('../includes/head-cms.php'); ?>
	<link rel="stylesheet" href="../css/cms.css" />
</head>
<body>
	<section class="login">

		<div class="blueCircle">
			<div class="whiteCircle">

			</div>
		</div>
		<div class="rightSection">
			<div class="loginContainer">
				<h1>Sign In to MFP CMS</h1>
				<form name="login">
					<label for="username">Username</label>
					<input type="text" maxlength="100" name="username" class="input">
					<label for="password">Password</label>
					<input type="password" maxlength="100" name="password" class="input">
					<input type="submit" name="btnLogin" class="submit" value="LOGIN">
				</form>
				<div class="forgetPassword">
					<p>Forgot your password? <a href="#">Click here</a></p>
				</div>
			</div>
		</div>
	</section>

	


</body>
</html>
