<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
*/
if(!defined('EMMMNO')){exit('no!');}

$bookadd = $emmm_adminfont['bookadd'];
$accessno = $emmm_adminfont['accessno'];
$shoppingok = $emmm_adminfont['shoppingok'];
$usermoneyno = $emmm_adminfont['usermoneyno'];
$couponfont = $emmm_adminfont['coupon'];
$buynumber = $emmm_adminfont['buynumber'];

if(empty($_SESSION['username'])){
	echo @emmm_pcwapurl($_GET['type'],'?'.$emmm_Language.'-login.html','?'.$emmm_Language.'-userlogin.html',0,$shoppinglogin);
	exit;
}

if(isset($_REQUEST["type"])){
	$urltype = array(
		"shop" => $emmm['webpath']."client/wap/?".$emmm_Language."-usershopping-op.html",
		"car" => $emmm['webpath']."client/wap/?".$emmm_Language."-shoppingcart.html",
	); //手机
}else{
	$urltype = array(
		"shop" => $emmm['webpath']."client/user/?".$emmm_Language."-usershopping-op.html",
		"car" => $emmm['webpath']."?".$emmm_Language."-shoppingcart.html",
	); //电脑
}

//计算运费
function emmm_freight($add,$weight,$freight,$number){ 
	global $db;
	$emmm_rs = $db -> select("`COL_Freighttext`,`COL_Freightweight`","`emmm_freight`","where `id` = ".intval($freight));
	$freightop = explode('|',$emmm_rs[0]); //首重
	$weightop = $emmm_rs[1]; //续重
	
	$city = explode('|','北京市|天津市|上海市|重庆市|国外|河北省|河南省|云南省|辽宁省|黑龙江省|湖南省|安徽省|山东省|新疆|江苏省|浙江省|江西省|湖北省|广西|甘肃省|山西省|内蒙古|陕西省|吉林省|福建省|贵州省|广东省|青海省|西藏|四川省|宁夏|海南省|台湾|香港|澳门|本地IP');

	$i=0;
	foreach($city as $op){
		if(strstr($add,$op)){
			$ok = $i;
			break;
		}else{
			$ok = 35;
		}
		$i += 1;
	}
	
	if($number < 2){
		if($weight < 2){
		$yf = $freightop[$ok];
		}else{
		$yf = ($weight - 1) * $weightop + $freightop[$ok];
		}
	}else{
	
		$yfop = $number * $weight;
		$yf = ($yfop - 1) * $weightop + $freightop[$ok];
		
	}

	return $yf;
}

function emmm_userview(){ 
global $db;
	$emmm_rs = $db -> select("`COL_Usermoney`,`COL_Userintegral`","`emmm_user`","where `COL_Useremail` = '".$_SESSION['username']."'"); 
	$userrows = array(
		'money' => $emmm_rs[0],
		'integral' => $emmm_rs[1],
	);
	return $userrows;
}

function emmm_moneyextract($type='',$class='',$money=''){
	if($type == "emmm"){
		return array($money,$money);
	}elseif($class == null){
		return array($money,$money);
	}else{
		$type = str_replace('、',',',$type);
		$emmm = strstr($class,$type);
		$a = explode("|",$emmm);
		$b = explode(",",$a[0]);
		$c = array_slice($b,-3,2);
		return array($c[0],$c[1]);
	}
}

