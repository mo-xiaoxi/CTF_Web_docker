<?php
session_start();

header("Content-Type: text/html; charset=UTF-8");

require_once 'config.php';
echo "Your name:$_SESSION[username]<br>";
echo "Your pass:********";
echo "<br><br><a href='changepwd.php'>change password</a>";

?>