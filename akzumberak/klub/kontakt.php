<!DOCTYPE html>
<html>
<head>
	<title>Atletski klub Žumberak</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="izgled.css">
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


	<br>
	<div class="okvir" >

		<section class="s1">
		
			<br><br>
			<h3> KONTAKT </h3><br>

			<h4>Adresa: </h4>
			<p>	Atletski klub Žumberak </p>
			<p>	Sošice 15, </p>
			<p>	10475 Sošice </p>
			<br>

			<h4>OIB: 57920712577 </h4>
			<h4>IBAN: HR5723600001101525330</h4>
			<h4>ZAGREBAČKA BANKA d.d. Zagreb</h4>
			<br>

			<h4>Email: akzumberak@gmail.com</h4>
			<br>

			<h4>Predsjednik: </h4>
			</p>Boris Smičiklas</p>
			</p>Email: smiciklasb@gmail.com</p>
			</p>095 / 9191 002</p>
			<br>
			
			<h4>Dopredsjednici:</h4>
			<p>	Mia Pamuković</p>
			
			<p>	Siniša Resanović</p>
			
			<br>

			<h4>Tajnik:</h4>
			<p>	Petar Krišto</p>
			
			<br>

			<h4>Članovi IO:</h4>
			<p>	Boris Smičiklas</p>
			<p> Mia Pamuković</p>
			<p>	Siniša Resanović</p>
			<p>	Petar Krišto</p>
			<p>	Danica Juričić Spasović</p>
			<p>	Radovan Trstenjak</p>
			<p>	Drago Paripović</p>
			<br>

			<br><br>

		
		</section>
		
		<br><br><br><br>
		
		<section class="s2">
			
			<?php
				if(isset($_POST['email'])) {
				 
					// Definiranje maila kome se šalje i opisa 
					$email_to = "smiciklasb@gmail.com";
					$email_subject = "Poslano kontakt formom AK Žumberak";
				 
				 
				 /*
					// provjera postojanja podataka
					if(!isset($_POST['ime']) ||
						!isset($_POST['email']) ||
						!isset($_POST['poruka'])) {
						die('Žao nam je, ali niste popunili sva potrebna polja.');       
					}
				 */
					 
				 
					$ime = $_POST['ime']; // required
					$email_from = $_POST['email']; // required
					$poruka = $_POST['poruka']; // required
				 
				 // provjera ispravnosti obrasca. preg_match provjerava posojanje točno određenih znakova, a strlen broj znamenaka u varijabli
				 
					$error_message = "";
					$email_provjera = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
					
				
				 
				  if(!preg_match($email_provjera,$email_from)) {
					$error_message .= 'Niste unijeli valjanu Email adresu <br />';
				  }
				 
				  if(strlen($poruka) < 2) {
					$error_message .= 'Niste unijeli valjanu poruku.<br />';
				  }
				  
				  if(strlen($ime) < 3) {
					$error_message .= 'Niste unijeli ispravno ime.<br />';
				  }
				  
				  if(strlen($error_message) > 0) {
					die($error_message);
					echo "<p style='color:red'>$error_message </p>";
				  }
				 
				  else {
					echo "<p style='color:green'>Hvala što ste nas kontaktirali, odgovorit ćemo vam uskoro</p>";
				  }
				 
					$email_message = "Form details below.\n\n";
				 
					 
					function clean_string($string) {
					  $bad = array("content-type","bcc:","to:","cc:","href");
					  return str_replace($bad,"",$string);
					}
				 
					 
				 
					$email_message .= "Name: ".clean_string($ime)."\n";
					$email_message .= "Email: ".clean_string($email_from)."\n";
					$email_message .= "poruka: ".clean_string($poruka)."\n";
				 
				// create email headers
				$headers = 'From: '.$email_from."\r\n".
				'Reply-To: '.$email_from."\r\n" .
				'X-Mailer: PHP/' . phpversion();

				@mail($email_to, $email_subject, $email_message, $headers);  // funkcija mail mora imati 4 parametra, kome, što, poruka, kako će izgledati ispis
				
				}
			?>

			
			
			<h3 align="left">Pošalji upit</h3>
			<form method="post" action="">
				<table style="font-size:13px; width:100%;" border="0" cellpadding="0" cellspacing="2">
				<tr>
					<td align="left" style="padding:10px; width:30%; font-size:15px;"><strong>Ime i Prezime: </strong></td>
					<td style="padding:10px; width:70%;"><input name="ime" size="40" type="text"></td>
				</tr>
				
				<tr>
					<td align="left" style="padding: 10px; font-size:15px;"><strong>E-mail:</strong></td>
					<td style="padding: 10px;"><input name="email" size="40" type="text"></td>
				</tr>
				
				<tr>
					<td align="left" valign="top" style="padding: 10px; font-size:15px;"><strong>Poruka: </strong></td>
					<td style="padding: 10px;"><textarea name="poruka" cols="50" rows="15" wrap="VIRTUAL"></textarea></td>
				</tr>
				
				<tr>
					<td align="right" valign="top" style="padding: 10px;"> </td>
					<td><input style="font-size:18px; padding:3px" name="submit" type="submit" value="Pošalji"></td>
				</tr>
				
				</table>
			</form>
		
			
		

		
		</section>


		
	</div>

</body>
</html> 
