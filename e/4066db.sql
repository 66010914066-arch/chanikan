-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 05:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4066db`
--
CREATE DATABASE IF NOT EXISTS `4066db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4066db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(255) NOT NULL,
  `a_position` varchar(255) NOT NULL,
  `a_prefix` varchar(50) NOT NULL,
  `a_fullname` varchar(255) NOT NULL,
  `a_dob` date DEFAULT NULL,
  `a_education` varchar(100) NOT NULL,
  `a_skills` text NOT NULL,
  `a_experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_prefix`, `a_fullname`, `a_dob`, `a_education`, `a_skills`, `a_experience`) VALUES
(1, '', '', '', NULL, '', '', ''),
(3, 'นักวิเคราะห์ข้อมูล', 'นางสาว', 'ใจดี มีใจ', '2025-12-06', 'ปริญญาตรี', 'ภาษาอังกฤษ', '-'),
(4, 'นักวิเคราะห์ข้อมูล', 'นาง', 'ใจดี มีใจ', '2025-12-05', 'ปริญญาตรี', 'ภาษาอังกฤษ', 'บริษัทเฮงๆ'),
(5, 'วิศวกรซอฟต์แวร์', 'นางสาว', 'ชนิกานต์ ขำสระน้อย', '0548-04-08', 'ปริญญาตรี', 'ภาษาอังกฤษ', 'บริษัทมีเดียม ตำแหน่งนักวิเคราห์ระบบ ระยะเวลาทำงาน 2 ปี'),
(6, 'วิศวกรซอฟต์แวร์', 'นาย', 'กิตติ ไขสือ', '2546-02-11', 'ปริญญาโท', 'Python', 'บริษัทโกล ตำแหน่งวิศวกรซอฟแวร์ ระยะเวลาทำงาน 5 ปี');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(6) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` varchar(3) NOT NULL,
  `r_color` varchar(255) NOT NULL,
  `r_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_color`, `r_major`) VALUES
(1, 'ชนิกานต์ ขำสระน้อย', '', '', '', ''),
(2, 'มาดี สุขใจ', '', '', '', ''),
(3, 'ใจดี มีใจ', '', '', '', ''),
(4, 'สมชัย กล้าหาญ', '', '', '', ''),
(5, 'กิตติ ไขสือ', '0896354123', '', '', ''),
(6, 'จิตดี มีตัง', '0922561478', '165', '', ''),
(7, 'ชาติชาย รวยมาก', '0963452369', '176', '#0df9fd', ''),
(8, 'สมหญิง สิงห์หา', '0985471558', '155', '#0dfd81', 'คอมพิวเตอร์ธุรกิจ'),
(9, 'ชนาการ มีมาก', '0863254123', '168', '#fd8d0d', 'การตลาด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
