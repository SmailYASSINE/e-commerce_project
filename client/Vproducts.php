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
				<li class="propClone"><a href="Vproduct.php">Shop</a></li>
				<li class="propClone"><?php echo '<a href=ctrl.php?action=allpro >Our Products</a>';?></li>
				<li class="propClone"><?php echo '<a href=ctrl.php?action=allcards >Checkout</a>';?></li>
				<li class="propClone"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.1s">
						 Shop
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
			<h1 class="text-center latestitems">OUR PRODUCTS</h1>
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






<?php
$nb=count($products);
if($nb==0)
{
	echo "Any product is available in our store now";
}
else
{
	foreach($products as $pro)
	{
?>
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3><?php echo "$pro[1]"?></h3>
						<p>
							 <?php echo "$pro[2]";?>
						</p>
						<p>
							<!--purchase-->
							<?php echo "<a href=ctrl.php?action=purchase&num=$pro[0] class='learn-more detailslearn'><i class='fa fa-shopping-cart'></i> purchasee</a>";?>


							<!--detail -->
							<?php echo "<a href=ctrl.php?action=detail&num=$pro[0] class='learn-more detailslearn'><i class='fa fa-link'></i> Details</a>";?>
							
						</p>
						<!--add to cart-->
						<p>
							<?php echo "<a href=ctrl.php?action=addtocart&num=$pro[0] class='learn-more detailslearn'><i class='fa fa-link'></i> add to cart</a>";?>
						</p>
					</div>
					<span class="maxproduct"><img src="<?php echo '../admin/photos/'.$pro[5].'.jpeg'; ?>"></span>
				</div>
				<div class="product-details">
					<a href="#">
					<h1><?php echo "$pro[1]"?></h1>
					</a>
					<span class="price">
					<span class="edd_price"><?php echo "$pro[3]"."$"?></span><br> <br>

					
					
					<?php /*echo "<a href=ctrl.php?action=addtocart&num=$pro[0] class='learn-more detailslearn'><i class='fa fa-shopping-cart btnAddAction'></i> Add to cart</a>";*/?>
					<form method="post" action="ctrl.php?action=addtocart&num=<?php echo $pro[0]?>">
					<td>
					
					<input type="text" class="product-quantity" name="quantity" value="1" size="2" />
					<input type="submit" name="add to card" value="Add To Card">
				</td>
				</form>
					</span>
				</div>
			</div>
		</div>
<?php

}
}



?>


-->
<!-- Load JS here for greater good =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
</body>
</html>