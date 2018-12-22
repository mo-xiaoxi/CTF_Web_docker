<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Img"]));
	$query = $db -> insert("`emmm_productcp`","`COL_Brand` = '".admin_sql($_POST["COL_Brand"])."',`COL_Img` = '".$emmm_xiegang."',`COL_Class` = '2',`time` = '".date("Y-m-d H:i:s")."'","");
	$emmm_font = 1;
	$emmm_class = 'emmm_productp.php?id=emmm';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
	
		$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Img"]));
		$query = $db -> update("`emmm_productcp`","`COL_Brand` = '".admin_sql($_POST["COL_Brand"])."',`COL_Img` = '".$emmm_xiegang."',`COL_Class` = '2',`time` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_productp.php?id=emmm';
		require 'emmm_remind.php';

	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_productp.php?id=emmm';
		require 'emmm_remind.php';
		
	}
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){		
	
		$query = $db -> del("emmm_productcp","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_productp.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_productp.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}

function Brand(){
	global $db;
	$query = $db -> listgo("id,COL_Brand,COL_Img","`emmm_productcp`","where `COL_Class` = 2 order by id desc");
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1],
			"img" => $emmm_rs[2]
		);
	$i = $i + 1;
	}
	return $rows;
}

$smarty->assign("Brand",Brand());
if (isset($_GET["pid"])){
	$emmm_rs = $db -> select("*","`emmm_productcp`","where `id` = ".intval($_GET['pid']));
	$smarty->assign('emmm_productp',$emmm_rs);
}
$smarty->display('emmm_productp.html');
?>
