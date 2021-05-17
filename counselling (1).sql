-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 11:10 AM
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
-- Database: `counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `n_ame` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `id_no` int(8) NOT NULL,
  `e_mail` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `p_assword` varchar(300) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`n_ame`, `id_no`, `e_mail`, `p_assword`) VALUES
('ADMIN', 3489191, 'admin@gmail.com', '$2y$10$NEqDRIkJm1vR5Ngm7unwU.y7RY8fNR9zaK3w6a337GbKCcsDONgva'),
('CHEPKIRUI NELLY', 9876543, 'nobody@gmail.com', '$2y$10$dJxpQa.mFjiaDlFlmiTFlOcpyzUzWZ.hhHxQp1b5u8B3mmAYyvB9S'),
('steve', 30090583, 'kellz@gmail.com', '$2y$10$dGxxX3qHqJm.Lg6XiJJITeDXwfmy7O5nKcPyTME7/2zqI13m2/xiG'),
('kemboi Hillary', 30321988, 'kemboihillz@gmail.com', '$2y$10$S2V5AONYtH.ajlvvTXufDuPBDBsMcgzdl6/cAsauI2/NwJb.spcqi'),
('Omwitsa Wilson', 56728908, 'wilsonh@gmail.com', '$2y$10$MhUBTr/ia3tHVCdVvOGlx.JMFT4dUsRgF1ktnUKMtXXcIzOpMi8iq'),
('mwalimu kilunda', 67890765, 'kilunda@gmail.com', '$2y$10$fw0Bivr1OAdiAcg7dOq7iuJ8LoIGpgWuFPWinNv826bMM3ZNlUsfy'),
('Eddah Cheronoh', 89076543, 'cheronoh@gmail.com', '$2y$10$EQPAXLMhzjLGF5RtXUk2xOei0eOp6/eTei/Sbojtt/8SvKjoLDG2y');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idnum` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `problem` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` set('waiting','ongoing','completed') NOT NULL DEFAULT 'waiting',
  `Start_date` varchar(200) NOT NULL DEFAULT 'not  allocated',
  `counsellor` varchar(100) NOT NULL DEFAULT 'To be allocated',
  `payment` set('Processing','Paid','Unpaid') NOT NULL DEFAULT 'Unpaid',
  `Venue` varchar(200) NOT NULL DEFAULT 'To be assigned'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `idnum`, `dob`, `problem`, `address`, `phone`, `location`, `status`, `Start_date`, `counsellor`, `payment`, `Venue`) VALUES
(7, 'john maina', '30321988', '2020-08-10', 'Nightmares', '1404 nakuru', '0712193413', 'nakuru', 'ongoing', '2021-05-20', 'Eddah Cheronoh', 'Paid', 'Marimba hall'),
(8, 'kemboi Hillary', '30321988', '2020-06-10', 'stress,no sleep', '1404 nakuru', '0712193413', 'Narok', 'completed', 'not allocated', 'to be allocated', 'Unpaid', 'To be assigned'),
(9, 'kemboi Hillary', '30321988', '2021-01-06', 'nightmares', '1404 nakuru', '0712193413', 'nakuru', 'waiting', 'not  allocated', 'To be allocated', 'Unpaid', 'To be assigned');

-- --------------------------------------------------------

--
-- Table structure for table `counsellors`
--

CREATE TABLE `counsellors` (
  `DepID` int(10) NOT NULL,
  `DepartName` varchar(200) NOT NULL,
  `Counsellor_name` varchar(200) NOT NULL,
  `Counsellor_idno` varchar(200) NOT NULL,
  `Counsellor_phone` varchar(200) NOT NULL,
  `Counsellor_email` varchar(200) NOT NULL,
  `Counsellor_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellors`
--

INSERT INTO `counsellors` (`DepID`, `DepartName`, `Counsellor_name`, `Counsellor_idno`, `Counsellor_phone`, `Counsellor_email`, `Counsellor_location`) VALUES
(2, 'Marriage Counsellors', 'Eddah Cheronoh', '89076543', '07234567654', 'cheronoh@gmail.com', 'nakuru');

-- --------------------------------------------------------

--
-- Table structure for table `departmentlist`
--

CREATE TABLE `departmentlist` (
  `Num` int(10) NOT NULL,
  `DepartName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmentlist`
--

INSERT INTO `departmentlist` (`Num`, `DepartName`) VALUES
(1, 'Mental Counsellors'),
(2, 'Youth Counsellors'),
(3, 'Drug Abuse Counsellors'),
(4, 'Students Counsellors'),
(5, 'Marriage Counsellors'),
(6, 'Children Counsellors');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payno` int(10) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `idno` varchar(8) NOT NULL,
  `mode` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  `M-pesa_code` varchar(200) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payno`, `Name`, `phone`, `idno`, `mode`, `Amount`, `M-pesa_code`, `date`) VALUES
(5, 'kemboi Hillary', '0712193413', '30321988', 'Cash', '20000', 'ZDEUMJAJ90', '2021-05-12 14:08:04.669084'),
(6, 'kemboi Hillary', '0712193413', '30321988', 'Cash', '20000', 'cash', '2021-05-16 08:08:11.540499');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `entries` int(10) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_phone` varchar(200) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `id_number` varchar(200) NOT NULL,
  `c_comment` varchar(200) NOT NULL,
  `refferal` varchar(200) NOT NULL,
  `counselling_status` varchar(200) NOT NULL,
  `counsellor_name` varchar(200) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`entries`, `client_name`, `client_phone`, `problem`, `id_number`, `c_comment`, `refferal`, `counselling_status`, `counsellor_name`, `date`) VALUES
(2, 'john maina', '0712193413', 'Nightmares', '30321988', 'wertyuiop[fghjkl;etryuiop[]dfjkl;', 'No', 'Continuation', 'Eddah Cheronoh', '2021-05-12 13:48:38.859590');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE `userroles` (
  `id` int(11) NOT NULL,
  `Userrole` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `id_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`id`, `Userrole`, `username`, `id_no`) VALUES
(48, 'User', 'kemboihillz@gmail.com', 30321988),
(49, 'Counsellor', 'nobody@gmail.com', 9876543),
(50, 'Admin', 'admin@gmail.com', 3489191),
(51, 'Counsellor', 'wilsonh@gmail.com', 56728908),
(52, 'Counsellor', 'kilunda@gmail.com', 67890765),
(53, 'Counsellor', 'cheronoh@gmail.com', 89076543);

-- --------------------------------------------------------

--
-- Table structure for table `venuelist`
--

CREATE TABLE `venuelist` (
  `Vno` int(10) NOT NULL,
  `V_name` varchar(200) NOT NULL,
  `V_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venuelist`
--

INSERT INTO `venuelist` (`Vno`, `V_name`, `V_location`) VALUES
(2, 'Marimba hall', 'Kisii Hign School');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_no`),
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counsellors`
--
ALTER TABLE `counsellors`
  ADD PRIMARY KEY (`DepID`);

--
-- Indexes for table `departmentlist`
--
ALTER TABLE `departmentlist`
  ADD PRIMARY KEY (`Num`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payno`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`entries`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Userrole` (`Userrole`),
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `venuelist`
--
ALTER TABLE `venuelist`
  ADD PRIMARY KEY (`Vno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `counsellors`
--
ALTER TABLE `counsellors`
  MODIFY `DepID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departmentlist`
--
ALTER TABLE `departmentlist`
  MODIFY `Num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `entries` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `venuelist`
--
ALTER TABLE `venuelist`
  MODIFY `Vno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
