<?php
namespace app\controllers;
use app\models\News;
use app\models\Users;
use app\models\Bugs;
use lithium\storage\Session;

class PagesController extends \lithium\action\Controller {

	public function index() {
		$indexNews = News::indexNews();
		$indexRanks = Users::indexRanks();
		$bugs = Bugs::indexBugs();
		$articles = News::find('all', [
			'limit' => 5,
			'conditions' => ['index' => 0]
		]);
		return compact('bugs', 'indexNews', 'indexRanks', 'articles');
	}

	public function news($id = NULL) {
		if($id === NULL) {
			$articles = News::find('all');
			$multi = true;
			return compact('articles', 'multi');
		} else {
			$news = News::find('first', [
				'conditions' => ['id' => $id]
			]);
			$multi = false;
			return compact('news', 'multi');
		}
	}

	public function bugs($id = NULL) {
		if($id === NULL) {
			$bugs = Bugs::find('all', [
				'conditions' => ['public' => 1]
			]);
			$multi = true;
			return compact('bugs', 'multi');
		} else {
			$bug = Bugs::find('first', [
				'conditions' => ['id' => $id, 'public' => 1]
			]);
			$multi = false;
			return compact('bug', 'multi');
		}
	}

	public function ranks() {
		$page = $this->request->query['page']?:1;
		$users = Users::find('all', [
			'conditions' => ['score' => [
				'>' => 0
			]],
			'page' => $page,
			'order' => ['score' => 'DESC'],
			'limit' => 10
		]);
		return compact('users', 'page');
	}

	public function reportBug() {
		if (!Session::check('isLogin') || Session::read('isLogin') !== 1) {
			return $this->redirect('/users/login');
		}

		if ($this->request->data) {
			$bug = Bugs::create();
			$bug->reporter_id = Users::findByUsername(Session::read('username'))->id;
			$this->request->data['content'] = base64_encode($this->request->data['content']);
			$bug->save($this->request->data);
			$success = true;
			return compact('success');
		}

	}
}

?>