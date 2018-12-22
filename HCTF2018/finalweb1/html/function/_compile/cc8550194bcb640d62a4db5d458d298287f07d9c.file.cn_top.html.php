<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 05:37:39
         compiled from "templates/default/cn/cn_top.html" */ ?>
<?php /*%%SmartyHeaderCode:344788725c1261fb12bc85-49655941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc8550194bcb640d62a4db5d458d298287f07d9c' => 
    array (
      0 => 'templates/default/cn/cn_top.html',
      1 => 1544793105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '344788725c1261fb12bc85-49655941',
  'function' => 
  array (
    'menu' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1261fc80c5e7_37825329',
  'variables' => 
  array (
    'ad' => 0,
    'webpath' => 0,
    'emmm_web' => 0,
    'data' => 0,
    'ip' => 0,
    'op' => 0,
    'navid' => 0,
    'column' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1261fc80c5e7_37825329')) {function content_5c1261fc80c5e7_37825329($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['ad']->value['head'];?>

<script src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/layer/layer.min.js"></script>
<div class="header">
  <div class="header_top">
	<div class="main pdx">
		<?php if (isset($_SESSION['username'])) {?>
		您好！<a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/"><?php echo $_SESSION['username'];?>
</a>
		<?php } else { ?>
		<a href="javascript:dialog()">会员登录</a> - <a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-reg.html">免费注册</a>
		<?php }?>
		<script> 
		function dialog(){
			$.layer({
				type: 1,
				title: '会员登录',
				shade: [0],
				border: [5, 0.3, '#000'],
				area: ['410px', '220px'],
				page: {html: '<form id="form1" name="form1" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/emmm_play.class.php?emmm_cms=login" class="registerform"><table width="100%" border="0" cellpadding="5" style="font-size:12px;"><tr><td><div align="right">登录账号：</div></td><td><input type="text" name="COL_Useremail" style="width:300px; height:30px; border:1px #CCCCCC solid; line-height:30px; color:#999999" /><font color="#FF0000">*</font></td></tr><tr><td><div align="right">登录密码：</div></td><td><input type="password" name="COL_Userpass" style="width:300px; height:30px; border:1px #CCCCCC solid; line-height:30px; color:#999999" /><font color="#FF0000">*</font></td></tr><tr><td><div align="right">验证码：</div></td><td><input type="text" name="code" style="width:100px; height:30px; border:1px #CCCCCC solid; line-height:30px; color:#999999" onfocus="document.getElementById(\'checkcode\').src+=\'?\'" /><font color="#FF0000">*</font>&nbsp;<img title="点击刷新" id="checkcode" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_code.php" align="absbottom" onclick="this.src=\'<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_code.php?\'+Math.random();" width="80" height="25"></img></td></tr><tr><td><div align="right"></div></td><td><input type="submit" name="Submit" value="登录" style="width:100px; height:30px; border:0px; background:#0099FF; color:#FFFFFF;"/></td></tr></table></form>'}

			});
		}
		function tcjs(type){
		  $("."+type).hover(function(){
			$("#"+type).show();
			},function(){
			$("#"+type).hide();
		  });
		}
		
		$(document).ready(function(){  
			tcjs('wx');
			tcjs('sj');
		});

		</script>
	</div>
  </div>
  <div class="main">
		<a href="/index.php" title="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
限公司" class="logo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['weblogo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
" />
		</a>
		<div class="tel">
			<p>服务热线</p>
			<p>10086</p>
		</div>
		<div class="topsearch">
			<form name="search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
search.php?temp=search">
				<input type="text" class="text" name="content" id="content" value="请输入搜索关键词" onfocus="this.value=''" onblur="if(!value){value=defaultValue}"/>
				<div class="select">
					<select id="sid" style="display: none" name="sid">
					<option value="article" selected="selected">文章</option>
					<option value="product" >商品</option>
					<option value="photo" >案例</option>
					<option value="video" >视频</option>
					<option value="down" >文档</option>
					<option value="job" >招聘</option>
					</select>
				</div>
				<input type="hidden" name="lang" value="cn" />
				<input type="hidden" name="type" value="pc" />
				<input type="submit" title="搜索" class="button" value="搜索"/>
			</form>
			<script type=text/javascript>
			jQuery(document).ready(function() {
				jQuery("#sid").selectbox();
			});
			</script> 
		</div>
  </div>
</div>
<div class="menu">
    <div class="nav_emmm">
        <ul class="nav">
            <?php if (!function_exists('smarty_template_function_menu')) {
    function smarty_template_function_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                    <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
                        <li class="item <?php if ($_smarty_tpl->tpl_vars['ip']->value['type']=='shop.html') {?><?php $_smarty_tpl->tpl_vars["navid"] = new Smarty_variable("3", null, 0);?><?php if ($_smarty_tpl->tpl_vars['op']->value['id']==$_smarty_tpl->tpl_vars['navid']->value) {?>navgb<?php }?><?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['op']->value['child'])) {?>child<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['op']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>
</a>
                        <?php if (!empty($_smarty_tpl->tpl_vars['op']->value['child'])) {?>
                        <ul class="nav">
                            <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['op']->value['child']));?>

                        </ul>
                        <?php }?>
                        </li>
                    <?php } ?>
            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

            <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['column']->value));?>

        </ul>
    </div>
</div>
<?php }} ?>
