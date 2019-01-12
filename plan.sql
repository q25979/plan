/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : plan

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-01-13 02:41:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for p_admin
-- ----------------------------
DROP TABLE IF EXISTS `p_admin`;
CREATE TABLE `p_admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL COMMENT '管理员账号',
  `password` varchar(32) NOT NULL COMMENT '管理员密码',
  `login_ip` varchar(255) DEFAULT NULL COMMENT '登录ip',
  `group` int(2) unsigned NOT NULL DEFAULT '1' COMMENT '权限组 1-最高权限',
  `name` varchar(255) DEFAULT NULL COMMENT '用户名字',
  `create_time` int(16) DEFAULT NULL,
  `update_time` int(16) DEFAULT NULL,
  `deleted_time` int(16) DEFAULT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_admin
-- ----------------------------
INSERT INTO `p_admin` VALUES ('1', 'xiaoyi', '9d38a4ee70115bf63fba0c4effc441b2', '127.0.0.1', '1', null, '1535598221', null, null);

-- ----------------------------
-- Table structure for p_classify
-- ----------------------------
DROP TABLE IF EXISTS `p_classify`;
CREATE TABLE `p_classify` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '分类名字',
  `sort` int(2) DEFAULT NULL COMMENT '排序',
  `create_time` int(16) DEFAULT NULL,
  `update_time` int(16) DEFAULT NULL,
  `deleted_time` int(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='分类';

-- ----------------------------
-- Records of p_classify
-- ----------------------------
INSERT INTO `p_classify` VALUES ('11', '大发快3', '3', '1547235843', '1547235843', null);
INSERT INTO `p_classify` VALUES ('8', '江苏快3', '1', '1547235550', '1547298174', null);
INSERT INTO `p_classify` VALUES ('9', '北京PK10', '2', '1547235665', '1547298277', null);

-- ----------------------------
-- Table structure for p_plan
-- ----------------------------
DROP TABLE IF EXISTS `p_plan`;
CREATE TABLE `p_plan` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `type` int(3) DEFAULT NULL COMMENT '开奖类型',
  `plan` varchar(255) DEFAULT NULL COMMENT '开奖计划',
  `lottery` varchar(255) DEFAULT NULL COMMENT '开奖',
  `status` int(1) DEFAULT NULL COMMENT '状态 0-未开奖 1-中 -1-错',
  `number` int(16) DEFAULT NULL COMMENT '期数',
  `name` varchar(255) DEFAULT NULL COMMENT '计划员',
  `create_time` int(16) DEFAULT NULL,
  `update_time` int(16) DEFAULT NULL,
  `deleted_time` int(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='开奖计划表';

-- ----------------------------
-- Records of p_plan
-- ----------------------------
