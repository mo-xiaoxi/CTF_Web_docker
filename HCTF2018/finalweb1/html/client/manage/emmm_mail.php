<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){

		$query = $db -> update("`emmm_mail`","`COL_Mailsmtp` = '".admin_sql($_POST["COL_Mailsmtp"])."',`COL_Mailport` = '".admin_sql($_POST["COL_Mailport"])."',`COL_Mailusermail` = '".admin_sql($_POST["COL_Mailusermail"])."',`COL_Mailuser` = '".admin_sql($_POST["COL_Mailuser"])."',`COL_Mailpass` = '".admin_sql($_POST["COL_Mailpass"])."',`COL_Mailsubject` = '".admin_sql($_POST["COL_Mailsubject"])."',`COL_Mailcontent` = '".admin_sql($_POST["COL_Mailcontent"])."',`COL_Mailtype` = '".admin_sql($_POST["COL_Mailtype"])."',`COL_Mailclass` = '".intval($_POST["COL_Mailclass"])."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_mail.php?id=emmm';
		require 'emmm_remind.php';
		
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_mail.php?id=emmm';
		require 'emmm_remind.php';
		
	}
}

function Maillist(){
	global $db;
	$query = $db -> listgo("id,COL_Mailusermail,COL_Mailtitle,COL_Mailclass","`emmm_mail`","order by id asc");
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"user" => $emmm_rs[1],
			"title" => $emmm_rs[2],
			"class" => $emmm_rs[3]
		);
	$i = $i + 1;
	}
	return $rows;
}

Admin_click('系统邮件设置','emmm_mail.php?id=emmm');
$smarty->assign("Maillist",Maillist());
$emmm_rs = $db -> select("*","`emmm_mail`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_mail',$emmm_rs);
$smarty->display('emmm_mail.html');
?>
