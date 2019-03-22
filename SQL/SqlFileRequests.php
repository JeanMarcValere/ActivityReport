<?php 
class SqlFileRequests
{
	// PUBLIC FUNCTIONS.

		//--- CRA QUERIES FUNCTIONS ---

		public function	createCraQuery($params){}

		public function readCraQuery($params){}

		public function updateCRATasksQuery($params){}

		public function updateCRAResultsQuery($params){}

		public function deleteCRAQuery($params){}

		//--- ELEMENT QUERIES FUNCTIONS ---

		public function createElementQuery($params){}

		public function readElementQuery($params){}

		public function updateElementQuery($params){}

		public function deleteElementQuery($params){}

		//--- RESULT QUERIES FUNCTIONS ---
		
		public function createResultQuery($params){}

		public function readResultQuery($params){}

		public function updateResultQuery($params){}

		public function deleteResultQuery($params){}

		//--- PARAMETERS QUERIES FUNCTIONS ---

		public function readCategoryQuery(){}

		public function readClientNameQuery(){}

		public function readStatusQuery(){}

		public function updateCategoryQuery($params){}

		public function updateClientNameQuery($params){}

		public function updateStatusQuery($params){}

		public function deleteCategoryQuery($params){}

		public function deleteClientNameQuery($params){}

		public function deleteStatusQuery($params){}

	// PRIVATE FUNCTIONS.

	/**
	* Cette fonction permet d'exécuter une requête en établissant la connexion avec la base de données blocnotedb.
	* $sql : requête sql - argument d'entrée.
	* $params : paramètres de la requête - argument d'entrée. 
	* @var string $sql.
	* @var array $params.
	* @return 
	*/
	private function executeQuery($sql,$params = null){

		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "blocnotedb";

		$connection = new PDO('mysql:host='.$host.'; dbname='.$db.'', ''.$user.'', ''.$password.'');

		$stmt = $connection->prepare($sql);
		
		//var_dump($params);

		$stmt->execute($params);
 
        $stmt->fetchAll();

		$stmt->closeCursor();

		//$connection = null;
	}
}

 ?>