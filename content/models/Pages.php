<?php

class Pages {
	private function __construct() { }
	
	private static $allPages = array();

	public static function addPage($view, $viewWhenLoggedIn, $viewWhenLoggedOut, $adminOnly) {
		self::$allPages[$view] = new Page($view, $viewWhenLoggedIn, $viewWhenLoggedOut, $adminOnly);
	}

	public static function pageExists($view) {
		return array_key_exists($view, self::$allPages);
	}
	public static function canViewPage($view, $loggedIn, $isAdmin) {
		return self::$allPages[$view]->canViewPage($loggedIn, $isAdmin);
	}
}

