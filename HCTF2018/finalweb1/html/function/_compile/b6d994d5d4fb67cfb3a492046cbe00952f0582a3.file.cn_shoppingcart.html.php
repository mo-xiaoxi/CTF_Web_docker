<?php /* Smarty version Smarty-3.1.18, created on 2018-12-14 20:13:19
         compiled from "templates/default/cn/cn_shoppingcart.html" */ ?>
<?php /*%%SmartyHeaderCode:1001624395c139e5f4a3d69-00233776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d994d5d4fb67cfb3a492046cbe00952f0582a3' => 
    array (
      0 => 'templates/default/cn/cn_shoppingcart.html',
      1 => 1544787928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1001624395c139e5f4a3d69-00233776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'emmm_web' => 0,
    'webpath' => 0,
    'templatepath' => 0,
    'ordersarray' => 0,
    'shoppingcart' => 0,
    'op' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c139e5fb9abb4_84090472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c139e5fb9abb4_84090472')) {function content_5c139e5fb9abb4_84090472($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车 - 企业商城 - <?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['website'];?>
 - Powered by ourphp</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webkeywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['emmm_web']->value['webdescriptions'];?>
"/>
<meta name="Author" content="vidar.club" />
<LINK href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/YIQI-UI.min.css" rel=stylesheet>
<link href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/font/YIQI-UI-iconfont.min.css" rel="stylesheet">
<LINK href="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/css/emmm.css" rel=stylesheet>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/YIQI-UI/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/js/emmm.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/plugs/lazyload/jquery.lazyload.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/js/banner1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templatepath']->value;?>
shop/js/rightnav.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("img").lazyload({ 
		 effect: "fadeIn"
	});    
	tcjs('wx');
	tcjs('sj');
	tcjs('wxkf');
	navjs('navleft');
});
</script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_shoptop.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="clear"></div>
	<div class="center">
        <div class="shopviewright" style="width:1200px;">
            <ul>

		
		<script> 
		$(function(){ 
			var _url = $('#siteurl').val();
			$('.delete').click(function(){
			  setTotal();
			  t.hide();
			});
		
			$(".add").click(function(){ 
				var t=$(this).parent('li').find('input[class*=text_box]'); 
				t.val(parseInt(t.val())+1); 
				setTotal(); 
			}); 
		
			$(".min").click(function(){ 
				var t=$(this).parent('li').find('input[class*=text_box]'); 
				t.val(parseInt(t.val())-1) 
				if(parseInt(t.val())<1){ 
					t.val(1); 
				}
				setTotal(); 
			});
		
		  $('.text_box').keyup(function(){
			setTotal();
		  });
		  
		  function setTotal(){ 
			var s=0; 
			$("#tab dt").each(function(){ 
			  var numbers = parseInt($(this).find('input[class*=text_box]').val());
			  if($.isNumeric(numbers)){
					numbers = parseInt(numbers);
						}else{
					numbers = 0;
			  }
			  $(this).find('input[class*=text_box]').val(numbers);
			  s += numbers*parseFloat($(this).find('span[class*=price]').text());
				// bof 用ajax在_url中删除指定的购物车中$_SESSION相关信息
				var pid =$(this).find('input[class*=product_id]');
				$.ajax({
					url:_url,
					type: 'post',
					data:{proid : pid.val()},
					success: function(data){ 
						// 回应    
					}
				}); 
				// end
			}); 
			$("#total").html(s.toFixed(2)); 
		  } 
		 // setTotal(); 

		});
		function add(id){
			$("#addli li").removeClass("gb");
			$("#add"+id).addClass("gb");
			$("#shopaddid").val(id);
		}
		</script> 
		<style type="text/css">
			td { padding:5px;}
			.min{ width:20px; height:30px; border:0px; float:left;}
			.text_box { width:50px; height:28px; border:1px #CCCCCC solid; line-height:28px; float:left; text-align:center}
			.add{ width:20px; height:30px; border:0px; float:left;}
			.price {color:#cc0000;}
			.input{width:300px; height:20px; line-height:20px; border:1px #CCCCCC solid; padding:5px;}
			.spzj { font-size:20px;}
			.spzj #total {color:#CC0000; font-weight:bold; font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;}
		</style>
		<?php if ($_smarty_tpl->tpl_vars['ordersarray']->value==1) {?>
			<form id="form1" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
?cn-shoppingorders.html-&emmm_cms=buy" class="registerform">
			<table width="100%" border="1" cellpadding="10" bordercolor="#CCCCCC" bgcolor="#FFFFFF" style="margin:30px 0; border-collapse:collapse;" id="tab">
			<tr>
				<td colspan="6"><img src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/shoppingcart.png" /></td>
			  </tr>
			  <tr style="background:url(<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/clubgb.png) repeat-x;">
				<td width="150"></td>
				<td>购物信息</td>
				<td width="80">网站价格</td>
				<td width="80">您的价格</td>
				<td width="120">购买数量</td>
				<td width="40">&nbsp;</td>
			  </tr>
			  
			  <?php  $_smarty_tpl->tpl_vars['op'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['op']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shoppingcart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['op']->key => $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->_loop = true;
?>
			  <tr>
				<td rowspan="2"><div align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['op']->value['img'];?>
" width="130" height="130" /></div></td>
				<td><p style="font-size:14px; color:#000000;"><?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>
</p>
				<p style="color: #999999; font-size:12px; margin-top:10px;"><?php echo $_smarty_tpl->tpl_vars['op']->value['attribute'];?>
</p>
				<input type="hidden" name="emmm_opcms[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['id'];?>
" />
				<input type="hidden" name="emmm_opcms[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['title'];?>
" />
				<input type="hidden" name="emmm_opcms[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['attribute'];?>
" />
				<input type="hidden" name="emmm_opcms[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['weight'];?>
" />
				<input type="hidden" name="emmm_opcms[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['freight'];?>
" />
				</td>
				<td rowspan="2"><del><?php echo $_smarty_tpl->tpl_vars['op']->value['webmarket'];?>
&nbsp;元</del>
				<input type="hidden" name="emmm_opcms[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['webmarket'];?>
" /></td>

				<td colspan="2" rowspan="2" style="font-size:16px;">
					<dt>
					  <table width="100%" border="0" cellpadding="10">
						<tr>
						  <td style="width:70px;font-size:16px;"><span class="price"><?php echo $_smarty_tpl->tpl_vars['op']->value['usermarket'];?>
</span>&nbsp;元
						  <input type="hidden" name="emmm_opcms[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['usermarket'];?>
" /></td>
						  <td>
								  <li>
								  <input class="min" name="" type="button" value="-" /> 
								  <input class="text_box" name="emmm_opcms[]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['number'];?>
" readonly="readonly" /> 
								  <input class="add" name="" type="button" value="+" />
								  </li>
						  </td>
						</tr>
					  </table> 
					</dt> 
				</td>

				<td rowspan="2" style="font-size:16px;"><div align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
function/emmm_play.class.php?emmm_shopping=<?php echo $_smarty_tpl->tpl_vars['op']->value['cartid'];?>
&lang=cn" onclick="javascript:return confirm('确认删除吗?')"><img src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/Trash.png" alt="删除" title="删除" /></a></div></td>
			  </tr>
			  <tr>
				<td>买家留言：
				<input type="text" name="emmm_opcms[]" class="input"/>
				<input type="hidden" name="emmm_opcms[]" value="<?php echo $_smarty_tpl->tpl_vars['op']->value['barcode'];?>
" />
				
				<input type="hidden" name="emmm_opcms[]" value="|" />
				
				</td>
			  </tr>
              <tr>
              	<td colspan="6" style="height:5px; border-bottom:1px #ebebeb solid;"></td>
              </tr>
			  <?php } ?>
			</table>
			<table width="100%">
			  <tr>
				<td valign="top" class="spzj">商品总价：<label id="total"><?php echo $_smarty_tpl->tpl_vars['op']->value['total'];?>
</label>&nbsp;元</td>
				<td>
					<div id="YIQI-UI">
						<div class="f-r mb-30">
							<input name="button" type="button" class="btn btn-success radius-5 pd-15"  onclick=window.open("<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
","_self") value="继续购物" />
							<input type="submit" name="Submit" value="结账付款" class="btn btn-danger radius-5 pt-15 pb-15 pl-40 pr-40" />
						</div>
					</div>
				</td>
				</tr>
			</table>
            <div class="clear"></div>
			</form>
			<?php } else { ?>
			<table width="100%" border="0" align="center" cellpadding="10">
				<tr>
				  <td>
					<div align="center">
					<img src="<?php echo $_smarty_tpl->tpl_vars['webpath']->value;?>
skin/ordersno.jpg" style="margin-top:50px;">
					</div>
				  </td>
				</tr>
			</table>
			<?php }?>
		

            </ul>
        </div>
    </div>
<div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate ("cn/cn_shopfoot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
