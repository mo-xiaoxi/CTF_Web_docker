<?php


if (version_compare(PHP_VERSION, '5.2.0', '<')) die('错误！您的PHP版本不能低于 5.2.0 !');

include '../../config/emmm_code.php';
include '../../config/emmm_config.php';
include '../../config/emmm_version.php';
include '../../config/emmm_Language.php';
include '../../function/emmm_function.class.php';
include '../../function/emmm/Smarty.class.php';

//模板全局定义
session_start();
date_default_timezone_set('Asia/Shanghai'); //设置时区
$emmm_weburl = explode('-', $_SERVER["QUERY_STRING"]);
if (empty($emmm_weburl[0])) {
    $emmm_Language = $homelang[1];
} else {
    $emmm_Language = dowith_sql($emmm_weburl[0]);
}
if (empty($emmm_weburl[1])) {
    $temptype = 'cn';
} else {
    $temptype = dowith_sql($emmm_weburl[1]);
}
if (empty($emmm_weburl[2])) {
    $listid = 0;
} else {
    $listid = emmm_Cut(intval($emmm_weburl[2]));
}
if (empty($emmm_weburl[3])) {
    $viewid = 0;
} else {
    $viewid = emmm_Cut(intval($emmm_weburl[3]));
}

$emmm_templates = "../../templates/user";
$emmm_templates_c = "../../function/_compile/";
$emmm_cache = "../../function/_cache/";
$smarty = new Smarty;
$smarty->caching = false;
$smarty->setTemplateDir($emmm_templates);
$smarty->setCompileDir($emmm_templates_c);
$smarty->setCacheDir($emmm_cache);
$smarty->addPluginsDir(array('../../function/class', '../../function/data',));
$smarty->assign('emmm', '<h1>hello,emmm!</h1>');
$smarty->assign('emmm_access', $emmm_access);
$smarty->assign('version', $emmm_version);
$smarty->assign('webpath', $emmm['webpath']);
$smarty->assign('adminpath', $emmm['adminpath']);
$smarty->assign('tempurl', 'user');
$smarty->assign('templatepath', $emmm['webpath'] . str_replace('../../', '', $emmm_templates) . "/");
$smarty->assign('listid', $listid);


//通用类
function emmm_web()
{
    global $emmm, $db, $emmm_Language, $temptype, $listid, $viewid, $Parameterse;
    $emmm_rs = $db->select("*", "`emmm_web`", "where `id` = 1");
    $rows = array(
        'website' => $emmm_rs["COL_Website"],
        'weburl' => $emmm_rs["COL_Weburl"],
        'weblogo' => $emmm['webpath'] . $emmm_rs["COL_Weblogo"],
        'webname' => $emmm_rs["COL_Webname"],
        'webadd' => $emmm_rs["COL_Webadd"],
        'webtel' => $emmm_rs["COL_Webtel"],
        'webmobi' => $emmm_rs["COL_Webmobi"],
        'webfax' => $emmm_rs["COL_Webfax"],
        'webemail' => $emmm_rs["COL_Webemail"],
        'webzip' => $emmm_rs["COL_Webzip"],
        'webqq' => $emmm_rs["COL_Webqq"],
        'weblinkman' => $emmm_rs["COL_Weblinkman"],
        'webicp' => $emmm_rs["COL_Webicp"],
        'webtime' => $emmm_rs["COL_Webtime"],
        'webkeywords' => $Parameterse["keywords"],
        'webdescriptions' => $Parameterse["descriptions"],
        'webstatistics' => $emmm_rs["COL_Webstatistics"],
        'weixin' => $emmm_rs["COL_Weixin"],
        'erweima' => $emmm_rs["COL_Weixinerweima"],
        'alipayname' => $emmm_rs["COL_Alipayname"],
    );
    return $rows;
}


function indexcolumn()
{
    global $db, $emmm_Language, $emmm, $Parameterse;
    $query = $db->listgo("id,COL_Uid,COL_Lang,COL_Columntitle,COL_Columntitleto,COL_Model,COL_Url,COL_Briefing,COL_Img", "`emmm_column`", "where COL_Hide = 0 and COL_Lang = '" . $emmm_Language . "' order by COL_Sorting asc,id desc");
    $rows = array();
    $i = 1;
    while ($emmm_rs = $db->whilego($query)) {
        if ($emmm_rs[5] == 'weburl') {
            $weburl = $emmm_rs[6];
        } else {
            if ($Parameterse['rewrite'] == 1) {
                $weburl = $emmm['webpath'] . $emmm_rs[2] . '/' . $emmm_rs[5] . '/' . $emmm_rs[0] . '/';
            } else {
                $weburl = $emmm['webpath'] . '?' . $emmm_rs[2] . '-' . $emmm_rs[5] . '-' . $emmm_rs[0] . '.html';
            }
        }
        if (substr($emmm_rs[8], 0, 7) == 'http://' || substr($emmm_rs[8], 0, 8) == 'https://') {
            $minimg = $emmm_rs[8];
        } elseif ($emmm_rs[8] == '') {
            $minimg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $minimg = $emmm['webpath'] . $emmm_rs[8];
        }
        $rows[] = array(
            "i" => $i,
            "id" => $emmm_rs[0],
            "uid" => $emmm_rs[1],
            "title" => $emmm_rs[3],
            "titleto" => $emmm_rs[4],
            "url" => $weburl,
            "briefing" => $emmm_rs[7],
            "img" => $minimg,
        );
        $i += 1;
    }
    include '../../function/emmm_Tree.class.php';
    $op = new Tree($rows);
    $arr = $op->leaf();
    return $arr;
}

