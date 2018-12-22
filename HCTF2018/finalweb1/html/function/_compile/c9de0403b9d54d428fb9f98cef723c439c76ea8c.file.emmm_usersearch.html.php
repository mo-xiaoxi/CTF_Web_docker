<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:02:45
         compiled from "templates\emmm_usersearch.html" */ ?>
<?php /*%%SmartyHeaderCode:21143750935c1258757a2b38-44178872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9de0403b9d54d428fb9f98cef723c439c76ea8c' => 
    array (
      0 => 'templates\\emmm_usersearch.html',
      1 => 1544617300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21143750935c1258757a2b38-44178872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'search' => 0,
    'op' => 0,
    'emmmpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c125875b17d66_75180485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c125875b17d66_75180485')) {function content_5c125875b17d66_75180485($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\laragon\\www\\Emmm\\function\\emmm\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\laragon\\www\\Emmm\\function\\emmm\\plugins\\modifier.date_format.php';
?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['admintitle'];?>
</title>
<link href="templates/images/emmm_login.css" rel="stylesheet" type="text/css"> 
<?php echo $_smarty_tpl->getConfigVariable('jq172');?>

<script charset="utf-8" src="templates/images/emmm.js"></script>
</head>

<body>
<div style="height:50px;"></div>
<div style="clear:both"></div>
<form id="form1" name="form1" method="POST" action="?emmm_cms=Batch" class="registerform">
<!--第一种形式-->
<div id="tabs0">
 <ul class="menu0" id="menu0">
  <li onclick="setTab(0,0)" class="hover">热门搜索词</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block"><li>
  
    <table width="100%" border="0" cellpadding="10">
      <tr>
        <td colspan="5"><p style="font-size:16px;">在这里您可以看到用户在网站上都搜索了哪些关键词，可以得出用户的喜好和偏爱。根据这些关键词调整商品优化等。</p></td>
        </tr>
      <tr>
	  	<td width="50" bgcolor="#C1E0E1"><div align="center">删?</div></td>
        <td width="50" bgcolor="#C1E0E1"><div align="center">ID</div></td>
        <td bgcolor="#C1E0E1"><div align="left">被搜索的关键词</div></td>
        <td width="150" bgcolor="#C1E0E1"><div align="center">被搜索次数</div></td>
        <td width="150" bgcolor="#C1E0E1"><div align="center">生产时间</div></td>
        <td width="50" bgcolor="#C1E0E1"><div align="center">删除?</div></td>
      </tr>
	  <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
      <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#ffffff,#f5f5f5"),$_smarty_tpl);?>
">
	  	<td><div align="center">
	  	  <input type="checkbox" name="op_b[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
" />
	  	</div></td>
        <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
</div></td>
        <td><?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>

		<?php if ($_smarty_tpl->tpl_vars['op']->value['click']>20) {?>
		&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../skin/hot.gif" border="0" alt="热门词" title="热门词" />
		<?php } elseif (smarty_modifier_date_format($_smarty_tpl->tpl_vars['op']->value['time'],'%Y-%m-%d')==smarty_modifier_date_format(time(),'%Y-%m-%d')) {?>
		&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../skin/new.gif" border="0" alt="今天" title="今天" />
		<?php }?>
		</td>
        <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['op']->value['click'];?>
次</div></td>
        <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['op']->value['time'];?>
</div></td>
        <td><div align="center"><a href="?emmm_cms=del&id=<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
">删除</a></div></td>
      </tr>
	  <?php }
if (!$_smarty_tpl->tpl_vars['op']->_loop) {
?>
	  <tr>
        <td  colspan="5">无记录</td>
      </tr>
	  <?php } ?>
	  <tr>
		<td><div align="center"><input onclick="selectAll()" type="checkbox" name="controlAll" style="controlAll" id="controlAll"/></div></td>
		<td colspan="4"></td>
	  </tr>
	  <tr>
        <td  colspan="5"><input type="submit" name="Submit" value="批量删除" style="width:80px; height:25px; background: #0099FF; color:#FFFFFF; border:0px;" />&nbsp;&nbsp;</td>
      </tr>
	  <tr>
        <td  colspan="5"><?php echo $_smarty_tpl->tpl_vars['emmmpage']->value;?>
</td>
      </tr>
    </table>
  </li>
  </ul>
 </div>
</div>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
