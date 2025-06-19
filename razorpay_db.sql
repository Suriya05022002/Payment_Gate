-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 12, 2025 at 08:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razorpay_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ceg_payments`
--

CREATE TABLE `ceg_payments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_card` varchar(255) DEFAULT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ceg_payments`
--

INSERT INTO `ceg_payments` (`id`, `name`, `email`, `phone`, `password`, `id_card`, `payment_id`, `amount`, `status`) VALUES
(1, 'vikki', 'avk@gmail.com', '123', 'zzz', 'uploads/1749543873_acievers.jpg', 'pay_QfQUv6fkXVC6RP', 7500, 'Success'),


-- --------------------------------------------------------

--
-- Table structure for table `low_income_payments`
--

CREATE TABLE `low_income_payments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_card` varchar(255) DEFAULT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `low_income_payments`
--

INSERT INTO `low_income_payments` (`id`, `name`, `email`, `phone`, `password`, `id_card`, `payment_id`, `amount`, `status`) VALUES
(1, 'vignesh', 'skv@gmail.com', '124567890', 'qwe', 'uploads/1749543973_-Analytics.jpg', 'pay_QfQWJwTQRIwnCR', 6000, 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `student_payments`
--

CREATE TABLE `student_payments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_card` varchar(255) DEFAULT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_payments`
--

INSERT INTO `student_payments` (`id`, `name`, `email`, `phone`, `password`, `id_card`, `payment_id`, `amount`, `status`) VALUES
(1, 'vikki', 'svk@gmail.com', '1233', 'qqq', 'uploads/1749562890_acievers.jpg', 'pay_QfVtOhAVDWCuIp', 10000, 'Success'),


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `file_path`, `payment_id`, `amount`, `status`) VALUES
(1, 'jsf', 'fjsdf@gmail.com', '11', '12', 'uploads/1749708907_community.pdf', 'pay_QgBLUKMrkNRwsW', 100, 'Success'),
(2, 'adwad', 'ada@gmail.com', '111', '11', 'uploads/1749709916_consolidated.pdf', 'pay_QgBdFvjIBD4SnZ', 100, 'Success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ceg_payments`
--
ALTER TABLE `ceg_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `low_income_payments`
--
ALTER TABLE `low_income_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_payments`
--
ALTER TABLE `student_payments`
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
-- AUTO_INCREMENT for table `ceg_payments`
--
ALTER TABLE `ceg_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `low_income_payments`
--
ALTER TABLE `low_income_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_payments`
--
ALTER TABLE `student_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
