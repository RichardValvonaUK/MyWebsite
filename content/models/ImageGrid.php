<?php

class ImageGrid {
	
	public function __construct($gridClass, $width, $height) {
		$this->gridClass = $gridClass;
		$this->width = $width;
		$this->height = $height;
	}
	
	private $gridClass;
	
	private $items = array();
	
	private $width;
	private $height;
	
	public function getImageCroppedURL($image) {
		return \URLS::getImageCroppedURL($image, $this->width, $this->height);
	}
	
	public function addItem($title, $link, $canDrawItem, $classNames, $extraAtt) {
		if ($canDrawItem) {
			array_push($this->items, array($title, $link, $classNames, $extraAtt));
		}
	}
	
	public function generate() {
		
		$numberOfItems = count($this->items);
		
		$itemsToReturn;
		
		if ($this->gridClass === null || $this->gridClass === '') {
			$itemsToReturn = "<div>";
		}
		else {
			$itemsToReturn = "<div class=\"" . $this->gridClass . "\">";
		}
		
		for ($i=0; $i<$numberOfItems; $i++) {
			$item = $this->items[$i];
						
			$title = $item[0]; $link = $item[1]; $classes = $item[2]; $extraAtt = $item[3];
			
			if ($classes === null) $classes = '';
			
			$classes = trim($classes);
			if ($classes !== '') $classes = "class=\"" . $classes . "\"";
			
			// Extra attribute adjustment
			if ($extraAtt == null || $extraAtt == '') $extraAtt = '';
			else $extraAtt = ' ' . $extraAtt;
			
			// Appending the HTML output
			$itemsToReturn .= "<div class=\"image-wrapper\">";
			$itemsToReturn .= "<img src=\"$link\"";
			if ($this->width != null) {
				$itemsToReturn .= " width=\"";
				$itemsToReturn .= $this->width;
				$itemsToReturn .= "px\"";
			}
			if ($this->height != null) {
				$itemsToReturn .= " height=\"";
				$itemsToReturn .= $this->height;
				$itemsToReturn .= "px\"";
			}
			$itemsToReturn .= "\\>";
			
			if ($title != null) {
				$itemsToReturn .= "<p>";
				$itemsToReturn .= $title;
				$itemsToReturn .= "</p>";
			}
			$itemsToReturn .= "</div>";
		}
		
		$itemsToReturn .= "</div>";
		
		return $itemsToReturn;
	}
}
