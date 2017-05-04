<?php

namespace controllers;
use \Controller;

use \models\User;

class EditPagesController extends Controller {

	public $viewToEdit = null;
	public $viewContent = '';

    public function doInit() {
    	if (!$this->isEditingAllowed) $this->pageNotFound = true;
    	
    	$this->confirmForLinks = true;
    	
    	if (isset($_GET['view'])) {
    		if (\URLS::viewExists($_GET['view'])) {
    			$this->viewToEdit = $_GET['view'];
    			$this->viewContent = \URLS::contentsOfView($this->viewToEdit);
    		}
    	}
    }
}
