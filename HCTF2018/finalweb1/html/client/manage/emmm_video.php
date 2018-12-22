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
			
			$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Videoimg"]));
			$COL_Videoclass = explode("|",admin_sql($_POST["COL_Videoclass"]));
			if ($COL_Videoclass[0] == 0){
				$emmm_font = 4;
				$emmm_content = $emmm_adminfont['nocolumn'];
				$emmm_class = 'emmm_video.php?id=emmm';
				require 'emmm_remind.php';
				exit;
			}
			
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
			
			if (!empty($_POST["COL_Videoattribute"])){
				$COL_Videoattribute = implode(',',$_POST["COL_Videoattribute"]);
			}else{
				$COL_Videoattribute = '';
			}

			$query = $db -> insert("`emmm_video`","`COL_Videotitle` = '".admin_sql($_POST["COL_Videotitle"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Videoimg` = '".$emmm_xiegang."',`COL_Videovurl` = '".admin_sql($_POST["COL_Videovurl"])."',`COL_Videoformat` = '".admin_sql($_POST["COL_Videoformat"])."',`COL_Videowidth` = '".admin_sql($_POST["COL_Videowidth"])."',`COL_Videoheight` = '".admin_sql($_POST["COL_Videoheight"])."',`COL_Videocontent` = '".admin_sql($_POST["COL_Videocontent"])."',`COL_Class` = '".$COL_Videoclass[0]."',`COL_Lang` = '".$COL_Videoclass[1]."',`COL_Tag` = '".$wordtag."',`COL_Sorting` = '".admin_sql($_POST["COL_Videosorting"])."',`COL_Attribute` = '".$COL_Videoattribute."',`COL_Url` = '".admin_sql($_POST["COL_Videourl"])."',`COL_Description` = '".compress_html($COL_Videocontent)."',`COL_Callback` = 0","");
			$emmm_font = 1;
			$emmm_class = 'emmm_video.php?id=emmm';
			require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

		$emmm_rs = $db -> select("`COL_Videoimg`","`emmm_video`","where id = ".intval($_GET['id']));
		if($emmm_rs[0] != ''){
			include './emmm_del.php';
			emmm_imgdel($emmm_rs[0]);
		}
		
		$query = $db -> del("emmm_video","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_video.php?id=emmm';
		require 'emmm_remind.php';

				
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_video.php?id=emmm';
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
	header("location: ./emmm_cmd.php?id=$op_b&lx=h&xx=video");
	exit;
	}elseif($_POST["h"] == "y") {
	header("location: ./emmm_cmd.php?id=$op_b&lx=y&xx=video");
	exit;
	}elseif($_POST["h"] == "s") {
	header("location: ./emmm_cmd.php?id=$op_b&lx=s&xx=video");
	exit;
	}
	
	if (!empty($_POST["COL_Videoattribute"])){
		$COL_Videoattribute = implode(',',$_POST["COL_Videoattribute"]);
	}else{
		$COL_Videoattribute = '';
	}

		$query = $db -> update("emmm_video","`COL_Attribute` = '".$COL_Videoattribute."'","where id in ($op_b)");
		$emmm_font = 1;
		$emmm_class = 'emmm_video.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_video.php?id=emmm';
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

function Videolist(){
	global $_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_video`","where `COL_Callback` = 0 order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("id,COL_Videotitle,COL_Videoimg,time,COL_Class,COL_Lang","`emmm_video`","where `COL_Callback` = 0 order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$c = columncycle($emmm_rs[4]);
		if($c){
			$rows[]=array(
				"i" => $i,
				"id" => $emmm_rs[0],
				"title" => $emmm_rs[1],
				"img" => $emmm_rs[2],
				"time" => $emmm_rs[3],
				"class" => $c,
				"lang" => $emmm_rs[5],
				"att" => listattribute($emmm_rs[0],'video'),
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
$smarty->assign('videolist',$arr);
Admin_click('视频管理','emmm_video.php?id=emmm');
$smarty->assign("video",Videolist());
$smarty->display('emmm_video.html');
?>
