<?php
/*
	插件管理引用文件
*/
include '../../../config/emmm_code.php';
include '../../../config/emmm_config.php';
include '../../../config/emmm_version.php';
include '../../../config/emmm_Language.php';
include '../../../function/emmm_function.class.php';

session_start();
date_default_timezone_set('Asia/Shanghai');

if(isset($_SESSION['emmm_outtime'])) {

	if($_SESSION['emmm_outtime'] < time()) {
		unset($_SESSION['emmm_outtime']);
		echo '登录超时或未登录，请重新登录！';
		exit(0);
	} else {
		$_SESSION['emmm_outtime'] = time() + 3600;
	}
	
}else{
	echo '登录超时或未登录，请重新登录！';
	exit(0);
}
?>