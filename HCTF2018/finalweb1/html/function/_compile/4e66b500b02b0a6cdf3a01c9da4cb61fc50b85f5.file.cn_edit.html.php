<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:35:22
         compiled from "..\..\templates\user\cn_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:7510016535c13876aabb352-07920280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e66b500b02b0a6cdf3a01c9da4cb61fc50b85f5' => 
    array (
      0 => '..\\..\\templates\\user\\cn_edit.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7510016535c13876aabb352-07920280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'templatepath' => 0,
    'webpath' => 0,
    'user' => 0,
    'problem' => 0,
    'op' => 0,
    'ip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c13876b0ae747_95856592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c13876b0ae747_95856592')) {function content_5c13876b0ae747_95856592($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            
            <form id="form1" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/emmm_play.class.php?emmm_cms=edit&lang=cn" class="registerform">
            <table width="100%" border="0" class="table">
                  <tr>
                    <td><div align="right">登录账号：</div></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                    <td><div align="right">姓名：</div></td>
                    <td><input type="text" name="COL_Username" class="input" datatype="*" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" />
                      <font color="#FF0000">*</font></td>
                  </tr>
                  <tr>
                    <td><div align="right">登录密码：</div></td>
                    <td><input type="password" name="COL_Userpass" class="input" /> 
                    <font color="#FF0000">*</font> 不修改保持为空！</td>
                    <td><div align="right">电话：</div></td>
                    <td><input type="text" name="COL_Usertel" class="input" datatype="n" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['tel'];?>
" />
                      <font color="#FF0000">*</font></td>
                  </tr>
                  <tr>
                    <td><div align="right">密码确认：</div></td>
                    <td><input type="password" name="COL_Userpass2" class="input" /> 
                    <font color="#FF0000">*</font> 不修改保持为空！</td>
                    <td><div align="right">地址：</div></td>
                    <td><input type="text" name="COL_Useradd" class="input" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['add'];?>
" /></td>
                  </tr>
                  <tr>
                    <td><div align="right">QQ：</div></td>
                    <td><input type="text" name="COL_Userqq" class="input" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['qq'];?>
" /></td>
                    <td><div align="right">SKYPE：</div></td>
                    <td><input type="text" name="COL_Userskype" class="input" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['skype'];?>
" /></td>
                  </tr>
                  <tr>
                    <td><div align="right">旺旺：</div></td>
                    <td><input type="text" name="COL_Useraliww" class="input" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['aliww'];?>
" /></td>
                    <td></td>
                    <td></td>
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
" <?php if ($_smarty_tpl->tpl_vars['op']->value['title']==$_smarty_tpl->tpl_vars['user']->value['problem']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>
</option>
					<?php } ?>
					</select><font color="#FF0000">*</font>
					
					</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><div align="right">问题答案：</div></td>
                    <td><input type="text" name="COL_Useranswer" class="input" datatype="*" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['answer'];?>
" /><font color="#FF0000">*</font></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>

                    <td><div align="right">个人签名：</div></td>
                    <td><textarea name="COL_Usertext" style=" width:300px; height:60px; border:1px #CCCCCC solid;"><?php echo $_smarty_tpl->tpl_vars['user']->value['text'];?>
</textarea></td>               
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><div align="right">验证码：</div></td>
                    <td><input type="text" name="code" class="input3" datatype="*" /> <font color="#FF0000">*</font>&nbsp;<img title="点击刷新" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_code.php" align="absbottom" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_code.php?'+Math.random();" width="80" height="25"></img></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>
                    <input type="hidden" name="usercode" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['code'];?>
" />
                    <input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value['lang'];?>
" />
                    <input type="hidden" name="password" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
" />
                    <input type="submit" name="Submit" value="提交" class="btn radius-10 btn-warning pd-15" />
                   &nbsp;<input type="reset" name="Submit2" value="重置" class="btn btn-danger radius-10 pd-15" /></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
            </table>
            </form>
            <link rel="stylesheet" href="../../function/plugs/Validform/style.css" type="text/css" />
            <script type="text/javascript" src="../../function/plugs/Validform/Validform_v5.3.2.js"></script>
            <script type="text/javascript">
            $(function(){
                $(".registerform").Validform();  //就这一行代码！;
            })
            </script>
            
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html>
<?php }} ?>
