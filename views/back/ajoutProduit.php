
<?PHP
include "../../config.php";
include "../../entities/produit.php";
include "../../core/produitC.php";

if (isset($_POST['id_produit']) and isset($_POST['nom_produit']) and isset($_POST['reference']) and isset($_POST['quantite']) and isset($_POST['idca']) and isset($_POST['prix']) and isset($_POST['img']) and isset($_POST['description'])){
	
	
$produit1=new Produit($_POST['id_produit'],$_POST['nom_produit'],$_POST['reference'],$_POST['quantite'],$_POST['idca'],$_POST['prix'],$_POST['img'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3x  

$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);
header('Location: afficherProduit.php');

		

	
}else{
	echo "vérifier les champs";
}
//*/

?>