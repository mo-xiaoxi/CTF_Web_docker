<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if (!empty($_POST["COL_Adclass"])){
		$COL_Adclass = implode(',',$_POST["COL_Adclass"]);
	}else{
		$COL_Adclass = '';
	}

	$query = $db -> update("`emmm_ad`","`COL_Adcontent` = '".admin_sql($_POST["COL_Adcontent"])."',`COL_Adclass` = '".$COL_Adclass."',`time` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
	$emmm_font = 1;
	$emmm_class = 'emmm_ad.php?id=emmm';
	require 'emmm_remind.php';
			
}

$emmm_rs = $db -> select("*","`emmm_ad`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_ad',$emmm_rs);
$emmm_text2=explode(",",$emmm_rs['COL_Adclass']);
for($o=0;$o<sizeof($emmm_text2);$o++){ 
	$selected2[] = $emmm_text2[$o]; 
} 
$smarty->assign('selected2',$selected2); 
$emmmh_qx2=array('首页','文章','商品','图集','视频','下载','招聘','单页面','会员登录左侧'); 
$smarty->assign('emmmh_qx2',$emmmh_qx2);
$smarty->display('emmm_adview.html');
?>
