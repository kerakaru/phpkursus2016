-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2016 at 07:23 PM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PHPsteptravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblSteps`
--

CREATE TABLE IF NOT EXISTS `tblSteps` (
`idTblSteps` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `fDate` date NOT NULL,
  `fDaysSteps` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `fAddedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fUpdateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Dumping data for table `tblSteps`
--

INSERT INTO `tblSteps` (`idTblSteps`, `user_id`, `fDate`, `fDaysSteps`, `fAddedTime`, `fUpdateTime`) VALUES
(1, 3, '2016-05-10', 4876, '2016-05-25 04:23:56', '2016-05-25 04:23:56'),
(2, 3, '2016-05-12', 986, '2016-05-25 04:24:51', '2016-05-25 04:24:51'),
(3, 3, '2016-05-23', 9467, '2016-05-25 17:22:47', '2016-05-25 17:22:47'),
(4, 3, '2016-05-24', 3467, '2016-05-25 17:23:22', '2016-05-25 17:23:22'),
(5, 3, '2016-05-16', 4589, '2016-05-25 17:23:32', '2016-05-25 17:23:32'),
(6, 3, '2016-05-14', 8956, '2016-05-25 17:30:29', '2016-05-25 17:30:29'),
(7, 1, '2016-05-02', 2569, '2016-05-25 17:34:52', '2016-05-25 17:34:52'),
(8, 1, '2016-05-03', 657, '2016-05-25 17:35:00', '2016-05-25 17:35:00'),
(9, 1, '2016-05-02', 7628, '2016-05-29 18:50:29', '2016-05-29 18:50:29'),
(10, 1, '2016-05-02', 7628, '2016-05-29 18:50:36', '2016-05-29 18:50:36'),
(11, 1, '2016-04-05', 8239, '2016-05-30 06:50:57', '2016-05-30 06:50:57'),
(12, 1, '2016-04-04', 2279, '2016-05-30 06:51:10', '2016-05-30 06:51:10'),
(13, 1, '2016-04-01', 7279, '2016-05-30 06:51:19', '2016-05-30 06:51:19'),
(14, 1, '2016-04-02', 2279, '2016-05-30 07:17:31', '2016-05-30 07:17:31'),
(15, 1, '2016-04-08', 2279, '2016-05-30 07:22:38', '2016-05-30 07:22:38'),
(16, 1, '2016-04-09', 2279, '2016-05-30 07:23:31', '2016-05-30 07:23:31'),
(17, 1, '2016-04-14', 2279, '2016-05-30 07:26:58', '2016-05-30 07:26:58'),
(18, 1, '2016-05-13', 12548, '2016-05-30 15:56:14', '2016-05-30 15:56:14'),
(19, 1, '2016-05-14', 12548, '2016-05-30 15:56:26', '2016-05-30 15:56:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblSteps`
--
ALTER TABLE `tblSteps`
 ADD PRIMARY KEY (`idTblSteps`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblSteps`
--
ALTER TABLE `tblSteps`
MODIFY `idTblSteps` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
