-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2016 at 04:37 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penandaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookmark`
--

CREATE TABLE `tbl_bookmark` (
  `id_bookmark` int(225) NOT NULL,
  `member_id` int(225) NOT NULL,
  `label_id` int(225) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `url` text,
  `slug` varchar(200) DEFAULT NULL,
  `descriptions` text,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_label`
--

CREATE TABLE `tbl_label` (
  `id_label` int(225) NOT NULL,
  `member_id` int(225) NOT NULL,
  `nama_label` varchar(150) DEFAULT NULL,
  `descriptions` text,
  `slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(225) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `verifikasi_email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama`, `username`, `password`, `email`, `verifikasi_email`) VALUES
(1, 'pondokkode', 'pondokkode', '0d572e628632f17a78e05f5cfe2836db13f2e453', 'pondokkode@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `foto_user` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `email`, `foto_user`) VALUES
(1, 'Fika Ridaul Maulayya', 'admin', '0d572e628632f17a78e05f5cfe2836db13f2e453', 'admin@penandaku.com', 'fika.jpg\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bookmark`
--
ALTER TABLE `tbl_bookmark`
  ADD PRIMARY KEY (`id_bookmark`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `label_id` (`label_id`);

--
-- Indexes for table `tbl_label`
--
ALTER TABLE `tbl_label`
  ADD PRIMARY KEY (`id_label`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bookmark`
--
ALTER TABLE `tbl_bookmark`
  MODIFY `id_bookmark` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_label`
--
ALTER TABLE `tbl_label`
  MODIFY `id_label` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bookmark`
--
ALTER TABLE `tbl_bookmark`
  ADD CONSTRAINT `tbl_bookmark_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `tbl_member` (`id_member`),
  ADD CONSTRAINT `tbl_bookmark_ibfk_2` FOREIGN KEY (`label_id`) REFERENCES `tbl_label` (`id_label`);

--
-- Constraints for table `tbl_label`
--
ALTER TABLE `tbl_label`
  ADD CONSTRAINT `tbl_label_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `tbl_member` (`id_member`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
