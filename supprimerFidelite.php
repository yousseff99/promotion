<?PHP
include "fideliteC.php";
$fideliteC=new FideliteC();
if (isset($_POST["id"])){
	$fideliteC->supprimerFidelite($_POST["id"]);
	header('Location: afficherFidelite.php');
}

?>