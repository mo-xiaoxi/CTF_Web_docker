<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	$num = $db -> select("COL_Adminname","`emmm_admin`","WHERE `COL_Adminname` = '".admin_sql($_POST["COL_Adminname"])."'");
	if ($num != false){
	
		$emmm_font = 3;
		$emmm_class = 'emmm_manage.php?id=emmm';
		require 'emmm_remind.php';
	
			}else{			

		if (!empty($_POST["COL_Adminpower"])){
		$COL_Adminpower = implode(',',$_POST["COL_Adminpower"]);
		}else{
		$COL_Adminpower = '';
		}
		
		$query = $db -> insert("`emmm_admin`","`COL_Adminname` = '".admin_sql($_POST["COL_Adminname"])."',`COL_Adminpass` = '".admin_sql(substr(md5(md5($_REQUEST["COL_Adminpass"])),0,16))."',`COL_Adminpower` = '".$COL_Adminpower."',`COL_Admin` = '".intval($_POST["COL_Admin"])."',`time` = '".date("Y-m-d H:i:s")."'","");
		$emmm_font = 1;
		$emmm_class = 'emmm_manage.php?id=emmm';
		require 'emmm_remind.php';
	}
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){
	
	if (intval($_GET['id']) == 1){
		$emmm_font = 4;
		$emmm_content = '主管理员无法删除！';
		$emmm_class = 'emmm_manage.php?id=emmm';
		require 'emmm_remind.php';			
	}
	
	$query = $db -> del("`emmm_admin`","where id = ".intval($_GET['id']));
	$emmm_font = 2;
	$emmm_class = 'emmm_manage.php?id=emmm';
	require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_manage.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}

function Adminlist(){
	global $_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_admin`","order by id asc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("id,COL_Adminname,COL_Adminpower,COL_Admin,time","`emmm_admin`","order by id asc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"adminname" => $emmm_rs[1],
			"power" => $emmm_rs[2],
			"admin" => $emmm_rs[3],
			"time" => $emmm_rs[4]
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

$smarty->assign("Adminlist",Adminlist());
$smarty->display('emmm_manage.html');
?>
