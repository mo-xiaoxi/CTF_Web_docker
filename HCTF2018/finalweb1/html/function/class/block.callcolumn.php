<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

function smarty_block_callcolumn($params, $content, &$smarty, &$repeat){
global $emmm_access,$listid,$emmm,$Parameterse;
$id = isset($params['id'])?$params['id']:0;
$limit = isset($params['row'])?$params['row']:1;
$lang = isset($params['lang'])?$params['lang']:'cn';
$type = isset($params['type'])?$params['type']:'td';

	extract($params);  
	if (! isset ( $params['name'] )){
		$return = 'callcolumn';
	}else{
		$return = $params['name'];
	}
    if(!isset($smarty->block_data))
	$smarty->block_data = array();	
	$dataindex = md5(__FUNCTION__ . md5(serialize($params)));  
    $dataindex = substr($dataindex,0,16);

    if (@!$smarty->block_data[$dataindex]){
		global $db;
		if ($type == 'td'){
			$query = $db -> listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Columntitleto,COL_Model,COL_Url,COL_Briefing,COL_Img","`emmm_column`","where COL_Hide = 0 and COL_Lang = '".$lang."' and COL_Uid = ".intval($id)." order by COL_Sorting asc LIMIT 0,".$limit);
		}elseif ($type == 'ty'){
		
			$query = $db -> listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Columntitleto,COL_Model,COL_Url,COL_Briefing,COL_Img","`emmm_column`","where COL_Hide = 0 and COL_Lang = '".$lang."' and COL_Uid = ".intval($listid)." order by COL_Sorting asc LIMIT 0,".$limit);
		
			$rows = $db -> rows($query);
			if (!$rows){
				$query = $db -> listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Columntitleto,COL_Model,COL_Url,COL_Briefing,COL_Img","`emmm_column`","where COL_Hide = 0 and COL_Lang = '".$lang."' and COL_Uid = (select COL_Uid From emmm_column where id=".$listid.") && COL_Uid != 0 order by COL_Sorting asc LIMIT 0,".$limit);
			}
		
		}elseif ($type == 'dq'){
			$query = $db -> listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Columntitleto,COL_Model,COL_Url,COL_Briefing,COL_Img","`emmm_column`","where COL_Hide = 0 and COL_Lang = '".$lang."' and id in (".$id.") order by COL_Sorting asc LIMIT 0,".$limit);
		
		}else{
			$query = $db -> listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Columntitleto,COL_Model,COL_Url,COL_Briefing,COL_Img","`emmm_column`","where COL_Hide = 0 and COL_Lang = '".$lang."' and COL_Model= '".$type."' order by COL_Sorting asc LIMIT 0,".$limit);
		}
		
		$rows = $db -> rows($query);
		if(!$rows){
			$rs[] = "";
		}else{
			$rs=array();
			$i = 1;
			while($emmm_rs = $db -> whilego($query)){
			if($emmm_rs[5] == 'weburl'){
					$weburl = $emmm_rs[6];
					$wapurl = $emmm_rs[6];
			}else{
					if($Parameterse['rewrite'] == 1){
					$weburl = $emmm['webpath'].$emmm_rs[2].'/'.$emmm_rs[5].'/'.$emmm_rs[0].'/';
					}else{
					$weburl = $emmm['webpath'].'?'.$emmm_rs[2].'-'.$emmm_rs[5].'-'.$emmm_rs[0].'.html';
					}
					$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[2].'-'.$emmm_rs[5].'-'.$emmm_rs[0].'.html';
			}
			if(substr($emmm_rs[8],0,7) == 'http://'){$minimg = $emmm_rs[8];}elseif($emmm_rs[8] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg=$emmm['webpath'].$emmm_rs[8];}
				$rs[] = array (
					"i" => $i,
					"id" => $emmm_rs[0],
					"uid" => $emmm_rs[1],
					"title" => $emmm_rs[3],
					"titleto" => $emmm_rs[4],
					"url" => $weburl,
					"briefing" => $emmm_rs[7],
					"img" => $minimg,
					"wapurl" => $wapurl,
				);
				$i+=1;
			}
		}
	if(!$rs){
		return str_replace($content,'',$content);
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
