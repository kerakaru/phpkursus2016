-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2016 at 05:47 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PHPsteptravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblSteps`
--

CREATE TABLE `tblSteps` (
  `idTblSteps` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `fDate` date NOT NULL,
  `fDaysSteps` mediumint(8) UNSIGNED NOT NULL DEFAULT '0',
  `fAddedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fUpdateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `tblSteps`
--

INSERT INTO `tblSteps` (`idTblSteps`, `user_id`, `fDate`, `fDaysSteps`, `fAddedTime`, `fUpdateTime`) VALUES
(1, 3, '2016-05-10', 4876, '2016-05-25 07:23:56', '2016-05-25 07:23:56'),
(2, 3, '2016-05-12', 986, '2016-05-25 07:24:51', '2016-05-25 07:24:51'),
(3, 3, '2016-05-23', 9467, '2016-05-25 20:22:47', '2016-05-25 20:22:47'),
(4, 3, '2016-05-24', 3467, '2016-05-25 20:23:22', '2016-05-25 20:23:22'),
(5, 3, '2016-05-16', 4589, '2016-05-25 20:23:32', '2016-05-25 20:23:32'),
(6, 3, '2016-05-14', 8956, '2016-05-25 20:30:29', '2016-05-25 20:30:29'),
(7, 1, '2016-05-02', 2569, '2016-05-25 20:34:52', '2016-05-25 20:34:52'),
(8, 1, '2016-05-03', 657, '2016-05-25 20:35:00', '2016-05-25 20:35:00'),
(9, 1, '2016-05-02', 7628, '2016-05-29 21:50:29', '2016-05-29 21:50:29'),
(10, 1, '2016-05-02', 7628, '2016-05-29 21:50:36', '2016-05-29 21:50:36'),
(11, 1, '2016-04-05', 8239, '2016-05-30 09:50:57', '2016-05-30 09:50:57'),
(12, 1, '2016-04-04', 2279, '2016-05-30 09:51:10', '2016-05-30 09:51:10'),
(13, 1, '2016-04-01', 7279, '2016-05-30 09:51:19', '2016-05-30 09:51:19'),
(14, 1, '2016-04-02', 2279, '2016-05-30 10:17:31', '2016-05-30 10:17:31'),
(15, 1, '2016-04-08', 2279, '2016-05-30 10:22:38', '2016-05-30 10:22:38'),
(16, 1, '2016-04-09', 2279, '2016-05-30 10:23:31', '2016-05-30 10:23:31'),
(17, 1, '2016-04-14', 2279, '2016-05-30 10:26:58', '2016-05-30 10:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(5) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `name` varchar(66) NOT NULL,
  `email` varchar(66) NOT NULL,
  `language` varchar(22) NOT NULL,
  `comment` text NOT NULL,
  `newsletter` tinyint(1) NOT NULL,
  `status` char(1) NOT NULL,
  `date_insert` datetime NOT NULL,
  `date_change` datetime NOT NULL,
  `level` int(2) NOT NULL,
  `last_login_date` datetime NOT NULL,
  `login_count` int(5) NOT NULL,
  `login_failed_count` int(11) NOT NULL,
  `deleted` tinytext CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `steps_count` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='CLONEusers table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `name`, `email`, `language`, `comment`, `newsletter`, `status`, `date_insert`, `date_change`, `level`, `last_login_date`, `login_count`, `login_failed_count`, `deleted`, `steps_count`) VALUES
(1, 'muti', '*22640DBAB9CEE5C7F53E8AF9662B30F0CC441FFB', 'Mutionu', 'mutionu@server.fake', '', '', 0, '', '2016-05-23 00:00:00', '2016-05-23 00:00:00', 4, '2016-05-30 13:41:19', 9, 2, '', 0),
(3, 'muti2', '*22640DBAB9CEE5C7F53E8AF9662B30F0CC441FFB', 'Mutionu Isa', 'muti@urg.ee', 'et', 'tzt', 0, '', '2016-05-09 00:00:00', '2016-05-10 00:00:00', 4, '2016-05-26 00:44:31', 9, 0, '', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblSteps`
--
ALTER TABLE `tblSteps`
  ADD PRIMARY KEY (`idTblSteps`),
  ADD UNIQUE KEY `idTblSteps` (`idTblSteps`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblSteps`
--
ALTER TABLE `tblSteps`
  MODIFY `idTblSteps` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
