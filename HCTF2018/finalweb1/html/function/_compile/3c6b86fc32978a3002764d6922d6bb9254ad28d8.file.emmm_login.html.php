<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 05:39:48
         compiled from "client/manage/templates/emmm_login.html" */ ?>
<?php /*%%SmartyHeaderCode:11541241925c1261d61e9122-26443868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c6b86fc32978a3002764d6922d6bb9254ad28d8' => 
    array (
      0 => 'client/manage/templates/emmm_login.html',
      1 => 1544793104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11541241925c1261d61e9122-26443868',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1261d6992b06_43418075',
  'variables' => 
  array (
    'templatepath' => 0,
    'emmm_adminfont' => 0,
    'empower' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1261d6992b06_43418075')) {function content_5c1261d6992b06_43418075($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <meta http-equiv="x-ua-compatible" content="ie=7" /><title>Emmm - 后台登录</title><link href="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
images/emmm_login.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="function/plugs/jquery/1.3.2/jquery.min.js"></script></head><body style="background:#fff"><div class="info"></div><form id="form1" name="form1" method="post" action="?emmm_admin=login"><div id="emmm_login"><div id="emmm_login_left"></div><div id="emmm_img"><img src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
images/bg_login.gif"></div><div id="emmm_login_right"><table width="100%" border="0" style="margin-top:15px"><tr><td width="19%" height="25"><div align="right" id="admin_font"><?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['loginname'];?>
：</div></td><td width="81%" height="25"><input name="loginname" type="text" id="txt"></td></tr><tr><td height="25"><div align="right" id="admin_font"><?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['loginpass'];?>
：</div></td><td height="25"><input name="loginpass" type="password" id="txt"></td></tr><tr><td height="25"><div align="right" id="admin_font"><?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['loginkl'];?>
：</div></td><td height="25"><input name="emmm_kouling" type="password" id="txt"></td></tr><tr><td height="25">&nbsp;</td><td height="25"><input type="submit" name="Submit" value="<?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['submit'];?>
" class="emmm-anniu"></td></tr></table></div></div><div id="Copyright"><?php echo $_smarty_tpl->tpl_vars['empower']->value['empowerlogin'];?>
</div><div style="text-align:center;height:20px;color:#666666">后台请用ie8以上浏览器,推荐使用Chrome或火狐浏览器!</div></form></body>
<?php }} ?>
