-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 08:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lazyboy`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`username`, `password`) VALUES
('ADMIN', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clogin`
--

CREATE TABLE `clogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clogin`
--

INSERT INTO `clogin` (`username`, `password`) VALUES
('RMK COMPANY', 'rmk');

-- --------------------------------------------------------

--
-- Table structure for table `glogin`
--

CREATE TABLE `glogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glogin`
--

INSERT INTO `glogin` (`username`, `password`) VALUES
('CODE STRIKER', 'code striker');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adhar` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `dob`, `email`, `adhar`, `address`, `city`, `mobile`) VALUES
('Tancy', 'Tancy', '01-01-2000', 'Tancy@gmail.com', '1234-5678-9012', '234, WGC Road', 'Tuticorin', 904877224),
('Mercy', 'Mercy', '01-01-2000', 'mercy@gmail.com', '1234-5678-9012', '125, WGC Road', 'Tuticorin', 962185655),
('Shalwin', 'Shalwin', '01-01-2000', 'shalwin', '1234-5678-0912', '245, WGC Road', 'Chennai', 1238488475),
('Alin', 'Alin', '01-01-2000', 'alin@gmail.com', '0987-5432-1234', '975, WGC Road', 'Trichy', 477842367),
('Siva', 'Siva', '01-01-2000', 'johnson01042001@gmail.com', '42352346', '6745765', 'bklxmv', 0),
('Siva', 'Siva', '01-01-2000', 'johnson01042001@gmail.com', '42352346', '6745765', 'bklxmv', 2147483647),
('Siva', 'Siva', '01-01-2000', 'johnson01042001@gmail.com', '42352346', '6745765', 'bklxmv', 2147483647),
('Tamil', 'Tamil', '01-01-0000', 'johnson01042001@gmail.com', '42352346', '6745765', 'bklxmv', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `groupname` varchar(255) NOT NULL,
  `loanname` varchar(255) NOT NULL,
  `account` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`groupname`, `loanname`, `account`, `amount`) VALUES
('Code Sticker', 'RMK', 12234456, 100000),
('Code Sticker', 'RMK', 12234456, 1000000),
('DDD', 'RMK', 12234456, 133),
('Code Sticker', 'RMK', 12234456, 8999);

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `username` varchar(200) NOT NULL,
  `loanname` varchar(200) NOT NULL,
  `account` int(200) NOT NULL,
  `percentage` int(200) NOT NULL,
  `total` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`username`, `loanname`, `account`, `percentage`, `total`) VALUES
('Johnson', 'RMK', 1234567890, 12, 200000),
('john', 'RMK', 1234567890, 12, 33333);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `loanname` varchar(255) NOT NULL,
  `account` int(200) NOT NULL,
  `month` varchar(255) NOT NULL,
  `savings` int(200) NOT NULL,
  `charge` int(200) NOT NULL,
  `loan` int(200) NOT NULL,
  `intrest` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `loanname`, `account`, `month`, `savings`, `charge`, `loan`, `intrest`) VALUES
(1, 'Tancy', 'RMK', 123456789, 'January', 100, 10, 1000, 10),
(1, 'Tancy', 'RMK', 123456789, 'January', 100, 10, 1000, 10),
(0, 'Johnson', 'RMK', 987654321, 'Jan', 1000, 10, 10000, 100),
(0, 'MERCY', 'RMK', 2147483647, 'jan', 3443234, 534, 1244444, 325);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
