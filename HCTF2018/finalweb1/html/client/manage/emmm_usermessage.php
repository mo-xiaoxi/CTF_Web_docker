<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	if (admin_sql($_POST["COL_Userclass"]) == 1){

		$emmm_rs = $db -> select("COL_Useremail","`emmm_user`","WHERE `COL_Useremail` = '".admin_sql($_POST["COL_Usercollect"])."' or `COL_Usertel` = '".admin_sql($_POST["COL_Usercollect"])."'");
		if ($emmm_rs == false){
		
			$emmm_font = 5;
			$emmm_img = 'no.png';
			$emmm_content = '会员账户不存在！';
			$emmm_class = 'emmm_usermessage.php?id=emmm';
			require 'emmm_remind.php';
			
		}
	}

	$query = $db -> insert("`emmm_usermessage`","`COL_Usersend` = '".admin_sql($_POST["COL_Usersend"])."',`COL_Usercollect` = '".admin_sql($_POST["COL_Usercollect"])."',`COL_Usercontent` = '".admin_sql($_POST["COL_Usercontent"])."',`COL_Userclass` = '".intval($_POST["COL_Userclass"])."',`time` = '".date("Y-m-d H:i:s")."'","");
	$emmm_font = 1;
	$emmm_class = 'emmm_usermessage.php?id=emmm';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){
	
		$query = $db -> del("emmm_usermessage","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_usermessage.php?id=emmm';
		require 'emmm_remind.php';

				
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_usermessage.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}

function emaillist(){
	global $_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_usermessage`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("id,COL_Usersend,COL_Usercollect,COL_Usercontent,COL_Userclass,time","`emmm_usermessage`","order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"send" => $emmm_rs[1],
			"collect" => $emmm_rs[2],
			"content" => $emmm_rs[3],
			"class" => $emmm_rs[4],
			"time" => $emmm_rs[5]
		);
	$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

Admin_click('站内邮件','emmm_usermessage.php?id=emmm');
$smarty->assign("email",emaillist());
$smarty->display('emmm_usermessage.html');
?>
