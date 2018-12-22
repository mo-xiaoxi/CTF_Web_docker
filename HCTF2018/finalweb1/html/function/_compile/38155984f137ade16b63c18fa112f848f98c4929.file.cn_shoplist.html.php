<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:29:36
         compiled from "templates\default\cn\cn_shoplist.html" */ ?>
<?php /*%%SmartyHeaderCode:18324723425c13861083c954-26871239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38155984f137ade16b63c18fa112f848f98c4929' => 
    array (
      0 => 'templates\\default\\cn\\cn_shoplist.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18324723425c13861083c954-26871239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'webpath' => 0,
    'templatepath' => 0,
    'crumbs' => 0,
    'op' => 0,
    'column' => 0,
    'opop' => 0,
    'opopop' => 0,
    'listname' => 0,
    'ip' => 0,
    'listtype' => 0,
    'list' => 0,
    'emmmpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c13861175d032_80080352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c13861175d032_80080352')) {function content_5c13861175d032_80080352($_smarty_tpl) {?><?php if (!is_callable('smarty_block_list')) include './function/class\\block.list.php';
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
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/js/lefttree.js"></script>
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
	<div class="center">
    	<div class="topnavlist">
       		<a href="/?cn-shop.html" title="商城首页">商城首页</a> 
            <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['crumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
            >> <a href="<?php echo $_smarty_tpl->tpl_vars['op']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>
</a>
            <?php } ?>
        </div>
        <div class="clear"></div>
        <div class="shoplistleft">
        	<h1>商品快捷分类</h1>
            <ul>

            <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['op']->value['id']==2) {?>
             
                  <?php if (isset($_smarty_tpl->tpl_vars['op']->value['child'])) {?>
                  <?php  $_smarty_tpl->tpl_vars['opop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['op']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opop']->key => $_smarty_tpl->tpl_vars['opop']->value) {
$_smarty_tpl->tpl_vars['opop']->_loop = true;
?>
                  <li class="aaa"><img src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/images/btn_fold.gif" /><a href="<?php echo $_smarty_tpl->tpl_vars['opop']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['opop']->value['title'];?>
</a>
            
                        <?php if (isset($_smarty_tpl->tpl_vars['opop']->value['child'])) {?>
                        <ul class="d">
                        <?php  $_smarty_tpl->tpl_vars['opopop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opopop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opop']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opopop']->key => $_smarty_tpl->tpl_vars['opopop']->value) {
$_smarty_tpl->tpl_vars['opopop']->_loop = true;
?>
                       	<li><a href="<?php echo $_smarty_tpl->tpl_vars['opopop']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['opopop']->value['title'];?>
</a></li>
                        <?php } ?>
                        </ul>
                        <?php }?>
            	  </li>
                  <?php } ?>
                  <?php }?>
                  
            <?php }?>
            <?php } ?>

            </ul>
        </div>
        <div class="shoplistright">
       	  <h1><?php echo $_smarty_tpl->tpl_vars['listname']->value['title'];?>

            	<span>
                	<a href="?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-<?php echo $_smarty_tpl->tpl_vars['ip']->value['type'];?>
-<?php echo $_smarty_tpl->tpl_vars['ip']->value['listid'];?>
.html" <?php if (isset($_GET['type'])=='') {?>class="xz"<?php }?>>全部</a>
                    <a href="?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-<?php echo $_smarty_tpl->tpl_vars['ip']->value['type'];?>
-<?php echo $_smarty_tpl->tpl_vars['ip']->value['listid'];?>
.html=&type=COL_Webmarket" <?php if (isset($_GET['type'])=='') {?><?php } elseif ($_GET['type']=="COL_Webmarket") {?>class="xz"<?php }?>>价格</a>
                    <a href="?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-<?php echo $_smarty_tpl->tpl_vars['ip']->value['type'];?>
-<?php echo $_smarty_tpl->tpl_vars['ip']->value['listid'];?>
.html=&type=COL_Click" <?php if (isset($_GET['type'])=='') {?><?php } elseif ($_GET['type']=="COL_Click") {?>class="xz"<?php }?>>人气</a>
                </span>
            </h1>
            <ul>
                    <?php if (isset($_GET['type'])) {?>
                        <?php if ($_GET['type']=="COL_Webmarket") {?>
                        <?php $_smarty_tpl->tpl_vars["listtype"] = new Smarty_variable("COL_Webmarket", null, 0);?>
                        <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["listtype"] = new Smarty_variable("COL_Click", null, 0);?>
                        <?php }?>
                    <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["listtype"] = new Smarty_variable("id", null, 0);?>
                    <?php }?>
                    
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('id'=>((string)$_smarty_tpl->tpl_vars['listid']->value),'form'=>"product",'type'=>$_smarty_tpl->tpl_vars['listtype']->value,'name'=>"list")); $_block_repeat=true; echo smarty_block_list(array('id'=>((string)$_smarty_tpl->tpl_vars['listid']->value),'form'=>"product",'type'=>$_smarty_tpl->tpl_vars['listtype']->value,'name'=>"list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/noimage.png" data-original="<?php echo $_smarty_tpl->tpl_vars['list']->value['minimg'];?>
" />
                        <p class="title"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['list']->value['title'],30,"...");?>
</p>
                        <p class="scj">市场价：<s>￥<?php echo $_smarty_tpl->tpl_vars['list']->value['market'];?>
</s></p>
                        <p class="bzj">本站价：<span>￥<?php echo $_smarty_tpl->tpl_vars['list']->value['webmarket'];?>
</span></p>
                    </a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('id'=>((string)$_smarty_tpl->tpl_vars['listid']->value),'form'=>"product",'type'=>$_smarty_tpl->tpl_vars['listtype']->value,'name'=>"list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <div class="clear"></div>
            <div class="page">
            	<?php echo $_smarty_tpl->tpl_vars['emmmpage']->value;?>

            </div>
        </div>
    </div>
<div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_shopfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
