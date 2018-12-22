<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 05:37:39
         compiled from "templates/default/cn/cn_banner.html" */ ?>
<?php /*%%SmartyHeaderCode:4657034345c1261fc8c4170-63469228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748c0b573579215213218e21a787a873f6709bd7' => 
    array (
      0 => 'templates/default/cn/cn_banner.html',
      1 => 1544793105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4657034345c1261fc8c4170-63469228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1261fcaadb49_79311231',
  'variables' => 
  array (
    'banner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1261fcaadb49_79311231')) {function content_5c1261fcaadb49_79311231($_smarty_tpl) {?><?php if (!is_callable('smarty_block_banner')) include './function/class/block.banner.php';
?>    <div id="full-screen-slider">
    <ul id="slides">
	
	
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('banner', array('lang'=>"cn",'row'=>"5",'name'=>"banner",'id'=>"0",'type'=>"0")); $_block_repeat=true; echo smarty_block_banner(array('lang'=>"cn",'row'=>"5",'name'=>"banner",'id'=>"0",'type'=>"0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    	        <li style="background:url('<?php echo $_smarty_tpl->tpl_vars['banner']->value['img'];?>
') no-repeat center top">
                <a></a>
                </li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_banner(array('lang'=>"cn",'row'=>"5",'name'=>"banner",'id'=>"0",'type'=>"0"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				
    </ul>
  </div>
  <div class="notice">
  <div class="main">
    <div class="noticetxt">
      <marquee>
	  
      这里是公告，打开cn_banner.html模板来修改这里的内容。      
	  
	  </marquee>
    </div>
    </div>
  </div>
</div><?php }} ?>
