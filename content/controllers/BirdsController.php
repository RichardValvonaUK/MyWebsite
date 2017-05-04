<?php

namespace controllers;
use \Controller;

use \models\User;

class BirdsController extends Controller {
	protected $catchSubpages = true;

	public $subPageViews;
	public $showAll;

    public function doInit() {
	    $subPageViewsBirds;
    
	    $this->showAll = !$this->isSubpage;
    
    	if ($this->isSubpage) {
	    	$subPageViewsBirds = array();
	    	array_push($subPageViewsBirds, strtolower($this->urlRight));
    	}
    	else {
    	
			$menu = new \Menu('menu');
			$menu->addItem_a('Garden birds', '');
			$menu->indent(true);
			$menu->addItem_a('Robin', \URLS::link($this->urlLeft . '/' . 'robin'));
			$menu->addItem_a('Register', \URLS::link('/register'));
			$menu->outdent(true);
			$menu->addItem_a('Home', \URLS::link('starling'));
			$menu->addItem_a('Home', \URLS::link('woodpigeon'));
			$menu->addItem_a('Home', \URLS::link('/index'));
			$menu->addItem_a('Home', \URLS::link('/index'));
			$menu->addItem_a('Home', \URLS::link('/index'));
			$menu->addItem_a('Home', \URLS::link('/index'));
			$menu->addItem_a('Home', \URLS::link('/index'));
			$menu->addItem('Photos Shots', \URLS::link('/photos'), true, 'title', null);
			$menu->addItem_a('Teas', \URLS::link('/teas'));
			$menu->addItem_a('Coffees', \URLS::link('/coffees'));
			$menu->addItem_a('Birds', \URLS::link('/birds'));
			
			//echo $menu->generateMenu();
    	
			$subPageViewsBirds = array(
				new \Heading(null, 'Garden birds'),
				'robin',
				'starling',
				'woodpigeon',
				//'pied-wagtail',
				//new \Heading(null, 'Corvids'),
				//'carrion-crow',
				//'jackdaw',
				//'raven',
			
				new \Heading(null, 'Water birds'),
				'mute-swan',
				//'bewicks-or-whooper-swan',
				//'canada-goose',
				//'brent-goose',
				//'mallard-duck',
				//'black-headed-gull',
				'heron',
				//'cormorant',
			);
		}
		
		$this->subPageViews = array();
		
		foreach ($subPageViewsBirds as $subPage) {
			if ($subPage instanceof \Heading) {
				array_push($this->subPageViews, $subPage);
			}
			else {
				array_push($this->subPageViews, "birds/$subPage");
			}
		}
    }
}
