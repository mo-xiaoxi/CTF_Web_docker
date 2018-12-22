<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';

function myscandir($path){

	$mydir=dir($path);
	
	$rows=array();
	$i = 1;
	while($file=$mydir->read()){
		$p=$path.'/'.$file;
	
		if(($file!=".") AND ($file!="..")){
			$rows[] = array('i'=>$i,'url'=>mb_convert_encoding($p,"utf-8","gb2312"));
		}
		
	$i = $i + 1;
	}  
	return $rows;
}

Admin_click('数据库操作','emmm_bak.php?id=emmm');
$smarty->assign("myscandir",myscandir('../../function/backup'));
$smarty->display('emmm_bak.html');
?>