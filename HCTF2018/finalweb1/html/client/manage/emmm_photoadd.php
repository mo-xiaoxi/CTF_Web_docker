<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	$COL_Photoclass = explode("|",admin_sql($_POST["COL_Photoclass"]));
	if ($COL_Photoclass[0] == 0){
		$emmm_font = 4;
		$emmm_content = $emmm_adminfont['nocolumn'];
		$emmm_class = 'emmm_photo.php?id=emmm';
		require 'emmm_remind.php';
		exit;
	}
	$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Photocminimg"]));
	$COL_Photoimg = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Photoimg"]));
	
	if (!admin_sql($_POST["COL_Photodescription"])){
		$COL_Photocontent = utf8_strcut(strip_tags(admin_sql($_POST["COL_Photocontent"])), 0, 200);
	}else{
		$COL_Photocontent = admin_sql($_POST["COL_Photodescription"]);
	}

	//分词
	$word = $COL_Photocontent;
	$tag = admin_sql($_POST["COL_Phototag"]);
	include '../../function/emmm_sae.class.php';
	//结束
	
	if (!empty($_POST["COL_Photoattribute"])){
	$COL_Photoattribute = implode(',',$_POST["COL_Photoattribute"]);
	}else{
	$COL_Photoattribute = '';
	}
	
	if (!empty($_POST["COL_Photoname"])){
	$COL_Photoname = implode('|',$_POST["COL_Photoname"]);
	}else{
	$COL_Photoname = '';
	}

	$query = $db -> insert("`emmm_photo`","`COL_Phototitle` = '".admin_sql($_POST["COL_Phototitle"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Photocminimg` = '".$emmm_xiegang."',`COL_Photoimg` = '".$COL_Photoimg."',`COL_Photocontent` = '".admin_sql($_POST["COL_Photocontent"])."',`COL_Class` = '".$COL_Photoclass[0]."',`COL_Lang` = '".$COL_Photoclass[1]."',`COL_Tag` = '".$wordtag."',`COL_Sorting` = '".admin_sql($_POST["COL_Photosorting"])."',`COL_Attribute` = '".$COL_Photoattribute."',`COL_Url` = '".admin_sql($_POST["COL_Photourl"])."',`COL_Description` = '".compress_html($COL_Photocontent)."',`COL_Callback` = 0,`COL_Photoname` = '".admin_sql($COL_Photoname)."'","");
	$emmm_font = 1;
	$emmm_class = 'emmm_photo.php?id=emmm';
	require 'emmm_remind.php';
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node,0);	
$smarty->assign('photolist',$arr);
$smarty->display('emmm_photoadd.html');
?>
