<?php 
require 'connexion.php';

$nom_categorie = $_POST['nom_categorie'];
$Description = $_POST['Description'];

//$Categorie = $_POST['categorie'];


//header('location:allmateriels.php');
if($_FILES["photo"]["error"]==0  )
{
	
	$id_photo=uniqid();
	

		move_uploaded_file($_FILES["photo"]["tmp_name"],  "C:/xampp/htdocs/photos/".$id_photo.".jpeg");
		
	
		$query="insert into categorie values (null,'$nom_categorie','$Description','$id_photo')";
	
}
echo $query;
mysqli_query($connect,$query);

?>