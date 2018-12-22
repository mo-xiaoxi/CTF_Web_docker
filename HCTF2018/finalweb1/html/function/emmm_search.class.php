<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2016 vidar.club

*/
if (!defined('EMMMNO')) {
    exit('no!');
}

if (empty($_SESSION['searchtime'])) {

    $_SESSION['searchtime'] = time();

} else {

    $emmmtime = time();
    $emmmtime_two = (int)$emmmtime - (int)$_SESSION['searchtime'];

    if ($emmmtime_two == 0) {

        $_SESSION['searchtime'] = time();

    } else {

        if ($emmmtime_two < $Parameterse['searchtime']) {
            echo "<script language=javascript> alert('搜索间隔为: " . $Parameterse['searchtime'] . " 秒,请稍后在试!');location.replace('" . $emmm['webpath'] . "');</script>";
            exit;
        } else {
            $_SESSION['searchtime'] = time();
        }

    }

}

//$content = explode(' ',dowith_sql($_POST['content']));
$content = dowith_sql($_REQUEST['content']);
$sid = dowith_sql($_REQUEST['sid']);
$lang = dowith_sql($_REQUEST['lang']);
$inputno = $emmm_adminfont['inputno'];
$strlength = $emmm_adminfont['strlength'];
$type = dowith_sql($_REQUEST['type']);

if ($content == '' || $sid == '' || $lang == '' || $type == '') {
    exit("<script language=javascript> alert('" . $inputno . "');location.replace('" . $emmm['webpath'] . "');</script>");
}
if (strlen($content) > 40) {
    exit("<script language=javascript> alert('" . $strlength . "');location.replace('" . $emmm['webpath'] . "');</script>");
}
if (@dowith_sql($_GET['temp']) == 'search') {
    header("location: search.php?" . $lang . "-&content=" . $content . "&lang=" . $lang . "&sid=" . $sid . "&type=" . $type);
    exit;
}

/*
$where = $where.'(';
foreach($content as $op) {
$where = $where ."`COL_Articletitle` LIKE '%$op%' || `COL_Articlecontent` LIKE '%$op%' ||";
}
$where = $where.')';
$where = str_replace('||)',')',$where);
*/


if ($sid == 'article') {

    $top = '`COL_Articletitle`,`COL_Articlecontent`,`COL_Minimg`';
    $where = "(`COL_Articletitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";

} elseif ($sid == 'product') {

    $top = '`COL_Title`,`COL_Content`,`COL_Minimg`';
    $where = "(`COL_Title` LIKE '$content%' || `COL_Description` LIKE '%$content%')";

} elseif ($sid == 'photo') {

    $top = '`COL_Phototitle`,`COL_Photocontent`,`COL_Photocminimg`';
    $where = "(`COL_Phototitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";

} elseif ($sid == 'video') {

    $top = '`COL_Videotitle`,`COL_Videocontent`,`COL_Videoimg`';
    $where = "(`COL_Videotitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";

} elseif ($sid == 'down') {

    $top = '`COL_Downtitle`,`COL_Downcontent`,`COL_Downimg`';
    $where = "(`COL_Downtitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";

} elseif ($sid == 'job') {

    $top = '`COL_Jobtitle`,`COL_Jobcontent`,`COL_Jobwork`';
    $where = "(`COL_Jobtitle` LIKE '$content%' || `COL_Description` LIKE '%$content%')";

} else {
    exit($emmm_adminfont['accessno']);
}
$listpage = 15;
if (intval(isset($_GET['page'])) == 0) {
    $listpagesum = 1;
} else {
    $listpagesum = intval($_GET['page']);
}
$start = ($listpagesum - 1) * $listpage;
$emmmtotal = $db->listgo("count(id) as tiaoshu", "`emmm_" . $sid . "`", "where " . $where . " && `COL_Lang` = '" . $lang . "'");
$emmmtotal = $db->whilego($emmmtotal);

$query = $db->listgo("`id`," . $top . ",`COL_Class`", "`emmm_" . $sid . "`", "where " . $where . " && `COL_Lang` = '" . $lang . "' order by id desc LIMIT " . $start . "," . $listpage);
$rows = array();
$i = 1;
while ($emmm_rs = $db->whilego($query)) {
    $title = str_replace($content, '<font color=red><b>' . $content . '</b></font>', $emmm_rs[1]);
    $scontent = str_replace($content, '<font color=red><b>' . $content . '</b></font>', $emmm_rs[2]);
    if ($sid == 'job') {
        $minimg = $emmm['webpath'] . 'skin/noimage.png';
    } else {
        if (substr($emmm_rs[3], 0, 7) == 'http://') {
            $minimg = $emmm_rs[3];
        } elseif ($emmm_rs[3] == '') {
            $minimg = $emmm['webpath'] . 'skin/noimage.png';
        } else {
            $minimg = $emmm['webpath'] . $emmm_rs[3];
        }
    }
    $rows[] = array(
        'i' => $i,
        'title' => $title,
        'content' => strip_tags($scontent),
        'url' => $emmm['webpath'] . '?' . $lang . '-' . $sid . 'view-' . $emmm_rs[4] . '-' . $emmm_rs[0] . '.html',
        'minimg' => $minimg,
        'wapurl' => $emmm['webpath'] . 'client/wap/?' . $lang . '-' . $sid . 'view-' . $emmm_rs[4] . '-' . $emmm_rs[0] . '.html',
    );
    $i += 1;
}


$query = $db->select("`id`", "`emmm_search`", "where `COL_Searchtext` = '" . $content . "'");
if ($query) {
    $add = $db->update("`emmm_search`", "`COL_Searchclick` = `COL_Searchclick` + 1", "where `COL_Searchtext` = '" . $content . "'");
} else {
    $add = $db->insert("`emmm_search`", "`COL_Searchtext` = '" . $content . "',`COL_Searchclick` = 1,`time` = '" . date("Y-m-d H:i:s") . "'", "");
}

$_page = new Page($emmmtotal['tiaoshu'], $listpage);
$smarty->assign('emmmpage', $_page->showpage());
$smarty->assign('search', $rows);
?>
