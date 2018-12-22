<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	$query = $db -> insert("`emmm_qq`","`COL_QQname` = '".admin_sql($_POST["COL_QQname"])."',`COL_QQnumber` = '".admin_sql($_POST["COL_QQnumber"])."',`COL_QQclass` = '".admin_sql($_POST["COL_QQclass"])."',`COL_QQsorting` = '".admin_sql($_POST["COL_QQsorting"])."',`time` = '".date("Y-m-d H:i:s")."'","");
	$emmm_font = 1;
	$emmm_class = 'emmm_qq.php?id=emmm';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){		

		$query = $db -> del("emmm_qq","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_qq.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_qq.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}

function QQlist(){
	global $db;
	$query = $db -> listgo("id,COL_QQname,COL_QQnumber,COL_QQclass,COL_QQsorting,time","`emmm_qq`","order by COL_QQsorting asc");
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1],
			"number" => $emmm_rs[2],
			"class" => $emmm_rs[3],
			"sorting" => $emmm_rs[4],
			"time" => $emmm_rs[5]
		);
	$i = $i + 1;
	}
	return $rows;
}

Admin_click('浮动客服管理','emmm_qq.php?id=emmm');
$smarty->assign("QQlist",QQlist());
$smarty->display('emmm_qq.html');
?>
