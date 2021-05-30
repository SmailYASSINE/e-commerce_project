<a href="authen.php">déconnexion</a>
<?php 
require 'connexion.php';
echo "<H1 align='center'> liste des produits </H1>";
//require 'find.html';


/*if(isset($_POST['critere'])) //recherche
	{
	$critere=$_POST['critere'];
	$query="select * from materials where intitule like '%$critere%'";
	}*/
$query="select * from produit"; //liste 

$result=mysqli_query($connect,$query);
$nb=mysqli_num_rows($result);
if($nb==0) echo "<center>Aucun produit</center>";
else
{
echo "<table border=\"1\" align='center'>
	<tr><td colspan=2 align=center><a href='formmateirel.php'><img src=images/add.png width=20 height=20></a></td><td>Numéro</td><td>produit</td> <td>Description</td>  <td>Date</td> <td>Prix</td> <td>Catégorie</td></tr>";	
while($prod=mysqli_fetch_row($result))
{
	echo "<tr><td><a href=delmateriel.php?num=$prod[0]><img src=images/drop.png width=\"20\" height=\"20\"></a></td>";
	echo "<td><a href=editmateriel.php?num=$prod[0]><img src=images/update.png width=\"20\" height=\"20\"></a></td>";
	echo "<td>$prod[0]</td><td>$prod[1]</td><td>$prod[3]</td>";
	echo"<td>$prod[7]</td><td>$prod[2]</td>";
	$querycat="select designation from categories where numcat=$prod[6]";
	$resultcat=mysqli_query($connect,$querycat);
	$cat=mysqli_fetch_row($resultcat);
	echo "<td> $cat[0]</td> </tr>";

}
	echo "<tr><th colspan=7>Nombre total</th><th colspan=2>$nb</th></tr>";
}
?>

</table>