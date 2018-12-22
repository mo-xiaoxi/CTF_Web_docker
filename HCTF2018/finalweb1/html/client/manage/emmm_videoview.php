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

			$COL_Videoclass = explode("|",admin_sql($_POST["COL_Videoclass"]));
			if ($COL_Videoclass[0] == 0){
				$emmm_font = 4;
				$emmm_content = $emmm_adminfont['nocolumn'];
				$emmm_class = 'emmm_video.php?id=emmm';
				require 'emmm_remind.php';
				exit;
			}
			
			$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Videoimg"]));
			if (!admin_sql($_POST["COL_Videodescription"])){
				$COL_Videocontent = utf8_strcut(strip_tags(admin_sql($_POST["COL_Videocontent"])), 0, 200);
			}else{
				$COL_Videocontent = admin_sql($_POST["COL_Videodescription"]);
			}
			
			//分词
			$word = $COL_Videocontent;
			$tag = admin_sql($_POST["COL_Videotag"]);
			include '../../function/emmm_sae.class.php';
			//结束
			
			$COL_Videoclass = explode("|",admin_sql($_POST["COL_Videoclass"]));
			
			if (!empty($_POST["COL_Videoattribute"])){
				$COL_Videoattribute = implode(',',$_POST["COL_Videoattribute"]);
			}else{
				$COL_Videoattribute = '';
			}

			$query = $db -> update("`emmm_video`","`COL_Videotitle` = '".admin_sql($_POST["COL_Videotitle"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Videoimg` = '".$emmm_xiegang."',`COL_Videovurl` = '".admin_sql($_POST["COL_Videovurl"])."',`COL_Videoformat` = '".admin_sql($_POST["COL_Videoformat"])."',`COL_Videowidth` = '".admin_sql($_POST["COL_Videowidth"])."',`COL_Videoheight` = '".admin_sql($_POST["COL_Videoheight"])."',`COL_Videocontent` = '".admin_sql($_POST["COL_Videocontent"])."',`COL_Class` = '".$COL_Videoclass[0]."',`COL_Lang` = '".$COL_Videoclass[1]."',`COL_Tag` = '".$wordtag."',`COL_Sorting` = '".admin_sql($_POST["COL_Videosorting"])."',`COL_Attribute` = '".$COL_Videoattribute."',`COL_Url` = '".admin_sql($_POST["COL_Videourl"])."',`COL_Description` = '".compress_html($COL_Videocontent)."'","where id = ".intval($_GET['id']));
			
			$emmm_font = 1;
			$emmm_class = 'emmm_video.php?id=emmm&page='.$_GET["page"];
			require 'emmm_remind.php';

		
		}else{
			
			$emmm_font = 4;
			$emmm_content = '权限不够，无法编辑内容！';
			$emmm_class = 'emmm_video.php?id=emmm';
			require 'emmm_remind.php';
			
		}			
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node,0);	
$smarty->assign('videolist',$arr);

$emmm_rs = $db -> select("*","`emmm_video`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_video',$emmm_rs);
$emmm_text=explode(",",$emmm_rs['COL_Attribute']);
for($i=0;$i<sizeof($emmm_text);$i++){ 
	$selected[] = $emmm_text[$i]; 
}
$smarty->assign('selected',$selected); 
$emmmh_qx=array('头条','热门','滚动','推荐'); 
$smarty->assign('emmmh_qx',$emmmh_qx);
$smarty->display('emmm_videoview.html');
?>
