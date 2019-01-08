<?php
use lithium\net\http\Router;
use lithium\core\Environment;

Router::connect('/', 'Pages::index');
Router::connect('/check', 'Check::index');
Router::connect('/admin', 'Admin::index');

if (!Environment::is('production')) {
	Router::connect('/test/{:args}', ['controller' => 'lithium\test\Controller']);
	Router::connect('/test', ['controller' => 'lithium\test\Controller']);
}

Router::connect('/{:controller}/{:action}/{:args}');

?>