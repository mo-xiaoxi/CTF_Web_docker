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

    $COL_Jobclass = explode("|", admin_sql($_POST["COL_Jobclass"]));
    if ($COL_Jobclass[0] == 0) {
        $emmm_font = 4;
        $emmm_content = $emmm_adminfont['nocolumn'];
        $emmm_class = 'emmm_job.php?id=emmm';
        require 'emmm_remind.php';
        exit;
    }

    if (!admin_sql($_POST["COL_Jobdescription"])) {
        $COL_Jobcontent = utf8_strcut(strip_tags(admin_sql($_POST["COL_Jobcontent"])), 0, 200);
    } else {
        $COL_Jobcontent = admin_sql($_POST["COL_Jobdescription"]);
    }

    //分词
    $word = $COL_Jobcontent;
    $tag = admin_sql($_POST["COL_Jobtag"]);
    include '../../function/emmm_sae.class.php';
    //结束

    if (!empty($_POST["COL_Jobattribute"])) {
        $COL_Jobattribute = implode(',', $_POST["COL_Jobattribute"]);
    } else {
        $COL_Jobattribute = '';
    }

    $query = $db->insert("`emmm_job`", "	`COL_Jobtitle` = '" . admin_sql($_POST["COL_Jobtitle"]) . "',`time` = '" . date("Y-m-d H:i:s") . "',`COL_Jobwork` = '" . admin_sql($_POST["COL_Jobwork"]) . "',`COL_Jobadd` = '" . admin_sql($_POST["COL_Jobadd"]) . "',`COL_Jobnature` = '" . admin_sql($_POST["COL_Jobnature"]) . "',`COL_Jobexperience` = '" . admin_sql($_POST["COL_Jobexperience"]) . "',`COL_Jobeducation` = '" . admin_sql($_POST["COL_Jobeducation"]) . "',`COL_Jobnumber` = '" . admin_sql($_POST["COL_Jobnumber"]) . "',`COL_Jobage` = '" . admin_sql($_POST["COL_Jobage"]) . "',`COL_Jobwelfare` = '" . admin_sql($_POST["COL_Jobwelfare"]) . "',`COL_Jobwage` = '" . admin_sql($_POST["COL_Jobwage"]) . "',`COL_Jobcontact` = '" . admin_sql($_POST["COL_Jobcontact"]) . "',`COL_Jobtel` = '" . admin_sql($_POST["COL_Jobtel"]) . "',`COL_Jobcontent` = '" . admin_sql($_POST["COL_Jobcontent"]) . "',`COL_Class` = '" . $COL_Jobclass[0] . "',`COL_Lang` = '" . $COL_Jobclass[1] . "',`COL_Tag` = '" . $wordtag . "',`COL_Sorting` = '" . admin_sql($_POST["COL_Jobsorting"]) . "',`COL_Attribute` = '" . $COL_Jobattribute . "',`COL_Url` = '" . admin_sql($_POST["COL_Joburl"]) . "',`COL_Description` = '" . compress_html($COL_Jobcontent) . "',`COL_Callback` = 0", "");
    $emmm_font = 1;
    $emmm_class = 'emmm_job.php?id=emmm';
    require 'emmm_remind.php';

} elseif ($_GET["emmm_cms"] == "del") {

    if (strstr($COL_Adminpower, "35")) {

        $query = $db->del("emmm_job", "where id = " . intval($_GET['id']));
        $emmm_font = 2;
        $emmm_class = 'emmm_job.php?id=emmm';
        require 'emmm_remind.php';

    } else {

        $emmm_font = 4;
        $emmm_content = '权限不够，无法删除！';
        $emmm_class = 'emmm_job.php?id=emmm';
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
            header("location: ./emmm_cmd.php?id=$op_b&lx=h&xx=job");
            exit;
        } elseif ($_POST["h"] == "y") {
            header("location: ./emmm_cmd.php?id=$op_b&lx=y&xx=job");
            exit;
        } elseif ($_POST["h"] == "s") {
            header("location: ./emmm_cmd.php?id=$op_b&lx=s&xx=job");
            exit;
        }

        if (!empty($_POST["COL_Jobattribute"])) {
            $COL_Jobattribute = implode(',', $_POST["COL_Jobattribute"]);
        } else {
            $COL_Jobattribute = '';
        }

        $query = $db->update("emmm_job", "`COL_Attribute` = '" . $COL_Jobattribute . "'", "where id in ($op_b)");
        $emmm_font = 1;
        $emmm_class = 'emmm_job.php?id=emmm';
        require 'emmm_remind.php';

    } else {

        $emmm_font = 4;
        $emmm_content = '权限不够，无法编辑内容！';
        $emmm_class = 'emmm_job.php?id=emmm';
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

function Joblist()
{
    global $_page, $db, $smarty;
    $listpage = 25;
    if (intval(isset($_GET['page'])) == 0) {
        $listpagesum = 1;
    } else {
        $listpagesum = intval($_GET['page']);
    }
    $start = ($listpagesum - 1) * $listpage;
    $emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_job`", "where `COL_Callback` = 0 order by id desc");
    $emmmtotal = $db->whilego($emmmtotal);
    $query = $db->listgo("id,COL_Jobtitle,time,COL_Jobwork,COL_Class,COL_Lang", "`emmm_job`", "where `COL_Callback` = 0 order by id desc LIMIT " . $start . "," . $listpage);
    $rows = array();
    $i = 1;
    while ($emmm_rs = $db->whilego($query)) {
        $c = columncycle($emmm_rs[4]);
        if ($c) {
            $rows[] = array(
                "i" => $i,
                "id" => $emmm_rs[0],
                "title" => $emmm_rs[1],
                "time" => $emmm_rs[2],
                "work" => $emmm_rs[3],
                "class" => $c,
                "lang" => $emmm_rs[5],
                "att" => listattribute($emmm_rs[0], 'job'),
            );
        }
        $i = $i + 1;
    }
    $_page = new Page($emmmtotal['tiaoshu'], $listpage);
    $smarty->assign('emmmpage', $_page->showpage());
    return $rows;
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node, 0);
$smarty->assign('joblist', $arr);
Admin_click('招聘管理', 'emmm_job.php?id=emmm');
$smarty->assign("job", Joblist());
$smarty->display('emmm_job.html');
?>
