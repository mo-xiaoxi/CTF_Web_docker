<?php

include './config/emmm_code.php';
include './config/emmm_config.php';
include './config/emmm_version.php';
include './config/emmm_Language.php';
include './function/emmm_function.class.php';
include './function/emmm/Smarty.class.php';

if (isset($_GET['emmm_admin']) == "login") {

    if ($_REQUEST["emmm_kouling"] != $emmm['validation']) {
        exit("<script language=javascript> alert('" . $emmm_adminfont['klerror'] . "');history.back(-1);</script>");
    }
    $loginname = dowith_sql($_REQUEST["loginname"]);
    $loginpass = dowith_sql(substr(md5(md5($_REQUEST["loginpass"])), 0, 16));
    $emmm_rs = $db->select("id,COL_Admin", "emmm_admin", "where COL_Adminname = '" . $loginname . "' and COL_Adminpass = '" . $loginpass . "'");

    if ($emmm_rs == false) {

        exit("<script language=javascript> alert('" . $emmm_adminfont['loginerror'] . "');history.back(-1);</script>");

    } else {

        session_start();
        $_SESSION['emmm_adminname'] = $loginname;
        $_SESSION['emmm_outtime'] = time() + 3600;
        if ($emmm_rs[1] == 1) {
            echo "<script>location.href='" . $_SERVER['PHP_SELF'] . "?emmm=admin';</script>";
            exit();
        } elseif ($emmm_rs[1] == 2) {
            echo "<script>location.href='" . $_SERVER['PHP_SELF'] . "?emmm=admin';</script>";
            exit();
        }
    }
}

$emmm_templates = $emmm['adminpath'] . "/templates/";
$emmm_templates_c = "function/_compile/";
$emmm_cache = "function/_cache/";
$Encodeurl = "./";

$smarty = new Smarty;
$smarty->caching = false;
$smarty->setTemplateDir($emmm_templates);
$smarty->setCompileDir($emmm_templates_c);
$smarty->setCacheDir($emmm_cache);
$smarty->assign('emmm', '<h1>hello,emmm!</h1>');
$smarty->assign('emmm_access', $emmm_access);
$smarty->assign('version', $emmm_version);
$smarty->assign('webpath', $emmm['webpath']);
$smarty->assign('adminpath', $emmm['adminpath']);
$smarty->assign('templatepath', $emmm_templates);
$smarty->assign('emmm_adminfont', $emmm_adminfont);
@include './' . $emmm['adminpath'] . '/emmm_userwebzz.php';
//$smarty->assign('empower', emmmmd5());

if (isset($_GET['emmm']) == "") {

    $smarty->display('emmm_login.html');

} elseif ($_GET['emmm'] == "admin") {

    include './' . $emmm['adminpath'] . '/emmm_checkadmin.php';
    $smarty->assign('id', $id);
    $smarty->assign('COL_Adminname', $COL_Adminname);
    $smarty->assign('COL_Adminpass', $COL_Adminpass);
    $smarty->assign('COL_Adminpower', $COL_Adminpower);
    $smarty->assign('emmm_out', $_SERVER['PHP_SELF']);
    $smarty->assign('emmm_switch', array('weixin' => $emmm_weixin, 'apps' => $emmm_apps, 'alifuwu' => $emmm_alifuwu));

    function Emmm_Admin_click()
    {
        global $db;
        $query = $db->listgo("`id`,`COL_Title`,`COL_Url`,`COL_Click`", "`emmm_adminclick`", "order by COL_Click desc LIMIT 0,15");
        $rows = array();
        while ($emmm_rs = $db->whilego($query)) {
            $rows[] = array(
                "id" => $emmm_rs[0],
                "Click_title" => $emmm_rs[1],
                "Click_url" => $emmm_rs[2]
            );
        }
        return $rows;
    }

    function Pluslist()
    {
        global $emmm, $db;
        $query = $db->listgo("COL_Name,COL_Pluspath", "`emmm_plus`", "order by id desc");
        $rows = array();
        $i = 1;
        while ($emmm_rs = $db->whilego($query)) {
            $rows[] = array(
                "i" => $i,
                "name" => $emmm_rs[0],
                "pluspath" => $emmm['webpath'] . 'client/plus/' . $emmm_rs[1],
                "pluspath2" => $emmm_rs[1],
            );
            $i = $i + 1;
        }
        return $rows;
    }

    $smarty->assign('emmm_click', Emmm_Admin_click());
    $smarty->assign('Pluslist', Pluslist());

    if ($COL_Admin == 1) {
        $smarty->display('emmm_index.html');
    } elseif ($COL_Admin == 2) {
        $smarty->display('emmm_assist.html');
    } else {
        echo $emmm_adminfont['accessno'];
        exit(0);
    }
}
?>
