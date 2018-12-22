<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
include '../../config/emmm_code.php';
include '../../config/emmm_config.php';
include '../../config/emmm_Language.php';
include '../../function/emmm_function.class.php';

function emmm_usercontrol()
{
    global $db;
    $emmm_rs = $db->select("a.`COL_Userreg`,a.`COL_Userlogin`,a.`COL_Usergroup`,a.`COL_Usermoney`,a.`COL_Useripoff` ,b.`COL_Ucenter`", "`emmm_usercontrol` a , `emmm_webdeploy` b", "where a.`id` = 1 && b.`id` = 1");
    $rows = array(
        'regoff' => $emmm_rs[0],
        'loginoff' => $emmm_rs[1],
        'group' => $emmm_rs[2],
        'money' => explode("|", $emmm_rs[3]),
        'ipoff' => $emmm_rs[4],
        'ucenter' => $emmm_rs[5],
    );
    return $rows;
}

session_start();
date_default_timezone_set('Asia/Shanghai');
$ValidateCode = $_SESSION["code"]; //验证码 没搞明白为毛要写在这里才可以兼容其它虚拟主机
@$RegValidateCode = $_SESSION["vcode"];

$emmm_usercontrol = emmm_usercontrol();
$inputno = $emmm_adminfont['inputno'];
$code = $emmm_adminfont['code'];
$passwordto = $emmm_adminfont['passwordto'];
$regyes = $emmm_adminfont['regyes'];
$usernameyes = $emmm_adminfont['usernameyes'];
$userip = $emmm_adminfont['userip'];
$userloginno = $emmm_adminfont['userloginno'];
$upok = $emmm_adminfont['upok'];
$usernameno = $emmm_adminfont['usernameno'];
$mailsend = $emmm_adminfont['mailsend'];
$accessno = $emmm_adminfont['accessno'];
$mobilecode = $emmm_adminfont['mobilecode'];
$nophone = $emmm_adminfont['nophone'];

