-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2017 at 02:14 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_train`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_train`
--

CREATE TABLE `all_train` (
  `class` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `east` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `wast` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_train`
--

INSERT INTO `all_train` (`class`, `total`, `east`, `wast`) VALUES
('ইন্টারসিটি', '86', '42', '44'),
('মেইল এক্সপ্রেস', '৫২', '৩২', '২০'),
('ডেমু/ কমিউটার', '৬৪', '৪২', '২২'),
('সাটল/লোকাল', '১৩৫', '৮৫', '৫০'),
('আন্তঃ দেশীয় ট্রেন', '২', 'null', 'null'),
('মোট', '৩৩৯', '২০১', '১৩৬ ');

-- --------------------------------------------------------

--
-- Table structure for table `all_train_name`
--

CREATE TABLE `all_train_name` (
  `sirial` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `train_NO` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `train_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_train_name`
--

INSERT INTO `all_train_name` (`sirial`, `train_NO`, `train_name`) VALUES
('1', '701', 'Subarna Express'),
('2', '703', 'Mohanagar Goduli'),
('3', '705', 'Ekota Express'),
('4', '707', 'Tista Express'),
('5', '709', 'Parabat Express'),
('6', '711', 'Upukol Express'),
('7', '713', 'Karutoa Express'),
('8', '717', 'Joyantika Express'),
('9', '719', 'Paharika Express'),
('10', '721', 'Mohanagar Express'),
('11', '723', 'Uddayan Express'),
('12', '729', 'Meghna Express'),
('13', '735', 'Agnibina Express'),
('14', '737', 'Egarosindhur Provati'),
('15', '739', 'Upaban Express'),
('16', '741', 'Turna Express'),
('167', '743', 'Bharamaputra'),
('18', '745', 'Jamuna Express'),
('19', '749', 'Egarosindhur Goduli'),
('20', '751', 'Lalmoni Express');

-- --------------------------------------------------------

--
-- Table structure for table `comment_box`
--

CREATE TABLE `comment_box` (
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `coment` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_box`
--

INSERT INTO `comment_box` (`name`, `email`, `coment`, `id`) VALUES
('নাঈম', 'Mjnayem@gmail.com', ' বাংলাদেশের রেল খুব খারাপ।', 2),
('shihab', 'shihab00072@gmail.com', 'jhxfghjkl dfghjk fghjkl fgh', 4),
('shihab', 'shihab00072@gmail.com', '', 7),
('shihab', 'shihab00072@gmail.com', 'বাংলাদেশের রেল খুব খারাপ।', 11),
('shihab', 'shihab00072@gmail.com', 'বাংলাদেশের রেল খুব খারাপ।', 12),
('shihab', 'shihab00072@gmail.com', 'বাংলাদেশের রেল খুব খারাপ।', 13);

-- --------------------------------------------------------

--
-- Table structure for table `comment_tander`
--

CREATE TABLE `comment_tander` (
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `subject` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_tander`
--

INSERT INTO `comment_tander` (`name`, `email`, `subject`, `comment`) VALUES
('shihab', 'shihab@gmail.com', 'jkhuy', 'jhkjkjkhjgvgcfxdfc');

-- --------------------------------------------------------

--
-- Table structure for table `customar_info`
--

CREATE TABLE `customar_info` (
  `cus_name` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_num` varchar(12) DEFAULT NULL,
  `address` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `train_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `catagory` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customar_info`
--

INSERT INTO `customar_info` (`cus_name`, `phone_num`, `address`, `date`, `train_name`, `catagory`) VALUES
('Nayem', '01720209319', 'B,Baria', '12.01.2017', 'Sundarban express', '২য় শ্রেণী-শোভন চেয়ার'),
('Nayem', '01720209319', 'B,Baria', '15.01.2017', 'Subarna Express', '২য় শ্রেণী- সুলভ'),
('Nayem', '01720209319', 'B,Baria', '15.01.2017', 'Subarna Express', '২য় শ্রেণী- সুলভ'),
('Nayem', '01720209319', 'B,Baria', '15.01.2017', 'Subarna Express', '২য় শ্রেণী- সুলভ'),
('Nayem', '01720209319', 'B,Baria', '15.01.2017', 'Subarna Express', 'প্রথম শ্রেণী চেয়ার'),
('Nayem', '01720209319', 'B,Baria', '15.01.2017', 'Rangpur Express', 'প্রথম শ্রেণী চেয়ার'),
('Nayem', '01720209319', 'B,Baria', '15.01.2017', 'Sundarban express', '২য় শ্রেণী- সুলভ'),
('Nayem', '01720209319', 'B,Baria', '15.01.2017', 'Sundarban express', '২য় শ্রেণী-শোভন');

-- --------------------------------------------------------

--
-- Table structure for table `important_news_one`
--

CREATE TABLE `important_news_one` (
  `id` int(11) NOT NULL,
  `news` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `important_news_one`
--

INSERT INTO `important_news_one` (`id`, `news`, `date`) VALUES
(1, 'বাংলাদেশ রেলওয়ের ঊর্ধ্বতন কর্মকর্তাগনের তথ্য পেতে রেলওয়ের ঊর্ধ্বতন কর্মকর্তাগণ এই বাটন এ প্রেস করুন ', '10.01.17'),
(2, 'শনিবার উভয় অঞ্চল থেকে যে সকল ট্রেন চলাচল করবে না;\r\nকুমিল্লা কমিউটার(৮৯আপ) কুমিল্লা থেকে বন্ধ\r\nপাহাড়িকা এক্সপ্রেস(৭২০ডাউন) সিলেট থেকে বন্ধ\r\nউদয়ন এক্সপ্রেস(৭২৩আপ) চট্রগ্রাম থেকে বন্ধ\r\nধুমকেতু এক্সপ্রেস(৭৬৯আপ) রাজশাহী হতে বন্ধ\r\nসিরাজগঞ্জ এক্সপ্রেস(৭৭৫আপ এবং৭৭৬ডাউন)', '??.??.????');

-- --------------------------------------------------------

--
-- Table structure for table `man_kowk`
--

CREATE TABLE `man_kowk` (
  `details` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `man_kowk`
--

INSERT INTO `man_kowk` (`details`) VALUES
('\r\n\r\n১.\r\n	\r\n\r\nসরকার যেকোন ব্যক্তিকে তাহার ব্যক্তিগত নামে অথবা পদাধিকারে রেলপথের পরিদর্শক হিসাবে নিযুক্ত করিতে পারিবেন।\r\n\r\n২.\r\n	\r\n\r\nরেলপথের এইরূপ পরিদর্শকের কর্তব্য ও দায়িত্ব হইবেঃ\r\n\r\nক.\r\n	\r\n\r\nরেলপথ পরিদর্শন করা এবং উহা যাত্রী সাধারণের চলাচলের জন্য যাত্রীবাহী গাড়ি চালু করিবার উপযুক্ত কিনা সেই সম্পর্কে এই আইনের বিধান মোতাবেক সরকারের নিকট রিপোর্ট পেশ করা;\r\n\r\nখ.\r\n	\r\n\r\nনিয়মিতভাবে নির্দিষ্ট সময়ের জন্য রেলপথ পরিদর্শন অথবা সরকারের নির্দেশ মোতাবেক অন্যান্য পরিদর্শন অথবা রেলপথে ব্যবহৃত যেকোন বিশেষ যানবাহন বা সরঞ্জামাদি পরিদর্শন করা;\r\n\r\nগ.\r\n	\r\n\r\nরেলপথে সংঘটিত কোন দুর্ঘটনার কারণ সম্পর্কে এই আইনের বিধান মোতাবেক তদমত্ম করা;\r\n\r\nঘ.\r\n	\r\n\r\nএই আইনের অধীনে অথবা বলবত অন্য যেকোন বিধিবদ্ধ আইনের রেলপথ সম্পর্কিত বিধান মোতাবেক অর্পিত বা আরোপিত অন্যান্য কর্তব্য সম্পাদন করা ।');

-- --------------------------------------------------------

--
-- Table structure for table `office_public`
--

CREATE TABLE `office_public` (
  `id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `post` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `stil` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `need` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_public`
--

INSERT INTO `office_public` (`id`, `post`, `number`, `stil`, `need`) VALUES
('১।', '	১ম শ্রেণী', '২টি', '২ জন', 'নাই'),
('২।', '		২য় শ্রেণী', 'নাই', '	নাই', 'নাই'),
('৩।', '		৩য় শ্রেণী', '৫টি', '২ জন', '৩ জন'),
('৪।', '		৪র্থ শ্রেণী', '২টি', '২ জন', '	নাই'),
('0', '	0', ' মোট  ৯টি	', '   ৬ জন', ' ৩ জন');

-- --------------------------------------------------------

--
-- Table structure for table `off_day`
--

CREATE TABLE `off_day` (
  `id` varchar(35) DEFAULT NULL,
  `name` varchar(35) DEFAULT NULL,
  `day` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `off_day`
--

INSERT INTO `off_day` (`id`, `name`, `day`) VALUES
('01', 'Subarna Express', 'Friday'),
('02', 'Ekota Express', 'Tuesday'),
('03', 'Paharika Express', 'Monday'),
('04', 'Mohanagar Express', 'Sunday'),
('05', 'Uddayan Express', 'Sunday'),
('06', 'Upaban Express ', 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `class` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `job` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `null_post` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`class`, `order`, `job`, `null_post`) VALUES
('১ম', '৫৪৮', '৪৪৬', '১০২'),
('২য়', '১,৩৫৬', '৯৪৭', '৪০৯'),
('৩য়', '২১,৮৭৬', '১৪,৬২৫', '৭,২৫১'),
('৪র্থ', '১৬,৪৮৪', '১১,৫১৭', '৪,৯৬৭'),
('মোট', '৪০,২৬৪', '২৭,৫৩৫', '১২,৭২৯');

-- --------------------------------------------------------

--
-- Table structure for table `tarminal_end`
--

CREATE TABLE `tarminal_end` (
  `id` varchar(20) DEFAULT NULL,
  `train_name` varchar(45) DEFAULT NULL,
  `tarminal` varchar(45) DEFAULT NULL,
  `end` varchar(34) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarminal_end`
--

INSERT INTO `tarminal_end` (`id`, `train_name`, `tarminal`, `end`) VALUES
('01', 'Subarna Express', 'Dhaka', '12:40'),
('02', 'Parabat Express', 'Sylhet', '13:40'),
('03', 'Karutoa Express', 'Borimari', '22:30'),
('04', 'Egarosindhur Provati', 'Kisoregonj', '11:15'),
('05', 'Drutojan Express', 'Dinajpur', '05:30');

-- --------------------------------------------------------

--
-- Table structure for table `tarminal_name`
--

CREATE TABLE `tarminal_name` (
  `id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `distric` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tarminal` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarminal_name`
--

INSERT INTO `tarminal_name` (`id`, `distric`, `tarminal`) VALUES
('1', 'Jessore', 'Jessore'),
('2', ' Bogra ', 'Santahar'),
('3', ' Bogra ', 'proposed broad gauge junction'),
('4', ' Tangail ', 'dual gauge'),
('5', ' khulna', ' SW - Dual gauge'),
('6', ' Chittagong', ' MG – junction'),
('7', ' dhaka', 'Dual gauge junction just north of Dhaka'),
('8', ' Sylhet', 'metre gauge'),
('9', ' Syedpur', ' Dual gauge'),
('10', ' Sirajganj ', '  terminus of branch from Iswardi ');

-- --------------------------------------------------------

--
-- Table structure for table `tarminal_start`
--

CREATE TABLE `tarminal_start` (
  `id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `train_name` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tarminal` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_time` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarminal_start`
--

INSERT INTO `tarminal_start` (`id`, `train_name`, `tarminal`, `start_time`) VALUES
('01', 'Subarna Express', 'Chittagong', '07:00'),
('02', 'Ekota Express', 'Dhaka', '10:00'),
('03', 'Joyantika Express', 'Sylhet', '08:40'),
('04', 'Meghna Express', 'Chittagong', '17:15'),
('05', 'Kapotaskh express', 'Khulna', '06:30');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_info`
--

CREATE TABLE `ticket_info` (
  `date` varchar(15) DEFAULT NULL,
  `train_name` varchar(30) DEFAULT NULL,
  `cat_1` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '20',
  `cat_2` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '20',
  `cat_3` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '20',
  `cat_4` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '30',
  `cat_5` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '30',
  `cat_6` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '50'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_info`
--

INSERT INTO `ticket_info` (`date`, `train_name`, `cat_1`, `cat_2`, `cat_3`, `cat_4`, `cat_5`, `cat_6`) VALUES
('15.01.2017', 'Subarna Express', '49', '20', '29', '40', '49', '49'),
('15.01.2017', 'Mohanagar Goduli', '30', '25', '29', '40', '49', '49'),
('15.01.2017', 'Parabat Express', '30', '25', '29', '40', '49', '49'),
('15.01.2017', 'Joyantika Express', '30', '25', '29', '40', '49', '49'),
('15.01.2017', 'Kapotaskh express', '30', '25', '29', '40', '49', '49'),
('15.01.2017', 'Sundarban express', '30', '25', '29', '40', '49', '49'),
('15.01.2017', 'Rangpur Express', '30', '25', '29', '40', '49', '49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_box`
--
ALTER TABLE `comment_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_news_one`
--
ALTER TABLE `important_news_one`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_box`
--
ALTER TABLE `comment_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `important_news_one`
--
ALTER TABLE `important_news_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
