<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:05:40
         compiled from "templates\emmm_lang.html" */ ?>
<?php /*%%SmartyHeaderCode:248875705c1259249d9ef4-88378133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cdc5047c16855f127e1357bbaef345d3f36d3aa' => 
    array (
      0 => 'templates\\emmm_lang.html',
      1 => 1544617474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248875705c1259249d9ef4-88378133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'langlist' => 0,
    'emmm_bgcolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c125924f3c7d4_69375991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c125924f3c7d4_69375991')) {function content_5c125924f3c7d4_69375991($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
<!--第一种形式-->
<div id="tabs0">
 <ul class="menu0" id="menu0">
  <li onclick="setTab(0,0)" class="hover">列 表</li>
  <li onclick="setTab(0,1)">添 加</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
  	<li>
		<div class="emmm_newslist">
		        <table width="100%" border="0" cellpadding="10" class="emmm_newslist">
                  <tr>
                    <td width="10%" bgcolor="#EBEBEB">唯一标识</td>
                    <td width="10%" bgcolor="#EBEBEB">文字注明</td>
                    <!--<td width="10%" bgcolor="#EBEBEB">默认</td>-->
					<td width="20%" bgcolor="#EBEBEB">标题</td>
					<td width="20%" bgcolor="#EBEBEB">关键词</td>
					<td width="20%" bgcolor="#EBEBEB">网站描述</td>
					<td width="10%" bgcolor="#EBEBEB">操作</td>
                  </tr>
				  
				  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['langlist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <td><?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['font'];?>
</td>
					<!--<td><?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['default'];?>
</td>-->
					<td>
					<?php if ($_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang']!='cn') {?>
						<?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['langtitle'];?>

					<?php } else { ?>
						---
					<?php }?>
					</td>
					<td>
					<?php if ($_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang']!='cn') {?>
						<?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['keywords'];?>

					<?php } else { ?>
						---
					<?php }?>
					</td>
					<td>
					<?php if ($_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang']!='cn') {?>
						<?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['description'];?>

					<?php } else { ?>
						---
					<?php }?>
					</td>
                    <td>
					<?php if ($_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang']!='cn') {?>
					<a href="emmm_langview.php?id=<?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
">编辑</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="?emmm_cms=del&id=<?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
" onclick="javascript:return confirm('确认删除吗?')">删除</a></td>
					<?php }?>
                  </tr>
				   <?php endfor; endif; ?>

				  
                </table>
		</div>
  </li>
 </ul>
  <ul><li>
  <form id="form1" name="form1" method="POST" action="?emmm_cms=add" class="registerform">
		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center">
		  <tr>
		  	<td width="170" valign="top"><div align="right">唯一标识</div></td>
			<td><input name="COL_Lang" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 datatype="*" nullmsg="唯一标识是必填项!"/> <font color=red> (*)</font>
				<br />
				<p>唯一标识是系统用来判断网站语言的唯一标识，不可以有重复，不可以是数字，不可以是中文。</p>
				<p>地址栏&nbsp;?<font color="#FF0000">cn</font>-article-2.html&nbsp;其中红色部份就是网站的唯一标识。</p>
				<p>比如英文可输入en 德语可输入de 日本语可输入jp </p>
			</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">文字注明</div></td>
			<td><input name="COL_Font" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 datatype="*" nullmsg="文字注明是必填项!"/> <font color=red> (*)</font>
			
				<br />
				<p>与上面的唯一标识对应即可，无太多要求，自已明白就行。</p>
				<p>例如：唯一标识你输入的是 en(代表英文) 那么文字注明的 输入 英文 即可</p>
			
			</td>
		  </tr>
		  <tr>
		  	<td><div align="right">备注</div></td>
			<td><textarea name="COL_Note" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 class="wtextarea" /></textarea></td>
		  </tr>
		  <tr>
		  	<td><div align="right">网站标题</div></td>
			<td><input name="COL_Langtitle" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 datatype="*" nullmsg="网站标题是必填项!"/> <font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td><div align="right">网站关键词</div></td>
			<td><input name="COL_Langkeywords" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /> </td>
		  </tr>
		  <tr>
		  	<td><div align="right">网站描述</div></td>
			<td><textarea name="COL_Langdescription" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 class="wtextarea" /></textarea></td>
		  </tr>
		  <tr>
		  	<td></td>
			<td><input type="submit" name="submit" value="提 交" class="emmm-anniu"/></td>
		  </tr>
  		</table>
	</form>
  </li></ul>
 </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
