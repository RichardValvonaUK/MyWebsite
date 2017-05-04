<?php

class ArticlesWithInfo {

	private $allContents;

	$file = 'names-data.json';
	
	public function __construct() {
		$this->loadContents();
	}
	
	private function saveContents() {
		$json = json_encode($this->allContents);
    	\URLS::saveContentsToFile($this->file, $json);
    	return json_encode($json);
	}
	
	private function loadContents() {
		$contents = \URLS::contentsOfFile($this->file);
	
		if (trim($contents) === '') {
			$this->allContents = array();
		}
		else {
			$json = json_decode($contents, true);
			$this->allContents = $json;
		}
	}
	
	
	
	private function create($url, $) {
		$allContents = &$this->allContents;
	
		$idToAdd = 1;
		
		$allContentsCount = count($allContents);
		
		if ($allContentsCount > 0) {
			$idToAdd = intval($allContents[$allContentsCount - 1]['id']) + 1;
		}
	
		array_push($allContents, array(
			'id' => $idToAdd,
			'firstname' => $firstName,
			'surname' => $surname
		));
		
		return $idToAdd;
	}
	
	public function retrieveAll() {
		return $this->allContents;
	}
	
	private function update($id, $firstName, $surname) {
		$allContents = &$this->allContents;
	
		foreach ($this->allContents as &$nextName) {		
			$nextId = intval($nextName['id']);
			
			if ($nextId === $id) {
				$nextName['firstname'] = $firstName;
				$nextName['surname'] = $surname;
			}
		}
	}
	
	/*
		This is not the most efficient way of updating the names, but it's the simplest
		to loop through each name to save for each name to save.
	*/
	public function updateAll($allContentsToSave) {
	
		$allIds = array();
	
		$allContents = &$this->allContents;
		
		foreach ($allContentsToSave as &$nextNameToSave) {
		
			$nextIdToSave = intval($nextNameToSave['id']);
			
			// Create ID
			if ($nextIdToSave === 0) {
				$nextIdToSave = $this->create($nextNameToSave['firstname'], $nextNameToSave['surname']);
			}
			else {
				$this->update($nextIdToSave, $nextNameToSave['firstname'], $nextNameToSave['surname']);
			}
			
			array_push($allIds, $nextIdToSave);
		}
		
    	$this->saveContents();
    	return json_encode($allIds);
	}
	
	public function delete($id) {
		$allContents = &$this->allContents;
		
		foreach ($allContents as $key => &$nextNameToRemove) {
			
			$nextIdToRemove = intval($nextNameToRemove['id']);
			echo $nextIdToRemove;
			// Create ID
			if ($nextIdToRemove === $id) {
				array_splice($allContents, $key, 1);
				break;
			}
		}
		
    	$this->saveContents();
	}
}

