<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 *-------------------------------
 * 淘宝IP接口
 *-------------------------------
*/

if(getenv('HTTP_CLIENT_IP')) { 
$onlineip = getenv('HTTP_CLIENT_IP');
} elseif(getenv('HTTP_X_FORWARDED_FOR')) { 
$onlineip = getenv('HTTP_X_FORWARDED_FOR');
} elseif(getenv('REMOTE_ADDR')) { 
$onlineip = getenv('REMOTE_ADDR');
} else { 
$onlineip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
}

if($onlineip != '127.0.0.1'){
	$url = 'http://ip.taobao.com/service/getIpInfo.php?ip='.$onlineip;
	$info = file_get_contents($url);
	$info = json_decode($info,true);
	$taobaoip = $info['data']['region'];
}else{
	$taobaoip = '本地IP';
}
?>
