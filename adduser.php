
<?php 
require 'connexion.php';
require 'verfsession.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password=$_POST['password'];

	
$queryy="insert into admin(	nom_admin, prenom_admin,email,admin_password) values ('$first_name','$last_name','$email','$password')";


	

echo $queryy;
mysqli_query($connect,$queryy);
//header('location:allproduct.php');
?>