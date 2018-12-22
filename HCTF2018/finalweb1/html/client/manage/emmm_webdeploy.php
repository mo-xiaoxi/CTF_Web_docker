<?php

include 'emmm_admin.php';
include 'emmm_checkadmin.php';

if (isset($_GET["emmm_cms"]) == "edit") {

    if (!empty($_POST["COL_Webpage"])) {
        $COL_Webpage = implode(',', $_POST["COL_Webpage"]);
    } else {
        $COL_Webpage = '20,20,20,20,20,20,20';
    }

    $query = $db->update("`emmm_webdeploy`", "`COL_Weboff` = '" . admin_sql($_POST["COL_Weboff"]) . "',`COL_Webofftext` = '" . admin_sql($_POST["COL_Webofftext"]) . "',`COL_Webpage` = '" . $COL_Webpage . "',`COL_Webfenci` = '" . admin_sql($_POST["COL_Webfenci"]) . "',`COL_Webservice` = '" . admin_sql($_POST["COL_Webservice"]) . "',`COL_Webpcomment` = '" . admin_sql($_POST["COL_Webpcomment"]) . "',`COL_Webocomment` = '" . admin_sql($_POST["COL_Webocomment"]) . "',`COL_Webweight` = '" . admin_sql($_POST["COL_Webweight"]) . "',`COL_Webfile` = '" . admin_sql($_POST["COL_Webfile"]) . "',`COL_Ucenter` = '" . admin_sql($_POST["COL_Ucenter"]) . "',`COL_Searchtime` = '" . admin_sql($_POST["COL_Searchtime"]) . "',`COL_Home` = '" . $_POST["COL_Langone"] . "|" . $_POST["COL_Langtwo"] . "|" . $_POST["COL_Langthree"] . "',`COL_Sensitive` = '" . admin_sql($_POST["COL_Sensitive"]) . "',`COL_Bookuser` = '" . admin_sql($_POST["COL_Bookuser"]) . "'", "where id = 1");
    $emmm_font = 1;
    $emmm_class = 'emmm_webdeploy.php';
    require 'emmm_remind.php';

}

function Langlist()
{
    global $db;
    $query = $db->listgo("id,COL_Lang,COL_Font,COL_Default", "`emmm_lang`", "order by id asc");
    $rows = array();
    while ($emmm_rs = $db->whilego($query)) {
        $rows[] = array(
            "id" => $emmm_rs[0],
            "lang" => $emmm_rs[1],
            "font" => $emmm_rs[2],
            "default" => $emmm_rs[3]
        );
    }
    return $rows;
}

$emmm_rs = $db->select("*", "`emmm_webdeploy`", "where `id` = 1");
$rows = array(
    'COL_Weboff' => $emmm_rs['COL_Weboff'],
    'COL_Webofftext' => $emmm_rs['COL_Webofftext'],
    'COL_Webrewrite' => $emmm_rs['COL_Webrewrite'],
    'COL_Webpage' => explode(",", $emmm_rs['COL_Webpage']),
    'COL_Webfenci' => $emmm_rs['COL_Webfenci'],
    'COL_Webservice' => $emmm_rs['COL_Webservice'],
    'COL_Webpcomment' => $emmm_rs['COL_Webpcomment'],
    'COL_Webocomment' => $emmm_rs['COL_Webocomment'],
    'COL_Webweight' => $emmm_rs['COL_Webweight'],
    'COL_Webfile' => $emmm_rs['COL_Webfile'],
    'COL_Ucenter' => $emmm_rs['COL_Ucenter'],
    'COL_Searchtime' => $emmm_rs['COL_Searchtime'],
    'COL_Home' => explode('|', $emmm_rs['COL_Home']),
    'COL_Sensitive' => $emmm_rs['COL_Sensitive'],
    'COL_Bookuser' => $emmm_rs['COL_Bookuser'],
);
$smarty->assign('emmm_web', $rows);


function myscandir($path)
{
    $mydir = dir($path);
    $rows = array();
    while ($file = $mydir->read()) {
        $p = $file;
        if (($file != ".") AND ($file != "..")) {
            $rows[] = array('url' => mb_convert_encoding($p, "utf-8", "gb2312"));
        }
    }
    return $rows;
}

$smarty->assign("Service", myscandir('../../function/plugs/Service'));
$smarty->assign("langlist", Langlist());
$smarty->display('emmm_webdeploy.html');
?>
