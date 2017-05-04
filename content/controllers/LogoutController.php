<?php
    
namespace controllers;
use \Controller;

class LogoutController extends Controller {

    public function doInit() {
        \Session::attemptLogout();
        // Redirect to index page
        \URLS::redirect('/login');
    }
}
