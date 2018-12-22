<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 * -------------------------------
 * Mysql 数据库类 (2016-10-22)
 * -------------------------------
 */

class Emmm_Mysql
{

    private $dburl;
    private $dbname;
    private $dbpass;
    private $dbtabel;
    private $dblang = "utf8";
    private $conn;

    function __construct($dburl = '', $dbname = '', $dbpass = '', $dbtabel = '')
    {
        $this->conn = mysqli_connect($dburl, $dbname, $dbpass, $dbtabel);
        mysqli_select_db($this->conn, $dbtabel) or die('数据库链接出错: ' . $this->error());
        mysqli_query($this->conn, 'set names ' . $this->dblang);
    }

    //读取一条记录
    public function select($o = '', $u = '', $r = '', $die = false)
    {
        if ($die) {
            die("select " . $o . " from " . $u . " " . $r);
        }
        $Query = mysqli_query($this->conn, "select " . $o . " from " . $u . " " . $r);
        $Rs = mysqli_num_rows($Query);
        if ($Rs < 1) {
            return false;
        } else {
            return mysqli_fetch_array($Query);
        }
        mysqli_free_result($Query);
    }

    //插入记录
    public function insert($o = '', $u = '', $r = '')
    {
        $Query = mysqli_query($this->conn, "insert into " . $o . " set " . $u . " " . $r);
        return $Query;
    }

    //删除记录
    public function del($o = '', $u = '')
    {
        $Query = mysqli_query($this->conn, "delete from " . $o . " " . $u);
        return $Query;
    }

    //更新记录
    public function update($o = '', $u = '', $r = '')
    {
        $Query = mysqli_query($this->conn, "update " . $o . " set " . $u . " " . $r);
        return $Query;
    }

    //记录集
    public function listgo($o = '', $u = '', $r = '')
    {
        $Query = mysqli_query($this->conn, "select " . $o . " from " . $u . " " . $r);
        return $Query;
        mysqli_free_result($Query);
    }

    //循环记录集
    public function whilego($o = '', $u = 1)
    {
        if ($u == 1) {
            return mysqli_fetch_array($o);
        } elseif ($u == 2) {
            return mysqli_fetch_row($o);
        }
    }

    //取记录数 and 取前一次MYSQL记录行数
    public function rows($o = '', $u = 1)
    {
        return mysqli_num_rows($o);
    }

    //创建表 and 执行SQL
    public function create($o = '', $u = 1)
    {
        if ($u == 1) {
            $Query = mysqli_query($this->conn, "create table " . $o);
        } elseif ($u == 2) {
            $Query = mysqli_query($this->conn, $o);
        }
        return $Query;
    }

    //删除表
    public function drop($o = '')
    {
        $Query = mysqli_query($this->conn, "DROP TABLE " . $o);
        return $Query;
    }

    //其它函数
    public function other($o = '', $u = '', $r = '')
    {
        if ($o == '' || $u == '') {
            return false;
        } else {
            switch ($o) {
                case "escape_string":
                    return mysqli_real_escape_string($this->conn, $u);
                    break;
                case "num_fields":
                    return mysqli_num_fields($u);
                    break;
                case "field_flags":
                    return mysqli_fetch_field_direct($u, $r);
                    break;
            }
        }
    }

    //返回上一步 INSERT 操作产生的 ID
    public function insertid()
    {
        return mysqli_insert_id();
    }

    //错误提示
    public function error()
    {
        return mysqli_error();
    }

    //关闭数据库
    public function close()
    {
        mysqli_close($this->conn);
    }
}

?>
