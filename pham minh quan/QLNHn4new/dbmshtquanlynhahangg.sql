-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Juin 2019 à 10:54
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dbmshtquanlynhahangg`
--

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quyen` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`username`, `password`, `Quyen`) VALUES
('nhanvien', '123123', 2),
('pmq', '123456', 0);

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `member`
--

INSERT INTO `member` (`username`, `password`, `email`, `fullname`, `birthday`, `sex`) VALUES
('155D48020100262', '6512bd43d9caa6e02c990b0a82652dca', 'quanbinh2@gmail.com', 'Pham Minh Quan2', '15102', 'Nam'),
('155D480201002611', 'c4ca4238a0b923820dcc509a6f75849b', 'quanb111111inh@gmail.com', 'Pham Minh Quan', '1510', 'Nam'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'quanbinh15101108@gmail.com', 'Pham Minh Quan', '1510', 'Nam'),
('PMQUAN', 'e10adc3949ba59abbe56e057f20f883e', 'quanbinh15@gmail.com', 'Pham Minh Quan', '123', 'Nam'),
('ADMINSTRA', 'c81e728d9d4c2f636f067f89cc14862c', 'congty@gmail.com', 'Nguyen Thi ', '1510', 'Nu'),
('155D4802010026', '11d64ede8df9402a8b11557fe25e0cea', 'quanbinh@gmail.com', 'Pham Minh Quan', '1510', 'Nam');

-- --------------------------------------------------------

--
-- Structure de la table `tblban`
--

