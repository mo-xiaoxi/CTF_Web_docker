<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
			
		if (admin_sql($_POST["COL_Adminname"]) == admin_sql($_POST["name"])){
		
			echo '';
		
		}else{
			$num = $db -> select("COL_Adminname","`emmm_admin`","WHERE `COL_Adminname` = '".admin_sql($_POST["COL_Adminname"])."'");
			if ($num != false){
				
				$emmm_font = 3;
				$emmm_class = 'emmm_manage.php?id=emmm';
				require 'emmm_remind.php';
				
			}else{
			
				if (admin_sql($_POST["power"]) == 1){
				echo '<script language=javascript> alert("请重新用{'.$_POST["COL_Adminname"].'}登录！");</script>';
				unset($_SESSION['emmm_adminname']);
				}
				
			}
		}
		
		if (admin_sql($_POST["power"]) == 1){
			$COL_Adminpower = '01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60';
		}else{
		
			if (!empty($_POST["COL_Adminpower"])){
			$COL_Adminpower = implode(',',$_POST["COL_Adminpower"]);
			}else{
			$COL_Adminpower = '';
			}
			
		}
		
		if (admin_sql($_POST["COL_Adminpass"]) == ''){
			$COL_Adminpass = admin_sql($_POST["password"]);
		}else{
		
		if (admin_sql($_POST["COL_Adminpass"]) != admin_sql($_POST["COL_Adminpassto"])){
			$emmm_font = 4;
			$emmm_content = '两次密码输入的不一样，请重新操作！';
			$emmm_class = 'emmm_manage.php?id=emmm';
			require 'emmm_remind.php';
		}
		$COL_Adminpass = admin_sql(substr(md5(md5($_REQUEST["COL_Adminpass"])),0,16));
		
		}
		
		$query = $db -> update("`emmm_admin`","`COL_Adminname` = '".admin_sql($_POST["COL_Adminname"])."',`COL_Adminpass` = '".$COL_Adminpass."',`COL_Adminpower` = '".$COL_Adminpower."',`COL_Admin` = '".intval($_POST["power"])."'","where id = ".intval($_GET['id']));
		
		$emmm_font = 1;
		$emmm_class = 'emmm_manage.php?id=emmm';
		require 'emmm_remind.php';

	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_manage.php?id=emmm';
		require 'emmm_remind.php';
		
	}
}

$emmm_rs = $db -> select("*","`emmm_admin`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_admin',$emmm_rs);
$smarty->display('emmm_manageview.html');
?>
