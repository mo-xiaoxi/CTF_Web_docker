<?php



//模板全局定义
session_start();
date_default_timezone_set('Asia/Shanghai'); //设置时区
$emmm_weburl = explode('-', $_SERVER["QUERY_STRING"]);
if (empty($emmm_weburl[0])) {
    $emmm_Language = $homelang[2];
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
function emmm_parameters()
{
    global $db;
    $emmm_rs = $db->select("`COL_Weboff`,`COL_Webofftext`,`COL_Webrewrite`,`COL_Webpage`,`COL_Webkeywords`,`COL_Webkeywordsto`,`COL_Webdescriptions`,`COL_Webweight` ,`COL_Searchtime` ,`COL_Bookuser` , `COL_Pagestype` ,`COL_Pages` ,`COL_Pagefont`", "`emmm_webdeploy`", "where `id` = 1");
    $rows = array(
        'weboff' => $emmm_rs[0],
        'webofftext' => $emmm_rs[1],
        'rewrite' => $emmm_rs[2],
        'page' => explode(",", $emmm_rs[3]),
        'keywordsk' => $emmm_rs[4],
        'keywords' => $emmm_rs[5],
        'descriptions' => $emmm_rs[6],
        'weight' => $emmm_rs[7],
        'searchtime' => $emmm_rs[8],
        'bookuser' => $emmm_rs[9],
        'pagetype' => $emmm_rs[10],
        'pagecss' => $emmm_rs[11],
        'pagefont' => $emmm_rs[12],
    );
    return $rows;
}

$Parameterse = emmm_parameters();

function emmm_usercontrol()
{
    global $db, $emmm_web;
    $emmm_rs = $db->select("`COL_Userreg`,`COL_Userlogin`,`COL_Userprotocol`,`COL_Usergroup`,`COL_Usermoney`,`COL_Useripoff`,`COL_Regtyle`,`COL_Regcode`,`COL_Userpassgo`", "`emmm_usercontrol`", "where `id` = 1");
    $rows = array(
        'regoff' => $emmm_rs[0],
        'loginoff' => $emmm_rs[1],
        'group' => $emmm_rs[3],
        'money' => explode("|", $emmm_rs[4]),
        'ipoff' => $emmm_rs[5],
        'type' => $emmm_rs[6],
        'code' => $emmm_rs[7],
        'telsms' => $emmm_rs[8],
    );
    return $rows;
}

$emmm_usercontrol = emmm_usercontrol();

if ($Parameterse['weboff'] == 2) {
    echo $Parameterse['webofftext'];
    exit;
}

$emmm_templates = "../../templates/wap";
$emmm_templates_c = "../../function/_compile/";
$emmm_cache = "function/_cache/";
$emmm_Othercache = "../../function/_cache/"; //手机版专属
$smarty = new Smarty;
$smarty->caching = false;
$smarty->setTemplateDir($emmm_templates);
$smarty->setCompileDir($emmm_templates_c);
$smarty->setCacheDir($emmm_Othercache);
$smarty->addPluginsDir(array('../../function/class', '../../function/data',));
$smarty->assign('emmm', '<h1>hello,emmm!</h1>');
$smarty->assign('emmm_access', $emmm_access);
$smarty->assign('version', $emmm_version);
$smarty->assign('webpath', $emmm['webpath']);
$smarty->assign('adminpath', $emmm['adminpath']);
$smarty->assign('templatepath', $emmm['webpath'] . str_replace('../../', '', $emmm_templates) . "/");
$smarty->assign('listid', $listid);


//通用类
function emmm_wap()
{
    global $emmm, $db, $emmm_Language, $temptype, $listid, $viewid, $Parameterse;
    $emmm_rs = $db->select("*", "`emmm_wap`", "where `id` = 1");
    $rows = array(
        $emmm_rs["COL_Website"],
        $emmm['webpath'] . $emmm_rs["COL_Weblogo"],
        $emmm_rs["COL_Webkeywords"],
        $emmm_rs["COL_Webdescriptions"],
    );
    return $rows;
}

function emmm_web()
{
    global $emmm, $db, $emmm_Language, $temptype, $listid, $viewid, $Parameterse;
    $emmm_wap = emmm_wap();
    $emmm_rs = $db->select("*", "`emmm_web`", "where `id` = 1");
    $rows = array(
        'website' => $emmm_wap[0],
        'weburl' => $emmm_rs["COL_Weburl"],
        'weblogo' => $emmm_wap[1],
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
        'webkeywords' => $emmm_wap[2],
        'webdescriptions' => $emmm_wap[3],
        'webstatistics' => $emmm_rs["COL_Webstatistics"],
        'weixin' => $emmm_rs["COL_Weixin"],
        'erweima' => $emmm_rs["COL_Weixinerweima"],
        'alipayname' => $emmm_rs["COL_Alipayname"],
        'by' => footwebcontent(),
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
            $wapurl = $emmm_rs[6];
        } else {
            if ($Parameterse['rewrite'] == 1) {
                $weburl = $emmm['webpath'] . $emmm_rs[2] . '/' . $emmm_rs[5] . '/' . $emmm_rs[0] . '/';
            } else {
                $weburl = $emmm['webpath'] . '?' . $emmm_rs[2] . '-' . $emmm_rs[5] . '-' . $emmm_rs[0] . '.html';
            }
            $wapurl = $emmm['webpath'] . 'client/wap/?' . $emmm_rs[2] . '-' . $emmm_rs[5] . '-' . $emmm_rs[0] . '.html';
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
            "type" => $emmm_rs[5],
            "url" => $weburl,
            "briefing" => $emmm_rs[7],
            "img" => $minimg,
            "wapurl" => $wapurl,
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
    global $emmm_Language, $temptype, $listid, $viewid, $Parameterse;
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
        'bookuser' => $Parameterse['bookuser'],
    );
    return $rows;
}

function columncycle($id = 1)
{
    global $db, $emmm, $Parameterse;
    $emmm_rs = $db->select("`id`,`COL_Lang`,`COL_Columntitle`,`COL_Model`", "`emmm_column`", "where id = $id");
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
    if ($temptype == 'article' || $temptype == 'articleview') {
        $adclass = '文章';
    } elseif ($temptype == 'product' || $temptype == 'productview') {
        $adclass = '商品';
    } elseif ($temptype == 'photo' || $temptype == 'photoview') {
        $adclass = '图集';
    } elseif ($temptype == 'video' || $temptype == 'videoview') {
        $adclass = '视频';
    } elseif ($temptype == 'down' || $temptype == 'downview') {
        $adclass = '下载';
    } elseif ($temptype == 'job' || $temptype == 'jobview') {
        $adclass = '招聘';
    } elseif ($temptype == 'about') {
        $adclass = '单页面';
    } else {
        $adclass = '首页';
    }
    $fsomd5 = md5($type . $adclass);

    if (!is_file(WEB_ROOT . '/' . $emmm_cache . 'ad_' . $fsomd5 . '.txt')) {
        switch ($type) {
            case "head":
                $emmm_rs = $db->select("COL_Adcontent,COL_Adclass", "`emmm_ad`", "where `id` = 1");
                if (strpos(', ' . $emmm_rs[1], $adclass) > 0) {
                    $content = $emmm_rs[0];
                } else {
                    $content = '';
                }
                emmm_file($emmm_cache . 'ad_' . $fsomd5 . '.txt', $content, 1);
                break;

            case "foot":
                $emmm_rs = $db->select("COL_Adcontent,COL_Adclass", "`emmm_ad`", "where `id` = 2");
                if (strpos(', ' . $emmm_rs[1], $adclass) > 0) {
                    $content = $emmm_rs[0];
                } else {
                    $content = '';
                }
                emmm_file($emmm_cache . 'ad_' . $fsomd5 . '.txt', $content, 1);
                break;

            case "list":
                $emmm_rs = $db->select("COL_Adcontent,COL_Adclass", "`emmm_ad`", "where `id` = 3");
                if (strpos(', ' . $emmm_rs[1], $adclass) > 0) {
                    $content = $emmm_rs[0];
                } else {
                    $content = '';
                }
                emmm_file($emmm_cache . 'ad_' . $fsomd5 . '.txt', $content, 1);
                break;

            case "view":
                $emmm_rs = $db->select("COL_Adcontent,COL_Adclass", "`emmm_ad`", "where `id` = 4");
                if (strpos(', ' . $emmm_rs[1], $adclass) > 0) {
                    $content = $emmm_rs[0];
                } else {
                    $content = '';
                }
                emmm_file($emmm_cache . 'ad_' . $fsomd5 . '.txt', $content, 1);
                break;
        }

    } else {
        $content = file_get_contents(WEB_ROOT . '/' . $emmm_cache . 'ad_' . $fsomd5 . '.txt');
    }
    return $content;
}

function emmm_ad($type)
{
    global $emmm, $db, $emmm_cache;
    $fsomd5 = md5($type);
    if (!is_file(WEB_ROOT . '/' . $emmm_cache . 'ad_' . $fsomd5 . '.txt')) {
        switch ($type) {
            case "Float":
                $emmm_rs = $db->select("COL_Adpiaofui,COL_Adpiaofuu,COL_Adstateo", "`emmm_ad`", "where `id` = 5");
                if ($emmm_rs[2] == 1) {
                    if (substr($emmm_rs[0], 0, 7) == 'http://' || substr($emmm_rs[0], 0, 8) == 'https://') {
                        $minimg = $emmm_rs[0];
                    } elseif ($emmm_rs[0] == '') {
                        $minimg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $minimg = $emmm['webpath'] . $emmm_rs[0];
                    }
                    $ad = '<script src="' . $emmm['webpath'] . 'function/plugs/ad/piaofu.js" language="JavaScript"></script>'
                        . '<div id="piaofu" style="z-index:99999;">'
                        . '<a href="' . $emmm_rs[1] . '" target="_blank"><img src="' . $minimg . '" border="0"></a>'
                        . '</div>'
                        . '<script>'
                        . 'var piaofurun=new AdMove("piaofu");'
                        . 'piaofurun.Run();'
                        . '</script>';
                } else {
                    $ad = '';
                }
                emmm_file($emmm_cache . 'ad_' . $fsomd5 . '.txt', $ad, 1);
                break;

            case "Right":
                $emmm_rs = $db->select("COL_Adyouxiat,COL_Adyouxiaf,COL_Adstatet", "`emmm_ad`", "where `id` = 5");
                if ($emmm_rs[2] == 1) {
                    $ad = '<div id="msg_win" style="display:block;top:490px;visibility:visible;opacity:1;">'
                        . '<div class="icos"><a id="msg_min" title="最小化" href="javascript:void 0"></a>'
                        . '<a id="msg_close" title="关闭" href="javascript:void 0">×</a></div>'
                        . '<div id="msg_title">' . $emmm_rs[0] . '</div>'
                        . '<div id="msg_content">' . $emmm_rs[1] . '</div>'
                        . '</div>'
                        . '<script src="' . $emmm['webpath'] . 'function/plugs/ad/tc.js" language="JavaScript"></script>'
                        . '<LINK href="' . $emmm['webpath'] . 'function/plugs/ad/tc.css" type=text/css rel=stylesheet>';
                } else {
                    $ad = '';
                }
                emmm_file($emmm_cache . 'ad_' . $fsomd5 . '.txt', $ad, 1);
                break;

            case "Double":
                $emmm_rs = $db->select("COL_Adduilianli,COL_Adduilianlu,COL_Adduilianri,COL_Adduilianru,COL_Adstates", "`emmm_ad`", "where `id` = 5");
                if ($emmm_rs[4] == 1) {
                    if (substr($emmm_rs[0], 0, 7) == 'http://' || substr($emmm_rs[0], 0, 8) == 'https://') {
                        $minimg = $emmm_rs[0];
                    } elseif ($emmm_rs[0] == '') {
                        $minimg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $minimg = $emmm['webpath'] . $emmm_rs[0];
                    }
                    if (substr($emmm_rs[2], 0, 7) == 'http://' || substr($emmm_rs[2], 0, 8) == 'https://') {
                        $maximg = $emmm_rs[2];
                    } elseif ($emmm_rs[2] == '') {
                        $maximg = $emmm['webpath'] . 'skin/noimage.png';
                    } else {
                        $maximg = $emmm['webpath'] . $emmm_rs[2];
                    }
                    $ad = '<DIV id="lovexin12" style="left:22px;POSITION:absolute;TOP:69px;z-index:99999;">'
                        . '<a href="' . $emmm_rs[1] . '" target="_blank"><img src="' . $minimg . '" border="0"></a>'
                        . '<br><a href=JavaScript:; onclick="document.getElementById("lovexin12").style.display="none";"><img border="0" src="' . $emmm['webpath'] . 'function/plugs/ad/close.gif"></a>'
                        . '</DIV>'
                        . '<DIV id="lovexin14" style="right:22px;POSITION:absolute;TOP:69px;z-index:99999;">'
                        . '<a href="' . $emmm_rs[3] . '" target="_blank"><img src="' . $maximg . '" border="0"></a>'
                        . '<br><a href=JavaScript:; onclick="document.getElementById("lovexin14").style.display="none";"><img border="0" src="' . $emmm['webpath'] . 'function/plugs/ad/close.gif"></a>'
                        . '</DIV>'
                        . '<script src="' . $emmm['webpath'] . 'function/plugs/ad/duilian.js" language="JavaScript"></script>'
                        . '<script>window.setInterval("heartBeat()",1);</script>';
                } else {
                    $ad = '';
                }
                emmm_file($emmm_cache . 'ad_' . $fsomd5 . '.txt', $ad, 1);
                break;
        }

    } else {
        $ad = file_get_contents(WEB_ROOT . '/' . $emmm_cache . 'ad_' . $fsomd5 . '.txt');
    }
    return $ad;
}

function emmm_brand()
{
    global $emmm, $db, $emmm_Language;
    $query = $db->listgo("id,COL_Brand,COL_Class,COL_Img,time", "`emmm_productcp`", "where COL_Class = 2 order by id desc");
    $rows = array();
    $i = 1;
    while ($emmm_rs = $db->whilego($query)) {
        if (substr($emmm_rs[3], 0, 7) == 'http://' || substr($emmm_rs[3], 0, 8) == 'https://') {
            $maximg = $emmm_rs[3];
        } elseif ($emmm_rs[3] == '') {
            $maximg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $maximg = $emmm['webpath'] . $emmm_rs[3];
        }
        $rows[] = array(
            "i" => $i,
            "id" => $emmm_rs[0],
            "title" => $emmm_rs[1],
            "class" => $emmm_rs[2],
            "minimg" => $maximg,
            "time" => $emmm_rs[4],
            "url" => $emmm['webpath'] . '?' . $emmm_Language . '-brand-' . $emmm_rs[0] . '.html',
            "wapurl" => $emmm['webpath'] . 'client/wap/?' . $emmm_Language . '-brand-' . $emmm_rs[0] . '.html',
        );
        $i += 1;
    }
    return $rows;
}

function opcmsbrand($id = 0)
{
    global $db, $emmm;
    if ($id == 0) {
        return false;
    } else {
        $emmm_rs = $db->select("COL_Brand,COL_Img", "`emmm_productcp`", "where `id` = " . $id);
        if (substr($emmm_rs[1], 0, 7) == 'http://' || substr($emmm_rs[1], 0, 8) == 'https://') {
            $minimg = $emmm_rs[1];
        } elseif ($emmm_rs[1] == '') {
            $minimg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $minimg = $emmm['webpath'] . $emmm_rs[1];
        }
        $rows = array(
            'title' => $emmm_rs[0],
            'minimg' => $minimg,
        );
        return $rows;
    }
}


function clubnumber($id = '', $class)
{
    global $db;
    if ($id != '') {
        if ($class == 'club') {
            $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_book`", "where `COL_Bookclass` = " . $id);
        } elseif ($class == 'zxl') {
            $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_orders`", "where `COL_Ordersid` = " . $id . " && `COL_Orderspay` = 2");
        } elseif ($class == 'yxl') {
            $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_orders`", "where `COL_Ordersid` = " . $id . " && DATE_FORMAT(time,'%Y%m') = DATE_FORMAT(CURDATE(),'%Y%m') && `COL_Orderspay` = 2");
        }
        $emmmtotal = $db->whilego($emmmtotal);
        return $emmmtotal['tiaoshu'];
    } else {
        return "-1";
    }
}

function emmm_userproblem()
{
    global $db;
    $query = $db->listgo("`COL_Userproblem`", "`emmm_userproblem`", "order by id desc");
    $rows = array();
    $i = 1;
    while ($emmm_rs = $db->whilego($query)) {
        $rows[] = array(
            'i' => $i,
            'title' => $emmm_rs[0],
        );
        $i += 1;
    }
    return $rows;
}

$smarty->assign('mobile', isMobile('wap'));
$smarty->assign('emmm_web', emmm_web());
$smarty->assign('column', indexcolumn());
$smarty->assign('ip', getIP());
$smarty->assign('ad', array('head' => emmm_adoverall('head', $temptype), 'foot' => emmm_adoverall('foot', $temptype), 'list' => emmm_adoverall('list', $temptype), 'view' => emmm_adoverall('view', $temptype)));
$smarty->registerFilter('pre', 'smartyerror');
$smarty->assign('advert', array('float' => emmm_ad('Float'), 'right' => emmm_ad('Right'), 'double' => emmm_ad('Double')));
$smarty->assign('brandclass', emmm_brand());
$smarty->assign('problem', emmm_userproblem());
$smarty->assign('usercontrol', $emmm_usercontrol);
?>
