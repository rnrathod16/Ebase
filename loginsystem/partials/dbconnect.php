<?php

$servername='localhost';
$username='ritesh@localhost';
$password='ritesh@07';
$database='users';


$con=mysqli_connect($servername,$username,$password,$database);

if(!$con){
    echo "database connection failed due to ".mysqli_connect_error();
}

?>