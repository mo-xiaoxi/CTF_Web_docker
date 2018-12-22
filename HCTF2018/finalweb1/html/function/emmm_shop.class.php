<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
 *-------------------------------
 * 商城设置(2014-10-15)
 *-------------------------------
*/

function shopset()
{
    global $db;
    $emmm_rs = $db->select("COL_Pattern,COL_Scheme,COL_Stock,COL_buy,COL_Sendout,time,COL_Delivery", "`emmm_productset`", "where `id` = 1");
    $rows = array(
        'pattern' => $emmm_rs[0], //模式
        'scheme' => $emmm_rs[1], //方案
        'stock' => $emmm_rs[2],
        'buy' => $emmm_rs[3], //订单
        'sendout' => $emmm_rs[4], //发货
        'time' => $emmm_rs[5],
        'delivery' => $emmm_rs[6],
    );
    return $rows;
}

//处理属性
function Attribute($arr = '')
{
    if ($arr != '') {
        $pattribute = explode("|", $arr);
        foreach ($pattribute as $op) {
            $oparr = explode(":", $op);
            $opoparr[] = array(
                'name' => $oparr[0],
                'key' => $oparr[1],
            );
        }
        return $opoparr;
    }
}

function usermoneyleve($webmarket, $usermoney)
{
    global $db;
    $query = $db->slistgo("`id`,`COL_Userlevename`", "`emmm_userleve`", "order by id desc");
    $opcms = '';
    $Useremail = explode("|", $usermoney);
    while ($emmm_rs = $db->whilego($query)) {
        foreach ($Useremail as $op) {
            $Useremailto = explode(":", $op);
            if ($emmm_rs[0] == $Useremailto[0]) {
                $opcms .= $emmm_rs[1] . '：' . ($webmarket - $Useremailto[1]) . '&nbsp;';
            }
        }
    }
    return $opcms;
}

