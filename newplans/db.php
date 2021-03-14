<?php


$con = mysqli_connect("localhost","ritesh@localhost","ritesh@07","users");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>