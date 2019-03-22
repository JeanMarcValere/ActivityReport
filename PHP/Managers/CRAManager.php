<?php 
/**
* Appel de la classe CRA.
*/
require('../Entities/CRA.php');

/**
* Appel de la classe SqlFileRequests.
*/
require('../../SQL/SqlFileRequests.php');

/**
* Cette classe permet d'inserer, d'extraire, de mettre à jour et de supprimer des données de la table CRA.
*
*/
class CRAManager
{
	private $craObject;
	private $sqlReq;

	/**
	* Constructeur. Implémente les variables privées relatives à la classe CRAManager.
	*
	* $nwCraObject :	objet CRA.
	* $sqlReq :			objet de requétage sql.
	*
	* @var CRA $craObject.
	*/
	public __construct($nwCraObject){
		$this->craObject = $nwCraObject;
		$this->sqlReq = new SqlFileRequests();
	}

	/**
	* Cette fonction permet de créer un nouvel objet CRA dans la base de données blocnotedb.
	* Cette fonction ne prend aucun argument en entrée.
	* Cette fonction ne renvoie aucun argument en sortie.
	*
	* $craId :		numéro identificateur du CRA en cours de création dans la base de données blocnotedb.
	* $craDate :	mois et année de création de l'objet CRA dans la base de données blocnotedb.
	* $params : 	paramètres de la requête de création del'objet CRA dans la base de données blocnotedb.
	*/
	public function createCRA(){
		$craId = $this->craObject->getCRAStamp();
		$craDate = $this->craObject->getCRADate();

		$params = array($craId, $craDate);
		$this->sqlReq->createCraQuery($params);
	}

	/**
	* Cette fonction permet d'extraire de la base de données blocnotedb l'ensemble des informations relatives à un objet CRA.
	* Cette fonction ne prend aucun argument en entrée.
	*
	* $craId :		numéro identificateur du CRA créé dans la base de données blocnotedb.
	* $resultats :	tableau php contenant l'ensemble des informations présentent en tant que contenu dans un CRA.
	* $params :		paramètres de la requête d'affichage des information relatives au contenu d'un CRA.
	*
	* @return array $resultats.
	*/
	public function readCRA(){
		$craId = $this->craObject->getCRAStamp();

		$params = array($craId);
		$resultat = $this->sqlReq->readCraQuery($params);

		return $resultats;
	}

	/**
	* Cette fonction permet d'insérer dans la base de données blocnotedb les mises à jour relatives au contenu d'un objet CRA.
	* Cette fonction ne revoie aucun argument en sortie.
	*
	* $newTask : 	identifiant de la nouvelle tâche à inclure dans la table des tâches.
	* $newResult :	identifiant d'un nouveau résultat à inclure dans la table des résultats.
	* $params : 	paramètres de la requête de mise à jour de la table d'association idTask - idCRA ou/et de la table d'association idResult - idCRA.
	*
	* @var int $newTaskId.
	* @var int $newResultId.
	*
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public function updateCRA($newTaskId, $newResultId){

		if($newTaskId){
			$params = array($newTaskId);
			$this->sqlReq->updateCRATasksQuery($params);
		}

		if($newResultId){
			$params = array($newResultId);
			$this->sqlReq->updateCRAResultsQuery($params)
		}

	}

	/**
	* Cette fonction permet de supprimer l'ensemble des informations relatives à un objet CRA dans la base de données blocnotedb.
	* Cette fonction ne prend aucun argument en entrée.
	* Cette fonction ne renvoie auncun argument en sortie.
	*
	* $craId :	numéro identificateur du CRA créé dans la base de données blocnotedb.
	* $params : paramètres de la requête de suppression des informations relatives à un objet CRA de la base de données blocnotedb.
	*/
	public function deleteCRA(){
		$craId = $this->craObject->getCRAStamp();

		$params = array($craId);
		$this->sqlReq->deleteCRAQuery($params);
	}

}
 ?>
