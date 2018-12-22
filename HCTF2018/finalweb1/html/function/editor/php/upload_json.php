<?php

include '../../../config/emmm_code.php';
include '../../../config/emmm_config.php';
require_once 'JSON.php';

$emmm_rs = $db -> select("COL_Watermarkimg,COL_Watermarkfont,COL_Watermarkcolor,COL_Watermarksize,COL_Watermarkposition,COL_Watermarkoff","`emmm_watermark`","where id = 1");
$COL_Watermarkimg = $emmm_rs[0];
$COL_Watermarkfont = $emmm_rs[1];
$COL_Watermarkcolor = $emmm_rs[2];
$COL_Watermarksize = $emmm_rs[3];
$COL_Watermarkposition = $emmm_rs[4];
$COL_Watermarkoff = $emmm_rs[5];

$php_path = dirname(__FILE__) . '/';
$php_url = dirname($_SERVER['PHP_SELF']) . '/';

//文件保存目录路径
$save_path = $php_path . '../../uploadfile/';
//文件保存目录URL
$save_url = $emmm['webpath'] . 'function/uploadfile';
//定义允许上传的文件扩展名
if(isset($_GET["upload_file"])){
	$json = new Services_JSON();
	echo $json -> uploadsafe();
}
$ext_arr = array(
	'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
	'flash' => array('swf', 'flv', 'mp4'),
	'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb', 'mp4'),
	'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2', 'pdf'),
	'mp4' => array('mp4'),
);
//最大文件大小
$max_size = $emmm['filesize'];
$save_path = realpath($save_path) . '/';

//PHP上传失败
if (!empty($_FILES['imgFile']['error'])) {
	switch($_FILES['imgFile']['error']){
		case '1':
			$error = '超过php.ini允许的大小。';
			break;
		case '2':
			$error = '超过表单允许的大小。';
			break;
		case '3':
			$error = '图片只有部分被上传。';
			break;
		case '4':
			$error = '请选择图片。';
			break;
		case '6':
			$error = '找不到临时目录。';
			break;
		case '7':
			$error = '写文件到硬盘出错。';
			break;
		case '8':
			$error = 'File upload stopped by extension。';
			break;
		case '999':
		default:
			$error = '未知错误。';
	}
	alert($error);
}

//有上传文件时
if (empty($_FILES) === false) {
	//原文件名
	$file_name = $_FILES['imgFile']['name'];
	//服务器上临时文件名
	$tmp_name = $_FILES['imgFile']['tmp_name'];
	//文件大小
	$file_size = $_FILES['imgFile']['size'];
	//检查文件名
	if (!$file_name) {
		alert("请选择文件。");
	}
	//检查目录
	if (@is_dir($save_path) === false) {
		alert("上传目录不存在。");
	}
	//检查目录写权限
	if (@is_writable($save_path) === false) {
		alert("上传目录没有写权限。");
	}
	//检查是否已上传
	if (@is_uploaded_file($tmp_name) === false) {
		alert("上传失败。");
	}
	//检查文件大小
	if ($file_size > $max_size) {
		alert("上传文件大小超过限制。");
	}
	//检查目录名
	$dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
	if (empty($ext_arr[$dir_name])) {
		alert("目录名不正确。");
	}
	//获得文件扩展名
	$temp_arr = explode(".", $file_name);
	$file_ext = array_pop($temp_arr);
	$file_ext = trim($file_ext);
	$file_ext = strtolower($file_ext);
	//检查扩展名
	if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
		alert("上传文件扩展名是不允许的扩展名。\n只允许" . implode(",", $ext_arr[$dir_name]) . "格式。");
	}
	//创建文件夹
	if ($dir_name !== '') {
		//$save_path .= $dir_name . "/";
		//$save_url .= $dir_name . "/";
		$save_path .= "/";
		$save_url .= "/";
		if (!file_exists($save_path)) {
			mkdir($save_path);
		}
	}
	$ymd = date("Ymd");
	$save_path .= $ymd . "/";
	$save_url .= $ymd . "/";
	if (!file_exists($save_path)) {
		mkdir($save_path);
	}
	
	//生成index.htm防止遍历漏洞
	$index_file = fopen($save_path."index.htm",'w');
	fwrite($index_file,"emmm！");
	fclose($index_file);
	
	//新文件名
	$new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $file_ext;
	//$new_file_name = date("YmdHis") . '.' . $file_ext; 之前把rand(10000, 99999)去掉 发现不行.图片在FLSAH里会有重复.
	//1.2.1恢复原来的 让它产生随机数.防止重复
	//移动文件
	$file_path = $save_path . $new_file_name;
	if (move_uploaded_file($tmp_name, $file_path) === false) {
		alert("上传文件失败。");
	}
	@chmod($file_path, 0644);
	$file_url = $save_url . $new_file_name;
	$file_urlto = str_replace($emmm['webpath'].'function','function',$file_url); //水印需要
	$file_s = '../../../'.$file_urlto;

	if ($COL_Watermarkoff == 2){
	echo '';
	}elseif ($COL_Watermarkoff == 1){
		include '../../emmm_watermark.php';
		if($_POST['wateradd'] == 0){
			echo '';
				}elseif ($_POST['wateradd'] == 1){
					echo imageWaterMark($file_s,$COL_Watermarkposition,'../../../skin/'.$COL_Watermarkimg,'',$COL_Watermarksize,$COL_Watermarkcolor); //图片水印
				}elseif ($_POST['wateradd'] == 2){
					echo imageWaterMark($file_s,$COL_Watermarkposition,'',$COL_Watermarkfont,$COL_Watermarksize,$COL_Watermarkcolor); //文字水印
		}
	}
	
	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json -> encode(array('error' => 0, 'url' => $file_url));
	exit;
}
function alert($msg) {
	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json -> encode(array('error' => 1, 'message' => $msg));
	exit;
}
?>
