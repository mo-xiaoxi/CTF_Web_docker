<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php'; 

if (isset($_GET["emmm_cms"]) == "edit"){

	$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Weblogo"]));
	
	$query = $db -> update("`emmm_wap`","`COL_Website` = '".admin_sql($_POST["COL_Website"])."',`COL_Weblogo` = '".$emmm_xiegang."',`COL_Webkeywords` = '".admin_sql($_POST["COL_Webkeywords"])."',`COL_Webdescriptions` = '".admin_sql($_POST["COL_Webdescriptions"])."',`COL_Weburl` = '".admin_sql($_POST["COL_Weburl"])."'","where id = 1");
	
	$emmm_font = 1;
	$emmm_class = 'emmm_wap.php';
	require 'emmm_remind.php';

}

Admin_click('手机网站设置','emmm_wap.php');
$emmm_rs = $db -> select("*","`emmm_wap`","where `id` = 1");
$smarty->assign('emmm_wap',$emmm_rs);
$smarty->display('emmm_wap.html');
?>
