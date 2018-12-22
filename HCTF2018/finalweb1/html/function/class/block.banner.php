<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

function smarty_block_banner($params, $content, &$smarty, &$repeat){
global $emmm_access,$emmm,$emmm_cache,$db;
$lang = isset($params['lang'])?$params['lang']:"cn";
$limit = isset($params['row'])?$params['row']:1;
$id = isset($params['id'])?$params['id']:0;
$type = isset($params['type'])?$params['type']:0;
$fsomd5 = md5($lang.$limit.$id.$type);

	extract($params);  
	if (! isset ( $params['name'] )){
		$return = 'banner';
	}else{
		$return = $params['name'];
	}
    if(!isset($smarty->block_data))
	$smarty->block_data = array();	
	$dataindex = md5(__FUNCTION__ . md5(serialize($params)));  
    $dataindex = substr($dataindex,0,16);

    if (@!$smarty->block_data[$dataindex]){
	if(!is_file(WEB_ROOT.'/'.$emmm_cache.'banner_'.$fsomd5.'.txt')){
		global $db;
		if ($id == 0){
		$query = $db -> listgo("`id`,`COL_Bannerimg`,`COL_Bannertitle`,`COL_Bannerurl`,`COL_Bannertext`","`emmm_banner`","where `COL_Bannerlang` = '".$lang."' && `COL_Bannerclass` = ".$type." LIMIT 0,".$limit);
		}else{
		$query = $db -> listgo("`id`,`COL_Bannerimg`,`COL_Bannertitle`,`COL_Bannerurl`,`COL_Bannertext`","`emmm_banner`","where id in(".$id.") && `COL_Bannerclass` = ".$type);
		}
		$rs = array();
		$i = 1;
		while($emmm_rs = $db -> whilego($query)){
		if(substr($emmm_rs[1],0,7) == 'http://'){$minimg = $emmm_rs[1];}elseif($emmm_rs[1] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg = $emmm['webpath'].$emmm_rs[1];}
		$emmm_text = explode("|",$emmm_rs[4]);
				$rs[] = array (
					'i' => $i,
					'id' => $emmm_rs[0],
					'img' => $minimg,
					'title' => $emmm_rs[2],
					'url' => $emmm_rs[3],
					'text1' => $emmm_text[0],
					'text2' => $emmm_text[1],
					'text3' => $emmm_text[2]
				);
			$i+=1;
		}
		if(!$rs){
			return str_replace($content,$emmm_access,$content);
			$repeat = false;
		}
        $smarty->block_data[$dataindex]=$rs;
		emmm_file($emmm_cache.'banner_'.$fsomd5.'.txt',json_encode($rs),2);
		}else{
			$arraytojson = json_decode(file_get_contents(WEB_ROOT.'/'.$emmm_cache.'banner_'.$fsomd5.'.txt'));
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
