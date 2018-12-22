<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if(!defined('EMMMNO')){exit('no!');}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "del"){

	$emmm_rs = $db -> select("`id`,`COL_Orderspay`,`COL_Orderssend`","`emmm_orders`","where `id` = ".intval($_GET['id'])." && `COL_Ordersnumber` = '".dowith_sql($_GET['dh'])."'");
	if(!$emmm_rs){
		exit("no!");
	}
	if($emmm_rs[1] == 2){
		exit("no!");
	}
	if($emmm_rs[2] == 2){
		exit("no!");
	}
	
	$query = $db -> del("`emmm_orders`","where `id` = '".intval($_GET['id'])."'");
	if(isset($_GET['o'])){
		exit("<script language=javascript>location.replace('".$emmm['webpath']."client/wap/?".$emmm_Language."-usershopping-op.html');</script>");
	}else{
		exit("<script language=javascript>location.replace('".$emmm['webpath']."client/wap/?".$emmm_Language."-usershopping-op.html');</script>");
	}
	
}elseif ($_GET["emmm_cms"] == "sign"){
	
	$emmm_rs = $db -> select("`id`,`COL_Sign`","`emmm_orders`","where `id` = ".intval($_GET['id'])." && `COL_Ordersnumber` = '".dowith_sql($_GET['dh'])."'");
	if(!$emmm_rs){
		exit("no!");
	}
	if($emmm_rs[1] == 1){
		exit("no!");
	}
	
	$query = $db -> update("`emmm_orders`","`COL_Sign` = 1","where id = ".intval($emmm_rs[0]));
	exit("<script language=javascript>location.replace('".$emmm['webpath']."client/wap/?".$emmm_Language."-usershopping-op.html');</script>");
}

function emmm_orderslist(){
	global $db,$smarty;
	$listpage = 15;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	
	if(isset($_GET['tag'])){
		switch($_GET['tag']){
			case "dfk":
				$while = '&& `COL_Orderspay` = 1';
			break;
			case "dfh":
				$while = '&& `COL_Orderssend` = 1';
			break;
			case "dqs":
				$while = '&& `COL_Sign` = 1';
			break;
			default:
				$while = '';
			break;
		}
	}else{
		$while = '';
	}
	
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_orders`","where `COL_Ordersemail` = '".$_SESSION['username']."'");
	$emmmtotal = $db -> whilego($emmmtotal);
	
	$query = $db -> listgo("`id`,`COL_Ordersname`,`COL_Ordersid`,`COL_Ordersnum`,`COL_Ordersusetext`,`COL_Ordersproductatt`,`COL_Orderswebmarket`,`COL_Ordersusermarket`,`COL_Ordersnumber`,`COL_Orderspay`,`COL_Orderssend`,`COL_Ordersexpress`,`COL_Ordersexpressnum`,`COL_Ordersfreight`,`COL_Sign`","`emmm_orders`","where `COL_Ordersemail` = '".$_SESSION['username']."' ".$while." order by id desc LIMIT ".$start.",".$listpage); 
	$rows = array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[] = array(
			'i' => $i,
			'id' => $emmm_rs[0],
			'title' => $emmm_rs[1],
			'prid' => $emmm_rs[2],
			'num' => $emmm_rs[3],
			'text' => $emmm_rs[4],
			'pratt' => $emmm_rs[5],
			'webmarket' => $emmm_rs[6],
			'usermarket' => $emmm_rs[7],
			'number' => $emmm_rs[8],
			'pay' => $emmm_rs[9],
			'send' => $emmm_rs[10],
			'express' => $emmm_rs[11],
			'expressnum' => $emmm_rs[12],
			'freight' => $emmm_rs[13],
			'sign' => $emmm_rs[14],
		);
	$i+=1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty -> assign('emmmpage',$_page->showpage());
	return $rows;
}

$smarty->assign('orderslist',emmm_orderslist());
?>
