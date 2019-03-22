<?php 
/**
* Appel de la classe Parameters.
*/
require('../Entities/Parameters.php');

/**
* Appel de la classe SqlFileRequests.
*/
require('../../SQL/SqlFileRequests.php');

class ParameterManager
{
	private $paramObject;
	private $sqlReq;

	public function __construct($newParametersObject){
		$this->paramObject = $newParametersObject;
		$this->sqlReq = new SqlFileRequests();
	}

	public function readCategory(){
		$this->sqlReq->readCategoryQuery();
	}

	public function readClientName(){
		$this->sqlReq->readClientNameQuery();
	}

	public function readStatus(){
		$this->sqlReq->readStatusQuery();
	}

	public function updateCategory($newCategory){
		$params = array($newCategory);
		$this->sqlReq->updateCategoryQuery($params);
	}

	public function updateClientName($newClient){
		$params = array($newClient);
		$this->sqlReq->updateClientNameQuery($params);
	}

	public function updateStatus($newStatus){
		$params = array($newStatus);
		$this->sqlReq->updateStatusQuery($params);
	}

	public function deleteCategory($categoryName){
		$params = array($categoryName);
		$this->sqlReq->deleteCategoryQuery($params);
	}

	public function deleteClientName($clientName){
		$params = array($clientName);
		$this->sqlReq->deleteClientNameQuery($params);
	}

	public function deleteStatus($statusValue){
		$params = array($statusValue);
		$this->sqlReq->deleteStatusQuery($params);
	}
}
 ?>
