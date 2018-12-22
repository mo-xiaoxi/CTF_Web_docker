<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){

		$query = $db -> update("`emmm_qq`","`COL_QQname` = '".admin_sql($_POST["COL_QQname"])."',`COL_QQnumber` = '".admin_sql($_POST["COL_QQnumber"])."',`COL_QQclass` = '".admin_sql($_POST["COL_QQclass"])."',`COL_QQsorting` = '".admin_sql($_POST["COL_QQsorting"])."',`time` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_qq.php?id=emmm';
		require 'emmm_remind.php';
		
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_qq.php?id=emmm';
		require 'emmm_remind.php';
		
	}
			
}

$emmm_rs = $db -> select("*","`emmm_qq`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_qq',$emmm_rs);
$smarty->display('emmm_qqview.html');
?>
