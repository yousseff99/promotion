<?PHP
include "promoC.php";
$promoC=new PromoC();
if (isset($_POST["id"])){
	$promoC->supprimerPromo($_POST["id"]);
	header('Location: afficherPromos.php');
	
}

?>

