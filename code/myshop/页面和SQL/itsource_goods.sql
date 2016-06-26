/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : myshop

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2016-03-19 13:55:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for itsource_goods
-- ----------------------------
DROP TABLE IF EXISTS `itsource_goods`;
CREATE TABLE `itsource_goods` (
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(20) DEFAULT NULL COMMENT '商品名称',
  `goods_sn` varchar(20) DEFAULT NULL COMMENT '商品货号',
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `shop_price` decimal(10,2) DEFAULT NULL COMMENT '本店售价',
  `market_price` decimal(10,2) DEFAULT NULL COMMENT '市场售价',
  `goods_num` int(10) unsigned DEFAULT NULL COMMENT '库存数量',
  `image_ori` varchar(100) DEFAULT NULL COMMENT '原图片路径',
  `image_thumb` varchar(100) DEFAULT NULL COMMENT '缩略图片路径',
  `goods_status` int(10) unsigned DEFAULT NULL COMMENT '商品状态:热销,团购,新品,精品',
  `is_on_sale` tinyint(4) DEFAULT NULL COMMENT '是否上架',
  `add_time` int(11) DEFAULT NULL COMMENT '添加时间',
  `goods_intro` text COMMENT '商品简介',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of itsource_goods
-- ----------------------------
INSERT INTO `itsource_goods` VALUES ('1', '7777', '342342', null, null, '0.00', '34.00', null, './Uploads/2016-03-17/20160317155503_56ea62d755ca8.jpg', null, null, null, null, null, '2016-03-16 17:07:31');
INSERT INTO `itsource_goods` VALUES ('2', '6666', '123123', '0', '0', '0.00', '0.00', '3', './Uploads/2016-03-17/20160317155503_56ea62d755ca8.jpg', null, '3', '1', null, '1231', '2016-03-17 10:41:41');
INSERT INTO `itsource_goods` VALUES ('3', '5555', '123123', '0', '0', '0.00', '0.00', '0', './Uploads/2016-03-17/20160317155503_56ea62d755ca8.jpg', null, '3', '1', null, '1231', '2016-03-17 10:44:52');
INSERT INTO `itsource_goods` VALUES ('4', '1111', '123123', '0', '0', '0.00', '0.00', '0', './Uploads/2016-03-17/20160317155503_56ea62d755ca8.jpg', null, '0', '1', null, '', '2016-03-17 14:23:57');
INSERT INTO `itsource_goods` VALUES ('5', '2222', '123123', '0', '0', '0.00', '0.00', '0', './Uploads/2016-03-17/20160317155503_56ea62d755ca8.jpg', null, '0', '1', null, '', '2016-03-17 14:38:14');
INSERT INTO `itsource_goods` VALUES ('6', '3333', '123123', '0', '0', '0.00', '0.00', '0', './Uploads/2016-03-17/20160317155503_56ea62d755ca8.jpg', null, '0', '1', null, '', '2016-03-17 14:45:21');
INSERT INTO `itsource_goods` VALUES ('7', '4444', '123123', '0', '0', '0.00', '0.00', '0', './Uploads/2016-03-17/20160317155503_56ea62d755ca8.jpg', null, '0', '1', null, '123', '2016-03-17 15:55:03');
INSERT INTO `itsource_goods` VALUES ('8', '123123', '32323', '0', '0', '222.00', '1232.00', '232', './Uploads/2016-03-19/20160319103403_56ecba9bc68b8.png', null, '1', '1', null, '123123', '2016-03-19 10:34:03');
INSERT INTO `itsource_goods` VALUES ('9', '12312323123', '123123', '1', '2', '2323.00', '11.00', '123', './Uploads/2016-03-19/20160319103502_56ecbad6a00f6.png', './Uploads/2016-03-19/20160319103502_56ecbad6a00f6_50x50.png', '1', '1', null, '11', '2016-03-19 10:35:02');
INSERT INTO `itsource_goods` VALUES ('10', '12312323123', '123123', '1', '2', '2323.00', '11.00', '123', './Uploads/2016-03-19/20160319103904_56ecbbc8c139f.png', './Uploads/2016-03-19/20160319103904_56ecbbc8c139f_50x50.png', '1', '1', null, '11', '2016-03-19 10:39:04');
INSERT INTO `itsource_goods` VALUES ('11', '12312323123', '123123', '1', '2', '2323.00', '11.00', '123', './Uploads/2016-03-19/20160319104005_56ecbc05389e8.png', './Uploads/2016-03-19/20160319104005_56ecbc05389e8_50x50.png', '1', '1', null, '11', '2016-03-19 10:40:22');
INSERT INTO `itsource_goods` VALUES ('12', '12312323123', '123123', '1', '2', '2323.00', '11.00', '123', './Uploads/2016-03-19/20160319104133_56ecbc5d4b6d6.png', './Uploads/2016-03-19/20160319104133_56ecbc5d4b6d6_50x50.png', '1', '1', null, '11', '2016-03-19 10:41:33');
INSERT INTO `itsource_goods` VALUES ('13', '123', '123123', '10', '0', '123.00', '123.00', '2323', './Uploads/2016-03-19/20160319105643_56ecbfeba2d8b.jpg', './Uploads/2016-03-19/20160319105643_56ecbfeba2d8b_50x50.jpg', '0', '1', null, '23', '2016-03-19 10:56:43');
