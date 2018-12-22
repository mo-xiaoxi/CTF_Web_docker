<?php
	

	define('EMMMNO', true);
	define('WEB_ROOT',substr(dirname(__FILE__), 0, -7));

	include 'emmm_mysqli.php';

	$emmm = array(
		'webpath' => '/',	// 网站路径
		'validation' => '12345',	// 口令码
		'adminpath' => 'client/manage',		// 管理员默认目录
		// 'mysqlurl' => 'localhost',	// 数据库链接地址
		'mysqlurl' => 'db',	// 数据库链接地址
		'mysqlname' => 'hctf',	// 数据库登录账号
		'mysqlpass' => 'hy0bvMgq6j',	// 数据库登录密码
		'mysqldb' => 'emmm',	// 数据库表名
		'filesize' => '5000000',	// 附件上传最大值
		'safecode' => 'GFmNGU6xpvxTHdE9GVNMLjdGPv7ed9Xy6xpvxT',	// 安全校验码
		'mysqltype' => 'mysqli',
	);

	$db = new Emmm_Mysql(
		$emmm['mysqlurl'],
		$emmm['mysqlname'],
		$emmm['mysqlpass'],
		$emmm['mysqldb']
	);
?>
