

DROP TABLE IF EXISTS `library`.`books`;
DROP TABLE IF EXISTS `library`.`categories`;
DROP TABLE IF EXISTS `library`.`loans`;
DROP TABLE IF EXISTS `library`.`users`;


CREATE TABLE `library`.`books` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`ISBN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`category_id` int(11) NOT NULL,
	`author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8mb4,
	COLLATE=utf8mb4_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `library`.`categories` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8mb4,
	COLLATE=utf8mb4_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `library`.`loans` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id` int(11) NOT NULL,
	`book_id` int(11) NOT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8mb4,
	COLLATE=utf8mb4_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `library`.`users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`created` datetime NOT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8mb4,
	COLLATE=utf8mb4_general_ci,
	ENGINE=InnoDB;

