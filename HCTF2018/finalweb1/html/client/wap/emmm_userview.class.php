<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if (!defined('EMMMNO')) {
    exit('no!');
}

if (!isset($_SESSION['username'])) {

    header("location: ?" . $emmm_Language . "-userlogin.html");
    exit;

} else {

    $emmm_user = $db->select("`id`,`COL_Userclass`,`COL_Userstatus`", "`emmm_user`", "where `COL_Useremail` = '" . $_SESSION['username'] . "'");
    if ($emmm_user[2] == 2) {

        unset($_SESSION['username']);
        echo "<script language=javascript> alert('" . $emmm_adminfont['userloginno'] . "');location.replace('?" . $emmm_Language . "-userlogin.html');</script>";
        exit;

    } else {

        $emmm_userclass = $db->select("`COL_Useropen`,`COL_Userlevename`", "emmm_userleve", "where id = " . intval($emmm_user[1]));
        if ($emmm_userclass[0] == 1) {

            unset($_SESSION['username']);
            echo "<script language=javascript> alert('" . $emmm_adminfont['userloginno'] . "');location.replace('?" . $emmm_Language . "-userlogin.html');</script>";
            exit;

        }

    }

}

function shoppingiconum($type = '')
{
    global $db;
    if (empty($_SESSION['username'])) {
        return false;
    } else {

        if ($type == 'car') {

            $emmm_rs = $db->listgo("count(id) as tiaoshu", "`emmm_shoppingcart`", "where `COL_Shopusername` = '" . $_SESSION['username'] . "'");

        } else if ($type == 'shopping') {

            $emmm_rs = $db->listgo("count(id) as tiaoshu", "`emmm_orders`", "where `COL_Ordersemail` = '" . $_SESSION['username'] . "' && `COL_Orderspay` = 1");

        } else if ($type == 'msgemail') {

            $emmm_rs = $db->listgo("count(id) as tiaoshu", "`emmm_usermessage`", "where `COL_Usercollect` = '" . $_SESSION['username'] . "' && `COL_Userclass` = 1");

        }
        $emmm_rs = $db->whilego($emmm_rs);
        return $emmm_rs;
    }
}

function emmm_wapuserview()
{
    global $db, $emmm_userclass;
    $emmm_rs = $db->select("`id`,`COL_Useremail`,`COL_Username`,`COL_Usertel`,`COL_Userqq`,`COL_Userskype`,`COL_Useraliww`,`COL_Useradd`,`COL_Userclass`,`COL_Usermoney`,`COL_Userintegral`,`COL_Userproblem`,`COL_Useranswer`,`COL_Usertext`,`COL_Usercode`,`COL_Userpass`", "`emmm_user`", "where `COL_Useremail` = '" . $_SESSION['username'] . "'");

    $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_couponlist`", "where `COL_Username` = '" . $_SESSION['username'] . "'");
    $emmmtotal = $db->whilego($emmmtotal);
    //cookies 储存用户基本信息
    setcookie("name", $emmm_rs[2], time() + 3600 * 24);
    setcookie("tel", $emmm_rs[3], time() + 3600 * 24);
    setcookie("add", $emmm_rs[7], time() + 3600 * 24);
    setcookie("money", $emmm_rs[9], time() + 3600 * 24);
    setcookie("integral", $emmm_rs[10], time() + 3600 * 24);
    setcookie("coupon", $emmmtotal['tiaoshu'], time() + 3600 * 24);

    $userrows = array(
        'id' => $emmm_rs[0],
        'email' => $emmm_rs[1],
        'name' => $emmm_rs[2],
        'tel' => $emmm_rs[3],
        'qq' => $emmm_rs[4],
        'skype' => $emmm_rs[5],
        'aliww' => $emmm_rs[6],
        'add' => $emmm_rs[7],
        'class' => $emmm_userclass[1],
        'money' => $emmm_rs[9],
        'integral' => $emmm_rs[10],
        'problem' => $emmm_rs[11],
        'answer' => $emmm_rs[12],
        'text' => $emmm_rs[13],
        'code' => $emmm_rs[14],
        'password' => $emmm_rs[15],
        'coupon' => $emmmtotal['tiaoshu'],
    );
    return $userrows;
}

function emmm_userintegral()
{
    global $db;
    $query = $db->listgo("`id`,`COL_Iname`,`COL_Iintegral`,`COL_Iconfirm`,`COL_ITime`", "`emmm_integral`", "where `COL_Iuseremail` = '" . $_SESSION['username'] . "'");
    $userrows = array();
    while ($emmm_rs = $db->whilego($query)) {
        $userrows[] = array(
            'id' => $emmm_rs[0],
            'name' => $emmm_rs[1],
            'integral' => $emmm_rs[2],
            'confirm' => $emmm_rs[3],
            'lqtime' => $emmm_rs[4],
        );
    }
    return $userrows;
}

function emmm_usermail()
{
    global $db, $smarty;
    $listpage = 25;
    if (intval(isset($_GET['page'])) == 0) {
        $listpagesum = 1;
    } else {
        $listpagesum = intval($_GET['page']);
    }
    $start = ($listpagesum - 1) * $listpage;
    $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_usermessage`", "where `COL_Usersend` = '" . $_SESSION['username'] . "' || `COL_Usercollect` = '" . $_SESSION['username'] . "' || `COL_Usercollect` = '全体会员'");
    $emmmtotal = $db->whilego($emmmtotal);

    $query = $db->listgo("`id`,`COL_Usersend`,`COL_Usercollect`,`COL_Usercontent`,`COL_Userclass`,`time`", "`emmm_usermessage`", "where `COL_Usersend` = '" . $_SESSION['username'] . "' || `COL_Usercollect` = '" . $_SESSION['username'] . "' || `COL_Usercollect` = '全体会员' order by time desc LIMIT " . $start . "," . $listpage);
    $rows = array();
    $i = 1;
    while ($emmm_rs = $db->whilego($query)) {
        $rows[] = array(
            "i" => $i,
            "id" => $emmm_rs[0],
            "send" => $emmm_rs[1],
            "collect" => $emmm_rs[2],
            "content" => $emmm_rs[3],
            "class" => $emmm_rs[4],
            "time" => $emmm_rs[5],
        );
        $i += 1;
        //改为已读状态
        $msgok = $db->update("`emmm_usermessage`", "`COL_Userclass` = 2", "where id = " . intval($emmm_rs[0]));
    }
    $_page = new Page($emmmtotal['tiaoshu'], $listpage);
    $smarty->assign('emmmpage', $_page->showpage());
    return $rows;
}

