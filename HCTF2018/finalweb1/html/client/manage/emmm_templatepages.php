<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php'; 

if (isset($_GET["emmm_cms"]) == "edit"){

	$query = $db -> update("`emmm_webdeploy`","`COL_Pagestype` = '".intval($_POST["COL_Pagestype"])."',`COL_Pages` = '".admin_sql($_POST["COL_Pages"])."',`COL_Pagefont` = '".admin_sql($_POST["COL_Pagefont"])."'","where id = 1");
	$emmm_font = 1;
	$emmm_class = 'emmm_templatepages.php';
	require 'emmm_remind.php';

}

$emmm_rs = $db -> select("COL_Pagestype,COL_Pages,COL_Pagefont","`emmm_webdeploy`","where `id` = 1");
$rows = array(
	'COL_Pagestype' => $emmm_rs[0],
	'COL_Pages' => $emmm_rs[1],
	'COL_Pagefont' => $emmm_rs[2], 
);
$smarty->assign('emmm_web',$rows);
$smarty->display('emmm_templatepages.html');
?>
