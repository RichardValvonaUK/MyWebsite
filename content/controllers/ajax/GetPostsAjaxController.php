<?php

namespace controllers\ajax;
use \AjaxController;

use \models\PostOperations;

class GetPostsAjaxController extends AjaxController {

    public function doInit() {
		
        if ($this->loggedIn) {
			return PostOperations::getPosts();
		}
		
		return false;
    }
}
