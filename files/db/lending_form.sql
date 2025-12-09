-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2025 at 03:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lending_tbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `lending_form`
--

CREATE TABLE `lending_form` (
  `lending_form_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lending_form`
--

INSERT INTO `lending_form` (`lending_form_id`, `full_name`, `email`, `address`, `city`, `state`, `zip`, `amount`) VALUES
(1, 'Laurence Rei Sebial', 'ladi.sebial.coc@phinmaed.com', 'Talakag', 'Bukidnon City', 'Philippines', 9000, 5000),
(2, 'Mark Clarence', 'ladi.sebial.coc@phinmaed.com', 'Talakag Bukidnon', 'Bukidnon City', 'Philippines', 9000, 5000),
(3, 'ahahaic', 'sdsidhwi@gmail.com', 'Tigahon', 'Talakag', 'Philippines', 9000, 1000),
(4, 'Denden Rabang', 'laurencekent394@gmail.com', 'Tigahon', 'Cagayan De Oro City', 'Philippines', 9000, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lending_form`
--
ALTER TABLE `lending_form`
  ADD PRIMARY KEY (`lending_form_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lending_form`
--
ALTER TABLE `lending_form`
  MODIFY `lending_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
