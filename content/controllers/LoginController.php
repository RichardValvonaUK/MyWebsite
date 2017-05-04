<?php

namespace controllers;
use \Controller;

class LoginController extends Controller {

    public $attemptedLogin = false;

    public function doInit() {
        if($this->loggedIn) \URLS::redirect('/main-page');
        else if(isset($_POST['username']) && isset($_POST['password'])) {
			$attemptedLogin = true;
			if (\Session::attemptLogin()) {
				\URLS::redirect('/main-page');
			}
        }
    }
}
