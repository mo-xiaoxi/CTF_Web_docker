UPDATE `emmm_web` set 
 `COL_Weblogo` = 'function/uploadfile/emmm888/logo.png',
 `COL_Webname` = '辉神', 
 `COL_Webadd` = '辉神', 
 `COL_Webtel` = '1111111', 
 `COL_Webmobi` = '1111111', 
 `COL_Webfax` = '11111', 
 `COL_Webemail` = '491565693@qq.com', 
 `COL_Webzip` = '11111', 
 `COL_Webqq` = '11111', 
 `COL_Weblinkman` = '11111', 
 `COL_Webicp` = '11111' 
 `COL_Webstatistics` = '',
 `COL_Websitemin` = '【Emmm】'
  where id = 1;

INSERT INTO `emmm_column` (`id`, `COL_Uid`, `COL_Lang`, `COL_Columntitle`, `COL_Columntitleto`, `COL_Model`, `COL_Templist`, `COL_Tempview`, `COL_Url`, `COL_About`, `COL_Hide`, `COL_Sorting`, `COL_Briefing`, `COL_Img`, `COL_Userright`, `COL_Weight`, `COL_Adminopen`) VALUES

(1, 0, 'cn', '网站首页', '', 'weburl', '', '', '/', '', '0', '0', '', '', '0', '0', '0,1'),
(2, 0, 'cn', '企业商城', '', 'weburl', '', '', '?cn-shop.html', '', 0, 2, '', '', '0', '0', '0,1'),
(3, 0, 'cn', '公司新闻', '', 'article', 'cn_article.html', 'cn_articleview.html', '', '', 0, 3, '', '', '0', '0', '0,1'),
(4, 0, 'cn', '公司产品', '', 'product', 'cn_product.html', 'cn_productview.html', '', '', 0, 4, '', '', '0', '0', '0,1'),
(5, 0, 'cn', '公司案例', '', 'photo', 'cn_photo.html', 'cn_photoview.html', '', '', 0, 5, '', '', '0', '0', '0,1'),
(6, 0, 'cn', '视频展示', '', 'video', 'cn_video.html', 'cn_videoview.html', '', '', 0, 6, '', '', '0', '0', '0,1'),
(7, 0, 'cn', '资料下载', '', 'down', 'cn_down.html', 'cn_downview.html', '', '', 0, 7, '', '', '0', '0', '0,1'),
(8, 0, 'cn', '在线招聘', '', 'job', 'cn_job.html', 'cn_jobview.html', '', '', 0, 8, '', '', '0', '0', '0,1'),
(9, 0, 'cn', '关于我们', '', 'about', '', 'cn_about.html', '', '<br>', 0, 9, '', '', '0', '0', '0,1'),
(10, 0, 'cn', '在线留言', '', 'weburl', '', '', '?cn-club.html', '', 0, 10, '', '', '0', '0', '0,1'),
(11, 2, 'cn', '积分兑换', '系统栏目', 'product', 'cn_integral.html', 'cn_integralview.html', '', '', 1, 0, '', '', '0', '0', '0,1'),
(12, 2, 'cn', '手机数码', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 1, '', '', '0', '0', '0,1'),
(13, 2, 'cn', '男装女装', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 2, '', '', '0', '0', '0,1'),
(14, 2, 'cn', '鞋靴箱包', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 3, '', '', '0', '0', '0,1'),
(15, 2, 'cn', '护外运动', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 4, '', '', '0', '0', '0,1'),
(16, 2, 'cn', '珠宝配饰', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 5, '', '', '0', '0', '0,1'),
(17, 2, 'cn', '护肤彩妆', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 6, '', '', '0', '0', '0,1');

INSERT INTO `emmm_banner` (`id`, `COL_Bannerimg`, `COL_Bannertitle`, `COL_Bannerurl`, `COL_Bannerlang`, `time`, `COL_Bannerclass`, `COL_Bannertext`) VALUES
(1, 'function/uploadfile/emmm888/1.png', 'banner1', '#', 'cn', '2014-12-06 17:27:56', '0', '||'),
(2, 'function/uploadfile/emmm888/2.png', 'banner2', '#', 'cn', '2014-12-06 18:01:55', '1', '||');

INSERT INTO `emmm_link` (`id`, `COL_Linkname`, `COL_Linkurl`, `COL_Linkclass`, `COL_Linkimg`, `COL_Linksorting`, `COL_Linkstate`, `time`) VALUES
(1, 'Emmm', 'http://vidar.club', 'font', 'http://', '99', 1, '2014-12-07 17:49:10'),
(2, 'YidaCMS', 'http://yidacms.com', 'font', 'http://', '99', 1, '2014-12-07 17:49:10');

INSERT INTO `emmm_article` (`id`, `COL_Articletitle`, `COL_Articleauthor`, `COL_Articlesource`, `time`, `COL_Articlecontent`, `COL_Class`, `COL_Lang`, `COL_Tag`, `COL_Sorting`, `COL_Attribute`, `COL_Url`, `COL_Description`, `COL_Click`, `COL_Minimg`, `COL_Callback`) VALUES
(1, '世界，你好！', '', '', '2014-12-07 15:59:33', '世界，你好！', '3', 'cn', '', 99, '', '', '世界，你好！', 0, 'skin/noimage.png', 0),
(2, '世界，你好！', '', '', '2014-12-07 15:59:43', '世界，你好！', '3', 'cn', '', 99, '', '', '世界，你好！', 0, 'skin/noimage.png', 0),
(3, '世界，你好！', '', '', '2014-12-07 16:02:04', '世界，你好！', '3', 'cn', '', 99, '', '', '世界，你好！', 0, 'skin/noimage.png', 0);

