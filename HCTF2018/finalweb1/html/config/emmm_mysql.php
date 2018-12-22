<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 * -------------------------------
 * Mysql 数据库类 (2016-10-22)
 * -------------------------------
 */
 
class Emmm_Mysql{
	
	private $dburl;
	private $dbname;
	private $dbpass;
	private $dbtabel;
	private $dblang = "utf8";
	private $conn;
	
	function __construct($dburl = '',$dbname = '',$dbpass = '',$dbtabel = ''){
		$this -> conn = mysql_connect($dburl,$dbname,$dbpass);
		mysql_select_db($dbtabel,$this -> conn) or die('数据库链接出错: ' . $this -> error());
		mysql_query('set names '.$this -> dblang,$this -> conn);
	}
	
	//读取一条记录
	public function select($o = '',$u = '',$r = ''){
		$Query = mysql_query("select ".$o." from ".$u." ".$r);
		$Rs = mysql_num_rows($Query);
		if($Rs < 1){
			return false;
		}else{
			return mysql_fetch_array($Query);
		}
		mysql_free_result($Query);
	}
	
	//插入记录
	public function insert($o = '',$u = '',$r = ''){
		$Query = mysql_query("insert into ".$o." set ".$u." ".$r);
		return $Query;
	}
	
	//删除记录
	public function del($o = '',$u = ''){
		$Query = mysql_query("delete from ".$o." ".$u);
		return $Query;
	}
	
	//更新记录
	public function update($o = '',$u = '',$r = ''){
		$Query = mysql_query("update ".$o." set ".$u." ".$r);
		return $Query;
	}
	
	//记录集
	public function listgo($o = '',$u = '',$r = ''){
		$Query = mysql_query("select ".$o." from ".$u." ".$r);
		return $Query;
		mysql_free_result($Query);
	}
	
	//循环记录集
	public function whilego($o = '',$u = 1){
		if($u == 1){
			return mysql_fetch_array($o);
		}elseif($u == 2){
			return mysql_fetch_row($o);
		}
	}
	
	//取记录数 and 取前一次MYSQL记录行数
	public function rows($o = '', $u = 1){
		return mysql_num_rows($o);
	}
	
	//创建表 and 执行SQL
	public function create($o = '',$u = 1){
		if($u == 1){
			$Query = mysql_query("create table ".$o);
		}elseif($u == 2){
			$Query = mysql_query($o,$this -> conn);
		}
		return $Query;
	}
	
	//删除表
	public function drop($o = ''){
		$Query = mysql_query("DROP TABLE ".$o);
		return $Query;
	}
	
	//其它函数
	public function other($o = '',$u = '',$r = ''){
		if($o == '' || $u == ''){
			return false;
		}else{
			switch($o){
				case "escape_string":
					return mysql_escape_string($u);
				break;
				case "num_fields":
					return mysql_num_fields($u);
				break;
				case "field_flags":
					return mysql_field_flags($u,$r);
				break;
			}
		}
	}
	
	//返回上一步 INSERT 操作产生的 ID
	public function insertid(){
		return mysql_insert_id();
	}
	
	//错误提示
	public function error(){
		return mysql_error();
	}
	
	//关闭数据库
	public function close(){
		mysql_close($this -> conn);
	}
}
?>
