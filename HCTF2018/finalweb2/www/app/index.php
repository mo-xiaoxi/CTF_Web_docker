<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2016, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

/**
 * This file may act as a forwarder for the actual front-controller within `app/webroot/index.php`.
 * This is to make setups work where you have placed the whole project within the webserver's
 * docroot. This should be avoided in production environments. Instead point the webserver's
 * docroot to `app/webroot` and let just that be served. You may then safely remove this file.
 */

/**
 * Include and forward to the actual front-controller.
 */
require 'webroot/index.php';

?>