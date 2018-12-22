<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

function smarty_block_brandlist($params, $content, &$smarty, &$repeat){
global $emmm_access,$emmm,$db,$Parameterse;
$id = isset($params['id'])?$params['id']:0;
			
	extract($params);  
	if (! isset ( $params['name'] )){
		$return = 'brandlist';
	}else{
		$return = $params['name'];
	}
	
	$listpage = $Parameterse['page'][1];
		
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start = ($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_product`","where COL_Brand = '".intval($id)."' && `COL_Down` = 2");
	$emmmtotal = $db -> whilego($emmmtotal);
	
    if(!isset($smarty->block_data))
	$smarty->block_data = array();

	$dataindex = md5(__FUNCTION__ . md5(serialize($params)));  
    $dataindex = substr($dataindex,0,16);

    if (@!$smarty->block_data[$dataindex]){
		$query = $db -> listgo("id,COL_Title,COL_Number,COL_Goodsno,COL_Brand,COL_Market,COL_Webmarket,COL_Stock,COL_Minimg,COL_Maximg,COL_Lang,COL_Url,COL_Description,COL_Click,time,COL_Class","`emmm_product`","where COL_Brand = '".intval($id)."' && `COL_Down` = 2 order by COL_Sorting asc,id desc LIMIT ".$start.",".$listpage);
		$rs=array();
		$i = 1;
		while($emmm_rs =  $db -> whilego($query)){
		if(substr($emmm_rs[8],0,7) == 'http://'){$minimg = $emmm_rs[8];}elseif($emmm_rs[8] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg = $emmm['webpath'].$emmm_rs[8];}
		if(substr($emmm_rs[9],0,7) == 'http://'){$maximg = $emmm_rs[9];}elseif($emmm_rs[9] == ''){$maximg = $emmm['webpath'].'skin/noimage.png';}else{$maximg = $emmm['webpath'].$emmm_rs[9];}
		if ($emmm_rs[11] == ''){
		if($Parameterse['rewrite'] == 1){
		$url = $emmm['webpath'].$emmm_rs[10].'/productview/'.$emmm_rs[15].'/'.$emmm_rs[0].'/';
		}else{
		$url = $emmm['webpath'].'?'.$emmm_rs[10].'-productview-'.$emmm_rs[15].'-'.$emmm_rs[0].'.html';
		}
		$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[10].'-productview-'.$emmm_rs[15].'-'.$emmm_rs[0].'.html';
		}else{$url=$emmm_rs[11];$wapurl=$emmm_rs[11];}
			$rs[]=array (
				"i" => $i,
				"id" => $emmm_rs[0],
				"title" => $emmm_rs[1],
				"number" => $emmm_rs[2],
				"goodsno" => $emmm_rs[3],
				"brand" => opcmsbrand($emmm_rs[4]),
				"market" => $emmm_rs[5],
				"webmarket" => $emmm_rs[6],
				"stock" => $emmm_rs[7],
				"minimg" => $minimg,
				"maximg" => $maximg,
				"url" => $url,
				"description" => $emmm_rs[12],
				"click" => $emmm_rs[13],
				"time" => $emmm_rs[14],
				"wapurl" => $wapurl,
			);
			$i+=1;
		}
		
		$_page = new Page($emmmtotal['tiaoshu'],$listpage);
		$smarty -> assign('emmmpage',$_page->showpage());	
		if(!$rs){
			return str_replace($content,$emmm_access,$content);
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
