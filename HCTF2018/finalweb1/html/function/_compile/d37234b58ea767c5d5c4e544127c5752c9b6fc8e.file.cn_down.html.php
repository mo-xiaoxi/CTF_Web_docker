<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:34:26
         compiled from "templates\default\cn\cn_down.html" */ ?>
<?php /*%%SmartyHeaderCode:21421250645c138732464e23-27859907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd37234b58ea767c5d5c4e544127c5752c9b6fc8e' => 
    array (
      0 => 'templates\\default\\cn\\cn_down.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21421250645c138732464e23-27859907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'callcolumn' => 0,
    'emmm' => 0,
    'listname' => 0,
    'crumbs' => 0,
    'op' => 0,
    'ad' => 0,
    'list' => 0,
    'emmmpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c138732d030c6_34354299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c138732d030c6_34354299')) {function content_5c138732d030c6_34354299($_smarty_tpl) {?><?php if (!is_callable('smarty_block_callcolumn')) include './function/class\\block.callcolumn.php';
if (!is_callable('smarty_block_emmm')) include './function/class\\block.emmm.php';
if (!is_callable('smarty_block_list')) include './function/class\\block.list.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\laragon\\www\\ourphp\\function\\emmm\\plugins\\modifier.date_format.php';
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



<div class="wrap">
  <div class="main">
    <div class="fyLeft">
      <dl class="l_pro">
  <dt><a href="#" title="下载中心">下载中心</a></dt>
 
<?php $_smarty_tpl->smarty->_tag_stack[] = array('callcolumn', array('id'=>"6",'row'=>"10",'lang'=>"cn",'type'=>"ty",'name'=>"callcolumn")); $_block_repeat=true; echo smarty_block_callcolumn(array('id'=>"6",'row'=>"10",'lang'=>"cn",'type'=>"ty",'name'=>"callcolumn"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<dd><a href="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
</a></dd>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_callcolumn(array('id'=>"6",'row'=>"10",'lang'=>"cn",'type'=>"ty",'name'=>"callcolumn"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


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
      <div class="mainRightMain">
	  <?php echo $_smarty_tpl->tpl_vars['ad']->value['list'];?>

            <ul class="news_list">
	
	     <table width="100%" border="0" cellpadding="10">
		 <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('id'=>((string)$_smarty_tpl->tpl_vars['listid']->value),'form'=>"down",'name'=>"list")); $_block_repeat=true; echo smarty_block_list(array('id'=>((string)$_smarty_tpl->tpl_vars['listid']->value),'form'=>"down",'name'=>"list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
           <tr>
             <td style="width:120px;" valign="top">
			 <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['minimg'];?>
" border="0" width="120" height="120" />			 </td>
             <td valign="top">
			 	<p style="font-size:14px; color:#333333;"><span style="float:right; color: #999999; font-size:12px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['time'],"%Y,%m,%d %H:%M:%S");?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</a></p>			
				<p style="color:#999999; height:20px; line-height:20px;">授权方式：<?php echo $_smarty_tpl->tpl_vars['list']->value['empower'];?>
&nbsp;|&nbsp;软件类型：<?php echo $_smarty_tpl->tpl_vars['list']->value['type'];?>
&nbsp;|&nbsp;操作语言：<?php echo $_smarty_tpl->tpl_vars['list']->value['lang'];?>
&nbsp;|&nbsp;软件大小：<?php echo $_smarty_tpl->tpl_vars['list']->value['size'];?>
</p>
				<p style="color:#999999; height:20px; line-height:20px;">[<a href="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
">点击下载</a>]</p>
			 </td>
           </tr>
           <tr>
             <td colspan="2" style="border-bottom:1px #CCCCCC dashed; height:2px;">&nbsp;</td>
            </tr>
		 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('id'=>((string)$_smarty_tpl->tpl_vars['listid']->value),'form'=>"down",'name'=>"list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

         </table>
		 
		 
    </ul>    
  
        <div class="clear"></div>
        <div class="page">
		<?php echo $_smarty_tpl->tpl_vars['emmmpage']->value;?>

		</div>
		
		
      </div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
