<?php

namespace controllers\ajax;
use \AjaxController;

class AddPostAjaxController extends AjaxController {

    public function doInit() {
		
		if (isset($_GET["subject"])) $_POST["subject"] = $_GET["subject"];
		if (isset($_GET["content"])) $_POST["content"] = $_GET["content"];
		
        if ($this->loggedIn && isset($_POST["subject"]) && isset($_POST["content"])) {
			
			$userId_safe = $this->con->real_escape_string($this->userId);
			$timeInSeconds_safe = time();
			
			$subject_safe = $this->con->real_escape_string($_POST["subject"]);
			$content_safe = $this->con->real_escape_string($_POST["content"]);
			
			$query = "INSERT INTO posts (user_id, timestamp, subject, content)"
				. " VALUES ($userId_safe, $timeInSeconds_safe, '$subject_safe', '$content_safe')";
			
			$result = $this->con->query($query);
			
			return $this->con->insert_id;
		}
		
		return false;
    }
}
