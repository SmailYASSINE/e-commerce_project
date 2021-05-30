<?php
require 'param.php';
session_start();
if(!isset($_SESSION['USER']))
header('location:deconexion.php');
if(time()-$_SESSION['LAT']>$ttl) header ('location:deconexion.php');
else $_SESSION['LAT']=time();
