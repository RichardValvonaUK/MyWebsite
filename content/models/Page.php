<?php

class Page {

	private $view, $viewWhenLoggedIn, $viewWhenLoggedOut;

	
	public function __construct($view, $viewWhenLoggedIn, $viewWhenLoggedOut, $adminOnly) {
		$this->page = $view;
		$this->viewWhenLoggedIn = $viewWhenLoggedIn;
		$this->viewWhenLoggedOut = $viewWhenLoggedOut;
		$this->adminOnly = $adminOnly;
	}

	public function getPage() { return $this->page; }

	public function canViewPage($loggedIn, $isAdmin) {
		if ($this->adminOnly) {
			return ( $isAdmin &&
				(($loggedIn && $this->viewWhenLoggedIn)
				|| (!$loggedIn && $this->viewWhenLoggedOut))
			);
		}
		
		return ( ($loggedIn && $this->viewWhenLoggedIn)
		  || (!$loggedIn && $this->viewWhenLoggedOut)
		);
	}
}
