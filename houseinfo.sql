/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1_3306_localhost
Source Server Version : 50711
Source Host           : 127.0.0.1:3306
Source Database       : db_loupan

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-12-22 17:56:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for houseinfo
-- ----------------------------
DROP TABLE IF EXISTS `houseinfo`;
CREATE TABLE `houseinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `price` decimal(10,0) DEFAULT '0',
  `position` varchar(80) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of houseinfo
-- ----------------------------
INSERT INTO `houseinfo` VALUES ('1', '[标题]', '0', '[楼盘位置]');
INSERT INTO `houseinfo` VALUES ('2', '', '0', '[楼盘位置]');
INSERT INTO `houseinfo` VALUES ('3', '[标题]', '0', '[楼盘位置]');
INSERT INTO `houseinfo` VALUES ('4', '南沙金茂湾', '19000', '南沙区 凤凰大道外国语学院旁');
INSERT INTO `houseinfo` VALUES ('5', '尚东We家', '13000', '增城区 新塘镇西宁西路618号');
INSERT INTO `houseinfo` VALUES ('6', '佳兆业城市广场', '26000', '黄埔区 盛凯大街6号（开创大道与黄埔东路交汇处）');
INSERT INTO `houseinfo` VALUES ('7', '南沙保利城', '16000', '南沙区 市南大道与鸡谷山路交汇处（西段）');
INSERT INTO `houseinfo` VALUES ('8', '富力悦禧花园', '18000', '黄埔区 广园快速路笔村立交旁（东区小学对面）');
INSERT INTO `houseinfo` VALUES ('9', '新景豪庭', '15000', '增城区 新塘镇广深大道西228号（汇东国际花园对面）');
INSERT INTO `houseinfo` VALUES ('10', '广州绿地城', '9000', '黄埔区 九龙大道（中新知识城南起步区旺村地铁站旁）');
INSERT INTO `houseinfo` VALUES ('11', '凯得文化广场', '24000', '黄埔区 香雪大道西288号');
INSERT INTO `houseinfo` VALUES ('12', '招商金山谷', '18000', '番禺区 东环街东艺路81号（金山大道的南面）');
INSERT INTO `houseinfo` VALUES ('13', '恒大金碧天下', '4900', '广州周边 广清连高速龙颈出口');
INSERT INTO `houseinfo` VALUES ('14', '叠翠峰', '16000', '南沙区 凤凰大道与丰泽西路交汇处');
INSERT INTO `houseinfo` VALUES ('15', '兰亭盛荟', '43500', '天河区 东圃黄埔大道桃园西路明镜路1号（天河区人民法院旁）');
INSERT INTO `houseinfo` VALUES ('16', '华标峰湖御境', '25000', '黄埔区 天麓南路（距离广汕公路800米）');
INSERT INTO `houseinfo` VALUES ('17', '文德先生', '59000', '越秀区 文德南路和珠光路交汇处');
INSERT INTO `houseinfo` VALUES ('18', '翡翠绿洲', '16000', '增城区 开创大道埔南路翡翠绿洲大道');
INSERT INTO `houseinfo` VALUES ('19', '广州中航城', '15000', '增城区 广汕公路燕岗桥东（地铁21号线朱村站）');
INSERT INTO `houseinfo` VALUES ('20', '金地天河公馆', '40000', '天河区 黄云路（珠吉路以西，临近世界大观和奥体中心）');
INSERT INTO `houseinfo` VALUES ('21', '远洋天骄', '45000', '天河区 元岗路68号');
INSERT INTO `houseinfo` VALUES ('22', '雅居乐小院流溪', '11000', '从化区 街口街沙贝村地段广从北路旁，105国道旁');
INSERT INTO `houseinfo` VALUES ('23', '怡翠尊堤', '23000', '佛山 南海金融高新区桂江立交北侧');
INSERT INTO `houseinfo` VALUES ('24', '增城方圆云山诗意', '16000', '增城区 荔城大道与荔星大道交汇处');
INSERT INTO `houseinfo` VALUES ('25', '恒福天悦', '10000', '佛山 狮山镇广云路303号（狮山华立医院斜对面）');
INSERT INTO `houseinfo` VALUES ('26', '芙蓉墅', '20000', '花都区 狮岭镇山前旅游大道芙蓉嶂度假区西南处');
INSERT INTO `houseinfo` VALUES ('27', '金融街花溪小镇', '8000', '花都区 花都大道东228号');
INSERT INTO `houseinfo` VALUES ('28', '碧桂园豪园', '13000', '增城区 政府旁');
INSERT INTO `houseinfo` VALUES ('29', '万科里享家', '16000', '黄埔区 长岭居新业路与布岭路交汇处（甘竹山东南麓）');
INSERT INTO `houseinfo` VALUES ('30', '金融街融穗御府', '20000', '黄埔区 长岭路永顺大道（新建长平小学南侧）');
INSERT INTO `houseinfo` VALUES ('31', '东方文德森岛湖', '9000', '花都区 狮岭大道东63号（广清高速海布出口旁）');
INSERT INTO `houseinfo` VALUES ('32', '广州星河山海湾', '17500', '南沙区 港前大道与商贸南二路交汇处');
INSERT INTO `houseinfo` VALUES ('33', '花城美汇', '12000', '花都区 新华路105号');
INSERT INTO `houseinfo` VALUES ('34', '顺德碧桂园桂澜山', '15000', '佛山 北滘镇碧江大桥侧顺德碧桂园东侧');
INSERT INTO `houseinfo` VALUES ('35', '广州亚运城5号组团', '18000', '番禺区 亚运城康体路（4号线地铁海傍站旁）');
INSERT INTO `houseinfo` VALUES ('36', '绿地大都会', '15000', '广州周边 新城大道与环常南路交汇处');
INSERT INTO `houseinfo` VALUES ('37', '碧桂园凤凰城', '30000', '增城区 广园东快速路（广园路、广深高速新塘出口）');
INSERT INTO `houseinfo` VALUES ('38', '大夫山·尚东', '16000', '番禺区 禺山西路东桥大街68号（大夫山公园南门旁）');
INSERT INTO `houseinfo` VALUES ('39', '汇港威华国际', '13000', '增城区 朱村街朱村大道东178号');
INSERT INTO `houseinfo` VALUES ('40', '万科南方公元', '15000', '南沙区 黄阁大道以东、大山乸以西');
INSERT INTO `houseinfo` VALUES ('41', '方兴竹雅苑', '30000', '越秀区 温泉新街16至20号');
INSERT INTO `houseinfo` VALUES ('42', '豪利花园', '12000', '花都区 镜湖大道18号');
INSERT INTO `houseinfo` VALUES ('43', '保利翡翠山', '12800', '花都区 建设北路192号（花都公安办证大厅对面）');
INSERT INTO `houseinfo` VALUES ('44', '嘉美小镇', '5500', '广州周边 广清高速龙塘出口右转3公里');
INSERT INTO `houseinfo` VALUES ('45', '保利学府里', '33000', '黄埔区 中山大道与黄埔大道交汇处（蟹山路48号）');
INSERT INTO `houseinfo` VALUES ('46', '佛山富力广场', '13000', '佛山 新堤路（东方广场北侧）');
INSERT INTO `houseinfo` VALUES ('47', '保利诺丁山', '23000', '佛山 南海区三山新城港口路与环岛南路交汇处（三山文翰湖公园旁）');
INSERT INTO `houseinfo` VALUES ('48', '时代天韵', '14000', '黄埔区 中新广州知识城南起步区九龙大道中（中新知识城规划展示厅对面）');
INSERT INTO `houseinfo` VALUES ('49', '恒大金名都', '25000', '佛山 南海区里水镇里广路6-8号');
INSERT INTO `houseinfo` VALUES ('50', '雅居乐御景豪庭', '13000', '佛山 大沥镇振兴路80号雅居乐御景豪庭');
INSERT INTO `houseinfo` VALUES ('51', '珠江嘉园', '14000', '黄埔区 永和大道和永顺大道交汇处');
INSERT INTO `houseinfo` VALUES ('52', '中海誉城', '20000', '黄埔区 科学城东部开创大道与开源大道交汇处');
INSERT INTO `houseinfo` VALUES ('53', '佛山恒大御景湾', '23000', '佛山 南海区里水草场村');
INSERT INTO `houseinfo` VALUES ('54', '北部万科城', '6500', '广州周边 广清高速龙塘出口右转3公里');
INSERT INTO `houseinfo` VALUES ('55', '越秀滨海御城', '19000', '南沙区 双山大道与祈丰路交汇处');
INSERT INTO `houseinfo` VALUES ('56', '富力天海湾', '14500', '南沙区 环市大道西工业一路明珠湾区（地铁四号线南延线塘坑站旁）');
INSERT INTO `houseinfo` VALUES ('57', '合盛盈翠雅筑', '10000', '增城区 小楼镇国家AAA级风景区内（小楼镇春天路两号）');
INSERT INTO `houseinfo` VALUES ('58', '南沙湾石奥', '25000', '南沙区 港前大道南沙游艇会旁');
INSERT INTO `houseinfo` VALUES ('59', '恒展江山时代', '15000', '增城区 广汕公路朱村段（燕岗桥公交站旁）');
INSERT INTO `houseinfo` VALUES ('60', '雅居乐富春山居', '32000', '黄埔区 大观北路（与广汕路交界处）');
INSERT INTO `houseinfo` VALUES ('61', '[标题]', '0', '[楼盘位置]');
