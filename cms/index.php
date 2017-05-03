<?php



//THIS IS MY TESTING GROUND TO SHOW IT WORKS.  THERE IS A FUNCTION IN THE TESTAPI.HTML AND CONTENTAPI.PHP FILES YOU CAN USE.  ALSO NOTE THAT IN THE FORM I'VE CHANGED
//THE INPUT FOR USERNAME TO EMAIL WHICH CORRESPONDS WITH THE DATABASE


require '../start.php';

if ((!empty($_POST['email'])) && (!empty($_POST['password']))){
	$results = $db->prepare("
		SELECT email, password
		FROM users
		WHERE email = ?
		");	
	$results->bind_param('s', $_POST['email']);
	$results->execute();
	$results->bind_result($rtEmail, $rtPassword);
	$results->store_result();
	$count = $results->num_rows;
	if ($count > 0){
		echo 'Booya!<br>';
		while ($results->fetch()) {
			if (password_verify($_POST['password'], $rtPassword)){
				session_start();
				$_SESSION['fakehash'] = 'wannabe hacker';
				$_SESSION['hash'] = $rtEmail . $rtPassword;
				$options = ['cost' => 11];
				$_SESSION['check'] = password_hash($rtEmail . $rtPassword, PASSWORD_BCRYPT, $options);
				header('Location: homepage-edit.php');
			} else{
				echo 'I fucked up.<br>';
			}
	    }
	} else{
		echo 'Username is wrong, biatch!';
		die();
	}
}
 
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login | Music For Pilates </title>
	<?php include('includes/head-cms.php'); ?>
	
	<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
<section class="login">

	<div class="blueCircle">
	</div>

	<div class="loginContainer">
		<h1>Sign In to MFP CMS</h1>
		<form action="index.php" name="login" class="loginForm" method="POST">
			<label for="username">Username</label>
			<input type="text" maxlength="100" id="username" name="email" class="input username">
			<label for="password">Password</label>
			<input type="password" maxlength="100" name="password" class="input">
			<input type="submit" name="btnLogin" class="submit" value="LOGIN">
		</form>
		<div class="forgetPassword">
			<p>Forgot your password? <a href="#">Click here</a></p>
		</div>
	</div>

</section>

</body>
</html>
