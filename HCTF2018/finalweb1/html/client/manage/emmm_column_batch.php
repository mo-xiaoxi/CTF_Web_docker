<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "batch"){

	if (strstr($COL_Adminpower,"34")){
	
		for($i = 0; $i < count($_POST["op_b"]); $i ++){
			$query = $db -> update("emmm_column","`COL_Columntitle` = '".$_POST["title"][$i]."',`COL_Columntitleto` = '".$_POST["titleto"][$i]."',`COL_Weight` = '".$_POST["weight"][$i]."',`COL_Hide` = '".$_POST["hide"][$i]."',`COL_Sorting` = '".$_POST["sorting"][$i]."'","where `id` = ".intval($_POST["op_b"][$i]));
		}

		$emmm_font = 1;
		$emmm_class = 'emmm_column.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_column.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}

function Langlist(){
	global $db;
	$query = $db -> listgo("*","`emmm_lang`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs['id'],
			"lang" => $emmm_rs['COL_Lang'],
			"font" => $emmm_rs['COL_Font'],
			"default" => $emmm_rs['COL_Default'],
			"note" => $emmm_rs['COL_Note'],
			"langtitle" => $emmm_rs['COL_Langtitle'],
			"keywords" => $emmm_rs['COL_Langkeywords'],
			"description" => $emmm_rs['COL_Langdescription']
		);
	}
	return $rows;
}

$op= new Tree(columnlist(""));
$arr=$op->leaf();
$smarty->assign('arr',$arr);
$smarty->assign("langlist",Langlist());
$smarty->display('emmm_column_batch.html');
?>
