-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 01:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `religion` text NOT NULL,
  `nationality` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `gender`, `religion`, `nationality`, `email`, `phonenumber`, `dob`, `address`, `username`, `password`, `confirmpass`) VALUES
(3, 'Rabbi', 'Sajid', 'Male', 'Islam', 'Bangladeshi', 'sajid.rb186@gmail.com', 1521102898, '2022-08-22', 'Uttara, Dhaka, Bangladesh', 'sajid', '', ''),
(4, 'ffff', 'fffff', 'Male', 'Islam', 'Bangladeshi', 'sajid.rb186@gmail.com', 1836492487, '2022-07-31', 'Uttara, Dhaka, Bangladesh', 'ron', '123456789', ''),
(6, 'Md Rabbi', 'Sajid', 'Male', 'Islam', 'Bangladeshi', 'sajid.rb186@gmail.com', 1836492487, '2013-02-05', 'Uttara, Dhaka, Bangladesh', 'sajid', '123456789', '123456789'),
(7, 'Riyan', 'Mahmud', 'Male', 'Islam', 'bangladeshi', 'rm65@gmail.com', 1836492488, '1997-01-01', 'Jamalpur, Bangladesh', 'riyan12', 'Ab#45454545', 'Ab#45454545'),
(8, 'Tamimul', 'Alam', 'Male', 'Islam', 'bangladeshi', 'tlam@xycompany.edu', 1836492489, '1993-02-01', 'Gopalganj,Bangladesh', 'tamim_1', 'Ta@123456789', 'Ta@123456789'),
(9, 'Jacob', 'Boon', 'Male', 'Cristian', 'American', 'dboon@yahoo.edu.org', 2147483647, '1988-03-09', 'Florida, America', 'boon_89', 'David@45', 'David@45'),
(10, 'Sundar', 'Pichai', 'Male', 'Hindu', 'indian', 'pichai@gmail.org', 2147483647, '2000-10-03', 'New Delhi, India', 'sundar_10', 'Sundar#123', 'Sundar#123');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_pass` varchar(255) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `full_name`, `email`, `username`, `phone`, `dob`, `password`, `confirm_pass`, `gender`) VALUES
(1, 'Sajid Alam', 'prottoyr@gmail.com', 'hasibur123', 1781161011, '2022-08-10', 'Ec28041999@', 'Ec28041999@', 'Male'),
(2, 'Hasibur Rahman', 'hasibur@gmail.com', 'akash', 1781161011, '2022-08-02', 'Ec28041999@', 'Ec28041999@', 'Male'),
(3, 'Hasibur Rahman', 'prottoyrahman77@gmail.com', 'hasibur123', 1781161011, '2022-08-16', 'Ec28041999@', 'Ec28041999@', 'Male'),
(4, 'Akbar Ali', 'akbar@gmail.com', 'hasibur123', 1781161011, '2022-08-08', 'Ec28041999@', 'Ec28041999@', 'Male'),
(5, 'Masum Mia', 'masum@gmail.com', 'masum11', 1912568744, '2022-08-23', 'Mm123456789@', 'Mm123456789@', 'Male'),
(6, 'Kamal ', 'kamal@gmail.com', 'kamal', 1781161011, '2022-08-02', 'Ec28041999@', 'Ec28041999@', 'Male'),
(7, 'Fardin', 'fardin@gmail.com', 'fardin69', 1546987544, '2022-08-23', 'Ff28041999@', 'Ff28041999@', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pname` text NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pname`, `price`) VALUES
('[Laptop]', '0'),
('Laptop', '500'),
('Shoe', '60'),
('Shirt', '20');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `age` int(255) NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `phone` int(255) NOT NULL,
  `marriage_status` text NOT NULL,
  `religion` text NOT NULL,
  `previous_job_exp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `Permanent_address` varchar(255) NOT NULL,
  `CV` varchar(255) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `com_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `firstname`, `lastname`, `age`, `gender`, `dob`, `phone`, `marriage_status`, `religion`, `previous_job_exp`, `email`, `present_address`, `Permanent_address`, `CV`, `username`, `password`, `com_password`) VALUES
(8, 'Mohasina', 'Alam', 40, 'female', '2022-08-03', 1711111111, ' married', 'Islam', 'More than 3 years', 'example@gmail.com', 'West Kazipara', 'West Kazipara', '', 'mohasina', '32323232', '32323232'),
(9, 'Tamimul', 'Alam', 22, 'male', '2001-11-03', 1711111111, ' unmarried', 'Islam', '2-3', 'example@gmail.com', 'West Kazipara', 'West Kazipara', '', 'Tamim', '11111111', '11111111'),
(10, 'Prottoy', 'Rahman', 23, 'male', '2022-08-26', 1711111111, ' married', 'Islam', '2-3', 'example@gmail.com', 'West Kazipara', 'West Kazipara', '', 'Prottoy', '15151515', '15151515'),
(11, 'Md Rabbi', 'Islam', 32, 'male', '2022-08-18', 1711111111, ' married', 'Islam', 'More than 3 years', 'example@gmail.com', 'West Kazipara', 'West Kazipara', '', 'Sajid', '96969696', '96969696'),
(13, 'Romona', 'Sarker', 21, 'female', '2022-08-09', 1711111111, ' unmarried', 'Cristian', '2-3', 'example@gmail.com', 'West Kazipara', 'West Kazipara', '', 'Angela', '69696969', '69696969'),
(14, 'Rayied', 'Hossain', 58, 'male', '2022-08-03', 1711111111, ' married', 'Islam', '2-3', 'example@gmail.com', 'West Kazipara', 'West Kazipara', '', 'Rayied', '987654321', '987654321'),
(17, 'Maliha', 'Alam', 19, 'male', '2022-08-17', 1711111111, ' unmarried', 'Islam', '2-3', 'maliha@gmail.com', 'West Kazipara', 'West Kazipara', '', 'maliha', '65656565', '65656565'),
(18, 'Jubair', 'Amin', 26, 'male', '2022-08-10', 1730486446, ' married', 'Islam', 'More than 3 years', 'jubair@gmail.com', 'West Kazipara', 'West Kazipara', '', 'jubair', '87878787', '87878787'),
(19, 'Mahjabin', 'Mim', 23, 'female', '2022-08-20', 1789654123, ' married', 'Islam', '1-2', 'mim@gmail.com', 'West Kazipara', 'West Kazipara', '', 'Mim', '39393939', '39393939'),
(20, 'Tasmia', 'Rahman', 25, 'female', '2022-08-17', 1711111111, ' married', 'Islam', '2-3', 'tasmia@gmail.com', 'West Kazipara', 'West Kazipara', '', 'tasmia', '20202020', '20202020'),
(21, 'Shuvo', 'Mondol', 46, 'male', '2022-08-03', 1711111111, ' married', 'Hindu', '2-3', 'shuvo@gmail.com', 'West Kazipara', 'West Kazipara', '', 'shuvo', '30303030', '30303030'),
(23, 'HASIBUR ', 'RAHMAN', 18, 'male', '2022-08-28', 1781161011, ' unmarried', 'Islam', 'More than 3 years', 'prottoyrahman@outlook.com', 'sfbhee', 'heeten', '', 'prottoy', '147258369', '147258369');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
