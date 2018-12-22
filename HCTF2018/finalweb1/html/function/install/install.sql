DROP TABLE IF EXISTS emmm_web;
CREATE TABLE `emmm_web` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Website` varchar(255) NOT NULL default '',
`COL_Weburl` varchar(255) NOT NULL default '',
`COL_Weblogo` varchar(255) NOT NULL default '',
`COL_Webname` varchar(255) NOT NULL default '',
`COL_Webadd` varchar(255) NOT NULL default '',
`COL_Webtel` varchar(255) NOT NULL default '',
`COL_Webmobi` varchar(255) NOT NULL default '',
`COL_Webfax` varchar(255) NOT NULL default '',
`COL_Webemail` varchar(255) NOT NULL default '',
`COL_Webzip` varchar(255) NOT NULL default '',
`COL_Webqq` varchar(255) NOT NULL default '',
`COL_Weblinkman` varchar(255) NOT NULL default '',
`COL_Webicp` varchar(255) NOT NULL default '',
`COL_Webstatistics` text,
`COL_Webtime` varchar(255) NOT NULL default '',
`COL_Webemmmurl` varchar(255) NOT NULL default '',
`COL_Webemmmcode` text,
`COL_Webemmmu` text,
`COL_Webemmmp` text,
`COL_Websitemin` varchar(255) NOT NULL default '',
`COL_Weixin` varchar(255) NOT NULL default '',
`COL_Weixinerweima` varchar(255) NOT NULL default '',
`COL_Alipayname` varchar(255) NOT NULL default '',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_wap;
CREATE TABLE `emmm_wap` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Website` varchar(255) NOT NULL default '',
`COL_Weblogo` varchar(255) NOT NULL default '',
`COL_Webkeywords` text,
`COL_Webdescriptions` text,
`COL_Weburl` text,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_wap VALUES('1','我的手机网站','function/uploadfile/emmm888/logo.png','','','yes');


