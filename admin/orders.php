<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Orders</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="logincss.css?nocache={timestamp}">

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>





</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>ALL <b>Orders</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>client Name <i class="fa fa-sort"></i></th>
                        <th>address</th>
                        <th>order Date <i class="fa fa-sort"></i></th>
                       
                        <th>Phone number <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
<?php 
require 'connexion.php';


$query="select nom_client,prenom_client,num_tel,addresse,date_commande,id_commande from client,commande where commande.id_client=client.id_client order by date_commande"; //liste 
$result=mysqli_query($connect,$query);
$nb=mysqli_num_rows($result);

if($nb==0) {echo "<center>Unfortunately ! No Order to Display</center>";}
else
{


                $conter=0;
                while($order=mysqli_fetch_row($result))
                {
                echo "<tbody>";
                    echo "<tr>";
                    $conter+=1;
                        echo "<td>$conter</td><td>$order[0] $order[1]</td><td>$order[3]</td><td>$order[4]</td>";
                        
                        echo "<td> $order[2]</td> ";

                        echo "<td>";
                        echo "<a href=detailorder.php?num=$order[5] class='view' title='View' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a>";
                       // echo "<a href=editproduct.php?num=$prod[0] class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>";
                    //    echo "<a href=delete_product.php?num=$prod[0] class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>";
                        echo "</td>";
                    echo "</tr>";
                }
                    ?>    
                </tbody>
            </table>

        </div>
    </div>  
</div>   
</body>
</html>
<?php
}

