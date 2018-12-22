<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 20:13:19
         compiled from "templates/default/cn/cn_shoptop.html" */ ?>
<?php /*%%SmartyHeaderCode:20358924565c139e5fc16666-83276400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea3dc6956b90802a99b59a635d41b52903a384ac' => 
    array (
      0 => 'templates/default/cn/cn_shoptop.html',
      1 => 1544787928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20358924565c139e5fc16666-83276400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mobile' => 0,
    'webpath' => 0,
    'templatepath' => 0,
    'ip' => 0,
    'emmm_web' => 0,
    'sql' => 0,
    'column' => 0,
    'op' => 0,
    'opop' => 0,
    'opopop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c139e6046c146_17852218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c139e6046c146_17852218')) {function content_5c139e6046c146_17852218($_smarty_tpl) {?><?php if (!is_callable('smarty_block_sql')) include './function/class/block.sql.php';
?><?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>

<div class="emmm_top">
    	<div class="top">
        	<div class="center">
            	<div class="left">
                	<a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
" class="gw">企业官网</a>&nbsp;&nbsp;
                	<a class="wx">微信</a>&nbsp;&nbsp;
                    <a class="sj">手机商城</a>
                    <div id="wx">
                    	<img src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/img/erweima.png" />
                        <p>微信扫一扫关注我们!</p>
                    </div>
                    <div id="sj">
                    	<img src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/img/erweima.png" />
                        <p>扫一扫手机访问!</p>
                    </div>
                </div>
                <div class="right">
                 <?php if (isset($_SESSION['username'])) {?>
                	嗨! 欢迎回家,<a href="client/user/"><?php echo $_SESSION['username'];?>
</a>
                    <?php } else { ?>
                    嗨，欢迎来到本网站 <a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-login.html" class="dl">请登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-reg.html">免费注册</a>
                    <?php }?>
                    &nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-usershopping-op.html">我的订单</a>
                </div>
            </div>
        </div>
        <div class="top_content">
        	<div class="center">
                <div class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['weblogo'];?>
" class="logo" /><img src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/img/sclogo.jpg" class="logo2" /></div>
                <div class="center2">
                    <form name="search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
search.php?temp=search" class="search">
                        <input type="text" class="text" name="content" id="content" value="请输入搜索关键词" onfocus="this.value=''" onblur="if(!value){value=defaultValue}"/>
                        <input type="hidden" name="lang" value="cn" />
                        <input type="hidden" name="sid" value="product" />
                        <input type="hidden" name="type" value="pc" />
                        <input type="submit" title="商品搜索" class="button" value=""/>
                    </form>
                    <div class="clear"></div>
                    <p style=" padding-top:3px;">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('sql', array('mysql'=>"SELECT * FROM `emmm_search` where `COL_Searchclick` > 20 order by COL_Searchclick desc limit 0,5",'name'=>"sql")); $_block_repeat=true; echo smarty_block_sql(array('mysql'=>"SELECT * FROM `emmm_search` where `COL_Searchclick` > 20 order by COL_Searchclick desc limit 0,5",'name'=>"sql"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a href="search.php?cn-&content=<?php echo $_smarty_tpl->tpl_vars['sql']->value['COL_Searchtext'];?>
&lang=cn&sid=product"><?php echo $_smarty_tpl->tpl_vars['sql']->value['COL_Searchtext'];?>
</a> 
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_sql(array('mysql'=>"SELECT * FROM `emmm_search` where `COL_Searchclick` > 20 order by COL_Searchclick desc limit 0,5",'name'=>"sql"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </p>
                </div>
                <div class="right">
					<div class="shopbuy">
						<a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-shoppingcart.html">我的购物车</a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="nav">
    <ul class="center dh">
    	<div class="shopfl"><a class="navleft">商品分类</a></div>
			<li><a href="/?cn-shop.html">商城首页</a></li>
			<li><a href="#">最新商品</a></li>
			<li><a href="#">特价商品</a></li>
			<li><a href="/?cn-product-11.html">积分兑换</a></li>
            <li><a href="/?cn-about-9.html">关于我们</a></li>
            <li><a href="/?cn-club.html">联系我们</a></li>
        <div class="clear"></div>
        <!--导航条-->
        <div id="navleft">
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
                <dl>
                <dt><a href="<?php echo $_smarty_tpl->tpl_vars['opop']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['opop']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['opop']->value['title'];?>
</a></dt>
					<?php if (isset($_smarty_tpl->tpl_vars['opop']->value['child'])) {?>
						<?php  $_smarty_tpl->tpl_vars['opopop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opopop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opop']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opopop']->key => $_smarty_tpl->tpl_vars['opopop']->value) {
$_smarty_tpl->tpl_vars['opopop']->_loop = true;
?>
						<dd><a href="<?php echo $_smarty_tpl->tpl_vars['opopop']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['opopop']->value['title'];?>
</a>&nbsp;&nbsp;|&nbsp;&nbsp;</dd>
						<?php } ?>
					<?php }?>
                 </dl>
                <?php } ?>
                <?php }?>
            <?php }?>
            <?php } ?>
            <div class="clear"></div>
            <div class="navkfa">
            	<div class="zxkfnav"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webqq'];?>
&amp;site=qq&amp;menu=yes" target="_blank" class="zxkf">在线客服</a></div>
            </div>
        </div>
        <!--导航条END-->
        
    </ul>
</div>
<?php }} ?>
