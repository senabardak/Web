/*
Navicat MySQL Data Transfer

Source Server         : cleardb- ad_976319092ebfd52
Source Server Version : 50545
Source Host           : us-cdbr-iron-east-03.cleardb.net:3306
Source Database       : ad_976319092ebfd52

Target Server Type    : MYSQL
Target Server Version : 50545
File Encoding         : 65001

Date: 2016-01-13 10:43:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for compliments
-- ----------------------------
DROP TABLE IF EXISTS `compliments`;
CREATE TABLE `compliments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `typeid` int(11) DEFAULT NULL,
  `coorx` varchar(255) DEFAULT NULL,
  `coory` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `desc` varchar(1000) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `photo` longtext,
  `address` varchar(1000) DEFAULT '0',
  `vote` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of compliments
-- ----------------------------
INSERT INTO `compliments` VALUES ('2', '1', '1', '38.3919793', '27.0730639', '2015-11-07 22:25:29', 'aaaa', 'Elektrik Sorunu', 'Onaylanmamış', '', 'Deneme Adresi', '15');
INSERT INTO `compliments` VALUES ('3', '1', '1', '38.3919713', '27.0730799', '2015-11-07 23:16:07', 'aaa', 'Elektrik Sorunu', 'Onaylanmamış', '', 'Deneme Adresi', '0');
INSERT INTO `compliments` VALUES ('4', '1', '1', '38.3919713', '27.0730799', '2015-11-07 23:17:07', 'aaa', 'Elektrik Sorunu', 'Onaylanmamış', '', 'Deneme Adresi', '0');
INSERT INTO `compliments` VALUES ('9', '1', '1', '38.3920082', '27.0730346', '2015-11-08 00:19:31', 'hrrr', 'Elektrik Sorunu', 'Onaylanmamış', ' ', 'Deneme Adresi', '0');
INSERT INTO `compliments` VALUES ('10', '1', '1', '38.3936212', '27.0773311', '2015-11-08 15:51:41', 'deneme', 'Elektrik Sorunu', 'Onaylanmamış', ' ', 'Deneme Adresi, Türkiye', '0');
INSERT INTO `compliments` VALUES ('11', '1', '1', '38.3936211', '27.0773312', '2015-11-09 15:53:07', 'denem3', 'Trafik Sorunu2', 'Onaylanmamış', ' ', 'Deneme2 Adresi, Türkiye1', '2');
INSERT INTO `compliments` VALUES ('12', '1', '1', '38.3936212', '27.0773311', '2015-11-08 21:10:06', 'testing ', 'Elektrik Sorunu', 'Onaylanmamış', ' ', 'null, Türkiye', '0');
INSERT INTO `compliments` VALUES ('13', '1', '1', '38.3936212', '27.0773311', '2015-11-08 21:10:27', 'olmadı ', 'Elektrik Sorunu', 'Onaylanmamış', ' ', 'null, Türkiye', '0');
INSERT INTO `compliments` VALUES ('14', '1', '1', '38.391984', '27.0730375', '2015-11-08 21:30:47', 'Metin Kiper Buraya yazı yazdı', 'Elektrik Sorunu', 'Onaylanmamış', ' ', 'null, Türkiye', '0');
INSERT INTO `compliments` VALUES ('15', '1', '1', '38.3947512', '27.0738414', '2015-11-08 21:32:26', 'deneme', 'Elektrik Sorunu', 'Onaylanmamış', ' ', 'null, Türkiye', '1');
INSERT INTO `compliments` VALUES ('16', '1', '1', '0.0', '0.0', '2015-11-08 21:32:44', 'test 2', 'Su Sorunu', 'Onaylanmamış', ' ', 'Waiting for Location', '0');
INSERT INTO `compliments` VALUES ('17', '1', '1', '0.0', '0.0', '2015-11-08 22:15:05', 'Aşkın\n', 'Su Sorunu', 'Onaylanmamış', ' ', 'Waiting for Location', '1');
INSERT INTO `compliments` VALUES ('18', '1', '1', '0.0', '0.0', '2015-12-09 04:35:19', 'askin test', 'Rogar kapagı', 'Onaylanmış', ' ', 'Waiting for Location', '1');
INSERT INTO `compliments` VALUES ('19', '1', '1', '0.0', '0.0', '2015-11-09 20:57:47', 'gggggg', 'Su Sorunu', 'Onaylanmamış', ' ', 'Waiting for Location', '1');
INSERT INTO `compliments` VALUES ('20', '1', '1', '38.3930663', '27.0744706', '2015-11-12 15:01:18', 'açıklama', 'Elektrik Sorunu', 'Onaylanmış', ' ', 'null, Türkiye', '0');
INSERT INTO `compliments` VALUES ('22', '1', '1', '0.0', '0.0', '2015-12-03 22:59:32', 'hasere\n', 'Haşere/Hayvan', 'Onaylanmamış', '', 'Waiting for Location', '0');
INSERT INTO `compliments` VALUES ('32', '1', '1', '38.3933582', '27.0738849', '2015-12-25 11:03:29', 'deneme', 'Diğer İstek', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('42', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:26', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('52', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:27', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('62', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:29', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('72', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:30', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('82', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:31', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('92', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:31', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('102', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:32', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('112', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:33', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('122', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:34', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('132', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:35', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('142', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:05:36', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');
INSERT INTO `compliments` VALUES ('152', '1', '1', '38.3933827', '27.0738776', '2015-12-25 11:07:33', 'su yok\n\n', 'Su Sorunu', 'Onaylanmamış', '', 'Karabağlar, İzmir, Türkiye', '0');

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photourl` varchar(1024) NOT NULL,
  `compid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of photos
-- ----------------------------

-- ----------------------------
-- Table structure for types
-- ----------------------------
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of types
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `surname` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telno` varchar(20) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `usergroup` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Özgür', 'Duyar', 'posta@ozgurduyar.com.tr', '53333333333', '1q2w3e', '99');
