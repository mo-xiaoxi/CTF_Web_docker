<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

		$query = $db -> del("emmm_product","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_productlibrary.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_productlibrary.php?id=emmm';
		require 'emmm_remind.php';
	
	}
			
}elseif ($_GET["emmm_cms"] == "xj"){

	if (strstr($COL_Adminpower,"34")){
	
		if (!empty($_POST["op_xj"])){
		$op_xj = implode(',',$_POST["op_xj"]);
		}else{
		$op_xj = '';
		}
		
		header("location: ./emmm_cmd.php?id=$op_xj&lx=y&xx=product");
		exit;
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_productlibrary.php?id=emmm';
		require 'emmm_remind.php';
		
	}	
			
}

function columncycle($id=1){
	global $db;
	$emmm_rs = $db -> select("`COL_Columntitle`","`emmm_column`","where id = ".$id);
	return $emmm_rs[0];
}

function Productlist(){
	global $_page,$db,$smarty;
	$listpage = 15;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_product`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("`id`,`COL_Class`,`COL_Lang`,`COL_Title`,`COL_Webmarket`,`COL_Stock`,`COL_Minimg`,`COL_Down`,`time`","`emmm_product`","where `COL_Down` = 1 order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"class" => columncycle($emmm_rs[1]),
			"lang" => $emmm_rs[2],
			"title" => $emmm_rs[3],
			"webmarket" => $emmm_rs[4],
			"stock" => $emmm_rs[5],
			"minimg" => $emmm_rs[6],
			"down" => $emmm_rs[7],
			"time" => $emmm_rs[8]
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

$smarty->assign("product",Productlist());
$smarty->display('emmm_productlibrary.html');
?>
