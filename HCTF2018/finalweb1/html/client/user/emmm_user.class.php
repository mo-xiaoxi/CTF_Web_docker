<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 *-------------------------------
 * 模板操作类(2014-10-15)
 *-------------------------------
*/
if (!defined('EMMMNO')) {
    exit('no!');
}

$emmm_web = emmm_web();

function emmm_usercontrol()
{
    global $db, $emmm_web;
    $emmm_rs = $db->select("`COL_Userreg`,`COL_Userlogin`,`COL_Userprotocol`,`COL_Usergroup`,`COL_Usermoney`,`COL_Useripoff`,`COL_Regtyle`,`COL_Regcode`,`COL_Userpassgo`", "`emmm_usercontrol`", "where `id` = 1");
    $rows = array(
        'regoff' => $emmm_rs[0],
        'loginoff' => $emmm_rs[1],
        'protocol' => str_replace('[.$emmm_web.website.]', $emmm_web['website'], $emmm_rs[2]),
        'group' => $emmm_rs[3],
        'money' => explode("|", $emmm_rs[4]),
        'ipoff' => $emmm_rs[5],
        'type' => $emmm_rs[6],
        'code' => $emmm_rs[7],
        'telsms' => $emmm_rs[8],
    );
    return $rows;
}

function emmm_userproblem()
{
    global $db, $emmm;
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

$emmm_usercontrol = emmm_usercontrol();
$smarty->assign('usercontrol', $emmm_usercontrol);
$smarty->assign('problem', emmm_userproblem());
?>
