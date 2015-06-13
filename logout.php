<?php
session_start();

if(isset($_SESSION['pass'])){
	unset($_SESSION['pass']);
	if(!isset($_SESSION['pass'])){
		header("Location: http://thewebproject.hostei.com/");
	}else{
		echo "Error!";
	}
}

?>