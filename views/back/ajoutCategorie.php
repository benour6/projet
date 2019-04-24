
<?PHP
include "../../config.php";
include "../../entities/categorie.php";
include "../../core/categorieC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['img'])) {
	
	
$categorie1=new Categorie($_POST['id'],$_POST['nom'],$_POST['img']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3x  

$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);
header('Location: afficherCategorie.php');

		

	
}else{
	echo "vérifier les champs";
}
//*/

?>