/*
Navicat MySQL Data Transfer

Source Server         : algo
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : freelance_zen

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2015-02-16 23:17:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `contactos`
-- ----------------------------
DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of contactos
-- ----------------------------

-- ----------------------------
-- Table structure for `mensajes`
-- ----------------------------
DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE `mensajes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of mensajes
-- ----------------------------
INSERT INTO `mensajes` VALUES ('1', 'foo@bar.com', 'luarencio', 'Hola quería saber el sentido de la vida.', '0', '2015-02-16 22:24:31', '2015-02-16 22:24:31');
INSERT INTO `mensajes` VALUES ('2', 'pepe@mujica.com', 'pepe', 'Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias! Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias!', '0', '2015-02-16 22:24:31', '2015-02-16 22:24:31');
INSERT INTO `mensajes` VALUES ('3', 'facundopereztomasek@gmail.com', 'facu', 'Hola soy facu perez, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias! Hola, quería saber cuánto estaba el kilo de fruta fresca en el chino de acá a la vuelta. Gracias!', '0', '2015-02-16 22:24:31', '2015-02-16 22:24:31');
INSERT INTO `mensajes` VALUES ('4', 'lucianoperezt@gmail.com', 'luco', 'Hola quería saber que pasa si te metes en un agujero de gusano.', '0', '2015-02-16 22:24:31', '2015-02-16 22:24:31');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2015_02_08_000721_crear_tabla_mensajes', '1');
INSERT INTO `migrations` VALUES ('2015_02_08_000742_crear_tabla_respuestas', '1');
INSERT INTO `migrations` VALUES ('2015_02_08_002840_crear_tabla_contactos', '1');
INSERT INTO `migrations` VALUES ('2015_02_12_170415_crear_tabla_users', '1');

-- ----------------------------
-- Table structure for `respuestas`
-- ----------------------------
DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE `respuestas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mensaje_id` int(10) unsigned NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `respuestas_mensaje_id_foreign` (`mensaje_id`),
  CONSTRAINT `respuestas_mensaje_id_foreign` FOREIGN KEY (`mensaje_id`) REFERENCES `mensajes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of respuestas
-- ----------------------------
INSERT INTO `respuestas` VALUES ('1', '1', 'Que se yo', '2015-02-16 22:24:31', '2015-02-16 22:24:31');
INSERT INTO `respuestas` VALUES ('2', '2', 'La respuesta esta en tu corazón', '2015-02-16 22:24:31', '2015-02-16 22:24:31');
INSERT INTO `respuestas` VALUES ('3', '3', 'Ni idea.', '2015-02-16 22:24:31', '2015-02-16 22:24:31');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'gustavo', '$2y$10$BWw7s/DIj5w5MhhYVg6YwetYfg7ns1G7bnZXcjBJnWo.OZhxEz1jy', null, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
