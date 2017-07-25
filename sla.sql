-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2017 at 05:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sla`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `ID` int(11) NOT NULL,
  `service_name` text NOT NULL,
  `ticket` int(11) NOT NULL,
  `downtime` int(11) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `dbdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`ID`, `service_name`, `ticket`, `downtime`, `month`, `day`, `year`, `dbdate`) VALUES
(3, 'TMRM', 481, 22, 0, 0, 0, '2017-01-04'),
(4, 'CCS', 482, 25, 0, 0, 0, '2017-01-05'),
(5, 'PLS', 515, 93, 0, 0, 0, '2017-02-09'),
(6, 'PLS', 536, 42, 0, 0, 0, '2017-02-14'),
(7, 'PLS', 537, 16, 0, 0, 0, '2017-02-14'),
(8, 'HES', 539, 100, 0, 0, 0, '2017-02-21'),
(9, 'PLS', 540, 104, 0, 0, 0, '2017-02-22'),
(10, 'TMRM', 541, 36, 0, 0, 0, '2017-02-23'),
(11, 'WFBSS', 557, 18, 0, 0, 0, '2017-03-04'),
(12, 'WFBSS', 562, 30, 0, 0, 0, '2017-03-24'),
(13, 'HES', 573, 56, 0, 0, 0, '2017-03-30'),
(14, 'YAMMS', 577, 59, 0, 0, 0, '2017-04-03'),
(15, 'APT-CS', 578, 141, 0, 0, 0, '2017-04-06'),
(16, 'Yamato', 592, 220, 0, 0, 0, '2017-04-09'),
(17, 'HES', 596, 37, 0, 0, 0, '2017-04-13'),
(18, 'HES', 597, 15, 0, 0, 0, '2017-04-14'),
(19, 'IWSaaS', 598, 56, 0, 0, 0, '2017-04-17'),
(20, 'TMMS', 601, 55, 0, 0, 0, '2017-04-20'),
(21, 'PLS', 608, 112, 0, 0, 0, '2017-04-22'),
(22, 'HES', 610, 453, 0, 0, 0, '2017-04-24'),
(23, 'HES', 611, 17, 0, 0, 0, '2017-04-25'),
(24, 'ERS', 626, 56, 0, 0, 0, '2017-05-04'),
(25, 'FRS', 656, 0, 0, 0, 0, '2017-05-27'),
(26, 'WFBSS', 657, 42, 0, 0, 0, '2017-06-02'),
(27, 'WFBSS', 670, 157, 0, 0, 0, '2017-06-09'),
(28, 'HES', 671, 18, 0, 0, 0, '2017-06-13'),
(29, 'WFBSS', 672, 22, 0, 0, 0, '2017-06-14'),
(30, 'FRS', 673, 113, 0, 0, 0, '2017-06-15'),
(31, 'TMRM', 674, 28, 0, 0, 0, '2017-06-15'),
(32, 'HES', 676, 13, 0, 0, 0, '2017-06-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
