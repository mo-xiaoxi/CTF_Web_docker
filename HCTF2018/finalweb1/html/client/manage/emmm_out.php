<?php

include 'emmm_admin.php';
session_start();

if($_GET['emmm_admin']=="logout"){
	
	unset($_SESSION['emmm_adminname']);
	unset($_SESSION['emmm_outtime']);
	unset($_SESSION['emmm_out']);
	echo"<script>location.href='../..".$_GET['out']."';</script>";
	exit();
		
}elseif($_GET['emmm_admin'] == "del"){

	if(isset($_POST["radiobutton"]) == ""){

		echo '';
		
	}else{
		function dir_clear($dir){
			$directory = dir($dir);
			while($entry = $directory->read()){
				$filename = $dir.'/'.$entry;
				if(is_file($filename)) {
					@unlink($filename);
				}
			}
			$directory->close();
		}
		dir_clear("../../function/_compile/");
		$emmm_font = 5;
		$emmm_content = '清理成功！';
		$emmm_img = 'ok.png';
		$emmm_class = 'templates/emmm_cache.html';
		require 'emmm_remind.php';
		exit();
	}

	if (!empty($_POST["checkbox"])){
	$checkbox = implode(',',$_POST["checkbox"]);
	}else{
	$checkbox = '';
	}
	$checkbox = explode(',',$checkbox);
	
	$dir = "../../function/_cache";
	if(is_dir($dir)){
		
		$handle = opendir($dir);
		
		if(@chdir($dir)){
		while($file = readdir($handle)){
			$file_arr[]= $file;
		}
		$s_len = sizeof($file_arr);
		$c_len = count($file_arr);
		$i = 0;
		while($i<= $s_len){
			foreach ($checkbox as $op){
				if(@preg_match("/^".$op."/",$file_arr[$i])){
					unlink($file_arr[$i]);
				}
			}
		$i++;
		}
	}
	closedir($handle);
	}

	$emmm_font = 5;
	$emmm_content = '清理成功！';
	$emmm_img = 'ok.png';
	$emmm_class = 'templates/emmm_cache.html';
	require 'emmm_remind.php';
	exit();

}

?>