function emmm_usermoney($usermoney,$webmarket){
	global $db;
	$emmm_rs = $db -> select("`COL_Userclass`","`emmm_user`","where `COL_Useremail` = '".$_SESSION['username']."'");
	$Useremail = explode("|",$usermoney);
	foreach($Useremail as $op){
		$Useremailto = explode(":",$op);
		if($emmm_rs[0] == $Useremailto[0]){
			$opcms = $Useremailto[1];
		}
	}
	return $webmarket - $opcms;
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "buy"){
	
	$shoppingnum = $emmm_adminfont['shoppingnum'];

	if (!empty($_POST["emmm_opcms"])){
		$a = str_replace(',','，',$_POST["emmm_opcms"]);
		$b = implode(',',$a);
		$c = str_replace(',|,','|',$b);
		$emmm_opcms = substr($c, 0, -2);
	}else{
		exit("<script language=javascript>location.replace('".$urltype['car']."');</script>");
	}
	
	$oid = '';
	$fg = explode('|',$emmm_opcms);
	foreach($fg as $op){
		$opcms = explode(',',$op);
		
		//判断数量是否为零
		if($opcms[7] < 1){
			exit("<script language=javascript> alert('".$shoppingnum."');history.go(-1);</script>");
		}
		//判断产品价格是否被篡改
		$emmm_rs = $db -> select("`COL_Goodsno`,`COL_Webmarket`,`COL_Usermoney`,`COL_Specifications`","`emmm_product`","where `id` = ".intval($opcms[0]));

		if($emmm_rs[3] == '')
		{
			$usermarket = emmm_usermoney($emmm_rs[2],$emmm_rs[1]);
			
		}else{
			
			if($opcms[2] == null){
				$zhdh = "emmm";
			}else{
				$zhdh = $opcms[9].'、'.$opcms[2];
			}
			$emmm_moneyextract = emmm_moneyextract($zhdh,$emmm_rs[3],$opcms[5]);
			$usermarket = emmm_usermoney($emmm_rs[2],$emmm_moneyextract[1]);
		}

		if($opcms[6] != $usermarket){
			exit("<script language=javascript> alert('".$usermoneyno."');history.go(-1);</script>");
		}

		$query = $db -> insert("`emmm_orders`","
		`COL_Ordersname` = '".dowith_sql($opcms[1])."',
		`COL_Ordersid` = '".dowith_sql($opcms[0])."',
		`COL_Ordersnum` = '".dowith_sql($opcms[7])."',
		`COL_Ordersemail` = '".$_SESSION['username']."',
		`COL_Ordersusername` = '',
		`COL_Ordersusertel` = '',
		`COL_Ordersuseradd` = '',
		`COL_Ordersusetext` = '".dowith_sql($opcms[8])."',
		`COL_Ordersproductatt` = '".dowith_sql($opcms[2])."',
		`COL_Orderswebmarket` = '".dowith_sql($opcms[5])."',
		`COL_Ordersusermarket` = '".dowith_sql($opcms[6])."',
		`COL_Ordersweight` = '".dowith_sql($opcms[3])."',
		`COL_Ordersfreight` = '',
		`time` = '".date("Y-m-d H:i:s")."',
		`COL_Ordersnumber` = '".'OP'.randomkeys(7)."',
		`COL_Orderssend` = 1,
		`COL_Orderspay` = 1,
		`COL_Integralok` = 0","");
	}
	
	$query = $db -> del("`emmm_shoppingcart`","where `COL_Shopusername` = '".$_SESSION['username']."'");
	exit("<script language=javascript>location.replace('".$urltype['shop']."');</script>");
			
}elseif ($_GET["emmm_cms"] == "buyok"){

	$buynumber = $emmm_adminfont['buynumber'];
	$rs = $db -> select("`id`,`COL_Add`,`COL_Addtel`,`COL_Addname`","`emmm_usershopadd`","where COL_Addindex = 1 && `COL_Adduser` = '".$_SESSION['username']."'");
	if(!$rs){
		exit("<script language=javascript> alert('".$buynumber."');history.go(-1);</script>");
	}
	
	if (!empty($_POST["id"])){
		$id = implode(',',$_POST["id"]);
	}else{
		$id = 0;
	}
	
	if ($id == 0){
		exit("请先选购商品!");
	}
	
	if(preg_match('/[a-zA-Z]/',$id)){
		exit("no!"); 
	}else{
		$id = $id;
	}
	
	$idsafe = str_replace(",","",$id);
	$idsafe = md5($idsafe.$emmm['safecode']);
	if($_POST['idmd5'] != $idsafe){
		exit("no!");
	}
	
	$query = $db -> listgo("`COL_Ordersnum`,`COL_Ordersusermarket`,`COL_Ordersfreight`,`COL_Ordersid`,`COL_Ordersproductatt`","`emmm_orders`","where `id` in (".$id.") && COL_Ordersemail = '".$_SESSION['username']."'");
	$zj = '';
	while($emmm_rs = $db -> whilego($query)){
		$zj += ($emmm_rs[0] * $emmm_rs[1]) + $emmm_rs[2];
	
		//减去库存
		$queryto = $db -> listgo("`COL_Specifications`,`id`,`COL_Title`,`COL_Market`,`COL_Webmarket`,`COL_Integral`","`emmm_product`","where id = ".$emmm_rs[3]); 
		if($emmm_rsrs = $db -> whilego($queryto)){
			$o = '|'.$emmm_rsrs[0];
			$u = $emmm_rs[4];
			$r = $emmm_rs[0];
			$php = preg_replace("'((?:^|\|(?:[\A-Z0-9]+),$u),(?:[\d.]+,){2})(\d+)'e", "'$1'.($2-$r)", $o);
			$querythree = $db -> update("`emmm_product`","`COL_Specifications` = '".substr($php,1)."' where id = ".$emmm_rs[3],"");
		}
		
		//加入积分表
		if($emmm_rsrs[5] > 0){
			$queryfor = $db -> insert("`emmm_integral`","`COL_Iid` = '".$emmm_rsrs[1]."', `COL_Iname` = '".$emmm_rsrs[2]."', `COL_Imarket` = '".$emmm_rsrs[3]."', `COL_Iwebmarket` = '".$emmm_rsrs[4]."', `COL_Iintegral` = '".$emmm_rsrs[5]."',`COL_Iconfirm` = 0, `COL_Iuseremail` = '".$_SESSION['username']."', `time` = '".date("Y-m-d H:i:s")."'","");
		}
	}
	
	//优惠券
	if($_POST['coupon'] == 'emmm'){ 
		
		$zj = $zj;
		$coupon = explode('|','0|0|0');
		
	}else{
		
		$coupon = explode('|',$_POST['coupon']);
		if($zj < $coupon[2]){
			
			exit("<script language=javascript> alert('".$couponfont."');history.go(-1);</script>");
			
		}else{
			
			$c = $db -> select("`id`,`COL_Timewin`","`emmm_couponlist`","where `id` = ".intval($coupon[0])." && `COL_Type` = 0 && `COL_Md` = '".dowith_sql($coupon[1])."' && `COL_Username` = '".$_SESSION['username']."'");
			if($c){
				
				$date = date("Y-m-d H:i:s");
				if($c[1] != '0000-00-00 00:00:00'){
					if(strtotime($date) > strtotime($c[1])){
						exit("<script language=javascript> alert('".$couponfont."');history.go(-1);</script>");
					}
				}
				
				$zj = $zj - $coupon[2];
				
			}else{
				
				exit("no!");
				
			}
			
		}
		
	}
	
	// 1.8.2 生成统一订单列表
	function orders_buylist($a, $b, $c, $d, $e, $f){
		global $db;
		$buy = $db -> insert("`emmm_orderslist`","`COL_Ordersnum` = '".'OP'.randomkeys(7)."',`COL_Ordersid` = '".$a."',`COL_Orderscouponid` = ".intval($b).",`COL_Ordersusername` = '".admin_sql($c)."',`COL_Ordersusertel` = '".admin_sql($d)."',`COL_Ordersuseradd` = '".admin_sql($e)."',`COL_Orderscouponmoney` = ".admin_sql($f).",`COL_Ordersuser` = '".$_SESSION['username']."',`time` = '".date("Y-m-d H:i:S")."'","");
		return $db -> insertid();
	}

	if(isset($_POST['delivery'])){
		
		if($shopsetgg['delivery'] == 0){
			exit("<script language=javascript> alert('".$accessno."');location.replace('".$urltype['shop']."');</script>");
		}else{
			
			$newid = orders_buylist($id,$coupon[0],$rs[3],$rs[2],$rs[1],$coupon[2]);
			$query = $db -> update("`emmm_orders`","
			`COL_Orderspay` = 3,
			`COL_Ordersclassid` = ".intval($newid)." where id in (".$id.") && COL_Ordersemail = '".$_SESSION['username']."'",""); 
		}
		
	}else{
		
		$query = $db -> select("`COL_Usermoney`","`emmm_user`","where `COL_Useremail` = '".$_SESSION['username']."'");
		if($query[0] < $zj){
			exit("<script language=javascript> alert('".$accessno."');location.replace('".$urltype['shop']."');</script>");
		}
		
		$newid = orders_buylist($id,$coupon[0],$rs[3],$rs[2],$rs[1],$coupon[2]);
		$query = $db -> update("`emmm_orders`","
		`COL_Orderspay` = 2,
		`COL_Ordersclassid` = ".intval($newid)." where id in (".$id.") && COL_Ordersemail = '".$_SESSION['username']."'",""); 
		$query = $db -> update("`emmm_user`","`COL_Usermoney` = `COL_Usermoney` - ".$zj." where `COL_Useremail` = '".$_SESSION['username']."'","");
		
	}
	
	$coupon_ok = $db -> update("`emmm_couponlist`","`COL_Type`=1,`COL_Time`='".date("Y-m-d H:i:s")."'","where `id` = ".intval($coupon[0])." && `COL_Type` = 0 && `COL_Md` = '".dowith_sql($coupon[1])."' && `COL_Username` = '".$_SESSION['username']."'");
	
	//邮件提醒			
	$emmm_mail = 'userbuy';
	$COL_Useremail = $_SESSION['username'];
	include WEB_ROOT.'/function/emmm_mail.class.php';
	
	exit("<script language=javascript> alert('".$shoppingok."');location.replace('".$urltype['shop']."');</script>");
}

if (empty($_GET['id'])){
	$ordersid = 0;
}else{
	if(preg_match('/[a-zA-Z]/',$_GET['id'])){
		exit("no!"); 
	}else{
		$ordersid = str_replace("_",",",$_GET['id']);
	}
}

function emmm_shopadd(){
	global $db;
	$rs = $db -> select("*","`emmm_usershopadd`","where COL_Addindex = 1 && `COL_Adduser` = '".$_SESSION['username']."'");
	if($rs){
		$rows = array(
			'id' => $rs['id'],
			'name' => $rs['COL_Addname'],
			'tel' => $rs['COL_Addtel'],
			'add' => str_replace('|',',',$rs['COL_Add']),
			'index' => $rs['COL_Addindex'],
			'cityaddexplode' => explode('|',$rs['COL_Add']),
		);
	}else{
		$rows = array(
			'id' => 0,
			'name' => '',
			'tel' => '',
			'add' => '',
			'index' => 0,
			'cityaddexplode' => '',
		);
	}
	return $rows;
}

function emmm_productshop($id){
	global $db,$emmm;
	$emmm_rs = $db -> select("COL_Minimg,COL_Freight","`emmm_product`","where `id` = ".intval($id)); 
	
	if(substr($emmm_rs[0],0,7) == 'http://'){$minimg = $emmm_rs[0];}elseif($emmm_rs[0] == ''){$minimg = $emmm['webpath'].'skin/noimage.png';}else{$minimg = $emmm['webpath'].$emmm_rs[0];}
	
	return array('img'=>$minimg,'freight'=>$emmm_rs[1]);
}

function emmm_orderslist(){
	global $db,$ordersid,$emmm; 
	if ($ordersid == 0){
		$query = $db -> listgo("`id`,`COL_Ordersname`,`COL_Ordersid`,`COL_Ordersnum`,`COL_Ordersusername`,`COL_Ordersusertel`,`COL_Ordersuseradd`,`COL_Ordersusetext`,`COL_Ordersproductatt`,`COL_Orderswebmarket`,`COL_Ordersusermarket`,`COL_Ordersnumber`,`COL_Ordersweight`,`COL_Ordersfreight`,`COL_Ordersadminoper`","`emmm_orders`","where `COL_Ordersemail` = '".$_SESSION['username']."' && COL_Orderspay = 1 && COL_Orderssend = 1 order by id desc"); 
	}else{
		$query = $db -> listgo("`id`,`COL_Ordersname`,`COL_Ordersid`,`COL_Ordersnum`,`COL_Ordersusername`,`COL_Ordersusertel`,`COL_Ordersuseradd`,`COL_Ordersusetext`,`COL_Ordersproductatt`,`COL_Orderswebmarket`,`COL_Ordersusermarket`,`COL_Ordersnumber`,`COL_Ordersweight`,`COL_Ordersfreight`,`COL_Ordersadminoper`","`emmm_orders`","where (`id` in (".$ordersid.") && `COL_Ordersemail` = '".$_SESSION['username']."') && COL_Orderspay = 1 && COL_Orderssend = 1 order by id desc"); 
	}
	
	$rows = array();
	$i = 1;
	$jg = 0;
	$zj = 0;
	$yf = 0;
	$yffun = 0;
	$idmd5 = '';
	while($emmm_rs = $db -> whilego($query)){
	
	$productshop = emmm_productshop($emmm_rs[2]);
	$shopaddinfo = emmm_shopadd();
	if($emmm_rs[14] == 0){
		$yffun = emmm_freight($shopaddinfo['cityaddexplode'][0],$emmm_rs[12],$productshop['freight'],$emmm_rs[3]);
	}else{
		$yffun = $emmm_rs[13];
	}
	
	$shopadd = $db -> update("`emmm_orders`","`COL_Ordersusername` = '".$shopaddinfo['name']."',`COL_Ordersusertel` = '".$shopaddinfo['tel']."',`COL_Ordersuseradd` = '".$shopaddinfo['add']."',`COL_Ordersfreight` = '".$yffun."'","where id = ".$emmm_rs[0]);
	
	$jg = $emmm_rs[10] * $emmm_rs[3];
	$zj += $jg;
	$yf = $yf + $yffun;
	$idmd5 = $idmd5 . $emmm_rs[0];
	
		$rows[] = array(
			'i' => $i,
			'id' => $emmm_rs[0],
			'title' => $emmm_rs[1],
			'prid' => $emmm_rs[2],
			'num' => $emmm_rs[3],
			'username' => $emmm_rs[4],
			'usertel' => $emmm_rs[5],
			'useradd' => str_replace("|",",",$emmm_rs[6]),
			'text' => $emmm_rs[7],
			'pratt' => $emmm_rs[8],
			'webmarket' => $emmm_rs[9],
			'usermarket' => $emmm_rs[10],
			'number' => $emmm_rs[11],
			'totalt' => $jg,
			'total' => $zj,
			'weight' => $emmm_rs[12],
			'freight' => $yffun,
			'freightt' => $yf,
			'idmd5' => md5($idmd5.$emmm['safecode']),
			'img' => $productshop['img'],
		);
		$i+=1;
	}
	return $rows;
}

function emmm_coupon($money = 0){ 
	global $db;
	$date = date("Y-m-d H:i:s");
	$query = $db -> listgo("*","`emmm_couponlist`","where `COL_Type` = 0 && `COL_Username` = '".$_SESSION['username']."'"); 
	if($query){
		
		$title = '';
		$rows = array();
		while($rs = $db -> whilego($query)){
			
			$title = $db -> select("`COL_Title`,`COL_Money`","`emmm_coupon`","where id = ".intval($rs['COL_Couponid']));
			if($rs['COL_Timewin'] != '0000-00-00 00:00:00'){
				if(strtotime($date) > strtotime($rs['COL_Timewin'])){
					$datenow = '(已过期)';
				}else{
					$datenow = '';
				}
			}else{
					$datenow = '';
			}
			
			if($rs['COL_Moneygo'] != 0){
				if($money < $rs['COL_Moneygo']){
					$rows = array();
				}else{
					$rows[] = array(
						'id' => $rs['id'],
						'md' => $rs['COL_Md'],
						'title' => $title[0].$datenow,
						'money' => $title[1],
					);
				}
			}else{
					$rows[] = array(
						'id' => $rs['id'],
						'md' => $rs['COL_Md'],
						'title' => $title[0].$datenow,
						'money' => $title[1],
					);
			}
			
		}
		
		return $rows;
		
	}else{
		
		return false;
		
	}
}

$smarty->assign('userpaypai',array(
	'alipay_quick' => plugsclass::plugs(3),
	'alipay_webpay' => plugsclass::plugs(4),
	'alipay_mobilepay' => plugsclass::plugs(8),
	'weixinpay' => plugsclass::plugs(9),
	'weixinh5pay' => plugsclass::plugs(10),
));

$emmm_orderslist = emmm_orderslist();
$emmm_total = end($emmm_orderslist);

if($emmm_orderslist){
	$ordersarray = 1;
}else{
	$ordersarray = 2;
}

$smarty->assign('ordersarray',$ordersarray);
$smarty->assign('orderslist',$emmm_orderslist);
$smarty->assign('coupon',emmm_coupon($emmm_total['total']));
$smarty->assign('userview',emmm_userview());
$smarty->assign('shopadd',emmm_shopadd());
?>
