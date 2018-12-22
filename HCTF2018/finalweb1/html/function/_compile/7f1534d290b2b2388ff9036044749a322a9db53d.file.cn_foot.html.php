<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 22:44:50
         compiled from "../../templates/user/cn_foot.html" */ ?>
<?php /*%%SmartyHeaderCode:598463105c13985878a616-16882993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1534d290b2b2388ff9036044749a322a9db53d' => 
    array (
      0 => '../../templates/user/cn_foot.html',
      1 => 1544793105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '598463105c13985878a616-16882993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c13985888cf01_03970605',
  'variables' => 
  array (
    'callcolumn' => 0,
    'emmm_web' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c13985888cf01_03970605')) {function content_5c13985888cf01_03970605($_smarty_tpl) {?><?php if (!is_callable('smarty_block_callcolumn')) include '../../function/class/block.callcolumn.php';
?><div class="clear"></div>
<div class="user_foot">
    <div class="emmm_center">
        <p>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('callcolumn', array('id'=>"0",'row'=>"10",'lang'=>"cn",'type'=>"td",'name'=>"callcolumn")); $_block_repeat=true; echo smarty_block_callcolumn(array('id'=>"0",'row'=>"10",'lang'=>"cn",'type'=>"td",'name'=>"callcolumn"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
</a>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_callcolumn(array('id'=>"0",'row'=>"10",'lang'=>"cn",'type'=>"td",'name'=>"callcolumn"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </p>
        <p>版权所有 &copy; <?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webname'];?>
</p>
    </div>
</div><?php }} ?>
