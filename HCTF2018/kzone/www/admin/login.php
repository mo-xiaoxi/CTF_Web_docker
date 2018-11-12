<?php
include ("../include/common.php");
if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['login'])) {
    $user = addslashes($_POST['user']);
    $pass = addslashes($_POST['pass']);
    $safepassword = $_POST['safepassword'];
    $row = $DB->get_row("SELECT * FROM fish_admin WHERE username='$user' limit 1");
    if ($row['username'] == '') {
        exit("<script language='javascript'>alert('The administrator account or password is incorrect!');history.go(-1);</script>");
    } elseif (md5($pass) != $row['password']) {
        exit("<script language='javascript'>alert('The administrator account or password is incorrect!');history.go(-1);</script>");
    } elseif ($row['username'] == $user && $row['password'] == md5($pass)) {
        if (isset($_POST['ispersis'])) {
            $login_data['admin_user']=$user;
            $login_data['admin_pass']=sha1(md5($pass) . LOGIN_KEY);
            setcookie("islogin", "1",time() + 604800 );
            setcookie("login_data",json_encode($login_data),time() + 604800,null,null,true);
            $realip = real_ip();
            $address = getCity($realip);
            $ua = $_SERVER['HTTP_USER_AGENT'];
            $device = get_device($ua);
            $time = date("Y-m-d H:i:s");
            $sql = "INSERT INTO `fish_ip` (`admin`, `ip`, `addres`, `platform`, `date`) VALUES ('{$row['id']}','{$realip}','{$address}','{$device}','{$time}');";
            $DB->query($sql);
            unset($login_data);
            exit("<script language='javascript'>alert('login successful!');window.location.href='./';</script>");
        } else {
            $_SESSION['islogin'] = 1;
            $_SESSION['admin_user'] = base64_encode($user);
            $_SESSION['admin_pass'] = sha1(md5($pass) . LOGIN_KEY);
            $realip = real_ip();
            $address = getCity($realip);
            $ua = $_SERVER['HTTP_USER_AGENT'];
            $device = get_device($ua);
            $time = date("Y-m-d H:i:s");
            $sql = "INSERT INTO `fish_ip` (`admin`, `ip`, `addres`, `platform`, `date`) VALUES ('{$row['id']}','{$realip}','{$address}','{$device}','{$time}');";
            $DB->query($sql);
            exit("<script language='javascript'>alert('Login Successful!');window.location.href='./';</script>");
        }
    }
} elseif (isset($_GET['logout'])) {
    setcookie("islogin", "");
    setcookie("login_data", "");
    unset($_SESSION['islogin']);
    unset($_SESSION['admin_user']);
    unset($_SESSION['admin_pass']);
    exit("<script language='javascript'>alert('You have successfully logged out of this login!');window.location.href='./login.php';</script>");
} elseif ($islogin == 1) {
    exit("<script language='javascript'>alert('You are already logged in!');window.location.href='./';</script>");
} ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Manager Login</title>
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">KK Zone Fish Control Center</a>
        </div><!-- /.navbar-header -->
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="./"><span class="glyphicon glyphicon-user"></span> Index</a>
                </li>
                <li class="active">
                    <a href="./list.php"><span class="glyphicon glyphicon-calendar"></span> Fish Management</a>
                </li>
                <li><a href="./login.php?logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Manager Login</h3></div>
        <div class="panel-body">
          <form class="form-horizontal" action="login.php" method="post">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="text" name="user" value="" class="form-control" placeholder="Manager's Account" required="required"/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" name="pass" class="form-control" placeholder="Manager's Password" required="required"/>
            </div><br/>
            <div class="form-group">
              <div class="col-xs-12"><input id="submit" type="submit" name="login"  value="Login" class="btn btn-primary form-control"/></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>