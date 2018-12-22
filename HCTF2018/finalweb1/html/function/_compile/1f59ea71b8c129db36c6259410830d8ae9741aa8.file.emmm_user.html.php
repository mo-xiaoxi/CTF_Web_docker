<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:09:27
         compiled from "templates\emmm_user.html" */ ?>
<?php /*%%SmartyHeaderCode:7822936745c125a0762f1e5-72316549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f59ea71b8c129db36c6259410830d8ae9741aa8' => 
    array (
      0 => 'templates\\emmm_user.html',
      1 => 1544617475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7822936745c125a0762f1e5-72316549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'a' => 0,
    'Userlist' => 0,
    'emmm_access' => 0,
    'emmmpage' => 0,
    'Userleve' => 0,
    'emmm_bgcolor' => 0,
    'emmm_usercontrol' => 0,
    'Userproblem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c125a080b91f8_21613606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c125a080b91f8_21613606')) {function content_5c125a080b91f8_21613606($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
  <li onclick="setTab(0,0)" class="hover">会员列表</li>
  <li onclick="setTab(0,1)">添加新会员</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
	  <li>
		<div class="emmm_newslist">
		<form id="form2" name="form2" method="post" action="?emmm_cms=Batch&type=<?php echo $_smarty_tpl->tpl_vars['a']->value[0];?>
&couponclass=<?php echo $_smarty_tpl->tpl_vars['a']->value[1];?>
">
		        <table width="100%" border="0" cellpadding="10" class="emmm_newslist">
                  <tr>
				  	<td width="5%" bgcolor="#EBEBEB"><div align="center">ID</div></td>
                    <td width="15%" bgcolor="#EBEBEB">会员账号</td>
					<td width="10%" bgcolor="#EBEBEB">会员姓名</td>
					<td width="15%" bgcolor="#EBEBEB">现金/积分</td>
					<td width="10%" bgcolor="#EBEBEB">IP</td>
					<td width="10%" bgcolor="#EBEBEB">状态</td>
					<td width="10%" bgcolor="#EBEBEB">推荐人</td>
                    <td width="15%" bgcolor="#EBEBEB">注册时间</td>
                    <td width="10%" bgcolor="#EBEBEB">操作</td>
                  </tr>
				  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Userlist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
				  	<td>
						<div align="center">
							<?php if ($_smarty_tpl->tpl_vars['a']->value[0]=='coupon') {?>
								<input type="checkbox" name="op_b[]" value="<?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['email'];?>
" />
							<?php }?>
							<font style="background:#009933; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
</font>
						</div>
					</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['email'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['money'];?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['integral'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['ip'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['status']==1) {?>开启<?php } else { ?>锁定<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['source'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['time'];?>
</td>
                    <td><a href="emmm_userview.php?id=<?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
">编辑</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="?emmm_cms=del&id=<?php echo $_smarty_tpl->tpl_vars['Userlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
" onclick="javascript:return confirm('确认删除吗?')">删除</a></td>
                  </tr>
				  <?php endfor; else: ?>
				  <tr>
                    <td colspan="9"><?php echo $_smarty_tpl->tpl_vars['emmm_access']->value;?>
</td>
                  </tr>
				  <?php endif; ?>
                  <tr>
                    <td colspan="9"><?php echo $_smarty_tpl->tpl_vars['emmmpage']->value;?>
</td>
                  </tr>
				  <?php if ($_smarty_tpl->tpl_vars['a']->value[0]=='coupon') {?>
				  <tr>
                    <td colspan="9"><input type="submit" name="Submit" value="批量发优惠券" class="emmm_listan" /></td>
                  </tr>
				  <?php }?>
                </table>
			</form>
		</div>
	  </li>
  </ul>
  
  <ul>
	  <li>
		<form id="form1" name="form1" method="POST" action="?emmm_cms=add" class="registerform">
		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center">
		<tr>
		  	<td><div align="right">会员级别</div></td>
			<td>
			
				<select name="COL_Userclass" >
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
					<option value="<?php echo $_smarty_tpl->tpl_vars['Userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['Userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['name'];?>
</option>
				  <?php endfor; endif; ?>
				</select>
			
			</td>
		  </tr>
		  <tr>
		  	<td><div align="right">状态</div></td>
			<td><input name="COL_Userstatus" type="radio" value="1" checked="checked" />开启&nbsp;&nbsp;
			<input name="COL_Userstatus" type="radio" value="2" />锁定
			</td>
		  </tr>
		  <tr>
		  	<td><div align="right">会员账号</div></td>
			<td><input name="COL_Useremail" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Regtyle']=='email') {?>datatype="e"<?php } else { ?>datatype="m"<?php }?> nullmsg="账号是必填项!"/><font color=red> (*)</font>
			
			<?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Regtyle']=='email') {?>EAMIL格式，如：77701950@qq.com<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Regtyle']=='tel') {?>手机号格式，如：13199509559<?php }?>
			
			</td>
		  </tr>
		  <tr>
		  	<td><div align="right">登录密码</div></td>
			<td><input name="COL_Userpass" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 atatype="*6-16" nullmsg="请设置密码！" errormsg="密码范围在6~16位之间！" /><font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td><div align="right">确认密码</div></td>
			<td><input name="COL_Userpassto" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 datatype="*" recheck="COL_Userpass" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" /><font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td><div align="right">账户现金</div></td>
			<td>添加好会员后,在后台充值中操作</td>
		  </tr>
		  <tr>
		  	<td><div align="right">账户积分</div></td>
			<td>添加好会员后,在后台充值中操作</td>
		  </tr>
		  <tr>
		  	<td><div align="right">会员姓名</div></td>
			<td><input name="COL_Username" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
  datatype="*" nullmsg="姓名是必填项!" /><font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td><div align="right">手机号码</div></td>
			<td><input name="COL_Usertel" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
  datatype="*" nullmsg="电话是必填项!" /><font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td><div align="right">QQ</div></td>
			<td><input name="COL_Userqq" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
		  </tr>
		  <tr>
		  	<td><div align="right">阿里旺旺</div></td>
			<td><input name="COL_Useraliww" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
		  </tr>
		  <tr>
		  	<td><div align="right">skype</div></td>
			<td><input name="COL_Userskype" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
		  </tr>
		  <tr>
		  	<td><div align="right">收货地址</div></td>
			<td><input name="COL_Useradd" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
		  </tr>
		  <tr>
		  	<td><div align="right">介绍人</div></td>
			<td><input name="COL_Usersource" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
		  </tr>
		  <tr>
		  	<td><div align="right">头像地址</div></td>
			<td><input name="COL_Userhead" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
		  </tr>
		  <tr>
		  	<td><div align="right">IP</div></td>
			<td><input name="COL_Userip" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
		  </tr>
		  <tr>
		  	<td><div align="right">安全问题</div></td>
			<td>
			
				<select name="COL_Userproblem" >
				  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Userproblem']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<option value="<?php echo $_smarty_tpl->tpl_vars['Userproblem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['Userproblem']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['name'];?>
</option>
				  <?php endfor; endif; ?>
				</select>
				
			<font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td><div align="right">答案</div></td>
			<td><input name="COL_Useranswer" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
  datatype="*" nullmsg="答案是必填项!"  /><font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td><div align="right">人生宣言</div></td>
			<td><textarea name="COL_Usertext" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 class="wtextarea" style="width:350px; height:100px; border:1px #D7EBFF solid;" ></textarea></td>
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
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
