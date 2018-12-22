<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
	
		$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Bannerimg"]));
		$emmm_text = implode("|",$_POST['COL_Bannertext']);
		$query = $db -> update("`emmm_banner`","`COL_Bannerimg` = '".$emmm_xiegang."',`COL_Bannertitle` = '".admin_sql($_POST["COL_Bannertitle"])."',`COL_Bannerurl` = '".admin_sql($_POST["COL_Bannerurl"])."',`COL_Bannerlang` = '".admin_sql($_POST["COL_Bannerlang"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Bannerclass` = '".admin_sql($_POST["COL_Bannerclass"])."',`COL_Bannertext` = '".$emmm_text."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_banner.php?id=emmm';
		require 'emmm_remind.php';
		
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_banner.php?id=emmm';
		require 'emmm_remind.php';
		
	}			
}

function Langlist(){
	global $db;
	$query = $db -> listgo("id,COL_Lang,COL_Font,COL_Default","`emmm_lang`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"lang" => $emmm_rs[1],
			"font" => $emmm_rs[2],
			"default" => $emmm_rs[3]
		);
	}
	return $rows;
}

$emmm_rs = $db -> select("*","`emmm_banner`","where `id` = ".intval($_GET['id']));
$emmm_text = explode("|",$emmm_rs['COL_Bannertext']);
$smarty->assign('emmm_banner',$emmm_rs);
$smarty->assign('emmm_text',$emmm_text);
$smarty->assign('langlist',Langlist());
$smarty->display('emmm_bannerview.html');
?>
