<?php 

include 'emmm_admin.php';
include 'emmm_checkadmin.php';
include '../../function/emmm_navigation.class.php';
include '../../function/emmm_Tree.class.php';

if(isset($_GET["page"]) == ""){
	$smarty->assign("page",1);
	}else{
	$smarty->assign("page",$_GET["page"]);
}

if(isset($_GET["emmm_cms"]) == ""){
	
	echo '';
	
}elseif ($_GET["emmm_cms"] == "edit"){
	
	if (strstr($COL_Adminpower,"34")){
		$COL_Class = explode("|",admin_sql($_POST["COL_Class"]));
		if ($COL_Class[0] == 0){
			$emmm_font = 4;
			$emmm_content = $emmm_adminfont['nocolumn'];
			$emmm_class = 'emmm_productlist.php?id=emmm';
			require 'emmm_remind.php';
			exit;
		}
		
		$COL_Minimg = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Minimg"]));
		$COL_Maximg = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Maximg"]));
		$COL_Img = str_replace($emmm['webpath']."function","function",admin_sql($_POST["COL_Img"]));
		
		if (!empty($_POST["COL_Img2"])){
			$COL_Img2 = implode('|',$_POST["COL_Img2"]);
			if (!empty($COL_Img)){
				$COL_imga = $COL_Img2.'|'.$COL_Img;
			}else{
				$COL_imga = $COL_Img2;
			}
		}else{
			$COL_Img2 = '';
			$COL_imga = $COL_Img;
		}
		
		if (!admin_sql($_POST["COL_Description"])){
			$COL_Description = utf8_strcut(strip_tags(admin_sql($_POST["COL_Content"])), 0, 200);
		}else{
			$COL_Description = admin_sql($_POST["COL_Description"]);
		}
		
		//分词
		$word = $COL_Description;
		$tag = admin_sql($_POST["COL_Tag"]);
		include '../../function/emmm_sae.class.php';
		//结束
		
		if (!empty($_POST["COL_Attribute"])){
		$COL_Attribute = implode(',',$_POST["COL_Attribute"]);
		}else{
		$COL_Attribute = '';
		}
		
		//自定义属性处理
		if (!empty($_POST["COL_Pattribute"])){
			
			$COL_Pattribute = implode('|',$_POST["COL_Pattribute"]);
			foreach ($_POST["COL_Pattribute"] as $op){
				$str = str_replace("：",":",$op);
				$str = explode(":",$str);
				
				$pattr = $db -> select("`COL_Title`,`COL_Text`","emmm_productattribute","where `id` = ".intval($str[0]));
				if($pattr){
					
					if(!strstr($pattr[1],$str[2])){
						$edit = $db -> update("emmm_productattribute","`COL_Text` = '".$pattr[1].'|'.admin_sql($str[2])."'","where `id` = ".intval($str[0]));
					}
					
					$value .= $pattr[0].':'.$str[2].'|';
					
				}else{
					
					exit('<script language=javascript> alert("商品属性输入出错\r\n不能修改属性标题,只能自定义修改参数值.");history.go(-1);</script>');
					
				}
			}
			
			$COL_Pattribute = rtrim($value,'|');
		
		}else{
		$COL_Pattribute = '';
		}

		if (!empty($_POST["optitle"])){
		$optitle = implode(',',$_POST["optitle"]);
		}else{
		$optitle = '';
		}
		
		if (!empty($_POST["optitleid"])){
		$optitleid = implode(',',$_POST["optitleid"]);
		}else{
		$optitleid = '';
		}
		
		if (!empty($_POST["op"])){
		$a = implode(',',$_POST["op"]);
		$b = str_replace(',|,','|',$a);
		$COL_Specifications = str_replace(',|','',$b);
		}else{
		$COL_Specifications = '';
		}
		
		if (!empty($_POST["COL_Userj"])){
		$c = implode(':',$_POST["COL_Userj"]);
		$d = str_replace(':|:','|',$c);
		$COL_Usermoney = str_replace(':|','',$d);
		}else{
		$COL_Usermoney = '';
		}
		
		if (!empty($_POST["COL_Productimgname"])){
		$COL_Productimgname = implode('|',$_POST["COL_Productimgname"]);
		}else{
		$COL_Productimgname = '';
		}

		$query = $db -> update("`emmm_product`","`COL_Class` = '".$COL_Class[0]."',`COL_Lang` = '".$COL_Class[1]."',`COL_Title` = '".admin_sql($_POST["COL_Title"])."',`COL_Number` = '".admin_sql($_POST["COL_Number"])."',`COL_Goodsno` = '".admin_sql($_POST["COL_Goodsno"])."',`COL_Brand` = '".admin_sql($_POST["COL_Brand"])."',`COL_Market` = '".admin_sql($_POST["COL_Market"])."',`COL_Webmarket` = '".admin_sql($_POST["COL_Webmarket"])."',`COL_Stock` = '".admin_sql($_POST["COL_Stock"])."',`COL_Usermoney` = '".$COL_Usermoney."',`COL_Specificationsid` = '".$optitleid."',`COL_Specificationstitle` = '".$optitle."',`COL_Specifications` = '".$COL_Specifications."',`COL_Pattribute` = '".$COL_Pattribute."',`COL_Minimg` = '".$COL_Minimg."',`COL_Maximg` = '".$COL_Maximg."',`COL_Img` = '".$COL_imga."',`COL_Content` = '".admin_sql($_POST["COL_Content"])."',`COL_Weight` = '".intval($_POST["COL_Weight"])."',`COL_Freight` = '".intval($_POST["COL_Freight"])."',`COL_Tag` = '".$wordtag."',`COL_Sorting` = '".admin_sql($_POST["COL_Sorting"])."',`COL_Attribute` = '".$COL_Attribute."',`COL_Url` = '".admin_sql($_POST["COL_Url"])."',`COL_Description` = '".compress_html($COL_Description)."',`time` = '".date("Y-m-d H:i:s")."',`COL_Integral` = '".admin_sql($_POST["COL_Integral"])."',`COL_Integralok` = '".admin_sql($_POST["COL_Integralok"])."',`COL_Integralexchange` = '".admin_sql($_POST["COL_Integralexchange"])."',`COL_Suggest` = '".admin_sql($_POST["COL_Suggest"])."',`COL_Productimgname` = '".admin_sql($COL_Productimgname)."'","where id = ".intval($_GET["id"]));
		$emmm_font = 1;
		$emmm_class = 'emmm_productlist.php?id=emmm&page='.$_GET["page"];
		require 'emmm_remind.php';
		
	}else{
		
		$emmm_font = 4;
		$emmm_content = '权限不够，无法编辑内容！';
		$emmm_class = 'emmm_productlist.php?id=emmm';
		require 'emmm_remind.php';
		
	}
}

