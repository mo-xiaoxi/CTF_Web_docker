CREATE DATABASE IF NOT EXISTS `web_sqli`  DEFAULT CHARACTER SET latin1;

USE `web_sqli`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sqli`
--

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(128) PRIMARY KEY,
  `pwd` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `real_flag_1s_here` varchar(128)
) DEFAULT CHARSET=utf8;


INSERT INTO `users`(`name`,`pwd`,`email`,`real_flag_1s_here`) VALUES('1dc4e6a21dbced2a1f22f224852af86b','9e8384055cd8e99dc8c338edc934e1d0','9f98e6a262fe2390f7bcd51a1cdb464b','xxx');
INSERT INTO `users`(`name`,`pwd`,`email`,`real_flag_1s_here`) VALUES('2dc4e6a21dbced2a1f22f224852af86b','9e8384055cd8e99dc8c338edc934e1d0','9f98e6a262fe2390f7bcd51a1cdb464b','xxx');
INSERT INTO `users`(`name`,`pwd`,`email`,`real_flag_1s_here`) VALUES('3dc4e6a21dbced2a1f22f224852af86b','9e8384055cd8e99dc8c338edc934e1d0','9f98e6a262fe2390f7bcd51a1cdb464b','xxx');
INSERT INTO `users`(`name`,`pwd`,`email`,`real_flag_1s_here`) VALUES('4dc4e6a21dbced2a1f22f224852af86b','9e8384055cd8e99dc8c338edc934e1d0','9f98e6a262fe2390f7bcd51a1cdb464b','xxx');
INSERT INTO `users`(`name`,`pwd`,`email`,`real_flag_1s_here`) VALUES('5dc4e6a21dbced2a1f22f224852af86b','9e8384055cd8e99dc8c338edc934e1d0','9f98e6a262fe2390f7bcd51a1cdb464b','xxx');
INSERT INTO `users`(`name`,`pwd`,`email`,`real_flag_1s_here`) VALUES('6dc4e6a21dbced2a1f22f224852af86b','9e8384055cd8e99dc8c338edc934e1d0','9f98e6a262fe2390f7bcd51a1cdb464b','xxx');
INSERT INTO `users`(`name`,`pwd`,`email`,`real_flag_1s_here`) VALUES('7dc4e6a21dbced2a1f22f224852af86b','9e8384055cd8e99dc8c338edc934e1d0','9f98e6a262fe2390f7bcd51a1cdb464b','xxx');
INSERT INTO `users`(`name`,`pwd`,`email`,`real_flag_1s_here`) VALUES('sdc4e6a21dbced2a1f22f224852af86b','9e8384055cd8e99dc8c338edc934e1d0','9f98e6a262fe2390f7bcd51a1cdb464b','RCTF{sql_1njecti0n_is_f4n_6666}');

INSERT INTO `users`(`name`,`pwd`,`email`,`real_flag_1s_here`) VALUES('admin','adminxxxxx','9f98e6a262fe2390f7bcd51a1cdb464b','xxx');

CREATE TABLE `flag`(
`flag` varchar(128) PRIMARY KEY
)DEFAULT CHARSET=utf8;
INSERT INTO `flag` VALUES('RCTF{Good job! But flag not here...}');


CREATE TABLE `article`(
`title` varchar(128) PRIMARY KEY,
`content` varchar(1000) NOT NULL
)DEFAULT CHARSET=utf8;


INSERT INTO `article` VALUES('lcsg','　　他日若遂凌云志，记住我叫叶良辰。<br>　　垂死病中惊坐起，记住我叫叶良辰。<br>　　儿童相见不相识，记住我叫叶良辰。<br>　　相逢何必曾相识，记住我叫叶良辰。<br>　　莫愁前路无知己，记住我叫叶良辰。<br>　　休问梁园旧宾客，记住我叫叶良辰。<br>　　闲来垂钓碧溪上，记住我叫叶良辰。<br>　　独坐池塘如虎踞，记住我叫叶良辰。<br>　　天生我才必有用，记住我叫叶良辰。<br>　　笑问客从何处来，记住我叫叶良辰。<br>　　有缘千里来相会，记住我叫叶良辰。<br>　　山有木兮木有枝，记住我叫叶良辰。<br>　　近日听君歌一曲，记住我叫叶良辰。<br>');

INSERT INTO `article` VALUES('wyzb','<br>　　老夫装逼17年，自认为无人能敌，今日得见贤弟，才知一山还有一山高，能将装逼这种艺术和装可爱融为一体，实乃老夫有生平仅见，贤弟的装逼技术已至此境。老夫自叹不如，老夫觉得退隐装逼界，从此不问世间事，但贤弟乃不可多得之装逼器材，望贤弟再接再厉，一帆风顺，将如此独特的装逼风格发扬光大。<br>');

INSERT INTO `article` VALUES('zrtbf','<br>赵日天：“呵呵在我赵日天面前继续装逼” 叶良辰：“良辰不说空话，也不装逼!”赵日天：“你之前不是很屌吗?不是很厉害吗?在我赵日天面前就成怂逼了?”叶良辰：“兄台，别逼我动用在北京的势力，我本不想掀起一场腥风血雨!”叶良辰：“我良辰的女人，就算动用家族的力量也要争口气。”“赵日天：“哇塞，良胸家族是干什么的啊?势力这么大!”叶良辰：“我家三世三代都是军统做事，原子弹，我爷爷都参与研究。你说呢?!”哈哈，好怕怕!');