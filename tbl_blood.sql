-- Adminer 4.8.1 MySQL 5.5.5-10.4.21-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tbl_blood`;
CREATE TABLE `tbl_blood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_blood` (`id`, `name`, `group_name`, `city`, `phone`, `age`, `type`) VALUES
(3,	'Abir',	'AB-',	'Khulna',	'01997343783',	'22',	'Donor'),
(4,	'MERCUSYS_70FE',	'AB-',	'Khulna',	'01997343783',	'22',	'Donor'),
(5,	'Arif',	'AB+',	'Khulna',	'01978191810',	'52',	'Donor'),
(6,	'',	'',	'',	'',	'',	''),
(7,	'khan ashik',	'B-',	'Khulna',	'01919802709',	'27',	'volunteer'),
(8,	'Mukit',	'B+',	'Khulna',	'01911886464',	'29',	'Donor'),
(9,	'Bappy Khulna',	'',	'Khulna',	'019111111111',	'',	''),
(10,	'Shajid',	'',	'',	'',	'',	''),
(11,	'bg.sohel@ssali.co',	'',	'',	'',	'',	''),
(12,	'a.sohel',	'',	'',	'',	'',	''),
(13,	'bg.sohel@ssali.co',	'',	'',	'',	'',	'');

-- 2022-09-12 09:36:10
