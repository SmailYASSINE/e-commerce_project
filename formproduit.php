<table border="1" align="center">
	<?php require 'connexion.php';?>
 <form action="addproduit.php" method="post" enctype="multipart/form-data" name="frm" onsubmit="return verfier()">
 <tr><th colspan="2">Nouveau Produit</th></tr>
<tr><td>nom de produit: </td><td><input type="text" name="nom_produit"></td></tr>
<tr><td>Prix: </td><td><input type="number" name="prix"></td></tr>
<tr><td>Description :</td><td> <textarea name="Description" ></textarea></td></tr>
 <tr><td>image1 <input type="file" name="image1"></td></tr>

 <tr><td>image2 <input type="file" name="image2"></td></tr>

 <tr><td>image3 <input type="file" name="image3"></td></tr>
<tr><td>Categorie:</td><td> <select name="categorie"> 
 	<option value="0"> Choisir ICI </option>
 	<?php
 	$query = "select * from categorie";
 	//print_r($query);
 	$cats= mysqli_query($connect ,$query);
 	//$cats=mysqli_fetch_row($catss);

 	
 	while($cat=mysqli_fetch_row($cats))
 	{ ?>
 	<option value=<?php echo $cat[0];?>> <?php echo $cat[1];?> </option>
 	<?php } ?>
 </select></td></tr>
<tr align="center"><td><input type="submit" value="Valider"> </td><td><input type="reset" value="Reset"></td></tr>
</form>
</table>