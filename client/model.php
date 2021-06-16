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
		$query=$this->db->prepare('SELECT `nom_produit`,produit.`description`,`prix`,`nom_categorie`,`image1` FROM produit,categorie WHERE produit.`id_categorie`=categorie.`id_categorie`AND `id_produit`=?');
		$query->execute($A);
		return ($query->fetchAll());
	}
	public function allcategories()
	{
		$query=$this->db->prepare('SELECT `nom_categorie`,`description`,`photo` FROM `categorie` ');
		$query->execute();
		return $query->fetchAll();
	}

	public function checkoutProduct($A)
	{
		$query=$this->db->prepare('SELECT `nom_produit`,`prix`,`image1`,`id_produit` FROM produit WHERE  `id_produit`=?');
		$query->execute($A);
		return ($query->fetchAll());
	}
	public function addclient($client,$commande)
	{
		$query1=$this->db->prepare("INSERT INTO client (id_client,`num_tel`,`nom_client`,`prenom_client`,`addresse`) values(?,?,?,?,?)");
		$query1->execute($client);
		$query2=$this->db->prepare("INSERT INTO commande (id_commande,id_client,id_produit ) VALUES (?,?,?);");
		$query2->execute($commande);

	}

	public function checkoutProductsession($A)
	{
		$query=$this->db->prepare('SELECT `nom_produit`,`prix`,`image1`,`id_produit` FROM produit WHERE  `id_produit`=?');
		$query->execute($A);
		return ($query->fetchAll());
	}
	
}

?>