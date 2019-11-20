<div class="okvir">
	
	<div class="popis_prijavljenih">
	<?php

		require('config.php');		
			
		$sql = mysqli_query($connect, "SELECT * FROM prijaveutrka") ;

		
		echo "<br><br><br><h3> POPIS PRIJAVLJENIH </h3><br><br>";
		
		echo "<table >
				<tr>
					<th width='80'>Redni broj</th>
					<th width='140'>Ime</th>
					<th width='170'>Prezime</th>
					<th width='80'>Godište</th>
					<th width='50'>Spol</th>
					<th width='180'>Klub</th>
					<th width='120'>Država</th>
					<th width='50'>Staza</th>
				</tr>";
						
		$i = 1;
		
		while($red = mysqli_fetch_array($sql) ) {
			$id = $red['id'];
			$ime = $red['ime'];
			$prezime = $red['prezime'];
			$klub = $red['klub'];
			$email = $red['email'];
			$grad = $red['grad'];
			$drzava = $red['drzava'];
			$spol = $red['spol'];
			$godiste = $red['godiste'];
			$staza = $red['staza'];

			echo "<tr >
					<td>$i</td>
					<td>$ime</td>
					<td>$prezime</td>
					<td>$godiste</td>
					<td>$spol</td>
					<td>$klub</td>
					<td>$drzava</td>
					<td>$staza</td>
				</tr>";
			
			
			$i++;
		}
		
		echo "</table>";	
		echo "<br><br>";
	?>
	</div>

</div>
