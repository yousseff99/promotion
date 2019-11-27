<?php
include "config.php";
class PromoC {



function afficherPromos(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From promo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


function afficherPromo ($promo){
		echo "id: ".$promo->getId()."<br>";
		echo "idprod: ".$promo->getIdprod()."<br>";
		echo "prix_nouveau: ".$promo->getPrix_nouveau()."<br>";
		echo "description: ".$promo->getDescription()."<br>";
		echo "date_debut: ".$promo->getDate_debut()."<br>";
		echo "date_fin: ".$maison->getDate_fin()."<br>";
	}





	

  function ajoutPromo($promo){
		$sql="insert into promo (id,idprod,prix_nouveau,description,date_debut,date_fin) values (:id, :idprod,:prix_nouveau,:description,:date_debut,:date_fin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$promo->getId();
        $idprod=$promo->getIdprod();
        $prix_nouveau=$promo->getPrix_nouveau();
        $description=$promo->getDescription();
        $date_debut=$promo->getDate_debut();
        $date_fin=$promo->getDate_fin();

		$req->bindValue(':id',$id);
		$req->bindValue(':idprod',$idprod);
		$req->bindValue(':prix_nouveau',$prix_nouveau);
		$req->bindValue(':description',$description);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }






function supprimerPromo($id){
		$sql="DELETE FROM promo where id= :id";
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








function modifierPromo($promo,$id){
		$sql="UPDATE promo SET id=:idd, idprod=:idprod,prix_nouveau=:prix_nouveau,description=:description,date_debut=:date_debut,date_fin=:date_fin WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$promo->getId();
        $idprod=$promo->getIdprod();
        $prix_nouveau=$promo->getPrix_nouveau();
        $description=$promo->getDescription();
        $date_debut=$promo->getDate_debut();
        $date_fin=$promo->getDate_fin();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':idprod'=>$idprod,':prix_nouveau'=>$prix_nouveau,':description'=>$description,':date_debut'=>$date_debut,':date_fin'=>$date_fin);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':idprod',$idprod);
		$req->bindValue(':prix_nouveau',$prix_nouveau);
		$req->bindValue(':description',$description);
		$req->bindValue(':date_debut',$date_debut);
		$req->bindValue(':date_fin',$date_fin);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}




	function recupererPromo($id){
		$sql="SELECT * from promo where id=$id";
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