<?php
include("../include/common.php");
if ($islogin == 1) {
} else exit("<script language='javascript'>window.location.href='./login.php';</script>");
$r1 = $DB->count("SELECT COUNT(id) from fish_user_fake");
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>KK Zone Fish Control Center</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
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
            <div class="panel-heading"><h3 class="panel-title">Management Index</h3></div>
            <ul class="list-group">

                <li class="list-group-item"><span class="glyphicon glyphicon-tint"></span> <b></b>Fish
                    count:<?php echo $r1 ?>

                </li>
                <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>Current
                        Time：</b><?php echo date("Y-m-d h:i:sa") ?>  </li>
                <li class="list-group-item"><span class="glyphicon glyphicon-home"></span> <a href="./list.php"
                                                                                              class="btn btn-xs btn-warning">Fish
                        Management</a>
                </li>
            </ul>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Server Information</h3>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <b>PHP Version：</b><?php echo phpversion() ?>
                    <?php if (ini_get('safe_mode')) {
                        echo 'Thread safe';
                    } else {
                        echo 'Non-thread safe';
                    } ?>
                </li>
                <li class="list-group-item">
                    <b>MySQL Version：</b><?php echo `mysql -V` ?>
                </li>
                <li class="list-group-item">
                    <b>Server Software：</b><?php echo $_SERVER['SERVER_SOFTWARE'] ?>
                </li>
            </ul>
        </div>
    </div>
</div>
