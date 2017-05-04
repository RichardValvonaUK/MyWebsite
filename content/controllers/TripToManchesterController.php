<?php

namespace controllers;
use \Controller;

use \models\User;

class TripToManchesterController extends Controller {
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
				'street-food',
				'salford-to-manchester-canal-walk',
			);
		}
		
		$this->subPageViews = array();
		
		foreach ($subPageViews as $subPage) {
			if ($subPage instanceof \Heading) {
				array_push($this->subPageViews, $subPage);
			}
			else {
				array_push($this->subPageViews, "trip-to-manchester/$subPage");
			}
		}
    }
}
