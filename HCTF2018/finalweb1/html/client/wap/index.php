<?php
if(version_compare(PHP_VERSION,'5.2.0','<'))  die('错误！您的PHP版本不能低于 5.2.0 !');
if (!file_exists("../../function/install/emmm.lock")) {
	header("location: ../../function/install/index.php");
	exit;
}
include '../../config/emmm_code.php';
include '../../config/emmm_config.php';
include '../../config/emmm_version.php';
include '../../config/emmm_Language.php';
include '../../function/emmm_function.class.php';
include '../../function/emmm/Smarty.class.php';
include './emmm_system.class.php';
include './emmm_template.class.php';
?>