<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:45:16
         compiled from "client\manage\templates\emmm_index.html" */ ?>
<?php /*%%SmartyHeaderCode:17284370875c12575fa1dc49-90738702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd62924e9a3669ef4e4f0654f66244b4965af3add' => 
    array (
      0 => 'client\\manage\\templates\\emmm_index.html',
      1 => 1544771338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17284370875c12575fa1dc49-90738702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c125760d53146_22768678',
  'variables' => 
  array (
    '_adminfont' => 0,
    'templatepath' => 0,
    'webpath' => 0,
    'adminpath' => 0,
    'version' => 0,
    'id' => 0,
    'COL_Adminname' => 0,
    'emmm_out' => 0,
    'empower' => 0,
    'emmm_click' => 0,
    'emmm_adminfont' => 0,
    'emmm_switch' => 0,
    'Pluslist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c125760d53146_22768678')) {function content_5c125760d53146_22768678($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.0 Transitional//EN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=7"/>
    <title><?php echo $_smarty_tpl->tpl_vars['_adminfont']->value['admintitle'];?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
images/emmm_admin.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../../function/plugs/jquery/1.7.2/jquery-1.7.2.min.js"></script>
    <script src="../../function/plugs/layer/layer.min.js"></script>
</head><!--[if IE]>
<body scroll="yes" style="height:93%"><![endif]--><!--[if!IE]><!-->
<body scroll="yes" style="height:100%"><!--<![endif]-->
<script type="text/javascript">function setTab(name, cursel, n) {
    for (i = 1; i <= n; i++) {
        var menu = document.getElementById(name + i);
        var con = document.getElementById("con_" + name + "_" + i);
        try {
            menu.className = i == cursel ? "navon" : "";
            con.style.display = i == cursel ? "block" : "none"
        } catch (e) {
        }
    }
    return false
}</script>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2" height="77" valign="top">
            <div id="header">
                <div class="logo fl">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_productright.php" target="main"></a>
                    <div class="lun"><span style="color:#FA891B">系统版本：<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</span></div>
                </div>
                <ul class="nav">
                    <li id="nav1" onClick="return setTab('nav',1,12)" class="navon"><em><a href="#">常用操作</a></em></li>
                    <li id="nav2" onClick="return setTab('nav',2,12)"><em><a href="#">全局</a></em></li>
                    <li id="nav4" onClick="return setTab('nav',4,12)"><em><a href="#">内容</a></em></li>
                    <li id="nav7" onClick="return setTab('nav',7,12)"><em><a href="#">商品</a></em></li>
                    <li id="nav5" onClick="return setTab('nav',5,12)"><em><a href="#">用户</a></em></li>
                    <li id="nav6" onClick="return setTab('nav',6,12)"><em><a href="#">运营</a></em></li>
                    <li id="nav10" onClick="return setTab('nav',10,12)"><em><a href="#">网站优化</a></em></li>
                    <li id="nav3" onClick="return setTab('nav',3,12)"><em><a href="#">移动端</a></em></li>
                    <li id="nav8" onClick="return setTab('nav',8,12)"><em><a href="#">工具</a></em></li>
                    <li id="nav9" onClick="return setTab('nav',9,12)"><em><a href="#">帮助</a></em></li>
                </ul>
                <div class="wei2">
                    <div class="wei fl"><span style=" float:left">当前用户：<a title="查看或修改我的相关信息"
                                                                          href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/_manageview.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                                                                          target="main"><?php echo $_smarty_tpl->tpl_vars['COL_Adminname']->value;?>
</a>&nbsp;|&nbsp;<a
                            href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_out.php?emmm_admin=logout&out=<?php echo $_smarty_tpl->tpl_vars['emmm_out']->value;?>
"
                            class="loginOut" title="退出后台">退出后台</a></span>&nbsp;|&nbsp;<a
                            href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/templates/emmm_cache.html" style="cursor: pointer;"
                            class="siteIndex" target="main"><font color="#CC0000">清空缓存</font></a>&nbsp;|&nbsp;<a
                            href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
" style="cursor: pointer;" class="siteIndex" target="_blank"
                            title="在新窗口中打开访问首页">网站首页</a></div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['empower']->value['empower'];?>

        </td>
    </tr>
    <tr>
        <td valign="top" id="main-fl" style="height:94%; overflow:hidden; ">
            <div id="left" style="height:100%; overflow:auto;">
                <div id="con_nav_1"><h1>常用操作</h1>
                    <div class="cc"/>
                </div>
                <ul>
                    <li><a href="#" onClick="window.location.reload()">刷新常用操作</a></li>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['emmm_click']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['name'] = 'op';
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total']);
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['emmm_click']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['Click_url'];?>
" target="main"><?php echo $_smarty_tpl->tpl_vars['emmm_click']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['Click_title'];?>
</a>
                    </li>
                    <?php endfor; else: ?>
                    <li><a><?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['click'];?>
</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/tags.php" target="main">模板标签</a>
                        <iframe src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_adminrefresh.php" width="0" height="0"></iframe>
                    </li>
                </ul>
            </div>
            <div id="con_nav_2" style="display:none;"><h1>全局</h1>
                <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_lang.php?id=emmm" target="main">网站语言配置</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_webdeploy.php?id=emmm" target="main">网站功能管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_api.php?id=emmm" target="main">API接口管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_watermark.php?id=emmm" target="main">图片水印设置</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_mail.php?id=emmm" target="main">系统邮件设置</a></li>
            </ul>
            <h1>界面</h1>
            <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_templatepages.php?id=emmm" target="main">翻页按钮样式</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_template.php?id=emmm" target="main">模板安装使用</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_filebox.php" target="main">在线编辑模板</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/tags.php" target="main">模板标签</a></li>
            </ul>
            </div>
            <div id="con_nav_3" style="display:none;"><h1>手机网站</h1>
                <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_wap.php?id=emmm" target="main">手机网站设置</a></li>
            </ul>
            <?php if ($_smarty_tpl->tpl_vars['emmm_switch']->value['weixin']=='open') {?><h1>微信</h1>
            <div class="cc"/>
            </div>
            <ul><?php echo $_smarty_tpl->getSubTemplate ("emmm_weixin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</ul>
            <?php }?><?php if ($_smarty_tpl->tpl_vars['emmm_switch']->value['alifuwu']=='open') {?><h1>支付宝服务窗</h1>
            <div class="cc"/>
            </div>
            <ul>
                <li></li>
            </ul>
            <?php }?></div>
            <div id="con_nav_4" style="display:none;"><h1>全站</h1>
                <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_column.php?id=emmm" target="main">网站栏目管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_web.php" target="main">基本信息设置</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_book.php?id=emmm" target="main">留言板管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_banner.php?id=emmm" target="main">Banner管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_qq.php?id=emmm" target="main">浮动客服管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_comment.php?opcms=articleview" target="main">评论管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_callback.php?opcms=article" target="main">查看回收站</a></li>
            </ul>
            <h1>内容管理</h1>
            <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_article.php?id=emmm" target="main">文章管理</a></li>
            </ul>
            <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_photo.php?id=emmm" target="main">图集管理</a></li>
            </ul>
            <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_video.php?id=emmm" target="main">视频管理</a></li>
            </ul>
            <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_down.php?id=emmm" target="main">下载管理</a></li>
            </ul>
            <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_job.php?id=emmm" target="main">招聘管理</a></li>
            </ul>
            </div>
            <div id="con_nav_5" style="display:none;"><h1>用户</h1>
                <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_usercontrol.php?id=emmm" target="main">会员选项</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_user.php?id=emmm" target="main">会员管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_usergroup.php?id=emmm" target="main">用户组管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_usermessage.php?id=emmm" target="main">站内邮件</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_pay.php?id=emmm" target="main">会员充值</a></li>
            </ul>
            <h1>管理员</h1>
            <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_manage.php?id=emmm" target="main">管理员角色</a></li>
            </ul>
            </div>
            <div id="con_nav_6" style="display:none;"><h1>运营</h1>
                <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_ad.php?id=emmm" target="main">广告管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_link.php?id=emmm" target="main">友情链接管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_statistics.php?id=emmm" target="main">网站流量统计</a></li>
            </ul>
            <h1>插件</h1>
            <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_plug.php?id=emmm" target="main">插件管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_app.php?id=emmm" target="main">应用市场</a></li>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['Pluslist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['name'] = 'op';
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['op']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['op']['total']);
?> <?php if (!empty($_smarty_tpl->tpl_vars['Pluslist']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['op']['index']]['pluspath2'])) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['Pluslist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['pluspath'];?>
" target="main"><?php echo $_smarty_tpl->tpl_vars['Pluslist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['name'];?>
</a></li>
                <?php }?><?php endfor; endif; ?>
            </ul>
            </div>
            <div id="con_nav_7" style="display:none;"><h1>商品管理</h1>
                <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_productlist.php?id=emmm" target="main">商品列表</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_product.php?id=emmm" target="main">发布商品</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_productset.php?id=emmm" target="main">商城设置</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_orders.php?id=emmm" target="main">订单处理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_productlibrary.php?id=emmm" target="main">仓库管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_productspecifications.php?id=emmm" target="main">商品规格管理</a>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_productattribute.php?id=emmm" target="main">商品属性参数</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_productp.php?id=emmm" target="main">品牌管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_freight.php?id=emmm" target="main">运费模板</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_comment.php?opcms=productview" target="main">商品评论管理</a>
                </li>
            </ul>
            <h1>优惠</h1>
            <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_integral.php?opcms=emmm" target="main">积分领取管理</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_coupon.php?opcms=emmm" target="main">优惠券管理</a></li>
            </ul>
            </div>
            <div id="con_nav_8" style="display:none;"><h1>工具</h1>
                <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_bak.php?id=emmm" target="main">数据库操作</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_sql.php?id=emmm" target="main">执行SQL语句</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_tz.php" target="main">环境检测</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/plugs/Calculator/index.html" target="main">产品计算器</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_adminsearch.php?id=emmm" target="main">后台信息检索</a></li>
            </ul>
            </div>
            <div id="con_nav_9" style="display:none;"><h1>帮<!----> 助</h1>
                <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_record.php?opcms=emmm" target="main">建站备忘录</a></li>
                <?php echo $_smarty_tpl->tpl_vars['empower']->value['empowerbz'];?>

            </ul>
            </div>
            <div id="con_nav_10" style="display:none;"><h1>优化管理</h1>
                <div class="cc"/>
            </div>
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_webseo.php?id=emmm" target="main">网站相关优化</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_usersearch.php?id=emmm" target="main">用户搜索词查看</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/plugs/seo.html" target="main">推广网站</a></li>
            </ul>
            </div></td>
        <td valign="top" id="mainright" style="height:94%; ">
            <iframe name="main" frameborder="0" width="100%" height="100%" frameborder="0" scrolling="yes"
                    style="overflow: visible;" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
/emmm_productright.php"></iframe>
        </td>
    </tr>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body></html>
<?php }} ?>
