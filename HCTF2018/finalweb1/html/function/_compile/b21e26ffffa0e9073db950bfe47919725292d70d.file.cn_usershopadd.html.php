<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 18:44:32
         compiled from "..\..\templates\user\cn_usershopadd.html" */ ?>
<?php /*%%SmartyHeaderCode:11564747385c1389903bd328-23303290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b21e26ffffa0e9073db950bfe47919725292d70d' => 
    array (
      0 => '..\\..\\templates\\user\\cn_usershopadd.html',
      1 => 1544771341,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11564747385c1389903bd328-23303290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'templatepath' => 0,
    'webpath' => 0,
    'usershopadd' => 0,
    'op' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1389907889a2_15972253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1389907889a2_15972253')) {function content_5c1389907889a2_15972253($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
client/user/emmm_play.class.php?emmm_cms=shopadd&lang=cn" class="registerform">
            <table width="100%" border="0" class="table table-border table-hover table-bg">
            	<thead>
            	  <tr>
                    <th width="150">创建新的收件人信息</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><div align="right">收件人姓名：</div></td>
                    <td><input type="text" name="COL_Addname" class="input" datatype="*" /></td>
                  </tr>
                  <tr>
                    <td><div align="right">收件人电话：</div></td>
                    <td><input type="text" name="COL_Addtel" class="input" datatype="m" /></td>
                  </tr>
                  <tr>
                    <td><div align="right">收件地址：</div></td>
                    <td>
                    <div id="city_2">
							<select class="prov" name="COL_Add[]"></select> 
							<select class="city" disabled="disabled" name="COL_Add[]"></select>
							<select class="dist" disabled="disabled" name="COL_Add[]"></select>
					</div>
					<input type="text" name="COL_Add[]" class="input" placeholder="详细到门牌号..." datatype="*" />
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>
                    <input type="submit" name="Submit" value="提交" class="btn btn-danger radius-10 pd-15" />
                   &nbsp;<input type="reset" name="Submit2" value="重置" class="btn radius-10 btn-warning pd-15" /></td>
                  </tr>
                </tbody>
            </table>
            </form>
            <link rel="stylesheet" href="../../function/plugs/Validform/style.css" type="text/css" />
            <script type="text/javascript" src="../../function/plugs/Validform/Validform_v5.3.2.js"></script>
            <script type="text/javascript" src="../../function/plugs/city/jquery.cityselect.js"></script>
            <script type="text/javascript">
            $(function(){
                $(".registerform").Validform();  //就这一行代码！;
				$("#city_2").citySelect({
					prov: "黑龙江省",
					city: "哈尔滨",
					nodata: ""
				});
            })
            </script>
            
			<style type="text/css">
				.radio {
					font-family: inherit;
					font-size: inherit;
					font-style: inherit;
					font-weight: inherit;
					-webkit-appearance: radio; 
				}
			</style>
            <form id="form1" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/emmm_play.class.php?emmm_cms=shopadd_index&lang=cn" class="registerform">
                <table width="100%" border="0" class="table table-border table-hover table-bg">
                    <thead>
                      <tr>
                        <th width="150">已创建的列表</th>
                        <th></th>
                        <th width="100"></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usershopadd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
                      <tr <?php if ($_smarty_tpl->tpl_vars['op']->value['index']==1) {?>class="add_xz"<?php }?>>
                        <td><div align="center"><input type="radio" name="opcms" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['op']->value['index']==1) {?>checked<?php }?> class="radio" /></div></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['op']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['op']->value['tel'];?>
 - <?php echo $_smarty_tpl->tpl_vars['op']->value['add'];?>
</td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
client/user/emmm_play.class.php?emmm_cms=shopadd_del&lang=cn&id=<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
" class="btn btn-primary-o radius-10 pd-15">删除</a>
                        </td>
                      </tr>
                    <?php } ?>
                      <tr>
                        <td><div align="center"><input type="submit" name="Submit" value="设置为收货地址" class="btn btn-danger radius-5 pd-5" /></div></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                </table>
            </form>
            </div>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("cn_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div> 
</body>
</html>
<?php }} ?>
