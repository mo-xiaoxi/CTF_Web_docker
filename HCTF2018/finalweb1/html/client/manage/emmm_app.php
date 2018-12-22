<?php

include 'emmm_admin.php';
include 'emmm_checkadmin.php'; 

//这里是Emmm的应用商店
//在这里,您可以浏览Emmm最新,最酷的应用功能
//进入应用商店我们只读取了Emmm版本信息,用于判断你适合什么版本的插件和模板
//不会对你的网站造成任何威胁,如果不想使用应用商店功能
//可以把$app = 1 ;改成 $app = 2 ; 就关闭了
//谢谢合作




$app = 1 ; //1开启 2关闭































































if($app == 1){
	
	$rs = $db-> select("`COL_Weburl`","`emmm_web`","where id = 1"); 
	$appurl = "http://vidar.club/app/key.php?url=".$rs[0]."&p=".$emmm_empower."&v=".$emmm_versiondate;
	header("location: ".$appurl);
	
}else{
	
	echo '未开启应用商店!';
	
}
?>
