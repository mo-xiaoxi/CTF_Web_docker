<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:33:27
         compiled from "templates\default\cn\cn_shopfoot.html" */ ?>
<?php /*%%SmartyHeaderCode:17712044505c13860e923f32-88379889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3543be1a165c10d9b150f73c9b41582d4bca7bd' => 
    array (
      0 => 'templates\\default\\cn\\cn_shopfoot.html',
      1 => 1544783605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17712044505c13860e923f32-88379889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c13860ed777f6_91622674',
  'variables' => 
  array (
    'webpath' => 0,
    'callcolumn' => 0,
    'emmm_web' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c13860ed777f6_91622674')) {function content_5c13860ed777f6_91622674($_smarty_tpl) {?><?php if (!is_callable('smarty_block_callcolumn')) include './function/class\\block.callcolumn.php';
?><div class="foot1">
    <div class="center">
        <div class="footpic center">
            <li class="p1"><p class="font">24/H为您服务</p><p>24小时人工服务,为您解答问题!</p></li>
            <li class="p2"><p class="font">诚信第一</p><p>保证所售商品全部是正品行货!</p></li>
            <li class="p3"><p class="font">7天无理由退换货</p><p>产品售出7日内无条件可退换货!</p></li>
            <li class="p4 mb"><p class="font">支持货到付款</p><p>全国2082个区县支持货到付款!</p></li>
        </div>
    </div>
    <div class="clear"></div>
    
    <div class="contentlist">
    	<div class="center">
            <dl>
                <dt>新手上路</dt>
                <dd><a href="#">售后流程</a></dd>
                <dd><a href="#">购物流程</a></dd>
                <dd><a href="#">订购方式</a></dd>
            </dl>
            <dl>
                <dt>配送与支付</dt>
                <dd><a href="#">货到付款区域</a></dd>
                <dd><a href="#">配送支付查询</a></dd>
                <dd><a href="#">支付方式说明</a></dd>
            </dl>
            <dl>
                <dt>会员中心</dt>
                <dd><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-userpay-op.html">资金管理</a></dd>
                <dd><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-usercollection.html">我的收藏</a></dd>
                <dd><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-usershopping-op.html">我的订单</a></dd>
            </dl>
            <dl class="bn">
                <dt>服务保证</dt>
                <dd><a href="#">退换货原则</a></dd>
                <dd><a href="#">售后服务保证</a></dd>
                <dd><a href="#">产品质量保证</a></dd>
            </dl>
        </div>
    </div>
	<div class="clear"></div>
    <div class="center foot_nav pt-30">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('callcolumn', array('id'=>"0",'row'=>"8",'lang'=>"cn",'type'=>"td",'name'=>"callcolumn")); $_block_repeat=true; echo smarty_block_callcolumn(array('id'=>"0",'row'=>"8",'lang'=>"cn",'type'=>"td",'name'=>"callcolumn"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['callcolumn']->value['title'];?>
</a>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_callcolumn(array('id'=>"0",'row'=>"8",'lang'=>"cn",'type'=>"td",'name'=>"callcolumn"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <div class="clear"></div>
    <div class="center foot_nav pb-30">
        <p>公司电话：10086&nbsp;&nbsp;手机：10086&nbsp;&nbsp;传真：10086
        <br />
        公司地址：emmmm<br />
		</p>
    </div>
</div>
<div class="clear"></div>
<div class="foot2">
	<div class="center">
    	<p class="bq">Copyright &copy;&nbsp;&nbsp;2018&nbsp;&nbsp;vidar-team&nbsp;&nbsp;版权所有，并保留所有权利。ICP备案证书号：<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webicp'];?>
 </p>
    </div>
</div>
<div class="rightnav">
	<div class="rightnavdh">
    	<ul id="YIQI-UI">
            <li><a href="/client/user/"><i class="icon YIQI-UI-iconfont YIQI-UI-iconfont-user"></i><span>会员中心</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-shoppingcart.html"><i class="icon YIQI-UI-iconfont YIQI-UI-iconfont-cart-selected"></i><span>购物车</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-usershopping.html"><i class="icon YIQI-UI-iconfont YIQI-UI-iconfont-youhuiquan"></i><span>我的订单</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-userintegral.html"><i class="icon YIQI-UI-iconfont YIQI-UI-iconfont-money"></i><span>积分兑换</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
-userpay.html"><i class="icon YIQI-UI-iconfont YIQI-UI-iconfont-pay-alipay-2"></i><span>充值</span></a></li>
            <li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webqq'];?>
&amp;site=qq&amp;menu=yes" target="_blank"><i class="icon YIQI-UI-iconfont YIQI-UI-iconfont-kefu"></i><span>在线客服</span></a></li>
        </ul>
    </div>
    <div class="clear"></div>
    <div class="dhfoot" id="YIQI-UI">
    	<li><a href="#" onclick="gotoTop();return false;"><p class="icon YIQI-UI-iconfont">&#xe684;</p></a></li>
    </div>
</div><?php }} ?>
