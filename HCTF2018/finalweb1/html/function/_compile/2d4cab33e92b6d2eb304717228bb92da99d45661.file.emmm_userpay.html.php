<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:09:47
         compiled from "templates\emmm_userpay.html" */ ?>
<?php /*%%SmartyHeaderCode:7730611665c125a1bb2b074-55774715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d4cab33e92b6d2eb304717228bb92da99d45661' => 
    array (
      0 => 'templates\\emmm_userpay.html',
      1 => 1544617475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7730611665c125a1bb2b074-55774715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'pay' => 0,
    'emmm_access' => 0,
    'emmmpage' => 0,
    'COL_Adminname' => 0,
    'emmm_bgcolor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c125a1c041642_40575541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c125a1c041642_40575541')) {function content_5c125a1c041642_40575541($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
  <li onclick="setTab(0,0)" class="hover">信息列表</li>
  <li onclick="setTab(0,1)">会员充值</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
	  <li>
		<div class="emmm_newslist">
		        <table width="100%" border="0" cellpadding="10" class="emmm_newslist">
                  <tr>
				  	<td width="5%" bgcolor="#EBEBEB"><div align="center">ID</div></td>
                    <td width="15%" bgcolor="#EBEBEB">充值账号</td>
					<td width="10%" bgcolor="#EBEBEB">充值金额</td>
					<td width="10%" bgcolor="#EBEBEB">充值积分</td>
					<td width="20%" bgcolor="#EBEBEB">充值说明</td>
					<td width="15%" bgcolor="#EBEBEB">操作人</td>
					<td width="15%" bgcolor="#EBEBEB">时间</td>
                    <td width="10%" bgcolor="#EBEBEB">操作</td>
                  </tr>
				  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pay']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				  	<td><div align="center"><font style="background:#009933; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
</font></div></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['paytype'];?>
<?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['money'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['paytype'];?>
<?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['integral'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['content'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['admin'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['time'];?>
</td>
                    <td><a href="?emmm_cms=del&id=<?php echo $_smarty_tpl->tpl_vars['pay']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
" onclick="javascript:return confirm('确认删除吗?')">删除</a></td>
                  </tr>
				  <?php endfor; else: ?>
				  <tr>
                    <td colspan="8"><?php echo $_smarty_tpl->tpl_vars['emmm_access']->value;?>
</td>
                  </tr>
				  <?php endif; ?>
				  
                  <tr>
                    <td colspan="8"><?php echo $_smarty_tpl->tpl_vars['emmmpage']->value;?>
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
		  	<td><div align="right">操作人</div></td>
			<td><?php echo $_smarty_tpl->tpl_vars['COL_Adminname']->value;?>
<input type="hidden" name="COL_Useradmin" value="<?php echo $_smarty_tpl->tpl_vars['COL_Adminname']->value;?>
" /></td>
		  </tr>
		  <tr>
		  	<td><div align="right">充值账号</div></td>
			<td><input name="COL_Useremail" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 id="searchid" datatype="*" nullmsg="账号是必填项!" /><font color=red> (*)</font>&nbsp;&nbsp;输入会员的账户，email或手机号格式&nbsp;&nbsp;[<a href="javascript:dialog('usersearch')">查找</a>]</td>
		  </tr>
		  <tr>
			<td><div align="right">充值类型</div></td>
			<td>
			<select name="jj">
				<option value ="a">加</option>
				<option value ="b">减</option>
			</select>
			</td>
		  </tr>
		 <tr>
		  	<td><div align="right">充值金额</div></td>
			<td><input name="COL_Usermoney" type="text" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 datatype="*" nullmsg="金额是必填项!" value="0" /><font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td><div align="right">充值积分</div></td>
			<td><input name="COL_Userintegral" type="text" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 datatype="*" nullmsg="积分是必填项!" value="0" /><font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td><div align="right">充值说明</div></td>
			<td><textarea name="COL_Usercontent" class="wtextarea"></textarea>
			<font color=red> (*)</font></td>
		  </tr>
		   <tr>
		   	<td></td>
			<td><input type="submit" name="submit" value="提 交" class="emmm-anniu"/></td>
		  </tr>
		</table>
		</form>
	  </li>
  </ul>
 </div>
</div>
<script>
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
