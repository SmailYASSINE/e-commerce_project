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

	//add to cart 

	

	public function clientinfoAction()
	{
		$client=array(null,$_POST['tel'],$_POST['first_name'],$_POST['last_name'],$_POST['address']);
		//$commande=array(null,'".mysql_insert_id()."',$_POST['idpro']);
		$a=$this->model->addclient($client);
		header('location:ctrl.php?action=home');
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
                );
            $_SESSION["cart"][$count]=$item_array;
			header('location:ctrl.php?action=allpro');
            }
            else{
                echo '<script> alert("Product is already added")</script>';
            }
        }
        else{
			$_SESSION["cart"]=array();
            $item_array=array(
                'product_id'=> $_GET["num"],
				//'quantity'=> $_POST["quantity"]
            );
            $_SESSION["cart"][0]=$item_array;
			header('location:ctrl.php?action=allpro');
        


            }
        


	} 
    public function checkoutAction()
    {
        session_start();
		$prod=array();


        foreach($_SESSION["cart"] as $key => $value){
            $n=$value['product_id'];


            array_push($prod, $this->model->checkoutProductsession($n));
            
        }
		require 'checkout.php';
    }






	public function delMaterialAction()
	{
		$num=array($_GET['num']);
		
		$this->model->delMaterial($num);
		header('location:ctrl.php?action=allmat');
	} 
	public function editMaterialAction()
	{
		/*
		.....
		récupérer le numéro du matériel à modifier
		récupérer via le modèle ce materiel
		le donner à la vue (formedit) pour affichage
		*/
		$num=array($_GET['num']);
		$mate=$this->model->oneMaterial($num);
		require 'VEditMateriel.php';

	} 
	public function updateMaterialAction()
	{
		/*
		.....
		récupérer les informations du matériel à modifier
		les passez au modèle dans un array
		redirection vers laction allmat
		*/
		
		$material=array($_POST['Intitule'],$_POST['Description'],$_POST['Type'],$_POST['datedefabrication'],$_POST['prix'],$_POST['categorie'],$_GET['num']);
		$this->model->updateMaterial($material);
		header('location:ctrl.php?action=allmat');
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


			case 'allcards' : $this->checkoutAction();
			case 'one' : $this->oneMaterialAction();break;


			/*
			complement du TP
			Si l'utilisateur est non authentifié, $action=formauth
			formauth affiche un formulaire d'authentification et pointe vers le controlleur avec action= verif
			dans l'action verif, on vérifie la présence de l'utilisateur, si oui, on démarre la session puis redirection vers l'action allmat
			sinon 
				si aucune action donc allmat
				si non exécuter l'action demandée par l'utilisateur
			*/
		}
	}
}

$c=new ctrl();
$c->action();

?>