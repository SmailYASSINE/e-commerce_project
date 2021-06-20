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
				<li class="propClone"><a href="index.html">Home</a></li>
				<li class="propClone"><a href="shop.html">Shop</a></li>
				<li class="propClone"><a href="product.html">Product</a></li>
				<li class="propClone"><a href="checkout.html">Checkout</a></li>
				<li class="propClone"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						 Checkout
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
			<h1 class="text-center latestitems">Add to Cart Panel</h1>
		</div>
		<div class="wow-hr type_short">
			<span class="wow-hr-h">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			</span>
		</div>
	</div>
		
	

	<div id="edd_checkout_wrap" class="col-md-8 col-md-offset-2">

		<form id="edd_checkout_cart_form" method="post" action="ctrl.php?action=clientinfo">

			<div id="edd_checkout_cart_wrap">
				<table id="edd_checkout_cart" class="ajaxed">
				<thead>
				<tr class="edd_cart_header_row">
					<th class="edd_cart_item_image">
						 Item Image
					</th>
					<th class="edd_cart_item_name">
						 Item Name
					</th>
					<th class="edd_cart_item_price">
						 Item Price
					</th>
					<th class="edd_cart_item_quantity">
						 Item Quantity
					</th>					
					<th class="edd_cart_actions">
						 Actions
					</th>

				</tr>
				</thead>
				<tbody>
				<?php
				//print_r($prod);
				for($i=0;$i<count($prod);$i++)
				{
				foreach($prod[$i] as $key=>$value)
				 {
					 
				
				 ?>


				<tr class="edd_cart_item" id="edd_cart_item_0_25" data-download-id="25">
					<td class="edd_cart_item_name">
						<div class="edd_cart_item_image">
							<img width="60" height="60" src="<?php echo '../admin/photos/'.$value["image1"].'.jpeg'; ?>"   alt="">
						</div>
						</td>
						<td>
						<span class="edd_checkout_cart_item_title"><?php echo $value["nom_produit"];?></span>
					</td>
					<td class="edd_cart_item_price">
						 <?php echo $value["prix"];?>$
					</td>
					<td class="edd_cart_item_quantity">
						 <?php echo $qnt[$i];?>
					</td>					
					
					<td class="edd_cart_actions">
						<a class="edd_cart_remove_item_btn" href='ctrl.php?action=delete&num=<?php echo $value["id_produit"]?>' onclick="return confirm('Are you sure you want to delete this item?');">Remove</a>
					</td>
				</tr>

				<?php
 }
}
 ?>

				</tbody>
				<tfoot>
				<tr class="edd_cart_footer_row">
					<th colspan="5">
						<a class="edd-cart-saving-button edd-submit button " id="edd-save-cart-button" href="#">Save Cart</a>
					</th>
				</tr>
				<tr class="edd_cart_footer_row edd_cart_discount_row" style="display:none;">
					<th colspan="5" class="edd_cart_discount">
					</th>
				</tr>
				<tr class="edd_cart_footer_row">
					<th colspan="5" class="edd_cart_total">
						 Total: <span class="edd_cart_amount" data-subtotal="11.99" data-total="11.99">$11.99</span>
					</th>
				</tr>
				</tfoot>
				</table>
			</div>

		</form>
		

		<div id="edd_checkout_form_wrap" class="edd_clearfix">
			<form id="edd_purchase_form" class="edd_form" action="ctrl.php?action=clientinfo" method="post">
				<fieldset id="edd_checkout_user_info">
					<legend>Personal Info</legend>
					<p id="edd-email-wrap">
						<label class="edd-label" for="edd-email">
						Email Address <span class="edd-required-indicator">*</span></label>
						<input class="edd-input required" type="tel" name="tel" placeholder="Email address" id="edd-email" value="">
					</p>
					<p id="edd-first-name-wrap">
						<label class="edd-label" for="edd-first">
						First Name <span class="edd-required-indicator">*</span>
						</label>
						<input class="edd-input required" type="text" name="first_name" placeholder="First name" id="edd-first" value="" required="">
					</p>
					<p id="edd-last-name-wrap">
						<label class="edd-label" for="edd-last">
						Last Name </label>
						<input class="edd-input" type="text" name="last_name" id="last_name" placeholder="Last name" value="">
					</p>
					<p id="edd-last-name-wrap">
						<label class="edd-label" for="edd-last">
						Address </label>
						<textarea class="edd-input" type="text" name="address" id="" placeholder="Last name" value=""></textarea>
					</p>
				</fieldset>
				<fieldset id="edd_purchase_submit">
					<p id="edd_final_total_wrap">
						<strong>Purchase Total:</strong>
						<span class="edd_cart_amount" data-subtotal="11.99" data-total="11.99">$11.99</span>
					</p>
					<!--to recupirate ip product-->
					<input type="hidden" name="idpro" value="<?php echo '$product["prix"]';?>">
					<input type="hidden" name="edd-gateway" value="manual">
					<input type="submit" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Purchase">
				</fieldset>
			</form>
		</div>
	</div>

</div>
</section>

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

</body>
</html>