<?php

namespace ajax;
use \AjaxController;

class AddTestFeedbackController extends AjaxController {

    public function doInit() {
        if ($this->loggedIn) {
			
			if ( !isset($_POST['thoughts'])
				|| !isset($_POST['seperate-incidents'])
				|| !isset($_POST['most-common-pain-severity'])
				|| !isset($_POST['prescription-painkillers'])
				|| !isset($_POST['over-the-counter-painkillers'])
				|| !isset($_POST['consumed-more-than-rda'])
			) return false;
			
			$userid_safe = $this->con->real_escape_string($this->userId);
				 
			$absTimeInSeconds = time();
				 
			$thoughts_safe = $this->con->real_escape_string($_POST['thoughts']);
			$seperateIncidents_safe = $this->con->real_escape_string($_POST['seperate-incidents']);
			$mostCommonPainSeverity_safe = $this->con->real_escape_string($_POST['most-common-pain-severity']);
			$prescriptionPainkillers_safe = $this->con->real_escape_string($_POST['prescription-painkillers']);
			$overTheCounterPainkillers_safe = $this->con->real_escape_string($_POST['over-the-counter-painkillers']);
			$consumedMoreThanRda_safe = $this->con->real_escape_string($_POST['consumed-more-than-rda']);
			
			$query = "INSERT INTO task_feedback"
				. " (user_id, timestamp_in_seconds,"
				. " thoughts, seperate_incidents, most_common_pain_severity,"
				. " prescription_painkillers, over_the_counter_painkillers, consumed_more_than_rda)"
				. " VALUES ('$userid_safe', $absTimeInSeconds,"
				. " '$thoughts_safe', '$seperateIncidents_safe', '$mostCommonPainSeverity_safe',"
				. " '$prescriptionPainkillers_safe', '$overTheCounterPainkillers_safe', '$consumedMoreThanRda_safe')";
			return $this->con->query($query);
		}
		
		return false;
    }
}

