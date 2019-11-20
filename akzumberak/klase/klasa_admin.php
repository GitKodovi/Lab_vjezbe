<?php
	class admin
	{
		var $obrada;
		var $username;
		var $password;

		function log() {

			if (isset($this->obrada))
			{
				$ime = (isset($this->username)) ? $this->username : '';
				$zaporka = (isset($this->password)) ? MD5($this->password) : '';
				
				include('config.php');			
				$sql = "SELECT * FROM korisnici WHERE username = '$ime' and password= '$zaporka'"; 
				$query = mysqli_query($connect, $sql) or die ("Error kod SELECTA");;
				$user=mysqli_fetch_array($query);
				
				$username=$user['username'];
				$password=$user['password'];
			
				if (empty($ime) || empty($zaporka)) {
					$error = 'Moras popuniti sva polja!';
					require('templates/formular_za_ulaz_u_admin.tmp.php');
					exit;
				}
				else if ($ime != $username || $zaporka != $password) {
					$error = 'Nemate pravo pristupa!';
					require('templates/formular_za_ulaz_u_admin.tmp.php');
					exit;
				}
				else {
					$_SESSION['prijava'] = "prijavvva";
				}
				
				require_once('admin/ulaz.php');	
				exit;
				
			}
			require('templates/formular_za_ulaz_u_admin.tmp.php');	
			exit;

		}	
	}
?>