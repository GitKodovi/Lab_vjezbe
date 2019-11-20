<?php

	$con = mysqli_connect("localhost","root","","BazaPodataka") or die ("Error connecting to MySQL server.");
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_query($con,"SET CHARACTER_SET 'utf8'");
			
//	$query = "DELETE FROM bazapodataka.podatci WHERE id =27";
			
	//$result = mysqli_query($con, $query) or die ("Error kod SELECTA");
	
	
	$var_value = $_POST['poslaniNaslov'];
	
				
	$query = "DELETE FROM bazapodataka.podatci WHERE podatci.id = '$var_value'";
			
	$result = mysqli_query($con, $query) or die ("Error kod SELECTA");


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ispis</title>
		<meta charset="UTF-8">
		<meta name="author" content="Robert Smičiklas">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

<body>

<div class="okvir">
	<header class="headerIndex">
		<img src="logo.jpg" alt="logo" width="320">
		
		<nav>
			<ul>
				<li><a href="index.html">Početna</a></li>
				<li><a href="onama.html" >O nama</a></li>
				<li><a href="unos.html">Unos proizvoda</a></li>
				<li><a href="proizvodi.php">Proizvodi</a></li>
				<li><a href="administrator.php">Administrator</a></li>
				<li><a href="http://www.tvz.hr" target="_blank">Tvz</a></li>
				
			</ul>
		</nav>
		<div class="cisti">
		</div>
	</header>


<div class="skripta">

	<h2 class = "unosNaslov">Proizvod je obrisan iz baze</h2>
	</br>
	<h3 class="unosNaslov"><a href="administrator.php">Povratak</a></h3>
		

</div>
</body>

</html>