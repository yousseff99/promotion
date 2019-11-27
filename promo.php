<?PHP
class Promo{
	private $id;
	private $idprod;
	private $prix_nouveau;
	private $description;
	private $date_debut;
	private $date_fin;
	function __construct($id,$idprod,$prix_nouveau,$description,$date_debut,$date_fin){
		$this->id=$id;
		$this->idprod=$idprod;
		$this->prix_nouveau=$prix_nouveau;
		$this->description=$description;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
	}
	
	function getId(){
		return $this->id;
	}
	function getIdprod(){
		return $this->idprod;
	}
	function getPrix_nouveau(){
		return $this->prix_nouveau;
	}
	function getDescription(){
		return $this->description;
	}
	function getDate_debut(){
		return $this->date_debut;
	}
	function getDate_fin(){
		return $this->date_fin;
	}

	
	function setId($id){
		$this->id=$id;
	}
	function setIdprod($idprod){
		$this->idprod=$idprod;
	}
	function setPrix_nouveau($prix_nouveau){
		$this->prix_nouveau=$prix_nouveau;
	}
		function setDescription($description){
		$this->description=$description;
	}
	function setDate_debut($date_debut){
		$this->date_debut=$date_debut;
	}
	function setDate_fin($date_fin){
		$this->date_fin=$date_fin;
	}
	
}

?>