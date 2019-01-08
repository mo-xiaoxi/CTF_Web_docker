<?php
namespace app\models;

class Bugs extends \lithium\data\Model {

	public $hasOne = ['Users' =>
		[
			'key' => '',
			'constraints' => ['Bugs.reporter_id' => 'Users.id'],
		]
	];

	public static function indexBugs() {
		$bugs = Bugs::find('all',[
			'conditions' => ['public' => true],
			'with' => 'Users',
			'page' => 1,
			'limit' => 5
		]);

		return $bugs;
	}

	public static function allBugs() {
		$bugs = Bugs::find('all',[
			'with' => 'Users',
		]);

		return $bugs;
	}
}