<?php
session_start();
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
				<li><a href="login.html">Login</a></li>
				<li><a href="registracija.html">Registracija</a></li>
				<li><a href="administrator.php">Administrator</a></li>
				<li><a href="http://www.tvz.hr" target="_blank">Tvz</a></li>
				
			</ul>
		</nav>
		<div class="cisti">
		</div>
	</header>


<div class="skripta">


	<?php
	
		$con = mysqli_connect("localhost","root","","BazaPodataka") or die ("Error connecting to MySQL server.");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_query($con,"SET CHARACTER_SET 'utf8'");
		
		$query = "SELECT * FROM bazapodataka.podatci";
		$result = mysqli_query($con, $query) or die ("Error kod SELECTA");
		
	
		while($row = mysqli_fetch_array($result)) {
		//	echo  $row['naslov'] . ' ' . $row['sifra'] . ' ' . $row['kategorija'] . ' ' . $row['opis'] .  ' ' . $row['cijena'] . ' ' . "<img src='" . $row['slika'] . "'> " .'<br />';
			$naslov = $row['naslov'];
			$sifra = $row['sifra'];
			$kategorija = $row['kategorija'];
			$opis = $row['opis'];
			$cijena = $row['cijena'];
			$slika = $row['slika'];
			$arhiva = $row['arhiva'];
			
			
			if($arhiva==null){
				echo " <div class='skriptaLijevo'><h4 class='unosPodaci'>Naziv proizvoda: $naslov</h4>";
				echo "<h4 class='unosPodaci'>Sifra proizvoda: $sifra</h4>";
				echo "<h4 class='unosPodaci'>Kategorija: $kategorija</h4>";
				echo "<h4 class='unosPodaci'>Opis proizvoda: $opis</h4>";
				echo "<h4 class='unosPodaci'>Cijena: $cijena kn</h4> </div>";
				echo "<div class='skriptaDesno'><img src ='$slika'></div>";
				echo "<div class = 'cisti'></div><hr>";
			}
		}
	?>
		

</div>
</body>

</html>












