-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2024 at 12:27 PM
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
-- Database: `registerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_db`
--

CREATE TABLE `register_db` (
  `register_id` int(11) NOT NULL,
  `register_name` varchar(128) NOT NULL,
  `register_email` varchar(225) NOT NULL,
  `register_password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_db`
--

INSERT INTO `register_db` (`register_id`, `register_name`, `register_email`, `register_password`) VALUES
(54, 'ydaira', 'ydaira@example.com', '$2y$10$hasd0LLfEndmYITpONnHdemsK2oX2B6yVZBjtH.i60bn9dKPRJcYK'),
(55, 'kiyo', 'kiyo@example.com', '$2y$10$hoz4Fyt60viK.2rcecqbZO9xzpFp3g0OoEsfijOB6kL921rOyljq.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_db`
--
ALTER TABLE `register_db`
  ADD PRIMARY KEY (`register_id`),
  ADD UNIQUE KEY `register-email` (`register_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_db`
--
ALTER TABLE `register_db`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
