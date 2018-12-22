<?php

if (!defined('EMMMNO')) {
    exit('no!');
}

/*防注入函数*/
function dowith_sql($emmmstr)
{
    $emmmstr = addslashes($emmmstr);
    $emmmstr = str_ireplace(" and ", "**", $emmmstr);
    $emmmstr = str_ireplace(" or ", "**", $emmmstr);
    $emmmstr = str_ireplace("&&", "**", $emmmstr);
    $emmmstr = str_ireplace("||", "**", $emmmstr);
    $emmmstr = str_ireplace("<script", "**", $emmmstr);
    $emmmstr = str_ireplace("<iframe", "**", $emmmstr);
    $emmmstr = str_ireplace("<embed", "**", $emmmstr);
    $emmmstr = str_ireplace("<", "&lt;", $emmmstr);
    $emmmstr = str_ireplace(">", "&gt;", $emmmstr);
    $emmmstr = str_ireplace("&", "&amp;", $emmmstr);
    $emmmstr = str_ireplace('--', "**", $emmmstr);
    $emmmstr = str_ireplace("_", "\_", $emmmstr);
    $emmmstr = str_ireplace("%", "\%", $emmmstr);
    $emmmstr = str_ireplace("`", "**", $emmmstr);
    $emmmstr = str_ireplace("count", "**", $emmmstr);
    $emmmstr = str_ireplace("chr", "**", $emmmstr);
    $emmmstr = str_ireplace("char", "**", $emmmstr);
    $emmmstr = str_ireplace("concat", "**", $emmmstr);
    $emmmstr = str_ireplace("declare", "**", $emmmstr);
    $emmmstr = str_ireplace("execute", "**", $emmmstr);
    $emmmstr = str_ireplace("extractvalue", "**", $emmmstr);
    $emmmstr = str_ireplace("truncate", "**", $emmmstr);
    $emmmstr = str_ireplace("union", "**", $emmmstr);
    return $emmmstr;
}

function admin_sql($emmmstr)
{
    $emmmstr = str_ireplace("'", "", $emmmstr);
    $emmmstr = str_ireplace("&&", "**", $emmmstr);
    $emmmstr = str_ireplace('--', "**", $emmmstr);
    $emmmstr = str_ireplace("count", "**", $emmmstr);
    $emmmstr = str_ireplace("chr", "**", $emmmstr);
    $emmmstr = str_ireplace("char", "**", $emmmstr);
    $emmmstr = str_ireplace("concat", "**", $emmmstr);
    $emmmstr = str_ireplace("declare", "**", $emmmstr);
    $emmmstr = str_ireplace("execute", "**", $emmmstr);
    $emmmstr = str_ireplace("extractvalue", "**", $emmmstr);
    $emmmstr = str_ireplace("truncate", "**", $emmmstr);
    $emmmstr = str_ireplace("union", "**", $emmmstr);
    return $emmmstr;
}

/*
* 过虑URL中的ID ?ch-list-article-$id.html
* $str=substr($str,7);//去除前面
*/
function emmm_Cut($emmmstr)
{
    $n = strpos($emmmstr, '.');
    if ($n) $emmmstr = substr($emmmstr, 0, $n);
    return $emmmstr;
}

/*
 * @param string $str 被截取的字符串 
 * @param integer $start 起始位置 
 * @param integer $length 截取长度(每个汉字为3字节) 
 */
function utf8_strcut($str, $start, $length = null)
{
    preg_match_all('/./us', $str, $match);
    $chars = is_null($length) ? array_slice($match[0], $start) : array_slice($match[0], $start, $length);
    unset($str);
    return implode('', $chars);
}

/*
 * 随机生成一组32位字符，可用于验证
 * 调用方式randomkeys(18)
 */
function randomkeys($length)
{
    $key = "";
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    for ($i = 0; $i < $length; $i++) {
        $key .= $pattern{mt_rand(0, 35)};
    }
    return $key . date("YmdHis");
}

/*
 * 压缩html : 清除换行符,清除制表符,去掉注释标记  
 * @param $string  
 * @return  压缩后的$string 
 */
function compress_html($string)
{
    $string = str_replace("\r\n", '', $string); //清除换行符  
    $string = str_replace("\n", '', $string); //清除换行符  
    $string = str_replace("\t", '', $string); //清除制表符  
    $pattern = array(
        "/> *([^ ]*) *</", //去掉注释标记
        "/[\s]+/",
        "/<!--[^!]*-->/",
        "/\" /",
        "/ \"/",
        "'/\*[^*]*\*/'"
    );
    $replace = array(
        ">\\1<",
        " ",
        "",
        "\"",
        "\"",
        ""
    );
    return preg_replace($pattern, $replace, $string);
}

/*
 * 替换中间字符为 ***   
 */
function half_replace($str)
{
    $len = strlen($str) / 2;
    return substr_replace($str, str_repeat('*', $len), ceil(($len) / 2), $len);
}

/*
 * 插件类
 * plugs静态方法 $a = plugsclass::plugs($id); 获取参数：$a[0];
 */

class plugsclass
{

    public $db;

    public static function plugs($id)
    {
        global $db;
        $rs = $db->select("`COL_Key`", "`emmm_api`", "where `id` = " . intval($id));
        $api = explode('|', $rs[0]);
        switch ($api[1]) {
            case "1":
                return $api;
                break;
            case "2":
                return false;
                break;
        }
    }

}

