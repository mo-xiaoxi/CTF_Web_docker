<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
	
		$COL_Adpiaofui = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Adpiaofui"]));
		$COL_Adduilianli = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Adduilianli"]));
		$COL_Adduilianri = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Adduilianri"]));
		$query = $db -> update("`emmm_ad`","`COL_Adpiaofui` = '".$COL_Adpiaofui."',`COL_Adpiaofuu` = '".admin_sql($_POST["COL_Adpiaofuu"])."',`COL_Adyouxiat` = '".admin_sql($_POST["COL_Adyouxiat"])."',`COL_Adyouxiaf` = '".admin_sql($_POST["COL_Adyouxiaf"])."',`COL_Adduilianli` = '".$COL_Adduilianli."',`COL_Adduilianlu` = '".admin_sql($_POST["COL_Adduilianlu"])."',`COL_Adduilianri` = '".$COL_Adduilianri."',`COL_Adduilianru` = '".admin_sql($_POST["COL_Adduilianru"])."',`COL_Adstateo` = '".intval($_POST["COL_Adstateo"])."',`COL_Adstatet` = '".intval($_POST["COL_Adstatet"])."',`COL_Adstates` = '".intval($_POST["COL_Adstates"])."',`time` = '".date("Y-m-d H:i:s")."'","where id = 5");
		$emmm_font = 1;
		$emmm_class = 'emmm_ad.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
			
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_ad.php?id=emmm';
		require 'emmm_remind.php';
		
	}
}

function ADlist(){
	global $db;
	$id = '1,2,3,4,6';
	$query = $db -> listgo("id,COL_Adtitle,COL_Adpiaofui,COL_Adclass","`emmm_ad`","where id in($id) order by id asc");
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1],
			"img" => $emmm_rs[2],
			"position" => $emmm_rs[3]
		);
		$i = $i + 1;
	}
	return $rows;
}

Admin_click('广告管理','emmm_ad.php?id=emmm');
$smarty->assign("ADList",ADlist());
$emmm_rs = $db -> select("*","`emmm_ad`","where `id` = 5");
$smarty->assign('emmm_ad',$emmm_rs);
$smarty->display('emmm_ad.html');
?>
