<?php
//链接数据库
$host = 'localhost';
$username = 'root';
$password = 'Bctf2o18123$%^';
$database = 'bctf2018';
$dbc = mysqli_connect($host, $username, $password, $database);
if (!$dbc)
{
    die('Could not connect: ' . $dbc->error. ':' .$dbc->errno);
}
//根目录
$basedir = ''; 

?>
