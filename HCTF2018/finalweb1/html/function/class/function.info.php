<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

function smarty_function_info($params, &$smarty){
global $db,$emmm_access,$emmm,$emmm_cache;
extract($params);
$type = isset($params['type'])?$params['type']:'about';
$id = isset($params['id'])?$params['id']:0;
$html = isset($params['html'])?$params['html']:1;
$size = isset($params['size'])?$params['size']:150;
$width = isset($params['width'])?$params['width']:200;
$height = isset($params['height'])?$params['height']:200;
$auto = isset($params['auto'])?$params['auto']:2;
$fsomd5 = md5($id.$html.$size.$width.$height);

	switch($type){
	
	case "about":
	if(!is_file(WEB_ROOT.'/'.$emmm_cache.'about_'.$fsomd5.'.txt')){
	$emmm_rs = $db -> select("id,COL_Columntitle,COL_About","`emmm_column`","where COL_Model = 'about' and id = ".$id); 
		if ($html == 1){
		$content = strip_tags($emmm_rs[2]);
		$content = mb_substr($content,0,$size,'utf-8');
		}elseif ($html == 2){
		$content = $emmm_rs[2];
		}
	emmm_file($emmm_cache.'about_'.$fsomd5.'.txt',$content,1);
    return $content;
	}else{
	return file_get_contents(WEB_ROOT.'/'.$emmm_cache.'about_'.$fsomd5.'.txt');
	}
	break;
	
	case "video":
	if(!is_file(WEB_ROOT.'/'.$emmm_cache.'video_'.$fsomd5.'.txt')){
	$emmm_rs = $db-> select("COL_Videovurl,COL_Videoformat","`emmm_video`","where id = ".$id); 
	if ($emmm_rs[1] == 'SWF'){
		
		$content = '<embed src="'.$emmm_rs[0].'" type="application/x-shockwave-flash" width="'.$width.'" height="'.$height.'" quality="high" />';
		
	}elseif ($emmm_rs[1] == 'FLV'){
		
		$content = '<embed src="'.$emmm['webpath'].'function/plugs/ckplayer/ckplayer/ckplayer.swf" flashvars="f='.$emmm_rs[0].'&p=2" quality="high" width="'.$width.'" height="'.$height.'" align="middle" allowScriptAccess="always" allowFullscreen="true" type="application/x-shockwave-flash"></embed>';
		
	}elseif ($emmm_rs[1] == 'MP4'){
		
		$content = '
				<div id="emmm_video"></div>
				<script type="text/javascript" src="'.$emmm['webpath'].'function/plugs/ckplayer/ckplayer/ckplayer.js" charset="utf-8"></script>
				<script type="text/javascript">
				var flashvars={
					f:"'.$emmm_rs[0].'",
					c:0
				};
				var params={bgcolor:"#FFF",allowFullScreen:true,allowScriptAccess:"always",wmode:"transparent"};
				var video=["'.$emmm_rs[0].'->video/mp4"];
				CKobject.embed("'.$emmm['webpath'].'function/plugs/ckplayer/ckplayer/ckplayer.swf","emmm_video","ckplayer_a1","'.$width.'","'.$height.'",true,flashvars,video,params);
				</script>
		';
	}
	emmm_file($emmm_cache.'video_'.$fsomd5.'.txt',$content,1);
    return $content;
	}else{
	return file_get_contents(WEB_ROOT.'/'.$emmm_cache.'video_'.$fsomd5.'.txt');
	}
	break;
	
	}
}
?>
