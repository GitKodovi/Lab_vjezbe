<?php
	
		$con = mysqli_connect("localhost","root","","BazaPodataka") or die ("Error connecting to MySQL server.");
		mysqli_query($con,"SET NAMES 'utf8'");
		mysqli_query($con,"SET CHARACTER_SET 'utf8'");
		
		$korIme = $_POST['korisnickoIme'];
		$pravoIme = $_POST['pravoIme'];
		$sifra1 = $_POST['lozinka1'];
		$sifra2 = $_POST['lozinka2'];
		$level = 1;
		
		if($sifra1 != $sifra2)
			echo "Lozinke nisu iste!";
			
		else{
		
			
			$hashLozinka = md5($sifra1);
		
			//$query = "INSERT INTO bazapodataka.users (username, password, name, level) VALUES ('$korIme', '$hashLozinka',  '$pravoIme', '1')";
			//$result = mysqli_query($con, $query) or die ("Error");
			
			
			$query = "INSERT INTO bazapodataka.users (username, password, name, level) VALUES (?, ?, ?, ?)";
			$stmt=mysqli_stmt_init($con);
			if(mysqli_stmt_prepare($stmt, $query)){
				mysqli_stmt_bind_param($stmt, 'ssss', $korIme, $hashLozinka, $pravoIme, $level);
				mysqli_stmt_execute($stmt);
			}

		}
		

	?>