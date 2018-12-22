/*
 Navicat Premium Data Transfer

 Source Server         : 本地
 Source Server Type    : MySQL
 Source Server Version : 100310
 Source Host           : localhost:3306
 Source Schema         : emmm

 Target Server Type    : MySQL
 Target Server Version : 100310
 File Encoding         : 65001

 Date: 14/12/2018 19:09:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for emmm_ad
-- ----------------------------
DROP TABLE IF EXISTS `emmm_ad`;
CREATE TABLE `emmm_ad`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Adtitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Adcontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Adclass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Adpiaofui` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Adpiaofuu` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Adyouxiat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Adyouxiaf` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Adduilianli` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Adduilianlu` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Adduilianri` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Adduilianru` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Adstateo` int(11) NOT NULL DEFAULT 0,
  `COL_Adstatet` int(11) NOT NULL DEFAULT 0,
  `COL_Adstates` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_ad
-- ----------------------------
INSERT INTO `emmm_ad` VALUES (1, '全站顶部', '', '', '../../skin/headerbanner.gif', '', '', '', '', '', '', '', 2, 2, 2, '2015-01-01 12:00:00');
INSERT INTO `emmm_ad` VALUES (2, '全站底部', '', '', '../../skin/footerbanner.gif', '', '', '', '', '', '', '', 2, 2, 2, '2015-01-01 12:00:00');
INSERT INTO `emmm_ad` VALUES (3, '信息列表页', '', '', '../../skin/threadlist.gif', '', '', '', '', '', '', '', 2, 2, 2, '2015-01-01 12:00:00');
INSERT INTO `emmm_ad` VALUES (4, '信息内容页', '', '', '../../skin/article.gif', '', '', '', '', '', '', '', 2, 2, 2, '2015-01-01 12:00:00');
INSERT INTO `emmm_ad` VALUES (5, '特殊广告', '', '', '', '', '', '', '', '', '', '', 2, 2, 2, '2015-01-01 12:00:00');
INSERT INTO `emmm_ad` VALUES (6, '会员中心登录左侧广告位', '', '', '../../skin/userrightad.gif', '', '', '', '', '', '', '', 2, 2, 2, '2015-01-01 12:00:00');

-- ----------------------------
-- Table structure for emmm_admin
-- ----------------------------
DROP TABLE IF EXISTS `emmm_admin`;
CREATE TABLE `emmm_admin`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Adminname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Adminpass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Adminpower` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Admin` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_admin
-- ----------------------------
INSERT INTO `emmm_admin` VALUES (1, 'admin', 'c3284d0f94606de1', '01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60', 1, '2018-12-14 18:27:43');

-- ----------------------------
-- Table structure for emmm_adminclick
-- ----------------------------
DROP TABLE IF EXISTS `emmm_adminclick`;
CREATE TABLE `emmm_adminclick`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Click` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_adminclick
-- ----------------------------
INSERT INTO `emmm_adminclick` VALUES (1, '数据库操作', 'emmm_bak.php?id=emmm', 0);

-- ----------------------------
-- Table structure for emmm_api
-- ----------------------------
DROP TABLE IF EXISTS `emmm_api`;
CREATE TABLE `emmm_api`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Key` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_api
-- ----------------------------
INSERT INTO `emmm_api` VALUES (1, '快递100接口|2|key值', NULL);
INSERT INTO `emmm_api` VALUES (2, '支付宝服务窗API接口|2|0|0', NULL);
INSERT INTO `emmm_api` VALUES (3, '支付宝[即时到账]接口|2|0|0|0', NULL);
INSERT INTO `emmm_api` VALUES (4, '银联[网银支付]接口|2|0|0|0', NULL);
INSERT INTO `emmm_api` VALUES (5, '微信登录API接口|2|0|0', NULL);
INSERT INTO `emmm_api` VALUES (6, '手机短信API接口|2|0|0|sendsms|regsms', NULL);
INSERT INTO `emmm_api` VALUES (7, 'QQ登录API接口|2|0|0', NULL);
INSERT INTO `emmm_api` VALUES (8, '支付宝[移动支付]接口|2|0|0', NULL);
INSERT INTO `emmm_api` VALUES (9, '电脑端微信扫码支付|2|0|0|0|0', NULL);
INSERT INTO `emmm_api` VALUES (10, '微信手机端H5支付接口|2|0|0|0|0', NULL);

-- ----------------------------
-- Table structure for emmm_article
-- ----------------------------
DROP TABLE IF EXISTS `emmm_article`;
CREATE TABLE `emmm_article`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Articletitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Articleauthor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Articlesource` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Articlecontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Class` int(11) NOT NULL DEFAULT 0,
  `COL_Lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT 0,
  `COL_Attribute` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Click` int(11) NOT NULL DEFAULT 0,
  `COL_Minimg` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Callback` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Class`(`COL_Class`) USING BTREE,
  INDEX `COL_Callback`(`COL_Callback`) USING BTREE,
  INDEX `COL_Lang`(`COL_Lang`) USING BTREE,
  INDEX `COL_Attribute`(`COL_Attribute`) USING BTREE,
  INDEX `COL_Articletitle`(`COL_Articletitle`) USING BTREE,
  INDEX `COL_Sorting`(`COL_Sorting`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_article
-- ----------------------------
INSERT INTO `emmm_article` VALUES (1, '世界，你好！', '', '', '2014-12-07 15:59:33', '世界，你好！', 3, 'cn', '', 99, '', '', '世界，你好！', 0, 'skin/noimage.png', 0);
INSERT INTO `emmm_article` VALUES (2, '世界，你好！', '', '', '2014-12-07 15:59:43', '世界，你好！', 3, 'cn', '', 99, '', '', '世界，你好！', 0, 'skin/noimage.png', 0);
INSERT INTO `emmm_article` VALUES (3, '世界，你好！', '', '', '2014-12-07 16:02:04', '世界，你好！', 3, 'cn', '', 99, '', '', '世界，你好！', 0, 'skin/noimage.png', 0);

-- ----------------------------
-- Table structure for emmm_banner
-- ----------------------------
DROP TABLE IF EXISTS `emmm_banner`;
CREATE TABLE `emmm_banner`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Bannerimg` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Bannertitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Bannerurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Bannerlang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Bannerclass` int(11) NOT NULL DEFAULT 0,
  `COL_Bannertext` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_banner
-- ----------------------------
INSERT INTO `emmm_banner` VALUES (1, 'function/uploadfile/emmm888/1.png', 'banner1', '#', 'cn', '2014-12-06 17:27:56', 0, '||');
INSERT INTO `emmm_banner` VALUES (2, 'function/uploadfile/emmm888/2.png', 'banner2', '#', 'cn', '2014-12-06 18:01:55', 1, '||');

-- ----------------------------
-- Table structure for emmm_book
-- ----------------------------
DROP TABLE IF EXISTS `emmm_book`;
CREATE TABLE `emmm_book`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Bookcontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Bookname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Booktel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Bookip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Bookclass` int(11) NOT NULL DEFAULT 0,
  `COL_Booklang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Bookreply` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Bookclass`(`COL_Bookclass`) USING BTREE,
  INDEX `COL_Booklang`(`COL_Booklang`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_booksection
-- ----------------------------
DROP TABLE IF EXISTS `emmm_booksection`;
CREATE TABLE `emmm_booksection`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Booksectiontitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Booksectioncontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Booksectionlanguage` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Booksectionsorting` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_booksection
-- ----------------------------
INSERT INTO `emmm_booksection` VALUES (1, '问题反馈', '在这里可以把您碰到的问题反馈给我们。', 'cn', 0, '2015-01-01 12:00:00');
INSERT INTO `emmm_booksection` VALUES (2, '客户服务', '您有什么需求或是需要什么帮助，可以在这里留言哦！', 'cn', 1, '2015-01-01 12:00:00');

-- ----------------------------
-- Table structure for emmm_column
-- ----------------------------
DROP TABLE IF EXISTS `emmm_column`;
CREATE TABLE `emmm_column`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Uid` int(11) NOT NULL DEFAULT 0,
  `COL_Lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Columntitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Columntitleto` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Model` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Templist` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Tempview` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_About` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Hide` int(11) NOT NULL DEFAULT 0,
  `COL_Sorting` int(11) NOT NULL DEFAULT 0,
  `COL_Briefing` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userright` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Weight` int(11) NOT NULL DEFAULT 0,
  `COL_Adminopen` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Hide`(`COL_Hide`) USING BTREE,
  INDEX `COL_Lang`(`COL_Lang`) USING BTREE,
  INDEX `COL_Uid`(`COL_Uid`) USING BTREE,
  INDEX `COL_Sorting`(`COL_Sorting`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_column
-- ----------------------------
INSERT INTO `emmm_column` VALUES (1, 0, 'cn', '网站首页', '', 'weburl', '', '', '/', '', 0, 0, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (2, 0, 'cn', '企业商城', '', 'weburl', '', '', '?cn-shop.html', '', 0, 2, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (3, 0, 'cn', '公司新闻', '', 'article', 'cn_article.html', 'cn_articleview.html', '', '', 0, 3, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (4, 0, 'cn', '公司产品', '', 'product', 'cn_product.html', 'cn_productview.html', '', '', 0, 4, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (5, 0, 'cn', '公司案例', '', 'photo', 'cn_photo.html', 'cn_photoview.html', '', '', 0, 5, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (6, 0, 'cn', '视频展示', '', 'video', 'cn_video.html', 'cn_videoview.html', '', '', 0, 6, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (7, 0, 'cn', '资料下载', '', 'down', 'cn_down.html', 'cn_downview.html', '', '', 0, 7, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (8, 0, 'cn', '在线招聘', '', 'job', 'cn_job.html', 'cn_jobview.html', '', '', 0, 8, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (9, 0, 'cn', '关于我们', '', 'about', '', 'cn_about.html', '', '<p>5分钟<br>即可开启企业网购官网，树立品牌形象！<br>1秒钟<br>让您的企业网站变成大企业范儿！<br>没错，这就是Emmm！<br>什么是Emmm?<br>Emmm是一款快速、安全、结合电商功能的企业网站建站系统，傲派、OP、OPCMS都是它的名子。<br>Emmm的优势是什么?<br>它：安全，快速。<br>它：有强大的技术后盾<br>它：不仅仅是一个企业建站平台，更是一个电商平台<br>它：理论上可以创建世界上任何国家语言的网站<br>它：等待你更多的发现。<br>Emmm能做什么?<br>简单的说，emmm可以快速、安全的开启一个大气、功能强大的企业网站，它不但可以帮助您的企业<br>树立形象，还可以实现在您自已的官方网站上展开电子商务。emmm理论上支持创建世界上所有国家语<br>言的网站，是您做外贸的一个好帮手。它还可以像淘宝、小米那样开展电子商城，它还支持文章、商品<br>、图集、下载、招聘、视频等所有满足您建站功能的需求。<br>emmm实现在搭建企业网站的同时，可以让企业在自已的平台上展开电子商务。emmm就是这么任性！<br>Emmm的使命是什么?<br>帮助中国企业搭建官网平台，并在自已的平台上实现电商之路！<br>', 0, 9, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (10, 0, 'cn', '在线留言', '', 'weburl', '', '', '?cn-club.html', '', 0, 10, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (11, 2, 'cn', '积分兑换', '系统栏目', 'product', 'cn_integral.html', 'cn_integralview.html', '', '', 1, 0, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (12, 2, 'cn', '手机数码', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 1, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (13, 2, 'cn', '男装女装', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 2, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (14, 2, 'cn', '鞋靴箱包', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 3, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (15, 2, 'cn', '护外运动', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 4, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (16, 2, 'cn', '珠宝配饰', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 5, '', '', '0', 0, '0,1');
INSERT INTO `emmm_column` VALUES (17, 2, 'cn', '护肤彩妆', '', 'product', 'cn_shoplist.html', 'cn_shopview.html', '', '', 0, 6, '', '', '0', 0, '0,1');

-- ----------------------------
-- Table structure for emmm_comment
-- ----------------------------
DROP TABLE IF EXISTS `emmm_comment`;
CREATE TABLE `emmm_comment`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Class` int(11) NOT NULL DEFAULT 0,
  `COL_Type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Vote` int(11) NOT NULL DEFAULT 0,
  `COL_Scoring` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Gocontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Gotime` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_coupon
-- ----------------------------
DROP TABLE IF EXISTS `emmm_coupon`;
CREATE TABLE `emmm_coupon`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Money` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Timewin` datetime(0) NULL DEFAULT NULL,
  `COL_Moneygo` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Type` int(11) NOT NULL DEFAULT 0,
  `COL_Md` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_couponlist
-- ----------------------------
DROP TABLE IF EXISTS `emmm_couponlist`;
CREATE TABLE `emmm_couponlist`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Couponid` int(11) NOT NULL DEFAULT 0,
  `COL_Username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Type` int(11) NOT NULL DEFAULT 0,
  `COL_Timewin` datetime(0) NULL DEFAULT NULL,
  `COL_Moneygo` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Md` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Time` datetime(0) NULL DEFAULT NULL,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_down
-- ----------------------------
DROP TABLE IF EXISTS `emmm_down`;
CREATE TABLE `emmm_down`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Downtitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Downimg` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Downdurl` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Downcontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Downempower` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Downtype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Downlang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Downsize` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Class` int(11) NOT NULL DEFAULT 0,
  `COL_Lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Downmake` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Downsetup` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Downrights` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT 0,
  `COL_Attribute` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Click` int(11) NOT NULL DEFAULT 0,
  `COL_Random` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Callback` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Class`(`COL_Class`) USING BTREE,
  INDEX `COL_Callback`(`COL_Callback`) USING BTREE,
  INDEX `COL_Lang`(`COL_Lang`) USING BTREE,
  INDEX `COL_Attribute`(`COL_Attribute`) USING BTREE,
  INDEX `COL_Downtitle`(`COL_Downtitle`) USING BTREE,
  INDEX `COL_Sorting`(`COL_Sorting`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_freight
-- ----------------------------
DROP TABLE IF EXISTS `emmm_freight`;
CREATE TABLE `emmm_freight`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Freightname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Freighttext` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Freightdefault` int(11) NOT NULL DEFAULT 0,
  `COL_Freightweight` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_freight
-- ----------------------------
INSERT INTO `emmm_freight` VALUES (1, '包邮模板(官方默认)', '0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0|0', 1, 0, NULL);

-- ----------------------------
-- Table structure for emmm_integral
-- ----------------------------
DROP TABLE IF EXISTS `emmm_integral`;
CREATE TABLE `emmm_integral`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Iid` int(11) NOT NULL DEFAULT 0,
  `COL_Iname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Imarket` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Iwebmarket` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Iintegral` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Ivirtual` int(11) NOT NULL DEFAULT 0,
  `COL_Iconfirm` int(11) NOT NULL DEFAULT 0,
  `COL_Iuseremail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Iadmin` int(11) NOT NULL DEFAULT 0,
  `COL_ITime` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_job
-- ----------------------------
DROP TABLE IF EXISTS `emmm_job`;
CREATE TABLE `emmm_job`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Jobtitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Jobwork` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobadd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobnature` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobexperience` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobeducation` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobnumber` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobage` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobwelfare` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobwage` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobcontact` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobtel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Jobcontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Class` int(11) NOT NULL DEFAULT 0,
  `COL_Lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT 0,
  `COL_Attribute` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Click` int(11) NOT NULL DEFAULT 0,
  `COL_Callback` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Class`(`COL_Class`) USING BTREE,
  INDEX `COL_Callback`(`COL_Callback`) USING BTREE,
  INDEX `COL_Lang`(`COL_Lang`) USING BTREE,
  INDEX `COL_Attribute`(`COL_Attribute`) USING BTREE,
  INDEX `COL_Jobtitle`(`COL_Jobtitle`) USING BTREE,
  INDEX `COL_Sorting`(`COL_Sorting`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_lang
-- ----------------------------
DROP TABLE IF EXISTS `emmm_lang`;
CREATE TABLE `emmm_lang`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Font` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Default` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Langtitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Langkeywords` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Langdescription` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_lang
-- ----------------------------
INSERT INTO `emmm_lang` VALUES (1, 'cn', '中文', 'Default', '中文语言唯一标识', '', '', '');

-- ----------------------------
-- Table structure for emmm_link
-- ----------------------------
DROP TABLE IF EXISTS `emmm_link`;
CREATE TABLE `emmm_link`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Linkname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Linkurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Linkclass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Linkimg` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Linksorting` int(11) NOT NULL DEFAULT 0,
  `COL_Linkstate` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_link
-- ----------------------------
INSERT INTO `emmm_link` VALUES (1, 'Emmm', 'http://vidar.club', 'font', 'http://', 99, 1, '2014-12-07 17:49:10');
INSERT INTO `emmm_link` VALUES (2, 'YidaCMS', 'http://yidacms.com', 'font', 'http://', 99, 1, '2014-12-07 17:49:10');

-- ----------------------------
-- Table structure for emmm_mail
-- ----------------------------
DROP TABLE IF EXISTS `emmm_mail`;
CREATE TABLE `emmm_mail`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Mailsmtp` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Mailport` int(11) NOT NULL DEFAULT 0,
  `COL_Mailusermail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Mailuser` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Mailpass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Mailsubject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Mailcontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Mailtype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Mailtitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Mailclass` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_mail
-- ----------------------------
INSERT INTO `emmm_mail` VALUES (1, 'smtp.qq.com', 25, '993141000@qq.com', '993141000', '123456', '这是一封测试邮件', '测试内容', 'HTML', '注册会员邮件提醒', 2);
INSERT INTO `emmm_mail` VALUES (2, 'smtp.qq.com', 25, '993141000@qq.com', '993141000', '123456', '这是一封测试邮件', '测试内容', 'HTML', '提交订单邮件提醒', 2);
INSERT INTO `emmm_mail` VALUES (3, 'smtp.qq.com', 25, '993141000@qq.com', '993141000', '123456', '这是一封测试邮件', '测试内容', 'HTML', '后台发货邮件提醒', 2);
INSERT INTO `emmm_mail` VALUES (4, 'smtp.qq.com', 25, '993141000@qq.com', '993141000', '123456', '您的会员注册验证码', '验证码：#opcms#code#', 'HTML', '用户注册邮件验证码', 2);

-- ----------------------------
-- Table structure for emmm_orders
-- ----------------------------
DROP TABLE IF EXISTS `emmm_orders`;
CREATE TABLE `emmm_orders`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Ordersname` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Ordersid` int(11) NOT NULL DEFAULT 0,
  `COL_Ordersnum` int(11) NOT NULL DEFAULT 0,
  `COL_Ordersemail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Ordersusername` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Ordersusertel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Ordersuseradd` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Ordersusetext` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Ordersproductatt` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Orderswebmarket` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Ordersusermarket` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Ordersweight` int(11) NOT NULL DEFAULT 1,
  `COL_Ordersfreight` int(11) NOT NULL DEFAULT 1,
  `COL_Ordersexpress` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Ordersexpressnum` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Ordersnumber` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Orderspay` int(11) NOT NULL DEFAULT 1,
  `COL_Orderssend` int(11) NOT NULL DEFAULT 1,
  `COL_Ordersgotime` datetime(0) NULL DEFAULT NULL,
  `COL_Integralok` int(11) NOT NULL DEFAULT 0,
  `COL_Sign` int(11) NOT NULL DEFAULT 0,
  `COL_Ordersclassid` int(11) NOT NULL DEFAULT 0,
  `COL_Ordersadminoper` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Ordersid`(`COL_Ordersid`) USING BTREE,
  INDEX `COL_Ordersemail`(`COL_Ordersemail`) USING BTREE,
  INDEX `COL_Ordersnumber`(`COL_Ordersnumber`) USING BTREE,
  INDEX `COL_Orderspay`(`COL_Orderspay`) USING BTREE,
  INDEX `COL_Orderssend`(`COL_Orderssend`) USING BTREE,
  INDEX `COL_Sign`(`COL_Sign`) USING BTREE,
  INDEX `COL_Ordersclassid`(`COL_Ordersclassid`) USING BTREE,
  INDEX `COL_Ordersadminoper`(`COL_Ordersadminoper`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_orderslist
-- ----------------------------
DROP TABLE IF EXISTS `emmm_orderslist`;
CREATE TABLE `emmm_orderslist`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Ordersnum` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Ordersid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Ordersusername` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Ordersusertel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Ordersuseradd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Orderscouponmoney` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Orderscouponid` int(11) NOT NULL DEFAULT 0,
  `COL_Ordersuser` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_photo
-- ----------------------------
DROP TABLE IF EXISTS `emmm_photo`;
CREATE TABLE `emmm_photo`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Phototitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Photocminimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Photoimg` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Photocontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Class` int(11) NOT NULL DEFAULT 0,
  `COL_Lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT 0,
  `COL_Attribute` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Click` int(11) NOT NULL DEFAULT 0,
  `COL_Callback` int(11) NOT NULL DEFAULT 0,
  `COL_Photoname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Class`(`COL_Class`) USING BTREE,
  INDEX `COL_Callback`(`COL_Callback`) USING BTREE,
  INDEX `COL_Lang`(`COL_Lang`) USING BTREE,
  INDEX `COL_Attribute`(`COL_Attribute`) USING BTREE,
  INDEX `COL_Phototitle`(`COL_Phototitle`) USING BTREE,
  INDEX `COL_Sorting`(`COL_Sorting`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_photo
-- ----------------------------
INSERT INTO `emmm_photo` VALUES (1, '测试01', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', 5, 'cn', '', 99, '', '', '测试02', 0, 0, '');
INSERT INTO `emmm_photo` VALUES (2, '测试02', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', 5, 'cn', '', 99, '', '', '测试02', 0, 0, '');
INSERT INTO `emmm_photo` VALUES (3, '测试03', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', 5, 'cn', '', 99, '', '', '测试02', 0, 0, '');
INSERT INTO `emmm_photo` VALUES (4, '测试04', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', 5, 'cn', '', 99, '', '', '测试02', 0, 0, '');
INSERT INTO `emmm_photo` VALUES (5, '测试05', '2014-12-09 16:25:29', 'function/uploadfile/emmm888/ph1.jpg', '', '测试02', 5, 'cn', '', 99, '', '', '测试02', 0, 0, '');

-- ----------------------------
-- Table structure for emmm_plus
-- ----------------------------
DROP TABLE IF EXISTS `emmm_plus`;
CREATE TABLE `emmm_plus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Versiondate` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Author` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Fraction` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_About` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Pluspath` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Time` date NULL DEFAULT NULL,
  `COL_Off` int(11) NOT NULL DEFAULT 1,
  `COL_Plugid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Plugclass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Plugmysql` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_product
-- ----------------------------
DROP TABLE IF EXISTS `emmm_product`;
CREATE TABLE `emmm_product`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Class` int(11) NOT NULL DEFAULT 0,
  `COL_Lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Goodsno` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Brand` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Market` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Webmarket` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Stock` int(11) NOT NULL DEFAULT 0,
  `COL_Usermoney` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Specificationsid` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Specificationstitle` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Specifications` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Pattribute` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Minimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Maximg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Img` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Down` int(11) NOT NULL DEFAULT 0,
  `COL_Weight` int(11) NOT NULL DEFAULT 1,
  `COL_Freight` int(11) NOT NULL DEFAULT 1,
  `COL_Tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT 0,
  `COL_Attribute` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Click` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Integral` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Integralok` int(11) NOT NULL DEFAULT 0,
  `COL_Integralexchange` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Suggest` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Productimgname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Class`(`COL_Class`) USING BTREE,
  INDEX `COL_Down`(`COL_Down`) USING BTREE,
  INDEX `COL_Lang`(`COL_Lang`) USING BTREE,
  INDEX `COL_Attribute`(`COL_Attribute`) USING BTREE,
  INDEX `COL_Brand`(`COL_Brand`) USING BTREE,
  INDEX `COL_Sorting`(`COL_Sorting`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_product
-- ----------------------------
INSERT INTO `emmm_product` VALUES (1, 12, 'cn', '测试01', 'OP20141209155321', 'OP20141209155321', '', 0.00, 0.00, 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '', '', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, 1, 1, '', 99, '', '', '', 0, '2014-12-09 15:54:05', 0.00, 0, 0.00, '', '');
INSERT INTO `emmm_product` VALUES (2, 12, 'cn', '测试02', 'OP20141209155321', 'OP20141209155321', '', 0.00, 0.00, 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '', '', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, 1, 1, '', 99, '', '', '', 0, '2014-12-09 15:54:05', 0.00, 0, 0.00, '', '');
INSERT INTO `emmm_product` VALUES (3, 12, 'cn', '测试03', 'OP20141209155321', 'OP20141209155321', '', 0.00, 0.00, 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '', '', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, 1, 1, '', 99, '', '', '', 0, '2014-12-09 15:54:05', 0.00, 0, 0.00, '', '');
INSERT INTO `emmm_product` VALUES (4, 12, 'cn', '测试04', 'OP20141209155321', 'OP20141209155321', '', 0.00, 0.00, 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '', '', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, 1, 1, '', 99, '', '', '', 0, '2014-12-09 15:54:05', 0.00, 0, 0.00, '', '');
INSERT INTO `emmm_product` VALUES (5, 12, 'cn', '测试05', 'OP20141209155321', 'OP20141209155321', '', 0.00, 0.00, 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '', '', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, 1, 1, '', 99, '', '', '', 0, '2014-12-09 15:54:05', 0.00, 0, 0.00, '', '');
INSERT INTO `emmm_product` VALUES (6, 12, 'cn', '测试06', 'OP20141209155321', 'OP20141209155321', '', 0.00, 0.00, 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '', '', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, 1, 1, '', 99, '', '', '', 0, '2014-12-09 15:54:05', 0.00, 0, 0.00, '', '');
INSERT INTO `emmm_product` VALUES (7, 12, 'cn', '测试07', 'OP20141209155321', 'OP20141209155321', '', 0.00, 0.00, 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '', '', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, 1, 1, '', 99, '', '', '', 0, '2014-12-09 15:54:05', 0.00, 0, 0.00, '', '');
INSERT INTO `emmm_product` VALUES (8, 12, 'cn', '测试08', 'OP20141209155321', 'OP20141209155321', '', 0.00, 0.00, 100, '1:0.00|2:0.00|3:0.00|4:0.00|5:0.00', '', '', '', '', 'function/uploadfile/emmm888/pr1.jpg', 'function/uploadfile/emmm888/ph1.jpg', '', '', 2, 1, 1, '', 99, '', '', '', 0, '2014-12-09 15:54:05', 0.00, 0, 0.00, '', '');

-- ----------------------------
-- Table structure for emmm_productattribute
-- ----------------------------
DROP TABLE IF EXISTS `emmm_productattribute`;
CREATE TABLE `emmm_productattribute`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Text` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Sorting` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_productattribute
-- ----------------------------
INSERT INTO `emmm_productattribute` VALUES (1, '电脑系列', '0', '', 99, '2015-01-01 12:00:00');
INSERT INTO `emmm_productattribute` VALUES (2, '硬盘容量', '1', '500G|800G|1T', 99, '2015-01-01 12:00:00');
INSERT INTO `emmm_productattribute` VALUES (3, '内存容量', '1', '1G|2G|3G', 99, '2015-01-01 12:00:00');

-- ----------------------------
-- Table structure for emmm_productcp
-- ----------------------------
DROP TABLE IF EXISTS `emmm_productcp`;
CREATE TABLE `emmm_productcp`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Vender` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Brand` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Class` int(11) NOT NULL DEFAULT 0,
  `COL_Img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_productset
-- ----------------------------
DROP TABLE IF EXISTS `emmm_productset`;
CREATE TABLE `emmm_productset`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Pattern` int(11) NOT NULL DEFAULT 0,
  `COL_Scheme` int(11) NOT NULL DEFAULT 0,
  `COL_Stock` int(11) NOT NULL DEFAULT 0,
  `COL_buy` int(11) NOT NULL DEFAULT 0,
  `COL_Sendout` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Delivery` int(11) NOT NULL DEFAULT 0,
  `COL_Userbuysms` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_productset
-- ----------------------------
INSERT INTO `emmm_productset` VALUES (1, 2, 1, 100, 2, '', '2015-01-01 12:00:00', 0, 0);

-- ----------------------------
-- Table structure for emmm_productspecifications
-- ----------------------------
DROP TABLE IF EXISTS `emmm_productspecifications`;
CREATE TABLE `emmm_productspecifications`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Titleto` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Value` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Class` int(11) NOT NULL DEFAULT 0,
  `COL_Img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_productspecifications
-- ----------------------------
INSERT INTO `emmm_productspecifications` VALUES (1, '尺码', '女鞋', '36|37|38|39', 1, '', 99, '2015-01-01 12:00:00');
INSERT INTO `emmm_productspecifications` VALUES (2, '颜色', '女鞋', '红色|白色|黑色', 1, '', 99, '2015-01-01 12:00:00');

-- ----------------------------
-- Table structure for emmm_qq
-- ----------------------------
DROP TABLE IF EXISTS `emmm_qq`;
CREATE TABLE `emmm_qq`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_QQname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_QQnumber` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_QQclass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_QQsorting` int(11) NOT NULL DEFAULT 0,
  `COL_QQother` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_search
-- ----------------------------
DROP TABLE IF EXISTS `emmm_search`;
CREATE TABLE `emmm_search`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Searchtext` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Searchclick` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_shoppingcart
-- ----------------------------
DROP TABLE IF EXISTS `emmm_shoppingcart`;
CREATE TABLE `emmm_shoppingcart`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Shopproductid` int(11) NOT NULL DEFAULT 0,
  `COL_Shopnum` int(11) NOT NULL DEFAULT 0,
  `COL_Shopusername` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Shopatt` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Shopkc` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Shophh` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_temp
-- ----------------------------
DROP TABLE IF EXISTS `emmm_temp`;
CREATE TABLE `emmm_temp`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Temppath` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Tempauthor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_temp
-- ----------------------------
INSERT INTO `emmm_temp` VALUES (1, 'default', 'emmm!');

-- ----------------------------
-- Table structure for emmm_user
-- ----------------------------
DROP TABLE IF EXISTS `emmm_user`;
CREATE TABLE `emmm_user`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Useremail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userpass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Usertel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userqq` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userskype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Useraliww` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Useradd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userclass` int(11) NOT NULL DEFAULT 0,
  `COL_Usersource` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userhead` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Usermoney` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Userintegral` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Userip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userproblem` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Useranswer` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userstatus` int(11) NOT NULL DEFAULT 0,
  `COL_Usertext` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `logintime` datetime(0) NULL DEFAULT NULL,
  `COL_Usercode` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Useremail`(`COL_Useremail`) USING BTREE,
  INDEX `COL_Userpass`(`COL_Userpass`) USING BTREE,
  INDEX `COL_Usertel`(`COL_Usertel`) USING BTREE,
  INDEX `COL_Userstatus`(`COL_Userstatus`) USING BTREE,
  INDEX `COL_Usercode`(`COL_Usercode`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_user
-- ----------------------------
INSERT INTO `emmm_user` VALUES (1, 'a@a.com', '14e1b600b1fd579f', '', 'a@a.com', '', '', '', '', 1, '', '', 0.00, 0.00, '::1', '', '', 1, NULL, NULL, 'niu4klvrz47avje44y20181214183451', '2018-12-14 18:34:51');

-- ----------------------------
-- Table structure for emmm_usercontrol
-- ----------------------------
DROP TABLE IF EXISTS `emmm_usercontrol`;
CREATE TABLE `emmm_usercontrol`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Userreg` int(11) NOT NULL DEFAULT 0,
  `COL_Userlogin` int(11) NOT NULL DEFAULT 0,
  `COL_Userprotocol` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Usergroup` int(11) NOT NULL DEFAULT 0,
  `COL_Usermoney` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Useripoff` int(11) NOT NULL DEFAULT 0,
  `COL_Regtyle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'email',
  `COL_Regcode` int(11) NOT NULL DEFAULT 0,
  `COL_Userpassgo` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_usercontrol
-- ----------------------------
INSERT INTO `emmm_usercontrol` VALUES (1, 1, 1, '欢迎您注册成为[.$emmm_web.website.] 用户！', 1, '0|0|0|0', 2, 'email', 0, 0, '2015-01-01 12:00:00');

-- ----------------------------
-- Table structure for emmm_userleve
-- ----------------------------
DROP TABLE IF EXISTS `emmm_userleve`;
CREATE TABLE `emmm_userleve`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Userlevename` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userweight` int(11) NOT NULL DEFAULT 0,
  `COL_Useropen` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_userleve
-- ----------------------------
INSERT INTO `emmm_userleve` VALUES (1, '普通会员', 10, 0);
INSERT INTO `emmm_userleve` VALUES (2, '银牌会员', 20, 0);
INSERT INTO `emmm_userleve` VALUES (3, '金牌会员', 30, 0);
INSERT INTO `emmm_userleve` VALUES (4, '分销商', 40, 0);
INSERT INTO `emmm_userleve` VALUES (5, '代理商', 50, 0);

-- ----------------------------
-- Table structure for emmm_usermessage
-- ----------------------------
DROP TABLE IF EXISTS `emmm_usermessage`;
CREATE TABLE `emmm_usermessage`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Usersend` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Usercollect` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Usercontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Userclass` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Usersend`(`COL_Usersend`) USING BTREE,
  INDEX `COL_Usercollect`(`COL_Usercollect`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_userpay
-- ----------------------------
DROP TABLE IF EXISTS `emmm_userpay`;
CREATE TABLE `emmm_userpay`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Useremail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Usermoney` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Userintegral` decimal(10, 2) NOT NULL DEFAULT 0,
  `COL_Usercontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Useradmin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Uservoucherone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Uservouchertwo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Userpaytype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_userproblem
-- ----------------------------
DROP TABLE IF EXISTS `emmm_userproblem`;
CREATE TABLE `emmm_userproblem`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Userproblem` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_userproblem
-- ----------------------------
INSERT INTO `emmm_userproblem` VALUES (1, '你妈妈的姓名？', '2015-01-01 12:00:00');
INSERT INTO `emmm_userproblem` VALUES (2, '你爸爸的姓名？', '2015-01-01 12:00:00');
INSERT INTO `emmm_userproblem` VALUES (3, '你老婆的姓名？', '2015-01-01 12:00:00');
INSERT INTO `emmm_userproblem` VALUES (4, '你的家乡在哪？', '2015-01-01 12:00:00');
INSERT INTO `emmm_userproblem` VALUES (5, '你的大学是哪家学校？', '2015-01-01 12:00:00');
INSERT INTO `emmm_userproblem` VALUES (6, '你老婆的生日？', '2015-01-01 12:00:00');
INSERT INTO `emmm_userproblem` VALUES (7, '你自已的生日？', '2015-01-01 12:00:00');

-- ----------------------------
-- Table structure for emmm_usershopadd
-- ----------------------------
DROP TABLE IF EXISTS `emmm_usershopadd`;
CREATE TABLE `emmm_usershopadd`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Add` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Addtel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Addname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Adduser` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Addindex` int(11) NOT NULL DEFAULT 0,
  `time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_video
-- ----------------------------
DROP TABLE IF EXISTS `emmm_video`;
CREATE TABLE `emmm_video`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Videotitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Videoimg` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Videovurl` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Videoformat` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Videowidth` int(11) NOT NULL DEFAULT 0,
  `COL_Videoheight` int(11) NOT NULL DEFAULT 0,
  `COL_Videocontent` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Class` int(11) NOT NULL DEFAULT 0,
  `COL_Lang` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Sorting` int(11) NOT NULL DEFAULT 0,
  `COL_Attribute` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Click` int(11) NOT NULL DEFAULT 0,
  `COL_Callback` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `COL_Class`(`COL_Class`) USING BTREE,
  INDEX `COL_Callback`(`COL_Callback`) USING BTREE,
  INDEX `COL_Lang`(`COL_Lang`) USING BTREE,
  INDEX `COL_Attribute`(`COL_Attribute`) USING BTREE,
  INDEX `COL_Videotitle`(`COL_Videotitle`) USING BTREE,
  INDEX `COL_Sorting`(`COL_Sorting`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emmm_wap
-- ----------------------------
DROP TABLE IF EXISTS `emmm_wap`;
CREATE TABLE `emmm_wap`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Website` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Weblogo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webkeywords` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Webdescriptions` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Weburl` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_wap
-- ----------------------------
INSERT INTO `emmm_wap` VALUES (1, '我的手机网站', 'function/uploadfile/emmm888/logo.png', '', '', 'yes');

-- ----------------------------
-- Table structure for emmm_watermark
-- ----------------------------
DROP TABLE IF EXISTS `emmm_watermark`;
CREATE TABLE `emmm_watermark`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Watermarkimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Watermarkfont` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Watermarkcolor` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Watermarksize` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Watermarkposition` int(11) NOT NULL DEFAULT 0,
  `COL_Watermarkoff` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_watermark
-- ----------------------------
INSERT INTO `emmm_watermark` VALUES (1, 'watermark.png', 'vidar.club', '#000000', '5', 9, 2);

-- ----------------------------
-- Table structure for emmm_web
-- ----------------------------
DROP TABLE IF EXISTS `emmm_web`;
CREATE TABLE `emmm_web`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Website` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Weburl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Weblogo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webadd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webtel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webmobi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webfax` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webemail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webzip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webqq` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Weblinkman` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webicp` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webstatistics` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Webtime` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webemmmurl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webemmmcode` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Webemmmu` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Webemmmp` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Websitemin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Weixin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Weixinerweima` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Alipayname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_web
-- ----------------------------
INSERT INTO `emmm_web` VALUES (1, 'hello', 'localhost:8000', 'function/uploadfile/emmm888/logo.png', '233333', '黑龙江省哈尔滨市双城区文昌大街', '400-626-0451', '13199509559', '0451-83209995', '77701950@qq.com', '150100', '77701950', '唐晓伟', '--', '', '2018-12-14', '', '', '', '', '【Emmm】', '', '', '');

-- ----------------------------
-- Table structure for emmm_webdeploy
-- ----------------------------
DROP TABLE IF EXISTS `emmm_webdeploy`;
CREATE TABLE `emmm_webdeploy`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `COL_Weboff` int(11) NOT NULL DEFAULT 0,
  `COL_Webofftext` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Webrewrite` int(11) NOT NULL DEFAULT 0,
  `COL_Webpage` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Webkeywords` int(11) NOT NULL DEFAULT 0,
  `COL_Webkeywordsto` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Webdescriptions` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Webfenci` int(11) NOT NULL DEFAULT 0,
  `COL_Webservice` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `COL_Webocomment` int(11) NOT NULL DEFAULT 2,
  `COL_Webpcomment` int(11) NOT NULL DEFAULT 2,
  `COL_Webweight` int(11) NOT NULL DEFAULT 1,
  `time` datetime(0) NULL DEFAULT NULL,
  `COL_Webfile` int(11) NOT NULL DEFAULT 1,
  `COL_Ucenter` int(11) NOT NULL DEFAULT 0,
  `COL_Searchtime` int(11) NOT NULL DEFAULT 10,
  `COL_Home` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'cn|cn|cn',
  `COL_Sensitive` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Bookuser` int(11) NOT NULL DEFAULT 0,
  `COL_Adminrecord` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `COL_Pagestype` int(11) NOT NULL DEFAULT 0,
  `COL_Pages` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `COL_Pagefont` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emmm_webdeploy
-- ----------------------------
INSERT INTO `emmm_webdeploy` VALUES (1, 1, '', 2, '20,20,20,20,20,20,20', 1, 'Emmm', 'Emmm', 2, 'default', 2, 4, 1, '2015-01-01 12:00:00', 1, 0, 10, 'cn|cn|cn', '傻逼|二货|狗屎|去死', 0, '请输入建站备忘事项!', 0, '<style type=\"text/css\">.emmm_page { font-size:14px; margin:20px auto 0 auto; float:left; clear:both;}.emmm_page a { padding:8px 15px; float:left; margin-right:10px; border:1px #D1D1D1 solid; background:#f4f4f4; color:#666;}.emmm_page .me { padding:8px 15px; float:left; margin-right:10px; border:1px #f4f4f4 solid; background:#D1D1D1; color:#666; font-weight:bold;}.emmm_page a:hover {background:#D1D1D1; color:#666;}.emmm_dian{ padding:8px 15px; float:left; margin-right:10px; color:#666;}.emmm_page .disabled{ padding:8px 15px; float:left; margin-right:10px; border:1px #f4f4f4 solid; background:#D1D1D1; color:#666;}.emmm_page .disabled2{background:#f4f4f4; color:#666;}</style>', '上一页|下一页');

SET FOREIGN_KEY_CHECKS = 1;
