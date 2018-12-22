<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
*/
if(!defined('EMMMNO')){exit('no!');}

$emmm_rs = $db -> select("COL_Webfenci","`emmm_webdeploy`","where id = 1");
if ($emmm_rs[0] == 1){

	$word = compress_html($word);
	$url = 'http://api.pullword.com/get.php?source='.$word.'&param1=0.7&param2=2';
	$info = file_get_contents($url);
	
	//过滤替换
	$wordtag = preg_replace('/\s/',',',$info);
	$wordtag = str_replace(",,",",",$wordtag);
	$wordtag = substr($wordtag,0,100);

}else{

	$wordtag = $tag;

}
?>
