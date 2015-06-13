<?php

session_start();

if(isset($_SESSION['pass'])){
	header('Location: http://thewebproject.hostei.com/chat.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>The Web Project</title>
	<link rel="stylesheet" href="css/styles.css" />
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>
<body>
	<header class="title"><a class="title" href="http://thewebproject.hostei.com/"><span>The</span> Web Project</a></header>
	<div id="wrapper">
		<section="loginBox">
			<header>
				<h1>Sign Up</h1>
				<hr />
			</header>
			<p>You must be invited in order to join.</p>
				
			<form method="post" action="#">
				<ul>
					<li><input type="email" name="email" placeholder="Email" /></li>
					<li><input type="password" name="pass" placeholder="Password" /></li>
					<li><input type="submit" name="login" class="submit" value="Sign Up" /></li>
					<li class="lgn"><a href="http://thewebproject.hostei.com/signin.php">Sign In</a></li>
				</ul>
			</form>
			<footer>
				<p><a href="admin.html" class="credit">Admin Launch Pad</a></p>
			</footer>
		</section>
		
		<?php
			include 'includes/db.php';
			
			if(isset($_POST['pass']) && isset($_POST['email'])){
				$pass = $_POST['pass'];
				$email = $_POST['email'];
				
				$check = mysqli_query($con, "SELECT email FROM hack WHERE email='$email'");
				
				if(mysqli_num_rows($check) == 0){
					if(strlen($pass) > 4){
						$sql = "INSERT INTO hack (email, password) VALUES ('$email', '$pass')";
						if (mysqli_query($con, $sql)) { ?>
							
							<div class="notification">
								<p>Thank You for signing up! When we finish the website we will notify you! For now please sign in with the password <strong>'B10bisc00l'</strong></p>
							</div>
						<?php
						
						}
					}
				}else{
					
					header('Location: http://thewebproject.hostei.com/');
			
				}
			}
		?>
	</div>
	
	
</body>
</html>