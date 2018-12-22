<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	$query = $db -> update("`emmm_watermark`","`COL_Watermarkimg` = '".admin_sql($_POST["COL_Watermarkimg"])."',`COL_Watermarkfont` = '".admin_sql($_POST["COL_Watermarkfont"])."',`COL_Watermarkcolor` = '".admin_sql($_POST["COL_Watermarkcolor"])."',`COL_Watermarksize` = '".admin_sql($_POST["COL_Watermarksize"])."',`COL_Watermarkposition` ='".admin_sql($_POST["COL_Watermarkposition"])."',`COL_Watermarkoff` ='".admin_sql($_POST["COL_Watermarkoff"])."'","where id = 1");
	$emmm_font = 1;
	$emmm_class = 'emmm_watermark.php?id=emmm';
	require 'emmm_remind.php';
	
}

Admin_click('图片水印设置','emmm_watermark.php?id=emmm');
$emmm_rs = $db -> select("*","`emmm_watermark`","where `id` = 1");
$smarty->assign('emmm_watermark',$emmm_rs);
$smarty->display('emmm_watermark.html');
?>
