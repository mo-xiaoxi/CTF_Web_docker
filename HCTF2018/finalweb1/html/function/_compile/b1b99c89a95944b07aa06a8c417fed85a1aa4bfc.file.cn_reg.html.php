<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 22:44:50
         compiled from "../../templates/user/cn_reg.html" */ ?>
<?php /*%%SmartyHeaderCode:17468273095c1398a2d184c4-35138433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1b99c89a95944b07aa06a8c417fed85a1aa4bfc' => 
    array (
      0 => '../../templates/user/cn_reg.html',
      1 => 1544793105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17468273095c1398a2d184c4-35138433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1398a3070d28_30757925',
  'variables' => 
  array (
    'emmm_web' => 0,
    'templatepath' => 0,
    'webpath' => 0,
    'usercontrol' => 0,
    'regtable' => 0,
    'problem' => 0,
    'op' => 0,
    'ip' => 0,
    'regconfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1398a3070d28_30757925')) {function content_5c1398a3070d28_30757925($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员中心 - <?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
  - Powered by ourphp</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
css/style.css" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/jquery/1.7.2/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/YIQI-UI.min.css" type="text/css" />
</head>
<body>
<div id="YIQI-UI">
    <?php echo $_smarty_tpl->getSubTemplate ("cn_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="clear"></div>
    <div class="emmm_center">
        <div class="clear"></div>
        <div class="emmm_login">
              <div class="logo_font mb-40">免费注册</div>
              <div class="clear"></div>
              
              <div class="f-l emmm_left">
                
				<script type="text/javascript">
					function regselect(){
						var reg = $('#zh').val();
						$.ajax({  
								type:'get',
								url : '<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-reg.html-&reg&zh='+reg,
								dataType : 'jsonp',  
								jsonp:"jsoncallback",
								async:true,
								beforeSend:function(){},
								success:function(data){
									if(reg == '格式:13888888888' || reg == '格式:77701950@qq.com'){
										$("#regselect").html('*');
									}else{
										$("#regselect").html(data);
									}
								},
								complete:function(){},
								error:function(){}
						});
					}
					var wait=120; 
					function anniu(){
						if (wait == 0) { 
							$('#btn').attr("disabled", false);
							$('#btn').val('获取验证码');
							$("#btn").removeClass("disabled").addClass("btn-success");
							wait = 120; 
						} else { 
							$('#btn').attr("disabled", true); 
							$('#btn').val('重新发送(' + wait + ')');
							$("#btn").removeClass("btn-success").addClass("disabled");
							wait--; 
							setTimeout(function() { 
								anniu();
							}, 1000) 
						};
					}
					function reg_code(){
						var reg = $('#zh').val();
						if(reg == '格式:13888888888' || reg == '格式:77701950@qq.com'){
							alert('* 号不能为空!');
							return false;
						}
						$.ajax({  
								type:'get',
								url : '<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-reg.html-&code&zh='+reg,
								dataType : 'jsonp',  
								jsonp:"jsoncallback",
								async:true,
								beforeSend:function(){},
								success:function(data){},
								complete:function(){anniu();},
								error:function(){}
						});
					}
                </script>
                <?php if ($_smarty_tpl->tpl_vars['usercontrol']->value['regoff']==1) {?>
                <form id="form1" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/emmm_play.class.php?emmm_cms=reg" class="registerform">
                <table width="100%" border="0" cellpadding="0" class="table table-hover">
                	<?php echo $_smarty_tpl->tpl_vars['regtable']->value;?>

                      <tr>
                        <td><div align="right">输入密码：</div></td>
                        <td><input type="password" name="COL_Userpass" class="input" datatype="*6-16" nullmsg="请设置密码！" errormsg="密码范围在6~16位之间！" /><font class="ml-10 f-f00">*</font></td>
                      </tr>
                      <tr>
                        <td><div align="right">确认密码：</div></td>
                        <td><input type="password" name="COL_Userpass2" class="input" datatype="*" recheck="COL_Userpass" nullmsg="请再输入一次密码！" errormsg="您两次输入的密码不一致！" /><font class="ml-10 f-f00">*</font></td>
                      </tr>
                      <tr>
                        <td><div align="right">安全问题：</div></td>
                        <td>
                        <select name="COL_Userproblem" class="input4">
                        <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['problem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>
</option>
                        <?php } ?>
                        </select><font class="ml-10 f-f00">*</font></td>
                      </tr>
                      <tr>
                        <td><div align="right">问题答案：</div></td>
                        <td><input type="text" name="COL_Useranswer" class="input" datatype="*" /><font class="ml-10 f-f00">*</font></td>
                      </tr>
                      <tr>
                        <td><div align="right">验证码：</div></td>
                        <td><input type="text" name="code" class="input3" datatype="*" onfocus="document.getElementById('checkcode').src+='?'" /><font class="ml-10 mr-10 f-f00">*</font><img title="点击刷新" id="checkcode" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_code.php" align="absbottom" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_code.php?'+Math.random();" width="80" height="25"></img></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>
                        <input type="hidden" name="ip" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value['ip'];?>
" />
                        <input type="hidden" name="source" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value['listid'];?>
" />
                        <input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
" />
                        <input type="hidden" name="introducer" value="<?php echo $_smarty_tpl->tpl_vars['regconfig']->value['introducer'];?>
" />
                        <input type="submit" name="Submit" value="提交注册" class="btn btn-danger radius-10 pd-15" />
                       &nbsp;&nbsp; <input type="reset" name="Submit2" value="重新填写" class="btn btn-danger-o radius-10 pd-15" /></td>
                      </tr>
                </table>
                </form>
                <link rel="stylesheet" href="../../function/plugs/Validform/style.css" type="text/css" />
                <script type="text/javascript" src="../../function/plugs/Validform/Validform_v5.3.2.js"></script>
                <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
js/fromsend.js"></script>
                <?php } else { ?>
                    <h3>暂时无法提供注册，请联系管理员！</h3>
                <?php }?>
                
                
                </div>
                <div class="f-r emmm_right2">
                      <table width="100%" border="0">
                        <tr>
                          <td style="text-align:center"><textarea class="textarea border"><?php echo $_smarty_tpl->tpl_vars['usercontrol']->value['protocol'];?>
</textarea></td>
                        </tr>
                        <tr>
                          <td style="text-align:center"><p class="f-f00">点击注册按钮后，意味着您同意以上协议</p></td>
                        </tr>
                        <tr>
                          <td><div class="regtologin"><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/?cn-login.html">登 录</a></div></td>
                        </tr>
                      </table>
                </div>
    	</div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
