<?php

	if (isset($error))
	{
		echo '<p style="color: red;">' . $error . '</p>';
	}

	if (isset($success))
	{
		echo '<p style="color: green;">' . $success . '</p>';
	}

?>


<!--On submit, send the form-data to a file named "admin.php" (to process the input): -->
<form method="post" action="admin.php">
	<table>
		<tr>
			<td>Korisničko ime:</td>
			<td>
				<input type="text" name="username" value=""></input>  
			</td>
		</tr>
		<br/><br/>
		<tr>
			<td>Zaporka:</td>
			<td>
				<input type="password" name="password" value=""> </input> 
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="obrada" value="Ulaz" />
			</td>
		</tr>
	</table>
	<br/>

</form>
