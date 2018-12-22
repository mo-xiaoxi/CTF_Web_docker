<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:44:36
         compiled from "..\..\templates\user\cn_userpay.html" */ ?>
<?php /*%%SmartyHeaderCode:14284582945c138994c2b7e9-10074889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd09814110edc9b25f712e62f2e1f285369ad3535' => 
    array (
      0 => '..\\..\\templates\\user\\cn_userpay.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14284582945c138994c2b7e9-10074889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'templatepath' => 0,
    'webpath' => 0,
    'userpaypai' => 0,
    'paylist' => 0,
    'op' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1389950ace13_37452094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1389950ace13_37452094')) {function content_5c1389950ace13_37452094($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\laragon\\www\\ourphp\\function\\emmm\\plugins\\function.cycle.php';
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
        
        <style type="text/css">.new-btn-login-sp{border:1px solid #d74c00;padding:1px;display:inline-block}.new-btn-login{background-color:transparent;background-image:url("../../function/api/alipay_quick/images/new-btn-fixed.png");border:medium none}.new-btn-login{background-position:0 -198px;width:82px;color:#fff;font-weight:bold;height:28px;line-height:28px;padding:0 10px 3px}.new-btn-login:hover{background-position:0 -167px;width:82px;color:#fff;font-weight:bold;height:28px;line-height:28px;padding:0 10px 3px}#tabs0{min-height:535px;width:98%;border:1px solid #cbcbcb}.menu0{width:100%;height:40px;border-bottom:1px #cbcbcb solid;margin-bottom:50px}.menu0 li{display:block;float:left;width:200px;height:40px;line-height:40px;font-size:14px;text-align:center;cursor:pointer}.menu0 li.hover{background:#f2f6fb}#main0 ul{display:none}#main0 ul.block{display:block}.nopay{text-align:center;font-size:14px;}
        </style>
        <script>
        <!--
        function setTab(m,n){
         var tli=document.getElementById("menu"+m).getElementsByTagName("li");
         var mli=document.getElementById("main"+m).getElementsByTagName("ul");
         for(i=0;i<tli.length;i++){
          tli[i].className=i==n?"hover":"";
          mli[i].style.display=i==n?"block":"none";
         }
        }
        //-->
        </script>
        <div id="tabs0">
         <ul class="menu0" id="menu0">
          <li onclick="setTab(0,0)" class="hover">支付宝充值</li>
          <!--li onclick="setTab(0,1)">网银充值</li-->
          <li onclick="setTab(0,1)">记录</li>
         </ul>
         <div style="clear:both;"></div>
         <div class="main" id="main0">
          <ul class="block">
            <?php if ($_smarty_tpl->tpl_vars['userpaypai']->value['alipay_quick'][1]==1) {?>
            <form name="alipayment" action="../../function/api/alipay_quick/alipayapi.php" method="post">
              <table width="100%" border="0" align="center" cellpadding="10">
                <tr>
                  <td width="100"><div align="right">充值金额：</div></td>
                  <td><input size="30" name="WIDtotal_fee" class="border pd-5" style="width:300px; height:25px;" value="0.00" />
                  <span class="ml-10 f-12 f-999">(必填，最大支持小数点后2位)</span></td>
                </tr>
                <tr>
                  <td><div align="right">备注留言：</div></td>
                  <td><input size="30" name="WIDbody" class="border pd-5" style="width:300px; height:25px;"  /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>
					<input type="hidden" name="alipay" value="cz" />
                    <button type="submit" class="btn btn-danger radius-10 pd-15 mt-10">确认付款</button>
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>
                    <span class="f-l mt-20 f-12 f-999">说明：付款后要等到支付宝页面跳转回我公司页面后，在关闭页面或浏览器。</span>
                  </td>
                </tr>
              </table>
              </form>
              <?php } else { ?>
                <div class="nopay">支付宝充值暂时关闭,请选择其它充值方式!</div>
              <?php }?>
          </ul>
		  <ul>
		  
			
			  <table width="100%" border="0" class="table table-border table-hover" style="margin-top:-40px;">
					<tr style="background:url(<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/clubgb.png) repeat-x;">
					  <td width="50"><div align="center">ID</div></td>
					  <td>充账号</td>
					  <td width="100"><div align="center">充值金额</div></td>
					  <td width="100"><div align="center">充值积分</div></td>
					  <td width="200">备注信息</td>
					  <td width="150"><div align="center">充值时间</div></td>
					</tr>
					<?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paylist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
					<tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#ffffff,#f5f5f5"),$_smarty_tpl);?>
">
					  <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
</div></td>
					  <td><?php echo $_smarty_tpl->tpl_vars['op']->value['email'];?>
</td>
					  <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['op']->value['money'];?>
</div></td>
					  <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['op']->value['integral'];?>
</div></td>
					  <td><?php echo $_smarty_tpl->tpl_vars['op']->value['content'];?>
</td>
					  <td><div align="center"><?php echo $_smarty_tpl->tpl_vars['op']->value['time'];?>
</div></td>
					</tr>
					<?php } ?>
			  </table>
			  
		  
		  </ul>
         </div>
        </div>
        
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
