-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 12:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bugreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `bug_report`
--

CREATE TABLE `bug_report` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'หัวข้อ',
  `detail` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียด',
  `rstat` int(1) NOT NULL,
  `date_start` datetime NOT NULL COMMENT 'วันที่เริ่ม',
  `forder` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่่อ',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'E-mail'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bug_report`
--

INSERT INTO `bug_report` (`id`, `title`, `detail`, `rstat`, `date_start`, `forder`, `name`, `email`) VALUES
(1552640062, '\"เพลงรักเพลงปืน (ช่อง7) ปะทะ รักจังเอย (ช่อง3) ดุเดือดอีกแล้วว !!!', 'ศึกละครวันพ - พฤ  ช่อง 3 ช่อง 7  ยังคงต่อเนื่องหลัง \"ทองเอกหมอยา ฯ ปะทะ บ่วงสไบ\" ละครพีเรียดเช่นกัน  นี่จบปุ๊ปทั้ง 2 ช่องจัดละคร Comedy บ้าน ๆ มาชนกันอีก\r\n\r\n\"เพลงรักเพลงปืน \" เข้าทางช่อง 7 กับแนวละครบ้านทุ่ง \r\n\" รักจังเอย\" ละครที่ก็แลดูบ้าน ๆ เอาใจขาโจ๊ะ แถมนักแสดงนำก็มีกระแส ดีกรีดีกว่า \r\n\r\nส่วนตัวว่า 7 สีจะชนะตามฟอร์มของละครแนวนี้ที่ถูกใจชาวบ้าน', 0, '2019-03-15 09:54:22', 1552640062, 'kook', 'chanpan.nuttaphon@gmail.com'),
(1552641755, 'Webboard', 'ในปัจจุบันระบบ Webboard หรือกระทู้ถามตอบเป็นที่นิยมใช้งานเป็นอย่างมาก เนื่องจากเป็นระบบที่โต้ตอบระหว่างผู้ตั้งคำถามและผู้ตอบคำถาม ทำให้ผู้ตั้งคำถามและผู้เข้ามาอ่านใน Webboard ได้รับประโยชน์ ซึ่งในบทความนี้ผมทำเป็นระบบ Webboard อย่างง่ายๆเพื่อให้ผู้อ่านทุกคน ได้เข้าใจการทำงานและนำไปประยุกต์ใช้งานให้เหมาะสมกับระบบของคุณ', 0, '2019-03-15 10:22:35', 1552641755, 'kook', 'kook@gmail.com'),
(1552642111, 'งาน', 'การใช้งาน', 0, '2019-03-15 10:28:31', 1552642111, 'kook', 'chanpan.nuttaphon@gmail.com'),
(1552642673, 'สวัสดี', 'มีอะไรจะถามค่ะ', 0, '2019-03-15 10:37:53', 1552642673, 'kook', 'kook@gmail.com'),
(1552887436, 'c', 'df', 0, '2019-03-18 06:37:16', 1552887436, 'ae', 'chanpan.nuttaphon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bug_report2`
--

CREATE TABLE `bug_report2` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หัวเรื่อง',
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rstat` int(1) NOT NULL,
  `date_start` datetime NOT NULL,
  `forder` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bug_report2`
--

INSERT INTO `bug_report2` (`id`, `title`, `detail`, `rstat`, `date_start`, `forder`, `name`, `email`) VALUES
(1551774241, 'ทดสอบหนึ่ง', 'ทดสอบ11', 0, '2019-03-05 09:24:01', 1551774241, '', ''),
(1551774370, 'demo1', 'demo1', 0, '2019-03-05 09:26:10', 1551774370, '', ''),
(1551776093, 'การแจ้งเตือน bug', 'bug', 0, '2019-03-05 09:54:53', 1551776093, '', ''),
(1551842417, 'ทดสอบหนึ่ง1', 'ทดสอบหนึ่ง1', 0, '2019-03-06 04:20:17', 1551842417, '', ''),
(1551849427, 'bug ที่หน้า index', 'bug ที่หน้า index', 0, '2019-03-06 06:17:07', 1551849427, '', ''),
(1552299265, 'sade', 'ewqwae', 0, '2019-03-11 11:14:25', 1552299265, '', ''),
(1552377612, 'rewtgggtrstr', 'rtety', 0, '2019-03-12 09:00:12', 1552377612, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bug_report3`
--

CREATE TABLE `bug_report3` (
  `id` int(11) NOT NULL COMMENT 'หัวข้อ',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rstat` int(1) NOT NULL,
  `date_start` datetime NOT NULL,
  `forder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bug_report4`
--

CREATE TABLE `bug_report4` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'หัวข้อ',
  `detail` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียด',
  `rstat` int(1) NOT NULL,
  `date_start` datetime NOT NULL COMMENT 'วันที่สร้าง',
  `forder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bug_report4`
--

INSERT INTO `bug_report4` (`id`, `title`, `detail`, `rstat`, `date_start`, `forder`) VALUES
(0, 'bug111111', 'เกิดการ bug111111', 0, '0000-00-00 00:00:00', 0),
(1551938277, 'bug111111', 'hhhh', 1, '2019-03-07 06:57:57', 1551938277),
(1552019662, 'ทดสอบระบบ', 'gjgfdkkg', 1, '2019-03-08 05:34:22', 1552019662);

-- --------------------------------------------------------

--
-- Table structure for table `bug_report5`
--

CREATE TABLE `bug_report5` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'หัวข้อ',
  `detail` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียด',
  `rstat` int(1) NOT NULL,
  `date_start` datetime NOT NULL COMMENT 'วันที่สร้าง',
  `forder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bug_report5`
--

INSERT INTO `bug_report5` (`id`, `title`, `detail`, `rstat`, `date_start`, `forder`) VALUES
(1551947538, '/-ภถุ', 'พำเพิ', 1, '2019-03-07 09:32:18', 1551947538),
(1552272657, 'fdlldaf', 'mdewlkfw;', 1, '2019-03-11 03:50:57', 1552272657);

-- --------------------------------------------------------

--
-- Table structure for table `bug_report6`
--

CREATE TABLE `bug_report6` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หัวข้อ',
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'รายละเอียด',
  `rstat` int(1) NOT NULL,
  `date_start` datetime NOT NULL COMMENT 'วันที่สร้าง',
  `forder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bug_report6`
--

INSERT INTO `bug_report6` (`id`, `title`, `detail`, `rstat`, `date_start`, `forder`) VALUES
(1552024817, 'dsf', 'fdfde', 1, '2019-03-08 07:00:17', 0),
(1552025097, 'dsf', 'fdfde', 1, '2019-03-08 07:04:57', 0),
(1552025192, 'dsf', 'fdfde', 1, '2019-03-08 07:06:32', 0),
(1552025705, 'dsf', 'fdfde', 1, '2019-03-08 07:15:05', 1552025705),
(1552025716, 'dsdfs', 'fafgrtg', 1, '2019-03-08 07:15:16', 1552025716);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_id` int(11) NOT NULL,
  `msg_id` int(11) NOT NULL,
  `forder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `re_id`, `msg_id`, `forder`) VALUES
(1, '15032019095423_7609.png', 1552640062, 0, 0),
(2, '15032019095423_6953.jpg', 1552640062, 0, 0),
(3, '15032019102202_8218.jpg', 1552641721, 0, 0),
(4, '15032019102203_3885.jpg', 1552641723, 0, 0),
(5, '15032019102205_1994.jpg', 1552641725, 0, 0),
(6, '15032019102206_7509.jpg', 1552641726, 0, 0),
(7, '15032019102207_1985.jpg', 1552641727, 0, 0),
(8, '15032019102209_4350.jpg', 1552641729, 0, 0),
(9, '15032019102210_9587.jpg', 1552641730, 0, 0),
(10, '15032019102233_9208.jpg', 1552641753, 0, 0),
(11, '15032019102233_3585.jpg', 1552641753, 0, 0),
(12, '15032019102234_315.jpg', 1552641754, 0, 0),
(13, '15032019102234_5384.jpg', 1552641754, 0, 0),
(14, '15032019102236_5392.jpg', 1552641755, 0, 0),
(15, '15032019102236_4937.jpg', 1552641755, 0, 0),
(16, '15032019102236_2081.jpg', 1552641756, 0, 0),
(17, '15032019102236_382.jpg', 1552641756, 0, 0),
(18, '15032019102832_4399.png', 1552642111, 0, 0),
(19, '15032019102832_1649.png', 1552642111, 0, 0),
(20, '15032019102832_6529.jpg', 1552642111, 0, 0),
(21, '15032019102832_2905.jpg', 1552642111, 0, 0),
(22, '15032019102833_7422.png', 1552642113, 0, 0),
(23, '15032019102833_2986.png', 1552642113, 0, 0),
(24, '15032019102833_5044.jpg', 1552642113, 0, 0),
(25, '15032019102833_7440.jpg', 1552642113, 0, 0),
(26, '15032019102834_209.png', 1552642114, 0, 0),
(27, '15032019102834_4837.png', 1552642114, 0, 0),
(28, '15032019102834_6739.jpg', 1552642114, 0, 0),
(29, '15032019102834_3848.jpg', 1552642114, 0, 0),
(30, '15032019102835_4841.png', 1552642115, 0, 0),
(31, '15032019102835_6201.png', 1552642115, 0, 0),
(32, '15032019102835_8982.jpg', 1552642115, 0, 0),
(33, '15032019102835_5660.jpg', 1552642115, 0, 0),
(34, '15032019102847_6013.png', 1552642127, 0, 0),
(35, '15032019102847_7219.png', 1552642127, 0, 0),
(36, '15032019102847_4229.jpg', 1552642127, 0, 0),
(37, '15032019102847_5869.jpg', 1552642127, 0, 0),
(38, '15032019102848_4831.png', 1552642128, 0, 0),
(39, '15032019102848_9247.png', 1552642128, 0, 0),
(40, '15032019102848_2570.jpg', 1552642128, 0, 0),
(41, '15032019102848_4807.jpg', 1552642128, 0, 0),
(42, '15032019103753_4054.png', 1552642673, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `b_id`, `message`, `user_id`, `date`) VALUES
(1552846383, 1552887436, 'sdfsdf', 1, '2019-03-18 20:57:25'),
(1552846384, 1552887436, 'demo2', 1, '2019-03-18 20:57:48'),
(1552846385, 1552887436, 'demo3', 1, '2019-03-19 00:06:27'),
(1552846386, 1552887436, 'demo4', 1, '2019-03-19 00:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1551757072),
('m130524_201442_init', 1551757088);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'A-2IZQWcxkaEpl940M475rDZT6AOMHDi', '$2y$13$cyJaK4t43R/bZ6zvtf5shuXZWcJIwFoszbhVjm.9PISUClttAtmKK', NULL, 'admin@gmail.com', 10, 1552936126, 1552936126);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bug_report`
--
ALTER TABLE `bug_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bug_report2`
--
ALTER TABLE `bug_report2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bug_report3`
--
ALTER TABLE `bug_report3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bug_report4`
--
ALTER TABLE `bug_report4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bug_report5`
--
ALTER TABLE `bug_report5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bug_report6`
--
ALTER TABLE `bug_report6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1552846387;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
