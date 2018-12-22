<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 *-------------------------------
 * Emmm系统 会员处理接口
 *-------------------------------
*/
if(!defined('EMMMNO')){exit('no!');}

//session_start();
@$useremail = dowith_sql($_REQUEST['useremail']);
@$username = dowith_sql($_REQUEST['username']);
@$password = dowith_sql($_REQUEST['password']);
@$passwordto = dowith_sql($_REQUEST['passwordto']);
@$type = $_REQUEST['type'];
@$key = $_REQUEST['key'];

function user_reg($useremail,$username,$password,$passwordto){
	global $db;
	if($password != $passwordto){
		
		return "-6"; //两次密码验证出错
		exit;
		
	}
	if($useremail == "" || $username == "" || $password == ""){
		
		return "-1"; //不能为空
		exit;
		
	}else{
	
			$num = $db -> select("`COL_Useremail`","`emmm_user`","where `COL_Useremail` = '".dowith_sql($useremail)."' || `COL_Usertel` = '".dowith_sql($useremail)."'");
			if ($num){
				
				return "-3"; //账户已存在
				exit;
				
			}else{
				
				$emmm_rs = $db -> select("`COL_Regtyle`","`emmm_usercontrol`","where `id` = 1");
				
				if($emmm_rs[0] == 'email'){
					$emailvar = filter_var($useremail, FILTER_VALIDATE_EMAIL);
					if(!$emailvar){
						return "-2"; //EMAIL格式不正确
						exit;	
					}
				}elseif($emmm_rs[0] == 'tel'){
					if(!preg_match("/^1[34578]{1}\d{9}$/",$useremail)){ 
						return "-2"; //手机号格式不正确
						exit;
					}
				}
				$userclass = $db -> select("`COL_Usergroup`","`emmm_usercontrol`","where `id` = 1");
				
				$query = $db -> insert("`emmm_user`","`COL_Useremail` = '".dowith_sql($useremail)."',`COL_Userpass` = '".dowith_sql(substr(md5(md5($password)),0,16))."',`COL_Username` = '".dowith_sql($username)."',`COL_Usertel` = '".dowith_sql($useremail)."',`COL_Userclass` = '".$userclass[0]."',`COL_Usersource` = 'API接口',`COL_Usermoney` = '0.00',`COL_Userintegral` = '0.00',`COL_Userproblem` = '你的家乡在哪？',`COL_Useranswer` = '中国',`COL_Userstatus` = 1,`COL_Usercode` = '".randomkeys(18)."',`time` = '".date("Y-m-d H:i:s")."'","");
				return "200";
			}	
	}
}

function user_login($useremail,$password){
	global $db;
	if($useremail == "" || $password == ""){
		
		return "-1"; //不能为空
		exit;
		
	}else{
		
		$emmm_rs = $db -> select("`id`,`COL_Userstatus`,`COL_Userclass`","`emmm_user`","where (`COL_Useremail` = '".dowith_sql($useremail)."' || `COL_Usertel` = '".dowith_sql($useremail)."') && `COL_Userpass` = '".dowith_sql(substr(md5(md5($password)),0,16))."'");
		$userclass = $db -> select("COL_Useropen","emmm_userleve","where id = ".intval($emmm_rs[2]));
		
		if (!$emmm_rs){
			
			return "-4"; //账户不存在或密码错误
			exit;
			
		}elseif($emmm_rs[1] == 2 || $userclass[0] == 1){
			
			return "-5"; //账户被锁定
			exit;
			
		}else{
			
			$_SESSION['username'] = dowith_sql($useremail);
			return "200";
			
		}
	}
}

function user_out($useremail){
		unset($_SESSION['username']);
		return "200";
}

?>
