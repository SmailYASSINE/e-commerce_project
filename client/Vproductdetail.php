<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>

<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="index.html" class="navbar-brand brand"> SCORILO </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="ctrl.php">Home</a></li>
				<li class="propClone"><a href="Vproducts.php">Shop</a></li>
				<li class="propClone"><?php echo '<a href=ctrl.php?action=allpro >Our Products</a>';?></li>
				<li class="propClone"><a href="checkout.html">Checkout</a></li>
				<li class="propClone"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
	</nav>
<?php
 foreach($prod as $product)
 {
 ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 <?php echo "$product[1]";?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems">Awesome Product</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="productbox">
				<img src="<?php echo '../admin/photos/'.$product[4].'.jpeg'; ?>" alt="">
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
					<p>
							 <?php echo "$product[1]";?>
						
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<a href="#" class="btn btn-buynow">shop now</a>
			<div class="properties-box">
				<ul class="unstyle">
					<li><b class="propertyname">name: </b><?php echo "$product[1]";?></li>
					<li><b class="propertyname">price: </b><?php echo "$product[2]";?>$</li>
					
					<li><b class="propertyname">category: </b> <?php echo "$product[3]";?></li>
					<li><b class="propertyname">Number:</b> Up to 20 specifications in this box</li>
					<li><b class="propertyname">Live Demo:</b><a target="_blank" href="http://www.wowthemes.net/">http://www.wowthemes.net/</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>
<?php
}
?>
<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
				<h1 class="callactiontitle"> Promote Items Area Give Discount to Buyers <span class="callactionbutton"><i class="fa fa-gift"></i> WOW24TH</span>
				</h1>
			</div>
		</div>
	</div>
</div>
</section>

<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				 Connect with Scorilo
			</p>
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<p>
				 &copy; 2017 Your Website Name<br/>
				Scorilo - Free template by <a href="https://www.wowthemes.net/">WowThemesNet</a>
			</p>
		</div>
	</div>
</div>

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>

</body>
</html>