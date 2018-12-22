<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 *-------------------------------
 * 列表操作类(2014-10-15)
 *-------------------------------
*/
if(!defined('EMMMNO')){exit('no!');}

//处理会员权限
function Userpower($listid = 1){
global $db,$emmm_adminfont,$Parameterse;
$power = $emmm_adminfont['power'];
$emmm_rs = $db -> select("`COL_Userright`,`COL_Weight`","`emmm_column`","where id = ".intval($listid));
$COL_Userright = $emmm_rs[0];
$COL_Weight = $emmm_rs[1];
if($Parameterse['weight'] == 1){
	if($COL_Userright == 0){
		$userright = '';
	}else{
		if(empty($_SESSION['username'])){
			exit("<script language=javascript> alert('".$power."');javascript:window.history.go(-1)</script>");
		}
		$usersql = $db -> select("`COL_Userclass`","`emmm_user`","where `COL_Useremail` = '".$_SESSION['username']."'");
		
		if (!strstr($COL_Userright,$usersql[0])){
			exit("<script language=javascript> alert('".$power."');javascript:window.history.go(-1)</script>");
		}
								
	}
}elseif($Parameterse['weight'] == 2){

	if($COL_Weight == 0){
		echo '';
	}else{
		if(empty($_SESSION['username'])){
			exit("<script language=javascript> alert('".$power."');javascript:window.history.go(-1)</script>");
		}
		$rs = $db -> select("`COL_Userclass`","`emmm_user`","where `COL_Useremail` = '".$_SESSION['username']."'");
		$rsrs = $db -> select("`COL_Userweight`","`emmm_userleve`","where `id` = ".$rs[0]);
		if($rsrs[0] < $COL_Weight){
			exit("<script language=javascript> alert('".$power."');javascript:window.history.go(-1)</script>");
		}
	}
}
	return ;
}


function Listname(){
	global $emmm,$db,$emmm_Language,$temptype,$listid; 
	if($temptype == 'club.html'){
		$where = "COL_Url = '".$emmm['webpath']."?".$emmm_Language."-".$temptype."'";
	}elseif($temptype == 'shop.html'){
		$where = "COL_Url = '".$emmm['webpath']."?".$emmm_Language."-".$temptype."'";
	}else{
		$where = "id = ".$listid;
	}
	$emmm_rs = $db -> select("COL_Columntitle,COL_Columntitleto,COL_Templist,COL_Tempview,COL_Briefing,COL_Img,COL_Userright,COL_Weight","`emmm_column`","where ".$where); 
	if(substr($emmm_rs[5],0,7) == 'http://'){$minimg = $emmm_rs[5];}elseif($emmm_rs[5] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg = $emmm['webpath'].$emmm_rs[5];}
	$rows = array(
		'title' => $emmm_rs[0],
		'titleto' => $emmm_rs[1],
		'listtemp' => $emmm_rs[2],
		'viewtemp' => $emmm_rs[3],
		'briefing' => $emmm_rs[4],
		'minimg' => $minimg,
		'userright' => $emmm_rs[6],
		'weight' => $emmm_rs[7],
	);
	return $rows;
}

function Crumbs($id = 0){
	if($id != 0){
		global $db,$emmm,$Parameterse; 
		$query = $db -> listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Model,COL_Url","`emmm_column`","order by id asc");
		static $list = array();
		while($emmm_rs = $db -> whilego($query)){
			if($emmm_rs[4] == 'weburl'){
				$weburl = $emmm_rs[5];
				$wapurl = $emmm_rs[5];
			}else{
				if($Parameterse['rewrite'] == 1){
				$weburl = $emmm['webpath'].$emmm_rs[2].'/'.$emmm_rs[4].'/'.$emmm_rs[0].'/';
				}else{
				$weburl = $emmm['webpath'].'?'.$emmm_rs[2].'-'.$emmm_rs[4].'-'.$emmm_rs[0].'.html';
				}
				$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[2].'-'.$emmm_rs[4].'-'.$emmm_rs[0].'.html';
			}
			if($emmm_rs[0]==$id){
				Crumbs($emmm_rs[1]);
				$list[] = array(
					'id' => $emmm_rs[0],
					'uid' => $emmm_rs[1],
					'lang' => $emmm_rs[2],
					'title' => $emmm_rs[3],
					'url' => $weburl,
					'wapurl' => $wapurl,
				);
			}
		}
		return $list;
	}else{
		return false;
	}
}

