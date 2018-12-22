<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

	$query = $db -> select("COL_Uid","`emmm_column`","where COL_Uid = ".intval($_GET['id']));
	if ($query >= 1){
		
		$emmm_font = 4;
		$emmm_content = '请先删除它下面的子栏目!';
		$emmm_class = 'emmm_column.php';
		require 'emmm_remind.php';
		
	}else{
	
		$emmm_rs = $db -> select("`COL_Img`,`id`,`COL_Model`","`emmm_column`","where id = ".intval($_GET['id']));
		if($emmm_rs[0] != ''){
			include './emmm_del.php';
			emmm_imgdel($emmm_rs[0]);
		}
		
		//如果栏目被删除，下面的数据被移动到回收站
		if($emmm_rs[2] != 'weburl' or $emmm_rs[2] != 'about'){
			if($emmm_rs[2] == 'product')
			{
				$recovery = $db -> update("`emmm_".$emmm_rs[2]."`","`COL_Down` = 1","where COL_Class = ".intval($emmm_rs[1]));
			}else{
				$recovery = $db -> update("`emmm_".$emmm_rs[2]."`","`COL_Callback` = 1","where COL_Class = ".intval($emmm_rs[1]));
			}
		}
		
		$queryto = $db -> del("`emmm_column`","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_column.php';
		require 'emmm_remind.php';
	}
	
	}else{

		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_column.php';
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

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node,0);	
$smarty->assign('arr',$arr);
Admin_click('网站栏目列表','emmm_column.php');
$smarty->assign("langlist",Langlist());
$smarty->display('emmm_column.html');
?>
