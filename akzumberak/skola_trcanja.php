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
				
			<div class="slikaHeader">
		
			</div>
			
			
			<nav class="nav1">
				<ul>
					<li><a href="index.php" >O klubu </a></li>
					<li><a href="trka.php">Žumberačka utrka </a></li>
					<li><a href="skola_trcanja.php" class="home">Škola trčanja </a></li>

				</ul>
			</nav>
	
			<nav class="nav2">
				<ul>
					<li><a href="skola_trcanja.php?sadrzaj=o_skoli">O školi </a></li>
					<li><a href="skola_trcanja.php?sadrzaj=program">Program škole trčanja </a></li>
					<li><a href="skola_trcanja.php?sadrzaj=upisi">Upisi </a></li>


				</ul>
			</nav>
	
		</header>
		<br>
		
				<div align ="right">
				<a href="https://www.facebook.com/zumberakskola/" target="_blank"><img src="img/fb_skola.jpg" width="100" ></a>
				</div>
		</div>
		<div class="cisti"></div>
		
		<?php
			if(isset($_GET['sadrzaj'])) {
											
				switch ($_GET['sadrzaj']) {
					case 'o_skoli': require('skola/o_skoli.php'); break;
					case 'program': require('skola/program.php'); break;
					case 'upisi': require('skola/upisi.php'); break;
				}
			}
			else {
				require('skola/o_skoli.php');
			}
		?>


		</section>
		


</body>
</html> 
