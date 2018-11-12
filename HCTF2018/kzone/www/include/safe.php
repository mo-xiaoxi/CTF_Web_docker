<?php
function waf($string)
{
    $blacklist = '/union|ascii|mid|left|greatest|least|substr|sleep|or|benchmark|like|regexp|if|=|-|<|>|\#|\s/i';
    return preg_replace_callback($blacklist, function ($match) {
        return '@' . $match[0] . '@';
    }, $string);
}

function safe($string)
{
    if (is_array($string)) {
        foreach ($string as $key => $val) {
            $string[$key] = safe($val);
        }
    } else {
        $string = waf($string);
    }
    return $string;
}

foreach ($_GET as $key => $value) {
    if (is_string($value) && !is_numeric($value)) {
        $value = safe($value);
    }
    $_GET[$key] = $value;
}
foreach ($_POST as $key => $value) {
    if (is_string($value) && !is_numeric($value)) {
        $value = safe($value);
    }
    $_POST[$key] = $value;
}
foreach ($_COOKIE as $key => $value) {
    if (is_string($value) && !is_numeric($value)) {
        $value = safe($value);
    }
    $_COOKIE[$key] = $value;
}
unset($cplen, $key, $value);
?>