<?php

namespace ajax;
use \AjaxController;

class DeletePhraseController extends AjaxController {

    public function doInit() {
		
		if ($this->loggedIn && isset($_POST["phrase_id"])) {
			
			$userId_safe = $this->con->real_escape_string($this->userId);
			$phraseId_safe = $this->con->real_escape_string($_POST["phrase_id"]);
			
			return $this->con->query("DELETE FROM phrases WHERE id='$phraseId_safe' AND user_id='$userId_safe'");
		}
		
		return false;
    }
}

