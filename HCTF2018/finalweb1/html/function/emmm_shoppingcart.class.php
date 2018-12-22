<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
*/
if (!defined('EMMMNO')) {
    exit('no!');
}

$shoppinglogin = $emmm_adminfont['shoppinglogin'];
$shoppingnum = $emmm_adminfont['shoppingnum'];
$shoppingatt = $emmm_adminfont['shoppingatt'];

if ($shopsetgg['buy'] == 1) {

    header("location: " . $emmm['webpath'] . "touristcart.php?" . $emmm_Language . "-&lang=" . $emmm_Language . "&emmm_cms=shopping&pid=" . $_POST['pid'] . "&kc=" . $_POST['emmm_kc'] . "&hh=" . $_POST['emmm_hh'] . "&sl=" . $_POST['sl'] . "&sx=" . $_POST['emmm_sx'] . "&pcwap=" . $_POST['emmm_pcwap']);
    exit;

} else {

    if (!isset($_SESSION['username'])) {
        exit("<script language=javascript> alert('" . $shoppinglogin . "');location.replace('" . $emmm['webpath'] . "client/user/?" . $emmm_Language . "-login.html');</script>");
    }
}


if (isset($_GET["emmm_cms"]) == "") {
    echo '';
} elseif ($_GET["emmm_cms"] == "shopping") {

    if ($_POST['emmm_kc'] == '' || $_POST['emmm_hh'] == '') {
        exit("<script language=javascript> alert('" . $shoppingatt . "');history.go(-1);</script>");
    }

    if (intval($_POST['sl']) == 0) {
        exit("<script language=javascript> alert('" . $shoppingnum . "');history.go(-1);</script>");
    }

    @$id = intval($_POST['pid']) ? $_POST['pid'] : null;
    if (!is_numeric($id) || !isset($id)) {
        exit("no!");
    }

    if (empty($_POST['emmm_sx'])) {
        $att = "";
    } else {
        $att = dowith_sql($_POST['emmm_sx']);
    }

    $op = $db->select("`id`", "`emmm_shoppingcart`", "where `COL_Shopproductid` = '" . intval($id) . "' && `COL_Shopusername` = '" . $_SESSION['username'] . "' && `COL_Shopatt` = '" . $att . "'");
    if ($op) {
        $opedit = $db->update("`emmm_shoppingcart`", "`COL_Shopnum` = `COL_Shopnum` + " . intval($_POST['sl']), "where `COL_Shopproductid` = '" . intval($id) . "' && `COL_Shopusername` = '" . $_SESSION['username'] . "'");
    } else {
        $query = $db->insert("`emmm_shoppingcart`", "`COL_Shopproductid` = '" . intval($id) . "',`COL_Shopnum` = '" . intval($_POST['sl']) . "',`COL_Shopusername` = '" . $_SESSION['username'] . "',`COL_Shopatt` = '" . $att . "',`COL_Shopkc` = '" . intval($_POST['emmm_kc']) . "',`COL_Shophh` = '" . dowith_sql($_POST['emmm_hh']) . "',`time` = '" . date("Y-m-d H:i:s") . "'", "");
    }

    exit("<script language=javascript>location.replace('?" . $emmm_Language . "-shoppingcart.html');</script>");
}

function emmm_productshop($id)
{
    global $db, $emmm;
    $emmm_rs = $db->select("id,COL_Title,COL_Number,COL_Goodsno,COL_Brand,COL_Market,COL_Webmarket,COL_Stock,COL_Minimg,COL_Maximg,time,COL_Class,COL_Usermoney,COL_Weight,COL_Freight ,COL_Specifications", "`emmm_product`", "where `id` = " . intval($id));
    if (substr($emmm_rs[8], 0, 7) == 'http://') {
        $minimg = $emmm_rs[8];
    } elseif ($emmm_rs[8] == '') {
        $minimg = $emmm['webpath'] . 'skin/noimage.png';
    } else {
        $minimg = $emmm['webpath'] . $emmm_rs[8];
    }
    if (substr($emmm_rs[9], 0, 7) == 'http://') {
        $maximg = $emmm_rs[9];
    } elseif ($emmm_rs[9] == '') {
        $maximg = $emmm['webpath'] . 'skin/noimage.png';
    } else {
        $maximg = $emmm['webpath'] . $emmm_rs[9];
    }
    $rows = array(
        'id' => $emmm_rs[0],
        'title' => $emmm_rs[1],
        'number' => $emmm_rs[2],
        'goodsno' => $emmm_rs[3],
        'brand' => explode("|", $emmm_rs[4]),
        'market' => $emmm_rs[5],
        'webmarket' => $emmm_rs[6],
        'stock' => $emmm_rs[7],
        'minimg' => $minimg,
        'maximg' => $maximg,
        'time' => $emmm_rs[10],
        'class' => $emmm_rs[11],
        'usermoney' => $emmm_rs[12],
        'weight' => $emmm_rs[13],
        'freight' => $emmm_rs[14],
        'specifications' => $emmm_rs[15],
    );
    return $rows;
}

