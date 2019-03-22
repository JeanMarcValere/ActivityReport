<?php 
/**
* Appel de la classe Parameters.
*/
require("../Entities/Parameters.php");

/**
* Cette classe permet de construire les catégories et les clients.
*/
class ParametersBuilder
{

	/**
	* Cette fonction permet d'ajouter une catégorie au tableau des catégories.
	* @var string $nwCategory.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public function buildCategoryParameter($nwCategory){
		$categoryOfPresence = new Parameters();
		$categoryOfPresence->setPresenceCategory($nwCategory);
	}

	/**
	* Cette fonction permet d'aouter un nom d'entreprise à la liste de sociétés clientes d'Alten.
	* @var string $nwClient.
	* Cette fonction ne renvoie aucun argument en sortie.
	*/
	public function buildClientParameter($nwClient){
		$nameOfClient = new Parameters();
		$nameOfClient->setClientName($nwClient);
	}
}

 ?>