-- Adminer 4.8.1 MySQL 5.5.5-10.4.21-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tbl_blood`;
CREATE TABLE `tbl_blood` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `group_name` varchar(3) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `age` varchar(3) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_blood` (`id`, `name`, `group_name`, `city`, `phone`, `age`, `type`) VALUES
(33,	'Md khan ashik ',	'AB-',	'Khulna',	'01997343783',	'22',	'Donor'),
(34,	'',	'',	'',	'01997343783',	'',	''),
(35,	'Abir22',	'AB-',	'Khulna',	'01997343783',	'22',	'Donor'),
(36,	'',	'',	'',	'01997343783',	'',	''),
(37,	'',	'',	'',	'01997343783',	'',	''),
(38,	'',	'',	'',	'01997343783',	'',	''),
(39,	'',	'',	'',	'01997343783',	'',	''),
(40,	'',	'',	'',	'01997343783',	'',	''),
(41,	'Arif',	'AB-',	'Khulna',	'01997343783',	'42',	'Donor'),
(42,	'',	'',	'',	'',	'',	''),
(43,	'',	'',	'',	'01997343780',	'',	''),
(44,	'',	'',	'',	'01978191810',	'',	''),
(45,	'',	'',	'',	'12345',	'',	''),
(46,	'',	'',	'',	'019',	'',	''),
(47,	'',	'',	'',	'123456',	'',	''),
(48,	'',	'',	'',	'01997343783',	'',	''),
(49,	'',	'',	'',	'01997343722',	'',	''),
(50,	'tbl_blood',	'A+',	'Khulna',	'01978191812',	'22',	'User'),
(51,	'Arif1234567892222222',	'AB+',	'11111111111111111111',	'01997343784',	'100',	'Donor'),
(52,	'',	'',	'',	'01997343741',	'299',	''),
(53,	'khan ashik',	'A+',	'Khulna',	'01997343781',	'27',	'Donor'),
(54,	'',	'',	'',	'lllllllllll',	'',	''),
(55,	'',	'',	'',	'01997343789',	'',	''),
(56,	'Md Motiar Rahman',	'O+',	'khulna',	'01400198175',	'17',	'Donor'),
(57,	'Shajid',	'AB-',	'Khulna',	'01700569003',	'22',	'Donor');

-- 2022-09-17 07:28:44
