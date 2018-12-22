<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript" src="../../function/plugs/jquery/1.7.2/jquery-1.7.2.min.js"></script>
<script src="../../function/plugs/layer/layer.min.js"></script>
<link type="text/css" rel="stylesheet" href="../../function/plugs/layer/skin/layer.css" id="skinlayercss">
<link href="templates/images/emmm_login.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

function user(emmm){
	
	parent.$('#searchid').val(emmm);
	//关闭iframe
	var index = parent.layer.getFrameIndex(window.name);
	parent.layer.close(index);
}

</script>
</head>
<body>
<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';

$emmm_name = $_GET['emmm'];
if ($emmm_name == 'usersearch'){
	$emmm_search = '?emmm=usersearch&op=user';
}
?>
<div style="height:10px;">
  <form id="form1" name="form1" method="post" action="<?php echo $emmm_search ?>">
  <table width="90%" border="0" cellpadding="10">
    <tr>
      <td width="32%"><input type="text" name="k" class="win" /></td>
      <td width="68%"><input type="submit" name="Submit" value="搜 索" style="width:100px; height:30px; background:#0099FF; color:#FFFFFF; border:0px;" /></td>
    </tr>
  </table>
  </form>
</div>
<div style="clear:both"></div>
<table width="90%" border="0" style="margin-top:50px;">
<?php
if(isset($_GET["op"]) == ""){
	echo '';	
}elseif($_GET["op"] == 'user'){

	$k = !empty($_POST["k"])?$_POST["k"]:'0';
	$query = $db -> listgo("*","`emmm_user`","where `COL_Useremail` like '".$k."%' or `COL_Username` like '".$k."%' order by id desc");
	$num = $db -> rows($query);
	if ($num == 0 or $query == ''){
?>

  <tr>
    <td width="40%"><?php echo $emmm_adminfont['searchcontent'] ?></td>
  </tr>
  
<?php
	}else{
	while($emmm_rs = $db -> whilego($query)){
?>
  <tr>
    <td width="40%">账户：<?php echo $emmm_rs['COL_Useremail'] ?></td>
	<td>姓名：<?php echo $emmm_rs['COL_Username'] ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:user('<?php echo $emmm_rs['COL_Useremail'] ?>');">[选择]</a></td>
  </tr>
  
<?php 
	}
	}
}
?>
</table>
</body>
</html>
