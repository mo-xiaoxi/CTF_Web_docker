<?php
ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);

require_once 'emmmapi.php';
require_once "lib/WxPay.Api.php";
require_once "WxPay.NativePay.php";
require_once 'log.php';

/*
 * Emmm 逻辑模块
 * 验证开始
*/
$rs = $db -> select("`id`,`COL_Add`,`COL_Addtel`,`COL_Addname`","`emmm_usershopadd`","where COL_Addindex = 1 && `COL_Adduser` = '".$_SESSION['username']."'");
if(!$rs){
	exit("<script language=javascript> alert('先创建物流信息!~');history.go(-1);</script>");
}
	
if(isset($_POST['id'])){
	$shopid = implode(',',$_POST["id"]);
}else{
	$shopid = 0;
}
if ($shopid == 0){
	exit("请先选购商品!");
}
if(preg_match('/[a-zA-Z]/',$shopid)){
	exit("no!"); 
}else{
	$shopid = $shopid;
}

$idsafe = str_replace(",","",$shopid);
$idsafe = md5($idsafe.$emmm['safecode']);
if($_POST['idmd5'] != $idsafe){
	exit("no!");
}

$query = $db -> listgo("`COL_Ordersnum`,`COL_Ordersusermarket`,`COL_Ordersfreight`,`COL_Ordersid`,`COL_Ordersproductatt`","`emmm_orders`","where `id` in (".$shopid.") && COL_Ordersemail = '".$_SESSION['username']."'");
$zj = '';
while($emmm_rs = $db -> whilego($query)){
	$zj += ($emmm_rs[0] * $emmm_rs[1]) + $emmm_rs[2];
}

if($zj < 0.01){
	exit("<script language=javascript> alert('金额不能低于0.01元');history.go(-1);</script>");
}

$zje = $zj * 100;

//优惠券
if($_POST['coupon'] == 'emmm'){ 
	
	$zje = $zje;
	$coupon = explode('|','0|0|0');
	
}else{
	
	$coupon = explode('|',$_POST['coupon']);
	if($zje < $coupon[2]){
		
		exit("<script language=javascript> alert('优惠券已过期,无法使用!~');history.go(-1);</script>");
		
	}else{
		
		$c = $db -> select("`id`,`COL_Timewin`","`emmm_couponlist`","where `id` = ".intval($coupon[0])." && `COL_Type` = 0 && `COL_Md` = '".dowith_sql($coupon[1])."' && `COL_Username` = '".$_SESSION['username']."'");
		if($c){
			
			$date = date("Y-m-d H:i:s");
			if($c[1] != '0000-00-00 00:00:00'){
				if(strtotime($date) > strtotime($c[1])){
					exit("<script language=javascript> alert('优惠券已过期,无法使用!~');history.go(-1);</script>");
				}
			}
			
			$zje = $zje - $coupon[2];
			
		}else{
			
			exit("no!");
			
		}
		
	}
	
}
	
$notify = new NativePay();
/**
 * 流程：
 * 1、调用统一下单，取得code_url，生成二维码
 * 2、用户扫描二维码，进行支付
 * 3、支付完成之后，微信服务器会通知支付成功
 * 4、在支付成功通知中需要查单确认是否真正支付成功（见：notify.php）
 */
$input = new WxPayUnifiedOrder();
$input->SetBody("商品购买微信付款");
$input->SetAttach("safeinfo|".$shopid."|".$safecode['id']."|".$safecode['md5code']."|".$coupon[0]."|".$coupon[2]."|".$rs[0]);
$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
$input->SetTotal_fee($zje);
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("emmm");
$input->SetNotify_url("http://".$web['weburl']."/function/api/weixinpay/notify.php");
$input->SetTrade_type("NATIVE");
$input->SetProduct_id("FK_".date("Yhmdms"));
$result = $notify->GetPayUrl($input);
$url2 = $result["code_url"];
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <title>微信付款</title>
	<LINK href="/function/plugs/YIQI-UI/YIQI-UI.min.css" rel="stylesheet">
</head>
<body>
<div id="YIQI-UI">
	<div class="center-980">
	<div class="text-c pt-50"><img src="<?php echo $web['weblogo'];?>" width="220"></div>
	<div class="text-c pt-10"><h3>微信扫一扫付款</h3></div>
	<div class="text-c pt-20"><img alt="扫码支付" src="/function/api/weixinpay/qrcode.php?data=<?php echo urlencode($url2);?>" style="width:220px;height:220px;"/></div>
	<div class="text-c pt-20">
	
		<a href="/client/user/" class="btn btn-success radius-6 pt-5 pb-5 pl-20 pr-20">付款成功</a>
		<a href="/" onclick="alert('请联系网站客服人员！');" class="btn btn-danger radius-6 pt-5 pb-5 pl-20 pr-20">付款失败</a>
	</div>
	</div>
</div>
</body>
</html>
