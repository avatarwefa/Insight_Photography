

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `address` (
  `ID` int(11) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `bundle` (
  `ID` int(11) NOT NULL,
  `BUNDLE_NAME` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BUNDLE_DES` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci,
  `BUNDLE_PRICE` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `course` (
  `course_id` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `teacher` text COLLATE utf8_unicode_ci NOT NULL,
  `thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `email` (
  `ID` int(11) NOT NULL,
  `value` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `images` (
  `ID` int(11) NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE `lessons` (
  `lessons_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `phone` (
  `ID` int(11) NOT NULL,
  `value` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `GENDER` tinyint(1) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `FULL_NAME` varchar(60) NOT NULL,
  `TRIAL_DATE` date NOT NULL,
  `IDGROUP` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `bundle`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

ALTER TABLE `email`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lessons_id`),
  ADD KEY `course_id` (`course_id`);

ALTER TABLE `phone`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);


ALTER TABLE `address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `bundle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `email`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `lessons`
  MODIFY `lessons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `phone`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);
COMMIT;


CREATE TABLE `insight`.`SCHEDULE` ( `SCHEDULE_ID` INT NOT NULL AUTO_INCREMENT , `SCHEDULE_INFO` VARCHAR(200) NOT NULL , `SCHEDULE_GADGETS` VARCHAR(50) NOT NULL , `SCHEDULE_DATE` DATE NOT NULL , `SCHEDULE_AREA` VARCHAR(20) NOT NULL , `SCHEDULE_FREE` BOOLEAN NOT NULL DEFAULT TRUE, PRIMARY KEY (`SCHEDULE_ID`)) ENGINE = InnoDB;  

INSERT INTO `course` (`course_id`, `name`, `teacher`, `thumb`, `description`) VALUES
(1, 'CHO NGƯỜI MỚI BẮT ĐẦU', 'Nguyễn Văn A', 'https://eus-www.sway-cdn.com/s/5qXqnkeuHtzDFomD/images/cJ0CtSFtqsGN-Y?quality=480&allowAnimation=true&embeddedHost=true', 'Description'),
(2, 'PHAN LOẠI MÁY ẢNH', 'Nguyễn Văn B', 'https://phongvu.vn/cong-nghe/wp-content/uploads/2019/09/may-co-demifilm.png', 'Description'),
(3, 'CÁC TIPS KHI HỌC NHIẾP ẢNH', 'Nguyễn Văn C', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSva5Lqr2haWdl4YfnXGWDa4ucgbHW1puybSQ&usqp=CAU', 'Description');


INSERT INTO `SCHEDULE` (`SCHEDULE_ID`, `SCHEDULE_INFO`, `SCHEDULE_GADGETS`, `SCHEDULE_DATE`, `SCHEDULE_AREA`, `SCHEDULE_FREE`) VALUES (NULL, 'Cac thao tac cam may co ban', 'Camera', '2020-07-13', 'CS1', '1'), (NULL, 'Chinh sua hinh anh', 'Laptop, Dien Thoai', '2020-07-23', 'CS2', '0');
INSERT INTO `images` (`ID`, `url`) VALUES
(1, 'https://unsplash.it/600/300?image=529'),
(2, 'https://unsplash.it/600/300?image=523'),
(3, 'https://unsplash.it/600/300?image=503'),
(4, 'https://unsplash.it/600/300?image=505'),
(5, 'https://unsplash.it/600/300?image=454'),
(6, 'https://unsplash.it/600/300?image=515'),
(7, 'https://unsplash.it/600/300?image=451');

INSERT INTO `lessons` (`lessons_id`, `course_id`, `video_id`, `title`) VALUES
(1, 1, 'UEWGvm--zz4', 'Nhiếp ảnh là gì'),
(2, 1, 'UEWGvm--zz4', 'Chọn máy ảnh'),
(3, 1, 'UEWGvm--zz4', 'Title'),
(4, 1, '2VjHjA0GlbM', 'Title4');

INSERT INTO `phone` (`ID`, `value`) VALUES
(1, '01234534325');
INSERT INTO `email` (`ID`, `value`) VALUES
(1, 'KHUONG@123.COM');


INSERT INTO `address` (`ID`, `value`) VALUES
(1, '113 LY THUONG KIET');

INSERT INTO `bundle` (`ID`, `BUNDLE_NAME`, `BUNDLE_DES`, `BUNDLE_PRICE`) VALUES
(1, 'CƠ BẢN', 'Stream các video về nhiếp ảnh cơ bản, các tips mới nhất <br> Tutorial về chỉnh sửa ảnh & challenge hàng tuần', '$0'),
(2, 'CHUYÊN NGHIỆP', 'Các video chuyên sâu về nhiếp ảnh <br>Các buổi học offline và truy cập vào kho nội dung trực tuyến có thể tải về', '$150'),
(3, 'NÂNG CAO', 'Đi các chuyến dã ngoại thực hành các kỹ năng đã học<br> Nhận được feedback và hướng dẫn trong suốt khoá học', '$400');



