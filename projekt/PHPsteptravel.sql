-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2016 at 09:03 PM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='CLONEusers table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `name`, `email`, `language`, `comment`, `newsletter`, `status`, `date_insert`, `date_change`, `level`, `last_login_date`, `login_count`, `login_failed_count`, `deleted`, `steps_count`) VALUES
(1, 'muti', '*22640DBAB9CEE5C7F53E8AF9662B30F0CC441FFB', 'Mutionu', 'mutionu@server.fake', '', '', 0, '', '2016-05-23 00:00:00', '2016-05-23 00:00:00', 4, '2016-05-23 20:32:54', 3, 1, '', 0),
(3, 'muti2', '*22640DBAB9CEE5C7F53E8AF9662B30F0CC441FFB', 'Mutionu Isa', 'muti@urg.ee', 'et', 'tzt', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, '2016-05-23 20:06:27', 4, 0, '', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_users` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