DROP TABLE IF EXISTS emmm_admin;
CREATE TABLE `emmm_admin` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Adminname` varchar(255) NOT NULL default '',
`COL_Adminpass` varchar(255) NOT NULL default '',
`COL_Adminpower` text,
`COL_Admin` int(11) NOT NULL default '0', /*管理员主权限*/
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_article;
CREATE TABLE `emmm_article` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Articletitle` varchar(255) NOT NULL default '',
`COL_Articleauthor` varchar(255) NOT NULL default '',
`COL_Articlesource` varchar(255) NOT NULL default '',
`time` datetime,
`COL_Articlecontent` text,
`COL_Class` int(11) NOT NULL default '0',
`COL_Lang` varchar(255) NOT NULL default '',
`COL_Tag` varchar(255) NOT NULL default '',
`COL_Sorting` int(11) NOT NULL default '0', /*排序*/
`COL_Attribute` varchar(255) NOT NULL default '', /*属性*/
`COL_Url` varchar(255) NOT NULL default '',
`COL_Description` text, /*描述*/
`COL_Click` int(11) NOT NULL default '0', /*点击量*/
`COL_Minimg` text, /*缩略图*/
`COL_Callback` int(11) NOT NULL default '0', /*回收站 0=NO  1=YES*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_photo;
CREATE TABLE `emmm_photo` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Phototitle` varchar(255) NOT NULL default '',
`time` datetime,
`COL_Photocminimg` varchar(255) NOT NULL default '',
`COL_Photoimg` text,
`COL_Photocontent` text,
`COL_Class` int(11) NOT NULL default '0',
`COL_Lang` varchar(255) NOT NULL default '',
`COL_Tag` varchar(255) NOT NULL default '',
`COL_Sorting` int(11) NOT NULL default '0', /*排序*/
`COL_Attribute` varchar(255) NOT NULL default '', /*属性*/
`COL_Url` varchar(255) NOT NULL default '',
`COL_Description` text, /*描述*/
`COL_Click` int(11) NOT NULL default '0', /*点击量*/
`COL_Callback` int(11) NOT NULL default '0', /*回收站 0=NO  1=YES*/
`COL_Photoname` varchar(255) NOT NULL default '',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_video;
CREATE TABLE `emmm_video` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Videotitle` varchar(255) NOT NULL default '',
`time` datetime,
`COL_Videoimg` text,
`COL_Videovurl` text,
`COL_Videoformat` varchar(255) NOT NULL default '',
`COL_Videowidth` int(11) NOT NULL default '0',
`COL_Videoheight` int(11) NOT NULL default '0',
`COL_Videocontent` text,
`COL_Class` int(11) NOT NULL default '0',
`COL_Lang` varchar(255) NOT NULL default '',
`COL_Tag` varchar(255) NOT NULL default '',
`COL_Sorting` int(11) NOT NULL default '0', /*排序*/
`COL_Attribute` varchar(255) NOT NULL default '', /*属性*/
`COL_Url` varchar(255) NOT NULL default '',
`COL_Description` text, /*描述*/
`COL_Click` int(11) NOT NULL default '0', /*点击量*/
`COL_Callback` int(11) NOT NULL default '0', /*回收站 0=NO  1=YES*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_down;
CREATE TABLE `emmm_down` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Downtitle` varchar(255) NOT NULL default '',
`time` datetime,
`COL_Downimg` text,
`COL_Downdurl` text,
`COL_Downcontent` text,
`COL_Downempower` varchar(255) NOT NULL default '',
`COL_Downtype` varchar(255) NOT NULL default '',
`COL_Downlang` varchar(255) NOT NULL default '',
`COL_Downsize` varchar(255) NOT NULL default '',
`COL_Class` int(11) NOT NULL default '0',
`COL_Lang` varchar(255) NOT NULL default '',
`COL_Downmake` varchar(255) NOT NULL default '',
`COL_Downsetup` varchar(255) NOT NULL default '',
`COL_Tag` varchar(255) NOT NULL default '',
`COL_Downrights` varchar(255) NOT NULL default '', /*下载权限*/
`COL_Sorting` int(11) NOT NULL default '0', /*排序*/
`COL_Attribute` varchar(255) NOT NULL default '', /*属性*/
`COL_Url` varchar(255) NOT NULL default '',
`COL_Description` text, /*描述*/
`COL_Click` int(11) NOT NULL default '0', /*点击量*/
`COL_Random` text, /*随机的一个验证码，用于验证下载文件的*/
`COL_Callback` int(11) NOT NULL default '0', /*回收站 0=NO  1=YES*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_job;
CREATE TABLE `emmm_job` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Jobtitle` varchar(255) NOT NULL default '',
`time` datetime,
`COL_Jobwork` varchar(255) NOT NULL default '',
`COL_Jobadd` varchar(255) NOT NULL default '',
`COL_Jobnature` varchar(255) NOT NULL default '',
`COL_Jobexperience` varchar(255) NOT NULL default '',
`COL_Jobeducation` varchar(255) NOT NULL default '',
`COL_Jobnumber` varchar(255) NOT NULL default '',
`COL_Jobage` varchar(255) NOT NULL default '',
`COL_Jobwelfare` varchar(255) NOT NULL default '',
`COL_Jobwage` varchar(255) NOT NULL default '',
`COL_Jobcontact` varchar(255) NOT NULL default '',
`COL_Jobtel` varchar(255) NOT NULL default '',
`COL_Jobcontent` text,
`COL_Class` int(11) NOT NULL default '0',
`COL_Lang` varchar(255) NOT NULL default '',
`COL_Tag` varchar(255) NOT NULL default '',
`COL_Sorting` int(11) NOT NULL default '0', /*排序*/
`COL_Attribute` varchar(255) NOT NULL default '', /*属性*/
`COL_Url` varchar(255) NOT NULL default '',
`COL_Description` text, /*描述*/
`COL_Click` int(11) NOT NULL default '0', /*点击量*/
`COL_Callback` int(11) NOT NULL default '0', /*回收站 0=NO  1=YES*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_booksection;
CREATE TABLE `emmm_booksection` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Booksectiontitle` varchar(255) NOT NULL default '',
`COL_Booksectioncontent` text,
`COL_Booksectionlanguage` varchar(255) NOT NULL default '',
`COL_Booksectionsorting` int(11) NOT NULL default '0',
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_booksection VALUES('1','问题反馈','在这里可以把您碰到的问题反馈给我们。','cn','0','2015-1-1 12:00:00');
INSERT INTO emmm_booksection VALUES('2','客户服务','您有什么需求或是需要什么帮助，可以在这里留言哦！','cn','1','2015-1-1 12:00:00');

DROP TABLE IF EXISTS emmm_usercontrol;
CREATE TABLE `emmm_usercontrol` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Userreg` int(11) NOT NULL default '0', /*是否可以注册 1可以 2不可以*/
`COL_Userlogin` int(11) NOT NULL default '0', /*是否可以登录 1可以 2不可以*/
`COL_Userprotocol` text, /*注册协议*/
`COL_Usergroup` int(11) NOT NULL default '0', /*默认用户组*/
`COL_Usermoney` varchar(255) NOT NULL default '', /*注册增加多少现金和积分  现金|积分|推广现金|推广积分*/
`COL_Useripoff` int(11) NOT NULL default '0', /*开启IP限制，1开启 2关闭*/
`COL_Regtyle` varchar(255) NOT NULL default 'email', /*默认为注册账号类型为邮箱，tel是手机*/
`COL_Regcode` int(11) NOT NULL default '0', /*是否开启验证码*/
`COL_Userpassgo` int(11) NOT NULL default '0',
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_usercontrol VALUES('1','1','1','欢迎您注册成为[.$emmm_web.website.] 用户！','1','0|0|0|0','2','email','0','0','2015-1-1 12:00:00');

