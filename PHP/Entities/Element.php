<?php 

class Element
{
	/**
	* Cette variable contient le numéro d'identification du rapport de la tâche réalisée.
	* @var int $elemStamp
	*/
	private $elemStamp;

	/**
	* Cette variable contient le numéro d'identification du CRA auquel la tâche réalisée est rattachée.
	* @var int $craOfElemStamp
	*/
	private $craOfElemStamp;

	/**
	* Cette variable contient l'intitulé du rapport de la tâche réalisée.
	* @var string $elemTitle
	*/
	private $elemTitle;

	/**
	* Cette variable contient l'heure de création du rapport de la tâche réalisée.
	* @var Date $elemHour
	*/
	private $elemHour;

	/**
	* Cette variable contient la raison de la présence dans la société cliente.
	* @var string $elemPresenceCategory
	*/
	private $elemPresenceCategory;

	/**
	* Cette variable contient le descriptif de la tâche réalisée.
	* @var string $elemContent
	*/
	private $elemContent;

	/**
	* Cette variable contient le nom de la société cliente d'Alten pour laquelle les tâches sont réalisées.
	* @var string $clientName
	*/
	private $clientName;

	/**
	* Cette variable contient le nom du Responsable Commercial (référent Alten pour les consultants Alten).
	* @var string $rcName
	*/
	private $rcName;

	//ajouter une variable pour le status d'une tâche...
	/**
	* Cette variable contient l'historique de l'évolution des status pour une tâche.
	* @var array $statusArray
	*/
	private $statusArray = array();

	// SETTERS

	/**
	* Cette fonction permet de déterminer le numéro d'identification du rapport de la tâche réalisée.
	* Cette fonction ne prend aucun argument en entrée.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setElemStamp(){
		$this->elemStamp = mktime(date("H"), date("i"), date("s"), date("n"), date("j"), date("Y"));
	}

	/**
	* Cette fonction permet de déterminer le numéro d'identification du CRA auquel le rapport de tâche est rattaché.
	* Cette fonction ne prend aucun argument en entrée.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setCraOfElemStamp(){
		$this->craOfElemStamp = mktime(date("n"), date("Y"));
	}

	/**
	* Cette fonction permet d'attribuer un titre au rapport de la tâche réalisée.
	* @var string $newTitle
	* Cette fonction ne renvoie aucun élément en sortie.
	*/
	public setElemTitle($newTitle){
		$this->elemTitle = $newTitle;
	}

	/**
	* Cette fonction permet d'attribuer une heure de création du rapport de la tâche réalisée.
	* Cette fonction ne prend aucun argument en entrée.
	* Cette fonction ne renvoie aucun élément en sortie.
	*/
	public setElemHour(){
		$this->elemHour = date('H:i:s');
	}

	/**
	* Cette fonction permet d'attribuer un motif à la présence dans la société cliente d'Alten.
	* @var string $newPresenceCategory
	* Cette fonction ne renvoie aucun élément en sortie.
	*/
	public setElemPresenceCategory($newPresenceCategory){
		$this->elemPresenceCategory = $newPresenceCategory;
	}

	/**
	* Cette fonction permet d'attribuer un descriptif à la tâche réalisée.
	* @var string $newContent
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setElemContent($newContent){
		$this->elemContent = $newContent;
	}

	/**
	* Cette fonction permet d'attribuer un nom de société cliente à la tâche effectuée par le consultant.
	* @var string $newClientName.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setClientName($newClientName){
		$this->clientName = $newClientName;
	}

	/**
	* Cette fonction permet d'attribuer un nom de responsable commercial comme référent Alten en rapport de la société cliente.
	* @var string $newRcName.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setRcName($newRcName){
		$this->rcName = $newRcName;
	}

	public setStatusArray($newStatus){
		$this->statusArray[mktime(date("H"), date("i"), date("s"), date("n"), date("j"), date("Y"))] = $newStatus."=>".date("d/m/Y"));
	}

	// GETTERS

	/**
	* Cette fonction permet d'obtenir le numéro d'identification du rapport d'une tâche réalisée.
	* Cette fonction ne prend aucun argument en entrée.
	* @return int $elemStamp
	*/
	public getElemStamp(){
		return $this->elemStamp;
	}

	/**
	* Cette fonction permet d'obtenir le numéro d'identification du CRA auquel le rapport d'une tâche est associé. 
	* Cette fonction ne prend aucun argument en entrée.
	* @return int $craOfElemStamp
	*/
	public getCraOfElemStamp(){
		return $this->craOfElemStamp;
	}

	/**
	* Cette fonction permet d'obtenir le titre affecté à un rapport de tâche.
	* Cette fonction ne prend aucun argument en entrée.
	* @return string $elemTitle
	*/
	public getElemTitle(){
		return $this->elemTitle;
	}

	/**
	* Cette fonction permet d'obtenir l'heure à laquelle la tâche a été saisie dans le rapport.
	* Cette fonction ne prend aucun argument en entrée.
	* @return Date $elemHour
	*/
	public getElemHour(){
		return $this->elemHour;
	}

	/**
	* Cette fonction permet d'obtenir l'indicatif lié au motif de la présence du consultant dans l'entreprise.
	* Cette fonction ne prend aucun argument en entrée.
	* @return string $elemPresenceCategory
	*/
	public getElemPresenceCategory(){
		return $this->elemPresenceCategory;
	}

	/**
	* Cette fonction permet d'obtenir la description de la tâche réalisée par le consultant chez le client.
	* Cette fonction ne prend aucun argument en entrée.
	* @return string $elemContent.
	*/
	public getElemContent(){
		return $this->elemContent;
	}

	/**
	* Cette fonction permet d'obtenir le nom du client pour lequel le consultant effectue une tâche.
	* Cette fonction ne prend aucun argument en entrée.
	* @return string $clientName.
	*/
	public getClientName(){
		return $this->clientName;
	}

	/**
	* Cette fonction permet d'obtenir le nom du responsable commercial Alten avec lequel le consultant est en rapport.
	* Cette fonction ne prend aucun argument en entrée.
	* @return string $rcName.
	*/
	public getRcName(){
		return $this->rcName;
	}

	/**
	* Cette fonction permet d'obtenir l'historique des status d'une tâche au cours de son traitement.
	* Cette fonction ne prend aucun argument en entrée.
	* @return array $statusArray.
	*/
	public getStatusArray($newStatus){
		return $this->statusArray;
	}
}


 ?>