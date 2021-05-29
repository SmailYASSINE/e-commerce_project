<?php

define('HOST', "localhost");
define('USER',"root");
define('PASS', '');
define('BASE','ecommerce');
$connect= mysqli_connect(HOST, USER, PASS, BASE);

if($connect==false){echo "prb de cnx"; exit();}



?>