<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club

 *-------------------------------
 * 分页类(2014-10-15)
 *-------------------------------
*/
class Page {  
	private $total;      //总记录  
	private $pagesize;    //每页显示多少条  
	private $limit;          //limit  
	private $page;           //当前页码  
	private $pagenum;      //总页码  
	private $url;           //地址  
	private $bothnum;      //两边保持数字分页的量  

	//构造方法初始化  
	public function __construct($_total, $_pagesize) {  
		$this->total = $_total ? $_total : 1;  
		$this->pagesize = $_pagesize;  
		$this->pagenum = ceil($this->total / $this->pagesize);  
		$this->page = $this->setPage();  
		$this->limit = "LIMIT ".($this->page-1)*$this->pagesize.",$this->pagesize";  
		$this->url = $this->setUrl();  
		$this->bothnum = 2;  
	}  

	//获取当前页码  
	private function setPage() {  
		if (!empty($_GET['page'])) {  
		if ($_GET['page'] > 0) {  
			if ($_GET['page'] > $this->pagenum) {  
			return $this->pagenum;  
				} else {  
				return $_GET['page'];  
			}  
				} else {  
				return 1;  
			}  
				} else {  
		return 1;  
		}  
	}   

	//获取地址  
	private function setUrl() {  
		$_url = $_SERVER["REQUEST_URI"];  
		$_par = parse_url($_url);  
		if (isset($_par['query'])) {  
			echo parse_str($_par['query'],$_query);  
			unset($_query['page']);  
			$_url = $_par['path'].'?'.http_build_query($_query);  
		}
	return $_url; 
	}     

	//数字目录  
	private function pageList() {  
		$_pagelist = '';
		for ($i=$this->bothnum;$i>=1;$i--) {  
			$_page = $this->page-$i;  
			if ($_page < 1) continue;  
			$_pagelist .= '<a href="'.$this->url.'&page='.$_page.'">'.$_page.'</a>';  
		}  
		$_pagelist .= '<span class="me">'.$this->page.'</span>';  
			for ($i=1;$i<=$this->bothnum;$i++) {  
			$_page = $this->page+$i;  
			if ($_page > $this->pagenum) break;  
			$_pagelist .= '<a href="'.$this->url.'&page='.$_page.'">'.$_page.'</a>';  
		}  
		return $_pagelist;  
	}  

	//首页  
	private function first() {  
		if ($this->page > $this->bothnum+1) {  
		return '<a href="'.$this->url.'">1</a><div class="emmm_dian">...</div>';  
		}  
	}  
	
	//尾页  
	private function last() {  
		if ($this->pagenum - $this->page > $this->bothnum) {  
		return '<div class="emmm_dian">...</div><a href="'.$this->url.'&page='.$this->pagenum.'">'.$this->pagenum.'</a>';  
		}  
	}  

	//分页信息  
	public function showpage() { 
		$_page = '';
		$_page .= $this->first();  
		$_page .= $this->pageList();  
		$_page .= $this->last();  
		return '<style type="text/css">.emmm_page { font-size:14px; margin:0 auto;}.emmm_page a { width:30px; height:25px; text-align:center; line-height:25px; border:1px #CCCCCCsolid; background:#f4f4f4; color:#666666; text-decoration:none; display:block; float:left; margin-right:10px;}.emmm_page .me { width:30px; height:25px; float:left; line-height:25px; border:1px #f4f4f4 solid; background:#cccccc; color:#666666; margin-right:10px; text-align:center; font-weight:bold;}.emmm_dian{ width:30px; height:25px; float:left; line-height:25px;color:#666666; margin-right:10px; text-align:center;font-size:14px;}</style><div class="emmm_page">'.$_page.'</div>';  
	}  
}  
?>
