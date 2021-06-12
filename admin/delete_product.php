<?php 
	require "connexion.php";
	$numcat=$_GET['num'];
	$query="delete from produit where id_produit=$numcat";
	mysqli_query($connect,$query);
	header('location:Vallproduct.php');
?>