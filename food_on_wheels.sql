-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 02:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_on_wheels`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `C_id` int(11) NOT NULL,
  `CC_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chekout_main`
--

CREATE TABLE `chekout_main` (
  `CC_id` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Per` int(11) NOT NULL,
  `Grand_Total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credit_info`
--

CREATE TABLE `credit_info` (
  `id` int(11) NOT NULL COMMENT 'unique  id',
  `name` text NOT NULL COMMENT 'name on credit card',
  `number` int(11) NOT NULL COMMENT 'credit card number that to be use for transaction',
  `cvv_no` int(11) NOT NULL,
  `expiry_date` date NOT NULL COMMENT 'credit card expiry date mentioned on credit card'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table contain information regarding credit card info that to be used by customer with their permission. we need some details to verify data that whatever credit used by customer is authentic or not so, we need some credit card information like credit or debit card expire date, name mentioned on card and card number and other required information';

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `id` int(11) NOT NULL COMMENT 'a unique customer id',
  `name` varchar(25) NOT NULL COMMENT 'customer name',
  `email_id` varchar(200) NOT NULL,
  `address` varchar(60) NOT NULL COMMENT 'delivery address ',
  `contact` varchar(12) NOT NULL COMMENT 'phone number',
  `area_code` int(11) NOT NULL COMMENT 'area code'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mobile_No` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `name`, `mobile_No`) VALUES
(1, 'soumil patel', '4164710293'),
(2, 'Gaurav Patel', '4164710294'),
(3, 'parth shah', '4164710295'),
(4, 'karan Patel', '4164710296');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_item`
--

CREATE TABLE `fixed_item` (
  `id` int(11) NOT NULL COMMENT 'a unique pizza id',
  `ingredients` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixed_item`
--

INSERT INTO `fixed_item` (`id`, `ingredients`, `description`, `image`) VALUES
(1, 'Udad dal,red kidney beans,cumin seeds,garlic cloves, ginger', 'Dal Makhani', 'i1.jpg'),
(2, 'Panner,red and green capcicum,onion,ginger-garlic paste,yogurt', 'Panner Tikka', 'i2.jpg'),
(3, 'chick peas,bay leafs,cinnamons,onion,tomato,ginger and garlic', 'Chole Bhature', 'i5.jpg'),
(4, 'Kidney Beans,Onion,tomatoes,fennel beans,ginger', 'Rajma Chawal', 'i3.jpg'),
(5, 'egg plant,onion,tomatoes,garlic', 'Baigan Bharta', 'i4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_customize`
--

CREATE TABLE `order_customize` (
  `order_f_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `topping` varchar(1000) NOT NULL,
  `drink` varchar(1000) NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` decimal(10,2) NOT NULL,
  `per` int(11) NOT NULL,
  `total_amt` decimal(10,2) NOT NULL,
  `pay_type` varchar(100) NOT NULL,
  `cre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_fixed_id` int(11) NOT NULL,
  `fixed_item_id` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_fixed`
--

CREATE TABLE `order_fixed` (
  `order_fixed_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `tax_rate` int(11) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `payment_type` varchar(200) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `email` varchar(250) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_fixed`
--

INSERT INTO `order_fixed` (`order_fixed_id`, `total`, `tax_rate`, `grand_total`, `name`, `address`, `payment_type`, `mobile`, `email`, `d_id`) VALUES
(1, '30.00', 13, '33.90', 'Maitri Chaudhari', '155', 'COD', '4454554454', 'maitri795@gmail.com', 2),
(2, '70.00', 13, '79.10', 'soumil patel', 'mississuga', 'CARD', '4563217896', 's@gmail.com', 3),
(3, '70.00', 13, '79.10', 'navreen thind', 'brampton', 'CARD', '465213987', 'NAVREEN@GMAIL.COM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL COMMENT 'a unique size id',
  `size` varchar(2) NOT NULL COMMENT 'size like M - Medium, L- Large  etc',
  `size_description` text NOT NULL COMMENT 'pizza size description like S size value in inches and centimeter (10",25cm) ',
  `item_price` decimal(10,0) NOT NULL COMMENT 'price like 10,15'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`, `size_description`, `item_price`) VALUES
(1, 'S', '250 gram', '10'),
(2, 'M', '500gram', '12'),
(3, 'L', '1 kilogram', '14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`C_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `chekout_main`
--
ALTER TABLE `chekout_main`
  ADD PRIMARY KEY (`CC_id`);

--
-- Indexes for table `credit_info`
--
ALTER TABLE `credit_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixed_item`
--
ALTER TABLE `fixed_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_customize`
--
ALTER TABLE `order_customize`
  ADD PRIMARY KEY (`order_f_id`),
  ADD KEY `cus_id` (`cus_id`),
  ADD KEY `cre_id` (`cre_id`),
  ADD KEY `cus_id_2` (`cus_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `order_fixed`
--
ALTER TABLE `order_fixed`
  ADD PRIMARY KEY (`order_fixed_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `chekout_main`
--
ALTER TABLE `chekout_main`
  MODIFY `CC_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `credit_info`
--
ALTER TABLE `credit_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique  id';
--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'a unique customer id';
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fixed_item`
--
ALTER TABLE `fixed_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'a unique pizza id', AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_customize`
--
ALTER TABLE `order_customize`
  MODIFY `order_f_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_fixed`
--
ALTER TABLE `order_fixed`
  MODIFY `order_fixed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'a unique size id', AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `fixed_item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_fixed`
--
ALTER TABLE `order_fixed`
  ADD CONSTRAINT `order_fixed_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `driver` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
