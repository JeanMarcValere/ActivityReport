<?php 

/**
* appel de la classe CRA.
*/
require('../Entities/CRA.php');

/**
* Appel de la classe Element.
*/
require('../Entities/Element.php');

/**
* Cette Classe permet de construire une Compte-Rendu d'Activités.
* Cette classe prend comme arguments d'entrée un objet issu de la classe Element. 
*/
class CraBuilder
{
	private $taskObj;

	public function __construct($newElementObj){
		$this->taskObj = $newElementObj;
	}


	/**
	* Cette fonction permet de construire le Compte-Rendu d'Activité en appelant les fonctions de la classe CRA.
	* Cette fonction ne prend aucun argument en entrée.
	* @return CRA $oneReport.
	*/
	public function buildCRA(){

		$oneReport = new CRA();

		$oneReport->setCRADate();
		$oneReport->setCRAStamp();

		return $oneReport;
		
	}

	/**
	* Cette fonction permet d'ajouter une tâche au compte-rendu d'activités. 
	* @var CRA $anyCra.
	* @var Element $anyTaskObj.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public function addElementToCra($anyCra, $anyTaskObj){
		$anyCra->setCRAElementsArray($anyTaskObj);
	}

	/**
	* Cette fonction permet de retirer une tâche du compte-rendu d'activités.
	* @var CRA $anyCra.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public function removeElementToCra($anyCra, $anyTaskObj){

		$craElementsTab = $anyCra->getCRAElementsArray();

		if(in_array($anyTaskObj->getElemStamp(),$craElementsTab)){
			$pos = array_search($anyTaskObj->getElemStamp(),$craElementsTab);
			unset($craElementsTab[$pos]);
		}
	}

	/**
	* Cette fonction permet d'ajouter un résultat d'activité au compte-rendu d'activités.
	* @var CRA $anyCra
	* @var Result $anyResult
	* Cette fonction de renvoie aucun argument en sortie.
	*/
	public function addResultToCra($anyCra, $anyResultObj){
		$anyCra->setCRAResultsArray($anyResultObj);
	}

	/**
	* Cette fonction permet de retirer un résultat du contenu d'un CRA.
	* @var CRA $anyCra.
	* @var Result $anyResultObj.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public function removeResultToCra($anyCra, $anyResultObj){

		$craResultsTab = $anyCra->getCRAResultsArray();

		if(in_array($anyResultObj->getResDateStamp(), $craResultsTab)){
			$pos = array_search($anyResultObj->getResDateStamp(), $craResultsTab);
			unset($craResultsTab[$pos]);
		}
	}

}

 ?>