<?PHP
include "../../core/categorieC.php";
include "../../config.php";
$categorieC=new CategorieC();
if (isset($_POST["id"])){
	$categorieC->supprimerCategorie($_POST["id"]);
	header('Location: AfficherCategorie.php');
}

?>