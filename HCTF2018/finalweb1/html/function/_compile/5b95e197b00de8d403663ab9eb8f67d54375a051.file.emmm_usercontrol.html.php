<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 20:25:12
         compiled from "templates/emmm_usercontrol.html" */ ?>
<?php /*%%SmartyHeaderCode:10308055605c13a1285552c7-52201491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b95e197b00de8d403663ab9eb8f67d54375a051' => 
    array (
      0 => 'templates/emmm_usercontrol.html',
      1 => 1544787928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10308055605c13a1285552c7-52201491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'emmm_usercontrol' => 0,
    'userleve' => 0,
    'emmm_Usermoney' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c13a128c2fb99_68291439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c13a128c2fb99_68291439')) {function content_5c13a128c2fb99_68291439($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
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
  <li onclick="setTab(0,0)" class="hover">会员功能选项</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block"><li style=" padding-top:30px;">
		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; " align="center">
		  <tr>
		  	<td width="170"><div align="right">开启注册？</div></td>
			<td>
			
			<input name="COL_Userreg" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Userreg']==1) {?>checked="checked"<?php }?> />开启&nbsp;&nbsp;
			<input type="radio" name="COL_Userreg" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Userreg']==2) {?>checked="checked"<?php }?> />关闭&nbsp;&nbsp;&nbsp;后台添加会员不受此影响 </td>
		    <td>&nbsp;</td>
		  </tr>
		  
		  <tr>
		  	<td width="170"><div align="right">注册类型</div></td>
			<td>
			
			<input name="COL_Regtyle" type="radio" value="email" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Regtyle']=='email') {?>checked="checked"<?php }?> />用Email做账号&nbsp;&nbsp;
			<input type="radio" name="COL_Regtyle" value="tel" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Regtyle']=='tel') {?>checked="checked"<?php }?> />用手机号做账号</td>
		    <td>&nbsp;</td>
		  </tr>
		  
		  <tr>
		  	<td width="170"><div align="right">是否开启注册验证码？</div></td>
			<td>
			
			<input name="COL_Regcode" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Regcode']==0) {?>checked="checked"<?php }?> />不开启&nbsp;&nbsp;
			<input type="radio" name="COL_Regcode" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Regcode']==1) {?>checked="checked"<?php }?> />开启
			<p>如果您使用手机号为注册账号的话，开启验证码功能后，请联系管理员购买接收短信验证码服务。（email账号验证不需要）</p>
			</td>
		    <td>&nbsp;</td>
		  </tr>
		  
		  <tr>
		  	<td valign="top"><div align="right">开启登录？</div></td>
			<td>
			
			<input name="COL_Userlogin" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Userlogin']==1) {?>checked="checked"<?php }?> />开启&nbsp;&nbsp;
			<input type="radio" name="COL_Userlogin" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Userlogin']==2) {?>checked="checked"<?php }?> />关闭			</td>
		    <td>&nbsp;</td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">找回密码方式：</div></td>
			<td>
			
			<input name="COL_Userpassgo" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Userpassgo']==0) {?>checked="checked"<?php }?> />问题&nbsp;&nbsp;
			<input type="radio" name="COL_Userpassgo" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Userpassgo']==1) {?>checked="checked"<?php }?> />手机短信			</td>
		    <td>&nbsp;</td>
		  </tr>
		  <tr>
		 
		  	<td valign="top"><div align="right">注册协议</div></td>
			<td>
			
			<textarea name="COL_Userprotocol" class="wtextarea" style="width:650px; height:300px; padding:10px; line-height:25px;"><?php echo $_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Userprotocol'];?>
</textarea>
			
			</td>
		    <td>
			</td>
		 	
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">默认用户组</div></td>
			<td>
			
			
			<select name="COL_Usergroup">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['userleve']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<option value="<?php echo $_smarty_tpl->tpl_vars['userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id']==$_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Usergroup']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['userleve']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['name'];?>
</option>
			<?php endfor; endif; ?>
			</select>
			
			&nbsp;&nbsp;&nbsp;会员注册成功后，默认的用户组。			</td>
		    <td>&nbsp;</td>
		  </tr>
		  <tr>
		  	<td><div align="right">注册赠送</div></td>
			<td>
			
			现金：<input type="text" name="COL_Usermoney[]" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_Usermoney']->value[0];?>
" datatype="*" nullmsg="现金和积分是必填项!" />&nbsp;&nbsp;积分：<input type="text" name="COL_Usermoney[]" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_Usermoney']->value[1];?>
" datatype="*" nullmsg="现金和积分是必填项!" />
			&nbsp;&nbsp;&nbsp;不能为空，0 表示不赠送。
			</td>
		    <td></td>
		  </tr>
		  <tr>
		  	<td><div align="right">会员自助推广赠送</div></td>
			<td>
			
			现金：<input type="text" name="COL_Usermoney[]" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_Usermoney']->value[2];?>
" datatype="*" nullmsg="现金和积分是必填项!" />&nbsp;&nbsp;积分：<input type="text" name="COL_Usermoney[]" class="win2" value="<?php echo $_smarty_tpl->tpl_vars['emmm_Usermoney']->value[3];?>
" datatype="*" nullmsg="现金和积分是必填项!" />
			&nbsp;&nbsp;&nbsp;不能为空，0 表示不赠送。(当会员推荐其它网友来注册，奖励现金或积分)
			</td>
		    <td></td>
		  </tr>
		  <tr>
			<td><div align="right">现金和积分用途</div></td>
			<td style="color:#FF3300;">现金是用来购买网站上商品的，支付宝等充值都是现金。积分是用还换置的，不做为购物使用。<br />
			
			1现金 = 1人民币
			
			</td>
			<td></td>
		  </tr>
		  <tr>
		  	<td valign="top"><div align="right">IP限制？</div></td>
			<td>
			
			<input name="COL_Useripoff" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Useripoff']==1) {?>checked="checked"<?php }?> />开启&nbsp;&nbsp;
			<input type="radio" name="COL_Useripoff" value="2" <?php if ($_smarty_tpl->tpl_vars['emmm_usercontrol']->value['COL_Useripoff']==2) {?>checked="checked"<?php }?> />关闭&nbsp;&nbsp;&nbsp;开启后一个IP只能注册一位会员</td>
		    <td>&nbsp;</td>
		  </tr>
		  <tr>
			<td></td>
			<td><input type="submit" name="submit" value="提 交" class="emmm-anniu"/></td>
			<td></td>
		  </tr>
		</table>
  </li></ul>
 </div>
</div>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
