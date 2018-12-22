<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include 'emmm_page.class.php';
include '../../function/emmm_navigation.class.php';

if(isset($_GET["emmm_cms"]) == ""){
	echo '';
}elseif ($_GET["emmm_cms"] == "add"){

	$query = $db -> insert("`emmm_booksection`","`COL_Booksectiontitle` = '".dowith_sql($_POST["COL_Booksectiontitle"])."',`COL_Booksectioncontent` = '".dowith_sql($_POST["COL_Booksectioncontent"])."',`COL_Booksectionlanguage` = '".dowith_sql($_POST["COL_Booksectionlanguage"])."',`COL_Booksectionsorting` = '".dowith_sql($_POST["COL_Booksectionsorting"])."',`time` = '".date("Y-m-d H:i:s")."'","");
	$emmm_font = 1;
	$emmm_class = 'emmm_book.php?id=emmms';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "del"){

	if (strstr($COL_Adminpower,"35")){

		$query = $db -> del("emmm_booksection","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_book.php?id=emmms';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_book.php?id=emmms';
		require 'emmm_remind.php';
	
	}
			
}elseif ($_GET["emmm_cms"] == "bookdel"){
		
	if (strstr($COL_Adminpower,"35")){

		$query = $db -> del("emmm_book","where id = ".intval($_GET['id']));
		$emmm_font = 2;
		$emmm_class = 'emmm_book.php?id=emmm';
		require 'emmm_remind.php';
	
	}else{
	
		$emmm_font = 4;
		$emmm_content = '权限不够，无法删除！';
		$emmm_class = 'emmm_book.php?id=emmms';
		require 'emmm_remind.php';
	
	}

}elseif ($_GET["emmm_cms"] == "reply"){

	$query = $db -> update("`emmm_book`","`COL_Bookreply` = '".dowith_sql($_POST["COL_Bookreply"])."'","where id = ".intval($_GET['id']));
	$emmm_font = 1;
	$emmm_class = 'emmm_book.php?id=emmm';
	require 'emmm_remind.php';
			
}elseif ($_GET["emmm_cms"] == "edit"){

	if (strstr($COL_Adminpower,"34")){

		$query = $db -> update("`emmm_booksection`","`COL_Booksectiontitle` = '".dowith_sql($_POST["COL_Booksectiontitle"])."',`COL_Booksectioncontent` = '".dowith_sql($_POST["COL_Booksectioncontent"])."',`COL_Booksectionlanguage` = '".dowith_sql($_POST["COL_Booksectionlanguage"])."',`COL_Booksectionsorting` = '".dowith_sql($_POST["COL_Booksectionsorting"])."',`time` = '".date("Y-m-d H:i:s")."'","where id = ".intval($_GET['id']));
		$emmm_font = 1;
		$emmm_class = 'emmm_book.php?id=emmms';
		require 'emmm_remind.php';
		
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_book.php?id=emmms';
		require 'emmm_remind.php';
		
	}
			
}

function columncycle($id=1){
	global $db;
	$emmm_rs = $db -> select("`COL_Booksectiontitle`","`emmm_booksection`","where id = ".$id);
	return $emmm_rs[0];
}

function Booklist(){
	global $_page,$db,$smarty;
	$listpage = 40;
	if (intval(isset($_GET['page'])) == 0){
		$listpagesum = 1;
			}else{
		$listpagesum = intval($_GET['page']);
	}
	$start=($listpagesum-1)*$listpage;
	$emmmtotal = $db -> listgo("count(id) as tiaoshu","`emmm_book`","order by id desc");
	$emmmtotal = $db -> whilego($emmmtotal);
	$query = $db -> listgo("*","`emmm_book`","order by id desc LIMIT ".$start.",".$listpage);
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs['id'],
			"content" => $emmm_rs['COL_Bookcontent'],
			"name" => $emmm_rs['COL_Bookname'],
			"tel" => $emmm_rs['COL_Booktel'],
			"ip" => $emmm_rs['COL_Bookip'],
			"class" => columncycle($emmm_rs['COL_Bookclass']),
			"lang" => $emmm_rs['COL_Booklang'],
			"time" => $emmm_rs['time'],
			"reply" => $emmm_rs['COL_Bookreply']
		);
	}
	$_page = new Page($emmmtotal['tiaoshu'],$listpage);
	$smarty->assign('emmmpage',$_page->showpage());
	return $rows;
}

function Langlist(){
	global $db;
	$query = $db -> listgo("id,COL_Lang,COL_Font,COL_Default","`emmm_lang`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"lang" => $emmm_rs[1],
			"font" => $emmm_rs[2],
			"default" => $emmm_rs[3]
		);
	}
	return $rows;
}

function Booksection(){
	global $db;
	$query = $db -> listgo("*","`emmm_booksection`","order by COL_Booksectionsorting asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs['id'],
			"lang" => $emmm_rs['COL_Booksectionlanguage'],
			"title" => $emmm_rs['COL_Booksectiontitle'],
			"content" => $emmm_rs['COL_Booksectioncontent'],
			"time" => $emmm_rs['time']
		);
	}
	return $rows;
}

Admin_click('留言管理','emmm_book.php?id=emmm');
$smarty->assign("Booklist",Booklist());
$smarty->assign("langlist",Langlist());
$smarty->assign("Booksection",Booksection());
if (isset($_GET["uid"])){
	$emmm_rs = $db -> select("*","`emmm_booksection`","where `id` = ".intval($_GET['uid']));
	$smarty->assign('emmm_booksection',$emmm_rs);
}
$smarty->display('emmm_book.html');
?>
