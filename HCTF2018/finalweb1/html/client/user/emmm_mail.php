<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>

<body>
<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
include '../../config/emmm_code.php';
include '../../config/emmm_config.php';
include '../../config/emmm_version.php';
include '../../config/emmm_Language.php';
include '../../function/emmm_function.class.php';

$id = intval($_GET['id']);

session_start();
if (!isset($_SESSION['username'])) {
    exit("no!");
}

$emmm_rs = $db->select("COL_Usersend,COL_Usercollect,COL_Usercontent,time", "`emmm_usermessage`", "where id = " . $id);
if ($emmm_rs[0] == $_SESSION['username'] || $emmm_rs[1] == $_SESSION['username']) {
    ?>

    <table width="90%" border="0" cellpadding="10" style="font-size:12px;">
        <tr>
            <td width="150">
                <div align="right">发件人：</div>
            </td>
            <td>&nbsp;<?php if ($emmm_rs[0] == $_SESSION['username']) {
                    echo '我';
                } else {
                    echo $emmm_rs[0];
                } ?></td>
        </tr>
        <tr>
            <td>
                <div align="right">收件人：</div>
            </td>
            <td>&nbsp;<?php echo $emmm_rs[1]; ?></td>
        </tr>
        <tr>
            <td valign="top">
                <div align="right">收件内容：</div>
            </td>
            <td>&nbsp;<?php echo $emmm_rs[2]; ?></td>
        </tr>
        <tr>
            <td>
                <div align="right">时间：</div>
            </td>
            <td>&nbsp;<?php echo $emmm_rs[3]; ?></td>
        </tr>
    </table>

    <?php

} else {

    echo 'no!';

}
?>
</body>
</html>
