<?php
	$base_dir = '/';
	$static_dir = '/static/';
	$img_dir = '/img/';

	$db_host = "localhost";
	$db_user = "web";
	$db_pass = "N8zu3Qt2w5Vh";
	$db_database = "web";

	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);

	if ($mysqli->connect_errno)
	{
		printf("Error while connecting to DB. Report about it to orgs!");
		exit(-1);
	}
?>
