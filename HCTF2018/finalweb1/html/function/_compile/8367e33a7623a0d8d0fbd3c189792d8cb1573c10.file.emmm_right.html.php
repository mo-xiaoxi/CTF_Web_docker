<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 05:39:54
         compiled from "templates/emmm_right.html" */ ?>
<?php /*%%SmartyHeaderCode:8350456835c1261e43cc840-59275432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8367e33a7623a0d8d0fbd3c189792d8cb1573c10' => 
    array (
      0 => 'templates/emmm_right.html',
      1 => 1544793104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8350456835c1261e43cc840-59275432',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1261e8db49b9_43231069',
  'variables' => 
  array (
    'emmm_rdate' => 0,
    'version' => 0,
    'versiondate' => 0,
    'shuju' => 0,
    'empower' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1261e8db49b9_43231069')) {function content_5c1261e8db49b9_43231069($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta http-equiv="x-ua-compatible" content="ie=7" /> 
<title></title> 
<link href="templates/images/emmm_login.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript" src="../../function/plugs/jquery/1.8.3/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="../../function/plugs/highcharts/highcharts.js"></script> 
<script type="text/javascript" src="../../function/plugs/highcharts/exporting.js"></script> 
<script src="../../function/plugs/layer/layer.min.js"></script>
<script>
$(function () {
    $('#container').highcharts({
        title: {
            text: '',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
		credits: { //去掉链接
    		 enabled: false
		} ,
        xAxis: {
            categories: ['1月', '2月', '3月', '4月', '5月', '6月','7月', '8月', '9月', '10月', '11月', '12月']
        },
        yAxis: {
            title: {
                text: '<?php echo $_smarty_tpl->tpl_vars['emmm_rdate']->value['d'];?>
年度数据报告'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '个'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: '商品订单量',
            data: [<?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"01"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"02"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"03"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"04"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"05"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"06"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"07"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"08"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"09"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"10"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"11"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"buy",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"12"),$_smarty_tpl);?>
]
        }, {
            name: '订单发货量',
            data: [<?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"01"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"02"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"03"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"04"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"05"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"06"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"07"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"08"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"09"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"10"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"11"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"send",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"12"),$_smarty_tpl);?>
]
        }, {
            name: '成交量',
            data: [<?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"01"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"02"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"03"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"04"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"05"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"06"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"07"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"08"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"09"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"10"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"11"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"pay",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"12"),$_smarty_tpl);?>
]
        }, {
            name: '会员注册数',
            data: [<?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"01"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"02"),$_smarty_tpl);?>
,<?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"03"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"04"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"05"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"06"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"07"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"08"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"09"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"10"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"11"),$_smarty_tpl);?>
, <?php echo emmm_tongji(array('type'=>"user",'datey'=>$_smarty_tpl->tpl_vars['emmm_rdate']->value['d'],'datem'=>"12"),$_smarty_tpl);?>
]
        }]
    });
});
</script>
</head>
<body>
<div id="loading" style=" width:500px; height:60px; padding-top:30px; background:#FFFFFF; border:1px #6699FF solid; text-align:center; z-index:9999; position:absolute; top:200px; left:200px;">
<p><img src="../../skin/ajax_loader.gif" border="0"></p>
<p style="margin-top:20px;">系统初始化，请稍等为您加载中... ...</p>
</div>
	<div style="width:94%; height:auto; padding:20px;">
			<div class="emmm_data">
				<h1><span style="float:right; margin-right:20px;">
                
				<script type="text/JavaScript">
                <!--
                function MM_jumpMenu(targ,selObj,restore){ //v3.0
                  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
                  if (restore) selObj.selectedIndex=0;
                }
                //-->
                </script>
                <style type="text/css">
                	.dateurl { margin-top:10px;}
                </style>
                  <form name="form1" id="form1" class="dateurl">
                      <select name="menu1" onchange="MM_jumpMenu('self',this,0)">
                              <option value="emmm_productright.php?date=<?php echo $_smarty_tpl->tpl_vars['emmm_rdate']->value['d'];?>
"><?php echo $_smarty_tpl->tpl_vars['emmm_rdate']->value['d'];?>
</option>
                              <option value="emmm_productright.php?date=<?php echo $_smarty_tpl->tpl_vars['emmm_rdate']->value['q'];?>
"><?php echo $_smarty_tpl->tpl_vars['emmm_rdate']->value['q'];?>
</option>
                      </select>
                  </form>
      
      
				</span><?php echo $_smarty_tpl->tpl_vars['emmm_rdate']->value['d'];?>
&nbsp;网站数据报告</h1>
				<div style="clear:both;"></div>
				<div id="container" style="height:360px"></div>
	  </div>
			<div style="clear:both; height:50px;"></div>
			<div class="emmm_data2">
				<h1>内部统计</h1>
				<div style="clear:both;"></div>
				<div class="banben">
					<p>当前系统版本：<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
(<?php echo $_smarty_tpl->tpl_vars['versiondate']->value;?>
)</p>
					<p><button id="version" onClick="javascript:test()" style="height:20px; border:0px; background:#fff; color:#999999; text-align:left;">>>>检测版本<<<</button><span id="urlcom"></span></p>
				</div>
				<div class="tongji">
				<ul>
					<li>文章：<?php echo $_smarty_tpl->tpl_vars['shuju']->value[0];?>
条</li>
					<li>商品：<?php echo $_smarty_tpl->tpl_vars['shuju']->value[1];?>
件</li>
					<li>图集：<?php echo $_smarty_tpl->tpl_vars['shuju']->value[2];?>
条</li>
					<li>视频：<?php echo $_smarty_tpl->tpl_vars['shuju']->value[3];?>
条</li>
					<li>下载：<?php echo $_smarty_tpl->tpl_vars['shuju']->value[4];?>
条</li>
					<li>招聘：<?php echo $_smarty_tpl->tpl_vars['shuju']->value[5];?>
条</li>
					<li>留言：<?php echo $_smarty_tpl->tpl_vars['shuju']->value[6];?>
条</li>
					<li>友链：<?php echo $_smarty_tpl->tpl_vars['shuju']->value[7];?>
条</li>
					<li style="background: #0099FF;"><a href="emmm_statistics.php"><font color="#FFFFFF">查看网站流量</font></a></li>
				</ul>
				</div>
			</div>
			
			<?php echo $_smarty_tpl->tpl_vars['empower']->value['empowerright'];?>

	</div>
<script>
function test(){
    $.ajax({
    url: 'http://vidar.club/opcms/key.php',
    type: 'GET',  //这里用GET
    async: false,
    data:{version:"<?php echo $_smarty_tpl->tpl_vars['versiondate']->value;?>
"},
    dataType: 'jsonp',  //类型
    jsonp: 'callback', //jsonp回调参数，必需
    success: function(result) {
            //alert(result.version); //回调输出
			document.getElementById('version').innerHTML=result.version;
			document.getElementById('urlcom').innerHTML='<a href="'+result.url+'" target="_blank">'+result.title+'</a>';
        }
    });
};

function dialog(){
	$.layer({
		type: 1,
		title: '专利证书:',
		shade: [0],
		border: [5, 0.3, '#000'],
		area: ['448px', '635px'],
		page: {html: '<img src="../../skin/zhengshu.png" width="448" height="600" border="0">'}
	});
};

function fadeOut(){
   document.getElementById("loading").style.display="none";
}
</script>
<script language='javascript'>fadeOut()</script>
<link rel="stylesheet" type="text/css" href="../../function/plugs/context/context.standalone.css">
<script src="../../function/plugs/context/context.js"></script>
<script src="../../function/plugs/context/demo.js"></script>
</body>
</html>
<?php }} ?>
