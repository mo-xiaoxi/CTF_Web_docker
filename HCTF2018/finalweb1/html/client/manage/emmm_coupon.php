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
}elseif ($_GET["emmm_cms"] == "add"){
	
	$md = MD5($emmm['safecode'].date("Y-m-d H:i:s"));
	$query = $db -> insert("`emmm_coupon`","`COL_Title` = '".admin_sql($_POST["COL_Title"])."',`COL_Money` = ".admin_sql($_POST["COL_Money"]).",`COL_Timewin` = '".admin_sql($_POST["COL_Timewin"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Moneygo` = ".admin_sql($_POST["COL_Moneygo"]).",`COL_Content` = '".admin_sql($_POST["COL_Content"])."',`COL_Type` = ".intval($_POST["COL_Type"]).",`COL_Md` = '".$md."'","");

	$emmm_font = 1;
	$emmm_class = 'emmm_coupon.php?id=emmm';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){
	
		$query = $db -> del("emmm_coupon","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_coupon.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_coupon.php?id=emmm';
		require 'emmm_remind.php';
	
	}
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
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_coupon`"," order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("*","`emmm_coupon`"," order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
			$rows[] = array(
				"i" => $i,
				"id" => $emmm_rs['id'],
				"title" => $emmm_rs['COL_Title'],
				"money" => $emmm_rs['COL_Money'],
				"timewin" => $emmm_rs['COL_Timewin'],
				"moneygo" => $emmm_rs['COL_Moneygo'],
				"content" => $emmm_rs['COL_Content'],
				"type" => $emmm_rs['COL_Type'],
				"md" => $emmm_rs['COL_Md'],
				"time" => $emmm_rs['time']
			);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

$r = $db -> select("COL_Weburl","emmm_web","where id = 1");
$smarty->assign("weburl",$r[0]);
Admin_click('优惠券管理','emmm_coupon.php?id=emmm');
$smarty->assign("coupon",couponlist());
$smarty->display('emmm_coupon.html');
?>
