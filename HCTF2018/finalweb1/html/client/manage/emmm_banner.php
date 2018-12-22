<?php

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if (isset($_GET["emmm_cms"]) == "") {

    echo '';

} elseif ($_GET["emmm_cms"] == "add") {

    $emmm_xiegang = str_replace($emmm['webpath'] . "function", "function", admin_sql($_POST["COL_Bannerimg"]));
    $emmm_text = implode("|", $_POST['COL_Bannertext']);
    $query = $db->insert("`emmm_banner`", "`COL_Bannerimg` = '" . $emmm_xiegang . "',`COL_Bannertitle` = '" . admin_sql($_POST["COL_Bannertitle"]) . "',`COL_Bannerurl` = '" . admin_sql($_POST["COL_Bannerurl"]) . "',`COL_Bannerlang` = '" . admin_sql($_POST["COL_Bannerlang"]) . "',`time` = '" . date("Y-m-d H:i:s") . "',`COL_Bannerclass` = '" . admin_sql($_POST["COL_Bannerclass"]) . "',`COL_Bannertext` = '" . $emmm_text . "'", "");
    $emmm_font = 1;
    $emmm_class = 'emmm_banner.php?id=emmm';
    require 'emmm_remind.php';

} elseif ($_GET["emmm_cms"] == "bannergroup") {

    $op_a = $_POST["bannerid"];
    $op_b = implode(',', $op_a);
    $bannergroup = $_POST["bannergroup"];
    foreach ($op_a as $key => $op) {
        $bannerupdate = $db->update("emmm_banner", "`COL_Bannerclass` = " . $bannergroup[$key], "where id = " . intval($op));
    }
    $emmm_font = 1;
    $emmm_class = 'emmm_banner.php?id=emmm';
    require 'emmm_remind.php';

} elseif ($_GET["emmm_cms"] == "del") {

    if (strstr($COL_Adminpower, "35")) {

        $emmm_rs = $db->select("`COL_Bannerimg`", "`emmm_banner`", "where id = " . intval($_GET['id']));
        if ($emmm_rs[0] != '') {
            include './emmm_del.php';
            emmm_imgdel($emmm_rs[0]);
        }

        $query = $db->del("emmm_banner", "where id = " . intval($_GET['id']));
        $emmm_font = 2;
        $emmm_class = 'emmm_banner.php?id=emmm';
        require 'emmm_remind.php';

    } else {

        $emmm_font = 4;
        $emmm_content = '权限不够，无法删除！';
        $emmm_class = 'emmm_banner.php?id=emmm';
        require 'emmm_remind.php';

    }
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

function Bannerlist()
{
    global $_page, $db, $smarty;
    $listpage = 25;
    if (intval(isset($_GET['page'])) == 0) {
        $listpagesum = 1;
    } else {
        $listpagesum = intval($_GET['page']);
    }
    $start = ($listpagesum - 1) * $listpage;
    $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_banner`", "order by id desc");
    $emmmtotal = $db->whilego($emmmtotal);
    $query = $db->listgo("id,COL_Bannerimg,COL_Bannertitle,COL_Bannerurl,COL_Bannerlang,time,COL_Bannerclass", "`emmm_banner`", "order by id desc LIMIT " . $start . "," . $listpage);
    $rows = array();
    $i = 1;
    while ($emmm_rs = $db->whilego($query)) {
        $rows[] = array(
            "i" => $i,
            "id" => $emmm_rs[0],
            "img" => $emmm_rs[1],
            "title" => $emmm_rs[2],
            "url" => $emmm_rs[3],
            "lang" => $emmm_rs[4],
            "time" => $emmm_rs[5],
            "class" => $emmm_rs[6],
        );
        $i = $i + 1;
    }
    $_page = new Page($emmmtotal['tiaoshu'], $listpage);
    $smarty->assign('emmmpage', $_page->showpage());
    return $rows;
}

Admin_click('Banner管理', 'emmm_banner.php?id=emmm');
$smarty->assign("langlist", Langlist());
$smarty->assign("banner", Bannerlist());
$smarty->display('emmm_banner.html');
?>
