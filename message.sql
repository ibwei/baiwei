/*
Navicat MySQL Data Transfer

Source Server         : tengcent
Source Server Version : 50090
Source Host           : localhost:3306
Source Database       : a0913135035

Target Server Type    : MYSQL
Target Server Version : 50090
File Encoding         : 65001

Date: 2017-07-01 22:10:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(12) NOT NULL,
  `name` varchar(255) default NULL,
  `label` varchar(255) default NULL,
  `content` text,
  `date` datetime default NULL,
  `avatar` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('17', 'fuck', '帅气逼人', '白神牛皮！', '2017-06-09 20:15:28', 'avatar7.jpg');
INSERT INTO `message` VALUES ('18', '。。。', '。。。', '<div style=\"color:red\">123</div>', '2017-06-09 20:42:50', 'avatar2.jpg');
INSERT INTO `message` VALUES ('13', '风', '卢', '呵呵', '2017-06-09 17:54:58', 'avatar4.jpg');
INSERT INTO `message` VALUES ('14', '白唯他妈咪', '好的', '白唯个智障', '2017-06-09 18:04:29', 'avatar7.jpg');
INSERT INTO `message` VALUES ('1', '先行者', '好的', 'subbish', '2017-05-09 01:10:14', 'avatar2.gif');
INSERT INTO `message` VALUES ('15', '成年人', '帅气逼人', 'sb', '2017-06-09 18:43:22', 'avatar7.jpg');
INSERT INTO `message` VALUES ('21', '12', '23', '发到', '2017-07-01 11:09:45', 'avatar3.jpg');
INSERT INTO `message` VALUES ('2', '美人鱼', '没人听闻', '终于游到这里啦\r\n我很开心\r\n你呢', '2017-06-06 04:58:43', 'avatar1.jpg');
INSERT INTO `message` VALUES ('12', '张红森', '帅，帅，比白唯帅', '嗯，很不错，继续带头啊', '2017-06-09 17:53:29', 'avatar1.gif');
INSERT INTO `message` VALUES ('22', '路人', '高冷艳丽', '一万年太久！', '2017-07-01 11:10:25', 'avatar3.gif');
INSERT INTO `message` VALUES ('3', '小仙女', '孤独的', '唉，真的很差劲！', '2017-06-09 01:10:14', 'avatar3.gif');
INSERT INTO `message` VALUES ('19', '，', '。', ' 1’ and 1=2 union select * from user where userid=1', '2017-06-09 20:57:06', 'avatar2.jpg');
INSERT INTO `message` VALUES ('16', '。', '。', '你好像很厉害的样子。我啥也不懂。', '2017-06-09 20:10:23', 'avatar1.jpg');
INSERT INTO `message` VALUES ('4', '我叫风儿', '哈哈', '给你说一句祝福：祝你每天都快乐', '2017-06-09 11:33:06', 'avatar3.jpg');
INSERT INTO `message` VALUES ('23', '好人', '丑得想哭', '天空没有痕迹', '2017-07-01 20:33:01', 'avatar7.jpg');
INSERT INTO `message` VALUES ('10', '', '', '', '2017-06-09 17:42:52', 'avatar1.jpg');
INSERT INTO `message` VALUES ('11', '三叶', '大神', '\"<scrip>alert(\'你的留言板炸了\')</script>\"', '2017-06-09 17:47:29', 'avatar1.jpg');
INSERT INTO `message` VALUES ('6', '白唯', 'SB', '再删也是SB', '2017-06-09 17:09:19', 'avatar1.jpg');
INSERT INTO `message` VALUES ('5', '啦啦啦', '哈哈', '可以的加油，原谅你今天上课发傻的行为', '2017-06-09 16:57:53', 'avatar4.jpg');
INSERT INTO `message` VALUES ('7', '白姐姐', '我', '你想我了吗，', '2017-06-09 17:13:37', 'avatar1.jpg');
INSERT INTO `message` VALUES ('8', '白唯', '我', '你老帅了，简直就是我的男神！', '2017-06-09 17:14:54', 'avatar5.jpg');
INSERT INTO `message` VALUES ('9', '妖艳的红摇裤', '啊啊啊', '6p6p', '2017-06-09 17:32:31', 'avatar4.jpg');
INSERT INTO `message` VALUES ('20', '1', '1', '<img src=\"www.baidu.com\">', '2017-06-09 21:00:15', 'avatar2.gif');
