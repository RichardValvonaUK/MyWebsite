<?php

namespace ajax;
use \AjaxController;

class GetUsersController extends AjaxController {

    public function doInit() {
        if ($this->loggedIn) {
			
		$query = "SELECT username FROM users ORDER BY username";

		$result = $this->con->query($query);


		$resultAsArray = array();
		while ($row = $result->fetch_row()) {
			array_push($resultAsArray, $row[0]);
		}

		return json_encode($resultAsArray);

		}
		
		return false;
    }
}
