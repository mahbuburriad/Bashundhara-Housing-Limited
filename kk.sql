-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 01:57 AM
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
  `apartment_name` varchar(255) NOT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apartment_name`, `apartment_details`, `flat_no`, `house_no`, `road_no`, `block_no`, `apartment_for`, `date_a`, `month_a`, `year_a`, `contact_no`, `email_id`) VALUES
('FancyMail', 'FancyMail is designed to help make your campaign more professional, featuring seven layouts, eight colors and three layout options. Each layout provides an optimal viewing experience across a wide range of devices and screen sizes.', '5', '4', '15', 'C', 'sell', '14', '15', '14', '+8801456464666', 'email@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `duty`
--

CREATE TABLE `duty` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duty`
--

INSERT INTO `duty` (`fors`, `rfrom`, `rto`, `tfrom`, `tto`, `date`, `month`, `year`, `date_t`, `month_t`, `year_t`, `block`) VALUES
('guard', '1', '12', '12:45 am', '1:45 am', '27', '04', '17', '30', '04', '17', 'B'),
('cleaner', '14', '124', '11:45 am', '9:45 am', '25', '04', '17', '31', '04', '17', 'Ba');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `subject` varchar(2000) DEFAULT NULL,
  `ebody` text NOT NULL,
  `date_e` varchar(255) NOT NULL,
  `month_e` varchar(255) NOT NULL,
  `year_e` varchar(255) NOT NULL,
  `fromemail` varchar(300) NOT NULL,
  `reciever` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`subject`, `ebody`, `date_e`, `month_e`, `year_e`, `fromemail`, `reciever`) VALUES
