<?PHP
class Produit{
	private $id_produit;
	private $nom_produit;
	private $reference;
	private $quantite;
	private $idca;
	private $prix;
	private $img;
	private $description;
	function __construct($id_produit,$nom_produit,$reference,$quantite,$idca,$prix,$img,$description)
	{
		$this->id_produit=$id_produit;
		$this->nom_produit=$nom_produit;
		$this->reference=$reference;
		$this->quantite=$quantite;
		$this->idca=$idca;
		$this->prix=$prix;
		$this->img=$img;
		$this->description=$description;
	}
	function getId_produit(){
		return $this->id_produit;
	}
	function getNom_produit(){
		return $this->nom_produit;
	}
	function getReference(){
		return $this->reference;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getIdca(){
		return $this->idca;
	}
	function getPrix(){
		return $this->prix;
	}
	function getImg(){
		return $this->img;
	}
	function getDescription(){
		return $this->description;
	}
function setId_produit($id_produit){
		 $this->id_produit=$id_produit;
	}
	function setNom_produit($nom_produit){
		 $this->nom_produit=$nom_produit;
	}
	function setReference($reference){
		 $this->reference=$reference;
	}
	function setQuantite($quantite){
		 $this->quantite=$quantite;
	}
	function setIdca($idca){
		 $this->idca=$idca;
	}
function setPrix($prix){
		 $this->prix=$prix;
	}
	function setImg($img){
		 $this->img=$img;
	}
	function setDescription($description){
		 $this->description=$description;
	}

	
}




?>