function Attribute($optype){
	global $db;
	if($optype == 'op'){
		$query = $db -> listgo("id,COL_Title","`emmm_productattribute`","where `COL_Class` = 0 order by COL_Sorting asc");
	}else{
		$query = $db -> listgo("id,COL_Title,COL_Text","`emmm_productattribute`","where `COL_Class` != 0 order by COL_Sorting asc");
	}
	
	$rows=array();
	$i = 1;
	if($optype == 'op'){
	
		while($emmm_rs = $db -> whilego($query)){
			$rows[]=array(
				"i" => $i,
				"id" => $emmm_rs[0],
				"name" => $emmm_rs[1]
			);
			$i = $i + 1;
		}
		
	}else{
		
		$x=0;
		while($emmm_rs = $db -> whilego($query)){
			$cfsz = explode("|",$emmm_rs[2]);
			$op=array();
			foreach($cfsz as $u){
				$op[]=$u;
			}
			$rows[] = array(
				'x'=>$x,
				'id'=>$emmm_rs[0],
				'name'=>$emmm_rs[1],
				'three'=>$op
			);
			$x+=1;
		}
	
	}
	return $rows;
}

function Brand(){
	global $db;
	$query = $db -> listgo("id,COL_Brand,COL_Img","`emmm_productcp`","where `COL_Class` = 2 order by id desc");
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1],
			"img" => $emmm_rs[2],
		);
		$i = $i + 1;
	}
	return $rows;
}


function Usermoney(){
	global $db;
	$emmm_rs = $db -> select("`COL_Usermoney`","`emmm_product`","where `id` = ".intval($_GET['id']));
	$emmm_fg = explode("|",$emmm_rs[0]);
	$rows = array();
	$i=0;
	foreach($emmm_fg as $op){
		$emmm_fgo = explode(":",$op);
		$rows[] = array(
			'i' => $i,
			'id' => $emmm_fgo[0],
			'money' => $emmm_fgo[1],
		);
		$i+=1;
	}
	return $rows;
}

function Userleve(){
	global $db;
	$query = $db -> listgo("id,COL_Userlevename","`emmm_userleve`","order by id asc");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"id" => $emmm_rs[0],
			"name" => $emmm_rs[1]
		);
	}
	return $rows;
}

