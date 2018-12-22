<?php
ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);

include '../../../config/emmm_config.php';
include '../../emmm_function.class.php';

$api = plugsclass::plugs(10);
if (!$api){
	exit(0);
}
					
// 1.8.2 生成统一订单列表
function orders_buylist($a, $b, $c, $d, $e, $f, $g, $h){
	global $db;
	$buy = $db -> insert("`emmm_orderslist`","`COL_Ordersnum` = '".'COL_'.$g."',`COL_Ordersid` = '".$a."',`COL_Orderscouponid` = ".intval($b).",`COL_Ordersusername` = '".admin_sql($c)."',`COL_Ordersusertel` = '".admin_sql($d)."',`COL_Ordersuseradd` = '".admin_sql($e)."',`COL_Orderscouponmoney` = ".admin_sql($f).",`COL_Ordersuser` = '".$h."',`time` = '".date("Y-m-d H:i:S")."'","");
	return $db -> insertid();
}

require_once "lib/WxPay.Api.php";
require_once 'lib/WxPay.Notify.php';
require_once 'log.php';

//初始化日志
$logHandler= new CLogFileHandler("logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

class PayNotifyCallBack extends WxPayNotify
{
	public $emmm;
	public $db;
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		Log::DEBUG("query:" . json_encode($result));
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return true;
		}
		return false;
	}
	
	//重写回调处理函数
	public function NotifyProcess($data, &$msg)
	{
		Log::DEBUG("call back:" . json_encode($data));
		$notfiyOutput = array();
		
		if(!array_key_exists("transaction_id", $data)){
			$msg = "输入参数不正确";
			return false;
		}
		//查询订单，判断订单真实性
		if(!$this->Queryorder($data["transaction_id"])){
			$msg = "订单查询失败";
			return false;
		}
		//$data中各个字段在return_code为SUCCESS的时候有返回 SUCCESS/FAIL
		//此字段是通信标识，非交易标识，交易是否成功需要查看result_code来判断
		//成功后写入自己的数据库
		if ($data['return_code'] == 'SUCCESS' && $data['result_code'] == 'SUCCESS') {
			
			$out_trade_no = $data['out_trade_no']; 
			$transaction_id = $data['transaction_id'];
			$bank_type = $data['bank_type'];
			$fee_type = $data['fee_type'];
			$time_end = $data['time_end'];
			$amount = $data['total_fee'];
			$attach = $data['attach'];
			
			//Emmm 校验逻辑
			//支付验证
			global $emmm,$db;
			$emmmpay = explode('|',$attach);
			if(md5($emmmpay[2].$emmm['safecode']) != $emmmpay[3]){
				
				$msg = "支付验证出错!~ 请联系网站管理员";
				file_put_contents('./error.txt', $msg);
				return false;
				
			}else{
				
				//判断此订单是否已经付款
				$query = $db -> select("id","`emmm_userpay`","WHERE `COL_Uservoucherone` = '".dowith_sql($out_trade_no)."' && `COL_Uservouchertwo` = '".dowith_sql($transaction_id)."'");

				if($query){
					
					$msg = "订单已存在或return_url.php优先完成,不做处理";
					file_put_contents('./error.txt', $msg);
					return false;
					
				}else{
					
					//获取会员账号
					$rs = $db -> select("`COL_Useremail`","`emmm_user`","WHERE `id` = ".intval($emmmpay[2]));
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
					
					$shopadd = $db -> select("`id`,`COL_Add`,`COL_Addtel`,`COL_Addname`","`emmm_usershopadd`","where COL_Addindex = 1 && `id` = ".intval($emmmpay[6]));
					$newid = orders_buylist($emmmpay[1],$emmmpay[4],$shopadd[3],$shopadd[2],$shopadd[1],$emmmpay[5],$out_trade_no,$rs[0]);
					
					$query = $db -> update("`emmm_orders`","`COL_Orderspay` = 2,
					`COL_Ordersclassid` = ".intval($newid)." where id in (".$emmmpay[1].") && COL_Ordersemail = '".$rs[0]."'","");
					$query = $db -> insert("`emmm_userpay`","`COL_Useremail` = '".$rs[0]."',`COL_Usermoney` = '".dowith_sql($amount / 100)."',`COL_Usercontent` = '订单号:".dowith_sql($out_trade_no)."<br />交易号:".dowith_sql($transaction_id)."<br />交易状态:".dowith_sql($fee_type)."<br />用户备注:订单ID：".dowith_sql($emmmpay[1])."',`COL_Useradmin` = '商品付款',`time` = '".date("Y-m-d H:i:s")."',`COL_Uservoucherone` = '".dowith_sql($out_trade_no)."',`COL_Uservouchertwo` = '".dowith_sql($transaction_id)."'","");
					
					$msg = "异步支付成功！";
					file_put_contents('./error.txt', $msg);
						
				}
				
				echo 'SUCCESS';
			}
		}
		return true;
	}
}

Log::DEBUG("begin notify");
$notify = new PayNotifyCallBack();
$notify->Handle(false);
?>
