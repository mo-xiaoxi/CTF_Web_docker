<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="author" content="vidar.club"/>
<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-title" content="[.$emmm_web.website.]">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="320">
<meta name="screen-orientation" content="portrait">
<meta name="x5-orientation" content="portrait">
<meta name="full-screen" content="yes">
<meta name="x5-fullscreen" content="true">
<meta name="browsermode" content="application">
<meta name="x5-page-mode" content="app">
<meta name="msapplication-tap-highlight" content="no">
<title>物流接口</title>
</head>
<body>
<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 *-------------------------------
 * 快递100查询接口
 *-------------------------------
*/

include '../../../config/emmm_code.php';
include '../../../config/emmm_config.php';
include '../../../config/emmm_Language.php';
include '../../emmm_function.class.php';

session_start();
if(!isset($_SESSION['username'])){
	exit($emmm_adminfont['power']);
}

$title = $_GET['title'];
$number = $_GET['number'];
if($title == 'no'){
	exit('此商品不需要物流!');
}else{
	if($title == '' || $number == ''){
		exit('参数不能为空'.$title);
	}
}

#查询API接口数据
$api = plugsclass::plugs(1);
if (!$api){
	exit($api[0].$emmm_adminfont['plugsno']);
}
$AppKey = $api[2];

$url ='http://www.kuaidi100.com/applyurl?key='.$AppKey.'&com='.$title.'&nu='.$number;
if (function_exists('curl_init') == 1){
  $curl = curl_init();
  curl_setopt ($curl, CURLOPT_URL, $url);
  curl_setopt ($curl, CURLOPT_HEADER,0);
  curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt ($curl, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
  curl_setopt ($curl, CURLOPT_TIMEOUT,5);
  $get_content = curl_exec($curl);
  curl_close ($curl);
}else{
  include("snoopy.php");
  $snoopy = new snoopy();
  $snoopy->referer = 'http://www.google.com/';
  $snoopy->fetch($url);
  $get_content = $snoopy->results;
}
echo '<iframe src="'.$get_content.'" width="550" height="255" scrolling="no" frameborder="0"></iframe><p style="width:550px;text-align:center;">数据由kuaidi100.com提供！</p>';
?>
</body>
</html>
