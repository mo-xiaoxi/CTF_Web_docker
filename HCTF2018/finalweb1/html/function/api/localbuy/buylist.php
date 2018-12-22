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

	function emmm_parameters(){ 
		global $db;
		$emmm_rs = $db -> select("`COL_Pagestype` ,`COL_Pages` ,`COL_Pagefont`","`emmm_webdeploy`","where `id` = 1"); 
		$rows = array(
			'pagetype' => $emmm_rs[0],
			'pagecss' => $emmm_rs[1],
			'pagefont' => $emmm_rs[2],
			);
		return $rows;
	}
	$Parameterse = emmm_parameters();
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
<table width="100%" border="1" align="center" cellpadding="5" bordercolor="#f4f4f4" style="border-collapse:collapse; font-size:12px">
  <tr>
    <td colspan="8" bgcolor="#f5f5f5">订单宝管理中心:</td>
  </tr>
  <tr>
    <td width="30"><div align="center">ID</div></td>
    <td><div align="center">商品</div></td>
    <td width="150"><div align="center">订单号</div></td>
    <td width="130"><div align="center">订单时间</div></td>
    <td width="60"><div align="center">付款?</div></td>
    <td width="60"><div align="center">发货?</div></td>
    <td width="130"><div align="center">发货时间</div></td>
    <td width="80"><div align="center">操作</div></td>
  </tr>
  <?php
	
	include '../../emmm_page.class.php';
	
	$listpage = 15;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_orders`","where `COL_Orderspay` = 1 || `COL_Orderssend` = 1");
	$emmmtotal = $db -> whilego($emmmtotal);
	
	$query = $db -> listgo("`id`,`COL_Ordersname`,`time`,`COL_Ordersnumber`,`COL_Orderspay`,`COL_Orderssend`,`COL_Ordersgotime`,`COL_Integralok`","`emmm_orders`","where `COL_Orderspay` = 1 || `COL_Orderssend` = 1 order by id desc LIMIT ".$start.",".$listpage);
	
	while($rs = $db -> whilego($query)){
  ?>
  <tr>
    <td><div align="center"><?php echo $rs[0]; ?></div></td>
    <td><?php echo $rs[1]; ?></td>
    <td><div align="center"><?php echo $rs[3]; ?></div></td>
    <td><div align="center"><?php echo $rs[2]; ?></div></td>
    <td><div align="center">
    <?php 
	if($rs[7] == 0){
		if($rs[4] == 1){
		echo '<img src="../../../skin/weifukuan.gif" border="0" />';
			}elseif ($rs[4] == 2){
		echo '<img src="../../../skin/yifukuan.gif" border="0" />';
			}elseif ($rs[4] == 3){
		echo '<img src="../../../skin/hdfukuan.gif" border="0" />';		
		}
	}else{
		echo '<img src="../../../skin/jfdh.gif" border="0" />';
	}
	?>
    </div></td>
    <td><div align="center">
    <?php 
		if($rs[5] == 1){
		echo '<img src="../../../skin/weifahuo.gif" border="0" />';
			}else{
		echo '<img src="../../../skin/yifahuo.gif" border="0" />';
		} 
	?>
    </div></td>
    <td><div align="center"><?php echo $rs[6]; ?></div></td>
    <td><div align="center"><a href="ordersview.php?id=<?php echo $rs[0]; ?>&key=<?php echo $key; ?>" target="_self"><img src="../../../skin/chulidingdan.gif" border="0" /></a></div></td>
  </tr>
  <?php
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
  ?>
  <tr>
    <td colspan="8">
		<?php echo $_page->showpage(); ?>
	</td>
  </tr>
</table>
</body>
</html>
