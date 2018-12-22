<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:27:46
         compiled from "templates\default\cn\cn_index.html" */ ?>
<?php /*%%SmartyHeaderCode:17726152115c1256b9016583-02466497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbc819a29218c1e500003ff36314bab071dd69fe' => 
    array (
      0 => 'templates\\default\\cn\\cn_index.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17726152115c1256b9016583-02466497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1256b99add42_89270052',
  'variables' => 
  array (
    'emmm_web' => 0,
    'templatepath' => 0,
    'emmm' => 0,
    'callcolumn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1256b99add42_89270052')) {function content_5c1256b99add42_89270052($_smarty_tpl) {?><?php if (!is_callable('smarty_block_emmm')) include './function/class\\block.emmm.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\laragon\\www\\ourphp\\function\\emmm\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\laragon\\www\\ourphp\\function\\emmm\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_block_callcolumn')) include './function/class\\block.callcolumn.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
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


<div class="row">

<div class="main">
  <div class="about">
<div class="title"><span>关于我们</span><a title="查看更多关于我们" href="?cn-about-9.html" class="more">查看更多</a>
  </div> 
    <img src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
images/indexabout.jpg" width="469" height="100" alt="关于我们" />
       <div class="abouttxt">
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   </div>
</div>

  <div class="news">
<div class="title"><span>公司新闻</span><a title="公司新闻" href="?cn-article-3.html" class="more">查看更多</a>
  </div> 
    <ul class="pointer">
	
<?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"article",'row'=>"3",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"article",'row'=>"3",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><font>0<?php echo $_smarty_tpl->tpl_vars['emmm']->value['i'];?>
</font><div class="news_r"><p><a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
</a><span class="fr">[<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['emmm']->value['time'],"%Y,%m,%d");?>
]</span></p>
      <em><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['emmm']->value['description'],33,"...");?>
</em></div>
      </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"article",'row'=>"3",'lang'=>"cn",'id'=>"0",'type'=>"op",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
	

          </ul>
  </div>
</div>
</div>
<div class="product">
  <div class="main">
  <div class="product_l">
    <dl>
      <dt>商品展示</dt>
	  
<?php $_smarty_tpl->smarty->_tag_stack[] = array('callcolumn', array('id'=>"3",'row'=>"8",'lang'=>"cn",'type'=>"td",'name'=>"callcolumn")); $_block_repeat=true; echo smarty_block_callcolumn(array('id'=>"3",'row'=>"8",'lang'=>"cn",'type'=>"td",'name'=>"callcolumn"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <dd><a href="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
</a></dd>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_callcolumn(array('id'=>"3",'row'=>"8",'lang'=>"cn",'type'=>"td",'name'=>"callcolumn"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

           
    </dl><a title="查看更多产品展示" href="/?cn-product-4.html" class="more">查看更多</a>
    </div>
    <ul class="productli">
	
	

	
<?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"product",'row'=>"8",'lang'=>"cn",'id'=>"0",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"product",'row'=>"8",'lang'=>"cn",'id'=>"0",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" class="productliimg"><img src="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['minimg'];?>
" width="172" height="172" alt="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" /></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" class="producttxt"><?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
</a> <font class="time">时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['emmm']->value['time'],"%Y-%m-%d");?>
</font>
    </li> 
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"product",'row'=>"8",'lang'=>"cn",'id'=>"0",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 

            
    </ul>
  </div>
</div>
<div class="case">
  <div class="title">
    <div class="main"><span>案例展示</span><a title="查看更多案例展示" href="/?cn-photo-5.html" class="more">查看更多</a></div>
  </div>
  <div class="partFourM">
    <div class="left ctrl"></div>
    <div class="partFourCon"  id="ScrollBox">
      <ul class="pro">

					 
<?php $_smarty_tpl->smarty->_tag_stack[] = array('emmm', array('form'=>"photo",'row'=>"5",'lang'=>"cn",'id'=>"0",'name'=>"emmm")); $_block_repeat=true; echo smarty_block_emmm(array('form'=>"photo",'row'=>"5",'lang'=>"cn",'id'=>"0",'name'=>"emmm"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

      	             <li> <a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" class="proimg"><img src="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['minimg'];?>
" width="206" height="206" alt="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" /></a> <a href="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
" class="proname"><?php echo $_smarty_tpl->tpl_vars['emmm']->value['title'];?>
</a> <font class="time">时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['emmm']->value['time'],"%Y-%m-%d");?>
</font> </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_emmm(array('form'=>"photo",'row'=>"5",'lang'=>"cn",'id'=>"0",'name'=>"emmm"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 

        	      </ul>
    </div>
    <div class="right ctrl"></div>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
