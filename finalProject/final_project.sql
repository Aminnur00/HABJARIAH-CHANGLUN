-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 11:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `adminid` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`adminid`, `username`, `name`, `password`, `email`, `phone`) VALUES
(6, 'admin123', 'MUHAMMAD AMINNUR ARIF BIN MOHD RAZMI', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'aminnur.arif44@gmail.com', '0179061876');

-- --------------------------------------------------------

--
-- Table structure for table `applydonation`
--

CREATE TABLE `applydonation` (
  `applydonationid` int(15) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `detail` varchar(150) NOT NULL,
  `location` varchar(50) NOT NULL,
  `verifyic` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applydonation`
--

INSERT INTO `applydonation` (`applydonationid`, `name`, `phone`, `type`, `detail`, `location`, `verifyic`) VALUES
(40, 'RAZAK', '0194763833', 'Barang Dapur', 'Memerlukan beras dan barang dapur seperti minyak masak, gula dan tepung .', 'Changlun, Kedah', '000404-06-0297'),
(45, 'AMINNUR', '0179061876', 'UBATAN', 'Memerlukan sumbangan ubatan bagi penyakit buah pinggang. ', 'Changlun, Kedah', '000404-06-0290'),
(47, 'RAHMAN', '0191763233', 'SUSU ANAK', 'Memerlukan sumbangan susu bayi berusia 3 tahun. ', 'Changlun, Kedah', '000404-02-0297');

-- --------------------------------------------------------

--
-- Table structure for table `applysale`
--

CREATE TABLE `applysale` (
  `applysaleid` int(10) NOT NULL,
  `nameproduct` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `condition` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applysale`
--

INSERT INTO `applysale` (`applysaleid`, `nameproduct`, `price`, `type`, `quantity`, `condition`, `location`, `phone`) VALUES
(21, 'BERAS(5KG)', '11.50', 'BARANGAN DAPUR', '35', 'BARU', 'Changlun, Kedah', '0194763801'),
(22, 'LAPTOP', '450', 'BARANGAN ELEKTRONIK', '3', 'TERPAKAI', 'Changlun, Kedah', '0194763811'),
(24, 'BAJU_T-SHIRT', '5.00', 'PAKAIAN TERPAKAI', '35', 'TERPAKAI', 'Changlun, Kedah', '0194763233');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationid` int(10) NOT NULL,
  `amount` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellerdb`
--

CREATE TABLE `sellerdb` (
  `sellerid` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerdb`
--

INSERT INTO `sellerdb` (`sellerid`, `username`, `password`, `email`, `phone`) VALUES
(1, 'aminnur46', '7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1', 'aminnur.arif46@gmail.com', '0111111111');

-- --------------------------------------------------------

--
-- Table structure for table `table_carts`
--

CREATE TABLE `table_carts` (
  `email` varchar(40) NOT NULL,
  `id` int(10) NOT NULL,
  `cart_qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_carts`
--

INSERT INTO `table_carts` (`email`, `id`, `cart_qty`) VALUES
('aminnur45', 7, 1),
('aminnur45', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_payment`
--

CREATE TABLE `table_payment` (
  `payment_receipt` varchar(40) NOT NULL,
  `payment_email` varchar(40) NOT NULL,
  `payment_paid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`id`, `username`, `name`, `password`, `email`, `phone`) VALUES
(6, 'mino44', 'MUHAMMAD AMINNUR ARIF BIN MOHD RAZMI', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'aminnur.arif44@gmail.com', '0179061876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `applydonation`
--
ALTER TABLE `applydonation`
  ADD PRIMARY KEY (`applydonationid`);

--
-- Indexes for table `applysale`
--
ALTER TABLE `applysale`
  ADD PRIMARY KEY (`applysaleid`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationid`);

--
-- Indexes for table `sellerdb`
--
ALTER TABLE `sellerdb`
  ADD PRIMARY KEY (`sellerid`);

--
-- Indexes for table `table_carts`
--
ALTER TABLE `table_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindb`
--
ALTER TABLE `admindb`
  MODIFY `adminid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `applydonation`
--
ALTER TABLE `applydonation`
  MODIFY `applydonationid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `applysale`
--
ALTER TABLE `applysale`
  MODIFY `applysaleid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donationid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellerdb`
--
ALTER TABLE `sellerdb`
  MODIFY `sellerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_carts`
--
ALTER TABLE `table_carts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
