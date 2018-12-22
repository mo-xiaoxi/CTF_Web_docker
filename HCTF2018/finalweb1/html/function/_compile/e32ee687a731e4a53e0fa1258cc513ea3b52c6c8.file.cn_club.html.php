<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:34:16
         compiled from "templates\default\cn\cn_club.html" */ ?>
<?php /*%%SmartyHeaderCode:10789465635c138728d13025-30035079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e32ee687a731e4a53e0fa1258cc513ea3b52c6c8' => 
    array (
      0 => 'templates\\default\\cn\\cn_club.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10789465635c138728d13025-30035079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'webpath' => 0,
    'club' => 0,
    'op' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1387290f5194_83805909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1387290f5194_83805909')) {function content_5c1387290f5194_83805909($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\laragon\\www\\ourphp\\function\\emmm\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
 - Powered by ourphp</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webkeywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webdescriptions'];?>
"/>
<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wrap">
  <div class="main">


<div class="fyRight" style="padding:5px; width:960px;">
<div class="mainRightMain" style="width:960px;">



  <table width="100%" border="1" cellpadding="10" bordercolor="#e7eff3" bgcolor="#ffffff" style="text-align:left; font-size:12px; border-collapse:collapse; padding:0px;">
    <tr style="background:url(<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/clubgb.png) repeat-x;">
      <td style="padding:0px 0px 0px 10px; height:31px;"><div align="left">版块名称</div></td>
      <td style="padding:0px; height:31px;"><div align="center">成立时间</div></td>
    </tr>
	<?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['club']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['op']->key;
?>
    <tr>
      <td height="50">
	  <p style="font-size:24px; float:left; color:#333333; line-height:50px;"><a href="<?php echo $_smarty_tpl->tpl_vars['op']->value['url'];?>
">【<?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>
】</a></p>
	  <p style="font-size:12px; color:#999999; float:left; line-height:50px; color: #FF6600;">(<?php echo $_smarty_tpl->tpl_vars['op']->value['number'];?>
条留言)</p>
	  <div style="clear:both;"></div>
	  <p style="font-size:12px; color:#999999; padding-left:10px;"><?php echo $_smarty_tpl->tpl_vars['op']->value['content'];?>
</p>
	  </td>
      <td><div align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['op']->value['time'],"%Y-%m-%d %H:%I:%S");?>
</div></td>
    </tr>
	<?php } ?>
  </table>



    </div>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
