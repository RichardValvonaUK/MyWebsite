<?php

namespace controllers;
use \AjaxController;
use \Controller;

class IncController extends AjaxController {

    protected $catchSubpages = true;

    public function doInit() {
		$file = BASE_DIR_CONTENT . '/include/' . $this->urlRight;
                echo file_get_contents($file);
		return null;
    }
}
