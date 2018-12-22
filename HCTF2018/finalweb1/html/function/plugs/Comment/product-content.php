<?php
/*******************************************************************************
* Emmm - 内容管理系统
* Copyright (C) 2016 vidar.club
*******************************************************************************/

include '../../../config/emmm_code.php';
include '../../../config/emmm_config.php';
include '../../../config/emmm_version.php';
include '../../../config/emmm_Language.php';
include '../../emmm_function.class.php';

//全局定义
session_start();
date_default_timezone_set('Asia/Shanghai'); //设置时区
$ValidateCode = $_SESSION["code"];

$COL_Class = isset($_GET['id'])?$_GET['id']:"0";
$COL_Type = isset($_GET['type'])?$_GET['type']:"productview";
$COL_Row = isset($_GET['row'])?$_GET['row']:"10";
$userlogin = '游客';

if($COL_Row > 30){
	exit("<script language=javascript> alert('最多加载30条！');history.go(-1);</script>");
}

if($COL_Type == 'productview'){
	$select = "COL_Title";
	$from = "product";
}else{
	echo '参数出错!';
	exit;
}

$emmm_rs = $db -> select("a.COL_Webocomment ,a.COL_Webpcomment ,a.COL_Pagestype ,a.COL_Pages ,a.COL_Pagefont ,b.".$select,"`emmm_webdeploy` a ,`emmm_".$from."` b","where a.id=1 or b.id=".intval($COL_Class));

$COL_Webocomment = $emmm_rs[0];
$COL_Webpcomment = $emmm_rs[1];
$COL_Articletitle = $emmm_rs[5];
$Parameterse = array(
		'pagetype' => $emmm_rs[2],
		'pagecss' => $emmm_rs[3],
		'pagefont' => $emmm_rs[4],
);

if($COL_Webpcomment == 4){
		if(isset($_SESSION['username'])){
			$username = $_SESSION['username'];
		}else{
			$username = '0';
		}
		$query = $db -> select("`id`","`emmm_orders`","where `COL_Ordersid` = ".intval($COL_Class)." && `COL_Ordersemail` = '".$username."'");
		if($query){
			$userbuy = 1;
		}else{
			$userbuy = 2;
		}
}else{
		$userbuy = 1;
}

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

			//验证
			if($COL_Webpcomment == 2){
				exit("评论被关闭:(");
			}elseif($COL_Webpcomment == 3){
				if(!isset($_SESSION['username'])){
					exit("请先登录:(");
				}
			}
			
			if($userbuy == 2){
				exit("<script language=javascript> alert('只有购买过此商品才可以评论！');history.go(-1);</script>");
			}

			if (!empty($_POST["content"]) == '' || $_POST["code"] == ''){
				exit("<script language=javascript> alert('评论或验证码不能为空！');history.go(-1);</script>");
			}elseif ($_POST["code"] != $ValidateCode){
				exit("<script language=javascript> alert('验证码错误！');history.go(-1);</script>");
			}
			
			if(!isset($_SESSION['username'])){
				$COL_Name = $userlogin;
			}else{
				$COL_Name = $_SESSION['username'];
			}
			
			$COL_Ip = $_SERVER["REMOTE_ADDR"];

			if (!empty($_POST["dafen"])){
				$COL_Scoring = implode('|',$_POST["dafen"]);
			}else{
				$COL_Scoring = '0';
			}
			
			if (!empty($_POST["COL_Vote"])){
				$COL_Vote = $_POST["COL_Vote"];
			}else{
				$COL_Vote = 0;
			}
			
			
			if($COL_Webpcomment == 4){
				$query = $db -> select("`id`","`emmm_comment`","where COL_Class = ".intval($_POST["COL_Class"])." && COL_Name = '".$COL_Name."'");
				if ($query){
					exit("<script language=javascript> alert('您已经评论过了，不可以重复评论！');history.go(-1);</script>");
				}
			}
			
			$query = $db -> insert("`emmm_comment`","`COL_Content` = '".dowith_sql(emmm_sensitive($_POST["content"]))."',`COL_Class` = '".dowith_sql($_POST["COL_Class"])."',`COL_Type` = '".dowith_sql($_POST["COL_Type"])."',`COL_Name` = '".$COL_Name."',`COL_Ip` = '".$COL_Ip."',`COL_Vote` = '".intval($COL_Vote)."',`COL_Scoring` = '".dowith_sql($COL_Scoring)."',`time` = '".date("Y-m-d H:i:s")."'","");
			exit("<script language=javascript> alert('OK!:)');history.go(-1);</script>");
}


