<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){
	
		$query = $db -> del("emmm_search","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_usersearch.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_usersearch.php?id=emmm';
		require 'emmm_remind.php';
	
	}
			
}elseif ($_GET["emmm_cms"] == "Batch"){

	if (strstr($COL_Adminpower,"35")){
	
	if (!empty($_POST["op_b"])){
		$op_b = implode(',',$_POST["op_b"]);
	}else{
		$op_b = '';
	}
	
		$query = $db -> del("emmm_search","where id in (".$op_b.")");
		$emmm_font = 2;
		$emmm_class = 'emmm_usersearch.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_usersearch.php?id=emmm';
		require 'emmm_remind.php';
	
	}
			
}


function Searchlist(){
	global $_page,$db,$smarty;
	$listpage = 40;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_search`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("*","`emmm_search`","order by COL_Searchclick desc,time desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs['id'],
			"title" => $emmm_rs['COL_Searchtext'],
			"click" => $emmm_rs['COL_Searchclick'],
			"time" => $emmm_rs['time'],
		);
	$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

$smarty->assign("search",Searchlist());
$smarty->display('emmm_usersearch.html');
?>
