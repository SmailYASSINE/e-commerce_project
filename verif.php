<?php
$login=$_POST['login'];
$pass=$_POST['pass'];
require 'connexion.php';
$query="select count(*) from admin where email='$login' && admin_password='$pass'";
$result=mysqli_query($connect,$query);
$data=mysqli_fetch_row($result);


if($data[0]==1)
{
	session_start();
	$_SESSION['USER']=$login;
	$_SESSION['LAT']=time();
	//$query="select droit from users where login='$login'";
	$result1=mysqli_query($connect,$query);
	$data1=mysqli_fetch_row($result);
	//$_SESSION['droit']=$data1[0];
	header('location:formproduit.php');
}
else header('location:authen.php?verif=false');
?>