//判断数据是否正确
$query = $db -> select("`id`","`emmm_".$from."`","where `id` = ".intval($COL_Class));
if(!$query){
	echo '参数出错或商品已被下架!';
	exit(0);
}

?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
<!-- 声明文档使用的字符编码 -->
<meta charset="utf-8">
<!-- 优先使用 IE 最新版本和 Chrome -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<!-- 网页作者 -->
<meta name="author" content="vidar.club"/>
<!-- 为移动设备添加 viewport -->
<meta name="viewport" content="initial-scale=1, maximum-scale=3, minimum-scale=1, user-scalable=no">
<!-- `width=device-width` 会导致 iPhone 5 添加到主屏后以 WebApp 全屏模式打开页面时出现黑边 http://bigc.at/ios-webapp-viewport-meta.orz -->
<meta name="apple-mobile-web-app-title" content="我的网站">
<!-- 添加到主屏后的标题（iOS 6 新增） -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- 是否启用 WebApp 全屏模式，删除苹果默认的工具栏和菜单栏 -->
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<!-- 设置苹果工具栏颜色 -->
<!-- 启用360浏览器的极速模式(webkit) -->
<meta name="renderer" content="webkit">
<!-- 避免IE使用兼容模式 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- 不让百度转码 -->
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
<meta name="HandheldFriendly" content="true">
<!-- 微软的老式浏览器 -->
<meta name="MobileOptimized" content="320">
<!-- uc强制竖屏 -->
<meta name="screen-orientation" content="portrait">
<!-- QQ强制竖屏 -->
<meta name="x5-orientation" content="portrait">
<!-- UC强制全屏 -->
<meta name="full-screen" content="yes">
<!-- QQ强制全屏 -->
<meta name="x5-fullscreen" content="true">
<!-- UC应用模式 -->
<meta name="browsermode" content="application">
<!-- QQ应用模式 -->
<meta name="x5-page-mode" content="app">
<!-- windows phone 点击无高光 -->
<meta name="msapplication-tap-highlight" content="no">
<title><?php echo $COL_Articletitle; ?> 的相关评论</title>
<link rel="stylesheet" type="text/css" href="../../plugs/YIQI-UI/YIQI-UI.min.css" />
</head>
<body>
<div id="YIQI-UI">
	<table class="table table-border">
	  <tr>
		<td colspan="2"><h1 class="f-16"><?php echo $COL_Articletitle; ?> 的相关评论:</h1></td>
	  </tr>
	<?php
	include '../../emmm_page.class.php';

	$listpage = intval($COL_Row);
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_comment`","where COL_Class = ".intval($COL_Class)."");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("*","`emmm_comment`","where COL_Class = ".intval($COL_Class)." && COL_Type = '".dowith_sql($COL_Type)."' order by time desc LIMIT ".$start.",".$listpage);

	$i = 1;
	while($emmm_rs = $db -> whilego($query)){

	$userip = preg_replace('/((?:\d{1,3}\.){3})\d{1,3}/','$1*',$emmm_rs['COL_Ip']);
	if($emmm_rs['COL_Name'] == $userlogin){
		$username = $emmm_rs['COL_Name'];
	}else{
		$username = half_replace($emmm_rs['COL_Name']);
	}
	$scoring = explode('|',$emmm_rs['COL_Scoring']);

	?>
	  <tr>
	   <td width="25%" rowspan="2" valign="top"><div align="center"><img src="../../../skin/userhead_s.jpg" border="0" /></div>
	 <?php if($COL_Webpcomment == 4){ ?>
		 <table width="100%" border="0" cellpadding="6" style="margin-top:20px;">
		 <?php if($emmm_rs['COL_Vote'] != 0){ ?>
		   <tr>
			 <td colspan="2"><div align="center"><?php if($emmm_rs['COL_Vote'] == 1){ ?><img src="../../../skin/1.gif" border="0" />好评<?php }elseif($emmm_rs['COL_Vote'] == 2){ ?><img src="../../../skin/2.gif" border="0" />中评<?php }elseif($emmm_rs['COL_Vote'] == 3){ ?><img src="../../../skin/3.gif" border="0" />差评<?php } ?></div></td>
			 </tr>
		 <?php } ?>
		 <?php if($scoring[0] != 0){ ?>
		   <tr>
			 <td><div align="right">宝贝与描述相符度</div></td>
			 <td><img src="lib/img/<?php echo $scoring[0] ?>.png" border="0" /></td>
		   </tr>
		   <tr>
			 <td><div align="right">卖家的服务态度</div></td>
			 <td><img src="lib/img/<?php echo $scoring[1] ?>.png" border="0" /></td>
		   </tr>
		   <tr>
			 <td><div align="right">卖家的发货速度</div></td>
			 <td><img src="lib/img/<?php echo $scoring[2] ?>.png" border="0" /></td>
		   </tr>
		 <?php } ?>
		 </table> 
	<?php } ?> 
	   </td>
		<td width="75%" height="20"><span style="float:right;"><?php echo $emmm_rs['time']; ?></span><?php echo $username; ?> <font color="#CCCCCC" size="2">(<?php echo $userip; ?>)</font></td>
	  </tr>
	  <tr>
		<td height="98" valign="top">
		<?php 
				echo $emmm_rs['COL_Content']; 
				if($emmm_rs['COL_Gocontent'] != ''){
					echo '<div style="clear:both; height:20px;"></div>';
					echo '<p>管理员回复：'.$emmm_rs['COL_Gocontent'].'&nbsp;&nbsp;&nbsp;&nbsp;('.$emmm_rs['COL_Gotime'].')</p>';
				}
		?>
		</td>
	  </tr>
	  <tr>
		<td colspan="2" bgcolor="#eeeeee"></td>
	  </tr>
	<?php
	$i = $i + 1;
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	?>
	  <tr>
		<td colspan="2"><?php echo $_page->showpage(); ?></td>
	  </tr>
	</table>
	<form id="form1" name="form1" method="post" action="?emmm_cms=add&id=<?php echo $COL_Class;?>&type=<?php echo $COL_Type;?>&row=<?php echo $COL_Row;?>">
	<table class="table table-border">
	<?php if($COL_Webpcomment == 4){ ?>
	  <tr>
		<td width="50"></td>
		<td><input type="radio" name="COL_Vote" value="1" class="radio" /><img src="../../../skin/1.gif" border="0" />好评&nbsp;&nbsp;<input name="COL_Vote" type="radio" value="2" checked="checked" class="radio" /><img src="../../../skin/2.gif" border="0" />中评&nbsp;&nbsp;<input type="radio" name="COL_Vote" value="3" class="radio" /><img src="../../../skin/3.gif" border="0" />差评</td>
	  </tr>
	  <tr>
		<td><div align="right">打分</div>
		<input type="hidden" name="dafen[]" value="3" id="baobei" />
		<input type="hidden" name="dafen[]" value="3" id="taidu" />
		<input type="hidden" name="dafen[]" value="3" id="fahuo" />
		</td>
		<td>
		<script type="text/javascript" src="lib/jquery.min.js"></script>
		<script type="text/javascript" src="lib/jquery.raty.min.js"></script>
		<style type="text/css">
		.dafen { width:100%;}
		.font { width:70px; float:left; text-align:right; height:25px; line-height:25px; padding-right:15px;}
		.target-demo { width:300px; float:left; height:25px; line-height:25px; padding:0px; margin:0px;}
		.hint { width:100px; float:left; height:25px; line-height:25px;}
		.radio {
		-webkit-appearance: radio; 
		}
		</style>
			<div class="dafen">
				<div class="font">描述相符度</div>
				<div id="targetKeep-baobei" class="target-demo"></div>
				<div id="targetKeep-hintbaobei" class="hint"></div>
			  </div>
				<div style=" clear:both"></div>
			  <div class="dafen">
				<div class="font">服务太度</div>
				<div id="targetKeep-fuwu" class="target-demo"></div>
				<div id="targetKeep-hintfuwu" class="hint"></div>
			  </div>
				<div style=" clear:both"></div>
			  <div class="dafen">
				<div class="font">发货速度</div>
				<div id="targetKeep-fahuo" class="target-demo"></div>
				<div id="targetKeep-hintfahuo" class="hint"></div>
			  </div>
		
		  <script type="text/javascript">
			$(function() {
			  $.fn.raty.defaults.path = 'lib/img';
			  $('#targetKeep-baobei').raty({
				cancel    : false,
				target    : '#targetKeep-hintbaobei',
				targetKeep: true,
				score: 3,
						click: function(score) {
							$("#baobei").val(score);
						  }
			  });
			  
			  $('#targetKeep-fuwu').raty({
				cancel    : false,
				target    : '#targetKeep-hintfuwu',
				targetKeep: true,
				score: 3,
						click: function(score) {
							$("#taidu").val(score);
						  }
			  });
			  
			  $('#targetKeep-fahuo').raty({
				cancel    : false,
				target    : '#targetKeep-hintfahuo',
				targetKeep: true,
				score: 3,
						click: function(score) {
							$("#fahuo").val(score);
						  }
			  });
			});
		  </script>	
		</td>
	  </tr>
	<?php } ?>
	  <tr>
		<td valign="top"><div align="right">评论</div></td>
	<?php if($COL_Webpcomment == 2){ ?>
		<td><textarea name="content" style="width:75%; height:130px; border:1px #cccccc solid;text-align:center; line-height:110px;" disabled="disabled" >评论被关闭:(</textarea></td>
	<?php }elseif($COL_Webpcomment == 3){ 
				if(isset($_SESSION['username'])){
	?>
				<td><textarea name="content" style="width:75%; height:130px; border:1px #cccccc solid;" ></textarea></td>
				<?php }else{ ?>
				<td><textarea name="content" style="width:75%; height:130px; border:1px #cccccc solid;text-align:center; line-height:110px;" disabled="disabled" >请登录后在评论！</textarea></td>
				<?php } ?>
				
	<?php }elseif($COL_Webpcomment == 4){ 
				if($userbuy == 2){
				?>
				<td><textarea name="content" style="width:75%; height:130px; border:1px #cccccc solid;text-align:center; line-height:110px;" disabled="disabled" >您未购买过该商品，无权评价:(</textarea></td>
				<?php
				}elseif($userbuy == 1){
				?>
				<td><textarea name="content" style="width:75%; height:130px; border:1px #cccccc solid;" ></textarea></td>
				<?php
				}
	?>

	<?php }else{ ?>
		<td><textarea name="content" style="width:75%; height:130px; border:1px #cccccc solid;" ></textarea></td>
	<?php } ?>
	  </tr>
	  <tr>
		<td><div align="right">验证码</div></td>
		<td><input type="text" name="code" style="width:100px; height:23px; border:1px #cccccc solid; line-height:23px;" onfocus="document.getElementById('checkcode2').src+='?'" />&nbsp;&nbsp;<img title="点击刷新" id="checkcode2" src="<?php echo $emmm['webpath']; ?>function/emmm_code.php" align="absbottom" onclick="this.src='<?php echo $emmm['webpath']; ?>function/emmm_code.php?'+Math.random();" width="80" height="25"></img></td>
	  </tr>
	  <tr>
		<td>&nbsp;<input type="hidden" name="COL_Class" value="<?php echo $COL_Class ?>" /><input type="hidden" name="COL_Type" value="<?php echo $COL_Type ?>" /></td>
		<td><input type="submit" name="Submit" value="提交评论" class="btn btn-danger radius-5 pt-10 pb-10 pl-20 pr-20 mt-10" /></td>
	  </tr>
	</table>
	</form>
</div>
</body>
</html>
