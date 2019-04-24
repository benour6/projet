<?PHP
include "../../core/produitC.php";
include "../../config.php";
$produitC=new ProduitC();
if (isset($_POST["id_produit"])){
	$produitC->supprimerProduit($_POST["id_produit"]);
	header('Location: AfficherProduit.php');
}

?>