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
	
		<section class="sekcija1">
		
		<header>
							
		<div class="banner-slider">
            <div class="banner-slider-inner">
                <div class="banner-slider-contents">
                <!--BITNO ... UBACI SVOJE SLIKE I NIŠTA DRUGO U KODU NE MJENJAJ-->  
                    <img src="slikebanner/komp2.jpg" Alt="" width="100"><!--
                    --><img src="slikebanner/komp4.jpg" Alt="" width="100"><!--
                    --><img src="slikebanner/komp6.jpg" Alt="" width="100"><!--
                    --><img src="slikebanner/komp7.jpg" Alt="" width="100">
                </div>
                <ul class="banner-slider-arrows outside">
                    <li class="previous"><i class="fa fa-angle-left"></i></li>
                    <li class="next"><i class="fa fa-angle-right"></i></li>
                </ul>
                <ul class="banner-slider-blobs"></ul>
            </div>
        </div>
		
		<script src="js/skate.js"></script>
			
			
			<nav class="nav1">
				<ul>
					<li><a href="index.php" class="home">O klubu </a></li>
					<li><a href="trka.php">Žumberačka utrka </a></li>
					<li><a href="skola_trcanja.php">Škola trčanja </a></li>
				</ul>
			</nav>
			
			<nav class="nav2">
				<ul>
					<li><a href="index.php?sadrzaj=o_nama" >O nama</a></li>
					<li><a href="index.php?sadrzaj=media" >Mi u medijima</a></li>
					<li><a href="index.php?sadrzaj=povijest">Povijest kluba</a></li>
					<li><a href="index.php?sadrzaj=clanovi">Članovi</a></li>
					<li><a href="index.php?sadrzaj=kontakt">Kontakt </a></li>
					<li><a href="index.php?sadrzaj=dokumenti">Dokumenti i norme </a></li>
				</ul>
			</nav>
			<div align ="right">
		<a href="https://www.facebook.com/Atletski-Klub-%C5%BDumberak-142833749119360/" target="_blank"><img src="img/fb_zumberak.jpg" width="100" ></a>
	</div>	
					
		</div>
		<div class="cisti"></div>
			
		</header>

		
		</section>


	</div>
	
	<?php
		if(isset($_GET['sadrzaj'])) {
										
			switch ($_GET['sadrzaj']) {
				case 'o_nama': require('klub/o_nama.php'); break;
				case 'povijest': require('stranica_u_izradi.php'); break;
				case 'clanovi': require('klub/clanovi.php'); break;
				case 'kontakt': require('klub/kontakt.php'); break;
				case 'dokumenti': require('klub/dokumenti_i_norme.php'); break;
				case 'media': require('klub/media.php'); break;						
			}
		}
		else {
			require('klub/o_nama.php');
		}
	?>

	

</body>
</html> 
