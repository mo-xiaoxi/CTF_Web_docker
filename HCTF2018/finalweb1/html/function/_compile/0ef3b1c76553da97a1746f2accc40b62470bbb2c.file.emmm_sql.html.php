<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 22:46:27
         compiled from "templates/emmm_sql.html" */ ?>
<?php /*%%SmartyHeaderCode:18348596915c1513c3a61fa8-09068829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ef3b1c76553da97a1746f2accc40b62470bbb2c' => 
    array (
      0 => 'templates/emmm_sql.html',
      1 => 1544793104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18348596915c1513c3a61fa8-09068829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_adminfont' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1513c3ae1126_80194209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1513c3ae1126_80194209')) {function content_5c1513c3ae1126_80194209($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['admintitle'];?>
</title>
<link href="templates/images/emmm_login.css" rel="stylesheet" type="text/css"> 
<?php echo $_smarty_tpl->getConfigVariable('jq172');?>

<script src="../../function/plugs/layer/layer.min.js"></script>
<script>
<!--
/*第一种形式 第二种形式 更换显示样式*/
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
</head>

<body>
<div style="height:50px;"></div>
<div style="clear:both"></div>
<div id="tabs0">
 <ul class="menu0" id="menu0">
  <li class="hover">执行SQL语句</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
	  <li>
	    <form id="form1" name="form1" method="post" action="?emmm_cms=add">
        <table width="98%" border="0" cellpadding="10">
                <tr>
                  <td width="12%"><div align="right">说明：</div></td>
                  <td width="88%" valign="top"><p>&nbsp;</p>
                  <p style="font-size:14px; height:25px;">这里仅仅是一个辅助功能，可以完成插入，删除，修改等SQL操作。不要把它当成一个常用操作。</p>
                  <p style="font-size:14px; height:25px;">严重警告：除非您对我们的数据库结构或SQL很熟悉的情况下，在使用本功能。否则不要使用该功能，如有意外会导致数据库崩溃！</p></td>
                </tr>
                <tr>
                  <td valign="top"><div align="right">SQL语句</div></td>
                  <td><textarea name="sql" class="wtextarea" style="width:720px;"></textarea><br /><br />
				  sql写法 如：INSERT INTO emmm_userleve VALUES('1','普通会员','0');<br />
				  支持多条sql执行，请用 ;  分开
				  </td>
                </tr>
                <tr>
                  <td><div align="right">口令码</div></td>
                  <td><input type="password" name="kl" class="win" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="Submit" value="提交" class="emmm-anniu" /></td>
                </tr>
         </table>
        </form>
	  </li>
  </ul>
 </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
