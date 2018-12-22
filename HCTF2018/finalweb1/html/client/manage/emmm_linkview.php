<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
	
		$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Linkimg"]));
		$query = $db -> update("`emmm_link`","`COL_Linkname` = '".admin_sql($_POST["COL_Linkname"])."',`COL_Linkurl` = '".admin_sql($_POST["COL_Linkurl"])."',`COL_Linkclass` = '".admin_sql($_POST["COL_Linkclass"])."',`COL_Linkimg` = '".$emmm_xiegang."',`COL_Linksorting` = '".intval($_POST["COL_Linksorting"])."',`COL_Linkstate` = '".intval($_POST["COL_Linkstate"])."',`time` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_link.php?id=emmm';
		require 'emmm_remind.php';

	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_link.php?id=emmm';
		require 'emmm_remind.php';
		
	}			
}

$emmm_rs = $db -> select("*","`emmm_link`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_link',$emmm_rs);
$smarty->display('emmm_linkview.html');
?>
