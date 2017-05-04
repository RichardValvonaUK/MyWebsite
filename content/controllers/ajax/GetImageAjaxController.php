<?php

namespace controllers\ajax;
use \AjaxController;

class GetImageAjaxController extends AjaxController {

    public function doInit() {
		//echo $_GET['file_id']; return;
		if (isset($_GET['file_id'])) {
			$fileURL = BASE_DIR . '/uploads/' . $_GET['file_id'];
			
			if (file_exists($fileURL)) {
				header("Content-Type: image/jpg");
				readfile($fileURL);
			}
		}
		return null;
    }
}
