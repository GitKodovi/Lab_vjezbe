<?php

	session_start();
	if (isset($_POST['obrada'])){
		$_SESSION['user'] = $_POST['username'];
	}
		
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="izgled.css" type="text/css" media="screen" />
	</head>
	<body>
		<?php
			echo "<a href=\"index.php?logout=\">Logout</a><br />";

			include('config.php');

			include('klase/klasa_admin.php');

			$x = new admin();
			if (isset($_POST['obrada'])){
				$x->obrada = $_POST['obrada'];
				$x->username = $_POST['username'];
				$x->password = $_POST['password'];
			}
			echo $x->log();
		?>
	</body>
</html>	
