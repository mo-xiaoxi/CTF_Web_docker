<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

function smarty_block_link($params, $content, &$smarty, &$repeat){
global $emmm_access,$emmm_cache,$emmm_webpath;
$limit = isset($params['row'])?$params['row']:1;
$type = isset($params['type'])?$params['type']:1;
$fsomd5 = md5($limit.$type);

  
	extract($params);  
	if (! isset ( $params['name'] )){
		$return = 'link';
	}else{
		$return = $params['name'];
	}
    if(!isset($smarty->block_data))
	$smarty->block_data = array();	
	$dataindex = md5(__FUNCTION__ . md5(serialize($params)));  
    $dataindex = substr($dataindex,0,16);
	

    if (@!$smarty->block_data[$dataindex]){
		if(!is_file(WEB_ROOT.'/'.$emmm_cache.'link_'.$fsomd5.'.txt')){
		global $db;
		if ($type == 1){
			$query = $db -> listgo("`COL_Linkname`,`COL_Linkurl`,`COL_Linkimg`","`emmm_link`","where COL_Linkstate = 1 and COL_Linkclass = 'font' order by COL_Linksorting asc LIMIT 0,".$limit);
		}elseif ($type == 2){
			$query = $db -> listgo("`COL_Linkname`,`COL_Linkurl`,`COL_Linkimg`","`emmm_link`","where COL_Linkstate = 1 and COL_Linkclass = 'img' order by COL_Linksorting asc LIMIT 0,".$limit);
		}
		$rs = array();
		$i = 1;
		while($emmm_rs = $db -> whilego($query)){
		if(substr($emmm_rs[2],0,7) == 'http://'){$minimg = $emmm_rs[2];}elseif($emmm_rs[2] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg = $emmm['webpath'].$emmm_rs[2];}
			$rs[] = array (
				'i' => $i,
				'title' => $emmm_rs[0],
				'url' => $emmm_rs[1],
				'img' => $minimg,
			);
			$i+=1;
		}
		
		if(!$rs){
			return str_replace($content,$emmm_access,$content);
			$repeat = false;
		}
        $smarty->block_data[$dataindex]=$rs;
		emmm_file($emmm_cache.'link_'.$fsomd5.'.txt',json_encode($rs),2);
		
		}else{
			$arraytojson = json_decode(file_get_contents(WEB_ROOT.'/'.$emmm_cache.'link_'.$fsomd5.'.txt'));
			$smarty->block_data[$dataindex]=object_array($arraytojson);
		}
		
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
