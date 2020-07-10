-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 11:03 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(11) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID`, `value`) VALUES
(1, '113 LY THUONG KIET');

-- --------------------------------------------------------

--
-- Table structure for table `bundle`
--

CREATE TABLE `bundle` (
  `ID` int(11) NOT NULL,
  `BUNDLE_NAME` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BUNDLE_DES` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `BUNDLE_PRICE` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bundle`
--

INSERT INTO `bundle` (`ID`, `BUNDLE_NAME`, `BUNDLE_DES`, `BUNDLE_PRICE`) VALUES
(1, 'CƠ BẢN', 'Stream các video về nhiếp ảnh cơ bản, các tips mới nhất <br> Tutorial về chỉnh sửa ảnh & challenge hàng tuần', '$0'),
(2, 'CHUYÊN NGHIỆP', 'Các video chuyên sâu về nhiếp ảnh <br>Các buổi học offline và truy cập vào kho nội dung trực tuyến có thể tải về', '$150'),
(3, 'NÂNG CAO', 'Đi các chuyến dã ngoại thực hành các kỹ năng đã học<br> Nhận được feedback và hướng dẫn trong suốt khoá học', '$400');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `comment`) VALUES
('k', 'k'),
('a ', 'a'),
('b', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher` text COLLATE utf8_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `teacher`, `thumb`, `description`) VALUES
(1, 'CHO NGƯỜI MỚI BẮT ĐẦU', 'Nguyễn Văn A', 'https://eus-www.sway-cdn.com/s/5qXqnkeuHtzDFomD/images/cJ0CtSFtqsGN-Y?quality=480&allowAnimation=true&embeddedHost=true', 'Description'),
(2, 'PHAN LOẠI MÁY ẢNH', 'Nguyễn Văn B', 'https://phongvu.vn/cong-nghe/wp-content/uploads/2019/09/may-co-demifilm.png', 'Description'),
(3, 'CÁC TIPS KHI HỌC NHIẾP ẢNH', 'Nguyễn Văn C', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSva5Lqr2haWdl4YfnXGWDa4ucgbHW1puybSQ&usqp=CAU', 'Description');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `ID` int(11) NOT NULL,
  `value` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`ID`, `value`) VALUES
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
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lessons_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `video_id` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lessons_id`, `course_id`, `video_id`, `title`, `description`) VALUES
(1, 1, 'uleakGTkIoA', 'Nhiếp ảnh là gì? Học nhiếp ảnh?', 'Description bài 1'),
(2, 1, 'TBq9jfRP0sM\r\n', 'Chọn máy ảnh', 'Description bài 2'),
(3, 1, 'tAaUbRt6jqM', 'Title', 'Description bài 3'),
(4, 1, '2VjHjA0GlbM', 'Title4', 'Description bài 4');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `ID` int(11) NOT NULL,
  `value` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`ID`, `value`) VALUES
(1, '01234534325');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `SCHEDULE_ID` int(11) NOT NULL,
  `SCHEDULE_INFO` varchar(200) NOT NULL,
  `SCHEDULE_GADGETS` varchar(50) NOT NULL,
  `SCHEDULE_DATE` date NOT NULL,
  `SCHEDULE_AREA` varchar(20) NOT NULL,
  `SCHEDULE_FREE` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`SCHEDULE_ID`, `SCHEDULE_INFO`, `SCHEDULE_GADGETS`, `SCHEDULE_DATE`, `SCHEDULE_AREA`, `SCHEDULE_FREE`) VALUES
(1, 'Cac thao tac cam may co ban', 'Camera', '2020-07-13', 'CS1', 1),
(2, 'Chinh sua hinh anh', 'Laptop, Dien Thoai', '2020-07-23', 'CS2', 0);
INSERT INTO `schedule` (`SCHEDULE_ID`, `SCHEDULE_INFO`, `SCHEDULE_GADGETS`, `SCHEDULE_DATE`, `SCHEDULE_AREA`, `SCHEDULE_FREE`) VALUES (NULL, 'Góc chụp và hệ thống lưới 3x3', 'Điện thoại/ Camera', '2020-08-05', 'LiveStream Youtube', '1'), (NULL, 'Sử dụng Adobe Photoshop và Lightroom để chỉnh màu sắc', 'Máy tính, App', '2020-08-12', 'Cơ sở 2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `GENDER` tinyint(1) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `FULL_NAME` varchar(60) CHARACTER SET utf8 NOT NULL,
  `TRIAL_DATE` date NOT NULL DEFAULT '0000-00-00',
  `IDGROUP` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_NAME`, `PASSWORD`, `GENDER`, `EMAIL`, `FULL_NAME`, `TRIAL_DATE`, `IDGROUP`) VALUES
(4, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, 'anh.trantuananh@hcmut.edu.vn', 'T? Ng?c Huy', '2020-07-09', 1),
(5, 'Trantran', 'e10adc3949ba59abbe56e057f20f883e', 1, 'trantuananh100119999@gmail.com', 'Trần Tuấn Anh', '2020-07-09', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bundle`
--
ALTER TABLE `bundle`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`SCHEDULE_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bundle`
--
ALTER TABLE `bundle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `SCHEDULE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
