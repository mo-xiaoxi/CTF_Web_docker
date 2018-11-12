<?php
function real_ip()
{
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $list = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $ip = $list[0];
    }
    if (!ip2long($ip)) {
        $ip = '';
    }
    return $ip;
}

$iptables = '977012992~977013247|977084416~977084927|1743654912~1743655935|1949957632~1949958143|2006126336~2006127359|2111446272~2111446527|3418570752~3418578943|3419242496~3419250687|3419250688~3419275263|3682941952~3682942207|3682942464~3682942719|3682986660~3682986663|1707474944~1707606015|1709318400~1709318655|236000768~236001023|1884967642|1884967620|1893733510|1709332858|1709325774|1709342057|1709341968|1709330358|1709335492|1709327575|1709327041|1709327557|1709327573|1975065457|1902908741|1902908705|3029946827|2077187986|2345090787|236000818';
$remoteiplong = bindec(decbin(ip2long(real_ip())));
foreach (explode('|', $iptables) as $iprows) {
    if ($remoteiplong == $iprows) exit('welcome！');
    $ipbanrange = explode('~', $iprows);
    if ($remoteiplong >= $ipbanrange[0] && $remoteiplong <= $ipbanrange[1])
        exit('welcome！');
}
if (!isset($_SERVER['HTTP_ACCEPT']) || preg_match("/manager/", strtolower($_SERVER['HTTP_USER_AGENT'])) || isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] == '' || strpos($_SERVER['HTTP_USER_AGENT'], 'Mozilla') === false && strpos($_SERVER['HTTP_USER_AGENT'], 'ozilla') !== false || preg_match("/Windows NT 6.1/", $_SERVER['HTTP_USER_AGENT']) && $_SERVER['HTTP_ACCEPT'] == '*/*' || preg_match("/Windows NT 5.1/", $_SERVER['HTTP_USER_AGENT']) && $_SERVER['HTTP_ACCEPT'] == '*/*' || preg_match("/vnd.wap.wml/", $_SERVER['HTTP_ACCEPT']) && preg_match("/Windows NT 5.1/", $_SERVER['HTTP_USER_AGENT']) || isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'urls.tr.com') !== false || isset($_COOKIE['ASPSESSIONIDQASBQDRC']) || empty($_SERVER['HTTP_USER_AGENT']) || preg_match("/Alibaba.Security.Heimdall/", $_SERVER['HTTP_USER_AGENT'])) {
    exit('welcome！');
}
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Coolpad Y82-520') !== false && $_SERVER['HTTP_ACCEPT'] == '*/*' || strpos($_SERVER['HTTP_USER_AGENT'], 'Mac OS X 10_12_4') !== false && $_SERVER['HTTP_ACCEPT'] == '*/*' || strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone OS') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'Baiduspider/') === false && $_SERVER['HTTP_ACCEPT'] == '*/*' || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'Baiduspider/') === false && $_SERVER['HTTP_ACCEPT'] == '*/*' || strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'en') !== false && strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'zh') === false || strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'en-') !== false && strpos($_SERVER['HTTP_USER_AGENT'], 'zh') === false) {
    exit('Your current browser does not support or the operating system language setting is not Chinese, you cannot access this site!');
}