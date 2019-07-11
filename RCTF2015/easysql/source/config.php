<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db('web_sqli');
mysql_query('set NAMES utf8');

if (!get_magic_quotes_gpc()){
	foreach($_POST as $key => $value){
		$_POST[$key] = addslashes($value);
	}
	foreach($_GET as $key => $value){
		$_GET[$key] = addslashes($value);
	}
}
?>