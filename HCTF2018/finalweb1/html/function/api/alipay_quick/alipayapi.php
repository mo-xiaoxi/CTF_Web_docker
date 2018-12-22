<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝即时到账交易接口接口</title>
</head>
<?php
/* *
 * 功能：即时到账交易接口接入页
 * 版本：3.3
 * 修改日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 *************************注意*************************
 * 如果您在接口集成过程中遇到问题，可以按照下面的途径来解决
 * 1、商户服务中心（https://b.alipay.com/support/helperApply.htm?action=consultationApply），提交申请集成协助，我们会有专业的技术工程师主动联系您协助解决
 * 2、商户帮助中心（http://help.alipay.com/support/232511-16307/0-16307.htm?sh=Y&info_type=9）
 * 3、支付宝论坛（http://club.alipay.com/read-htm-tid-8681712.html）
 * 如果不想使用扩展功能请把扩展功能参数赋空值。
 */
 
require_once("emmmapi.php");
require_once("alipay.config.php");
require_once("lib/alipay_submit.class.php");

$alipay = $_POST['alipay'];

if($alipay == 'fk'){
	
	//验证开始
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
	
	//优惠券
	if($_POST['coupon'] == 'emmm'){ 
		
		$zj = $zj;
		$coupon = explode('|','0|0|0');
		
	}else{
		
		$coupon = explode('|',$_POST['coupon']);
		if($zj < $coupon[2]){
			
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
				
				$zj = $zj - $coupon[2];
				
			}else{
				
				exit("no!");
				
			}
			
		}
		
	}
	
	//卖家账户
	$alipay_username = $api[4];
	//商户订单号
	$alipay_tradeno = 'FK_'.date("Yhmdms");
	//订单名称
	$alipay_tradename = '商品付款(订单ID：'.$shopid.')';
	//付款金额
	$alipay_money = $zj;
	//订单描述
	$alipay_body = "fk|".$shopid."|".$safecode['id']."|".$safecode['md5code']."|".$coupon[0]."|".$coupon[2]."|".$rs[0];
	//商品展示地址
	$alipay_url = 'http://'.$web['weburl'].$emmm['webpath'].'client/user/';
	
}elseif($alipay == 'cz'){
	
	if($_POST['WIDtotal_fee'] < 0.01){
		exit("<script language=javascript> alert('金额不能低于0.01元');history.go(-1);</script>");
	}
	//卖家账户
	$alipay_username = $api[4];
	//商户订单号
	$alipay_tradeno = 'CZ_'.date("Yhmdms");
	//订单名称
	$alipay_tradename = '用户账户充值';
	//付款金额
	$alipay_money = $_POST['WIDtotal_fee'];
	//订单描述
	$alipay_body = $_POST['WIDbody']."!|emmm|".$safecode['id']."|".$safecode['md5code'];
	//商品展示地址
	$alipay_url = 'http://'.$web['weburl'].$emmm['webpath'].'client/user/?cn-userpay.html';
	
}else{
	
	exit("no!");
	
}



/**************************请求参数**************************/

	$payment_type = "1";
	$notify_url = 'http://'.$web['weburl'].$emmm['webpath'].'function/api/alipay_quick/notify_url.php';
	$return_url = 'http://'.$web['weburl'].$emmm['webpath'].'function/api/alipay_quick/return_url.php';
	$seller_email = $alipay_username;
	$out_trade_no = $alipay_tradeno;
	$subject = $alipay_tradename;
	$total_fee = $alipay_money;
	$body = $alipay_body;
	$show_url = $alipay_url;
	$anti_phishing_key = "";
	$exter_invoke_ip = "";

/************************************************************/

//构造要请求的参数数组，无需改动
$parameter = array(
	"service" => "create_direct_pay_by_user",
	"partner" => trim($alipay_config['partner']),
	"payment_type"	=> $payment_type,
	"notify_url"	=> $notify_url,
	"return_url"	=> $return_url,
	"seller_email"	=> $seller_email,
	"out_trade_no"	=> $out_trade_no,
	"subject"	=> $subject,
	"total_fee"	=> $total_fee,
	"body"	=> $body,
	"show_url"	=> $show_url,
	"anti_phishing_key"	=> $anti_phishing_key,
	"exter_invoke_ip"	=> $exter_invoke_ip,
	"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
);

$alipaySubmit = new AlipaySubmit($alipay_config);
$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "下一步或等待自动跳转");
echo $html_text;
?>
</body>
</html>
