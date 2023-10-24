-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2023 lúc 04:16 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(255) NOT NULL,
  `don_gia` int(50) NOT NULL,
  `giam_gia` float NOT NULL,
  `hinh` text NOT NULL,
  `ngay_nhap` date NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `dac_biet` varchar(255) NOT NULL,
  `so_luot_xem` int(50) NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `ma_loai`, `dac_biet`, `so_luot_xem`, `mo_ta`) VALUES
(3, 'Iphone 12', 14000000, 1.2, 'https://cdn2.cellphones.com.vn/200x/media/catalog/product/3/_/3_51_1_7.jpg', '2023-10-11', 1, 'Đặc Biệt', 0, 'Trong khi sức hút đến từ bộ 4 phiên bản iPhone 12 vẫn chưa nguội đi, thì hãng điện thoại Apple đã mang đến cho người dùng một siêu phẩm mới iPhone 13 với nhiều cải tiến thú vị sẽ mang lại những trải nghiệm hấp dẫn nhất cho người dùng.\r\nHiệu năng vượt trội nhờ chip Apple A15 Bionic\r\nCon chip Apple A15 Bionic siêu mạnh được sản xuất trên quy trình 5 nm giúp iPhone 13 đạt hiệu năng ấn tượng, với CPU nhanh hơn 50%, GPU nhanh hơn 30% so với các đối thủ trong cùng phân khúc.'),
(11, 'Iphone 13', 15000000, 1.2, 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTzn2xLE7LAC8u27Wz_0ZeHC6k669gYqn-HkXfjNkwpluGnedF9DAuksZNLbg3CQAORz6vnXklhy9T29BMVfyVrbba20-j8A3n5N8zVciHxe4MbRTIgBMUbwWyocJ23dsdmboVsiQ&usqp=CAc', '2023-10-19', 1, 'Đặc Biệt', 0, 'Thông tin sản phẩm\r\nTrong khi sức hút đến từ bộ 4 phiên bản iPhone 12 vẫn chưa nguội đi, thì hãng điện thoại Apple đã mang đến cho người dùng một siêu phẩm mới iPhone 13 với nhiều cải tiến thú vị sẽ mang lại những trải nghiệm hấp dẫn nhất cho người dùng.\r\nHiệu năng vượt trội nhờ chip Apple A15 Bionic\r\nCon chip Apple A15 Bionic siêu mạnh được sản xuất trên quy trình 5 nm giúp iPhone 13 đạt hiệu năng ấn tượng, với CPU nhanh hơn 50%, GPU nhanh hơn 30% so với các đối thủ trong cùng phân khúc.'),
(13, 'phone', 20000000, 1.2, 'data:image/jpeg;base64,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', '2023-10-21', 1, 'Đặc Biệt', 0, 'None');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hinh` text NOT NULL,
  `kich_hoat` varchar(500) NOT NULL,
  `vai_tro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_ten`, `mat_khau`, `email`, `hinh`, `kich_hoat`, `vai_tro`) VALUES
(1, 'nam', 'nam', 'nam@gmail.com', 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png', 'active', 'user'),
(2, 'namadmin', 'nam', 'namadmin@gmail.com', 'https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png', 'active', 'admin'),
(4, 'user_new', 'user', 'nguyenvannam5131@gmail.com', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEBBlPGF0oyXLLs6eUIbQtpBR3xEyd0VLRaQ&usqp=CAU', 'active', 'user'),
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'none', 'active', 'admin'),
(9, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 'avt', 'active', 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'Iphone'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(4, 'Nokia');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_hh` (`ma_hh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
