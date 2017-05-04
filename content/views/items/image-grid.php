<?php


class ImageGrid {
	
	public function __construct($gridClass) {
		$this->gridClass = $gridClass;
		$this->addItem("", "", true, null, null);
	}
	
	private $gridClass;
	private $items = array();
	
	public function addItem($title, $link, $canDrawItem, $classNames, $extraAtt) {
		if ($canDrawItem) {
			array_push($this->items, array($title, $link, $classNames, $extraAtt));
		}
	}
	
	public function generate() {
		
		$numberOfItems = count($this->items);
		
		$itemsToReturn;
		
		if ($this->gridClass === null || $this->gridClass === '') {
			$itemsToReturn = "<span>";
		}
		else {
			$itemsToReturn = "<span class=\"" . $this->gridClass . "\">";
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
			$itemsToReturn .= "<img src=\"http://i618.photobucket.com/albums/tt265/robinn_jatt/DSC00923.jpg\" width=\"200px\" \\>";
			$itemsToReturn .= "</div>";
		}
		
		$itemsToReturn .= "</ul>";
		
		return $itemsToReturn;
	}
}
