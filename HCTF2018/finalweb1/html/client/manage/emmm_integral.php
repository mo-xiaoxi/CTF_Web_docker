<?php 

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
}elseif ($_GET["emmm_cms"] == "edit"){

	$query = $db -> update("`emmm_integral`","`COL_Iname` = '".admin_sql($_POST["title"])."',`COL_Iintegral` = '".admin_sql($_POST["integral"])."',`COL_Iconfirm` = '".admin_sql($_POST["confirm"])."'","where id = ".intval($_GET['id']));
	$emmm_font = 1;
	$emmm_class = 'emmm_integral.php?opcms=emmm&page='.intval($_GET['page']);
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

		$query = $db -> del("emmm_integral","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_integral.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_integral.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}


function integrallist(){
	global $_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_integral`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("`id`,`COL_Iname`,`COL_Iintegral`,`COL_Iconfirm`,`COL_Iuseremail`,`COL_ITime`,`time`","`emmm_integral`","order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"title" => $emmm_rs[1],
			"integral" => $emmm_rs[2],
			"confirm" => $emmm_rs[3],
			"useremail" => $emmm_rs[4],
			"lqtime" => $emmm_rs[5],
			"time" => $emmm_rs[6],
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

Admin_click('积分领取管理','emmm_integral.php?id=emmm');
$smarty->assign("integral",integrallist());
if($_GET['opcms'] != 'emmm'){
	$emmm_rs = $db -> select("*","`emmm_integral`","where `id` = ".intval($_GET['id']));
	$smarty->assign('emmm_integral',$emmm_rs);
}
$smarty->display('emmm_integral.html');
?>
