-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 07:36 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `sort_id` int(100) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`category_id`, `category_name`, `sort_id`, `parent_id`, `category_link`) VALUES
(13, 'Educational Attainment', 0, 0, 'Educational Attainment'),
(14, 'Years Of Related Experience', 0, 0, 'Years Of Related Experience'),
(15, 'Professional Advancement', 0, 0, 'Professional Advancement'),
(16, 'AB/BS Degree', 1, 13, 'AB/BS Degree'),
(17, 'Masters Unit', 1, 13, 'Masters Unit'),
(18, 'Masters Degree', 1, 13, 'Masters Degree'),
(19, 'Doctorate Unit', 1, 13, 'Doctorate Unit'),
(20, 'Doctorate Degree', 1, 13, 'Doctorate Degree'),
(21, 'Board course With license', 2, 16, 'Board course With license'),
(22, 'Board course Without license', 2, 16, 'Board course Without license'),
(23, 'Non Board Course', 2, 16, 'Non Board Course'),
(24, 'Completed Academic requirements', 2, 17, 'Completed Academic requirements'),
(25, 'Succesfuly defended proposal', 2, 17, 'Succesfuly defended proposal'),
(26, 'Teachers Experience', 1, 14, 'Teachers Experience'),
(27, 'Industry Experience', 1, 14, 'Industry Experience'),
(28, 'Years Of teaching experience', 2, 26, 'Years Of teaching experience'),
(29, 'Faith/Autonomous/College/Universities', 2, 26, 'Faith/Autonomous/College/Universities'),
(30, 'Year Of Experience', 2, 27, 'Year Of Experience'),
(31, 'Position', 2, 27, 'Position');

-- --------------------------------------------------------

--
-- Table structure for table `subcat1_tbl`
--

CREATE TABLE `subcat1_tbl` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `parent_category` varchar(100) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat1_tbl`
--

INSERT INTO `subcat1_tbl` (`id`, `category_name`, `parent_category`, `points`) VALUES
(1, 'Board Course With License', 'AB/BS Degree', 10),
(2, 'Board Course Without License', 'AB/BS Degree', 6),
(3, 'Non Board course', 'AB/BS Degree', 10),
(5, 'Non Board course', 'AB/BS Degree', 11);

-- --------------------------------------------------------

--
-- Table structure for table `subcat2_tbl`
--

CREATE TABLE `subcat2_tbl` (
  `id` int(11) NOT NULL,
  `category_name` varchar(111) NOT NULL,
  `parent_category` varchar(111) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat2_tbl`
--

INSERT INTO `subcat2_tbl` (`id`, `category_name`, `parent_category`, `points`) VALUES
(1, 'Completed Academic Requirements', 'Masters Unit', 5),
(2, 'Successfully Defended Proposals', 'Masters Unit', 10),
(3, 'Test1', 'MastersUnit', 100);

-- --------------------------------------------------------

--
-- Table structure for table `subcat3_tbl`
--

CREATE TABLE `subcat3_tbl` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `parent_category` varchar(100) NOT NULL,
  `points` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat3_tbl`
--

INSERT INTO `subcat3_tbl` (`id`, `category_name`, `parent_category`, `points`) VALUES
(1, 'Masters Degree (Non Thesis)', 'Masters Degree', 10),
(2, 'Masters Degree (Thesis)', 'Masters Degree', 15),
(3, 'Masters Degree (Non Related)', 'Masters Degree', 10),
(4, 'Test1', 'Masters Degree', 100);

-- --------------------------------------------------------

--
-- Table structure for table `subcat4_tbl`
--

CREATE TABLE `subcat4_tbl` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `parent_category` varchar(100) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat4_tbl`
--

INSERT INTO `subcat4_tbl` (`id`, `category_name`, `parent_category`, `points`) VALUES
(1, 'Completed Academic Requirements', 'Doctorate Units', 10),
(2, 'Succesfully defended Proposals', 'Doctorate Units', 20),
(3, 'Test1', 'Doctorate Units', 100);

-- --------------------------------------------------------

--
-- Table structure for table `subcat5_tbl`
--

CREATE TABLE `subcat5_tbl` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `parent_category` varchar(100) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat5_tbl`
--

INSERT INTO `subcat5_tbl` (`id`, `category_name`, `parent_category`, `points`) VALUES
(1, 'Doctorate Degree', 'Doctorate Degree', 25),
(2, 'Doctorate Degree(non related)', 'Doctorate Degree', 20),
(3, 'Test1', 'Doctorate Degree', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `subcat1_tbl`
--
ALTER TABLE `subcat1_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat2_tbl`
--
ALTER TABLE `subcat2_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat3_tbl`
--
ALTER TABLE `subcat3_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat4_tbl`
--
ALTER TABLE `subcat4_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat5_tbl`
--
ALTER TABLE `subcat5_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `subcat1_tbl`
--
ALTER TABLE `subcat1_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcat2_tbl`
--
ALTER TABLE `subcat2_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcat3_tbl`
--
ALTER TABLE `subcat3_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcat4_tbl`
--
ALTER TABLE `subcat4_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcat5_tbl`
--
ALTER TABLE `subcat5_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
