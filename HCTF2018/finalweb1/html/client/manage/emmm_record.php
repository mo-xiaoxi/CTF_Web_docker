<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	
	echo '';

}elseif ($_GET["emmm_cms"] == "edit"){
	
	if (strstr($COL_Adminpower,"34")){
		
		$emmm_rs = $db -> update("emmm_webdeploy","`COL_Adminrecord` = '".admin_sql($_POST["COL_Adminrecord"])."'","where id = 1");
		$emmm_font = 1;
		$emmm_class = 'emmm_record.php?id=emmm';
		require 'emmm_remind.php';
			
	}else{
			
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_record.php?id=emmm';
		require 'emmm_remind.php';
			
	}
}

$emmm_rs = $db -> select("COL_Adminrecord","`emmm_webdeploy`","where id = 1");
Admin_click('建站备忘录','emmm_record.php?id=emmm');
$smarty->assign('content',$emmm_rs[0]);
$smarty->display('emmm_record.html');
?>
