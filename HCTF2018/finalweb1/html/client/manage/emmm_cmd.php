<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	
	echo '';
	
	}elseif ($_GET["emmm_cms"] == "cmd"){
	
	if($_POST["lx"]=="y" || $_POST["lx"]=="r"){
		
		$lm = explode("|",$_POST["lm"]);
		if($lm[0] == 0){
			exit($emmm_adminfont['accessno']);
		}
		
		if($_POST["xx"]=="product")
		{
			$query = $db -> update("emmm_".$_POST["xx"],"`COL_Class` = ".intval($lm[0]).",`COL_Down` = 2,`COL_Lang` = '".admin_sql($lm[1])."'","where id in (".admin_sql($_POST["id"]).")");
		}else{
			$query = $db -> update("emmm_".$_POST["xx"],"`COL_Class` = ".intval($lm[0]).",`COL_Callback` = 0,`COL_Lang` = '".admin_sql($lm[1])."'","where id in (".admin_sql($_POST["id"]).")");
		}
		
		$emmm_font = 1;
		$emmm_class = 'emmm_'.$_POST["xx"].'.php?id=emmm';
		require 'emmm_remind.php';
			
	}elseif($_POST["lx"]=="s"){
	
		$op_b = explode(',',$_POST["id"]);
		include './emmm_del.php';
		if($_POST["xx"]=="article"){
			
			for($i = 0; $i < count($op_b); $i ++){
				$query = $db -> del("emmm_article","where id = ".intval($op_b[$i]));
			}
			
		}elseif($_POST["xx"]=="product"){
			
			for($i = 0; $i < count($op_b); $i ++){
				$emmm_rs = $db -> select("`COL_Minimg`,`COL_Maximg`,`COL_Img`","`emmm_product`","where id = ".intval($op_b[$i]));
				if($emmm_rs[0] != '' || $emmm_rs[1] != '' || $emmm_rs[2] != ''){
					emmm_imgdel($emmm_rs[0],$emmm_rs[1],$emmm_rs[2]);
				}
				$query = $db -> del("emmm_product","where id = ".intval($op_b[$i]));
			}
			
		}elseif($_POST["xx"]=="photo"){
			
			for($i = 0; $i < count($op_b); $i ++){
				$emmm_rs = $db -> select("`COL_Photocminimg`,`COL_Photoimg`","`emmm_photo`","where id = ".intval($op_b[$i]));
				if($emmm_rs[0] != '' || $emmm_rs[1] != ''){
					emmm_imgdel($emmm_rs[0],'',$emmm_rs[1]);
				}
				$query = $db -> del("emmm_photo","where id = ".intval($op_b[$i]));
			}
			
		}elseif($_POST["xx"]=="video"){
			
			for($i = 0; $i < count($op_b); $i ++){
				$emmm_rs = $db -> select("`COL_Videoimg`","`emmm_video`","where id = ".intval($op_b[$i]));
				if($emmm_rs[0] != ''){
					emmm_imgdel($emmm_rs[0]);
				};
				$query = $db -> del("emmm_video","where id = ".intval($op_b[$i]));
			}
			
		}elseif($_POST["xx"]=="down"){
			
			for($i = 0; $i < count($op_b); $i ++){
				$emmm_rs = $db -> select("`COL_Downimg`,`COL_Downdurl`","`emmm_down`","where id = ".intval($op_b[$i]));
				if($emmm_rs[0] != '' || $emmm_rs[1] != ''){
					emmm_imgdel($emmm_rs[0],$emmm_rs[1],'');
				}
				$query = $db -> del("emmm_down","where id = ".intval($op_b[$i]));
			}
			
		}elseif($_POST["xx"]=="job"){
			
			for($i = 0; $i < count($op_b); $i ++){
				$query = $db -> del("emmm_job","where id = ".intval($op_b[$i]));
			}
			
		}
		
		$emmm_font = 1;
		$emmm_class = 'emmm_'.$_POST["xx"].'.php?id=emmm';
		require 'emmm_remind.php';

	}elseif($_POST["lx"]=="h"){
	
		$query = $db -> update("emmm_".$_POST["xx"],"`COL_Callback` = 1","where id in (".$_POST["id"].")");
		$emmm_font = 1;
		$emmm_class = 'emmm_'.$_POST["xx"].'.php?id=emmm';
		require 'emmm_remind.php';
		
	}
}

$op= new Tree(columnlist(""));
$arr=$op->leaf();
$smarty->assign('articlelist',$arr);
$smarty->assign('id',$_GET["id"]);
$smarty->assign('xx',$_GET["xx"]);
$smarty->assign('lx',$_GET["lx"]);
$smarty->display('emmm_cmd.html');
?>
