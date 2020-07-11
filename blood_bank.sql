-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 04:53 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `road_no` int(5) DEFAULT NULL,
  `house_no` varchar(5) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `date_of_birth` varchar(15) DEFAULT NULL,
  `blood_type` varchar(4) NOT NULL,
  `height` varchar(5) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `first_name`, `last_name`, `mobile`, `email`, `city`, `street`, `road_no`, `house_no`, `country`, `gender`, `date_of_birth`, `blood_type`, `height`, `weight`, `password`) VALUES
(28, 'Fahim', 'Said', '01786637192', 'edg@gmail.com', 'sylhet', 'laamabazar', 12, '45', 'Bangladesh', 'Male', '12-09-1996', 'A+', '6.0', '67', '12894'),
(29, 'Rahim', 'mia', '+8801638721768', 'sd@gmail.com', 'sylhet', 'amberkhana', 24, '46', 'Bangladesh', 'Male', '5-10-1994', 'B+', '5.7', '56', '1254'),
(30, 'Jamiul', 'hasan', '01786637132', 'jh@gmail.com', 'sylhet', 'sheikhghat', 13, '56', 'Bangladesh', 'Male', '28-6-1997', 'B+', '5.3', '52', '12356'),
(31, 'Jakkan', 'Ahmed', '01786637113', 'jka@gmail.com', 'sylhet', 'akhalia', 27, '35', 'Bangladesh', 'Male', '25-6-1995', 'AB+', '5.3', '59', '1265'),
(32, 'Saifur', 'Rahman ', '01786637110', 'sr1@gmail.com', 'sylhet', 'fenchugonj', 21, '41', 'Bangladesh', 'Male', '29-6-1992', 'AB-', '5.7', '56', '1274'),
(33, 'Arjun', 'Roy', '01786637111', 'kha1@gmail.com', 'sylhet', 'amberkhana', 21, '37', 'Bangladesh', 'Male', '26-6-1997', 'O-', '5.5', '75', '1237'),
(35, 'Saifullah', 'Khan', '01687920900', 'j12@gmail.com', 'sylhet', 'laamabazaria', 32, '21', 'Bangladesh', 'Male', '12-04-1992', 'O+', '5.2', '56', '1290'),
(36, 'Mobina', 'Begum', '01687920905', 'j11@gmail.com', 'sylhet', 'uposhahar', 22, '62', 'Bangladesh', 'Female', '1-2-2001', 'A-', '4.1', '43', '1287'),
(37, 'sahida', 'islam', '01786637190', 'ed12@gmail.com', 'sylhet', 'Tilaghor', 33, '55', 'Bangladesh', 'Female', '12-03-1999', 'B-', '4.2', '46', '1209'),
(38, 'Fahima', 'Sultana', '01687920906', 'khaleda@gmail.com', 'sylhet', 'Tilaghor', 11, '22', 'Bangladesh', 'Female', '1-2-2002', 'AB-', '4.3', '60', '1207'),
(39, 'Johura', 'Begum', '+8801638721769', 'ed13@gmail.com', 'sylhet', 'laamabazar', 31, '25', 'Bangladesh', 'Female', '1-2-2002', 'O-', '4.4', '51', '1205'),
(40, 'Halima', 'Khatun', '+8801638721765', 'ed14@gmail.com', 'sylhet', 'fenchugonj', 14, '47', 'Bangladesh', 'Female', '1-2-2007', 'A+', '4.1', '42', '1202'),
(41, 'Selina', 'Sultana', '+880163872171', 'ed15@gmail.com', 'sylhet', 'ponitula', 16, '1', 'Bangladesh', 'Female', '1-2-2008', 'A-', '4.2', '41', '1201'),
(42, 'Lima', 'Begum', '+880163872170', 'ed17@gmail.com', 'sylhet', 'shahieidgha', 17, '39', 'Bangladesh', 'Female', '1-2-2004', 'B-', '4.3', '47', '1200'),
(44, 'Fuad', 'hussien', '01741618009', 'fuad@gmail.com', 'Sylhet', 'uttora', 20, '99', 'Bangladesh', 'Male', '29-08-1993', 'O-', '4.8', '85', '1414'),
(45, 'Muhibur ', 'Rahman ', '+8801638721760', 'Mh12@gmail.com', 'Dhaka', 'Danmoni', 17, '33', 'bangladesh', 'Male', '05-06-1995', 'AB+', '5.8', '46', '1009'),
(46, 'Joyynal', 'Abedin', '+8801638721763', 'JA@gmail.com', 'Dhaka', 'Mirpur', 2, '34', 'Bangladesh', 'Male', '29-04-1997', 'AB+', '4.8', '85', '1209'),
(47, 'Saikur', 'Rahman Khaled', '+8801741618005', 'khaled@gmail.com', 'Sylhet', 'lamabazar', 1, '30', 'Bangladesh', 'Male', '25-06-1995', 'B+', '5.8', '50', '12345'),
(48, 'Imad', 'hussain', '01905726905', 'athikimad@gmail.com', 'Sylhet', 'fenchugonj ', 1, '3', 'Bangladesh', 'Male', '05-05-1995', 'A+', '5.6', '47', '3232'),
(49, 'Sadikur', 'Rahman', '01741618005', 'abc@xyz.com', 'sylhet', 'lamabazar', 2, '65', 'bd', 'Male', '1997-04-01', 'B+', '5.6', '50', '1234'),
(50, 'Shahanaz', 'Begum', '0100010002', 'sehnaz.syl71@gmail.com', 'sylhet', 'lamabazar', 2, '30', 'Bangladesh', 'Female', '1998-05-19', 'B+', '4.10', '50', '12345'),
(51, 'abc', 'dd', '12121212122', 'abc@xyz.com', 'sylhet', 'lamabazar', 2, '30', 'Bangladesh', 'Male', '2004-06-17', 'O+', '4.10', '55', '12345'),
(52, 'Shahanaz', 'Begum', '0100010002', 'sehnaz.syl71@gmail.com', 'Sylhet', 'lamabazar', 2, '30', 'Bangladesh', 'Female', '2020-07-02', 'B+', '4.10', '55', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
