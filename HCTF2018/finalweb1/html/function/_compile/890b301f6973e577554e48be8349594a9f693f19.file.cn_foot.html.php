<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:34:42
         compiled from "..\..\templates\user\cn_foot.html" */ ?>
<?php /*%%SmartyHeaderCode:8001216365c1387421a2211-15889822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890b301f6973e577554e48be8349594a9f693f19' => 
    array (
      0 => '..\\..\\templates\\user\\cn_foot.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8001216365c1387421a2211-15889822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'callcolumn' => 0,
    'emmm_web' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1387423350a9_00663307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1387423350a9_00663307')) {function content_5c1387423350a9_00663307($_smarty_tpl) {?><?php if (!is_callable('smarty_block_callcolumn')) include '../../function/class\\block.callcolumn.php';
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
