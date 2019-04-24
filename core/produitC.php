<?PHP
//include "../config.php";
class ProduitC {
function afficherProduit ($produit){
		echo "Id produit: ".$produit->getId_produit()."<br>";
		echo "Nom produit: ".$produit->getNom_produit()."<br>";
		echo "reference : ".$produit->getReference()."<br>";
		echo "Quantité: ".$produit->getQuantite()."<br>";
		echo "id categorie: ".$produit->getIdca()."<br>";
		echo "Prix: ".$produit->getPrix()."<br>";
		echo "image: ".$produit->getImg()."<br>";
		echo "description: ".$produit->getDescription()."<br>";


	}
	/*function calculerNouveauPrix($promo){
		$a=($promo->getPrixAncien() * $promo->getPourcentage())/100;
		echo $a;
	}*/
	function ajouterProduit($produit){
		$sql="insert into produit (id_produit,nom_produit,reference,quantite,idca,prix,img,description) values (:id_produit, :nom_produit,:reference,:quantite,:idca,:prix,:img,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_produit=$produit->getId_produit();
        $nom_produit=$produit->getNom_produit();
        $reference=$produit->getReference();
        $quantite=$produit->getQuantite();
        $idca=$produit->getIdca();
        $prix=$produit->getPrix();
        $img=$produit->getImg();
        $description=$produit->getDescription();

		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':idca',$idca);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':img',$img);
		$req->bindValue(':description',$description);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function afficherProduits1(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$cata=$_GET['cata'];
$art="select * from produit where idca=".$cata."";
		$db = config::getConnexion();
		try{
		$liste=$db->query($art);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($id_produit){
		$sql="DELETE FROM produit where id_produit= :id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduit($produit,$id_produit){
		$sql="UPDATE produit SET id_produit=:idd, nom_produit=:nom_produit,reference=:reference,quantite=:quantite,idca=:idca,prix=:prix,img=:img,description=:description WHERE id_produit=:id_produit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$produit->getId_produit();
        $nom_produit=$produit->getNom_produit();
        $reference=$produit->getReference();
        $quantite=$produit->getQuantite();
        $idca=$produit->getIdca();
        $prix=$produit->getPrix();
        $img=$produit->getImg();
        $description=$produit->getDescription();


		$datas = array(':idd'=>$idd, ':id_produit'=>$id_produit, ':nom_produit'=>$nom_produit,':reference'=>$reference,':quantite'=>$quantite,':idca'=>$idca,':prix'=>$prix,':img'=>$img,':description'=>$description);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':nom_produit',$nom_produit);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':idca',$idca);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':img',$img);
		$req->bindValue(':description',$description);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererProduit($id_produit){
		$sql="SELECT * from produit where id_produit=$id_produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduit($nom_produit){
		$sql="SELECT * from produit where nom_produit=$nom_produit";
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