<?php
if(isset($_GET['verif'])) echo "<center>Welcome admin ! Verify your login and your password</center>";
?>
<table border="1" align="center">
<tr><th colspan="2">Authentification Space</th></tr>	
<form method="post" action="verif.php">
	<tr><td>Login </td><td><input type="text" name="login"></td></tr>
	<tr><td>Mot de Passe </td><td><input type="password" name="pass"></td></tr>
	<tr align="center"><td><input type="submit" value="Valider"></td><td><input type="reset" value="Annuler"></td></tr>
</form>

</table>