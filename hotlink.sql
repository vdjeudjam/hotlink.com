-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2013 at 07:50 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_table`
--

CREATE TABLE IF NOT EXISTS `products_table` (
  `product_id` int(1) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(20) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(40) NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_name` (`product_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products_table`
--

INSERT INTO `products_table` (`product_id`, `product_name`, `product_description`, `product_image`) VALUES
(1, 'Machines', 'We sell brand new laptops and PC of all marks such as Toshiba, HP, Acer, Lenovo, E-machines, DELL, IBM. Our most recent stock of machines are:\r\n\r\nPC: DELL', 'images/img4.png'),
(2, 'USB flashes', 'Everybody can get his here, we have USB flashes of all types at very cheap and affordable prices: Hp, Transcend, imation etc with sizes varying from 1 GB up to 32GB. \r\nIsn''t that wonderful !!', 'images/flashes.jpg'),
(3, 'Internet keys', 'CAMTEL and other internet keys at low and affordable prices at very good prices.', 'images/no-photo.jpg'),
(4, 'others', 'We work, you enjoy. \r\nOur brand new team of IT is now at your service with amongst many computer maintenance services. \r\nWe do offer also non technological products such as: rackets, tennis balls, shoes, servises, sport wears etc ', 'images/tablet.jpg'),
(5, 'Promotions', 'new in town', 'images/img1.jpg'),
(6, 'Events', 'na waoh wonna don born again', 'C:/wamp/www/images/slide3.JPEG');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE IF NOT EXISTS `users_info` (
  `user_name` varchar(20) NOT NULL,
  `user_id` varchar(50) NOT NULL COMMENT 'contents an sha1 encrypted âssword',
  `mobile` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `confirm` tinyint(1) NOT NULL,
  `user_time` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`user_name`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_name`, `user_id`, `mobile`, `email`, `confirm`, `user_time`) VALUES
('papa', '5ee61127121530dd8abec3acbffd662fb2a4b8ba', 78423453, 'leslie@yahoo.ca', 1, '00:00:00'),
('vere', 'c22b5f9178342609428d6f51b2c5af4c0bde6a42', 76453333, 'carole@gmail.com', 1, '00:00:00'),
('sal', 'caf8dae1703b84f46a5639d992478bc04d5ab00c', 78423453, 'carole@gmail.com', 1, '00:00:00'),
('linda', '32b3491336522e073489725b5daf298cd749007a', 78423453, 'verylverane@gmail..com', 1, '00:00:00'),
('verane', '8d5004c9c74259ab775f63f7131da077814a7636', 78423453, 'verane@aes.org', 1, '00:00:00'),
('casserom', '8d6317f534697ab41b9634eed2465dd13c973a35', 76443232, 'd.polas@yahoo.fr', 1, '00:00:00'),
('veryl', '1ccbb8483083c4ce1d5d7c0618f23a88801e9853', 76413370, 'vdjeudjam@rocketmail.com', 1, '00:00:00'),
('vdjeudjam', 'e06e31ceeaa79ec954a7a3d82174ce507f2cb69b', 76443232, 'verylverane@gmail..com', 1, '00:00:00'),
('vdjeudjam', '8d5004c9c74259ab775f63f7131da077814a7636', 76443232, 'verylverane@gmail..com', 1, '00:00:00');
