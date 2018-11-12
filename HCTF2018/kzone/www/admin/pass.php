<?php
include("../include/common.php");
if ($islogin == 1) {
} else exit("<script language='javascript'>window.location.href='./login.php';</script>");
if (isset($_POST['data'])) {
    $name = addslashes($_POST['name']);
    $qq = addslashes($_POST['qq']);
    $sql = "update fish_admin set name='$name',qq='$qq' where id='{$udata['id']}';";
    $DB->query($sql);
    exit("<script language='javascript'>alert('The data was modified successfully!');window.location.href='./modify.php';</script>");
} else if (isset($_POST['passwd'])) {
    $oldpass = addslashes($_POST['oldpass']);
    if ($udata['password'] == md5($oldpass)) {
        $newpass = addslashes($_POST['newpass']);
        $checkpass = addslashes($_POST['checkpass']);
        if ($newpass == $checkpass) {
            if ($newpass == '') {
                exit("<script language='javascript'>alert('The new password is not allowed to be empty!');history.go(-1);</script>");
            }
            $newpass = md5($newpass);
            $sql = "update fish_admin set password='$newpass' where id='{$udata['id']}';";
            $DB->query($sql);
            setcookie("islogin", "", time() - 604800);
            setcookie("login_data", "", time() - 604800);
            unset($_SESSION['islogin']);
            unset($_SESSION['admin_user']);
            unset($_SESSION['admin_pass']);
            exit("<script language='javascript'>alert('Your password has been modified successfully. Please re-login with your new password.！');window.location.href='./login.php';</script>");
        } else {
            exit("<script language='javascript'>alert('The password input is inconsistent twice, and the verification of the new password fails!');history.go(-1);</script>");
        }
    } else {
        exit("<script language='javascript'>alert('The old password is incorrect!');history.go(-1);</script>");
    }
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Change Password</title>

</head>
<body>
<table width="100%" border="0" cellspacing="1" cellpadding="2" align="center" bgcolor="0071bc">
    <tr bgcolor="#EEEEEE" align="center">
        <td height="21"><a href="index.php">Data view</a></td>
        <td bgcolor="#EEEEEE"><a href="pass.php">Change Password</a></td>
        <td height="21"><a href="login.php?logout">Logout</a></td>
    </tr>
</table>
<form class="js-validation-bootstrap" action="pass.php" method="post" novalidate="novalidate">

    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
        </br>
        <input type="text" name="oldpass" id="password" class="form-control"
               placeholder="Input your old password please" required="required"/>
    </div>
    <br/>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
        <input type="text" name="newpass" id="password" class="form-control"
               placeholder="Input your new password please" required="required"/>
    </div>
    <br/>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
        <input type="text" name="checkpass" id="password" class="form-control"
               placeholder="Confirm your new password please"
               required="required"/>
    </div>
    <br/>
    <div class="form-group">
        <div class="col-xs-14"><input name="passwd" type="submit" value="Submit" class="btn btn-primary form-control"/>
        </div>


</body>
</html>