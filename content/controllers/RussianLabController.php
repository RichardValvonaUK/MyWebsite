<?php

namespace controllers;
use \Controller;

use \models\User;

class RussianLabController extends Controller {
	protected $catchSubpages = true;

	public $subPageViews;
	public $showAll;

	public function doInit() {
		$subPageViews;

		$this->showAll = !$this->isSubpage;
	    
	    	if ($this->isSubpage) {
		    	$subPageViews = array();
		    	array_push($subPageViews, strtolower($this->urlRight));
	    	}
	    	else {
			$subPageViews = array(
				'cardinal-numbers-with-nouns',
				'how-to-pronounce-letters',
			);
		}

		$this->subPageViews = array();

		foreach ($subPageViews as $subPage) {
			if ($subPage instanceof \Heading) {
				array_push($this->subPageViews, $subPage);
			}
			else {
				array_push($this->subPageViews, "russian-lab/$subPage");
			}
		}
	}
}
