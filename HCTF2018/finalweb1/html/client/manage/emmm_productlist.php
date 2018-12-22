<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';

if(isset($_GET["page"]) == ""){
	$smarty->assign("page",1);
	}else{
	$smarty->assign("page",$_GET["page"]);
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){
		
		$emmm_rs = $db -> select("`COL_Minimg`,`COL_Maximg`,`COL_Img`","`emmm_product`","where id = ".intval($_GET['id']));
		if($emmm_rs[0] != '' || $emmm_rs[1] != '' || $emmm_rs[2] != ''){
			include './emmm_del.php';
			emmm_imgdel($emmm_rs[0],$emmm_rs[1],$emmm_rs[2]);
		}
		
		$query = $db -> del("emmm_product","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_productlist.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_productlist.php?id=emmm';
		require 'emmm_remind.php';
	
	}
			
}elseif ($_GET["emmm_cms"] == "Batch"){

	if (strstr($COL_Adminpower,"34")){
	
		if (!empty($_POST["op_b"])){
		$op_b = implode(',',$_POST["op_b"]);
		}else{
		$op_b = '';
		}

		if ($_POST["h"] == "h") {
		header("location: ./emmm_cmd.php?id=$op_b&lx=h&xx=product");
		exit;
		}elseif($_POST["h"] == "y") {
		header("location: ./emmm_cmd.php?id=$op_b&lx=y&xx=product");
		exit;
		}elseif($_POST["h"] == "s") {
		header("location: ./emmm_cmd.php?id=$op_b&lx=s&xx=product");
		exit;
		}
		
		if (!empty($_POST["COL_Attribute"])){
		$COL_Attribute = implode(',',$_POST["COL_Attribute"]);
		}else{
		$COL_Attribute = '';
		}
		
		if (!empty($_POST["down"])){
		$down = implode(',',$_POST["down"]);
		}else{
		$down = '2';
		}
		
		$query = $db -> update("emmm_product","`COL_Attribute` = '".$COL_Attribute."',`COL_Down` = '".$down."'","where id in ($op_b)");
		$emmm_font = 1;
		$emmm_class = 'emmm_productlist.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_productlist.php?id=emmm';
		require 'emmm_remind.php';
		
	}	
			
}

function columncycle($cid = 1){
	global $db,$id;
	$emmm_rs = $db -> select("`COL_Columntitle`","`emmm_column`","where id = ".$cid." and (`COL_Adminopen` LIKE '%$id%' or `COL_Adminopen` LIKE '0%')");
	if($emmm_rs){
		return $emmm_rs[0];
	}else{
		return false;
	}
}

function pingjia($id,$type){
	global $db;
	if($type == 'h'){
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_comment`","where COL_Class = ".$id." && COL_Vote = 1");
	}elseif($type == 'z'){
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_comment`","where COL_Class = ".$id." && COL_Vote = 2");
	}elseif($type == 'c'){
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_comment`","where COL_Class = ".$id." && COL_Vote = 3");
	}
	$emmmtotal = $db -> whilego($emmmtotal);
	return $emmmtotal['tiaoshu'];
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
	$query = $db -> listgo("`id`,`COL_Class`,`COL_Lang`,`COL_Title`,`COL_Webmarket`,`COL_Stock`,`COL_Minimg`,`COL_Down`,`time`","`emmm_product`","where `COL_Down` = 2 order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$c = columncycle($emmm_rs[1]);
		if($c){
			$rows[]=array(
				"i" => $i,
				"id" => $emmm_rs[0],
				"class" => $c,
				"lang" => $emmm_rs[2],
				"title" => $emmm_rs[3],
				"webmarket" => $emmm_rs[4],
				"stock" => $emmm_rs[5],
				"minimg" => $emmm_rs[6],
				"down" => $emmm_rs[7],
				"time" => $emmm_rs[8],
				"h" => pingjia($emmm_rs[0],'h'),
				"z" => pingjia($emmm_rs[0],'z'),
				"c" => pingjia($emmm_rs[0],'c'),
				"att" => listattribute($emmm_rs[0],'product'),
			);
		}
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

Admin_click('商品管理','emmm_productlist.php?id=emmm');
$smarty->assign("product",Productlist());
$smarty->display('emmm_productlist.html');
?>
