<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php'; 

if(isset($_GET["our"]) == ""){
	echo '';
}else{

	if ($_POST['pass'] != ''){
		$query = $db -> update("`emmm_admin`","`COL_Adminpass` = '".admin_sql(substr(md5(md5($_POST['pass'])),0,16))."'","where id = ".intval($_GET['id']));
		echo "<script language=javascript> alert('".$emmm_adminfont['upok']."');history.go(-1);</script>";
	}else{
		$query = $db -> update("`emmm_admin`","`COL_Adminpass` = '".admin_sql($_POST['passto'])."'","where id = ".intval($_GET['id']));
		echo "<script language=javascript> alert('".$emmm_adminfont['upok']."');history.go(-1);</script>";
	}
	
}
$smarty->assign('COL_Adminname',$COL_Adminname);
$smarty->assign('COL_Adminpower',$COL_Adminpower);
$smarty->display('emmm_assistuse.html');
?>
