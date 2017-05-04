<?php

namespace controllers;
use \Controller;

class PageNotFoundController extends Controller {

	protected $catchSubpages = true;
	
    public function doInit() {
        $this->title = 'Page not found';
    }
}
