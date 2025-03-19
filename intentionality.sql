-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 19, 2025 at 09:05 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intentionality`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `totalBal` float NOT NULL DEFAULT '0',
  `needs%` float NOT NULL DEFAULT '0',
  `needsBal` float NOT NULL DEFAULT '0',
  `invest%` float NOT NULL DEFAULT '0',
  `investBal` float NOT NULL DEFAULT '0',
  `savings%` float NOT NULL DEFAULT '0',
  `savingsBal` float NOT NULL DEFAULT '0',
  `wants%` float NOT NULL DEFAULT '0',
  `wantsBal` float NOT NULL DEFAULT '0',
  `recent` float DEFAULT NULL,
  `secondRecent` float DEFAULT NULL,
  `thirdRecent` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user`, `pass`, `totalBal`, `needs%`, `needsBal`, `invest%`, `investBal`, `savings%`, `savingsBal`, `wants%`, `wantsBal`, `recent`, `secondRecent`, `thirdRecent`) VALUES
('ian', '$2y$10$Py1cOXrXgZCzPSDSyIXbauwGSZuBdc0CYuVKV3K1h1mzkpZt4qzT.', 107.12, 66.83, 77.26, 17.69, 20.45, 10.61, 3.78, 4.87, 5.63, 11, -1.18, -7.31),
('iand', '$2y$10$ZBpyA5pdSzFGJeQjwsG5wO.9jKXkD9J0PSJLr4nq5WDt9bjtewq0y', 174.33, 48.07, 121.09, 5.01, 12.62, 11.33, 28.54, 35.59, 12.08, -28.46, -49.1, 77.19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