//处理注册用户
if (empty($_GET["emmm_cms"])) {

    exit('no!');

} elseif ($_GET["emmm_cms"] == 'reg') {

    // 验证开始
    $emmm_rs = $db->select("`COL_Userreg`,`COL_Userlogin`,`COL_Userprotocol`,`COL_Usergroup`,`COL_Usermoney`,`COL_Useripoff`,`COL_Regtyle`,`COL_Regcode`", "`emmm_usercontrol`", "where `id` = 1");

    if ($emmm_usercontrol['regoff'] == 2) {
        exit('no!');
    }

    if ($emmm_rs[6] == 'email') {
        $userloginemail = $_POST["COL_Useremail"];
        $userlogintel = $_POST["COL_Useremail"];
        if ($userloginemail == '' || $_POST["COL_Userpass"] == '' || $_POST["COL_Userpass2"] == '') {
            exit("<script language=javascript> alert('" . $inputno . "');history.go(-1);</script>");
        } elseif (strlen($userloginemail) > 50) {
            exit("<script language=javascript> alert('" . $usernameyes . "');history.go(-1);</script>");
        }
        $emailvar = filter_var($userloginemail, FILTER_VALIDATE_EMAIL);
        if (!$emailvar) {
            exit("<script language=javascript> alert('" . $accessno . "');history.go(-1);</script>");
        }
    } elseif ($emmm_rs[6] == 'tel') {
        $userloginemail = $_POST["COL_Usertel"];
        $userlogintel = $_POST["COL_Usertel"];
        if ($userlogintel == '' || $_POST["COL_Userpass"] == '' || $_POST["COL_Userpass2"] == '') {
            exit("<script language=javascript> alert('" . $inputno . "');history.go(-1);</script>");
        } elseif (strlen($userlogintel) > 11) {
            exit("<script language=javascript> alert('" . $usernameyes . "');history.go(-1);</script>");
        }
    }

    if ($emmm_rs[7] == 1) {
        if ($_POST["vcode"] == '') {
            exit("<script language=javascript> alert('" . $code . "');history.go(-1);</script>");
        }
        if ($_POST["vcode"] != $RegValidateCode) {
            exit("<script language=javascript> alert('" . $code . "');history.go(-1);</script>");
        }
    }

    if ($_POST["COL_Userpass"] != $_POST["COL_Userpass2"]) {
        exit("<script language=javascript> alert('" . $passwordto . "');history.go(-1);</script>");
    }

    if ($_POST["code"] != $ValidateCode) {
        exit("<script language=javascript> alert('" . $code . "');history.go(-1);</script>");
    }

    $query = $db->select("COL_Useremail", "`emmm_user`", "WHERE `COL_Useremail` = '" . dowith_sql($userloginemail) . "' || `COL_Usertel` = '" . dowith_sql($userlogintel) . "'");
    if ($query) {

        exit("<script language=javascript> alert('" . $usernameyes . "');history.go(-1);</script>");

    } else {

        if ($emmm_usercontrol['ipoff'] == 1) {
            $query = $db->select("id", "`emmm_user`", "WHERE `COL_Userip` = '" . dowith_sql($_POST["ip"]) . "'");
            if ($query) {
                exit("<script language=javascript> alert('" . $userip . "');history.go(-1);</script>");
            }
        }

        if (dowith_sql($_POST["introducer"]) == '') {
            $introducer = '';
        } else {
            $emmm_rs = $db->select("`COL_Useremail`", "`emmm_user`", "WHERE `id` = " . intval($_POST["introducer"]));
            if ($emmm_rs) {
                $query = $db->update("`emmm_user`", "`COL_Usermoney` = `COL_Usermoney` + " . $emmm_usercontrol['money'][2] . ",`COL_Userintegral` = `COL_Userintegral` + " . $emmm_usercontrol['money'][3], "where id = " . intval($_POST["introducer"]));
                $introducer = $emmm_rs[0];
            } else {
                $introducer = '';
            }
        }

        $query = $db->insert("`emmm_user`", "`COL_Useremail` = '" . dowith_sql($userloginemail) . "',`COL_Userpass` = '" . dowith_sql(substr(md5(md5($_REQUEST["COL_Userpass"])), 0, 16)) . "',`COL_Usertel` = '" . dowith_sql($userlogintel) . "',`COL_Userclass` = '" . $emmm_usercontrol['group'] . "',`COL_Usersource` = '" . $introducer . "',`COL_Usermoney` = '" . $emmm_usercontrol['money'][0] . "',`COL_Userintegral` = '" . $emmm_usercontrol['money'][1] . "',`COL_Userip` = '" . dowith_sql($_POST["ip"]) . "',`COL_Userstatus` = 1,`COL_Usercode` = '" . randomkeys(18) . "',`time` = '" . date("Y-m-d H:i:s") . "',`COL_Userimage` = '../../skin/user.png'", "");
        //处理Ucenter
        if ($emmm_usercontrol['ucenter'] == 1) {

            include_once '../../config.inc.php';
            include_once '../../uc_client/client.php';
            $COL_Useremail = dowith_sql($_POST["COL_Useremail"]);
            $COL_Userpass = dowith_sql($_REQUEST["COL_Userpass"]);
            $COL_Username = dowith_sql($_POST["COL_Username"]);

            $uid = uc_user_register($COL_Username, $COL_Userpass, $COL_Useremail);
            if ($uid <= 0) {
                if ($uid == -1) {
                    exit("<script language=javascript> alert('姓名不合法');history.go(-1);</script>");
                } elseif ($uid == -2) {
                    exit("<script language=javascript> alert('包含要允许注册的词语');history.go(-1);</script>");
                } elseif ($uid == -3) {
                    exit("<script language=javascript> alert('姓名已经存在');history.go(-1);</script>");
                } elseif ($uid == -4) {
                    exit("<script language=javascript> alert('Email 格式有误');history.go(-1);</script>");
                } elseif ($uid == -5) {
                    exit("<script language=javascript> alert('Email 不允许注册');history.go(-1);</script>");
                } elseif ($uid == -6) {
                    exit("<script language=javascript> alert('该 Email 已经被注册');history.go(-1);</script>");
                } else {
                    echo '未定义';
                }
            } else {
                echo ''; //注册成功
            }

        }
        //注册成功，邮件提醒
        $emmm_rs = $db->select("`COL_Regtyle`", "`emmm_usercontrol`", "where `id` = 1");
        if ($emmm_rs[0] == 'email') {
            $emmm_mail = 'reguser';
            $COL_Useremail = dowith_sql($userloginemail);
            $COL_Userpass = dowith_sql($_POST["COL_Userpass"]);
            $COL_Username = dowith_sql($_POST["COL_Username"]);
            include '../../function/emmm_mail.class.php';
        }

        echo @emmm_pcwapurl($_GET['type'], '?' . $_GET["lang"] . '-login.html', '?' . $_GET["lang"] . '-userlogin.html', 0, '');
        exit;
    }


//处理会员登录
} elseif ($_GET["emmm_cms"] == 'login') {

    if ($emmm_usercontrol['loginoff'] == 2) {
        exit('no!');
    }
    if ($_POST["code"] != $ValidateCode) {
        exit("<script language=javascript> alert('" . $code . "');history.go(-1);</script>");
    }

    $loginerror = $emmm_adminfont['loginerror'];
    $emmm_rs = $db->select("`id`,`COL_Useremail`,`COL_Userpass`,`COL_Userstatus`,`COL_Username`,`COL_Userclass`", "`emmm_user`", "WHERE (`COL_Useremail` = '" . dowith_sql($_POST["COL_Useremail"]) . "' || `COL_Usertel` = '" . dowith_sql($_POST["COL_Useremail"]) . "') and `COL_Userpass` = '" . dowith_sql(substr(md5(md5($_REQUEST["COL_Userpass"])), 0, 16)) . "'");
    if (!$emmm_rs) {

        exit("<script language=javascript> alert('" . $loginerror . "');history.go(-1);</script>");

    } else {

        $userclass = $db->select("COL_Useropen", "emmm_userleve", "where id = " . intval($emmm_rs[5]));
        if ($emmm_rs[3] == 2 || $userclass[0] == 1) {
            exit("<script language=javascript> alert('" . $userloginno . "');history.go(-1);</script>");
        }

        $_SESSION['username'] = $emmm_rs[1];
        $_SESSION['name'] = $emmm_rs[4];


        //处理Ucenter
        if ($emmm_usercontrol['ucenter'] == 1) {
            include_once '../../config.inc.php';
            include_once '../../uc_client/client.php';
            $COL_Userpass = dowith_sql($_REQUEST["COL_Userpass"]);
            $COL_Username = $emmm_rs[4];

            list($uid, $username, $password, $email) = uc_user_login($COL_Username, $COL_Userpass);
            if ($uid > 0) {
                //echo '登录成功'.$uid;
                echo uc_user_synlogin($uid);
            } elseif ($uid == -1) {
                //echo '用户不存在,或者被删除';
            } elseif ($uid == -2) {
                //echo '密码错';
            } else {
                //echo '未定义';
            }
        }

        echo @emmm_pcwapurl($_GET['type'], '?' . $_GET["lang"] . '-index.html', '?' . $_GET["lang"] . '-usercenter.html', 0, '');
        exit;
    }


//退出
} elseif ($_GET["emmm_cms"] == 'out') {

    unset($_SESSION['username']);

    //处理Ucenter
    if ($emmm_usercontrol['ucenter'] == 1) {
        include_once '../../config.inc.php';
        include_once '../../uc_client/client.php';
        echo uc_user_synlogout();
    }
    echo @emmm_pcwapurl($_GET['type'], '?' . $_GET["lang"] . '-login.html', '?' . $_GET["lang"] . '-userlogin.html', 0, '');
    exit;

//修改资料
} elseif ($_GET["emmm_cms"] == 'edit') {


    if ($_POST["COL_Username"] == '' || $_POST["COL_Usertel"] == '' || $_POST["COL_Useranswer"] == '' ) {
        exit("<script language=javascript> alert('" . $inputno . "');history.go(-1);</script>");
    } elseif ($_POST["COL_Userpass"] != $_POST["COL_Userpass2"]) {
        exit("<script language=javascript> alert('" . $passwordto . "');history.go(-1);</script>");
    } elseif ($_POST["code"] != $ValidateCode) {
        exit("<script language=javascript> alert('" . $code . "');history.go(-1);</script>");
    }

    if ($_POST["COL_Userpass"] == '' && $_POST["COL_Userpass2"] == '') {
        $password = dowith_sql($_POST["password"]);
    } else {
        $password = dowith_sql(substr(md5(md5($_POST["COL_Userpass"])), 0, 16));
    }

    $query = $db->select("COL_Useremail", "`emmm_user`", "WHERE `COL_Useremail` != '" . $_SESSION['username'] . "' && (`COL_Useremail` = '" . dowith_sql($_POST["COL_Usertel"]) . "'  || `COL_Usertel` = '" . dowith_sql($_POST["COL_Usertel"]) . "')");
    if ($query) {

        exit("<script language=javascript> alert('" . $nophone . "');history.go(-1);</script>");

    } else {

        if ($_FILES) {
            $uploaddir = "../../skin/";
            $filename = $_FILES['file']['name'];
            $uploadfile = $uploaddir . $filename;
            if (!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
                exit("<script language=javascript> alert('图片上传失败');history.go(-1);</script>");
            }
        }

        $query = $db->update("`emmm_user`", "`COL_Userpass` = '" . $password . "',`COL_Username` = '" . dowith_sql($_POST["COL_Username"]) . "',`COL_Usertel` = '" . dowith_sql($_POST["COL_Usertel"]) . "',`COL_Userqq` = '" . dowith_sql($_POST["COL_Userqq"]) . "',`COL_Userskype` = '" . dowith_sql($_POST["COL_Userskype"]) . "',`COL_Useraliww` = '" . dowith_sql($_POST["COL_Useraliww"]) . "',`COL_Useradd` = '" . dowith_sql($_POST["COL_Useradd"]) . "',`COL_Userproblem` = '" . dowith_sql($_POST["COL_Userproblem"]) . "',`COL_Useranswer` = '" . dowith_sql($_POST["COL_Useranswer"]) . "',`COL_Usertext` = '" . dowith_sql($_POST["COL_Usertext"]) . "',`COL_Usercode` = '" . randomkeys(18) . "',`COL_Userimage` = '" . dowith_sql($uploadfile) . "'", "WHERE `COL_Useremail` = '" . $_SESSION['username'] . "'");

    }

    echo @emmm_pcwapurl($_GET['type'], '?' . $_GET["lang"] . '-useredit.html', '?' . $_GET["lang"] . '-useredit.html', 0, '');
    exit;

//处理站内邮件
} elseif ($_GET["emmm_cms"] == 'mail') {

    $query = $db->select("id", "`emmm_user`", "WHERE `COL_Useremail` = '" . dowith_sql($_POST["COL_Usercollect"]) . "' || `COL_Usertel` = '" . dowith_sql($_POST["COL_Usercollect"]) . "'");
    if (!$query) {

        exit("<script language=javascript> alert('" . $usernameno . "');history.go(-1);</script>");

    } else {

        if (dowith_sql($_POST["COL_Usercollect"]) == $_SESSION['username']) {
            exit("<script language=javascript> alert('" . $accessno . "');history.go(-1);</script>");
        }

        $add = $db->insert("`emmm_usermessage`", "`COL_Usersend` = '" . $_SESSION['username'] . "',`COL_Usercollect` = '" . dowith_sql($_POST["COL_Usercollect"]) . "',`COL_Usercontent` = '" . dowith_sql($_POST["COL_Usercontent"]) . "',`time` = '" . date("Y-m-d H:i:s") . "'", "");

        echo @emmm_pcwapurl($_GET['type'], '?' . $_GET["lang"] . '-usermail-op.html', '?' . $_GET["lang"] . '-usermail-op.html', 0, '');
        exit;

    }
} elseif ($_GET["emmm_cms"] == 'integral') {

    $emmm_rs = $db->select("`id`,`COL_Iintegral`,`COL_Iid`", "`emmm_integral`", "WHERE `id` = '" . intval($_GET["id"]) . "' && COL_Iuseremail = '" . $_SESSION['username'] . "' && `COL_Iconfirm` = 0");
    if (!$emmm_rs) {

        exit("<script language=javascript> alert('" . $accessno . "');history.go(-1);</script>");

    } else {

        $query = $db->update("`emmm_integral`", "`COL_Iconfirm` = 1,`COL_ITime` = '" . date("Y-m-d H:i:s") . "'", "where `id` = '" . intval($_GET["id"]) . "' && COL_Iuseremail = '" . $_SESSION['username'] . "'");
        $query = $db->update("`emmm_user`", "`COL_Userintegral` = `COL_Userintegral` + " . $emmm_rs[1] . "", "where `COL_Useremail` = '" . $_SESSION['username'] . "'");
        $query = $db->insert("`emmm_userpay`", "`COL_Useremail` = '" . $_SESSION['username'] . "',`COL_Usermoney` = 0,`COL_Userintegral` = '" . $emmm_rs[1] . "',`COL_Usercontent` = '领取商品赠送积分<br />商品id:" . $emmm_rs[2] . "',`COL_Useradmin` = '" . $_SESSION['username'] . "',`time` = '" . date("Y-m-d H:i:s") . "'", "");

        echo @emmm_pcwapurl($_GET['type'], '?' . $_GET["lang"] . '-userintegral-op.html', '?' . $_GET["lang"] . '-userintegral-op.html', 0, '');
        exit;

    }

} elseif ($_GET["emmm_cms"] == 'shopadd') {

    if ($_POST["COL_Addname"] == '' || $_POST["COL_Addtel"] == '') {
        exit("<script language=javascript> alert('" . $inputno . "');history.go(-1);</script>");
    }

    $user = $db->select("`id`", "`emmm_usershopadd`", "where `COL_Adduser` = '" . $_SESSION['username'] . "' && `COL_Addindex` = 1");
    if ($user) {
        $COL_Addindex = 0;
    } else {
        $COL_Addindex = 1;
    }

    $add = implode('|', $_POST['COL_Add']);
    $query = $db->insert("`emmm_usershopadd`", "`COL_Addname` = '" . dowith_sql($_POST["COL_Addname"]) . "',`COL_Addtel` = '" . dowith_sql($_POST["COL_Addtel"]) . "',`COL_Add` = '" . dowith_sql($add) . "',`COL_Addindex` = " . $COL_Addindex . ",`COL_Adduser` = '" . $_SESSION['username'] . "',`time` = '" . date("Y-m-d H:i:s") . "'", "");
    echo @emmm_pcwapurl($_GET['type'], '?' . $_GET["lang"] . '-usershopadd.html', '?' . $_GET["lang"] . '-usershopadd.html', 0, '');
    exit;

} elseif ($_GET["emmm_cms"] == 'shopadd_index') {

    $query = $db->update("`emmm_usershopadd`", "`COL_Addindex` = 0", "where `COL_Adduser` = '" . $_SESSION['username'] . "'");
    $query = $db->update("`emmm_usershopadd`", "`COL_Addindex` = 1", "where `COL_Adduser` = '" . $_SESSION['username'] . "' && `id` = " . intval($_POST['opcms']));
    echo @emmm_pcwapurl($_GET['type'], '?' . $_GET["lang"] . '-usershopadd.html', '?' . $_GET["lang"] . '-usershopadd.html', 0, '');
    exit;

} elseif ($_GET["emmm_cms"] == 'shopadd_del') {

    $query = $db->del("`emmm_usershopadd`", "where `COL_Adduser` = '" . $_SESSION['username'] . "' && `id` = " . intval($_GET['id']));
    echo @emmm_pcwapurl($_GET['type'], '?' . $_GET["lang"] . '-usershopadd.html', '?' . $_GET["lang"] . '-usershopadd.html', 0, '');
    exit;

}
?>
