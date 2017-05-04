<?php

namespace controllers\ajax;
use \AjaxController;
use \Controller;

const IMAGE_TYPE_UNKNOWN = 0;
const IMAGE_TYPE_GIF = 1;
const IMAGE_TYPE_JPEG = 2;
const IMAGE_TYPE_PNG = 3;
const IMAGE_TYPE_SWF = 4;
const IMAGE_TYPE_PSD = 5;
const IMAGE_TYPE_BMP = 6;
const IMAGE_TYPE_TIFF_II = 7;
const IMAGE_TYPE_TIFF_MM = 8;
const IMAGE_TYPE_JPC = 9;
const IMAGE_TYPE_JP2 = 10;
const IMAGE_TYPE_JPX = 11;
const IMAGE_TYPE_JB2 = 12;
const IMAGE_TYPE_SWC = 13;
const IMAGE_TYPE_IFF = 14;
const IMAGE_TYPE_WBMP = 15;
const IMAGE_TYPE_XBM = 16;
const IMAGE_TYPE_ICO = 17;
const IMAGE_TYPE_COUNT = 18;
    
class DisplayCroppedImageAjaxController extends AjaxController {

    public function doInit() {
    
		if (!isset($_GET['file'])) {
			return false;
		}

		$file = $_GET['file'];
		$width_new = (isset($_GET['width']) ? $_GET['width'] : null);
		$height_new = (isset($_GET['height']) ? $_GET['height'] : null);
		
		$file = \URLS::getImageURLLocal($file);
		list($width, $height, $type, $attr) = getimagesize($file);

		$image;

		// Switches content-type and calls the imagecreatefrom... function
		if ($type === IMAGE_TYPE_GIF) {
		    header ('Content-Type: image/gif');
		    $image = imagecreatefromgif($file);
		}
		elseif ($type === IMAGE_TYPE_JPEG) {
		    header ('Content-Type: image/jpeg');
		    $image = imagecreatefromjpeg($file);
		}
		elseif ($type === IMAGE_TYPE_PNG) {
		    header ('Content-Type: image/png');
		    $image = imagecreatefrompng($file);
		}
		else {
		    header ('Content-Type: image/x-ms-bmp');
		    $image = imagecreatefromwbmp($file);
		}

		if ( ($width_new === null || $width_new === $width) && ($height_new === null || $height_new === $height) ) {
			imagejpeg($image);
		}
		else {
			if ($width_new === null) {
				$width_new = $height_new * $width / $height;
			}
			else if ($height_new === null) {
				$height_new = $width_new * $height / $width;
			}
		
			$ratio = $height / $width;
			$ratio_new = $height_new / $width_new;

			$width_scale = $width_new;
			$height_scale = $height_new;
		
			$width_offset = 0;
			$height_offset = 0;
		
			// If the original image is relatively taller than the new one then chop off top and bottom
			if ($ratio === $ratio_new) {
				// Make no adjustments
			}
			else if ($ratio > $ratio_new) {
			 $height_scale = $height / $width * $width_new;
			 $height_offset = ($height_new - $height_scale) / 2;
			}
			// Otherwise, chop off left and right
			else {
			 $width_scale = $width / $height * $height_new;
			 $width_offset = ($width_new - $width_scale) / 2;
			}
		
			$dst = imagecreatetruecolor($width_new, $height_new);
		 	imagecopyresized($dst, $image, $width_offset,$height_offset, 0, 0, $width_scale, $height_scale, $width, $height);
			imagejpeg($dst);	
		}
		
		return null;
    }
}
