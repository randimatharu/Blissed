-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2019 at 04:37 PM
-- Server version: 5.7.19
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
-- Database: `blissed`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `fbID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_contact` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`fbID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `msgID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `viewStatus` varchar(11) NOT NULL,
  `proID` int(11) NOT NULL,
  PRIMARY KEY (`msgID`),
  UNIQUE KEY `message_2` (`message`,`proID`)
) ENGINE=InnoDB AUTO_INCREMENT=336 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`msgID`, `user`, `message`, `viewStatus`, `proID`) VALUES
(19, 'Try', 'CongratulationsTryYou won the Chair and seller is Valid Contact him by email valid@gmail.com contact 00123456789 Address qweThank You.', 'No', 12),
(22, 'Valid', 'Sorry Valid Your product JBL remain UNSOLD!', 'Yes', 11),
(176, 'OneMonth', 'OneMonth Someone Bid higher than your Bid price on product Huawei! , You Can Bid Again This Product ', 'No', 28),
(177, 'Valid', 'Valid Someone Bid higher than your Bid price on product Huawei! , You Can Bid Again This Product ', 'Yes', 28),
(178, 'OneMonth', 'OneMonth Someone Bid higher than your Bid price165800 on product Huawei! , You Can Bid Again This Product ', 'No', 28),
(179, 'Valid', 'Sorry Valid Your product Harry Potter remain UNSOLD!', 'Yes', 29),
(236, 'ThreeMonths ', 'ThreeMonths  Someone Bid higher than your Bid price400100 on product msi! , You Can Bid Again This Product ', 'No', 26),
(241, 'Null', 'Null Someone Bid higher than your Bid price3000 on product JBL! , You Can Bid Again This Product ', 'No', 27),
(244, 'Valid', 'Valid Someone Bid higher than your Bid price3300 on product JBL! , You Can Bid Again This Product ', 'Yes', 27),
(246, 'Valid', 'Valid Someone Bid higher than your Bid price166500 on product Huawei! , You Can Bid Again This Product ', 'No', 28),
(248, 'OneMonth', 'OneMonth Someone Bid higher than your Bid price402100 on product msi! , You Can Bid Again This Product ', 'No', 26),
(250, 'ThreeMonths', 'ThreeMonths Someone Bid higher than your Bid price166700 on product Huawei! , You Can Bid Again This Product ', 'No', 28),
(268, 'Valid', 'CongratulationsValidYour productLeather Chair is SOLD! and buyer is ThreeMonths Contact him by email 3months@gmail.com contact 33333333333333 Address colomboThank You.', 'No', 31),
(269, 'ThreeMonths', 'CongratulationsThreeMonthsYou won the Leather Chair and seller is Valid Contact him by email valid@gmail.com contact 00123456789 Address qweThank You.', 'No', 31),
(286, 'ThreeMonths', 'ThreeMonths Someone Bid higher than your Bid price402200 on product msi! , You Can Bid Again This Product ', 'No', 26),
(335, 'Null', 'Null Someone Bid higher than your Bid price12000 on product Leather Chair! , You Can Bid Again This Product ', 'No', 38);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) NOT NULL,
  `model` varchar(32) NOT NULL,
  `category` varchar(32) NOT NULL,
  `user` varchar(32) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `productStatus` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `buyer` varchar(32) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`productID`),
  KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `model`, `category`, `user`, `price`, `description`, `productStatus`, `quantity`, `startDate`, `endDate`, `buyer`, `image`) VALUES
