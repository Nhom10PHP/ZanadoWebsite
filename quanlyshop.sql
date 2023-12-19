-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 11:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlyshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(30) NOT NULL,
  `MoTaDM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`, `MoTaDM`) VALUES
(1, 'Quần áo công sở nam', 'Quần áo công sở lịch lãm'),
(2, 'Quần áo cặp đôi', 'Dành cho ai đã, đang và sẽ yêu');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `KichThuoc` varchar(30) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `HoTen` varchar(30) NOT NULL,
  `SoDienThoai` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `NgayDat` datetime NOT NULL,
  `DiaChi` varchar(30) NOT NULL,
  `PhuongThucVanChuyen` varchar(30) NOT NULL,
  `TinhTrang` int(11) NOT NULL,
  `MaHuyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDonHang`, `MaSP`, `KichThuoc`, `SoLuong`, `HoTen`, `SoDienThoai`, `Email`, `NgayDat`, `DiaChi`, `PhuongThucVanChuyen`, `TinhTrang`, `MaHuyen`) VALUES
(20, 11, '', 1, 'Trần Thành Công', '0867992806', 'congtran872002@gmail.com', '2023-06-16 04:04:51', 'a', 'QT', 1, 2),
(21, 14, '', 10, 'Trần Thành Công', '0867992806', 'congtran872002@gmail.com', '2023-06-16 04:04:51', 'a', 'QT', 1, 2),
(23, 11, '', 1, 'Trần Thành Công', '0867992806', 'congtran872002@gmail.com', '2023-06-16 04:24:38', 'a', 'QT', 1, 2),
(24, 14, '', 10, 'Trần Thành Công', '0867992806', 'congtran872002@gmail.com', '2023-06-16 04:24:38', 'a', 'QT', 0, 2),
(25, 12, '', 1, 'Trần Thành Công', '0867992806', 'congtran872002@gmail.com', '2023-06-16 04:24:38', 'a', 'QT', 0, 2),
(30, 14, 'XL', 1, 'Trần Thành Công', '0867992806', 'congtran872002@gmail.com', '2023-06-17 01:29:52', 'a', 'QT', 0, 2),
(33, 18, 'S', 2, 'Trần Thành Công', '0867992806', 'congtran872002@gmail.com', '2023-06-18 04:50:52', 'a', 'QT', 0, 2),
(34, 19, 'XL', 3, 'Trần Thành Công', '0867992806', 'congtran872002@gmail.com', '2023-06-18 04:50:52', 'a', 'QT', 0, 2),
(35, 20, 'L', 1, 'Trần Thành Công', '0867992806', 'congtran872002@gmail.com', '2023-06-18 04:50:52', 'a', 'QT', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `huyen`
--

CREATE TABLE `huyen` (
  `MaHuyen` int(11) NOT NULL,
  `TenHuyen` varchar(30) NOT NULL,
  `MaTinhThanh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `huyen`
--

INSERT INTO `huyen` (`MaHuyen`, `TenHuyen`, `MaTinhThanh`) VALUES
(1, 'Thọ Xuân', 36),
(2, 'Nguyên Xá', 29),
(3, 'Thị xã Sơn Tây', 29);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `MaLienHe` int(11) NOT NULL,
  `Ten` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `SoDienThoai` varchar(30) NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSanPham` varchar(30) NOT NULL,
  `AnhSanPham` varchar(30) NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TinhTrang` varchar(30) NOT NULL,
  `MoTa` varchar(50) NOT NULL,
  `MaDM` int(11) NOT NULL,
  `MaTheLoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSanPham`, `AnhSanPham`, `Gia`, `SoLuong`, `TinhTrang`, `MoTa`, `MaDM`, `MaTheLoai`) VALUES
(11, 'Áo sơ mi nam dài tay', 'product1s.jpg', 700000, 222, 'conhang', 'Áo đẹp', 1, 1),
(12, 'Áo sơ mi ngắn tay Aristino', 'product3s.jpg', 220000, 22, 'conhang', 'Áo đẹp', 1, 1),
(14, 'Áo sơ mi Aristino', 'product2s.jpg', 700000, 200, 'conhang', 'Áo đẹp', 1, 1),
(16, 'Quần âu Aristino ', 'product4s.jpg', 750000, 50, 'conhang', 'Quần đẹp', 1, 2),
(17, 'Quần bò Aristino', 'product5s.jpg', 500000, 100, 'conhang', 'Đẹp tuyệt vời', 1, 2),
(18, 'Áo váy đôi COUPLE AVG23', 'product doi 1.jpg', 390000, 90, 'Còn hàng', 'Dành cho cặp đôi', 2, 1),
(19, 'Áo váy thun đôi trẻ trung', 'product doi 2.jpg', 500000, 20, 'Còn hàng', 'Đẹp ', 2, 1),
(20, 'Đồ Đôi Nam Nữ Phong Cách Hàn', 'product doi 3.jpg', 800000, 100, 'conhang', 'Tuyệt vời cho các cặp đôi', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoanadmin`
--

CREATE TABLE `taikhoanadmin` (
  `MaTKAdmin` int(11) NOT NULL,
  `TaiKhoan` varchar(30) NOT NULL,
  `MatKhau` varchar(30) NOT NULL,
  `HoTen` varchar(30) NOT NULL,
  `SoDienThoai` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `DiaChi` varchar(30) NOT NULL,
  `LoaiTK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoanadmin`
--

INSERT INTO `taikhoanadmin` (`MaTKAdmin`, `TaiKhoan`, `MatKhau`, `HoTen`, `SoDienThoai`, `Email`, `DiaChi`, `LoaiTK`) VALUES
(1, 'admin', 'admin', 'Trần Thành Công', '0867992806', 'cong@gmail.com', 'Hà Nội', 0),
(2, 'nhanvien', 'nhanvien', 'Nhân Viên ', '0347426635', 'hai@gmail.com ', 'Hải Dương', 1);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `MaTheLoai` int(11) NOT NULL,
  `TenTL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`MaTheLoai`, `TenTL`) VALUES
(1, 'Áo đẹp'),
(2, 'Quần đẹp');

-- --------------------------------------------------------

--
-- Table structure for table `thongtin`
--

CREATE TABLE `thongtin` (
  `MaThongTin` int(11) NOT NULL,
  `TenThongTin` varchar(30) NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thongtin`
--

INSERT INTO `thongtin` (`MaThongTin`, `TenThongTin`, `NoiDung`) VALUES
(3, 'gioithieu', '<p> </p>\r\n\r\n<p><strong>Zanado là một cửa hàng bán quần áo trực tuyến chuyên cung cấp các sản phẩm thời trang phong phú và đa dạng dành cho nam, nữ. Với kinh nghiệm nhiều năm trong lĩnh vực cung cấp quần áo, Zanado đã trở thành một trong những thương hiệu uy tín và được khách hàng tin tưởng trên thị trường Việt Nam.</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Tại Zanado, chúng tôi luôn cập nhật những xu hướng thời trang mới nhất và mang đến cho bạn những sản phẩm có chất lượng tốt nhất, đảm bảo đáp ứng tất cả các nhu cầu của khách hàng. Với các mẫu quần áo được thiết kế phù hợp với phong cách hiện đại, trẻ trung và năng động, bạn có thể cảm nhận được sự thoải mái và tự tin khi mặc những sản phẩm của chúng tôi.</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Không chỉ là một cửa hàng bán quần áo trực tuyến, Zanado còn mang đến cho khách hàng một trải nghiệm mua sắm đầy thú vị với chất lượng dịch vụ tốt nhất. Bạn có thể yên tâm về chất lượng sản phẩm vì mỗi sản phẩm đều đạt tiêu chuẩn chất lượng cao. Chúng tôi cũng cung cấp các dịch vụ giao hàng nhanh chóng và đầy đủ, hỗ trợ khách hàng trong quá trình đổi trả sản phẩm.</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Với mục tiêu làm hài lòng khách hàng và đem lại giá trị cho đối tác, Zanado cam kết mang đến cho bạn những sản phẩm chất lượng tốt nhất, giá cả hợp lý và dịch vụ tốt nhất để khách hàng có thể quay lại và mua sắm thường xuyên.</strong></p>\r\n'),
(4, 'phone', '0845957664'),
(5, 'email', 'Zanadoo@gmail.com.vn'),
(6, 'diachi', 'Nguyên Xá, Bắc Từ Liêm, Hà Nội'),
(7, 'mota', 'Với vị thế của một trang Web đứng đầu trong lĩnh vực bán quần áo. Cùng với kinh nghiệm nhiều năm trong lĩnh vực cung cấp quần áo, Zanado sẽ luôn đem đến cho bạn những trải nghiệm tuyệt vời nhất\r\n.');

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `MaTinhThanh` int(11) NOT NULL,
  `TenTinhThanh` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`MaTinhThanh`, `TenTinhThanh`) VALUES
(29, 'Hà Nội'),
(36, 'Thanh Hóa'),
(37, 'Nghệ An');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `MaTT` int(11) NOT NULL,
  `TenTT` varchar(30) NOT NULL,
  `AnhTT` varchar(30) NOT NULL,
  `NoiDung` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`MaTT`, `TenTT`, `AnhTT`, `NoiDung`) VALUES
(1, 'Thời trang thu đông: Cách mặc ', 'tt thudong.jpg', 'Sắp tới !!!'),
(2, 'Thời trang game thủ', 'tintuc1.jpg', 'Sắp tới');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `donhang_ibfk_1` (`MaSP`),
  ADD KEY `MaHuyen` (`MaHuyen`);

--
-- Indexes for table `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`MaHuyen`),
  ADD KEY `huyen_ibfk_1` (`MaTinhThanh`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`MaLienHe`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `sanpham_ibfk_1` (`MaDM`),
  ADD KEY `sanpham_ibfk_2` (`MaTheLoai`);

--
-- Indexes for table `taikhoanadmin`
--
ALTER TABLE `taikhoanadmin`
  ADD PRIMARY KEY (`MaTKAdmin`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MaTheLoai`);

--
-- Indexes for table `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`MaThongTin`);

--
-- Indexes for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`MaTinhThanh`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`MaTT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `huyen`
--
ALTER TABLE `huyen`
  MODIFY `MaHuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `MaLienHe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `taikhoanadmin`
--
ALTER TABLE `taikhoanadmin`
  MODIFY `MaTKAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `MaTheLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `MaThongTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  MODIFY `MaTinhThanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `MaTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`MaHuyen`) REFERENCES `huyen` (`MaHuyen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `huyen`
--
ALTER TABLE `huyen`
  ADD CONSTRAINT `huyen_ibfk_1` FOREIGN KEY (`MaTinhThanh`) REFERENCES `tinhthanh` (`MaTinhThanh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaTheLoai`) REFERENCES `theloai` (`MaTheLoai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
