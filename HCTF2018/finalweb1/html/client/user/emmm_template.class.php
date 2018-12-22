<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 *-------------------------------
 * 模板操作类(2014-10-15)
 *-------------------------------
*/
if(!defined('EMMMNO')){exit('no!');}

$temptypetoo = $temptype;
$temptypetoo = str_replace(" and ","and",$temptypetoo);
$temptypetoo = str_replace(" or ","or",$temptypetoo);

switch($temptypetoo){
case "cn":
		include './emmm_userview.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_index.html")){
		$smarty->display($emmm_Language.'_index.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "reg.html":
		include './emmm_userreg.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_reg.html")){
		$smarty->display($emmm_Language.'_reg.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "login.html":
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_login.html")){
		$smarty->display($emmm_Language.'_login.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "useredit.html":
		include './emmm_userview.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_edit.html")){
		$smarty->display($emmm_Language.'_edit.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "usermail":
		include './emmm_userview.class.php';
		$smarty->assign('mail',emmm_usermail());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_mail.html")){
		$smarty->display($emmm_Language.'_mail.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "usershopping":
		include './emmm_userview.class.php';
		include './emmm_shoppingorders.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_usershopping.html")){
		$smarty->display($emmm_Language.'_usershopping.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "userpay":
		include './emmm_userview.class.php';
		$smarty->assign('paylist',emmm_userpaylist());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_userpay.html")){
		$smarty->display($emmm_Language.'_userpay.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "userintegral":
		include './emmm_userview.class.php';
		$smarty->assign('integrallist',emmm_userintegral());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_userintegral.html")){
		$smarty->display($emmm_Language.'_userintegral.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "password.html":
		include './emmm_password.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_password.html")){
		$smarty->display($emmm_Language.'_password.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "usershopadd.html":
		include './emmm_userview.class.php';
		$smarty->assign('usershopadd',emmm_usershopadd());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_usershopadd.html")){
		$smarty->display($emmm_Language.'_usershopadd.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "usercoupon.html":
		include './emmm_userview.class.php';
		$smarty->assign('couponlist',emmm_usercoupon());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_usercoupon.html")){
		$smarty->display($emmm_Language.'_usercoupon.html');
			}else{
		echo $emmm_tempno;
		}
break;

default:
		include './emmm_userview.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."_".$temptype)){
		$smarty->display($emmm_Language."_".$temptype);
			}else{
		echo $emmm_tempno.'No:'.$emmm_Language."_".$temptype;
		}
break;
}
?>
