<?php
set_include_path(get_include_path() . ":./models");
spl_autoload_extensions(",.php,.model.php");
spl_autoload_register();

// Setup fixed strong SECRET_KEY!!
$keyfile = "../SECRET_KEY";
if (!file_exists($keyfile)) {
    $default_key = "StrongSecretKeyForDeveloping >.^";
    file_put_contents($keyfile, $default_key);
}
$SECRET_KEY = file_get_contents($keyfile);
assert(strlen($SECRET_KEY) == 32);

const PERM_ADMIN = 0;
const PERM_USER = 1;
const PERM_GUEST = 2;

function is_post()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function array_fmap($func, $ary)
{
    $ret = [];
    foreach ($ary as $k => $v) {
        array_push($ret, $func($k, $v));
    }
    return $ret;
}
