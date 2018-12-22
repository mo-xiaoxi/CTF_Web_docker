<?php /* Smarty version Smarty-3.1.18, created on 2018-12-15 22:46:31
         compiled from "templates/tags.html" */ ?>
<?php /*%%SmartyHeaderCode:10479748515c1513c7c265d0-46285696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c3c1b7fd04a1555992cdc87255925b123fe077c' => 
    array (
      0 => 'templates/tags.html',
      1 => 1544793104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10479748515c1513c7c265d0-46285696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c1513c7c61054_75759695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c1513c7c61054_75759695')) {function content_5c1513c7c61054_75759695($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>emmm 模板标签文档</title>
<link href="templates/images/emmm_login.css" rel="stylesheet" type="text/css"> 
<script>
<!--
function setTab(m,n){
 var tli=document.getElementById("menu"+m).getElementsByTagName("li");
 var mli=document.getElementById("main"+m).getElementsByTagName("ul");
 for(i=0;i<tli.length;i++){
  tli[i].className=i==n?"hover":"";
  mli[i].style.display=i==n?"block":"none";
 }
}
//-->
</script>
<style type="text/css">
<!--
.STYLE1 {color: #990000}
.STYLE2 {color: #000000}
.STYLE3 {color: #FFFFFF}
.STYLE4 {color: #FF0000}
-->
</style>
</head>

<body>

<div style="height:50px; line-height:50px; text-align:center;">[<a href="#" onClick="window.open('tags.php','go','scrollbars=0,resizable=0,scrollbars=yes,width=1300,height=500,left=150,top=150,screenX=50,screenY=50')">在新窗口中弹出</a>]</div>
<div style="clear:both"></div>
<div id="tabs0">
 <ul class="menu0" id="menu0">
  <li onclick="setTab(0,0)" class="hover">全站通用</li>
  <li onclick="setTab(0,1)">特殊标签</li>
  <li onclick="setTab(0,2)">列表页标签</li>
  <li onclick="setTab(0,3)">内容页标签</li>
  <li onclick="setTab(0,4)">其它标签</li>
  <li onclick="setTab(0,5)">移动端标签</li>
 </ul>
 <div class="main" id="main0" style="border-top:2px #488fcd solid; clear:both;">
  <ul class="block">
      <li>
        <table width="90%" border="0" cellpadding="10" class="emmm_newslist">
          <tr>
            <td colspan="4"><div align="left">网站基本信息调用：</div></td>
          </tr>
          <tr>
            <td width="15%"><div align="right">网站标题</div></td>
            <td width="35%">[.$emmm_web.website.] </td>
            <td width="15%"><div align="right">网站域名</div></td>
            <td width="35%">[.$emmm_web.weburl.] </td>
          </tr>
          <tr>
            <td><div align="right">网站LOGO</div></td>
            <td>[.$emmm_web.weblogo.] </td>
            <td><div align="right">公司名称 </div></td>
            <td>[.$emmm_web.webname.] </td>
          </tr>
          <tr>
            <td><div align="right">公司地址</div></td>
            <td>[.$emmm_web.webadd.] </td>
            <td><div align="right">公司电话</div></td>
            <td>[.$emmm_web.webtel.] </td>
          </tr>
          <tr>
            <td><div align="right">手机 </div></td>
            <td>[.$emmm_web.webmobi.] </td>
            <td><div align="right">传真</div></td>
            <td>[.$emmm_web.webfax.] </td>
          </tr>
          <tr>
            <td><div align="right">Email </div></td>
            <td>[.$emmm_web.webemail.] </td>
            <td><div align="right">邮编 </div></td>
            <td>[.$emmm_web.webzip.] </td>
          </tr>
          <tr>
            <td><div align="right"> QQ</div></td>
            <td>[.$emmm_web.webqq.] </td>
            <td><div align="right">联系人</div></td>
            <td>[.$emmm_web.weblinkman.] </td>
          </tr>
          <tr>
            <td><div align="right">备案号</div></td>
            <td>[.$emmm_web.webicp.] </td>
            <td><div align="right">建站时间 </div></td>
            <td>[.$emmm_web.webtime.] </td>
          </tr>
          <tr>
            <td><div align="right">全局关键词 </div></td>
            <td>[.$emmm_web.webkeywords.]</td>
            <td><div align="right">全局描述</div></td>
            <td>[.$emmm_web.webdescriptions.] </td>
          </tr>
          <tr>
            <td><div align="right"> 第三方统计代码</div></td>
            <td>[.$emmm_web.webstatistics.] </td>
            <td><div align="right">获取网站URL</div></td>
            <td>http://[.$emmm_web.weburl.][.$ip.emmmurl.]</td>
          </tr>
          <tr>
            <td><div align="right">短标题</div></td>
            <td>[.$emmm_web.websitemin.] </td>
            <td><div align="right">微信号</div></td>
            <td>[.$emmm_web.weixin.] </td>
          </tr>
		  <tr>
            <td><div align="right">二维码</div></td>
            <td>[.$emmm_web.erweima.] </td>
            <td><div align="right">支付宝号</div></td>
            <td>[.$emmm_web.alipayname.] </td>
          </tr>
        </table>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
        <table width="90%" border="0" cellpadding="10" class="emmm_newslist">
          <tr>
            <td colspan="4"><div align="left">其它常用标签</div></td>
          </tr>
          <tr>
            <td width="15%"><div align="right">网站路径</div></td>
            <td width="35%">[.$webpath.] </td>
            <td width="15%"><div align="right">模板路径</div></td>
            <td width="35%"><p>[.$templatepath.]</p>            </td>
          </tr>
          <tr>
            <td><div align="right">BANNER</div></td>
            <td colspan="2"><p>[.banner lang=&quot;cn&quot; row=&quot;5&quot; name=&quot;banner&quot; id=&quot;0&quot; type=&quot;0&quot;.]<br />
  &lt;a href=&quot;[.$banner.url.]&quot;&gt;&lt;img src=&quot;[.$banner.img.]&quot;&gt;[.$banner.title.]&lt;/a&gt;
  <br />
            [./banner.]</p>              <p>&nbsp;</p></td>
            <td>
			  <p>lang=&quot;&quot; 语言标识</p>
              <p>row=&quot;&quot; 显示数量</p>
              <p>id=&quot;0&quot; 表示不筛选，如果筛选调用可以这样</p>
              <p>id=&quot;1,2,8&quot; 表示调用ID 1,2,8的数据 </p>
              <p>type=&quot;0&quot; 0表示电脑端调用 1表示手机端调用 (id=0的情况下)</p>
              <p>type=&quot;3&quot; 3~10表示调用3组到10组的数据 (id=0的情况下)</p>
              <p>name=&quot;banner&quot; 唯一值，不可改 </p>
			  <p>备注标题标签[.$banner.text1.]和[.$banner.text2.]和[.$banner.text3.]</p>
			  </td>
          </tr>
          <tr>
            <td><div align="right">载入其它模板</div></td>
            <td colspan="2"><p>[.include file=&quot;cn/cn_head.html&quot;.] </p>            </td>
            <td>说明：cn_head.html为要载入的模板文件 cn模板存放目录 </td>
          </tr>
          <tr>
            <td><div align="right">调用单页面内容</div></td>
            <td colspan="2">[.info type=&quot;about&quot; id=&quot;1&quot; html=&quot;1&quot; size=&quot;150&quot;.]</td>
            <td><p>type=&quot;about&quot; 调用单页面类型 </p>
              <p>id=&quot;1&quot; 调用栏目列表id=1的单页面数据 </p>
              <p>html=&quot;&quot; 1表示过滤html代码，2表示不过滤</p>
            <p>size=&quot;150&quot; 表示截取前150个字符</p>
            <p>说明：截取字符只有html=1的情况下可用</p>
            <p>只能调用单页面栏目，比如在首页调取公司简介等 </p></td>
          </tr>
          <tr>
            <td><div align="right">单独调用视频</div></td>
            <td colspan="2">[.info type=&quot;video&quot; id=&quot;1&quot; width=&quot;300&quot; height=&quot;300&quot; auto=&quot;2&quot;.]</td>
            <td><p>type=&quot;video&quot; 调用视频</p>
              <p>id=&quot;1&quot; 调用视频id=1的数据 </p>
              <p>width 是播放器宽度 必须是数字</p>
              <p>height 是播放器高度 必须是数字 </p>
              <p>auto=&quot;2&quot;点击播放 =1自动播放 </p></td>
          </tr>
          <tr>
            <td><div align="right">调用友情链接</div></td>
            <td colspan="2">[.link row=&quot;5&quot; type=&quot;1&quot; name=&quot;link&quot;.]<br />
&lt;a href=&quot;[.$link.url.]&quot; title=&quot;[.$link.title.]&quot; target=&quot;_blank&quot;&gt;[.$link.title.]&lt;/a&gt;<br />
[./link.]</td>
            <td><p>row=&quot;5&quot; 显示数量</p>
              <p>type=&quot;1&quot; 1表显调用文字链接 2调用图片链接 </p>
              <p>name=&quot;link&quot; 唯一值，不可改</p>
            <p>如果调用图片加入以下代码：</p>
            <p>&lt;img src=&quot;[.$link.img.]&quot;&gt;  </p></td>
          </tr>
          <tr>
            <td><div align="right">栏目调用(非无限级)</div></td>
            <td colspan="2">[.callcolumn id=&quot;3&quot; row=&quot;8&quot; lang=&quot;cn&quot; type=&quot;td&quot; name=&quot;callcolumn&quot;.]<br />
&lt;li&gt;&lt;a href=&quot;[.$callcolumn.url.]&quot; title=&quot;[.$callcolumn.title.]&quot;&gt;[.$callcolumn.title.]&lt;/a&gt;&lt;/li&gt;<br />
[./callcolumn.]</td>
            <td><p>id=&quot;3&quot;调用栏目的id 当0时调用整站栏目</p>
              <p>row=&quot;8&quot;显示数量</p>
              <p>lang=&quot;cn&quot;语言标识</p>
              <p>type=&quot;td&quot;等于td 表示下级调用</p>
              <p> 等于ty表示同级调用,等于dq调用指定ID栏目</p>
              <p>name=&quot;callcolumn&quot; 唯一值，不可改 </p>
              <p>还可以使用的标签：</p>
              <p>[.$callcolumn.titleto.] 栏目副标题标签</p>
              <p>[.$callcolumn.briefing.] 栏目介绍标签</p>
              <p>[.$callcolumn.img.] 栏目图片标签 </p></td>
          </tr>
		  <tr>
            <td><div align="right">三级栏目调用</div></td>
            <td colspan="2">
              <p>[.foreach from=$column item=op.]<br />
  &lt;!--一级循环内容--&gt;</p>
              <p>&nbsp;</p>
              <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[.if isset($op.child).]<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[.foreach from=$op.child item=opop.]<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--二级循环内容--&gt;<br />
                <br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[.if isset($opop.child).]<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[.foreach from=$opop.child item=opopop.]<br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--三级循环内容--&gt;<br />
                <br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[./foreach.]<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[./if.]<br />
                <br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[./foreach.]<br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[./if.]            </p>
            <p>[./foreach.] </p></td>
            <td><p>如果改成二级循环 可以把第三层删掉</p>
              <p>循环内容中，可以调用栏目里面的标签。</p>
              <p>每一层循环内容中的标签 必须要以每一层的item中的值开头</p>
              <p>如： 第二层循环 调用栏目标题标签，那么标签是：[.$<span class="STYLE4">opop</span>.title.] </p></td>
          </tr>
          <tr>
            <td><div align="right">漂浮广告调用</div></td>
            <td>[.$advert.float.]</td>
            <td><div align="right">右下角广告调用</div></td>
            <td>[.$advert.right.]</td>
          </tr>
          <tr>
            <td><div align="right">对联广告调用</div></td>
            <td>[.$advert.double.]</td>
            <td><div align="right">通用顶部广告调用</div></td>
            <td>[.$ad.head.]</td>
          </tr>
          <tr>
            <td><div align="right">通用底部广告调用</div></td>
            <td>[.$ad.foot.]</td>
            <td><div align="right">浮动客服调用</div></td>
            <td><p>[.service type=&quot;0&quot;.]</p>
            <p>type=&quot;0&quot; 调用全部客服</p>
            <p>调用指定类型的客服：</p>
            <p> type=&quot;qq&quot;&nbsp; 或者 &nbsp;&nbsp;&nbsp;type=&quot;aliww&quot;&nbsp;&nbsp;或者&nbsp;&nbsp;&nbsp;type=&quot;skype&quot;</p>
            <p>可以在service 中增加一个新属性 temp=&quot;index&quot; 如果 =index 不加载模板 可以直接用循环标签循环客服列表</p></td>
          </tr>
        </table>

        <p>&nbsp; </p>
      </li>
  </ul>
  <ul>
  		<li>
		
        <table width="90%" border="0" cellpadding="10" class="emmm_newslist">
          <tr>
            <td colspan="3"><div align="left">特殊标签</div></td>
          </tr>
          <tr>
            <td><div align="right">标签修饰</div></td>
            <td colspan="2"><table width="90%" border="0" cellpadding="5">
              <tr>
                <td width="13%"><div align="right">日期修饰：</div></td>
                <td width="36%">[.$opcms.time|date_format:&quot;%Y,%m,%d&quot;.]</td>
                <td width="51%"><p>$opcms.time 是要来修饰的字段</p>
                  <p>|date_format:&quot;%Y,%m,%d&quot; 是用来修饰时间显示的。比如这个 等同于：2015,1,1 </p>
                  <p>当然，还可以有很多种修饰方法。在举一个例子：</p>
                  <p>|date_format:&quot;%Y,%m,%d %H:%M:%S &quot; 等同于：2015,1,1 16:02:04 </p></td>
              </tr>
              <tr>
                <td><div align="right">长文截取：</div></td>
                <td>[.$opcms.content|truncate:33:&quot;...&quot;.]</td>
                <td><p>$opcms.content 是要来截取的字段</p>
                  <p>|truncate:33:&quot;...&quot; 是用来截取长度的。其中：33表示截取</p>
                  <p>前33个字符。 &quot;...&quot;表示超出33个字符后用 ... 替代。 </p></td>
              </tr>
              <tr>
                <td><div align="right">模板注释：</div></td>
                <td>[.*这里是注释内容*.]</td>
                <td><p>[.**.] 是emmm的注释方法</p>
                  <p>&lt;!----&gt; 是html的注释方法</p>
                  <p>[.**.]的好处在于，不会把注释的内容显示在源代码里</p></td>
              </tr>
              <tr>
                <td><div align="right">获取值：</div></td>
                <td><p>[.$smarty.get.id.]</p>
                  <p>[.$smarty.post.id.]</p></td>
                <td><p>获得GET中的id值，等同于：$_GET['id'] 值可变</p>
                  <p>获得POST中的id值，等同于：$_POST['id'] 值可变</p>                  </td>
              </tr>
              <tr>
                <td><div align="right">自动换行：</div></td>
                <td>[.$opcms.content|wordwrap:30.]</td>
                <td><p>$opcms.content 是要来截取的字段</p>
                  <p>|wordwrap:30 是用来换行的。其中：30表示第30个</p>
                  <p>字符后，自动换行。</p></td>
              </tr>
              <tr>
                <td><div align="right">取行号：</div></td>
                <td>[.$emmm.i.]</td>
                <td><p>我们一般用i这个标签来取循环数据中的行号</p>
                  <p>$emmm是不固定的变量，根据标签的变量来调用i</p></td>
              </tr>
              <tr>
                <td><div align="right">隔行换色：</div></td>
                <td colspan="2"><pre name="code">[.cycle values=&quot;#eeeeee,#d0d0d0&quot;.]</pre></td>
                </tr>
              <tr>
                <td>去除HTML标签</td>
                <td>[.$opcms.content|strip_tags.]</td>
                <td><p>$opcms.content 是要来截取的变量</p>
                  <p>|strip_tags 是去掉这个变量中所有的HTML标签</p>
                  </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td width="15%"><div align="right">万能标签</div></td>
            <td>[.emmm form=&quot;article&quot; row=&quot;3&quot; lang=&quot;cn&quot; id=&quot;0&quot; type=&quot;op&quot; name=&quot;emmm&quot;.]<br />
&lt;li&gt;&lt;font&gt;[.$emmm.i.]&lt;/font&gt;&lt;a href=&quot;[.$emmm.url.]&quot; title=&quot;[.$emmm.title.]&quot;&gt;[.$emmm.title.]&lt;/a&gt;&lt;span&gt;[.$emmm.time|date_format:&quot;%Y,%m,%d&quot;.]&lt;/span&gt;
&lt;p&gt;[.$emmm.description.]&lt;/p&gt;
&lt;/li&gt;<br />
[./emmm.] </td>
            <td width="35%"><p>万能标签解释：</p>
              <p>他可以分别调用多个表内的数据</p>
              <p>form=&quot;article&quot; 表名</p>
              <p>分别有：</p>
              <p class="STYLE1">article 文章表 ，photo 图集表</p>
              <p class="STYLE1">product 产品表，video 视频表</p>
              <p class="STYLE1">job 招聘表，down 下载表</p>
              <p>&nbsp;</p>
              <p>row=&quot;3&quot; 显示条数</p>
              <p>lang=&quot;cn&quot; 语言标识</p>
              <p>id=&quot;0&quot; 时调用所有表内数据</p>
              <p>想单独调用某个栏目内的数据，那么ID要等于栏目ID 如：id=&quot;2&quot; </p>
              <p>type=&quot;op&quot; 不使用属性</p>
              <p>type=&quot;0&quot; 调用头条 type=&quot;1&quot;调用热门</p>
              <p>type=&quot;2&quot; 调用滚动 type=&quot;3&quot;调用推荐 </p>
              <p>name=&quot;emmm&quot; 唯一值，不可以改 </p>
              <p>注意的是：每个表的字段可能有所不同</p>
              <p>栏目名:[.$emmm.column['title'].]</p>
              <p>栏目地址:[.$emmm.column['url'].]</p></td>
          </tr>
		  <tr>
		  	<td><div align="right">商品品牌调用标签</div></td>
			<td>[.foreach $brandclass as $op.]<br />
			  &lt;li&gt;&lt;a href=&quot;[.$op.url.]&quot; title=&quot;[.$op.title.]&quot;&gt;&lt;img src=&quot;[.$op.minimg.]&quot; border=&quot;0&quot; /&gt;[.$op.title.]&lt;/a&gt;&lt;/li&gt;<br />
		    [./foreach.]</td>
			<td></td>
		  </tr>
          <tr>
            <td><div align="right">无限级栏目调用</div></td>
            <td>[.function name=menu.]<br />
[.foreach $data as $op.]<br />
&lt;li class=&quot;item&quot;&gt;&lt;a href=&quot;[.$op.url.]&quot;&gt;[.$op.title.]&lt;/a&gt;<br />
[.*无限级开始*.][.if isset($op.child).]<br />
&lt;ul class=&quot;nav&quot;&gt;<br />
[.call name=menu data=$op.child.]<br />
&lt;/ul&gt;<br />
[./if.][.*无限级结束*.]<br />
&lt;/li&gt;<br />
[./foreach.]<br />
[./function.]<br />
[.call name=menu data=$column.]</td>
            <td><p>这个标签可以把后台的所有栏目按照级别层次</p>
              <p>无限级循环出来。还可以在循环体内插入：</p>
              <p>[.$op.titleto.] 栏目副标题标签</p>
              <p>[.$op.briefing.] 栏目介绍标签</p>
            <p>[.$op.img.] 栏目图片标签 </p></td>
          </tr>
          <tr>
            <td><div align="right">开发者标签</div></td>
            <td><p>[.sql mysql=&quot;输入MYSQL语句&quot; font=&quot;未找到数据!&quot; name=&quot;sql&quot;.]<br />
              这里是被循环的变量<br />
              [./sql.]</p>
            </td>
            <td>它可以调用所有表的数据，比万能标签还万能。但需要你对数据库熟悉的情况下可以使用。或在Emmm官方技术人员帮助下使用。</td>
          </tr>
        </table>
		
		</li>
  </ul>
  <ul>
 		<li>
		  <table width="90%" border="0" cellpadding="10" class="emmm_newslist">
              <tr>
                <td width="16%"><div align="right">获取当前栏目名</div></td>
                <td width="42%">[.$listname.title.]</td>
                <td width="24%"><div align="right">当前栏目副标题</div></td>
                <td width="18%">[.$listname.titleto.]</td>
              </tr>
			  <tr>
                <td width="16%"><div align="right">当前栏目列表模板</div></td>
                <td width="42%">[.$listname.listtemp.]</td>
                <td width="24%"><div align="right">当前栏目内容模板</div></td>
                <td width="18%">[.$listname.viewtemp.]</td>
              </tr>
			  <tr>
                <td width="16%"><div align="right">当前栏目介绍</div></td>
                <td width="42%">[.$listname.briefing.]</td>
                <td width="24%"><div align="right">当前栏目图片</div></td>
                <td width="18%">[.$listname.minimg.]</td>
              </tr>
			  <tr>
                <td width="16%"><div align="right">列表页广告调用</div></td>
                <td width="42%">[.$ad.list.]</td>
                <td width="24%"><div align="right"></div></td>
                <td width="18%">&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right">当前位置(面包屑)</div></td>
                <td colspan="2">[.foreach $crumbs as $op.]<br />
&gt;&gt; &lt;a href=&quot;[.$op.url.]&quot; title=&quot;[.$op.title.]&quot;&gt;[.$op.title.]&lt;/a&gt;<br />
 [./foreach.]</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="right">列表调用(翻页)</div></td>
                <td colspan="2"> <p>[.list id=&quot;$listid&quot; form=&quot;article&quot; name=&quot;list&quot;.] <br />
  &lt;li&gt;&lt;a href=&quot;[.$list.url.]&quot; title=&quot;[.$list.title.]&quot;&gt;[.$list.title.]&lt;/a&gt;&lt;span&gt;[.$list.time|date_format:&quot;%Y,%m,%d&quot;.]&lt;/span&gt;&lt;/li&gt;<br />
                [./list.]</p>
                <p>[.$emmmpage.] </p></td>
                <td><p>id=&quot;$listid&quot; 获取当前列表ID</p>
                  <p>form=&quot;article&quot; 调用文章列表</p>
                  <p>他可以分别调用多个表内的数据</p>
                  <p>form=&quot;article&quot; 表名</p>
                  <p>分别有：</p>
                  <p class="STYLE1">article 文章表 ，photo 图集表</p>
                  <p class="STYLE1">product 产品表，video 视频表</p>
                  <p class="STYLE1">job 招聘表，down 下载表</p>
                  <p>name=&quot;list&quot; 唯一值，不可改 </p>
                  <p>[.$emmmpage.] 翻页标签</p>
                  <p>简单扩展，如：每5条数据插入一次DIV，可以用下面的方法：</p>
                  <p>[.if $list.i % 5 == 0.]<br />
&lt;div class=&quot;news_line&quot;&gt;&lt;/div&gt;<br />
[./if.]</p>
                  <p>栏目名:[.$list.column['title'].]</p>
                  <p>栏目地址:[.$list.column['url'].]</p></td>
              </tr>
              <tr>
                <td><div align="right">品牌列表调用(翻页)</div></td>
                <td colspan="2"> <p>[.brandlist id=&quot;$listid&quot; name=&quot;brand&quot;.]<br />
  &lt;li&gt; &lt;a href=&quot;[.$brandlist.url.]&quot; title=&quot;[.$brandlist.title.]&quot;&gt;&lt;img src=&quot;[.$brandlist.minimg.]&quot; width=&quot;206&quot; height=&quot;206&quot; alt=&quot;[.$brandlist.title.]&quot; /&gt;&lt;/a&gt;&lt;/li&gt; <br />
                [./brandlist.]</p>
                <p>[.$emmmpage.]</p></td>
                <td><p>这个标签要在</p>
                <p>cn_brand.html 模板中使用 </p></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
          </table>
		</li>
  </ul>
  <ul>
  	<li>
			  <table width="90%" border="0" cellpadding="10" class="emmm_newslist">
              <tr>
                <td width="14%"><div align="right">上一条</div></td>
                <td width="62%">[.uptext form=&quot;article&quot; type=&quot;up&quot; font=&quot;上一条：&quot; noacc=&quot;暂无数据&quot;.]</td>
                <td width="21%" rowspan="2"><p>form=&quot;article&quot; 调用数据库 </p>
                <p>他可以分别调用多个表内的数据</p>
                <p>分别有：</p>
                <p class="STYLE1">article 文章表 ，photo 图集表</p>
                <p class="STYLE1">product 产品表，video 视频表</p>
                <p class="STYLE1">job 招聘表，down 下载表</p>
                <p class="STYLE2">type=&quot;up&quot; 上一条 down下一条 </p>
                <p class="STYLE2">font=&quot;上一条：&quot; 标识</p>
                <p class="STYLE2">你可以改成 上一篇等等。</p>
                <p class="STYLE2">noacc=&quot;暂无数据&quot; 当没有数据时返回提示。 </p>
                <p class="STYLE2">如果是手机页面，我们可以加一个参数上去：url=&quot;wap&quot;</p></td>
              </tr>
              <tr>
                <td><div align="right">下一条</div></td>
                <td>[.uptext form=&quot;article&quot; type=&quot;down&quot; font=&quot;下一条：&quot; noacc=&quot;暂无数据&quot;.]</td>
                </tr>
			 <tr>
                <td valign="top" bgcolor="#6666FF"><div align="right"><span class="STYLE3">内容页通用标签</span></div></td>
                <td colspan="2"><table width="90%" border="0" cellpadding="5">
                  <tr>
                    <td width="17%"><div align="right">独立关键词</div></td>
                    <td width="34%">[.$opcms.tag.]</td>
                    <td width="17%"><div align="right">独立描述</div></td>
                    <td width="32%">[.$opcms.description.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">浏览量</div></td>
                    <td>[.$opcms.click.]</td>
                    <td><div align="right">内容页广告调用</div></td>
                    <td>[.$ad.view.]</td>
                  </tr>
                  
                </table>
               <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#CCCCFF"><div align="right" class="STYLE3">内容页评论调用</div></td>
                <td colspan="2"><table width="100%" border="0" cellpadding="10">
                  <tr>
                    <td width="15%"><div align="right">评论调用</div></td>
                    <td width="69%">[.comment id=$opcms.id type=$ip.type row=&quot;10&quot;.]</td>
                    <td width="16%"><p>row=10</p>
                    <p>表示调用10条和10条后翻页</p></td>
                  </tr>
                  
                </table>
                  <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#0099FF"><div align="right" class="STYLE3">文章内容页标签</div></td>
                <td colspan="2"> <table width="90%" border="0" cellpadding="5">
                  <tr>
                    <td><div align="right">文章标题</div></td>
                    <td>[.$opcms.title.]</td>
                    <td><div align="right">文章作者</div></td>
                    <td>[.$opcms.author.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">文章来源</div></td>
                    <td>[.$opcms.source.]</td>
                    <td><div align="right">发布时间</div></td>
                    <td>[.$opcms.time.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">文章内容</div></td>
                    <td>[.$opcms.content.]</td>
                    <td><div align="right">文章缩略图</div></td>
                    <td>[.$opcms.minimg.]</td>
                  </tr>
                  
                </table>
                  <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#FF9933"><div align="right"><span class="STYLE3">商品内容页标签</span></div></td>
                <td colspan="2"><table width="90%" border="0" cellpadding="5">
                  <tr>
                    <td width="16%"><div align="right">商品标题</div></td>
                    <td width="20%">[.$opcms.title.]</td>
                    <td width="18%"><div align="right">商品缩略图</div></td>
                    <td width="46%">[.$opcms.minimg.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">商品大图</div></td>
                    <td>[.$opcms.maximg.]</td>
                    <td><div align="right">商品编号</div></td>
                    <td>[.$opcms.number.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">商品货号</div></td>
                    <td>[.$opcms.goodsno.]</td>
                    <td><div align="right">品牌标签</div></td>
                    <td><p>[.$opcms.brand.title.] 调用品牌名称</p>
                      <p>[.$opcms.brand.minimg.] 调用品牌LOGO </p></td>
                  </tr>
                  <tr>
                    <td><div align="right">市场价格</div></td>
                    <td>[.$opcms.market.]</td>
                    <td><div align="right">本站价格</div></td>
                    <td>[.$opcms.webmarket.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">库存数量</div></td>
                    <td>[.$opcms.stock.]</td>
                    <td><div align="right">商品属性调用</div></td>
                    <td>[.foreach from=$opcms.attribute item=aop.]<br />
&lt;li&gt;[.$aop.name.]：[.$aop.key.]&lt;/li&gt;<br />
[./foreach.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">商品正文</div></td>
                    <td>[.$opcms.content.]</td>
                    <td><div align="right">商品组图</div></td>
                    <td><p>[.foreach $opcms.img as $key =&gt; $op.]<br />
  &lt;li&gt;&lt;img src=&quot;[.$webpath.][.$op.img.]&quot; alt=&quot;[.$op.name.]&quot;/&gt;[.$op.name.]&lt;/li&gt;<br />
                    [./foreach.]</p>
                    <p>调用组图第一张图片：[.$webpath.][.$opcms.img[0].img.]</p></td>
                  </tr>
                  <tr>
                    <td><div align="right">发布时间</div></td>
                    <td>[.$opcms.time.]</td>
                    <td><div align="right">销量</div></td>
                    <td><table width="100%" border="0">
                      <tr>
                        <td><div align="right">月销量</div></td>
                        <td>[.$opcms.total.]</td>
                      </tr>
                      <tr>
                        <td><div align="right">总销量</div></td>
                        <td>[.$opcms.totalday.]</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><div align="right">赠送积分</div></td>
                    <td>[.$opcms.integral.]</td>
                    <td><div align="right">兑换积分</div></td>
                    <td>[.$opcms.integralexchange.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">商品规格调用</div></td>
                    <td>在使用商城模式下可以通过此标签调用商品的规格symbol=&quot;：&quot;是分界符</td>
                    <td colspan="2">[.emmm_gg id=$opcms.specificationsid arr=$opcms.specifications mktprice=$opcms.market price=$opcms.webmarket mktpricefont=&quot;市场价&quot; pricefont=&quot;本站价&quot; stock=&quot;库存&quot; stocks=$opcms.stock numberfont=&quot;货号&quot; number=$opcms.number amount=&quot;购买数量&quot; vipfont=&quot;所有会员价&quot; freightfont=&quot;快递&quot; symbol=&quot;：&quot; usermoney=$opcms.usermoney freight=$opcms.freight.]</td>
                  </tr>
                  <tr>
                    <td><div align="right"><span style="padding:1px 5px 1px 5px; background:#F90; color:#FFF; border-radius:5px;">包邮</span>标志</div></td>
                    <td>[.$opcms.freight-tag.]</td>
                    <td>商品亮点(一句话介绍)</td>
                    <td>[.$opcms.suggest.]<br />
					如果是图片，用img包起来
					</td>
                  </tr>
                </table>
                  <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#9999FF"><div align="right" class="STYLE3">图集内容页调用</div></td>
                <td colspan="2"><table width="90%" border="0" cellpadding="5">
                  <tr>
                    <td width="14%"><div align="right">图集标题</div></td>
                    <td width="36%">[.$opcms.title.]</td>
                    <td width="20%"><div align="right">发布时间</div></td>
                    <td width="30%">[.$opcms.time.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">图集正文</div></td>
                    <td>[.$opcms.content.]</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><div align="right">图集组图</div></td>
                    <td colspan="3"><p>[.foreach $opcms.img as $key =&gt; $op.]<br />
  &lt;li&gt;&lt;a href=&quot;[.$webpath.][.$op.img.]&quot;&gt;&lt;img src=&quot;[.$webpath.][.$op.img.]&quot; /&gt;[.$op.name.]&lt;/a&gt;&lt;/li&gt;<br />
                      [./foreach.]</p>
                    <p>取图集中的第一张图：[.$webpath.][.$opcms.img[0].img.]</p></td>
                  </tr>
                  
                </table>
                <p>&nbsp;</p></td>
                </tr>
              <tr>
                <td valign="top" bgcolor="#999966"><div align="right" class="STYLE3">视频内容页调用</div></td>
                <td colspan="2"><table width="90%" border="0" cellpadding="5">
                  <tr>
                    <td width="14%"><div align="right">视频标题</div></td>
                    <td width="22%">[.$opcms.title.]</td>
                    <td width="20%"><div align="right">视频缩略图</div></td>
                    <td width="44%">[.$opcms.minimg.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">视频地址</div></td>
                    <td>[.$opcms.playurl.]</td>
                    <td><div align="right">发布时间</div></td>
                    <td>[.$opcms.time.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">视频格式</div></td>
                    <td>[.$opcms.format.]</td>
                    <td><div align="right">视频宽度</div></td>
                    <td>[.$opcms.width.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">视频高度</div></td>
                    <td>[.$opcms.height.]</td>
                    <td><div align="right">视频正文</div></td>
                    <td>[.$opcms.content.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">浏览数量</div></td>
                    <td>[.$opcms.click.]</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><div align="right">封装播放器</div></td>
                    <td>[.$opcms.player.]</td>
                    <td colspan="2">用此标签可以直接调用视频播放器，是我们封装好的。仅支持swf,mp4,flv三种格式。如果你想自定义播放器，可以使用上面的[.$opcms.playurl.]	
标签来调用后台数据。</td>
                  </tr>
                </table>
                <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#FFCCFF"><div align="right"><span class="STYLE3">下载内容页调用</span></div></td>
                <td colspan="2"><table width="90%" border="0" cellpadding="5">
                  <tr>
                    <td><div align="right">下载标题</div></td>
                    <td>[.$opcms.title.]</td>
                    <td><div align="right">发布时间</div></td>
                    <td>[.$opcms.time.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">软件截图</div></td>
                    <td>[.$opcms.minimg.]</td>
                    <td><div align="right">软件介绍</div></td>
                    <td>[.$opcms.content.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">授权方式</div></td>
                    <td>[.$opcms.empower.]</td>
                    <td><div align="right">软件类型</div></td>
                    <td>[.$opcms.type.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">操作语言</div></td>
                    <td>[.$opcms.lang.]</td>
                    <td><div align="right">软件大小</div></td>
                    <td>[.$opcms.size.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">软件厂商</div></td>
                    <td>[.$opcms.make.]</td>
                    <td><div align="right">运行环境</div></td>
                    <td>[.$opcms.setup.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">下载地址(跳转)</div></td>
                    <td>[.$opcms.downurl.]</td>
                    <td><div align="right">软件描述</div></td>
                    <td>[.$opcms.description.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">下载地址(真实)</div></td>
                    <td>[.$opcms.downurltrue.]</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
                <p>&nbsp;</p></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#66CCFF"><div align="right"><span class="STYLE3">招聘内容页调用</span></div></td>
                <td colspan="2"><table width="90%" border="0" cellpadding="5">
                  <tr>
                    <td><div align="right">招聘标题</div></td>
                    <td>[.$opcms.title.]</td>
                    <td><div align="right">发布时间</div></td>
                    <td>[.$opcms.time.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">招聘职位</div></td>
                    <td>[.$opcms.work.]</td>
                    <td><div align="right">工作地点</div></td>
                    <td>[.$opcms.add.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">工作性质</div></td>
                    <td>[.$opcms.nature.]</td>
                    <td><div align="right">工作经验</div></td>
                    <td>[.$opcms.experience.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">最低学历</div></td>
                    <td>[.$opcms.education.]</td>
                    <td><div align="right">招聘人数</div></td>
                    <td>[.$opcms.number.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">年龄要求</div></td>
                    <td>[.$opcms.age.]</td>
                    <td><div align="right">福利待遇</div></td>
                    <td>[.$opcms.welfare.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">月薪</div></td>
                    <td>[.$opcms.wage.]</td>
                    <td><div align="right">应聘联系人</div></td>
                    <td>[.$opcms.contact.]</td>
                  </tr>
                  <tr>
                    <td><div align="right">联系电话</div></td>
                    <td>[.$opcms.tel.]</td>
                    <td><div align="right">详细描述</div></td>
                    <td>[.$opcms.content.]</td>
                  </tr>
                </table>
                <p>&nbsp;</p></td>
              </tr>
            </table>
	</li>
  </ul>
  <ul>
  	<li>
  	  <table width="90%" border="0" cellpadding="10" class="emmm_newslist">
              <tr>
                <td valign="top" bgcolor="#FFCC99"><div align="right" class="STYLE3">单页面调用</div></td>
                <td colspan="2"><table width="90%" border="0" cellpadding="5">
                  <tr>
                    <td width="14%"><div align="right">单页面标题</div></td>
                    <td width="22%">[.$listname.title.]</td>
                    <td width="20%"><div align="right">单页面内容</div></td>
                    <td width="44%">[.$opcms.content.]</td>
                  </tr>
                  
                </table>
                <p>&nbsp;</p></td>
              </tr>
	    <tr>
          <td valign="top" bgcolor="#33CCFF"><div align="right" class="STYLE3">留言板版块调用</div></td>
          <td>[.*留言版块开始*.]<br />
&lt;table width=&quot;100%&quot; border=&quot;1&quot; cellpadding=&quot;10&quot; bordercolor=&quot;#e7eff3&quot; bgcolor=&quot;#ffffff&quot; style=&quot;text-align:left; font-size:12px; border-collapse:collapse; padding:0px;&quot;&gt;<br />
&lt;tr style=&quot;background:url([.$webpath.]skin/clubgb.png) repeat-x;&quot;&gt;<br />
&lt;td style=&quot;padding:0px 0px 0px 10px; height:31px;&quot;&gt;&lt;div align=&quot;left&quot;&gt;版块名称&lt;/div&gt;&lt;/td&gt;<br />
&lt;td style=&quot;padding:0px; height:31px;&quot;&gt;&lt;div align=&quot;center&quot;&gt;成立时间&lt;/div&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
[.foreach $club as $key =&gt; $op.]<br />
&lt;tr&gt;<br />
&lt;td height=&quot;50&quot;&gt;<br />
&lt;p style=&quot;font-size:24px; float:left; color:#333333; line-height:50px;&quot;&gt;&lt;a href=&quot;[.$op.url.]&quot;&gt;【[.$op.title.]】&lt;/a&gt;&lt;/p&gt;<br />
&lt;p style=&quot;font-size:12px; color:#999999; float:left; line-height:50px; color: #FF6600;&quot;&gt;([.$op.number.]条留言)&lt;/p&gt;<br />
&lt;div style=&quot;clear:both;&quot;&gt;&lt;/div&gt;<br />
&lt;p style=&quot;font-size:12px; color:#999999; padding-left:10px;&quot;&gt;[.$op.content.]&lt;/p&gt;<br />
&lt;/td&gt;<br />
&lt;td&gt;&lt;div align=&quot;center&quot;&gt;[.$op.time|date_format:&quot;%Y-%m-%d %H:%I:%S&quot;.]&lt;/div&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
[./foreach.]<br />
&lt;/table&gt;<br />
[.*留言版块结束*.]</td>
        </tr>
        <tr>
          <td width="15%" valign="top" bgcolor="#CC9933"><div align="right" class="STYLE3">留言板内容调用</div></td>
          <td width="85%"><p>[.*留言开始*.]<br />
&lt;table width=&quot;100%&quot; border=&quot;1&quot; cellpadding=&quot;10&quot; bordercolor=&quot;#e7eff3&quot; bgcolor=&quot;#ffffff&quot; style=&quot;text-align:left; font-size:12px; border-collapse:collapse; padding:0px;&quot;&gt;<br />
&lt;tr style=&quot;background:url([.$webpath.]skin/clubgb.png) repeat-x;&quot;&gt;<br />
&lt;td style=&quot;padding:0px 0px 0px 10px; height:31px; width:600px;&quot;&gt;&lt;div align=&quot;left&quot;&gt;留言列表&lt;/div&gt;&lt;/td&gt;<br />
&lt;td style=&quot;padding:0px 0px 0px 10px; height:31px;&quot;&gt;&lt;div align=&quot;left&quot;&gt;发表留言&lt;/div&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td valign=&quot;top&quot;&gt;<br />
<br />
&lt;table width=&quot;100%&quot; border=&quot;0&quot; cellpadding=&quot;10&quot;&gt;<br />
[.if empty($opcms).]<br />
&lt;tr&gt;<br />
&lt;td&gt;暂无留言,请您发表吧!&lt;/td&gt;<br />
&lt;/tr&gt;<br />
[./if.]<br />
[.foreach $opcms as $key =&gt; $op.] <br />
&lt;tr&gt;<br />
&lt;td width=&quot;20%&quot; rowspan=&quot;2&quot; valign=&quot;top&quot;&gt;&lt;div align=&quot;center&quot;&gt;&lt;img src=&quot;[.$webpath.]skin/userhead_s.jpg&quot; border=&quot;0&quot; /&gt;&lt;/div&gt;&lt;/td&gt;<br />
&lt;td width=&quot;80%&quot; style=&quot;min-height:60px;&quot; valign=&quot;top&quot;&gt;<br />
&lt;p style=&quot; height:30px; line-height:30px; border-bottom:1px #CCCCCC dashed;&quot;&gt;&lt;span style=&quot;float:right; font-size:12px; color:#999999;&quot;&gt;([.$op.time.])&lt;/span&gt;[.$op.name.]&lt;/p&gt;<br />
&lt;p style=&quot; margin-top:20px;&quot;&gt;[.$op.content.]&lt;/p&gt;<br />
&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;<br />
[.if $op.reply != ''.]<br />
&lt;table width=&quot;100%&quot; border=&quot;0&quot; cellpadding=&quot;5&quot; bgcolor=&quot;#D7E1F9&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td style=&quot;border-bottom:1px #ffffff dashed;&quot;&gt;管理员回复：&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td valign=&quot;top&quot;&gt;[.$op.reply.]&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;<br />
[./if.]<br />
&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td style=&quot;border-bottom:1px #CCCCCC dashed; height:10px;&quot;&gt;&amp;nbsp;&lt;/td&gt;<br />
&lt;td style=&quot;border-bottom:1px #CCCCCC dashed; height:10px;&quot;&gt;&amp;nbsp;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
[./foreach.]<br />
&lt;/table&gt; <br />
<br />
&lt;/td&gt;<br />
&lt;td valign=&quot;top&quot;&gt;<br />
&lt;form id=&quot;form1&quot; name=&quot;form1&quot; method=&quot;post&quot; action=&quot;[.$bookform.]&quot;&gt;<br />
&lt;table width=&quot;100%&quot; border=&quot;0&quot; id=&quot;float&quot; class=&quot;right_fl&quot;&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;&lt;div align=&quot;right&quot;&gt;姓名：&lt;/div&gt;&lt;/td&gt;<br />
[.if $ip.bookuser == 0.]<br />
&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;bookname&quot; style=&quot;width:230px; height:25px; border:1px #CCCCCC solid; background:#FFFFFF; font-size:14px; line-height:25px; color:#666666;&quot; /&gt;&lt;/td&gt;<br />
[.else.]<br />
<br />
[.if isset($smarty.session.username).]<br />
&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;bookname&quot; value=&quot;[.$smarty.session.name.]&quot; style=&quot;width:230px; height:25px; border:1px #CCCCCC solid; background:#f4f4f4; font-size:14px; line-height:25px; color:#ccc;&quot; readonly /&gt;&lt;/td&gt;<br />
[.else.]<br />
&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;bookname&quot; style=&quot;width:230px; height:25px; border:1px #CCCCCC solid; background:#FFFFFF; font-size:14px; line-height:25px; color:#666666;&quot; /&gt;&lt;/td&gt;<br />
[./if.]<br />
<br />
[./if.]<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;&lt;div align=&quot;right&quot;&gt;联系方式：&lt;/div&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;booktel&quot; style=&quot;width:230px; height:25px; border:1px #CCCCCC solid; background:#FFFFFF; font-size:14px; line-height:25px; color:#666666;&quot; /&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td valign=&quot;top&quot;&gt;&lt;div align=&quot;right&quot;&gt;留言内容：&lt;/div&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;textarea name=&quot;bookcontent&quot; style=&quot;width:230px; height:100px; border:1px #CCCCCC solid; background:#FFFFFF; font-size:14px; line-height:25px; color:#666666;&quot;&gt;&lt;/textarea&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;tr&gt;<br />
&lt;td&gt;&lt;div align=&quot;right&quot;&gt;验证码：&lt;/div&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;bookcode&quot; style=&quot;width:100px; height:25px; border:1px #CCCCCC solid; background:#FFFFFF; font-size:14px; line-height:25px; color:#666666;&quot; onfocus=&quot;document.getElementById('checkcode2').src+='?'&quot; /&gt;&amp;nbsp;&lt;img title=&quot;点击刷新&quot; id=&quot;checkcode2&quot; src=&quot;[.$webpath.]function/emmm_code.php&quot; align=&quot;absbottom&quot; onclick=&quot;this.src='[.$webpath.]function/emmm_code.php?'+Math.random();&quot; width=&quot;80&quot; height=&quot;25&quot;&gt;&lt;/img&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
[.if $ip.bookuser == 0.]<br />
&lt;tr&gt;<br />
&lt;td&gt;&lt;div align=&quot;right&quot;&gt;&lt;/div&gt;&lt;/td&gt;<br />
&lt;td&gt;&lt;input type=&quot;submit&quot; name=&quot;Submit&quot; value=&quot;提 交&quot; style=&quot;width:80px; height:25px; border:0px; background:#68A7D4; color:#FFFFFF;&quot; /&gt;&lt;/td&gt;<br />
&lt;/tr&gt;<br />
[.else.]<br />
&lt;tr&gt;<br />
&lt;td&gt;&lt;/td&gt;<br />
[.if isset($smarty.session.username).]<br />
&lt;td&gt;&lt;input type=&quot;submit&quot; name=&quot;Submit&quot; value=&quot;提 交&quot; style=&quot;width:80px; height:25px; border:0px; background:#68A7D4; color:#FFFFFF;&quot; /&gt;&lt;/td&gt;<br />
[.else.]<br />
&lt;td&gt;请先登录,在发表留言!&lt;/td&gt;<br />
[./if.]<br />
&lt;/tr&gt;<br />
[./if.]<br />
&lt;tr&gt;<br />
&lt;td&gt;&lt;input type=&quot;hidden&quot; name=&quot;ip&quot; value=&quot;[.$ip.ip.]&quot; /&gt;<br />
&lt;input type=&quot;hidden&quot; name=&quot;class&quot; value=&quot;[.$ip.listid.]&quot; /&gt;<br />
&lt;input type=&quot;hidden&quot; name=&quot;lang&quot; value=&quot;[.$ip.lang.]&quot; /&gt;<br />
&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;<br />
&lt;/form&gt;<br />
&lt;/td&gt;<br />
&lt;/tr&gt;<br />
&lt;/table&gt;<br />
&lt;div style=&quot;clear:both; height:20px;&quot;&gt;&lt;/div&gt;<br />
[.$emmmpage.]<br />
[.*留言结束*.]</p></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#999900"><div align="right"><span class="STYLE3">会员登录调用</span></div></td>
          <td><p>&lt;script src=&quot;[.$webpath.]function/plugs/layer/layer.min.js&quot;&gt;&lt;/script&gt;</p>
            <p>[.if isset($smarty.session.username).]<br />
              您好！&lt;a href=&quot;client/user/&quot;&gt;[.$smarty.session.username.]&lt;/a&gt;<br />
              [.else.]<br />
  &lt;a href=&quot;javascript:dialog()&quot;&gt;登录&lt;/a&gt; - &lt;a href=&quot;client/user/?cn-reg.html&quot;&gt;注册&lt;/a&gt;<br />
              [./if.]<br />
  &lt;/p&gt;<br />
  &lt;script&gt; <br />
              function dialog(){<br />
              $.layer({<br />
              type: 1,<br />
              title: '会员登录',<br />
              shade: [0],<br />
              border: [5, 0.3, '#000'],<br />
              area: ['410px', '220px'],<br />
              page: {html: '&lt;form id=&quot;form1&quot; name=&quot;form1&quot; method=&quot;POST&quot; action=&quot;[.$webpath.]client/user/emmm_play.class.php?emmm_cms=login&quot; class=&quot;registerform&quot;&gt;&lt;table width=&quot;100%&quot; border=&quot;0&quot; cellpadding=&quot;5&quot; style=&quot;font-size:12px;&quot;&gt;&lt;tr&gt;&lt;td&gt;&lt;div align=&quot;right&quot;&gt;登录账号：&lt;/div&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;COL_Useremail&quot; style=&quot;width:300px; height:30px; border:1px #CCCCCC solid; line-height:30px; color:#999999&quot; /&gt;&lt;font color=&quot;#FF0000&quot;&gt;*&lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;div align=&quot;right&quot;&gt;登录密码：&lt;/div&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;password&quot; name=&quot;COL_Userpass&quot; style=&quot;width:300px; height:30px; border:1px #CCCCCC solid; line-height:30px; color:#999999&quot; /&gt;&lt;font color=&quot;#FF0000&quot;&gt;*&lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;div align=&quot;right&quot;&gt;验证码：&lt;/div&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;code&quot; style=&quot;width:100px; height:30px; border:1px #CCCCCC solid; line-height:30px; color:#999999&quot; onfocus=&quot;document.getElementById(\'checkcode\').src+=\'?\'&quot; /&gt;&lt;font color=&quot;#FF0000&quot;&gt;*&lt;/font&gt;&amp;nbsp;&lt;img title=&quot;点击刷新&quot; id=&quot;checkcode&quot; src=&quot;[.$webpath.]function/emmm_code.php&quot; align=&quot;absbottom&quot; onclick=&quot;this.src=\'[.$webpath.]function/emmm_code.php?\'+Math.random();&quot; width=&quot;80&quot; height=&quot;25&quot;&gt;&lt;/img&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;div align=&quot;right&quot;&gt;&lt;/div&gt;&lt;/td&gt;&lt;td&gt;&lt;input type=&quot;submit&quot; name=&quot;Submit&quot; value=&quot;登录&quot; style=&quot;width:100px; height:30px; border:0px; background:#0099FF; color:#FFFFFF;&quot;/&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/form&gt;'}<br />
              });<br />
              };<br />
  &lt;/script&gt;</p></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#66CCFF"><div align="right"><span class="STYLE3">搜索标签调用</span></div></td>
          <td><table width="90%" border="0" cellpadding="10">
              <tr>
                <td width="17%" bgcolor="#CCCCCC"><div align="right">搜索调用</div></td>
                <td width="83%">&lt;form name=&quot;search&quot; method=&quot;post&quot; action=&quot;[.$webpath.]search.php?temp=search&quot;&gt;<br />
&lt;input type=&quot;text&quot; class=&quot;text&quot; name=&quot;content&quot; id=&quot;content&quot; value=&quot;请输入搜索关键词&quot; onfocus=&quot;this.value=''&quot; onblur=&quot;if(!value){value=defaultValue}&quot;/&gt;<br />
&lt;div class=&quot;select&quot;&gt;<br />
&lt;select id=&quot;sid&quot; name=&quot;sid&quot;&gt;<br />
&lt;option value=&quot;article&quot; selected=&quot;selected&quot;&gt;文章&lt;/option&gt;<br />
&lt;option value=&quot;product&quot; &gt;商品&lt;/option&gt;<br />
&lt;option value=&quot;photo&quot; &gt;案例&lt;/option&gt;<br />
&lt;option value=&quot;video&quot; &gt;视频&lt;/option&gt;<br />
&lt;option value=&quot;down&quot; &gt;文档&lt;/option&gt;<br />
&lt;option value=&quot;job&quot; &gt;招聘&lt;/option&gt;<br />
&lt;/select&gt;<br />
&lt;/div&gt;<br />
&lt;input type=&quot;hidden&quot; name=&quot;lang&quot; value=&quot;cn&quot; /&gt;&lt;input type=&quot;hidden&quot; name=&quot;type&quot; value=&quot;pc&quot; /&gt;<br />
&lt;input type=&quot;submit&quot; title=&quot;搜索&quot; class=&quot;button&quot; value=&quot;搜索&quot;/&gt;<br />
&lt;/form&gt;</td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC"><div align="right">单独搜索商品</div></td>
                <td><p>&lt;form name=&quot;search&quot; method=&quot;post&quot; action=&quot;[.$webpath.]search.php?temp=search&quot;&gt;<br />
                  &lt;input type=&quot;text&quot; class=&quot;text&quot; name=&quot;content&quot; id=&quot;content&quot; value=&quot;请输入搜索关键词&quot; onfocus=&quot;this.value=''&quot; onblur=&quot;if(!value){value=defaultValue}&quot; style=&quot;width:350px;&quot;/&gt;<br />
                  &lt;input type=&quot;hidden&quot; name=&quot;lang&quot; value=&quot;cn&quot; /&gt;<br />
                  &lt;input type=&quot;hidden&quot; name=&quot;sid&quot; value=&quot;product&quot; /&gt;&lt;input type=&quot;hidden&quot; name=&quot;type&quot; value=&quot;pc&quot; /&gt;<br />
                  &lt;input type=&quot;submit&quot; title=&quot;商品搜索&quot; class=&quot;button&quot; style=&quot;width:110px;&quot; value=&quot;商品搜索&quot;/&gt;<br />
                  &lt;/form&gt;</p>                  </td>
              </tr>
              <tr>
                <td bgcolor="#CCCCCC"><div align="right">搜索结果</div></td>
                <td><p><span class="STYLE4">注：该标签只可以在cn_search.html 搜索模板页面调用</span></p>
                  <p>&lt;table width=&quot;100%&quot; border=&quot;0&quot;&gt;<br />
                    [.foreach $search as $op.]<br />
  &lt;tr bgcolor=&quot;[.cycle values=&quot;#f4f4f4,#ffffff&quot;.]&quot;&gt;<br />
  &lt;td width=&quot;50&quot; style=&quot;border-bottom:1px #CCCCCC dashed;&quot;&gt;[.$op.i.]&lt;/td&gt;<br />
  &lt;td style=&quot;border-bottom:1px #CCCCCC dashed;&quot;&gt;&lt;a href=&quot;[.$op.url.]&quot; target=&quot;_blank&quot;&gt;[.$op.title.]<br />
  &lt;p style=&quot;font-size:12px; color:#999999; padding-left:30px;&quot;&gt;[.$op.content|truncate:200:&quot;...&quot;.]&lt;/p&gt;<br />
  &lt;/a&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;</p>
                  <p>[.foreachelse.]<br />
  &lt;tr&gt;<br />
  &lt;td&gt;未搜索到记录！&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
                    [./foreach.]<br />
  &lt;/table&gt; </p></td>
              </tr>
            </table></td>
        </tr>
      </table>
  	</li>
  </ul>
  <ul>
    <table width="90%" border="0" cellpadding="10" class="emmm_newslist">
      <tr>
        <td><div align="right">判断来访类型</div></td>
        <td><p>标签：[.$mobile.]</p>
          <p>1.7.0版本后，自动识别URL。插入此标签后（PC模板和WAP模板统一）系统根据来访类型自动跳转对应页面。</p>
		  <p>建议把标签插入到 cn_head.html 等通用类模板中，这样每个页面都有判断跳转功能。</p>
		  </td>
      </tr>
      <tr>
        <td><div align="right">手机网站说明</div></td>
        <td><p>手机网站目前URL的标签与PC网站的不同。比如万能标签中的URL地址标签是：[.$emmm.url.] 那么手机URL地址就是[.$emmm.wapurl.]</p>
          <p>在开发的时候一定要注意。 </p></td>
      </tr>
      <tr>
        <td><div align="right">手机端视频调用</div></td>
        <td>&lt;div id=&quot;a1&quot;&gt;&lt;/div&gt;<br />
          &lt;script type=&quot;text/javascript&quot; src=&quot;[.$webpath.]function/plugs/ckplayer/ckplayer/ckplayer.js&quot; charset=&quot;utf-8&quot;&gt;&lt;/script&gt;<br />
          &lt;script type=&quot;text/javascript&quot;&gt;<br />
var flashvars={<br />
f:'[.$opcms.playurl.]',<br />
c:0<br />
};<br />
var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};<br />
var video=['[.$opcms.playurl.]-&gt;video/mp4'];<br />
CKobject.embed('[.$webpath.]function/plugs/ckplayer/ckplayer/ckplayer.swf','a1','ckplayer_a1','100%','100%',true,flashvars,video,params);<br />
&lt;/script&gt;</td>
      </tr>
    </table>
  </ul>
</div>
</div>

</body>
</html>
<?php }} ?>
