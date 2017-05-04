<?php

namespace controllers;
use \Controller;

use \models\User;

class TripToBellinghamController extends Controller {
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
				'video-about-bellingham',
				'having-a-whale-of-a-time',
				'what-its-like',
			);
		}
		
		$this->subPageViews = array();
	
		foreach ($subPageViews as $subPage) {
			if ($subPage instanceof \Heading) {
				array_push($this->subPageViews, $subPage);
			}
			else {
				array_push($this->subPageViews, "trip-to-bellingham/$subPage");
			}
		}
	}
}
