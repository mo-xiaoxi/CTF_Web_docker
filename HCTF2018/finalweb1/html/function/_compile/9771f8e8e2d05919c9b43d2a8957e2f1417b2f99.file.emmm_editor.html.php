<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 06:30:44
         compiled from "templates/emmm_editor.html" */ ?>
<?php /*%%SmartyHeaderCode:9189092225c1268c474ccd5-35696501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9771f8e8e2d05919c9b43d2a8957e2f1417b2f99' => 
    array (
      0 => 'templates/emmm_editor.html',
      1 => 1544793104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9189092225c1268c474ccd5-35696501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1268c47565a1_56519429',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1268c47565a1_56519429')) {function content_5c1268c47565a1_56519429($_smarty_tpl) {?>		<link rel="stylesheet" href="../../function/editor/themes/default/default.css" />
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
