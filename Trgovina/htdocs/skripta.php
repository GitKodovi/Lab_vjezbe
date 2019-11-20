<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ispis</title>
		<meta charset="UTF-8">
		<meta name="author" content="Robert Smièiklas">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

<body>

<div class="okvir">
	<header class="headerIndex">
		<img src="logo.jpg" alt="logo" width="320">
		
		<nav>
			<ul>
				<li><a href="index.html">Pocetna</a></li>
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


	
	<?php
		//phpinfo(); - informacije o PHP-u
		$naziv = $_POST['nazivProizvoda'];
		$sifra = $_POST['sifraProizvoda'];
		$kategorija = $_POST['kategorijaProizvoda']; // PROVJERITI
		$cijena = $_POST['cijena'];
		$opis = $_POST["opis"];
		$datoteka = $_POST['datoteka'];
		$arhiva = $_POST['arhiva'];
		
		
		
		
		$con = mysqli_connect("localhost","root","","BazaPodataka") or die ("Error connecting to MySQL server.");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_query($con,"SET CHARACTER_SET 'utf8'");
		
		$query = "INSERT INTO bazapodataka.podatci (id, naslov, sifra, kategorija, opis, cijena, slika, arhiva) VALUES (0, '$naziv', '$sifra', '$kategorija', '$opis', '$cijena', '$datoteka', '$arhiva')";
		
	
		$result = mysqli_query($con,$query) or die("Error kod INSERTA");
		
		
		$query = "SELECT * FROM bazapodataka.podatci";
		$result = mysqli_query($con, $query) or die ("Error kod SELECTA");
		
		// \(backslash) preskace znak iza njega
		
		echo "<h2 class='unosNaslov'>Unijeli ste sljedeci prizvod: </h2>";
		echo "<h4 class='unosPodaci'>Naziv proizvoda: $naziv</h4>";
		echo "<h4 class='unosPodaci'>Sifra proizvoda: $sifra</h4>";
		echo "<h4 class='unosPodaci'>Kategorija: $kategorija</h4>";
		echo "<h4 class='unosPodaci'>Opis proizvoda: $opis</h4>";
		echo "<h4 class='unosPodaci'>Cijena: $cijena kn</h4>";
?>	

</div>
</body>

</html>