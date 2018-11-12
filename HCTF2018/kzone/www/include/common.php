<?php
    
error_reporting(0);
header('Content-Type: text/html; charset=UTF-8');
define('IN_CRONLITE', true);
define('ROOT', dirname(__FILE__).'/');
define('LOGIN_KEY', 'abchdbb768526');
date_default_timezone_set("PRC");
$date = date("Y-m-d H:i:s");
session_start();

include ROOT.'../config.php';

if(!isset($port))$port='3306';
include_once(ROOT."db.class.php");
$DB=new DB($host,$user,$pwd,$dbname,$port);

$password_hash='!@#%!s!';
require_once "safe.php";
require_once ROOT."function.php";
require_once ROOT."member.php";
require_once ROOT."os.php";
require_once ROOT."kill.intercept.php";
?>