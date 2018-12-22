<?php 
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
 *-------------------------------
 * 处理邮件提醒(2014-10-15)
 *-------------------------------
*/
if(!defined('EMMMNO')){exit('no!');}

function mailcontent($content,$type,$keyone = '',$keytow = '',$keythree = ''){
	if($type == 1){
		$content = str_replace('#opcms#useremail#',$keyone,$content);
		$content = str_replace('#opcms#userpass#',$keytow,$content);
		$content = str_replace('#opcms#username#',$keythree,$content);
	}elseif($type == 3){
		$content = str_replace('#opcms#express#',$keyone,$content);
		$content = str_replace('#opcms#expressnum#',$keytow,$content);
		$content = str_replace('#opcms#buynumber#',$keythree,$content);
	}elseif($type == 4){
		$content = str_replace('#opcms#code#',$keyone,$content);
	}
	return $content;
}

function emmm_mailgo($a,$b,$c,$d,$e,$f,$g,$h,$i,$mailclass,$url){
	include_once($url."function/emmm_mail.php");
	$smtpserver = "$a";//SMTP服务器
	$smtpserverport = intval($b);//SMTP服务器端口
	$smtpusermail = "$c";//SMTP服务器的用户邮箱
	$smtpemailto = "$d";//发送给谁
	$smtpuser = "$e";//SMTP服务器的用户帐号
	$smtppass = "$f";//SMTP服务器的用户密码
	$mailsubject = "$g";//邮件主题
	$mailbody = "$h";//邮件内容
	$mailtype = "$i";//邮件格式（HTML/TXT）,TXT为文本邮件
	$smtp= new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
	$smtp->debug = FALSE;//是否显示发送的调试信息
	$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
}

switch($emmm_mail){

	case "reguser":
		$emmm_rs = $db -> select("*","`emmm_mail`","where `id` = 1");
		if($emmm_rs['COL_Mailclass'] == 1){
			$COL_Mailcontent = mailcontent($emmm_rs['COL_Mailcontent'],1,$COL_Useremail,$COL_Userpass,$COL_Username);
			emmm_mailgo($emmm_rs['COL_Mailsmtp'],$emmm_rs['COL_Mailport'],$emmm_rs['COL_Mailusermail'],$COL_Useremail,$emmm_rs['COL_Mailuser'],$emmm_rs['COL_Mailpass'],$emmm_rs['COL_Mailsubject'],$COL_Mailcontent,$emmm_rs['COL_Mailtype'],1,'../../');
		}
	break;
	case "send":
		$emmm_rs = $db -> select("*","`emmm_mail`","where `id` = 3");
		if($emmm_rs['COL_Mailclass'] == 1){
			$COL_Mailcontent = mailcontent($emmm_rs['COL_Mailcontent'],3,$COL_Ordersexpress,$COL_Ordersexpressnum,$COL_Ordersnumber);
			emmm_mailgo($emmm_rs['COL_Mailsmtp'],$emmm_rs['COL_Mailport'],$emmm_rs['COL_Mailusermail'],$COL_Useremail,$emmm_rs['COL_Mailuser'],$emmm_rs['COL_Mailpass'],$emmm_rs['COL_Mailsubject'],$COL_Mailcontent,$emmm_rs['COL_Mailtype'],1,'../../');
		}
	break;
	case "userbuy":
		$emmm_rs = $db -> select("*","`emmm_mail`","where `id` = 2");
		if($emmm_rs['COL_Mailclass'] == 1){
			emmm_mailgo($emmm_rs['COL_Mailsmtp'],$emmm_rs['COL_Mailport'],$emmm_rs['COL_Mailusermail'],$COL_Useremail,$emmm_rs['COL_Mailuser'],$emmm_rs['COL_Mailpass'],$emmm_rs['COL_Mailsubject'],$emmm_rs['COL_Mailcontent'],$emmm_rs['COL_Mailtype'],1,'');
		}
	break;
	case "regcode":
		$emmm_rs = $db -> select("*","`emmm_mail`","where `id` = 4");
		if($emmm_rs['COL_Mailclass'] == 1){
			$COL_Mailcontent = mailcontent($emmm_rs['COL_Mailcontent'],4,$COL_Regcode);
			emmm_mailgo($emmm_rs['COL_Mailsmtp'],$emmm_rs['COL_Mailport'],$emmm_rs['COL_Mailusermail'],$COL_Useremail,$emmm_rs['COL_Mailuser'],$emmm_rs['COL_Mailpass'],$emmm_rs['COL_Mailsubject'],$COL_Mailcontent,$emmm_rs['COL_Mailtype'],1,'../../');
		}
	break;

}
?> 
