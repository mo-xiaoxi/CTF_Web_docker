<?php


include '../../config/emmm_code.php';
include '../../config/emmm_config.php';
include '../../config/emmm_version.php';
include '../../config/emmm_Language.php';
include '../../function/emmm_function.class.php';
include '../../function/emmm/Smarty.class.php';

$emmm_templates = "templates/";
$emmm_templates_c = "../../function/_compile/";
$emmm_cache = "../../function/_cache/";
$emmm_bgcolor = "onmouseover=this.style.backgroundColor='#FFFFCC' onmouseout=this.style.backgroundColor='#ffffff'";

date_default_timezone_set('Asia/Shanghai');
$smarty = new Smarty;
$smarty->caching = false;
$smarty->setTemplateDir($emmm_templates);
$smarty->setCompileDir($emmm_templates_c);
$smarty->setCacheDir($emmm_cache);
$smarty->addPluginsDir(array('../../function/class', '../../function/data',));
$smarty->assign('emmm', '<h1>hello,emmm!</h1>');
$smarty->assign('emmm_access', $emmm_access);
$smarty->assign('version', $emmm_version);
$smarty->assign('versiondate', $emmm_versiondate);
$smarty->assign('webpath', $emmm['webpath']);
$smarty->assign('adminpath', $emmm['adminpath']);
$smarty->assign('templatepath', $emmm_templates);
$smarty->assign('emmm_adminfont', $emmm_adminfont);
$smarty->assign('emmm_bgcolor', $emmm_bgcolor);

function Admin_click($webname = '模板标签调用', $weburl = 'outphp_tag.php')
{
    global $db;
    $query = $db->select("`id`,`COL_Title`,`COL_Url`,`COL_Click`", "`emmm_adminclick`", "where COL_Title = '" . $webname . "'");
    if (!$query) {
        $insert = $db->insert("`emmm_adminclick`", "`COL_Title` = '" . $webname . "',`COL_Url` = '" . $weburl . "',`COL_Click` = 0", "");
    } else {
        $update = $db->update("`emmm_adminclick`", "`COL_Click` = `COL_Click` + 1", "where COL_Title = '" . $webname . "'");
    }
}

?>
