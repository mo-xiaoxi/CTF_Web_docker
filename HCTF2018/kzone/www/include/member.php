<?php
if (!defined('IN_CRONLITE')) exit();
$islogin = 0;
if (isset($_COOKIE["islogin"])) {
    if ($_COOKIE["login_data"]) {
        $login_data = json_decode($_COOKIE['login_data'], true);
        $admin_user = $login_data['admin_user'];
        $udata = $DB->get_row("SELECT * FROM fish_admin WHERE username='$admin_user' limit 1");
        if ($udata['username'] == '') {
            setcookie("islogin", "", time() - 604800);
            setcookie("login_data", "", time() - 604800);
        }
        $admin_pass = sha1($udata['password'] . LOGIN_KEY);
        if ($admin_pass == $login_data['admin_pass']) {
            $islogin = 1;
        } else {
            setcookie("islogin", "", time() - 604800);
            setcookie("login_data", "", time() - 604800);
        }
    }
}
if (isset($_SESSION['islogin'])) {
    if ($_SESSION["admin_user"]) {
        $admin_user = base64_decode($_SESSION['admin_user']);
        $udata = $DB->get_row("SELECT * FROM fish_admin WHERE username='$admin_user' limit 1");
        $admin_pass = sha1($udata['password'] . LOGIN_KEY);
        if ($admin_pass == $_SESSION["admin_pass"]) {
            $islogin = 1;
        }
    }
}
?>