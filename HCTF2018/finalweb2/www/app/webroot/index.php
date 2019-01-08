<?php

require dirname(__DIR__) . '/config/bootstrap.php';

echo lithium\action\Dispatcher::run(new lithium\action\Request([
	// 'drain' => false
]));

?>