-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 11:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `designation`, `created`) VALUES
(1, 'John Doee', 'johndoe@gmail.comm', 'Data Scientist', '2012-06-01 00:12:30'),
(2, 'David Costa', 'sam.mraz1996@yahoo.comm', 'Apparel Patternmaker', '2013-03-02 23:20:10'),
(3, 'Todd Martell', 'liliane_hirt@gmail.com', 'Accountant', '2014-09-20 01:10:25'),
(4, 'Adela Marion', 'michael2004@yahoo.com', 'Shipping Manager', '2015-04-11 02:11:12'),
(5, 'Matthew Pop', 'krystel_wol7@gmail.com', 'Chief Sustainability Officer', '2016-01-04 03:20:30'),
(6, 'Alan Wallin', 'neva_gutman10@hotmail.com', 'Chemical Techniciann', '2017-01-10 04:40:10'),
(7, 'Joyce Hinze', 'davonte.maye@yahoo.com', 'Transportation Planner', '2017-05-02 00:20:30'),
(8, 'Donna Andrews', 'joesph.quitz@yahoo.com', 'Wind Energy Engineer', '2018-01-04 03:15:35'),
(9, 'Andrew Best', 'jeramie_roh@hotmail.com', 'Geneticist', '2019-01-02 00:20:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