function emmm_userpaylist()
{
    global $db;
    $query = $db->listgo("`id`,`COL_Useremail`,`COL_Usermoney`,`COL_Userintegral`,`COL_Usercontent`,`time`", "`emmm_userpay`", "where `COL_Useremail` = '" . $_SESSION['username'] . "'");
    $rows = array();
    while ($emmm_rs = $db->whilego($query)) {
        $rows[] = array(
            'id' => $emmm_rs[0],
            'email' => $emmm_rs[1],
            'money' => $emmm_rs[2],
            'integral' => $emmm_rs[3],
            'content' => $emmm_rs[4],
            'time' => $emmm_rs[5],
        );
    }
    return $rows;
}

function emmm_usershopadd()
{
    global $db;
    $query = $db->listgo("*", "`emmm_usershopadd`", "where `COL_Adduser` = '" . $_SESSION['username'] . "' order by COL_Addindex desc");
    $rows = array();
    $i = 1;
    while ($emmm_rs = $db->whilego($query)) {
        $rows[] = array(
            "i" => $i,
            "id" => $emmm_rs['id'],
            "name" => $emmm_rs['COL_Addname'],
            "tel" => $emmm_rs['COL_Addtel'],
            "add" => $emmm_rs['COL_Add'],
            "index" => $emmm_rs['COL_Addindex'],
            "time" => $emmm_rs['time'],
        );
        $i += 1;
    }
    return $rows;
}

function emmm_usercoupon()
{
    global $db;
    $query = $db->listgo("`id`,`COL_Type`,`COL_Timewin`,`COL_Moneygo`,`COL_Md`,`COL_Couponid`", "`emmm_couponlist`", "where `COL_Username` = '" . $_SESSION['username'] . "' order by id desc");
    $money = 0;
    $userrows = array();
    while ($emmm_rs = $db->whilego($query)) {
        $money = $db->select("`COL_Money`", "emmm_coupon", "where id = " . $emmm_rs[5]);
        if ($emmm_rs[3] == 0) {
            $moneygo = '全场使用';
        } else {
            $moneygo = '满 <span>' . intval($emmm_rs[3]) . '</span> 使用';
        }
        if ($emmm_rs[2] == '' || $emmm_rs[2] == '0000-00-00 00:00:00') {
            $timewin = '请在结算时使用';
        } else {
            $timewin = date("Y-m-d", strtotime($emmm_rs[2])) . ' 前使用';
        }
        $userrows[] = array(
            'id' => $emmm_rs[0],
            'type' => $emmm_rs[1],
            'timewin' => $timewin,
            'moneygo' => $moneygo,
            'md' => $emmm_rs[4],
            'money' => intval($money[0])
        );
    }
    return $userrows;
}

$smarty->assign('shoppingcart', shoppingiconum('car'));
$smarty->assign('shoppingorder', shoppingiconum('shopping'));
$smarty->assign('msgemail', shoppingiconum('msgemail'));
$smarty->assign('user', emmm_wapuserview());

?>
