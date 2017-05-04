<?php

class PageWithInfo {
	public $id;
	public $url;
	public $hidden;
	public $publishDate;
	
	public $children = array();
	
	public function __construct($id, $url, $hidden, $publishDate) {
		$this->id = $id;
		$this->url = $url;
		$this->hidden = $hidden;
		$this->publishDate = $publishDate;
	}
	
	public function addChild($child) {
		array_push($this->children, $child);
	}
	
	
	public function locateDescendantById($id) {
		
	}
	
	public function convertChildrenToArray() {
		$arr = array();
		
		foreach ($this->children as $child) {
			array_push($arr, $child->convertToArray());
		}
		
		return $arr;
	}
	
	public function convertToArray() {
		$arr = array();
		
		array_push(
			$arr,
			array(
				'id' => $this->id,
				'url' => $this->url,
				'publishDate' => $this->publishDate,
				'hidden' => $this->hidden,
				'isRoot' => $this->isRoot,
				'children' => $this->convertChildrenToArray(),
			)
		);
		
		return $arr;
	}
	
	public static function createFromArray($arr) {
	
		$newItem = new PageWithInfo(
			$arr['id'],
			$arr['url'],
			$arr['publishDate'],
			$arr['hidden'],
			$arr['isRoot']
		);
		
		$children = $arr['children'];
	
		foreach ($children as $child) {
			$newItem->addChild(self::createFromArray($child));
		}
		
		return $newItem;
	}
}

