<?PHP
include "promo.php";
include "promoC.php";

if (isset($_POST['id']) and isset($_POST['idprod']) and isset($_POST['prix_nouveau']) and isset($_POST['description']) and isset($_POST['date_debut']) and isset($_POST['date_fin']) ){
$promo1=new promo($_POST['id'],$_POST['idprod'],$_POST['prix_nouveau'],$_POST['description'],$_POST['date_debut'],$_POST['date_fin']);

$promo1C=new PromoC();
$promo1C->ajoutPromo($promo1);
header('Location: afficherPromos.php');	
}else{
	echo "vérifier les champs";
}
?>