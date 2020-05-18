-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 05:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin1', 'Test@12345', '22-09-2018 11:42:05 AM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` varchar(255) NOT NULL,
  `appointmentTime` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(1, 'X-Ray', 3, 10, 100, '2018-10-29', '2:30 AM', '2018-10-28 18:23:29', 1, 1, ''),
(2, 'X-Ray', 3, 6, 100, '2018-10-31', '11:45 AM', '2018-10-29 03:45:49', 1, 1, ''),
(3, 'General', 1, 6, 0, '2018-10-31', '12:45 PM', '2018-10-29 04:35:45', 1, 1, ''),
(4, 'General', 1, 11, 0, '2018-10-30', '1:15 PM', '2018-10-29 07:16:02', 1, 1, ''),
(5, 'General', 1, 12, 0, '2019-02-13', '8:30 PM', '2019-02-13 12:16:25', 1, 1, ''),
(6, 'Laboratory', 2, 12, 0, '2019-02-27', '8:30 PM', '2019-02-13 12:30:29', 1, 1, ''),
(7, 'Laboratory', 2, 2, 0, '2019-04-29', '10:45 PM', '2019-04-17 14:47:20', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `contactno` bigint(11) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'General', 'Dr Amirul Thaqif', 'Bangsar', 'RM60', 172325858, 'ariff.farhan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-28 11:47:43', ''),
(2, 'Laboratory', 'Dr Amirul Thaqif', 'Bangsar', 'RM80', 172325858, 'mirulthaqif@gmail.com', 'a906449d5769fa7361d7ecc6aa3f6d28', '2018-10-28 12:18:12', ''),
(3, 'X-Ray', 'Dr Amirul Thaqif', 'Bangsar', '100', 172325858, 'rashide@gmail.com', '123456', '2018-10-28 12:28:20', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 0, 'admin1', 0x3a3a3100000000000000000000000000, '2018-10-05 15:53:43', '', 0),
(2, 0, 'admin1', 0x3a3a3100000000000000000000000000, '2018-10-05 15:54:38', '', 0),
(3, 1, 'ariff.farhan@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 11:48:05', '28-10-2018 05:20:47 PM', 1),
(4, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 12:19:16', '28-10-2018 05:49:33 PM', 1),
(5, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 12:20:28', '', 1),
(6, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 12:22:21', '28-10-2018 05:52:27 PM', 1),
(7, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-29 04:42:19', '29-10-2018 10:13:26 AM', 1),
(8, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-29 07:27:52', '29-10-2018 01:05:25 PM', 1),
(9, 0, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-02 19:09:16', '', 0),
(10, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-02 19:09:29', '03-11-2018 12:45:52 AM', 1),
(11, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-03 13:16:22', '', 1),
(12, 0, 'rashide@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-12 12:30:50', '', 0),
(13, 0, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-12 12:31:12', '', 0),
(14, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-12 12:31:24', '12-02-2019 06:03:04 PM', 1),
(15, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-12 13:53:02', '', 1),
(16, 0, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-13 12:07:02', '', 0),
(17, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-13 12:07:13', '13-02-2019 05:45:36 PM', 1),
(18, 0, 'rashide@hotmail.com', 0x3a3a3100000000000000000000000000, '2019-02-13 12:14:23', '', 0),
(19, 0, 'rashide@hotmail.com', 0x3a3a3100000000000000000000000000, '2019-02-13 12:14:40', '', 0),
(20, 0, 'rashide@hotmail.com', 0x3a3a3100000000000000000000000000, '2019-02-13 12:17:45', '', 0),
(21, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-13 12:17:54', '', 1),
(22, 1, 'ariff.farhan@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-11 15:28:27', '11-04-2019 09:02:41 PM', 1),
(23, 1, 'ariff.farhan@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-11 16:15:12', '11-04-2019 09:50:16 PM', 1),
(24, 0, 'admin1', 0x3a3a3100000000000000000000000000, '2019-04-11 16:20:28', '', 0),
(25, 0, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-15 16:18:12', '', 0),
(26, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-15 16:18:27', '', 1),
(27, 0, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-16 14:45:30', '', 0),
(28, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-16 14:45:37', '', 1),
(29, 0, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-17 07:48:04', '', 0),
(30, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-17 07:48:10', '', 1),
(31, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-17 14:32:25', '', 1),
(32, 0, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-23 15:45:16', '', 0),
(33, 2, 'mirulthaqif@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-23 15:45:27', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'General', '2018-09-28 06:37:25', '28-10-2018 02:47:43 PM'),
(3, 'Laboratory', '2018-10-28 12:11:55', ''),
(4, 'X-Ray', '2018-10-28 12:15:54', '');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `masa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`product_id`, `product_name`, `gen_name`, `description`, `price`, `qty`, `masa`) VALUES
('-', '-', '-', '-', '-', '', '2019-04-23'),
('1200', 'o', 'oo', 'o', 'o', '5', ''),
('12001', 'Milidon', 'Aspirin', 'Fever Adult', '8', '200', ''),
('12212', 'dadas', 'asddad', 'asddasd', '12', '2', '2019-04-23'),
('12312', 'asd', 'asdds', 'asdads', '12', '2019-04-17', ''),
('12601', 'Actifed', 'Pseudoephedrine', 'Cough Syrup for Children', '8', '300', ''),
('14201', 'Kaopectate', 'Bismuth subsalicylate', 'Nausea and Vomitting', '8', '45', ''),
('15212', 'Tylenol', 'Acetaminophen', 'Cold + Head', '9', '85', ''),
('15512', 'ddd', 'ddd', 'ddd', '22', '22', '2019-04-18'),
('77302', 'X Film', 'None', 'X-Ray Film 3D', '80', '200', '2019-04-22'),
('d', 'd', 'd', 'd', 'd', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` varchar(14) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `expiry_date` date NOT NULL,
  `date_arrival` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_code`, `gen_name`, `product_name`, `price`, `qty`, `expiry_date`, `date_arrival`) VALUES
