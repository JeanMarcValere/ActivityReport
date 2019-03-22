<? php

class CRA
{
	/**
	* Cette variable contient le mois de création du CRA.
	* @var Date $craDate
	*/
	private $craDate;

	/**
	* Cette variable contient le numéro d'identification du CRA.
	* @var int $craStamp
	*/
	private $craStamp;

	/**
	* Cette variable contient l'ensemble des numéros d'identification des tâches effectuées.
	* @var array $craElementsArray
	*/
	private $craElementsArray = array();

	/**
	* Cette variable contient l'ensemble des numéros d'identification des résultats d'activités obtenus.
	* @var array $craResultsArray
	*/
	private $craResultsArray = array();


	// SETTERS

	/**
	* Cette fonction permet d'affecter un mois de création du Compte-Rendu d'activité.
	* Cette fonction ne prend aucun argument en entrée.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setCRAMonth(){
			
		$oneMonthNumber = date('n') - 1;
		$oneYearNumber = date('Y');

		$recup = $this->MonthConverter($oneMonthNumber);

		$this->craDate = $recup[0]." ".$oneYearNumber;

	}

	/**
	* Cette fonction permet la création d'un numéro identifiant d'un CRA à partir de sa date de création.
	* Cette fonction ne prend aucun argument en entrée.
	* cette fonction ne renvoie aucun argument en sortie.
	*/
	public setCRAStamp(){
		$this->craStamp = mktime(date("n"), date("Y"));
	}

	/**
	* Cette fonction permet l'intégration d'un élément d'activité au CRA.
	* @var Element $newElement.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setCRAElementsArray($newElement){
		if(!in_array($newElement->getElemStamp(), $this->$craElementsArray)){
			array_push($this->$craElementsArray, $newElement->getElemStamp());
		}		
	}

	/**
	* Cette fonction permet l'intégration d'un résultat d'activité au compte-rendu d'activités.
	* @var Result $newResult.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public setCRAResultsArray($newResult){
		if(!in_array($newResult->getResDateStamp(), $this->craResultsArray)){
			array_push($this->craResultsArray, $newResult->getResDateStamp());
		}
	}

	// GETTERS

	/**
	* Cette fonction permet d'obtenir la date de création du Compte-Rendu d'Activité.
	* Cette fonction ne prend aucun argument en entrée.
	* @return Date $craDate.
	*/
	public getCRADate(){
		return $this->craDate;
	}

	/**
	* Cette fonction permet d'obtenir le numéro d'identification du CRA.
	* Cette fonction ne prend aucun argument en entrée.
	* @return int $craStamp.
	*/
	public getCRAStamp(){
		return $this->craStamp;
	}

	/**
	* Cette fonction permet d'obtenir l'ensemble des identifiants des éléments figurants dans le CRA.
	* Cette fonction ne prend aucun argument en entrée.
	* @return array $craElementsArray.
	*/
	public getCRAElementsArray(){
		return $this->craElementsArray;
	}

	/**
	* Cette fonction permet d'obtenir l'ensemble des identifiants des résultats d'activités figurant dans le CRA.
	* Cette fonction ne prend aucun argument en entrée.
	* @return array $craResultsArray.
	*/
	public getCRAResultsArray(){
		return $this->$craResultsArray;
	}

	// PRIVATE FUNCTIONS

	/**
	* Cette fonction réalise la conversion entre un numéro de jour et le nom de ce jour de la semaine. Idem pour un mois.
	* @var int $mhNumber.
	* @return string $recupMonth.
	*/
	private function MonthConverter($mhNumber){
		
		$months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');

		$recupMonth = $months[$mhNumber];

		return $recupMonth;

	}



}

?>
