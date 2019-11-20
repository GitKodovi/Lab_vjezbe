<!DOCTYPE html>
<html>
<head>
	<title>Atletski klub Žumberak</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../izgled.css">
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link href="css/skate.min.css" rel="stylesheet" type="text/css">


	
	<meta property="og:title" content="Atletski klub Žumberak" />
	<meta property="og:type" content="sport" />
	<meta property="og:url" content="http://www.akzumberak.hr/" />
	<meta property="og:image" content="http://www.akzumberak.hr/favicon/trk.jpg" />
	<meta property="og:site_name" content="Atletski klub Žumberak" />
	<meta property="fb:app_id" content="291830214270649" />
	<meta property="og:description" content="cestovno i dugoprugaško trčanje" /> 

	<meta NAME="TITLE" CONTENT="atletski klub žumberak">
	<meta NAME="DESCRIPTION" CONTENT="Atletski klub Žumberak,Sošice osnovan 1997. godine bavi se trčanjem na duge pruge i u hrvatskoj je dao značajan doprinos razvoju cestovnog i dugoprugaškog trčanja."> 
	<meta NAME="KEYWORDS" CONTENT="atletika, žumberak, atletski, sošice, joging, trcanje, maraton, trening, kros, polumaraton, klub">

</head>

<body>

<div class="okvir">

<div class="popis_prijavljenih">

	<?php

		require('../config.php');		
		

		
		
		if ($_POST["brisi"]){
			$brisiId = $_POST['brisi'];
			
			
			$aktivanSQL = "SELECT skola.aktivan FROM skola WHERE skola.skolaId = '$brisiId'";
			$result = mysqli_query($connect, $aktivanSQL) or die ("Greška kod provjere je li aktivan");
			
			while($row = mysqli_fetch_array($result)) {
				$aktivan = $row['aktivan'];
			}
			
			if($aktivan == 0) { 
				$brisi = "DELETE FROM skola WHERE skolaId = '$brisiId'";
				$result = mysqli_query($connect, $brisi) or die ("Greška kod brisanja");
			}
			
			else {
				echo "NE MOŽE SE OBRISATI AKTIVNI ČLAN";
			}		
		}
		
		if ($_POST["aktiviraj"]){
			$aktivirajId = $_POST['aktiviraj'];
			$aktiviraj = "UPDATE skola SET aktivan='1' WHERE skolaId='$aktivirajId'";
			$result = mysqli_query($connect, $aktiviraj) or die ("Greška kod brisanja");
			
			echo "ČLAN JE AKTIVIRAN";

		}
		
		if ($_POST["deaktiviraj"]){
			$deaktivirajId = $_POST['deaktiviraj'];
			$deaktiviraj = "UPDATE skola SET aktivan='0' WHERE skolaId='$deaktivirajId'";
			$result = mysqli_query($connect, $deaktiviraj) or die ("Greška kod brisanja");
			
			echo "ČLAN JE DEAKTIVIRAN";
			
		}
				
			
		$sql = mysqli_query($connect, "SELECT * FROM skola ORDER BY skolaId ASC") or die ("Error kod SELECTA");
		
		echo "<br><br><br><h3> POPIS PRIJAVLJENIH U ŠKOLU TRČANJA</h3><br><br>";
		
		echo "<table>
				<tr>
					<th width='80'>Redni broj</td>
					<th width='100'>Ime</td>
					<th width='100'>Prezime</td>
					<th width='100'>Datum rođenja</td>
					<th width='100'>Email</td>
					<th width='100'>Grad</td>
					<th width='100'>Adresa</td>
					<th width='100'>Mobitel</td>
				</tr>";
						
		$i = 1;
		
		while($red = mysqli_fetch_array($sql) ) {
			$id = $red['skolaId'];
			$aktiv = $red['aktivan'];
			$ime = $red['ime'];
			$prezime = $red['prezime'];
			$datumRodenja = $red['datumRodenja'];
			$email = $red['email'];
			$grad = $red['grad'];
			$adresa = $red['adresa'];
			$mobitel = $red['mobitel'];
					
			
			if ($aktiv == 1) {
				echo "<tr style='color:green'>";
				echo "aktiv je 1";
			}
			else {
				echo "<tr style='color:red'>";
				echo "aktiv je 0";
			}
			echo   "<td>$i</td>
					<td>$ime</td>
					<td>$prezime</td>
					<td>$datumRodenja</td>
					<td>$email</td>
					<td>$grad</td>
					<td>$adresa</td>
					<td>$mobitel</td>
					<td>    
					<form action = '' method = 'post'>
						<input type = 'hidden' name = 'brisi' value='$id'>
						<input type = 'submit' value = 'Obriši prijavu'>
					</form>
					</td>
					
					<td>    
						<form action = '' method = 'post'>
						<input type = 'hidden' name = 'aktiviraj' value='$id'>
							<input type = 'submit' value = 'Aktiviraj člana'>
						</form>
					</td>
					
					<td>    
						<form action = '' method = 'post'>
							<input type = 'hidden' name = 'deaktiviraj' value='$id'>
							<input type = 'submit' value = 'Deaktiviraj člana'>
						</form>
					</td>
				</tr>";
			

			
			
			$i++;
		}
		
		echo "</table>";	
		

	?>

</div>
</div>

</body>
</html>