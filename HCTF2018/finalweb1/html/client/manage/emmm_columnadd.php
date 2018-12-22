<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	if($_POST["COL_Columntitle"] == '' && $_POST["COL_Columntitle_pl"] == ''){
		echo '标题或批量标题不能全部为空。请重新操作 <a href="javascript:history.go(-1)">返回</a>';
		exit;
	}
	
	$templist = str_replace("{L}",admin_sql($_POST["COL_Lang"]),admin_sql($_POST["COL_Templist"]));
	$tempview = str_replace("{L}",admin_sql($_POST["COL_Lang"]),admin_sql($_POST["COL_Tempview"]));
	$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Img"]));
			
	if (!empty($_POST["COL_Userright"])){
		$COL_Userright = implode(',',$_POST["COL_Userright"]);
	}else{
		$COL_Userright = '0';
	}
	
	if (!empty($_POST["COL_Adminopen"])){
		$COL_Adminopen = implode(',',$_POST["COL_Adminopen"]);
		if($COL_Adminopen == "0"){
			$COL_Adminopen = '0,1';
		}else{
			$COL_Adminopen = $COL_Adminopen;
		}
	}else{
		$COL_Adminopen = '0,1';
	}
	
	if(empty($_POST["pl"])){
		
		//未批量
		$query = $db -> insert("`emmm_column`","`COL_Uid` = '".admin_sql(intval($_POST["COL_Uid"]))."',`COL_Lang` = '".admin_sql($_POST["COL_Lang"])."',`COL_Columntitle` = '".admin_sql($_POST["COL_Columntitle"])."',`COL_Columntitleto` = '".admin_sql($_POST["COL_Columntitleto"])."',`COL_Model` = '".admin_sql($_POST["COL_Model"])."',`COL_Templist` = '".$templist."',`COL_Tempview` = '".$tempview."',`COL_Url` = '".admin_sql($_POST["COL_Url"])."',`COL_About` = '".admin_sql($_POST["COL_About"])."',`COL_Hide` = '".admin_sql($_POST["COL_Hide"])."',`COL_Sorting` = '".admin_sql(intval($_POST["COL_Sorting"]))."',`COL_Briefing` = '".admin_sql($_POST["COL_Briefing"])."',`COL_Img` = '".$emmm_xiegang."',`COL_Userright` = '".$COL_Userright."',`COL_Weight` = '".admin_sql($_POST["COL_Weight"])."',`COL_Adminopen` = '".admin_sql($COL_Adminopen)."'","");
		
		}else{
		
		$emmm_fgbt = explode("|",admin_sql($_POST["COL_Columntitle_pl"]));
		foreach ($emmm_fgbt as $op){
			$query = $db -> insert("`emmm_column`","`COL_Uid` = '".admin_sql(intval($_POST["COL_Uid"]))."',`COL_Lang` = '".admin_sql($_POST["COL_Lang"])."',`COL_Columntitle` = '".$op."',`COL_Columntitleto` = '".admin_sql($_POST["COL_Columntitleto"])."',`COL_Model` = '".admin_sql($_POST["COL_Model"])."',`COL_Templist` = '".$templist."',`COL_Tempview` = '".$tempview."',`COL_Url` = '".admin_sql($_POST["COL_Url"])."',`COL_About` = '".admin_sql($_POST["COL_About"])."',`COL_Hide` = '".admin_sql($_POST["COL_Hide"])."',`COL_Sorting` = '".admin_sql(intval($_POST["COL_Sorting"]))."',`COL_Briefing` = '".admin_sql($_POST["COL_Briefing"])."',`COL_Img` = '".$emmm_xiegang."',`COL_Userright` = '".$COL_Userright."',`COL_Weight` = '".admin_sql($_POST["COL_Weight"])."',`COL_Adminopen` = '".admin_sql($COL_Adminopen)."'","");
		}

	}

	$emmm_font = 1;
	$emmm_class = 'emmm_column.php';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){
		
	$templist = str_replace("{L}",admin_sql($_POST["COL_Lang"]),admin_sql($_POST["COL_Templist"]));
	$tempview = str_replace("{L}",admin_sql($_POST["COL_Lang"]),admin_sql($_POST["COL_Tempview"]));
	$emmm_xiegang = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Img"]));
	
	if (!empty($_POST["COL_Userright"])){
		$COL_Userright = implode(',',$_POST["COL_Userright"]);
	}else{
		$COL_Userright = '0';
	}
	
	if (!empty($_POST["COL_Adminopen"])){
		$COL_Adminopen = implode(',',$_POST["COL_Adminopen"]);
		if($COL_Adminopen == "0"){
			$COL_Adminopen = '0,1';
		}else{
			$COL_Adminopen = $COL_Adminopen;
		}
	}else{
		$COL_Adminopen = '0,1';
	}
		$query = $db -> update("`emmm_column`","`COL_Uid` = '".admin_sql(intval($_POST["COL_Uid"]))."',`COL_Lang` = '".admin_sql($_POST["COL_Lang"])."',`COL_Columntitle` = '".admin_sql($_POST["COL_Columntitle"])."',`COL_Columntitleto` = '".admin_sql($_POST["COL_Columntitleto"])."',`COL_Model` = '".admin_sql($_POST["COL_Model"])."',`COL_Templist` = '".$templist."',`COL_Tempview` = '".$tempview."',`COL_Url` = '".admin_sql($_POST["COL_Url"])."',`COL_About` = '".admin_sql($_POST["COL_About"])."',`COL_Hide` = '".admin_sql($_POST["COL_Hide"])."',`COL_Sorting` = '".admin_sql(intval($_POST["COL_Sorting"]))."',`COL_Briefing` = '".admin_sql($_POST["COL_Briefing"])."',`COL_Img` = '".$emmm_xiegang."',`COL_Userright` = '".$COL_Userright."',`COL_Weight` = '".admin_sql($_POST["COL_Weight"])."',`COL_Adminopen` = '".admin_sql($COL_Adminopen)."'","where id = ".intval($_GET["id"]));
		$emmm_font = 1;
		$emmm_class = 'emmm_column.php';
		require 'emmm_remind.php';
			
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_column.php';
		require 'emmm_remind.php';
		
	}
			
}

