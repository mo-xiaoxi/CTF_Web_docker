<?php
include '../../../config/emmm_code.php';
include '../../../config/emmm_config.php';
include '../../../config/emmm_Language.php';
include '../../emmm_function.class.php';

date_default_timezone_set('Asia/Shanghai');
session_start();

if(empty($_SESSION['username'])){
	
	exit($emmm_adminfont['power']);
	
}else{
	
	$rs = $db -> select("id,COL_Useremail","`emmm_user`","WHERE `COL_Useremail` = '".admin_sql($_SESSION['username'])."'");	
	if (!$rs){
		exit($emmm_adminfont['power']);
	}else{
		$id = $rs[0];
		$username = $rs[1];
	}
	
}
//安全码
$safecode = array(
	'id' => $id,
	'username' => $username,
	'code' => $emmm['safecode'],
	'md5code' => MD5($id.$emmm['safecode']),
);


//通用类
$emmm_rs = $db -> select("*","`emmm_web`","where `id` = 1");
$web = array(
	'website' => $emmm_rs["COL_Website"],
	'weburl' => $emmm_rs["COL_Weburl"],
	'weblogo' => $emmm['webpath'].$emmm_rs["COL_Weblogo"],
	'webname' => $emmm_rs["COL_Webname"],
	'webadd' => $emmm_rs["COL_Webadd"],
	'webtel' => $emmm_rs["COL_Webtel"],
	'webmobi' => $emmm_rs["COL_Webmobi"],
	'webfax' => $emmm_rs["COL_Webfax"],
	'webemail' => $emmm_rs["COL_Webemail"],
	'webzip' => $emmm_rs["COL_Webzip"],
	'webqq' => $emmm_rs["COL_Webqq"],
	'weblinkman' => $emmm_rs["COL_Weblinkman"],
	'webicp' => $emmm_rs["COL_Webicp"],
	'webstatistics' => $emmm_rs["COL_Webstatistics"],
	'webtime' => $emmm_rs["COL_Webtime"],
);

/*
 * 调用插件类，并判断此插件是否开启~ 
 * 取值：$api[0] 表示API名称，$api[1] 表示开关，$api[2~N] API值
 */
$api = plugsclass::plugs(3);
if (!$api){
	exit($api[0].$emmm_adminfont['plugsno']);
}
?>
