<?php
namespace app\controllers;

use app\models\Bugs;
use app\models\Users;
use lithium\net\http\Media;
use lithium\storage\Session;

class UsersController extends \lithium\action\Controller {

	public function index() {
		if(Session::check('isLogin') && Session::read('isLogin') === 1) {
			$user = Users::findByUsername(Session::read('username'));
			$src = $this->avatar();
			return compact('user', 'src');
		}



		return $this->redirect('/users/login');
	}

	public function register() {
		if ($this->request->data) {
			$errors = [];
			$user = Users::create($this->request->data);
			if ($this->request->data['password'] === $this->request->data['confirm_password']) {
				$user->save();
				$errors = $user->errors();
			} else {
				$errors = array_merge($errors, [['两次输入密码不一致']]);
			}
			if (!empty($errors)) {
				return compact('errors');
			}
			return $this->redirect('/users/login');
		}
	}

	public function login() {
		if(Session::check('isLogin') && Session::read('isLogin') === 1) {
			return $this->redirect('/users');
		}

		if ($this->request->data) {
			$errors = [];
			$user = Users::login_check($this->request->data['username'], $this->request->data['password']);
			if((boolean)$user === true) {
				Session::write('isLogin', 1);
				Session::write('username', $user->username);
			} else {
				$errors = [['用户名或密码错误']];
			}
			if (!empty($errors)) {
				return compact('errors');
			}
			return $this->redirect('/users');
		}
	}

	public function logout() {
		if(Session::check('isLogin') && Session::read('isLogin') === 1) {
			Session::clear();
		}

		return $this->redirect('/users/login');
	}

	public function editProfit() {
		$this->_render['type'] = 'json';

		if (!Session::check('isLogin') || Session::read('isLogin') !== 1) {
			return $this->redirect('/users/login');
		}

		if ($this->request->data) {
			$id = Users::findByUsername(Session::read('username'))->id;
			if(Users::update($this->request->data, ['id'=>$id])) {
				Session::write('username', Users::findById($id)->username);
				return $this->redirect('/users');
			}
			return json_encode(['status' => 'error']);
		}
	}

	public function editAvatar() {
		$this->_render['layout'] = false;
		$this->_render['type'] = 'json';

		if (!Session::check('isLogin') || Session::read('isLogin') !== 1) {
			return $this->redirect('/users/login');
		}


		if ($this->request->is('ajax')) {
			$size = $_FILES['file']['size'];
			if ($size == 0) {
				return ['status'=>'error', 'message' => 'File is empty.'];
			}
			$pathinfo = pathinfo($_FILES['file']['name']);
			$filename = md5(time());
			$ext = @$pathinfo['extension'];
			$ext = ($ext == '') ? $ext : '.' . $ext;
			$uploadname = $filename . $ext;
			if (!move_uploaded_file($_FILES['file']['tmp_name'], Media::webroot().'/uploads/'.$uploadname)) {
				$results = ['status'=>'error', 'message' => 'Could not save upload file.'];
			} else {
				@chmod(Media::webroot().'/uploads/', 0644);
				$results = ['status'=>'success'];
			}

			Users::update(['avatar'=>Media::webroot().'/uploads/'.$uploadname], ['username'=>Session::read('username')]);
		}

		return $results;
	}

	public function changePassword() {
		if (!Session::check('isLogin') || Session::read('isLogin') !== 1) {
			return $this->redirect('/users/login');
		}

		if ($this->request->data) {
			if (isset($this->request->data['oldPassword']) && isset($this->request->data['newPassword']) && isset($this->request->data['confirmPassword'])) {
				$user = Users::findByUsername(Session::read('username'));
				if($this->request->data['oldPassword'] !== $user->password) {
					return json_encode(['status'=>'error', 'message'=>'旧密码不符']);
				}
				if ($this->request->data['newPassword'] !== $this->request->data['confirmPassword']) {
					return json_encode(['status'=>'error', 'message'=>'两次输入的新密码不符']);
				}
				Users::update(['password' => $this->request->data['newPassword']], ['username' => $user->username]);
				return json_encode(['status'=>'success']);
			}
		}
	}

	private function avatar() {
		if (!Session::check('isLogin') || Session::read('isLogin') !== 1) {
			$image = base64_encode(file_get_contents(Media::webroot().'/img/avatar.jpg'));
			$src = 'data: '.mime_content_type(Media::webroot().'/img/avatar.jpg').';base64,'.$image;
			return $src;
		}

		$user = Users::findByUsername(Session::read('username'));
		$image = base64_encode(file_get_contents($user->avatar));
		$src = 'data: '.mime_content_type($user->avatar).';base64,'.$image;
		return $src;
	}

	public function bugs() {
		if (!Session::check('isLogin') || Session::read('isLogin') !== 1) {
			return $this->redirect('/users/login');
		}
		$uid = Users::findByUsername(Session::read('username'))->id;
		$bugs = Bugs::find('all', [
			'conditions' => ['reporter_id' => $uid]
		]);

		return compact('bugs');
	}

	public function buginfo($id = NULL) {
		if (!Session::check('isLogin') || Session::read('isLogin') !== 1) {
			return $this->redirect('/users/login');
		}

		if ($id === NULL) {
			return $this->redirect('/users/bugs');
		}

		$bug = Bugs::findById($id);

		return compact('bug');
	}
}