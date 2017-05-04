<?php

namespace ajax;
use \AjaxController;

class GetPhrasesController extends AjaxController {

    public function doInit() {
		
		if (!$this->loggedIn) return false;
		
        $username_safe = $this->con->real_escape_string($this->username);

		$result = $this->con->query("SELECT phrases.phrase FROM users JOIN phrases ON users.id = phrases.user_id WHERE username='$username_safe'");


		$phrases = array();
		while ($row = $result->fetch_row()) {
			array_push($phrases, $row[0]);
		}

		return json_encode($phrases);
    }
}
