<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:35:02
         compiled from "..\..\templates\user\cn_leftnav.html" */ ?>
<?php /*%%SmartyHeaderCode:4560919565c138756a96135-87668395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff77f3925b0464f505db145c32b1d4f86d73a5d3' => 
    array (
      0 => '..\\..\\templates\\user\\cn_leftnav.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4560919565c138756a96135-87668395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webpath' => 0,
    'ip' => 0,
    'shoppingcart' => 0,
    'shoppingorder' => 0,
    'msgemail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c138756deee95_05850204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c138756deee95_05850204')) {function content_5c138756deee95_05850204($_smarty_tpl) {?><ul>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/"><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-home"></span>会员中心</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-shoppingcart.html" target="_blank";><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-cart2-selected"></span>购物车<font class="badge badge-danger radius shoppingcart"><?php echo $_smarty_tpl->tpl_vars['shoppingcart']->value['tiaoshu'];?>
</font></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-usershopping-op.html"><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-order"></span>我的订单<font class="badge badge-danger radius shoppingcart"><?php echo $_smarty_tpl->tpl_vars['shoppingorder']->value['tiaoshu'];?>
</font></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-usershopadd.html"><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-gongsi"></span>收货地址</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-userintegral-op.html"><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-hongbao"></span>领取积分</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-usercoupon.html"><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-huangguan"></span>我的优惠券</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-userpay-op.html"><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-pay-alipay-2"></span>我要充值</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-usermail-op.html"><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-xiaoxi"></span>站内信件<font class="badge badge-danger radius shoppingcart"><?php echo $_smarty_tpl->tpl_vars['msgemail']->value['tiaoshu'];?>
</font></a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-useredit.html"><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-user"></span>完善资料</a></li>
<li class="foot"><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/emmm_play.class.php?emmm_cms=out&lang=cn"><span class="icon YIQI-UI-iconfont YIQI-UI-iconfont-daochu"></span>退出</a></li>
</ul><?php }} ?>
