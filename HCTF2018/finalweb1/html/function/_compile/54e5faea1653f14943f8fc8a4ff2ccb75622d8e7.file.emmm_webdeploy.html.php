<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:00:48
         compiled from "templates\emmm_webdeploy.html" */ ?>
<?php /*%%SmartyHeaderCode:9910264705c1258007f7650-35342852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e5faea1653f14943f8fc8a4ff2ccb75622d8e7' => 
    array (
      0 => 'templates\\emmm_webdeploy.html',
      1 => 1544617475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9910264705c1258007f7650-35342852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'emmm_web' => 0,
    'emmm_bgcolor' => 0,
    'langlist' => 0,
    'Service' => 0,
    'op' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1258018233a4_14548451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1258018233a4_14548451')) {function content_5c1258018233a4_14548451($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
  <li onclick="setTab(0,0)" class="hover">功能管理</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block"><li>
		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center" class="emmm_newslist">
		  <tr>
		  	<td width="170"><div align="right">网站开关</div></td>
			<td><input name="COL_Weboff" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Weboff']==1) {?>checked="checked"<?php }?> />
			  开 
		      <input type="radio" name="COL_Weboff" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Weboff']==2) {?>checked="checked"<?php }?> />
		      关</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">网站关闭后留言</div></td>
			<td><textarea name="COL_Webofftext" class="wtextarea" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webofftext'];?>
</textarea>			</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">网站首页默认语言</div></td>
			<td>
			  <table width="100%" border="0" cellpadding="10">
                <tr>
                  <td width="16%"><div align="right">网站首页</div></td>
                  <td width="84%">
				  
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
					<input name="COL_Langone" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Home'][0]==$_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang']) {?> checked="checked" <?php }?> /><?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['font'];?>
&nbsp;&nbsp;
					<?php endfor; endif; ?>
					
				  </td>
                </tr>
                <tr>
                  <td><div align="right">会员中心首页</div></td>
                  <td>
				  
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
					<input name="COL_Langtwo" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Home'][1]==$_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang']) {?> checked="checked" <?php }?> /><?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['font'];?>
&nbsp;&nbsp;
					<?php endfor; endif; ?>
				  
				  </td>
                </tr>
                <tr>
                  <td><div align="right">手机网站首页</div></td>
                  <td>
				  
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
					<input name="COL_Langthree" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Home'][2]==$_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang']) {?> checked="checked" <?php }?> /><?php echo $_smarty_tpl->tpl_vars['langlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['font'];?>
&nbsp;&nbsp;
					<?php endfor; endif; ?>
									  
				  </td>
                </tr>
              </table>			</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">翻页设置</div></td>
			<td><table width="100%" border="0" cellpadding="5">
              <tr>
                <td width="12%"><div align="right">文章翻页</div></td>
                <td width="20%"><input name="COL_Webpage[]" type="text" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpage'][0];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                <td width="13%"><div align="right">商品翻页</div></td>
                <td width="55%"><input name="COL_Webpage[]" type="text" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpage'][1];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
              </tr>
              <tr>
                <td><div align="right">图集翻页</div></td>
                <td><input name="COL_Webpage[]" type="text" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpage'][2];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                <td><div align="right">视频翻页</div></td>
                <td><input name="COL_Webpage[]" type="text" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpage'][3];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
              </tr>
              <tr>
                <td><div align="right">下载翻页</div></td>
                <td><input name="COL_Webpage[]" type="text" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpage'][4];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                <td><div align="right">招聘翻页</div></td>
                <td><input name="COL_Webpage[]" type="text" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpage'][5];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
              </tr>
              <tr>
                <td><div align="right">留言板翻页</div></td>
                <td><input name="COL_Webpage[]" type="text" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpage'][6];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                <td><div align="right"></div></td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
		  </tr>
		  <tr>
		    <td valign="top"><div align="right">开启自动分词</div></td>
		    <td><input name="COL_Webfenci" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webfenci']==1) {?>checked="checked"<?php }?> />
开
  <input type="radio" name="COL_Webfenci" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webfenci']==2) {?>checked="checked"<?php }?> />
关 （开启后台添加数据时会微增加服务器压力） </td>
		    </tr>
			<tr>
		    <td><div align="right">浮动客服</div></td>
		    <td>
			  <select name="COL_Webservice">
			  <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Service']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
			    <option value="<?php echo $_smarty_tpl->tpl_vars['op']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webservice']==$_smarty_tpl->tpl_vars['op']->value['url']) {?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['op']->value['url'];?>
</option>
			  <?php } ?>
			  	<option value="close" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webservice']=='close') {?>selected="selected"<?php }?> >关闭</option>
			  </select>
			</td>
		    </tr>
			<tr>
		    <td><div align="right">商品评论控制</div></td>
		    <td><input name="COL_Webpcomment" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpcomment']==1) {?>checked="checked"<?php }?> />
		      开启	
		        <input type="radio" name="COL_Webpcomment" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpcomment']==2) {?>checked="checked"<?php }?> />
		        关闭 
		        <input type="radio" name="COL_Webpcomment" value="3" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpcomment']==3) {?>checked="checked"<?php }?> />
		        登录才可以评论 
		        <input type="radio" name="COL_Webpcomment" value="4" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webpcomment']==4) {?>checked="checked"<?php }?> />
		        只有购买过商品的才可以评论</td>
		    </tr>
			<tr>
		    <td><div align="right">其它评论控制</div></td>
		    <td><input name="COL_Webocomment" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webocomment']==1) {?>checked="checked"<?php }?> />
		      开启	
		        <input type="radio" name="COL_Webocomment" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webocomment']==2) {?>checked="checked"<?php }?> />
		        关闭 
		        <input type="radio" name="COL_Webocomment" value="3" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webocomment']==3) {?>checked="checked"<?php }?> />
		        登录才可以评论</td>
		    </tr>
			<tr>
		    <td><div align="right">访问权限设置</div></td>
		    <td><input name="COL_Webweight" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webweight']==1) {?>checked="checked"<?php }?> />
		      按会员组等级	
		        <input type="radio" name="COL_Webweight" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webweight']==2) {?>checked="checked"<?php }?> />
		        按会员组权重</td>
		    </tr>
			<tr>
		    <td><div align="right">删除附件？</div></td>
		    <td><input name="COL_Webfile" type="radio" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webfile']==2) {?>checked="checked"<?php }?> />
		      当删除数据时连同附件一起删除	
		        <input type="radio" name="COL_Webfile" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webfile']==1) {?>checked="checked"<?php }?> />
		        当删除数据时不删除附件</td>
		    </tr>
			<tr>
		    <td><div align="right">启动UCenter整合</div></td>
		    <td><input name="COL_Ucenter" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Ucenter']==0) {?>checked="checked"<?php }?> />
		      关闭	
		        <input type="radio" name="COL_Ucenter" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Ucenter']==1) {?>checked="checked"<?php }?> />
		        启动</td>
		    </tr>
			<tr>
		    <td><div align="right">搜索间隔时间</div></td>
		    <td><input name="COL_Searchtime" type="text" value="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Searchtime'];?>
" class="win2" />
		      秒</td>
		    </tr>
			<tr>
		  	<td valign="top"><div align="right">过滤敏感字</div></td>
			<td><textarea name="COL_Sensitive" class="wtextarea" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Sensitive'];?>
</textarea>
			多个词请用 | 格开
			</td>
		  </tr>
			<tr>
		    <td><div align="right">留言板控制</div></td>
		    <td><input name="COL_Bookuser" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Bookuser']==0) {?>checked="checked"<?php }?> />
		      游客可以留言	
		        <input type="radio" name="COL_Bookuser" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Bookuser']==1) {?>checked="checked"<?php }?> />
		        会员可以留言</td>
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
