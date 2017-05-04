<?php

class URLS {
	private function __construct() { }

	private static $usingPrettyURLS = true;

	public static $controllerNameSpaceLink = '';

	private static $controller = null;

	public static $controllerURL;
	public static $controllerName;
	
	public static function setController($controller) {
		self::$controller = $controller;
	}
	
	public static function getController() {
		return self::$controller;
	}

	public static function getView($view) {
		return BASE_DIR_CONTENT . "/views/$view" . '.php';
	}
	
	
	public static function controllerNameToView($controllerName) {
		$controllerNameSplit = explode("/", $controllerName);
		$lastIndex = count($controllerNameSplit) - 1;
		
		$controllerNameSplit[$lastIndex] = self::convertToLowerCasedDashed($controllerNameSplit[$lastIndex]);
		
		return implode('/', $controllerNameSplit);
	}
	
	public static function toCamelCase($word, $firstLetterUpper) {
		$splitDash = explode("-", $word);
		
		$count = count($splitDash);
		
		$newWord = $firstLetterUpper ? ucfirst($splitDash[0]) : $splitDash[0];
		for ($i=1; $i<$count; $i++) {
			$newWord .= ucfirst($splitDash[$i]);
		}
		
		return $newWord;
	}
	
	public static function removeDashes($word) {
		$splitDash = explode("-", $word);
		
		$count = count($splitDash);
		
		$newWord = $splitDash[0];
		for ($i=1; $i<$count; $i++) {
			$newWord .= $splitDash[$i];
		}
		
		return $newWord;
	}
	
	public static function convertToCamel($controllerNameDashed, $controllerClassUpper) {
		$controllerNameSplit = explode("/", $controllerNameDashed);
		
		$numberOfNameSpace = count($controllerNameSplit) - 1;
		
		$controllerNameCamel = '';
		
		$newName = '';
		
		for ($i=0; $i<$numberOfNameSpace; $i++) {
			$newName .= self::toCamelCase($controllerNameSplit[$i], false);
			$newName .= '/';
		}
		
		$newName .= self::toCamelCase($controllerNameSplit[$numberOfNameSpace], $controllerClassUpper);
		
		return $newName;
	}
	
	public static function spacesInCamelCase($view) {
		$viewAsChars = str_split($view);
		$words = '';
		
		$charLength = count($viewAsChars);
		
		for ($i=0; $i<$charLength; $i++) {
			$currentChar = $viewAsChars[$i];
			
			if (ctype_upper($currentChar) && ($i>0)) {
				$words .= ' ';
			}
			
			$words .= $currentChar;
		}
		
		return $words;
	}
	
	
	public static function convertToLowerCasedDashed($view) {
		$viewAsChars = str_split($view);
		$asLowerCaseDashed = '';
		
		$charLength = count($viewAsChars);
		
		for ($i=0; $i<$charLength; $i++) {
			$currentChar = $viewAsChars[$i];
			
			if (ctype_upper($currentChar) && ($i>0)) {
				$asLowerCaseDashed .= '-';
			}
			
			$asLowerCaseDashed .= strtolower($currentChar);
		}
		
		return $asLowerCaseDashed;
	}
	
	public static function jsLink($title, $jsCode, $class) {
		return self::aLink($title, $jsCode, $class, 'js-code', null);
	}

	public static function localLinkNewWindow($title, $controllerName, $class) {
		$link = self::link($controllerName);
		return self::aLink($title, $link, $class, 'blank', null);	
	}

	public static function localLink($title, $controllerName, $class) {
		$link = self::link($controllerName);
		return self::aLink($title, $link, $class, 'same-window', null);
	}

	public static function localLinkE($title, $controllerName, $class, $extraAtts) {
		$link = self::link($controllerName);
		return self::aLink($title, $link, $class, 'same-window', $extraAtts);
	}

	public static function absLink($title, $link, $class) {
		return self::aLink($title, $link, $class, 'blank', null);
	}
	
	public static function aLink($title, $link, $class, $blank, $extraAtts) {
		
		if ($extraAtts === null) {
			$extraAtts = '';
		}
		else {
			$extraAtts = ' ' . $extraAtts;
		}
		
		$classHTML;
		
		if ($class === null || $class === '') {
			$classHTML = '';
		}
		else {
			$classHTML = " class=\"$class\"";
		}
		
		if ($title === null) {
			$title = $link;
		}
		
		$html;
		
		if ($blank === 'blank') {
			$html = "<a href=\"$link\"$classHTML target=\"_blank\">$title</a>";
		}
		else if ($blank === 'same-window') {
			if (self::$controller->confirmForLinks) {
				$html = "<a href=\"javascript:void(0);\" onclick=\"selectMenuItem(this, '$link')\"$classHTML$extraAtts>$title</a>";
			}
			else {
				$html = "<a href=\"$link\"$classHTML$extraAtts>$title</a>";
			}
		}
		else if ($blank === 'js-code') {
			$html = "<a href=\"javascript:void(0);\" $link$classHTML$extraAtts>$title</a>";
		}
			
		return $html;
	}

