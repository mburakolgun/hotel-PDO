-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 09:03 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `justinesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `amen_id` int(100) NOT NULL,
  `amen_name` varchar(100) NOT NULL,
  `amen_desp` varchar(100) NOT NULL,
  `amen_image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`amen_id`, `amen_name`, `amen_desp`, `amen_image`) VALUES
(8, 'The Kitchen', 'Spacious and for cooking all types of meals', 'pics/Flag_of_the_Republic_of_China-386x257.png'),
(9, 'The bathroom', '                 with hot water showers                 ', 'pics/download (1).jpg'),
(10, 'TheBalcony d', '                                                     Lagpat                 ', 'pics/download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `firstname`, `lastname`, `email`, `comment`) VALUES
(1, 'Gina', 'Bulgado', 'gina@yahoo.com', '    gina comment            '),
(2, 'Gina', 'Bulgado', 'gina@yahoo.com', '    gina comment            '),
(3, 'Gina', 'Bulgado', 'gina@yahoo.com', '      fbgfbgbgfbfgbgb          '),
(4, 'Allan', 'Cayateno', 'allan@yahoo.com', '   from allan             '),
(5, 'Allan', 'Cayateno', 'allan@yahoo.com', '   from allan             '),
(6, 'Allan', 'Cayateno', 'allan@yahoo.com', '   from allan             '),
(7, 'Allan', 'Cayateno', 'allan@yahoo.com', '                '),
(8, 'Allan', 'Cayateno', 'allan@yahoo.com', '                '),
(9, 'vel', 'gauma', 'vel@yahoo.com', '                ATEH OKE AHH'),
(10, 'Erick Jason', 'Batuto', 'ejbatuto@hotmail.com', 'Extra bed for 2'),
(11, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                '),
(12, 'HATCH', 'VILLANUEVA', 'hatchvillanueva16@gmail.com', '                '),
(13, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                '),
(14, 'Erick Jason', 'Batuto', 'ejbatuto@hotmail.com', '                '),
(15, 'sdfsdfsd', 'dsfds', 'sddf', '                '),
(16, 'Kevi', 'Gargar', 'fg', '                '),
(17, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                '),
(18, 'Jesyl', 'Gozon', 'jhasyl@yahoo.com', '                '),
(19, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                '),
(20, 'steve', 'flores', 'kevinflores_23@yahoo.com', '                '),
(21, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                Gsto q my opod maau mg masahe'),
(22, 'ANGELA', 'RODRIGAZO', 'angela@gmail.com', '         Paul John Delacruz Masage with extra service overnight       '),
(23, 'ANGELA', 'RODRIGAZO', 'angela@gmail.com', '                '),
(24, 'Joken', 'Villanueva', 'joken000189561@gmail.com', '                '),
(25, 'VILLANUEVA', 'Villanueva', 'joken000189561@gmail.com', ''),
(26, 'Armin', 'Maningog', 'armin@yahoo.com', ''),
(27, 'Lito ', 'Lapid', 'lito@gmail.com', ''),
(28, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `lastname`, `country`, `city`, `address`, `zip`, `phone`, `email`, `password`) VALUES
(3, 'Jacob', 'Njega', 'Kenya', 'Nairobi', '', '00100', '0714812234', 'njega@gmail.com', 'redeem'),
(4, 'Simon', 'mwaura', 'kenya', 'Nairobi', '', '00100', '0714812921', 'smjoshua09@gmail.com', '52672367'),
(5, 'Juma', 'Felix', 'kenya', 'Sega', '', '40614', '0720108418', 'juma@gmail.com', ''),
(6, 'Peterson', 'Kimani', 'kenya', 'Nyandarua', '', '3456', '0729475691', 'peterkimani89@yahoo.com', '6666'),
(22, 'HATCH', 'VILLANUEVA', 'Philippines', '.Himmamaylan', 'MGB CAGAY BRGY SUAY', '6108', '63234234', 'hatchvillanueva16@gmail.com', 'ghvhgv'),
(23, '', '', '', '', '', '', '', '', ''),
(24, 'dfsdf', 'sdfsdf', 'dsfsdf', 'dsf', '', '234', '434234', 'sdfdsf', 'dsfsdf'),
(25, 'Gina', 'Bulgado', 'Phillppines', 'Kabankalan city', 'Guanzon Street', '6111', '0987654321', 'gina@yahoo.com', '12314234234'),
(26, 'dsfdsf', 'df', 'dfdf', 'dfdf', '', 'df', '234', 'sdfdf', 'dsfsdf'),
(27, 'merry grace ', 'principe', 'Philippines', 'himamaylan', '', '6108', '4712-462', 'merrygraceprincipe@yahoo.com', 'lyricajoy23'),
(28, 'Erick jason ', 'Batuto', 'Philippines', 'Cebu City', '', '1000', '90199090', 'ejb@yahoo.com', '123345'),
(29, 'janno', 'palacios', 'Phillppines', 'Kabankalan city', '', '6111', '73263274687432', 'jannopalacios@yahoo.com', '12345'),
(30, 'sdsad', 'dsfds', 'dsf', 'sdfdf', '', 'df', 'df', 'dfdf', 'sdf'),
(31, 'dsfsdfdsfsd', 'fsdf', 'sdfsdf', 'sdfsdfsd', '', 'sdfsd', 'fsdfsdf', 'sdfsdfsdf', 'sdfdsfdsf'),
(33, 'Allan', 'Cayateno', 'Phillppines', 'Manila', 'Fairvew', '12321', '987842', 'allan@yahoo.com', '324234dsfsdf'),
(34, 'vel', 'gauma', 'Phillppines', 'Kabankalan city', 'Kabanakalan City', '6111', '82374836583', 'vel@yahoo.com', '12345'),
(35, 'Jesyl', 'Gozon', 'Philippines', 'Cebu City', 'Mabolo Cebu City', '6000', '09179348731', 'jhasyl@yahoo.com', 'j'),
(36, 'VILLANUEVA', 'Villanueva', 'Philippines', '.Himmamaylan', 'MGB CAGAY BRGY SUAY', '6108', '0234234', 'joken000189561@gmail.com', '1234'),
(37, 'sdfsdfsd', 'dsfds', 'dsfsdf', 'dsfds', 'dsfd', 'ds', 'dsf', 'sddf', 'df'),
(38, 'Kevi', 'Gargar', 'fgfg', 'fgf', 'fgf', 'fgf', 'ffg', 'fg', ''),
(39, 'steve', 'flores', 'philippines', 'kabankalan', 'Camugao', '6111', '09077659710', 'kevinflores_23@yahoo.com', '12345'),
(40, 'Charlotte', 'Villanueva', 'Philippines', 'd', 'd', 'd', 'd', 'angela@gmail.com', 'loadSingleResultAssoc'),
(41, 'Armin', 'Maningog', 'Philippines', 'Himamaylan', 'bagroy', '6108', '09983344318', 'armin@yahoo.com', '1'),
(42, 'Lito ', 'Lapid', 'Philippines', 'Pampanga', 'Mabini St.', '7896', '878986', 'lito@gmail.com', '890');

-- --------------------------------------------------------

--
-- Stand-in structure for view `listofreservation`
-- (See below for the actual view)
--
CREATE TABLE `listofreservation` (
`reservation_id` int(11)
,`roomNo` int(50)
,`guest_id` int(11)
,`arrival` varchar(30)
,`departure` varchar(30)
,`adults` int(11)
,`child` int(11)
,`payable` int(11)
,`status` varchar(10)
,`booked` date
,`confirmation` varchar(20)
,`roomName` varchar(50)
,`firstname` varchar(30)
,`lastname` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `listofrooms`
-- (See below for the actual view)
--
CREATE TABLE `listofrooms` (
`roomNo` int(50)
,`typeID` int(50)
,`roomName` varchar(50)
,`price` varchar(50)
,`Adults` int(50)
,`Children` int(10)
,`roomImage` varchar(200)
,`Desp` text
,`typeName` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `roomNo` int(50) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `adults` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `payable` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `booked` date NOT NULL,
  `confirmation` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `roomNo`, `guest_id`, `arrival`, `departure`, `adults`, `child`, `payable`, `status`, `booked`, `confirmation`) VALUES
(1, 2, 25, '2014-03-27', '2014-03-28', 1, 0, 0, 'Checkedout', '0000-00-00', 'aa7o45qb'),
(2, 2, 25, '2014-03-27', '2014-03-28', 1, 0, 1500, 'pending', '0000-00-00', 'pokoozoh'),
(3, 2, 25, '2014-03-27', '2014-03-28', 1, 0, 1500, 'pending', '0000-00-00', 'p47gcsir'),
(7, 3, 33, '2014-04-06', '2014-04-07', 1, 0, 1800, 'pending', '0000-00-00', 'tf3mbva3'),
(8, 3, 33, '2014-04-06', '2014-04-07', 1, 0, 1800, 'Confirmed', '0000-00-00', 'j3t6o8my'),
(9, 2, 34, '2014-03-06', '2014-03-07', 1, 0, 1500, 'Confirmed', '0000-00-00', 'zn63hw63'),
(10, 3, 35, '2014-03-29', '2014-03-30', 1, 0, 1800, 'pending', '0000-00-00', 'v7t0o6rp'),
(11, 8, 36, '2014-03-28', '2014-03-31', 1, 0, 3900, 'pending', '0000-00-00', 't6urn8t3'),
(12, 2, 22, '2014-03-08', '2014-03-09', 1, 0, 1500, 'Checkedout', '0000-00-00', 'czt277mm'),
(13, 3, 36, '2014-03-08', '2014-03-09', 1, 0, 1800, 'Checkedout', '0000-00-00', 'hnq6tgs5'),
(14, 9, 35, '2014-03-22', '2014-03-23', 1, 0, 2300, 'Cancelled', '0000-00-00', 'ayupzknr'),
(15, 2, 37, '2014-03-13', '2014-03-14', 1, 0, 1500, 'Checkedout', '0000-00-00', 'chn8qjta'),
(16, 3, 38, '2014-03-13', '2014-03-14', 1, 0, 1800, 'Checkedout', '0000-00-00', 'krfitp0k'),
(17, 3, 36, '2014-03-24', '2014-03-28', 1, 0, 7200, 'Checkedin', '0000-00-00', 'um8a30sq'),
(18, 2, 35, '2014-03-18', '2014-03-19', 1, 0, 1500, 'Cancelled', '0000-00-00', '803rk3h0'),
(19, 2, 36, '2014-03-18', '2014-03-19', 1, 0, 1500, 'Checkedout', '0000-00-00', 'x4dfc70f'),
(20, 2, 39, '2014-03-13', '2014-03-22', 1, 0, 13500, 'Checkedout', '0000-00-00', '4yd2io0y'),
(21, 2, 36, '2017-08-03', '2017-08-05', 1, 0, 3000, 'Checkedout', '0000-00-00', 'jerotbej'),
(22, 3, 0, '2017-08-03', '2017-08-04', 1, 0, 1800, 'pending', '0000-00-00', 'wxrk5hw4'),
(23, 2, 40, '2017-08-03', '2017-08-04', 1, 0, 1500, 'Checkedout', '0000-00-00', 'twsi6dvp'),
(24, 2, 36, '2017-11-08', '2017-11-11', 1, 0, 4500, 'Checkedin', '0000-00-00', '4b72607k'),
(25, 9, 40, '2017-11-08', '2017-11-11', 1, 0, 6900, 'pending', '0000-00-00', 'db6m0o3a'),
(26, 9, 40, '2017-11-08', '2017-11-11', 1, 0, 6900, 'pending', '0000-00-00', 'wu3ef0it'),
(27, 2, 36, '2017-12-31', '2018-01-03', 1, 0, 4500, 'Confirmed', '0000-00-00', 'm5cypqpy'),
(28, 5, 36, '2017-12-31', '2018-01-03', 1, 0, 5250, 'Checkedin', '0000-00-00', 'm5cypqpy'),
(29, 5, 41, '2018/01/18', '2018/01/20', 1, 0, 3500, 'Confirmed', '0000-00-00', 'n3xus05y'),
(30, 12, 41, '2018/01/16', '2018/01/18', 1, 0, 5600, 'Confirmed', '0000-00-00', 'n3xus05y'),
(31, 20, 42, '2018/01/19', '2018/01/21', 1, 0, 11200, 'Confirmed', '0000-00-00', 'cvqmxzyq');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomNo` int(50) NOT NULL,
  `typeID` int(50) NOT NULL,
  `roomName` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Children` int(10) NOT NULL,
  `roomImage` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomNo`, `typeID`, `roomName`, `price`, `Adults`, `Children`, `roomImage`) VALUES
(2, 82, 'Lions', '1500', 4, 1, 'rooms/del1.jpg'),
(3, 83, 'New Appartment', '1800', 4, 2, 'rooms/Stan1.JPG'),
(5, 83, 'Zion', '1750', 2, 1, 'rooms/102_4648.jpg'),
(14, 83, 'Lions', '345', 45, 4, 'rooms/BitConnect.jpg'),
(15, 83, 'Lions', '433', 3, 3, 'rooms/download (1).jpg'),
(12, 83, 'Family Room', '2800', 3, 2, 'rooms/22883641_10213603288023836_1033883582_o.jpg'),
(16, 83, 'Laboratory', '2800', 2, 1, 'rooms/arowana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `typeID` int(50) NOT NULL,
  `typename` varchar(50) NOT NULL,
  `Desp` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`typeID`, `typename`, `Desp`) VALUES
(82, 'Deluxe', 'The place fo nobles'),
(83, 'Luxury Suite', 'The place of Comfort and Restasdasdasdasdjasndkjasndkjasndkjasnkjasnkdasndkjnsadkjs das dasd asdoas duashd saud isad usad iuashd iashdiu ashi sadiu sauhd');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(55) NOT NULL,
  `LOGMODE` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`LOGID`, `USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) VALUES
(100, 0, '2018-01-03 02:23:32', 'Admin', 'Logged In'),
(101, 0, '2018-01-03 02:23:49', 'Admin', 'Logged In'),
(102, 3, '2018-01-03 02:24:18', 'Admin', 'Logged In'),
(103, 3, '2018-01-14 07:50:35', 'Guest', 'Logged in'),
(104, 3, '2018-01-14 08:22:59', 'Guest', 'Logged out'),
(105, 3, '2018-01-14 08:28:10', 'Guest', 'Logged in'),
(106, 3, '2018-01-14 13:59:43', 'Guest', 'Logged out'),
(107, 41, '2018-01-15 06:54:08', 'Guest', 'Logged in'),
(108, 3, '2018-01-16 02:47:03', 'Admin', 'Logged Out'),
(109, 3, '2018-01-24 08:54:30', 'Admin', 'Logged In'),
(110, 3, '2018-01-24 08:54:36', 'Admin', 'Logged Out'),
(111, 3, '2018-01-24 08:54:44', 'Admin', 'Logged In');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`) VALUES
(3, 'Joken Villanueva', 'joken@yahoo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Administrator'),
(4, 'Hatch Villanueva', 'hatchvillanueva16@gmail.com', '5c2dd944dde9e08881bef0894fe7b22a5c9c4b06', 'Encoder'),
(8, 'Charlotte Etabag Embang', 'angela@gmail.comx', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Administrator');

-- --------------------------------------------------------

--
-- Structure for view `listofreservation`
--
DROP TABLE IF EXISTS `listofreservation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listofreservation`  AS  select `re`.`reservation_id` AS `reservation_id`,`re`.`roomNo` AS `roomNo`,`re`.`guest_id` AS `guest_id`,`re`.`arrival` AS `arrival`,`re`.`departure` AS `departure`,`re`.`adults` AS `adults`,`re`.`child` AS `child`,`re`.`payable` AS `payable`,`re`.`status` AS `status`,`re`.`booked` AS `booked`,`re`.`confirmation` AS `confirmation`,`ro`.`roomName` AS `roomName`,`gu`.`firstname` AS `firstname`,`gu`.`lastname` AS `lastname` from (((`reservation` `re` join `room` `ro`) join `guest` `gu`) join `roomtype` `rt`) where ((`re`.`roomNo` = `ro`.`roomNo`) and (`ro`.`typeID` = `rt`.`typeID`) and (`re`.`guest_id` = `gu`.`guest_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `listofrooms`
--
DROP TABLE IF EXISTS `listofrooms`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `listofrooms`  AS  select `ro`.`roomNo` AS `roomNo`,`ro`.`typeID` AS `typeID`,`ro`.`roomName` AS `roomName`,`ro`.`price` AS `price`,`ro`.`Adults` AS `Adults`,`ro`.`Children` AS `Children`,`ro`.`roomImage` AS `roomImage`,`rt`.`Desp` AS `Desp`,`rt`.`typename` AS `typeName` from (`room` `ro` join `roomtype` `rt`) where (`ro`.`typeID` = `rt`.`typeID`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`amen_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomNo`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`typeID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `amen_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomNo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `typeID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
