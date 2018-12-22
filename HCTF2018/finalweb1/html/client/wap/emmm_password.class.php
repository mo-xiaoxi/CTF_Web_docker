<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if (!defined('EMMMNO')) {
    exit('no!');
}

$emmm_rs = '';
@$username = dowith_sql($_POST['COL_Useremail']);
$usernameno = $emmm_adminfont['usernameno'];
$faqno = $emmm_adminfont['faqno'];
$upok = $emmm_adminfont['upok'];
$mobilecode = $emmm_adminfont['mobilecode'];
$ValidateCode = $_SESSION["code"]; //验证码 没搞明白为毛要写在这里才可以兼容其它虚拟主机
$vcode = $_SESSION['vcode'];

if (empty($_GET['user'])) {

    echo '';

} elseif ($_GET['user'] == 'email') {

    $code = $emmm_adminfont['code'];
    if ($_POST["code"] != $ValidateCode) {
        exit("<script language=javascript> alert('" . $code . "');history.go(-1);</script>");
    }

    $emmm_rs = $db->select("`id`,`COL_Useremail`,`COL_Userproblem`,`COL_Usercode`,`COL_Usertel`", "`emmm_user`", "WHERE `COL_Useremail` = '" . $username . "' || `COL_Usertel` = '" . $username . "'");
    if (!$emmm_rs) {
        exit("<script language=javascript> alert('" . $usernameno . "');history.go(-1);</script>");
    }

} elseif ($_GET['user'] == 'faq') {

    if ($emmm_usercontrol['telsms'] == 0) {

        $emmm_rs = $db->select("`id`,`COL_Useremail`,`COL_Useranswer`,`COL_Usercode`", "`emmm_user`", "WHERE (`COL_Useremail` = '" . $username . "' || `COL_Usertel` = '" . $username . "') && COL_Useranswer = '" . dowith_sql($_POST['COL_Useranswer']) . "' && COL_Usercode = '" . dowith_sql($_POST['COL_Usercode']) . "'");
        if (!$emmm_rs) {
            exit("<script language=javascript> alert('" . $faqno . "');history.go(-2);</script>");
        }

    } else {

        if ($vcode != $_POST['COL_Userpasscode']) {
            exit("<script language=javascript> alert('" . $mobilecode . "');history.go(-2);</script>");
        }

        $emmm_rs = $db->select("`id`,`COL_Useremail`,`COL_Usertel`,`COL_Usercode`", "`emmm_user`", "WHERE (`COL_Useremail` = '" . $username . "' || `COL_Usertel` = '" . $username . "') && COL_Usertel = '" . dowith_sql($_POST['COL_Useretel']) . "' && COL_Usercode = '" . dowith_sql($_POST['COL_Usercode']) . "'");
        if (!$emmm_rs) {
            exit("<script language=javascript> alert('" . $usernameno . "');history.go(-2);</script>");
        }

    }

} elseif ($_GET['user'] == 'ok') {

    if ($emmm_usercontrol['telsms'] == 0) {
        $emmm_rs = $db->select("`id`", "`emmm_user`", "WHERE (`COL_Useremail` = '" . $username . "' || `COL_Usertel` = '" . $username . "') && COL_Useranswer = '" . dowith_sql($_POST['COL_Userverification']) . "' && COL_Usercode = '" . dowith_sql($_POST['COL_Usercode']) . "'");
    } else {
        $emmm_rs = $db->select("`id`", "`emmm_user`", "WHERE (`COL_Useremail` = '" . $username . "' || `COL_Usertel` = '" . $username . "') && COL_Usertel = '" . dowith_sql($_POST['COL_Userverification']) . "' && COL_Usercode = '" . dowith_sql($_POST['COL_Usercode']) . "'");
    }

    if (!$emmm_rs) {
        exit("<script language=javascript> alert('" . $usernameno . "');history.go(-3);</script>");
    }

    $COL_Userpass = dowith_sql(substr(md5(md5($_REQUEST["COL_Userpass"])), 0, 16));
    $query = $db->update("`emmm_user`", "`COL_Userpass` = '" . $COL_Userpass . "'", "WHERE `COL_Useremail` = '" . $username . "' || `COL_Usertel` = '" . $username . "'");

    exit ("<script language=javascript> alert('" . $upok . "');location.replace('" . $emmm['webpath'] . "client/user/?" . $emmm_Language . "-login.html');</script>");

} elseif ($_GET['user'] == 'telcode') {

    if (empty($_GET['zh']) || empty($_GET['username'])) {
        $msg = '-1';
        echo $_GET['jsoncallback'] . "(" . json_encode($msg) . ")";
        exit;
    }

    $emmm_rs = $db->select("`id`", "`emmm_user`", "WHERE (`COL_Useremail` = '" . dowith_sql($_GET['username']) . "' || `COL_Usertel` = '" . dowith_sql($_GET['username']) . "') && COL_Usertel = '" . dowith_sql($_GET['zh']) . "'");

    if (!$emmm_rs) {
        $msg = '-1';
        echo $_GET['jsoncallback'] . "(" . json_encode($msg) . ")";
        exit;
    }

    $a = plugsclass::plugs(6);
    if (!$a) {
        $msg = '-1';
        echo $_GET['jsoncallback'] . "(" . json_encode($msg) . ")";
        exit;
    }

    $emmm_rs = $db->select("`COL_Websitemin`", "`emmm_web`", "where `id` = 1");
    include '../../function/api/telcode/user_regcode.class.php';
    $COL_Usertel = $_GET['zh'];
    $COL_Regcode = rand(1000, 9999);
    $_SESSION['vcode'] = $COL_Regcode;
    $c = '找回密码中,验证码:' . $COL_Regcode . '请妥善保管不要告诉他人!' . $emmm_rs[0];
    $s = '';
    $smskey->smsconfig($COL_Usertel, $c, $s, 1);
    $msg = '200';
    echo $_GET['jsoncallback'] . "(" . json_encode($msg) . ")";
    exit;

}

$smarty->assign('faq', $emmm_rs);
?>
