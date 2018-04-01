<?php 

	$server  = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'mp3';

	$connect=  mysqli_connect($server, $username, $password, $database);
	if(!$connect) die("Error connecting!");

 ?>