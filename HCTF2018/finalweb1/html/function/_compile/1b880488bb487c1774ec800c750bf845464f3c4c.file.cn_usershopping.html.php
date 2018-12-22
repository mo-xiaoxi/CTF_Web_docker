<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:35:16
         compiled from "..\..\templates\user\cn_usershopping.html" */ ?>
<?php /*%%SmartyHeaderCode:13335221625c13876416a098-18816694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b880488bb487c1774ec800c750bf845464f3c4c' => 
    array (
      0 => '..\\..\\templates\\user\\cn_usershopping.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13335221625c13876416a098-18816694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'templatepath' => 0,
    'webpath' => 0,
    'orderslist' => 0,
    'op' => 0,
    'ip' => 0,
    'emmmpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c138764b09797_01740721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c138764b09797_01740721')) {function content_5c138764b09797_01740721($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\laragon\\www\\ourphp\\function\\emmm\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\laragon\\www\\ourphp\\function\\emmm\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员中心 - <?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
 - Powered by ourphp</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
css/style.css" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/jquery-2.1.1.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/YIQI-UI.min.css" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/font/YIQI-UI-iconfont.min.css" rel="stylesheet">
</head>
<body>
<div id="YIQI-UI">
    <?php echo $_smarty_tpl->getSubTemplate ("cn_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
    <div class="clear"></div>
    <div class="emmm_center">
    <div class="clear"></div>
    
        <div class="emmm_login">
            <div class="emmm_user_left">
                <?php echo $_smarty_tpl->getSubTemplate ("cn_leftnav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
            </div>
            <div class="emmm_user_right">
            
            
            <script src="../../function/plugs/layer/layer.min.js"></script>
            <style type="text/css">
            tr,td { padding:6px;}
			input {-webkit-appearance: checkbox; border:1px #ccc solid; }
            </style>
            
            <?php if (isset($_GET['tag'])) {?>
            <script type="text/javascript">$(document).ready(function(){$("#<?php echo $_GET['tag'];?>
").addClass("btn btn-primary radius-5 pt-5 pb-5 pl-10 pr-10");});</script>
            <?php } else { ?>
            <script type="text/javascript">$(document).ready(function(){$("#qb").addClass("btn btn-primary radius-5 pt-5 pb-5 pl-10 pr-10");});</script>
            <?php }?>
			</script>
            <form id="form2" name="form2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_play.class.php?emmm_shoporders">
              <table width="100%" border="0" class="table table-border table-hover">
              	<tr>
                	<td colspan="7" class="shopnav">
                    	<a href="?cn-usershopping-op.html" id="qb">全部订单</a>
                        <a href="?cn-usershopping-op.html-&tag=dfk" id="dfk">待付款</a>
                        <a href="?cn-usershopping-op.html-&tag=dfh" id="dfh">待发货</a>
                        <a href="?cn-usershopping-op.html-&tag=dqs" id="dqs">待签收/评价</a>
                    </td>
                </tr>
                <tr style="background:url(<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/clubgb.png) repeat-x;">
                  <td width="20"></td>
                  <td width="200">单号</td>
                  <td>商品</td>
                  <td width="80">价格</td>
                  <td width="70">&nbsp;</td>
                  <td width="70">&nbsp;</td>
                  <td width="40">&nbsp;</td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
                <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#ffffff,#f5f5f5"),$_smarty_tpl);?>
">
                  <td><?php if ($_smarty_tpl->tpl_vars['op']->value['pay']==1) {?><div align="center"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
" /></div><?php }?></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['op']->value['number'];?>
</td>
                  <td>
                  <p class="f-14"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['op']->value['title'],30,"...");?>
</p>
                  <p class="f-12 mt-5 f-999"><?php if ($_smarty_tpl->tpl_vars['op']->value['pratt']!='') {?>(<?php echo $_smarty_tpl->tpl_vars['op']->value['pratt'];?>
)<?php }?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['op']->value['text'];?>
</p>
                  </td>
                  <td>
                  <p><?php echo $_smarty_tpl->tpl_vars['op']->value['usermarket'];?>
&nbsp;×&nbsp;<?php echo $_smarty_tpl->tpl_vars['op']->value['num'];?>
</p>
                  <p class="f-999 mt-5">(运费：<?php echo $_smarty_tpl->tpl_vars['op']->value['freight'];?>
元)</p>
                  </td>
                  <td><div align="center">
                  <?php if ($_smarty_tpl->tpl_vars['op']->value['pay']==1) {?>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
?cn-shoppingorders.html-&id=<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/fukuan.gif" border="0" /></a>
                  <?php } else { ?>
                      <?php if ($_smarty_tpl->tpl_vars['op']->value['send']==1) {?>
                      <p>待发货...</p>
                      <?php } else { ?>
                      <p>已发货</p>
                      <p><a href="javascript:dialog('<?php echo $_smarty_tpl->tpl_vars['op']->value['express'];?>
','<?php echo $_smarty_tpl->tpl_vars['op']->value['expressnum'];?>
')"><span style="color:#999999;">物流查询</span></a></p>
                      <?php }?>
                  <?php }?>
                  </div></td>
                  <td><div align="center">
                  <?php if ($_smarty_tpl->tpl_vars['op']->value['send']!=1) {?>
                    <?php if ($_smarty_tpl->tpl_vars['op']->value['sign']==0) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-usershopping-op.html-&emmm_cms=sign&id=<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
&dh=<?php echo $_smarty_tpl->tpl_vars['op']->value['number'];?>
" onclick="javascript:return confirm('确认签收吗?')">【签收】</a>
                        <?php } else { ?>
                        已签收
                    <?php }?>
                  <?php }?>
                  </div></td>
                  <td><div align="center">
                  <?php if ($_smarty_tpl->tpl_vars['op']->value['pay']==1) {?>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-usershopping-op.html-&emmm_cms=del&id=<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
&dh=<?php echo $_smarty_tpl->tpl_vars['op']->value['number'];?>
" onclick="javascript:return confirm('确认删除吗?')">删除</a>
                        <?php } else { ?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['op']->value['sign']==1) {?>
                            <a href="../../function/plugs/Comment/product-content.php?id=<?php echo $_smarty_tpl->tpl_vars['op']->value['prid'];?>
&type=productview&row=10" target="_blank">评论</a>
                        <?php }?>
                        
                  <?php }?>
                  </div></td>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="7">
                     <input type="submit" value="合并付款" class="btn-l pd-15 btn-lr-10"  />
                     <input type="button" value="未付款商品统一付款" class="btn-r pd-15 btn-rr-10" onclick=window.open("<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
?cn-shoppingorders.html","_self") />
                     <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
" name="lang" />
                  </td>
                </tr>
              </table>
              </form>
              <script> 
                function dialog(title,number){
                    $.layer({
                        type: 2,
                        title: '快递查询',
                        shade: [0],
                        border: [5, 0.3, '#000'],
                        area: ['600px', '340px'],
                        iframe:{src: '../../function/api/kuaidi100/index.php?title='+title+'&number='+number}
                    });
                };
                </script>
                 
                <link rel="stylesheet" href="../../function/plugs/Validform/style.css" type="text/css" />
                <script type="text/javascript" src="../../function/plugs/Validform/Validform_v5.3.2.js"></script>
                <script type="text/javascript"> 
                $(function(){
                    $(".registerform").Validform();
                })
                </script>
                <div style=" clear:both; height:20px;"></div>
                <?php echo $_smarty_tpl->tpl_vars['emmmpage']->value;?>

              
              
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
