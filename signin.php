<?php session_start(); ?>

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
				<h1>Sign In</h1>
				<hr />
			</header>
			<p>You must be invited in order to join - Please just login with universal password for now.</p>

			<form method="post" action="#">
				<ul>
					<li><input type="password" name="pass" placeholder="Password" /></li>
					<li><input type="submit" name="login" class="submit" value="Login" /></li>
					<li class="lgn"><a href="http://thewebproject.hostei.com/">Sign Up</a></li>
				</ul>
			</form>
			<footer>
				<p><a href="admin.html" class="credit">Admin Launch Pad</a></p>
			</footer>
		</section>
	</div>
	
	<?php
		include 'includes/db.php';
		
		if(isset($_POST['pass'])){
			$pass = $_POST['pass'];
			if($pass == "B10bisc00l"){
				$_SESSION['pass'] = $pass;
				header("Location: http://thewebproject.hostei.com/chat.php");
			}
		}
	?>
</body>
</html>