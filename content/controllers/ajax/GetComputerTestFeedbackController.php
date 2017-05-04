<?php

namespace ajax;
use \AjaxController;

class GetComputerTestFeedbackController extends AjaxController {


    public function doInit() {
        if ($this->loggedIn && isset($_GET['username'])) {
			
			$username_safe = $this->con->real_escape_string($_GET['username']);
			
			$query = "SELECT computer_task_feedback.id, computer_task_feedback.user_id,"
				. " computer_task_feedback.timestamp_in_seconds, users.timestamp_in_seconds AS registered_timestamp_in_seconds, computer_task_feedback.total_score,"
				. " computer_task_feedback.buttons_pressed" 
				. " FROM computer_task_feedback JOIN users ON computer_task_feedback.user_id = users.id WHERE users.username='$username_safe' AND computer_task_feedback.is_practice=0 ORDER BY computer_task_feedback.timestamp_in_seconds";

			$result = $this->con->query($query);

			$resultAsArray = array();
			while ($row = $result->fetch_assoc()) {
				array_push($resultAsArray, $row);
			}

			$resultAsArrayCount = count($resultAsArray);
			if ($resultAsArrayCount === 0) return false;
			
			for ($i=0; $i<$resultAsArrayCount; $i++) {
				
				$firstDayNumberAbs = $this->getDayNumberAbs($resultAsArray[$i]['registered_timestamp_in_seconds']);
				$dayNumberAbs = $this->getDayNumberAbs($resultAsArray[$i]['timestamp_in_seconds']) - $firstDayNumberAbs;
			
				$dayNumber = $dayNumberAbs % 7;
				$weekNumber = ($dayNumberAbs - $dayNumber) / 7;
			
				$weekNumber++;
				$dayNumber++;
				
				$resultAsArray[$i]['day_number'] = $dayNumber;
				$resultAsArray[$i]['week_number'] = $weekNumber;
			}
			
			return json_encode($resultAsArray);
		}
		
		return false;
    }
}
