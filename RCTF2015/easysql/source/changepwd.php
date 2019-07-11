<?php

session_start();

header("Content-Type: text/html; charset=UTF-8");


require_once 'config.php';
echo '<form action="" method="post"><p>oldpass: <input type="text" name="oldpass" /></p><p>newpass: <input type="text" name="newpass" /></p><input type="submit" value="Submit" /></form>';

if(isset($_POST['oldpass']) && isset($_POST['newpass'])){
	$oldpass = md5($_POST['oldpass']);
	$newpass = md5($_POST['newpass']);
	$username = $_SESSION['username'];
	$sql = "update users set pwd='$newpass' where name=\"$username\" and pwd='$oldpass'";
	// var_dump($sql);
	$query = mysql_query($sql);
	if($query){
		exit('');
	}else{
		die(mysql_error());
	}
}
?>