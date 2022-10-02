-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2022 at 06:32 AM
-- Server version: 10.5.17-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getblood_blooddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blood`
--

CREATE TABLE `tbl_blood` (
  `id` int(11) NOT NULL,
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
  `facebook` varchar(255) DEFAULT NULL,
  `number_security` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blood`
--

INSERT INTO `tbl_blood` (`id`, `name`, `group_name`, `city`, `district`, `street`, `phone`, `age`, `type`, `gender`, `status`, `password`, `facebook`, `number_security`) VALUES
(1, 'Sheikh Tanvir Ahamed ', 'B+', 'Khulna', 'Khulna', 'Haji ismail link road ,khulna', '01400276954', '22', 'Volunteer', 'Male', 'Available', '#tanvir123$', 'https://www.facebook.com/Tanvir5141', 'on'),
(2, 'Abir Hossain', 'AB-', 'Khulna', 'Khulna', 'Haji ismail link road ,khulna', '01997343783', '22', 'Donor', 'Male', 'Available', '#abir123$', 'https://www.facebook.com/?_rdc=1&_rdr', NULL),
(3, 'Gazi Saif Al Islam ', 'O+', 'Khulna', 'Satkhira', 'Sonadanga,khulna', '01814644784', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(4, 'Robiul Awaul Zehade ', 'B+', 'Khulna', 'Khulna', 'Khalispur ', '01738593962', '19', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(5, 'Md Motiar', 'O+', 'Khulna', 'Khulna', 'Haji ismail link road,banorgati khulna', '01400198175', '17', 'User', 'Male', 'Available', '', NULL, 'on'),
(6, 'Prince Rahman', 'O+', 'Khulna', 'Khulna', 'Aalir club more,sonadanga khulna', '01940147896', '22', 'Volunteer', 'Male', 'Available', '', NULL, 'on'),
(7, 'Shajidul Islam Linkon', 'O-', 'Dhaka', 'Dhaka', 'Hasnabad', '01700569003', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(8, 'RAIYAN RAKIB GAZI', 'AB+', 'Khulna', 'Khulna', '23/1, Old Gollamari, khulna.', '01976302781', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(9, 'Salman Farshi', 'B+', 'Khulna', 'Khulna', 'Bashupara', '01976288629', '24', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(10, 'Rabbi', 'AB+', 'Khulna', 'Khulna', 'Boyra', '01733323454', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(11, 'Md Arif Ahmed', 'A+', 'Khulna', 'Khulna', 'Hajiismail link shosi vushon road,banorgati,sonadanga, khulna', '01978191810', '21', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(12, 'Antor Biswas Pappu', 'B+', 'Khulna', 'Khulna', 'sachibunia, khulna, batigatha ', '01918137015', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(13, 'Md Towsif Islam', 'B+', 'Khulna', 'Khulna', 'Sonali nogor nobo polli sonadanga,Khulna', '01795295553', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(14, 'Sk ibrahim', 'A+', 'Khulna', 'Khulna', 'Nobopolli,sonadanga', '01987263162', '22', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(15, 'Ratul Hasan Nishad', 'O+', 'Khulna', 'Khulna', 'Sonali nagor, sonadanga khulna.', '01641630626', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(16, 'Aminul Islam Shuvro', 'AB+', 'Khulna', 'Khulna', 'Fulbarigate , Khulna , Bangladesh', '01789239422', '22', 'Volunteer', 'Male', 'unavailable', '#shuvro123$', NULL, 'on'),
(17, 'Md. Tuhin Hosen', 'A+', 'Khulna', 'Jashore', '', '01927726272', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(18, 'Tamim', 'O+', 'Khulna', 'Khulna', '', '01700984159', '17', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(19, 'Junaied', 'B+', 'Khulna', 'Khulna', 'Shiromoni ', '01855326069', '17', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(20, 'Monirul islam Mueid', 'B+', 'Khulna', 'Bagerhat', 'Chitalmari ', '01970856239', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(21, 'Mohammad Lipon ', 'O+', 'Khulna', 'Khulna', 'Goyalkhali', '01726927085', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(22, 'Sagar', 'B+', 'Khulna', 'Khulna', '06 mujgunni R/A', '01723846787', '32', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(23, 'Sajuti Rahman Siza ', 'O+', 'Khulna', 'Khulna', 'Bosupara ', '01942656455', '17', 'Donor', 'Female', 'Available', '', NULL, 'on'),
(24, ' Khan', 'A+', 'Barishal', 'Barguna', 'Patharghata ', '01608127837', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(25, 'Sadman tahi', 'A+', 'Khulna', 'Khulna', '9/13 A , Boyra Market Road, sonadanga, khulna-9000', '01976010908', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(26, 'Sabina Rahman', 'B+', 'Khulna', 'Satkhira', 'Shyamnagar ', '01934944902', '18', 'User', 'Female', 'unavailable', '', NULL, 'on'),
(27, 'M.A.Rahman', 'B+', 'Khulna', 'Satkhira', 'Dhaka Narayanganj ', '01996889410', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(28, 'Mainul Islam ', 'B+', 'Khulna', 'Khulna', '44/13 Hazi Tomizuddin Road Darul Aman moholla,Sonadanga,Khulna', '01734869079', '36', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(29, 'Farhan sadik ', 'O+', 'Khulna', 'Khulna', 'Niraloy ', '01902006256', '18', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(30, 'Rahat', 'B+', 'Khulna', 'Khulna', 'Golakhali main road', '01980449642', '20', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(31, 'khan ashik', '', 'Khulna', 'Khulna', 'Haji ismail link road, Bangor Gati.', '01919802709', '27', 'Donor', 'Male', 'Available', '', '', 'on'),
(32, 'MD NAEEMUR RAHMAN ', 'A+', 'Khulna', 'Khulna', 'Jamira, phultala, khulna ', '01601159535', '19', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(33, 'Hasib', 'B+', 'Khulna', 'Bagerhat', 'শরনখোলা', '01771990866', '23', 'Donor', 'Male', 'Available', '', NULL, 'on'),
(34, 'Md Tariqul Islam', 'B+', 'Khulna', 'Khulna', 'Sonadanga,khulna', '01905628192', '19', 'User', 'Male', 'Available', '', 'https://www.facebook.com/profile.php?id=100062701235423', 'on'),
(35, 'Ratul Islam', 'B+', 'Khulna', 'Khulna', 'Sonadanga,khulna', '01912587935', '16', 'User', 'Male', 'Available', '', 'Adnana ratul bro', 'on'),
(36, 'Rahat', 'B+', 'Khulna', 'Khulna', 'Sonadanga,khulna', '01922727387', '17', 'User', 'Male', 'Available', '', 'https://www.facebook.com/rahatgggg', 'on'),
(37, 'Md. Hasib Bhuiya', 'B+', 'Khulna', 'Khulna', 'boyra ', '01719786804', '20', 'Donor', 'Male', 'Available', '', NULL, 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blood`
--
ALTER TABLE `tbl_blood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blood`
--
ALTER TABLE `tbl_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
