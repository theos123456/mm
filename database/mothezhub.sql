-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2019 at 01:44 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mothezhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `blog_picture` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

DROP TABLE IF EXISTS `blog_comment`;
CREATE TABLE IF NOT EXISTS `blog_comment` (
  `blog_comm_id` int(9) NOT NULL AUTO_INCREMENT,
  `blog_id` int(9) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  PRIMARY KEY (`blog_comm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cathe_id` int(9) NOT NULL AUTO_INCREMENT,
  `cathe_name` varchar(255) NOT NULL,
  PRIMARY KEY (`cathe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cathe_id`, `cathe_name`) VALUES
(1, 'party notebook'),
(2, 'Baby food'),
(3, 'Baby food'),
(4, 'Baby food'),
(5, 'Baby food'),
(6, 'essential goods of motherhood'),
(7, 'essential goods of motherhood'),
(8, 'party theme'),
(9, 'party theme'),
(10, 'party theme'),
(11, 'party theme'),
(12, 'party theme'),
(13, 'party theme'),
(14, 'party theme'),
(15, 'party theme'),
(16, 'party theme'),
(17, 'party notebook'),
(18, 'party notebook'),
(19, 'Baby food'),
(20, 'Baby food'),
(21, 'Baby food');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `messages_id` int(9) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`messages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_id` int(9) NOT NULL AUTO_INCREMENT,
  `product_id` int(9) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `client_email` varchar(100) NOT NULL,
  `client_phone` varchar(100) NOT NULL,
  `client_names` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `size`, `status`, `client_email`, `client_phone`, `client_names`, `total`, `order_date`) VALUES
(1, 19, '2', NULL, 'completed', 'order@gmail.com', '0729003160', 'six order', '890', '2019-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(9) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_reduction` varchar(255) NOT NULL DEFAULT '0',
  `product_description` varchar(255) NOT NULL,
  `product_picture` varchar(255) NOT NULL,
  `sub_cath_id` int(9) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_reduction`, `product_description`, `product_picture`, `sub_cath_id`) VALUES
(2, 'lgllglg', '666', '606', '', '', 0),
(17, 'ubugali', '393939', '0303', '   mcmcmcm', 'uploads/download (5) (3).jpg', 15),
(18, 'kali', '44444', '774774', 'hfhhfhfhf', 'uploads/house13.jpg', 15),
(19, 'kali', '445', '37373', 'hdddhhd', 'uploads/beer.jpg', 1),
(20, 'imineke', '70', '1', 'idddididi', 'uploads/house7.jpg', 18),
(21, 'imineke', '70', '1', 'idddididi', 'uploads/house7 (1).jpg', 18),
(22, 'imineke', '70', '1', 'idddididi', 'uploads/house7 (3).jpg', 18),
(23, 'imineke', '70', '1', 'idddididi', 'uploads/house7 (4).jpg', 18),
(24, 'amavuta', '2000', '3', 'hfhhfhfhf', 'uploads/beer (1).jpg', 18),
(25, 'amavuta', '2000', '3', 'hfhhfhfhf', 'uploads/beer (2).jpg', 18),
(26, 'amata', '333', '2', ' nncn nn n', 'uploads/beer (3).jpg', 18),
(27, 'homemade', '200', '', 'test is my first test', 'uploads/user2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_cath_id` int(9) NOT NULL AUTO_INCREMENT,
  `cathe_id` int(9) NOT NULL,
  `sub_cathe_name` varchar(255) NOT NULL,
  PRIMARY KEY (`sub_cath_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cath_id`, `cathe_id`, `sub_cathe_name`) VALUES
(1, 2, 'cereals'),
(2, 2, 'cereals'),
(3, 2, 'cereals'),
(4, 6, 'essential goods of motherhood'),
(5, 6, 'essential goods of motherhood'),
(6, 8, 'party theme'),
(7, 8, 'party theme'),
(8, 8, 'party theme'),
(9, 8, 'party theme'),
(10, 8, 'party theme'),
(11, 8, 'party theme'),
(12, 8, 'party theme'),
(13, 8, 'party theme'),
(14, 8, 'party theme'),
(15, 1, 'party notebook'),
(16, 1, 'party notebook'),
(17, 2, 'cereals'),
(18, 2, 'juice'),
(19, 2, 'juice'),
(20, 2, 'juice'),
(21, 2, 'juice'),
(22, 2, 'juice');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
