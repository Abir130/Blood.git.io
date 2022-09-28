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
  `district` varchar(20) NOT NULL,
  `street` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `age` varchar(3) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'Donor',
  `gender` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'Available',
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_blood` (`id`, `name`, `group_name`, `city`, `district`, `street`, `phone`, `age`, `type`, `gender`, `status`, `password`) VALUES
(239,	'Aslam',	'AB+',	'Dhaka',	'Rajbari',	'Haji ismail link road ,khulna',	'01913726487',	'22',	'Donor',	'Male',	'Available',	'55555'),
(240,	'Abir',	'AB-',	'Rangpur',	'Rangpur',	'Haji ismail link road ,khulna',	'01997343783',	'22',	'Donor',	'Male',	'unavailable',	'123456'),
(241,	'Tanvir',	'B+',	'Khulna',	'Khulna',	'Haji ismail link road ,khulna',	'01400276954',	'22',	'Volunteer',	'Male',	'Available',	'55555'),
(242,	'jjjjj',	'AB+',	'Dhaka',	'Rangpur',	'Haji ismail link road ,khulna',	'01997343000',	'52',	'Donor',	'Male',	'Available',	'');

-- 2022-09-28 21:12:50
