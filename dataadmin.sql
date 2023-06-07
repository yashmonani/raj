-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 12:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataadmintbl`
--

CREATE TABLE `dataadmintbl` (
  `Id` int(99) NOT NULL,
  `P_id` varchar(100) DEFAULT NULL,
  `file1` varchar(255) DEFAULT NULL,
  `addresss` varchar(200) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL,
  `price1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataadmintbl`
--

INSERT INTO `dataadmintbl` (`Id`, `P_id`, `file1`, `addresss`, `rating`, `price1`) VALUES
(14, '45491', '../Images/logo.png', 'Girls PG Hostel\r\n77, gopal nagar A, gopalpura bypass, near triveni nagar flyover\r\n096499 09711', '4', '8000'),
(15, '12837', '../Images/logo.png', 'Mannat house Girls PG\r\n104 MANNAT HOUSE LANE, 5, Gopalpura Bypass Rd\r\n094629 59491', '5', '11000'),
(18, '1356', '../Images/logo.png', 'Bright Boys PG\r\n60, 302015 Krishna Vihar Vistar, Gopalpura Bypass Rd\r\n 070146 22806', '3', '65000'),
(19, '37931', '../Images/gopal.jpg', 'Champavilla PG for Girls\r\n60, Mangal Vihar Extenstion, Gopalpura Bypass Rd\r\n082096 27337', '4', '7000'),
(20, '90427', '../Images/gopal2.jpg', 'Shrinath Hostel\r\n14B, Gopalpura Bypass Rd', '4', '7000'),
(21, '88817', '../Images/gopal3.jpg', 'aasharya PG Boys Hostal\r\nA-39, Gopalpura Bypass Rd', '3', '5500'),
(22, '69783', '../Images/gopal4.jpg', 'Maan Boys PG\r\n127 Gangotri Nagar, Gopalpura Bypass Rd, near triveni, Triveni Nagar, Pulia, Jaipur, Rajasthan 302018', '5', '9000'),
(23, '7752', '../Images/mansa.jpg', 'Radha Govind Boys PG\r\nMansarovar Sector 7, Jhalana Chhod, 117/660, Tagore Path, Mansarovar, Jaipur, Rajasthan 302020', '4', '11000'),
(24, '99430', '../Images/mansa3.jpg', 'Ashiana PG For Boys & GirlS\r\n4/198, near Galaxy Cinema, SFS Manasarovar, Mansarovar, Jaipur, Rajasthan 302020', '4', '8000'),
(25, '10181', '../Images/malvi1.jpg', 'Girls PG, Malviya Nagar\r\nC-380, Pradhan Marg, Vidhyut Abhiyanta Colony, Block C, Malviya Nagar, Jaipur, Rajasthan 302017\r\n', '3', '7000'),
(26, '48875', '../Images/malvi2.jpg', 'Anu Boys PG\r\n7/229, Sector 6 Rd, Sector 7, Malviya Nagar, Jaipur, Rajasthan 302017', '3', '6000'),
(27, '99921', '../Images/malvi3.jpg', 'Sharma PG\r\n 5/13, Sector 5, Malviya Nagar, Jaipur, Rajasthan 302017', '4', '8500'),
(28, '82523', '../Images/trivan.jpg', 'Suramya pg for men\r\nSuramya, JMNRA-5 Mythri nagar, next to ration shop, Jagathy, Thiruvananthapuram, Kerala 695014', '4', '9000'),
(29, '23338', '../Images/trivan2.jpg', 'Vinod Paying Guest\r\n695017, Amadi Nagar,Sreekariyam, Thiruvananthapuram, Kerala 695017', '4', '9100');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `mothersname` varchar(255) DEFAULT NULL,
  `fathersname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `pincode` int(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `psw` varchar(100) NOT NULL,
  `cpsw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `mothersname`, `fathersname`, `address`, `gender`, `state`, `city`, `dob`, `pincode`, `education`, `email`, `psw`, `cpsw`) VALUES
(3, 'yashraj', 'Monani', 'Beena Monani', 'Kishore Monani', 'B-164 ,10-B Scheme Gopalpura Byepass , Jaipur', 'Male', '2', '3', '2002-08-16', 302018, '12th', 'yashrajm16802@gmail.com', 'yash123', 'yash123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataadmintbl`
--
ALTER TABLE `dataadmintbl`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataadmintbl`
--
ALTER TABLE `dataadmintbl`
  MODIFY `Id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