INSERT INTO `emmm_product` (`id`, `COL_Class`, `COL_Lang`, `COL_Title`, `COL_Number`, `COL_Goodsno`, `COL_Brand`, `COL_Market`, `COL_Webmarket`, `COL_Stock`, `COL_Usermoney`, `COL_Specificationsid`,`COL_Specificationstitle`, `COL_Specifications`, `COL_Pattribute`, `COL_Minimg`, `COL_Maximg`, `COL_Img`, `COL_Content`, `COL_Down`, `COL_Tag`, `COL_Sorting`, `COL_Attribute`, `COL_Url`, `COL_Description`, `COL_Click`, `time`) VALUES
(1, 12, 'cn', '测试01', 'OP20141209155321', 'OP20141209155321', '', '0.00', '0.00', 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '','', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, '', 99, '', '', '', 0, '2014-12-09 15:54:05'),
(2, 12, 'cn', '测试02', 'OP20141209155321', 'OP20141209155321', '', '0.00', '0.00', 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '','', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, '', 99, '', '', '', 0, '2014-12-09 15:54:05'),
(3, 12, 'cn', '测试03', 'OP20141209155321', 'OP20141209155321', '', '0.00', '0.00', 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '','', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, '', 99, '', '', '', 0, '2014-12-09 15:54:05'),
(4, 12, 'cn', '测试04', 'OP20141209155321', 'OP20141209155321', '', '0.00', '0.00', 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '','', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, '', 99, '', '', '', 0, '2014-12-09 15:54:05'),
(5, 12, 'cn', '测试05', 'OP20141209155321', 'OP20141209155321', '', '0.00', '0.00', 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '','', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, '', 99, '', '', '', 0, '2014-12-09 15:54:05'),
(6, 12, 'cn', '测试06', 'OP20141209155321', 'OP20141209155321', '', '0.00', '0.00', 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '','', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, '', 99, '', '', '', 0, '2014-12-09 15:54:05'),
(7, 12, 'cn', '测试07', 'OP20141209155321', 'OP20141209155321', '', '0.00', '0.00', 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '','', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, '', 99, '', '', '', 0, '2014-12-09 15:54:05'),
(8, 12, 'cn', '测试08', 'OP20141209155321', 'OP20141209155321', '', '0.00', '0.00', 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '','', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, '', 99, '', '', '', 0, '2014-12-09 15:54:05');


INSERT INTO `emmm_photo` (`id`, `COL_Phototitle`, `time`, `COL_Photocminimg`, `COL_Photoimg`, `COL_Photocontent`, `COL_Class`, `COL_Lang`, `COL_Tag`, `COL_Sorting`, `COL_Attribute`, `COL_Url`, `COL_Description`, `COL_Click`, `COL_Callback`) VALUES
(1, '测试01', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', '5', 'cn', '', 99, '', '', '测试02', 0, 0),
(2, '测试02', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', '5', 'cn', '', 99, '', '', '测试02', 0, 0),
(3, '测试03', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', '5', 'cn', '', 99, '', '', '测试02', 0, 0),
(4, '测试04', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', '5', 'cn', '', 99, '', '', '测试02', 0, 0),
(5, '测试05', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', '5', 'cn', '', 99, '', '', '测试02', 0, 0);

INSERT INTO `emmm_api` (`id`, `COL_Key`) VALUES(1, '快递100接口|2|key值');
INSERT INTO `emmm_api` (`id`, `COL_Key`) VALUES(2, '支付宝服务窗API接口|2|0|0');
INSERT INTO `emmm_api` (`id`, `COL_Key`) VALUES(3, '支付宝[即时到账]接口|2|0|0|0');
INSERT INTO `emmm_api` (`id`, `COL_Key`) VALUES(4, '银联[网银支付]接口|2|0|0|0');
INSERT INTO `emmm_api` (`id`, `COL_Key`) VALUES(5, '微信登录API接口|2|0|0');
INSERT INTO `emmm_api` (`id`, `COL_Key`) VALUES(6, '手机短信API接口|2|0|0|sendsms|regsms');
INSERT INTO `emmm_api` (`id`, `COL_Key`) VALUES(7, 'QQ登录API接口|2|0|0');
INSERT INTO `emmm_api` (`id`, `COL_Key`) VALUES(8, '支付宝[移动支付]接口|2|0|0');
INSERT INTO `emmm_api` (`id`, `COL_Key`) VALUES(9, '电脑端微信扫码支付|2|0|0|0|0');
INSERT INTO `emmm_api` (`id`,`COL_Key`) VALUES(10,'微信手机端H5支付接口|2|0|0|0|0');

/*
北京市|天津市|上海市|重庆市|国外|河北省|河南省|云南省|辽宁省|黑龙江省|湖南省|安徽省|山东省|新疆|江苏省|浙江省|江西省|湖北省|广西|甘肃省|山西省|内蒙古|陕西省|吉林省|福建省|贵州省|广东省|青海省|西藏|四川省|宁夏|海南省|台湾省|香港|澳门
*/
INSERT INTO `emmm_freight` (`id`, `COL_Freightname`, `COL_Freighttext`, `COL_Freightdefault`, `COL_Freightweight`) VALUES(1, '包邮模板(官方默认)','0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0','1','0');
