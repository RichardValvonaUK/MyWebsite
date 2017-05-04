<?php

class ImageOperations extends \Model {
    
    public static function saveImageToDisk($image) {
		
		$target_dir = "uploads/";
		
		$target_file = $target_dir . basename($image["tmp_name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		
		$check = getimagesize($image["tmp_name"]);
		
		if($check !== false) {
			$fileId = time();
			$fileToWriteTo;
			$target_file;
			$fileName;
			
			do {
				$fileName = $fileId . '-' . \Session::$userId;
				$fileToWriteTo = $target_dir . $fileName;
				$fileId++;
			} while (file_exists($fileToWriteTo));
			
			move_uploaded_file($image["tmp_name"], $fileToWriteTo);
			
			return $fileName;
		}
		
		return false;
	}
	
	public static function addImageToDatabase($fileName) {		
		$fileName_safe = \Base::$con->real_escape_string($fileName);
		$userId_safe = \Base::$con->real_escape_string(\Session::$userId);
		
		$query = "INSERT INTO uploaded_images (file, user_id, timestamp)"
			. " VALUES (\"$fileName_safe\", $userId_safe, $fileName_safe)";
			
		return \Base::$con->query($query);
	}
    
}
