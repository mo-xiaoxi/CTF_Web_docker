<?php

include_once 'config.php';

extract($_REQUEST);

$action = $action ?? "bank";
$op = $op ?? "buy";

function not_found()
{
    header("HTTP/1.0 404 Not Found");
    die('<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Not Found</h1></center>
<hr><center>nginx/1.14.0 (Ubuntu)</center>
</body>
</html>
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->
<!-- a padding to disable MSIE and Chrome friendly error page -->');
}

if (class_exists($action)) {
    try {
        (new $action)->$op();
    } catch (Throwable $e) {
        throw $e;
        not_found();
    }
} else {
    not_found();
}
