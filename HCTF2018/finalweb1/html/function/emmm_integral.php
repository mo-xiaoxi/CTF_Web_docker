<?php 
/* 
* 积分处理
*/ 
include '../config/emmm_code.php';
include '../config/emmm_config.php';
include '../config/emmm_Language.php';
include './emmm_function.class.php';

session_start();
date_default_timezone_set('Asia/Shanghai');

$outlogin = $emmm_adminfont['outlogin'];
$lackintegral = $emmm_adminfont['lackintegral'];
$integraltook = $emmm_adminfont['integraltook'];
$urltype = $_REQUEST["type"];

if(!isset($_SESSION['username'])){
	echo '<h5 style="width:100%; text-align:center; float:left; margin-top:50px;">请先登录在兑换！</h5>';
	exit;
}

$id = intval($_GET["id"]);
$emmm_rs = $db -> select("`id`,`COL_Title`,`COL_Integralexchange`,`COL_Integralok`","`emmm_product`","where `id` = ".$id);
if($emmm_rs < 1 || $emmm_rs[3] == 0){
	echo '此商品不支持用积分兑换!';
	exit(0);
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	$useremail = $db -> select("`COL_Userintegral`","`emmm_user`","where `COL_Useremail` = '".$_SESSION['username']."'");
	if($useremail[0] < $emmm_rs[2]){
		echo "<script language=javascript> alert('".$lackintegral."');history.go(-1);</script>";
		exit;
	}else{
		// 1.8.2 生成统一订单列表
		function orders_buylist($a, $b, $c, $d, $e, $f){
			global $db;
			$buy = $db -> insert("`emmm_orderslist`","`COL_Ordersnum` = '".'OP'.randomkeys(7)."',`COL_Ordersid` = '".$a."',`COL_Orderscouponid` = ".intval($b).",`COL_Ordersusername` = '".admin_sql($c)."',`COL_Ordersusertel` = '".admin_sql($d)."',`COL_Ordersuseradd` = '".admin_sql($e)."',`COL_Orderscouponmoney` = ".admin_sql($f).",`COL_Ordersuser` = '".$_SESSION['username']."',`time` = '".date("Y-m-d H:i:S")."'","");
			return $db -> insertid();
		}
		$newid = orders_buylist($id,0,dowith_sql($_POST['name']),dowith_sql($_POST['tel']),dowith_sql($_POST['add']),0);
		
		$query = $db -> insert("`emmm_orders`","`COL_Ordersname` = '".$emmm_rs[1]."',`COL_Ordersid` = '".$emmm_rs[0]."',`COL_Ordersnum` = 1,`COL_Ordersemail` = '".$_SESSION['username']."',`COL_Ordersusername` = '".dowith_sql($_POST['name'])."',`COL_Ordersusertel` = '".dowith_sql($_POST['tel'])."',`COL_Ordersuseradd` = '".dowith_sql($_POST['add'])."',`time` = '".date("Y-m-d H:i:s")."',`COL_Ordersnumber` = 'OP".randomkeys(7)."',`COL_Orderspay` = 2,`COL_Orderssend` = 1,`COL_Integralok` = 1,`COL_Ordersfreight` = 0,`COL_Ordersclassid` = ".intval($newid),"");
		$dbid = $db -> insertid();
		$dblist = $db -> update("emmm_orderslist","`COL_Ordersid` = '".$dbid."'","where id = ".intval($newid));
		$userint = $db -> update("`emmm_user`","`COL_Userintegral` = `COL_Userintegral` - ".$emmm_rs[2],"where `COL_Useremail` = '".$_SESSION['username']."'");
		
		echo '<h5 style="width:100%; text-align:center; float:left; margin-top:50px;">兑换成功！在会员中心查看！</h5>';
		exit;
	}
}


?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style type="text/css">
*{ font-size:14px; font-family:Arial, Helvetica, sans-serif;}
body{ background:url(../skin/ingb.jpg) top center}
.input { width:90%; height:25px; line-height:25px; border:1px #f4f4f4 solid;}
.input2 { width:90%; height:25px; line-height:25px; border:1px #f4f4f4 solid;}
</style>
<link rel="stylesheet" href="plugs/Validform/style.css" type="text/css" />
<script type="text/javascript" src="plugs/jquery/1.7.2/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="plugs/Validform/Validform_v5.3.2.js"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="?emmm_cms=add&id=<?php echo $id; ?>&type=<?php echo $urltype; ?>" class="registerform">
<table width="100%" border="0" cellpadding="2">
  <tr>
    <td width="85"><div align="right">商品名称：</div></td>
    <td>&nbsp;<?php echo $emmm_rs[1];?></td>
  </tr>
  <tr>
    <td><div align="right">所需积分：</div></td>
    <td>&nbsp;<?php echo $emmm_rs[2];?></td>
  </tr>
  <tr>
    <td><div align="right">收货人姓名：</div></td>
    <td><input type="text" name="name" class="input" datatype="*" nullmsg="收货人姓名是必填项!" /> *</td>
  </tr>
  <tr>
    <td><div align="right">收货人电话：</div></td>
    <td><input type="text" name="tel" class="input" datatype="m" nullmsg="收货人电话是必填项!" /> *</td>
  </tr>
  <tr>
    <td><div align="right">收货人地址：</div></td>
    <td><input type="text" name="add" class="input2" datatype="*" nullmsg="收货人地址是必填项!" /> *</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="确认兑换" style="width:100px; height:35px; border:0px; background:#CC0000; color:#FFFFFF;border-radius:5px" /></td>
  </tr>
</table>
</form>

<script type="text/javascript">
$(function(){
	$(".registerform").Validform();
})
</script>
</body>
</html>
