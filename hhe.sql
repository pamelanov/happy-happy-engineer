-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2015 at 01:57 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hhe`
--
CREATE DATABASE IF NOT EXISTS `hhe` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hhe`;

-- --------------------------------------------------------

--
-- Table structure for table `Administrator`
--

CREATE TABLE IF NOT EXISTS `Administrator` (
  `ID_User` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Administrator`
--

INSERT INTO `Administrator` (`ID_User`, `Password`) VALUES
('admin', '21232f297a');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE IF NOT EXISTS `News` (
  `ID_News` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `Isi` varchar(500) NOT NULL,
  PRIMARY KEY (`ID_News`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Produk`
--

CREATE TABLE IF NOT EXISTS `Produk` (
  `ID_Produk` varchar(6) NOT NULL,
  `Jenis_Produk` varchar(50) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Deskripsi_Produk` varchar(500) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Upload_Path` varchar(300) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  PRIMARY KEY (`ID_Produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Produk`
--

INSERT INTO `Produk` (`ID_Produk`, `Jenis_Produk`, `Harga`, `Deskripsi_Produk`, `Size`, `Upload_Path`, `Gender`) VALUES
('A22E', 'Summer Denim Pants', 300000, 'A comfortable pants designed to fit into your daily lifestyle. Made with the best local fabric, Summer Denim Pants is the pants you''re looking for.', '30, 31, 32, 33, 34, 35, 36', 'H2E_420.jpg', 'M'),
('B78K', 'Wonderland Denim', 450000, 'This tutorial will demonstrate how to make “Pagination in CodeIgniter”. In this post we used CodeIgniter pagination class by initializing pagination library.', '28', 'H2E_790.jpg', 'F'),
('C84J', 'Girly Jeans', 300000, 'Routing rules are defined in your application/config/routes.php file. In it you''ll see an array called $route that permits you to specify your own routing criteria. Routes can either be specified using wildcards or Regular Expressions', '29', 'H2E_5458.jpg', 'A'),
('C903', 'Boyish Shirt', 250000, 'This tutorial will demonstrate how to make “Pagination in CodeIgniter”. In this post we used CodeIgniter pagination class by initializing pagination library.', 'L', 'H2E_5668.jpg', 'M'),
('K90C', 'Summer T-Shirt', 200000, 'Routing rules are defined in your application/config/routes.php file. In it you''ll see an array called $route that permits you to specify your own routing criteria. Routes can either be specified using wildcards or Regular Expressions', 'S', 'H2E_6146.jpg', 'F'),
('O90D', 'Alice Dress', 350000, 'base_url This is the full URL to the controller class/function containing your pagination. In the example above, it is pointing to a controller called "Test" and a function called "page". Keep in mind that you can re-route your URI if you need a different structure.', 'S', 'H2E_2170.jpg', 'F'),
('W23J', 'Sunnies Dress', 450000, 'Routing rules are defined in your application/config/routes.php file. In it you''ll see an array called $route that permits you to specify your own routing criteria. Routes can either be specified using wildcards or Regular Expressions', 'M', 'H2E_3096.jpg', 'F');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
