<?php
namespace app\models;

use lithium\util\Validator;

class Users extends \lithium\data\Model {

	public $validates = [
		'username' => [
			[
				'notEmpty',
				'required' => true,
				'message' => '请输入用户名'
			],

			[
				'userExists',
				'message' => '用户名已被注册'
			]
		],
		'password' => [
			[
				'notEmpty',
				'required' => true,
				'message' => '请输入密码'
			]
		]
	];

	public static function login_check($username, $password) {
		$user = Users::find('first', [
			'conditions' => [
				'username' => $username,
				'password' => $password
			]
		]);

		return $user;
	}

	public static function indexRanks() {
		$ranks = Users::find('all', [
			'conditions' => ['score' => [
				'>' => 0
			]],
			'order' => ['score' => 'DESC'],
			'limit' => 3
		])->data();

		return $ranks;
	}
}

Validator::add('userExists', function($value) {
	return (boolean) Users::findByUsername($value) === true ? false : true;
});