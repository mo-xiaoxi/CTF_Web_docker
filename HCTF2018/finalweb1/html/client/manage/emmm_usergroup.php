<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	
	echo '';
	
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
			
		if($_POST["COL_Userlevename"] == ''){
		
				$emmm_font = 4;
				$emmm_content = '不能为空!';
				$emmm_class = 'emmm_usergroup.php?id=emmm';
				require 'emmm_remind.php';
		
			}else{

				$query = $db -> update("`emmm_userleve`","`COL_Userlevename` = '".admin_sql($_POST["COL_Userlevename"])."',`COL_Userweight` = '".admin_sql($_POST["COL_Userweight"])."',`COL_Useropen` = '".admin_sql($_POST["COL_Useropen"])."'","where id = ".intval($_GET['id']));
				$emmm_font = 1;
				$emmm_class = 'emmm_usergroup.php?id=emmm';
				require 'emmm_remind.php';
		}
			
	}else{
				
			$emmm_font = 4;
			$emmm_content = '权限不够，无法编辑内容！';
			$emmm_class = 'emmm_usergroup.php?id=emmm';
			require 'emmm_remind.php';
				
	}
}

function Userleve(){
	global $db;
	$query = $db -> listgo("id,COL_Userlevename,COL_Userweight,COL_Useropen","`emmm_userleve`","order by id asc");
	$rows = array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1],
			"weight" => $emmm_rs[2],
			"open" => $emmm_rs[3],
		);
	}
	return $rows;
}

Admin_click('用户组管理','emmm_usergroup.php?id=emmm');
$smarty->assign("Userleve",Userleve());
$smarty->display('emmm_usergroup.html');
?>
