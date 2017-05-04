<?php

namespace controllers\ajax;

use \models\ImageOperations;

use \AjaxController;

class UploadImageAjaxController extends AjaxController {

    public function doInit() {
		
		if (!$this->loggedIn) return false;
		
		$html1 = "<html><head></head><body onload='parent.doneLoading(";
		$html2 = ")'></body></html>";
		
		
		$fileName = ImageOperations::saveImageToDisk($_FILES["file-to-upload"]);
		
		if($fileName !== false) {
			if (ImageOperations::addImageToDatabase($fileName)) {
				$tagHTML = "null";
				if (isset($_POST['file-to-upload-tag'])) {
					$tagHTML = "\"" . addslashes($_POST['file-to-upload-tag']) . "\"";
				}
				
				return $html1 . "\"" . addslashes($fileName) . "\"" . ',' . $tagHTML . $html2;
			}
		}
		
		return false;
    }
}
