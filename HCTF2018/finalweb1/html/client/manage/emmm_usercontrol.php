<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

			if (!empty($_POST["COL_Usermoney"])){
				$COL_Usermoney = implode('|',$_POST["COL_Usermoney"]);
			}else{
				$COL_Usermoney = '0|0|0|0';
			}
			
			$query = $db -> update("`emmm_usercontrol`","`COL_Userreg` = '".intval($_POST["COL_Userreg"])."',`COL_Userlogin` = '".intval($_POST["COL_Userlogin"])."',`COL_Userprotocol` = '".admin_sql($_POST["COL_Userprotocol"])."',`COL_Usergroup` = '".intval($_POST["COL_Usergroup"])."',`COL_Usermoney` ='".$COL_Usermoney."',`COL_Useripoff` ='".intval($_POST["COL_Useripoff"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Regtyle` = '".admin_sql($_POST["COL_Regtyle"])."',`COL_Regcode` = '".intval($_POST["COL_Regcode"])."',`COL_Userpassgo` = ".intval($_POST["COL_Userpassgo"]),"where id = 1");
			$emmm_font = 1;
			$emmm_class = 'emmm_usercontrol.php?id=emmm';
			require 'emmm_remind.php';
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

Admin_click('会员选项','emmm_usercontrol.php?id=emmm');
$emmm_rs = $db -> select("*","`emmm_usercontrol`","where `id` = 1");
$smarty->assign('emmm_usercontrol',$emmm_rs);
$COL_Usermoney = explode('|',$emmm_rs["COL_Usermoney"]);
$smarty->assign('emmm_Usermoney',$COL_Usermoney);
$smarty->assign("userleve",Userleve());
$smarty->display('emmm_usercontrol.html');
?>