	public static function link($controllerName) {
		if (strpos($controllerName, '/') !== 0) {
			$controllerName = str_replace("\\","/",self::$controllerNameSpaceLink) . $controllerName;
		}
		
		// Converting to a lower-case dashed URL.
		$controllerName = self::convertToLowerCasedDashed($controllerName);
		
		if (self::$usingPrettyURLS) {
			return BASE_URL . $controllerName;
		}
		
		return BASE_URL . '/index.php?controller=' . $controllerName;
	}


	public static function getImageURL($image) {
		return BASE_URL_CONTENT . "/images/" . $image;
	}
	public static function getImageCroppedURL($image, $width, $height) {
		$widthPart = $width === null ? '' : "&width=$width";
		$heightPart = $height === null ? '' : "&height=$height";
	
		return BASE_URL . "/ajax/display-cropped-image-ajax?file=" . urlencode($image) . $widthPart . $heightPart;
	}
	
	public static function getCSSURL($view) {
		return BASE_URL_CONTENT . "/views/" . $view . '.css';
	}

	public static function getJSURL($view) {
		return BASE_URL_CONTENT . "/views/" . $view . '.js';
	}
	
	public static function getCSSURLLocal($view) {
		return BASE_DIR_CONTENT . "/views/" . $view . '.css';
	}

	public static function getJSURLLocal($view) {
		return BASE_DIR_CONTENT . "/views/" . $view . '.js';
	}
	
	public static function getImageURLLocal($image) {
		return BASE_DIR_CONTENT . "/images/" . $image;
	}
	
	public static function getViewURL($view) {
		return BASE_DIR_CONTENT . "/views/" . $view . '.php';
	}
	
	public static function getControllerURL($controllerName) {
		return BASE_DIR_CONTENT . "/controllers/$controllerName" . 'Controller.php';
	}

	public static function getURLNameSpace($urlArray) {
		
		$arrayLength = count($urlArray);
		
		if ($arrayLength <= 1) {
			return '\\';
		}
		
		$nameSpace = '';
		
		for ($i=0; $i<$arrayLength-1; $i++) {
			$nameSpace .= '\\';
			$nameSpace .= $urlArray[$i];
		}
		
		return $nameSpace . '\\';
	}
	
	public static function getURLNameSpaceFull($urlArray) {
		return '\\controllers' . self::getURLNameSpace($urlArray);
	}
	
	public static function getURLClass($urlArray) {
		return $urlArray[count($urlArray) - 1];
	}

	public static function includeJQueryFiles() {
		$allJQueryFiles = scandir(BASE_DIR_CONTENT . '/include/jquery');
		
		foreach ($allJQueryFiles as $file) {
			if ($file === '.' || $file === '..') continue;
			echo "<script src=\"" . BASE_URL . "/inc/jquery/" . "$file\"></script>\n";
		}
	}
	
	public static function includeMainJSFiles() {
		$allJQueryFiles = scandir(BASE_DIR_CONTENT . '/include/js');
		
		foreach ($allJQueryFiles as $file) {
			if ($file === '.' || $file === '..' || substr($file, -1) === '~') continue;
			echo "<script src=\"" . BASE_URL . "/inc/js/" . "$file\"></script>\n";
		}
	}

	public static function includeMainCSSFiles() {
		$allFiles = scandir(BASE_DIR_CONTENT . '/include/css');

		foreach ($allFiles as $file) {
			if ($file === '.' || $file === '..' || substr($file, -1) === '~') continue;
			echo "<link href=\"" . BASE_URL . "/inc/css/$file\" rel=\"stylesheet\" type=\"text/css\" />\n";
		}
	}
	
	public static function redirect($page) {
		header("Location: " . self::link($page)); exit;
	}
	
	
	
	public static function contentsOfFile($fileName) {
		return file_get_contents(self::getFileURLLocal($fileName));
	}
	
	public static function saveContentsToFile($fileName, $content) {
		return file_put_contents(self::getFileURLLocal($fileName), $content);
	}
	
	
	public static function contentsOfView($fileName) {
		return $bodytag = str_replace("\t", "    ", file_get_contents(self::getViewURL($fileName)));
	}
	
	public static function saveContentsToView($fileName, $content) {
		return file_put_contents(self::getViewURL($fileName), $content);
	}
	
	public static function viewExists($fileName) {
		return file_exists(self::getViewURL($fileName));
	}
	
	
	public static function contentsOfController($fileName) {
		return file_get_contents(self::getControllerURL($fileName));
	}
	
	public static function saveContentsToController($fileName, $content) {
		return file_put_contents(self::getControllerURL($fileName), $content);
	}

	public static function getFileURLLocal($fileName) {
		return BASE_DIR_CONTENT . "/files/" . $fileName;
	}
}
