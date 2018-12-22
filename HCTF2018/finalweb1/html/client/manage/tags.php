<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php'; 
Admin_click('模板标签','tags.php');
$smarty->display('tags.html');
?>