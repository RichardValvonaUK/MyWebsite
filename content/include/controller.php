<?php

use \User;

abstract class Controller extends Config {
    
    public $title = '';
    
    public $cNameSpace = ''; public $cClass = ''; public $controllerNameRaw = '';

    public $pageNotFound = false;

    protected $customBodyAttributes = ''; public $customHeaderCode = '';
    
    public $androidMode = false;
    
    public $viewName = null;
    
    protected $redirectController = null;
    
    public $isEditingAllowed = false;
    public $isInEditMode = true;
    public $confirmForLinks = false;
    public $isAdmin = false;
    public $loggedIn = false;
    public $userId = null;
    public $userName = null;
    
    public $isSubpage = false;
    
    public $loggedInUser = null;

    public $url;
    public $urlLeft;
    public $urlRight;
    public $urlSplit;
    public $urlSplitLeft;
    public $urlSplitRight;

    public $metaThemeColour = '#e07000';

    public $backgroundColour = '#ffffff';

    protected $catchSubpages = false;
    
    public function __construct() {
        if (isset($_GET['android_mode'])) {
	    $this->androidMode = true;
	}
    }
    
    public function getRedirectController() {
    	return $this->redirectController;
   	}
    
    public function getCustomBodyAttributes() {
        return $this->customBodyAttributes === '' ? $this->customBodyAttributes : (' ' . $this->customBodyAttributes);
    }
    
    public function getLink() {
		return \URLS::link('/' . $this->controllerNameRaw);
	}
	
	public function addCustomCodeToHeader($code) {
		$this->customHeaderCode .= $code;
	}
    
    public abstract function doInit();
    
    public function doCommonInit() {
		if (User::getLoggedIn()) {
			$user = User::getLoggedInUser();
			
			$this->isAdmin = $user->isAdmin;
			$this->loggedIn = true;
			$this->userId = $user->id;
			$this->userName = $user->userName;
			
			$this->loggedInUser = $user;
		}
		
		
		$this->isEditingAllowed = \Base::$editingAllowed;
	}
	
	public function canCatchSubpages() {
		return $this->catchSubpages;
	}
}
