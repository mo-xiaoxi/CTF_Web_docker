<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["page"]) == ""){
	$smarty->assign("page",1);
	}else{
	$smarty->assign("page",$_GET["page"]);
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

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

	$query = $db -> insert("`emmm_article`","`COL_Articletitle` = '".admin_sql($_POST["COL_Articletitle"])."',`COL_Articleauthor` = '".admin_sql($_POST["COL_Articleauthor"])."',`COL_Articlesource` = '".admin_sql($_POST["COL_Articlesource"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Articlecontent` = '".admin_sql($_POST["COL_Articlecontent"])."',`COL_Tag` = '".$wordtag."',`COL_Class` = '".$COL_Articleclass[0]."',`COL_Lang` = '".$COL_Articleclass[1]."',`COL_Sorting` = '".admin_sql($_POST["COL_Articlesorting"])."',`COL_Attribute` = '".$COL_Articleattribute."',`COL_Url` = '".admin_sql($_POST["COL_Articleurl"])."',`COL_Description` = '".compress_html($COL_Articlecontent)."',`COL_Minimg` = '".$COL_Minimg."',`COL_Callback` = 0","");
	$emmm_font = 1;
	$emmm_class = 'emmm_article.php?id=emmm';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){
	
		$query = $db -> del("emmm_article","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_article.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_article.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}elseif ($_GET["emmm_cms"] == "Batch"){


	if (strstr($COL_Adminpower,"34")){
	
		if (!empty($_POST["op_b"])){
		$op_b = implode(',',$_POST["op_b"]);
		}else{
		$op_b = '';
		}
		
		if ($_POST["h"] == "h") {
		header("location: ./emmm_cmd.php?id=$op_b&lx=h&xx=article");
		exit;
		}elseif($_POST["h"] == "y") {
		header("location: ./emmm_cmd.php?id=$op_b&lx=y&xx=article");
		exit;
		}elseif($_POST["h"] == "s") {
		header("location: ./emmm_cmd.php?id=$op_b&lx=s&xx=article");
		exit;
		}
		
		if (!empty($_POST["COL_Articleattribute"])){
		$COL_Articleattribute = implode(',',$_POST["COL_Articleattribute"]);
		}else{
		$COL_Articleattribute = '';
		}

		$query = $db -> update("emmm_article","`COL_Attribute` = '".$COL_Articleattribute."'","where id in ($op_b)");
		$emmm_font = 1;
		$emmm_class = 'emmm_article.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_article.php?id=emmm';
		require 'emmm_remind.php';
		
	}	
			
}

function columncycle($cid = 1){
	global $db,$id;
	$emmm_rs = $db -> select("`COL_Columntitle`","`emmm_column`","where id = ".$cid." and (`COL_Adminopen` LIKE '%$id%' or `COL_Adminopen` LIKE '0%')");
	if($emmm_rs){
		return $emmm_rs[0];
	}else{
		return false;
	}
}

function Articlelist(){
	global $_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_article`","where `COL_Callback` = 0 order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("id,COL_Articletitle,COL_Articleauthor,COL_Articlesource,time,COL_Articlecontent,COL_Class,COL_Lang,COL_Sorting","`emmm_article`","where `COL_Callback` = 0 order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$c = columncycle($emmm_rs[6]);
		if($c){
			$rows[] = array(
				"i" => $i,
				"id" => $emmm_rs[0],
				"title" => $emmm_rs[1],
				"author" => $emmm_rs[2],
				"source" => $emmm_rs[3],
				"time" => $emmm_rs[4],
				"content" => $emmm_rs[5],
				"class" => $c,
				"lang" => $emmm_rs[7],
				"sorting" => $emmm_rs[8],
				"att" => listattribute($emmm_rs[0],'article'),
			);
		}
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node,0);	
$smarty->assign('articlelist',$arr);
Admin_click('文章管理','emmm_article.php?id=emmm');
$smarty->assign("article",Articlelist());
$smarty->display('emmm_article.html');
?>
