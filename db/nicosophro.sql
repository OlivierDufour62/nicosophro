START TRANSACTION;

DROP DATABASE IF EXISTS nicosophro_bdd;
CREATE DATABASE nicosophro_bdd;
USE nicosophro_bdd;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `lastname` VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `content` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(20) NOT NULL UNIQUE,
    `date_create` DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;