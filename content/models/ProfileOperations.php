<?php

class ProfileOperations extends \Model {
	
	public static function applyProfileChanges() {
		$userId_safe = \Base::$con->real_escape_string(\Session::$userId);
		
		$sqlSets = array();
		
		if (isset($_POST['main-image-file-id']) && $_POST['main-image-file-id']!=='') {
			$mainImagePending_safe = \Base::$con->real_escape_string($_POST['main-image-file-id']);
			array_push($sqlSets, "main_image_pending=\"$mainImagePending_safe\"");
		}
		if (isset($_POST['verification-image-file-id']) && $_POST['verification-image-file-id']!=='') {
			$verificationImagePending_safe = \Base::$con->real_escape_string($_POST['verification-image-file-id']);
			array_push($sqlSets, "verification_image_pending=\"$verificationImagePending_safe\"");
		}
		
		if (count($sqlSets) !== 0) {
			$query = "UPDATE users SET " . implode(',', $sqlSets) . " WHERE id=$userId_safe";
			return \Base::$con->query($query);
		}
		
		return false;
	}
}
