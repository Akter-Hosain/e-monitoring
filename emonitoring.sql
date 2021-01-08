-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 05:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emonitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `ministry_login`
--

CREATE TABLE `ministry_login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ministry_login`
--

INSERT INTO `ministry_login` (`id`, `email`, `password`) VALUES
(37, 'ministry@gmail.com', '1234'),
(38, 'railway@gmail.com', '1234'),
(39, 'ICT@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

CREATE TABLE `tbl_complain` (
  `complainId` int(11) NOT NULL,
  `userArea` varchar(255) NOT NULL,
  `body` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `user_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`complainId`, `userArea`, `body`, `image`, `publish_date`, `user_name`) VALUES
(54, 'Mirpur 11, Dhaka', '<p class=\"cf-tweet-this cf-tt-target cf-tt-element-attached-center cf-tt-target-attached-center cf-tt-enabled cf-tt-abutted cf-tt-abutted-top cf-tt-element-attached-bottom cf-tt-target-attached-top\">Dear (title) ____:</p>\r\n<p>I wish to complain about ____ (name of product or service, with serial number or account number) that I purchased on ____ (date and location of transaction).</p>\r\n<p>I am complaining because ____ (the reason you are dissatisfied). To resolve this problem I would like you to ____ (what you want the business to do).</p>\r\n<p>When I first learned of this problem, I contacted ____ (name of the person, date of the call) at your company, and was told that nothing could be done about my problem. I believe that this response is unfair because ____ (the reason you feel the company has an obligation to you). I would like a written statement explaining your company\'s position and what you will do about my complaint.</p>\r\n<p>I look forward to hearing from you as soon as possible to resolve this problem. If I do not hear from you within ____ days I will file complaints with the appropriate consumer agencies and consider my legal alternatives. I am enclosing copies of my receipt. I may be contacted at the above address and phone number.</p>\r\n<p>Sincerely,</p>\r\n<p>(your signature)</p>', 'uploads/5a926f0397.jpg', '2021-01-08', 'Pranto'),
(55, 'Dhanmondi, 27', '<p class=\"cf-tweet-this cf-tt-target cf-tt-element-attached-center cf-tt-target-attached-center cf-tt-enabled cf-tt-abutted cf-tt-abutted-top cf-tt-element-attached-bottom cf-tt-target-attached-top\">Dear (title) ____:</p>\r\n<p>I wish to complain about ____ (name of product or service, with serial number or account number) that I purchased on ____ (date and location of transaction).</p>\r\n<p>I am complaining because ____ (the reason you are dissatisfied). To resolve this problem I would like you to ____ (what you want the business to do).</p>\r\n<p>When I first learned of this problem, I contacted ____ (name of the person, date of the call) at your company, and was told that nothing could be done about my problem. I believe that this response is unfair because ____ (the reason you feel the company has an obligation to you). I would like a written statement explaining your company\'s position and what you will do about my complaint.</p>\r\n<p>I look forward to hearing from you as soon as possible to resolve this problem. If I do not hear from you within ____ days I will file complaints with the appropriate consumer agencies and consider my legal alternatives. I am enclosing copies of my receipt. I may be contacted at the above address and phone number.</p>\r\n<p>Sincerely,</p>\r\n<p>(your signature)</p>', 'uploads/d57d713482.jpg', '2021-01-08', 'Pranto'),
(56, 'Feni, Mohipal 3900', '<p class=\"cf-tweet-this cf-tt-target cf-tt-element-attached-center cf-tt-target-attached-center cf-tt-enabled cf-tt-abutted cf-tt-abutted-top cf-tt-element-attached-bottom cf-tt-target-attached-top\">Dear (title) ____:</p>\r\n<p>I wish to complain about ____ (name of product or service, with serial number or account number) that I purchased on ____ (date and location of transaction).</p>\r\n<p>I am complaining because ____ (the reason you are dissatisfied). To resolve this problem I would like you to ____ (what you want the business to do).</p>\r\n<p>When I first learned of this problem, I contacted ____ (name of the person, date of the call) at your company, and was told that nothing could be done about my problem. I believe that this response is unfair because ____ (the reason you feel the company has an obligation to you). I would like a written statement explaining your company\'s position and what you will do about my complaint.</p>\r\n<p>I look forward to hearing from you as soon as possible to resolve this problem. If I do not hear from you within ____ days I will file complaints with the appropriate consumer agencies and consider my legal alternatives. I am enclosing copies of my receipt. I may be contacted at the above address and phone number.</p>\r\n<p>Sincerely,</p>\r\n<p>(your signature)</p>', 'uploads/c7b28cd947.jpg', '2021-01-08', 'rumman'),
(57, 'Bogura, Pabna', '<p class=\"cf-tweet-this cf-tt-target cf-tt-element-attached-center cf-tt-target-attached-center cf-tt-enabled cf-tt-abutted cf-tt-abutted-top cf-tt-element-attached-bottom cf-tt-target-attached-top\">Dear (title) ____:</p>\r\n<p>I wish to complain about ____ (name of product or service, with serial number or account number) that I purchased on ____ (date and location of transaction).</p>\r\n<p>I am complaining because ____ (the reason you are dissatisfied). To resolve this problem I would like you to ____ (what you want the business to do).</p>\r\n<p>When I first learned of this problem, I contacted ____ (name of the person, date of the call) at your company, and was told that nothing could be done about my problem. I believe that this response is unfair because ____ (the reason you feel the company has an obligation to you). I would like a written statement explaining your company\'s position and what you will do about my complaint.</p>\r\n<p>I look forward to hearing from you as soon as possible to resolve this problem. If I do not hear from you within ____ days I will file complaints with the appropriate consumer agencies and consider my legal alternatives. I am enclosing copies of my receipt. I may be contacted at the above address and phone number.</p>\r\n<p>Sincerely,</p>\r\n<p>(your signature)</p>', 'uploads/740c6af1ec.jpg', '2021-01-08', 'rumman');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `user_name`, `user_email`, `password`) VALUES
(36, 'Pranto', 'pranto@gmail.com', '1234'),
(37, 'rumman', 'rumman@gmail.com', '1234'),
(38, 'raihan', 'raihan_sbs@yahoo.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ministry_login`
--
ALTER TABLE `ministry_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_customerreg` (`email`);

--
-- Indexes for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  ADD PRIMARY KEY (`complainId`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`,`user_name`,`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ministry_login`
--
ALTER TABLE `ministry_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  MODIFY `complainId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
