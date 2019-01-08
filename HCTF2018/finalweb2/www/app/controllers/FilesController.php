<?php
namespace app\controllers;

use lithium\storage\Session;
use lithium\net\http\Media;

class FilesController extends \lithium\action\Controller {

	public function upload() {
		$this->_render['layout'] = false;
		$this->_render['type'] = 'json';

		if (!Session::check('isLogin') || Session::read('isLogin') !== 1) {
			$results = ['status'=>'error', 'message'=>'need login'];
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
				$results = ['status'=>'success', 'filename'=>'/uploads/'.$uploadname];
			}
		}

		return $results;
	}

	public function remove() {
		$this->_render['layout'] = false;
		$this->_render['type'] = 'json';

		if (!Session::check('isLogin') || Session::read('isLogin') !== 1) {
			$results = ['status'=>'error', 'message'=>'need login'];
		}

		if ($this->request->is('ajax')) {
			$filename = $this->request->data['filename'];
			@unlink(Media::webroot().$filename);
			$results = ['status'=>'success'];
		}

		return $results;

	}
}