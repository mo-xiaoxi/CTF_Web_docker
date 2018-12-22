<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';

if(isset($_GET["emmm_cms"]) == ""){
	
	echo '';
	
}elseif ($_GET["emmm_cms"] == "edit"){
	
	$query = $db -> update("`emmm_temp`","`COL_Temppath` = '".admin_sql($_GET["temp"])."'","where id = 1");
	$emmm_font = 1;
	$emmm_class = 'emmm_template.php?id=emmm';
	require 'emmm_remind.php';
	
}

function myscandir($path){

	$mydir=dir($path);
	
	$rows=array();
	while($file=$mydir->read()){
		$p=$path.'/'.$file;
		$f=mb_convert_encoding($p,"utf-8","gb2312");
		if(file_exists($f.'/Author.tpl')){
		$tempfile = $f.'/Author.tpl';
		}else{
		$tempfile = '../../skin/Author.tpl';
		}
		if(($file!=".") AND ($file!="..")){
			$rows[] = array('url'=>$f,'img'=>$f.'/index.jpg','author'=>$tempfile);
		}
	}  
	return $rows;
}
	
	
Admin_click('模板安装使用','emmm_template.php?id=emmm');
$emmm_rs = $db -> select("*","`emmm_temp`","where `id` = 1");
$smarty->assign('emmm_temp',$emmm_rs);
$smarty->assign("myscandir",myscandir('../../templates'));
$smarty->display('emmm_template.html');
?>
