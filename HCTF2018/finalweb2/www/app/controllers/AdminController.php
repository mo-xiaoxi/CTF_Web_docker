<?php
namespace app\controllers;

use lithium\storage\Session;
use app\models\Users;
use app\models\News;
use app\models\Bugs;

class AdminController extends \lithium\action\Controller {

	public function login() {
		if (Session::check('isAdmin') || Session::read('isAdmin') === true) {
			return $this->redirect('Admin::index');
		}


		if ($this->request->data) {
			$errors = [];
			$user = Users::login_check($this->request->data['username'], $this->request->data['password']);
			if((boolean)$user === true) {
				if((boolean)$user->is_admin === true) {
					Session::write('isAdmin', true);
				} else {
					$errors = [['没有权限']];
				}
			} else {
				$errors = [['用户名或密码错误']];
			}
			if (!empty($errors)) {
				return compact('errors');
			}
			return $this->redirect('/admin');
		}
	}

	public function index() {
		if (!Session::check('isAdmin') || Session::read('isAdmin') !== true) {
			return $this->redirect('Admin::login');
		}

		$usersCount = Users::find('count', [
			'conditions' => ['is_admin'=>
				['!=' => true]
			]
		]);

		$bugsCount = Bugs::find('count');
		$highRiskCount = Bugs::find('count',[
			'conditions' => ['risk' => 3]
		]);
		$midRiskCount = Bugs::find('count',[
			'conditions' => ['risk' => 2]
		]);
		$lowRiskCount = Bugs::find('count',[
			'conditions' => ['risk' => 1]
		]);
		$publicCount = Bugs::find('count',[
			'conditions' => ['public' => true]
		]);

		$newsCount = News::find('count');

		return compact('usersCount','bugsCount', 'highRiskCount',
			'midRiskCount', 'lowRiskCount', 'publicCount', 'newsCount');

	}

	public function users() {
		if (!Session::check('isAdmin') || Session::read('isAdmin') !== true) {
			return $this->redirect('Admin::login');
		}

		$users = Users::find('all');

		return compact('users');
	}

	public function userInfo($id = NULL) {
		if (!Session::check('isAdmin') || Session::read('isAdmin') !== true) {
			return $this->redirect('Admin::login');
		}

		if($id === NULL) {
			return $this->redirect('Admin::users');
		}

		$user = Users::findById($id);
		$image = base64_encode(file_get_contents($user->avatar));
		$src = 'data: '.mime_content_type($user->avatar).';base64,'.$image;

		return compact('user', 'src');
	}

	public function createNews() {
		if (!Session::check('isAdmin') || Session::read('isAdmin') !== true) {
			return $this->redirect('Admin::login');
		}

		if ($this->request->data) {
			$news = News::create();
			$news->author_id = Users::findByUsername(Session::read('username'))->id;
			$this->request->data['content'] = base64_encode($this->request->data['content']);
			$news->save($this->request->data);
			$success = true;
			return compact('success');
		}
	}

	public function bugs() {
		if (!Session::check('isAdmin') || Session::read('isAdmin') !== true) {
			return $this->redirect('Admin::login');
		}

		$bugs = Bugs::allBugs();

		return compact('bugs');
	}

	public function news() {
		if (!Session::check('isAdmin') || Session::read('isAdmin') !== true) {
			return $this->redirect('Admin::login');
		}

		$articles = News::find('all');

		return compact('articles');
	}

	public function buginfo($id = NULL) {
		if (!Session::check('isAdmin') || Session::read('isAdmin') !== true) {
			return $this->redirect('Admin::login');
		}

		if ($id === NULL) {
			return $this->redirect('Admin::users');
		}

		$bug = Bugs::findById($id);
		$func = $this->request->query['func']?:NULL;
		if ($func === 'accept') {
			if ($this->request->data) {
				$oldScore = Users::findById($bug->reporter_id)->score;
				Users::update(['score' => $oldScore+$this->request->data['score']], ['id' => $bug->reporter_id]);
				Bugs::update(['risk' => $this->request->data['risk']], ['id' => $bug->id]);
			}
			Bugs::update(['accept' => true], ['id' => $bug->id]);
			return $this->redirect('Admin::bugs');
		} elseif ($func === 'public') {

			Bugs::update(['public' => true], ['id' => $bug->id]);
			return $this->redirect('Admin::bugs');
		} elseif ($func === 'del') {
			$bug->delete();
		}

		return compact('bug');
	}

	public function newsinfo($id = NULL) {
		if (!Session::check('isAdmin') || Session::read('isAdmin') !== true) {
			return $this->redirect('Admin::login');
		}

		if($id === NULL) {
			return $this->redirect('Admin::users');
		}

		$article = News::findById($id);
		$func = $this->request->query['func']?:NULL;
		if($func === 'del') {
			$article->delete();
			return $this->redirect('Admin::news');
		}

		return compact('article');
	}
}