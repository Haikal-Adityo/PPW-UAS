-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 04:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenleaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `name`, `email`, `message`, `date`) VALUES
(1, 'haikal', 'haikaladityo@gmail.com', 'test', '2023-06-21  18:38:39'),
(2, 'haikal', 'haikal@mail', 'ubba', '2023-06-21  18:40:01'),
(3, 'haikal', 'haikaladityo@gmail.com', 'sdfsdf', '2023-06-21  18:44:29'),
(4, 'haikal', 'haikal@mail', 'sdfsdfsdfsdf', '2023-06-21  18:44:37'),
(5, 'haikal', 'haikaladityo@gmail.com', 'sdfsdfsfsfsdf', '2023-06-21  18:44:45'),
(6, 'haikal', 'haikaladityo@gmail.com', 'testing', '2023-06-21  18:57:24'),
(7, 'haikal', 'haikal@mail', 'testing123', '2023-06-21  21:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
