<?php

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	$rows = array();
}elseif ($_GET["emmm_cms"] == "search"){

	$content = admin_sql($_POST['content']);
	$sid = admin_sql($_POST['sid']);
	$lang = admin_sql($_POST['lang']);

	header("location: emmm_adminsearch.php?emmm_cms=searchlist&content=".$content."&sid=".$sid."&lang=".$lang);
	exit;

}elseif ($_GET["emmm_cms"] == "searchlist"){

$content = admin_sql($_GET['content']);
$sid = admin_sql($_GET['sid']);
$lang = admin_sql($_GET['lang']);
$inputno = $emmm_adminfont['inputno'];

if($content == '' || $sid == '' || $lang == ''){
	exit("<script language=javascript> alert('".$inputno."');location.replace('".$emmm["webpath"]."');</script>");
}

if($sid == 'article'){

	$top = '`COL_Articletitle`,`COL_Articlecontent`';
	$where = "(`COL_Articletitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";

}elseif($sid == 'product'){

	$top = '`COL_Title`,`COL_Content`';
	$where = "(`COL_Title` LIKE '$content%' || `COL_Description` LIKE '%$content%')";
	
}elseif($sid == 'photo'){

	$top = '`COL_Phototitle`,`COL_Photocontent`';
	$where = "(`COL_Phototitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";
	
}elseif($sid == 'video'){

	$top = '`COL_Videotitle`,`COL_Videocontent`';
	$where = "(`COL_Videotitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";
	
}elseif($sid == 'down'){

	$top = '`COL_Downtitle`,`COL_Downcontent`';
	$where = "(`COL_Downtitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";
	
}elseif($sid == 'job'){

	$top = '`COL_Jobtitle`,`COL_Jobcontent`';
	$where = "(`COL_Jobtitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";
	
}elseif($sid == 'user'){

	$top = '`COL_Useremail`,`COL_Username`';
	$where = "(`COL_Useremail` LIKE '$content%' || `COL_Description` LIKE '%$content%')";
	
}elseif($sid == 'orders'){

	$top = '`COL_Ordersnumber`,`COL_Ordersusername`';
	$where = "(`COL_Ordersnumber` LIKE '$content%' || `COL_Description` LIKE '%$content%')";
	
}else{
	$top = '`COL_Articletitle`,`COL_Articlecontent`';
	$where = "(`COL_Articletitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";
}

	$listpage = 15;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_".$sid."`","where ".$where." order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);

	$query = $db -> listgo("`id`,".$top,"emmm_".$sid," where ".$where." order by id desc LIMIT ".$start.",".$listpage);
	$rows = array();
	$i=1;
	while($emmm_rs = $db -> whilego($query)){
			$title = str_replace($content,'<font color=red><b>'.$content.'</b></font>',$emmm_rs[1]);
			$scontent = str_replace($content,'<font color=red><b>'.$content.'</b></font>',$emmm_rs[2]);
			
			if($sid == 'article'){
			$url = 'emmm_articleview.php?id='.$emmm_rs[0];
			}elseif($sid == 'product'){
			$url = 'emmm_productedit.php?id='.$emmm_rs[0];
			}elseif($sid == 'photo'){
			$url = 'emmm_photoedit.php?id='.$emmm_rs[0];
			}elseif($sid == 'video'){
			$url = 'emmm_videoview.php?id='.$emmm_rs[0];
			}elseif($sid == 'down'){
			$url = 'emmm_downview.php?id='.$emmm_rs[0];
			}elseif($sid == 'job'){
			$url = 'emmm_jobview.php?id='.$emmm_rs[0];
			}elseif($sid == 'user'){
			$url = 'emmm_userview.php?id='.$emmm_rs[0];
			}elseif($sid == 'orders'){
			$url = 'emmm_ordersview.php?id='.$emmm_rs[0];
			}
			
			$rows[] = array(
				'i' => $i,
				'title' => $title,
				'content' => $scontent,
				'url' => $url,
			);
			$i+=1;
	}
}

$_page = new Page($emmmtotal['tiaoshu'],$listpage);
$smarty->assign('emmmpage',$_page->showpage());
$smarty->assign('search',$rows);
$smarty->display('emmm_adminsearch.html');
?>
