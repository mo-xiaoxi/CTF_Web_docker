<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

	if($_POST["COL_Ordersexpress"] == 1){
	$COL_Ordersexpress = $_POST["COL_Ordersexpress2"];
	}else{
	$COL_Ordersexpress = $_POST["COL_Ordersexpress"];
	}

	if (strstr($COL_Adminpower,"34")){
		
		if($_POST["COL_Orderssend"] == 2){
			$COL_Ordersgotime = date("Y-m-d H:i:s");
		}else{
			$COL_Ordersgotime = '0000-00-00 00:00:00';
		}

		$query = $db -> update("`emmm_orders`","`COL_Ordersusermarket` = '".admin_sql($_POST["COL_Ordersusermarket"])."',`COL_Orderssend` = '".admin_sql($_POST["COL_Orderssend"])."',`COL_Ordersexpress` = '".admin_sql($COL_Ordersexpress)."',`COL_Ordersexpressnum` = '".admin_sql($_POST["COL_Ordersexpressnum"])."',`COL_Ordersfreight` = '".admin_sql($_POST["COL_Ordersfreight"])."',`COL_Ordersgotime` = '".$COL_Ordersgotime."',`COL_Sign` = '".admin_sql($_POST["COL_Sign"])."',`COL_Ordersadminoper` = 1","where id = ".intval($_GET['id']));
		
		//短信提醒
		if($_POST["COL_Orderssend"] == 2){
			
			$a = plugsclass::plugs(6);
			if($a)
			{
				$rs = $db -> select("COL_Websitemin","emmm_web","where id = 1");
				$ok = $db -> select("COL_Userbuysms","emmm_productset","where id = 1");
				if($ok[0] == 1)
				{
					
					include '../../function/api/telcode/user_regcode.class.php';
					$COL_Usertel = $_POST['COL_Ordersusertel'];
					$c = "您的订单[".$_POST["COL_Ordersnumber"]."]我们已经发货啦，快递公司:".$COL_Ordersexpress."快递单号:".$_POST["COL_Ordersexpressnum"].$rs[0];
					$s = '';
					$smskey -> smsconfig($COL_Usertel,$c,$s,1);
					
				}
			}
			
		}
		//邮件提醒			
		if($_POST["COL_Orderssend"] == 2){
			$emmm_mail = 'send';
			$COL_Ordersexpress = $COL_Ordersexpress;
			$COL_Ordersexpressnum = $_POST["COL_Ordersexpressnum"];
			$COL_Ordersnumber = $_POST["COL_Ordersnumber"];
			$COL_Useremail = admin_sql(htmlspecialchars($_POST["COL_Useremail"]));
			include '../../function/emmm_mail.class.php';
		}
		
		$emmm_font = 1;
		$emmm_class = 'emmm_orders.php?id=emmm';
		require 'emmm_remind.php';
		
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_orders.php?id=emmm';
		require 'emmm_remind.php';
		
	}
	
}

$emmm_rs = $db -> select("*","`emmm_orders`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_orders',$emmm_rs);
$smarty->display('emmm_ordersview.html');
?>