//获取IP等常用参数
function getIP()
{
    global $emmm_Language, $temptype, $listid, $viewid;
    if (@$_SERVER["HTTP_X_FORWARDED_FOR"]) {
        $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } elseif (@$_SERVER["HTTP_CLIENT_IP"]) {
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    } elseif (@$_SERVER["REMOTE_ADDR"]) {
        $ip = $_SERVER["REMOTE_ADDR"];
    } elseif (@getenv("HTTP_X_FORWARDED_FOR")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    } elseif (@getenv("HTTP_CLIENT_IP")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif (@getenv("REMOTE_ADDR")) {
        $ip = getenv("REMOTE_ADDR");
    } else {
        $ip = "Unknown";
    }
    $rows = array(
        'ip' => $ip,
        'lang' => $emmm_Language,
        'type' => $temptype,
        'listid' => $listid,
        'viewid' => $viewid,
    );
    return $rows;
}

function columncycle($id = 1)
{
    global $conn, $db, $Parameterse;
    $emmm_rs = $db->select("`id`,`COL_Lang`,`COL_Columntitle`,`COL_Model`", "`emmm_column`", "where id = " . intval($id));
    if ($Parameterse['rewrite'] == 1) {
        $url = $emmm['webpath'] . $emmm_rs[1] . '/' . $emmm_rs[3] . '/' . $emmm_rs[0] . '/';
    } else {
        $url = $emmm['webpath'] . '?' . $emmm_rs[1] . '-' . $emmm_rs[3] . '-' . $emmm_rs[0] . '.html';
    }
    $rows = array(
        'title' => $emmm_rs[2],
        'url' => $url,
    );
    return $rows;
}

function emmm_adoverall($type, $temptype)
{
    global $emmm, $db, $emmm_cache;
    if ($temptype == 'login.html') {
        $adclass = '会员登录左侧';
    } else {
        $adclass = '首页';
    }

    $fsomd5 = md5($type . $adclass);

    if (!is_file(WEB_ROOT . '/function/_cache/' . 'ad_' . $fsomd5 . '.txt')) {
        switch ($type) {
            case "login":
                $emmm_rs = $db->select("COL_Adcontent,COL_Adclass", "`emmm_ad`", "where `id` = 6");
                if (strpos(', ' . $emmm_rs[1], $adclass) > 0) {
                    $content = $emmm_rs[0];
                } else {
                    $content = '';
                }
                emmm_file($emmm['webpath'] . 'function/_cache/ad_' . $fsomd5 . '.txt', $content, 1);
                break;
        }

    } else {
        $content = file_get_contents(WEB_ROOT . '/function/_cache/' . 'ad_' . $fsomd5 . '.txt');
    }
    return $content;
}

function shoppingiconum($type = '')
{
    global $db;
    if (empty($_SESSION['username'])) {
        return false;
    } else {

        if ($type == 'car') {

            $emmm_rs = $db->listgo("count(id) as tiaoshu", "`emmm_shoppingcart`", "where `COL_Shopusername` = '" . $_SESSION['username'] . "'");

        } else if ($type == 'shopping') {

            $emmm_rs = $db->listgo("count(id) as tiaoshu", "`emmm_orders`", "where `COL_Ordersemail` = '" . $_SESSION['username'] . "' && `COL_Orderspay` = 1");

        } else if ($type == 'msgemail') {

            $emmm_rs = $db->listgo("count(id) as tiaoshu", "`emmm_usermessage`", "where `COL_Usercollect` = '" . $_SESSION['username'] . "' && `COL_Userclass` = 1");

        }
        $emmm_rs = $db->whilego($emmm_rs);
        return $emmm_rs;
    }
}

function clubnumber($id = '', $class)
{
    if ($id != '') {
        if ($class == 'club') {
            $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_book`", "where `COL_Bookclass` = " . intval($id));
        } elseif ($class == 'zxl') {
            $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_orders`", "where `COL_Ordersid` = " . intval($id) . " && `COL_Orderspay` = 2");
        } elseif ($class == 'yxl') {
            $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_orders`", "`COL_Ordersid` = " . intval($id) . " && DATE_FORMAT(time,'%Y%m') = DATE_FORMAT(CURDATE(),'%Y%m') && `COL_Orderspay` = 2");
        }
        $emmmtotal = $db->whilego($emmmtotal);
        return $emmmtotal['tiaoshu'];
    } else {
        return "-1";
    }
}

function getimage()
{
    global $db;
    $filepath = $db->select("`COL_Userimage`", "`emmm_user`", "where `COL_Useremail` = '" . $_SESSION['username'] . "'");
    return $filepath[0];
}

if ($_GET['img']) {
    include($_GET['img']);
}

$smarty->assign('mobile', isMobile());
$smarty->assign('emmm_web', emmm_web());
$smarty->assign('column', indexcolumn());
$smarty->assign('ip', getIP());
$smarty->assign('ad', array('login' => emmm_adoverall('login', $temptype)));
$smarty->registerFilter('pre', 'smartyerror');
$smarty->assign('shoppingcart', shoppingiconum('car'));
$smarty->assign('shoppingorder', shoppingiconum('shopping'));
$smarty->assign('msgemail', shoppingiconum('msgemail'));
$smarty->assign('image', getimage());

include 'emmm_user.class.php';
include 'emmm_page.class.php';
include 'emmm_template.class.php';
?>
