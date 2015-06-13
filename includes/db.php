<?php

// Create connection
$con=mysqli_connect("mysql10.000webhost.com","#","#","#"); 

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
