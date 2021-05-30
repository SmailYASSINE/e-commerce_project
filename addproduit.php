
<?php 
require 'connexion.php';
require 'verfsession.php';
$nom_produit = $_POST['nom_produit'];
$prix = $_POST['prix'];
$Description = $_POST['Description'];

//$Categorie = $_POST['categorie'];
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

		move_uploaded_file($_FILES["image1"]["tmp_name"],  "C:/xampp/htdocs/e-commerce_project/photos/".$id_image1.".jpeg");
		move_uploaded_file($_FILES["image2"]["tmp_name"], "C:/xampp/htdocs/e-commerce_project/photos/".$id_image2.".jpeg");
		move_uploaded_file($_FILES["image3"]["tmp_name"], "C:/xampp/htdocs/e-commerce_project/photos/".$id_image3.".jpeg");
	
		$queryy="insert into produit(nom_produit, prix,description,image1,image2,image3,id_admin) values ('$nom_produit','$prix','$Description','$id_image1','$id_image2','$id_image3','$id[0]')";
	
}
echo $queryy;
mysqli_query($connect,$queryy);
//header('location:allproduct.php');
?>