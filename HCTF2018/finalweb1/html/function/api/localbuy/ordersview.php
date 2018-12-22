<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 *-------------------------------
 * Emmm系统 会员处理接口
 *-------------------------------
*/

include '../../../config/emmm_code.php';
include '../../../config/emmm_config.php';
include '../../../config/emmm_Language.php';
include '../../emmm_function.class.php';

$apikey = $emmm['safecode'];
if(!isset($_GET['key'])){
	
	echo 'KEY不存在，请重试!';
	exit;
	
}else{
	
	$key = $_GET['key'];
	if($apikey != $key){
		echo 'KEY出错，请重试!';
		exit;
	}
	
}
if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "edit"){

		if($_POST["COL_Ordersexpress"] == 1){
			$COL_Ordersexpress = $_POST["COL_Ordersexpress2"];
		}else{
			$COL_Ordersexpress = $_POST["COL_Ordersexpress"];
		}
			
		$query = $db -> update("`emmm_orders`","`COL_Ordersusermarket` = '".dowith_sql($_POST["COL_Ordersusermarket"])."',`COL_Orderssend` = '".dowith_sql($_POST["COL_Orderssend"])."',`COL_Ordersexpress` = '".dowith_sql($COL_Ordersexpress)."',`COL_Ordersexpressnum` = '".dowith_sql($_POST["COL_Ordersexpressnum"])."',`COL_Ordersfreight` = '".dowith_sql($_POST["COL_Ordersfreight"])."',`COL_Ordersgotime` = '".date("Y-m-d H:i:s")."',`COL_Sign` = '".dowith_sql($_POST["COL_Sign"])."'","where id = ".intval($_GET['id']));

		//注册成功，邮件提醒			
		if($_POST["COL_Orderssend"] == 2){
		$emmm_mail = 'send';
		$COL_Ordersexpress = $COL_Ordersexpress;
		$COL_Ordersexpressnum = $_POST["COL_Ordersexpressnum"];
		$COL_Ordersnumber = $_POST["COL_Ordersnumber"];
		$COL_Useremail = dowith_sql(htmlspecialchars($_POST["COL_Useremail"]));
		include '../../emmm_mail.class.php';
		}
		
		header("location: buylist.php?key=".$key);
		exit(0);	
}

