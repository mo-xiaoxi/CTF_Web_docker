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
	
		$emmm_rs = $db -> select("`COL_Photocminimg`,`COL_Photoimg`","`emmm_photo`","where id = ".intval($_GET['id']));
		if($emmm_rs[0] != '' || $emmm_rs[1] != ''){
			include './emmm_del.php';
			emmm_imgdel($emmm_rs[0],'',$emmm_rs[1]);
		}
		
		$query = $db -> del("emmm_photo","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_photo.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_photo.php?id=emmm';
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
		header("location: ./emmm_cmd.php?id=$op_b&lx=h&xx=photo");
		exit;
		}elseif($_POST["h"] == "y") {
		header("location: ./emmm_cmd.php?id=$op_b&lx=y&xx=photo");
		exit;
		}elseif($_POST["h"] == "s") {
		header("location: ./emmm_cmd.php?id=$op_b&lx=s&xx=photo");
		exit;
		}
		
		if (!empty($_POST["COL_Photoattribute"])){
		$COL_Photoattribute = implode(',',$_POST["COL_Photoattribute"]);
		}else{
		$COL_Photoattribute = '';
		}

		$query = $db -> update("emmm_photo","`COL_Attribute` = '".$COL_Photoattribute."'","where id in ($op_b)");
		$emmm_font = 1;
		$emmm_class = 'emmm_photo.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_photo.php?id=emmm';
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

function Photolist(){
	global $_page,$db,$smarty;
	$listpage = 20;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_photo`","where `COL_Callback` = 0 order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("`id`,`COL_Phototitle`,`time`,`COL_Photocminimg`,`COL_Class`,`COL_Lang`","`emmm_photo`","where `COL_Callback` = 0 order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$c = columncycle($emmm_rs[4]);
		if($c){
			$rows[]=array(
				"i" => $i,
				"id" => $emmm_rs[0],
				"title" => $emmm_rs[1],
				"time" => $emmm_rs[2],
				"img" => $emmm_rs[3],
				"class" => $c,
				"lang" => $emmm_rs[5],
				"att" => listattribute($emmm_rs[0],'photo'),
			);
		}
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

Admin_click('图集管理','emmm_photo.php?id=emmm');
$smarty->assign("photo",Photolist());
$smarty->display('emmm_photo.html');
?>
