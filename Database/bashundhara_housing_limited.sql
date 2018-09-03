-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 06:57 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bashundhara_housing_limited`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `aid` int(11) NOT NULL,
  `apartment_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `flat_size` int(11) NOT NULL,
  `bed` int(255) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `balcony` int(222) NOT NULL,
  `site` varchar(50) NOT NULL,
  `washroom` int(200) NOT NULL,
  `apartment_details` text NOT NULL,
  `flat_no` varchar(255) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `road_no` varchar(255) NOT NULL,
  `block_no` varchar(32) NOT NULL,
  `apartment_for` varchar(255) NOT NULL,
  `date_a` varchar(30) NOT NULL,
  `month_a` varchar(200) NOT NULL,
  `year_a` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`aid`, `apartment_name`, `price`, `flat_size`, `bed`, `kitchen`, `balcony`, `site`, `washroom`, `apartment_details`, `flat_no`, `house_no`, `road_no`, `block_no`, `apartment_for`, `date_a`, `month_a`, `year_a`, `contact_no`, `email_id`) VALUES
(1, 'FancyMail', 0, 0, 0, 0, 0, '', 0, 'FancyMail is designed to help make your campaign more professional, featuring seven layouts, eight colors and three layout options. Each layout provides an optimal viewing experience across a wide range of devices and screen sizes.', '5', '4', '15', 'C', 'sell', '14', '15', '14', '+8801456464666', 'email@gmail.com'),
(2, 'Vila', 0, 1250, 3, 1, 2, 'Middle', 2, 'asdf asdfjnnoi noasdofhojasdfo ohnaosdnfoknasdofuhoiasuhdfio', '141', '15', '14', 'E', 'Rent', '4', '4', '4', '+88014774', 'asdfasdf@gma'),
(3, 'afasdf', 456456, 452, 4563, 4566, 456, 'Left', 456, '456fasdfasdf', '456', '6456', '456', 'C', 'Rent', '4', '4', '4', '+8801', 'frasdg'),
(4, 'afasdf', 456456, 452, 4563, 4566, 456, 'Left', 456, '456fasdfasdf', '456', '6456', '456', 'C', 'Rent', '4', '4', '4', '+8801', 'frasdg');

-- --------------------------------------------------------

--
-- Table structure for table `duty`
--