(37, 'JBL', 'Bluetooth Headset', 'accessories', 'OneMonth', 3000, 'Brand New', 'No', 1, '2019-01-05 00:00:00', '2019-01-06 00:00:00', 'Null', 'jbl.jpg'),
(38, 'Leather Chair', 'Executive Chair', 'furniture', 'ThreeMonths', 12100, 'Used 3 Months', 'No', 1, '2019-01-05 00:00:00', '2019-01-08 00:00:00', 'OneMonth', 'exchair.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rtmcard`
--

DROP TABLE IF EXISTS `rtmcard`;
CREATE TABLE IF NOT EXISTS `rtmcard` (
  `card_id` int(11) NOT NULL AUTO_INCREMENT,
  `subtype` varchar(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`card_id`),
  KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rtmcard`
--

INSERT INTO `rtmcard` (`card_id`, `subtype`, `user_name`, `status`) VALUES
(1, '1 Month', 'OneMonth', 'Available'),
(2, '3 Months', 'ThreeMonths', 'Used'),
(3, '3 Months', 'ThreeMonths', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subtype` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `contact`, `address`, `subtype`, `status`) VALUES
(2, 'Akila Indula', 'akgmg194@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0987654321', 'kandy', '1 Month', ''),
(3, 'User 1', 'jclarke083@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0987654321', 'kandy', '1 Year', ''),
(4, 'ucsc', 'qwetr@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', '0813456789', 'kandy', '1 Month', ''),
(6, 'AIU', 'qwerytt@gmail.com', '6fb42da0e32e07b61c9f0251fe627a9c', '4846513546', 'colombo', 'Free', ''),
(7, 'aaa', 'aaa@aaa.com', '224f6d5086b0e5cb996109d0d74c83b3', '1111111111', 'kandy', 'Free', ''),
(8, 'Akila', 'ssss@aa.com', 'e219b56989281a7846dd836161d7a2bd', '1112232323', 'kandy', 'Free', ''),
(9, 'abcd', 'ucsc@gmail.com', '27a11f07aeb6073048cd915d0024b7e7', '0000000008', 'colombo', '1 Year', ''),
(10, 'User2', 'user@gmail.com', '21615aa3d59c2841d803b8997061b8a8', '222222222', 'kandy', 'Free', ''),
(11, 'Super User', 'superuser@gmail.com', '9a85a0cc0a56febcf46690a6ab1a5803', '011111111988', 'colombo', 'Free', ''),
(12, 'Hello', 'hello@gmail.com', '9a1996efc97181f0aee18321aa3b3b12', '0111111119434', 'colombo', 'Free', ''),
(14, 'New1', 'new@gmail.com', '359400ca83e25de99ddbe008ed4b0273', '00001111111', 'Galle', 'Free', ''),
(16, 'Valid', 'valid@gmail.com', 'bb2f6ade1b144d3b66956081f1e62cd1', '00123456789', 'Kaduwela', 'Free', ''),
(17, 'Try', 'try@gmail.com', 'c100b0bd7ee8f6aa99c5225c7365ca9c', '1234566778', 'sfsdf', 'Free', ''),
(18, 'Try2', 'try2@gmail.com', 'c100b0bd7ee8f6aa99c5225c7365ca9c', '1234567890', '12121', 'Free', ''),
(22, 'try6', 'try6@gmail.com', '25d55ad283aa400af464c76d713c07ad', '23134352352', 'daw', 'Free', ''),
(23, 'Admin 2', 'admin2@gmail.com', 'c93ccd78b2076528346216b3b2f701e6', '112233445566', 'Colombo', 'Admin', ''),
(24, 'ocean', 'ocean@gamil.com', '907953d01e6ddd989a22bebe1e2e5378', '23124124', 'sda', 'Free', ''),
(25, 'Ocean', 'ocean@gmail.com', '907953d01e6ddd989a22bebe1e2e5378', '3213123', 'sdsa', 'Free', ''),
(26, 'Ocean', 'ocean@gmail.com', '907953d01e6ddd989a22bebe1e2e5378', '3213123', 'sdsa', 'Free', ''),
(27, 'Oce', 'oce@gmailcom', 'e20d61d96adab60a37753111b25b186c', '12432546', 'ded', 'Free', ''),
(28, 'PUser', 'puser@gmail.com', '999347e8443916f2ba71adeda7341057', '111111111111', 'Kandy', '1 Month', ''),
(29, 'OneMonth', 'onemonth@gmail.com', 'e88d452248f7d3bf42b6c46ba7cc9f41', '111111111111', 'kandy', '1 Month', ''),
(30, 'ThreeMonths', '3months@gmail.com', '4ca8230d340d8a85f6e9dc6d7bf454ac', '33333333333333', 'colombo', '3 Months', ''),
(31, 'Test User', 'tu@gmail.com', 'c69d45824e9ab4659b2af331570c7e60', '11111111111', 'Colombo', 'Free', 'Suspended'),
(33, 'Admin 3', 'admin3@gmail.com', '97873dac259ebf5822e800370d0f1482', '0712402421', 'Kandy', 'Admin', 'Active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `rtmcard`
--
ALTER TABLE `rtmcard`
  ADD CONSTRAINT `rtm_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`username`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
