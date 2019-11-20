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

<?php

	require('config.php');

	if(isset($_GET['akc']) ) {

		$ime = $_GET['ime'];
		$prezime = $_GET['prezime'];
		$klub = $_GET['klub'];
		$email = $_GET['email'];
		$grad = $_GET['grad'];
		$drzava = $_GET['drzava'];
		$spol = $_GET['spol'];
		$godiste = $_GET['godina_rodjenja'];
		$staza = $_GET['staza'];
		
		if(empty($ime) || empty($prezime) || empty($spol) || empty($godiste) || empty($staza)) {
			echo "Prijava nije uspješna, morate popuniti sva polja označena zvijezdicom";
		}
		else{
			$sql = mysqli_query($connect, "INSERT INTO prijaveutrka (ime, prezime, klub, email, grad, drzava, spol, godiste, staza) VALUES ('$ime', '$prezime', '$klub', '$email', '$grad', '$drzava', '$spol', '$godiste', '$staza')");
			
			echo "<br><div class='okvir'>";
				echo '<div class = "prijavljeni">';
					echo "<br><h2> Vaša prijava je uspješna </h2> <br>";
					
					echo "<h3> Ime: $ime </h3>";
					echo "<h3> Prezime: $prezime </h3>";
					echo "<h3> Spol: $spol </h3>";
					echo "<h3> Klub: $klub </h3>";
					echo "<h3> email: $email </h3>";
					echo "<h3> Grad: $grad </h3>";
					echo "<h3> Drzava: $drzava </h3>";
					echo "<h3> Godiste: $godiste </h3>";
					echo "<h3> Staza: $staza </h3>";
				echo "</div>";
			echo "</div>";
			
		exit;
		}
		
	}
	
	
?>

<div class="okvir">

<form name="prijave" action="trka.php" method="get">

	<h2 class="prijaveNaslov">Prijave</h2>
				<div class="cisti">
				</div>
	
	<table>
		<input type="hidden" name="sadrzaj"value="prijave"/>
		<tr height="30"><td >Ime:*</td><td><input type="text" name="ime"></input></td></tr>
		<tr height="30"><td>Prezime:*</td><td><input type="text" name="prezime"></input></td></tr>
		<tr height="30"><td>Klub:</td><td><input type="text" name="klub"></input></td></tr>
		<tr height="30"><td>E-mail adresa:</td><td><input type="text" name="email"></input></td></tr>
		<tr height="30"><td>Grad:</td><td><input type="text" name="grad"></input></td></tr>
		<tr height="30"><td>Drzava:</td><td><input type="text" name="drzava"></input></td></tr>
		<tr height="30"><td>Spol*</td> <td><input value="Ž" name="spol" type="radio" checked="checked">ženski</input><br><input value="M" name="spol" type="radio">muški</input></td></tr>
		<tr height="30">
			<td>Godina rođenja:*</td>
			<td>
				<select size="1" name="godina_rodjenja">
					<option value="">* * * * </option>
					<option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option>
				</select>
				<tr height="30">
					<td>Odabir staze*</td>
					<td><input value="15" name="staza" type="radio" checked="checked">15 km </input><br><input value="6" name="staza" type="radio">6 km</input></td>
				</tr>
			</td>
		</tr>

		<input type="hidden" name="akc" value="posalji"/>
		<tr>	
			<td></td>
			<td>
				<input class="send" type="submit" value="Prijavi se"/>
			</td>
		</tr>
	
	</table>
	<br>
	
	<a href="trka.php?sadrzaj=popis"> <p align="left"> Popis prijavljenih </p> </a>

	<br><br>
	
	
</form>

</div>



</body>
</html> 
