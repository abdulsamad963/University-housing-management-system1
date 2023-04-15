-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2022 at 06:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `punishment`
--

CREATE TABLE `punishment` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `type` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `stdId` int(11) NOT NULL,
  `date` date NOT NULL,
  `excDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `punishment`
--

INSERT INTO `punishment` (`id`, `title`, `type`, `reason`, `stdId`, `date`, `excDate`) VALUES
(3, 'إنذار', 'إنذار', 'تدخين', 6, '2022-09-15', '2022-09-16'),
(4, 'إنذار', 'إنذار مسجل', 'التدخين', 6, '2022-09-15', '2022-09-16'),
(5, 'إنذار', 'إنذار مسجل', 'التدخين', 6, '2022-09-15', '2022-09-16'),
(6, 'إنذار', 'إنذار مسجل', 'التدخين', 6, '2022-09-15', '2022-09-16'),
(7, 'إنذار', 'إنذار مسجل', 'التدخين', 6, '2022-09-15', '2022-09-16'),
(8, 'إنذار', 'إنذار مسجل', 'التدخين', 6, '2022-09-15', '2022-09-16'),
(9, 'إنذار', 'إنذار مسجل', 'التدخين', 6, '2022-09-15', '2022-09-16'),
(10, 'إنذار', 'إنذار مسجل', 'التدخين', 6, '2022-09-15', '2022-09-16'),
(11, 'إنذار', 'a', 'تدخين', 6, '2022-09-15', '2022-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `name` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `distance` varchar(200) NOT NULL,
  `marital` varchar(200) NOT NULL,
  `financial` varchar(200) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `room` int(200) NOT NULL,
  `h` varchar(200) NOT NULL,
  `i` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `a1` varchar(200) NOT NULL,
  `a2` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `k` varchar(200) NOT NULL,
  `l` varchar(200) NOT NULL,
  `number` varchar(300) NOT NULL,
  `job` varchar(400) NOT NULL,
  `number2` varchar(300) NOT NULL,
  `date` varchar(200) NOT NULL,
  `alhala` varchar(100) NOT NULL,
  `dkan` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`name`, `section`, `place`, `distance`, `marital`, `financial`, `notes`, `room`, `h`, `i`, `level`, `a1`, `a2`, `lname`, `k`, `l`, `number`, `job`, `number2`, `date`, `alhala`, `dkan`, `num`, `id`) VALUES
('عبد الصمد عماد عبد الصمد', 'كلية الهندسة المعلوماتية ', 'ادلب المدينة', '200', 'أعزب', 'ضعيف', 'لايوجد', 200, '9899', 'FB_VID_7564793490499380106.mp4', '4', '', '', 'Abdulsamad emad Abdulsamad', 'لايوجد', 'لايوجد', '+963937550394', 'أستاذ مدرسة', '0987654', '2001-12-09', 'سليم', 'غير مدخن', 'لايوجد', 1),
('عبد السلام أحمد الضعيف', 'كلية الهندسة المعلوماتية ', 'ادلب المدينة', '200', 'متزوج', 'ضعيف', 'لايوجد', 14, '9899', 'FB_VID_7564793490499380106.mp4', '4', '', '', 'Abdulsamad emad Abdulsamad', 'لايوجد', 'لايوجد', '+963937550394', 'أستاذ مدرسة', '0987654', '2001-12-09', 'سليم', 'غير مدخن', 'لايوجد', 2),
('أنس احمد عثمان', 'كلية الهندسة المعلوماتية ', 'ادلب المدينة', '200', 'متزوج', 'ضعيف', 'لايوجد', 14, '9899', 'FB_VID_7564793490499380106.mp4', '4', '', '', 'Abdulsamad emad Abdulsamad', 'لايوجد', 'لايوجد', '+963937550394', 'أستاذ مدرسة', '0987654', '2001-12-09', 'سليم', 'غير مدخن', 'لايوجد', 3),
('نوار احمد شعبوق', 'كلية الهندسة المعلوماتية ', 'ادلب المدينة', '200', 'أعزب', 'ضعيف', 'لايوجد', 14, '9899', 'FB_VID_7564793490499380106.mp4', '4', '', '', 'Abdulsamad emad Abdulsamad', 'لايوجد', 'لايوجد', '+963937550394', 'أستاذ مدرسة', '0987654', '2001-12-09', 'سليم', 'مدخن', 'لايوجد', 4),
('حسن شوبك', 'كلية الهندسة المعلوماتية ', 'ادلب المدينة', '200', 'أعزب', 'ضعيف', 'لايوجد', 14, '9899', 'FB_VID_7564793490499380106.mp4', '4', '', '', 'Abdulsamad emad Abdulsamad', 'لايوجد', 'لايوجد', '+963937550394', 'أستاذ مدرسة', '0987654', '2001-12-09', 'سليم', 'مدخن', 'لايوجد', 5),
('حسن محمد حليب', 'كلية الهندسة المدنية', 'ادلب المدينة', '200', 'متزوج', 'ضعيف', 'لايوجد', 14, '9899', 'FB_VID_7564793490499380106.mp4', '4', '', '', 'Abdulsamad emad Abdulsamad', 'لايوجد', 'لايوجد', '+963937550394', 'أستاذ مدرسة', '0987654', '2001-12-09', 'سليم', 'مدخن', 'لايوجد', 6),
('عادل غسان النبهان', 'كلية الهندسة المعلوماتية ', 'حزانو /ادلب ', '200', 'أعزب', 'ضعيف', 'هناك أعاقة بالعقل', 16, '987655', 'IMG_٢٠٢٢٠٢١٩_١٨٣٣١٩.jpg', '1', '', '', 'Adel gsan nbhan', 'عاطل عن العمل', 'لايوجد', '+963937550394', 'حلاق', '0987654', '2000-01-01', 'سليم', 'غير مدخن', 'لايوجد', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `punishment`
--
ALTER TABLE `punishment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stdId` (`stdId`);

--
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `punishment`
--
ALTER TABLE `punishment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table3`
--
ALTER TABLE `table3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `punishment`
--
ALTER TABLE `punishment`
  ADD CONSTRAINT `punishment_ibfk_1` FOREIGN KEY (`stdId`) REFERENCES `table3` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
