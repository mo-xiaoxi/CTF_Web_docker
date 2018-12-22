<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
	
		if (!empty($_POST["sheng"])){
		$sheng = implode('|',$_POST["sheng"]);
		}else{
		$sheng = '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0';
		}

		$query = $db -> update("`emmm_freight`","`COL_Freightname` = '".admin_sql($_POST["COL_Freightname"])."',`COL_Freighttext` = '".$sheng."',`COL_Freightdefault` = '".admin_sql($_POST["COL_Freightdefault"])."',`COL_Freightweight` = '".admin_sql($_POST["COL_Freightweight"])."',`time` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_freight.php?id=emmm';
		require 'emmm_remind.php';
		
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_freight.php?id=emmm';
		require 'emmm_remind.php';
		
	}
			
}

$emmm_rs = $db -> select("*","`emmm_freight`","where `id` = ".intval($_GET['id']));
$emmm_text=array(
	'id' => $emmm_rs['id'],
	'title' => $emmm_rs['COL_Freightname'],
	'text' => explode("|",$emmm_rs['COL_Freighttext']),
	'default' => $emmm_rs['COL_Freightdefault'],
	'weight' => $emmm_rs['COL_Freightweight'],
);
$smarty->assign('emmm_freight',$emmm_text);
$smarty->display('emmm_freightview.html');
?>