$rs = $db -> select("*","`emmm_orders`","where `id` = ".intval($_GET['id']));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Emmm订单宝</title>
<script type="text/javascript">
function clickIE4(){
        if (event.button==2){
                return false;
        }
}
function clickNS4(e){
        if (document.layers||document.getElementById&&!document.all){
                if (e.which==2||e.which==3){
                        return false;
                }
        }
}
function OnDeny(){
        if(event.ctrlKey || event.keyCode==78 && event.ctrlKey || event.altKey || event.altKey && event.keyCode==115){
                return false;
        }
}
if (document.layers){
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown=clickNS4;
        document.onkeydown=OnDeny();
}else if (document.all&&!document.getElementById){
        document.onmousedown=clickIE4;
        document.onkeydown=OnDeny();
}
document.oncontextmenu=new Function("return false");
</script>
</head>
<body>
<form id="form1" name="form1" method="post" action="ordersview.php?emmm_cms=edit&id=<?php echo $rs['id']; ?>&key=<?php echo $key; ?>">
<table width="100%" border="1" align="center" cellpadding="5" bordercolor="#f4f4f4" style="border-collapse:collapse; font-size:12px">
  <tr>
    <td colspan="2" bgcolor="#f5f5f5">订单宝 - 订单处理:&nbsp;&nbsp;<a href="javascript:history.go(-1);">向上一页</a></td>
  </tr>
  <tr>
    <td width="20%"><div align="right">订单号：</div></td>
    <td width="80%"><?php echo $rs['COL_Ordersnumber']; ?>
					  <input type="hidden" name="COL_Ordersnumber" value="<?php echo $rs['COL_Ordersnumber']; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right">订单时间：</div></td>
    <td><?php echo $rs['time']; ?></td>
  </tr>
  <tr>
    <td><div align="right">订购商品：</div></td>
    <td><?php echo $rs['COL_Ordersname']; ?></td>
  </tr>
  <tr>
    <td><div align="right">用户要求：</div></td>
    <td><?php echo $rs['COL_Ordersproductatt']; ?></td>
  </tr>
  <tr>
    <td><div align="right">备注：</div></td>
    <td><?php echo $rs['COL_Ordersusetext']; ?></td>
  </tr>
  <tr>
    <td><div align="right">网站价格：</div></td>
    <td><?php echo $rs['COL_Orderswebmarket']; ?>&nbsp;&nbsp;元</td>
  </tr>
  <tr>
    <td><div align="right">TA的价格(成交价)：</div></td>
    <td><input type="text" name="COL_Ordersusermarket" class="win3" value="<?php echo $rs['COL_Orderswebmarket']; ?>" />&nbsp;&nbsp;元</td>
  </tr>
  <tr>
    <td><div align="right">购买数量：</div></td>
    <td><?php echo $rs['COL_Ordersnum']; ?></td>
  </tr>
  <tr>
    <td><div align="right">商品重量：</div></td>
    <td><?php echo $rs['COL_Ordersweight']; ?></td>
  </tr>
  <tr>
    <td><div align="right">快递运费：</div></td>
    <td><input type="text" name="COL_Ordersfreight" class="win3" value="<?php echo $rs['COL_Ordersfreight']; ?>" />&nbsp;&nbsp;元</td>
  </tr>
  <tr>
    <td><div align="right">购买人账号：</div></td>
    <td><?php echo $rs['COL_Ordersemail']; ?>
				      <input type="hidden" name="COL_Useremail" value="<?php echo $rs['COL_Ordersemail']; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right">购买人姓名：</div></td>
    <td><?php echo $rs['COL_Ordersusername']; ?></td>
  </tr>
  <tr>
    <td><div align="right">购买人电话：</div></td>
    <td><?php echo $rs['COL_Ordersusertel']; ?></td>
  </tr>
  <tr>
    <td><div align="right">发货地址：</div></td>
    <td><?php echo $rs['COL_Ordersuseradd']; ?></td>
  </tr>
  <tr>
    <td><div align="right">是否付款?：</div></td>
    <td>
	
     <?php 
	  
	if($rs['COL_Integralok'] == 0){
		if($rs['COL_Orderspay'] == 1){
		echo '<img src="../../../skin/weifukuan.gif" border="0" />';
		}elseif($rs['COL_Orderspay'] == 2){
		echo '<img src="../../../skin/yifukuan.gif" border="0" />';
		}elseif($rs['COL_Orderspay'] == 3){
		echo '<img src="../../../skin/hdfukuan.gif" border="0" />';
		} 
	}else{
	echo '<img src="../../../skin/jfdh.gif" border="0" />';
	}
	
	?>
	
	</td>
  </tr>
  <tr>
    <td><div align="right">是否发货?：</div></td>
    <td>

						<input name="COL_Orderssend" type="radio" value="1" <?php if ($rs['COL_Orderssend'] == 1) { ?>checked="checked"<?php }?> />
                        不发货 
                        <input type="radio" name="COL_Orderssend" value="2" <?php if ($rs['COL_Orderssend'] == 2) { ?>checked="checked"<?php }?> />
                        发货
	
	</td>
  </tr>
  <tr>
    <td><div align="right">用户是否签收?：</div></td>
    <td>

						<input name="COL_Sign" type="radio" value="0" <?php if ($rs['COL_Sign'] == 0) { ?>checked="checked"<?php }?> />
                        未签收 
                        <input type="radio" name="COL_Sign" value="1" <?php if ($rs['COL_Sign'] == 1) { ?>checked="checked"<?php }?> />
                        已签收
	
	</td>
  </tr>
  <tr>
    <td><div align="right">快递名称：</div></td>
    <td>
	
					  <div style="float:left;">
					    <select name="COL_Ordersexpress" onchange = "showandhide(this.value)">
						  <option value="ems" <?php if ($rs['COL_Ordersexpress'] == 'ems') { ?>selected="selected"<?php }?> >EMS</option>
						  <option value="guotongkuaidi"  <?php if ($rs['COL_Ordersexpress'] == 'guotongkuaidi') { ?>selected="selected"<?php }?> >国通快递</option>
						  <option value="huitongkuaidi"  <?php if ($rs['COL_Ordersexpress'] == 'huitongkuaidi') { ?>selected="selected"<?php }?> >汇通快运</option>
						  <option value="lianb"  <?php if ($rs['COL_Ordersexpress'] == 'lianb') { ?>selected="selected"<?php }?> >联邦快递（国内）</option>
						  <option value="quanfengkuaidi"  <?php if ($rs['COL_Ordersexpress'] == 'quanfengkuaidi') { ?>selected="selected"<?php }?> >全峰快递</option>
						  <option value="shentong"   <?php if ($rs['COL_Ordersexpress'] == 'shentong') { ?>selected="selected"<?php }?> >申通</option>
						  <option value="shunfeng"   <?php if ($rs['COL_Ordersexpress'] == 'shunfeng') { ?>selected="selected"<?php }?> >顺丰</option>
						   <option value="tiantian"   <?php if ($rs['COL_Ordersexpress'] == 'tiantian') { ?>selected="selected"<?php }?> >天天快递</option>
						    <option value="yuantong"  <?php if ($rs['COL_Ordersexpress'] == 'yuantong') { ?>selected="selected"<?php }?> >圆通速递</option>
							 <option value="yunda"  <?php if ($rs['COL_Ordersexpress'] == 'yunda') { ?>selected="selected"<?php }?> >韵达快运</option>
							  <option value="zhaijisong"  <?php if ($rs['COL_Ordersexpress'] == 'zhaijisong') { ?>selected="selected"<?php }?> >宅急送</option>
							   <option value="zhongtiekuaiyun"  <?php if ($rs['COL_Ordersexpress'] == 'zhongtiekuaiyun') { ?>selected="selected"<?php }?> >中铁快运</option>
							    <option value="zhongtong"  <?php if ($rs['COL_Ordersexpress'] == 'zhongtong') { ?>selected="selected"<?php }?> >中通速递</option>
								<option value="1"   <?php if ($rs['COL_Ordersexpress'] == 'l') { ?>selected="selected"<?php }?> >===其它===</option>
				        </select>
						</div>
						<div id="1" style="float:left;display:none;">
						&nbsp;&nbsp;其它快递代码：
					  <input name="COL_Ordersexpress2" type="text" class="win3" value="<?php echo $rs['COL_Ordersexpress']; ?>"  />
					  (目前采用的接口不支持中文，如果是发顺发快递，请输入 shunfeng &nbsp;&nbsp;&nbsp;<a href="http://vidar.club/kuaidiapi.html" target="_blank"><font color="#0099FF">查看快递参考代码</font></a>)
					  </div>
					  <div id="2" style="float:left;display:none;"></div>
	</td>
  </tr>
  <tr>
    <td><div align="right">快递单号：</div></td>
    <td><input name="COL_Ordersexpressnum" type="text" class="win" value="<?php echo $rs['COL_Ordersexpressnum']; ?>"  /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="处理订单" />&nbsp;&nbsp;<a href="javascript:history.go(-1);">向上一页</a></td>
  </tr>
</table>
</form>
<script>
 function showandhide(v){
  //alert(v);
  for(i=1;i<3;i++){
   document.getElementById(i).style.display = 'none';
   if(i==v){
    document.getElementById(v).style.display = 'block';
   }
  }
 }

function stop(){ 
return false; 
} 
document.oncontextmenu=stop; 
</script> 
</body>
</html>
