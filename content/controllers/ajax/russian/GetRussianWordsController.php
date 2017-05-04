<?php

namespace controllers\ajax\russian;
use \AjaxController;

class GetRussianWordsController extends AjaxController {

    public function doInit() {
	
	$data = '';

        if (isset($_GET["content"])) {
		
		$contentName = $_GET["content"];

		if($contentName === 'adjectives') {
			if (isset($_GET["getlinecount"])) {
				$data = '19356';
			}
			else {
				$data=\URLS::contentsOfFile('mobile_app_nouns.csv');
			}
		}
		else if($contentName === 'nouns') {
			if (isset($_GET["getlinecount"])) {
				$data = '19356';
			}
			else {
				$data=\URLS::contentsOfFile('mobile_app_nouns.csv');
			}
		}
		else if($contentName === 'verbs') {
			$data="9,0,a,b";
		}
	}
	
	return $data;
    }
}
