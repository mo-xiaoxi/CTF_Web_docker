<?php

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if (isset($_GET["page"]) == "") {
    $smarty->assign("page", 1);
} else {
    $smarty->assign("page", $_GET["page"]);
}

if (isset($_GET["emmm_cms"]) == "") {
    echo '';
} elseif ($_GET["emmm_cms"] == "add") {

    $emmm_xiegang = str_replace($emmm['webpath'] . "function", "function", admin_sql($_POST["COL_Downimg"]));
    $COL_Downdurl = str_replace($emmm['webpath'] . "function", "function", admin_sql($_POST["COL_Downdurl"]));

    $COL_Downclass = explode("|", admin_sql($_POST["COL_Downclass"]));
    if ($COL_Downclass[0] == 0) {
        $emmm_font = 4;
        $emmm_content = $emmm_adminfont['nocolumn'];
        $emmm_class = 'emmm_down.php?id=emmm';
        require 'emmm_remind.php';
        exit;
    }

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

    $query = $db->insert("`emmm_down`", "`COL_Downtitle` = '" . admin_sql($_POST["COL_Downtitle"]) . "',`time` = '" . date("Y-m-d H:i:s") . "',`COL_Downimg` = '" . $emmm_xiegang . "',`COL_Downdurl` = '" . $COL_Downdurl . "',`COL_Downcontent` = '" . admin_sql($_POST["COL_Downcontent"]) . "',`COL_Downempower` = '" . admin_sql($_POST["COL_Downempower"]) . "',`COL_Downtype` = '" . admin_sql($_POST["COL_Downtype"]) . "',`COL_Downlang` = '" . admin_sql($_POST["COL_Downlang"]) . "',`COL_Class` = '" . $COL_Downclass[0] . "',`COL_Lang` = '" . $COL_Downclass[1] . "',`COL_Downsize` = '" . admin_sql($_POST["COL_Downsize"]) . $_POST["kb"] . "',`COL_Downmake` = '" . admin_sql($_POST["COL_Downmake"]) . "',`COL_Downsetup` = '" . $COL_Downsetup . "',`COL_Tag` = '" . $wordtag . "',`COL_Downrights` = '" . $COL_Downrights . "',`COL_Sorting` = '" . admin_sql($_POST["COL_Downsorting"]) . "',`COL_Attribute` = '" . $COL_Downattribute . "',`COL_Url` = '" . admin_sql($_POST["COL_Downurl"]) . "',`COL_Description` = '" . compress_html($COL_Downcontent) . "',`COL_Random` = '" . randomkeys(18) . "',`COL_Callback` = 0", "");
    $emmm_font = 1;
    $emmm_class = 'emmm_down.php?id=emmm';
    require 'emmm_remind.php';

} elseif ($_GET["emmm_cms"] == "del") {

    if (strstr($COL_Adminpower, "35")) {

        $emmm_rs = $db->select("`COL_Downimg`,`COL_Downdurl`", "`emmm_down`", "where id = " . intval($_GET['id']));
        if ($emmm_rs[0] != '' || $emmm_rs[1] != '') {
            include './emmm_del.php';
            emmm_imgdel($emmm_rs[0], $emmm_rs[1], '');
        }

        $query = $db->del("emmm_down", "where id = " . intval($_GET['id']));
        $emmm_font = 2;
        $emmm_class = 'emmm_down.php?id=emmm';
        require 'emmm_remind.php';


    } else {

        $emmm_font = 4;
        $emmm_content = '权限不够，无法删除！';
        $emmm_class = 'emmm_down.php?id=emmm';
        require 'emmm_remind.php';

    }
} elseif ($_GET["emmm_cms"] == "Batch") {


    if (strstr($COL_Adminpower, "34")) {

        if (!empty($_POST["op_b"])) {
            $op_b = implode(',', $_POST["op_b"]);
        } else {
            $op_b = '';
        }

        if ($_POST["h"] == "h") {
            header("location: ./emmm_cmd.php?id=$op_b&lx=h&xx=down");
            exit;
        } elseif ($_POST["h"] == "y") {
            header("location: ./emmm_cmd.php?id=$op_b&lx=y&xx=down");
            exit;
        } elseif ($_POST["h"] == "s") {
            header("location: ./emmm_cmd.php?id=$op_b&lx=s&xx=down");
            exit;
        }

        if (!empty($_POST["COL_Downattribute"])) {
            $COL_Downattribute = implode(',', $_POST["COL_Downattribute"]);
        } else {
            $COL_Downattribute = '';
        }

        $query = $db->update("emmm_down", "`COL_Attribute` = '" . $COL_Downattribute . "'", "where id in ($op_b)");
        $emmm_font = 1;
        $emmm_class = 'emmm_down.php?id=emmm';
        require 'emmm_remind.php';

    } else {

        $emmm_font = 4;
        $emmm_content = '权限不够，无法编辑内容！';
        $emmm_class = 'emmm_down.php?id=emmm';
        require 'emmm_remind.php';

    }

}

function columncycle($cid = 1)
{
    global $db, $id;
    $emmm_rs = $db->select("`COL_Columntitle`", "`emmm_column`", "where id = " . $cid . " and (`COL_Adminopen` LIKE '%$id%' or `COL_Adminopen` LIKE '0%')");
    if ($emmm_rs) {
        return $emmm_rs[0];
    } else {
        return false;
    }
}

function Downlist()
{
    global $_page, $db, $smarty;
    $listpage = 25;
    if (intval(isset($_GET['page'])) == 0) {
        $listpagesum = 1;
    } else {
        $listpagesum = intval($_GET['page']);
    }
    $start = ($listpagesum - 1) * $listpage;
    $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_down`", "where `COL_Callback` = 0 order by id desc");
    $emmmtotal = $db->whilego($emmmtotal);
    $query = $db->listgo("id,COL_Downtitle,time,COL_Class,COL_Lang", "`emmm_down`", "where `COL_Callback` = 0 order by id desc LIMIT " . $start . "," . $listpage);
    $rows = array();
    $i = 1;
    while ($emmm_rs = $db->whilego($query)) {
        $c = columncycle($emmm_rs[3]);
        if ($c) {
            $rows[] = array(
                "i" => $i,
                "id" => $emmm_rs[0],
                "title" => $emmm_rs[1],
                "time" => $emmm_rs[2],
                "class" => $c,
                "lang" => $emmm_rs[4],
                "att" => listattribute($emmm_rs[0], 'down'),
            );
        }
        $i = $i + 1;
    }
    $_page = new Page($emmmtotal['tiaoshu'], $listpage);
    $smarty->assign('emmmpage', $_page->showpage());
    return $rows;
}

function Userleve()
{
    global $db;
    $query = $db->listgo("id,COL_Userlevename", "`emmm_userleve`", "order by id asc");
    $rows = array();
    while ($emmm_rs = $db->whilego($query)) {
        $rows[] = array(
            "id" => $emmm_rs[0],
            "name" => $emmm_rs[1]
        );
    }
    return $rows;
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node, 0);
$smarty->assign('downlist', $arr);
Admin_click('下载管理', 'emmm_down.php?id=emmm');
$smarty->assign("down", Downlist());
$smarty->assign("userleve", Userleve());
$smarty->display('emmm_down.html');
?>
