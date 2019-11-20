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
		
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		
		
		//$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		//$result = mysqli_query($con, $query) or die ("Error");
		
		$query = "SELECT username, password, level FROM users WHERE username=? AND password=?";
		$stmt=mysqli_stmt_init($con);
		if(mysqli_stmt_prepare($stmt, $query)){
			mysqli_stmt_bind_param($stmt, 'ss', $user, $pass);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
		}
		

		mysqli_stmt_bind_result($stmt, $a, $b, $lvl);
		mysqli_stmt_fetch($stmt);
		
		
		/*if (mysqli_num_rows($result)>0){
			echo ('Uspjesan login ');
		*/
		
		if (mysqli_stmt_num_rows($stmt)>0){
			echo ('Uspjesan login');
			
			
			/*while($row = mysqli_fetch_array($result)) {
			
				$level = $row['level'];	
			}*/
			
			

			/*if($level == 1)
				echo "</br>$username, nemate dovoljna prava za pristup ovoj stranici";
				*/
			if($lvl == 1)
				echo "</br>$user, nemate dovoljna prava za pristup ovoj stranici";
				
				
			else{
					
					//phpinfo(); - informacije o PHP-u
				$naziv = $_POST['nazivProizvoda'];
				$sifra = $_POST['sifraProizvoda'];
				$kategorija = $_POST['kategorijaProizvoda']; // PROVJERITI
				$cijena = $_POST['cijena'];
				$opis = $_POST["opis"];
				$datoteka = $_POST['datoteka'];
				$arhiva = $_POST['arhiva'];
				//  \(backslash) preskace znak iza njega
				
				$con = mysqli_connect("localhost","root","","BazaPodataka") or die ("Error connecting to MySQL server.");
				mysqli_query($con,"SET NAMES 'utf8'");
				mysqli_query($con,"SET CHARACTER_SET 'utf8'");
						
				$query = "SELECT * FROM bazapodataka.podatci";
				$result = mysqli_query($con, $query) or die ("Error kod SELECT");
				
				
				
			
				if(isset($_POST['arhivaCheckbox'])){
					$var_value = $_POST['prikazuj'];
					$query2 = "UPDATE bazapodataka.podatci SET podatci.arhiva='1' WHERE podatci.id='$var_value'";
					$result2 = mysqli_query($con, $query2) or die ("Error kod SELECT");
				}
				if(!isset($_POST['arhivaCheckbox'])){
					$var_value = $_POST['prikazuj'];
					$query2 = "UPDATE bazapodataka.podatci SET podatci.arhiva='' WHERE podatci.id='$var_value'";
					$result2 = mysqli_query($con, $query2) or die ("Error kod SELECT");
				}
				
				
				while($row = mysqli_fetch_array($result)) {
					//echo  $row['naslov'] . ' ' . $row['sifra'] . ' ' . $row['kategorija'] . ' ' . $row['opis'] .  ' ' . $row['cijena'] . ' ' . "<img src='" .$row['slika'] . "'> " . 
				
				$naslov = $row['naslov'];
				$sifra = $row['sifra'];
				$kategorija = $row['kategorija'];
				$opis = $row['opis'];
				$cijena = $row['cijena'];
				$slika = $row['slika'];

					echo " <div class='skriptaLijevo'><h4 class='unosPodaci'>Naziv proizvoda: $naslov</h4>";
					echo "<h4 class='unosPodaci'>Sifra proizvoda: $sifra</h4>";
					echo "<h4 class='unosPodaci'>Kategorija: $kategorija</h4>";
					echo "<h4 class='unosPodaci'>Opis proizvoda: $opis</h4>";
					echo "<h4 class='unosPodaci'>Cijena: $cijena kn</h4> </div>";
						
					echo "<div class='skriptaDesno'><img src = '$slika'></div>";
					
					echo "<form action = 'brisi.php' method = 'post' class='brisiForma'>
							<input type = 'hidden' name = 'poslaniNaslov' value='$row[id]'>
							<input type = 'submit' value = 'Obrisi proizvod' class='brisiGumb'>
						</form>";
						
					echo "<form action = '' method = 'post' class='brisiForma'>
							<input type='hidden' name='prikazuj' value='$row[id]' >
							<input type='checkbox' name='arhivaCheckbox' value='1'>
							<input type = 'submit' value = 'Arhiviraj' class='brisiGumb'>
						</form>";
					
					echo "<div class = 'cisti'></div><hr>";	
				
				}
			
			}
				
		}
			
		else{
			
			echo " </br> Krivo upisan username i lozinka ili korisnik ne postoji, Registrirajte se ovdje: ";
			echo "<a href='registracija.html'>Registriraj me</a>";
		}
		
		
		/*while($row = mysqli_fetch_array($result)) {
		
			$level = $row['level'];
			if($level == 1)
			echo "$username, nemate dovoljna prava za pristup ovoj stranici";
		}*/
		
		
	
		
		
	?>

		

</div>
</body>

</html>