<?php
if (isset($_SESSION['emmm_outtime'])) {

    if ($_SESSION['emmm_outtime'] < time()) {
        unset($_SESSION['emmm_outtime']);
        echo '登录超时或未登录，请重新登录！';
        exit(0);
    } else {
        $_SESSION['emmm_outtime'] = time() + 3600;
    }

} else {
    echo '登录超时或未登录，请重新登录！';
    exit(0);
}

include '../../../config/emmm_config.php';
include '../../../config/emmm_version.php';
include '../../../config/emmm_Language.php';
include '../../../function/emmm_function.class.php';

if ($plugmysql != "") {
    $field = '';
    foreach ($plugfield as $opcms) {
        $field .= str_replace("|", " ", $opcms) . ",";
    }
    $field = substr($field, 0, -1);
    $sqladd = $db->create("emmm_p_" . $plugmysql . "(id int unsigned not null auto_increment primary key, " . $field . ")default charset=utf8", 1);
    if ($sqladd) {
        echo "恭喜你，插件安装成功了!";
    } else {
        echo "插件数据表创建出错，错误原因：" . $db->error();
        exit;
    }
} else {
    echo "恭喜你，插件安装成功了!";
}

$query = $db->insert("`emmm_plus`", "`COL_Name` = '" . $plugname . "',`COL_Version` = '" . $plugversion . "',`COL_Versiondate` = '" . $plugversiondate . "',`COL_Author` = '" . $plugauthor . "',`COL_Fraction` = '0',`COL_About` = '" . $plugabout . "',`COL_Pluspath` = '" . $plugid . '/' . $plugadminurl . "',`COL_Time` = '" . date("Y-m-d H:i:s") . "',`COL_Off` = 1,`COL_Plugid` = '" . $plugid . "',`COL_Plugclass` = '" . $plugclass . "',`COL_Plugmysql` = '" . $plugmysql . "'", "");

if ($plugclass != "") {
    $file_q = "op_" . $plugid . ".php";
    $file_h = WEB_ROOT . "/function/data/op_" . $plugid . ".php";
    $file_c = WEB_ROOT . "/function/data/" . $plugclass . "." . $plugid . ".php";
    copy($file_q, $file_h);
    rename($file_h, $file_c);
}

echo '<meta http-equiv="Refresh" content="1;URL=../../../' . $emmm['adminpath'] . '/emmm_plug.php?id=emmm" />';
exit(0);
?>
