<?php

if(!defined('EMMMNO')){exit('no!');}

function smarty_block_emmm($params, $content, &$smarty, &$repeat){
global $emmm_access,$emmm,$db,$Parameterse;
$form = isset($params['form'])?$params['form']:"article";
$lang = isset($params['lang'])?$params['lang']:"cn";
$limit = isset($params['row'])?$params['row']:1;
$id = isset($params['id'])?$params['id']:0;
$type = isset($params['type'])?$params['type']:'op';
$sql = isset($params['sql'])?$params['sql']:'';
		
	extract($params);  
	if (! isset ( $params['name'] )){
		$return = 'emmm';
	}else{
		$return = $params['name'];
	}

    if(!isset($smarty->block_data))
	$smarty->block_data = array();	
		
	$dataindex = md5(__FUNCTION__ . md5(serialize($params)));  
    $dataindex = substr($dataindex,0,16);

    if (@!$smarty->block_data[$dataindex]){
	global $db;
	if ($type == 'op'){
		$Attribute = "";
	}else{
		$Attribute = " and COL_Attribute like '%".$type."%' ";
	}
	if ($id == 0){
		$where = "`COL_Lang` = '".$lang."'".$Attribute.$sql;
			}else{
		$where = "`COL_Class` in (".$id.")".$Attribute.$sql;
	}
		
	switch($form){
		case "article":
		$query = $db -> listgo("id,COL_Articletitle,COL_Articleauthor,COL_Articlesource,time,COL_Url,COL_Description,COL_Click,COL_Class,COL_Minimg","`emmm_".$form."`","where ".$where." && `COL_Callback` = 0 order by id desc LIMIT 0,".$limit);
		$rs=array();
		$i = 1;
		while($emmm_rs = $db -> whilego($query)){
		if ($emmm_rs[5] == ''){
		if($Parameterse['rewrite'] == 1){
		$url = $emmm['webpath'].$lang.'/articleview/'.$emmm_rs[8].'/'.$emmm_rs[0].'/';
		}else{
		$url = $emmm['webpath'].'?'.$lang.'-articleview-'.$emmm_rs[8].'-'.$emmm_rs[0].'.html';
		}
		$wapurl = $emmm['webpath'].'client/wap/?'.$lang.'-articleview-'.$emmm_rs[8].'-'.$emmm_rs[0].'.html';
		}else{$url=$emmm_rs[5];$wapurl = $emmm_rs[5];}
		if(substr($emmm_rs[9],0,7) == 'http://' || substr($emmm_rs[9],0,8) == 'https://'){$minimg = $emmm_rs[9];}elseif($emmm_rs[9] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg = $emmm['webpath'].$emmm_rs[9];}
			$rs[]=array (
				"i" => $i,
				"id" => $emmm_rs[0],
				"title" => $emmm_rs[1],
				"author" => $emmm_rs[2],
				"source" => $emmm_rs[3],
				"time" => $emmm_rs[4],
				"description" => $emmm_rs[6],
				"url" => $url,
				"click" => $emmm_rs[7],
				"minimg" => $minimg,
				"wapurl" => $wapurl,
				"column" => columncycle($emmm_rs[8]),
			);
			$i+=1;
		}
		break;
		case "product":
		$query = $db -> listgo("id,COL_Title,COL_Number,COL_Goodsno,COL_Brand,COL_Market,COL_Webmarket,COL_Stock,COL_Minimg,COL_Maximg,COL_Url,COL_Description,COL_Click,time,COL_Class,COL_Integral,COL_Integralexchange,COL_Freight","`emmm_".$form."`","where ".$where." && `COL_Down` = 2 order by id desc LIMIT 0,".$limit);
		$rs=array();
		$i = 1;
		while($emmm_rs = $db -> whilego($query)){
		if ($emmm_rs[10] == ''){
		if($Parameterse['rewrite'] == 1){
		$url = $emmm['webpath'].$lang.'/productview/'.$emmm_rs[14].'/'.$emmm_rs[0].'/';
		}else{
		$url = $emmm['webpath'].'?'.$lang.'-productview-'.$emmm_rs[14].'-'.$emmm_rs[0].'.html';
		}
		$wapurl = $emmm['webpath'].'client/wap/?'.$lang.'-productview-'.$emmm_rs[14].'-'.$emmm_rs[0].'.html';
		}else{$url=$emmm_rs[10];$wapurl = $emmm_rs[10];}
		if(substr($emmm_rs[8],0,7) == 'http://' || substr($emmm_rs[8],0,8) == 'https://'){$minimg = $emmm_rs[8];}elseif($emmm_rs[8] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg=$emmm['webpath'].$emmm_rs[8];}
		if(substr($emmm_rs[9],0,7) == 'http://' || substr($emmm_rs[9],0,8) == 'https://'){$maximg = $emmm_rs[9];}elseif($emmm_rs[9] == ''){$maximg = $emmm['webpath'].'skin/noimage.png';}else{$maximg=$emmm['webpath'].$emmm_rs[9];}
		if($emmm_rs[17] == 1){$freight = '<span style="padding:1px 5px 1px 5px; background:#F90; color:#FFF; border-radius:5px;">包邮</span>';}else{$freight = '';}
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
				"description" => $emmm_rs[11],
				"click" => $emmm_rs[12],
				"time" => $emmm_rs[13],
				"wapurl" => $wapurl,
				"column" => columncycle($emmm_rs[14]),
				"integral" => $emmm_rs[15],
				"integralexchange" => $emmm_rs[16],
				"total" => clubnumber($emmm_rs[0],"zxl"),
				"totalday" => clubnumber($emmm_rs[0],"yxl"),
				"freight-tag" => $freight,
			);
			$i+=1;
		}
		break;
		case "photo":
		$query = $db -> listgo("id,COL_Phototitle,time,COL_Photocminimg,COL_Url,COL_Description,COL_Click,COL_Class","`emmm_".$form."`","where ".$where." && `COL_Callback` = 0 order by id desc LIMIT 0,".$limit);
		$rs=array();
		$i = 1;
		while($emmm_rs = $db -> whilego($query)){
		if ($emmm_rs[4] == ''){
		if($Parameterse['rewrite'] == 1){
		$url = $emmm['webpath'].$lang.'/photoview/'.$emmm_rs[7].'/'.$emmm_rs[0].'/';
		}else{
		$url = $emmm['webpath'].'?'.$lang.'-photoview-'.$emmm_rs[7].'-'.$emmm_rs[0].'.html';
		}
		$wapurl = $emmm['webpath'].'client/wap/?'.$lang.'-photoview-'.$emmm_rs[7].'-'.$emmm_rs[0].'.html';
		}else{$url=$emmm_rs[4];$wapurl = $emmm_rs[4];}
		if(substr($emmm_rs[3],0,7) == 'http://' || substr($emmm_rs[3],0,8) == 'https://'){$minimg = $emmm_rs[3];}elseif($emmm_rs[3] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg=$emmm['webpath'].$emmm_rs[3];}
			$rs[]=array (
				"i" => $i,
				"id" => $emmm_rs[0],
				"title" => $emmm_rs[1],
				"time" => $emmm_rs[2],
				"minimg" => $minimg,
				"url" => $url,
				"description" => $emmm_rs[5],
				"click" => $emmm_rs[6],
				"wapurl" => $wapurl,
				"column" => columncycle($emmm_rs[7]),
			);
			$i+=1;
		}
		break;
		case "video":
		$query = $db -> listgo("id,COL_Videotitle,time,COL_Videoimg,COL_Url,COL_Description,COL_Click,COL_Class,COL_Videovurl","`emmm_".$form."`","where ".$where." && `COL_Callback` = 0 order by id desc LIMIT 0,".$limit);
		$rs=array();
		$i = 1;
		while($emmm_rs = $db -> whilego($query)){
		if ($emmm_rs[4] == ''){
		if($Parameterse['rewrite'] == 1){
		$url = $emmm['webpath'].$lang.'/videoview/'.$emmm_rs[7].'/'.$emmm_rs[0].'/';
		}else{
		$url = $emmm['webpath'].'?'.$lang.'-videoview-'.$emmm_rs[7].'-'.$emmm_rs[0].'.html';
		}
		$wapurl = $emmm['webpath'].'client/wap/?'.$lang.'-videoview-'.$emmm_rs[7].'-'.$emmm_rs[0].'.html';
		}else{$url=$emmm_rs[4];$wapurl = $emmm_rs[4];}
		if(substr($emmm_rs[3],0,7) == 'http://' || substr($emmm_rs[3],0,8) == 'https://'){$minimg = $emmm_rs[3];}elseif($emmm_rs[3] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg=$emmm['webpath'].$emmm_rs[3];}
			$rs[]=array (
				"i" => $i,
				"id" => $emmm_rs[0],
				"title" => $emmm_rs[1],
				"time" => $emmm_rs[2],
				"minimg" => $minimg,
				"url" => $url,
				"description" => $emmm_rs[5],
				"click" => $emmm_rs[6],
				"wapurl" => $wapurl,
				"column" => columncycle($emmm_rs[7]),
				'playurl' => $emmm_rs[8],
			);
			$i+=1;
		}
		break;
		case "down":
		$query = $db-> listgo("id,COL_Downtitle,time,COL_Downimg,COL_Downdurl,COL_Downempower,COL_Downtype,COL_Downlang,COL_Downsize,COL_Downmake,COL_Url,COL_Description,COL_Click,COL_Class,COL_Random","`emmm_".$form."`","where ".$where." && `COL_Callback` = 0 order by id desc LIMIT 0,".$limit);
		$rs=array();
		$i = 1;
		while($emmm_rs = $db -> whilego($query)){
		if ($emmm_rs[10] == ''){
		if($Parameterse['rewrite'] == 1){
		$url = $emmm['webpath'].$lang.'/downview/'.$emmm_rs[13].'/'.$emmm_rs[0].'/';
		}else{
		$url = $emmm['webpath'].'?'.$lang.'-downview-'.$emmm_rs[13].'-'.$emmm_rs[0].'.html';
		}
		$wapurl = $emmm['webpath'].'client/wap/?'.$lang.'-downview-'.$emmm_rs[13].'-'.$emmm_rs[0].'.html';
		}else{$url=$emmm_rs[10];$wapurl = $emmm_rs[10];}
		if(substr($emmm_rs[3],0,7) == 'http://' || substr($emmm_rs[3],0,8) == 'https://'){$minimg = $emmm_rs[3];}elseif($emmm_rs[3] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg=$emmm['webpath'].$emmm_rs[3];}
			$rs[]=array (
				"i" => $i,
				"id" => $emmm_rs[0],
				"title" => $emmm_rs[1],
				"time" => $emmm_rs[2],
				"minimg" => $minimg,
				"downurl" => $emmm['webpath'].'function/emmm_play.class.php?emmm_down='.$emmm_rs[0].'&code='.$emmm_rs[14],
				"downurltrue" => $emmm_rs[4],
				"empower" => $emmm_rs[5],
				"type" => $emmm_rs[6],
				"lang" => $emmm_rs[7],
				"size" => $emmm_rs[8],
				"make" => $emmm_rs[9],
				"url" => $url,
				"description" => $emmm_rs[11],
				"click" => $emmm_rs[12],
				"wapurl" => $wapurl,
				"column" => columncycle($emmm_rs[13]),
			);
			$i+=1;
		}
		break;
		case "job":
		$query = $db -> listgo("id,COL_Jobtitle,time,COL_Jobwork,COL_Jobadd,COL_Jobeducation,COL_Jobnumber,COL_Jobage,COL_Jobwage,COL_Url,COL_Description,COL_Click,COL_Class","`emmm_".$form."`","where ".$where." && `COL_Callback` = 0 order by id desc LIMIT 0,".$limit);
		$rs=array();
		$i = 1;
		while($emmm_rs = $db -> whilego($query)){
		if ($emmm_rs[9] == ''){
		if($Parameterse['rewrite'] == 1){
		$url = $emmm['webpath'].$lang.'/jobview/'.$emmm_rs[12].'/'.$emmm_rs[0].'/';
		}else{
		$url = $emmm['webpath'].'?'.$lang.'-jobview-'.$emmm_rs[12].'-'.$emmm_rs[0].'.html';
		}
		$wapurl = $emmm['webpath'].'client/wap/?'.$lang.'-jobview-'.$emmm_rs[12].'-'.$emmm_rs[0].'.html';
		}else{$url=$emmm_rs[9];$wapurl = $emmm_rs[9];}
			$rs[]=array (
				"i" => $i,
				"id" => $emmm_rs[0],
				"title" => $emmm_rs[1],
				"time" => $emmm_rs[2],
				"work" => $emmm_rs[3],
				"add" => $emmm_rs[4],
				"education" => $emmm_rs[5],
				"number" => $emmm_rs[6],
				"age" => $emmm_rs[7],
				"wage" => $emmm_rs[8],
				"url" => $url,
				"description" => $emmm_rs[10],
				"click" => $emmm_rs[11],
				"wapurl" => $wapurl,
				"column" => columncycle($emmm_rs[12]),
			);
			$i+=1;
		}
		break;
		
	}
		
		if($rs == ""){
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