DROP TABLE IF EXISTS emmm_user;
CREATE TABLE `emmm_user` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Useremail` varchar(255) NOT NULL default '',
`COL_Userpass` varchar(255) NOT NULL default '',

/*联系方式*/
`COL_Username` varchar(255) NOT NULL default '',
`COL_Usertel` varchar(255) NOT NULL default '',
`COL_Userqq`  varchar(255) NOT NULL default '',
`COL_Userskype` varchar(255) NOT NULL default '',
`COL_Useraliww` varchar(255) NOT NULL default '',
`COL_Useradd` varchar(255) NOT NULL default '',
`COL_Userimage` varchar(255) NOT NULL default '',

/*其它*/
`COL_Userclass` int(11) NOT NULL default '0', /*会员级别*/
`COL_Usersource` varchar(255) NOT NULL default '',/*会员来源*/
`COL_Userhead` varchar(255) NOT NULL default '',/*会员头像*/
`COL_Usermoney` decimal(10,2) NOT NULL default '0', /*账户现金*/
`COL_Userintegral` decimal(10,2) NOT NULL default '0', /*账户积分*/
`COL_Userip` varchar(255) NOT NULL default '',/*会员ip地址*/
`COL_Userproblem` varchar(255) NOT NULL default '',/*会员找回密码时的问题*/
`COL_Useranswer` varchar(255) NOT NULL default '',/*会员找回密码时的答案*/
`COL_Userstatus` int(11) NOT NULL default '0', /*账户状态 1开启 2锁定*/
`COL_Usertext` text,/*人生宣言*/
`logintime` datetime,/*登录时间*/
`COL_Usercode` varchar(255) NOT NULL default '',
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_userproblem;
CREATE TABLE `emmm_userproblem` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Userproblem` varchar(255) NOT NULL default '',
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_userproblem VALUES('1','你妈妈的姓名？','2015-1-1 12:00:00');
INSERT INTO emmm_userproblem VALUES('2','你爸爸的姓名？','2015-1-1 12:00:00');
INSERT INTO emmm_userproblem VALUES('3','你老婆的姓名？','2015-1-1 12:00:00');
INSERT INTO emmm_userproblem VALUES('4','你的家乡在哪？','2015-1-1 12:00:00');
INSERT INTO emmm_userproblem VALUES('5','你的大学是哪家学校？','2015-1-1 12:00:00');
INSERT INTO emmm_userproblem VALUES('6','你老婆的生日？','2015-1-1 12:00:00');
INSERT INTO emmm_userproblem VALUES('7','你自已的生日？','2015-1-1 12:00:00');

DROP TABLE IF EXISTS emmm_userleve;
CREATE TABLE `emmm_userleve` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Userlevename` varchar(255) NOT NULL default '',
`COL_Userweight` int(11) NOT NULL default '0', /*用户组权重*/
`COL_Useropen` int(11) NOT NULL default '0',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_userleve VALUES('1','普通会员','10',0);
INSERT INTO emmm_userleve VALUES('2','银牌会员','20',0);
INSERT INTO emmm_userleve VALUES('3','金牌会员','30',0);
INSERT INTO emmm_userleve VALUES('4','分销商','40',0);
INSERT INTO emmm_userleve VALUES('5','代理商','50',0);


DROP TABLE IF EXISTS emmm_usermessage;
CREATE TABLE `emmm_usermessage` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Usersend` varchar(255) NOT NULL default '',
`COL_Usercollect` varchar(255) NOT NULL default '',
`COL_Usercontent` text,
`COL_Userclass` int(11) NOT NULL default '0',
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_userpay;
CREATE TABLE `emmm_userpay` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Useremail` varchar(255) NOT NULL default '',
`COL_Usermoney` decimal(10,2) NOT NULL default '0', /*账户现金*/
`COL_Userintegral` decimal(10,2) NOT NULL default '0', /*账户积分*/
`COL_Usercontent` text,
`COL_Useradmin` varchar(255) NOT NULL default '',
`COL_Uservoucherone` varchar(255) NOT NULL default '',
`COL_Uservouchertwo` varchar(255) NOT NULL default '',
`COL_Userpaytype` varchar(255) NOT NULL default '',
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_book;
CREATE TABLE `emmm_book` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Bookcontent` text,
`COL_Bookname` varchar(255) NOT NULL default '',
`COL_Booktel` varchar(255) NOT NULL default '',
`COL_Bookip` varchar(255) NOT NULL default '',
`COL_Bookclass` int(11) NOT NULL default '0',
`COL_Booklang` varchar(255) NOT NULL default '',
`COL_Bookreply` text,
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_banner;
CREATE TABLE `emmm_banner` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Bannerimg` text,
`COL_Bannertitle` varchar(255) NOT NULL default '',
`COL_Bannerurl` varchar(255) NOT NULL default '',
`COL_Bannerlang` varchar(255) NOT NULL default '',
`time` datetime,
`COL_Bannerclass` int(11) NOT NULL default '0',
`COL_Bannertext` text,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_qq;
CREATE TABLE `emmm_qq` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_QQname` varchar(255) NOT NULL default '',
`COL_QQnumber` varchar(255) NOT NULL default '',
`COL_QQclass` varchar(255) NOT NULL default '',
`COL_QQsorting` int(11) NOT NULL default '0',
`COL_QQother` varchar(255) NOT NULL default '',
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_link;
CREATE TABLE `emmm_link` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Linkname` varchar(255) NOT NULL default '',
`COL_Linkurl` varchar(255) NOT NULL default '',
`COL_Linkclass` varchar(255) NOT NULL default '',
`COL_Linkimg` text,
`COL_Linksorting` int(11) NOT NULL default '0',
`COL_Linkstate` int(11) NOT NULL default '0', /*显示隐藏 1显示 2隐藏*/
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_ad;
CREATE TABLE `emmm_ad` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Adtitle` varchar(255) NOT NULL default '',
`COL_Adcontent` text,
`COL_Adclass` varchar(255) NOT NULL default '',
`COL_Adpiaofui` varchar(255) NOT NULL default '',
`COL_Adpiaofuu` text,
`COL_Adyouxiat` varchar(255) NOT NULL default '',
`COL_Adyouxiaf` text,
`COL_Adduilianli` varchar(255) NOT NULL default '',
`COL_Adduilianlu` text,
`COL_Adduilianri` varchar(255) NOT NULL default '',
`COL_Adduilianru` text,
`COL_Adstateo` int(11) NOT NULL default '0',/*显示隐藏 1显示 2隐藏*/
`COL_Adstatet` int(11) NOT NULL default '0',
`COL_Adstates` int(11) NOT NULL default '0',
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_ad VALUES('1','全站顶部','','','../../skin/headerbanner.gif','','','','','','','','2','2','2','2015-1-1 12:00:00');
INSERT INTO emmm_ad VALUES('2','全站底部','','','../../skin/footerbanner.gif','','','','','','','','2','2','2','2015-1-1 12:00:00');
INSERT INTO emmm_ad VALUES('3','信息列表页','','','../../skin/threadlist.gif','','','','','','','','2','2','2','2015-1-1 12:00:00');
INSERT INTO emmm_ad VALUES('4','信息内容页','','','../../skin/article.gif','','','','','','','','2','2','2','2015-1-1 12:00:00');
INSERT INTO emmm_ad VALUES('5','特殊广告','','','','','','','','','','','2','2','2','2015-1-1 12:00:00');
INSERT INTO emmm_ad VALUES('6','会员中心登录左侧广告位','','','../../skin/userrightad.gif','','','','','','','','2','2','2','2015-1-1 12:00:00');


