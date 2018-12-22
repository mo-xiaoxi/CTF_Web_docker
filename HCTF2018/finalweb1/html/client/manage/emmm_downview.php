<?php

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if (isset($_GET["page"]) == "") {
    $smarty->assign("page", 1);
} else {
    $smarty->assign("page", $_GET["page"]);
}

if (isset($_GET["emmm_cms"]) == "") {
    echo '';
} elseif ($_GET["emmm_cms"] == "edit") {

    if (strstr($COL_Adminpower, "34")) {

        $emmm_xiegang = str_replace($emmm['webpath'] . "function", "function", admin_sql($_POST["COL_Downimg"]));
        $COL_Downdurl = str_replace($emmm['webpath'] . "function", "function", admin_sql($_POST["COL_Downdurl"]));

        if (!admin_sql($_POST["COL_Downdescription"])) {
            $COL_Downcontent = utf8_strcut(strip_tags(admin_sql($_POST["COL_Downcontent"])), 0, 200);
        } else {
            $COL_Downcontent = admin_sql($_POST["COL_Downdescription"]);
        }

        //分词
        $word = $COL_Downcontent;
        $tag = admin_sql($_POST["COL_Downtag"]);
        include '../../function/emmm_sae.class.php';
        //结束

        $COL_Downclass = explode("|", admin_sql($_POST["COL_Downclass"]));

        if (!empty($_POST["COL_Downattribute"])) {
            $COL_Downattribute = implode(',', $_POST["COL_Downattribute"]);
        } else {
            $COL_Downattribute = '';
        }

        if (!empty($_POST["COL_Downsetup"])) {
            $COL_Downsetup = implode(',', $_POST["COL_Downsetup"]);
        } else {
            $COL_Downsetup = '';
        }

        if (!empty($_POST["COL_Downrights"])) {
            $COL_Downrights = implode(',', $_POST["COL_Downrights"]);
        } else {
            $COL_Downrights = '0';
        }

        $query = $db->update("`emmm_down`", "`COL_Downtitle` = '" . admin_sql($_POST["COL_Downtitle"]) . "',`time` = '" . date("Y-m-d H:i:s") . "',`COL_Downimg` = '" . $emmm_xiegang . "',`COL_Downdurl` = '" . $COL_Downdurl . "',`COL_Downcontent` = '" . admin_sql($_POST["COL_Downcontent"]) . "',`COL_Downempower` = '" . admin_sql($_POST["COL_Downempower"]) . "',`COL_Downtype` = '" . admin_sql($_POST["COL_Downtype"]) . "',`COL_Downlang` = '" . admin_sql($_POST["COL_Downlang"]) . "',`COL_Class` = '" . $COL_Downclass[0] . "',`COL_Lang` = '" . $COL_Downclass[1] . "',`COL_Downsize` = '" . admin_sql($_POST["COL_Downsize"]) . $_POST["kb"] . "',`COL_Downmake` = '" . admin_sql($_POST["COL_Downmake"]) . "',`COL_Downsetup` = '" . $COL_Downsetup . "',`COL_Tag` = '" . $wordtag . "',`COL_Downrights` = '" . $COL_Downrights . "',`COL_Sorting` = '" . admin_sql($_POST["COL_Downsorting"]) . "',`COL_Attribute` = '" . $COL_Downattribute . "',`COL_Url` = '" . admin_sql($_POST["COL_Downurl"]) . "',`COL_Description` = '" . compress_html($COL_Downcontent) . "',`COL_Random` = '" . randomkeys(18) . "'", "where id = " . intval($_GET['id']));
        $emmm_font = 1;
        $emmm_class = 'emmm_down.php?id=emmm&page=' . $_GET["page"];
        require 'emmm_remind.php';


    } else {

        $emmm_font = 4;
        $emmm_content = '权限不够，无法编辑内容！';
        $emmm_class = 'emmm_down.php?id=emmm';
        require 'emmm_remind.php';

    }

}

function Userleveto()
{
    global $db;
    $query = $db->listgo("COL_Userlevename", "`emmm_userleve`", "order by id asc");
    $rows[] = '任何人';
    while ($emmm_rs = $db->whilego($query)) {
        $rows[] = $emmm_rs[0];
    }
    return $rows;
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node, 0);
$smarty->assign('downlist', $arr);

$emmm_rs = $db->select("*", "`emmm_down`", "where `id` = " . intval($_GET['id']));
$smarty->assign('emmm_down', $emmm_rs);
//属性
$emmm_text = explode(",", $emmm_rs['COL_Attribute']);
for ($i = 0; $i < sizeof($emmm_text); $i++) {
    $selected[] = $emmm_text[$i];
}
$smarty->assign('selected', $selected);
$emmmh_qx = array('头条', '热门', '滚动', '推荐');
$smarty->assign('emmmh_qx', $emmmh_qx);
//运行环境
$emmm_text2 = explode(",", $emmm_rs['COL_Downsetup']);
for ($o = 0; $o < sizeof($emmm_text2); $o++) {
    $selected2[] = $emmm_text2[$o];
}
$smarty->assign('selected2', $selected2);
$emmmh_qx2 = array('Win XP', 'Win 7', 'Win 8', 'Win 9', 'Win 10', 'Linux', 'Mac OS', 'Android', 'IOS', 'Windows Phone');
$smarty->assign('emmmh_qx2', $emmmh_qx2);
$emmm_text3 = explode(",", $emmm_rs['COL_Downrights']);
for ($i = 0; $i < sizeof($emmm_text3); $i++) {
    $selected3[] = $emmm_text3[$i];
}
$smarty->assign('selected3', $selected3);
$emmmh_qx3 = Userleveto();
$smarty->assign('emmmh_qx3', $emmmh_qx3);
$smarty->display('emmm_downview.html');
?>
