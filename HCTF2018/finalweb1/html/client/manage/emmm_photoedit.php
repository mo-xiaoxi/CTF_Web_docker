<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["page"]) == ""){
	$smarty->assign("page",1);
	}else{
	$smarty->assign("page",$_GET["page"]);
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
	
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
		
		if (!empty($_POST["COL_Photoimg2"])){
		$COL_Photoimg2 = implode('|',$_POST["COL_Photoimg2"]);
			if (!empty($COL_Photoimg)){
			$COL_img = $COL_Photoimg2.'|'.$COL_Photoimg;
			}else{
			$COL_img = $COL_Photoimg2;
			}
		}else{
		$COL_Photoimg2 = '';
		$COL_img = $COL_Photoimg;
		}
		
		if (!empty($_POST["COL_Photoname"])){
		$COL_Photoname = implode('|',$_POST["COL_Photoname"]);
		}else{
		$COL_Photoname = '';
		}
		
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
		
		$query = $db -> update("`emmm_photo`","`COL_Phototitle` = '".admin_sql($_POST["COL_Phototitle"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Photocminimg` = '".$emmm_xiegang."',`COL_Photoimg` = '".$COL_img."',`COL_Photocontent` = '".admin_sql($_POST["COL_Photocontent"])."',`COL_Class` = '".$COL_Photoclass[0]."',`COL_Lang` = '".$COL_Photoclass[1]."',`COL_Tag` = '".$wordtag."',`COL_Sorting` = '".admin_sql($_POST["COL_Photosorting"])."',`COL_Attribute` = '".$COL_Photoattribute."',`COL_Url` = '".admin_sql($_POST["COL_Photourl"])."',`COL_Description` = '".compress_html($COL_Photocontent)."',`COL_Photoname` = '".admin_sql($COL_Photoname)."'","where id = ".intval($_GET["id"]));
		$emmm_font = 1;
		$emmm_class = 'emmm_photo.php?id=emmm&page='.$_GET["page"];
		require 'emmm_remind.php';

				
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_photo.php?id=emmm';
		require 'emmm_remind.php';
		
	}
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node,0);	
$smarty->assign('photolist',$arr);
$emmm_rs = $db -> select("*","`emmm_photo`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_photo',$emmm_rs);
$emmm_text=explode(",",$emmm_rs['COL_Attribute']);
for($i=0;$i<sizeof($emmm_text);$i++){ 
	$selected[] = $emmm_text[$i];
}
$smarty->assign('selected',$selected); 
$emmmh_qx=array('头条','热门','滚动','推荐'); 
$smarty->assign('emmmh_qx',$emmmh_qx); 
if ($emmm_rs['COL_Photoimg'] != ''){
	$COL_Photoimg = explode("|",$emmm_rs['COL_Photoimg']);
	$COL_Photoname = explode("|",$emmm_rs['COL_Photoname']);
	$i = 1;
	$ii = 0;
	foreach($COL_Photoimg as $u){
		$COL_Photoimgarr = explode("|",$u);
		foreach($COL_Photoimgarr as $newstr){
			$rows[]=array(
				"i" => $i,
				"img" => $newstr,
				"imgname" => $COL_Photoname[$ii],
			); 
			$i = $i + 1;
			$ii = $ii + 1;
		}
	}
}else{
	$rows = '';
}
$smarty->assign('photoimglist',$rows);
$smarty->display('emmm_photoedit.html');
?>
