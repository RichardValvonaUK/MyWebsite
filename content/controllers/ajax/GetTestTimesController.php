<?php

namespace ajax;
use \AjaxController;

class GetTestTimesController extends AjaxController {
	
	private function getQuery($query, $week) {
		
		$result = $this->con->query($query);

		$resultAsArray = array();
		while ($row = $result->fetch_assoc()) {
			array_push($resultAsArray, $row);
		}

		$resultAsArrayCount = count($resultAsArray);
		
		$resultToReturn = array();
		
		for ($i=0; $i<$resultAsArrayCount; $i++) {
			$firstDayNumberAbs = $this->getDayNumberAbs($resultAsArray[$i]['registered_timestamp_in_seconds']);
			$dayNumberAbs = $this->getDayNumberAbs($resultAsArray[$i]['timestamp_in_seconds']) - $firstDayNumberAbs;
			
			$dayNumber = $dayNumberAbs % 7;
			$weekNumber = ($dayNumberAbs - $dayNumber) / 7;
			
			$weekNumber++;
			$dayNumber++;
			
			if ($week !== null && $week != $weekNumber) continue;
			
			$resultAsArray[$i]['day_number'] = $dayNumber;
			$resultAsArray[$i]['week_number'] = $weekNumber;
			
			array_push($resultToReturn, $resultAsArray[$i]);
		}
		
		return $resultToReturn;
	}

	private function getTasksQuery($week) {
		
		$query;
		
		if ($week === null) {
			$userid_safe = $this->con->real_escape_string($this->userId);
			
			$query = "SELECT users.username, users.timestamp_in_seconds AS registered_timestamp_in_seconds, task_feedback.timestamp_in_seconds" 
					. " FROM task_feedback JOIN users ON task_feedback.user_id = users.id"
					. " WHERE users.id=\"" . $userid_safe . "\""
					. " ORDER BY task_feedback.timestamp_in_seconds ASC";
		}
		else {
			$query = "SELECT users.username, users.timestamp_in_seconds AS registered_timestamp_in_seconds, task_feedback.timestamp_in_seconds" 
					. " FROM task_feedback JOIN users ON task_feedback.user_id = users.id"
					. " ORDER BY users.username ASC, task_feedback.timestamp_in_seconds ASC";
		}

		return $this->getQuery($query, $week);
	}
	
	private function getComputerTasksQuery($week) {
		
		$query;
		
		if ($week === null) {
			$userid_safe = $this->con->real_escape_string($this->userId);
			
			$query = "SELECT users.username, users.timestamp_in_seconds AS registered_timestamp_in_seconds, computer_task_feedback.timestamp_in_seconds" 
				. " FROM computer_task_feedback JOIN users ON computer_task_feedback.user_id = users.id"
				. " WHERE users.id=\"" . $userid_safe . "\" AND computer_task_feedback.is_practice=0"
				. " ORDER BY computer_task_feedback.timestamp_in_seconds ASC";
		}
		else {
			$query = "SELECT users.username, users.timestamp_in_seconds AS registered_timestamp_in_seconds, computer_task_feedback.timestamp_in_seconds" 
				. " FROM computer_task_feedback JOIN users ON computer_task_feedback.user_id = users.id WHERE computer_task_feedback.is_practice=0"
				. " ORDER BY users.username ASC, computer_task_feedback.timestamp_in_seconds ASC";
		}
		
		return $this->getQuery($query, $week);
	}
	
	private function getUsers() {
		$query = "SELECT username FROM users ORDER BY username";
		$result = $this->con->query($query);

		$resultAsArray = array();
		while ($row = $result->fetch_row()) {
			$newRow = array();
			$newRow['username'] = $row[0];
			$newRow['day_number'] = -1;
			$newRow['week_number'] = -1;
			array_push($resultAsArray, $newRow);
		}
		
		return $resultAsArray;
	}

	private function sortArrayByUserNameThenDayNumber($item1, $item2) {
		if ($item2['username'] > $item1['username']) {
			if ($item2['day_number'] > $item1['day_number']) return -4;
			else if ($item2['day_number'] === $item1['day_number']) return -3;
			else return -2;
		}
		else if ($item2['username'] === $item1['username']) {
			if ($item2['day_number'] > $item1['day_number']) return -1;
			else if ($item2['day_number'] === $item1['day_number']) return 0;
			else return 1;
		}
		else {
			if ($item2['day_number'] > $item1['day_number']) return 2;
			else if ($item2['day_number'] === $item1['day_number']) return 3;
			else return 4;
		}
	}

    public function doInit() {
        if ($this->loggedIn) {
			
			$result1AsArray; $result2AsArray;
			
			if (isset($_GET['week'])) {
				$result1AsArray = $this->getTasksQuery($_GET['week']);
				$result2AsArray = $this->getComputerTasksQuery($_GET['week']);
			}
			else {
				$result1AsArray = $this->getTasksQuery(null);
				$result2AsArray = $this->getComputerTasksQuery(null);
			}
			$resultAsArray = array();
			
			foreach($result1AsArray as $result) {
				$result['category'] = 'pain_diary';
				array_push($resultAsArray, $result);
			}
			
			foreach($result2AsArray as $result) {
				$result['category'] = 'computer_task';
				array_push($resultAsArray, $result);
			}
			
			if (isset($_GET['week'])) {
				$result3AsArray = $this->getUsers();
				foreach($result3AsArray as $result) {
					array_push($resultAsArray, $result);
				}
				
				usort($resultAsArray,'self::sortArrayByUserNameThenDayNumber');
			}
			
			return json_encode($resultAsArray);
		}
		
		return false;
    }
}
