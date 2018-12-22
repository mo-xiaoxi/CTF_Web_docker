<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:09:44
         compiled from "templates\emmm_usermessage.html" */ ?>
<?php /*%%SmartyHeaderCode:9754377835c125a186bc239-43518225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f86e53811027323979ea0bbb3cc84d8158a3a79' => 
    array (
      0 => 'templates\\emmm_usermessage.html',
      1 => 1544617475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9754377835c125a186bc239-43518225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'email' => 0,
    'emmm_access' => 0,
    'emmmpage' => 0,
    'emmm_bgcolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c125a18a678e5_17026077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c125a18a678e5_17026077')) {function content_5c125a18a678e5_17026077($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
  <li onclick="setTab(0,0)" class="hover">邮件列表</li>
  <li onclick="setTab(0,1)">发送新邮件</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
	  <li>
		<div class="emmm_newslist">
		        <table width="100%" border="0" cellpadding="10" class="emmm_newslist">
                  <tr>
				  	<td width="5%" bgcolor="#EBEBEB"><div align="center">ID</div></td>
                    <td width="15%" bgcolor="#EBEBEB">发送人账号</td>
					<td width="15%" bgcolor="#EBEBEB">接收人账号</td>
					<td width="40%" bgcolor="#EBEBEB">邮件内容</td>
					<td width="15%" bgcolor="#EBEBEB">时间</td>
                    <td width="10%" bgcolor="#EBEBEB">操作</td>
                  </tr>
				  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['email']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				  	<td><div align="center"><font style="background:#009933; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
</font></div></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['send'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['collect'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['content'];?>
<?php if ($_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['class']==1) {?>(未读)<?php } else { ?>(已读)<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['time'];?>
</td>
                    <td><a href="?emmm_cms=del&id=<?php echo $_smarty_tpl->tpl_vars['email']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
" onclick="javascript:return confirm('确认删除吗?')">删除</a></td>
                  </tr>
				  <?php endfor; else: ?>
				  <tr>
                    <td colspan="6"><?php echo $_smarty_tpl->tpl_vars['emmm_access']->value;?>
</td>
                  </tr>
				  <?php endif; ?>
				  
                  <tr>
                    <td colspan="6"><?php echo $_smarty_tpl->tpl_vars['emmmpage']->value;?>
</td>
                  </tr>
                </table>
		</div>
	  </li>
  </ul>
  
  <ul>
	  <li>
		<form id="form1" name="form1" method="POST" action="?emmm_cms=add" class="registerform">
		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center">
		  <tr>
		  	<td><div align="right">发送人</div></td>
			<td>管理员<input type="hidden" name="COL_Usersend" value="管理员" /></td>
		  </tr>
		  <tr>
		  	<td><div align="right">发送类型</div></td>
			<td>
			<span onclick="doradio()">
			<input name="COL_Userclass" type="radio" value="1" id="" checked="checked" />单一发送&nbsp;&nbsp;<input name="COL_Userclass" type="radio" value="2" id="全体会员" />全体发送
			</span>
			</td>
		  </tr>
		  <tr>
		  	<td><div align="right">收件人</div></td>
			<td><input name="COL_Usercollect" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 id="searchid" datatype="*" nullmsg="收件人是必填项!"  onchange="dochange(this.value)" /><font color=red> (*)</font>&nbsp;&nbsp;输入会员的账户，email或手机号格式&nbsp;&nbsp;[<a href="javascript:dialog('usersearch')">查找</a>]</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">邮件内容</div></td>
			<td><textarea name="COL_Usercontent" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 class="wtextarea" style="width:80%; height:200px;"></textarea>
			<?php echo $_smarty_tpl->getSubTemplate ("emmm_editor.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
		<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="COL_Usercontent"]', {
					resizeType : 1,
					allowPreviewEmoticons : false,
					allowImageUpload : true,
					items : [
						'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link']
				});
			});
		</script>
		
			</td>
		  </tr>
		  
		   <tr>
		   	<td><input type="hidden" name="COL_Usersource" value="后台添加" /></td>
			<td><input type="submit" name="submit" value="提 交" class="emmm-anniu"/></td>
		  </tr>
		</table>
		</form>
	  </li>
  </ul>
 </div>
</div>
<script>
function dochange(str)
{
var obj=document.getElementsByTagName("input")
for(var i=0;i<obj.length;i++)
if(obj[i].type=="radio" && obj[i].value==str)
obj[i].checked=true;
}
function doradio(){
var obj=document.getElementsByTagName("input")
for(var i=0;i<obj.length;i++)
if(obj[i].type=="radio" && obj[i].checked)
document.all.COL_Usercollect.value=obj[i].id
}

function dialog(id){
    $.layer({
        type: 2,
        title: '搜索',
        shade: [0],
		border: [5, 0.3, '#000'],
        area: ['600px', '300px'],
		iframe:{src: 'emmm_search.php?emmm='+id,scrolling: 'yes'}
    });
};
</script>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
