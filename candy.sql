-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 05:13 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_items`
--

CREATE TABLE `tb_items` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_items`
--

INSERT INTO `tb_items` (`id`, `title`, `image`, `detail`, `price`) VALUES
(1, 'à¸‚à¸™à¸¡à¹„à¸—à¸¢', 'item1.jpg', 'à¸­à¸£à¹ˆà¸­à¸¢ à¸ªà¸°à¸­à¸²à¸” ...', '20 à¸šà¸²à¸—'),
(2, 'à¸‚à¸™à¸¡à¸ˆà¸µà¸š', 'item2.jpg', 'à¸¡à¸µà¸«à¸¥à¸²à¸¢à¹„à¸ªà¹‰', '60 à¸šà¸²à¸—'),
(3, 'à¸‚à¸™à¸¡à¸ˆà¸µà¸™', 'item3.jpg', 'à¹€à¸ªà¹‰à¸™ à¹€à¸«à¸™à¸µà¸¢à¸§à¸™à¸¸à¹ˆà¸¡', '20 à¸šà¸²à¸—'),
(4, 'à¸—à¸”à¸ªà¸­à¸š', 'item4.jpg', 'à¸—à¸”à¸ªà¸­à¸š...', '100 à¸šà¸²à¸—');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_items`
--
ALTER TABLE `tb_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_items`
--
ALTER TABLE `tb_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
