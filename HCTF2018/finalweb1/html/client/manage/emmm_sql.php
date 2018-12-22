<?php 

include 'emmm_admin.php';

if (isset($_GET["emmm_cms"]) == "add"){

	if($_POST["kl"] == ''){
	
		$emmm_font = 4;
		$emmm_content = '口令码不能为空!';
		$emmm_class = 'emmm_sql.php?id=emmm';
		require 'emmm_remind.php';
							
	}elseif($_POST["kl"] != $emmm['validation']){
	
		$emmm_font = 4;
		$emmm_content = '口令码错误!';
		$emmm_class = 'emmm_sql.php?id=emmm';
		require 'emmm_remind.php';

	}elseif($_POST["sql"] == ''){
	
		$emmm_font = 4;
		$emmm_content = 'SQL语句不能为空!';
		$emmm_class = 'emmm_sql.php?id=emmm';
		require 'emmm_remind.php';

	}
	
	$query = '';
	$sql = stripslashes($_POST['sql']);
	$sql = explode(';',$sql);
	foreach($sql as $op){
		$query = $db -> create($op,2);	
	}
	
	$emmm_font = 5;
	$emmm_img = 'ok.png';
	$emmm_content = '操作成功!';
	$emmm_class = 'emmm_sql.php?id=emmm';
	require 'emmm_remind.php';

}

$smarty->display('emmm_sql.html');
?>