<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Linkimg"]));
	$query = $db -> insert("`emmm_link`","`COL_Linkname` = '".admin_sql($_POST["COL_Linkname"])."',`COL_Linkurl` = '".admin_sql($_POST["COL_Linkurl"])."',`COL_Linkclass` = '".admin_sql($_POST["COL_Linkclass"])."',`COL_Linkimg` = '".$emmm_xiegang."',`COL_Linksorting` = '".intval($_POST["COL_Linksorting"])."',`COL_Linkstate` = '".intval($_POST["COL_Linkstate"])."',`time` = '".date("Y-m-d H:i:s")."'","");
	$emmm_font = 1;
	$emmm_class = 'emmm_link.php?id=emmm';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

		$emmm_rs = $db -> select("`COL_Linkimg`","`emmm_link`","where id = ".intval($_GET['id']));
		if($emmm_rs[0] != ''){
			include './emmm_del.php';
			emmm_imgdel($emmm_rs[0]);
		}

		$query = $db -> del("emmm_link","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_link.php?id=emmm';
		require 'emmm_remind.php';

				
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_link.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}

function Linklist(){
	global $db;
	$query = $db -> listgo("id,COL_Linkname,COL_Linkurl,COL_Linkclass,COL_Linkimg,COL_Linkstate,time","`emmm_link`","order by COL_Linksorting asc");
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1],
			"url" => $emmm_rs[2],
			"class" => $emmm_rs[3],
			"img" => $emmm_rs[4],
			"kstate" => $emmm_rs[5],
			"time" => $emmm_rs[6]
		);
		$i = $i + 1;
	}
	return $rows;
}

Admin_click('友情链接管理','emmm_link.php?id=emmm');
$smarty->assign("Linklist",Linklist());
$smarty->display('emmm_link.html');
?>
