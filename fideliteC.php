<?php


include "config.php";
class FideliteC {

function afficherFidelite ($fidelite){
		echo "Id: ".$fidelite->getId()."<br>";
		echo "Id_client: ".$fidelite->getId_client()."<br>";
		echo "Solde: ".$fidelite->getSolde()."<br>";
		
	}




function ajouterFidelite($fidelite){
		$sql="insert into fidelite (id,id_client,solde) values (:id, :id_client,:solde)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$fidelite->getId();
        $id_client=$fidelite->getId_client();
        $solde=$fidelite->getSolde();
       
		$req->bindValue(':id',$id);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':solde',$solde);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}









function supprimerFidelite($id){
		$sql="DELETE FROM fidelite where id= :id";
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




function afficherFidelites(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fidelite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}








function modifierFidelite($fidelite,$id){
		$sql="UPDATE fidelite SET id=:idd, id_client=:id_client,solde=:solde WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$fidelite->getId();
        $id_client=$fidelite->getId_client();
        $solde=$fidelite->getSolde();
       

		$datas = array(':idd'=>$idd, ':id'=>$id, ':id_client'=>$id_client,':solde'=>$solde );
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':solde',$solde);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}




	function recupererFidelite($id){
		$sql="SELECT * from fidelite where id=$id";
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