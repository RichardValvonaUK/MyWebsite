<?php

namespace ajax;
use \AjaxController;

class AddScoreAjaxController extends AjaxController {

    public function doInit() {
        
        if (!isset($_POST['dataString'])) return false;
        
		$variable = $_POST['dataString']."\n";

		$myFile = "scores.txt";
		$fh = fopen($myFile, 'a') or return false;
		fwrite($fh, $variable);
		fclose($fh);
		
		return true;
    }
}
