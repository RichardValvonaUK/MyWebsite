<?php

namespace ajax;
use \AjaxController;

class AddComputerTestFeedbackController extends AjaxController {

    public function doInit() {
        if ($this->loggedIn) {
			
			if (!isset($_POST['total-score'])
				|| !isset($_POST['buttons-pressed'])) return false;
			
			$userid_safe = $this->con->real_escape_string($this->userId);
				 
			$absTimeInSeconds = time();
			
			$totalScore_safe = $this->con->real_escape_string($_POST['total-score']);
			$buttonsPressed_safe = $this->con->real_escape_string($_POST['buttons-pressed']);
			$practiceMode_safe = $this->con->real_escape_string($_POST['practice-mode']);
			
			$query = "INSERT INTO computer_task_feedback"
				. " (user_id, timestamp_in_seconds, total_score, buttons_pressed, is_practice)"
				. " VALUES ('$userid_safe', $absTimeInSeconds, '$totalScore_safe', '$buttonsPressed_safe', $practiceMode_safe)";
			return $this->con->query($query);
		}
		
		return false;
    }
}

