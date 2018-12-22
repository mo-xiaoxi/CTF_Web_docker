<?php

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if (isset($_GET["emmm_cms"]) == "") {
    echo '';
} elseif ($_GET["emmm_cms"] == "add") {

    if ($_POST["COL_Key"] == '') {
        exit("<script language=javascript> alert('值不能为空');history.go(-1);</script>");
    }

    $query = $db->insert("`emmm_api`", "`COL_Key` = '" . admin_sql($_POST["COL_Key"]) . "'", "");
    $emmm_font = 1;
    $emmm_class = 'emmm_api.php?id=emmm';
    require 'emmm_remind.php';

} elseif ($_GET["emmm_cms"] == "edit") {

    if (strstr($COL_Adminpower, "34")) {

        if ($_POST["COL_Key"] == '') {
            exit("<script language=javascript> alert('值不能为空');history.go(-1);</script>");
        }

        $query = $db->update("`emmm_api`", "`COL_Key` = '" . admin_sql($_POST["COL_Key"]) . "'", "where id = " . intval($_GET['id']));
        $emmm_font = 1;
        $emmm_class = 'emmm_api.php?id=emmm';
        require 'emmm_remind.php';

    } else {

        $emmm_font = 4;
        $emmm_content = '权限不够，无法编辑内容！';
        $emmm_class = 'emmm_api.php?id=emmm';
        require 'emmm_remind.php';

    }
}


function Apilist()
{
    global $_page, $db, $smarty;
    $listpage = 25;
    if (intval(isset($_GET['page'])) == 0) {
        $listpagesum = 1;
    } else {
        $listpagesum = intval($_GET['page']);
    }
    $start = ($listpagesum - 1) * $listpage;
    $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_api`", "order by id desc");
    $emmmtotal = $db->whilego($emmmtotal);
    $query = $db->listgo("`id`,`COL_Key`", "`emmm_api`", "order by id desc LIMIT " . $start . "," . $listpage);
    $rows = array();
    $i = 1;
    while ($emmm_rs = $db->whilego($query)) {
        $rows[] = array(
            "i" => $i,
            "id" => $emmm_rs[0],
            "key" => explode('|', $emmm_rs[1]),
            "keyto" => $emmm_rs[1],
        );
        $i = $i + 1;
    }
    $_page = new Page($emmmtotal['tiaoshu'], $listpage);
    $smarty->assign('emmmpage', $_page->showpage());
    return $rows;
}

$smarty->assign("api", Apilist());
$smarty->display('emmm_api.html');
?>