DROP TABLE IF EXISTS emmm_watermark;
CREATE TABLE `emmm_watermark` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Watermarkimg` varchar(255) NOT NULL default '',
`COL_Watermarkfont` varchar(255) NOT NULL default '',
`COL_Watermarkcolor` varchar(255) NOT NULL default '',
`COL_Watermarksize` varchar(255) NOT NULL default '',
`COL_Watermarkposition` int(11) NOT NULL default '0',
`COL_Watermarkoff` int(11) NOT NULL default '0', /*1打开 2关闭*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_watermark VALUES('1','watermark.png','vidar.club','#000000','5','9','2');

DROP TABLE IF EXISTS emmm_temp;
CREATE TABLE `emmm_temp` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Temppath` varchar(255) NOT NULL default '',
`COL_Tempauthor` varchar(255) NOT NULL default '',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_lang;
CREATE TABLE `emmm_lang` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Lang` varchar(255) NOT NULL default '',
`COL_Font` varchar(255) NOT NULL default '',
`COL_Default` varchar(255) NOT NULL default '',
`COL_Note` varchar(255) NOT NULL default '',
`COL_Langtitle` varchar(255) NOT NULL default '',
`COL_Langkeywords` text,
`COL_Langdescription` text,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_lang VALUES ('1','cn','中文','Default','中文语言唯一标识','','','');

DROP TABLE IF EXISTS emmm_adminclick;
CREATE TABLE `emmm_adminclick` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Title` varchar(255) NOT NULL default '',
`COL_Url` varchar(255) NOT NULL default '',
`COL_Click` int(11) NOT NULL default '0',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_mail;
CREATE TABLE `emmm_mail` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Mailsmtp` varchar(255) NOT NULL default '',
`COL_Mailport` int(11) NOT NULL default '0',
`COL_Mailusermail` varchar(255) NOT NULL default '',
`COL_Mailuser` varchar(255) NOT NULL default '',
`COL_Mailpass` varchar(255) NOT NULL default '',
`COL_Mailsubject` varchar(255) NOT NULL default '',
`COL_Mailcontent` text,
`COL_Mailtype` varchar(255) NOT NULL default '',
`COL_Mailtitle` varchar(255) NOT NULL default '', /*邮件类型*/
`COL_Mailclass` int(11) NOT NULL default '0', /*1开启 2关闭*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_mail VALUES('1','smtp.qq.com','25','993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','注册会员邮件提醒','2');
INSERT INTO emmm_mail VALUES('2','smtp.qq.com','25','993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','提交订单邮件提醒','2');
INSERT INTO emmm_mail VALUES('3','smtp.qq.com','25','993141000@qq.com','993141000','123456','这是一封测试邮件','测试内容','HTML','后台发货邮件提醒','2');
INSERT INTO emmm_mail VALUES('4','smtp.qq.com','25','993141000@qq.com','993141000','123456','您的会员注册验证码','验证码：#opcms#code#','HTML','用户注册邮件验证码','2');

DROP TABLE IF EXISTS emmm_column;
CREATE TABLE `emmm_column` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Uid` int(11) NOT NULL default '0',
`COL_Lang` varchar(255) NOT NULL default '',  /*语言类别*/
`COL_Columntitle` varchar(255) NOT NULL default '',  /*主标题*/
`COL_Columntitleto` varchar(255) NOT NULL default '', /*副标题*/
`COL_Model` varchar(255) NOT NULL default '', /*模型*/
`COL_Templist` varchar(255) NOT NULL default '', /*列表页模板*/
`COL_Tempview` varchar(255) NOT NULL default '', /*内容页模板*/
`COL_Url` varchar(255) NOT NULL default '', /*外部链接地址*/
`COL_About` text, /*单页面*/
`COL_Hide` int(11) NOT NULL default '0', /*栏目隐藏与显示，0为显示 1为隐藏*/
`COL_Sorting` int(11) NOT NULL default '0', /*栏目排序*/
`COL_Briefing` text, /*栏目介绍*/
`COL_Img` varchar(255) NOT NULL default '', /*栏目图片*/
`COL_Userright` varchar(255) NOT NULL default '', /*栏目权限*/
`COL_Weight` int(11) NOT NULL default '0', /*栏目权重*/
`COL_Adminopen` text, /*管理权限*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_product;
CREATE TABLE `emmm_product` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Class` int(11) NOT NULL default '0',
`COL_Lang` varchar(255) NOT NULL default '',  /*语言类别*/
`COL_Title` varchar(255) NOT NULL default '',  /*标题*/
`COL_Number` varchar(255) NOT NULL default '',  /*编号*/
`COL_Goodsno` varchar(255) NOT NULL default '',  /*货号*/
`COL_Brand` varchar(255) NOT NULL default '',  /*品牌*/
`COL_Market` decimal(10,2) NOT NULL default '0',  /*市场价*/
`COL_Webmarket` decimal(10,2) NOT NULL default '0',  /*本站价*/
`COL_Stock` int(11) NOT NULL default '0',  /*库存*/
`COL_Usermoney` text,  /*会员价格*/
`COL_Specificationsid` varchar(255) NOT NULL default '',  /*规格ID*/
`COL_Specificationstitle` text,  /*规格标题*/
`COL_Specifications` text,  /*产品规格*/
`COL_Pattribute` text,  /*产品属性*/
`COL_Minimg` varchar(255) NOT NULL default '',  /*缩略图*/
`COL_Maximg` varchar(255) NOT NULL default '',  /*大图*/
`COL_Img` text,  /*组图*/
`COL_Content` text,  /*内容*/
`COL_Down` int(11) NOT NULL default '0', /*下架 1下架 2不下架*/
`COL_Weight` int(11) NOT NULL default '1', /*重量*/
`COL_Freight` int(11) NOT NULL default '1', /*运费模板*/
`COL_Tag` varchar(255) NOT NULL default '', /*标签*/
`COL_Sorting` int(11) NOT NULL default '0', /*排序*/
`COL_Attribute` varchar(255) NOT NULL default '', /*属性*/
`COL_Url` varchar(255) NOT NULL default '',
`COL_Description` text, /*描述*/
`COL_Click` int(11) NOT NULL default '0', /*点击量*/
`time` datetime,
`COL_Integral` decimal(10,2) NOT NULL default '0', /*商品赠送积分 v1.2.2*/
`COL_Integralok` int(11) NOT NULL default '0', /*是否允许用积分对换 0=否 1=是*/
`COL_Integralexchange` decimal(10,2) NOT NULL default '0', /*兑换积分*/
`COL_Suggest` varchar(255) NOT NULL default '', /*一句话介绍*/
`COL_Productimgname` varchar(255) NOT NULL default '',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_productcp;
CREATE TABLE `emmm_productcp` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Vender` varchar(255) NOT NULL default '', 
`COL_Brand` varchar(255) NOT NULL default '', 
`COL_Class` int(11) NOT NULL default '0', /*1厂商 2品牌*/
`COL_Img` varchar(255) NOT NULL default '',  /*品牌图片*/
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_productattribute;
CREATE TABLE `emmm_productattribute` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Title` varchar(255) NOT NULL default '', 
`COL_Class` varchar(255) NOT NULL default '', 
`COL_Text` text,
`COL_Sorting` int(11) NOT NULL default '0', /*排序*/
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_productattribute VALUES('1','电脑系列','0','','99','2015-1-1 12:00:00');
INSERT INTO emmm_productattribute VALUES('2','硬盘容量','1','500G|800G|1T','99','2015-1-1 12:00:00');
INSERT INTO emmm_productattribute VALUES('3','内存容量','1','1G|2G|3G','99','2015-1-1 12:00:00');


