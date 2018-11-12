<?php
require_once '../include/common.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
$zhi=$_GET['id'];
$sql="delete from fish_user where id in($zhi);";
if(isset($_GET['all'])){
	$sql="delete from fish_user where 1;";
}
  if($DB->query($sql)){
	exit("<script language='javascript'>alert('delete succeed！');window.location.href='./index.php';</script>");
  }else{
  	exit("<script language='javascript'>alert('delete failed！');history.go(-1);</script>");
  }
?>