function Productset(){
	global $db;
	$query = $db -> listgo("COL_Pattern,COL_Scheme","`emmm_productset`","where id = 1");
	$rows=array();
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"set" => $emmm_rs[0],
			"scheme" => $emmm_rs[1]
		);
	}
	return $rows;
}

function Pattribute(){
	global $db;
	$emmm_rs = $db -> select("`COL_Pattribute`","`emmm_product`","where `id` = ".intval($_GET['id']));
	if (!empty($emmm_rs[0])){
		$emmm_afg = explode("|",$emmm_rs[0]);
		$rows = array();
		$i=0;
		foreach($emmm_afg as $op){
			$emmm_afgo = explode(":",$op);
			$rows[] = array(
				'i' => $i,
				'class' => $emmm_afgo[0],
				'name' => $emmm_afgo[1]
			);
			$i+=1;
		}
		return $rows;
	}
}

function Specifications(){
	global $db;
	$emmm_rs = $db -> select("`COL_Specifications`","`emmm_product`","where `id` = ".intval($_GET['id']));
	if (!empty($emmm_rs[0])){
		$COL_Specifications = explode("|",$emmm_rs[0]);
		$rows = array();
			foreach($COL_Specifications as $op){
				$opo = explode(",",$op);
				$a = array();
				foreach($opo as $opop){
					$a[] = $opop;
				}
				$rows[] = array('three'=>$a);
			}
	return $rows;
	}
}

function Freight(){
	global $db;
	$query = $db -> listgo("id,COL_Freightname","`emmm_freight`","order by COL_Freightdefault desc,id desc");
	$rows=array();
	$i = 1;
	while($emmm_rs = $db -> whilego($query)){
		$rows[]=array(
			"i" => $i,
			"id" => $emmm_rs[0],
			"title" => $emmm_rs[1],
		);
		$i = $i + 1;
	}
	return $rows;
}

//$op= new Tree(columnlist(""));
//$arr=$op->leaf();

$node = columnlist("");
$arr = array2tree($node,0);	
$smarty->assign('product',$arr);
$smarty->assign('Attribute',Attribute('op'));
$smarty->assign('Attributeto',Attribute('oo'));
$smarty->assign('Brand',Brand());
$smarty->assign('Usermoney',Usermoney());
$smarty->assign('Userleve',Userleve());
$smarty->assign('Set',Productset());
$smarty->assign('Pattribute',Pattribute());
$smarty->assign('Specifications',Specifications());
$smarty->assign('Freight',Freight());

$emmm_rs = $db -> select("*","`emmm_product`","where `id` = ".intval($_GET['id']));
$smarty->assign('emmm_product',$emmm_rs);
$emmm_text=explode(",",$emmm_rs['COL_Attribute']);
for($i=0;$i<sizeof($emmm_text);$i++){ 
	$selected[] = $emmm_text[$i];
}
$smarty->assign('selected',$selected); 
$emmmh_qx=array('头条','热门','滚动','推荐'); 
$smarty->assign('emmmh_qx',$emmmh_qx); 

if ($emmm_rs['COL_Specificationstitle'] != ''){
$rowsop='';
$COL_Specificationstitle = explode(",",$emmm_rs['COL_Specificationstitle']);
	foreach($COL_Specificationstitle as $op){
		$rowsop[]=array(
			"name" => $op
		); 
	}
}else{
	$rowsop = '';
}
$smarty->assign('Specificationstitle',$rowsop);

if ($emmm_rs['COL_Img'] != ''){
$COL_Img = explode("|",$emmm_rs['COL_Img']);
$COL_Productimgname = explode("|",$emmm_rs['COL_Productimgname']);
$i = 1;
$ii = 0;
foreach($COL_Img as $u){
    $COL_Imgarr = explode("|",$u);
    foreach($COL_Imgarr as $newstr){
        $rows[]=array(
			"i" => $i,
			"img" => $newstr,
			"imgname" => $COL_Productimgname[$ii],
		); 
		$i = $i + 1;
		$ii = $ii + 1;
    }
}
}else{
	$rows = '';
}
$smarty->assign('productimglist',$rows);
/* if ($emmm_rs['COL_Brand'] != ''){
$COL_Brand = explode("|",$emmm_rs['COL_Brand']);
}else{
$COL_Brand = '|';
}
$smarty->assign('Prbrand',$COL_Brand); */
$smarty->display('emmm_productedit.html');
?>
