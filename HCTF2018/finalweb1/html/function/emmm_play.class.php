<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
 *-------------------------------
 * 视频播放器(2014-10-15)
 *-------------------------------
*/
include '../config/emmm_code.php';
include '../config/emmm_config.php';
include '../config/emmm_Language.php';
include './emmm_function.class.php';

session_start();
date_default_timezone_set('Asia/Shanghai');

$ValidateCode = $_SESSION["code"]; //验证码 没搞明白为毛要写在这里才可以兼容其它虚拟主机
$bookcontentnumber = array(
    20, 30, 100
); //留言板字数控制

//处理留言
if (isset($_GET["emmm_cms"])) {

    $book = $emmm_adminfont['bookadd'];
    $code = $emmm_adminfont['code'];
    $outlogin = $emmm_adminfont['outlogin'];
    $booknumber = $emmm_adminfont['booknumber'];

    $emmm_rs = $db->select("`COL_Bookuser`", "`emmm_webdeploy`", "where `id` = 1");
    if ($emmm_rs[0] == 1) {
        if (empty($_SESSION['username'])) {
            echo "<script language=javascript> alert('" . $outlogin . "');history.go(-1);</script>";
            exit;
        }
    }

    $booksection = $db->select("id", "emmm_booksection", "where id = " . intval($_POST["class"]));
    if (!$booksection) {
        echo "<script language=javascript> alert('" . $emmm_adminfont['nocolumn'] . "');history.go(-1);</script>";
        exit;
    }

    if ($_POST["bookname"] == '' || $_POST["booktel"] == '' || $_POST["bookcontent"] == '' || $_POST["bookcode"] == '') {

        echo "<script language=javascript> alert('" . $book . "');history.go(-1);</script>";
        exit;

    } else {

        $bookfg = explode('|', $booknumber);
        if (mb_strwidth($_POST["bookname"]) > $bookcontentnumber[0]) {
            echo "<script language=javascript> alert('" . $bookfg[0] . $bookfg[3] . $bookcontentnumber[0] . $bookfg[4] . "');history.go(-1);</script>";
            exit;
        }
        if (mb_strwidth($_POST["booktel"]) > $bookcontentnumber[1]) {
            echo "<script language=javascript> alert('" . $bookfg[1] . $bookfg[3] . $bookcontentnumber[1] . $bookfg[4] . "');history.go(-1);</script>";
            exit;
        }
        if (mb_strwidth($_POST["bookcontent"]) > $bookcontentnumber[2]) {
            echo "<script language=javascript> alert('" . $bookfg[2] . $bookfg[3] . $bookcontentnumber[2] . $bookfg[4] . "');history.go(-1);</script>";
            exit;
        }

    }

    if ($_POST["bookcode"] != $ValidateCode) {
        echo "<script language=javascript> alert('" . $code . "');history.go(-1);</script>";
        exit;
    }

    $query = $db->insert("`emmm_book`", "`COL_Bookcontent` = '" . dowith_sql($_POST["bookcontent"]) . "',`COL_Bookname` = '" . dowith_sql($_POST["bookname"]) . "',`COL_Booktel` = '" . dowith_sql($_POST["booktel"]) . "',`COL_Bookip` = '" . dowith_sql($_POST["ip"]) . "',`COL_Bookclass` = '" . intval($_POST["class"]) . "',`COL_Booklang` = '" . dowith_sql($_POST["lang"]) . "',`time` = '" . date("Y-m-d H:i:s") . "'", "");

    if (isset($_POST["wapbook"])) {
        echo "<script language=javascript>location.replace('" . $emmm['webpath'] . "client/wap/?" . $_POST["lang"] . "-clubview-" . $_POST["class"] . ".html');</script>";
    } else {
        echo "<script language=javascript>location.replace('" . $emmm['webpath'] . "?" . $_POST["lang"] . "-clubview-" . $_POST["class"] . ".html');</script>";
    }

}

//处理下载
if (isset($_GET["emmm_down"])) {

    $power = $emmm_adminfont['power'];
    $emmm_rs = $db->select("`COL_Downrights`,`COL_Downdurl`", "`emmm_down`", "where id = " . intval($_GET["emmm_down"]) . " && COL_Random = '" . dowith_sql($_GET["code"]) . "'");

    $COL_Downrights = $emmm_rs[0];
    $COL_Downdurl = $emmm_rs[1];
    if (substr($COL_Downdurl, 0, 7) == 'http://' || substr($COL_Downdurl, 0, 8) == 'https://') {
        $downflie = $COL_Downdurl;
    } else {
        $downflie = $emmm['webpath'] . $COL_Downdurl;
    }

    if (!$emmm_rs) {

        echo "<script language=javascript> alert('" . $power . "');javascript:window.close()</script>";

    } else {

        if ($COL_Downrights == '0') {

            header("location: " . $downflie);

        } else {
            //会员权限
            @session_start();
            $emmm_userrs = $db->select("`COL_Userclass`", "`emmm_user`", "where `COL_Useremail` = '" . $_SESSION['username'] . "'");

            if (strstr($COL_Downrights, $emmm_userrs[0])) {
                header("location: " . $downflie);
            } else {
                exit("<script language=javascript> alert('" . $power . "');javascript:window.close()</script>");
            }
        }

    }
    exit;
}

//购物车删除
if (isset($_GET["emmm_shopping"])) {

    if (isset($_GET["type"])) {
        $urltype = $emmm['webpath'] . "client/wap/?" . $_GET["lang"] . "-shoppingcart.html"; //手机
    } else {
        $urltype = $emmm['webpath'] . "?" . $_GET["lang"] . "-shoppingcart.html"; //电脑
    }

    $power = $emmm_adminfont['power'];
    $result = $db->select("`id`", "`emmm_shoppingcart`", "where id = " . intval($_GET["emmm_shopping"]) . " && COL_Shopusername = '" . $_SESSION['username'] . "'");

    if ($result == false) {

        exit("<script language=javascript> alert('" . $power . "');javascript:window.close()</script>");

    } else {

        $result = $db->del("`emmm_shoppingcart`", "where id = " . intval($_GET["emmm_shopping"]) . " && COL_Shopusername = '" . $_SESSION['username'] . "'");
        echo "<script language=javascript>location.replace('" . $urltype . "');</script>";
        exit;
    }
}

//合并订单
if (isset($_GET["emmm_shoporders"])) {
    if (!empty($_POST["id"])) {
        $op_b = implode('_', $_POST["id"]);
    } else {
        if (!empty($_POST["type"])) {
            exit("<script language=javascript>location.replace('" . $emmm['webpath'] . "client/wap/?" . $_POST["lang"] . "-usershopping-op.html');</script>");
        } else {
            exit("<script language=javascript>location.replace('" . $emmm['webpath'] . "client/user/?" . $_POST["lang"] . "-usershopping-op.html');</script>");
        }
    }
    if (!empty($_POST["type"])) {
        exit("<script language=javascript>location.replace('" . $emmm['webpath'] . "client/wap/?" . $_POST["lang"] . "-shoppingorders.html-&id=" . $op_b . "');</script>");
    } else {
        exit("<script language=javascript>location.replace('" . $emmm['webpath'] . "?" . $_POST["lang"] . "-shoppingorders.html-&id=" . $op_b . "');</script>");
    }
}
?>