('Campaign Monitor', 'Campaign Monitor provides a free email template builder that allows you to build mobile-ready templates, which display well on both desktop clients and mobile devices. Each template has been fully tested in all email clients, including Gmail and Outlook.', '04', '03', '2017', 'guest', 'manager'),
('Campaign Monitor', 'Campaign Monitor provides a free email template builder that allows you to build mobile-ready templates, which display well on both desktop clients and mobile devices. Each template has been fully tested in all email clients, including Gmail and Outlook.', '04', '03', '2017', 'guest', 'land_owner'),
('Campaign Monitor', 'Campaign Monitor provides a free email template builder that allows you to build mobile-ready templates, which display well on both desktop clients and mobile devices. Each template has been fully tested in all email clients, including Gmail and Outlook.', '04', '03', '2017', 'guest', 'security'),
('Freelancer', 'Metromix is a multi-purpose responsive email template built for products', '14', '5', '17', 'manager', 'land_owner');

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
(1, 'kabir.khan', 'Kabir', 'Khan', 'kabir.khan@gmail.com', '456123789', 'Male', '+8801738562555', 'August', '14', 1993, '5A', '14', '18', 'Natuapara', 'Sylhet', 'Bangladesh'),
(2, 'hasna.mitu', 'Hasna', 'Mitu', 'hasna.mitu@gmail.com', '59666665666', 'Female', '+8801554466123', 'June', '9', 1997, '5', '25', '26', 'Khilkhet', 'Dhaka', 'Bangladesh'),
(3, 'molla.khan', 'Molla', 'Khan', 'molla.khan@gmail.com', '8245564115', 'Other', '+880145655555', 'April', '6', 1907, '5', '52', '521', 'Khilkhet', 'Dhaka', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `guest_security`
--

CREATE TABLE `guest_security` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `Flat` varchar(255) NOT NULL,
  `House` varchar(255) NOT NULL,
  `Road` varchar(255) NOT NULL,
  `Thana` varchar(100) NOT NULL,
  `District` varchar(200) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `land_owner_guard`
--

CREATE TABLE `land_owner_guard` (
  `id` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobileno` varchar(20) NOT NULL,
  `Flat_L` varchar(255) NOT NULL,
  `House_L` varchar(255) NOT NULL,
  `Road_L` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `land_owner_guest`
--

CREATE TABLE `land_owner_guest` (
  `id` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `land_owner_guest_show`
--

CREATE TABLE `land_owner_guest_show` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobileno` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

INSERT INTO `land_owner_list` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobileno`, `month`, `date`, `year`, `Flat_L`, `House_L`, `Road_L`, `block`, `Flat`, `House`, `Road`, `Thana`, `District`, `Country`) VALUES
(1, 'mahbubur.riad', 'Md. Mahbubur Rahman', 'Riad', 'mahbubur.riad@gmail.com', '54455445', 'Male', '+8801455656546', 'March', '6', 1975, '45', '5', '5', 'H', '54', '54', '654', 'Khilkhet', 'Dhaka', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `land_owner_security`
--

CREATE TABLE `land_owner_security` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `Flat_L` varchar(255) NOT NULL,
  `House_L` varchar(255) NOT NULL,
  `Road_L` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL,
  `Flat` varchar(255) NOT NULL,
  `House` varchar(255) NOT NULL,
  `Road` varchar(255) NOT NULL,
  `Thana` varchar(100) NOT NULL,
  `District` varchar(200) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `land_owner_show`
--

CREATE TABLE `land_owner_show` (
  `id` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `Flat_L` varchar(255) NOT NULL,
  `House_L` varchar(255) NOT NULL,
  `Road_L` varchar(255) NOT NULL,
  `block` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `land_owner_stuff`
--

CREATE TABLE `land_owner_stuff` (
  `id` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `stuffas` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(1, 'Antwort', 'The Market e-newsletter and email template builder comes with eight prebuilt module-based responsive layouts, including 24 color variations and 28 various elements to help build your layout.The template builder allows you to create your template in three easy steps, and can even prepare them for MailChimp or Campaign Monitor. All major email clients are supported, including Outlook.', '22', '04', '17');

-- --------------------------------------------------------

--
-- Table structure for table `plot`
--

CREATE TABLE `plot` (
  `plot_name` varchar(255) NOT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plot`
--

INSERT INTO `plot` (`plot_name`, `plot_details`, `house_no1`, `road_no1`, `block_no1`, `plot_for1`, `date_a1`, `month_a1`, `year_a1`, `contact_no1`, `email_id1`, `flat_no1`) VALUES
('Metromix', ' is a multi-purpose responsive email template built for products, marketing and businesses.', '4', '5', 'E', 'Rent', '4', '5', '5', '+8801785844663', 'XXX@gmail.com', '4');

-- --------------------------------------------------------

--
-- Table structure for table `stuff_guard`
--

CREATE TABLE `stuff_guard` (
  `id` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobileno` varchar(20) NOT NULL,
  `stuffas` varchar(255) DEFAULT NULL,
  `Flat` varchar(255) NOT NULL,
  `House` varchar(255) NOT NULL,
  `Road` varchar(255) NOT NULL,
  `Thana` varchar(100) NOT NULL,
  `District` varchar(200) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stuff_guest`
--

CREATE TABLE `stuff_guest` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobileno` varchar(20) NOT NULL,
  `stuffas` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff_list`
--

INSERT INTO `stuff_list` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `gender`, `mobileno`, `month`, `date`, `year`, `stuffas`, `Flat`, `House`, `Road`, `Thana`, `District`, `Country`) VALUES
(1, 'khan.mohammad', 'Khan', 'Mohammad', 'khan.mohammad@gmail.com', '5265441', 'Male', '+8801545456655', 'April', '5', 1905, 'security', '5', '5', '5', 'Khilkhet', 'Dhaka', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `stuff_regi`
--

CREATE TABLE `stuff_regi` (
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

INSERT INTO `stuff_regi` (`user_id2`, `first_name2`, `last_name2`, `email2`, `gender2`, `mobileno2`, `month2`, `date2`, `year2`, `stuffas2`, `ssc`, `school`, `hsc`, `college`, `graduate`, `university`, `Flat2`, `House2`, `Road2`, `Thana2`, `District2`, `Country2`) VALUES
('khan.bahadur', 'Mohammad Khan', 'Bahadur', 'khan.bahadur', 'Male', '+8801544564564', 'May', '4', 1975, 'guard', '4.65', 'Sarishabari R.U.T High School', '5.00', 'Trust College', '3.27', 'North South University', '5', '52', '45', 'Bashundhara', 'Dhaka', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `stuff_security`
--

CREATE TABLE `stuff_security` (
  `id` int(11) NOT NULL DEFAULT '0',
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `stuffas` varchar(255) DEFAULT NULL,
  `Flat` varchar(255) NOT NULL,
  `House` varchar(255) NOT NULL,
  `Road` varchar(255) NOT NULL,
  `Thana` varchar(100) NOT NULL,
  `District` varchar(200) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `stuff_list`
--
ALTER TABLE `stuff_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest_list`
--
ALTER TABLE `guest_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `land_owner_list`
--
ALTER TABLE `land_owner_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `sl` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stuff_list`
--
ALTER TABLE `stuff_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
