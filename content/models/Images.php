<?php

class Images {
	public static function create($class, $image, $width, $height) {	
		$classHTML;
		
		if ($class === null || $class === '') {
			$classHTML = '';
		}
		else {
			$classHTML = " class=\"$class\"";
		}
		
		$widthPart = $width === null ? '' : " width=\"$width\"";
		$heightPart = $height === null ? '' : " height=\"$height\"";
		
		$img = "<img" . $classHTML . " src=\"" . \URLS::getImageCroppedURL($image, $width, $height) . "\"$widthPart$heightPart \\>";
		return $img;
	}
}
