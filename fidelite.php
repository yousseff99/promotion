<?PHP
class Fidelite{
	private $id;
	private $id_client;
	private $solde;
	
	function __construct($id,$id_client,$solde){
		$this->id=$id;
		$this->id_client=$id_client;
		$this->solde=$solde;
		
	}




	
	function getId(){
		return $this->id;
	}
	function getId_client(){
		return $this->id_client;
	}
	function getSolde(){
		return $this->solde;
	}
	



	


	function setId($id){
		$this->id=$id;
	}
	function setId_client($id_client){
		$this->id_client=$id_client;
	}
	function setSolde($solde){
		$this->solde;
	}
	
	
}

?>