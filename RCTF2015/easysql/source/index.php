<?php

session_start();

header("Content-Type: text/html; charset=UTF-8");

require_once 'config.php';

if(isset($_SESSION['username']))
{
	echo "Hi,<a href='user.php'>".$_SESSION['username']."</a>";
	echo "<ul>";
	echo "<li><a href='index.php?title=lcsg'>良辰诗歌</a></li>";
	echo "<li><a href='index.php?title=wyzb'>网友装逼</a></li>";
	echo "<li><a href='index.php?title=zrtbf'>赵日天不服</a></li>";
	echo "</ul>";

	if(isset($_GET['title']))
	{
		$title=$_GET['title'];
		$sql="select * from article where title='$title'";
		$query=mysql_query($sql);
		if($query)
		{
			$row=mysql_fetch_array($query);
			echo $row['content'];
		}
	}
}
else
{
	echo "Hi,Anonymous<br>";
	echo "<a href='./login.php'>LOGIN</a><br>";
	echo "<a href='./register.php'>REGISTER</a><br>";
}


?>