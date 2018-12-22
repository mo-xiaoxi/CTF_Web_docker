<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php'; 

if (isset($_GET["emmm_cms"]) == "edit"){

	$query = $db -> update("`emmm_webdeploy`","`COL_Webrewrite` = '".admin_sql($_POST["COL_Webrewrite"])."',`COL_Webkeywords` = '".admin_sql($_POST["COL_Webkeywords"])."',`COL_Webkeywordsto` = '".admin_sql($_POST["COL_Webkeywordsto"])."',`COL_Webdescriptions` = '".admin_sql($_POST["COL_Webdescriptions"])."'","where id = 1");
	$emmm_font = 1;
	$emmm_class = 'emmm_webseo.php';
	require 'emmm_remind.php';

}

$emmm_rs = $db -> select("*","`emmm_webdeploy`","where `id` = 1");
$rows = array(
	'COL_Weboff' => $emmm_rs['COL_Weboff'],
	'COL_Webofftext' => $emmm_rs['COL_Webofftext'],
	'COL_Webrewrite' => $emmm_rs['COL_Webrewrite'],
	'COL_Webpage' => explode(",",$emmm_rs['COL_Webpage']),
	'COL_Webkeywords' => $emmm_rs['COL_Webkeywords'],
	'COL_Webkeywordsto' => $emmm_rs['COL_Webkeywordsto'],
	'COL_Webdescriptions' => $emmm_rs['COL_Webdescriptions'],
);
$smarty->assign('emmm_web',$rows);
$smarty->display('emmm_webseo.html');
?>
