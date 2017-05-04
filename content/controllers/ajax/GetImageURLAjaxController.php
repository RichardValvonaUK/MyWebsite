<?php

namespace controllers\ajax;
use \AjaxController;

class GetImageURLAjaxController extends AjaxController {

    public function doInit() {
		$target_dir = "uploads/";
		
		$uploadOk = 1;
		$target_file = $target_dir . basename($_FILES["file-to-upload"]["tmp_name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		
		$check = getimagesize($_FILES["file-to-upload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
			
			$fileId = time();
			$target_file;
			
			do {
				$fileName = $fileId . ' - ' . $this->userId;
				$fileToWriteTo = $target_dir . $fileName;
				$fileId++;
			} while (file_exists($fileToWriteTo));
			
			
			move_uploaded_file($_FILES["file-to-upload"]["tmp_name"], $fileToWriteTo);
			
			//$query = 
			
			
			return TRUE;
		} else {
			echo "File is not an image.";
			return FALSE;
		}
			
		return $fileId;
    }
}
