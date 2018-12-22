<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单打印</title>
<link href="../../function/plugs/YIQI-UI/YIQI-UI.min.css" rel=stylesheet>
<style media=print type="text/css"> 
.noprint{visibility:hidden} 
</style> 
</head>
<body id="YIQI-UI">
<?php 
/*******************************************************************************
* Emmm - 内容管理系统
* Copyright (C) 2018 vidar.club
* 订单打印
*******************************************************************************/
include 'emmm_admin.php';
include 'emmm_checkadmin.php';

if(empty($_GET['id']) || empty($_GET['type'])){
	echo 'no!';
	exit;
}

$type = $_GET['type'];
if($type == 'min'){
	
	$rs = $db -> listgo("*","emmm_orderslist","where id in(".$_GET['id'].")");
	while($r = $db -> whilego($rs)){
		$id = explode(",",$r['COL_Ordersid']);
		echo '
			<table class="table table-border table-bordered mt-15" style="width:260px;">
			  <tr>
				<td>
					<p>会员账号：'.$r['COL_Ordersuser'].'</p>
					<p>时间：'.$r['time'].'</p>
				</td>
			  </tr>
			  <tr>
				<td>

					<table class="table table-border table-bordered table-striped">
					';
					$yf = 0;
					$money = 0;
					foreach ($id as $op){
						$rss = $db -> listgo("*","emmm_orders","where id = ".$op);
						while($rr = $db -> whilego($rss)){
							if($rr['COL_Ordersproductatt'] == ''){
								$att = '';
							}else{
								$att = '('.$rr['COL_Ordersproductatt'].')';
							}
							echo '
							  <tr>
								<td>
									<p>'.$rr['COL_Ordersname'].' × '.$rr['COL_Ordersnum'].'&nbsp;&nbsp;'.$att.'</p>
									<p>价格:￥'.$rr['COL_Ordersusermarket'].'&nbsp;<del>￥'.$rr['COL_Orderswebmarket'].'</del>&nbsp;运费:'.$rr['COL_Ordersfreight'].'元</p>
								</td>
							  </tr>
							';
							$yf = $rr['COL_Ordersusermarket'] + $rr['COL_Ordersfreight'];
							$money = $money + $yf * $rr['COL_Ordersnum'];
						}
					}
					
					echo '
					</table>
				
				</td>
			  </tr>
			  <tr>
				<td>
					<p>优惠券：'.$r['COL_Orderscouponmoney'].' 元</p>
					<p>合计：'.($money - $r['COL_Orderscouponmoney']).' 元</p>
					<p><strong>物流信息</strong></p>
					<p>电话：'.$r['COL_Ordersusertel'].'</p>
					<p>姓名：'.$r['COL_Ordersusername'].'</p>
					<p>地址：'.str_replace("|","-",$r['COL_Ordersuseradd']).'</p>
				</td>
			  </tr>
			</table>
		';
	}
	
}elseif($type == 'max'){
	
	$rs = $db -> listgo("*","emmm_orderslist","where id in(".$_GET['id'].")");
	while($r = $db -> whilego($rs)){
		$id = explode(",",$r['COL_Ordersid']);
		echo '
			<table class="table table-border table-bordered mt-15" style="width:1200px;">
			  <tr>
				<td width="50%">
					会员账号：'.$r['COL_Ordersuser'].'
				</td>
				<td>
					订单时间：'.$r['time'].'
				</td>
			  </tr>
			  <tr>
				<td colspan="2">

					<table class="table table-border table-bordered table-striped">
					<tr>
						<td>商品名称</td>
						<td width="20%">购买数量</td>
						<td width="10%">网站价格</td>
						<td width="10%">成交价格</td>
						<td width="10%">运费</td>
					</tr>
					';
					$yf = 0;
					$money = 0;
					foreach ($id as $op){
						$rss = $db -> listgo("*","emmm_orders","where id = ".$op);
						while($rr = $db -> whilego($rss)){
							if($rr['COL_Ordersproductatt'] == ''){
								$att = '';
							}else{
								$att = '('.$rr['COL_Ordersproductatt'].')';
							}
							echo '
							  <tr>
								<td>'.$rr['COL_Ordersname'].'</td>
								<td>'.$rr['COL_Ordersnum'].'&nbsp;&nbsp;'.$att.'</td>
								<td><del>￥'.$rr['COL_Orderswebmarket'].'</del></td>
								<td>￥'.$rr['COL_Ordersusermarket'].'</td>
								<td>'.$rr['COL_Ordersfreight'].'</td>
							  </tr>
							';
							$yf = $rr['COL_Ordersusermarket'] + $rr['COL_Ordersfreight'];
							$money = $money + $yf * $rr['COL_Ordersnum'];
						}
					}
					
					echo '
					</table>
				
				</td>
			  </tr>
			  <tr>
				<td>
					<p><strong>物流信息</strong></p>
					<p>电话：'.$r['COL_Ordersusertel'].'</p>
					<p>姓名：'.$r['COL_Ordersusername'].'</p>
					<p>地址：'.str_replace("|","-",$r['COL_Ordersuseradd']).'</p>
				</td>
				<td>
					<p>优惠券：'.$r['COL_Orderscouponmoney'].' 元</p>
					<p>合计：'.($money - $r['COL_Orderscouponmoney']).' 元</p>
				</td>
			  </tr>
			</table>
		';
	}
	
}else{
	
	echo 'no!';
	exit;
	
}
echo '<p class="noprint mt-20"><a href="javascript:print();" target="_self">打印本页</a>(建议使用google浏览器)</p>';
?>
</body>
</html>
