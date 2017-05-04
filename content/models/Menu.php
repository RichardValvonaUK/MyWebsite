<?php

class Menu {
	
	public function __construct($menuClass) {
		$this->menuClass = $menuClass;
		$this->addItem("", "", true, null, null);
		$this->indent(true);
	}
	
	private $menuClass;
	
	private $items = array();
	private $indentLevel = -1;
	
	public function addItem_a($title, $link) {
		$this->addItem($title, $link, true, null, null, 'a');
	}
	
	public function addItem($title, $link, $canDrawItem, $classNames, $extraAtt) {
		if ($canDrawItem) {
			array_push($this->items, array($this->indentLevel, $title, $link, $classNames, $extraAtt, 'a'));
		}
	}
	
	public function addButton($title, $canDrawItem, $classNames, $extraAtt) {
		if ($canDrawItem) {
			array_push($this->items, array($this->indentLevel, $title, null, $classNames, $extraAtt, 'button'));
		}
	}
	
	public function addGap($canDrawItem) {
		if ($canDrawItem) {
			array_push($this->items, array($this->indentLevel, null, null, 'menu-gap', null, 'span'));
		}
	}
	
	public function indent($indent) {
		if ($indent) {
			$this->indentLevel++;
		}
	}
	
	public function outdent($outdent) {
		if ($outdent) {
			$this->indentLevel--;
		}
	}
	
	public function generateMenu() {
		
		$numberOfItems = count($this->items);
		
		$this->outdent(true);
		$this->addItem("", "", true, null, null);
		
		$menuToReturn;
		
		if ($this->menuClass === null || $this->menuClass === '') {
			$menuToReturn = "<ul>";
		}
		else {
			$menuToReturn = "<ul class=\"" . $this->menuClass . "\">";
		}
		
		for ($i=1; $i<$numberOfItems; $i++) {
			
			$lastItem = $this->items[$i-1];
			$item = $this->items[$i];
			$nextItem = $this->items[$i+1];
						
			$title = $item[1]; $link = $item[2]; $classes = $item[3]; $extraAtt = $item[4];
			$elementType = $item[5];
			
			if ($classes === null) $classes = '';
			
			$selected = URLS::getController()->getLink() === $link ? ' selected' : '';
			
			$classes .= $selected; $classes = trim($classes);
			if ($classes !== '') $classes = "class=\"" . $classes . "\"";
			
			// Extra attribute adjustment
			if ($extraAtt == null || $extraAtt == '') $extraAtt = '';
			else $extraAtt = ' ' . $extraAtt;
			
			// If first item after submenu
			if ($item[0] < $lastItem[0]) {
				$diff = $lastItem[0] - $item[0];
				for ($diffIndex=0; $diffIndex<$diff; $diffIndex++) {
					$menuToReturn .= "</ul></li>";
				}
			}
			
			$href = $link === null || $elementType === 'button' ? '' : " href=\"$link\"";
			
			$menuItem = $elementType === 'span' ? '' : 'menu-item';
			
			if ($elementType === 'button') {
				$elementType = 'span';
			}
			
			// If this item contains a submenu
			if ($item[0] < $nextItem[0]) {
				$diff = $nextItem[0] - $item[0];
				for ($diffIndex=0; $diffIndex<$diff; $diffIndex++) {
					$menuToReturn .= "<li $classes>";
					if ($elementType === 'a') {
						if ($link === null || trim($link) === '') {
							$menuToReturn .= \URLS::jsLink($title, $link, "$menuItem with-sub-left");
						}
						else {
							$menuToReturn .= \URLS::localLinkE($title, $link, "$menuItem with-sub-left", $extraAtt);
						}
					}
					else {
						$menuToReturn .= "<$elementType$href class=\"$menuItem with-sub-left\" $extraAtt>$title</$elementType>";
					}
					$menuToReturn .= "<ul>";
				}
			}
			else {
				$menuToReturn .= "<li $classes>";
				if ($elementType === 'a') {
					if ($link === null || trim($link) === '') {
						$menuToReturn .= \URLS::jsLink($title, $link, $menuItem);
					}
					else {
						$menuToReturn .= \URLS::localLinkE($title, $link, $menuItem, $extraAtt);
					}
				}
				else {
					$menuToReturn .= "<$elementType$href class=\"$menuItem\" $extraAtt>$title</$elementType>";
				}
				$menuToReturn .= "</li>";
			}
		}
		
		$menuToReturn .= "</ul>";
		
		return $menuToReturn;
	}
}
