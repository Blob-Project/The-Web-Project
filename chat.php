<?php 

session_start(); 

if(!isset($_SESSION['pass'])){
	header('Location: http://thewebproject.hostei.com/');
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
	<nav class="navigation">
		<li class="navButton right"><a href="#">Access Website</a></li>
		<li class="navButton"><a href="http://thewebproject.hostei.com/logout.php">Logout</a></li>
		
		<div class="clear"></div>	
	</nav>
	<header class="title"><a class="title" href="http://thewebproject.hostei.com/"><span>The</span> Web Project</a></header>
	<div id="wrapperChat">
		<div class="chatContainer">
			<?php
				include 'includes/db.php';
				
				$fetch = mysqli_query($con, "SELECT * FROM chat ORDER BY id DESC");
				
				while($row = mysqli_fetch_array($fetch)){ ?>
					<li class="post"><strong><?php echo $row['name']; ?>: <?php echo $row['date']; ?> - </strong><?php echo $row['message'];?></li>
			<?php } ?>
         </div>
        <form action="" method="post">
            <input type="text" placeholder="Name (optional)" name="name" />
            <textarea placeholder="Message" name="message"></textarea>
			<input type="submit" name="submit" class="submit" value="Post Message" />
        </form>
			<?php
				if(isset($_POST['submit'])){
					if(isset($_POST['message'])){
						$message = $_POST['message'];
						if(empty($_POST['name'])){
							$name = "annonymous";
						}else{
							$name = $_POST['name'];
						}
					}
					$sql = "INSERT INTO chat (message, name) VALUES ('$message', '$name')";
					if (mysqli_query($con, $sql)) {
						header("Location: http://thewebproject.hostei.com/chat.php");
					}
				}
				
			?>
		<footer>
			<p><a href="admin.html" class="credit">Admin Launch Pad</a></p>
		</footer>
	</div>
</body>
</html>