function emmm_moneyextract($type = '', $class = '', $money = '')
{
    if ($type == "emmm") {
        return array($money, $money);
    } elseif ($class == null) {
        return array($money, $money);
    } else {
        $type = str_replace('、', ',', $type);
        $emmm = strstr($class, $type);
        $a = explode("|", $emmm);
        $b = explode(",", $a[0]);
        $c = array_slice($b, -3, 2);
        return array($c[0], $c[1]);
    }
}

function emmm_usermoney($usermoney, $webmarket)
{
    global $db, $emmm_productshop;
    $emmm_rs = $db->select("`COL_Userclass`", "`emmm_user`", "where `COL_Useremail` = '" . $_SESSION['username'] . "'");
    $Useremail = explode("|", $usermoney);
    foreach ($Useremail as $op) {
        $Useremailto = explode(":", $op);
        if ($emmm_rs[0] == $Useremailto[0]) {
            $opcms = $Useremailto[1];
        }
    }
    return $webmarket - $opcms;
}

$shopset = shopset();
function emmm_shoppingcart()
{
    global $db, $emmm, $emmm_productshop, $shopset;
    $query = $db->listgo("*", "`emmm_shoppingcart`", "where `COL_Shopusername` = '" . $_SESSION['username'] . "' order by id desc");
    $rows = array();
    $i = 1;
    $zj = '';
    while ($emmm_rs = $db->whilego($query)) {

        $emmm_productshop = emmm_productshop($emmm_rs['COL_Shopproductid']);
        if ($emmm_rs['COL_Shopatt'] == null) {
            $zhdh = "emmm";
        } else {
            $zhdh = $emmm_rs['COL_Shophh'] . '、' . $emmm_rs['COL_Shopatt'];
        }
        $emmm_moneyextract = emmm_moneyextract($zhdh, $emmm_productshop['specifications'], $emmm_productshop['webmarket']);
        $usermarket = emmm_usermoney($emmm_productshop['usermoney'], $emmm_moneyextract[1]);

        $zj += $usermarket * $emmm_rs['COL_Shopnum'];
        $rows[] = array(
            'i' => $i,
            'id' => $emmm_productshop['id'],
            'cartid' => $emmm_rs['id'],
            'title' => $emmm_productshop['title'],
            'number' => $emmm_rs['COL_Shopnum'],
            'attribute' => $emmm_rs['COL_Shopatt'],
            'stock' => $emmm_rs['COL_Shopkc'],
            'barcode' => $emmm_rs['COL_Shophh'],
            'time' => $emmm_rs['time'],
            'webmarket' => $emmm_moneyextract[0],
            'usermarket' => $usermarket,
            'img' => $emmm_productshop['minimg'],
            'weight' => $emmm_productshop['weight'],
            'freight' => $emmm_productshop['freight'],
            'totalt' => $usermarket * $emmm_rs['COL_Shopnum'],
            'total' => $zj,
        );
        $i += 1;
    }
    return $rows;
}

function emmm_userview()
{
    global $db;
    $emmm_rs = $db->select("`COL_Useremail`,`COL_Username`,`COL_Usertel`,`COL_Useradd`,`COL_Usermoney`,`COL_Userintegral`", "`emmm_user`", "where `COL_Useremail` = '" . $_SESSION['username'] . "'");
    $userrows = array(
        'email' => $emmm_rs[0],
        'name' => $emmm_rs[1],
        'tel' => $emmm_rs[2],
        'add' => $emmm_rs[3],
        'money' => $emmm_rs[4],
        'integral' => $emmm_rs[5],
    );
    return $userrows;
}


if (emmm_shoppingcart()) {
    $ordersarray = 1;
} else {
    $ordersarray = 2;
}
$smarty->assign('ordersarray', $ordersarray);
$smarty->assign('shoppingcart', emmm_shoppingcart());
$smarty->assign('userop', emmm_userview());

?>
