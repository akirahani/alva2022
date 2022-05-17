-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 05:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titanstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `trang`
--

CREATE TABLE `trang` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `trang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trang`
--

INSERT INTO `trang` (`id`, `ten`, `trang`) VALUES
(1, 'Landing', 'landing'),
(2, 'Banner', 'banner'),
(3, 'Catalog', 'catalog'),
(4, 'Dự án', 'du-an'),
(5, 'Đối tác', 'doi-tac'),
(6, 'Đại lý', 'dai-ly'),
(7, 'Vùng miền', 'vung-mien'),
(8, 'Tỉnh thành', 'tinh-thanh'),
(9, 'Danh mục', 'danh-muc'),
(10, 'Loại', 'loai'),
(11, 'Thông số', 'thong-so'),
(12, 'Đá', 'da'),
(13, 'Banner danh mục', 'banner-danh-muc'),
(14, 'Loại tin', 'loai-tin'),
(15, 'Tin', 'tin'),
(16, 'Tuyển dụng', 'tuyen-dung'),
(17, 'Chinh sách', 'chinh-sach'),
(18, 'Thành viên', 'thanh-vien'),
(19, 'Tên miền', 'ten-mien'),
(20, 'Nhóm trang quyền', 'nhom-trang-quyen'),
(21, 'Trang', 'trang'),
(22, 'Nhóm', 'nhom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trang`
--
ALTER TABLE `trang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trang`
--
ALTER TABLE `trang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