CREATE TABLE IF NOT EXISTS `tblban` (
`Maban` int(10) NOT NULL,
  `Tinhtrang` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ghichu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `tblban`
--

INSERT INTO `tblban` (`Maban`, `Tinhtrang`, `Ghichu`) VALUES
(1, 'Trong', 'q'),
(2, 'Co', 'q'),
(3, 'Co', 'q'),
(4, 'Trong', 'q'),
(5, 'Trong', 'q'),
(6, 'co', 'q'),
(7, 'Co', 'q'),
(8, 'Trong', 'q'),
(9, 'Trong', 'q'),
(10, 'Co', 'q'),
(11, 'Trong', 'q'),
(12, 'Trong', 'q');

-- --------------------------------------------------------

--
-- Structure de la table `tblca`
--

CREATE TABLE IF NOT EXISTS `tblca` (
  `Maca` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ca` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `Luongca` int(11) DEFAULT NULL,
  `Thoigianbatdau` time DEFAULT NULL,
  `Thoigianketthuc` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tblca`
--

INSERT INTO `tblca` (`Maca`, `Ca`, `Luongca`, `Thoigianbatdau`, `Thoigianketthuc`) VALUES
('cc01', 'chiều', 2, '13:00:00', '19:00:00'),
('cs01', 'sáng', 2, '07:00:00', '11:00:00'),
('ct01', 'tối', 3, '19:00:00', '23:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `tblchamcong`
--

CREATE TABLE IF NOT EXISTS `tblchamcong` (
  `Manhanvien` int(10) DEFAULT NULL,
  `ngay1` int(10) DEFAULT NULL,
  `ngay2` int(10) DEFAULT NULL,
  `ngay3` int(10) DEFAULT NULL,
  `ngay4` int(10) DEFAULT NULL,
  `ngay5` int(10) DEFAULT NULL,
  `ngay6` int(10) DEFAULT NULL,
  `ngay7` int(10) DEFAULT NULL,
  `ngay8` int(10) DEFAULT NULL,
  `ngay9` int(10) DEFAULT NULL,
  `ngay10` int(10) DEFAULT NULL,
  `ngay11` int(10) DEFAULT NULL,
  `ngay12` int(10) DEFAULT NULL,
  `ngay13` int(10) DEFAULT NULL,
  `ngay14` int(10) DEFAULT NULL,
  `ngay15` int(10) DEFAULT NULL,
  `ngay16` int(10) DEFAULT NULL,
  `ngay17` int(10) DEFAULT NULL,
  `ngay18` int(10) DEFAULT NULL,
  `ngay19` int(10) DEFAULT NULL,
  `ngay20` int(10) DEFAULT NULL,
  `ngay21` int(10) DEFAULT NULL,
  `ngay22` int(10) DEFAULT NULL,
  `ngay23` int(10) DEFAULT NULL,
  `ngay24` int(10) DEFAULT NULL,
  `ngay25` int(10) DEFAULT NULL,
  `ngay26` int(10) DEFAULT NULL,
  `ngay27` int(10) DEFAULT NULL,
  `ngay28` int(10) DEFAULT NULL,
  `ngay29` int(10) DEFAULT NULL,
  `ngay30` int(10) DEFAULT NULL,
  `ngay31` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tblchamcong`
--

INSERT INTO `tblchamcong` (`Manhanvien`, `ngay1`, `ngay2`, `ngay3`, `ngay4`, `ngay5`, `ngay6`, `ngay7`, `ngay8`, `ngay9`, `ngay10`, `ngay11`, `ngay12`, `ngay13`, `ngay14`, `ngay15`, `ngay16`, `ngay17`, `ngay18`, `ngay19`, `ngay20`, `ngay21`, `ngay22`, `ngay23`, `ngay24`, `ngay25`, `ngay26`, `ngay27`, `ngay28`, `ngay29`, `ngay30`, `ngay31`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tblchitietdatban`
--

CREATE TABLE IF NOT EXISTS `tblchitietdatban` (
  `Madatban` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tblchitiethoadon`
--

CREATE TABLE IF NOT EXISTS `tblchitiethoadon` (
  `Mahoadon` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mamon` int(10) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tblcongthang`
--

CREATE TABLE IF NOT EXISTS `tblcongthang` (
  `Manhanvien` int(10) NOT NULL,
  `Tennhanvien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thang052019` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tblcongthang`
--

INSERT INTO `tblcongthang` (`Manhanvien`, `Tennhanvien`, `thang052019`) VALUES
(1, 'quyen ba pr00', 2),
(4, 'quyen ba proq', 2),
(5, 'quan binh', 0),
(1, 'quyen ba pr00', 2),
(4, 'quyen ba proq', 2),
(5, 'quan binh', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tbldatban`
--

CREATE TABLE IF NOT EXISTS `tbldatban` (
  `Maban` int(10) DEFAULT NULL,
  `NgayGio` date DEFAULT NULL,
  `Sodienthoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sokhach` int(11) DEFAULT NULL,
  `Madatban` char(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tblhoadon`
--

CREATE TABLE IF NOT EXISTS `tblhoadon` (
  `Mahoadon` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Maban` int(10) DEFAULT NULL,
  `Tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tblkho`
--

CREATE TABLE IF NOT EXISTS `tblkho` (
  `Mahanghoa` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenhanghoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tblmenu`
--

CREATE TABLE IF NOT EXISTS `tblmenu` (
`Mamon` int(10) NOT NULL,
  `Tenmon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Chiphi` int(11) DEFAULT NULL,
  `Img` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thuoctinh` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `tblmenu`
--

INSERT INTO `tblmenu` (`Mamon`, `Tenmon`, `Chiphi`, `Img`, `thuoctinh`) VALUES
(4, 'Gà Nướng', 24000, 'ganuong', 'donuong'),
(6, 'Mực Rim', 24000, 'mucrim', 'donuong'),
(7, 'Chả', 50000, 'cha', 'donuong'),
(8, 'Bánh Chưng', 25000, 'banhchung', 'banhtrai'),
(9, 'Bánh Khọt', 30000, 'g5', 'banhtrai'),
(10, 'Bánh Khoai Môn', 35000, 'g6', 'doannhanh'),
(11, 'Hoa Quả Dầm', 20000, 'g1', 'doannhanh'),
(12, 'Bánh Bông Lan', 25000, 'g2', 'doannhanh'),
(13, 'Hăm-Bơ-Gơ', 60000, 'g3', 'banhtrai'),
(14, 'CoCaCoLa', 10000, 'cocacola', 'thucuong'),
(15, 'Bia Tiger', 15000, 'bia', 'thucuong'),
(16, 'CaFe Trung Nguyên', 15000, 'cf', 'thucuong');

-- --------------------------------------------------------

--
-- Structure de la table `tblnhacungcap`
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
-- Structure de la table `tblnhanvien`
--

CREATE TABLE IF NOT EXISTS `tblnhanvien` (
`Manhanvien` int(10) NOT NULL,
  `Tennhanvien` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ngaysinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gioitinh` int(11) DEFAULT NULL,
  `Diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sodienthoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Chucvu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Maca` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hesoluong` int(11) DEFAULT NULL,
  `Ngaybatdau` date DEFAULT NULL,
  `Mabophan` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tblnhanvien`
--

INSERT INTO `tblnhanvien` (`Manhanvien`, `Tennhanvien`, `Ngaysinh`, `Gioitinh`, `Diachi`, `Sodienthoai`, `Chucvu`, `Maca`, `hesoluong`, `Ngaybatdau`, `Mabophan`) VALUES
(1, 'Thái Bá Quyền', '03/11/1996', 0, 'Nghệ An', '0974811196', 'Nhân Viên', 'cc01', 4, '2019-04-01', 'bp01'),
(4, 'Phạm Minh Quân', '33/02/1997', 1, 'Nghệ An', '121212', 'Nhân Viên', 'cs01', 12, '2019-04-05', 'bp01'),
(5, 'Phạm Văn Đạt', '33/02/1997', 1, 'Nghệ An', '121212', 'Nhân Viên', 'ct01', 1, '1221-11-01', 'bp01');

-- --------------------------------------------------------

--
-- Structure de la table `tblnhapkho`
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
-- Structure de la table `tblquanly`
--

CREATE TABLE IF NOT EXISTS `tblquanly` (
  `Mabophan` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenbophan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Manhanvien` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tblquanly`
--

INSERT INTO `tblquanly` (`Mabophan`, `Tenbophan`, `Manhanvien`) VALUES
('bp01', 'nhan vien ban', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tblxuatkho`
--

CREATE TABLE IF NOT EXISTS `tblxuatkho` (
  `Soluong` int(11) DEFAULT NULL,
  `Ngay` date DEFAULT NULL,
  `Ghichu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mahanghoa` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`);

--
-- Index pour la table `tblban`
--
ALTER TABLE `tblban`
 ADD PRIMARY KEY (`Maban`), ADD KEY `Maban` (`Maban`);

--
-- Index pour la table `tblca`
--
ALTER TABLE `tblca`
 ADD PRIMARY KEY (`Maca`), ADD KEY `Maca` (`Maca`), ADD KEY `Maca_2` (`Maca`), ADD KEY `Maca_3` (`Maca`);

--
-- Index pour la table `tblchamcong`
--
ALTER TABLE `tblchamcong`
 ADD KEY `Manhanvien` (`Manhanvien`), ADD KEY `Manhanvien_2` (`Manhanvien`);

--
-- Index pour la table `tblchitietdatban`
--
ALTER TABLE `tblchitietdatban`
 ADD KEY `Madatban` (`Madatban`);

--
-- Index pour la table `tblchitiethoadon`
--
ALTER TABLE `tblchitiethoadon`
 ADD KEY `Mahoadon` (`Mahoadon`), ADD KEY `Mamon` (`Mamon`);

--
-- Index pour la table `tblcongthang`
--
ALTER TABLE `tblcongthang`
 ADD KEY `Manhanvien` (`Manhanvien`);

--
-- Index pour la table `tbldatban`
--
ALTER TABLE `tbldatban`
 ADD PRIMARY KEY (`Madatban`), ADD KEY `Maban` (`Maban`);

--
-- Index pour la table `tblhoadon`
--
ALTER TABLE `tblhoadon`
 ADD PRIMARY KEY (`Mahoadon`), ADD KEY `Mahoadon` (`Mahoadon`,`Maban`), ADD KEY `Maban` (`Maban`);

--
-- Index pour la table `tblkho`
--
ALTER TABLE `tblkho`
 ADD KEY `Mahanghoa` (`Mahanghoa`);

--
-- Index pour la table `tblmenu`
--
ALTER TABLE `tblmenu`
 ADD PRIMARY KEY (`Mamon`), ADD KEY `Mamon` (`Mamon`);

--
-- Index pour la table `tblnhacungcap`
--
ALTER TABLE `tblnhacungcap`
 ADD PRIMARY KEY (`Manhacungcap`), ADD KEY `Manhacungcap` (`Manhacungcap`);

--
-- Index pour la table `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
 ADD PRIMARY KEY (`Manhanvien`), ADD KEY `Manhanvien` (`Manhanvien`,`Maca`), ADD KEY `Manhanvien_2` (`Manhanvien`,`Maca`), ADD KEY `Maca` (`Maca`);

--
-- Index pour la table `tblnhapkho`
--
ALTER TABLE `tblnhapkho`
 ADD PRIMARY KEY (`Mahanghoa`), ADD KEY `Mahanghoa` (`Mahanghoa`), ADD KEY `Manhacungcap` (`Manhacungcap`);

--
-- Index pour la table `tblquanly`
--
ALTER TABLE `tblquanly`
 ADD PRIMARY KEY (`Mabophan`), ADD KEY `Manhanvien` (`Manhanvien`);

--
-- Index pour la table `tblxuatkho`
--
ALTER TABLE `tblxuatkho`
 ADD KEY `Mahanghoa` (`Mahanghoa`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tblban`
--
ALTER TABLE `tblban`
MODIFY `Maban` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `tblmenu`
--
ALTER TABLE `tblmenu`
MODIFY `Mamon` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
MODIFY `Manhanvien` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tblchamcong`
--
ALTER TABLE `tblchamcong`
ADD CONSTRAINT `tblchamcong_ibfk_1` FOREIGN KEY (`Manhanvien`) REFERENCES `tblnhanvien` (`Manhanvien`);

--
-- Contraintes pour la table `tblchitietdatban`
--
ALTER TABLE `tblchitietdatban`
ADD CONSTRAINT `tblchitietdatban_ibfk_1` FOREIGN KEY (`Madatban`) REFERENCES `tbldatban` (`Madatban`);

--
-- Contraintes pour la table `tblchitiethoadon`
--
ALTER TABLE `tblchitiethoadon`
ADD CONSTRAINT `tblchitiethoadon_ibfk_2` FOREIGN KEY (`Mahoadon`) REFERENCES `tblhoadon` (`Mahoadon`),
ADD CONSTRAINT `tblchitiethoadon_ibfk_3` FOREIGN KEY (`Mamon`) REFERENCES `tblmenu` (`Mamon`);

--
-- Contraintes pour la table `tblcongthang`
--
ALTER TABLE `tblcongthang`
ADD CONSTRAINT `tblcongthang_ibfk_1` FOREIGN KEY (`Manhanvien`) REFERENCES `tblnhanvien` (`Manhanvien`);

--
-- Contraintes pour la table `tbldatban`
--
ALTER TABLE `tbldatban`
ADD CONSTRAINT `tbldatban_ibfk_1` FOREIGN KEY (`Maban`) REFERENCES `tblban` (`Maban`);

--
-- Contraintes pour la table `tblhoadon`
--
ALTER TABLE `tblhoadon`
ADD CONSTRAINT `tblhoadon_ibfk_1` FOREIGN KEY (`Maban`) REFERENCES `tblban` (`Maban`);

--
-- Contraintes pour la table `tblkho`
--
ALTER TABLE `tblkho`
ADD CONSTRAINT `tblkho_ibfk_1` FOREIGN KEY (`Mahanghoa`) REFERENCES `tblnhapkho` (`Mahanghoa`);

--
-- Contraintes pour la table `tblnhapkho`
--
ALTER TABLE `tblnhapkho`
ADD CONSTRAINT `tblnhapkho_ibfk_1` FOREIGN KEY (`Manhacungcap`) REFERENCES `tblnhacungcap` (`Manhacungcap`);

--
-- Contraintes pour la table `tblquanly`
--
ALTER TABLE `tblquanly`
ADD CONSTRAINT `tblquanly_ibfk_1` FOREIGN KEY (`Manhanvien`) REFERENCES `tblnhanvien` (`Manhanvien`);

--
-- Contraintes pour la table `tblxuatkho`
--
ALTER TABLE `tblxuatkho`
ADD CONSTRAINT `tblxuatkho_ibfk_1` FOREIGN KEY (`Mahanghoa`) REFERENCES `tblnhapkho` (`Mahanghoa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
