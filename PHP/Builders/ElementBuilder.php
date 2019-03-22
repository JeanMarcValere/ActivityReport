<?php 
/**
* Appel de la classe Element.
*/
require('../Entities/Element.php');

/**
* Appel de la classe CRA.
*/
require('../Entities/CRA.php');

/**
* Cette classe permet de construire une tâche réalisée par un consultant pour le compte d'une entreprise.
*/
class ElementBuilder
{
	/**
	* Cette variable contient le titre d'une tâche.
	* @var string $titleOfElement.
	*/
	private $titleOfElement;

	/**
	* Cette variable contient l'indicateur de catégorie.
	* @var string $presenceCategory.
	*/
	private $presenceCategory;

	/**
	* Cette variable contient le descriptif de la tâche réalisée par le consultant.
	* @var string $content.
	*/
	private $content;

	/** 
	* Cette variable contient l'objet Compte-Rendu d'Activité. $craObj est issu de la classe CRABuilder.
	* @var CRA $craObj.
	*/
	private $craObj;

	/**
	* Constructeur. 
	* @var string $nwTitle.
	* @var string $nwPresenceCategory.
	* @var string $nwContent.
	* @var CRA $nwCraObj.
	*/
	public function __construct($nwTitle, $nwPresenceCategory, $nwContent){
		$this->titleOfElement = $nwTitle;
		$this->presenceCategory = $nwPresenceCategory;
		$this->content = $nwContent;
	}

	/**
	* Cette fonction permet de créer une tâche.
	* Cette fonction ne prend auncun argument en entrée.
	* @return Element $oneElement.
	*/
	public function buildElement(){

		$oneElement = new Element();

		$oneElement->setElemStamp();
		$oneElement->setCraOfElemStamp();
		$oneElement->setElemTitle($this->titleOfElement);
		$oneElement->setElemHour();
		$oneElement->setElemPresenceCategory($this->presenceCategory);
		$oneElement->setElemContent($this->content);

		return $oneElement;
	}
}


 ?>