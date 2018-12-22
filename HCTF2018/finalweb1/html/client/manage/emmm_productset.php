<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	$query = $db -> update("`emmm_productset`","`COL_Pattern` = '".intval($_POST["COL_Pattern"])."',`COL_Scheme` = '".intval(0)."',`COL_Stock` = '".intval($_POST["COL_Stock"])."',`COL_buy` = '".intval($_POST["COL_buy"])."',`COL_Sendout` = '".admin_sql($_POST["COL_Sendout"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Delivery` = '".admin_sql($_POST["COL_Delivery"])."',`COL_Userbuysms` = ".intval($_POST["COL_Userbuysms"])."","where id = 1");
	$emmm_font = 1;
	$emmm_class = 'emmm_productset.php?id=emmm';
	require 'emmm_remind.php';
			
}

$emmm_rs = $db -> select("*","`emmm_productset`","where `id` = 1");
$smarty->assign('emmm_set',$emmm_rs);
$smarty->display('emmm_productset.html');
?>
