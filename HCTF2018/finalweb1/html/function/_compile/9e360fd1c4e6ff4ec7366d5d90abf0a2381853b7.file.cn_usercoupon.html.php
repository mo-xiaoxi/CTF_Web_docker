<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:44:34
         compiled from "..\..\templates\user\cn_usercoupon.html" */ ?>
<?php /*%%SmartyHeaderCode:9821651845c138992852903-59105871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e360fd1c4e6ff4ec7366d5d90abf0a2381853b7' => 
    array (
      0 => '..\\..\\templates\\user\\cn_usercoupon.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9821651845c138992852903-59105871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'templatepath' => 0,
    'webpath' => 0,
    'user' => 0,
    'couponlist' => 0,
    'op' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c138992b65ed1_44489044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c138992b65ed1_44489044')) {function content_5c138992b65ed1_44489044($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            
            
			<style type="text/css">
				.couponlist {width:100%; height:auto; margin-top:20px; float:left;}
				.couponlist li {width:50%; height:150px; float:left;}
				.couponlist li.a {background:url(<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/coupon.png) left top no-repeat;}
				.couponlist li.b {background:url(<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/coupon2.png) left top no-repeat;}
				.couponlist li .left {font-size:90px; color:#fff; float:left; margin:70px 0 0 80px; font-family:Arial; width:100px;}
				.couponlist li .right {float:left; margin:50px 0 0 65px; font-size:27px; color:#66604B;}
				.couponlist li .right p { margin-top:0; margin-bottom:10px; font-family:Arial; font-weight:bold;}
				.couponlist li .right p.f1 {font-size:32px;}
				.couponlist li .right p span{color:#A75312;}
			</style>
              <table width="100%" border="0" class="table table-border table-hover">
                <tr>
                  <td>共计：<b><?php echo $_smarty_tpl->tpl_vars['user']->value['coupon'];?>
 张</b></td>
                </tr>      
                <tr>
                  <td class="couponlist">
				  <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['couponlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
				  <li <?php if ($_smarty_tpl->tpl_vars['op']->value['type']==0) {?>class="a"<?php } else { ?>class="b"<?php }?>>
					<div class="left"><?php echo $_smarty_tpl->tpl_vars['op']->value['money'];?>
</div>
					<div class="right">
								<p class="f1"><?php echo $_smarty_tpl->tpl_vars['op']->value['moneygo'];?>
</p>
								<p><?php echo $_smarty_tpl->tpl_vars['op']->value['timewin'];?>
</p>
					</div>
				  </li>
				  <?php } ?>
				  </td>
                </tr>
              </table>
              
              
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
