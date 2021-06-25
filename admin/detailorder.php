<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Data Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="logincss.css">

<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>


<?php 
require 'connexion.php';
$numcom=$_GET['num'];
$query="select produit.id_produit,nom_produit,prix,image1,quantite from produit,produitacheter where produit.id_produit=produitacheter.id_produit and id_commande='$numcom' "; //liste 
$result=mysqli_query($connect,$query);

$query2="select nom_client, prenom_client,num_tel, addresse from client,commande where client.id_client=commande.id_client and id_commande='$numcom'";
$result2=mysqli_query($connect,$query2);


$nb=mysqli_num_rows($result);
if($nb==0) echo "<center>Aucun order now</center>";
else
{
?>


</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center"><h1>Order<b> details</b></h1></div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <?php
                $total=0;
                $client=mysqli_fetch_row($result2);
               ?>
                <h5 style="color:black ;">Client Information :</h4><br>
                <h6>First Name : <?php echo $client[0] ?></h5>
                <h6>Last Name : <?php echo $client[1] ?></h5>
                <h6>Phone Number : <?php echo $client[2] ?></h5>
                <h6>Address : <?php echo $client[3] ?></h5>
                <br>
                <br>
                <br>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>product Name <i class="fa fa-sort"></i></th>
                        <th>price</th>
                        <th>quantite<i class="fa fa-sort"></i></th>
                        <th>total Price</th>
                        
                    </tr>
                </thead>


                <?php
                $total=0;
                while($order=mysqli_fetch_row($result))
                {
                echo "<tbody>";
                    echo "<tr>";
                   
                        echo "<td><img width=\"60\" height=\"60\" src=\"'.'photos/'.$order[3].'.jpeg\"></td>";
                        echo "<td>$order[1] </td><td>$order[2]</td><td>$order[4] $</td>";
                        echo "<td>";  echo $order[2] * $order[4];  echo "</td>";
                

                        
                       // echo "<a href=editproduct.php?num=$prod[0] class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>";
                    //    echo "<a href=delete_product.php?num=$prod[0] class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>";
                        echo "</td>";
                    echo "</tr>";
                    $total=$total+($order[2] * $order[4]);

                }
                    ?>
                                        <tr>
                        <th colspan="4" class="text-center">Total Price</th>
                        <th><?php echo $total;?> $</th>
                       
                        
                    </tr>





                </tbody>
            </table>
            
            
              
         
       
    </div>
    </div>  
</div>   
</body>
</html>
<?php
}

