-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 07:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foody`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `category` enum('user','restaurant_owner','rider','admin') NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `location` enum('gambang','pekan','others') NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `category`, `age`, `gender`, `contact`, `email`, `location`, `address`) VALUES
(1, 'Chan Hue Wah', 'chan99', 'Chan99', 'admin', 21, 'male', '0164963194', 'chanhuewah99@gmail.com', 'pekan', 'KK5'),
(11, 'Choo Yong han', 'choo99', 'Choo99', 'user', 21, 'male', '0178634967', 'chooyonghan@gmail.com', 'pekan', 'Kolej Kediaman 5'),
(12, 'Chuah Hock Hwa', 'chuah99', 'Chuah99', 'restaurant_owner', 21, 'male', '0158659796', 'chuahhockhwa@gmail.com', 'pekan', 'Kolej Kediaman 5'),
(13, 'Yew Jia Yie', 'yew99', 'Yew99', 'rider', 21, 'male', '011894184653', 'yewjiayie@gmail.com', 'pekan', 'DHUAM'),
(14, 'William Tung', 'william99', 'William99', 'user', 21, 'male', '01953679423', 'william@gmail.com', 'gambang', 'KK4'),
(20, 'Jesics', 'jes99', 'jes99', 'restaurant_owner', 23, 'female', '0168753658', 'jesica@gmail.com', 'gambang', 'KK3'),
(21, 'Ben', 'ben99', 'Ben99', 'admin', 23, 'male', '0175983419', 'benben99@gmail.com', 'pekan', 'DHUAM'),
(22, 'test account', 'test', 'test', 'user', 23, 'female', '0175987354', 'ertererer@gmail.com', 'gambang', 'ererer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
