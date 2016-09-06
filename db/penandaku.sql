-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2016 at 04:46 
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
  `judul` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `member_id` int(11) NOT NULL,
  `label_id` int(11) NOT NULL,
  `bookmark_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_label`
--

CREATE TABLE `tbl_label` (
  `id_label` int(225) NOT NULL,
  `nama_label` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `descriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(225) NOT NULL,
  `nama_member` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `verifikasi_email` varchar(150) NOT NULL,
  `foto_member` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_member`, `username`, `password`, `email`, `verifikasi_email`, `foto_member`) VALUES
(1, 'Pondok Kode, Inc.', 'pondokkode', '0d572e628632f17a78e05f5cfe2836db13f2e453', 'pondokkode@gmail.com', '1', 'fika.jpg');

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
  ADD PRIMARY KEY (`id_bookmark`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`member_id`,`label_id`,`bookmark_id`),
  ADD KEY `label_id` (`label_id`),
  ADD KEY `bookmark_id` (`bookmark_id`);

--
-- Indexes for table `tbl_label`
--
ALTER TABLE `tbl_label`
  ADD PRIMARY KEY (`id_label`);

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
-- Constraints for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD CONSTRAINT `tbl_group_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `tbl_member` (`id_member`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_group_ibfk_2` FOREIGN KEY (`label_id`) REFERENCES `tbl_label` (`id_label`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_group_ibfk_3` FOREIGN KEY (`bookmark_id`) REFERENCES `tbl_bookmark` (`id_bookmark`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
