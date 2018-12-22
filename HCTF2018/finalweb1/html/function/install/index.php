<?php
header("Content-Type:text/html; varcharset=UTF-8");
header("Cache-Control:no-cache");
date_default_timezone_set('Asia/Shanghai');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; varcharset=utf-8"/>
    <title>Emmm - 安装程序</title>
    <script language="JavaScript" type="text/javascript" src="../plugs/jquery/1.7.2/jquery-1.7.2.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="../plugs/layer/layer.min.js"></script>
    <style type="text/css">
        * {
            margin: 0 auto;
            padding: 0px;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f4f4;
        }

        #emmm_install {
            width: 720px;
            height: auto;
            overflow: hidden;
            border: 1px #CCCCCC solid;
            padding: 30px 20px 30px 20px;
            margin-top: 80px;
            background: #FFFFFF;
        }

        #emmm_logo {
            width: 720px;
            height: 40px;
            margin-bottom: 20px;
        }

        #emmm_font {
            width: 678px;
            height: 350px;
            border: 1px #CCCCCC solid;
            background: #FFFFFF;
        }

        .btnGray {
            width: 120px;
            height: 40px;
            background: #CCCCCC;
            border: 0px;
            color: #333333;
            border-radius: 8px;
        }

        .btn {
            width: 120px;
            height: 40px;
            background: #1382b3;
            border: 0px;
            color: #FFFFFF;
            border-radius: 8px;
        }

        #ourhp_er h1 {
            width: 100%;
            height: 35px;
            line-height: 35px;
            font-size: 16px;
            color: #999999;
            border-bottom: 1px #CCCCCC solid;
            margin-bottom: 10px;
            font-weight: 400;
        }

        h1 {
            width: 100%;
            height: 35px;
            line-height: 35px;
            font-size: 16px;
            color: #999999;
            border-bottom: 1px #CCCCCC solid;
            margin-bottom: 10px;
            font-weight: 400;
        }

        #ourhp_er p {
            height: 25px;
            line-height: 25px;
            font-size: 14px;
            color: #666666;
        }

        #emmm_table td {
            height: 40px;
            line-height: 40px;
            font-size: 16px;
            color: #666666;
        }

        #emmm_table #input {
            width: 282px;
            height: 18px;
            line-height: 18px;
            border: 1px #ccc solid;
            padding: 6px;
        }
    </style>
    <script language="javascript">
        function sqlload() {
            $.layer({
                type: 3,
                border: [5, 0.8, '#1083B2']
            });
        }

        function agree() {
            if (document.getElementById('btn_license').checked) {
                document.getElementById('submit').disabled = false;
                document.getElementById('submit').className = 'btn';
            } else {
                document.getElementById('submit').disabled = 'disabled';
                document.getElementById('submit').className = 'btnGray';
            }
        }
    </script>
</head>

