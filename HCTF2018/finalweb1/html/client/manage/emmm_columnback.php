<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

	
		$emmm_rs = $db -> select("`COL_Img`","`emmm_column`","where id = ".intval($_GET['id']));
		if($emmm_rs[0] != ''){
			include './emmm_del.php';
			emmm_imgdel($emmm_rs[0]);
		}
		
		$queryto = $db -> del("`emmm_column`","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_column.php';
		require 'emmm_remind.php';

	
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


function columnlist() { 
    global $db;
	$query = $db -> listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Columntitleto,COL_Model,COL_Templist,COL_Tempview,COL_Hide,COL_Sorting,COL_Weight,COL_Url","`emmm_column`","where (`id` = `COL_Uid` || `COL_Uid` > `id`) or `COL_Adminopen` not like '%0,1' order by COL_Sorting asc,id asc"); 
	$arr = array();
	$i = 0;
	while($emmm_rs = $db -> whilego($query)){
		$arr[] = array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"uid" => $emmm_rs[1],
			"lang" => $emmm_rs[2],
			"title" => $emmm_rs[3],
			"titleto" => $emmm_rs[4],
			"model" => $emmm_rs[5],
			"templist" => $emmm_rs[6],
			"tempview" => $emmm_rs[7],
			"hide" => $emmm_rs[8],
			"sorting" => $emmm_rs[9],
			"weight" => $emmm_rs[10],
			"weburl" => $emmm_rs[11],
			); 
		$i += 1;
	}
    return $arr;
}

$smarty->assign('arr',columnlist());
$smarty->assign("langlist",Langlist());
$smarty->display('emmm_columnback.html');
?>