function footwebcontent()
{
    global $emmm_O0O0o00o0;
    if (!isset($emmm_O0O0o00o0)) {
        return Chr(80) . Chr(111) . Chr(119) . Chr(101) . Chr(114) . Chr(101) . Chr(100) . Chr(32) . Chr(98) . Chr(121) . Chr(32) . Chr(60) . Chr(97) . Chr(32) . Chr(104) . Chr(114) . Chr(101) . Chr(102) . Chr(61) . Chr(34) . Chr(104) . Chr(116) . Chr(116) . Chr(112) . Chr(58) . Chr(47) . Chr(47) . Chr(119) . Chr(119) . Chr(119) . Chr(46) . Chr(111) . Chr(117) . Chr(114) . Chr(112) . Chr(104) . Chr(112) . Chr(46) . Chr(110) . Chr(101) . Chr(116) . Chr(34) . Chr(32) . Chr(116) . Chr(97) . Chr(114) . Chr(103) . Chr(101) . Chr(116) . Chr(61) . Chr(34) . Chr(95) . Chr(98) . Chr(108) . Chr(97) . Chr(110) . Chr(107) . Chr(34) . Chr(62) . Chr(119) . Chr(119) . Chr(119) . Chr(46) . Chr(79) . Chr(117) . Chr(114) . Chr(112) . Chr(104) . Chr(112) . Chr(46) . Chr(110) . Chr(101) . Chr(116) . Chr(60) . Chr(47) . Chr(97) . Chr(62);
    }
}

/*
 * 判断手机或电脑   
 */
function isMobile($type = '')
{
    global $emmm, $db;
    $useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $useragent_commentsblock = preg_match('|\(.*?\)|', $useragent, $matches) > 0 ? $matches[0] : '';
    function CheckSubstrs($substrs, $text)
    {
        foreach ($substrs as $substr)
            if (false !== strpos($text, $substr)) {
                return true;
            }
        return false;
    }

    $mobile_os_list = array('Google Wireless Transcoder', 'Windows CE', 'WindowsCE', 'Symbian', 'Android', 'armv6l', 'armv5', 'Mobile', 'CentOS', 'mowser', 'AvantGo', 'Opera Mobi', 'J2ME/MIDP', 'Smartphone', 'Go.Web', 'Palm', 'iPAQ');
    $mobile_token_list = array('Profile/MIDP', 'Configuration/CLDC-', '160×160', '176×220', '240×240', '240×320', '320×240', 'UP.Browser', 'UP.Link', 'SymbianOS', 'PalmOS', 'PocketPC', 'SonyEricsson', 'Nokia', 'BlackBerry', 'Vodafone', 'BenQ', 'Novarra-Vision', 'Iris', 'NetFront', 'HTC_', 'Xda_', 'SAMSUNG-SGH', 'Wapaka', 'DoCoMo', 'iPhone', 'iPod');
    $found_mobile = CheckSubstrs($mobile_os_list, $useragent_commentsblock) || CheckSubstrs($mobile_token_list, $useragent);
    if ($type == 'pc') {
        if ($found_mobile) {
            return "<script language=javascript>location.replace('" . $emmm['webpath'] . "client/wap/?" . $_SERVER["QUERY_STRING"] . "');</script>";
        } else {
            return false;
        }
    } elseif ($type == 'wap') {
        if (!$found_mobile) {
            $rs = $db->select("COL_Weburl", "emmm_wap", "where id = 1");
            if ($rs[0] == 'yes') {
                return false;
            } else {
                return "<script language=javascript>location.replace('" . $emmm['webpath'] . "?" . $_SERVER["QUERY_STRING"] . "');</script>";
            }
        } else {
            return false;
        }
    }
}

/*
 * 处理缓存文件 
 */
function emmm_file($file, $content, $class)
{
    $of = fopen(WEB_ROOT . '/' . $file, 'w');
    if ($of) {
        $con = fwrite($of, $content);
    }
    return $con;
    fclose($of);
}

/*
 * 处理json传递的数组 
 */
function object_array($array)
{
    if (is_object($array)) {
        $array = (array)$array;
    }
    if (is_array($array)) {
        foreach ($array as $key => $value) {
            $array[$key] = object_array($value);
        }
    }
    return $array;
}

/*
 * 处理敏感字 
 */
function emmm_sensitive($content = '')
{
    global $db;
    $sensitive = $db->select("`COL_Sensitive`", "`emmm_webdeploy`", "where `id` = 1");
    $var = explode("|", $sensitive[0]);
    $vartwo = array_combine($var, array_fill(0, count($var), '*'));
    return strtr($content, $vartwo);
}

/*
 * 处理电脑与移动端返回路径 
 */
function emmm_pcwapurl($type = '', $pcurl = '', $wapurl = '', $goback = 0, $font = '')
{
    global $emmm;
    if ($goback == 0) {
        if ($type == '' || $type == 'pc') {
            $url = $emmm['webpath'] . 'client/user/' . $pcurl;
        } elseif ($type == 'wap') {
            $url = $emmm['webpath'] . 'client/wap/' . $wapurl;
        }
        if ($font != '') {
            $alert = 'alert(\'' . $font . '\');';
        }
        return "<script language=javascript>" . $alert . "location.replace('" . $url . "');</script>";
    } else {
        return "<script language=javascript>alert('" . $font . "');history.go(-1);</script>";
    }
}

$homelang = $db->select("`COL_Home`", "`emmm_webdeploy`", "where `id` = 1");
$homelang = explode('|', $homelang[0]);
?>
