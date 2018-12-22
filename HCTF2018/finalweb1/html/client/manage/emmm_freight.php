<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';

}elseif ($_GET["emmm_cms"] == "add"){

	if (!empty($_POST["sheng"])){
	$sheng = implode('|',$_POST["sheng"]);
	}else{
	$sheng = '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0';
	}

	$emmm_rs = $db -> insert("`emmm_freight`","`COL_Freightname` = '".admin_sql($_POST["COL_Freightname"])."',`COL_Freighttext` = '".$sheng."',`COL_Freightdefault` = 0,`COL_Freightweight` = '".admin_sql($_POST["COL_Freightweight"])."',`time` = '".date("Y-m-d H:i:s")."'","");
	$emmm_font = 1;
	$emmm_class = 'emmm_freight.php?id=emmm';
	require 'emmm_remind.php';	
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

		$query = $db -> del("emmm_freight","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_freight.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_freight.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}elseif ($_GET["emmm_cms"] == "Batch"){

	if (strstr($COL_Adminpower,"34")){
		
		$query = $db -> update("emmm_freight","`COL_Freightdefault` = 1","where id = ".intval($_POST['default']));
		$queryto = $db -> update("emmm_freight","`COL_Freightdefault` = 0","where id != ".intval($_POST['default']));
		
		$emmm_font = 1;
		$emmm_class = 'emmm_freight.php?id=emmm';
		require 'emmm_remind.php';
		
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_article.php?id=emmm';
		require 'emmm_remind.php';
		
	}	
			
}

function freightlist(){
	global $_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_freight`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("*","`emmm_freight`","order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs['id'],
			"title" => $emmm_rs['COL_Freightname'],
			"content" => $emmm_rs['COL_Freighttext'],
			"default" => $emmm_rs['COL_Freightdefault'],
			"time" => $emmm_rs['time'],
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}
$smarty->assign("freight",freightlist());
$smarty->display('emmm_freight.html');
?>
