<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:09:30
         compiled from "templates\emmm_usergroup.html" */ ?>
<?php /*%%SmartyHeaderCode:7459979565c125a0a0e96b1-15548874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fffa276027b8c371ae01138b1b4abbdcee7272a' => 
    array (
      0 => 'templates\\emmm_usergroup.html',
      1 => 1544617475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7459979565c125a0a0e96b1-15548874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'Userleve' => 0,
    'emmm_access' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c125a0a3e8235_72614228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c125a0a3e8235_72614228')) {function content_5c125a0a3e8235_72614228($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['admintitle'];?>
</title>
<link href="templates/images/emmm_login.css" rel="stylesheet" type="text/css"> 
<?php echo $_smarty_tpl->getConfigVariable('jq172');?>

<script src="../../function/plugs/layer/layer.min.js"></script>
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
  <li class="hover">用户组管理</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
	  <li>

		        <table width="100%" border="0" cellpadding="10" class="emmm_newslist">
                  <tr>
				  	<td width="5%" bgcolor="#EBEBEB"><div align="center">ID</div></td>
                    <td width="30%" bgcolor="#EBEBEB">用户组名称</td>
					<td width="20%" bgcolor="#EBEBEB">用户组权重</td>
                    <td width="20%" bgcolor="#EBEBEB">操作</td>
                  </tr>
				  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Userleve']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				  	<td><div align="center"><font style="background:#009933; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['Userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
</font></div></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['Userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['weight'];?>
</td>
                    <td><a href="javascript:dialog(<?php echo $_smarty_tpl->tpl_vars['Userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['Userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['name'];?>
','<?php echo $_smarty_tpl->tpl_vars['Userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['weight'];?>
',<?php echo $_smarty_tpl->tpl_vars['Userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['open'];?>
)">编辑</a></td>
                  </tr>
				  <?php endfor; else: ?>
				  <tr>
                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['emmm_access']->value;?>
</td>
                  </tr>
				  <?php endif; ?>
                </table>

	  </li>
  </ul>
 </div>
</div>
<script>
//弹出一个页面层
function dialog(id,name,weight,open){
    $.layer({
        type: 1,
        title: '编辑ID:'+id,
        shade: [0],
		border: [5, 0.3, '#000'],
        area: ['300px', '300px'],
        page: {html: '<form id="form1" name="form1" method="POST" action="?emmm_cms=edit&id='+id+'" class="registerform"><br><br>&nbsp;&nbsp;&nbsp;&nbsp;名称：<input type="text" name="COL_Userlevename" value="'+name+'" /><br><br>&nbsp;&nbsp;&nbsp;&nbsp;权重：<input type="text" name="COL_Userweight" value="'+weight+'" /><br><br>&nbsp;&nbsp;&nbsp;&nbsp;开放：<input type="text" name="COL_Useropen" value="'+open+'" /> <br >&nbsp;&nbsp;&nbsp;&nbsp;=0 表示开放 =1 表示整组用户锁定(无法登录)<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="提交" class="emmm-anniu"/></form>'}
    });
};
</script>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
