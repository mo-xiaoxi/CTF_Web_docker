<?php
namespace app\controllers;
use app\models\Flags;

class CheckController extends \lithium\action\Controller {
	public function index() {
		$this->_render['type'] = 'json';
		$flag1 = file_get_contents('/flag');
		$flag2 = Flags::find('first')->data();
		$result = ['flag1'=>hash('sha256', $flag1), 'flag2'=>hash('sha256', $flag2['flag'])];
		return $result;
	}
}