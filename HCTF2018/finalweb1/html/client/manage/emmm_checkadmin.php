<?php

session_start();

if (isset($_SESSION['emmm_outtime'])) {

    if ($_SESSION['emmm_outtime'] < time()) {
        unset($_SESSION['emmm_outtime']);
        echo '登录超时或未登录，请重新登录！';
        header("Location: /admin.php");
    } else {
        $_SESSION['emmm_outtime'] = time() + 3600;
    }

} else {
    echo '登录超时或未登录，请重新登录！';
    header("Location: /admin.php");
}

$emmm_rs = $db->select("id,COL_Adminname,COL_Adminpass,COL_Adminpower,COL_Admin", "`emmm_admin`", "where `COL_Adminname` = '" . $_SESSION['emmm_adminname'] . "'");
$id = $emmm_rs[0];
$COL_Adminname = $emmm_rs[1];
$COL_Adminpass = $emmm_rs[2];
$COL_Adminpower = $emmm_rs[3];
$COL_Admin = $emmm_rs[4];


function listattribute($id = 1, $type = '')
{
    global $db;
    if ($type != '') {
        $a = '';
        $b = '';
        $c = '';
        $d = '';
        $rs = $db->select("COL_Attribute", "emmm_" . $type, "where id = " . intval($id));
        if (strstr($rs[0], "0")) {
            $a = '<font style="background:#EE94F9; color:#FFFFFF; padding:2px; text-align:center;">头条</font>';
        }
        if (strstr($rs[0], "1")) {
            $b = '<font style="background:#EE94F9; color:#FFFFFF; padding:2px; text-align:center;">热门</font>';
        }
        if (strstr($rs[0], "2")) {
            $c = '<font style="background:#EE94F9; color:#FFFFFF; padding:2px; text-align:center;">滚动</font>';
        }
        if (strstr($rs[0], "3")) {
            $d = '<font style="background:#EE94F9; color:#FFFFFF; padding:2px; text-align:center;">推荐</font>';
        }
        if ($rs[0] == '0') {
            $a = '<font style="background:#EE94F9; color:#FFFFFF; padding:2px; text-align:center;">头条</font>';
        } else {
            $a = $a;
        }
        return $a . $b . $c . $d;
    } else {
        return false;
    }
}

?>
