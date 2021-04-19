-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 05:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `SuperUserName` varchar(256) NOT NULL,
  `SuperUserPass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `SuperUserName`, `SuperUserPass`) VALUES
(0, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_testing`
--

CREATE TABLE `vendors_testing` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(255) NOT NULL,
  `businessName` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `category` varchar(256) NOT NULL,
  `ServiceCharge` int(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `OtherDetails` text NOT NULL,
  `image` varbinary(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendors_testing`
--

INSERT INTO `vendors_testing` (`id`, `name`, `email`, `businessName`, `contact`, `category`, `ServiceCharge`, `Location`, `OtherDetails`, `image`) VALUES
(1, 'Yuvraj Rajpoot', 'xyz@gmail.com', 'vijan mahel', 2147483647, 'Hotel', 10, 'jbp ', '5 star hotel', ''),
(2, 'saket', 'saket@gmail.com', 'saket dj wala', 1111111111, 'Dj and Music', 999999999, 'london', 'mast bajata hai', ''),
(3, 'shreyansh ', 'shreyansh@gmail.com', 'shreyansh fool wala', 2147483647, 'Decorator', 10000, 'dubai', 'Fresh fool dega', ''),
(5, 'sachan', 'sachan@gmail.com', 'sachan mehndi wala', 2147483647, 'Mehndi Artist', 5000, 'gwalior', 'mast mehndi laga k dunga', ''),
(6, 'ashok', 'ashok@gmail.com', 'ashok fool wala', 999999999, 'Decorator', 100000, 'indore', 'hfkgiyhsdshjh', 0x70686f746f2e6a7067),
(7, 'yash', 'jdfkjdfkh@gmail.com', 'hfjdskfji', 2147483647, 'Hotel', 122, 'hjdfh', 'khjkds', ''),
(8, 'yash', 'jdfkjdfkh@gmail.com', 'hfjdskfji', 2147483647, 'Hotel', 122, 'hjdfh', 'khjkds', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors_testing`
--
ALTER TABLE `vendors_testing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendors_testing`
--
ALTER TABLE `vendors_testing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