CREATE TABLE `duty` (
  `did` int(11) NOT NULL,
  `fors` varchar(255) DEFAULT NULL,
  `rfrom` varchar(255) NOT NULL,
  `rto` varchar(255) NOT NULL,
  `tfrom` varchar(255) NOT NULL,
  `tto` varchar(255) NOT NULL,
  `date` varchar(32) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(200) NOT NULL,
  `date_t` varchar(255) NOT NULL,
  `month_t` varchar(255) NOT NULL,
  `year_t` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duty`
--

INSERT INTO `duty` (`did`, `fors`, `rfrom`, `rto`, `tfrom`, `tto`, `date`, `month`, `year`, `date_t`, `month_t`, `year_t`, `block`) VALUES
(1, 'cleaner', '1', '12', '12:45 am', '1:45 am', '27', '04', '17', '30', '04', '17', 'B'),
(2, 'cleaner', '14', '124', '11:45 am', '9:45 am', '25pp', '04', '17', '31', '04', '17', 'Ba'),
(4, 'guard', 'adf', 'asdf', 'asdf', 'asdf', 'asdfa', 'sdfasdf', '', 'asdf', 'asdf', 'asdf', 'adsf'),
(5, 'cleaner', 'adf', 'asdf', 'asdf', 'asdf', 'asdfa', 'sdfasdf', '', 'asdf', 'asdf', 'asdf', 'adsf');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `eid` int(11) NOT NULL,
  `subject` varchar(2000) DEFAULT NULL,
  `ebody` text NOT NULL,
  `date_e` varchar(255) NOT NULL,
  `month_e` varchar(255) NOT NULL,
  `year_e` varchar(255) NOT NULL,
  `fromemail` varchar(300) NOT NULL,
  `reciever` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`eid`, `subject`, `ebody`, `date_e`, `month_e`, `year_e`, `fromemail`, `reciever`) VALUES
(1, 'Campaign Monitor', 'Campaign Monitor provides a free email template builder that allows you to build mobile-ready templates, which display well on both desktop clients and mobile devices. Each template has been fully tested in all email clients, including Gmail and Outlook.', '04', '03', '2017', 'guest', 'manager'),
(2, 'Campaign Monitor', 'Campaign Monitor provides a free email template builder that allows you to build mobile-ready templates, which display well on both desktop clients and mobile devices. Each template has been fully tested in all email clients, including Gmail and Outlook.', '04', '03', '2017', 'guest', 'land_owner'),
(3, 'Campaign Monitor', 'Campaign Monitor provides a free email template builder that allows you to build mobile-ready templates, which display well on both desktop clients and mobile devices. Each template has been fully tested in all email clients, including Gmail and Outlook.', '04', '03', '2017', 'guest', 'security'),
(4, 'Freelancer', 'Metromix is a multi-purpose responsive email template built for products', '14', '5', '17', 'manager', 'land_owner'),
(6, 'asdf', 'asdf', 'adf', 'asdf', 'asdf', 'manager', 'guest'),
(7, 'fdasd', 'fasdff', '14', '13', '2001', 'manager', 'guest');

-- --------------------------------------------------------

--
-- Table structure for table `guest_list`
--

CREATE TABLE `guest_list` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `year` int(10) NOT NULL,
  `Flat` varchar(255) NOT NULL,
  `House` varchar(255) NOT NULL,
  `Road` varchar(255) NOT NULL,
  `Thana` varchar(100) NOT NULL,
  `District` varchar(200) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_list`
--

INSERT INTO `guest_list` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobileno`, `month`, `date`, `year`, `Flat`, `House`, `Road`, `Thana`, `District`, `Country`) VALUES
(5, '', 'Mahbubur Riad', 'adsf', 'adsf', 'asdf', 'Male', '+8801', 'January', '1', 1900, 'a', 'sdaf', 'asd', 'fsda', 'fds', 'fasd'),
(7, '', 'adsf', 'adsf', 'afsdf', 'sdf', 'Male', '+88014e', 'January', '1', 1900, 'afsdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf'),
(8, 'asdf', 'nai', 'adsf', 'asdf', 'asdf', 'Male', '+8801', 'January', '1', 1900, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf'),
(11, 'ullah', 'Khan', 'Bahadur', 'khan@outloo.com', '45311AD', 'Male', '+8801', 'May', '1', 1900, '56354', '453', '5', 'A', 'A', 'A'),
(12, 'adsf', 'fasdf', 'asdf', 'df', 'asdf', 'Female', '+8801333333333', 'April', '16', 1915, 'adf', 'asdf', 'asdf', 'asdfa', 'sdf', 'asdf'),
(13, 'adsf', 'fasdf', 'asdf', 'df', '', 'Other', '+8801333333333', 'April', '16', 1915, 'adf', 'asdf', 'asdf', 'asdfa', 'sdf', 'asdf'),
(14, 'adsf', 'fasdf', 'asdf', 'df', '', 'Female', '+8801', 'April', '16', 1915, 'adf', 'asdf', 'asdf', 'asdfa', 'sdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `land_owner_list`
--

CREATE TABLE `land_owner_list` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `year` int(10) NOT NULL,
  `Flat_L` varchar(255) NOT NULL,
  `House_L` varchar(255) NOT NULL,
  `Road_L` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `Flat` varchar(255) NOT NULL,
  `House` varchar(255) NOT NULL,
  `Road` varchar(255) NOT NULL,
  `Thana` varchar(100) NOT NULL,
  `District` varchar(200) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `land_owner_list`
--

INSERT INTO `land_owner_list` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobileno`, `month`, `date`, `year`, `Flat_L`, `House_L`, `Road_L`, `block`, `price`, `Flat`, `House`, `Road`, `Thana`, `District`, `Country`) VALUES
(1, 'mahbubur.riad', 'Md. Mahbubur', 'Riad Khan', 'mahbubur.riad@gmail.com', '54455445777', 'Male', '01711567411', 'January', '1', 1900, '45', '5', '5', 'H', 0, '54', '655', '654', 'Khilkhet', 'Dhaka', 'Bangladesh'),
(3, 'nobi.kayed', 'Nobi', 'al kayed', 'nobi.kayed@gmail.com', '824726547', 'Female', '+8801745135111', 'August', '15', 1978, '15', '16', '17', 'B', 1452, '87', '45', '15', 'Khilkhet', 'Dhaka', 'Bangladesh'),
(4, 'nobi.kayed', 'Mahbubur', 'al kayed', 'nobi.kayed@gmail.com', '', 'Female', '+8801745135111', 'August', '15', 1978, '15', '16', '17', 'B', 0, '87', '45', '15', 'Khilkhet', 'Dhaka', 'Bangladesh'),
(5, 'nobi.kayed', 'Khan', 'al kayed', 'nobi.kayed@gmail.com', '', 'Female', '+8801', 'August', '15', 1978, '15', '16', '17', 'B', 0, '87', '45', '15', 'Khilkhet', 'Dhaka', 'Bangladesh'),
(6, 'khairul.islam', 'Khairul', 'Islam', 'khairul.isalm@gmail.com', '123456789', 'Male', '+8801789613156', 'September', '17', 1968, 'All', '16', '17', 'I', 14387751, '14', '16', '18', 'Khilkhet', 'Dhaka', 'Bangladesh'),
(7, 'asdf', 'asdfasdf', 'adsf', 'adf', 'asdf', 'Male', '+8801544544165', 'January', '1', 1900, 'adf', 'asdf', 'asdf', 'I', 5511, 'asdf', 'asdf', 'asdf', 'asdfa', 'sdf', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `sl` int(200) NOT NULL,
  `notice_title` varchar(2000) DEFAULT NULL,
  `notice_write` text NOT NULL,
  `date_n` varchar(255) NOT NULL,
  `month_n` varchar(255) NOT NULL,
  `year_n` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`sl`, `notice_title`, `notice_write`, `date_n`, `month_n`, `year_n`) VALUES
