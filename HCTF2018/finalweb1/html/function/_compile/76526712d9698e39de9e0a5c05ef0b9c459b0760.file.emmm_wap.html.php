<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:02:51
         compiled from "templates\emmm_wap.html" */ ?>
<?php /*%%SmartyHeaderCode:17644840135c12587bd921e2-72430254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76526712d9698e39de9e0a5c05ef0b9c459b0760' => 
    array (
      0 => 'templates\\emmm_wap.html',
      1 => 1544617475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17644840135c12587bd921e2-72430254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'emmm_wap' => 0,
    'emmm_bgcolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c12587c130889_96131955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c12587c130889_96131955')) {function content_5c12587c130889_96131955($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
  <li onclick="setTab(0,0)" class="hover">手机网站信息</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block"><li>
  <form id="form1" name="form1" method="POST" action="?emmm_cms=edit" class="registerform">
		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center">
		  <tr>
		  	<td width="170"><div align="right">网站标题</div></td>
			<td><input name="COL_Website" type="text" value="<?php echo $_smarty_tpl->tpl_vars['emmm_wap']->value['COL_Website'];?>
" class="win inputxt" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 datatype="*" nullmsg="网站标题是必填项!"/><font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">网站Logo</div></td>
			<td><input name="COL_Weblogo" type="text" id="upload" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 value="<?php echo $_smarty_tpl->tpl_vars['emmm_wap']->value['COL_Weblogo'];?>
" class="win"  />&nbsp;
			<input type="button" id="image3" value="上传" style="width:100px; height:25px; line-height:25px; background:#0099CC; color:#FFFFFF; border:0px;" />
			
		<link rel="stylesheet" href="../../function/editor/themes/default/default.css" />
		<script src="../../function/editor/kindeditor.js"></script>
		<script src="../../function/editor/lang/zh_CN.js"></script>
		<script>
			KindEditor.ready(function(K) {
				var editor = K.editor({
					allowFileManager : true
				});
				K('#image3').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							showRemote : false,
							imageUrl : K('#upload').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#upload').val(url);
								editor.hideDialog();
							}
						});
					});
				});
			});
		</script>
		
		<p>&nbsp;</p>
		<p><img src="../../<?php echo $_smarty_tpl->tpl_vars['emmm_wap']->value['COL_Weblogo'];?>
" border="0"></p>
		
			</td>
		  </tr>
		  <tr>
		  	<td><div align="right">网站关键词</div></td>
			<td><input name="COL_Webkeywords" type="text" value="<?php echo $_smarty_tpl->tpl_vars['emmm_wap']->value['COL_Webkeywords'];?>
" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">网站描述</div></td>
			<td><textarea name="COL_Webdescriptions" cols="50" rows="5" class="wtextarea" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
><?php echo $_smarty_tpl->tpl_vars['emmm_wap']->value['COL_Webdescriptions'];?>
</textarea></td>
		  </tr>
		  <tr>
		  	<td width="170" valign="top"><div align="right">允许电脑浏览手机网站？</div></td>
			<td>
			
			<input name="COL_Weburl" type="radio" value="yes" <?php if ($_smarty_tpl->tpl_vars['emmm_wap']->value['COL_Weburl']=='yes') {?>checked="checked"<?php }?> />是&nbsp;&nbsp;
			<input name="COL_Weburl" type="radio" value="no" <?php if ($_smarty_tpl->tpl_vars['emmm_wap']->value['COL_Weburl']=='no') {?>checked="checked"<?php }?> />否
			
			<div style="clear:both;"></div>
			<div style="background:url(../../skin/admintitlebg.gif) no-repeat; width:610px; height:60px; float:left; padding:30px 0px 0px 20px;">
				<p>模板中必须包含[.$mobile.]标签！</p>
			</div>
			
			
			</td>
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
