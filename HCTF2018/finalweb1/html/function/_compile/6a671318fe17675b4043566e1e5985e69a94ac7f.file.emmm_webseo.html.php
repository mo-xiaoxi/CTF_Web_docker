<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:02:44
         compiled from "templates\emmm_webseo.html" */ ?>
<?php /*%%SmartyHeaderCode:95846725c125874137c20-81803455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a671318fe17675b4043566e1e5985e69a94ac7f' => 
    array (
      0 => 'templates\\emmm_webseo.html',
      1 => 1544617475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95846725c125874137c20-81803455',
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
  'unifunc' => 'content_5c12587441b566_46538056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c12587441b566_46538056')) {function content_5c12587441b566_46538056($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
  <li onclick="setTab(0,0)" class="hover">网站相关优化</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block"><li>
		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center" class="emmm_newslist">
		  <tr>
		  	<td width="170" valign="top"><div align="right">伪静态</div></td>
			<td><input name="COL_Webrewrite" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webrewrite']==1) {?>checked="checked"<?php }?> />
			  开启 
		      <input type="radio" name="COL_Webrewrite" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webrewrite']==2) {?>checked="checked"<?php }?> />
		      关闭
			  <div style="clear:both;"></div>
			<div style="background:url(../../skin/admintitlebg.gif) no-repeat; width:610px; height:60px; float:left; padding:30px 0px 0px 20px;">
				<p>1.开启网站伪静态功能，对网站的安全或是搜索引擎的收录都有好处</p>
				<p>2.开启伪静态功能需要你的服务器支持伪静态组件</p>
				<p>3.伪静态的相关规则文件保存在：\function\Rewrite\内，复制到根目录即可。</p>
			</div>
			  </td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">关健词优化</div></td>
			<td>
			<input name="COL_Webkeywords" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webkeywords']==1) {?>checked="checked"<?php }?> />
			  开启 
		      <input type="radio" name="COL_Webkeywords" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webkeywords']==2) {?>checked="checked"<?php }?> />
		      关闭
			  <input type="radio" name="COL_Webkeywords" value="3" <?php if ($_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webkeywords']==3) {?>checked="checked"<?php }?> />
		      双加
			  <div style="clear:both;"></div>
			<div style="background:url(../../skin/admintitlebg.gif) no-repeat; width:610px; height:60px; float:left; padding:30px 0px 0px 20px;">
				<p>1.开启后如果某条数据无单独关键词时，就调用全局关键词数据</p>
				<p>2.关闭后不管这条数据有无单独关键词，都不调用全局关健词数据</p>
				<p>3.双加后系统将数据中的单独关键词和全局关健词数据结合在一起输出</p>
			</div>
			</td>
		  </tr>
		   <tr>
		  	<td valign="top"><div align="right">全局关健词</div></td>
			<td>
			<textarea name="COL_Webkeywordsto" cols="50" rows="5" class="wtextarea" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
><?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webkeywordsto'];?>
</textarea>
			</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">全局描述</div></td>
			<td>
			<textarea name="COL_Webdescriptions" cols="50" rows="5" class="wtextarea" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
><?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['COL_Webdescriptions'];?>
</textarea>
			</td>
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
