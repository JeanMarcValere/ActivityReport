<?php 

class Result
{
	/**
	* Cette variable contient l'identifiant du résultat obtenu d'une tâche réalisée par le consultant.
	* @var int $resDateStamp.
	*/
	private $resDateStamp;
	/**
	* Cette variable contient la date à laquelle le résultat d'une tâche a été saisie dans le rapport.
	* @var Date $resDate.
	*/ 
	private $resDate;

	/**
	* Cette variable contient toutes les références des tâches associées au résultat obtenu.
	* @var array resArrayOfTasks.
	*/
	private $resArrayOfTasks = array();

	/**
	* Cette variable contient la description du résultat obtenu
	* @var string resContent.
	*/ 
	private $resContent;

	// SETTERS

	/**
	* Cette fonction permet de déterminer l'identifiant correspondant au resultat obtenu par le consultant.
	* Cette fonction ne prend aucun argument en entrée.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setResDateStamp(){
		$this->resDateStamp = mktime(date("H"), date("i"), date("s"), date("n"), date("j"), date("Y"));
	}

	/**
	* Cette fonction permet de déterminer la date à laquelle le résultat a été obtenu par le consultant.
	* Cette fonction ne prend aucun argument en entrée.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setResDate(){
		$this->resDate = date("d/m/Y");
	}

	/**
	* Cette fonction permet d'associer le résultat obtenu aux identifiants des tâches auxquelles celui-ci dépend.
	* @var int $idTask.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/	
	public setResArrayOfTasks($idTask){
		if(!in_array($idTask,$this->resArrayOfTasks)){
			array_push($this->resArrayOfTasks,$idTask);
		}
	}

	/**
	* Cette fonction permet de décrire le détail du résultat obtenu.
	* @var string $nwContent
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setResContent($nwContent){
		$this->resContent = $nwContent;
	}

	// GETTERS

	/**
	* Cette fonction permet d'obtenir l'identifiant d'un résultat.
	* Cette fonction ne prend aucun argument en entrée.
	* @return int $resDateStamp.
	*/
	public getResDateStamp(){
		return $this->resDateStamp;
	}

	/**
	* Cette fonction permet d'obtenir la date à laquelle un résultat a été obtenu et ajouté au rapport.
	* Cette fonction ne prend aucun argument en entrée.
	* @return Date $resDate.
	*/
	public getResDate(){
		return $this->resDate;
	}

	/**
	* Cette fonction permet de restituer l'ensemble des identifiants des tâches liées à un résultat obtenu.
	* Cette fonction ne prend aucun argument en entrée.
	* @return array $resArrayOfTasks.
	*/
	public getResArrayOfTasks(){
		return $this->resArrayOfTasks;
	}

	/**
	* Cette fonction permet de restituer le détail de la description d'un résultat obtenu.
	* Cette fonction ne prend aucun argument en entrée.
	* @return string $resContent.
	*/
	public getResContent(){
		return $this->resContent;
	}

}

 ?>