<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
*/
if(!defined('EMMMNO')){exit('no!');}

function columnlist($model) { 
    global $db,$id;
	
	if ($model == ''){
		$query = $db -> listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Columntitleto,COL_Model,COL_Templist,COL_Tempview,COL_Hide,COL_Sorting,COL_Weight,COL_Url","`emmm_column`","where `COL_Adminopen` LIKE '%$id%' or `COL_Adminopen` LIKE '%0%' order by COL_Sorting asc,id asc"); 
	}else{
		$query = $db -> listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Columntitleto,COL_Model,COL_Templist,COL_Tempview,COL_Hide,COL_Sorting,COL_Weight,COL_Url","`emmm_column`","where COL_Model = '".$model."' and (`COL_Adminopen` LIKE '%$id%' or `COL_Adminopen` LIKE '%0%') order by COL_Sorting asc,id asc");
	}
	$arr = array();
	$i = 0;
	$rows = $db -> rows($query,1);
	if ($rows >= 1){
        while($emmm_rs = $db -> whilego($query)){
            $arr[] = array(
				"i" => $i,
				"id" => $emmm_rs[0],
				"uid" => $emmm_rs[1],
				"lang" => $emmm_rs[2],
				"title" => $emmm_rs[3],
				"titleto" => $emmm_rs[4],
				"model" => $emmm_rs[5],
				"templist" => $emmm_rs[6],
				"tempview" => $emmm_rs[7],
				"hide" => $emmm_rs[8],
				"sorting" => $emmm_rs[9],
				"weight" => $emmm_rs[10],
				"weburl" => $emmm_rs[11],
				); 
			$i += 1;
		}
	}else{
		$arr[] = array(
			"i" => '0',
			"id" => '0',
			"uid" => '0',
			"lang" => '0',
			"title" => '暂无栏目',
			"titleto" => '暂无栏目',
			"model" => 'emmm',
			"templist" => '0',
			"tempview" => '0',
			"hide" => '0',
			"sorting" => '0',
			"weight" => '0',
			"weburl" => '0',
		);
	}
    return $arr;
}
?>
