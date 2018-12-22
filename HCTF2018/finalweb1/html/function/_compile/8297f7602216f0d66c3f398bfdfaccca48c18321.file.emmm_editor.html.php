<?php /* Smarty version Smarty-3.1.18, created on 2018-12-13 21:03:27
         compiled from "templates\emmm_editor.html" */ ?>
<?php /*%%SmartyHeaderCode:12353825085c12589f94e6c9-99094835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8297f7602216f0d66c3f398bfdfaccca48c18321' => 
    array (
      0 => 'templates\\emmm_editor.html',
      1 => 1544617055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12353825085c12589f94e6c9-99094835',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c12589f956f19_34655689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c12589f956f19_34655689')) {function content_5c12589f956f19_34655689($_smarty_tpl) {?>		<link rel="stylesheet" href="../../function/editor/themes/default/default.css" />
		<script charset="utf-8" src="../../function/editor/kindeditor.js"></script>
		<script charset="utf-8" src="../../function/editor/lang/zh_CN.js"></script>
		<script>
			KindEditor.ready(function(K) {
				K.create('textarea[id="container"]', {
					allowFileManager : true,
					autoHeightMode : true,
					afterCreate : function() {
						this.loadPlugin('autoheight');
					}
				});
			});
		</script><?php }} ?>
