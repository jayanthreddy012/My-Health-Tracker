<?php
$con = mysqli_connect("192.168.100.10","root","sagarsoft@123","skedpop");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?> 