<?php
session_start();
include_once('config.php');
if (!empty($_POST['code'])) {
    $code = $_POST['code'];
    if ($_SESSION['captcha'] === substr(md5($code), 0, 4)  ) {
        if (!empty($_POST['username'])) {
            $user = $dbc->real_escape_string($_POST['username']);
            $pass = $dbc->real_escape_string($_POST['password']);
            $query = "SELECT * FROM admin WHERE user_name='{$user}' and user_pass='{$pass}' ";
            $data = mysqli_query($dbc, $query);
            if (mysqli_num_rows($data) == 1) {
                $row = mysqli_fetch_array($data);
                $_SESSION['username'] = $row['user_name'];
                header('Location: ./admin/index.php');
            } else {
                echo '<hr/><center><br/>Username：', $user, '<br/>password：', $pass, '<br/><br/>wrong!</center>';
            }
        }
    }else{
    echo "<script>alert('captcha is not correct:(');";
    echo "location.href='login.php';</script>";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Login</title>
    <link href="./Wopop_files/style_log.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./Wopop_files/style.css">
    <link rel="stylesheet" type="text/css" href="./Wopop_files/userpanel.css">
    <link rel="stylesheet" type="text/css" href="./Wopop_files/jquery.ui.all.css">

</head>
<?php
$seed = rand(100000, 999999);
$captcha = substr(md5($seed), 0, 4);
$_SESSION['captcha'] = $captcha;
?>

<body class="login" mycollectionplug="bind">
<div class="login_m">
    <div class="login_logo"><img src="./Wopop_files/logo.png" width="196" height="46"></div>
    <div class="login_boder">
        <form action="#" method="post">
            <div class="login_padding" id="login_model">

                <h2>USERNAME</h2>
                <label>
                    <input type="text" name="username" id="username" class="txt_input txt_input2"
                           onfocus="if (value ==&#39;Your name&#39;){value =&#39;&#39;}"
                           onblur="if (value ==&#39;&#39;){value=&#39;Your name&#39;}" value="Your name">
                </label>
                <h2>PASSWORD</h2>
                <label>
                    <input type="password" name="password" id="userpwd" class="txt_input"
                           onfocus="if (value ==&#39;******&#39;){value =&#39;&#39;}"
                           onblur="if (value ==&#39;&#39;){value=&#39;******&#39;}" value="******">
                </label>

                <h2>substr(md5($code),0,4) =='<?php echo $_SESSION['captcha'] ?>'</h2>
                <label>
                    <input type="code" name="code" id="code" class="txt_input"
                           onfocus="if (value ==&#39;******&#39;){value =&#39;&#39;}"
                           onblur="if (value ==&#39;&#39;){value=&#39;******&#39;}" value="******">
                </label>
                <br>
                <div class="rem_sub">
                    <div class="rem_sub_l">
                        <a href="./register.php">Register</a>
                    </div>
                    <label>
                        <input type="submit" class="sub_button" name="button" id="button" value="SIGN-IN"
                               style="opacity: 0.7;">
                    </label>
                </div>
            </div>
        </form>
        <div class="copyrights">Collect from</div>

        <div id="forget_model" class="login_padding" style="display:none">
            <br>

            <h1>Forgot password</h1>
            <br>
            <div class="forget_model_h2">(Please enter your registered email below and the system will automatically
                reset users’ password and send it to user’s registered email address.)
            </div>
            <label>
                <input type="text" id="usrmail" class="txt_input txt_input2">
            </label>


            <div class="rem_sub">
                <div class="rem_sub_l">
                </div>
                <label>
                    <input type="submit" class="sub_buttons" name="button" id="Retrievenow" value="Retrieve now"
                           style="opacity: 0.7;">
                    　　　
                    <input type="submit" class="sub_button" name="button" id="denglou" value="Return"
                           style="opacity: 0.7;">　　

                </label>
            </div>
        </div>


        <!--login_padding  Sign up end-->
    </div><!--login_boder end-->
</div><!--login_m end-->
<br> <br>
<p align="center"> More Templates - Collect from</p>


</body>
</html>