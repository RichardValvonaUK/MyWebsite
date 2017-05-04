<?php

namespace controllers\ajax;
use \AjaxController;

use \models\PostOperations;

class AddPostAjaxController extends AjaxController {

    public function doInit() {
		
        if ($this->loggedIn && isset($_POST["subject"]) && isset($_POST["content"]) && isset($_POST["expiresIn"])) {
			return PostOperations::addPost();
		}
		
		return false;
    }
}
