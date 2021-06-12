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
		/*.......
		cherche et retourner un seul matériel
		utiliser la méthode fetch()
		*/
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
	
}

?>