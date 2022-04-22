-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 22, 2022 at 06:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ad` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `year_used` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `subbrand` varchar(250) NOT NULL,
  `cc` varchar(250) NOT NULL,
  `engine` varchar(250) NOT NULL,
  `tyre` varchar(250) NOT NULL,
  `license` varchar(250) NOT NULL,
  `asking_price` varchar(250) NOT NULL,
  `negosiate` varchar(250) NOT NULL,
  `your_location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ad`, `model`, `year`, `year_used`, `company`, `subbrand`, `cc`, `engine`, `tyre`, `license`, `asking_price`, `negosiate`, `your_location`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('bmw for sale', '2008ii', '2009', '13', 'bmw', 'null', '2000', 'v8', 'mrf', 'dhaka', '3000000', '3000000', 'dhaka'),
('jhdfdf', 'edvcdc', 'dvcv', 'dvcdv', 'dvdv', 'dvcdvd', 'dvsdv', 'sdferf', 'fdfv', 'dvdv ', 'vd', '', 'dvd');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `R_ID` int(11) NOT NULL,
  `FULLNAME` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`R_ID`, `FULLNAME`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Md. Mahfuzur Rahmna', 'mdmahfuzur980@gmail.com', '12345'),
(5, 'Azasd', 'azad123@gmail.com', '54321'),
(7, 'Rasel', 'rasel123@gmail.com', '1234'),
(8, 'rasel ahmed', 'raselahmed@gmail.com', 'admin'),
(9, 'saiful ', 'saiful@gmail.com', 'saiful1'),
(10, 'Maliha', 'm1223@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ad`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`R_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