function uptext($params, $smarty){
global $db,$listid,$viewid,$emmm,$Parameterse; 
$form = isset($params['form'])?$params['form']:'article';
$font = isset($params['font'])?$params['font']:'上一条';
$noacc = isset($params['noacc'])?$params['noacc']:'暂无数据!';
$type = isset($params['type'])?$params['type']:'up';
$wapurl = isset($params['url'])?$params['url']:'web';

if ($form == 'article'){
	$sqltype='COL_Articletitle';
	$urltype='articleview';
}elseif ($form == 'product'){
	$sqltype='COL_Title';
	$urltype='productview';
}elseif ($form == 'photo'){
	$sqltype='COL_Phototitle';
	$urltype='photoview';
}elseif ($form == 'video'){
	$sqltype='COL_Videotitle';
	$urltype='videoview';
}elseif ($form == 'down'){
	$sqltype='COL_Downtitle';
	$urltype='downview';
}elseif ($form == 'job'){
	$sqltype='COL_Jobtitle';
	$urltype='jobview';
}

if($type == 'up'){
	$where = 'id < '.$viewid;
	$order = 'ORDER BY id DESC LIMIT 1';
}else{
	$where = 'id > '.$viewid;
	$order = 'ORDER BY id ASC LIMIT 1';
}

$emmm_rs = $db -> select("id,".$sqltype.",COL_Class,COL_Lang,COL_Url","`emmm_".$form."`","where ".$where." and COL_Class = ".intval($listid)." ".$order);

	if ($emmm_rs[4] == ''){
		if($wapurl == 'web'){
			if($Parameterse['rewrite'] == 1){
				$url = $emmm['webpath'].$emmm_rs[3].'/'.$urltype.'/'.$emmm_rs[2].'/'.$emmm_rs[0].'/';
			}else{
				$url = $emmm['webpath'].'?'.$emmm_rs[3].'-'.$urltype.'-'.$emmm_rs[2].'-'.$emmm_rs[0].'.html';
			}
		}elseif($wapurl == 'wap'){
			$url = $emmm['webpath'].'client/wap/?'.$emmm_rs[3].'-'.$urltype.'-'.$emmm_rs[2].'-'.$emmm_rs[0].'.html';
		}
	}else{$url=$emmm_rs[4];}
	if ($emmm_rs == ''){
		return $font.$noacc;
			}else{
		return $font.'<a href="'.$url.'" title="'.$emmm_rs[1].'">'.$emmm_rs[1].'</a>';
	}
}

//处理组图
function imgimg($arr = '',$name = ''){
if ($arr != ''){
		$img = explode("|",$arr);
		$name = explode("|",$name);
		$i = 1;
		$ii = 0;
		foreach($img as $op){
			$oparr[] = array(
				'i'=>$i,
				'img'=>$op,
				'name'=>$name[$ii],
			);
			$i += 1;
			$ii += 1;
		}
		return $oparr;
	}else{
		return ;
	}
}

function booksection(){
	global $db,$emmm,$Parameterse,$emmm_Language;
	$query = $db -> listgo("id,COL_Booksectiontitle,COL_Booksectioncontent,COL_Booksectionlanguage,time","`emmm_booksection`","where `COL_Booksectionlanguage` = '".$emmm_Language."' order by COL_Booksectionsorting asc,id desc"); 
	$rows = array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		if($Parameterse['rewrite'] == 1){
			$url = $emmm['webpath'].$emmm_rs[3].'/clubview/'.$emmm_rs[0].'/';
		}else{
			$url = $emmm['webpath'].'?'.$emmm_rs[3].'-clubview-'.$emmm_rs[0].'.html';
		}
		$wapurl = $emmm['webpath'].'client/wap/?'.$emmm_rs[3].'-clubview-'.$emmm_rs[0].'.html';
		$rows[] = array(
			'i' => $i,
			'id' => $emmm_rs[0],
			'title' => $emmm_rs[1],
			'content' => $emmm_rs[2],
			'lang' => $emmm_rs[3],
			'time' => $emmm_rs[4],
			'url' => $url,
			'number' => clubnumber($emmm_rs[0],"club"),
			'wapurl' => $wapurl,
		);
		$i += 1;
	}
	return $rows;
}

//处理关健词
function keywords_tag($keywords = ''){
	global $Parameterse;
	if($Parameterse['keywordsk'] == 1){
		if($keywords == ''){
			$rows = $Parameterse['keywords'];
		}else{
			$rows = $keywords;
		}
	}elseif($Parameterse['keywordsk'] == 2){
		$rows = $keywords;
	}elseif($Parameterse['keywordsk'] == 3){
		$rows = $keywords.','.$Parameterse['keywords'];
	}
	return $rows;
}

function videoplay($videourl='',$videowidth='',$videoheight='',$videotype=''){ 
	global $emmm;
	if ($videotype == 'SWF'){
		$rows = '<embed src="'.$videourl.'" type="application/x-shockwave-flash" width="'.$videowidth.'" height="'.$videoheight.'" quality="high" />';
	}elseif ($videotype == 'FLV'){
		$rows = '<embed src="'.$emmm['webpath'].'function/plugs/ckplayer/ckplayer/ckplayer.swf" flashvars="f='.$videourl.'&p=2" quality="high" width="'.$videowidth.'" height="'.$videoheight.'" align="middle" allowScriptAccess="always" allowFullscreen="true" type="application/x-shockwave-flash"></embed>';
	}elseif ($videotype == 'MP4'){
		$rows = '
				<div id="emmm_video"></div>
				<script type="text/javascript" src="'.$emmm['webpath'].'function/plugs/ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
				<script type="text/javascript">
				var flashvars={
					f:"'.$videourl.'",
					c:0
				};
				var params={bgcolor:"#FFF",allowFullScreen:true,allowScriptAccess:"always",wmode:"transparent"};
				var video=["'.$videourl.'->video/mp4"];
				CKobject.embed("'.$emmm['webpath'].'function/plugs/ckplayer/ckplayer/ckplayer.swf","emmm_video","ckplayer_a1","'.$videowidth.'","'.$videoheight.'",true,flashvars,video,params);
				</script>
		';
	}
	return $rows;
}

Userpower($listid);
$Listname = listname();
$smarty->assign('listname',$Listname);
$smarty->assign('crumbs',Crumbs($listid));
$smarty->registerPlugin("function","uptext", "uptext");
$smarty->assign('club',booksection());
?>
