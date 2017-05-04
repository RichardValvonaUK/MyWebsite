<?php

class ArticleWithInfo {

	public static final STATE_DRAFT = 'draft';
	public static final STATE_PUBLISHED = 'published';

	public $id;
	public $url;
	public $appearsInMenu;
	
	public $state;
	public $publishDate;
	
	private $childArticles = array();
	
	public addArticle($article) {
		array_push($this->childArticles, $article)
	}
	
	public deleteArticle($id) {

		$allChildArticles = &$this->allChildArticles;
		
		foreach ($allChildArticles as $key => &$nextToRemove) {
			
			$nextIdToRemove = intval($nextToRemove['id']);
			echo $nextIdToRemove;
			// Create ID
			if ($nextIdToRemove === $id) {
				array_splice($allChildArticles, $key, 1);
				break;
			}
		}
		
    	$this->saveNames();
	}
}

