-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 06:37 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `light`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `model` varchar(500) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `price` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL,
  `availability` int(11) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `name`, `model`, `description`, `price`, `quantity`, `availability`, `image`) VALUES
(1, 'chandelier', 'Roof Chandelier', 'CH-3JUS', 'This is a good chandelier because blah blah blah', '5000', 58, 0, '1.jpg'),
(2, 'chandelier', 'Classy Cosy chandelier', 'CH-au8aha', 'This is an awesome chandelier that does blah blah blah and is used to decorate the house interiors', '8950', 56, 1, '2.jpg'),
(3, 'clights', 'Ceiling Lights Indonasia', 'CH-au8aha', 'Ceiling lights description will go here and you will explain to the consumers whats it all about', '7500', 56, 1, '3.jpg'),
(4, 'flights', 'Flood Lights test here', 'CH-au8aha', 'Flood lights description will go here and you will explain to the consumers whats it all about', '2300', 56, 1, '4.jpg'),
(5, 'bandt', 'Classy Cosy chandelier', 'CH-au8aha', 'This is an awesome chandelier that does blah blah blah and is used to decorate the house interiors', '19800', 56, 1, '5.jpg'),
(6, 'zlights', 'Classy Cosy chandelier', 'CH-au8aha', 'This is an awesome chandelier that does blah blah blah and is used to decorate the house interiors', '6820', 56, 1, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