<body>
<div id="emmm_install">
    <div id="emmm_logo"><img src="images/logo.jpg" border="0"/></div>
    <?php
    if (version_compare(PHP_VERSION, '5.2.0', '<')) die('错误！您的PHP版本不能低于 5.2.0 !');
    if (file_exists("emmm.lock")) {

        echo "<p align='center'><img src='../../skin/no.png' border='0'></p>";
        echo "<p align='center'>请先删除emmm.lock文件在安装系统！</p>";
        header("Location: /index.php");
    }
    if (intval(isset($_GET['emmm'])) == 0) {
        ?>
        <form action="" method="post">
            <table width='100%' border='0' cellpadding="0" cellspacing="10">
                <tr>
                    <td><textarea name="request" readonly="readonly" id="emmm_font" style="padding:10px;">

</textarea></td>
                </tr>
                <tr>
                    <td style="font-size:14px; color:#999999; font-weight:bold;"><input name="confirm" type="checkbox"
                                                                                        onclick="agree();"
                                                                                        align="absMiddle"
                                                                                        id="btn_license"/>&nbsp;<label
                                for="btn_license">我认真阅读并接受以上协议。</label></td>
                </tr>
                <tr>
                    <td><input type="button" class="btnGray" name="submit" value="开始安装" disabled="disabled" id="submit"
                               onclick="location.href='index.php?emmm=1'"/></td>
                </tr>
            </table>
        </form>
        <?php

    } elseif (intval($_GET['emmm']) == 1) {

        function check_writeable($file)
        {
            if (file_exists($file)) {
                if (is_dir($file)) {
                    $dir = $file;
                    if ($fp = @fopen("$dir/test.txt", 'w')) {
                        @fclose($fp);
                        @unlink("$dir/test.txt");
                        $writeable = 1;
                    } else {
                        $writeable = 0;
                    }
                } else {
                    if ($fp = @fopen($file, 'a+')) {
                        @fclose($fp);
                        $writeable = 1;
                    } else {
                        $writeable = 0;
                    }
                }
            } else {
                $writeable = 2;
            }

            return $writeable;
        }

        $sys_info['mysql_ver'] = extension_loaded('mysql') ? 'OK' : 'NO';
        $sys_info['zlib'] = function_exists('gzclose') ? 'OK' : 'NO';
        $sys_info['gd'] = extension_loaded("gd") ? 'OK' : 'NO';
        $sys_info['socket'] = function_exists('fsockopen') ? 'OK' : 'NO';
        $sys_info['curl_init'] = function_exists('curl_init') ? 'OK' : 'NO';

        echo "<form id='form1' name='form1' method='post' action='index.php?emmm=2'>";
        echo '<div id="ourhp_er">';
        echo '<h1>系统环境</h1>';
        echo '<p>服务器操作系统:&nbsp;....................................................................&nbsp;' . PHP_OS . '</p>';
        echo '<p>Web 服务器:&nbsp;....................................................&nbsp;' . $_SERVER['SERVER_SOFTWARE'] . '</p>';
        echo '<p>PHP 版本:&nbsp;....................................................................&nbsp;' . PHP_VERSION . '</p>';
        echo '<p >MySQL 支持:&nbsp;....................................................................&nbsp;' . $sys_info['mysql_ver'] . '</p>';
        echo '<p>Zlib 支持:&nbsp;....................................................................&nbsp;' . $sys_info['zlib'] . '</p>';
        echo '<p>GD2 支持:&nbsp;....................................................................&nbsp;' . $sys_info['gd'] . '</p>';
        echo '<p>Socket 支持:&nbsp;....................................................................&nbsp;' . $sys_info['socket'] . '</p>';
        echo '<p>curl 支持:&nbsp;....................................................................&nbsp;' . $sys_info['curl_init'] . '</p>';
        echo '<h1>目录权限</h1>';

        /* 检查目录 */
        $check_dirs = array(
            '../../config',
            '../../function',
            '../../function/_compile',
            '../../function/_cache',
            '../../function/uploadfile',
            '../../function/backup'
        );

        $i = 0;
        foreach ($check_dirs AS $dir) {
            $full_dir = $dir;
            $check_writeable = check_writeable($full_dir);
            if ($check_writeable == '1') {

                echo "<p>" . $check_dirs[$i] . "&nbsp;...................................................................&nbsp;<font color='#00CC33'>可写</font></p>";

            } elseif ($check_writeable == '0') {

                echo "<p>" . $check_dirs[$i] . "&nbsp;...................................................................&nbsp;<font color='#ff0000'>不可写</font></p>";
                $no_write = true;

            } elseif ($check_writeable == '2') {

                echo "<p>" . $check_dirs[$i] . "&nbsp;...................................................................&nbsp;<b>不存在</b></p>";
                $no_write = true;

            }
            $i = $i + 1;
        }
        echo "<h1></h1>";
        if ($sys_info['gd'] == 'NO' || $sys_info['curl_init'] == 'NO') {

            exit('上面的主要组件不支持，无法安装使用！');

        } else {

            if ($check_writeable == '0' || $check_writeable == '2') {
                echo '<input type="button" class="btnGray" name="submit" value="下一步" disabled="disabled" id="submit"/>';
            } else {
                echo '<input type="submit" class="btn" name="Submit" value="下一步" />';
            }

        }
        echo '</div>';
        echo '</form>';
        exit;

    } elseif (intval($_GET['emmm']) == 2) {

        if (function_exists("mysqli_connect")) {
            $checked = array('', 'checked');
        } else {
            $checked = array('checked', '');
        }

        echo "<form id='form1' name='form1' method='post' action='index.php?emmm=3' class='registerform'>";
        echo "<table width='100%' border='0' align='center' cellpadding='10' id='emmm_table'>";
        echo "<tr>";
        echo "<td colspan='2'><h1>数据库配置</h1></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>数据库连接类型：</div></td>";
        echo "<td><input name='type' type='radio' value='mysql' " . $checked[0] . " />Mysql&nbsp;&nbsp;<input name='type' type='radio' value='mysqli' " . $checked[1] . " />Mysql<font style='color:#ff0000;font-size:18px;'>i</font>&nbsp;<font style='font-size:12px'>(不明白默认就好)</font></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>数据库连接地址：</div></td>";
        echo "<td><input name='emmm_dburl' type='text' id='input' value='localhost' datatype='*' /> *</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>数据库用户名：</div></td>";
        echo "<td><input name='emmm_dbname' type='text' id='input' datatype='*' /> *</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>数据库用户密码：</div></td>";
        echo "<td><input name='emmm_dbpass' type='password' id='input' /></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>数据库名：</div></td>";
        echo "<td><input name='emmm_mydb' type='text' id='input' datatype='*' /> *</td> ";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td>(如果本地调试，请手动创建一个数据库)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td><input type='submit' class='btn' name='Submit' value='下一步' onclick=\"sqlload();\" /></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";

    } elseif (intval($_GET['emmm']) == 3) {

        if ($_POST["emmm_dburl"] == "" || $_POST["emmm_dbname"] == "" || $_POST["emmm_mydb"] == "") {
            exit(' * 号是必填项！ <a href="index.php?emmm=2">重新来过</a>');
        }

        $emmm_mydb = $_POST["emmm_mydb"];
        $emmm_dburl = $_POST["emmm_dburl"];
        $emmm_dbname = $_POST["emmm_dbname"];
        $emmm_dbpass = $_POST["emmm_dbpass"];

        if ($_POST["type"] == 'mysql') {
            include '../../config/emmm_mysql.php';
            $mysql_file = 'emmm_mysql.php';
            $mysql_type = 'mysql';
        } else {
            include '../../config/emmm_mysqli.php';
            $mysql_file = 'emmm_mysqli.php';
            $mysql_type = 'mysqli';
        }

        $db = new Emmm_Mysql($emmm_dburl, $emmm_dbname, $emmm_dbpass, $emmm_mydb);

        //导入数据
        $sql = file_get_contents("install.sql");
        $a = explode(";", $sql);
        $add = '';
        foreach ($a as $b) {
            $c = $b . ";";
            $add = $db->create($c, 2);
        }
        $close = $db->close();

        function getRandomString($len, $chars = null)
        {
            if (is_null($chars)) {
                $chars = "bcdefghijklmnpqrtuvwxyzBCDEFGHIJKLMNPQRTUVWXYZ12345679";
            }
            mt_srand(10000000 * (double)microtime());
            for ($i = 0, $str = '', $lc = strlen($chars) - 1; $i < $len; $i++) {
                $str .= $chars[mt_rand(0, $lc)];
            }
            return $str;
        }

        $emmm_safecode = getRandomString(32);
        $safecode6 = substr($emmm_safecode, 6, 6);
        $str_f = '$';
        $str_tmp = "<?php
	

	define('EMMMNO', true);
	define('WEB_ROOT',substr(dirname(__FILE__), 0, -7));

	include '" . $mysql_file . "';

	" . $str_f . "emmm = array(
		'webpath' => '/',	// 网站路径
		'validation' => '12345',	// 口令码
		'adminpath' => 'client/manage',		// 管理员默认目录
		'mysqlurl' => '" . $emmm_dburl . "',	// 数据库链接地址
		'mysqlname' => '" . $emmm_dbname . "',	// 数据库登录账号
		'mysqlpass' => '" . $emmm_dbpass . "',	// 数据库登录密码
		'mysqldb' => '" . $emmm_mydb . "',	// 数据库表名
		'filesize' => '5000000',	// 附件上传最大值
		'safecode' => '" . $emmm_safecode . $safecode6 . "',	// 安全校验码
		'mysqltype' => '" . $mysql_type . "',
	);

	" . $str_f . "db = new Emmm_Mysql(
		" . $str_f . "emmm['mysqlurl'],
		" . $str_f . "emmm['mysqlname'],
		" . $str_f . "emmm['mysqlpass'],
		" . $str_f . "emmm['mysqldb']
	);
?>";

        $sf = "../../config/emmm_config.php";
        $fp = fopen($sf, "w");
        fwrite($fp, $str_tmp);
        fclose($fp);
        echo "<script>location.href='index.php?emmm=4';</script>";
        exit;

    } elseif (intval($_GET['emmm']) == 4) {

        echo "<form id='form1' name='form1' method='post' action='index.php?emmm=5' class='registerform'>";
        echo "<table width='100%' border='0' align='center' cellpadding='10' id='emmm_table'>";
        echo "<tr>";
        echo "<td colspan='2'><h1></h1></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>网站标题：</div></td>";
        echo "<td><input name='emmm_website' type='text' id='input' datatype='*' /> *</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>网站地址：</div></td>";
        echo "<td><input name='emmm_weburl' type='text' id='input' value='" . $_SERVER['HTTP_HOST'] . "' datatype='*' /> *&nbsp;(不要以http://开头，也不要以 / 结尾)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>管理员登录账号：</div></td>";
        echo "<td><input name='emmm_adminname' type='text' id='input' datatype='*' /> *</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>管理员登录密码：</div></td>";
        echo "<td><input name='emmm_adminpass' type='text' id='input' datatype='*' /> *</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><div align='right'>口令码：</div></td>";
        echo "<td><span style='color:#ff0000; font-size:22px;'>12345</span>&nbsp;&nbsp;&nbsp;(安装成功后，打开/config/emmm_config.php&nbsp;修改口令码！)</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan='2'><h1></h1></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td></td>";
        echo "<td><input type='submit' class='btn' name='Submit' value='下一步' onclick=\"sqlload();\" /></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";

    } elseif (intval($_GET['emmm']) == 5) {

        if ($_POST["emmm_website"] == "" || $_POST["emmm_weburl"] == "" || $_POST["emmm_adminname"] == "" || $_POST["emmm_adminpass"] == "") {
            exit('必填项不能为空！ <a href="index.php?emmm=4">重新来过</a>');
        }

        $emmmcode = "utf-8";
        include '../../config/emmm_config.php';
        include '../../function/emmm_function.class.php';

        $emmm_website = dowith_sql($_POST["emmm_website"]);
        $emmm_weburl = dowith_sql($_POST["emmm_weburl"]);
        $emmm_adminname = dowith_sql($_POST["emmm_adminname"]);
        $emmm_adminpass = dowith_sql(substr(md5(md5($_POST["emmm_adminpass"])), 0, 16));
        $emmm_date = date("Y-m-d");

        $sqlweb = $db->insert("`emmm_web`", "`COL_Website` = '" . $emmm_website . "',`COL_Weburl` = '" . $emmm_weburl . "',`COL_Webtime` = '" . $emmm_date . "',`COL_Webstatistics` = '',`COL_Webemmmcode` = '',`COL_Webemmmu` = '',`COL_Webemmmp` = ''", "");
        $sqladmin = $db->insert("`emmm_admin`", "`COL_Adminname` = '" . $emmm_adminname . "',`COL_Adminpass` = '" . $emmm_adminpass . "',`COL_Adminpower` = '01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60',`COL_Admin` = 1,`time` = '" . date("Y-m-d H:i:s") . "'", "");
        $sqltemp = $db->insert("`emmm_temp`", "`COL_Temppath` = 'default',`COL_Tempauthor` = 'emmm!'", "");
        $pagecss = $db->update("emmm_webdeploy", "COL_Pages = replace(COL_Pages,'^',';')", "where id = 1");

        $file = fopen("emmm.lock", 'w');
        fwrite($file, "emmm!只有删除这个文件，才可以重新安装系统。如果不需要重新安装系统，千万不要删除此文件！");
        fclose($file);

        //导入默认数据
        $sqldata = file_get_contents("data.sql");
        $aa = explode(";", $sqldata);
        foreach ($aa as $bb) {
            $cc = $bb . ";";
            $add = $db->create($cc, 2);
        }
        $close = $db->close();

        echo "<p align='center'><img src='../../skin/ok.png' border='0'></p>";
        echo "<p align='center'>恭喜您，网站安装成功！</p>";
        echo "<p align='center'>[<a href='../../' target='_blank'>登录前台</a>]&nbsp;&nbsp;&nbsp;&nbsp;[<a href='../../admin.php'>进入后台</a>]</p>";

        exit;
    }
    ?>
</div>
<link rel="stylesheet" href="../plugs/Validform/style.css" type="text/css"/>
<script type="text/javascript" src="../plugs/Validform/Validform_v5.3.2.js"></script>
<script type="text/javascript">
    $(function () {
        $(".registerform").Validform();
    })
</script>
</body>
</html>
