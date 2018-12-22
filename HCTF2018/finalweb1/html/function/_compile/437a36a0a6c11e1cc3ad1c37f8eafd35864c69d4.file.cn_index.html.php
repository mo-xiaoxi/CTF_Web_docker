<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 22:49:11
         compiled from "../../templates/user/cn_index.html" */ ?>
<?php /*%%SmartyHeaderCode:5474131495c13985833ee07-97684256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '437a36a0a6c11e1cc3ad1c37f8eafd35864c69d4' => 
    array (
      0 => '../../templates/user/cn_index.html',
      1 => 1544793105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5474131495c13985833ee07-97684256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c13985853e477_20215584',
  'variables' => 
  array (
    'emmm_web' => 0,
    'templatepath' => 0,
    'webpath' => 0,
    'image' => 0,
    'user' => 0,
    'usercontrol' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c13985853e477_20215584')) {function content_5c13985853e477_20215584($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员中心 - <?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
 - Powered by ourphp</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
css/style.css" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/jquery-2.1.1.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/YIQI-UI.min.css" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/font/YIQI-UI-iconfont.min.css" rel="stylesheet">
</head>
<body>
<div id="YIQI-UI">
    <?php echo $_smarty_tpl->getSubTemplate ("cn_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    <div class="clear"></div>
    <div class="emmm_center">
        <div class="clear"></div>
        <div class="emmm_login">
            <div class="emmm_user_left">
                <?php echo $_smarty_tpl->getSubTemplate ("cn_leftnav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
            </div>
            <div class="emmm_user_right">
                <div class="emmm_user_up">
                    <div class="user_touxiang"><img src="/client/user/index.php?img=<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" width="150" /></div>
                    <div class="left">
                        <p><span></span>账号：<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
                        <?php if (!empty($_smarty_tpl->tpl_vars['user']->value['name'])) {?><p><span></span>姓名：<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</p><?php }?>
                        <p><span></span>电话/邮件：<?php echo $_smarty_tpl->tpl_vars['user']->value['tel'];?>
</p>
                        <p><span></span>用户组：<?php echo $_smarty_tpl->tpl_vars['user']->value['class'];?>
</p>
                    </div>
                    <div class="right">
                        <div class="xj"><span></span>余额：<i><?php echo $_smarty_tpl->tpl_vars['user']->value['money'];?>
</i>&nbsp;元</div>
                        <div class="jf"><span></span>积分：<?php echo $_smarty_tpl->tpl_vars['user']->value['integral'];?>
&nbsp;分</div>
                        <div class="yhq"><span></span>优惠券：<?php echo $_smarty_tpl->tpl_vars['user']->value['coupon'];?>
&nbsp;张</div>
                    </div>
                </div>
                  <div class="emmm_user_down mt-50">
                        <h1>推广给好友注册：</h1>
                        <div class="clear"></div>
                        <table width="100%" border="0" cellpadding="10">
                          <tr>
                            <td width="10%"><div align="right">推广地址：</div></td>
                            <td width="90%"><textarea style=" width:540px; height:20px; border:1px #CCCCCC solid; padding:10px;">http://<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['weburl'];?>
/client/user/?cn-reg.html-&introducer=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</textarea></td>
                          </tr>
                          <tr>
                            <td><div align="right">说明：</div></td><td><p>复制上面地址，邀请其它会员注册。</p><p>成功注册一个用户，奖励网站现金：<?php echo $_smarty_tpl->tpl_vars['usercontrol']->value['money'][2];?>
&nbsp;&nbsp;&nbsp;&nbsp;积分：<?php echo $_smarty_tpl->tpl_vars['usercontrol']->value['money'][3];?>
</p></td>
                          </tr>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
