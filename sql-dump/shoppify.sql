-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2013 at 02:38 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppify`
--
CREATE DATABASE IF NOT EXISTS `shoppify` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shoppify`;

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE IF NOT EXISTS `auction` (
  `auction_id` varchar(11) NOT NULL,
  `bid_name` varchar(11) NOT NULL,
  `bid_email` varchar(11) NOT NULL,
  `bid_price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favourite_sellers`
--

CREATE TABLE IF NOT EXISTS `favourite_sellers` (
  `buyer_email` varchar(11) NOT NULL,
  `seller_email` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `sender_email` varchar(11) NOT NULL,
  `sender_name` varchar(11) NOT NULL,
  `receiver_email` varchar(11) NOT NULL,
  `receiver_name` varchar(11) NOT NULL,
  `message` varchar(11) NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `email` varchar(11) NOT NULL,
  `notification` varchar(11) NOT NULL,
  `read_unread` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE IF NOT EXISTS `productinfo` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(11) NOT NULL,
  `product_image` varchar(11) NOT NULL,
  `category_name` varchar(12) NOT NULL,
  `seller_full_name` varchar(11) DEFAULT NULL,
  `seller_image` varchar(11) NOT NULL,
  `seller_email` varchar(11) NOT NULL,
  `seller_cell_no` varchar(11) NOT NULL,
  `seller_reputation` varchar(11) NOT NULL,
  `product_longitude` varchar(11) NOT NULL,
  `product_latitude` varchar(11) NOT NULL,
  `fixed_or_auction` int(11) NOT NULL,
  `bidding_start_time` timestamp NULL DEFAULT NULL,
  `bidding_end_time` timestamp NULL DEFAULT NULL,
  `bidding_end` int(11) DEFAULT NULL,
  `minimum_bidding_price` varchar(11) DEFAULT NULL,
  `auction_id` varchar(11) DEFAULT NULL,
  `fixed_price` varchar(11) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `up` int(11) NOT NULL,
  `downs` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`product_id`, `product_name`, `product_image`, `category_name`, `seller_full_name`, `seller_image`, `seller_email`, `seller_cell_no`, `seller_reputation`, `product_longitude`, `product_latitude`, `fixed_or_auction`, `bidding_start_time`, `bidding_end_time`, `bidding_end`, `minimum_bidding_price`, `auction_id`, `fixed_price`, `post_time`, `up`, `downs`, `sold`) VALUES
(1, 'A', '1.JPG', 'B', 'C', 'D', 'E', 'F', '5', 'G', 'H', 1, '2013-08-14 01:59:21', '2013-08-24 02:42:11', 1, '12', '123', '1', '2013-07-31 18:00:00', 12, 1, 0),
(2, 'X', '2.JPG', 'Z', 'M', 'N', 'o', 'p', 'q', 'r', 's', 1, '2013-08-23 18:00:00', '2013-08-20 18:00:00', 1, '12', '123', '123', '2013-07-10 18:00:00', 3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE IF NOT EXISTS `product_comments` (
  `product_id` int(11) NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` varchar(11) NOT NULL,
  `full_name` varchar(11) NOT NULL,
  `comment` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `email` varchar(11) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `avatar` varchar(11) NOT NULL,
  `reputation` int(11) NOT NULL,
  `cell_no` varchar(11) NOT NULL,
  `gcm_regid` varchar(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `email` varchar(11) NOT NULL,
  `product_category` varchar(11) DEFAULT NULL,
  `product_name` varchar(11) DEFAULT NULL,
  `product_longitude` varchar(11) DEFAULT NULL,
  `product_lattitude` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
