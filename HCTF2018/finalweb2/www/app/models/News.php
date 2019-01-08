<?php
namespace app\models;

class News extends \lithium\data\Model {

	public static function indexNews() {
		$news = News::find('all',[
			'conditions' => ['index' => true]
		]);

		return $news;
	}
}