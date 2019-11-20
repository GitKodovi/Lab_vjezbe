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

		<section class="sekcija1">
		
		<header>
				
			<div class="trkaSlika">
			</div>
			
			<nav class="nav1">
				<ul>
				<li><a href="index.php">O klubu </a></li>
				<li><a href="trka.php" class="home">Žumberačka utrka </a></li>
				<li><a href="skola_trcanja.php">Škola trčanja </a></li>
				</ul>
			</nav>
			
			<nav class="nav2">
				<ul>
					<li><a href="trka.php?sadrzaj=o_utrci">O utrci </a></li>
					<li><a href="trka.php?sadrzaj=raspis">Raspis </a></li>
					<li><a href="trka.php?sadrzaj=prijave">Prijave </a></li>
					<li><a href="trka.php?sadrzaj=arhiva">Arhiva rezultata </a></li>
				</ul>
			</nav>
			
	
		</header>
				<br>
				<div align ="right">
				<a href="https://www.facebook.com/zumberackautrka/" target="_blank"><img src="img/fb_utrka.jpg" width="100" ></a>
				</div>
		</div>
			<div class="cisti"></div>
		
		<?php
			if(isset($_GET['sadrzaj'])) {
											
				switch ($_GET['sadrzaj']) {
					case 'o_utrci': require('trka/utrka.php'); break;
					case 'raspis': require('trka/raspis.php'); break;
					case 'prijave': require('trka/prijave.php'); break;
					case 'arhiva': require('trka/arhiva.php'); break;
					case 'popis': require('trka/popis_prijavljenih.php'); break;
				}
			}
			else {
				require('trka/utrka.php');
			}
			
			
		?>


		</section>

		


</body>
</html> 
