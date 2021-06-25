<?php

class model
{
	private $db;

	public function __construct()
	{
		define('USER','root');
		define('PASS','');
		$this->db= new PDO('mysql:host=localhost;dbname=ecommerce',USER,PASS);
	}
	public function allProductslimit()
	{
		$query=$this->db->prepare('SELECT `id_produit`,`nom_produit`,produit.`description`,`prix`,`nom_categorie`,`image1` FROM produit,categorie WHERE produit.`id_categorie`=categorie.`id_categorie` order by date_produit desc LIMIT 3');
		$query->execute();
		return $query->fetchAll();
	}
	public function allProducts()
	{
		$query=$this->db->prepare('SELECT `id_produit`,`nom_produit`,produit.`description`,`prix`,`nom_categorie`,`image1` FROM produit,categorie WHERE produit.`id_categorie`=categorie.`id_categorie`');
		$query->execute();
		return $query->fetchAll();
	}
	public function oneProduct($A)
	{
		$query=$this->db->prepare('SELECT `nom_produit`,produit.`description`,`prix`,`nom_categorie`,`image1`,`image2`, `image3`,`id_produit` FROM produit,categorie WHERE produit.`id_categorie`=categorie.`id_categorie`AND `id_produit`=?');
		$query->execute($A);
		return ($query->fetchAll());
	}
	public function allcategories()
	{
		$query=$this->db->prepare('SELECT `nom_categorie`,`description`,`photo`,`id_categorie` FROM `categorie` ');
		$query->execute();
		return $query->fetchAll();
	}

	public function checkoutProduct($A)
	{
		$query=$this->db->prepare('SELECT `nom_produit`,`prix`,`image1`,`id_produit` FROM produit WHERE  `id_produit`=?');
		$query->execute($A);
		return ($query->fetchAll());
	}
	public function addclient($client)
	{
	
		$query1=$this->db->prepare("INSERT INTO client (`id_client`,`num_tel`,`nom_client`,`prenom_client`,`addresse`) values(?,?,?,?,?)");
		$query1->execute($client);
		

	}


	public function addcommande($commande)
	{
		$query2=$this->db->prepare("INSERT INTO commande (`id_commande`,commande.`id_client` ) VALUES (?,?)");
		$query2->execute($commande);
	}

	public function checkoutProductsession($m)
	{
		$query=$this->db->prepare('SELECT `nom_produit`,`prix`,`image1`,`id_produit` FROM produit WHERE  `id_produit`=?');
		$query->execute(array($m));
		return ($query->fetchAll());
	}

	public function ProduitAcheter($cmd)
	{
		$query2=$this->db->prepare("INSERT INTO produitacheter (`id_produit`,`quantite`,`id_commande`) VALUES (?,?,?)");
		$query2->execute($cmd);
	}

	public function CatProduct($A)
	{
		$query=$this->db->prepare('SELECT `nom_produit`,produit.`description`,`prix`,`nom_categorie`,`image1` FROM produit,categorie WHERE produit.`id_categorie`=categorie.`id_categorie`AND `id_categorie`=?');
		$query->execute($A);
		return ($query->fetchAll());
	}


	
}

?>