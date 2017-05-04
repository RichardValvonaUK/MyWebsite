<?php

namespace ajax;
use \AjaxController;

class GetTestFeedbackController extends AjaxController {

    public function doInit() {
        if ($this->loggedIn && isset($_GET['username'])) {
			
			$username_safe = $this->con->real_escape_string($_GET['username']);

			$query = "SELECT task_feedback.id, task_feedback.user_id, task_feedback.timestamp_in_seconds,"
				. " task_feedback.thoughts, task_feedback.seperate_incidents, task_feedback.most_common_pain_severity,"
				. " task_feedback.prescription_painkillers, task_feedback.over_the_counter_painkillers, task_feedback.consumed_more_than_rda FROM task_feedback JOIN users ON task_feedback.user_id = users.id WHERE users.username='$username_safe' ORDER BY task_feedback.timestamp_in_seconds";

			$result = $this->con->query($query);


			$resultAsArray = array();
			while ($row = $result->fetch_assoc()) {
				$firstDayNumberAbs = $this->getDayNumberAbs($this->getRegisteredDayInSeconds());
				$dayNumberAbs = $this->getDayNumberAbs($row["timestamp_in_seconds"]) - $firstDayNumberAbs;
				
				$dayNumber = $dayNumberAbs % 7;
				$weekNumber = ($dayNumberAbs - $dayNumber) / 7;
				
				$weekNumber++; $dayNumber++;
				
				$row['day_number'] = $dayNumber;
				$row['week_number'] = $weekNumber;
				
				array_push($resultAsArray, $row);
			}

			$resultAsArrayCount = count($resultAsArray);
			if ($resultAsArrayCount === 0) return false;
			
			return json_encode($resultAsArray);
		}
		
		return false;
    }
}
