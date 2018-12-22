<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 21:22:09
         compiled from "templates/emmm_bak.html" */ ?>
<?php /*%%SmartyHeaderCode:14965016995c13ae81127e48-64350973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df56111e53d11b9e3d85841dfd5b367e74c0056' => 
    array (
      0 => 'templates/emmm_bak.html',
      1 => 1544787928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14965016995c13ae81127e48-64350973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'myscandir' => 0,
    'emmm_access' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c13ae812b2721_73767588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c13ae812b2721_73767588')) {function content_5c13ae812b2721_73767588($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
  <li onclick="setTab(0,0)" class="hover">数据库备份</li>
  <li onclick="setTab(0,1)">数据库恢复</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
	  <li>
		<table width="90%" border="0" align="center" cellpadding="20">
          <tr>
            <td><div align="center"><input type=button onclick=window.open("emmm_bakgo.php","_self") value="点击开始备份数据库" style="width:200px; height:60px; background: #0099CC; color:#FFFFFF; border:0px;"></div></td>
          </tr>
        </table>
	  </li>
  </ul>

  <ul>
	  <li>

		        <table width="100%" border="0" cellpadding="10" class="emmm_newslist">
                  <tr>
				  	<td width="5%" bgcolor="#EBEBEB"><div align="center">行号</div></td>
                    <td width="10%" bgcolor="#EBEBEB">备份路径</td>
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
				  <?php if ($_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url']=='../../function/backup/数据库说明.txt'||$_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url']=='../../function/backup/index.htm') {?>
                  <tr>
				  	<td><div align="center"><font style="background:#009933; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['i'];?>
</font></div></td>
					<td><?php echo $_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'];?>
"  target="_blank">[打开]</a></td>
                  </tr>				  
				  <?php } else { ?>
                  <tr>
				  	<td><div align="center"><font style="background:#009933; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['i'];?>
</font></div></td>
					<td><?php echo $_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'];?>
/</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['myscandir']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['url'];?>
/index.php"  target="_blank">[恢复该数据]</a></td>
                  </tr>
				  <?php }?>
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
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
