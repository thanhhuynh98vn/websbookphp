<?php
	$severname = "localhost";
	$user = "root";
	$password = "";
	$db = "humg-books";
	$conn = mysqli_connect($severname,$user,$password,$db);
	mysqli_set_charset($conn,"utf8");
	mysqli_query($conn,"SET NAMES 'utf8'");
?>