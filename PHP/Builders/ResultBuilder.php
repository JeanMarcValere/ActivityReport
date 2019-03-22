<?php 

/**
* Appel de la classe Result.
*/
require('../Entities/Result.php');

/**
* Appel de la classe Element.
*/
require('../Entities/Element.php');

class ResultBuilder
{
	private $taskObj;
	private $resultContent;

	public function __construct($newTaskObj, $newResContent){
		$this->taskObj = $newTaskObj;
		$this->resultContent = $newResContent;
	}

	public function buildResult(){

		$oneResult = new Result();

		$oneResult->setResDateStamp();
		$oneResult->setResDate();
		$oneResult->setResContent($this->resultContent);

		return $oneResult;

	}

	public function associateTasksToResult($anyResult){
		$anyResult->setResArrayOfTasks($this->taskObj->getElemStamp());
	}

	public function removeTaskFromResult($anyResult){
		
		$tasksTab = $anyResult->getResArrayOfTasks();

		if(in_array($this->taskObj->getElemStamp(), $tasksTab)){
			$pos = array_search($this->taskObj->getElemStamp(), $tasksTab);
			unset($tasksTab[$pos]);
		}
	}

}

 ?>