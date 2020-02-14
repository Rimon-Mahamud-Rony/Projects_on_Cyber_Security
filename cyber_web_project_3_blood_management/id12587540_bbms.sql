-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2020 at 08:10 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12587540_bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `donor_list`
--

CREATE TABLE `donor_list` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `id` int(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mno` varchar(20) DEFAULT NULL,
  `bgroup` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`id`, `name`, `age`, `address`, `city`, `email`, `mno`, `bgroup`) VALUES
(115, 'munna', '22', 'maijdee', 'noakhali', 'munna.nstu16@gmail.com', '01845123844', 'AB+'),
(116, 'sakib', '22', 'gajipur', 'dhaka', 'sakib@gmail.com', '01789456213', 'A+'),
(117, 'joy', '22', 'sylhet sodor', 'sylhet', 'joy@gmail.com', '01862117112', 'B+'),
(120, 'munna', '22', 'gajipur', 'noakhali', 'munna.nstu16@gmail.com', '01845123844', 'B+'),
(121, 'Rimon Mahamud Rony', '22', 'gajipur', 'noakhali', 'munna.nstu16@gmail.com', '01845123844', 'A+'),
(124, 'asif', '22', 'mohammadpur', 'dhaka', 'asif@gmail.com', '01845123844', 'AB+'),
(125, 'nazneen', '22', 'brahmanbaria sodor', 'brahmanbaria', 'nazneen@gmail.com', '01789456213', 'O+'),
(126, 'abc', '12', 'aasd', 'csdcsdc', 'asdasd', '5444445454', 'B+'),
(127, 'rimon amahamud rony', '24', 'Dhaka', 'dhaka', 'rimonronynstu@gmail.com', '12121212121', 'B+'),
(128, 'ariful islam shawon', '22', 'itavara', 'dhaka', 'ariful@ariful', '12123333333', 'AB-'),
(129, 'test', '23', 'test', 'rt', 'test@test.com', '159951', 'B-'),
(130, 'mainul vai', '25', 'nk', 'maizdee', 'mainul@mainul.com', '123456', 'AB+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_list`
--
ALTER TABLE `donor_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_list`
--
ALTER TABLE `donor_list`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
