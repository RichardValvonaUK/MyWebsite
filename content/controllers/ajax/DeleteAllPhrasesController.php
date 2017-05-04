<?php

namespace ajax;
use \AjaxController;

class DeleteAllPhrasesController extends AjaxController {

    public function doInit() {
		if ($this->loggedIn) {
			$userId_safe = $this->con->real_escape_string($this->userId);
			
			return $this->con->query("DELETE FROM phrases WHERE user_id='$userId_safe'");
		}
		
		return false;
    }
}

