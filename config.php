<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "php15_project";
	$link = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($link,"UTF8");
?>