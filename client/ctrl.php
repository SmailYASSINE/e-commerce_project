<?php
require 'model.php';
class ctrl
{
	private $model;
	public function __construct()
	{
		$this->model=new model();
	}


	//homeAction() shows categories and the 3 latest products in home page it is default 
	public function homeAction()
	{
		$cats=$this->model->allcategories();
		$prods=$this->model->allProductslimit();
		require 'Vhome.php';
	} 


	//allProductsAction() is used to show all products -our products in Vproducs.php
	public function allProductsAction()
	{
		$products=$this->model->allProducts();
		session_start();
		require 'Vproducts.php';
	} 

	//ProductDetailAction() used to show each product details
	public function ProductDetailAction()
	{
		
		$num=array($_GET['num']);
		$prod=$this->model->oneProduct($num);
		require 'Vproductdetail.php';
	}

	//checkout function 
	public function ProductpurchaseAction()
	{
		
		$nume=array($_GET['num']);
		$prod=$this->model->checkoutProduct($nume);

		require 'checkout.php';
	}

	//produits par categorie
	public function catproductAction()
	{
		
		$nume=array($_GET['num']);
		$products=$this->model->CatProduct($nume);

		require 'vproductcat.php';
	}

	

	public function clientinfoAction()
	{
		
		$id_cl=uniqid();
		$id_comm=uniqid();

		$client=array($id_cl,$_POST['tel'],$_POST['first_name'],$_POST['last_name'],$_POST['address']);
		$commande=array($id_comm, $id_cl);

		$this->model->addclient($client);
		$this->model->addcommande($commande);

		session_start();
		foreach($_SESSION["cart"] as $key => $value){
			$pro=array($value['product_id'],$value['quantity'],$id_comm);

            $this->model->ProduitAcheter($pro);

            
        }
		header('location:ctrl.php?action=home');
		session_destroy();
		

	} 

//session pour recupirer les ids des produits acheter	
	public function addtocartAction()
	{
		session_start();
        
      
        if (isset($_SESSION["cart"])){
            $item_array_id=array_column($_SESSION["cart"], "product_id");
            if(!in_array($_GET["num"], $item_array_id)){
                $count=count($_SESSION["cart"]);
                $item_array=array(
                    'product_id'=> $_GET["num"],
					'quantity'=>$_POST["quantity"],
                );
            $_SESSION["cart"][$count]=$item_array;
			header('location:ctrl.php?action=allpro');
            }
			else{
           
				/*
				$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
				$host     = $_SERVER['HTTP_HOST'];
				$script   = $_SERVER['SCRIPT_NAME'];
				$params   = $_SERVER['QUERY_STRING'];
				 
				$currentUrl = '?' . $params;
				$a=substr($currentUrl,8,9);
				*/
				echo '<script>
				window.location="ctrl.php?action=allpro";
				alert("This Product is Already Added to The Panel");
				</script>';

				//header('location:ctrl.php?action=allpro');
					//echo '<script> alert("Product is already added")</script>';
				}	
			
				
        }
        else{
			$_SESSION["cart"]=array();
            $item_array=array(
                'product_id'=> $_GET["num"],
				'quantity'=> $_POST["quantity"],
            );
            $_SESSION["cart"][0]=$item_array;
			header('location:ctrl.php?action=allpro');
        

            }

        


	} 
    public function checkoutAction()
    {
        session_start();
		$prod=array();
		$qnt=array();

		if(isset($_SESSION["cart"])){
        foreach($_SESSION["cart"] as $key => $value){
            $n=$value['product_id'];


            array_push($prod, $this->model->checkoutProductsession($n));
			array_push($qnt, $value['quantity']);

            
        }
        }
		require 'checkout.php';
    }



public function deletecartAction()
{
	session_start();
	if (isset($_GET['action'])){
		if($_GET['action']=="delete"){
			foreach($_SESSION["cart"] as $keys=>$value){
				if($value["product_id"]==$_GET['num']){
					unset($_SESSION["cart"][$keys]);
					echo '<script>alert("Product has been Removed...!")</script>';
					header('location:ctrl.php?action=allcards');
					
				}
			}
		}
		//header('location:ctrl.php?action=allcards');
	}
	
}
	
	
	public function action()
	{
		$action="home";
		if(isset($_GET['action'])) $action=$_GET['action'];
		switch($action)
		{
			case 'home':$this->homeAction();break;
			case 'allpro' : $this->allProductsAction();break;
			case 'detail': $this->ProductDetailAction();break;
			case 'purchase': $this->ProductpurchaseAction();break;
			case 'clientinfo' : $this->clientinfoAction();break;
			case 'addtocart' : $this->addtocartAction();break;

			case 'allcards' : $this->checkoutAction();break;
			case 'allcards' : $this->checkoutAction() ;break;
			case 'delete'   : $this->deletecartAction();break;
			
			case 'ProdCat': $this->catproductAction();break;

		}
	}
}

$c=new ctrl();
$c->action();

?>