-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2020 at 04:31 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insight`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADDRESS`
--

CREATE TABLE `ADDRESS` (
  `ID` int(11) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ADDRESS`
--

INSERT INTO `ADDRESS` (`ID`, `value`) VALUES
(1, '113 LY THUONG KIET');

-- --------------------------------------------------------

--
-- Table structure for table `BUNDLE`
--

CREATE TABLE `BUNDLE` (
  `ID` int(11) NOT NULL,
  `BUNDLE_NAME` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BUNDLE_DES` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `BUNDLE_PRICE` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BUNDLE`
--

INSERT INTO `BUNDLE` (`ID`, `BUNDLE_NAME`, `BUNDLE_DES`, `BUNDLE_PRICE`) VALUES
(1, 'CƠ BẢN', 'Stream các video về nhiếp ảnh cơ bản, các tips mới nhất <br> Tutorial về chỉnh sửa ảnh & challenge hàng tuần', '$0'),
(2, 'CHUYÊN NGHIỆP', 'Các video chuyên sâu về nhiếp ảnh <br>Các buổi học offline và truy cập vào kho nội dung trực tuyến có thể tải về', '$150'),
(3, 'NÂNG CAO', 'Đi các chuyến dã ngoại thực hành các kỹ năng đã học<br> Nhận được feedback và hướng dẫn trong suốt khoá học', '$400');

-- --------------------------------------------------------

--
-- Table structure for table `EMAIL`
--

CREATE TABLE `EMAIL` (
  `ID` int(11) NOT NULL,
  `value` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EMAIL`
--

INSERT INTO `EMAIL` (`ID`, `value`) VALUES
(1, 'KHUONG@123.COM');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID` int(11) NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID`, `url`) VALUES
(1, 'https://unsplash.it/600/300?image=529'),
(2, 'https://unsplash.it/600/300?image=523'),
(3, 'https://unsplash.it/600/300?image=503'),
(4, 'https://unsplash.it/600/300?image=505'),
(5, 'https://unsplash.it/600/300?image=454'),
(6, 'https://unsplash.it/600/300?image=515'),
(7, 'https://unsplash.it/600/300?image=451');

-- --------------------------------------------------------

--
-- Table structure for table `PHONE`
--

CREATE TABLE `PHONE` (
  `ID` int(11) NOT NULL,
  `value` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PHONE`
--

INSERT INTO `PHONE` (`ID`, `value`) VALUES
(1, '01234534325');

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `GENDER` tinyint(1) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `FULL_NAME` varchar(60) NOT NULL,
  `TRIAL_DATE` date NOT NULL,
  `IDGROUP` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ADDRESS`
--
ALTER TABLE `ADDRESS`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BUNDLE`
--
ALTER TABLE `BUNDLE`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `EMAIL`
--
ALTER TABLE `EMAIL`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `PHONE`
--
ALTER TABLE `PHONE`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ADDRESS`
--
ALTER TABLE `ADDRESS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `BUNDLE`
--
ALTER TABLE `BUNDLE`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `EMAIL`
--
ALTER TABLE `EMAIL`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `PHONE`
--
ALTER TABLE `PHONE`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
