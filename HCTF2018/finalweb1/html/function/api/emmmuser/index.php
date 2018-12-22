<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 *-------------------------------
 * Emmm系统 会员处理接口
 *-------------------------------
*/
$apikey = "emmm"; //设置外部链接KEY

include '../../../config/emmm_code.php';
include '../../../config/emmm_config.php';
include '../../../config/emmm_version.php';
include '../../../config/emmm_Language.php';
include '../../emmm_function.class.php';
include 'emmm_system.php';

if($key != $apikey || $apikey == "emmm"){
	
	echo "Parameter error!";
	exit;
	
}
if($type == "reg"){
	
	echo user_reg($useremail,$username,$password,$passwordto);
	
}elseif($type == "login"){
	
	echo user_login($useremail,$password);
	
}elseif($type == "out"){
	
	echo user_out($useremail);
	
}else{
	
	echo "Parameter error!";
	
}
?>
