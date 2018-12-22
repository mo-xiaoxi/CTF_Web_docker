<?php

/*
 *	Emmm 数据库恢复系统
 */
include "../../../config/emmm_code.php";
include "../../../config/emmm_config.php";

$usedumppass = 1;  //导入数据时是否使用导入密码。如果您忘记了导入密码，请把值改为 0 。HTTP方式下载数据文件不能取消导入密码。
define("VERSION","1.1");
error_reporting(1);
@set_time_limit(0);
$md5pass = "79e69aaabc11d18fdeb063513c38eaeb";

 if(!isset($_POST)){ $_POST = $HTTP_POST_VARS; $_GET = $HTTP_GET_VARS; $_SERVER = $HTTP_SERVER_VARS;} if(!$_GET[framename]){
		echo "<html>
		<head> <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
		<title>Emmm!数据库备份恢复</title>
		</head>
		<frameset rows='*,0' frameborder='NO' border='0' framespacing='0' name='myframeset'>
			<frame src='$_SERVER[PHP_SELF]?$_SERVER[QUERY_STRING]&framename=main' name='mainFrame1'>
			<frame src='about:blank' name='mainFrame2'>  
		</frameset>
		<BODY></BODY>
		</html>";
		exit;
	}
	function fsql_StrCode($string,$action="ENCODE"){
		global $_SERVER;
		if($string=="") return "";
		if($action=="ENCODE") $md5code=substr(md5($string),8,10);
		else{
			$md5code=substr($string,-10); 
			$string=substr($string,0,strlen($string)-10); 
		}
		$key = md5($md5code.$_SERVER["HTTP_USER_AGENT"].filemtime($_SERVER["SCRIPT_FILENAME"]));
		$string = ($action=="ENCODE"?$string:base64_decode($string));
		$len = strlen($key);
		$code = "";
		for($i=0; $i<strlen($string); $i++){
			$k = $i%$len;
			$code .= $string[$i]^$key[$k];
		}
		$code = ($action == "DECODE" ? (substr(md5($code),8,10)==$md5code?$code:NULL) : base64_encode($code)."$md5code");
		return $code;
	}
	if($_POST[faisunsql_postvars]){
		if($faisunsql_postvars=unserialize(fsql_StrCode($_POST[faisunsql_postvars],"DECODE"))){
			foreach($faisunsql_postvars as $key=>$value){
				if(!isset($_POST[$key])) $_POST[$key] = $value;
			}
		}else{ die("<script language='JavaScript'>alert('由于文档更改,提交信息已丢失,需要重新开始.');</script>"); }
		unset($_POST[faisunsql_postvars],$faisunsql_postvars,$key,$value);
	}?><html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title><style type='text/css'>
	<!--
	*{ margin:0 auto; padding:0;}
	body, td, input, a{color:#000000;font-family: '微软雅黑';font-size:14px;}
	body, td, a{line-height:180%;}
	tr,td { padding:5px;}
	.tabletitle{color:#000000;background-color:#ebebeb; width:100%;}
	.tabledata{background-color:#FFffff;}
	.tabledata_on{background-color:#f4f4f4;}	
	.emmm-anniu { margin-bottom:100px; margin-left:8px; width:120px; height:40px;}
	h3 { width:100%; text-align:center;}
	-->
	</style><link href='templates/images/emmm_login.css' rel='stylesheet' type='text/css'>
	<script type='text/javascript' src='../../function/plugs/jquery/1.7.2/jquery-1.7.2.min.js'></script>
	<link rel='stylesheet' type='text/css' href='../../function/plugs/context/context.standalone.css'>
	<script src='../../function/plugs/context/context.js'></script>
	<script src='../../function/plugs/context/demo.js'></script>
	</head>
<body link="#0000FF" vlink="#0000FF" alink="#0000FF">
<center>

<script language="Javascript">document.doshowmywin=1;</script>		
<script language='Javascript'>
	function showmywin(){
		if(!document.doshowmywin) return;
		if(top.myframeset&&this.window.name=='mainFrame1'){
			top.myframeset.rows='900,*,0';
		}
		if(top.myframeset&&this.window.name=='mainFrame2'){
			top.myframeset.rows='900,0,*';
		}
	}
	document.body.onload=showmywin;
	</script>
<?php
$showmywin0=$_POST[loadpage]?"<script language=Javascript>document.doshowmywin=0;</script></body>":"";
	if(!$_POST["action"] and !$_GET["action"]){
?><center><form name="configform" method="post" action=""><table width='100%' border='0' cellspacing='0' cellpadding='0' align=center class='tabletitle'>
	<tr><td class='tabletitle' height='40'>&nbsp;<h3>Emmm 数据库恢复操作！</h3></td></tr> <tr><td>
	<table width='100%' border='0' cellspacing='1' cellpadding='2' align=center><table width='100%' border='0' cellspacing='0' cellpadding='0' align=center class='tabletitle'>
	<tr><td class='tabletitle' height='40'>&nbsp;备份信息一览</td></tr> <tr><td>
	<table width='100%' border='0' cellspacing='1' cellpadding='2' align=center><tr class='tabledata' onmouseover='this.className="tabledata_on";' onmouseout='this.className="tabledata";'>
	<td width='200' nowrap>每页生成数据文件</td>
	<td width='200' nowrap>≥ 512  KB</td>
</tr>
<tr class='tabledata' onmouseover='this.className="tabledata_on";' onmouseout='this.className="tabledata";'>
	<td width='200' nowrap>数据文件数：</td>
	<td width='200' nowrap>2</td>
</tr>
<tr class='tabledata' onmouseover='this.className="tabledata_on";' onmouseout='this.className="tabledata";'>
	<td width='200' nowrap>文件总数：</td>
	<td width='200' nowrap>2</td>
</tr>
<tr class='tabledata' onmouseover='this.className="tabledata_on";' onmouseout='this.className="tabledata";'>
	<td width='200' nowrap>备份时间：</td>
	<td width='200' nowrap>2018-12-09 14:56</td>
</tr>
<tr class='tabledata' onmouseover='this.className="tabledata_on";' onmouseout='this.className="tabledata";'>
	<td width='200' nowrap>原数据库版本：</td>
	<td width='200' nowrap>10.3.10-MariaDB-log</td>
</tr>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align=center class='tabletitle'>
	<tr><td class='tabletitle' height='40'>&nbsp;导入数据库配置</td></tr> <tr><td>
	<table width='100%' border='0' cellspacing='1' cellpadding='2' align=center><tr class='tabledata' onmouseover='this.className="tabledata_on";' onmouseout='this.className="tabledata";'>
	<td width='200' nowrap>导入密码：</td>
	<td width='200' nowrap><input name="db_pass" value="" type="password"></td>
</tr>
<tr class='tabledata' onmouseover='this.className="tabledata_on";' onmouseout='this.className="tabledata";'>
	<td width='200' nowrap>导入一页时间间隔：</td>
	<td width='200' nowrap><input name="nextpgtimeout" value="2" type="text"> 秒</td>
</tr>
<tr class='tabledata' onmouseover='this.className="tabledata_on";' onmouseout='this.className="tabledata";'>
	<td width='200' nowrap>安全的临时表(<a href="javascript:alert('使用临时表插入完整无误的数据后再删除原表,要临时占用数据库空间.');" title="帮助">?</a>)：</td>
	<td width='200' nowrap><input name="db_safttemptable" type="checkbox" id="db_safttemptable" value="yes" checked></td>
</tr>
</table></td></tr></table><BR>
<div style='float:left;'><input type='submit' name='action' value='导入' class='emmm-anniu' ></div></form>
</center>
<?php
exit;
}
if($usedumppass and md5($_POST[db_pass]) != $md5pass)die("<div id=pageendTag></div>导入密码不正确！如果您忘记了导入密码，请把本源文件开头的 \$usedumppass 的值改为 0 。 $showmywin0");

		function query($sql){
			global $_POST,$db;
			if(!$db -> create($sql,2)){
				echo "<BR><BR><font color=red>MySQL语句错误！您可能发现了程序的BUG！<a href=\"http://vidar.club\" target=\"_blank\">请报告开发者。</a>
				  	<BR>版本：V1.1<BR>语句：<XMP>$sql</XMP>错误信息： ".$db -> error()." </font>" ;
				if(trim($_POST[db_temptable])) query("DROP TABLE IF EXISTS `$_POST[db_temptable]`;");
				exit;
			}
		}
		function create($table,$sql){
			global $_POST,$db;
			if(!trim($_POST[db_temptable])){
				do{
					$_POST[db_temptable]="_emmm_sql".rand(100,10000);
				}while(@$db -> create("select * from `$_POST[db_temptable]`",2));
			}
			query("CREATE TABLE `$_POST[db_temptable]` $sql");
			if(!$_POST[db_safttemptable]) query("DROP TABLE IF EXISTS `$table`;");
		}
		function insert($data){
			global $_POST;
			query("INSERT IGNORE INTO `$_POST[db_temptable]` VALUES $data;");
		}
		function tableend($table){
			global $_POST;
			if($_POST[db_safttemptable]) query("DROP TABLE IF EXISTS `$table`;");
			query("ALTER TABLE `$_POST[db_temptable]` RENAME `$table`");
		}
		
$totalpage = 1;
if(!$_POST[loadpage]){$_POST[loadpage] = 1;}
if($totalpage >= $_POST[loadpage]){
include("index_pg$_POST[loadpage].php");
echo "<center><form name=myform method='post' action=''>";
$_POST[loadpage]++;

echo "<input type='hidden' name='faisunsql_postvars' value='".fsql_StrCode(serialize($_POST),"ENCODE")."'>
<BR><BR>正在导入数据到数据库'$_POST[db_dbname]'……<BR><BR>本页运行完成！ 正在自动进入<a href='javascript:myform.submit();'>第 $_POST[loadpage] 页</a>，共 $totalpage 页……
<BR><BR>(除非进程长久不动，否则请不要点击以上页码链接。)";
?>
<BR><BR><B><div id="postingTag"></div></B>
<?php echo "<script language='Javascript'>
				try{finisheditem.focus();}catch(e){}
				function checkerror(frame){
					if(top.mainFrame1.location.href!=top.mainFrame2.location.href||(frame.document && !frame.document.all.postingTag && frame.document.all.pageendTag)){
						postingTag.innerHTML='MySQL:提交出现错误.正在自动<a href=\'javascript:myform.submit();\'>重新提交</a>...';
						myform.submit();
					}
				}
				nextpgtimeout = parseFloat('$_POST[nextpgtimeout]')?parseFloat('$_POST[nextpgtimeout]'):0;
				if(top.myframeset&&this.window.name=='mainFrame1'){
					myform.target='mainFrame2';
					setInterval('checkerror(top.mainFrame2)',10000+1000*nextpgtimeout);
				}
				if(top.myframeset&&this.window.name=='mainFrame2'){
					myform.target='mainFrame1';
					setInterval('checkerror(top.mainFrame1)',10000+1000*nextpgtimeout);
				}
				setTimeout('myform.submit();',1000*nextpgtimeout);
				</script>";
		 ?>
<div id="pageendTag"></div>
</form></center><?php }else{echo "<center>完成导入数据到数据库'$_POST[db_dbname]'</center>";}?>
</body></html>