DROP TABLE IF EXISTS emmm_productspecifications;
CREATE TABLE `emmm_productspecifications` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Title` varchar(255) NOT NULL default '', 
`COL_Titleto` varchar(255) NOT NULL default '',
`COL_Value` text, /*值*/
`COL_Class` int(11) NOT NULL default '0', /*1文字 2图片*/
`COL_Img` varchar(255) NOT NULL default '', 
`COL_Sorting` int(11) NOT NULL default '0', /*排序*/
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_productspecifications VALUES('1','尺码','女鞋','36|37|38|39','1','','99','2015-1-1 12:00:00');
INSERT INTO emmm_productspecifications VALUES('2','颜色','女鞋','红色|白色|黑色','1','','99','2015-1-1 12:00:00');


DROP TABLE IF EXISTS emmm_productset;
CREATE TABLE `emmm_productset` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Pattern` int(11) NOT NULL default '0', /*1产品展示模式 2商城模式*/
`COL_Scheme` int(11) NOT NULL default '0', /*1统一价格 2详细价格*/
`COL_Stock` int(11) NOT NULL default '0', /*库存数量报警*/
`COL_buy` int(11) NOT NULL default '0', /*游客是否可以提交订单 1可以 2不可以*/
`COL_Sendout` text, /*发货方式*/
`time` datetime,
`COL_Delivery` int(11) NOT NULL default '0', /*货到付款 0=NO 1=YES*/
`COL_Userbuysms` int(11) NOT NULL default '0',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_productset VALUES('1','2','1','100','2','','2015-1-1 12:00:00','0','0');


