/*
 Navicat Premium Data Transfer

 Source Server         : tpbs
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : tpbs

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 15/11/2023 17:42:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tp_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user`  (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '用户名',
  `password` char(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '密码',
  `gender` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 男 1 女',
  `email` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '邮件',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 ',
  `create_time` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `update_time` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tp_user
-- ----------------------------
INSERT INTO `tp_user` VALUES (1, '花城', 'e10adc3949ba59abbe56e057f20f883e', 1, 'huacheng@163.com', 1, '2023-10-27 10:03:46', '2023-10-27 10:03:51');
INSERT INTO `tp_user` VALUES (2, '谢怜', 'e10adc3949ba59abbe56e057f20f883e', 1, 'xielian@163.com', 1, '2023-10-27 10:04:16', '2023-10-27 10:04:19');
INSERT INTO `tp_user` VALUES (3, '魏无羡', 'e10adc3949ba59abbe56e057f20f883e', 1, 'wwx@qq.com', 1, '2023-10-27 19:21:13', '2023-10-27 19:21:13');
INSERT INTO `tp_user` VALUES (4, '蓝湛', 'e10adc3949ba59abbe56e057f20f883e', 1, 'wx@qq.com', 1, '2023-10-27 19:21:21', '2023-10-27 19:21:21');
INSERT INTO `tp_user` VALUES (5, '魏羡', 'e10adc3949ba59abbe56e057f20f883e', 1, 'lz@qq.com', 1, '2023-10-27 19:21:25', '2023-10-27 19:21:25');
INSERT INTO `tp_user` VALUES (6, '青鬼戚容', 'e10adc3949ba59abbe56e057f20f883e', 1, 'qr@163.com', 1, '2023-10-27 10:04:16', '2023-10-27 10:04:19');
INSERT INTO `tp_user` VALUES (7, '黑水沉舟', 'e10adc3949ba59abbe56e057f20f883e', 1, 'hscz@163.com', 1, '2023-10-27 10:04:16', '2023-10-27 10:04:19');
INSERT INTO `tp_user` VALUES (8, '百武相', 'e10adc3949ba59abbe56e057f20f883e', 1, 'bwx@163.com', 1, '2023-10-27 10:04:16', '2023-10-27 10:04:19');
INSERT INTO `tp_user` VALUES (9, '泰华', 'e10adc3949ba59abbe56e057f20f883e', 1, 'th@foxmail.com', 1, '2023-10-27 19:21:04', '2023-10-27 19:21:04');
INSERT INTO `tp_user` VALUES (10, '风使大人', 'e10adc3949ba59abbe56e057f20f883e', 2, 'fs@163.com', 0, '2023-10-27 17:19:51', '2023-10-27 17:19:51');
INSERT INTO `tp_user` VALUES (11, '士大夫', 'e10adc3949ba59abbe56e057f20f883e', 1, 'sdf@163.com', 1, '2023-10-27 11:53:04', '2023-10-27 11:53:04');
INSERT INTO `tp_user` VALUES (12, '和风格', 'e10adc3949ba59abbe56e057f20f883e', 1, 'wwfsx@163.com', 1, '2023-10-27 10:04:16', '2023-10-27 10:04:19');
INSERT INTO `tp_user` VALUES (13, '规划', 'e10adc3949ba59abbe56e057f20f883e', 1, 'gd@foxmail.com', 0, '2023-10-27 19:20:59', '2023-10-27 19:20:59');
INSERT INTO `tp_user` VALUES (14, '蝶阀', 'e10adc3949ba59abbe56e057f20f883e', 2, 'ds@163.com', 1, '2023-10-27 17:19:54', '2023-10-27 17:19:54');
INSERT INTO `tp_user` VALUES (15, '手动', 'e10adc3949ba59abbe56e057f20f883e', 1, 'sd@qq.com', 1, '2023-10-27 19:21:34', '2023-10-27 19:21:34');
INSERT INTO `tp_user` VALUES (17, '你好', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'hello@163.com', 1, '2023-10-27 14:44:59', '2023-10-27 14:44:59');
INSERT INTO `tp_user` VALUES (19, '李白', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'libai@foxmail.com', 1, '2023-11-01 19:56:46', '2023-11-01 19:56:46');

SET FOREIGN_KEY_CHECKS = 1;
