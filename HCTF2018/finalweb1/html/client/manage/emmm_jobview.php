<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["page"]) == ""){
	$smarty->assign("page",1);
	}else{
	$smarty->assign("page",$_GET["page"]);
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){
			
	if (strstr($COL_Adminpower,"34")){
	
		$COL_Jobclass = explode("|",admin_sql($_POST["COL_Jobclass"]));
		if ($COL_Jobclass[0] == 0){
		$emmm_font = 4;
		$emmm_content = $emmm_adminfont['nocolumn'];
		$emmm_class = 'emmm_job.php?id=emmm';
		require 'emmm_remind.php';
		exit;
		}
	
		if (!admin_sql($_POST["COL_Jobdescription"])){
			$COL_Jobcontent = utf8_strcut(strip_tags(admin_sql($_POST["COL_Jobcontent"])), 0, 200);
		}else{
			$COL_Jobcontent = admin_sql($_POST["COL_Jobdescription"]);
		}
		
		//分词
		$word = $COL_Jobcontent;
		$tag = admin_sql($_POST["COL_Jobtag"]);
		include '../../function/emmm_sae.class.php';
		//结束
		
		$COL_Jobclass = explode("|",admin_sql($_POST["COL_Jobclass"]));
		
		if (!empty($_POST["COL_Jobattribute"])){
		$COL_Jobattribute = implode(',',$_POST["COL_Jobattribute"]);
		}else{
		$COL_Jobattribute = '';
		}

		$query = $db -> update("`emmm_job`","`COL_Jobtitle` = '".admin_sql($_POST["COL_Jobtitle"])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Jobwork` = '".admin_sql($_POST["COL_Jobwork"])."',`COL_Jobadd` = '".admin_sql($_POST["COL_Jobadd"])."',`COL_Jobnature` = '".admin_sql($_POST["COL_Jobnature"])."',`COL_Jobexperience` = '".admin_sql($_POST["COL_Jobexperience"])."',`COL_Jobeducation` = '".admin_sql($_POST["COL_Jobeducation"])."',`COL_Jobnumber` = '".admin_sql($_POST["COL_Jobnumber"])."',`COL_Jobage` = '".admin_sql($_POST["COL_Jobage"])."',`COL_Jobwelfare` = '".admin_sql($_POST["COL_Jobwelfare"])."',`COL_Jobwage` = '".admin_sql($_POST["COL_Jobwage"])."',`COL_Jobcontact` = '".admin_sql($_POST["COL_Jobcontact"])."',`COL_Jobtel` = '".admin_sql($_POST["COL_Jobtel"])."',`COL_Jobcontent` = '".admin_sql($_POST["COL_Jobcontent"])."',`COL_Class` = '".$COL_Jobclass[0]."',`COL_Lang` = '".$COL_Jobclass[1]."',`COL_Tag` = '".$wordtag."',`COL_Sorting` = '".admin_sql($_POST["COL_Jobsorting"])."',`COL_Attribute` = '".$COL_Jobattribute."',`COL_Url` = '".admin_sql($_POST["COL_Joburl"])."',`COL_Description` = '".compress_html($COL_Jobcontent)."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_job.php?id=emmm&page='.$_GET["page"];
		require 'emmm_remind.php';

	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_job.php?id=emmm';
		require 'emmm_remind.php';
		
	}
		
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node,0);	
$smarty->assign('joblist',$arr);

$emmm_rs = $db -> select("*","`emmm_job`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_job',$emmm_rs);
//属性
$emmm_text=explode(",",$emmm_rs['COL_Attribute']);
for($i=0;$i<sizeof($emmm_text);$i++){ 
	$selected[] = $emmm_text[$i]; 
}
$smarty->assign('selected',$selected); 
$emmmh_qx=array('头条','热门','滚动','推荐'); 
$smarty->assign('emmmh_qx',$emmmh_qx);
$smarty->display('emmm_jobview.html');
?>
