<?php 

/**
* Appel de la classe Element.
*/
require('../Entities/Element.php');

/**
* Appel de la classe SqlFileRequests.
*/
require('../../SQL/SqlFileRequests.php');

class ElementManager
{
	private $elementObject;
	private $sqlReq; 

	public function __construct($newElemObject){
		$this->elementObject = $newElemObject;
		$this->sqlReq = new SqlFileRequests();
	}

	/**
	* Cette fonction permet de créer un nouvel objet Element dans la base de données blocnotedb.
	*/
	public function createElement(){
		$idElement = $this->elementObject->getElemStamp();
		$title = $this->elementObject->getElemTitle();
		$hour = $this->elementObject->getElemHour();
		$category = $this->elementObject->getElemPresenceCategory();
		$content = $this->elementObject->getElemContent();
		$client = $this->elementObject->getClientName();
		$rc = $this->elementObject->getRcName();

		$params = array($idElement, $title, $hour, $category, $content, $client, $rc);
		$this->sqlReq->createElementQuery($params);
	}

	/**
	* Cette fonction permet d'extraire de la base blocnotedb des informations relatives à un objet Element.  
	*/
	public function readElement(){
		$idElement = $this->elementObject->getElemStamp();

		$params = array($idElement);
		$this->sqlReq->readElementQuery($params)
	}

	/**
	* Cette fonction permet de mettre à jour dans la base blocnotedb des informations relatives à un objet Element.
	*/
	public function updateElement($newStatusId){
		$params = array($newStatusId);
		$this->sqlReq->updateElementQuery($params);
	}

	/**
	* Cette fonction permet de supprimer de la base blocnotedb l'ensemble des informations relatives à un objet Element.
	*/
	public function deleteElement(){
		$idElement = $this->elementObject->getElemStamp();

		$params = array($idElement);
		$this->sqlReq->deleteElementQuery($params);
	}

}
 ?>}
