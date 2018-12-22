<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 06:30:44
         compiled from "templates/emmm_job.html" */ ?>
<?php /*%%SmartyHeaderCode:16027992865c1268c3a42a59-39719035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5efe0bb4388675beaa68c3926e9b0f92648cba4' => 
    array (
      0 => 'templates/emmm_job.html',
      1 => 1544793104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16027992865c1268c3a42a59-39719035',
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
  'unifunc' => 'content_5c1268c45a8927_03851681',
  'variables' => 
  array (
    'emmm_adminfont' => 0,
    'job' => 0,
    'page' => 0,
    'emmm_access' => 0,
    'emmmpage' => 0,
    'data' => 0,
    'op' => 0,
    'level' => 0,
    'joblist' => 0,
    'emmm_bgcolor' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1268c45a8927_03851681')) {function content_5c1268c45a8927_03851681($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("../../config/emmm.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['emmm_adminfont']->value['admintitle'];?>
</title>
<link href="templates/images/emmm_login.css" rel="stylesheet" type="text/css"> 
<?php echo $_smarty_tpl->getConfigVariable('jq172');?>

<script charset="utf-8" src="templates/images/emmm.js"></script>
</head>

<body>
<div style="height:50px;"></div>
<div style="clear:both"></div>
<div id="tabs0">
 <ul class="menu0" id="menu0">
  <li onclick="setTab(0,0)" class="hover">信息列表</li>
  <li onclick="setTab(0,1)">添加信息</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
	  <li>
		<div class="emmm_newslist">
		<form id="form2" name="form2" method="post" action="?emmm_cms=Batch">
		        <table width="100%" border="0" cellpadding="10" class="emmm_newslist">
                  <tr>
				  <td width="5%" bgcolor="#EBEBEB"><div align="center">批量?</div></td>
				  	<td width="5%" bgcolor="#EBEBEB"><div align="center">ID</div></td>
                    <td width="37%" bgcolor="#EBEBEB">标题</td>
                    <td width="20%" bgcolor="#EBEBEB">属性</td>
					<td width="10%" bgcolor="#EBEBEB">招聘职位</td>
                    <td width="15%" bgcolor="#EBEBEB">发布时间</td>
                    <td width="8%" bgcolor="#EBEBEB">操作</td>
                  </tr>
				  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['op'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['op']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['op']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['job']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                  <tr>
				  <td><div align="center"><input type="checkbox" name="op_b[]" value="<?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
" />
				  	<td><div align="center"><font style="background:#009933; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
</font></div></td>
                    <td>
					<font style="background: #FF9900; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['lang'];?>
</font>
					<font style="background: #0099CC; color:#FFFFFF; padding:2px; text-align:center;"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['class'];?>
</font>
					&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['title'];?>

					</td>
				 	<td><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['att'];?>
</td>
				 	<td><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['work'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['time'];?>
</td>
                    <td><a href="emmm_jobview.php?id=<?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">编辑</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="?emmm_cms=del&id=<?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['op']['index']]['id'];?>
" onclick="javascript:return confirm('确认删除吗?')">删除</a></td>
                  </tr>
				  <?php endfor; else: ?>
				  <tr>
                    <td colspan="7"><?php echo $_smarty_tpl->tpl_vars['emmm_access']->value;?>
</td>
                  </tr>
				  <?php endif; ?>
				  <tr>
				  	<td><div align="center"><input onclick="selectAll()" type="checkbox" name="controlAll" style="controlAll" id="controlAll"/></div></td>
					<td colspan="6"></td>
				  </tr>
				 <tr>
                    <td colspan="7">
					<input type="checkbox" name="COL_Jobattribute[]" value="0" />&nbsp;头条&nbsp;&nbsp;
					<input type="checkbox" name="COL_Jobattribute[]" value="1" />&nbsp;热门&nbsp;&nbsp;
					<input type="checkbox" name="COL_Jobattribute[]" value="2" />&nbsp;滚动&nbsp;&nbsp;
					<input type="checkbox" name="COL_Jobattribute[]" value="3" />&nbsp;推荐&nbsp;&nbsp;[&nbsp;&nbsp;
					<input type="radio" name="h" value="h" />&nbsp;回收站&nbsp;&nbsp;
					<input type="radio" name="h" value="y" />&nbsp;移动&nbsp;&nbsp;
					<input type="radio" name="h" value="s" />&nbsp;删除&nbsp;&nbsp;
					<input type="radio" name="h" value="w" checked="checked" />
					&nbsp;无&nbsp;&nbsp;]&nbsp;&nbsp;
					<input type="submit" name="Submit" value="批量提交" class="emmm_listan" />
					</td>
                  </tr>
                  <tr>
                    <td colspan="7"><?php echo $_smarty_tpl->tpl_vars['emmmpage']->value;?>
</td>
                  </tr>
                </table>
			</form>
		</div>
	  </li>
  </ul>
  
  <ul>
	  <li>
		<form id="form1" name="form1" method="POST" action="?emmm_cms=add" class="registerform">
		<table width="98%" border="0" cellpadding="5" cellspacing="0" bordercolor="#666666" style="border-collapse:collapse; margin-top:20px;" align="center">
		<tr>
		  	<td><div align="right">栏目</div></td>
			<td>

<select name="COL_Jobclass"  datatype="zoo">
	<option value="0" >请选择</option>
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
				<option value="<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['op']->value['lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['op']->value['model']!='job') {?>disabled="true" style="color:#FF0000;"<?php } else { ?> style="color:#009900"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['op']->value['uid']!=0) {?>
					<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['level']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['level']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
					&nbsp;&nbsp;
					<?php }} ?>
					└
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>

				</option>
				
				<?php if (isset($_smarty_tpl->tpl_vars['op']->value['child'])) {?>
					<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['op']->value['child'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

				<?php }?>
			<?php } ?>
	<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

	<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['joblist']->value));?>

</select>
			<font color="#009900">绿色</font>表示可录入项，<font color="#FF0000">红色</font>禁止录入项.
						
			</td>
		  </tr>
		  <tr>
		  	<td><div align="right">标题</div></td>
			<td><input name="COL_Jobtitle" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 datatype="*" nullmsg="标题是必填项!"/><font color=red> (*)</font></td>
		  </tr>
		  <tr>
		  	<td bgcolor="#eeddff">
		  	<div align="right"><b>细节</b></div></td>
			<td bgcolor="#f6eefe"><table width="90%" border="0" cellpadding="5">
                <tr>
                  <td width="11%"><div align="right">招聘职位：</div></td>
                  <td width="33%"><input name="COL_Jobwork" type="text" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                  <td width="10%"><div align="right">工作地点：</div></td>
                  <td width="46%"><input name="COL_Jobadd" type="text" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                </tr>
                <tr>
                  <td><div align="right">工作性质：</div></td>
                  <td><input type="text" name="COL_Jobnature" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 />
				  
				<select onchange="document.form1.COL_Jobnature.value=this.value";>
			    <option value="">=快速选择=</option>
				<option value="全职">全职</option>
				<option value="兼职">兼职</option>
			    </select>
				  </td>
                  <td><div align="right">工作经验：</div></td>
                  <td><input type="text" name="COL_Jobexperience" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 />
				  
				<select onchange="document.form1.COL_Jobexperience.value=this.value";>
			    <option value="">=快速选择=</option>
				<option value="一年以上">一年以上</option>
				<option value="三年以上">三年以上</option>
				<option value="五年以上">五年以上</option>
				<option value="十年以上">十年以上</option>
			    </select>
				  </td>
                </tr>
                <tr>
                  <td><div align="right">最低学历：</div></td>
                  <td><input type="text" name="COL_Jobeducation" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 />
				  
				<select onchange="document.form1.COL_Jobeducation.value=this.value";>
			    <option value="">=快速选择=</option>
				<option value="初中以上">初中以上</option>
				<option value="高中以上">高中以上</option>
				<option value="大学以上">大学以上</option>
				<option value="专职">专职</option>
				<option value="本科">本科</option>
				<option value="博士">博士</option>
				<option value="硕士">硕士</option>
			    </select>
				  </td>
                  <td><div align="right">招聘人数：</div></td>
                  <td><input type="text" name="COL_Jobnumber" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                </tr>
                <tr>
                  <td><div align="right">年龄：</div></td>
                  <td><input type="text" name="COL_Jobage" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                  <td><div align="right">福利：</div></td>
                  <td><input type="text" name="COL_Jobwelfare" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 />

				<select onchange="document.form1.COL_Jobwelfare.value=this.value";>
			    <option value="">=快速选择=</option>
				<option value="包吃">包吃</option>
				<option value="包住">包住</option>
				<option value="包吃、包住">包吃、包住</option>
			    </select>
				  </td>
                </tr>
                <tr>
                  <td><div align="right">月薪：</div></td>
                  <td><input type="text" name="COL_Jobwage" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                  <td><div align="right">联系人：</div></td>
                  <td><input type="text" name="COL_Jobcontact" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                </tr>
                <tr>
                  <td><div align="right">联系电话：</div></td>
                  <td><input type="text" name="COL_Jobtel" class="win3" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /></td>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
		  </tr>	
		  <tr>
		  	<td valign="top">
		  	<div align="right">其它描述</div></td>
			<td><textarea name="COL_Jobcontent" class="wtextarea" id="container" style="width:80%; height:150px;"></textarea><font color=red> (*)</font>
			<?php echo $_smarty_tpl->getSubTemplate ("emmm_editor.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</td>
		  </tr>   
		  <tr>
		  	<td><div align="right">排序</div></td>
			<td><input name="COL_Jobsorting" type="text" class="win2" value="99" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 datatype="*" nullmsg="排序是必填项!"/> 数字越小越靠前！</td>
		  </tr>
		  <tr>
		  	<td><div align="right">属性</div></td>
			<td>
				<input type="checkbox" name="COL_Jobattribute[]" value="0" />&nbsp;头条&nbsp;&nbsp;
				<input type="checkbox" name="COL_Jobattribute[]" value="1" />&nbsp;热门&nbsp;&nbsp;
				<input type="checkbox" name="COL_Jobattribute[]" value="2" />&nbsp;滚动&nbsp;&nbsp;
				<input type="checkbox" name="COL_Jobattribute[]" value="3" />&nbsp;推荐&nbsp;&nbsp;
			</td>
		  </tr>
		  <tr>
		  	<td><div align="right">跳转</div></td>
			<td><input name="COL_Joburl" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 /> 如果为空，则不跳转！</td>
		  </tr>
		  <tr>
			<td></td>
		  	<td><strong>--------------- SEO设置 ---------------</strong></td>
		  </tr>
		  <tr>
		  	<td><div align="right">关键词</div></td>
			<td><input name="COL_Jobtag" type="text" class="win" <?php echo $_smarty_tpl->tpl_vars['emmm_bgcolor']->value;?>
 />&nbsp;请用英文中的 , 格开</td>
		  </tr>
		  <tr>
		  	<td><div align="right">描述</div></td>
			<td><textarea name="COL_Jobdescription" class="wtextarea" ></textarea> 如果为空，自动截取正文前200个字</td>
		  </tr>
		   <tr>
		   	<td></td>
			<td><input type="submit" name="submit" value="提 交" class="emmm-anniu"/></td>
		  </tr>
		   <tr>
		   	<td>&nbsp;</td>
			<td>&nbsp;</td>
		  </tr>
		</table>
		</form>
	  </li>
  </ul>
 </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("emmm_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