//处理规格
$shopsetgg = shopset();
function Specifications($params, $smarty)
{
    global $db, $emmm, $shopsetgg, $emmm_adminfont;

    include WEB_ROOT . '/function/api/ip/index.php';
    $emmm_rs = $db->select("`COL_Freighttext`", "`emmm_freight`", "where id = " . $params['freight']);
    $express = explode('|', $emmm_adminfont['express']);
    $freightop = explode('|', $emmm_rs[0] . '|本地IP'); //首重
    $city = explode('|', '北京市|天津市|上海市|重庆市|国外|河北省|河南省|云南省|辽宁省|黑龙江省|湖南省|安徽省|山东省|新疆|江苏省|浙江省|江西省|湖北省|广西|甘肃省|山西省|内蒙古|陕西省|吉林省|福建省|贵州省|广东省|青海省|西藏|四川省|宁夏|海南省|台湾|香港|澳门|本地IP');

    $i = 0;
    foreach ($city as $op) {
        if (strstr($op, $taobaoip)) {
            $ok = $i;
            break;
        } else {
            $ok = 35;
        }
        $i += 1;
    }

    if ($params['id'] != '') {
        $query = $db->listgo("id,COL_Title,COL_Value", "`emmm_productspecifications`", "where id in (" . $params['id'] . ")");
        if ($shopsetgg['delivery'] == 1) {
            $delivery = '&nbsp;&nbsp;&nbsp;&nbsp;<img src="' . $emmm['webpath'] . 'skin/delivery.png"> 支持货到付款';
        } else {
            $delivery = '';
        }
        $gg = '';
        $gg = $gg . '<LINK href="' . $emmm['webpath'] . 'function/plugs/product/base.css" rel=stylesheet>';
        $gg = $gg . '<script>';
        $gg = $gg . '$(document).ready(function(){';
        $gg = $gg . '$("#num").bind("input propertychange",function(){var n=$("#num").val(); if(n == 0){$("#num").val("1");}});';
        $gg = $gg . '$("#add").click(function(){';
        $gg = $gg . '  var n=$("#num").val();';
        $gg = $gg . '  var num=parseInt(n)+1;';
        $gg = $gg . ' if(num==0){alert("cc");}';
        $gg = $gg . '  $("#num").val(num);';
        $gg = $gg . '});';
        $gg = $gg . '$("#jian").click(function(){';
        $gg = $gg . '  var n=$("#num").val();';
        $gg = $gg . '  var num=parseInt(n)-1;';
        $gg = $gg . ' if(num==0){return;}';
        $gg = $gg . '  $("#num").val(num);';
        $gg = $gg . '  });';
        $gg = $gg . '});';
        $gg = $gg . '</script>';
        $gg = $gg . '	<div class="sys_item_spec">';
        $gg = $gg . '		<dl class="clearfix iteminfo_parameter iteminfo_parameter_default">';
        $gg = $gg . '			<dt>' . $params['mktpricefont'] . $params['symbol'] . '</dt>';
        $gg = $gg . '			<dd><span class="iteminfo_mktprice"><b class="sys_item_mktprice">' . $params['moneytype'] . $params['mktprice'] . '</b></span></dd>';
        $gg = $gg . '		</dl>';
        $gg = $gg . '		<dl class="clearfix iteminfo_parameter bob">';
        $gg = $gg . '			<dt>' . $params['pricefont'] . $params['symbol'] . '</dt>';
        $gg = $gg . '			<dd><span class="iteminfo_price"><b class="sys_item_price">' . $params['moneytype'] . $params['price'] . '</b></span></dd>';
        $gg = $gg . '		</dl>';
        $gg = $gg . '		<dl class="clearfix iteminfo_parameter">';
        $gg = $gg . '			<dt>' . $params['numberfont'] . $params['symbol'] . '</dt>';
        $gg = $gg . '			<dd><span class="sys_item_goodsno">' . $params['number'] . '</span></dd>';
        $gg = $gg . '		</dl>';
        $gg = $gg . '		<dl class="clearfix iteminfo_parameter">';
        $gg = $gg . '			<dt>' . $params['freightfont'] . $params['symbol'] . '</dt>';
        if ($freightop[$ok] < 1) {
            $yf = $city[$ok] . "&nbsp;&nbsp;" . $express[0];
        } else {
            $yf = $city[$ok] . "&nbsp;&nbsp;" . $freightop[$ok] . $express[1];
        }
        $gg = $gg . '			<dd>' . $yf . $delivery . '</dd>';
        $gg = $gg . '		</dl>';
        $gg = $gg . '<div class="shoph"></div>';
        $i = 1;
        while ($emmm_rs = $db->whilego($query)) {
            $COL_Value = explode("|", $emmm_rs[2]);
            $gg = $gg . '		<dl class="clearfix iteminfo_parameter sys_item_specpara" data-sid="' . $i . '">';
            $gg = $gg . '			<dt>' . $emmm_rs[1] . $params['symbol'] . '</dt>';
            $gg = $gg . '			<dd>';
            $gg = $gg . '				<ul class="sys_spec_text">';
            foreach ($COL_Value as $op) {
                $gg = $gg . '					<li data-aid="' . $op . '"><a href="javascript:;" title="' . $op . '">' . $op . '</a><i></i></li>';
            }
            $gg = $gg . '				</ul>';
            $gg = $gg . '				<div style="clear:both;"></div>';
            $gg = $gg . '			</dd>';
            $gg = $gg . '		</dl>';
            $i += 1;
        }
        $gg = $gg . '		<div style="clear:both;"></div>';
        $gg = $gg . '		<dl class="clearfix iteminfo_parameter">';
        $gg = $gg . '			<dt>' . $params['amount'] . $params['symbol'] . '</dt>';
        $gg = $gg . '			<dd><input type="button" id="jian" value="-" /><input type="text" id="num" name="sl" value="1" /><input type="button" id="add" value="+" />&nbsp;&nbsp;' . $params['stock'] . $params['symbol'] . '<span id="kc_show">' . $params['stocks'] . '</span></dd>';
        $gg = $gg . '		</dl>';
        $gg = $gg . '		<div style="clear:both;"></div>';
        $gg = $gg . '		<dl class="clearfix iteminfo_parameter">';
        $gg = $gg . '			<input type="hidden" name="emmm_kc" id="kc" />';
        $gg = $gg . '			<input type="hidden" name="emmm_hh" id="hh" />';
        $gg = $gg . '			<input type="hidden" name="emmm_sx" id="sxa" />';
        $gg = $gg . '		</dl>';
        $gg = $gg . '	</div>';
        $ggsl = count(explode(",", $params['id']));

        $Specifications = explode("|", $params['arr']);
        $oparr = '';
        $oparrtop = '{';
        foreach ($Specifications as $op) {
            $opop = explode(",", $op);
            if ($ggsl == 1) {
                $oparr = $oparr . '"' . $opop[1] . '":{"goodsno":"' . $opop[0] . '","price":"' . $params['moneytype'] . $opop[3] . '","mktprice":"' . $params['moneytype'] . $opop[2] . '","stock":"' . $opop[4] . '","opval":"' . $opop[1] . '"},';
            } elseif ($ggsl == 2) {
                $oparr = $oparr . '"' . $opop[1] . '_' . $opop[2] . '":{"goodsno":"' . $opop[0] . '","price":"' . $params['moneytype'] . $opop[4] . '","mktprice":"' . $params['moneytype'] . $opop[3] . '","stock":"' . $opop[5] . '","opval":"' . $opop[1] . '、' . $opop[2] . '"},';
            } elseif ($ggsl == 3) {
                $oparr = $oparr . '"' . $opop[1] . '_' . $opop[2] . '_' . $opop[3] . '":{"goodsno":"' . $opop[0] . '","price":"' . $params['moneytype'] . $opop[5] . '","mktprice":"' . $params['moneytype'] . $opop[4] . '","stock":"' . $opop[6] . '","opval":"' . $opop[1] . '、' . $opop[2] . '、' . $opop[3] . '"},';
            } elseif ($ggsl == 4) {
                $oparr = $oparr . '"' . $opop[1] . '_' . $opop[2] . '_' . $opop[3] . '_' . $opop[4] . '":{"goodsno":"' . $opop[0] . '","price":"' . $params['moneytype'] . $opop[6] . '","mktprice":"' . $params['moneytype'] . $opop[5] . '","stock":"' . $opop[7] . '","opval":"' . $opop[1] . '、' . $opop[2] . '、' . $opop[3] . '、' . $opop[4] . '"},';
            } else {
                $oparr = '';
            }
        }
        $oparrfoot = '}';

        $gg = $gg . '<script>' . "\n\r";
        $gg = $gg . 'var sys_item={' . "\n\r";
        $gg = $gg . '	"mktprice":"' . $params['moneytype'] . $params['mktprice'] . '",' . "\n\r";
        $gg = $gg . '	"price":"' . $params['moneytype'] . $params['price'] . '",' . "\n\r";
        $gg = $gg . '	"sys_attrprice":' . $oparrtop . substr($oparr, 0, -1) . $oparrfoot . '};' . "\n\r";
        $gg = $gg . '$(function(){' . "\n\r";
        $gg = $gg . '	$(".sys_item_spec .sys_item_specpara").each(function(){' . "\n\r";
        $gg = $gg . '		var i=$(this);' . "\n\r";
        $gg = $gg . '		var p=i.find("ul>li");' . "\n\r";
        $gg = $gg . '		p.click(function(){' . "\n\r";
        $gg = $gg . '			if(!!$(this).hasClass("selected")){' . "\n\r";
        $gg = $gg . '				$(this).removeClass("selected");' . "\n\r";
        $gg = $gg . '				i.removeAttr("data-attrval");' . "\n\r";
        $gg = $gg . '			}else{' . "\n\r";
        $gg = $gg . '				$(this).addClass("selected").siblings("li").removeClass("selected");' . "\n\r";
        $gg = $gg . '				i.attr("data-attrval",$(this).attr("data-aid"))' . "\n\r";
        $gg = $gg . '			}' . "\n\r";
        $gg = $gg . '			getattrprice()' . "\n\r";
        $gg = $gg . '		})' . "\n\r";
        $gg = $gg . '	})' . "\n\r";
        $gg = $gg . '	function getattrprice(){' . "\n\r";
        $gg = $gg . '		var defaultstats=true;' . "\n\r";
        $gg = $gg . '		var _val="";' . "\n\r";
        $gg = $gg . '		var _resp={' . "\n\r";
        $gg = $gg . '			mktprice:".sys_item_mktprice",' . "\n\r";
        $gg = $gg . '			price:".sys_item_price",' . "\n\r";
        $gg = $gg . '			stock:".sys_item_stock",' . "\n\r";
        $gg = $gg . '			goodsno:".sys_item_goodsno",' . "\n\r";
        $gg = $gg . '			opval:".sys_item_opval"' . "\n\r";
        $gg = $gg . '		}' . "\n\r";
        $gg = $gg . '		$(".sys_item_spec .sys_item_specpara").each(function(){' . "\n\r";
        $gg = $gg . '			var i=$(this);' . "\n\r";
        $gg = $gg . '			var v=i.attr("data-attrval");' . "\n\r";
        $gg = $gg . '			if(!v){' . "\n\r";
        $gg = $gg . '				defaultstats=false;' . "\n\r";
        $gg = $gg . '			}else{' . "\n\r";
        $gg = $gg . '				_val+=_val!=""?"_":"";' . "\n\r";
        $gg = $gg . '				_val+=v;' . "\n\r";
        $gg = $gg . '			}' . "\n\r";
        $gg = $gg . '		})' . "\n\r";
        $gg = $gg . '		if(!!defaultstats){' . "\n\r";
        $gg = $gg . '			_mktprice=sys_item["sys_attrprice"][_val]["mktprice"];' . "\n\r";
        $gg = $gg . '			_price=sys_item["sys_attrprice"][_val]["price"];' . "\n\r";
        $gg = $gg . '			_stock=sys_item["sys_attrprice"][_val]["stock"];' . "\n\r";
        $gg = $gg . '			_goodsno=sys_item["sys_attrprice"][_val]["goodsno"];' . "\n\r";
        $gg = $gg . '			_opval=sys_item["sys_attrprice"][_val]["opval"];' . "\n\r";
        $gg = $gg . '		}else{' . "\n\r";
        $gg = $gg . '			_mktprice=sys_item["mktprice"];' . "\n\r";
        $gg = $gg . '			_price=sys_item["price"];' . "\n\r";
        $gg = $gg . '			_stock=sys_item["stock"];' . "\n\r";
        $gg = $gg . '			_goodsno=sys_item["goodsno"];' . "\n\r";
        $gg = $gg . '			_opval=sys_item["_opval"];' . "\n\r";
        $gg = $gg . '		}' . "\n\r";
        $gg = $gg . '		$(_resp.mktprice).text(_mktprice);' . "\n\r";
        $gg = $gg . '		$(_resp.price).text(_price);' . "\n\r";
        $gg = $gg . '		$(_resp.stock).text(_stock);' . "\n\r";
        $gg = $gg . '		$(_resp.goodsno).text(_goodsno);' . "\n\r";
        $gg = $gg . '		$(_resp.opval).text(_opval);' . "\n\r";
        //赋值
        $gg = $gg . '		$("#kc_show").html(_stock);' . "\n\r";
        $gg = $gg . '		$("#kc").val(_stock);' . "\n\r";
        $gg = $gg . '		$("#hh").val(_goodsno);' . "\n\r";
        $gg = $gg . '		$("#sxa").val(_opval);' . "\n\r";
        $gg = $gg . '		$("#wap_sx").html("已选好："+_opval);' . "\n\r";
        $gg = $gg . '	}' . "\n\r";
        $gg = $gg . '})' . "\n\r";
        $gg = $gg . '</script>';

        return $gg;
    } else {
        $gg = '';
        $gg = $gg . '<LINK href="' . $emmm['webpath'] . 'function/plugs/product/base.css" rel=stylesheet>';
        $gg = $gg . '<script>';
        $gg = $gg . '$(document).ready(function(){';
        $gg = $gg . '$("#num").bind("input propertychange",function(){var n=$("#num").val(); if(n == 0){$("#num").val("1");}});';
        $gg = $gg . '$("#add").click(function(){';
        $gg = $gg . '  var n=$("#num").val();';
        $gg = $gg . '  var num=parseInt(n)+1;';
        $gg = $gg . ' if(num==0){alert("cc");}';
        $gg = $gg . '  $("#num").val(num);';
        $gg = $gg . '});';
        $gg = $gg . '$("#jian").click(function(){';
        $gg = $gg . '  var n=$("#num").val();';
        $gg = $gg . '  var num=parseInt(n)-1;';
        $gg = $gg . ' if(num==0){return;}';
        $gg = $gg . '  $("#num").val(num);';
        $gg = $gg . '  });';
        $gg = $gg . '});';
        $gg = $gg . '</script>';
        $gg = $gg . '<div class="sys_item_spec">';
        $gg = $gg . '<dl class="clearfix iteminfo_parameter iteminfo_parameter_default">';
        $gg = $gg . '<dt>' . $params['mktpricefont'] . $params['symbol'] . '</dt><dd><span class="iteminfo_mktprice"><b class="sys_item_mktprice">' . $params['moneytype'] . $params['mktprice'] . '</b></span></dd>';
        $gg = $gg . '</dl>';
        $gg = $gg . '<dl class="clearfix iteminfo_parameter bob">';
        $gg = $gg . '<dt>' . $params['pricefont'] . $params['symbol'] . '</dt><dd><span class="iteminfo_price"><b class="sys_item_price">' . $params['moneytype'] . $params['price'] . '</b></span></dd>';
        $gg = $gg . '</dl>';
        $gg = $gg . '<dl class="clearfix iteminfo_parameter">';
        $gg = $gg . '<dt>' . $params['numberfont'] . $params['symbol'] . '</dt><dd>' . $params['number'] . '</dd>';
        $gg = $gg . '</dl>';
        $gg = $gg . '<dl class="clearfix iteminfo_parameter">';
        if ($freightop[$ok] < 1) {
            $yf = $city[$ok] . "&nbsp;&nbsp;" . $express[0];
        } else {
            $yf = $city[$ok] . "&nbsp;&nbsp;" . $freightop[$ok] . $express[1];
        }
        $gg = $gg . '<dt>' . $params['freightfont'] . $params['symbol'] . '</dt><dd>' . $yf . '</dd>';
        $gg = $gg . '</dl>';
        $gg = $gg . '<div class="shoph"></div>';
        $gg = $gg . '<dl class="clearfix iteminfo_parameter">';
        $gg = $gg . '<dt><span style="float:left;">' . $params['amount'] . $params['symbol'] . '</dt><dd>' . '</span><span style="float:left;"><input type="button" id="jian" value="-" /><input type="text" id="num" name="sl" value="1" /><input type="button" id="add" value="+" /></span>&nbsp;&nbsp;' . $params['stock'] . $params['symbol'] . $params['stocks'] . '</dd><div style="clear:both;"></div>';
        $gg = $gg . '</dl>';
        $gg = $gg . '<input type="hidden" name="emmm_kc" value="' . $params['stocks'] . '"　/><input type="hidden" name="emmm_hh" value="' . $params['number'] . '"　/>';
        $gg = $gg . '</div>';
        return $gg;
    }
}

$smarty->assign('shopset', shopset());
$smarty->registerPlugin("function", "emmm_gg", "Specifications");
?>
