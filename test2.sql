-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 26, 2017 at 04:57 PM
-- Server version: 5.7.20
-- PHP Version: 7.0.21

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
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `name` varchar(20) NOT NULL,
  `adj1` varchar(20) NOT NULL,
  `adj2` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`name`, `adj1`, `adj2`, `email`) VALUES
('aa', 'bb', 'cc', 'dd'),
('aaaasd', 'bbss', 'ccdd', 'fdfdf'),
('tttyt', 'bbsstyeryw', 'ccddrwerw', 'erre'),
('asdasd', 'asd', 'sdsdw', 'sdsdsd'),
('dsdd', 'ddd', 'dddd', 'ddd'),
('r', 't', 'y', 'u'),
('dsdsd', 'dsdsd', 'dsdsd', 'aaaaa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
