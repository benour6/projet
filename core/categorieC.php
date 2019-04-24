<?PHP
//include "../config.php";
class CategorieC {
function afficherCategorie ($cat){
		echo "Id categorie: ".$cat->getId()."<br>";
		echo "Nom categorie: ".$cat->getNom()."<br>";
		echo "image: ".$cat->getImg()."<br>";
	
	}
	/*function calculerSalaire($event){
		echo $event->getDescription() * $event->getDescription();
	}*/
	function ajouterCategorie($cat){
		$sql="insert into categorie (id,nom,img) values (:id, :nom,:img)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $id=$cat->getId();
        $nom=$cat->getNom();
        $img=$cat->getImg();
       
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':img',$img);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorie($id){
		$sql="DELETE FROM categorie where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategorie($cat,$id){
		$sql="UPDATE categorie SET id=:idd, nom=:nom,img=:img WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$cat->getId();
        $nom=$cat->getNom();
        $img=$cat->getImg();
        
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':img'=>$img);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':img',$img);
	

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($id){
		$sql="SELECT * from categorie where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCategorie($nom){
		$sql="SELECT * from categorie where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>