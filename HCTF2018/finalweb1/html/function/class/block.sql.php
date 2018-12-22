<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

function smarty_block_sql($params, $content, &$smarty, &$repeat){
global $_page,$db,$Parameterse;
$sql = isset($params['mysql'])?$params['mysql']:"";
$font = isset($params['font'])?$params['font']:"未找到数据！";
			
	extract($params);  
	if (!isset ($params['name'])){
		$return = 'sql';
	}else{
		$return = $params['name'];
	}

    if(!isset($smarty->block_data))
	$smarty->block_data = array();	

	$dataindex = md5(__FUNCTION__ . md5(serialize($params)));  
    $dataindex = substr($dataindex,0,16);

    if (@!$smarty->block_data[$dataindex]){
		$query = $db -> create($sql,2);
		$rs = array();
		$i = 1;
		while($emmm_rs = $db -> whilego($query)){
			$emmm_rsrs = $emmm_rs;
			$emmm_rsrs['i'] = $i;
			$rs[] = $emmm_rsrs;
			$i+=1;
		}
		if(!$rs){
			return str_replace($content,$font,$content);
			$repeat = false;
		}
        $smarty->block_data[$dataindex]=$rs;
    }
    if(!$smarty->block_data[$dataindex]){
        $repeat = false;
        return '';  
    }

    if (list ($key,$item)=each($smarty->block_data[$dataindex] )) {
		$smarty->assign($return, $item);
        $repeat = true;
    }

    if (!$item) {
        $repeat = false;
        reset($smarty->block_data[$dataindex]);
    }
    return $content;
}
?>
