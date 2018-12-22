<?php
if(!defined('VERSION')){echo "<meta http-equiv=refresh content='0;URL=index.php'>";exit;}
create("emmm_ad"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Adtitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adcontent` text,\n  `COL_Adclass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adpiaofui` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adpiaofuu` text,\n  `COL_Adyouxiat` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adyouxiaf` text,\n  `COL_Adduilianli` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adduilianlu` text,\n  `COL_Adduilianri` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adduilianru` text,\n  `COL_Adstateo` int(11) NOT NULL DEFAULT '0',\n  `COL_Adstatet` int(11) NOT NULL DEFAULT '0',\n  `COL_Adstates` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");

insert("('1','全站顶部','','','../../skin/headerbanner.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('2','全站底部','','','../../skin/footerbanner.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('3','信息列表页','','','../../skin/threadlist.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('4','信息内容页','','','../../skin/article.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('5','特殊广告','','','','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('6','会员中心登录左侧广告位','','','../../skin/userrightad.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_ad");

create("emmm_admin"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Adminname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adminpass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adminpower` text,\n  `COL_Admin` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','test','fb469d7ef430b0ba','01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60','1','".base64_decode('MjAxOC0xMi0xNCAxOTo0NzoxOQ==')."')");

tableend("emmm_admin");

create("emmm_adminclick"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Click` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");

insert("('1','招聘管理','emmm_job.php?id=emmm','17'),
('2','会员选项','emmm_usercontrol.php?id=emmm','0'),
('3','会员管理','emmm_user.php?id=emmm','0'),
('4','数据库操作','emmm_bak.php?id=emmm','1')");

tableend("emmm_adminclick");

create("emmm_api"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Key` text,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");

insert("('1','快递100接口|2|key值','".base64_decode('')."'),
('2','支付宝服务窗API接口|2|0|0','".base64_decode('')."'),
('3','支付宝[即时到账]接口|2|0|0|0','".base64_decode('')."'),
('4','银联[网银支付]接口|2|0|0|0','".base64_decode('')."'),
('5','微信登录API接口|2|0|0','".base64_decode('')."'),
('6','手机短信API接口|2|0|0|sendsms|regsms','".base64_decode('')."'),
('7','QQ登录API接口|2|0|0','".base64_decode('')."'),
('8','支付宝[移动支付]接口|2|0|0','".base64_decode('')."'),
('9','电脑端微信扫码支付|2|0|0|0|0','".base64_decode('')."'),
('10','微信手机端H5支付接口|2|0|0|0|0','".base64_decode('')."')");

tableend("emmm_api");

create("emmm_article"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Articletitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Articleauthor` varchar(255) NOT NULL DEFAULT '',\n  `COL_Articlesource` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Articlecontent` text,\n  `COL_Class` int(11) NOT NULL DEFAULT '0',\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT '0',\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text,\n  `COL_Click` int(11) NOT NULL DEFAULT '0',\n  `COL_Minimg` text,\n  `COL_Callback` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Articletitle` (`COL_Articletitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");

insert("('5','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMDoxNToyMg==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('2','世界，你好！','','','".base64_decode('MjAxNC0xMi0wNyAxNTo1OTo0Mw==')."','世界，你好！','3','cn','','99','','','世界，你好！','0','skin/noimage.png','0'),
('3','世界，你好！','','','".base64_decode('MjAxNC0xMi0wNyAxNjowMjowNA==')."','世界，你好！','3','cn','','99','','','世界，你好！','0','skin/noimage.png','0'),
('4','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMDoxNDo0Mg==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('6','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMDoxNTo0Nw==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('7','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowMA==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('8','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowOQ==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('9','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjoyMQ==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('10','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMTowMTowOA==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('11','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMTowMToyNA==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('12','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMTowMjozMg==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('13','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMTowMjo0OA==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('14','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMTowMzowNQ==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('15','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMTowNDo1Ng==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('16','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMTowNTozMQ==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('17','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMTowNzo1Ng==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('18','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMTowODoxMQ==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('19','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMToxOTo1NQ==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('20','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMToyMDoxMg==')."','123','3','cn','123','99','0','123','123','0','123','0'),
('21','123','123','提交','".base64_decode('MjAxOC0xMi0xNCAyMToyMDo0MQ==')."','123','3','cn','123','99','0','123','123','0','123','0')");

tableend("emmm_article");

create("emmm_banner"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Bannerimg` text,\n  `COL_Bannertitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bannerurl` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bannerlang` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Bannerclass` int(11) NOT NULL DEFAULT '0',\n  `COL_Bannertext` text,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('1','function/uploadfile/emmm888/1.png','banner1','#','cn','".base64_decode('MjAxNC0xMi0wNiAxNzoyNzo1Ng==')."','0','||'),
('2','function/uploadfile/emmm888/2.png','banner2','#','cn','".base64_decode('MjAxNC0xMi0wNiAxODowMTo1NQ==')."','1','||')");

tableend("emmm_banner");

create("emmm_book"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Bookcontent` text,\n  `COL_Bookname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Booktel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bookip` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bookclass` int(11) NOT NULL DEFAULT '0',\n  `COL_Booklang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bookreply` text,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`),\n  KEY `COL_Bookclass` (`COL_Bookclass`),\n  KEY `COL_Booklang` (`COL_Booklang`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_book");

create("emmm_booksection"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Booksectiontitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Booksectioncontent` text,\n  `COL_Booksectionlanguage` varchar(255) NOT NULL DEFAULT '',\n  `COL_Booksectionsorting` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('1','问题反馈','在这里可以把您碰到的问题反馈给我们。','cn','0','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('2','客户服务','您有什么需求或是需要什么帮助，可以在这里留言哦！','cn','1','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_booksection");

create("emmm_column"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Uid` int(11) NOT NULL DEFAULT '0',\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Columntitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Columntitleto` varchar(255) NOT NULL DEFAULT '',\n  `COL_Model` varchar(255) NOT NULL DEFAULT '',\n  `COL_Templist` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tempview` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_About` text,\n  `COL_Hide` int(11) NOT NULL DEFAULT '0',\n  `COL_Sorting` int(11) NOT NULL DEFAULT '0',\n  `COL_Briefing` text,\n  `COL_Img` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userright` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weight` int(11) NOT NULL DEFAULT '0',\n  `COL_Adminopen` text,\n  PRIMARY KEY (`id`),\n  KEY `COL_Hide` (`COL_Hide`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Uid` (`COL_Uid`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");

insert("('1','0','cn','网站首页','','weburl','','','/','','0','0','','','0','0','0,1'),
('2','0','cn','企业商城','','weburl','','','?cn-shop.html','','0','2','','','0','0','0,1'),
('3','0','cn','公司新闻','','article','cn_article.html','cn_articleview.html','','','0','3','','','0','0','0,1'),
('4','0','cn','公司产品','','product','cn_product.html','cn_productview.html','','','0','4','','','0','0','0,1'),
('5','0','cn','公司案例','','photo','cn_photo.html','cn_photoview.html','','','0','5','','','0','0','0,1'),
('6','0','cn','视频展示','','video','cn_video.html','cn_videoview.html','','','0','6','','','0','0','0,1'),
('7','0','cn','资料下载','','down','cn_down.html','cn_downview.html','','','0','7','','','0','0','0,1'),
('8','0','cn','在线招聘','','job','cn_job.html','cn_jobview.html','','','0','8','','','0','0','0,1'),
('9','0','cn','关于我们','','about','','cn_about.html','','<br>','0','9','','','0','0','0,1'),
('10','0','cn','在线留言','','weburl','','','?cn-club.html','','0','10','','','0','0','0,1'),
('11','2','cn','积分兑换','系统栏目','product','cn_integral.html','cn_integralview.html','','','1','0','','','0','0','0,1'),
('12','2','cn','手机数码','','product','cn_shoplist.html','cn_shopview.html','','','0','1','','','0','0','0,1'),
('13','2','cn','男装女装','','product','cn_shoplist.html','cn_shopview.html','','','0','2','','','0','0','0,1'),
('14','2','cn','鞋靴箱包','','product','cn_shoplist.html','cn_shopview.html','','','0','3','','','0','0','0,1'),
('15','2','cn','护外运动','','product','cn_shoplist.html','cn_shopview.html','','','0','4','','','0','0','0,1'),
('16','2','cn','珠宝配饰','','product','cn_shoplist.html','cn_shopview.html','','','0','5','','','0','0','0,1'),
('17','2','cn','护肤彩妆','','product','cn_shoplist.html','cn_shopview.html','','','0','6','','','0','0','0,1')");

tableend("emmm_column");

create("emmm_comment"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Content` text,\n  `COL_Class` int(11) NOT NULL DEFAULT '0',\n  `COL_Type` varchar(255) NOT NULL DEFAULT '',\n  `COL_Name` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ip` varchar(255) NOT NULL DEFAULT '',\n  `COL_Vote` int(11) NOT NULL DEFAULT '0',\n  `COL_Scoring` varchar(255) NOT NULL DEFAULT '',\n  `COL_Gocontent` text,\n  `COL_Gotime` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_comment");

create("emmm_coupon"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Money` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Timewin` datetime DEFAULT NULL,\n  `COL_Moneygo` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Content` text,\n  `COL_Type` int(11) NOT NULL DEFAULT '0',\n  `COL_Md` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");

insert("('2','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','88fce054cd5efc076248b5ca8579b627','".base64_decode('MjAxOC0xMi0xNCAyMDoxNToyMg==')."'),
('3','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','48ba1696d606be7120910d0cfedef616','".base64_decode('MjAxOC0xMi0xNCAyMDoxNTo0Nw==')."'),
('4','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','f7cea90489f0dbbaeaa4ff8fee4a774c','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowMQ==')."'),
('5','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','2aa050ffabb8945d7addb86170739636','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowOQ==')."'),
('6','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','ce6fca7828a5bd4581c8c18350c09ad7','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjoyMQ==')."'),
('7','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','de20cfec2735671bd4dcac37b54c9835','".base64_decode('MjAxOC0xMi0xNCAyMTowMTowOA==')."'),
('8','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','58498d1b417695f6c31d9c16e0054087','".base64_decode('MjAxOC0xMi0xNCAyMTowMToyNA==')."'),
('9','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','1e3a6e26e1dfcf764528cbe1aa411739','".base64_decode('MjAxOC0xMi0xNCAyMTowMjozMg==')."'),
('10','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','d8acc4175bccaf7a846b4cec9e8aecf9','".base64_decode('MjAxOC0xMi0xNCAyMTowMjo0OA==')."'),
('11','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','060ae13ef94cfec4617393a4d0998ec0','".base64_decode('MjAxOC0xMi0xNCAyMTowMzowNQ==')."'),
('12','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','2f18c249ac482c13ced501badee59289','".base64_decode('MjAxOC0xMi0xNCAyMTowNDo1Ng==')."'),
('13','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','7479132dddf502e19f31f1e170776478','".base64_decode('MjAxOC0xMi0xNCAyMTowNTozMQ==')."'),
('14','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','bbba0f1b789448e08a6d3bdc3ea8e3ce','".base64_decode('MjAxOC0xMi0xNCAyMTowNzo1Ng==')."'),
('15','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','13f2abe9e77296b6d3a53c5ee6ca54c8','".base64_decode('MjAxOC0xMi0xNCAyMTowODoxMQ==')."'),
('16','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','14e5c50bc7d6115a20e21491d0ef01d7','".base64_decode('MjAxOC0xMi0xNCAyMToxOTo1NQ==')."'),
('17','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','27865608a9e505c9dcf44d9a29995b69','".base64_decode('MjAxOC0xMi0xNCAyMToyMDoxMg==')."'),
('18','123','0.00','".base64_decode('MjAyMi0wMy0yNSAwMDowMDowMA==')."','0.00','123','0','43ec19a760ed01d07b0702a89ac9053e','".base64_decode('MjAxOC0xMi0xNCAyMToyMDo0MQ==')."')");

tableend("emmm_coupon");

create("emmm_couponlist"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Couponid` int(11) NOT NULL DEFAULT '0',\n  `COL_Username` varchar(255) NOT NULL DEFAULT '',\n  `COL_Type` int(11) NOT NULL DEFAULT '0',\n  `COL_Timewin` datetime DEFAULT NULL,\n  `COL_Moneygo` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Md` varchar(255) NOT NULL DEFAULT '',\n  `COL_Time` datetime DEFAULT NULL,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_couponlist");

create("emmm_down"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Downtitle` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Downimg` text,\n  `COL_Downdurl` text,\n  `COL_Downcontent` text,\n  `COL_Downempower` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downtype` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downlang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downsize` varchar(255) NOT NULL DEFAULT '',\n  `COL_Class` int(11) NOT NULL DEFAULT '0',\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downmake` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downsetup` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downrights` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT '0',\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text,\n  `COL_Click` int(11) NOT NULL DEFAULT '0',\n  `COL_Random` text,\n  `COL_Callback` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Downtitle` (`COL_Downtitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_down");

create("emmm_freight"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Freightname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Freighttext` text,\n  `COL_Freightdefault` int(11) NOT NULL DEFAULT '0',\n  `COL_Freightweight` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','包邮模板(官方默认)','0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0','1','0','".base64_decode('')."')");

tableend("emmm_freight");

create("emmm_integral"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Iid` int(11) NOT NULL DEFAULT '0',\n  `COL_Iname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Imarket` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Iwebmarket` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Iintegral` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Ivirtual` int(11) NOT NULL DEFAULT '0',\n  `COL_Iconfirm` int(11) NOT NULL DEFAULT '0',\n  `COL_Iuseremail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Iadmin` int(11) NOT NULL DEFAULT '0',\n  `COL_ITime` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_integral");

create("emmm_job"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Jobtitle` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Jobwork` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobadd` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobnature` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobexperience` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobeducation` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobnumber` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobage` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobwelfare` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobwage` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobcontact` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobtel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobcontent` text,\n  `COL_Class` int(11) NOT NULL DEFAULT '0',\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT '0',\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text,\n  `COL_Click` int(11) NOT NULL DEFAULT '0',\n  `COL_Callback` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Jobtitle` (`COL_Jobtitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");

insert("('2','123','".base64_decode('MjAxOC0xMi0xNCAyMDoxNToyMg==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('3','123','".base64_decode('MjAxOC0xMi0xNCAyMDoxNTo0Nw==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('4','123','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowMA==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('5','123','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowOQ==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('6','123','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjoyMQ==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('7','123','".base64_decode('MjAxOC0xMi0xNCAyMTowMTowOA==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('8','123','".base64_decode('MjAxOC0xMi0xNCAyMTowMToyNA==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('9','123','".base64_decode('MjAxOC0xMi0xNCAyMTowMjozMg==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('10','123','".base64_decode('MjAxOC0xMi0xNCAyMTowMjo0OA==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('11','123','".base64_decode('MjAxOC0xMi0xNCAyMTowMzowNA==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('12','123','".base64_decode('MjAxOC0xMi0xNCAyMTowNDo1Ng==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('13','123','".base64_decode('MjAxOC0xMi0xNCAyMTowNTozMQ==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('14','123','".base64_decode('MjAxOC0xMi0xNCAyMTowNzo1Ng==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('15','123','".base64_decode('MjAxOC0xMi0xNCAyMTowODoxMQ==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('16','123','".base64_decode('MjAxOC0xMi0xNCAyMToxOTo1NQ==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('17','123','".base64_decode('MjAxOC0xMi0xNCAyMToyMDoxMQ==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0'),
('18','123','".base64_decode('MjAxOC0xMi0xNCAyMToyMDo0MQ==')."','123','123','123','123','123','123','123','123','123','123','123','123','8','cn','123','99','0','123','123','0','0')");

tableend("emmm_job");

create("emmm_lang"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Font` varchar(255) NOT NULL DEFAULT '',\n  `COL_Default` varchar(255) NOT NULL DEFAULT '',\n  `COL_Note` varchar(255) NOT NULL DEFAULT '',\n  `COL_Langtitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Langkeywords` text,\n  `COL_Langdescription` text,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','cn','中文','Default','中文语言唯一标识','','','')");

tableend("emmm_lang");

create("emmm_link"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Linkname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Linkurl` varchar(255) NOT NULL DEFAULT '',\n  `COL_Linkclass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Linkimg` text,\n  `COL_Linksorting` int(11) NOT NULL DEFAULT '0',\n  `COL_Linkstate` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('1','Emmm','http://vidar.club','font','http://','99','1','".base64_decode('MjAxNC0xMi0wNyAxNzo0OToxMA==')."'),
('2','YidaCMS','http://yidacms.com','font','http://','99','1','".base64_decode('MjAxNC0xMi0wNyAxNzo0OToxMA==')."')");

tableend("emmm_link");

create("emmm_mail"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Mailsmtp` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailport` int(11) NOT NULL DEFAULT '0',\n  `COL_Mailusermail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailuser` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailpass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailsubject` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailcontent` text,\n  `COL_Mailtype` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailtitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailclass` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");

insert("('1','smtp.qq.com','25','993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','注册会员邮件提醒','2'),
('2','smtp.qq.com','25','993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','提交订单邮件提醒','2'),
('3','smtp.qq.com','25','993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','后台发货邮件提醒','2'),
('4','smtp.qq.com','25','993141000@qq.com','993141000','123456','您的会员注册验证码','验证码：#opcms#code#','HTML','用户注册邮件验证码','2')");

tableend("emmm_mail");

create("emmm_orders"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Ordersname` text,\n  `COL_Ordersid` int(11) NOT NULL DEFAULT '0',\n  `COL_Ordersnum` int(11) NOT NULL DEFAULT '0',\n  `COL_Ordersemail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersusername` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersusertel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersuseradd` text,\n  `COL_Ordersusetext` text,\n  `COL_Ordersproductatt` text,\n  `COL_Orderswebmarket` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Ordersusermarket` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Ordersweight` int(11) NOT NULL DEFAULT '1',\n  `COL_Ordersfreight` int(11) NOT NULL DEFAULT '1',\n  `COL_Ordersexpress` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersexpressnum` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Ordersnumber` varchar(255) NOT NULL DEFAULT '',\n  `COL_Orderspay` int(11) NOT NULL DEFAULT '1',\n  `COL_Orderssend` int(11) NOT NULL DEFAULT '1',\n  `COL_Ordersgotime` datetime DEFAULT NULL,\n  `COL_Integralok` int(11) NOT NULL DEFAULT '0',\n  `COL_Sign` int(11) NOT NULL DEFAULT '0',\n  `COL_Ordersclassid` int(11) NOT NULL DEFAULT '0',\n  `COL_Ordersadminoper` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`),\n  KEY `COL_Ordersid` (`COL_Ordersid`),\n  KEY `COL_Ordersemail` (`COL_Ordersemail`),\n  KEY `COL_Ordersnumber` (`COL_Ordersnumber`),\n  KEY `COL_Orderspay` (`COL_Orderspay`),\n  KEY `COL_Orderssend` (`COL_Orderssend`),\n  KEY `COL_Sign` (`COL_Sign`),\n  KEY `COL_Ordersclassid` (`COL_Ordersclassid`),\n  KEY `COL_Ordersadminoper` (`COL_Ordersadminoper`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_orders");

create("emmm_orderslist"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Ordersnum` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersid` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersusername` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersusertel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersuseradd` varchar(255) NOT NULL DEFAULT '',\n  `COL_Orderscouponmoney` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Orderscouponid` int(11) NOT NULL DEFAULT '0',\n  `COL_Ordersuser` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_orderslist");

create("emmm_photo"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Phototitle` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Photocminimg` varchar(255) NOT NULL DEFAULT '',\n  `COL_Photoimg` text,\n  `COL_Photocontent` text,\n  `COL_Class` int(11) NOT NULL DEFAULT '0',\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT '0',\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text,\n  `COL_Click` int(11) NOT NULL DEFAULT '0',\n  `COL_Callback` int(11) NOT NULL DEFAULT '0',\n  `COL_Photoname` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Phototitle` (`COL_Phototitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");

insert("('1','测试01','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0',''),
('2','测试02','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0',''),
('3','测试03','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0',''),
('4','测试04','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0',''),
('5','测试05','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0','')");

tableend("emmm_photo");

create("emmm_plus"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Name` varchar(255) NOT NULL DEFAULT '',\n  `COL_Version` varchar(255) NOT NULL DEFAULT '',\n  `COL_Versiondate` varchar(255) NOT NULL DEFAULT '',\n  `COL_Author` varchar(255) NOT NULL DEFAULT '',\n  `COL_Fraction` varchar(255) NOT NULL DEFAULT '',\n  `COL_About` text,\n  `COL_Pluspath` text,\n  `COL_Time` date DEFAULT NULL,\n  `COL_Off` int(11) NOT NULL DEFAULT '1',\n  `COL_Plugid` varchar(255) NOT NULL DEFAULT '',\n  `COL_Plugclass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Plugmysql` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_plus");

create("emmm_product"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Class` int(11) NOT NULL DEFAULT '0',\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Number` varchar(255) NOT NULL DEFAULT '',\n  `COL_Goodsno` varchar(255) NOT NULL DEFAULT '',\n  `COL_Brand` varchar(255) NOT NULL DEFAULT '',\n  `COL_Market` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Webmarket` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Stock` int(11) NOT NULL DEFAULT '0',\n  `COL_Usermoney` text,\n  `COL_Specificationsid` varchar(255) NOT NULL DEFAULT '',\n  `COL_Specificationstitle` text,\n  `COL_Specifications` text,\n  `COL_Pattribute` text,\n  `COL_Minimg` varchar(255) NOT NULL DEFAULT '',\n  `COL_Maximg` varchar(255) NOT NULL DEFAULT '',\n  `COL_Img` text,\n  `COL_Content` text,\n  `COL_Down` int(11) NOT NULL DEFAULT '0',\n  `COL_Weight` int(11) NOT NULL DEFAULT '1',\n  `COL_Freight` int(11) NOT NULL DEFAULT '1',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT '0',\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text,\n  `COL_Click` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  `COL_Integral` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Integralok` int(11) NOT NULL DEFAULT '0',\n  `COL_Integralexchange` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Suggest` varchar(255) NOT NULL DEFAULT '',\n  `COL_Productimgname` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Down` (`COL_Down`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Brand` (`COL_Brand`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");

insert("('1','12','cn','测试01','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('2','12','cn','测试02','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('3','12','cn','测试03','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('4','12','cn','测试04','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('5','12','cn','测试05','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('6','12','cn','测试06','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('7','12','cn','测试07','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('8','12','cn','测试08','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','','')");

tableend("emmm_product");

create("emmm_productattribute"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Class` varchar(255) NOT NULL DEFAULT '',\n  `COL_Text` text,\n  `COL_Sorting` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");

insert("('1','电脑系列','0','','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('2','硬盘容量','1','500G|800G|1T','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('3','内存容量','1','1G|2G|3G','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_productattribute");

create("emmm_productcp"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Vender` varchar(255) NOT NULL DEFAULT '',\n  `COL_Brand` varchar(255) NOT NULL DEFAULT '',\n  `COL_Class` int(11) NOT NULL DEFAULT '0',\n  `COL_Img` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_productcp");

create("emmm_productset"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Pattern` int(11) NOT NULL DEFAULT '0',\n  `COL_Scheme` int(11) NOT NULL DEFAULT '0',\n  `COL_Stock` int(11) NOT NULL DEFAULT '0',\n  `COL_buy` int(11) NOT NULL DEFAULT '0',\n  `COL_Sendout` text,\n  `time` datetime DEFAULT NULL,\n  `COL_Delivery` int(11) NOT NULL DEFAULT '0',\n  `COL_Userbuysms` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','2','1','100','2','','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."','0','0')");

tableend("emmm_productset");

create("emmm_productspecifications"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Titleto` varchar(255) NOT NULL DEFAULT '',\n  `COL_Value` text,\n  `COL_Class` int(11) NOT NULL DEFAULT '0',\n  `COL_Img` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('1','尺码','女鞋','36|37|38|39','1','','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('2','颜色','女鞋','红色|白色|黑色','1','','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_productspecifications");

create("emmm_qq"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_QQname` varchar(255) NOT NULL DEFAULT '',\n  `COL_QQnumber` varchar(255) NOT NULL DEFAULT '',\n  `COL_QQclass` varchar(255) NOT NULL DEFAULT '',\n  `COL_QQsorting` int(11) NOT NULL DEFAULT '0',\n  `COL_QQother` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_qq");

create("emmm_search"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Searchtext` text,\n  `COL_Searchclick` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_search");

create("emmm_shoppingcart"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Shopproductid` int(11) NOT NULL DEFAULT '0',\n  `COL_Shopnum` int(11) NOT NULL DEFAULT '0',\n  `COL_Shopusername` varchar(255) NOT NULL DEFAULT '',\n  `COL_Shopatt` text,\n  `COL_Shopkc` varchar(255) NOT NULL DEFAULT '',\n  `COL_Shophh` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");

insert("('1','8','1','pOcGQgYvqr@tKuQWSBYnb.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMDoxNDo0MQ==')."'),
('2','8','1','sgpAlMtQBW@IksUwNqdYV.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMDoxNToyMg==')."'),
('3','8','1','tHMpXiPmVG@VoxsHjhvIy.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMDoxNTo0Nw==')."'),
('4','8','1','ayrCbKjhJp@iLsdFnJkMW.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowMA==')."'),
('5','8','1','nXwWceOQlg@DThkXiYlGx.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowOQ==')."'),
('6','8','1','pvQfOGcLuD@EsRDBCbNdn.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjoyMQ==')."'),
('7','8','1','HGrbAwWMNi@STjtiqgabQ.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMTowMTowOA==')."'),
('8','8','1','TbAngDhlRU@kvziDUKuSV.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMTowMToyNA==')."'),
('9','8','1','KFGuoRxmcI@bcfwCKFNtT.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMTowMjozMQ==')."'),
('10','8','1','KapqkmIgdA@ibewAoJaxI.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMTowMjo0OA==')."'),
('11','8','1','BcwHpMxOoa@fnemFdJUGK.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMTowMzowNA==')."'),
('12','8','1','nEHhbgJQAU@fOtcJNQKnH.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMTowNDo1NQ==')."'),
('13','8','1','LrtaIJcGkh@jErMnoxfKm.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMTowNTozMQ==')."'),
('14','8','1','LowGFkxHmU@wfoKtkJjgE.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMTowNzo1NQ==')."'),
('15','8','1','toSYLzMHVE@TdvaNmpWuZ.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMTowODoxMQ==')."'),
('16','8','1','rFXzliKMec@erizcPkKlv.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0xNCAyMToxOTo1NQ==')."')");

tableend("emmm_shoppingcart");

create("emmm_temp"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Temppath` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tempauthor` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','default','emmm!')");

tableend("emmm_temp");

create("emmm_user"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Useremail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userpass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Username` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usertel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userqq` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userskype` varchar(255) NOT NULL DEFAULT '',\n  `COL_Useraliww` varchar(255) NOT NULL DEFAULT '',\n  `COL_Useradd` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userimage` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userclass` int(11) NOT NULL DEFAULT '0',\n  `COL_Usersource` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userhead` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usermoney` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Userintegral` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Userip` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userproblem` varchar(255) NOT NULL DEFAULT '',\n  `COL_Useranswer` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userstatus` int(11) NOT NULL DEFAULT '0',\n  `COL_Usertext` text,\n  `logintime` datetime DEFAULT NULL,\n  `COL_Usercode` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`),\n  KEY `COL_Useremail` (`COL_Useremail`),\n  KEY `COL_Userpass` (`COL_Userpass`),\n  KEY `COL_Usertel` (`COL_Usertel`),\n  KEY `COL_Userstatus` (`COL_Userstatus`),\n  KEY `COL_Usercode` (`COL_Usercode`)\n) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8");

insert("('1','1@qq.com','a9e955becbf38ee1','123','18767155950','123','123','123','123','','1','','','0.00','0.00','127.0.0.1','你自已的生日？','1231','1','123','".base64_decode('')."','mbekf1y9ag3h6cosge20181214201433','".base64_decode('MjAxOC0xMi0xNCAxOTo0OToyMQ==')."'),
('2','pOcGQgYvqr@tKuQWSBYnb.com','14e1b600b1fd579f','','pOcGQgYvqr@tKuQWSBYnb.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','5ips1dl3pl1rldu5w620181214201441','".base64_decode('MjAxOC0xMi0xNCAyMDoxNDo0MQ==')."'),
('3','sgpAlMtQBW@IksUwNqdYV.com','14e1b600b1fd579f','','sgpAlMtQBW@IksUwNqdYV.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','ijz2n4784o5ubr4ypn20181214201522','".base64_decode('MjAxOC0xMi0xNCAyMDoxNToyMg==')."'),
('4','tHMpXiPmVG@VoxsHjhvIy.com','14e1b600b1fd579f','','tHMpXiPmVG@VoxsHjhvIy.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','u2dbpfng9ib06ybzot20181214201547','".base64_decode('MjAxOC0xMi0xNCAyMDoxNTo0Nw==')."'),
('5','ayrCbKjhJp@iLsdFnJkMW.com','14e1b600b1fd579f','','ayrCbKjhJp@iLsdFnJkMW.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','iifhgmb4e5zi7eux1u20181214201600','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowMA==')."'),
('6','nXwWceOQlg@DThkXiYlGx.com','14e1b600b1fd579f','','nXwWceOQlg@DThkXiYlGx.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','kbksrdup1f0pa14bax20181214201608','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowOA==')."'),
('7','pvQfOGcLuD@EsRDBCbNdn.com','14e1b600b1fd579f','','pvQfOGcLuD@EsRDBCbNdn.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','57lew82nf94jj3rfpd20181214201621','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjoyMQ==')."'),
('8','SRoscJGQLW@ANUhsyVQzE.com','14e1b600b1fd579f','','SRoscJGQLW@ANUhsyVQzE.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','cw8z4tj7h0c2ca8s6120181214201741','".base64_decode('MjAxOC0xMi0xNCAyMDoxNzo0MQ==')."'),
('9','hkHlDxArpe@hVBEqZYpTF.com','14e1b600b1fd579f','','hkHlDxArpe@hVBEqZYpTF.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','qhud4x63a15toaeisg20181214201907','".base64_decode('MjAxOC0xMi0xNCAyMDoxOTowNw==')."'),
('10','ZBLQAVICwS@EvCuTpqBSW.com','14e1b600b1fd579f','','ZBLQAVICwS@EvCuTpqBSW.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','y55gxaxof7n2qurzwb20181214202215','".base64_decode('MjAxOC0xMi0xNCAyMDoyMjoxNQ==')."'),
('11','JjqMHGCmWL@AnKJRBUNiP.com','14e1b600b1fd579f','','JjqMHGCmWL@AnKJRBUNiP.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','fze6bqitkkacxnbbg120181214202801','".base64_decode('MjAxOC0xMi0xNCAyMDoyODowMQ==')."'),
('12','AJaHXgzIMG@qcORluKAsb.com','14e1b600b1fd579f','','AJaHXgzIMG@qcORluKAsb.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','qiolmuhh8fwaoi8tpj20181214203004','".base64_decode('MjAxOC0xMi0xNCAyMDozMDowNA==')."'),
('13','gaVohlOGjL@cvNdCmMGKk.com','14e1b600b1fd579f','','gaVohlOGjL@cvNdCmMGKk.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','hpo5i7thlz08mey9q720181214203010','".base64_decode('MjAxOC0xMi0xNCAyMDozMDoxMA==')."'),
('14','LXWxZBrCzS@NdUiluywrf.com','14e1b600b1fd579f','','LXWxZBrCzS@NdUiluywrf.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','8vc4bpsphw9n4ibx6x20181214203125','".base64_decode('MjAxOC0xMi0xNCAyMDozMToyNQ==')."'),
('15','wdkpoWACge@HViXILqUyB.com','14e1b600b1fd579f','','wdkpoWACge@HViXILqUyB.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','lejlcz8hox9evma26820181214203524','".base64_decode('MjAxOC0xMi0xNCAyMDozNToyNA==')."'),
('16','akQXEqSric@RtNuKoycGA.com','14e1b600b1fd579f','','akQXEqSric@RtNuKoycGA.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','yhw438gih95c3zf5ox20181214203559','".base64_decode('MjAxOC0xMi0xNCAyMDozNTo1OQ==')."'),
('17','HlrchGunwC@PCXdaTZFJk.com','d9b1d7db4cd6e709','123','18767155123','123','123','123','123','../../skin/lemon.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','hqob899za98ne4948620181214203904','".base64_decode('MjAxOC0xMi0xNCAyMDozOTowNA==')."'),
('18','IgYlupfKwj@nFwOdAyLXh.com','14e1b600b1fd579f','','IgYlupfKwj@nFwOdAyLXh.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','19uumqbpsvp91gydgd20181214203923','".base64_decode('MjAxOC0xMi0xNCAyMDozOToyMw==')."'),
('19','XpqbHIgFNe@WzvpbuKEkB.com','d9b1d7db4cd6e709','123','18767155167','123','123','123','123','../../skin/lemon.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','3ee7iwbfmcma9z5cp420181214203948','".base64_decode('MjAxOC0xMi0xNCAyMDozOTo0OA==')."'),
('20','PubKnaXICw@FrlVGpAsdJ.com','d9b1d7db4cd6e709','123','18767185167','123','123','123','123','../../skin/lemon.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','6qmow53v6n8yi8firc20181214204032','".base64_decode('MjAxOC0xMi0xNCAyMDo0MDozMg==')."'),
('21','SxgYpvsXOR@uWmRdVNnUo.com','14e1b600b1fd579f','','SxgYpvsXOR@uWmRdVNnUo.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','ad44fc8s3q8n7zy9v720181214204319','".base64_decode('MjAxOC0xMi0xNCAyMDo0MzoxOQ==')."'),
('22','IxASBzbjUl@hkKWvzyRNd.com','14e1b600b1fd579f','','IxASBzbjUl@hkKWvzyRNd.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','rga8yaid9st3m91fil20181214204341','".base64_decode('MjAxOC0xMi0xNCAyMDo0Mzo0MQ==')."'),
('23','LKiCcJlIRn@lMLpFyYxGR.com','d9b1d7db4cd6e709','123','18777185167','123','123','123','123','../../skin/lemon.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','ojgtwadduw90hwcny520181214204459','".base64_decode('MjAxOC0xMi0xNCAyMDo0NDo1OQ==')."'),
('24','qVjBNrcspe@eWbsSJZnAC.com','14e1b600b1fd579f','','qVjBNrcspe@eWbsSJZnAC.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','n54jqyn7n80vfjb1ev20181214204548','".base64_decode('MjAxOC0xMi0xNCAyMDo0NTo0OA==')."'),
('25','TKerJHOfon@jiKDGxvJFk.com','d9b1d7db4cd6e709','123','17777185167','123','123','123','123','../../skin/lemon.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','rktorpulv5k3dgav9x20181214204720','".base64_decode('MjAxOC0xMi0xNCAyMDo0NzoyMA==')."'),
('26','YKgPMydwZl@QqnCNPAasI.com','d9b1d7db4cd6e709','123','17737185167','123','123','123','123','../../skin/lemon.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','w1u3iqol1xrpw1wgc220181214204743','".base64_decode('MjAxOC0xMi0xNCAyMDo0Nzo0Mw==')."'),
('27','aKoPQfcwTr@HWmjXIkPFb.com','14e1b600b1fd579f','','aKoPQfcwTr@HWmjXIkPFb.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','fo2azki9a9iavq7ccd20181214205050','".base64_decode('MjAxOC0xMi0xNCAyMDo1MDo1MA==')."'),
('28','LiGwcPzbAF@UneHkMafBp.com','14e1b600b1fd579f','','LiGwcPzbAF@UneHkMafBp.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','hkixcipqywvhku3u0w20181214205055','".base64_decode('MjAxOC0xMi0xNCAyMDo1MDo1NQ==')."'),
('29','AhlWLESoMw@arichyMvXw.com','14e1b600b1fd579f','','AhlWLESoMw@arichyMvXw.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','s7kwzgi32f6erh3okr20181214205108','".base64_decode('MjAxOC0xMi0xNCAyMDo1MTowOA==')."'),
('30','MohytcDOuK@DORWQeoJUM.com','14e1b600b1fd579f','','MohytcDOuK@DORWQeoJUM.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','u8lnjs3fg41by657u520181214205119','".base64_decode('MjAxOC0xMi0xNCAyMDo1MToxOQ==')."'),
('31','MzlyFkWOhS@GoOaVPnqfM.com','14e1b600b1fd579f','','MzlyFkWOhS@GoOaVPnqfM.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','xzs9etjy3et85sg3u120181214205130','".base64_decode('MjAxOC0xMi0xNCAyMDo1MTozMA==')."'),
('32','dYKsivpcyI@ZkUoYsxNmz.com','14e1b600b1fd579f','','dYKsivpcyI@ZkUoYsxNmz.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','ewkz8cjmbap7i7mve420181214205153','".base64_decode('MjAxOC0xMi0xNCAyMDo1MTo1Mw==')."'),
('33','ovZhHbiEJB@JVZIgwxSMk.com','d9b1d7db4cd6e709','123','17737085167','123','123','123','123','../../skin/cjSXVZoExa.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','xdn3q43y6hw783y5dp20181214205201','".base64_decode('MjAxOC0xMi0xNCAyMDo1MjowMQ==')."'),
('34','MYJXFlNWxi@fPeuWYhSvp.com','d9b1d7db4cd6e709','123','13858796341','123','123','123','123','../../skin/byAGEfNgnI.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','s0o9bjpr28o0134igh20181214205520','".base64_decode('MjAxOC0xMi0xNCAyMDo1NToyMA==')."'),
('35','MXpvsnJCwo@jwLZkyGBOE.com','d9b1d7db4cd6e709','123','13721790365','123','123','123','123','../../skin/jfEUvramPb.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','ljlclpdksmdyju7fnz20181214205534','".base64_decode('MjAxOC0xMi0xNCAyMDo1NTozNA==')."'),
('36','coLRfGUgKM@atGFTlQdKc.com','d9b1d7db4cd6e709','123','13150216873','123','123','123','123','../../skin/qTMvoAjbir.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','08g7ezd74wxj3owtoy20181214205549','".base64_decode('MjAxOC0xMi0xNCAyMDo1NTo0OQ==')."'),
('37','jqnCyaMhtA@ApgdcQsNIZ.com','d9b1d7db4cd6e709','123','13789051263','123','123','123','123','../../skin/gBMDvutYjs.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','ne9f2fx5qpryvhgdoj20181214205556','".base64_decode('MjAxOC0xMi0xNCAyMDo1NTo1Ng==')."'),
('38','QtjEUTGnpv@KsqXxFynJo.com','d9b1d7db4cd6e709','123','15564205137','123','123','123','123','../../skin/LSrwdbfWMa.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','8nui3nlqbi4chmjkky20181214205602','".base64_decode('MjAxOC0xMi0xNCAyMDo1NjowMg==')."'),
('39','CoajVWMLqF@bLaHucRgXm.com','d9b1d7db4cd6e709','123','18747026519','123','123','123','123','../../skin/CZDradJSst.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','sxhbvg2ldxnohbzmo120181214205617','".base64_decode('MjAxOC0xMi0xNCAyMDo1NjoxNw==')."'),
('40','wyCIVTWSht@ejAUyBNzRv.com','d9b1d7db4cd6e709','123','18276214538','123','123','123','123','../../skin/peSxDvJmGa.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','rjmjyaothn58ohg3u120181214205640','".base64_decode('MjAxOC0xMi0xNCAyMDo1Njo0MA==')."'),
('41','gUEsCekcKV@iZugYSwsQA.com','14e1b600b1fd579f','','gUEsCekcKV@iZugYSwsQA.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','zjxn70r90lhx6deijk20181214205828','".base64_decode('MjAxOC0xMi0xNCAyMDo1ODoyOA==')."'),
('42','trDsOeGhEU@feFqpbzuZH.com','14e1b600b1fd579f','','trDsOeGhEU@feFqpbzuZH.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','2e3vd6wg6c6kp37oco20181214205841','".base64_decode('MjAxOC0xMi0xNCAyMDo1ODo0MQ==')."'),
('43','mJRhZIVMXx@XjRKsAzMan.com','d9b1d7db4cd6e709','123','18070641395','123','123','123','123','../../skin/GgjsnJCorB.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','n329yhneaghsyndmst20181214210010','".base64_decode('MjAxOC0xMi0xNCAyMTowMDoxMA==')."'),
('44','HGrbAwWMNi@STjtiqgabQ.com','d9b1d7db4cd6e709','123','15184027653','123','123','123','123','../../skin/mEKzWjLHMt.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','s5mlaihw9tl52fxkv820181214210107','".base64_decode('MjAxOC0xMi0xNCAyMTowMTowNw==')."'),
('45','TbAngDhlRU@kvziDUKuSV.com','d9b1d7db4cd6e709','123','15084072561','123','123','123','123','../../skin/qEoYsFLTkQ.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','4be92f4co5uy4dlqsf20181214210124','".base64_decode('MjAxOC0xMi0xNCAyMTowMToyNA==')."'),
('46','KFGuoRxmcI@bcfwCKFNtT.com','d9b1d7db4cd6e709','123','15986197035','123','123','123','123','../../skin/PKYdusESaH.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','7xut8nrm75datx94ei20181214210231','".base64_decode('MjAxOC0xMi0xNCAyMTowMjozMQ==')."'),
('47','KapqkmIgdA@ibewAoJaxI.com','d9b1d7db4cd6e709','123','13768150437','123','123','123','123','../../skin/VrGFIJdniP.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','5l7nqkvm1a8jzyv78020181214210248','".base64_decode('MjAxOC0xMi0xNCAyMTowMjo0OA==')."'),
('48','BcwHpMxOoa@fnemFdJUGK.com','d9b1d7db4cd6e709','123','13737469215','123','123','123','123','../../skin/VnhWrefFDw.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','djv7u42aon1wgw2q0e20181214210304','".base64_decode('MjAxOC0xMi0xNCAyMTowMzowNA==')."'),
('49','nEHhbgJQAU@fOtcJNQKnH.com','d9b1d7db4cd6e709','123','15303286547','123','123','123','123','../../skin/dLkVbqhGwA.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','2g18xo42zux1y0b4f120181214210455','".base64_decode('MjAxOC0xMi0xNCAyMTowNDo1NQ==')."'),
('50','LrtaIJcGkh@jErMnoxfKm.com','d9b1d7db4cd6e709','123','15901346972','123','123','123','123','../../skin/sJerPkElKD.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','2xhlcvw6bh4xecbqde20181214210531','".base64_decode('MjAxOC0xMi0xNCAyMTowNTozMQ==')."'),
('51','LowGFkxHmU@wfoKtkJjgE.com','d9b1d7db4cd6e709','123','15796812043','123','123','123','123','../../skin/jilrUnAypV.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','oi4ihc0iofzb5ec75d20181214210755','".base64_decode('MjAxOC0xMi0xNCAyMTowNzo1NQ==')."'),
('52','toSYLzMHVE@TdvaNmpWuZ.com','d9b1d7db4cd6e709','123','13328176039','123','123','123','123','../../skin/IrLwxDeWoF.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','s2sats70m4bnodbnog20181214210811','".base64_decode('MjAxOC0xMi0xNCAyMTowODoxMQ==')."'),
('53','rFXzliKMec@erizcPkKlv.com','d9b1d7db4cd6e709','123','18840931562','123','123','123','123','../../skin/yZcBGYAghr.png','1','','','0.00','0.00','127.0.0.1','你自已的生日？','123','1','123','".base64_decode('')."','x9oxl9081y3ioo84fa20181214211955','".base64_decode('MjAxOC0xMi0xNCAyMToxOTo1NQ==')."'),
('54','\"sMHxtXGDzg''\"@vcoUjbxJlA.com','14e1b600b1fd579f','','\"sMHxtXGDzg''\"@vcoUjbxJlA.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','fpml7dofexepyzh53u20181214212011','".base64_decode('MjAxOC0xMi0xNCAyMToyMDoxMQ==')."'),
('55','\"SLmZvUGEMl''\"@SbwcWvtVIz.com','14e1b600b1fd579f','','\"SLmZvUGEMl''\"@SbwcWvtVIz.com','','','','','../../skin/user.png','1','','','0.00','0.00','127.0.0.1','','','1',NULL,'".base64_decode('')."','50r3dw1d2zyd6nspgk20181214212041','".base64_decode('MjAxOC0xMi0xNCAyMToyMDo0MQ==')."')");

tableend("emmm_user");

create("emmm_usercontrol"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Userreg` int(11) NOT NULL DEFAULT '0',\n  `COL_Userlogin` int(11) NOT NULL DEFAULT '0',\n  `COL_Userprotocol` text,\n  `COL_Usergroup` int(11) NOT NULL DEFAULT '0',\n  `COL_Usermoney` varchar(255) NOT NULL DEFAULT '',\n  `COL_Useripoff` int(11) NOT NULL DEFAULT '0',\n  `COL_Regtyle` varchar(255) NOT NULL DEFAULT 'email',\n  `COL_Regcode` int(11) NOT NULL DEFAULT '0',\n  `COL_Userpassgo` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','1','1','欢迎您注册成为[.\$emmm_web.website.] 用户！','1','0|0|0|0','2','email','0','0','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_usercontrol");

create("emmm_userleve"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Userlevename` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userweight` int(11) NOT NULL DEFAULT '0',\n  `COL_Useropen` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");

insert("('1','普通会员','10','0'),
('2','银牌会员','20','0'),
('3','金牌会员','30','0'),
('4','分销商','40','0'),
('5','代理商','50','0')");

tableend("emmm_userleve");

create("emmm_usermessage"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Usersend` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usercollect` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usercontent` text,\n  `COL_Userclass` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`),\n  KEY `COL_Usersend` (`COL_Usersend`),\n  KEY `COL_Usercollect` (`COL_Usercollect`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_usermessage");

create("emmm_userpay"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Useremail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usermoney` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Userintegral` decimal(10,2) NOT NULL DEFAULT '0.00',\n  `COL_Usercontent` text,\n  `COL_Useradmin` varchar(255) NOT NULL DEFAULT '',\n  `COL_Uservoucherone` varchar(255) NOT NULL DEFAULT '',\n  `COL_Uservouchertwo` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userpaytype` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_userpay");

create("emmm_userproblem"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Userproblem` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");

insert("('1','你妈妈的姓名？','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('2','你爸爸的姓名？','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('3','你老婆的姓名？','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('4','你的家乡在哪？','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('5','你的大学是哪家学校？','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('6','你老婆的生日？','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('7','你自已的生日？','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_userproblem");

create("emmm_usershopadd"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Add` varchar(255) NOT NULL DEFAULT '',\n  `COL_Addtel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Addname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adduser` varchar(255) NOT NULL DEFAULT '',\n  `COL_Addindex` int(11) NOT NULL DEFAULT '0',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");

insert("('1','道里区','18767155950','123','pOcGQgYvqr@tKuQWSBYnb.com','1','".base64_decode('MjAxOC0xMi0xNCAyMDoxNDo0MQ==')."'),
('2','道里区','18767155950','123','sgpAlMtQBW@IksUwNqdYV.com','1','".base64_decode('MjAxOC0xMi0xNCAyMDoxNToyMg==')."'),
('3','道里区','18767155950','123','tHMpXiPmVG@VoxsHjhvIy.com','1','".base64_decode('MjAxOC0xMi0xNCAyMDoxNTo0Nw==')."'),
('4','道里区','18767155950','123','ayrCbKjhJp@iLsdFnJkMW.com','1','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowMA==')."'),
('5','道里区','18767155950','123','nXwWceOQlg@DThkXiYlGx.com','1','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjowOQ==')."'),
('6','道里区','18767155950','123','pvQfOGcLuD@EsRDBCbNdn.com','1','".base64_decode('MjAxOC0xMi0xNCAyMDoxNjoyMQ==')."'),
('7','道里区','18767155950','123','HGrbAwWMNi@STjtiqgabQ.com','1','".base64_decode('MjAxOC0xMi0xNCAyMTowMTowOA==')."'),
('8','道里区','18767155950','123','TbAngDhlRU@kvziDUKuSV.com','1','".base64_decode('MjAxOC0xMi0xNCAyMTowMToyNA==')."'),
('9','道里区','18767155950','123','KFGuoRxmcI@bcfwCKFNtT.com','1','".base64_decode('MjAxOC0xMi0xNCAyMTowMjozMg==')."'),
('10','道里区','18767155950','123','KapqkmIgdA@ibewAoJaxI.com','1','".base64_decode('MjAxOC0xMi0xNCAyMTowMjo0OA==')."'),
('11','道里区','18767155950','123','BcwHpMxOoa@fnemFdJUGK.com','1','".base64_decode('MjAxOC0xMi0xNCAyMTowMzowNA==')."'),
('12','道里区','18767155950','123','nEHhbgJQAU@fOtcJNQKnH.com','1','".base64_decode('MjAxOC0xMi0xNCAyMTowNDo1NQ==')."'),
('13','道里区','18767155950','123','LrtaIJcGkh@jErMnoxfKm.com','1','".base64_decode('MjAxOC0xMi0xNCAyMTowNTozMQ==')."'),
('14','道里区','18767155950','123','LowGFkxHmU@wfoKtkJjgE.com','1','".base64_decode('MjAxOC0xMi0xNCAyMTowNzo1NQ==')."'),
('15','道里区','18767155950','123','toSYLzMHVE@TdvaNmpWuZ.com','1','".base64_decode('MjAxOC0xMi0xNCAyMTowODoxMQ==')."'),
('16','道里区','18767155950','123','rFXzliKMec@erizcPkKlv.com','1','".base64_decode('MjAxOC0xMi0xNCAyMToxOTo1NQ==')."')");

tableend("emmm_usershopadd");

create("emmm_video"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Videotitle` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Videoimg` text,\n  `COL_Videovurl` text,\n  `COL_Videoformat` varchar(255) NOT NULL DEFAULT '',\n  `COL_Videowidth` int(11) NOT NULL DEFAULT '0',\n  `COL_Videoheight` int(11) NOT NULL DEFAULT '0',\n  `COL_Videocontent` text,\n  `COL_Class` int(11) NOT NULL DEFAULT '0',\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT '0',\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text,\n  `COL_Click` int(11) NOT NULL DEFAULT '0',\n  `COL_Callback` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Videotitle` (`COL_Videotitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_video");

create("emmm_wap"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Website` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weblogo` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webkeywords` text,\n  `COL_Webdescriptions` text,\n  `COL_Weburl` text,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','我的手机网站','function/uploadfile/emmm888/logo.png','','','yes')");

tableend("emmm_wap");

create("emmm_watermark"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Watermarkimg` varchar(255) NOT NULL DEFAULT '',\n  `COL_Watermarkfont` varchar(255) NOT NULL DEFAULT '',\n  `COL_Watermarkcolor` varchar(255) NOT NULL DEFAULT '',\n  `COL_Watermarksize` varchar(255) NOT NULL DEFAULT '',\n  `COL_Watermarkposition` int(11) NOT NULL DEFAULT '0',\n  `COL_Watermarkoff` int(11) NOT NULL DEFAULT '0',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','watermark.png','vidar.club','#000000','5','9','2')");

tableend("emmm_watermark");

create("emmm_web"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Website` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weburl` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weblogo` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webadd` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webtel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webmobi` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webfax` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webemail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webzip` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webqq` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weblinkman` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webicp` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webstatistics` text,\n  `COL_Webtime` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webemmmurl` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webemmmcode` text,\n  `COL_Webemmmu` text,\n  `COL_Webemmmp` text,\n  `COL_Websitemin` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weixin` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weixinerweima` varchar(255) NOT NULL DEFAULT '',\n  `COL_Alipayname` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','test','127.0.0.1','','','','','','','','','','','','','2018-12-14','','','','','','','','')");

tableend("emmm_web");

create("emmm_webdeploy"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Weboff` int(11) NOT NULL DEFAULT '0',\n  `COL_Webofftext` text,\n  `COL_Webrewrite` int(11) NOT NULL DEFAULT '0',\n  `COL_Webpage` text,\n  `COL_Webkeywords` int(11) NOT NULL DEFAULT '0',\n  `COL_Webkeywordsto` text,\n  `COL_Webdescriptions` text,\n  `COL_Webfenci` int(11) NOT NULL DEFAULT '0',\n  `COL_Webservice` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webocomment` int(11) NOT NULL DEFAULT '2',\n  `COL_Webpcomment` int(11) NOT NULL DEFAULT '2',\n  `COL_Webweight` int(11) NOT NULL DEFAULT '1',\n  `time` datetime DEFAULT NULL,\n  `COL_Webfile` int(11) NOT NULL DEFAULT '1',\n  `COL_Ucenter` int(11) NOT NULL DEFAULT '0',\n  `COL_Searchtime` int(11) NOT NULL DEFAULT '10',\n  `COL_Home` varchar(255) NOT NULL DEFAULT 'cn|cn|cn',\n  `COL_Sensitive` text,\n  `COL_Bookuser` int(11) NOT NULL DEFAULT '0',\n  `COL_Adminrecord` text,\n  `COL_Pagestype` int(11) NOT NULL DEFAULT '0',\n  `COL_Pages` text NOT NULL,\n  `COL_Pagefont` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','1','','2','20,20,20,20,20,20,20','1','Emmm','Emmm','2','default','2','4','1','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."','1','0','10','cn|cn|cn','傻逼|二货|狗屎|去死','0','请输入建站备忘事项!','0','<style type=\"text/css\">.emmm_page { font-size:14px; margin:20px auto 0 auto; float:left; clear:both;}.emmm_page a { padding:8px 15px; float:left; margin-right:10px; border:1px #D1D1D1 solid; background:#f4f4f4; color:#666;}.emmm_page .me { padding:8px 15px; float:left; margin-right:10px; border:1px #f4f4f4 solid; background:#D1D1D1; color:#666; font-weight:bold;}.emmm_page a:hover {background:#D1D1D1; color:#666;}.emmm_dian{ padding:8px 15px; float:left; margin-right:10px; color:#666;}.emmm_page .disabled{ padding:8px 15px; float:left; margin-right:10px; border:1px #f4f4f4 solid; background:#D1D1D1; color:#666;}.emmm_page .disabled2{background:#f4f4f4; color:#666;}</style>','上一页|下一页')");

tableend("emmm_webdeploy");

echo '<center><BR><BR><BR><BR>完成。所有数据都已经导入数据库中。</center>'; exit; ?>