DROP TABLE IF EXISTS emmm_webdeploy;
CREATE TABLE `emmm_webdeploy` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Weboff` int(11) NOT NULL default '0', /*开站开关 1等于开 2关*/
`COL_Webofftext` text,
`COL_Webrewrite` int(11) NOT NULL default '0', /*伪静态开关 1等于开 2关*/
`COL_Webpage` text, /*翻页*/
`COL_Webkeywords` int(11) NOT NULL default '0', /*关键词优化*/
`COL_Webkeywordsto` text,
`COL_Webdescriptions` text,
`COL_Webfenci` int(11) NOT NULL default '0', /*分词开关 1等于开 2关*/
`COL_Webservice` varchar(255) NOT NULL default '',
`COL_Webocomment` int(11) NOT NULL default '2', /*其它评论开关 1等于开 2关 3登录可以评论*/
`COL_Webpcomment` int(11) NOT NULL default '2', /*商品评论开关 1等于开 2关  3登录可以评论 4只有购买者可以评论*/
`COL_Webweight` int(11) NOT NULL default '1', /*权限方式 1权限 2权重*/
`time` datetime,
`COL_Webfile` int(11) NOT NULL default '1', /*删除附件 1不删 2删*/
`COL_Ucenter` int(11) NOT NULL default '0', 
`COL_Searchtime` int(11) NOT NULL default '10',
`COL_Home` varchar(255) NOT NULL default 'cn|cn|cn', /*网站默认语言*/
`COL_Sensitive` text, /*网站过滤敏感词*/
`COL_Bookuser` int(11) NOT NULL default '0', 
`COL_Adminrecord` text,
`COL_Pagestype` int(11) NOT NULL default '0',
`COL_Pages` text NOT NULL,
`COL_Pagefont` varchar(255) NOT NULL default '',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO emmm_webdeploy VALUES('1','1','','2','20,20,20,20,20,20,20','1','Emmm','Emmm','2','default','2','4','1','2015-1-1 12:00:00','1','0','10','cn|cn|cn','傻逼|二货|狗屎|去死','0','请输入建站备忘事项!','0','<style type="text/css">.emmm_page { font-size:14px^ margin:20px auto 0 auto^ float:left^ clear:both^}.emmm_page a { padding:8px 15px^ float:left^ margin-right:10px^ border:1px #D1D1D1 solid^ background:#f4f4f4^ color:#666^}.emmm_page .me { padding:8px 15px^ float:left^ margin-right:10px^ border:1px #f4f4f4 solid^ background:#D1D1D1^ color:#666^ font-weight:bold^}.emmm_page a:hover {background:#D1D1D1^ color:#666^}.emmm_dian{ padding:8px 15px^ float:left^ margin-right:10px^ color:#666^}.emmm_page .disabled{ padding:8px 15px^ float:left^ margin-right:10px^ border:1px #f4f4f4 solid^ background:#D1D1D1^ color:#666^}.emmm_page .disabled2{background:#f4f4f4^ color:#666^}</style>','上一页|下一页');


DROP TABLE IF EXISTS emmm_orders;
CREATE TABLE `emmm_orders` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Ordersname` text, 
`COL_Ordersid` int(11) NOT NULL default '0', 
`COL_Ordersnum` int(11) NOT NULL default '0', 
`COL_Ordersemail` varchar(255) NOT NULL default '', 
`COL_Ordersusername` varchar(255) NOT NULL default '', 
`COL_Ordersusertel` varchar(255) NOT NULL default '', 
`COL_Ordersuseradd` text, 
`COL_Ordersusetext` text, 
`COL_Ordersproductatt` text, 
`COL_Orderswebmarket` decimal(10,2) NOT NULL default '0',
`COL_Ordersusermarket` decimal(10,2) NOT NULL default '0',
`COL_Ordersweight` int(11) NOT NULL default '1', /*重量*/
`COL_Ordersfreight` int(11) NOT NULL default '1', /*运费价格*/
`COL_Ordersexpress` varchar(255) NOT NULL default '', 
`COL_Ordersexpressnum` varchar(255) NOT NULL default '', 
`time` datetime,
`COL_Ordersnumber` varchar(255) NOT NULL default '', 
`COL_Orderspay` int(11) NOT NULL default '1',  /*1 未付款 2已付款*/
`COL_Orderssend` int(11) NOT NULL default '1',  /*1 未发货 2已发货*/
`COL_Ordersgotime` datetime,
`COL_Integralok` int(11) NOT NULL default '0', /*是否允许用积分对换 0=普通商品 1=积分兑换*/
`COL_Sign` int(11) NOT NULL default '0', /*是否签收*/
`COL_Ordersclassid` int(11) NOT NULL default '0',
`COL_Ordersadminoper` int(11) NOT NULL default '0',
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_shoppingcart;
CREATE TABLE `emmm_shoppingcart` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Shopproductid` int(11) NOT NULL default '0', 
`COL_Shopnum` int(11) NOT NULL default '0', 
`COL_Shopusername` varchar(255) NOT NULL default '', 
`COL_Shopatt` text, 
`COL_Shopkc` varchar(255) NOT NULL default '', 
`COL_Shophh` varchar(255) NOT NULL default '', 
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS emmm_api;
CREATE TABLE `emmm_api` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Key` text,  
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_freight;
CREATE TABLE `emmm_freight` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Freightname` varchar(255) NOT NULL default '', 
`COL_Freighttext` text,  
`COL_Freightdefault` int(11) NOT NULL default '0', 
`COL_Freightweight` int(11) NOT NULL default '0', 
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_search;
CREATE TABLE `emmm_search` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Searchtext` text,  
`COL_Searchclick` int(11) NOT NULL default '0', 
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_comment;
CREATE TABLE `emmm_comment` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Content` text,  /*内容*/
`COL_Class` int(11) NOT NULL default '0', /*分类*/
`COL_Type` varchar(255) NOT NULL default '', /*类别*/
`COL_Name` varchar(255) NOT NULL default '', /*姓名*/
`COL_Ip` varchar(255) NOT NULL default '', /*IP*/
`COL_Vote` int(11) NOT NULL default '0', /*好评*/
`COL_Scoring` varchar(255) NOT NULL default '', /*打分*/
`COL_Gocontent` text,  /*回复*/
`COL_Gotime` varchar(255) NOT NULL default '', /*回复时间*/
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_plus;
CREATE TABLE `emmm_plus` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Name` varchar(255) NOT NULL default '', /*插件名称*/
`COL_Version` varchar(255) NOT NULL default '', /*插件版本*/
`COL_Versiondate` varchar(255) NOT NULL default '', /*更新日期*/
`COL_Author` varchar(255) NOT NULL default '', /*插件作者*/
`COL_Fraction` varchar(255) NOT NULL default '', /*分数*/
`COL_About` text, /*插件介绍*/
`COL_Pluspath` text, /*管理路径*/
`COL_Time` date, /*安装日期*/
`COL_Off` int(11) NOT NULL default '1', /* 1关闭 2开启*/
`COL_Plugid` varchar(255) NOT NULL default '', /* 插件ID*/
`COL_Plugclass` varchar(255) NOT NULL default '', /* 插件类型*/
`COL_Plugmysql` varchar(255) NOT NULL default '', /* 插件数据表*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_integral;
CREATE TABLE `emmm_integral` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Iid` int(11) NOT NULL default '0', /* 产品ID*/
`COL_Iname` varchar(255) NOT NULL default '', /*产品名称*/
`COL_Imarket` decimal(10,2) NOT NULL default '0',/*产品价格*/
`COL_Iwebmarket` decimal(10,2) NOT NULL default '0',/*本站价格*/
`COL_Iintegral` decimal(10,2) NOT NULL default '0', /*积分*/
`COL_Ivirtual` int(11) NOT NULL default '0', /*虚拟实物 0=实物 1=虚拟*/
`COL_Iconfirm` int(11) NOT NULL default '0', /*确认领取 0=未领 1=领取*/
`COL_Iuseremail` varchar(255) NOT NULL default '', /*会员账号*/
`COL_Iadmin` int(11) NOT NULL default '0', /*管理权限 0=会员 1=管理*/
`COL_ITime` varchar(255) NOT NULL default '', /*领取时间*/
`time` datetime, /*产生时间*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_usershopadd;
CREATE TABLE `emmm_usershopadd` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Add` varchar(255) NOT NULL default '', /*地址*/
`COL_Addtel` varchar(255) NOT NULL default '', /*电话*/
`COL_Addname` varchar(255) NOT NULL default '', /*姓名*/
`COL_Adduser` varchar(255) NOT NULL default '', /*归属*/
`COL_Addindex` int(11) NOT NULL default '0', /*默认*/
`time` datetime, /*日期*/
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_coupon;
CREATE TABLE `emmm_coupon` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Title` varchar(255) NOT NULL default '', /*优惠券标题*/
`COL_Money` decimal(10,2) NOT NULL default '0', /*优惠券金额*/
`COL_Timewin` datetime,  /*时间限制*/
`COL_Moneygo` decimal(10,2) NOT NULL default '0',  /*满金额使用*/
`COL_Content` text, /*描述*/
`COL_Type` int(11) NOT NULL default '0', /*类型 0=全部领取 1=向指定用户发放*/
`COL_Md` varchar(255) NOT NULL default '', /*MD5校验值*/
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_couponlist;
CREATE TABLE `emmm_couponlist` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Couponid` int(11) NOT NULL default '0', /*优惠券ID*/
`COL_Username` varchar(255) NOT NULL default '', /*领取的会员账户*/
`COL_Type` int(11) NOT NULL default '0', /*使用 0=未用 1=已用*/
`COL_Timewin` datetime,  /*时间限制*/
`COL_Moneygo` decimal(10,2) NOT NULL default '0',  /*满金额使用*/
`COL_Md` varchar(255) NOT NULL default '', /*MD5校验值*/
`COL_Time` datetime,  /*使用时间*/
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS emmm_orderslist;
CREATE TABLE `emmm_orderslist` (
`id` int(10) unsigned NOT NULL auto_increment,
`COL_Ordersnum` varchar(255) NOT NULL default '', /*统一订单号*/
`COL_Ordersid` varchar(255) NOT NULL default '', /*订单ID集合*/
`COL_Ordersusername` varchar(255) NOT NULL default '', /*收件人姓名*/
`COL_Ordersusertel` varchar(255) NOT NULL default '', /*收件人电话*/
`COL_Ordersuseradd` varchar(255) NOT NULL default '', /*收件人地址*/
`COL_Orderscouponmoney` decimal(10,2) NOT NULL default '0',  /*优惠券金额*/
`COL_Orderscouponid` int(11) NOT NULL default '0', /*优惠券ID*/
`COL_Ordersuser` varchar(255) NOT NULL default '', /*订单归属者*/
`time` datetime,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


/*索引*/
ALTER TABLE  `emmm_article` ADD INDEX (`COL_Class`);
ALTER TABLE  `emmm_article` ADD INDEX (`COL_Callback`);
ALTER TABLE  `emmm_article` ADD INDEX (`COL_Lang`);
ALTER TABLE  `emmm_article` ADD INDEX (`COL_Attribute`);
ALTER TABLE  `emmm_article` ADD INDEX (`COL_Articletitle`);
ALTER TABLE  `emmm_article` ADD INDEX (`COL_Sorting`);

ALTER TABLE  `emmm_product` ADD INDEX (`COL_Class`);
ALTER TABLE  `emmm_product` ADD INDEX (`COL_Down`);
ALTER TABLE  `emmm_product` ADD INDEX (`COL_Lang`);
ALTER TABLE  `emmm_product` ADD INDEX (`COL_Attribute`);
ALTER TABLE  `emmm_product` ADD INDEX (`COL_Brand`);
ALTER TABLE  `emmm_product` ADD INDEX (`COL_Sorting`);

ALTER TABLE  `emmm_down` ADD INDEX (`COL_Class`);
ALTER TABLE  `emmm_down` ADD INDEX (`COL_Callback`);
ALTER TABLE  `emmm_down` ADD INDEX (`COL_Lang`);
ALTER TABLE  `emmm_down` ADD INDEX (`COL_Attribute`);
ALTER TABLE  `emmm_down` ADD INDEX (`COL_Downtitle`);
ALTER TABLE  `emmm_down` ADD INDEX (`COL_Sorting`);

ALTER TABLE  `emmm_job` ADD INDEX (`COL_Class`);
ALTER TABLE  `emmm_job` ADD INDEX (`COL_Callback`);
ALTER TABLE  `emmm_job` ADD INDEX (`COL_Lang`);
ALTER TABLE  `emmm_job` ADD INDEX (`COL_Attribute`);
ALTER TABLE  `emmm_job` ADD INDEX (`COL_Jobtitle`);
ALTER TABLE  `emmm_job` ADD INDEX (`COL_Sorting`);

ALTER TABLE  `emmm_photo` ADD INDEX (`COL_Class`);
ALTER TABLE  `emmm_photo` ADD INDEX (`COL_Callback`);
ALTER TABLE  `emmm_photo` ADD INDEX (`COL_Lang`);
ALTER TABLE  `emmm_photo` ADD INDEX (`COL_Attribute`);
ALTER TABLE  `emmm_photo` ADD INDEX (`COL_Phototitle`);
ALTER TABLE  `emmm_photo` ADD INDEX (`COL_Sorting`);

ALTER TABLE  `emmm_video` ADD INDEX (`COL_Class`);
ALTER TABLE  `emmm_video` ADD INDEX (`COL_Callback`);
ALTER TABLE  `emmm_video` ADD INDEX (`COL_Lang`);
ALTER TABLE  `emmm_video` ADD INDEX (`COL_Attribute`);
ALTER TABLE  `emmm_video` ADD INDEX (`COL_Videotitle`);
ALTER TABLE  `emmm_video` ADD INDEX (`COL_Sorting`);

ALTER TABLE  `emmm_column` ADD INDEX (`COL_Hide`);
ALTER TABLE  `emmm_column` ADD INDEX (`COL_Lang`);
ALTER TABLE  `emmm_column` ADD INDEX (`COL_Uid`);
ALTER TABLE  `emmm_column` ADD INDEX (`COL_Sorting`);

ALTER TABLE  `emmm_book` ADD INDEX (`COL_Bookclass`);
ALTER TABLE  `emmm_book` ADD INDEX (`COL_Booklang`);

ALTER TABLE  `emmm_user` ADD INDEX (`COL_Useremail`);
ALTER TABLE  `emmm_user` ADD INDEX (`COL_Userpass`);
ALTER TABLE  `emmm_user` ADD INDEX (`COL_Usertel`);
ALTER TABLE  `emmm_user` ADD INDEX (`COL_Userstatus`);
ALTER TABLE  `emmm_user` ADD INDEX (`COL_Usercode`);

ALTER TABLE  `emmm_usermessage` ADD INDEX (`COL_Usersend`);
ALTER TABLE  `emmm_usermessage` ADD INDEX (`COL_Usercollect`);

ALTER TABLE  `emmm_orders` ADD INDEX (`COL_Ordersid`);
ALTER TABLE  `emmm_orders` ADD INDEX (`COL_Ordersemail`);
ALTER TABLE  `emmm_orders` ADD INDEX (`COL_Ordersnumber`);
ALTER TABLE  `emmm_orders` ADD INDEX (`COL_Orderspay`);
ALTER TABLE  `emmm_orders` ADD INDEX (`COL_Orderssend`);
ALTER TABLE  `emmm_orders` ADD INDEX (`COL_Sign`);
ALTER TABLE  `emmm_orders` ADD INDEX (`COL_Ordersclassid`);
ALTER TABLE  `emmm_orders` ADD INDEX (`COL_Ordersadminoper`);
