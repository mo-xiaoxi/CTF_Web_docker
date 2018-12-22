<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET['type'])){
	$a = $_GET['type'];
	$b = $_GET['couponclass'];
	$smarty->assign("a",array($a,$b));
}else{
	$a = 'a';
	$b = 0;
	$smarty->assign("a",array($a,$b));
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	$num = $db -> select("COL_Useremail","`emmm_user`","WHERE `COL_Useremail` = '".admin_sql($_POST["COL_Useremail"])."'");
	if ($num){
	
		$emmm_font = 3;
		$emmm_class = 'emmm_user.php?id=emmm';
		require 'emmm_remind.php';
	
			}else{			

			if (admin_sql($_POST["COL_Userpass"]) == ''){
				$COL_Userpass = admin_sql($_POST["password"]);
			}else{
			
				if (admin_sql($_POST["COL_Userpass"]) != admin_sql($_POST["COL_Userpassto"])){
					$emmm_font = 4;
					$emmm_content = '两次密码输入的不一样，请重新操作！';
					$emmm_class = 'emmm_user.php?id=emmm';
					require 'emmm_remind.php';
				}
			$COL_Userpass = admin_sql(substr(md5(md5($_REQUEST["COL_Userpass"])),0,16));
			}
			
			$query = $db -> insert("`emmm_user`","`COL_Userclass` = '".intval($_POST["COL_Userclass"])."',`COL_Userstatus` = '".intval($_POST["COL_Userstatus"])."',`COL_Useremail` = '".admin_sql($_POST["COL_Useremail"])."',`COL_Userpass` = '".$COL_Userpass."',`COL_Username` = '".admin_sql($_POST["COL_Username"])."',`COL_Usertel` = '".admin_sql($_POST["COL_Usertel"])."',`COL_Userqq` = '".admin_sql($_POST["COL_Userqq"])."',`COL_Useraliww` = '".admin_sql($_POST["COL_Useraliww"])."',`COL_Userskype` = '".admin_sql($_POST["COL_Userskype"])."',`COL_Useradd` = '".admin_sql($_POST["COL_Useradd"])."',`COL_Usersource` = '".admin_sql($_POST["COL_Usersource"])."',`COL_Userhead` = '".admin_sql($_POST["COL_Userhead"])."',`COL_Userip` = '".admin_sql($_POST["COL_Userip"])."',`COL_Userproblem` = '".admin_sql($_POST["COL_Userproblem"])."',`COL_Useranswer` = '".admin_sql($_POST["COL_Useranswer"])."',`COL_Usertext` = '".admin_sql($_POST["COL_Usertext"])."',`COL_Usercode` = '".randomkeys(18)."',`time` = '".date("Y-m-d H:i:s")."'","");
			$emmm_font = 1;
			$emmm_class = 'emmm_user.php?id=emmm';
			require 'emmm_remind.php';
			}
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){
	
		$query = $db -> del("emmm_user","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_user.php?id=emmm';
		require 'emmm_remind.php';

				
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_user.php?id=emmm';
		require 'emmm_remind.php';
	
	}
	
}elseif ($_GET["emmm_cms"] == "Batch"){ //发放优惠券
		

	if (strstr($COL_Adminpower,"34")){
	
		if (!empty($_POST["op_b"])){
		$op_b = $_POST["op_b"];
		}else{
		$op_b = array();
		}
		
		$md = $db -> select("COL_Md,COL_Timewin,COL_Moneygo","emmm_coupon","where id = ".intval($_GET['couponclass']));
		foreach($op_b as $op){
			$coupon = $db -> insert("emmm_couponlist","
			`COL_Couponid` =	".intval($_GET['couponclass']).",
			`COL_Username` =	'".dowith_sql($op)."',
			`COL_Type` =	0,
			`COL_Timewin` =	'".$md[1]."',
			`COL_Moneygo` =	'".$md[2]."',
			`COL_Md` =	'".$md[0]."',
			`COL_Time` =	'',
			`time` =	'".date("Y-m-d H:i:s")."'
			","");
		}
		
		$emmm_font = 1;
		$emmm_class = 'emmm_user.php?type=coupon&couponclass='.intval($_GET['couponclass']);
		require 'emmm_remind.php';
	
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_user.php?type=coupon&couponclass='.intval($_GET['couponclass']);
		require 'emmm_remind.php';
		
	}	
	
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

function Userproblem(){
	global $db;
	$query = $db -> listgo("id,COL_Userproblem","`emmm_userproblem`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1]
		);
	}
	return $rows;
}

function Userlist(){
	global $_page,$db,$smarty;
	$listpage = 40;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_user`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("id,COL_Useremail,COL_Username,COL_Usermoney,COL_Userintegral,COL_Userip,COL_Userstatus,time,COL_Usersource","`emmm_user`","order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"email" => $emmm_rs[1],
			"name" => $emmm_rs[2],
			"money" => $emmm_rs[3],
			"integral" => $emmm_rs[4],
			"ip" => $emmm_rs[5],
			"status" => $emmm_rs[6],
			"time" => $emmm_rs[7],
			"source" => $emmm_rs[8]
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

Admin_click('会员管理','emmm_user.php?id=emmm');
$emmm_rs = $db -> select("*","`emmm_usercontrol`","where `id` = 1");
$smarty->assign('emmm_usercontrol',$emmm_rs);
$smarty->assign('Userleve',Userleve());
$smarty->assign('Userproblem',Userproblem());
$smarty->assign("Userlist",Userlist());
$smarty->display('emmm_user.html');
?>
