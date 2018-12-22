<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

		$COL_Usermoney = !empty($_POST["COL_Usermoney"])?$_POST["COL_Usermoney"]:"0";
		$COL_Userintegral = !empty($_POST["COL_Userintegral"])?$_POST["COL_Userintegral"]:"0";
		$COL_Usercontent = !empty($_POST["COL_Usercontent"])?$_POST["COL_Usercontent"]:admin_sql($_POST["COL_Useradmin"]).'后台操作';
		
		$num = $db -> select("COL_Useremail","`emmm_user`","WHERE `COL_Useremail` = '".admin_sql($_POST["COL_Useremail"])."' or `COL_Usertel` = '".admin_sql($_POST["COL_Useremail"])."'");
		if ($num == false){
		
			$emmm_font = 5;
			$emmm_img = 'no.png';
			$emmm_content = '会员账户不存在！';
			$emmm_class = 'emmm_pay.php?id=emmm';
			require 'emmm_remind.php';
			
		}else{
			
			if($_POST['jj'] == 'a'){
				$query = $db -> update("`emmm_user`","`COL_Usermoney` = `COL_Usermoney` + '".$COL_Usermoney."',`COL_Userintegral` = `COL_Userintegral` + '".$COL_Userintegral."'","where `COL_Useremail` = '".admin_sql($_POST["COL_Useremail"])."' or `COL_Usertel` = '".admin_sql($_POST["COL_Useremail"])."'");
				$jj = '+';
			}else{
				$query = $db -> update("`emmm_user`","`COL_Usermoney` = `COL_Usermoney` - '".$COL_Usermoney."',`COL_Userintegral` = `COL_Userintegral` - '".$COL_Userintegral."'","where `COL_Useremail` = '".admin_sql($_POST["COL_Useremail"])."' or `COL_Usertel` = '".admin_sql($_POST["COL_Useremail"])."'");
				$jj = '-';
			}
			
		}

		$query = $db -> insert("`emmm_userpay`","`COL_Useremail` = '".admin_sql($_POST["COL_Useremail"])."',`COL_Usermoney` = '".$COL_Usermoney."',`COL_Userintegral` = '".$COL_Userintegral."',`COL_Usercontent` = '".$COL_Usercontent."',`COL_Useradmin` = '".admin_sql($_POST["COL_Useradmin"])."',`COL_Uservoucherone` = '0',`COL_Uservouchertwo` = '0',`time` = '".date("Y-m-d H:i:s")."',`COL_Userpaytype`='".$jj."'","");
		
		$emmm_font = 1;
		$emmm_class = 'emmm_pay.php?id=emmm';
		require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){
	
		$query = $db -> del("emmm_userpay","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_pay.php?id=emmm';
		require 'emmm_remind.php';
		
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_pay.php?id=emmm';
		require 'emmm_remind.php';
	
	}
}

function paylist(){
	global $_page,$db,$smarty;
	$listpage = 25;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_userpay`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("id,COL_Useremail,COL_Usermoney,COL_Userintegral,COL_Usercontent,COL_Useradmin,time,COL_Userpaytype","`emmm_userpay`","order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"email" => $emmm_rs[1],
			"money" => $emmm_rs[2],
			"integral" => $emmm_rs[3],
			"content" => $emmm_rs[4],
			"admin" => $emmm_rs[5],
			"time" => $emmm_rs[6],
			"paytype" => $emmm_rs[7]
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

Admin_click('会员充值','emmm_pay.php?id=emmm');
$smarty->assign("COL_Adminname",$COL_Adminname);
$smarty->assign("pay",paylist());
$smarty->display('emmm_userpay.html');
?>
