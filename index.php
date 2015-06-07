<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link rel="stylesheet" href="styles.css" />
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>
<body>
	<header class="title"><span>The</span> Web Project</header>
	<div id="wrapper">
		<section="loginBox">
			<header>
				<h1>Sign In</h1>
				<hr />
			</header>
			<p>You must be invited in order to join.</p>
			<form method="post" action="#">
				<ul>
					<li><input type="password" name="pass" placeholder="Password" /></li>
					<li><input type="submit" name="login" class="submit" value="Log In" /></li>
				</ul>
			</form>
			<footer>
				<p><span class="credit"> The Web Project </span></p>
			</footer>
		</section>
	</div>
	
	<?php
		if(isset($_POST['pass'])){
			$pass = $_POST['pass'];
			if($pass == "B10bisc00l"){
				header('Location: http://thewebproject.comyr.com/chat.html');
			}
		}
	?>
</body>
</html>