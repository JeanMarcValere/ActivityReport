<?php 
/**
* Appel de la classe Result.
*/
require('../Entities/Result.php');

/**
* Appel de la classe SqlFileRequests.
*/
require('../../SQL/SqlFileRequests.php');

class ResultManager
{
	private $resultObject;
	private $sqlReq; 

	public function __construct($newResultObject){
		$this->resultObject = $newResultObject;
		$this->sqlReq = new SqlFileRequests();
	}

	/**
	* cette fonction permet de créer dans la base de données blocnotedb un nouvel objet Result.
	*/
	public function createResult(){
		$idResult = $this->resultObject->getResDateStamp();
		$dateResult = $this->resultObject->getResDate();
		$contentResult = $this->resultObject->getResContent();

		$params = array($idResult, $dateResult, $contentResult);
		$this->sqlReq->createResultQuery($params);
	}

	/**
	* Cette fonction permet d'extraire de la base de données blocnotedb des informations relatives à un objet Result.
	*/
	public function readResult(){
		$idResult = $this->resultObject->getResDateStamp();

		$params = array($idResult);
		$this->sqlReq->readResultQuery($params);
	}

	/**
	* Cette fonction permet de mettre à jour des données relatives à un objet Result dans la base de données blocnotedb.
	*/
	public function updateResult($newTaskId){
		$params = array($newTaskId);
		$this->sqlReq->updateResultQuery($params);
	}

	/**
	* Cette fonction permet de supprimer de la base de données blocnotedb l'ensemble des informations relatives à un objet Result.
	*/
	public function deleteResult(){
		$idResult = $this->resultObject->getResDateStamp();

		$params = array($idResult);
		$this->sqlReq->deleteResultQuery($params);
	}
}
 ?>
