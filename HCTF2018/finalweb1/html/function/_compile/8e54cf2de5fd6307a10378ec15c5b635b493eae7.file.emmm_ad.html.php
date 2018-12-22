<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:17:26
         compiled from "templates\emmm_ad.html" */ ?>
<?php /*%%SmartyHeaderCode:15992162445c125be65c1ee1-66709885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e54cf2de5fd6307a10378ec15c5b635b493eae7' => 
    array (
      0 => 'templates\\emmm_ad.html',
      1 => 1544617474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15992162445c125be65c1ee1-66709885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'ADList' => 0,
    'emmm_ad' => 0,
    'emmm_bgcolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c125be6d29e70_67989812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c125be6d29e70_67989812')) {function content_5c125be6d29e70_67989812($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
  <li onclick="setTab(0,0)" class="hover">广告列表</li>
  <li onclick="setTab(0,1)">漂浮广告</li>
  <li onclick="setTab(0,2)">右下角广告</li>
  <li onclick="setTab(0,3)">对联广告</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
	  <li>
		<div class="emmm_newslist">
		        <table width="100%" border="0" cellpadding="10" class="emmm_newslist">
                  <tr>
				  	<td width="10%" bgcolor="#EBEBEB"><div align="center">ID</div></td>
                    <td width="20%" bgcolor="#EBEBEB">图示</td>
					<td width="20%" bgcolor="#EBEBEB">名称</td>
					<td width="30%" bgcolor="#EBEBEB">显示位置</td>
                    <td width="20%" bgcolor="#EBEBEB">操作</td>
                  </tr>
				  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ADList']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				  	<td><div align="center"><font style="background:#009933; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['ADList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
</font></div></td>
					<td><img src="<?php echo $_smarty_tpl->tpl_vars['ADList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['img'];?>
" border="0" /></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['ADList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['ADList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['position'];?>
</td>
                    <td><a href="emmm_adview.php?id=<?php echo $_smarty_tpl->tpl_vars['ADList']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
">编辑</a></td>
                  </tr>
				  <?php endfor; endif; ?>
				  <tr>
                    <td colspan="5"></td>
                  </tr>
				 
                </table>
		</div>
	  </li>
  </ul>
		<form id="form1" name="form1" method="POST" action="?emmm_cms=edit&id=5" class="registerform">
  <ul>
	  <li>

		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center">
		<tr>
			<td><div align="right">状态</div></td>
			<td><input name="COL_Adstateo" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adstateo']==1) {?>checked="checked"<?php }?> />
			  显示 <input type="radio" name="COL_Adstateo" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adstateo']==2) {?>checked="checked"<?php }?> />关闭</td>
		</tr>
		  <tr>
		  	<td><div align="right">广告图片</div></td>
			<td><input name="COL_Adpiaofui" type="text" class="win" value="<?php echo $_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adpiaofui'];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 id="upload" />&nbsp;
			<input type="button" id="image3" value="上传" style="width:100px; height:25px; line-height:25px; background:#0099CC; color:#FFFFFF; border:0px;" />
			<?php echo $_smarty_tpl->getSubTemplate ("emmm_editor.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
			
			
			<font color=red> (*)</font>
			</td>
		  </tr>
		  <tr>
		  	<td><div align="right">链接地址</div></td>
			<td><input name="COL_Adpiaofuu" type="text" class="win" value="<?php echo $_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adpiaofuu'];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
  /><font color=red> (*)</font>									
			</td>
		  </tr>
		   <tr>
		   	<td></td>
			<td><input type="submit" name="submit" value="提 交" class="emmm-anniu"/></td>
		  </tr>
		</table>

		
	  </li>
  </ul>
  
  <ul>
	  <li>

		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center">
		<tr>
			<td><div align="right">状态</div></td>
			<td><input name="COL_Adstatet" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adstatet']==1) {?>checked="checked"<?php }?> />
			  显示 <input type="radio" name="COL_Adstatet" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adstatet']==2) {?>checked="checked"<?php }?> />关闭</td>
		</tr>
		  <tr>
		  	<td><div align="right">广告标题</div></td>
			<td><input name="COL_Adyouxiat" type="text" class="win" value="<?php echo $_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adyouxiat'];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 />
			<font color=red> (*)</font>
			</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">弹出框内容</div></td>
			<td><textarea name="COL_Adyouxiaf" class="wtextarea" style="width:80%; height:150px;" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adyouxiaf'];?>
</textarea><font color=red> (*)</font>									
			</td>
		  </tr>
		   <tr>
		   	<td></td>
			<td><input type="submit" name="submit" value="提 交" class="emmm-anniu"/></td>
		  </tr>
		</table>
				
	  </li>
  </ul>
  
  <ul>
	  <li>

		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center">
		<tr>
			<td><div align="right">状态</div></td>
			<td><input name="COL_Adstates" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adstates']==1) {?>checked="checked"<?php }?> />
			  显示 <input type="radio" name="COL_Adstates" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adstates']==2) {?>checked="checked"<?php }?> />关闭</td>
		</tr>
		  <tr>
		  	<td><div align="right">左侧对联图片</div></td>
			<td><input name="COL_Adduilianli" type="text" class="win" value="<?php echo $_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adduilianli'];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 id="upload1" />&nbsp;
			<input type="button" id="image4" value="上传" style="width:100px; height:25px; line-height:25px; background:#0099CC; color:#FFFFFF; border:0px;" />
			<script>
			KindEditor.ready(function(K) {
				var editor = K.editor({
					allowFileManager : true
				});
				K('#image4').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							showRemote : false,
							imageUrl : K('#upload1').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#upload1').val(url);
								editor.hideDialog();
							}
						});
					});
				});
			});
		</script>
			<font color=red> (*)</font>
			</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">左侧对联链接地址</div></td>
			<td>
			<input name="COL_Adduilianlu" type="text" class="win" value="<?php echo $_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adduilianlu'];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /><font color=red> (*)</font>									
			</td>
		  </tr>
		  		  <tr>
		  	<td><div align="right">右侧对联图片</div></td>
			<td><input name="COL_Adduilianri" type="text" class="win" value="<?php echo $_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adduilianri'];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 id="upload2" />&nbsp;
			<input type="button" id="image5" value="上传" style="width:100px; height:25px; line-height:25px; background:#0099CC; color:#FFFFFF; border:0px;" />
			<script>
			KindEditor.ready(function(K) {
				var editor = K.editor({
					allowFileManager : true
				});
				K('#image5').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							showRemote : false,
							imageUrl : K('#upload2').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#upload2').val(url);
								editor.hideDialog();
							}
						});
					});
				});
			});
		</script>
			<font color=red> (*)</font>
			</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">右侧对联链接地址</div></td>
			<td>
			<input name="COL_Adduilianru" type="text" class="win" value="<?php echo $_smarty_tpl->tpl_vars['emmm_ad']->value['COL_Adduilianru'];?>
" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /><font color=red> (*)</font>									
			</td>
		  </tr>
		   <tr>
		   	<td></td>
			<td><input type="submit" name="submit" value="提 交" class="emmm-anniu"/></td>
		  </tr>
		</table>
				
	  </li>
  </ul>
		</form>
 </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
