<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 22:45:36
         compiled from "../../templates/user/cn_login.html" */ ?>
<?php /*%%SmartyHeaderCode:12454922665c13989ec100a8-37406914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f3f371c68a48ce859852c79804983838940863' => 
    array (
      0 => '../../templates/user/cn_login.html',
      1 => 1544793105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12454922665c13989ec100a8-37406914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c13989f04ce85_87915608',
  'variables' => 
  array (
    'emmm_web' => 0,
    'templatepath' => 0,
    'webpath' => 0,
    'ad' => 0,
    'usercontrol' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c13989f04ce85_87915608')) {function content_5c13989f04ce85_87915608($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员中心 - <?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
  - Powered by ourphp</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
css/style.css" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/jquery/1.7.2/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/YIQI-UI.min.css" type="text/css" />
</head>
<body>
<div id="YIQI-UI">
    <?php echo $_smarty_tpl->getSubTemplate ("cn_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="clear"></div>
    <div class="emmm_center">
        <div class="clear"></div>
        <div class="emmm_login">
              
                    <div class="f-l emmm_left">
                        <?php if (empty($_smarty_tpl->tpl_vars['ad']->value['login'])) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
images/logobei.png" />
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['ad']->value['login'];?>

                        <?php }?>
                    </div>
                    <div class="f-r emmm_right">
                      <div class="logo_font mb-40">立即登录</div>
                      <div class="clear"></div>
                    
                    <?php if ($_smarty_tpl->tpl_vars['usercontrol']->value['loginoff']==1) {?>
                    <form id="form1" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/emmm_play.class.php?emmm_cms=login" class="registerform">
                    <table width="100%" border="0" class="table table-hover">
                          <tr>
                            <td><div align="right">账号：</div></td>
                            <td><input type="text" name="COL_Useremail" class="input" datatype="*" value="E-mail 或 手机号码" onfocus="if (value =='E-mail 或 手机号码'){value =''}" onblur="if (value ==''){value='E-mail 或 手机号码'}" /> <font color="#FF0000">*</font></td>
                          </tr>
                          <tr>
                            <td><div align="right">登录密码：</div></td>
                            <td><input type="password" name="COL_Userpass" class="input" datatype="*" /> 
                            <font color="#FF0000">* </font>&nbsp;&nbsp;<a href="?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-password.html">忘记密码? </a></td>
                          </tr>
                          <tr>
                            <td><div align="right">验证码：</div></td>
                            <td><input type="text" name="code" class="input3" datatype="*" onfocus="document.getElementById('checkcode').src+='?'" /> <font color="#FF0000">*</font>&nbsp;<img title="点击刷新" id="checkcode" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_code.php" align="absbottom" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_code.php?'+Math.random();" width="80" height="25"></img></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td>
                            <input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
" />
                            <input type="submit" name="Submit" value="立即登录" class="btn btn-danger radius-5 pt-10 pb-10 pl-15 pr-15" /><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-reg.html" class="btn btn-success radius-5 pt-10 pb-10 pl-15 pr-15 ml-10">免费注册</a></td>
                          </tr>
                    </table>
                    </form>
                    <link rel="stylesheet" href="../../function/plugs/Validform/style.css" type="text/css" />
                    <script type="text/javascript" src="../../function/plugs/Validform/Validform_v5.3.2.js"></script>
                    <script type="text/javascript">
                    $(function(){
                        $(".registerform").Validform();  //就这一行代码！;
                    })
                    </script>
                    <?php } else { ?>
                        <h3>暂时无法提供登录！</h3>
                    <?php }?>
                    
                    
                    </div>
                </div>
    	</div>
    <?php echo $_smarty_tpl->getSubTemplate ("cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
