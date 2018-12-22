<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php'; 

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif($_GET["emmm_cms"] == "add"){

	$num = $db -> select("COL_Lang","`emmm_lang`","WHERE `COL_Lang` = '".admin_sql($_POST["COL_Lang"])."'");
	if ($num != false){
	
		$emmm_font = 3;
		$emmm_class = 'emmm_lang.php';
		require 'emmm_remind.php';
	
			}else{

		$query = $db -> insert("`emmm_lang`","`COL_Lang` = '".admin_sql($_POST["COL_Lang"])."',`COL_Font` = '".admin_sql($_POST["COL_Font"])."',`COL_Note` = '".admin_sql($_POST["COL_Note"])."',`COL_Langtitle` = '".admin_sql($_POST["COL_Langtitle"])."',`COL_Langkeywords` = '".admin_sql($_POST["COL_Langkeywords"])."',`COL_Langdescription` = '".admin_sql($_POST["COL_Langdescription"])."'","");
		
		$emmm_font = 1;
		$emmm_class = 'emmm_lang.php';
		require 'emmm_remind.php';
	
	}
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

		$query = $db -> del("emmm_lang","where id = ".intval($_GET['id']));			
		$emmm_font = 2;
		$emmm_class = 'emmm_lang.php';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_lang.php';
		require 'emmm_remind.php';
	
	}

}

function Langlist(){
	global $db;
	$query = $db -> listgo("*","`emmm_lang`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs['id'],
			"lang" => $emmm_rs['COL_Lang'],
			"font" => $emmm_rs['COL_Font'],
			"default" => $emmm_rs['COL_Default'],
			"note" => $emmm_rs['COL_Note'],
			"langtitle" => $emmm_rs['COL_Langtitle'],
			"keywords" => $emmm_rs['COL_Langkeywords'],
			"description" => $emmm_rs['COL_Langdescription']
		);
	}
	return $rows;
}
Admin_click('网站语言配置','emmm_lang.php');
$smarty->assign("langlist",Langlist());
$smarty->display('emmm_lang.html');
?>
