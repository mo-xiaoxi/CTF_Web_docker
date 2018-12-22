<?php 
/*******************************************************************************
* Emmm - 内容管理系统
* Copyright (C) 2018 vidar.club
*******************************************************************************/
include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["page"]) == ""){
	$smarty->assign("page",1);
	}else{
	$smarty->assign("page",$_GET["page"]);
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){
	
		$query = $db -> del("emmm_couponlist","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_couponlist.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_couponlist.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}

function couponview($id = 0){
	global $db;
	$r = $db -> select("*","emmm_coupon","where id = ".$id);
	return '
	<p>标题:'.$r['COL_Title'].'</p>
	<p>面值:'.$r['COL_Money'].'</p>
	<p>时限:'.$r['COL_Timewin'].'</p>
	<p>满限:'.$r['COL_Moneygo'].'</p>
	<p>描述:'.$r['COL_Content'].'</p>
	';
}

function couponlist(){
	global $_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_couponlist`"," order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("*","`emmm_couponlist`"," order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
			$rows[] = array(
				"i" => $i,
				"id" => $emmm_rs['id'],
				"classid" => couponview($emmm_rs['COL_Couponid']),
				"username" => $emmm_rs['COL_Username'],
				"type" => $emmm_rs['COL_Type'],
				"md" => $emmm_rs['COL_Md'],
				"timewin" => $emmm_rs['COL_Time'],
				"time" => $emmm_rs['time']
			);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

$smarty->assign("coupon",couponlist());
$smarty->display('emmm_couponlist.html');
?>
