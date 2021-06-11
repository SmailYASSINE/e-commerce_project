<?php 
require "connexion.php";
require 'verfsession.php';

$numcat=$_GET['num'];
$_SESSION["var"]=$numcat;
$query = "select * from produit where id_produit=$numcat";
#$query = "select id_produit, nom_produit, prix, description, image1,image2,image3,nom_categorie from produit,categorie where produit.id_categorie=categorie.id_categorie and id_produit=$numcat";
$mat2=mysqli_query($connect,$query);
$mat=mysqli_fetch_row($mat2);
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!---->
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  <style>
  img{
    width: 20px;
    height: 20px;
  }
  .ppp{
    width: 400px;
    height: 400px;
    margin:40px;
    margin-left:35px;
    
  }
  
  </style>
  </head>

  <body>
  <?php //require 'connexion.php';
     //   require 'verfsession.php';
  ?>
 
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="update_produit.php" method="post" enctype="multipart/form-data" name="frm" >
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="nom_produit"
                      value="<?php echo $mat[1];?>"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      name='Description'
                      class="form-control validate"
                      rows="3"
                      required
                    ><?php echo $mat[3];?></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      name='categorie'
                      class="custom-select tm-select-accounts"
                      id="category"
                    >
                      <option value="0"> Choose here </option>
                      <?php
                      $query = "select * from categorie";
                     // print_r($query);
                      $cats= mysqli_query($connect ,$query);
                      //$cats=mysqli_fetch_row($catss);
                      //print_r($cats);
                      $saved="select id_categorie from produit where id_produit=$numcat";
                      $res1= mysqli_query($connect ,$saved);
                      $res2= mysqli_fetch_row($res1)[0];
                      while($cat=mysqli_fetch_row($cats))
                      { ?>
                        <?php if ($res2!=$cat[0]) {?>
                            <option value= "<?php echo $cat[0];?>" > <?php echo $cat[1];?></option>
                        <?php
                        }
                        else 
                        
                        {
                        ?>
                            <option value= "<?php echo $cat[0];?>" <?php  echo "selected";?>> <?php echo $cat[1];?></option>
                        <?php
                        }
                       } ?>
                    </select>
                  </div>
                  <div class="row">
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="stock"
                            >prix
                          </label>
                          <input
                            id="stock"
                            name="prix"
                            value="<?php echo $mat[2];?>"
                            type="number"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>
                  
              </div>
              
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4 text-white">
                <div class="form-image mb-3 ">
                    <label
                      for="name"
                      >Photo 1 :
                      
                    </label>

                      <button type="button" class="ml-5 btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Click to view</button>
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="<?php echo 'photos/'.$mat[4].'.jpeg' ; ?>" class="img-responsive ppp">
        </div>
    </div>
  </div>
</div>

                    <input
                      id="name"
                      name="image1"
                      value="<?php echo $mat[4];?>"
                      type="file"
                      class="form-control validate"
                      required
                    />
                    

            </div>
            
                <div class="form-image mb-3">
                    <label
                      for="name"
                      >Photo 2 : 
                    </label>
          
                    <button type="button" class="ml-5 btn btn-primary btn-sm pl-100" data-toggle="modal" data-target="#myModal">Click to view</button>
                      <br>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="<?php echo 'photos/'.$mat[5].'.jpeg' ; ?>" class="img-responsive ppp">
        </div>
    </div>
  </div>
</div>
                    <!--<img  src=" echo 'photos/'.$mat[5].'.jpeg' ; " >-->
                    <input
                      id="name"
                      name="image2"
                      value="<?php echo $mat[5];?>"
                      type="file"
                      class="form-control validate"
                      required
                    />
              </div>
                    <div class="form-image mb-3">
                    <label
                      for="name" 
                      >Photo 3 :
                    </label>
                    <button type="button" class="ml-5 btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Click to view</button>
                      <br>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="<?php echo 'photos/'.$mat[6].'.jpeg' ; ?>" class="img-responsive ppp">
        </div>
    </div>
  </div>
</div>
                    <input
                      id="name"
                      name="image3"
                      value="<?php echo $mat[6];?>"
                      type="file"
                      class="form-control validate"
                      required
                    />
              </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>



