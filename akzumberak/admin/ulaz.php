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
		
	<div class="okvir">
		ULAZ

		
	</div>
	
	<?php
		if(isset($_GET['sadrzaj'])) {
										
			switch ($_GET['sadrzaj']) {
				case 'o_nama': require('klub/o_nama.php'); break;
				case 'povijest': require('klub/povijest_kluba.php'); break;
				case 'clanovi': require('klub/clanovi.php'); break;
				case 'kontakt': require('klub/kontakt.php'); break;
				case 'dokumenti': require('klub/dokumenti_i_norme.php'); break;				
			}
		}
		else {
			require('klub/o_nama.php');
		}
	?>
	
	

</body>
</html> 
