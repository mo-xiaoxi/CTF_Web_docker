<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "reply"){

	if (strstr($COL_Adminpower,"34")){
	
		$query = $db -> update("`emmm_comment`","`COL_Gocontent` = '".admin_sql($_POST["COL_Gocontent"])."',`COL_Gotime` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_comment.php?opcms=articleview';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_comment.php?opcms=articleview';
		require 'emmm_remind.php';
	
	}
			
}elseif ($_GET["emmm_cms"] == "Batch"){


	if (strstr($COL_Adminpower,"35")){
	
		if (!empty($_POST["op_b"])){
			$op_b = implode(',',$_POST["op_b"]);
		}else{
			$op_b = '';
		}
		
		$query = $db -> del("emmm_comment","where id in ($op_b)");
		$emmm_font = 1;
		$emmm_class = 'emmm_comment.php?opcms=articleview';
		require 'emmm_remind.php';
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_comment.php?opcms=articleview';
		require 'emmm_remind.php';
		
	}	
			
}

function emmm_comment($id,$type){
	global $emmm,$db;

	switch($type){
	case "articleview":
		$emmm_rs = $db -> select("id,COL_Class,COL_Articletitle,COL_Lang","`emmm_article`","where id = ".$id);
		return '<a href="'.$emmm['webpath'].'?'.$emmm_rs[3].'-'.$type.'-'.$emmm_rs[1].'-'.$emmm_rs[0].'.html" target="_blank">'.$emmm_rs[2].'</a>';
	break;

	case "photoview":
		$emmm_rs = $db -> select("id,COL_Class,COL_Phototitle,COL_Lang","`emmm_photo`","where id = ".$id);
		return '<a href="'.$emmm['webpath'].'?'.$emmm_rs[3].'-'.$type.'-'.$emmm_rs[1].'-'.$emmm_rs[0].'.html" target="_blank">'.$emmm_rs[2].'</a>';
	break;

	case "downview":
		$emmm_rs = $db -> select("id,COL_Class,COL_Downtitle,COL_Lang","`emmm_down`","where id = ".$id);
		return '<a href="'.$emmm['webpath'].'?'.$emmm_rs[3].'-'.$type.'-'.$emmm_rs[1].'-'.$emmm_rs[0].'.html" target="_blank">'.$emmm_rs[2].'</a>';
	break;

	case "jobview":
		$emmm_rs = $db -> select("id,COL_Class,COL_Jobtitle,COL_Lang","`emmm_job`","where id = ".$id);
		return '<a href="'.$emmm['webpath'].'?'.$emmm_rs[3].'-'.$type.'-'.$emmm_rs[1].'-'.$emmm_rs[0].'.html" target="_blank">'.$emmm_rs[2].'</a>';
	break;

	case "videoview":
		$emmm_rs = $db -> select("id,COL_Class,COL_Videotitle,COL_Lang","`emmm_video`","where id = ".$id);
		return '<a href="'.$emmm['webpath'].'?'.$emmm_rs[3].'-'.$type.'-'.$emmm_rs[1].'-'.$emmm_rs[0].'.html" target="_blank">'.$emmm_rs[2].'</a>';
	break;

	case "productview":
		$emmm_rs = $db -> select("id,COL_Class,COL_Title,COL_Lang","`emmm_product`","where id = ".$id);
		return '<a href="'.$emmm['webpath'].'?'.$emmm_rs[3].'-'.$type.'-'.$emmm_rs[1].'-'.$emmm_rs[0].'.html" target="_blank">'.$emmm_rs[2].'</a>';
	break;
	}

}
$gett = admin_sql($_GET['opcms']);
function Commentlist(){
	global $_page,$db,$smarty,$gett;
	$listpage = 30;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_comment`","where COL_Type = '".$gett."' order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("*","`emmm_comment`","where COL_Type = '".$gett."' order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		if($emmm_rs['COL_Scoring'] == 0){
			$COL_Scoring = explode('|','0|0|0');
		}else{
			$COL_Scoring = explode('|',$emmm_rs['COL_Scoring']);
		}
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs['id'],
			"content" => $emmm_rs['COL_Content'],
			"class" => $emmm_rs['COL_Class'],
			"type" => $emmm_rs['COL_Type'],
			"name" => $emmm_rs['COL_Name'],
			"ip" =>$emmm_rs['COL_Ip'],
			"vote" => $emmm_rs['COL_Vote'],
			"scoring" => $COL_Scoring,
			"gocontent" => $emmm_rs['COL_Gocontent'],
			"gotime" => $emmm_rs['COL_Gotime'],
			"time" => $emmm_rs['time'],
			"sj" => emmm_comment($emmm_rs['COL_Class'],$emmm_rs['COL_Type']),
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}
$smarty->assign("comment",Commentlist());
$smarty->display('emmm_comment.html');
?>
