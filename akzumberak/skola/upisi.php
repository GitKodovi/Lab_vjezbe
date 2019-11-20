
<!DOCTYPE html>

<html>

<head>
	<title>Atletski klub Žumberak</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="izgled.css">
	
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

		<br><br>

		
		
		<?php

			require('config.php');

			if(isset($_GET['trk']) ) {

				$ime = $_GET['ime'];
				$prezime = $_GET['prezime'];
				$email = $_GET['email'];
				$spol = $_GET['spol'];
				$datumRodenja = $_GET['datumRodenja'];
				$oib = $_GET['oib'];
				$adresa = $_GET['adresa'];
				$grad = $_GET['grad'];
				$postanskiBroj = $_GET['postanskiBroj'];
				$mobitel = $_GET['mobitel'];
				
					
				if(empty($ime) || empty($prezime) || empty($spol) || empty($email) || empty($oib) || empty($adresa) || empty($grad) || empty($postanskiBroj) || empty($mobitel) || empty($datumRodenja)){
					echo "Prijava nije uspješna, morate popuniti sva polja označena zvijezdicom";
				}
				
				
				else{
					
						function clean_string($string) {
					  $bad = array("content-type","bcc:","to:","cc:","href");
					  return str_replace($bad,"",$string);
					}
				 
					// Definiranje maila kome se šalje i opisa 
					
					$email_to = "smiciklasb@gmail.com";
					$email_subject = "Nova prijava u školu trčanja";
					$email_message = "Novi polaznik je prijavljen kao:\n\n";	

					$email_message .= "IME: ".clean_string($ime)."\n";
					$email_message .= "PREZIME: ".clean_string($prezime)."\n";
					$email_message .= "EMAIL: ".clean_string($email)."\n";
					$email_message .= "DATUM ROĐENJA: ".clean_string($datumRodenja)."\n\n";
					
					$email_message .= "Sve prijave vidljive su na: akzumberak.hr/skola/lista.php \n\n";
					
				 
				// create email headers
				$headers = 'From: '.$email."\r\n".
				'Reply-To: '.$email."\r\n" .
				'X-Mailer: PHP/' . phpversion();

				@mail($email_to, $email_subject, $email_message, $headers);  // funkcija mail mora imati 4 parametra, kome, što, poruka, kako će izgledati ispis

				$sql = mysqli_query($connect, "INSERT INTO skola (ime, prezime, email, spol, datumRodenja, oib, adresa, grad, postanskiBroj, mobitel) VALUES ('$ime', '$prezime', '$email', '$spol', '$datumRodenja', '$oib', '$adresa', '$grad', '$postanskiBroj', '$mobitel')");
					
					echo "<br>Hvala na prijavi, javit ćemo vam uskoro na Email";				
			
		
				exit;
				}
				
			}
			
					
		?>
	
	
			<br>
			<h2 class="prijaveNaslov">UPISI</h2>
			<br><br>
		
			<section class="s3">
				<form name="skola" action="skola_trcanja.php" method="get">

					<h3 class="prijaveNaslov">Prijava u školu trčanja</h3>
						<div class="cisti">
						</div>
					
					<table class="upisi_tablica">
						<input type="hidden" name="sadrzaj"value="upisi"/>
						<tr height="30"><td>Ime:*</td><td><input type="text" name="ime"></input></td></tr>
						<tr height="30"><td>Prezime:*</td><td><input type="text" name="prezime"></input></td></tr>
						<tr height="30"><td>E-mail adresa:*</td><td><input type="text" name="email"></input></td></tr>
						<tr height="30"><td>Spol:*</td> <td><input value="Ž" name="spol" type="radio" checked="checked">ženski</input><br><input value="M" name="spol" type="radio">muški</input></td></tr>
						<tr height="30"><td>Datum rođenja:*</td><td><input type="date" name="datumRodenja"></input></td></tr>
						<tr height="30"><td>OIB:*</td><td><input type="text" name="oib"></input></td></tr>
						<tr height="30"><td>Adresa:*</td><td><input type="text" name="adresa"></input></td></tr>
						<tr height="30"><td>Grad:*</td><td><input type="text" name="grad"></input></td></tr>
						<tr height="30"><td>Poštanski broj:*</td><td><input type="text" name="postanskiBroj"></input></td></tr>
						<tr height="30"><td>Mobitel:*</td><td><input type="text" name="mobitel"></input></td></tr>

						<input type="hidden" name="trk" value="posalji"/>
						<tr>	
							<td></td>
							<td>
								<input class="send" type="submit" value="Prijavi se"/>
							</td>
						</tr>
					
					</table>
				</form>
			</section>
			
			<section class="s4">
				<br><br>
				<h3> KONTAKT </h3><br>
				<p>	Atletski klub Žumberak </p>
				<br>

				<h4>OIB: 57920712577 </h4>
				<h4>IBAN: HR9823600001502649856</h4>
				<h4>ZAGREBAČKA BANKA d.d. Zagreb</h4>
				<br>

				<h4>Email: akzumberak@gmail.com</h4>
				<br>

				<h4>Koordinator: </h4>
				</p>Barbara Fumić</p>
				
				<br>
				
				<h4>Glavni trener: </h4>
				</p>Zoran Jozić</p>
				
				<br>
			
			
			</section>
		
		
	</div>
	<div class="cisti"></div>
	<br><br><br>
	
	
</body>


</html>