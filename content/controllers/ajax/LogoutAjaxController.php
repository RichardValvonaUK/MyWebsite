<?php

namespace ajax;
use \AjaxController;

class LogoutAjaxController extends AjaxController {
	
	public function doInit() {
        session_destroy();
        return true;
    }
}
