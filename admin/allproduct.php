<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>all products</title>
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


<?php 
require 'connexion.php';
/*if(isset($_POST['critere'])) //recherche
	{
	$critere=$_POST['critere'];
	$query="select * from materials where intitule like '%$critere%'";
	}*/
    
$query="select * from produit"; //liste 
$result=mysqli_query($connect,$query);
$nb=mysqli_num_rows($result);
if($nb==0) echo "<center>Aucun produit</center>";
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
                    <div class="col-sm-8"><h2>Products <b>Details</b></h2></div>
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
                        <th>Product Name <i class="fa fa-sort"></i></th>
                        <th>Description</th>
                        <th>Insertion Date <i class="fa fa-sort"></i></th>
                        <th>Price</th>
                        <th>Category <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>



                <?php
                while($prod=mysqli_fetch_row($result))
                {
                echo "<tbody>";
                    echo "<tr>";
                        echo "<td>$prod[0]</td><td>$prod[1]</td><td>$prod[3]</td><td>$prod[7]</td><td>$prod[2]</td>";
                        $querycat="select nom_categorie from categorie where id_categorie=$prod[9]";
                        $resultcat=mysqli_query($connect,$querycat);
                        $cat=mysqli_fetch_row($resultcat);
                        echo "<td> $cat[0]</td> ";

                        echo "<td>";
                        echo "<a href='http://localhost:84/e-commerce_project/client/ctrl.php?action=detail&num=$prod[0]' class='view' title='View' data-toggle='tooltip'><i class='material-icons'>&#xE417;</i></a>";
                        echo '<a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>';
                        echo '<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>';
                        echo "</td>";
                    echo "</tr>";
                }
                    ?>    
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item "><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  
</div>   
</body>
</html>
<?php
}

