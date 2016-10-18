/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306
Source Server Version : 50711
Source Host           : 127.0.0.1:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-10-18 14:16:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for archives
-- ----------------------------
DROP TABLE IF EXISTS `archives`;
CREATE TABLE `archives` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL COMMENT '用户id',
  `username` varchar(20) NOT NULL COMMENT '发布微博的用户名称',
  `post_time` datetime NOT NULL COMMENT '发布时间',
  `content` varchar(200) NOT NULL COMMENT '微博内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户发布的微博信息表';

-- ----------------------------
-- Records of archives
-- ----------------------------
INSERT INTO `archives` VALUES ('1', '1', 'dongzi', '2016-06-22 16:00:40', '我是用户东子，我的第一条微博');
INSERT INTO `archives` VALUES ('2', '2', 'lidong', '2016-06-22 16:10:40', '我是用户lidong，我的第一条微博');
INSERT INTO `archives` VALUES ('3', '2', 'lidong', '2016-06-22 17:05:40', '我是用户lidong，我的第二条微博');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(2000) NOT NULL,
  `createdtime` datetime DEFAULT NULL,
  `updatedtime` datetime DEFAULT NULL,
  `author` varchar(20) NOT NULL,
  `status` int(4) NOT NULL DEFAULT '0' COMMENT '文章状态（-1 已删除 0 未审核 1 已审核）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '111', '2222', '2016-09-19 06:57:34', '2016-09-19 06:57:34', '333', '0');