function Langlist(){
	global $db;
	$query = $db -> listgo("id,COL_Lang,COL_Font,COL_Default","`emmm_lang`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"lang" => $emmm_rs[1],
			"font" => $emmm_rs[2],
			"default" => $emmm_rs[3]
		);
	}
	return $rows;
}

function Userleve(){
	global $db;
	$query = $db -> listgo("id,COL_Userlevename","`emmm_userleve`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1]
		);
	}
	return $rows;
}

function Userleveto(){
	global $db;
	$query = $db -> listgo("COL_Userlevename","`emmm_userleve`","order by id asc");
	$rows[] = '任何人';
	while($emmm_rs = $db -> whilego($query)){
		$rows[] = $emmm_rs[0];
	}
	return $rows;
}

function Adminleve(){
	global $db;
	$query = $db -> listgo("id,COL_Adminname","`emmm_admin`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1]
		);
	}
	return $rows;
}
//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node,0);	
$smarty->assign('arr',$arr);
Admin_click('创建网站栏目','emmm_columnadd.php');
if (isset($_GET["emmm_cms"])){
	$emmm_rs = $db -> select("*","`emmm_column`","where `id` = ".intval($_GET["id"]));
	$smarty -> assign("columnedit",$emmm_rs);

	$emmm_text = explode(",",$emmm_rs['COL_Userright']);
	for($i = 0;$i < sizeof($emmm_text);$i++){ 
		$selected[] = $emmm_text[$i]; 
	}
	$smarty -> assign('selected',$selected); 
	$emmmh_qx = Userleveto(); 
	$smarty -> assign('emmmh_qx',$emmmh_qx);
}
$smarty->assign("langlist",Langlist());
$smarty->assign("userleve",Userleve());
$smarty->assign("adminleve",Adminleve());
$smarty->display('emmm_columnadd.html');
?>
