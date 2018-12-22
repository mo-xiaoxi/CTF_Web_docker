<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	$query = $db -> insert("`emmm_productattribute`","`COL_Title` = '".admin_sql($_POST["COL_Title"])."',`COL_Text` = '',`COL_Sorting` = '".admin_sql($_POST["COL_Sorting"])."',`COL_Class` = '0',`time` = '".date("Y-m-d H:i:s")."'","");
	$emmm_font = 1;
	$emmm_class = 'emmm_productattribute.php?id=emmm';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
	
		$query = $db -> update("`emmm_productattribute`","`COL_Title` = '".admin_sql($_POST["COL_Title"])."',`COL_Text` = '',`COL_Sorting` = '".admin_sql($_POST["COL_Sorting"])."',`COL_Class` = '0',`time` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_productattribute.php?id=emmm';
		require 'emmm_remind.php';

	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_productattribute.php?id=emmm';
		require 'emmm_remind.php';
		
	}
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){		
	
		$query = $db -> del("emmm_productattribute","where id = ".intval($_GET['id']));
		$query = $db -> del("emmm_productattribute","where COL_Class = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_productattribute.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_productattribute.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}

function Attribute(){
	global $db;
	$query = $db -> listgo("id,COL_Title,COL_Sorting","`emmm_productattribute`","where `COL_Class` = 0 order by COL_Sorting asc");
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1],
			"sorting" => $emmm_rs[2]
		);
		$i = $i + 1;
	}
	return $rows;
}

$smarty->assign("Attribute",Attribute());
$smarty->display('emmm_productattribute.html');
?>
