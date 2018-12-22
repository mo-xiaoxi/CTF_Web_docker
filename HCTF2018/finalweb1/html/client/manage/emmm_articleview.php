<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["page"]) == ""){
	$smarty->assign("page",0);
	}else{
	$smarty->assign("page",$_GET["page"]);
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){

		$COL_Articleclass = explode("|",admin_sql($_POST["COL_Articleclass"]));
		if ($COL_Articleclass[0] == 0){
			$emmm_font = 4;
			$emmm_content = $emmm_adminfont['nocolumn'];
			$emmm_class = 'emmm_article.php?id=emmm';
			require 'emmm_remind.php';
			exit;
		}
		
		if (!admin_sql($_POST["COL_Articledescription"])){
			$COL_Articlecontent = utf8_strcut(strip_tags(admin_sql($_POST["COL_Articlecontent"])), 0, 200);
		}else{
			$COL_Articlecontent = admin_sql($_POST["COL_Articledescription"]);
		}

		//分词
		$word = $COL_Articlecontent;
		$tag = admin_sql($_POST["COL_Articletag"]);
		include '../../function/emmm_sae.class.php';
		//结束
		
		$COL_Articleclass = explode("|",admin_sql($_POST["COL_Articleclass"]));
		
		if (!empty($_POST["COL_Articleattribute"])){
		$COL_Articleattribute = implode(',',$_POST["COL_Articleattribute"]);
		}else{
		$COL_Articleattribute = '';
		}

		if(empty($_POST["tu"])){
			if(empty($_POST["a_upimg"])){
				$COL_Minimg = 'skin/noimage.png';
			}else{
				$COL_Minimg = str_replace($emmm['webpath']."function","function",admin_sql($_POST["a_upimg"]));
			}
		}else{
				$con = stripslashes($_POST["COL_Articlecontent"]);
				preg_match_all("/<img.*\>/isU",$con,$ereg);
				@$img=$ereg[0][0];
				$p="#src=('/|\"/)(.*)('|\")#isU";
				preg_match_all ($p, $img, $img1);
				@$COL_Minimg =$img1[2][0];
				if(!$COL_Minimg){
					$COL_Minimg='skin/noimage.png';
				}
		}

		$query = $db -> update("`emmm_article`","`COL_Articletitle` = '".admin_sql($_POST["COL_Articletitle"])."',`COL_Articleauthor` = '".admin_sql($_POST["COL_Articleauthor"])."',`COL_Articlesource` = '".admin_sql($_POST["COL_Articlesource"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Articlecontent` = '".admin_sql($_POST["COL_Articlecontent"])."',`COL_Tag` = '".$wordtag."',`COL_Class` = '".$COL_Articleclass[0]."',`COL_Lang` = '".$COL_Articleclass[1]."',`COL_Sorting` = '".admin_sql($_POST["COL_Articlesorting"])."',`COL_Attribute` = '".$COL_Articleattribute."',`COL_Url` = '".admin_sql($_POST["COL_Articleurl"])."',`COL_Description` = '".compress_html($COL_Articlecontent)."',`COL_Minimg` = '".$COL_Minimg."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_article.php?id=emmm&page='.$_GET["page"];
		require 'emmm_remind.php';
		
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_article.php?id=emmm';
		require 'emmm_remind.php';
		
	}
			
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node,0);	
$smarty->assign('articlelist',$arr);
$emmm_rs = $db -> select("*","`emmm_article`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_article',$emmm_rs);
$emmm_text=explode(",",$emmm_rs['COL_Attribute']);
for($i=0;$i<sizeof($emmm_text);$i++){ 
	$selected[] = $emmm_text[$i]; 
}
$smarty->assign('selected',$selected); 
$emmmh_qx=array('头条','热门','滚动','推荐'); 
$smarty->assign('emmmh_qx',$emmmh_qx);
$smarty->display('emmm_articleview.html');
?>
