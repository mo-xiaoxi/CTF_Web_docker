<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

function smarty_function_service($params, &$smarty){

	global $db,$emmm_access,$emmm,$emmm_cache;
	extract($params);
	$type = isset($params['type'])?$params['type']:0;
	$temp = isset($params['temp'])?$params['temp']:"flaot";
	$fsomd5 = md5($type);
	
	$emmm_rs = $db -> select("`COL_Webservice`","`emmm_webdeploy`","where id = 1"); 
	$kefuurl = $emmm_rs[0];
	
	if($kefuurl != 'close'){
	
	if(!is_file(WEB_ROOT.'/'.$emmm_cache.'service_'.$fsomd5.'.txt')){
		if($type == 0){
			$where = '';
		}else{
			$where = "where `COL_QQclass` = '".$type."'";
		}
	
	$query = $db -> listgo("id,COL_QQname,COL_QQnumber,COL_QQclass,COL_QQother","`emmm_qq`",$where." order by COL_QQsorting asc,id desc");
	$rs=array();
	$i = 1;
	while($emmm_rsrs = $db -> whilego($query)){
		$rs[]=array (
			"i" => $i,
			"id" => $emmm_rsrs[0],
			"name" => $emmm_rsrs[1],
			"number" => $emmm_rsrs[2],
			"class" => $emmm_rsrs[3],
			"other" => $emmm_rsrs[4],
		);
		$i+=1;
	}
	emmm_file($emmm_cache.'service_'.$fsomd5.'.txt',json_encode($rs),2);
	}else{
		$arraytojson = json_decode(file_get_contents(WEB_ROOT.'/'.$emmm_cache.'service_'.$fsomd5.'.txt'));
		$rs=object_array($arraytojson);
	}
	$smarty->assign('service',$rs);
	$smarty->assign('plugsurl',$emmm['webpath'].'function/plugs/Service/'.$kefuurl.'/');
	if($temp != "index"){
		$smarty->display(WEB_ROOT.'/function/plugs/Service/'.$kefuurl.'/index.html');
	}
	return ;
	
		}else{
			
	return ;
	
	}
}
?>
