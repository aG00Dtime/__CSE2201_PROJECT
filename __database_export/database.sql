-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 05:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `db_reviews`
--
CREATE DATABASE IF NOT EXISTS `db_reviews` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_reviews`;

-- --------------------------------------------------------

--
-- Table structure for table `new_reservations`
--

DROP TABLE IF EXISTS `new_reservations`;
CREATE TABLE IF NOT EXISTS `new_reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_reservations`
--

INSERT INTO `new_reservations` (`id`, `name`, `email`, `phone`, `date_from`, `date_to`) VALUES
(24, 'Test', 'Test@gmail.com', 123123, '2022-05-26', '2022-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `name` text NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`name`, `rating`, `comment`, `id`) VALUES
('Someone', 5, 'I love this place', 28),
('Sarah', 3, 'It\'s okay.', 29),
('Thomas', 0, 'Horrible.', 30),
('Testing', 0, 'Testing', 33),
('Test name', 4, 'Test review', 34),
('Tehee', 3, 'asdada', 35);


COMMIT;
