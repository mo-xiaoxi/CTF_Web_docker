<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

*/
if (!defined('EMMMNO')) {
    exit('no!');
}

// 注册类
class Emmm_Reg
{

    function __construct()
    {

    }

    public function email_code($id)
    {
        global $db;
        $emmm_mail = 'regcode';
        $COL_Useremail = $id;
        $COL_Regcode = rand(1000, 9999);
        @session_start();
        $_SESSION['vcode'] = $COL_Regcode;
        include '../../function/emmm_mail.class.php';
        return "200";
    }

    public function tel_code($id)
    {
        global $db;
        $emmm_rs = $db->select("`COL_Websitemin`", "`emmm_web`", "where `id` = 1");
        include '../../function/api/telcode/user_regcode.class.php';
        $COL_Usertel = $id;
        $COL_Regcode = rand(1000, 9999);
        $_SESSION['vcode'] = $COL_Regcode;
        $c = '注册会员验证码:' . $COL_Regcode . '请妥善保管不要告诉他人!' . $emmm_rs[0];
        $s = '';
        $smskey->smsconfig($COL_Usertel, $c, $s, 1);
        return "200";
    }

    public function reg_code()
    {
        global $emmm_usercontrol;
        if ($emmm_usercontrol['code'] == 0) {
            $table = '';
        } elseif ($emmm_usercontrol['code'] == 1) {
            $table = '
			  <tr>
				<td><div align="right">验证码：</div></td>
				<td><input type="text" name="vcode" class="input3" datatype="*" /><input onclick="reg_code();" id="btn" type="button" class="btn btn-success radius-5 ml-10 pd-5" value="获取验证码" /> <font class="ml-10 f-f00">*</font></td>
			  </tr>
			';
        }
        return $table;
    }

    public function reg_table()
    {
        global $emmm_usercontrol;
        if ($emmm_usercontrol['type'] == 'email') {
            $table = '
			  <tr>
				<td><div align="right">E-mail：</div></td>
				<td><input type="text" id="zh" name="COL_Useremail" class="input" datatype="e" value="格式:77701950@qq.com" onfocus="if (value ==\'格式:77701950@qq.com\'){value =\'\'}" onblur="if (value ==\'\'){value=\'格式:77701950@qq.com\'} regselect();" /><font class="ml-10 f-f00" id="regselect">*</font></td>
			  </tr>
			' . $this->reg_code();
        } elseif ($emmm_usercontrol['type'] == 'tel') {
            $table = '
			  <tr>
				<td><div align="right">手机号码：</div></td>
				<td><input type="text" id="zh" name="COL_Usertel" class="input" datatype="m" value="格式:13888888888" onfocus="if (value ==\'格式:13888888888\'){value =\'\'}" onblur="if (value ==\'\'){value=\'格式:13888888888\'} regselect();" /><font class="ml-10 f-f00" id="regselect">*</font></td>
			  </tr>
			' . $this->reg_code();
        }
        return $table;
    }

    public function reg_select($id)
    {
        global $db;
        $query = $db->select("id", "emmm_user", "where `COL_Useremail` = '" . dowith_sql($id) . "' or `COL_Usertel` = '" . dowith_sql($id) . "'");
        if ($query) {
            $arr = '用户已存在，换个账号试试！';
        } else {
            $arr = "恭喜您，账号可以使用！";
        }
        return $arr;
    }

    public function reg_vcode($id)
    {
        global $emmm_usercontrol, $db;
        $query = $db->select("id", "emmm_user", "where `COL_Useremail` = '" . dowith_sql($id) . "' or `COL_Usertel` = '" . dowith_sql($id) . "'");
        if ($query) {
            $arr = 200;
        } else {
            if ($emmm_usercontrol['type'] == 'email') {
                $arr = $this->email_code($id);
            } elseif ($emmm_usercontrol['type'] == 'tel') {
                $arr = $this->tel_code($id);
            }
        }
        return $arr;
    }

}

$reg = new Emmm_Reg();

if (isset($_GET['reg'])) {
    $msg = $reg->reg_select(dowith_sql($_GET['zh']));
    echo $_GET['jsoncallback'] . "(" . json_encode($msg) . ")";
    exit;
}
if (isset($_GET['code'])) {
    $msg = $reg->reg_vcode(dowith_sql($_GET['zh']));
    echo $_GET['jsoncallback'] . "(" . json_encode($msg) . ")";
    exit;
}
$regconfig = array(
    'introducer' => @$_GET['introducer'],
);

$smarty->assign('regtable', $reg->reg_table());
$smarty->assign('regconfig', $regconfig);
?>
