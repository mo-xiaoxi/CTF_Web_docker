<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:29:33
         compiled from "templates\default\cn\cn_shop.html" */ ?>
<?php /*%%SmartyHeaderCode:19406884315c13860d04d118-71626419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5961aea2b50bd731a27f4b639e94de1da5e573e' => 
    array (
      0 => 'templates\\default\\cn\\cn_shop.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19406884315c13860d04d118-71626419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'webpath' => 0,
    'templatepath' => 0,
    'banner' => 0,
    'emmm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c13860e182074_72635710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c13860e182074_72635710')) {function content_5c13860e182074_72635710($_smarty_tpl) {?><?php if (!is_callable('smarty_block_banner')) include './function/class\\block.banner.php';
if (!is_callable('smarty_block_emmm')) include './function/class\\block.emmm.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\laragon\\www\\ourphp\\function\\emmm\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>企业商城 - <?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
 - Powered by ourphp</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webkeywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webdescriptions'];?>
"/>
<meta name="Author" content="vidar.club" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/YIQI-UI.min.css" rel=stylesheet>
<link href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/font/YIQI-UI-iconfont.min.css" rel="stylesheet">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/css/emmm.css?2" rel=stylesheet>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/jquery/1.7.2/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/js/emmm.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/lazyload/jquery.lazyload.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/js/banner1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/js/rightnav.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("img").lazyload({ 
		 effect: "fadeIn"
	});    
	tcjs('wx');
	tcjs('sj');
	tcjs('wxkf');
	navjs('navleft');
});
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_shoptop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
<div class="banner">
  <div class="b-img">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('banner', array('lang'=>"cn",'row'=>"5",'name'=>"banner",'id'=>"0",'type'=>"0")); $_block_repeat=true; echo smarty_block_banner(array('lang'=>"cn",'row'=>"5",'name'=>"banner",'id'=>"0",'type'=>"0"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['url'];?>
" style="background:url(<?php echo $_smarty_tpl->tpl_vars['banner']->value['img'];?>
) center no-repeat;"></a> 
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_banner(array('lang'=>"cn",'row'=>"5",'name'=>"banner",'id'=>"0",'type'=>"0"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

  </div>
  <div class="b-list"></div>
  <a class="bar-left" href="#"><em></em></a>
  <a class="bar-right" href="#"><em></em></a>
</div>
<div class="clear"></div>
<div class="center">

	<div class="emmm_content">
    	<div class="left">
        	<h1>促销/资讯</h1>
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"article",'row'=>"8",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"article",'row'=>"8",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['emmm']->value['title'],15,"...");?>
</a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"article",'row'=>"8",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="right">
        	<h1>特价秒杀</h1>
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"product",'row'=>"4",'lang'=>"cn",'id'=>"0",'type'=>"3",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"product",'row'=>"4",'lang'=>"cn",'id'=>"0",'type'=>"3",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['minimg'];?>
" />
                <p class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['emmm']->value['title'],30,"...");?>
</p>
                <p class="jg">促销价：<span>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['webmarket'];?>
</span></p>
                </a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"product",'row'=>"4",'lang'=>"cn",'id'=>"0",'type'=>"3",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        
        <div class="clear"></div>
        
        <div class="f">
        	<h1 class="h1">数码产品<span><a href="">手机配件</a>&nbsp;<a href="">手机卡套餐</a>&nbsp;<a href="">更多</a></span></h1>
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
"><img src="/skin/noimage.png" data-original="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['minimg'];?>
" />
                <p class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['emmm']->value['title'],30,"...");?>
</p>
                <p class="scj">市场价：<s>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['market'];?>
</s></p>
                <p class="bzj">本站价：<span>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['webmarket'];?>
</span></p>
                </a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="clear"></div>
        <div class="f">
        	<h1 class="h2">母婴用品<span><a href="">奶瓶</a>&nbsp;<a href="">瓶刷</a>&nbsp;<a href="">电动车</a>&nbsp;<a href="">更多</a></span></h1>
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
"><img src="/skin/noimage.png" data-original="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['minimg'];?>
" />
                <p class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['emmm']->value['title'],30,"...");?>
</p>
                <p class="scj">市场价：<s>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['market'];?>
</s></p>
                <p class="bzj">本站价：<span>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['webmarket'];?>
</span></p>
                </a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="clear"></div>
        <div class="f">
        	<h1 class="h3">男装女装	<span><a href="">休闲装</a>&nbsp;<a href="">耐克</a>&nbsp;<a href="">正装</a>&nbsp;<a href="">更多</a></span></h1>
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
"><img src="/skin/noimage.png" data-original="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['minimg'];?>
" />
                <p class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['emmm']->value['title'],30,"...");?>
</p>
                <p class="scj">市场价：<s>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['market'];?>
</s></p>
                <p class="bzj">本站价：<span>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['webmarket'];?>
</span></p>
                </a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="clear"></div>
        <div class="f">
        	<h1 class="h4">珠宝饰品	<span><a href="">玉器</a>&nbsp;<a href="">古玩</a>&nbsp;<a href="">9999黄金</a>&nbsp;<a href="">更多</a></span></h1>
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
"><img src="/skin/noimage.png" data-original="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['minimg'];?>
" />
                <p class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['emmm']->value['title'],30,"...");?>
</p>
                <p class="scj">市场价：<s>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['market'];?>
</s></p>
                <p class="bzj">本站价：<span>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['webmarket'];?>
</span></p>
                </a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="clear"></div>
        <div class="f">
        	<h1 class="h5">化妆品	<span><a href="">美宝莲</a>&nbsp;<a href="">口红</a>&nbsp;<a href="">更多</a></span></h1>
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
"><img src="/skin/noimage.png" data-original="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['minimg'];?>
" />
                <p class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['emmm']->value['title'],30,"...");?>
</p>
                <p class="scj">市场价：<s>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['market'];?>
</s></p>
                <p class="bzj">本站价：<span>￥<?php echo $_smarty_tpl->tpl_vars['emmm']->value['webmarket'];?>
</span></p>
                </a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"product",'row'=>"5",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="clear"></div>
    </div>

</div>
<div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_shopfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
