<?php
namespace app\models;

class Posts extends \lithium\data\Model {

	public static function get_post($id) {
		$post = Posts::find('first', [
			'conditions' => ['id' => $id]
		]);
		return $post;
	}
}