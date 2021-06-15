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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>


<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container-fluid">
	<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			
	</div>
	
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-left d-inline">
				<li class="propClone"><a href="ctrl.php">Interface Client</a></li>
</ul>
			<ul class="nav navbar-nav navbar-right d-inline">
				<li class="propClone"><a href="ctrl.php">Home</a></li>
				<li class="propClone"><a href="shop.html">Categories</a></li>
				<li class="propClone"><?php echo '<a href=ctrl.php?action=allpro >Our Products</a>';?></li>
				<li class="propClone"><a href="checkout.html">Checkout</a></li>
				<li class="propClone"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
						 Increase Digital Sales
					</div>
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
						 Boost revenue with Scorilo
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<style>

.ccc{
	
	background: rgba(23, 60, 255, 0.33);
}


</style>


		

<!-- STEPS =============================-->
<div class="item content">
	<div class="container toparea w-50">
	<div class="shadow-lg p-3 mb-5 rounded d-flex justify-content-center"><h1> Our Main Categories :</h1></div>
	

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <?php
	  $v=0;
?>
		  <div class="carousel-inner">
		  <?php
		  foreach($cats as $cat)
{
?>
			  <?php if ($v==0)  
			  
			  		   { echo '<div class="carousel-item active">'; }				
			  		else echo '<div class="carousel-item">';
?>
				
		      <img class="d-block style="width: 100px; height: 200px;" src="<?php echo '../admin/photos/'.$cat[2].'.jpeg'; ?>"alt="First slide">
		      	  <div class="carousel-caption d-none d-md-block ccc">
    				<h1><?php echo "$cat[0]";?></h1>
    				<p><?php echo "$cat[1]";?></p>
  				  </div>

		       </div>
			   <?php
		$v=1;
}
?>

	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
</div>










			<!-- /.col-md-4 col 
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-download"></i></span>
					<h3 class="numbertext">Get Instand Download</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
				-->
			
		
	</div>
</div>

	
	<!-- LATEST ITEMS =============================-->
<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">LATEST ITEMS</h1>
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
			
			<!-- /.productbox -->
		
			<!-- /.productbox -->
<?php
foreach($prods as $prod)
{
?>
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3><?php echo "$prod[1]"?></h3>
							<p>
								 <?php echo "$prod[2]"?>
							</p>
							<p>
								<!--shop product-->
								<?php echo "<a href=ctrl.php?action=purchase class='learn-more detailslearn'><i class='fa fa-shopping-cart'></i> purchasee</a>";?>
								<!-- on a meet le lien pour acceder a oneproduct -->
								<?php echo "<a href=ctrl.php?action=detail&num=$prod[0] class='learn-more detailslearn'><i class='fa fa-link'></i> Details</a>";?>
							</p>
						</div>
						<span class="maxproduct"><img src="<?php echo '../admin/photos/'.$prod[5].'.jpeg'; ?>" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h5><?php echo "$prod[1]"?></h5>
						</a>
						<span class="price">
						<span class="edd_price"><?php echo "$prod[3]"?>$</span>
						</span>
					</div>
				</div>
			</div>
<?php
}
?>
		</div>

	</div>

</div>
</section>



<!-- BUTTON =============================-->
<div class="item content">
	<div class="container text-center">
		<?php echo '<a href=ctrl.php?action=allpro class="homebrowseitems">Browse All Products
		<div class="homebrowseitemsicon">
			<i class="fa fa-star fa-spin"></i>
		</div>
		</a>';?>
	</div>
</div>
<br/>


<!-- AREA =============================-->
<div class="item content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-microphone infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">General Questions</h1>
					<p>
						 Want to buy a theme but not sure if it's got all the features you need? Trouble completing the payment? Or just want to say hi? Send us your message and we will answer as soon as possible!
					</p>
					<p class="text-center">
						<a href="#">- Get in Touch -</a>
					</p>
				</div>
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4">
				<i class="fa fa-comments infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">Theme Support</h1>
					<p>
						 Theme support issues prevent the theme from working as advertised in the demo. This is a free and guaranteed service offered through our support forum which is found in each theme.
					</p>
					<p class="text-center">
						<a href="#">- Select Theme -</a>
					</p>
				</div>
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4">
				<i class="fa fa-bullhorn infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">Hire Us</h1>
					<p>
						 If you wish to change an element to look or function differently than shown in the demo, we will be glad to assist you. This is a paid service due to theme support requests solved with priority.
					</p>
					<p class="text-center">
						<a href="#">- Get in Touch -</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- TESTIMONIAL =============================-->
<div class="item content">
	<div class="container">
		<div class="col-md-5 col-md-offset-0">
			<div class="slide-text">
			<h2 class="uppercase">Smail YASSINE</h2>
				<div>
					
					<img src="../client/images/Smail.jpg" alt="Awesome Support">
					<p>
					Smail YASSINE is a changemaker, it is one of his priorities to be a social entrepreneur in his university and his  society. He is a member of different programs/entities, in which he designed events, strategies, and workshops for local, social, and economic fields.
					</p>
					<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
				</div>
			</div>
		</div>
		<div class="col-md-5 col-md-offset-1">
			<div class="slide-text">
				<div>
					<h2><span class="uppercase">Awesome Support</span></h2>
					<img src="http://wowthemes.net/demo/salique/salique-boxed/images/temp/avatar2.png" alt="Awesome Support">
					<p>
						 The support... I can only say it's awesome. You make a product and you help people out any way you can even if it means that you have to log in on their dashboard to sort out any problems that customer might have. Simply Outstanding!
					</p>
					<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
				</div>
			</div>
		</div>
	</div>
</div>


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

<!-- SCRIPTS =============================-->
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
</html>s