-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 04:54 AM
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
-- Database: `pixelbay`
--

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `photographer_username` varchar(50) NOT NULL,
  `photographer_name` varchar(50) NOT NULL,
  `photographer_phone` varchar(15) NOT NULL,
  `photographer_email` varchar(25) NOT NULL,
  `photographer_address` varchar(50) NOT NULL,
  `photographer_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`photographer_username`, `photographer_name`, `photographer_phone`, `photographer_email`, `photographer_address`, `photographer_password`) VALUES
('charitra', 'Charitra', '9988776655', 'admin@gmail.com', 'Udupi', '12345'),
('dhanaraj', 'Dhanaraj', '07760445177', 'dhanarajbhat@gmail.com', '1/77', '1');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `pic_id` int(20) NOT NULL,
  `pic_title` varchar(50) NOT NULL,
  `pic_des` varchar(5000) NOT NULL,
  `pic_img` varchar(50) DEFAULT 'NA',
  `pic_cat` varchar(50) NOT NULL,
  `photographer_username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`pic_id`, `pic_title`, `pic_des`, `pic_img`, `pic_cat`, `photographer_username`) VALUES
(7, 'hi', ' nm', 'assets/img/cs.jpg', 'Aerial', 'dhanaraj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`photographer_username`),
  ADD UNIQUE KEY `photographer_phone` (`photographer_phone`),
  ADD UNIQUE KEY `photographer_email` (`photographer_email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`pic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `pic_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
