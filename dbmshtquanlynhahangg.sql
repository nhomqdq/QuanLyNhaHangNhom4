-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2019 lúc 08:23 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbmshtquanlynhahangg`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `Username` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Password` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quyen` char(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblban`
--

CREATE TABLE `tblban` (
  `Maban` char(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Tinhtrang` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ghichu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblca`
--

CREATE TABLE `tblca` (
  `Maca` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ca` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Luongca` int(11) DEFAULT NULL,
  `Thoigianbatdau` date DEFAULT NULL,
  `Thoigianketthuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchamcong`
--

CREATE TABLE `tblchamcong` (
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
-- Cấu trúc bảng cho bảng `tblchitietdatban`
--

CREATE TABLE `tblchitietdatban` (
  `Madatban` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitiethoadon`
--

CREATE TABLE `tblchitiethoadon` (
  `Mahoadon` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mamon` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldatban`
--

CREATE TABLE `tbldatban` (
  `Maban` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgayGio` date DEFAULT NULL,
  `Sodienthoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sokhach` int(11) DEFAULT NULL,
  `Madatban` char(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblhoadon`
--

CREATE TABLE `tblhoadon` (
  `Mahoadon` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Maban` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tongtien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblkho`
--

CREATE TABLE `tblkho` (
  `Mahanghoa` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenhanghoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Soluong` int(11) NOT NULL,
  `Donvi` char(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblkho`
--

INSERT INTO `tblkho` (`Mahanghoa`, `Tenhanghoa`, `Soluong`, `Donvi`) VALUES
('nc001', 'Thực phẩm ', 10, 'kg'),
('nc002', 'gia cầm ', 3, 'kg'),
('nc003', 'Thuôc uống', 10, 'thùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblmenu`
--

CREATE TABLE `tblmenu` (
  `Mamon` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenmon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Chiphi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnhacungcap`
--

CREATE TABLE `tblnhacungcap` (
  `Manhacungcap` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Congty` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Thongtinlienlac` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Diachi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sodienthoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblnhacungcap`
--

INSERT INTO `tblnhacungcap` (`Manhacungcap`, `Congty`, `Thongtinlienlac`, `Diachi`, `Sodienthoai`, `Email`) VALUES
('ncc01', 'Cty Vingroup', 'liên hệ chi nhánh nghệ an', 'Nghi Lộc - Nghệ An', '0912345678', 'nghean197@gmail.com'),
('ncc02', 'Hương giang', 'nghệ an', 'nghi phong nghi lộc- nghệ an', '0111111', 'hgomg@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblnhanvien`
--

CREATE TABLE `tblnhanvien` (
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
-- Cấu trúc bảng cho bảng `tblnhapkho`
--

CREATE TABLE `tblnhapkho` (
  `Mahanghoa` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Manhacungcap` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Ngay` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblnhapkho`
--

INSERT INTO `tblnhapkho` (`Mahanghoa`, `Mota`, `Manhacungcap`, `Soluong`, `Gia`, `Ngay`) VALUES
('nc001', 'không', 'ncc01', 1, 100000, '2019-05-11'),
('nc003', 'bảo quản nơi khô ráo', 'ncc01', 10, 100000, '2019-01-02'),
('nc001', 'không', 'ncc02', 4, 20000, '2019-01-03'),
('nc002', 'không', 'ncc02', 5, 20000, '2019-05-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblquanly`
--

CREATE TABLE `tblquanly` (
  `Mabophan` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenbophan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Manhanvien` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblxuatkho`
--

CREATE TABLE `tblxuatkho` (
  `Soluong` int(11) DEFAULT NULL,
  `Ngay` date DEFAULT NULL,
  `Ghichu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mahanghoa` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `tblban`
--
ALTER TABLE `tblban`
  ADD PRIMARY KEY (`Maban`),
  ADD KEY `Maban` (`Maban`);

--
-- Chỉ mục cho bảng `tblca`
--
ALTER TABLE `tblca`
  ADD PRIMARY KEY (`Maca`);

--
-- Chỉ mục cho bảng `tblchamcong`
--
ALTER TABLE `tblchamcong`
  ADD KEY `Manhanvien` (`Manhanvien`),
  ADD KEY `Manhanvien_2` (`Manhanvien`);

--
-- Chỉ mục cho bảng `tblchitietdatban`
--
ALTER TABLE `tblchitietdatban`
  ADD KEY `Madatban` (`Madatban`);

--
-- Chỉ mục cho bảng `tblchitiethoadon`
--
ALTER TABLE `tblchitiethoadon`
  ADD KEY `Mahoadon` (`Mahoadon`),
  ADD KEY `Mamon` (`Mamon`);

--
-- Chỉ mục cho bảng `tbldatban`
--
ALTER TABLE `tbldatban`
  ADD PRIMARY KEY (`Madatban`),
  ADD KEY `Maban` (`Maban`);

--
-- Chỉ mục cho bảng `tblhoadon`
--
ALTER TABLE `tblhoadon`
  ADD PRIMARY KEY (`Mahoadon`),
  ADD KEY `Mahoadon` (`Mahoadon`,`Maban`),
  ADD KEY `Maban` (`Maban`);

--
-- Chỉ mục cho bảng `tblkho`
--
ALTER TABLE `tblkho`
  ADD PRIMARY KEY (`Mahanghoa`);

--
-- Chỉ mục cho bảng `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`Mamon`),
  ADD KEY `Mamon` (`Mamon`);

--
-- Chỉ mục cho bảng `tblnhacungcap`
--
ALTER TABLE `tblnhacungcap`
  ADD PRIMARY KEY (`Manhacungcap`),
  ADD KEY `Manhacungcap` (`Manhacungcap`);

--
-- Chỉ mục cho bảng `tblnhanvien`
--
ALTER TABLE `tblnhanvien`
  ADD PRIMARY KEY (`Manhanvien`);

--
-- Chỉ mục cho bảng `tblnhapkho`
--
ALTER TABLE `tblnhapkho`
  ADD KEY `Mahanghoa` (`Mahanghoa`),
  ADD KEY `Manhacungcap` (`Manhacungcap`);

--
-- Chỉ mục cho bảng `tblquanly`
--
ALTER TABLE `tblquanly`
  ADD PRIMARY KEY (`Mabophan`),
  ADD KEY `Manhanvien` (`Manhanvien`);

--
-- Chỉ mục cho bảng `tblxuatkho`
--
ALTER TABLE `tblxuatkho`
  ADD KEY `Mahanghoa` (`Mahanghoa`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tblchamcong`
--
ALTER TABLE `tblchamcong`
  ADD CONSTRAINT `tblchamcong_ibfk_1` FOREIGN KEY (`Manhanvien`) REFERENCES `tblnhanvien` (`Manhanvien`);

--
-- Các ràng buộc cho bảng `tblchitietdatban`
--
ALTER TABLE `tblchitietdatban`
  ADD CONSTRAINT `tblchitietdatban_ibfk_1` FOREIGN KEY (`Madatban`) REFERENCES `tbldatban` (`Madatban`);

--
-- Các ràng buộc cho bảng `tblchitiethoadon`
--
ALTER TABLE `tblchitiethoadon`
  ADD CONSTRAINT `tblchitiethoadon_ibfk_1` FOREIGN KEY (`Mamon`) REFERENCES `tblmenu` (`Mamon`),
  ADD CONSTRAINT `tblchitiethoadon_ibfk_2` FOREIGN KEY (`Mahoadon`) REFERENCES `tblhoadon` (`Mahoadon`);

--
-- Các ràng buộc cho bảng `tbldatban`
--
ALTER TABLE `tbldatban`
  ADD CONSTRAINT `tbldatban_ibfk_1` FOREIGN KEY (`Maban`) REFERENCES `tblban` (`Maban`);

--
-- Các ràng buộc cho bảng `tblhoadon`
--
ALTER TABLE `tblhoadon`
  ADD CONSTRAINT `tblhoadon_ibfk_1` FOREIGN KEY (`Maban`) REFERENCES `tblban` (`Maban`);

--
-- Các ràng buộc cho bảng `tblnhapkho`
--
ALTER TABLE `tblnhapkho`
  ADD CONSTRAINT `tblnhapkho_ibfk_1` FOREIGN KEY (`Mahanghoa`) REFERENCES `tblkho` (`Mahanghoa`),
  ADD CONSTRAINT `tblnhapkho_ibfk_2` FOREIGN KEY (`Manhacungcap`) REFERENCES `tblnhacungcap` (`Manhacungcap`);

--
-- Các ràng buộc cho bảng `tblquanly`
--
ALTER TABLE `tblquanly`
  ADD CONSTRAINT `tblquanly_ibfk_1` FOREIGN KEY (`Manhanvien`) REFERENCES `tblnhanvien` (`Manhanvien`);

--
-- Các ràng buộc cho bảng `tblxuatkho`
--
ALTER TABLE `tblxuatkho`
  ADD CONSTRAINT `tblxuatkho_ibfk_1` FOREIGN KEY (`Mahanghoa`) REFERENCES `tblkho` (`Mahanghoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
