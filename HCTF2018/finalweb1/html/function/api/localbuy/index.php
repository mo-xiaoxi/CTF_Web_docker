<?php
/*
	注: v1.7.0 以后的版本,视频教程中的 KEY 不在这里设置了
	订单宝与Emmm对接的安全码,打开 /config/emmm_config.php 文件
	在订单宝输入 emmm_config.php 文件中的 safecode 数组中的安全校验码即可! 
*/


include '../../../config/emmm_code.php';
include '../../../config/emmm_config.php';

$apikey = $emmm['safecode'];
if(isset($_GET['key'])){
	
	$key = $_GET['key'];
	if($apikey != $key){
		
		echo '1';
		exit;
		
	}else{
		
		//已经付款确没有发货的订单，并筛选给订单宝处理！
		$rs = $db -> select("`id`","`emmm_orders`","where `COL_Orderspay` >= 2 && `COL_Orderssend` = 1");
		if($rs){
			echo '2';
			exit;
		}else{
			echo '0';
			exit;
		}
	}
	
}else{
	
	echo '1';
	exit;
	
}
?>