('12500', 'Difflam', 'Benzydamine', 'Anti-Bacterial Lozenge', '12', '200', '2019-04-07', '2020-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `suplier_id` int(11) NOT NULL,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`suplier_id`, `suplier_name`, `suplier_address`, `suplier_contact`, `contact_person`, `note`) VALUES
(1001, 'Antah Healthcare', 'No. 3, Jalan 19/1, Seksyen 19, 46300 Petaling Jaya, Selangor', '0375967677', 'Mr. Andrew', 'Paracetamol, Salbutamol'),
(1002, 'Apex Healthcare', '1-5 Jalan TTC 1, Cheng Industrial Estate 75250 Melaka ', '063370980', 'Mr. Leighton Kee', 'Xepa, Avex'),
(1003, 'PharmaNiaga Berhad', 'No.7,Lorong Keluli 1B,Kawasan Perindustrian Bukit Raja Selatan,\r\nSeksyen 7,40000 Shah Alam,\r\nSelango', '0333429999', 'En. Kamarul', 'Paracetamol, Citirizine, PROMETHAZINE HCI 3.6 MG & PSEUDOEPHEDRINE HCI 20 MG & PHOLCODINE 5 MG SYRUP'),
(1004, 'Y.S.P Industries (M) Sdn Bhd', 'Level 22, Menara LGB, No.1, Jalan Wan Kadir,Taman Tun Dr. Ismail, 60000 Kuala Lumpur, Malaysia.', '0377276390', 'Ms. Yeoh', 'Antibiotics'),
(1005, 'KOTRA PHARMA', 'Kotra Pharma (M) Sdn Bhd (90082-V)\r\n1, 2 & 3, Jalan TTC 12,Cheng Industrial Estate,\r\n75250 Melaka', '063362222', 'Ms. Chee', 'Axcel, Vaxcel'),
(1006, 'Medicines Resources', 'GLOBAL BUSINESS & CONVENTION CENTRE, MEZZANINE FLOOR, BLOCK A,\r\nNO. 8, JALAN 19/1, SECTION 19, 46300', '033258484', 'Mr. Hazwan', 'Difflam '),
(1007, 'Pharma Niaga', 'No. 11A, Jalan P/1, Kawasan Perusahaan Bangi, Bandar Baru Bangi, 43650, Bandar Baru Bangi, Selangor,', '0389257880', 'Mr. Noah', 'Actifed Cough Syrup');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(15, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 07:19:22', '21-09-2018 12:52:55 PM', 1),
(16, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 07:24:17', '21-09-2018 12:54:55 PM', 1),
(17, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 07:31:51', '', 1),
(18, 0, 'fathin nabilah', 0x3a3a3100000000000000000000000000, '2018-09-21 07:34:38', '', 0),
(19, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 07:34:46', '', 1),
(20, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 07:38:14', '', 1),
(21, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 13:18:56', '21-09-2018 06:49:40 PM', 1),
(22, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 13:30:23', '', 1),
(23, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 13:31:50', '', 1),
(24, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 13:36:17', '21-09-2018 07:11:57 PM', 1),
(25, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 13:47:05', '21-09-2018 07:17:09 PM', 1),
(26, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 13:47:21', '21-09-2018 07:17:25 PM', 1),
(27, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-21 13:54:02', '21-09-2018 07:24:24 PM', 1),
(28, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-22 08:29:00', '22-09-2018 02:01:11 PM', 1),
(29, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-22 08:34:31', '22-09-2018 02:04:41 PM', 1),
(30, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-25 19:55:13', '', 0),
(31, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-25 19:55:42', '', 1),
(32, 7, 'haniff_ahbi@yahoo.com', 0x3a3a3100000000000000000000000000, '2018-09-26 04:05:32', '26-09-2018 09:44:47 AM', 1),
(33, 0, 'haniff_ahbi@yahoo.com', 0x3a3a3100000000000000000000000000, '2018-09-30 13:29:17', '', 0),
(34, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-09-30 13:30:02', '30-09-2018 07:00:20 PM', 1),
(35, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-05 15:46:58', '', 0),
(36, 0, 'haniff_ahbi@yahoo.com', 0x3a3a3100000000000000000000000000, '2018-10-05 15:47:05', '', 0),
(37, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-05 15:47:16', '05-10-2018 09:17:55 PM', 1),
(38, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-15 10:13:12', '15-10-2018 03:44:29 PM', 1),
(39, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 11:51:05', '28-10-2018 05:21:37 PM', 1),
(40, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 11:53:18', '', 0),
(41, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 11:53:32', '28-10-2018 05:39:23 PM', 1),
(42, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 12:18:30', '28-10-2018 05:49:01 PM', 1),
(43, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 12:29:22', '28-10-2018 06:42:01 PM', 1),
(44, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 13:43:46', '28-10-2018 07:15:37 PM', 1),
(45, 8, 'mohdhaniff.halim@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 13:45:55', '28-10-2018 07:16:38 PM', 1),
(46, 0, 'haniff5059@yahoo.com', 0x3a3a3100000000000000000000000000, '2018-10-28 13:54:27', '', 0),
(47, 0, 'haniff5059@yahoo.com', 0x3a3a3100000000000000000000000000, '2018-10-28 13:55:26', '', 0),
(48, 9, 'haniff5059@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 13:55:40', '28-10-2018 07:25:53 PM', 1),
(49, 10, 'hh@hotmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 18:22:29', '28-10-2018 11:53:34 PM', 1),
(50, 10, 'hh@hotmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 18:25:21', '', 1),
(51, 10, 'hh@hotmail.com', 0x3a3a3100000000000000000000000000, '2018-10-28 18:27:57', '', 1),
(52, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-29 03:45:20', '29-10-2018 09:15:55 AM', 1),
(53, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-29 04:32:29', '29-10-2018 10:08:40 AM', 1),
(54, 0, 'mm@ymail.com', 0x3a3a3100000000000000000000000000, '2018-10-29 07:13:49', '', 0),
(55, 0, 'mm@gmail.com', 0x3a3a3100000000000000000000000000, '2018-10-29 07:14:12', '', 0),
(56, 11, 'mm@ymai.com', 0x3a3a3100000000000000000000000000, '2018-10-29 07:14:50', '29-10-2018 12:47:37 PM', 1),
(57, 6, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2018-11-02 19:16:11', '', 1),
(58, 0, 'badrol@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-12 09:43:40', '', 0),
(59, 0, 'badrol@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-12 09:43:49', '', 0),
(60, 12, 'baddrol@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-12 09:44:04', '12-02-2019 03:17:54 PM', 1),
(61, 12, 'baddrol@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-13 12:16:05', '13-02-2019 06:17:33 PM', 1),
(62, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-27 16:42:52', '', 0),
(63, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-27 16:42:59', '', 0),
(64, 12, 'baddrol@gmail.com', 0x3a3a3100000000000000000000000000, '2019-02-27 16:43:34', '27-02-2019 10:17:11 PM', 1),
(65, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-16 14:39:44', '', 0),
(66, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-16 14:40:06', '', 0),
(67, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-16 14:40:15', '', 0),
(68, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-16 14:40:23', '', 0),
(69, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-16 14:40:29', '', 0),
(70, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-16 14:40:46', '', 0),
(71, 13, 'jasonday@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-16 14:41:49', '', 1),
(72, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-22 07:45:27', '', 0),
(73, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-22 07:45:34', '', 0),
(74, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-22 07:45:41', '', 0),
(75, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-22 07:46:24', '', 0),
(76, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-22 07:46:39', '', 0),
(77, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-22 07:47:59', '', 0),
(78, 14, 'maxyujahari@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-22 07:49:34', '22-04-2019 01:32:09 PM', 1),
(79, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-24 14:49:34', '', 0),
(80, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-24 14:49:49', '', 0),
(81, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-24 14:50:02', '', 0),
(82, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-24 14:50:09', '', 0),
(83, 0, 'nipbizzy@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-24 14:50:15', '', 0),
(84, 13, 'jasonday@gmail.com', 0x3a3a3100000000000000000000000000, '2019-04-24 14:51:14', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userreport`
--

CREATE TABLE `userreport` (
  `noreport` varchar(5) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `IcNo` varchar(12) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `treatment` varchar(200) NOT NULL,
  `medtype` varchar(200) NOT NULL,
  `medtype2` varchar(200) NOT NULL,
  `medtype3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreport`
--

INSERT INTO `userreport` (`noreport`, `fullname`, `IcNo`, `address`, `gender`, `treatment`, `medtype`, `medtype2`, `medtype3`) VALUES
('12021', 'Haniff Halim', '940407025059', 'Bukit Kepayang, Seremban', 'male', 'General', 'Cough Syrup for Children', 'Cold + Head', 'Fever Adult'),
('52021', 'Fathin Aqilah', '041221146224', 'Precint 5', 'female', '', '', '', ''),
('52022', 'Fathin Nabilah', '970213145970', 'Kg Malaysia Tambahan', 'female', 'General', 'Cold + Head', '', ''),
('52023', 'Jason Day', '850312075211', 'Kuala Lumpur', 'male', 'General', 'Fever Adult', 'Cold + Head', 'Nausea and Vomitting');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `IC` varchar(12) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `IC`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(7, 'haniff', '940407025565', 'kl', 'kl', 'male', 'haniff_ahbi@yahoo.com', '64ad3fb166ddb41a2ca24f1803b8b722', '2018-09-26 04:01:26', '26-09-2018 09:43:45 AM'),
(8, 'rashid', '821225076233', 'domain neocyber', 'cyberjaya', 'male', 'mohdhaniff.halim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-28 13:24:35', ''),
(9, 'haniff halim', '910525145255', 'Precint 9', 'Putrajaya', 'male', 'haniff5059@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-28 13:55:11', ''),
(10, 'mohd haniff', '001229086287', 'cyberjaya', 'cyberjaya', 'male', 'hh@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-28 18:21:53', ''),
(11, 'abd halim', '561229035113', 'bandar saujana', 'selangor', 'male', 'mm@ymai.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-10-29 07:13:20', ''),
(12, 'Badrol', '870204025429', 'Taman Wira', 'Shah Alam', 'male', 'baddrol@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-12 09:43:02', ''),
(13, 'Jason Day', '850313145223', 'Precint 5', 'Putrajaya', 'male', 'jasonday@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-04-16 14:41:39', ''),
(14, 'Muhairullah', '940325036225', 'Bangsar', 'Kuala Lumpur', 'male', 'maxyujahari@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-04-22 07:49:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `walkinuser`
--

CREATE TABLE `walkinuser` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `IC` varchar(12) NOT NULL,
  `address` longtext NOT NULL,
  `contact_number` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `Doctorspecialization` varchar(100) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walkinuser`
--

INSERT INTO `walkinuser` (`id`, `fullname`, `IC`, `address`, `contact_number`, `gender`, `Doctorspecialization`, `remark`, `regDate`) VALUES
(1, 'Jason Day', '620723065221', 'Persiaran Multimedia 6, Domain 6, Cyberjaya', '0192253637', 'Male', 'General', 'Fever', '2019-03-05 17:18:10'),
(2, 'Khirul Azhar', '890303106221', 'NeoCyber,Cyberjaya', '0112523236', 'Male', 'General', 'Batuk Berkahak', '2019-03-05 17:19:09'),
(3, 'Fathin Aqilah', '040126144224', 'Cyberview House, Persiaran Teknokrat,Cyberjaya', '0146146224', 'female', 'X-Ray', 'sakit bahu', '2019-03-05 17:49:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userreport`
--
ALTER TABLE `userreport`
  ADD PRIMARY KEY (`noreport`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walkinuser`
--
ALTER TABLE `walkinuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `walkinuser`
--
ALTER TABLE `walkinuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
