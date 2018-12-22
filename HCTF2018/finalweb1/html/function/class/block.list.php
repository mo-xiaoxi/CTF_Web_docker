<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

function smarty_block_list($params, $content, &$smarty, &$repeat){
global $emmm_access,$emmm,$_page,$db,$Parameterse,$emmm_cache;
$form = isset($params['form'])?$params['form']:"article";
$id = isset($params['id'])?$params['id']:0;
$sql = isset($params['sql'])?$params['sql']:'';

	extract($params);  
	if (!isset ( $params['name'] )){
		$return = 'list';
	}else{
		$return = $params['name'];
	}
	
	if(file_exists(WEB_ROOT.'/'.$emmm_cache.'/c_'.$id.'.txt')){
		$emmmtotal['tiaoshu'] = file_get_contents(WEB_ROOT.'/'.$emmm_cache.'/c_'.$id.'.txt');
	}else{
		if($form != 'product'){
			$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_".$form."`","where `COL_Class`= ".intval($id)." && `COL_Callback` = 0 ".$sql);
		}else{
			$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_".$form."`","where COL_Class`= ".intval($id)." && `COL_Down` = 2 ".$sql);
		}
		$emmmtotal = $db -> whilego($emmmtotal);
		emmm_file($emmm_cache.'c_'.$id.'.txt',$emmmtotal['tiaoshu'],2);
	}
	
	if(!isset($params['type'])){
	$type = "COL_Sorting asc";
	}elseif($params['type'] == 'COL_Webmarket'){
	$type = $params['type'].' asc';
	}elseif($params['type'] == 'COL_Click'){
	$type = $params['type'].' desc';
	}
	
	if($form == 'article'){$listpage = $Parameterse['page'][0];}
	if($form == 'product'){$listpage = $Parameterse['page'][1];}
	if($form == 'photo'){$listpage = $Parameterse['page'][2];}
	if($form == 'video'){$listpage = $Parameterse['page'][3];}
	if($form == 'down'){$listpage = $Parameterse['page'][4];}
	if($form == 'job'){$listpage = $Parameterse['page'][5];}
	
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;

    if(!isset($smarty->block_data))
	$smarty->block_data = array();	
		
	$dataindex = md5(__FUNCTION__ . md5(serialize($params)));  
    $dataindex = substr($dataindex,0,16);

    if (@!$smarty->block_data[$dataindex]){
	switch($form){
		case "article":
		$query = $db -> listgo("id,COL_Articletitle,COL_Articleauthor,COL_Articlesource,time,COL_Lang,COL_Url,COL_Description,COL_Click,COL_Class,COL_Minimg","`emmm_".$form."`","where `COL_Class` = ".intval($id)." && `COL_Callback` = 0 ".$sql." order by COL_Sorting asc,id desc LIMIT ".$start.",".$listpage);
		
		$rows = $db -> rows($query); 
		if(!$rows){
			$rs = "";
		}else{
			$rs = array();
			$i = 1;
			while($emmm_rs = $db -> whilego($query)){
			if ($emmm_rs[6] == ''){
			if($Parameterse['rewrite'] == 1){
			$url = $emmm['webpath'].$emmm_rs[5].'/articleview/'.$emmm_rs[9].'/'.$emmm_rs[0].'/';
			}else{
			$url = $emmm['webpath'].'?'.$emmm_rs[5].'-articleview-'.$emmm_rs[9].'-'.$emmm_rs[0].'.html';
			}
			$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[5].'-articleview-'.$emmm_rs[9].'-'.$emmm_rs[0].'.html';
			}else{$url = $emmm_rs[6];$wapurl = $emmm_rs[6];}
			if(substr($emmm_rs[10],0,7) == 'http://' || substr($emmm_rs[10],0,8) == 'https://'){$minimg = $emmm_rs[10];}elseif($emmm_rs[10] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg = $emmm['webpath'].$emmm_rs[10];}
				$rs[]=array (
					"i" => $i,
					"id" => $emmm_rs[0],
					"title" => $emmm_rs[1],
					"author" => $emmm_rs[2],
					"source" => $emmm_rs[3],
					"time" => $emmm_rs[4],
					"description" => $emmm_rs[7],
					"url" => $url,
					"click" => $emmm_rs[8],
					"minimg" => $minimg,
					"wapurl" => $wapurl,
					"column" => columncycle($emmm_rs[9]),
				);
				$i+=1;
			}
		}
		break;
		case "product":
		$query = $db -> listgo("id,COL_Title,COL_Number,COL_Goodsno,COL_Brand,COL_Market,COL_Webmarket,COL_Stock,COL_Minimg,COL_Maximg,COL_Lang,COL_Url,COL_Description,COL_Click,time,COL_Class,COL_Integral,COL_Integralexchange,COL_Freight","`emmm_".$form."`","where `COL_Class` = ".intval($id)." && `COL_Down` = 2 ".$sql." order by $type,id desc LIMIT ".$start.",".$listpage);
		
		$rows = $db -> rows($query); 
		if(!$rows){
			$rs = "";
		}else{
			$rs = array();
			$i = 1;
			while($emmm_rs = $db -> whilego($query)){
			if(substr($emmm_rs[8],0,7) == 'http://' || substr($emmm_rs[8],0,8) == 'https://'){$minimg = $emmm_rs[8];}elseif($emmm_rs[8] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg=$emmm['webpath'].$emmm_rs[8];}
			if(substr($emmm_rs[9],0,7) == 'http://' || substr($emmm_rs[9],0,8) == 'https://'){$maximg = $emmm_rs[9];}elseif($emmm_rs[9] == ''){$maximg = $emmm['webpath'].'skin/noimage.png';}else{$maximg=$emmm['webpath'].$emmm_rs[9];}
			if ($emmm_rs[11] == ''){
			if($Parameterse['rewrite'] == 1){
			$url = $emmm['webpath'].$emmm_rs[10].'/productview/'.$emmm_rs[15].'/'.$emmm_rs[0].'/';
			}else{
			$url = $emmm['webpath'].'?'.$emmm_rs[10].'-productview-'.$emmm_rs[15].'-'.$emmm_rs[0].'.html';
			}
			$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[10].'-productview-'.$emmm_rs[15].'-'.$emmm_rs[0].'.html';
			}else{$url = $emmm_rs[11];$wapurl = $emmm_rs[11];}
			if($emmm_rs[18] == 1){$freight = '<span style="padding:1px 5px 1px 5px; background:#F90; color:#FFF; border-radius:5px;">包邮</span>';}else{$freight = '';}
				$rs[] = array (
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
						"column" => columncycle($emmm_rs[15]),
						"integral" => $emmm_rs[16],
						"integralexchange" => $emmm_rs[17],
						"total" => clubnumber($emmm_rs[0],"zxl"),
						"totalday" => clubnumber($emmm_rs[0],"yxl"),
						"freight-tag" => $freight,
				);
				$i+=1;
			}
		}
		break;
		case "photo":
		$query = $db -> listgo("id,COL_Phototitle,time,COL_Photocminimg,COL_Lang,COL_Url,COL_Description,COL_Click,COL_Class","`emmm_".$form."`","where `COL_Class` = ".intval($id)." && `COL_Callback` = 0 ".$sql." order by COL_Sorting asc,id desc LIMIT ".$start.",".$listpage);
		
		$rows = $db -> rows($query); 
		if(!$rows){
			$rs = "";
		}else{
			$rs = array();
			$i = 1;
			while($emmm_rs = $db -> whilego($query)){
			if(substr($emmm_rs[3],0,7) == 'http://' || substr($emmm_rs[3],0,8) == 'https://'){$minimg = $emmm_rs[3];}elseif($emmm_rs[3] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg = $emmm['webpath'].$emmm_rs[3];}
			if ($emmm_rs[5] == ''){
			if($Parameterse['rewrite'] == 1){
			$url = $emmm['webpath'].$emmm_rs[4].'/photoview/'.$emmm_rs[8].'/'.$emmm_rs[0].'/';
			}else{
			$url = $emmm['webpath'].'?'.$emmm_rs[4].'-photoview-'.$emmm_rs[8].'-'.$emmm_rs[0].'.html';
			}
			$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[4].'-photoview-'.$emmm_rs[8].'-'.$emmm_rs[0].'.html';
			}else{$url = $emmm_rs[5];$wapurl = $emmm_rs[5];}
				$rs[] = array (
					"i" => $i,
					"id" => $emmm_rs[0],
					"title" => $emmm_rs[1],
					"time" => $emmm_rs[2],
					"minimg" => $minimg,
					"url" => $url,
					"description" => $emmm_rs[6],
					"click" => $emmm_rs[7],
					"wapurl" => $wapurl,
					"column" => columncycle($emmm_rs[8]),
				);
				$i+=1;
			}
		}
		break;
		case "video":
		$query = $db -> listgo("id,COL_Videotitle,time,COL_Videoimg,COL_Lang,COL_Url,COL_Description,COL_Click,COL_Class","`emmm_".$form."`","where `COL_Class` = ".intval($id)." && `COL_Callback` = 0 ".$sql." order by COL_Sorting asc,id desc LIMIT ".$start.",".$listpage);
		
		$rows = $db -> rows($query); 
		if(!$rows){
			$rs = "";
		}else{
			$rs = array();
			$i = 1;
			while($emmm_rs = $db -> whilego($query)){
			if(substr($emmm_rs[3],0,7) == 'http://' || substr($emmm_rs[3],0,8) == 'https://'){$minimg = $emmm_rs[3];}elseif($emmm_rs[3] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg = $emmm['webpath'].$emmm_rs[3];}
			if ($emmm_rs[5] == ''){
			if($Parameterse['rewrite'] == 1){
			$url = $emmm['webpath'].$emmm_rs[4].'/videoview/'.$emmm_rs[8].'/'.$emmm_rs[0].'/';
			}else{
			$url = $emmm['webpath'].'?'.$emmm_rs[4].'-videoview-'.$emmm_rs[8].'-'.$emmm_rs[0].'.html';
			}
			$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[4].'-videoview-'.$emmm_rs[8].'-'.$emmm_rs[0].'.html';
			}else{$url = $emmm_rs[5];$wapurl = $emmm_rs[5];}
				$rs[] = array (
					"i" => $i,
					"id" => $emmm_rs[0],
					"title" => $emmm_rs[1],
					"time" => $emmm_rs[2],
					"minimg" => $minimg,
					"url" => $url,
					"description" => $emmm_rs[6],
					"click" => $emmm_rs[7],
					"wapurl" => $wapurl,
					"column" => columncycle($emmm_rs[8]),
				);
				$i+=1;
			}
		}
		break;
		case "down":
		$query = $db -> listgo("id,COL_Downtitle,time,COL_Downimg,COL_Downdurl,COL_Downempower,COL_Downtype,COL_Downlang,COL_Downsize,COL_Downmake,COL_Lang,COL_Url,COL_Description,COL_Click,COL_Class,COL_Random","`emmm_".$form."`","where `COL_Class` = ".intval($id)." && `COL_Callback` = 0 ".$sql." order by COL_Sorting asc,id desc LIMIT ".$start.",".$listpage);
		
		$rows = $db -> rows($query); 
		if(!$rows){
			$rs = "";
		}else{
			$rs = array();
			$i = 1;
			while($emmm_rs = $db -> whilego($query)){
			if(substr($emmm_rs[3],0,7) == 'http://' || substr($emmm_rs[3],0,8) == 'https://'){$minimg = $emmm_rs[3];}elseif($emmm_rs[3] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg=$emmm['webpath'].$emmm_rs[3];}
			if ($emmm_rs[11] == ''){
			if($Parameterse['rewrite'] == 1){
			$url = $emmm['webpath'].$emmm_rs[10].'/downview/'.$emmm_rs[14].'/'.$emmm_rs[0].'/';
			}else{
			$url = $emmm['webpath'].'?'.$emmm_rs[10].'-downview-'.$emmm_rs[14].'-'.$emmm_rs[0].'.html';
			}
			$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[10].'-downview-'.$emmm_rs[14].'-'.$emmm_rs[0].'.html';
			}else{$url = $emmm_rs[11];$wapurl = $emmm_rs[11];}
				$rs[] = array (
					"i" => $i,
					"id" => $emmm_rs[0],
					"title" => $emmm_rs[1],
					"time" => $emmm_rs[2],
					"minimg" => $minimg,
					"downurl" => $emmm['webpath'].'function/emmm_play.class.php?emmm_down='.$emmm_rs[0].'&code='.$emmm_rs[15],
					"downurltrue" => $emmm_rs[4],
					"empower" => $emmm_rs[5],
					"type" => $emmm_rs[6],
					"lang" => $emmm_rs[7],
					"size" => $emmm_rs[8],
					"make" => $emmm_rs[9],
					"url" => $url,
					"description" => $emmm_rs[12],
					"click" => $emmm_rs[13],
					"wapurl" => $wapurl,
					"column" => columncycle($emmm_rs[14]),
				);
				$i+=1;
			}
		}
		break;
		case "job":
		$query = $db -> listgo("`id`, `COL_Jobtitle`, `time`, `COL_Jobwork`, `COL_Jobadd`, `COL_Jobnature`, `COL_Jobexperience`, `COL_Jobeducation`, `COL_Jobnumber`, `COL_Jobage`, `COL_Jobwelfare`, `COL_Jobwage`, `COL_Jobcontact`, `COL_Jobtel`, `COL_Jobcontent`, `COL_Class`, `COL_Lang`, `COL_Url`, `COL_Description`, `COL_Click`","`emmm_".$form."`","where `COL_Class` = ".intval($id)." && `COL_Callback` = 0 ".$sql." order by COL_Sorting asc,id desc LIMIT ".$start.",".$listpage);
		
		$rows = $db -> rows($query); 
		if(!$rows){
			$rs = "";
		}else{
			$rs = array();
			$i = 1;
			while($emmm_rs = $db -> whilego($query)){
			if ($emmm_rs[17] == ''){
			if($Parameterse['rewrite'] == 1){
			$url = $emmm['webpath'].$emmm_rs[16].'/jobview/'.$emmm_rs[15].'/'.$emmm_rs[0].'/';
			}else{
			$url = '?'.$emmm_rs[16].'-jobview-'.$emmm_rs[15].'-'.$emmm_rs[0].'.html';
			}
			$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[16].'-jobview-'.$emmm_rs[15].'-'.$emmm_rs[0].'.html';
			}else{$url = $emmm_rs[17];$wapurl = $emmm_rs[17];}
				$rs[] = array (
					"i" => $i,
					"id" => $emmm_rs[0],
					"title" => $emmm_rs[1],
					"time" => $emmm_rs[2],
					"work" => $emmm_rs[3],
					"add" => $emmm_rs[4],
					"nature" => $emmm_rs[5],
					"experience" => $emmm_rs[6],
					"education" => $emmm_rs[7],
					"number" => $emmm_rs[8],
					"age" => $emmm_rs[9],
					"welfare" => $emmm_rs[10],
					"wage" => $emmm_rs[11],
					"contact" => $emmm_rs[12],
					"tel" => $emmm_rs[13],
					"content" => $emmm_rs[14],
					"url" => $url,
					"description" => $emmm_rs[18],
					"click" => $emmm_rs[19],
					"wapurl" => $wapurl,
					"column" => columncycle($emmm_rs[15]),
				);
				$i+=1;
			}
		}
		break;
		
	}

	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
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
