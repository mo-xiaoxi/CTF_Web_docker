<?php
@include_once("/home/team/workdir/redbudupload/logger.php");
if (PHP_SAPI === 'cli-server') {
	$_SERVER['PHP_SELF'] = '/index.php';

	if ($_SERVER['REQUEST_URI'] != '/' && file_exists('./app/webroot' . $_SERVER['REQUEST_URI'])) {
		return false;
	}
}

require 'app/webroot/index.php';

?>
