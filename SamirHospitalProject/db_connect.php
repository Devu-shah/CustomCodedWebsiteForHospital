<?php

$servername = 'localhost';
$user_name = 'root';
$pass_word = '';
$database = 'samirhospital';

// Connect to database

$conn = mysqli_connect($servername, $user_name, $pass_word, $database);

// Check connection

if(!$conn){
	die('Failed to Connect'.mysqli_connect_error());
}

?>