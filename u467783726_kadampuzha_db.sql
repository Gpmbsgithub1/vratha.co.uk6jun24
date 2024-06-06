-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2024 at 10:14 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u467783726_kadampuzha`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_online_donation_payment`
--

CREATE TABLE `tbl_online_donation_payment` (
  `id` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `donation_amt` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pay_id` varchar(255) NOT NULL,
  `pay_status` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_online_donation_payment`
--

INSERT INTO `tbl_online_donation_payment` (`id`, `dname`, `donation_amt`, `email`, `mobile_no`, `address1`, `address2`, `pincode`, `city`, `state`, `pay_id`, `pay_status`, `date_added`) VALUES
(12, 'Sonali Gavande', 10, 'sonaligavande1994@gmail.com', '9373090048', 'Post-Rajapur', 'Test address', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NVaXfA5C6Y3bYE', 'Success', '2024-02-01 10:50:33'),
(13, 'Sonali Gavande', 10, 'sonaligavande1994@gmail.com', '9373090048', 'Post-Rajapur', 'Test address', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NVaXfA5C6Y3bYE', 'Success', '2024-02-01 10:50:33'),
(14, 'Pravin', 20, 'Pravinsonawane15@gmail.com', '9373090048', 'Tested', 'Tested', 422605, 'Pune', 'Maharashtra ', 'pay_NVcIszKBriB8NC', 'Success', '2024-02-01 12:33:57'),
(15, 'Pravin', 20, 'Pravinsonawane15@gmail.com', '9373090048', 'Tested', 'Tested', 422605, 'Pune', 'Maharashtra ', 'pay_NVcIszKBriB8NC', 'Success', '2024-02-01 12:33:57'),
(16, 'sonaliiiiiii', 200, 'sonaligavande1994@gmail.com', '8482813781', 'Post-Rajapur', 'tested', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NVyVKIP02loSVD', 'Success', '2024-02-02 10:16:59'),
(17, 'sonaliiiiiii', 200, 'sonaligavande1994@gmail.com', '8482813781', 'Post-Rajapur', 'tested', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NVyVKIP02loSVD', 'Success', '2024-02-02 10:16:59'),
(18, 'sonaliiiiiii', 200, 'sonaligavande1994@gmail.com', '8482813781', 'Post-Rajapur', 'Tested', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NVyXv7HaCWCeZK', 'Success', '2024-02-02 10:19:26'),
(19, 'sonaliiiiiii', 200, 'sonaligavande1994@gmail.com', '8482813781', 'Post-Rajapur', 'Tested', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NVyXv7HaCWCeZK', 'Success', '2024-02-02 10:19:26'),
(20, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '8482813781', 'Post-Rajapur', 'pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NX93xOZVasS1oe', 'Success', '2024-02-05 09:16:13'),
(21, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '8482813781', 'Post-Rajapur', 'pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NX93xOZVasS1oe', 'Success', '2024-02-05 09:16:13'),
(22, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '9373090048', 'Pune', 'Pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NX98CXIu0dMBmK', 'Success', '2024-02-05 09:20:01'),
(23, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '9373090048', 'Pune', 'Pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NX98CXIu0dMBmK', 'Success', '2024-02-05 09:20:01'),
(24, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '9373090048', 'Pune', 'Pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NXBLLg9QcUUsRc', 'Success', '2024-02-05 11:29:59'),
(25, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '9373090048', 'Pune', 'Pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NXBLLg9QcUUsRc', 'Success', '2024-02-05 11:29:59'),
(26, 'Pravin', 1, 'Pravinsonawane15@gmail.com', '8482813781', 'Pune', 'Pune', 411033, 'Pune', 'Maharashtra ', 'pay_NXBTVPivEqDg9w', 'Success', '2024-02-05 11:38:15'),
(27, 'Pravin', 1, 'Pravinsonawane15@gmail.com', '8482813781', 'Pune', 'Pune', 411033, 'Pune', 'Maharashtra ', 'pay_NXBTVPivEqDg9w', 'Success', '2024-02-05 11:38:15'),
(28, 'Viji', 1, 'viji21796@gmail.com', '08754053543', 'No 23, Nateshan Chettiyar Street', 'Chekkaalai, 2nd street', 630003, 'Sivaganga', 'Tamil Nadu', 'pay_NXByYqiAn8vvGR', 'Success', '2024-02-05 12:07:00'),
(29, 'Viji', 1, 'viji21796@gmail.com', '08754053543', 'No 23, Nateshan Chettiyar Street', 'Chekkaalai, 2nd street', 630003, 'Sivaganga', 'Tamil Nadu', 'pay_NXByYqiAn8vvGR', 'Success', '2024-02-05 12:07:00'),
(30, 'Viji', 1, 'viji21796@gmail.com', '08754053543', 'No 23, Nateshan Chettiyar Street', 'Chekkaalai, 2nd street', 630003, 'Sivaganga', 'Tamil Nadu', 'pay_NXC1SumXsP1r83', 'Success', '2024-02-05 12:10:22'),
(31, 'Viji', 1, 'viji21796@gmail.com', '08754053543', 'No 23, Nateshan Chettiyar Street', 'Chekkaalai, 2nd street', 630003, 'Sivaganga', 'Tamil Nadu', 'pay_NXC1SumXsP1r83', 'Success', '2024-02-05 12:10:22'),
(32, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '9373090048', 'Pune', 'Pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NXDotJVGg36rkl', 'Success', '2024-02-05 13:55:07'),
(33, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '9373090048', 'Pune', 'Pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NXDotJVGg36rkl', 'Success', '2024-02-05 13:55:07'),
(34, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '9373090048', 'Pune', 'Pune', 411033, 'Pune', 'Maharashtra', 'pay_NZuxlcxT4MpGHq', 'Success', '2024-02-12 09:25:23'),
(35, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '9373090048', 'Post-Rajapur', 'pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_NlQDbyyfCIpu8F', 'Success', '2024-03-12 11:08:39'),
(36, 'Sonali Gavande', 1, 'sonaligavande1994@gmail.com', '9373090048', 'Pune', 'Pune', 422605, 'Ahmadnagar', 'Maharashtra', 'pay_ODSndNpfolLP2U', 'Success', '2024-05-22 07:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_online_pooja_booking`
--

CREATE TABLE `tbl_online_pooja_booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `pooja_name` varchar(255) NOT NULL,
  `pooja_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_online_pooja_booking`
--

INSERT INTO `tbl_online_pooja_booking` (`id`, `name`, `email`, `mobile_no`, `pooja_name`, `pooja_date`) VALUES
(20, 'Sonali', 'pravinsonawane15@gmail.com', '8482813781', 'One Day\'s Pooja', '2024-02-02'),
(21, 'Pravin Sonawane', 'sonaligavande1994@gmail.com', '9373090048', 'Poomoodal', '2024-02-02'),
(23, 'Test', 'sonaligavande1994@gmail.com', '8482813781', 'One Day\'s Pooja', '2024-01-25'),
(24, 'Sonali', 'sonaligavande1994@gmail.com', '8482813781', 'Muttarukkal', '2024-02-02'),
(25, 'Sonali', 'sonaligavande1994@gmail.com', '8482813781', 'Muttarukkal', '2024-02-02'),
(26, 'Test', 'sonaligavande1994@gmail.com', '8482813781', 'Niramala', '2024-01-24'),
(27, 'Sonali', 'sonaligavande1994@gmail.com', '8482813781', 'Muttarukkal', '2024-01-23'),
(28, 'Sonali', 'sonaligavande1994@gmail.com', '8482813781', 'Muttarukkal', '2024-01-23'),
(29, 'Tested', 'sonaligavande1994@gmail.com', '8482813781', 'One Day\'s Pooja', '2024-01-23'),
(30, 'Tested', 'sonaligavande1994@gmail.com', '8482813781', 'One Day\'s Pooja', '2024-01-23'),
(31, 'Tested', 'sonaligavande1994@gmail.com', '8482813781', 'One Day\'s Pooja', '2024-02-02'),
(32, 'Tested', 'sonaligavande1994@gmail.com', '8482813781', 'One Day\'s Pooja', '2024-02-02'),
(33, 'Tested', 'sonaligavande1994@gmail.com', '8482813781', 'One Day\'s Pooja', '2024-02-02'),
(34, '', '', '', 'Select', '2024-02-03'),
(35, 'Sonali', 'sonaligavande1994@gmail.com', '8482813781', 'Muttarukkal', '2024-02-03'),
(36, 'Sonali', 'sonaligavande1994@gmail.com', '8482813781', 'One Day\'s Pooja', '2024-02-04'),
(37, 'Tested', 'sonaligavande1994@gmail.com', '8482813781', 'Poomoodal', '2024-03-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_online_donation_payment`
--
ALTER TABLE `tbl_online_donation_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_online_pooja_booking`
--
ALTER TABLE `tbl_online_pooja_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_online_donation_payment`
--
ALTER TABLE `tbl_online_donation_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_online_pooja_booking`
--
ALTER TABLE `tbl_online_pooja_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
