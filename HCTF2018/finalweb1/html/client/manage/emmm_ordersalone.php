<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';



if(isset($_GET["emmm_cms"]) == ""){
	
	$keyword = '';
	
}elseif ($_GET["emmm_cms"] == "Batch"){

	if (strstr($COL_Adminpower,"35")){
	
		if (!empty($_POST["op_b"])){
		$op_b = implode(',',$_POST["op_b"]);
		}else{
		$op_b = '';
		}

		$query = $db -> del("emmm_orders","where id in ($op_b)");
		$emmm_font = 1;
		$emmm_class = 'emmm_ordersalone.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_ordersalone.php?id=emmm';
		require 'emmm_remind.php';
		
	}	
}elseif ($_GET["emmm_cms"] == "search"){
	
	if($_POST['content'] == '' || $_POST['content'] == '输入会员账号或商品订单号搜索TA的订单'){
		exit("<script language=javascript> alert('输入正确的搜索关键词');location.replace('emmm_ordersalone.php?id=emmm');</script>");
	}
	
	$keyword = $_POST['content'];
	
}


function Orderslist($keyword = ''){
	global $_page,$db,$smarty;
	
	if($keyword == '' || $keyword == null){
		$where = '';
	}else{
		$where = "where `COL_Ordersemail` like '%".admin_sql($keyword)."%' or `COL_Ordersnumber` like '%".admin_sql($keyword)."%' ";
	}
	
	$listpage = 40;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_orders`",$where."order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	
	$query = $db -> listgo("`id`,`COL_Ordersname`,`time`,`COL_Ordersnumber`,`COL_Orderspay`,`COL_Orderssend`,`COL_Ordersgotime`,`COL_Integralok`,`COL_Sign`","`emmm_orders`",$where."order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"title" => $emmm_rs[1],
			"time" => $emmm_rs[2],
			"number" => $emmm_rs[3],
			"pay" => $emmm_rs[4],
			"send" => $emmm_rs[5],
			"gotime" => $emmm_rs[6],
			"integralok" => $emmm_rs[7],
			"sign" => $emmm_rs[8],
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
	
}

Admin_click('订单管理','emmm_orders.php?id=emmm');
$smarty->assign("orders",Orderslist($keyword));
$smarty->display('emmm_ordersalone.html');
?>
