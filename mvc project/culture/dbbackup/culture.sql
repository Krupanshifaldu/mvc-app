-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 10:43 AM
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
-- Database: `culture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `aid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`aid`, `email`, `password`) VALUES
(1, 'krupanshi@gmail.com', 'krupanshi');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(40) NOT NULL,
  `select_category` varchar(50) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `Briefly_describe` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `rid`, `name`, `phone`, `date`, `time`, `select_category`, `service_name`, `Briefly_describe`, `plan`) VALUES
(1, 1, 'krupanshi', '9664824512', '2022-09-08', '12:18', 'Mehandi', 'jal mehandi', 'abc', 'Basic Plan '),
(3, 2, 'khushi', '9664824512', '2022-09-10', '12:53', 'Mehandi', 'jal mehandi', 'kkk', 'Basic Plan '),
(4, 1, 'KUPI', '9664824512', '2022-09-22', '15:09', 'Painting', 'jal mehandi', 'rajat', 'Basic Plan ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `message`) VALUES
(1, 'KUPI', 'k@gmail.com', 'hi'),
(2, 'krupanshi', 'k@gmail.com', 'woww '),
(3, 'krupanshi', 'k@gmail.com', 'i see more images of your art plz send');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phone`, `message`) VALUES
(2, 'KUPI', '9313530214', 'woww'),
(3, 'k', '9313530214', 'woww');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `fname`, `lname`, `email`, `username`, `address`, `password`) VALUES
(1, 'krupanshi', 'patel', 'krupanshifaldu277@gmail.com', 'krupanshi.faldu', '', 'MTIzNA=='),
(2, 'khushi', 'khunt', 'k@gmail.com', 'khushi', 'gurukrupa  socity street no.3', 'MTIz'),
(3, 'k', 'k', 'krupanshifaldu277@gmail.com', 'kkk', 'rajat', 'a3VwaQ==');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addcategory`
--

CREATE TABLE `tbl_addcategory` (
  `catid` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `addeddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addcategory`
--

INSERT INTO `tbl_addcategory` (`catid`, `categoryname`, `addeddate`) VALUES
(2, 'Mehandi', '2022-07-27'),
(3, 'Painting', '2022-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addsubcategory`
--

CREATE TABLE `tbl_addsubcategory` (
  `subcatid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcategoryname` varchar(255) NOT NULL,
  `addeddate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_addsubcategory`
--

INSERT INTO `tbl_addsubcategory` (`subcatid`, `catid`, `subcategoryname`, `addeddate`) VALUES
(1, 1, 'Bride mehandi', '2022-04-22'),
(2, 2, 'jal mehandi', '2022-05-27'),
(5, 2, 'Exclusive bridal mehandi', ''),
(6, 2, 'Wedding mehandi', ''),
(7, 2, 'Baby shower mehandi', ''),
(8, 2, 'Parties mehandi', ''),
(9, 2, 'Festival mehandi', ''),
(10, 2, 'Engagement mehandi', ''),
(11, 2, 'Festival mehandi', ''),
(12, 2, 'Birthday mehandi', ''),
(13, 2, 'Anniversary mehandi', ''),
(14, 2, 'Kanku pagla mehandi', ''),
(16, 2, 'Arabian mehandi', ''),
(17, 2, 'Sider mehandi', ''),
(18, 2, 'Lag mehandi', ''),
(19, 2, 'Western mehandi', ''),
(22, 3, 'Welcome baby printed matress', ''),
(23, 3, ' welcome baby rumal painting', ''),
(24, 3, 'Simple art rumal painting', ''),
(25, 3, 'Kanku pagla rumal painting', ''),
(26, 3, 'Upeni painting', ''),
(28, 3, 'Clothes paint', ''),
(29, 3, ' Mask painting', ''),
(30, 3, 'Baby arrival set', ''),
(31, 3, 'Haldi ceremony kurta design', ''),
(32, 3, 'Mindhol rumal paint', ''),
(33, 2, 'Groom mehandi', ''),
(34, 3, 'kanku pagla choli painting', ''),
(35, 3, 'Hastmelap Rumal Painting', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_img`
--

CREATE TABLE `tbl_img` (
  `iid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcatid` int(11) NOT NULL,
  `iname` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_img`
--

INSERT INTO `tbl_img` (`iid`, `catid`, `subcatid`, `iname`, `img`, `des`) VALUES
(1, 2, 2, 'Jal Mehandi', 'uploads/imgs/k43.jpg', ''),
(2, 2, 10, 'Engagement Mehandi', 'uploads/imgs/J42.jpg', ''),
(3, 2, 18, 'Leg Mehandi', 'uploads/imgs/J56.jpeg', ''),
(4, 2, 6, 'Wedding Mehandi', 'uploads/imgs/J78.jpeg', ''),
(5, 2, 14, 'Bride Mehandi', 'uploads/imgs/k1.webp', ''),
(6, 2, 16, 'Engagement Mehandi', 'uploads/imgs/K155.jpeg', ''),
(7, 2, 19, 'Leg Mehandi', 'uploads/imgs/K150.jpeg', ''),
(8, 2, 17, 'Sider Mehandi', 'uploads/imgs/k196.jpeg', ''),
(9, 2, 5, 'Bridal Mehandi', 'uploads/imgs/k199.jpg', ''),
(11, 2, 17, 'Heavy Sider Mehandi', 'uploads/imgs/k220.jpg', ''),
(12, 2, 6, 'Bride Groom Mehandi', 'uploads/imgs/k58.jpg', ''),
(13, 2, 17, 'Fancy Mehandi', 'uploads/imgs/k72.jpg', ''),
(14, 2, 0, 'Sider Leg Mahendi', 'uploads/imgs/k193.jpeg', ''),
(15, 2, 0, 'Kanku Pagla Mehandi', 'uploads/imgs/K5.jpeg', ''),
(16, 2, 0, 'Radhe Krishna  Bride Mehandi', 'uploads/imgs/k51.jpg', ''),
(18, 3, 0, 'Haldi ceremoney kurta Painting', 'uploads/imgs/J75.jpeg', ''),
(19, 3, 0, 'Mask Painting', 'uploads/imgs/J64.jpeg', ''),
(20, 3, 28, 'Clothes Painting', 'uploads/imgs/J74.jpeg', ''),
(21, 3, 23, 'Baby rumal paint', 'uploads/imgs/K9.jpeg', ''),
(22, 3, 0, 'Hastmelap rumal Paint', 'uploads/imgs/k42.jpg', ''),
(23, 3, 23, 'Baby rumal paint', 'uploads/imgs/k35.jpg', ''),
(24, 3, 23, 'Baby rumal paint', 'uploads/imgs/K10.jpeg', ''),
(25, 3, 32, 'Mindhol rumal Paint', 'uploads/imgs/k66.jpg', ''),
(26, 3, 0, 'Baby Paraniyu', 'uploads/imgs/k64.webp', ''),
(27, 3, 26, 'Upeni Painting', 'uploads/imgs/k68.jpg', ''),
(28, 3, 28, 'Cute Baby girl Paint', 'uploads/imgs/k76.jpg', ''),
(29, 3, 0, '6th day celebration clothes set for baby girl', 'uploads/imgs/k78.jpg', ''),
(30, 3, 0, 'T-shirt painting', 'uploads/imgs/k82.jpg', ''),
(31, 3, 0, 'Attrective Design', 'uploads/imgs/k75.jpg', ''),
(33, 3, 28, 'Blouse Painting', 'uploads/imgs/K8.jpeg', ''),
(34, 3, 30, 'Baby Frok', 'uploads/imgs/k41.jpg', ''),
(35, 3, 0, 'Hastmelap rumal Paint', 'uploads/imgs/k74.jpg', ''),
(36, 3, 31, 'Kurta Painting', 'uploads/imgs/k79.jpg', ''),
(37, 3, 30, '6th day celebration clothes set for baby boy', 'uploads/imgs/k77.jpg', ''),
(38, 3, 0, 'Kanku Pagla Choli Painting', 'uploads/imgs/k81.jpg', ''),
(39, 3, 0, 'Hastmelap rumal Paint', 'uploads/imgs/k83.jpg', ''),
(40, 3, 30, '6th day celebration clothes set for baby boy', 'uploads/imgs/k86.jpg', ''),
(41, 3, 30, '6th day celebration clothes set for baby boy', 'uploads/imgs/k84.jpg', ''),
(42, 3, 23, 'Baby rumal paint', 'uploads/imgs/k37.jpg', ''),
(43, 3, 29, 'Mask Painting', 'uploads/imgs/k44.jpg', ''),
(44, 3, 31, 'Kurta Painting', 'uploads/imgs/k85.jpg', ''),
(48, 2, 16, 'Arabian mehandi', 'uploads/imgs/k15.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `tbl_addsubcategory`
--
ALTER TABLE `tbl_addsubcategory`
  ADD PRIMARY KEY (`subcatid`),
  ADD KEY `catid` (`catid`);

--
-- Indexes for table `tbl_img`
--
ALTER TABLE `tbl_img`
  ADD PRIMARY KEY (`iid`),
  ADD KEY `catid` (`catid`),
  ADD KEY `subcatid` (`subcatid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_addcategory`
--
ALTER TABLE `tbl_addcategory`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_addsubcategory`
--
ALTER TABLE `tbl_addsubcategory`
  MODIFY `subcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_img`
--
ALTER TABLE `tbl_img`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
