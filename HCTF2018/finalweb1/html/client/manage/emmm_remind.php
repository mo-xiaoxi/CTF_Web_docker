<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php


	if ($emmm_font == 3){ //错误
		echo "<link href='templates/images/emmm_login.css' rel='stylesheet' type='text/css'> ";
		echo "<div class='emmm-ok'>";
		echo "<p><img src='templates/images/no.png' border='0' /></p>";
		echo "<p style='padding-top:15px;'>" . $emmm_adminfont['upexist'] . "</p>";
		echo "<meta http-equiv='Refresh' content='2;URL=$emmm_class' />";
		echo "</div>";
		exit();
			}elseif ($emmm_font == 1){ //加载
		echo "<link href='templates/images/emmm_login.css' rel='stylesheet' type='text/css'> ";
		echo "<div class='emmm-ok'>";
		echo "<p><img src='templates/images/ajax_loader.gif' border='0' /></p>";
		echo "<p style='padding-top:15px;'>" . $emmm_adminfont['upok'] . "</p>";
		echo "<meta http-equiv='Refresh' content='1;URL=$emmm_class' />";
		echo "</div>";
		exit();
			}elseif ($emmm_font == 2){ //成功
		echo "<link href='templates/images/emmm_login.css' rel='stylesheet' type='text/css'> ";
		echo "<div class='emmm-ok'>";
		echo "<p><img src='templates/images/ok.png' border='0' /></p>";
		echo "<p style='padding-top:15px;'>" . $emmm_adminfont['updel'] . "</p>";
		echo "<meta http-equiv='Refresh' content='2;URL=$emmm_class' />";
		echo "</div>";
		exit();
			}elseif ($emmm_font == 4){ //临时提醒
		echo "<link href='templates/images/emmm_login.css' rel='stylesheet' type='text/css'> ";
		echo "<div class='emmm-ok'>";
		echo "<p><img src='templates/images/no.png' border='0' /></p>";
		echo "<p style='padding-top:15px;'>" . $emmm_content . "</p>";
		echo "<meta http-equiv='Refresh' content='2;URL=$emmm_class' />";
		echo "</div>";
		exit();
			}elseif ($emmm_font == 5){ //自定义提醒
		echo "<link href='templates/images/emmm_login.css' rel='stylesheet' type='text/css'> ";
		echo "<div class='emmm-ok'>";
		echo "<p><img src='templates/images/" . $emmm_img . "' border='0' /></p>";
		echo "<p style='padding-top:15px;'>" . $emmm_content . "</p>";
		echo "<meta http-equiv='Refresh' content='2;URL=$emmm_class' />";
		echo "</div>";
		exit();
	}
?>
</body>
</html>