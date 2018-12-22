<?php 


function emmm_imgdel($minimg='',$maximg='',$imgimg=''){
	global $db;
	$emmm_rs = $db -> select("`COL_Webfile`","`emmm_webdeploy`","where id = 1");
	if($emmm_rs[0] == 2){
		if($minimg != ''){
			if (file_exists('../../'.$minimg)){
				unlink('../../'.$minimg);
			}
		}
		if($maximg != ''){
			if (file_exists('../../'.$maximg)){
				unlink('../../'.$maximg);
			}
		}
		if($imgimg != ''){
			$img = explode('|',$imgimg);
			foreach($img as $op){
				$delimg .= unlink('../../'.$op);
			}
		}
	}else{
		echo '';
	}
}
?>
