<?php 
require 'connexion.php';
$nom_produit = $_POST['nom_produit'];
$prix = $_POST['prix'];
$Description = $_POST['Description'];

//$Categorie = $_POST['categorie'];


//header('location:allmateriels.php');
if($_FILES["image1"]["error"]==0 && $_FILES["image2"]["error"]==0 && $_FILES["image3"]["error"]==0 )
{
	
	$id_image1=uniqid();
	$id_image2=uniqid();
	$id_image3=uniqid();

		move_uploaded_file($_FILES["image1"]["tmp_name"],  "C:/xampp/htdocs/e-commerce_project/photos/".$id_image1.".jpeg");
		move_uploaded_file($_FILES["image2"]["tmp_name"], "C:/xampp/htdocs/e-commerce_project/photos/".$id_image2.".jpeg");
		move_uploaded_file($_FILES["image3"]["tmp_name"], "C:/xampp/htdocs/e-commerce_project/photos/".$id_image3.".jpeg");
	
		$query="insert into produit(id_produit,nom_produit, prix,description,image1,image2,image3) values (null,'$nom_produit','$prix',,'$Description','$id_image1','$id_image2','$id_image3')";
	
}
echo $query;
mysqli_query($connect,$query);
?>