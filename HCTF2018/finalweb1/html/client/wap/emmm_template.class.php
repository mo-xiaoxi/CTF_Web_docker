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
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_index.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language.'_index.html');
			}else{
		echo $emmm_tempno;
		exit();
		}
break;

case "index.html":
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_index.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language.'_index.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "article":
		include './emmm_page.class.php';
		include '../../function/emmm_list.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['listtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['listtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "articleview":
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_view.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['viewtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['viewtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "product":
		include './emmm_page.class.php';
		include '../../function/emmm_list.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['listtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['listtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "productview":
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_shop.class.php';
		include '../../function/emmm_view.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['viewtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['viewtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "shop.html":
		include '../../function/emmm_list.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_shop.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_shop.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "brand":
		include './emmm_page.class.php';
		include '../../function/emmm_list.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_brand.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_brand.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "userreg.html":
		include '../user/emmm_userreg.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_userreg.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_userreg.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "userlogin.html":
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_userlogin.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_userlogin.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "userpassword.html":
		include './emmm_password.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_userpassword.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_userpassword.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "usercenter.html":
		include './emmm_page.class.php';
		include './emmm_userview.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_usercenter.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_usercenter.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "shoppingcart.html":
		include './emmm_page.class.php';
		include './emmm_userview.class.php';
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_shop.class.php';
		include '../../function/emmm_shoppingcart.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_shoppingcart.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_shoppingcart.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "shoppingorders.html":
		include './emmm_page.class.php';
		include './emmm_userview.class.php';
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_shop.class.php';
		include '../../function/emmm_shoppingorders.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_shoppingorders.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_shoppingorders.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "usershopping":
		include './emmm_page.class.php';
		include './emmm_userview.class.php';
		include './emmm_shoppingorders.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_usershopping.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_usershopping.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "userintegral":
		include './emmm_page.class.php';
		include './emmm_userview.class.php';
		$smarty->assign('integrallist',emmm_userintegral());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_userintegral.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language.'_userintegral.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "userpay":
		include './emmm_page.class.php';
		include './emmm_userview.class.php';
		$smarty->assign('paylist',emmm_userpaylist());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_userpay.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language.'_userpay.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "usermail":
		include './emmm_page.class.php';
		include './emmm_userview.class.php';
		$smarty->assign('mail',emmm_usermail());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_usermail.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language.'_usermail.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "usershopadd.html":
		include './emmm_page.class.php';
		include './emmm_userview.class.php';
		include '../../function/emmm_shop.class.php';
		include '../../function/emmm_shoppingcart.class.php';
		$smarty->assign('shopadd',emmm_usershopadd());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_usershopadd.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_usershopadd.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "photo":
		include './emmm_page.class.php';
		include '../../function/emmm_list.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['listtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['listtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "photoview":
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_view.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['viewtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['viewtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "video":
		include './emmm_page.class.php';
		include '../../function/emmm_list.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['listtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['listtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "videoview":
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_view.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['viewtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['viewtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "about":
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_view.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['viewtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['viewtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "club.html":
		include '../../function/emmm_list.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_club.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_club.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "clubview":
		include './emmm_page.class.php';
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_view.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_clubview.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_clubview.html");
			}else{
		echo $emmm_tempno;
		}
break;

case "down":
		include './emmm_page.class.php';
		include '../../function/emmm_list.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['listtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['listtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "downview":
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_view.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['viewtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['viewtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "job":
		include './emmm_page.class.php';
		include '../../function/emmm_list.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['listtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['listtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "jobview":
		include '../../function/emmm_list.class.php';
		include '../../function/emmm_view.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$Listname['viewtemp'])){
		$smarty->display($emmm_Language.'/'.$Listname['viewtemp']);
			}else{
		echo $emmm_tempno;
		}
break;

case "usercoupon.html":
		include './emmm_userview.class.php';
		$smarty->assign('couponlist',emmm_usercoupon());
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_usercoupon.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language.'_usercoupon.html');
			}else{
		echo $emmm_tempno;
		}
break;

case "useredit.html":
		include './emmm_userview.class.php';
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_useredit.html")){
		$smarty->display($emmm_Language.'/'.$emmm_Language.'_useredit.html');
			}else{
		echo $emmm_tempno;
		}
break;

default:
		if($smarty->templateExists($emmm_templates."/".$emmm_Language."/".$emmm_Language."_".$temptype)){
		$smarty->display($emmm_Language.'/'.$emmm_Language."_".$temptype);
			}else{
		echo $emmm_tempno.'No:'.$emmm_Language."_".$temptype;
		}
break;
}
?>
