<?php 
require 'connexion.php';
//require 'verfsession.php';
session_start();
$num=$_SESSION["var"];
$nom_produit = $_POST['nom_produit'];
$prix = $_POST['prix'];
$Description = $_POST['Description'];
$categorie=$_POST['categorie'];
$a=$_SESSION['USER'];
$query="select id_admin from admin where email='$a'";
$result=mysqli_query($connect,$query);
$id=mysqli_fetch_row($result);
//header('location:allmateriels.php');
if($_FILES["image1"]["error"]==0 && $_FILES["image2"]["error"]==0 && $_FILES["image3"]["error"]==0 )
{
	
	$id_image1=uniqid();
	$id_image2=uniqid();
	$id_image3=uniqid();

		move_uploaded_file($_FILES["image1"]["tmp_name"],  "../admin/photos/".$id_image1.".jpeg");
		move_uploaded_file($_FILES["image2"]["tmp_name"], "../admin/photos/".$id_image2.".jpeg");
		move_uploaded_file($_FILES["image3"]["tmp_name"], "../admin/photos/".$id_image3.".jpeg"); 
		$queryy="update produit set nom_produit='$nom_produit', prix='$prix', description='$Description' ,image1='$id_image1', image2 = '$id_image2', image3 = '$id_image3',id_admin='$id[0]',id_categorie='$categorie' where id_produit=$num";

}
echo $queryy;
mysqli_query($connect,$queryy);
//header('location:Vallproduct.php');
?>