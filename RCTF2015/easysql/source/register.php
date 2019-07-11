<?php

header("Content-Type: text/html; charset=UTF-8");

require_once 'config.php';

function check($string)
{
	//$string = preg_replace("#(\s)|(/\*.*\*/)#i", "", $string);
	$postfilter = "#(\s)|(/\*.*\*/)|file|insert|<|and|floor|ord|char|ascii|mid|left|right|hex|sleep|benchmark|substr|@|`|delete|like#i";
	if(preg_match($postfilter, $string,$matches))
	{
		echo "<script>alert('invalid string!')</script>";
		die();
	}
	else
		return $string;
}

echo '<form action="register.php" method="post"><p>username: <input type="text" name="username" /></p><p>password: <input type="text" name="password" /></p>email: <input type="text" name="email" /></p><input type="submit" value="Submit" /></form>';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
	$username = check($_POST['username']);
	$password = md5($_POST['password']);
	$email = check($_POST['email']);
	if(strlen($username)>=250 || strlen($email)>=32)
		die();
	$sql = "SELECT * FROM users WHERE name = '$username'";
	$query = mysql_query($sql);
	if(mysql_num_rows($query) > 0){
		die('<br>user exists!');
	}
	$sql = "INSERT INTO users(name, pwd, email,real_flag_1s_here) VALUES ('$username', '$password', '$email','xxx')";
	$query = mysql_query($sql);
	if(!$query){
		die('db error');
	}else{
		$username=stripslashes($username);
		header('Location: login.php');
		die('success');
	}
}

?>