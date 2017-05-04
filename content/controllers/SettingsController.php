<?php

namespace controllers;
use \Controller;

use \models\User;

class SettingsController extends Controller {

    public function doInit() {
   	$this->pageNotFound = true;
    
    	if ($this->loggedIn) {
    		$this->pageNotFound = false;
    	}
    }
}