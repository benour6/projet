<?PHP
class Categorie{
	private $id;
	private $nom;
	private $img;
	function __construct($id,$nom,$img)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->img=$img;
	}
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	
	function getImg(){
		return $this->img;
	}
	

	function setImg($img){
		 $this->img=$img;
	}

	function setId($id){
		 $this->id=$id;
	}
		function setNom($nom){
		 $this->nom=$nom;
	}
	

}
?>