<?php 

class Parameters
{
	/**
	* Cette variable contient les indicateurs de catégories justifiant la présence d'un consultant au sein d'une entreprise.
	* @var array $presenceCategory.
	*/
	private $presenceCategory = array();
	
	/**
	* Cette variable contient les noms des différents clients chez lesquels le consultant est détaché.
	* @var array $clientName.
	*/
	private $clientName = array();

	/**
	* Cette variable contient les staus attribuables à une tâche.
	* @var array $taskStatus.
	*/
	private $taskStatusArray = array();

	// SETTERS

	/**
	* Cette fonction permet de compléter une liste d'indicateurs de catégories permettant de justifier la présence d'un consultant chez une entreprise.
	* @var string $newCategory.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setPresenceCategory($newCategory){
		if(!in_array($newCategory,$this->presenceCategory)){
			array_push($this->presenceCategory,$newCategory);
		}		
	}

	/**
	* Cette fonction permet d'ajouter une entreprise à une liste de noms de clients.
	* @var string $newClient.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setClientName($newClient){
		if(!in_array($newClient,$this->clientName)){
			array_push($this->clientName,$newClient);
		}
	}

	/**
	* Cette fonction permet d'ajouter un status attribuable à une tâche à une liste de status existants.
	* @var string $newStatus.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setTaskStatus($newStatus){
		if(!in_array($newStatus, $this->taskStatusArray)){
			array_push($this->taskStatusArray, $newStatus);
		}
	}

	// GETTERS

	/**
	* Cette fonction permet d'obtenir la liste des indicateurs de catégories permettant de justifier la présence d'un consultant chez une entreprise.
	* Cette fonction ne prend aucun argument en entrée.
	* @return array $presenceCategory.
	*/
	public getPresenceCategory(){
		return $this->presenceCategory;
	}

	/**
	* Cette fonction permet d'obtenir la liste des entreprises chez lesquelles le consultant peut intervenir.
	* Cette fonction ne prend aucun argument en entrée.
	* @return array $clientName.
	*/
	public getClientName(){
		return $this->clientName;
	}

	/**
	* Cette fonction permet d'obtenir la liste des status attribuables à une tâche au cours de son traitement.
	* Cette fonction ne prend aucun argument en entrée.
	* @return array $taskStatusArray.
	*/	
	public getTaskStatus(){
		return $this->taskStatusArray;
	}
}

 ?>