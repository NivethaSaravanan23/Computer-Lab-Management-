-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 11:27 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `dept`, `gender`, `email`, `category`, `login_time`, `logout_time`) VALUES
(5, 'nivetha', 'nive', '3a', 'Female', 'nivethasaravanan23@gmail.com', 'Student', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Subash Kumar', 'kumar', '3a Bsc CS', 'Male', 'subashkumarmuthu@gmail.com', 'Student', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Saravanan', 'saravanan', '3a Bsc CS', 'Male', 'saravanan@gmail.com', 'Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Bhuvana', 'bhuvana', '3a Bsc CT', 'Female', 'bhuvana@gmail.com', 'Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Sripriya', 'sripriya', '3a Bsc CS', 'Female', 'sripriyaravi04@gmail.com', 'Student', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Sudhan', 'sudhan', '3a Bsc CT', 'Male', 'sudhan06@gmail.com', 'Student', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Tommy', 'tommy', '3a Bsc IT', 'Male', 'tommy@gmail.com', 'Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
