-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 03:07 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmshtquanlynhahangg`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Password` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quyen` char(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblban`
--

CREATE TABLE IF NOT EXISTS `tblban` (
  `Maban` char(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Tinhtrang` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ghichu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblca`
--

CREATE TABLE IF NOT EXISTS `tblca` (
  `Maca` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ca` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Luongca` int(11) DEFAULT NULL,
  `Thoigianbatdau` date DEFAULT NULL,
  `Thoigianketthuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblchamcong`
--

CREATE TABLE IF NOT EXISTS `tblchamcong` (
  `Manhanvien` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay4` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay5` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay6` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay7` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay8` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay9` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay10` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay11` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay12` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay13` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay14` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay15` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay16` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay17` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay18` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay19` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay20` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay21` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay22` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay23` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay24` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay25` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay26` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay27` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay28` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay29` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay30` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay31` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblchitietdatban`
--

CREATE TABLE IF NOT EXISTS `tblchitietdatban` (
  `Madatban` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblchitiethoadon`
--

CREATE TABLE IF NOT EXISTS `tblchitiethoadon` (
  `Mahoadon` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mamon` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbldatban`
--

CREATE TABLE IF NOT EXISTS `tbldatban` (
  `Maban` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayGio` date DEFAULT NULL,
  `Sodienthoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sokhach` int(11) DEFAULT NULL,
  `Madatban` char(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblhoadon`
--

CREATE TABLE IF NOT EXISTS `tblhoadon` (
  `Mahoadon` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Maban` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblmenu`
--

CREATE TABLE IF NOT EXISTS `tblmenu` (
  `Mamon` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenmon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Chiphi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblnhacungcap`
--

CREATE TABLE IF NOT EXISTS `tblnhacungcap` (
  `Manhacungcap` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Congty` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Thongtinlienlac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Diachi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sodienthoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblnhanvien`
--

CREATE TABLE IF NOT EXISTS `tblnhanvien` (
  `Manhanvien` char(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Tennhanvien` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ngaysinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gioitinh` int(11) DEFAULT NULL,
  `Diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sodienthoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Chucvu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ca` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hesoluong` int(11) DEFAULT NULL,
  `Ngaybatdau` date DEFAULT NULL,
  `Mabophan` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblnhapkho`
--

CREATE TABLE IF NOT EXISTS `tblnhapkho` (
  `Mahanghoa` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenhanghoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mota` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Manhacungcap` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Ngay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblquanly`
--

CREATE TABLE IF NOT EXISTS `tblquanly` (
  `Mabophan` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenbophan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Manhanvien` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblxuatkho`
--

CREATE TABLE IF NOT EXISTS `tblxuatkho` (
  `Soluong` int(11) DEFAULT NULL,
  `Ngay` date DEFAULT NULL,
  `Ghichu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mahanghoa` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `tblban`
--
ALTER TABLE `tblban`
 ADD PRIMARY KEY (`Maban`), ADD KEY `Maban` (`Maban`);

--
-- Indexes for table `tblca`
--
ALTER TABLE `tblca`
 ADD PRIMARY KEY (`Maca`);

--
-- Indexes for table `tblchamcong`
--
ALTER TABLE `tblchamcong`
 ADD KEY `Manhanvien` (`Manhanvien`), ADD KEY `Manhanvien_2` (`Manhanvien`);

--
-- Indexes for table `tblchitietdatban`
--
ALTER TABLE `tblchitietdatban`
 ADD KEY `Madatban` (`Madatban`);

--
-- Indexes for table `tblchitiethoadon`
--
ALTER TABLE `tblchitiethoadon`
 ADD KEY `Mahoadon` (`Mahoadon`), ADD KEY `Mamon` (`Mamon`);

--
-- Indexes for table `tbldatban`
--
ALTER TABLE `tbldatban`
 ADD PRIMARY KEY (`Madatban`), ADD KEY `Maban` (`Maban`);

--
-- Indexes for table `tblhoadon`
--
ALTER TABLE `tblhoadon`
 ADD PRIMARY KEY (`Mahoadon`), ADD KEY `Mahoadon` (`Mahoadon`,`Maban`), ADD KEY `Maban` (`Maban`);

--
-- Indexes for table `tblmenu`
--
ALTER TABLE `tblmenu`
 ADD PRIMARY KEY (`Mamon`), ADD KEY `Mamon` (`Mamon`);

--
-- Indexes for table `tblnhacungcap`
--
ALTER TABLE `tblnhacungcap`
 ADD PRIMARY KEY (`Manhacungcap`), ADD KEY `Manhacungcap` (`Manhacungcap`);

--
-- Indexes for table `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
 ADD PRIMARY KEY (`Manhanvien`);

--
-- Indexes for table `tblnhapkho`
--
ALTER TABLE `tblnhapkho`
 ADD PRIMARY KEY (`Mahanghoa`), ADD KEY `Mahanghoa` (`Mahanghoa`), ADD KEY `Manhacungcap` (`Manhacungcap`);

--
-- Indexes for table `tblquanly`
--
ALTER TABLE `tblquanly`
 ADD PRIMARY KEY (`Mabophan`), ADD KEY `Manhanvien` (`Manhanvien`);

--
-- Indexes for table `tblxuatkho`
--
ALTER TABLE `tblxuatkho`
 ADD KEY `Mahanghoa` (`Mahanghoa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblchamcong`
--
ALTER TABLE `tblchamcong`
ADD CONSTRAINT `tblchamcong_ibfk_1` FOREIGN KEY (`Manhanvien`) REFERENCES `tblnhanvien` (`Manhanvien`);

--
-- Constraints for table `tblchitietdatban`
--
ALTER TABLE `tblchitietdatban`
ADD CONSTRAINT `tblchitietdatban_ibfk_1` FOREIGN KEY (`Madatban`) REFERENCES `tbldatban` (`Madatban`);

--
-- Constraints for table `tblchitiethoadon`
--
ALTER TABLE `tblchitiethoadon`
ADD CONSTRAINT `tblchitiethoadon_ibfk_1` FOREIGN KEY (`Mamon`) REFERENCES `tblmenu` (`Mamon`),
ADD CONSTRAINT `tblchitiethoadon_ibfk_2` FOREIGN KEY (`Mahoadon`) REFERENCES `tblhoadon` (`Mahoadon`);

--
-- Constraints for table `tbldatban`
--
ALTER TABLE `tbldatban`
ADD CONSTRAINT `tbldatban_ibfk_1` FOREIGN KEY (`Maban`) REFERENCES `tblban` (`Maban`);

--
-- Constraints for table `tblhoadon`
--
ALTER TABLE `tblhoadon`
ADD CONSTRAINT `tblhoadon_ibfk_1` FOREIGN KEY (`Maban`) REFERENCES `tblban` (`Maban`);

--
-- Constraints for table `tblnhapkho`
--
ALTER TABLE `tblnhapkho`
ADD CONSTRAINT `tblnhapkho_ibfk_1` FOREIGN KEY (`Manhacungcap`) REFERENCES `tblnhacungcap` (`Manhacungcap`);

--
-- Constraints for table `tblquanly`
--
ALTER TABLE `tblquanly`
ADD CONSTRAINT `tblquanly_ibfk_1` FOREIGN KEY (`Manhanvien`) REFERENCES `tblnhanvien` (`Manhanvien`);

--
-- Constraints for table `tblxuatkho`
--
ALTER TABLE `tblxuatkho`
ADD CONSTRAINT `tblxuatkho_ibfk_1` FOREIGN KEY (`Mahanghoa`) REFERENCES `tblnhapkho` (`Mahanghoa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
