<?php

class Colours {

	public static function isHexColour($colour) {
		$len = strlen($colour);
		
		if ($len === 4 || $len === 7) {
			if (substr($colour, 0, 1) === '#') {
				return true;
			}
		}
		
		return false;
	}

	/**
		Gets the brightness of a hex colour as a value from 0 (darkest) to 255 (lightest).
	*/
	public static function brightness($colour) {
		if (self::isHexColour($colour)) {
			$len = strlen($colour);
		
			$r; $g; $b;
		
			if ($len === 4) {
				$r = str_repeat(substr($colour,1,1), 2);
				$g = str_repeat(substr($colour,2,1), 2);
				$b = str_repeat(substr($colour,3,1), 2);
				
				$r = hexdec($r); $g = hexdec($g); $b = hexdec($b);
			}
			else if ($len === 7) {
				$r = hexdec(substr($colour,1,2));
				$g = hexdec(substr($colour,3,2));
				$b = hexdec(substr($colour,5,2));
			}
			else {
				return 0;
			}
			
			$brightness = (int) (($r + $g + $b) / 3);
			return $brightness;
		}
		else {
			return 0;
		}
	}
}
