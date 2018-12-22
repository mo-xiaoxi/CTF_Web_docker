<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

function smarty_function_comment($params, &$smarty){

		global $db,$emmm_access,$emmm;
		extract($params);
		$type = isset($params['type'])?$params['type']:0;
		
		$emmm_rs = $db -> select("`COL_Webocomment`,`COL_Webpcomment`","`emmm_webdeploy`","where id = 1"); 
		$COL_Webocomment = $emmm_rs[0];
		$COL_Webpcomment = $emmm_rs[1];
		
		$COL_Class = isset($params['id'])?$params['id']:"0";
		$COL_Type = isset($params['type'])?$params['type']:"articleview";
		$COL_Row = isset($params['row'])?$params['row']:"10";
		$userlogin = '游客';
		
		
		$query = $db -> listgo("*","`emmm_comment`","where COL_Class = '".$COL_Class."' && COL_Type = '".$COL_Type."' order by time desc LIMIT 0,".$COL_Row);
		$rs=array();
		$i = 1;
		while($emmm_rsrs =  $db -> whilego($query)){
		
		$userip = preg_replace('/((?:\d{1,3}\.){3})\d{1,3}/','$1*',$emmm_rsrs['COL_Ip']);
		if($emmm_rsrs['COL_Name'] == $userlogin){
		$username = $emmm_rsrs['COL_Name'];
		}else{
		$username = half_replace($emmm_rsrs['COL_Name']);
		}
		
			$rs[]=array (
				"i" => $i,
				"id" => $emmm_rsrs['id'],
				"content" => $emmm_rsrs['COL_Content'],
				"class" => $emmm_rsrs['COL_Class'],
				"type" => $emmm_rsrs['COL_Type'],
				"name" => $username,
				"ip" => $userip,
				"vote" => $emmm_rsrs['COL_Vote'],
				"scoring" => explode('|',$emmm_rsrs['COL_Scoring']),
				"gocontent" => $emmm_rsrs['COL_Gocontent'],
				"gotime" => $emmm_rsrs['COL_Gotime'],
				"time" => $emmm_rsrs['time'],
			);
			$i+=1;
		}

if($COL_Webpcomment == 4){
	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	}else{
		$username = '0';
	}
	$query = $db -> listgo("`id`","`emmm_orders`","where COL_Ordersid = ".$COL_Class." && COL_Ordersemail = '".$username."'");
	$num = $db -> rows($query);
	if ($num == 0){
		$smarty->assign('userbuy','2');
	}else{
		$smarty->assign('userbuy','1');
	}
}else{
	$smarty->assign('userbuy','2');
}

$smarty->assign('webocomment',$COL_Webocomment);
$smarty->assign('webpcomment',$COL_Webpcomment);
$smarty->assign('comment',$rs);
$smarty->assign('plugsurl',$emmm['webpath'].'function/plugs/Comment/');

if ($COL_Type == 'productview'){
	$smarty->display(WEB_ROOT.'/function/plugs/Comment/product-index.html');
}else{
	$smarty->display(WEB_ROOT.'/function/plugs/Comment/article-index.html');
}

return ;

}
?>
