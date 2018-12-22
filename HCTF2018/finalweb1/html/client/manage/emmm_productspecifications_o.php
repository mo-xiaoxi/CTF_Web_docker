<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){

		$query = $db -> update("`emmm_productspecifications`","`COL_Title` = '".admin_sql($_POST["COL_Title"])."',`COL_Titleto` = '".admin_sql($_POST["COL_Titleto"])."',`COL_Value` = '".admin_sql($_POST["COL_Value"])."',`COL_Class` = '".admin_sql($_POST["COL_Class"])."',`COL_Sorting` = '".admin_sql($_POST["COL_Sorting"])."',`time` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_productspecifications.php?id=emmm';
		require 'emmm_remind.php';

	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_productspecifications.php?id=emmm';
		require 'emmm_remind.php';
		
	}
			
}

$emmm_rs = $db -> select("*","`emmm_productspecifications`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_productspecifications',$emmm_rs);
$smarty->display('emmm_productspecifications_o.html');
?>
