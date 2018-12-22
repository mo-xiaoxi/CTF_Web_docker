<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:02:35
         compiled from "templates\emmm_template.html" */ ?>
<?php /*%%SmartyHeaderCode:12897402405c12586b75d416-91298283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7375cddb3a8aa3c8bb45cf8145e5783a1c6fce4' => 
    array (
      0 => 'templates\\emmm_template.html',
      1 => 1544617300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12897402405c12586b75d416-91298283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'myscandir' => 0,
    'emmm_temp' => 0,
    'emmm_access' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c12586bcaeca9_60370839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c12586bcaeca9_60370839')) {function content_5c12586bcaeca9_60370839($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\laragon\\www\\Emmm\\function\\emmm\\plugins\\modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
<div id="tabs0">
 <ul class="menu0" id="menu0">
  <li class="hover">模板管理使用</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
	  <li>

		        <table width="100%" border="0" cellpadding="10" class="emmm_newslist">
                  <tr>
				  	<td width="20%" bgcolor="#EBEBEB"><div align="center">缩略图</div></td>
					<td width="40%" bgcolor="#EBEBEB">模板说明</td>
                    <td width="20%" bgcolor="#EBEBEB">模板路径</td>
                    <td width="20%" bgcolor="#EBEBEB">操作</td>
                  </tr>
				  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['myscandir']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['name'] = 'op';
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total']);
?>
                  <tr>
				  	<td><div align="center"><img src="<?php if (file_exists($_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['img'])) {?><?php echo $_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'];?>
/index.jpg<?php } else { ?>../../skin/noimage.png<?php }?>" style="width:175px; height:195px; border:0px;" /></div></td>
					<td valign="top" style="font-size:14px;"><?php echo $_smarty_tpl->getSubTemplate ("../".((string)$_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['author']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </td>
					<td style="font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'];?>
/</td>
					<?php if (smarty_modifier_replace($_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'],'../../templates/','')==$_smarty_tpl->tpl_vars['emmm_temp']->value['COL_Temppath']) {?>
					<td><font color="#009900">正在使用此模板</font></td>
					<?php } else { ?>

						<?php if (smarty_modifier_replace($_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'],'../../templates/','')=='user') {?>
						<td>[会员中心模板]</td>
						<?php } elseif (smarty_modifier_replace($_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'],'../../templates/','')=='wap') {?>
						<td>[手机网站模板]</td>
						<?php } elseif (smarty_modifier_replace($_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'],'../../templates/','')=='404.html') {?>
						<td>[404模板]</td>
						<?php } else { ?>
						<td><a href="?emmm_cms=edit&temp=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'],'../../templates/','');?>
">[使用此模板]</a></td>
						<?php }?>


					<?php }?>
                  </tr>
				  <?php endfor; else: ?>
				  <tr>
                    <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['emmm_access']->value;?>
</td>
                  </tr>
				  <?php endif; ?>
                </table>
				
	  </li>
  </ul>

 </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
