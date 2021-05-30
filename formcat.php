<table border="1" align="center">
 <form action="addcat.php" method="post" enctype="multipart/form-data" name="frm" onsubmit="return verfier()">
 <tr><th colspan="2">Nouveau cat</th></tr>
<tr><td>nom de categorie: </td><td><input type="text" name="nom_categorie"></td></tr>
<tr><td>Description :</td><td> <textarea name="Description" ></textarea></td></tr>
 <tr><td>photo <input type="file" name="photo"></td></tr>





<tr align="center"><td><input type="submit" value="Valider"> </td><td><input type="reset" value="Reset"></td></tr>
</form>
</table>