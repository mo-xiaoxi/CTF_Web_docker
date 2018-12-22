<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
	
		if (admin_sql($_POST["COL_Userpass"]) == ''){
			$COL_Userpass = admin_sql($_POST["password"]);
		}else{
			if (admin_sql($_POST["COL_Userpass"]) != admin_sql($_POST["COL_Userpassto"])){
				$emmm_font = 4;
				$emmm_content = '两次密码输入的不一样，请重新操作！';
				$emmm_class = 'emmm_user.php?id=emmm';
				require 'emmm_remind.php';
			}
			$COL_Userpass = admin_sql(substr(md5(md5($_REQUEST["COL_Userpass"])),0,16));
		}

		$query = $db -> update("`emmm_user`","`COL_Userclass` = '".intval($_POST["COL_Userclass"])."',`COL_Userstatus` = '".intval($_POST["COL_Userstatus"])."',`COL_Userpass` = '".$COL_Userpass."',`COL_Usertel` = '".admin_sql($_POST["COL_Usertel"])."',`COL_Username` = '".admin_sql($_POST["COL_Username"])."',`COL_Userqq` = '".admin_sql($_POST["COL_Userqq"])."',`COL_Useraliww` = '".admin_sql($_POST["COL_Useraliww"])."',`COL_Userskype` = '".admin_sql($_POST["COL_Userskype"])."',`COL_Useradd` = '".admin_sql($_POST["COL_Useradd"])."',`COL_Usersource` = '".admin_sql($_POST["COL_Usersource"])."',`COL_Userhead` = '".admin_sql($_POST["COL_Userhead"])."',`COL_Userip` = '".admin_sql($_POST["COL_Userip"])."',`COL_Userproblem` = '".admin_sql($_POST["COL_Userproblem"])."',`COL_Useranswer` = '".admin_sql($_POST["COL_Useranswer"])."',`COL_Usertext` = '".admin_sql($_POST["COL_Usertext"])."',`COL_Usercode` = '".randomkeys(18)."',`time` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
		
		$emmm_font = 1;
		$emmm_class = 'emmm_user.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_user.php?id=emmm';
		require 'emmm_remind.php';
		
	}
}

function Userleve(){
	global $db;
	$query = $db -> listgo("id,COL_Userlevename","`emmm_userleve`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1]
		);
	}
	return $rows;
}

function Userproblem(){
	global $db;
	$query = $db -> listgo("id,COL_Userproblem","`emmm_userproblem`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1]
		);
	}
	return $rows;
}

$emmm_rs = $db -> select("*","`emmm_user`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_user',$emmm_rs);
$smarty->assign('Userleve',Userleve());
$smarty->assign('Userproblem',Userproblem());
$smarty->display('emmm_userview.html');
?>
