<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "Batch"){

	if($_POST['buy_del_print'] == 'del'){
		
		if (strstr($COL_Adminpower,"35")){
		
			if (!empty($_POST["op_b"])){
			$op_b = implode(',',$_POST["op_b"]);
			}else{
			$op_b = '';
			}

			$query = $db -> del("emmm_orderslist","where id in ($op_b)");
			$orderid = explode(",",$op_b);
			foreach($orderid as $op){
				$orders = $db -> del("emmm_orders","where COL_Ordersclassid = ".intval($op));
			}
			$emmm_font = 1;
			$emmm_class = 'emmm_orders.php?id=emmm';
			require 'emmm_remind.php';
		
		}else{
			
			$emmm_font = 4;
			$emmm_content = '权限不够，无法删除！';
			$emmm_class = 'emmm_orders.php?id=emmm';
			require 'emmm_remind.php';
			
		}
		
	}
	
	if($_POST['buy_del_print'] == 'print'){
		
		if (!empty($_POST["op_b"])){
			$op_b = implode(',',$_POST["op_b"]);
			}else{
			$op_b = '';
		}
		if($op_b == ''){
			$emmm_font = 4;
			$emmm_content = '请选择要打印的订单！';
			$emmm_class = 'emmm_orders.php?id=emmm';
			require 'emmm_remind.php';
		}
		
		echo '<div style="width:100%; text-align:center; float:left; margin-top:150px;"><a href="emmm_buyprint.php?id='.$op_b.'&type=min" target="_blank">小票打印页面</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="emmm_buyprint.php?id='.$op_b.'&type=max" target="_blank">A4纸打印页面</a></div>';
		exit;
	}
	
	if($_POST['buy_del_print'] == 'go'){
		
		if (!empty($_POST["op_b"])){
			$op_b = implode(',',$_POST["op_b"]);
			}else{
			$op_b = '';
		}
		if($op_b == ''){
			$emmm_font = 4;
			$emmm_content = '请选择要发货的订单！';
			$emmm_class = 'emmm_orders.php?id=emmm';
			require 'emmm_remind.php';
		}
		
		echo '
		<script>
		 function showandhide(v){
		  //alert(v);
		  for(i=1;i<3;i++){
		   document.getElementById(i).style.display = \'none\';
		   if(i==v){
			document.getElementById(v).style.display = \'block\';
		   }
		  }
		 }
		</script>
		<div style="width:90%; float:left; margin:50px 0 0 10%;">
			<form id="form2" name="form2" method="post" action="?emmm_cms=go">
				<p>
					批量发货订单ID : '.$op_b.'
				</p>
				<p>
				<input name="COL_Orderssend" type="radio" value="1" />
                    不发货 
                <input type="radio" name="COL_Orderssend" value="2" checked="checked" />
                    发货
				</p>
				<p>
				<select name="COL_Ordersexpress" onchange = "showandhide(this.value)">
				  <option value="no" >不使用物流</option>
				  <option value="ems" >EMS</option>
				  <option value="guotongkuaidi" >国通快递</option>
				  <option value="huitongkuaidi" >汇通快运</option>
				  <option value="lianb">联邦快递（国内）</option>
				  <option value="quanfengkuaidi" >全峰快递</option>
				  <option value="shentong" >申通</option>
				  <option value="shunfeng" >顺丰</option>
				   <option value="tiantian" >天天快递</option>
					<option value="yuantong" >圆通速递</option>
					 <option value="yunda" >韵达快运</option>
					  <option value="zhaijisong" >宅急送</option>
					   <option value="zhongtiekuaiyun" >中铁快运</option>
						<option value="zhongtong" >中通速递</option>
						<option value="1" >===其它===</option>
				</select>
				</p>
				<p>
					<div id="1" style="float:left;display:none;">
					  快递代码：<input name="COL_Ordersexpress2" type="text" class="win3"   />
					  (目前采用的接口不支持中文，如果是发顺发快递，请输入 shunfeng &nbsp;&nbsp;&nbsp;<a href="http://vidar.club/kuaidiapi.html" target="_blank"><font color="#0099FF">查看快递参考代码</font></a>)
					</div>
				</p>
				<p style="clear:both; padding-top:10px;">
				快递单号：<input name="COL_Ordersexpressnum" type="text" class="win"  />
				<input name="oid" type="hidden" value="'.$op_b.'">
				</p>
				<p><input type="submit" name="Submit" value="提交订单" class="emmm-anniu"/></p>
			</form>
		</div>
		
		';
		exit;
	}
	
}elseif ($_GET["emmm_cms"] == "go"){
	
	$oid = explode(",",$_POST['oid']);
	if($_POST["COL_Ordersexpress"] == 1){
	$COL_Ordersexpress = $_POST["COL_Ordersexpress2"];
	}else{
	$COL_Ordersexpress = $_POST["COL_Ordersexpress"];
	}
	foreach($oid as $op){
		$ok = $db -> update("emmm_orders","`COL_Orderssend` = ".intval($_POST['COL_Orderssend']).",`COL_Ordersexpress` = '".admin_sql($COL_Ordersexpress)."',`COL_Ordersexpressnum` = '".admin_sql($_POST["COL_Ordersexpressnum"])."'","where COL_Ordersclassid = ".intval($op));
	}
	
	$emmm_font = 1;
	$emmm_class = 'emmm_orders.php?id=emmm';
	require 'emmm_remind.php';
	
}

function Orderslist(){
	global $_page,$db,$smarty;
	$listpage = 30;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_orderslist`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("*","`emmm_orderslist`","order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs['id'],
			"num" => $emmm_rs['COL_Ordersnum'],
			"oid" => explode(",",$emmm_rs['COL_Ordersid']),
			"fname" => $emmm_rs['COL_Ordersusername'],
			"ftel" => $emmm_rs['COL_Ordersusertel'],
			"fadd" => $emmm_rs['COL_Ordersuseradd'],
			"couponmoney" => $emmm_rs['COL_Orderscouponmoney'],
			"couponid" => $emmm_rs['COL_Orderscouponid'],
			"user" => $emmm_rs['COL_Ordersuser'],
			"time" => $emmm_rs['time'],
		);
		$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

Admin_click('订单管理','emmm_orders.php?id=emmm');
$smarty->assign("orders",Orderslist());
$smarty->display('emmm_orders.html');
?>
