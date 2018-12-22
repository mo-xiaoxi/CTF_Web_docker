<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:02:34
         compiled from "templates\emmm_templatepages.html" */ ?>
<?php /*%%SmartyHeaderCode:13768773805c12586a1bde74-98400099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2dcaa280a9a28e49e94ec68c5c9f9cbeaa4e8e4' => 
    array (
      0 => 'templates\\emmm_templatepages.html',
      1 => 1544617475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13768773805c12586a1bde74-98400099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'emmm_web' => 0,
    'emmm_bgcolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c12586a3c89e6_50968381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c12586a3c89e6_50968381')) {function content_5c12586a3c89e6_50968381($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['admintitle'];?>
</title>
<link href="templates/images/emmm_login.css" rel="stylesheet" type="text/css"> 
<?php echo $_smarty_tpl->getConfigVariable('jq172');?>

<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
function setTab(m,n){
 var tli=document.getElementById("menu"+m).getElementsByTagName("li");
 var mli=document.getElementById("main"+m).getElementsByTagName("ul");
 for(i=0;i<tli.length;i++){
  tli[i].className=i==n?"hover":"";
  mli[i].style.display=i==n?"block":"none";
 }
}
//-->
</script>

</head>

<body>
<div style="height:50px;"></div>
<div style="clear:both"></div>
<form id="form1" name="form1" method="POST" action="?emmm_cms=edit" class="registerform">
<!--第一种形式-->
<div id="tabs0">
 <ul class="menu0" id="menu0">
  <li onclick="setTab(0,0)" class="hover">翻页按钮设置</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block"><li>
		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center" class="emmm_newslist">
		  <tr>
		  	<td width="170"><div align="right">显示<br />(上一页下一页)</div></td>
			<td><input name="COL_Pagestype" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Pagestype']==0) {?>checked="checked"<?php }?> />
			  否&nbsp;&nbsp;
		      <input type="radio" name="COL_Pagestype" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Pagestype']==1) {?>checked="checked"<?php }?> />
		      是</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">翻页文字</div></td>
			<td><input type="text" name="COL_Pagefont"<?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 class="win inputxt" value="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Pagefont'];?>
"></td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">翻页按钮<br />CSS样式</div></td>
			<td><textarea name="COL_Pages"<?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 style="width:70%; height:300px;"><?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Pages'];?>
</textarea></td>
		  </tr>
		</table>
  </li></ul>
 </div>
</div>
<table width="90%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center">
  <tr>
	<td><input type="submit" name="submit" value="提 交" class="emmm-anniu"/></td>
  </tr>
</table>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
