<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:34:41
         compiled from "..\..\templates\user\cn_top.html" */ ?>
<?php /*%%SmartyHeaderCode:16850059325c138741f216a7-75972670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32cddae6fcf819604fb7455143ad1e34684c7523' => 
    array (
      0 => '..\\..\\templates\\user\\cn_top.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16850059325c138741f216a7-75972670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'webpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c138742179c30_63505885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c138742179c30_63505885')) {function content_5c138742179c30_63505885($_smarty_tpl) {?><div class="emmm_head">
	<div class="emmm_center">
    	<div class="f-l">
        <div class="emmm_logo"><a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['weblogo'];?>
" /></a></div>
        </div>
		<div class="f-r">欢迎光临&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>

		&nbsp;&nbsp;
            <?php if (isset($_SESSION['username'])) {?>
            您好！<a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/"><?php echo $_SESSION['username'];?>
</a>
            <?php } else { ?>
            [<a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-reg.html">免费注册</a>]&nbsp;&nbsp;&nbsp;&nbsp;[<a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-login.html">立即登录</a>]
            <?php }?>
        </div>
	</div>
</div><?php }} ?>