(1, 'Antwort', 'The Market e-newsletter and email template builder comes with eight prebuilt module-based responsive layouts, including 24 color variations and 28 various elements to help build your layout.The template builder allows you to create your template in three easy steps, and can even prepare them for MailChimp or Campaign Monitor. All major email clients are supported, including Outlook.', '22', '04', '17'),
(3, 'adsf', 'jhasbfkjlsadkjffngkjasdfnklojansdkojfjnaskojdf', '25', '04', '2001');

-- --------------------------------------------------------

--
-- Table structure for table `plot`
--

CREATE TABLE `plot` (
  `pid` int(11) NOT NULL,
  `plot_name` varchar(255) NOT NULL,
  `plot_size` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `plot_details` text NOT NULL,
  `house_no1` varchar(255) NOT NULL,
  `road_no1` varchar(255) NOT NULL,
  `block_no1` varchar(32) NOT NULL,
  `plot_for1` varchar(255) NOT NULL,
  `date_a1` varchar(30) NOT NULL,
  `month_a1` varchar(200) NOT NULL,
  `year_a1` varchar(255) NOT NULL,
  `contact_no1` varchar(255) NOT NULL,
  `email_id1` varchar(255) NOT NULL,
  `flat_no1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plot`
--

INSERT INTO `plot` (`pid`, `plot_name`, `plot_size`, `price`, `plot_details`, `house_no1`, `road_no1`, `block_no1`, `plot_for1`, `date_a1`, `month_a1`, `year_a1`, `contact_no1`, `email_id1`, `flat_no1`) VALUES
(1, 'Metromix', 0, 0, ' is a multi-purpose responsive email template built for products, marketing and businesses.', '4', '5', 'E', 'Rent', '4', '5', '5', '+8801785844663', 'XXX@gmail.com', '4'),
(2, 'asfd', 1452, 1450000, 'asdfasdfasdfasdf', '16', '18', 'J', 'sell', '14', '07', '1204', '+88017454110', 'asdfasdf', '14');

-- --------------------------------------------------------

--
-- Table structure for table `stuff_list`
--

CREATE TABLE `stuff_list` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `year` int(10) NOT NULL,
  `stuffas` varchar(255) DEFAULT NULL,
  `Flat` varchar(255) NOT NULL,
  `House` varchar(255) NOT NULL,
  `Road` varchar(255) NOT NULL,
  `Thana` varchar(100) NOT NULL,
  `District` varchar(200) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff_list`
--

INSERT INTO `stuff_list` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobileno`, `month`, `date`, `year`, `stuffas`, `Flat`, `House`, `Road`, `Thana`, `District`, `Country`, `salary`) VALUES
(5, 'khan.mohammad.abul', 'Abul Khan', 'Bahadur', 'khan.mohammad.abul@gmail.com', '8247236', 'Male', '+8801545456655', 'January', '1', 1900, 'manager', '14', '16', '18', 'Dhaka', 'Khilkhet', 'Bangladesh', 10000),
(6, 'afdsf', 'asdf', 'asdf', 'asdf', 'asdf', 'Male', '+8801444', 'January', '1', 1900, 'manager', 'asf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 5000),
(7, 'afdsf', 'asdf', 'asdf', 'asdf', '', 'Male', '+8801444', 'January', '1', 1900, 'manager', 'asf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 60),
(8, 'afdsf', 'asdf', 'asdf', 'asdf', '', 'Male', '+8801', 'January', '1', 1900, 'manager', 'asf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 600),
(9, 'asdfff', 'asdftt', 'asdf', 'adfsff', '44444', 'Female', '+880154544444', 'March', '14', 1913, 'guard', 'asdf', 'adf', 'asdf', 'sadf', 'asdf', 'asdf', 50000),
(10, 'asdfff', 'asdftt', 'asdf', 'adfsff', '', 'Female', '+880154544444', 'March', '14', 1913, 'cleaner', 'asdf', 'adf', 'asdf', 'sadf', 'asdf', 'asdf', 50000),
(11, 'asdfff', 'asdftt', 'asdf', 'adfsff', '', 'Female', '+8801', 'March', '14', 1913, 'land_manager', 'asdf', 'adf', 'asdf', 'sadf', 'asdf', 'asdf', 50000),
(12, 'asdfff', 'asdftt', 'asdf', 'adfsff', '', 'Female', '+8801', 'March', '14', 1913, 'manager', 'asdf', 'adf', 'asdf', 'sadf', 'asdf', 'asdf', 50000),
(13, '', 'novi', 'al kayed', '', '', 'Male', '+8801', 'January', '1', 1900, 'manager', '', '', '', '', '', '', 10000),
(14, '', 'patuari', 'Khan', '', '', 'Male', '+8801', 'January', '1', 1900, 'manager', '', '', '', '', '', '', 10000),
(15, '', 'Jiban', 'Khan', '', '', 'Male', '+8801', 'January', '1', 1900, 'manager', '', '', '', '', '', '', 10000),
(16, 'khan.bahadur', 'Mohammad Khan', 'Bahadur', 'khan.bahadur', 'Default', 'Male', '+8801544564564', 'January', '1', 1900, 'manager', '5', '52', '45', 'Bashundhara', 'Dhaka', 'Bangladesh', 4555);

-- --------------------------------------------------------

--
-- Table structure for table `stuff_regi`
--

CREATE TABLE `stuff_regi` (
  `id` int(11) NOT NULL,
  `user_id2` varchar(255) NOT NULL,
  `first_name2` varchar(255) NOT NULL,
  `last_name2` varchar(255) DEFAULT NULL,
  `email2` varchar(255) NOT NULL,
  `gender2` varchar(30) NOT NULL,
  `mobileno2` varchar(20) NOT NULL,
  `month2` varchar(255) NOT NULL,
  `date2` varchar(255) NOT NULL,
  `year2` int(10) NOT NULL,
  `stuffas2` varchar(255) DEFAULT NULL,
  `session` varchar(255) NOT NULL,
  `year` int(255) NOT NULL,
  `ssc` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `hsc` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `graduate` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `Flat2` varchar(255) DEFAULT NULL,
  `House2` varchar(255) DEFAULT NULL,
  `Road2` varchar(255) NOT NULL,
  `Thana2` varchar(100) DEFAULT NULL,
  `District2` varchar(200) DEFAULT NULL,
  `Country2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff_regi`
--

INSERT INTO `stuff_regi` (`id`, `user_id2`, `first_name2`, `last_name2`, `email2`, `gender2`, `mobileno2`, `month2`, `date2`, `year2`, `stuffas2`, `session`, `year`, `ssc`, `school`, `hsc`, `college`, `graduate`, `university`, `Flat2`, `House2`, `Road2`, `Thana2`, `District2`, `Country2`) VALUES
(2, 'khan.bahadur', 'Mohammad Khan', 'Bahadur', 'khan.bahadur', 'Male', '+8801754554444', 'August', '17', 1993, 'manager', '', 0, '141454', 'Dha', '544', 'aaafdsg', '45', 'afd', '5', '52', '45', 'Bashundhara', 'Dhaka', 'Bangladesh'),
(3, 'asdf', 'asdf', 'asdf', 'adsf', 'Male', '+8801444444444', 'January', '1', 1900, 'manager', 'Summer', 17, '4.3', 'Dhola Ura Chowdhury High School', '5.0', 'Dhaka College', '2.85', 'Dhaka University', '1D', '12', '12', 'Banani', 'Dhaka', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `duty`
--
ALTER TABLE `duty`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `guest_list`
--
ALTER TABLE `guest_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_owner_list`
--
ALTER TABLE `land_owner_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `plot`
--
ALTER TABLE `plot`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `stuff_list`
--
ALTER TABLE `stuff_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuff_regi`
--
ALTER TABLE `stuff_regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `duty`
--
ALTER TABLE `duty`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `guest_list`
--
ALTER TABLE `guest_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `land_owner_list`
--
ALTER TABLE `land_owner_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `sl` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `plot`
--
ALTER TABLE `plot`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stuff_list`
--
ALTER TABLE `stuff_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `stuff_regi`
--
ALTER TABLE `stuff_regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
