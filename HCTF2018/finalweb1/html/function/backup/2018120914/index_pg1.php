<?php
if(!defined('VERSION')){echo "<meta http-equiv=refresh content='0;URL=index.php'>";exit;}
create("emmm_ad"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Adtitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adcontent` text DEFAULT NULL,\n  `COL_Adclass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adpiaofui` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adpiaofuu` text DEFAULT NULL,\n  `COL_Adyouxiat` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adyouxiaf` text DEFAULT NULL,\n  `COL_Adduilianli` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adduilianlu` text DEFAULT NULL,\n  `COL_Adduilianri` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adduilianru` text DEFAULT NULL,\n  `COL_Adstateo` int(11) NOT NULL DEFAULT 0,\n  `COL_Adstatet` int(11) NOT NULL DEFAULT 0,\n  `COL_Adstates` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");

insert("('1','全站顶部','','','../../skin/headerbanner.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('2','全站底部','','','../../skin/footerbanner.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('3','信息列表页','','','../../skin/threadlist.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('4','信息内容页','','','../../skin/article.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('5','特殊广告','','','','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('6','会员中心登录左侧广告位','','','../../skin/userrightad.gif','','','','','','','','2','2','2','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_ad");

create("emmm_admin"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Adminname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adminpass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adminpower` text DEFAULT NULL,\n  `COL_Admin` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','admin','c3284d0f94606de1','01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60','1','".base64_decode('MjAxOC0xMi0wMSAxNTozNTozOA==')."')");

tableend("emmm_admin");

create("emmm_adminclick"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Click` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");

insert("('1','数据库操作','emmm_bak.php?id=emmm','4'),
('2','图片水印设置','emmm_watermark.php?id=emmm','4'),
('3','系统邮件设置','emmm_mail.php?id=emmm','0'),
('4','会员选项','emmm_usercontrol.php?id=emmm','0'),
('5','会员管理','emmm_user.php?id=emmm','0'),
('6','用户组管理','emmm_usergroup.php?id=emmm','0'),
('7','网站语言配置','emmm_lang.php','0'),
('8','图集管理','emmm_photo.php?id=emmm','0')");

tableend("emmm_adminclick");

create("emmm_api"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Key` text DEFAULT NULL,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");

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

create("emmm_article"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Articletitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Articleauthor` varchar(255) NOT NULL DEFAULT '',\n  `COL_Articlesource` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Articlecontent` text DEFAULT NULL,\n  `COL_Class` int(11) NOT NULL DEFAULT 0,\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT 0,\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text DEFAULT NULL,\n  `COL_Click` int(11) NOT NULL DEFAULT 0,\n  `COL_Minimg` text DEFAULT NULL,\n  `COL_Callback` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Articletitle` (`COL_Articletitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");

insert("('1','世界，你好！','','','".base64_decode('MjAxNC0xMi0wNyAxNTo1OTozMw==')."','世界，你好！','3','cn','','99','','','世界，你好！','0','skin/noimage.png','0'),
('2','世界，你好！','','','".base64_decode('MjAxNC0xMi0wNyAxNTo1OTo0Mw==')."','世界，你好！','3','cn','','99','','','世界，你好！','0','skin/noimage.png','0'),
('3','世界，你好！','','','".base64_decode('MjAxNC0xMi0wNyAxNjowMjowNA==')."','世界，你好！','3','cn','','99','','','世界，你好！','0','skin/noimage.png','0')");

tableend("emmm_article");

create("emmm_banner"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Bannerimg` text DEFAULT NULL,\n  `COL_Bannertitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bannerurl` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bannerlang` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Bannerclass` int(11) NOT NULL DEFAULT 0,\n  `COL_Bannertext` text DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('1','function/uploadfile/emmm888/1.png','banner1','#','cn','".base64_decode('MjAxNC0xMi0wNiAxNzoyNzo1Ng==')."','0','||'),
('2','function/uploadfile/emmm888/2.png','banner2','#','cn','".base64_decode('MjAxNC0xMi0wNiAxODowMTo1NQ==')."','1','||')");

tableend("emmm_banner");

create("emmm_book"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Bookcontent` text DEFAULT NULL,\n  `COL_Bookname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Booktel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bookip` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bookclass` int(11) NOT NULL DEFAULT 0,\n  `COL_Booklang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Bookreply` text DEFAULT NULL,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`),\n  KEY `COL_Bookclass` (`COL_Bookclass`),\n  KEY `COL_Booklang` (`COL_Booklang`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_book");

create("emmm_booksection"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Booksectiontitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Booksectioncontent` text DEFAULT NULL,\n  `COL_Booksectionlanguage` varchar(255) NOT NULL DEFAULT '',\n  `COL_Booksectionsorting` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('1','问题反馈','在这里可以把您碰到的问题反馈给我们。','cn','0','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('2','客户服务','您有什么需求或是需要什么帮助，可以在这里留言哦！','cn','1','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_booksection");

create("emmm_column"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Uid` int(11) NOT NULL DEFAULT 0,\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Columntitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Columntitleto` varchar(255) NOT NULL DEFAULT '',\n  `COL_Model` varchar(255) NOT NULL DEFAULT '',\n  `COL_Templist` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tempview` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_About` text DEFAULT NULL,\n  `COL_Hide` int(11) NOT NULL DEFAULT 0,\n  `COL_Sorting` int(11) NOT NULL DEFAULT 0,\n  `COL_Briefing` text DEFAULT NULL,\n  `COL_Img` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userright` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weight` int(11) NOT NULL DEFAULT 0,\n  `COL_Adminopen` text DEFAULT NULL,\n  PRIMARY KEY (`id`),\n  KEY `COL_Hide` (`COL_Hide`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Uid` (`COL_Uid`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");

insert("('1','0','cn','网站首页','','weburl','','','/','','0','0','','','0','0','0,1'),
('2','0','cn','企业商城','','weburl','','','?cn-shop.html','','0','2','','','0','0','0,1'),
('3','0','cn','公司新闻','','article','cn_article.html','cn_articleview.html','','','0','3','','','0','0','0,1'),
('4','0','cn','公司产品','','product','cn_product.html','cn_productview.html','','','0','4','','','0','0','0,1'),
('5','0','cn','公司案例','','photo','cn_photo.html','cn_photoview.html','','','0','5','','','0','0','0,1'),
('6','0','cn','视频展示','','video','cn_video.html','cn_videoview.html','','','0','6','','','0','0','0,1'),
('7','0','cn','资料下载','','down','cn_down.html','cn_downview.html','','','0','7','','','0','0','0,1'),
('8','0','cn','在线招聘','','job','cn_job.html','cn_jobview.html','','','0','8','','','0','0','0,1'),
('9','0','cn','关于我们','','about','','cn_about.html','','<p>5分钟<br>即可开启企业网购官网，树立品牌形象！<br>1秒钟<br>让您的企业网站变成大企业范儿！<br>没错，这就是Emmm！<br>什么是Emmm?<br>Emmm是一款快速、安全、结合电商功能的企业网站建站系统，傲派、OP、OPCMS都是它的名子。<br>Emmm的优势是什么?<br>它：安全，快速。<br>它：有强大的技术后盾<br>它：不仅仅是一个企业建站平台，更是一个电商平台<br>它：理论上可以创建世界上任何国家语言的网站<br>它：等待你更多的发现。<br>Emmm能做什么?<br>简单的说，emmm可以快速、安全的开启一个大气、功能强大的企业网站，它不但可以帮助您的企业<br>树立形象，还可以实现在您自已的官方网站上展开电子商务。emmm理论上支持创建世界上所有国家语<br>言的网站，是您做外贸的一个好帮手。它还可以像淘宝、小米那样开展电子商城，它还支持文章、商品<br>、图集、下载、招聘、视频等所有满足您建站功能的需求。<br>emmm实现在搭建企业网站的同时，可以让企业在自已的平台上展开电子商务。emmm就是这么任性！<br>Emmm的使命是什么?<br>帮助中国企业搭建官网平台，并在自已的平台上实现电商之路！<br>','0','9','','','0','0','0,1'),
('10','0','cn','在线留言','','weburl','','','?cn-club.html','','0','10','','','0','0','0,1'),
('11','2','cn','积分兑换','系统栏目','product','cn_integral.html','cn_integralview.html','','','1','0','','','0','0','0,1'),
('12','2','cn','手机数码','','product','cn_shoplist.html','cn_shopview.html','','','0','1','','','0','0','0,1'),
('13','2','cn','男装女装','','product','cn_shoplist.html','cn_shopview.html','','','0','2','','','0','0','0,1'),
('14','2','cn','鞋靴箱包','','product','cn_shoplist.html','cn_shopview.html','','','0','3','','','0','0','0,1'),
('15','2','cn','护外运动','','product','cn_shoplist.html','cn_shopview.html','','','0','4','','','0','0','0,1'),
('16','2','cn','珠宝配饰','','product','cn_shoplist.html','cn_shopview.html','','','0','5','','','0','0','0,1'),
('17','2','cn','护肤彩妆','','product','cn_shoplist.html','cn_shopview.html','','','0','6','','','0','0','0,1')");

tableend("emmm_column");

create("emmm_comment"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Content` text DEFAULT NULL,\n  `COL_Class` int(11) NOT NULL DEFAULT 0,\n  `COL_Type` varchar(255) NOT NULL DEFAULT '',\n  `COL_Name` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ip` varchar(255) NOT NULL DEFAULT '',\n  `COL_Vote` int(11) NOT NULL DEFAULT 0,\n  `COL_Scoring` varchar(255) NOT NULL DEFAULT '',\n  `COL_Gocontent` text DEFAULT NULL,\n  `COL_Gotime` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_comment");

create("emmm_coupon"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Money` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Timewin` datetime DEFAULT NULL,\n  `COL_Moneygo` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Content` text DEFAULT NULL,\n  `COL_Type` int(11) NOT NULL DEFAULT 0,\n  `COL_Md` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_coupon");

create("emmm_couponlist"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Couponid` int(11) NOT NULL DEFAULT 0,\n  `COL_Username` varchar(255) NOT NULL DEFAULT '',\n  `COL_Type` int(11) NOT NULL DEFAULT 0,\n  `COL_Timewin` datetime DEFAULT NULL,\n  `COL_Moneygo` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Md` varchar(255) NOT NULL DEFAULT '',\n  `COL_Time` datetime DEFAULT NULL,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_couponlist");

create("emmm_down"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Downtitle` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Downimg` text DEFAULT NULL,\n  `COL_Downdurl` text DEFAULT NULL,\n  `COL_Downcontent` text DEFAULT NULL,\n  `COL_Downempower` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downtype` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downlang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downsize` varchar(255) NOT NULL DEFAULT '',\n  `COL_Class` int(11) NOT NULL DEFAULT 0,\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downmake` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downsetup` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Downrights` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT 0,\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text DEFAULT NULL,\n  `COL_Click` int(11) NOT NULL DEFAULT 0,\n  `COL_Random` text DEFAULT NULL,\n  `COL_Callback` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Downtitle` (`COL_Downtitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_down");

create("emmm_freight"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Freightname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Freighttext` text DEFAULT NULL,\n  `COL_Freightdefault` int(11) NOT NULL DEFAULT 0,\n  `COL_Freightweight` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','包邮模板(官方默认)','0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0','1','0','".base64_decode('')."')");

tableend("emmm_freight");

create("emmm_integral"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Iid` int(11) NOT NULL DEFAULT 0,\n  `COL_Iname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Imarket` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Iwebmarket` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Iintegral` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Ivirtual` int(11) NOT NULL DEFAULT 0,\n  `COL_Iconfirm` int(11) NOT NULL DEFAULT 0,\n  `COL_Iuseremail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Iadmin` int(11) NOT NULL DEFAULT 0,\n  `COL_ITime` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_integral");

create("emmm_job"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Jobtitle` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Jobwork` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobadd` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobnature` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobexperience` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobeducation` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobnumber` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobage` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobwelfare` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobwage` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobcontact` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobtel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Jobcontent` text DEFAULT NULL,\n  `COL_Class` int(11) NOT NULL DEFAULT 0,\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT 0,\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text DEFAULT NULL,\n  `COL_Click` int(11) NOT NULL DEFAULT 0,\n  `COL_Callback` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Jobtitle` (`COL_Jobtitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_job");

create("emmm_lang"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Font` varchar(255) NOT NULL DEFAULT '',\n  `COL_Default` varchar(255) NOT NULL DEFAULT '',\n  `COL_Note` varchar(255) NOT NULL DEFAULT '',\n  `COL_Langtitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Langkeywords` text DEFAULT NULL,\n  `COL_Langdescription` text DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','cn','中文','Default','中文语言唯一标识','','','')");

tableend("emmm_lang");

create("emmm_link"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Linkname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Linkurl` varchar(255) NOT NULL DEFAULT '',\n  `COL_Linkclass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Linkimg` text DEFAULT NULL,\n  `COL_Linksorting` int(11) NOT NULL DEFAULT 0,\n  `COL_Linkstate` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('1','Emmm','http://vidar.club','font','http://','99','1','".base64_decode('MjAxNC0xMi0wNyAxNzo0OToxMA==')."'),
('2','YidaCMS','http://yidacms.com','font','http://','99','1','".base64_decode('MjAxNC0xMi0wNyAxNzo0OToxMA==')."')");

tableend("emmm_link");

create("emmm_mail"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Mailsmtp` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailport` int(11) NOT NULL DEFAULT 0,\n  `COL_Mailusermail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailuser` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailpass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailsubject` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailcontent` text DEFAULT NULL,\n  `COL_Mailtype` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailtitle` varchar(255) NOT NULL DEFAULT '',\n  `COL_Mailclass` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");

insert("('1','smtp.qq.com','25','993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','注册会员邮件提醒','2'),
('2','smtp.qq.com','25','993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','提交订单邮件提醒','2'),
('3','smtp.qq.com','25','993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','后台发货邮件提醒','2'),
('4','smtp.qq.com','25','993141000@qq.com','993141000','123456','您的会员注册验证码','验证码：#opcms#code#','HTML','用户注册邮件验证码','2')");

tableend("emmm_mail");

create("emmm_orders"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Ordersname` text DEFAULT NULL,\n  `COL_Ordersid` int(11) NOT NULL DEFAULT 0,\n  `COL_Ordersnum` int(11) NOT NULL DEFAULT 0,\n  `COL_Ordersemail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersusername` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersusertel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersuseradd` text DEFAULT NULL,\n  `COL_Ordersusetext` text DEFAULT NULL,\n  `COL_Ordersproductatt` text DEFAULT NULL,\n  `COL_Orderswebmarket` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Ordersusermarket` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Ordersweight` int(11) NOT NULL DEFAULT 1,\n  `COL_Ordersfreight` int(11) NOT NULL DEFAULT 1,\n  `COL_Ordersexpress` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersexpressnum` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Ordersnumber` varchar(255) NOT NULL DEFAULT '',\n  `COL_Orderspay` int(11) NOT NULL DEFAULT 1,\n  `COL_Orderssend` int(11) NOT NULL DEFAULT 1,\n  `COL_Ordersgotime` datetime DEFAULT NULL,\n  `COL_Integralok` int(11) NOT NULL DEFAULT 0,\n  `COL_Sign` int(11) NOT NULL DEFAULT 0,\n  `COL_Ordersclassid` int(11) NOT NULL DEFAULT 0,\n  `COL_Ordersadminoper` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`),\n  KEY `COL_Ordersid` (`COL_Ordersid`),\n  KEY `COL_Ordersemail` (`COL_Ordersemail`),\n  KEY `COL_Ordersnumber` (`COL_Ordersnumber`),\n  KEY `COL_Orderspay` (`COL_Orderspay`),\n  KEY `COL_Orderssend` (`COL_Orderssend`),\n  KEY `COL_Sign` (`COL_Sign`),\n  KEY `COL_Ordersclassid` (`COL_Ordersclassid`),\n  KEY `COL_Ordersadminoper` (`COL_Ordersadminoper`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_orders");

create("emmm_orderslist"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Ordersnum` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersid` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersusername` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersusertel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Ordersuseradd` varchar(255) NOT NULL DEFAULT '',\n  `COL_Orderscouponmoney` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Orderscouponid` int(11) NOT NULL DEFAULT 0,\n  `COL_Ordersuser` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_orderslist");

create("emmm_photo"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Phototitle` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Photocminimg` varchar(255) NOT NULL DEFAULT '',\n  `COL_Photoimg` text DEFAULT NULL,\n  `COL_Photocontent` text DEFAULT NULL,\n  `COL_Class` int(11) NOT NULL DEFAULT 0,\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT 0,\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text DEFAULT NULL,\n  `COL_Click` int(11) NOT NULL DEFAULT 0,\n  `COL_Callback` int(11) NOT NULL DEFAULT 0,\n  `COL_Photoname` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Phototitle` (`COL_Phototitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");

insert("('1','测试01','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0',''),
('2','测试02','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0',''),
('3','测试03','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0',''),
('4','测试04','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0',''),
('5','测试05','".base64_decode('MjAxNC0xMi0wOSAxNjoyNToyOQ==')."','function/uploadfile/emmm888/ph1.jpg','','测试02','5','cn','','99','','','测试02','0','0','')");

tableend("emmm_photo");

create("emmm_plus"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Name` varchar(255) NOT NULL DEFAULT '',\n  `COL_Version` varchar(255) NOT NULL DEFAULT '',\n  `COL_Versiondate` varchar(255) NOT NULL DEFAULT '',\n  `COL_Author` varchar(255) NOT NULL DEFAULT '',\n  `COL_Fraction` varchar(255) NOT NULL DEFAULT '',\n  `COL_About` text DEFAULT NULL,\n  `COL_Pluspath` text DEFAULT NULL,\n  `COL_Time` date DEFAULT NULL,\n  `COL_Off` int(11) NOT NULL DEFAULT 1,\n  `COL_Plugid` varchar(255) NOT NULL DEFAULT '',\n  `COL_Plugclass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Plugmysql` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_plus");

create("emmm_product"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Class` int(11) NOT NULL DEFAULT 0,\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Number` varchar(255) NOT NULL DEFAULT '',\n  `COL_Goodsno` varchar(255) NOT NULL DEFAULT '',\n  `COL_Brand` varchar(255) NOT NULL DEFAULT '',\n  `COL_Market` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Webmarket` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Stock` int(11) NOT NULL DEFAULT 0,\n  `COL_Usermoney` text DEFAULT NULL,\n  `COL_Specificationsid` varchar(255) NOT NULL DEFAULT '',\n  `COL_Specificationstitle` text DEFAULT NULL,\n  `COL_Specifications` text DEFAULT NULL,\n  `COL_Pattribute` text DEFAULT NULL,\n  `COL_Minimg` varchar(255) NOT NULL DEFAULT '',\n  `COL_Maximg` varchar(255) NOT NULL DEFAULT '',\n  `COL_Img` text DEFAULT NULL,\n  `COL_Content` text DEFAULT NULL,\n  `COL_Down` int(11) NOT NULL DEFAULT 0,\n  `COL_Weight` int(11) NOT NULL DEFAULT 1,\n  `COL_Freight` int(11) NOT NULL DEFAULT 1,\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT 0,\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text DEFAULT NULL,\n  `COL_Click` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  `COL_Integral` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Integralok` int(11) NOT NULL DEFAULT 0,\n  `COL_Integralexchange` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Suggest` varchar(255) NOT NULL DEFAULT '',\n  `COL_Productimgname` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Down` (`COL_Down`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Brand` (`COL_Brand`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");

insert("('1','12','cn','测试01','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','1','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('2','12','cn','测试02','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('3','12','cn','测试03','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('4','12','cn','测试04','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('5','12','cn','测试05','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('6','12','cn','测试06','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','0','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('7','12','cn','测试07','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','3','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','',''),
('8','12','cn','测试08','OP20141209155321','OP20141209155321','','0.00','0.00','100','1:0.00|2:0.00|3:0.00|4:0.00|5:0.00','','','','','function/uploadfile/emmm888/pr1.jpg','function/uploadfile/emmm888/ph1.jpg','','','2','1','1','','99','','','','2','".base64_decode('MjAxNC0xMi0wOSAxNTo1NDowNQ==')."','0.00','0','0.00','','')");

tableend("emmm_product");

create("emmm_productattribute"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Class` varchar(255) NOT NULL DEFAULT '',\n  `COL_Text` text DEFAULT NULL,\n  `COL_Sorting` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");

insert("('1','电脑系列','0','','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('2','硬盘容量','1','500G|800G|1T','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('3','内存容量','1','1G|2G|3G','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_productattribute");

create("emmm_productcp"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Vender` varchar(255) NOT NULL DEFAULT '',\n  `COL_Brand` varchar(255) NOT NULL DEFAULT '',\n  `COL_Class` int(11) NOT NULL DEFAULT 0,\n  `COL_Img` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_productcp");

create("emmm_productset"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Pattern` int(11) NOT NULL DEFAULT 0,\n  `COL_Scheme` int(11) NOT NULL DEFAULT 0,\n  `COL_Stock` int(11) NOT NULL DEFAULT 0,\n  `COL_buy` int(11) NOT NULL DEFAULT 0,\n  `COL_Sendout` text DEFAULT NULL,\n  `time` datetime DEFAULT NULL,\n  `COL_Delivery` int(11) NOT NULL DEFAULT 0,\n  `COL_Userbuysms` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','2','1','100','2','','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."','0','0')");

tableend("emmm_productset");

create("emmm_productspecifications"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Title` varchar(255) NOT NULL DEFAULT '',\n  `COL_Titleto` varchar(255) NOT NULL DEFAULT '',\n  `COL_Value` text DEFAULT NULL,\n  `COL_Class` int(11) NOT NULL DEFAULT 0,\n  `COL_Img` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('1','尺码','女鞋','36|37|38|39','1','','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."'),
('2','颜色','女鞋','红色|白色|黑色','1','','99','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_productspecifications");

create("emmm_qq"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_QQname` varchar(255) NOT NULL DEFAULT '',\n  `COL_QQnumber` varchar(255) NOT NULL DEFAULT '',\n  `COL_QQclass` varchar(255) NOT NULL DEFAULT '',\n  `COL_QQsorting` int(11) NOT NULL DEFAULT 0,\n  `COL_QQother` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_qq");

create("emmm_search"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Searchtext` text DEFAULT NULL,\n  `COL_Searchclick` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");

insert("('1','123456','2','".base64_decode('MjAxOC0xMi0wMSAxNTozNjozNA==')."'),
('2','1','3','".base64_decode('MjAxOC0xMi0wMSAxNTozOToxNA==')."'),
('3','世界，你好！','11','".base64_decode('MjAxOC0xMi0wMSAxNTo0MDowNw==')."'),
('4','世界，你好！''','2','".base64_decode('MjAxOC0xMi0wMSAxNTo0MzozMA==')."'),
('5','世界，你好！\\\\''','1','".base64_decode('MjAxOC0xMi0wMSAxNjowMjo1Mw==')."')");

tableend("emmm_search");

create("emmm_shoppingcart"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Shopproductid` int(11) NOT NULL DEFAULT 0,\n  `COL_Shopnum` int(11) NOT NULL DEFAULT 0,\n  `COL_Shopusername` varchar(255) NOT NULL DEFAULT '',\n  `COL_Shopatt` text DEFAULT NULL,\n  `COL_Shopkc` varchar(255) NOT NULL DEFAULT '',\n  `COL_Shophh` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('2','1','1','a@a.com','','100','OP20141209155321','".base64_decode('MjAxOC0xMi0wNSAxNjoxODoyMg==')."')");

tableend("emmm_shoppingcart");

create("emmm_temp"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Temppath` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tempauthor` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','default','emmm!')");

tableend("emmm_temp");

create("emmm_user"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Useremail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userpass` varchar(255) NOT NULL DEFAULT '',\n  `COL_Username` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usertel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userqq` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userskype` varchar(255) NOT NULL DEFAULT '',\n  `COL_Useraliww` varchar(255) NOT NULL DEFAULT '',\n  `COL_Useradd` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userclass` int(11) NOT NULL DEFAULT 0,\n  `COL_Usersource` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userhead` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usermoney` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Userintegral` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Userip` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userproblem` varchar(255) NOT NULL DEFAULT '',\n  `COL_Useranswer` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userstatus` int(11) NOT NULL DEFAULT 0,\n  `COL_Usertext` text DEFAULT NULL,\n  `logintime` datetime DEFAULT NULL,\n  `COL_Usercode` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Userimage` varchar(255) DEFAULT '',\n  PRIMARY KEY (`id`),\n  KEY `COL_Useremail` (`COL_Useremail`),\n  KEY `COL_Userpass` (`COL_Userpass`),\n  KEY `COL_Usertel` (`COL_Usertel`),\n  KEY `COL_Userstatus` (`COL_Userstatus`),\n  KEY `COL_Usercode` (`COL_Usercode`)\n) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");

insert("('1','a@a.com','14e1b600b1fd579f','','a@a.com','','','','','1','','','0.00','0.00','::1','','','1',NULL,'".base64_decode('')."','h0mrj3f584kkxc8zki20181201161945','".base64_decode('MjAxOC0xMi0wMSAxNjoxOTo0NQ==')."','user.png'),
('2','a''b@a.com','14e1b600b1fd579f','','a''b@a.com','','','','','1','','','0.00','0.00','::1','','','1',NULL,'".base64_decode('')."','b42jipvbhl94n0r9kt20181205112153','".base64_decode('MjAxOC0xMi0wNSAxMToyMTo1Mw==')."','')");

tableend("emmm_user");

create("emmm_usercontrol"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Userreg` int(11) NOT NULL DEFAULT 0,\n  `COL_Userlogin` int(11) NOT NULL DEFAULT 0,\n  `COL_Userprotocol` text DEFAULT NULL,\n  `COL_Usergroup` int(11) NOT NULL DEFAULT 0,\n  `COL_Usermoney` varchar(255) NOT NULL DEFAULT '',\n  `COL_Useripoff` int(11) NOT NULL DEFAULT 0,\n  `COL_Regtyle` varchar(255) NOT NULL DEFAULT 'email',\n  `COL_Regcode` int(11) NOT NULL DEFAULT 0,\n  `COL_Userpassgo` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','1','1','欢迎您注册成为[.\$emmm_web.website.] 用户！','1','0|0|0|0','2','email','0','0','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."')");

tableend("emmm_usercontrol");

create("emmm_userleve"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Userlevename` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userweight` int(11) NOT NULL DEFAULT 0,\n  `COL_Useropen` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");

insert("('1','普通会员','10','0'),
('2','银牌会员','20','0'),
('3','金牌会员','30','0'),
('4','分销商','40','0'),
('5','代理商','50','0')");

tableend("emmm_userleve");

create("emmm_usermessage"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Usersend` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usercollect` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usercontent` text DEFAULT NULL,\n  `COL_Userclass` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`),\n  KEY `COL_Usersend` (`COL_Usersend`),\n  KEY `COL_Usercollect` (`COL_Usercollect`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_usermessage");

create("emmm_userpay"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Useremail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Usermoney` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Userintegral` decimal(10,2) NOT NULL DEFAULT 0.00,\n  `COL_Usercontent` text DEFAULT NULL,\n  `COL_Useradmin` varchar(255) NOT NULL DEFAULT '',\n  `COL_Uservoucherone` varchar(255) NOT NULL DEFAULT '',\n  `COL_Uservouchertwo` varchar(255) NOT NULL DEFAULT '',\n  `COL_Userpaytype` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

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

create("emmm_usershopadd"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Add` varchar(255) NOT NULL DEFAULT '',\n  `COL_Addtel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Addname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Adduser` varchar(255) NOT NULL DEFAULT '',\n  `COL_Addindex` int(11) NOT NULL DEFAULT 0,\n  `time` datetime DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_usershopadd");

create("emmm_video"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Videotitle` varchar(255) NOT NULL DEFAULT '',\n  `time` datetime DEFAULT NULL,\n  `COL_Videoimg` text DEFAULT NULL,\n  `COL_Videovurl` text DEFAULT NULL,\n  `COL_Videoformat` varchar(255) NOT NULL DEFAULT '',\n  `COL_Videowidth` int(11) NOT NULL DEFAULT 0,\n  `COL_Videoheight` int(11) NOT NULL DEFAULT 0,\n  `COL_Videocontent` text DEFAULT NULL,\n  `COL_Class` int(11) NOT NULL DEFAULT 0,\n  `COL_Lang` varchar(255) NOT NULL DEFAULT '',\n  `COL_Tag` varchar(255) NOT NULL DEFAULT '',\n  `COL_Sorting` int(11) NOT NULL DEFAULT 0,\n  `COL_Attribute` varchar(255) NOT NULL DEFAULT '',\n  `COL_Url` varchar(255) NOT NULL DEFAULT '',\n  `COL_Description` text DEFAULT NULL,\n  `COL_Click` int(11) NOT NULL DEFAULT 0,\n  `COL_Callback` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`),\n  KEY `COL_Class` (`COL_Class`),\n  KEY `COL_Callback` (`COL_Callback`),\n  KEY `COL_Lang` (`COL_Lang`),\n  KEY `COL_Attribute` (`COL_Attribute`),\n  KEY `COL_Videotitle` (`COL_Videotitle`),\n  KEY `COL_Sorting` (`COL_Sorting`)\n) ENGINE=MyISAM DEFAULT CHARSET=utf8");

tableend("emmm_video");

create("emmm_wap"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Website` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weblogo` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webkeywords` text DEFAULT NULL,\n  `COL_Webdescriptions` text DEFAULT NULL,\n  `COL_Weburl` text DEFAULT NULL,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','我的手机网站','function/uploadfile/emmm888/logo.png','','','yes')");

tableend("emmm_wap");

create("emmm_watermark"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Watermarkimg` varchar(255) NOT NULL DEFAULT '',\n  `COL_Watermarkfont` varchar(255) NOT NULL DEFAULT '',\n  `COL_Watermarkcolor` varchar(255) NOT NULL DEFAULT '',\n  `COL_Watermarksize` varchar(255) NOT NULL DEFAULT '',\n  `COL_Watermarkposition` int(11) NOT NULL DEFAULT 0,\n  `COL_Watermarkoff` int(11) NOT NULL DEFAULT 0,\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','watermark.png','vidar.club','#000000','5','9','2')");

tableend("emmm_watermark");

create("emmm_web"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Website` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weburl` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weblogo` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webname` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webadd` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webtel` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webmobi` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webfax` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webemail` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webzip` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webqq` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weblinkman` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webicp` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webstatistics` text DEFAULT NULL,\n  `COL_Webtime` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webemmmurl` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webemmmcode` text DEFAULT NULL,\n  `COL_Webemmmu` text DEFAULT NULL,\n  `COL_Webemmmp` text DEFAULT NULL,\n  `COL_Websitemin` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weixin` varchar(255) NOT NULL DEFAULT '',\n  `COL_Weixinerweima` varchar(255) NOT NULL DEFAULT '',\n  `COL_Alipayname` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','TEST','localhost:8000','function/uploadfile/emmm888/logo.png','alias','alias','1111','1111','alias','alias','alias','alias','alias','alias','','alias','','','','','alias ','','','')");

tableend("emmm_web");

create("emmm_webdeploy"," (\n  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,\n  `COL_Weboff` int(11) NOT NULL DEFAULT 0,\n  `COL_Webofftext` text DEFAULT NULL,\n  `COL_Webrewrite` int(11) NOT NULL DEFAULT 0,\n  `COL_Webpage` text DEFAULT NULL,\n  `COL_Webkeywords` int(11) NOT NULL DEFAULT 0,\n  `COL_Webkeywordsto` text DEFAULT NULL,\n  `COL_Webdescriptions` text DEFAULT NULL,\n  `COL_Webfenci` int(11) NOT NULL DEFAULT 0,\n  `COL_Webservice` varchar(255) NOT NULL DEFAULT '',\n  `COL_Webocomment` int(11) NOT NULL DEFAULT 2,\n  `COL_Webpcomment` int(11) NOT NULL DEFAULT 2,\n  `COL_Webweight` int(11) NOT NULL DEFAULT 1,\n  `time` datetime DEFAULT NULL,\n  `COL_Webfile` int(11) NOT NULL DEFAULT 1,\n  `COL_Ucenter` int(11) NOT NULL DEFAULT 0,\n  `COL_Searchtime` int(11) NOT NULL DEFAULT 10,\n  `COL_Home` varchar(255) NOT NULL DEFAULT 'cn|cn|cn',\n  `COL_Sensitive` text DEFAULT NULL,\n  `COL_Bookuser` int(11) NOT NULL DEFAULT 0,\n  `COL_Adminrecord` text DEFAULT NULL,\n  `COL_Pagestype` int(11) NOT NULL DEFAULT 0,\n  `COL_Pages` text NOT NULL,\n  `COL_Pagefont` varchar(255) NOT NULL DEFAULT '',\n  PRIMARY KEY (`id`)\n) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

insert("('1','1','','2','20,20,20,20,20,20,20','1','Emmm','Emmm','2','default','2','4','1','".base64_decode('MjAxNS0wMS0wMSAxMjowMDowMA==')."','1','0','10','cn|cn|cn','傻逼|二货|狗屎|去死','0','请输入建站备忘事项!','0','<style type=\"text/css\">.emmm_page { font-size:14px; margin:20px auto 0 auto; float:left; clear:both;}.emmm_page a { padding:8px 15px; float:left; margin-right:10px; border:1px #D1D1D1 solid; background:#f4f4f4; color:#666;}.emmm_page .me { padding:8px 15px; float:left; margin-right:10px; border:1px #f4f4f4 solid; background:#D1D1D1; color:#666; font-weight:bold;}.emmm_page a:hover {background:#D1D1D1; color:#666;}.emmm_dian{ padding:8px 15px; float:left; margin-right:10px; color:#666;}.emmm_page .disabled{ padding:8px 15px; float:left; margin-right:10px; border:1px #f4f4f4 solid; background:#D1D1D1; color:#666;}.emmm_page .disabled2{background:#f4f4f4; color:#666;}</style>','上一页|下一页')");

tableend("emmm_webdeploy");

echo '<center><BR><BR><BR><BR>完成。所有数据都已经导入数据库中。</center>'; exit; ?>
