<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php'; 

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
	
		$query = $db -> update("`emmm_lang`","`COL_Lang` = '".admin_sql($_POST["COL_Lang"])."',`COL_Font` = '".admin_sql($_POST["COL_Font"])."',`COL_Note` = '".admin_sql($_POST["COL_Note"])."',`COL_Langtitle` = '".admin_sql($_POST["COL_Langtitle"])."',`COL_Langkeywords` = '".admin_sql($_POST["COL_Langkeywords"])."',`COL_Langdescription` = '".admin_sql($_POST["COL_Langdescription"])."'","where id = ".$_GET["id"]." order by id asc");
		
		$emmm_font = 1;
		$emmm_class = 'emmm_lang.php';
		require 'emmm_remind.php';
	
	}else{
			
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_lang.php';
		require 'emmm_remind.php';
		
	}

}

$emmm_rs = $db -> select("*","`emmm_lang`","where `id` = ".intval($_GET["id"]));
$smarty->assign('emmm_lang',$emmm_rs);
$smarty->display('emmm_langview.html');
?>