INSERT INTO `news` VALUES ('2', '111', '2222', '2016-09-19 07:09:06', '2016-09-19 07:09:06', '333', '0');
INSERT INTO `news` VALUES ('3', '111', '2222', '2016-09-19 07:09:10', '2016-09-19 07:09:10', '333', '0');
INSERT INTO `news` VALUES ('4', '111', '2222222qqqqqqffffffff', '2016-09-26 08:50:34', '2016-09-26 08:50:34', '333', '0');
INSERT INTO `news` VALUES ('5', 'www', 'qqq', '2016-09-20 09:31:04', '2016-09-20 09:31:04', 'rrrr', '0');
INSERT INTO `news` VALUES ('6', 'wwww', 'eeeee', '2016-09-20 09:32:09', '2016-09-20 09:32:09', 'qqqqq', '0');
INSERT INTO `news` VALUES ('7', 'wwww', 'eeeee', '2016-09-20 09:33:34', '2016-09-20 09:33:34', 'qqqqq', '0');
INSERT INTO `news` VALUES ('8', 'ggg', 'asdasdad', '2016-09-20 09:33:57', '2016-09-20 09:33:57', '111', '0');
INSERT INTO `news` VALUES ('9', 'sdfsdf', 'sdfsfsdfs', '2016-09-20 09:34:18', '2016-09-20 09:34:18', 'dfsdfsdf', '0');
INSERT INTO `news` VALUES ('10', 'dfggg', 'ffghhsss', '2016-09-20 09:37:28', '2016-09-20 09:37:28', 'sssdff', '0');
INSERT INTO `news` VALUES ('11', 'adasdas', 'asdasssav', '2016-09-20 09:52:15', '2016-09-20 09:52:15', 'asdasdsa', '0');
INSERT INTO `news` VALUES ('12', 'asdasd11', '121232asdasd', '2016-09-20 09:53:09', '2016-09-20 09:53:09', 'asdad', '0');
INSERT INTO `news` VALUES ('13', '&lt;script&gt;alert(\'fuck\')&lt;/script&gt;', '', '2016-09-20 17:02:13', '2016-09-20 17:02:13', '', '0');
INSERT INTO `news` VALUES ('14', '$(&quot;#title&quot;).next(&quot;span&quot;).next(&quot;span&quot;)', '', '2016-09-20 17:33:09', '2016-09-20 17:33:09', '', '0');
INSERT INTO `news` VALUES ('15', '$(&quot;#title&quot;).next(&quot;span&quot;).next(&quot;span&quot;)', '', '2016-09-20 17:33:15', '2016-09-20 17:33:15', '', '0');
INSERT INTO `news` VALUES ('30', 'asdasdasdasd', 'asdasdadasdasdddddddasdasd\r\nqwdqwdaaaaaaaaaaaaaa', '2016-09-21 10:11:08', '2016-09-21 10:11:08', '', '0');
INSERT INTO `news` VALUES ('31', 'asdfafasdfsdf', '居然什么都没\r\nasasdasdasdasd\r\nasdasdasda\r\nsdas\r\ndsa\r\n\r\nfdgdgdgdg', '2016-09-21 11:32:29', '2016-09-21 11:32:29', '', '0');
INSERT INTO `news` VALUES ('32', '111', '2222', '2016-09-23 15:01:54', '2016-09-23 15:01:54', '333', '0');
INSERT INTO `news` VALUES ('33', '居然没内容', '&lt;p&gt;&amp;lt;p&amp;gt;&amp;lt;span style=&amp;quot;font-family: 微软雅黑, 宋体; font-size: 20px; background-color: rgb(230, 243, 255);&amp;quot;&amp;gt;山洞之中，张小凡与碧瑶都是一阵沉默，两人都隐隐感觉到，在这两段字里行间，只怕有著一段伤心情事，女子伤了心，未了男子也追悔不已。&amp;lt;/span&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;span style=&amp;quot;font-family: 微软雅黑, 宋体; font-size: 20px; background-color: rgb(230, 243, 255);&amp;quot;&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;张小凡有些出神，虽然从未见过这不知名的情侣，但不知怎么，千百年後见到这不知算不算绝笔的遗迹，却仍然有些难过。&amp;lt;/span&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;span style=&amp;quot;font-family: 微软雅黑, 宋体; font-size: 20px; background-color: rgb(230, 243, 255);&amp;quot;&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;而站在一旁的碧瑶却是紧皱眉头，眼睛直看著那几行字，嘴里念叨著：“金铃清脆噬血误，金铃清脆噬血误…金铃？啊！对了，金铃！”&amp;lt;/span&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;span style=&amp;quot;font-family: 微软雅黑, 宋体; font-size: 20px; background-color: rgb(230, 243, 255);&amp;quot;&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;她似是想到了什么，欢叫一声，喜形於色。张小凡被她吓了一跳，讶道：“金铃怎么了？”&amp;lt;/span&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;span style=&amp;quot;font-family: 微软雅黑, 宋体; font-size: 20px; background-color: rgb(230, 243, 255);&amp;quot;&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;碧瑶似极为兴奋，满面喜色，道：“就是‘金铃夫人’啊！你不知道吗？”&amp;lt;/span&amp;gt;&amp;lt;/p&amp;gt;&lt;/p&gt;', '2016-09-29 15:09:37', '2016-09-29 15:09:37', '', '0');
INSERT INTO `news` VALUES ('34', '第五集 第四章 小镇', '<p><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">张小凡深深地看着面前这个自称“万人往”的中年文士，心中泛起不好的预感，但同时在内心深处，却另有一种力量，令他身不由己地问道：“请先生指教。”</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;万人往大有深意地看了他一眼，缓缓道：“这黑色短棒煞气极重，黑光润而内敛，人若近之，未及三丈之内，全身气血必定为这煞气逼迫，倒灌入心而死。”</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;张小凡心中一动，忍不住便道：“不错，当初我遇到这东西时，远远的就感觉身子沉，恶心欲吐，几乎便要昏过去了。”</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;万人往轻叹一声，看着他道：“不错，便是如此了，”说着似乎微皱眉头，低叹一声，“你居然不死，当真奇怪。”</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;张小凡没听清楚他后面的话，追问道：“什么？”</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;万人往微微一笑，却不回答于他，只指着烧火棍道：“这黑色短棒，本是天生大凶煞之物，名为‘摄魂’，却不是魔教之物，数千年来从未出世，只在古卷孤本上有些记载，张小兄福缘深厚，居然能得这两件世间至宝。”</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;“摄魂！”张小凡脸色木然，低低地念了一句。</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;“正是。”万人往脸色恢复了平静，道，“古书《异宝十篇》中曾有记载：天有奇铁，落于九幽，幽冥鬼火焚阴灵厉魄以炼之，千年方红，千年成形，千年聚鬼厉之气，千年成摄魂之能。其实这等凶煞之物，本非生人所能掌握，没想到张小兄……”</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;“铛……”一声脆响，黑色的烧火棍从张小凡手中滑落下来，摔到地上，张小凡手足皆软，只觉得胸闷无比，踉跄退了几步，死死盯着这些年来一直陪在自己身边的烧火棍，竟是说不出话来。</span><br/><', '2016-10-11 09:12:29', '2016-10-11 09:14:20', '', '0');
INSERT INTO `news` VALUES ('35', 'asasdasdsadasd ', '<p>啊实打实大声道</p>', '2016-10-08 10:25:18', '2016-10-08 10:25:18', '苍山', '0');
INSERT INTO `news` VALUES ('36', '沧海笑', '<p>沧海笑</p><p>笑寂寥</p>', '2016-10-08 09:50:35', '2016-10-08 09:50:35', '', '0');
INSERT INTO `news` VALUES ('37', '第五集 第三章 文士', '<p><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">张小凡醒来时，天已经都黑了下来，只怕最少是睡了五、六个时辰，但碧瑶却依然未醒，一双手紧紧抓着他的衣裳，看去象是个受惊胆怯的小孩一般，哪里有人想得到她实际是魔教之中的重要人物！</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;张小凡把手放到头下，听着林间山风吹动树木出的“娑娑”声响，忽然间，想到了青云山大竹峰上，那片片竹林，不也是出这般的声音么？</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;这些时日，我失踪在万蝠古窟之下，消息怕是已经传回大竹峰了，不知道灵儿师姐知道了之后，会不会有些伤心呢？可是，若我突然出现到她面前，她一定也会高兴起来的吧，一定也会一把抓住我的手，兴奋不已，笑骂着：臭小子，我就知道你没那么容易死的！</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;他的脸上，在渐渐漆黑的夜晚，浮起了笑容，就连他的眼睛，在这黑夜里，也那么明亮，却没有看到，在他身边，有着另外一双明眸，不知从何时开始，幽幽地看着他。</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;※※※</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;天又亮了，山间响起了鸟鸣声，清脆悦耳。</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;张小凡走到小溪边上，双手合起，捧起一把水泼到脸上，凉丝丝的感觉，直透入心底。他查看了一下左手处，拆下绷带，那断骨处居然也好得差不多了，心中高兴，把绑在手上的烧火棍拿下插在腰间，用力活动了一下左手，果然没有什么大碍。</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;“手好了吗？”碧瑶从他身后走来，看了他一眼，然后蹲下用溪水洗脸。</span><br/><br/><span style=\"font-family: 微软雅黑, 宋体, Verdana, Arial, sans-serif; font-size: 22px; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;“是啊。”张小凡兴高采烈地道，“没什么大碍了，不疼不痛的。”</span><br/></p>', '2016-10-11 09:11:25', '2016-10-11 09:11:25', '', '0');
INSERT INTO `news` VALUES ('38', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('39', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('40', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('41', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('42', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('43', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('44', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('45', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('46', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('47', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('48', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('49', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('50', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('51', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('52', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('53', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('54', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('55', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('56', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('57', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('58', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('59', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('60', '', '', '2016-09-23 16:08:27', '2016-09-23 16:08:27', '', '0');
INSERT INTO `news` VALUES ('61', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('62', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('63', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('64', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('65', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('66', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('67', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('68', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('69', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('70', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('71', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('72', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('73', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('74', '', '', '2016-09-23 16:08:28', '2016-09-23 16:08:28', '', '0');
INSERT INTO `news` VALUES ('75', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('76', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('77', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('78', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('79', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('80', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('81', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('82', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('83', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('84', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('85', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('86', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('87', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('88', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('89', '', '', '2016-09-23 16:08:33', '2016-09-23 16:08:33', '', '0');
INSERT INTO `news` VALUES ('90', '33333333333333', '<p>666666666666666999999999999999999999<br/></p>', '2016-09-23 16:08:34', '2016-10-12 10:10:45', '', '0');
INSERT INTO `news` VALUES ('91', '', '', '2016-09-23 16:08:34', '2016-09-23 16:08:34', '', '0');
INSERT INTO `news` VALUES ('92', '', '', '2016-09-23 16:08:34', '2016-09-23 16:08:34', '', '0');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'PD1001', 'Android Phone FX1', 'Di sertakan secara rambang yang lansung tidak munasabah. Jika anda ingin menggunakan Lorem Ipsum, anda perlu memastikan bahwa tiada apa yang', 'android-phone.jpg', '200.50');
INSERT INTO `products` VALUES ('2', 'PD1002', 'Television DXT', 'Ia menggunakan kamus yang mengandungi lebih 200 ayat Latin, bersama model dan struktur ayat Latin, untuk menghasilkan Lorem Ipsum yang munasabah.', 'lcd-tv.jpg', '500.85');
INSERT INTO `products` VALUES ('3', 'PD1003', 'External Hard Disk', 'Ada banyak versi dari mukasurat-mukasurat Lorem Ipsum yang sedia ada, tetapi kebanyakkannya telah diubahsuai, lawak jenaka diselitkan, atau ayat ayat yang', 'external-hard-disk.jpg', '100.00');
INSERT INTO `products` VALUES ('4', 'PD1004', 'Wrist Watch GE2', 'Memalukan akan terselit didalam di tengah tengah kandungan text. Semua injin Lorem Ipsum didalam Internet hanya mengulangi text, sekaligus menjadikan injin kami sebagai yang terunggul dan tepat sekali di Internet.', 'wrist-watch.jpg', '400.30');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(25) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'dongzi', '123456');
INSERT INTO `user` VALUES ('2', 'lidong', '123456');
