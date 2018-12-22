<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["opcms"]) == ""){
	$mx = 'article';
}else{
	$mx = admin_sql($_GET["opcms"]);
}
if(isset($_GET["page"]) == ""){
	$smarty->assign("page",1);
	}else{
	$smarty->assign("page",$_GET["page"]);
}

if(isset($_GET["emmm_cms"]) == ""){
	
	echo '';
		
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

		$query = $db -> del("`emmm_".admin_sql($_GET["mx"])."`","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_callback.php?emmm='.$_GET["mx"];
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_callback.php?emmm='.$_GET["mx"];
		require 'emmm_remind.php';
	
	}
	
}elseif ($_GET["emmm_cms"] == "Batch"){
	
	if (strstr($COL_Adminpower,"34")){
	
		if (!empty($_POST["op_b"])){
		$op_b = implode(',',$_POST["op_b"]);
		}else{
		$op_b = '';
		}
		
		if ($_POST["h"] == "r") {
			header("location: ./emmm_cmd.php?id=$op_b&lx=r&xx=".$_GET["mx"]);
			exit;
		}
		
		header("location: ./emmm_callback.php?opcms=".$_GET["mx"]);
		exit;
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_article.php?id=emmm';
		require 'emmm_remind.php';
		
	}	
	
}

function columncycle($id=1){
	global $db;
	$emmm_rs = $db -> select("`COL_Columntitle`","`emmm_column`","where id = ".$id);
	return $emmm_rs[0];
}

function Callbacklist(){
	global $mx,$_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_".$mx."`","where `COL_Callback` = 1 order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	if($mx=='article'){
	$query = $db -> listgo("id,COL_Articletitle,COL_Class,COL_Lang,time","`emmm_".$mx."`","where `COL_Callback` = 1 order by id desc LIMIT ".$start.",".$listpage);
	}elseif($mx=='photo'){
	$query = $db -> listgo("id,COL_Phototitle,COL_Class,COL_Lang,time","`emmm_".$mx."`","where `COL_Callback` = 1 order by id desc LIMIT ".$start.",".$listpage);
	}elseif($mx=='video'){
	$query = $db -> listgo("id,COL_Videotitle,COL_Class,COL_Lang,time","`emmm_".$mx."`","where `COL_Callback` = 1 order by id desc LIMIT ".$start.",".$listpage);
	}elseif($mx=='down'){
	$query = $db -> listgo("id,COL_Downtitle,COL_Class,COL_Lang,time","`emmm_".$mx."`","where `COL_Callback` = 1 order by id desc LIMIT ".$start.",".$listpage);
	}elseif($mx=='job'){
	$query = $db -> listgo("id,COL_Jobtitle,COL_Class,COL_Lang,time","`emmm_".$mx."`","where `COL_Callback` = 1 order by id desc LIMIT ".$start.",".$listpage);
	}
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"title" => $emmm_rs[1],
			"time" => $emmm_rs[4],
			"class" => columncycle($emmm_rs[2]),
			"lang" => $emmm_rs[3]
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

$smarty->assign("Callbacklist",Callbacklist());
$smarty->display('emmm_callback.html');
?>
