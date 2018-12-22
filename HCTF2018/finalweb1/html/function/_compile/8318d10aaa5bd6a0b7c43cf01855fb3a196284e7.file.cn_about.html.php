<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:29:12
         compiled from "templates\default\cn\cn_about.html" */ ?>
<?php /*%%SmartyHeaderCode:12602055275c1385f8447f79-77733892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8318d10aaa5bd6a0b7c43cf01855fb3a196284e7' => 
    array (
      0 => 'templates\\default\\cn\\cn_about.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12602055275c1385f8447f79-77733892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opcms' => 0,
    'emmm_web' => 0,
    'callcolumn' => 0,
    'emmm' => 0,
    'listname' => 0,
    'crumbs' => 0,
    'op' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1385f8aef245_36719336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1385f8aef245_36719336')) {function content_5c1385f8aef245_36719336($_smarty_tpl) {?><?php if (!is_callable('smarty_block_callcolumn')) include './function/class\\block.callcolumn.php';
if (!is_callable('smarty_block_emmm')) include './function/class\\block.emmm.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['opcms']->value['title'];?>
 - <?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
 - Powered by ourphp</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webkeywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webdescriptions'];?>
"/>
<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_banner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wrap">
  <div class="main">
    <div class="fyLeft">
      <dl class="l_pro">
  <dt><a href="#" title="关于我们">关于我们</a></dt>
 
<?php $_smarty_tpl->smarty->_tag_stack[] = array('callcolumn', array('id'=>"8",'row'=>"10",'lang'=>"cn",'type'=>"about",'name'=>"callcolumn")); $_block_repeat=true; echo smarty_block_callcolumn(array('id'=>"8",'row'=>"10",'lang'=>"cn",'type'=>"about",'name'=>"callcolumn"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<dd><a href="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
</a></dd>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_callcolumn(array('id'=>"8",'row'=>"10",'lang'=>"cn",'type'=>"about",'name'=>"callcolumn"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


  </dl>
<div class="leftpro">
  <div class="leftpro_t"> <span><a href="/product.php" title="产品推荐">产品推荐</a></span>
    <ul class="ul02">
            <li class="li02"></li>
            <li></li>
            <li></li>
          </ul>
  </div>
  <ul class="ul01">
  
<?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"product",'row'=>"3",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"product",'row'=>"3",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  	    <li <?php if ($_smarty_tpl->tpl_vars['emmm']->value['i']==1) {?>class="li01"<?php }?>> <a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" class="productliimg"><img src="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['minimg'];?>
" width="172" height="172" alt="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" /></a> <a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" class="producttxt"><?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
</a> </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"product",'row'=>"3",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
		
      </ul>
</div>
<div class="contact"> 
<a></a><a></a><a></a></div>    </div>
    <div class="fyRight">
      <div class="title"> <span class="fl"><?php echo $_smarty_tpl->tpl_vars['listname']->value['title'];?>
</span>
        <div class="fr">您当前的位置：<a href="/" title="首页">首页</a>

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
      </div>
<div class="mainRightMain ">
        <div class="padding25">
          <h2 class="center"><?php echo $_smarty_tpl->tpl_vars['opcms']->value['title'];?>
</h2>
          <div class="newsview">
          	            <div class='pb'><div class='pagebox'><div class="nei gun">
<div class="about-1">
<div class="title_s">
    <div class="sharewrap">
      <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <span class="bds_more" style="line-height:16px;">分享到：</span> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tqq"></a> <a class="bds_renren"></a> <a class="shareCount"></a> </div>
      <script type="text/javascript" id="bdshare_js" data="type=tools" ></script> 
      <script type="text/javascript" id="bdshell_js"></script> 
      <script type="text/javascript">
    document.getElementById("bdshell_js").src = "http://share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
    </script></div>
</div>
<?php echo $_smarty_tpl->tpl_vars['opcms']->value['content'];?>

</div>
</div>

<p> </p>
<div align='center'></div></div></div></div>
          </div>
      </div>
    </div>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
