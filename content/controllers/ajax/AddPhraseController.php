<?php

namespace ajax;
use \AjaxController;

class AddPhraseController extends AjaxController {

    public function doInit() {
        if ($this->loggedIn && isset($_POST["phrase"])) {
			$userId_safe = $this->con->real_escape_string($this->userId);
			$phrase = $this->con->real_escape_string($_POST["phrase"]);
			
			return $this->con->query("INSERT INTO phrases (user_id, phrase) VALUES ('$userId_safe', '$phrase')");
		}
		
		return false;
    }
}
