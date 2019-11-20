<?php
	$hostname = "localhost";
	$username = "akzumbe9_boris";
	$password = "ag129fds";
	$dbname = "akzumbe9_akzumberak";
	
	$connect = mysqli_connect($hostname, $username, $password, $dbname) or die("could not connect");
	
	mysqli_select_db($connect, $dbname) or die("could not select db");
	mysqli_query($connect, "SET NAMES utf8"); 
	
?>