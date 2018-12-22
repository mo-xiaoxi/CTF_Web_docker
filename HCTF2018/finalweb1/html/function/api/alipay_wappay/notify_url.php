<?php
/* *
 * 功能：支付宝服务器异步通知页面
 * 版本：3.3
 * 日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。


 *************************页面功能说明*************************
 * 创建该页面文件时，请留心该页面文件中无任何HTML代码及空格。
 * 该页面不能在本机电脑测试，请到服务器上做测试。请确保外部可以访问该页面。
 * 该页面调试工具请使用写文本函数logResult，该函数已被默认关闭，见alipay_notify_class.php中的函数verifyNotify
 * 如果没有收到该页面返回的 success 信息，支付宝会在24小时内按一定的时间策略重发通知
 */
 
include '../../../config/emmm_config.php';
include '../../emmm_function.class.php';

$api = plugsclass::plugs(8);
if (!$api){
	exit(0);
}

require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");

//计算得出通知验证结果
date_default_timezone_set('Asia/Shanghai'); //设置时区
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyNotify();

if($verify_result) {
	$out_trade_no = $_POST['out_trade_no'];
	$trade_no = $_POST['trade_no'];
	$trade_status = $_POST['trade_status'];
	$total_fee = $_POST['total_fee'];
	$body = $_POST['body'];


    if($_POST['trade_status'] == 'TRADE_FINISHED') {
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//请务必判断请求时的total_fee、seller_id与通知时获取的total_fee、seller_id为一致的
			//如果有做过处理，不执行商户的业务程序
				
		//注意：
		//退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知

        //调试用，写文本函数记录程序运行情况是否正常
        //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
    }
    else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//请务必判断请求时的total_fee、seller_id与通知时获取的total_fee、seller_id为一致的
			//如果有做过处理，不执行商户的业务程序
				
		//注意：
		//付款完成后，支付宝系统发送该交易状态通知

        //调试用，写文本函数记录程序运行情况是否正常
        //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
    }

	//Emmm 校验逻辑
	//支付验证
	$emmmpay = explode('|',$body);
	if(md5($emmmpay[2].$emmm['safecode']) != $emmmpay[3]){
		$msg = "支付验证出错!~ 请联系网站管理员";
		file_put_contents('./error.txt', $msg);
		exit;
	}
	
	//判断此订单是否已经付款
	$query = $db -> select("id","`emmm_userpay`","WHERE `COL_Uservoucherone` = '".dowith_sql($out_trade_no)."' && `COL_Uservouchertwo` = '".dowith_sql($trade_no)."'");
	if($query){
		
		$msg = "订单已存在或return_url.php优先完成,不做处理";
		file_put_contents('./error.txt', $msg);
		return false;
		
	}else{
		
		//获取会员账号
		$rs = $db -> select("`COL_Useremail`","`emmm_user`","WHERE `id` = ".intval($emmmpay[2]));
		
		if($emmmpay[0] == 'fk'){
			//付款
			$query = $db -> listgo("`COL_Ordersnum`,`COL_Ordersusermarket`,`COL_Ordersfreight`,`COL_Ordersid`,`COL_Ordersproductatt`","`emmm_orders`","where `id` in (".$emmmpay[1].")");
			$zj = '';
			while($emmm_rs = $db -> whilego($query)){
				$zj += ($emmm_rs[0] * $emmm_rs[1]) + $emmm_rs[2];
			
				//减去库存
				$queryto = $db -> listgo("`COL_Specifications`,`id`,`COL_Title`,`COL_Market`,`COL_Webmarket`,`COL_Integral`","`emmm_product`","where id = ".$emmm_rs[3]); 
				if($emmm_rsrs = $db -> whilego($queryto)){
					$o = '|'.$emmm_rsrs[0];
					$u = $emmm_rs[4];
					$r = $emmm_rs[0];
					$php = preg_replace("/((?:^|\|(?:[\A-Z0-9]+),$u),(?:[\d.]+,){2})(\d+)/e", "'$1'.($2-$r)", $o);
					$querythree = $db -> update("`emmm_product`","`COL_Specifications` = '".substr($php,1)."' where id = ".$emmm_rs[3],"");
				}
				
				//加入积分表
				if($emmm_rsrs[5] > 0){
					$queryfor = $db -> insert("`emmm_integral`","`COL_Iid` = '".$emmm_rsrs[1]."', `COL_Iname` = '".$emmm_rsrs[2]."', `COL_Imarket` = '".$emmm_rsrs[3]."', `COL_Iwebmarket` = '".$emmm_rsrs[4]."', `COL_Iintegral` = '".$emmm_rsrs[5]."',`COL_Iconfirm` = 0, `COL_Iuseremail` = '".$rs[0]."', `time` = '".date("Y-m-d H:i:s")."'","");
				}
			}
			
			// 1.8.2 生成统一订单列表
			function orders_buylist($a, $b, $c, $d, $e, $f){
				global $db,$rs,$out_trade_no;
				$buy = $db -> insert("`emmm_orderslist`","`COL_Ordersnum` = '".'COL_'.$out_trade_no."',`COL_Ordersid` = '".$a."',`COL_Orderscouponid` = ".intval($b).",`COL_Ordersusername` = '".admin_sql($c)."',`COL_Ordersusertel` = '".admin_sql($d)."',`COL_Ordersuseradd` = '".admin_sql($e)."',`COL_Orderscouponmoney` = ".admin_sql($f).",`COL_Ordersuser` = '".$rs[0]."',`time` = '".date("Y-m-d H:i:S")."'","");
				return $db -> insertid();
			}
			
			$shopadd = $db -> select("`id`,`COL_Add`,`COL_Addtel`,`COL_Addname`","`emmm_usershopadd`","where COL_Addindex = 1 && `id` = ".intval($emmmpay[6]));
			$newid = orders_buylist($emmmpay[1],$emmmpay[4],$shopadd[3],$shopadd[2],$shopadd[1],$emmmpay[5]);
			
			$query = $db -> update("`emmm_orders`","`COL_Orderspay` = 2,
			`COL_Ordersclassid` = ".intval($newid)." where id in (".$emmmpay[1].") && COL_Ordersemail = '".$rs[0]."'","");
			$query = $db -> insert("`emmm_userpay`","`COL_Useremail` = '".$rs[0]."',`COL_Usermoney` = '".dowith_sql($total_fee)."',`COL_Usercontent` = '订单号:".dowith_sql($out_trade_no)."<br />交易号:".dowith_sql($trade_no)."<br />交易状态:".dowith_sql($trade_status)."<br />用户备注:订单ID：".dowith_sql($emmmpay[1])."',`COL_Useradmin` = '商品付款',`time` = '".date("Y-m-d H:i:s")."',`COL_Uservoucherone` = '".dowith_sql($out_trade_no)."',`COL_Uservouchertwo` = '".dowith_sql($trade_no)."'","");
			
			$msg = "异步付款成功！";
			file_put_contents('./error.txt', $msg);
			
		}else{ ///////////////////////////////////
			
			//充值
			$query = $db -> insert("`emmm_userpay`","`COL_Useremail` = '".$rs[0]."',`COL_Usermoney` = '".dowith_sql($total_fee)."',`COL_Usercontent` = '订单号:".dowith_sql($out_trade_no)."<br />交易号:".dowith_sql($trade_no)."<br />交易状态:".dowith_sql($trade_status)."<br />用户备注:".dowith_sql($emmmpay[0])."',`COL_Useradmin` = '用户在线充值',`time` = '".date("Y-m-d H:i:s")."',`COL_Uservoucherone` = '".dowith_sql($out_trade_no)."',`COL_Uservouchertwo` = '".dowith_sql($trade_no)."'","");
			//写入充值金额
			$query = $db -> update("`emmm_user`","`COL_Usermoney` = `COL_Usermoney` + '".$total_fee."'","where `id` = ".intval($emmmpay[2]));
			
			$msg = "异步充值成功！";
			file_put_contents('./error.txt', $msg);
			
		}
		
	}
	echo "success";//请不要修改或删除
}
else {
    //验证失败
    echo "fail";
}
?>
