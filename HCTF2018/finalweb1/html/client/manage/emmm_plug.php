<?php

include './emmm_admin.php';
include './emmm_checkadmin.php'; 
include './emmm_page.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"35")){
		
		$emmm_rs = $db -> select("`COL_Plugid`,`COL_Plugclass`,`COL_Plugmysql`","`emmm_plus`","where id = ".intval($_GET['id']));
		$file = '../../function/data/'.$emmm_rs[1].'.'.$emmm_rs[0].'.php';
		$result = unlink($file);
		$retval = $db -> drop("emmm_p_".$emmm_rs[2]);
		$query = $db -> del("emmm_plus","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_plug.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_plug.php?id=emmm';
		require 'emmm_remind.php';
	
	}

}

function Pluslist(){
	global $_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_plus`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("id,COL_Name,COL_Version,COL_Versiondate,COL_Author,COL_Fraction,COL_About,COL_Pluspath,COL_Time,COL_Off","`emmm_plus`","order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1],
			"version" => $emmm_rs[2],
			"versiondate" => $emmm_rs[3],
			"author" => $emmm_rs[4],
			"fraction" => $emmm_rs[5],
			"about" => $emmm_rs[6],
			"pluspath" => $emmm_rs[7],
			"time" => $emmm_rs[8],
			"off" => $emmm_rs[9],
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}


function myscandir($path){
	$mydir=dir($path);		
	$rows=array();
	while($file=$mydir->read()){
		$p=$path.'/'.$file;
		if(($file!=".") AND ($file!="..")){
			if($p != '../plus/emmm_plus.php' AND $p != '../plus/Model.txt' AND $p != '../plus/emmm_plus_admin.php' AND $p != '../plus/style.css' AND $p != '../plus/index.htm'){
			if(file_exists($p.'/Author.tpl')){
				$author = $p.'/Author.tpl';
					}else{
				$author = '无名称，无介绍';
			}
			$rows[] = array('url'=>mb_convert_encoding($p,"utf-8","gb2312"),'name'=>$file,'author'=>file_get_contents($author),);
			}
		}
	}  
	return $rows;
}
	
$smarty->assign("Pluslist",Pluslist());
$smarty->assign("Addpluslist",myscandir('../plus'));
$smarty->display('emmm_pluslist.html');
?>
