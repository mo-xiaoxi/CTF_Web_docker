<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2018 vidar.club
 * 优惠券领取处理文件
*/
include '../config/emmm_code.php';
include '../config/emmm_config.php';
include '../config/emmm_Language.php';
include './emmm_function.class.php';

session_start();
date_default_timezone_set('Asia/Shanghai'); //设置时区

@$id = $_GET['class'];
@$md = $_GET['md'];

if (!isset($id) || !isset($md)) {

    echo 'no!';
    exit;

} else {

    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
    } else {
        $lang = 'cn';
    }
    if (!isset($_SESSION['username'])) {
        if (isset($_GET['type'])) {
            header("location: " . $emmm['webpath'] . "client/wap/?" . $lang . "-userlogin.html");
        } else {
            header("location: " . $emmm['webpath'] . "client/user/?" . $lang . "-login.html");
        }
        exit;
    }

    switch ($lang) {
        case "cn":
            $font = array('此优惠券不对全部用户开放!', '您已经领取过了,不能重复领取!', '领取成功,请返回会员中心查看或在购物时使用!');
            break;
        default:
            $font = array('此优惠券不对全部用户开放!', '您已经领取过了,不能重复领取!', '领取成功,请返回会员中心查看或在购物时使用!');
            break;
    }

    $r = $db->select("*", "emmm_coupon", "where id = " . intval($id) . " && `COL_Md` = '" . dowith_sql($md) . "'");
    if ($r) {

        if ($r['COL_Type'] == 0) {

            $op = $db->select("*", "emmm_couponlist", "where `COL_Couponid` = " . intval($id) . " && `COL_Username` = '" . $_SESSION['username'] . "' && `COL_Md` = '" . dowith_sql($md) . "'");
            if ($op) {

                echo $font[1];
                exit;

            } else {

                $coupon = $db->insert("emmm_couponlist", "
				`COL_Couponid` =	" . intval($id) . ",
				`COL_Username` =	'" . $_SESSION['username'] . "',
				`COL_Type` =	0,
				`COL_Timewin` =	'" . $r['COL_Timewin'] . "',
				`COL_Moneygo` =	'" . $r['COL_Moneygo'] . "',
				`COL_Md` =	'" . dowith_sql($md) . "',
				`COL_Time` =	'',
				`time` =	'" . date("Y-m-d H:i:s") . "'
				", "");

                if ($r['COL_Moneygo'] == 0) {
                    $moneygo = '全场使用';
                } else {
                    $moneygo = '满 <span>' . intval($r['COL_Moneygo']) . '</span> 使用';
                }
                if ($r['COL_Timewin'] == '' || $r['COL_Timewin'] == '0000-00-00 00:00:00') {
                    $timewin = '请在结算时使用';
                } else {
                    $timewin = date("Y-m-d", strtotime($r['COL_Timewin'])) . ' 前使用';
                }

                echo '
				

					<!DOCTYPE html>
					<html lang="zh-cmn-Hans">
					<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
					<meta name="author" content="vidar.club"/>
					<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
					<meta name="apple-mobile-web-app-title" content="优惠券领取">
					<meta name="apple-mobile-web-app-capable" content="yes"/>
					<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
					<meta name="renderer" content="webkit">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta http-equiv="Cache-Control" content="no-siteapp" />
					<meta name="HandheldFriendly" content="true">
					<meta name="MobileOptimized" content="320">
					<meta name="screen-orientation" content="portrait">
					<meta name="x5-orientation" content="portrait">
					<meta name="full-screen" content="yes">
					<meta name="x5-fullscreen" content="true">
					<meta name="browsermode" content="application">
					<meta name="x5-page-mode" content="app">
					<meta name="msapplication-tap-highlight" content="no">
					<title>优惠券领取</title>
					<style type="text/css">
						.clear { clear:both;}
						.coupon { margin:50px auto 0 auto; width:500px; height:150px; overflow:hidden; background:url(../skin/coupon.png) center top no-repeat;}
						.coupon .left {font-size:90px; color:#fff; float:left; margin:25px 0 0 80px; font-family:Arial; width:100px;}
						.coupon .right {float:left; margin:30px 0 0 65px; font-size:27px; color:#66604B;}
						.coupon .right p { margin-top:0; margin-bottom:10px; font-family:Arial; font-weight:bold;}
						.coupon .right p.f1 {font-size:32px;}
						.coupon .right p span{color:#A75312;}
						.couponfont { text-align:center; padding:20px 0;}
					</style>
					</head>
					<body>
						<div class="coupon">
							<div class="left">' . intval($r['COL_Money']) . '</div>
							<div class="right">
								<p class="f1">' . $moneygo . '</p>
								<p>' . $timewin . '</p>
							</div>
						</div>
						<div class="clear"></div>
						<div class="couponfont">
							<img src="../skin/accept_check_login_success_16px_1534_easyicon.net.png"> 领取成功!~
						</div>
					</body>
					</html>
				
				';
                exit;
            }

        } else {

            echo $font[0];
            exit;

        }

    } else {

        echo 'no!';
        exit;

    }

}

?>
