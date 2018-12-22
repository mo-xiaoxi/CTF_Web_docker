<?php
include '../../config/emmm_code.php';
include '../../config/emmm_config.php';
include '../../config/emmm_version.php';
include '../../config/emmm_Language.php';
include '../../function/emmm_function.class.php';
include '../../function/emmm/Smarty.class.php';
include './emmm_system.class.php';

include '../../function/emmm_page.class.php';
include '../../function/emmm_list.class.php';
include '../../function/emmm_search.class.php';

if($smarty->templateExists($emmm_templates."/".$lang."/".$lang."_search.html")){
$smarty->display($lang.'/'.$lang.'_search.html');
	}else{
echo $emmm_tempno;
}
?>