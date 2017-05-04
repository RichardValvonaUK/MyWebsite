<?php

namespace controllers\ajax;

use \models\ProfileOperations;

use \AjaxController;

class ApplyProfileChangesAjaxController extends AjaxController {

    public function doInit() {
		
		if (!$this->loggedIn) return false;
		
		return ProfileOperations::applyProfileChanges();
    }
}
