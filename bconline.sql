-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 02:45 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bconline`
--

-- --------------------------------------------------------

--
-- Table structure for table `duong`
--

CREATE TABLE `duong` (
  `MaD` int(100) NOT NULL,
  `TenD` text COLLATE utf8_unicode_ci NOT NULL,
  `FK_PX` int(100) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `duong`
--

INSERT INTO `duong` (`MaD`, `TenD`, `FK_PX`, `latitude`, `longitude`) VALUES
(1, 'Nguyễn Du', 1, 10.7838, 106.703),
(2, 'Tôn Đức Thắng', 1, 10.7851, 106.703),
(3, 'Huỳnh Thúc Kháng', 1, 10.7729, 106.703),
(4, 'Nguyễn Bỉnh Khiêm', 1, 10.7858, 106.706),
(5, 'Lê Duẩn', 1, 10.7857, 106.704),
(6, 'Lý Tự Trọng', 1, 10.782, 106.705),
(7, 'Chu Mạnh Trinh', 1, 10.7826, 106.704),
(8, 'Mạc Đỉnh Chi', 1, 10.7836, 106.701),
(9, 'Hai Bà Trưng', 1, 10.7817, 106.699),
(10, 'Lê Văn Hưu', 1, 10.7819, 106.701),
(11, 'Mạc Thị Bưởi', 1, 10.7751, 106.705),
(12, 'Ngô Đức Kế', 1, 10.7741, 106.706),
(13, 'Hồ Tùng Mậu', 1, 10.7727, 106.703),
(14, 'Tôn Thất Đạm', 1, 10.7726, 106.703),
(15, 'Hàm Nghi', 1, 10.771, 106.704);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_images` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Fk_person` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_images`, `name`, `Fk_person`) VALUES
(1, '', 1),
(2, '', 1),
(3, '1-csgt-vung-tau-quet-don-cat-tren-duong-3-2-vung-tau-1486985100.jpg', 1),
(4, '1-csgt-vung-tau-quet-don-cat-tren-duong-3-2-vung-tau-1486985100.jpg', 1),
(5, 'nguoi-phu-nu-quet-don-7674c0.jpg', 1),
(6, 'giam-mo-hieu-qua.jpg', 1),
(7, 'nguoi-phu-nu-quet-don-7674c0.jpg', 1),
(8, '1-csgt-vung-tau-quet-don-cat-tren-duong-3-2-vung-tau-1486985100.jpg', 1),
(9, '1-csgt-vung-tau-quet-don-cat-tren-duong-3-2-vung-tau-1486985100.jpg', 1),
(10, '155705_359893697454524_856431833_n.jpg', 1),
(11, '21740679_476379112735790_516408343900548522_n.jpg', 18),
(12, '', 1),
(13, '', 1),
(14, '', 1),
(15, '', 1),
(16, '', 1),
(17, '', 1),
(18, '', 1),
(19, '', 1),
(20, 'anhle.jpg', 1),
(21, '22853145_1604256466262779_4666326433322550258_n.jpg', 1),
(22, '9.jpg', 8),
(23, '2_43266.jpg', 21),
(24, 'Cong-chuc-dan-ngheo-Ha-Noi-do-xo-an-tiec-chay-mien-phi-1.jpg', 26),
(25, '23132136_928564727308784_7469780160844788021_n.jpg', 25),
(26, 'Adam-Lallana-764965.jpg', 27),
(27, '', 27),
(28, 'Adam-Lallana-764965.jpg', 27),
(29, 'Capture.PNG', 28),
(30, '11873664_721892867922354_325271796725668734_n.jpg', 26),
(31, '32.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Id_Job` int(100) NOT NULL,
  `Name_Job` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Id_Job`, `Name_Job`) VALUES
(1, 'Dọn dẹp'),
(2, 'Sữa chữa'),
(3, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `matching`
--

CREATE TABLE `matching` (
  `ID` int(100) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fk_job` int(100) NOT NULL,
  `fk_tt` int(100) NOT NULL,
  `fk_qh` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matching`
--

INSERT INTO `matching` (`ID`, `email`, `fk_job`, `fk_tt`, `fk_qh`) VALUES
(5, 'lctuananhan@gmail.com', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `MaPer` int(100) NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`MaPer`, `Email`, `Pass`, `type`) VALUES
(1, 'tuananh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(7, 'johson@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(8, 'nguyenbinh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(9, 'leanh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(10, 'lctuananhan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(11, 'lctuananhan@email.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(12, 'leanhtuan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(13, 'lecongtuananh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(14, 'tuananh93@email.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(15, 'anhletuan@email.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(16, 'lctuananhan@email.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(17, '', 'e10adc3949ba59abbe56e057f20f883e', 0),
(18, 'vugiang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(19, 'lcanhle@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(20, 'anhle@email.com', '123', 0),
(21, 'caotoanmy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(22, 'chungnguyen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(23, 'thanhchung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(24, 'adamlalana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(25, 'fabregas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(26, 'leduybinh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(27, 'ngonhatlinh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(28, 'haha@email.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(29, 'binhthanh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(30, 'tuanhung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(31, 'phamnguyenkhan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phuongxa`
--

CREATE TABLE `phuongxa` (
  `MaPX` int(100) NOT NULL,
  `TenPX` text COLLATE utf8_unicode_ci NOT NULL,
  `FK_QH` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phuongxa`
--

INSERT INTO `phuongxa` (`MaPX`, `TenPX`, `FK_QH`) VALUES
(1, 'Phường Bến Nghé', 1),
(2, 'Phường Bến Thành', 1),
(3, 'Phường Cầu Kho', 1),
(4, 'Phường Cầu Ông Lãnh', 1),
(5, 'Phường Cô Giang', 1),
(6, 'Phường Đa Kao', 1),
(7, 'Phường Nguyễn Cư Trinh', 1),
(8, 'Phường Nguyễn Thái Bình', 1),
(9, 'Phường Phạm Ngũ Lão', 1),
(10, 'Phường Tân Định', 1),
(11, 'Phường An Khánh', 2),
(12, 'Phường An Lợi Đông', 2),
(13, 'Phường An Phú', 2),
(14, 'Phường Bình An', 2),
(15, 'Phường Bình Khánh', 2),
(16, 'Phường Bình Trưng Đông', 2),
(17, 'Phường Bình Trưng Tây', 2),
(18, 'Phường Cát Lái', 2),
(19, 'Phường Thạnh Mỹ Lợi', 2),
(20, 'Phường Thảo Điền', 2),
(21, 'Phường Thủ Thiêm', 2);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_ID` int(100) NOT NULL,
  `post_Name` text COLLATE utf8_unicode_ci NOT NULL,
  `post_Cost` int(100) NOT NULL,
  `post_Direc` text COLLATE utf8_unicode_ci NOT NULL,
  `post_Image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fk_Job` int(100) NOT NULL,
  `fk_TT` int(100) NOT NULL,
  `fk_QH` int(100) NOT NULL,
  `fk_PX` int(100) NOT NULL,
  `fk_Dg` int(100) NOT NULL,
  `post_Check` int(2) NOT NULL,
  `post_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_time` time NOT NULL,
  `person` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_ID`, `post_Name`, `post_Cost`, `post_Direc`, `post_Image`, `fk_Job`, `fk_TT`, `fk_QH`, `fk_PX`, `fk_Dg`, `post_Check`, `post_phone`, `post_time`, `person`) VALUES
(8, 'Cần người dọn dẹp', 500000, 'Tôi cần người dọn dẹp nhà bao gồm: quét dọn, rữa chén bát bình ly... thu gom sách vở, báo cũ... Yêu cầu trung thực, thật thà, thẳng thắng....\r\nLiên hệ: 0979612312 - Anh Tư ', 'anchorage-inn-of-rochester.jpg', 1, 1, 1, 1, 3, 1, '0979612312', '00:00:00', 0),
(9, 'Cần người sữa chữa bồn cầu', 800000, 'Nhà tôi bị nghẹt bồn cầu... Cần người sữa chữa. \r\n', '75f8e08250c1d74c99e92eb0a8875091.jpg', 2, 1, 1, 1, 1, 1, '0906951813', '07:30:00', 0),
(10, 'Cần người chăm con', 200000, 'Tôi cần chăm người chăm con vào tối chủ nhật hàng tuần... yêu cầu trung thực, hiền lành, yêu trẻ em... ', 'tam-nang-09f57.jpg', 3, 1, 1, 1, 1, 1, '0979612342', '20:30:00', 0),
(11, 'cần người dọn nhà', 200000, 'Gia đình khá bận rộn nên ko có người dọn nhà. Cần tìm người dọn nhà. nhà 3 lầu... dọn dẹp quần áo. lau dọn nhà. Mỗi lầu đều có nhà vệ sinh riêng nên lau nhà dễ dàng', 'giam-mo-hieu-qua.jpg', 1, 1, 1, 1, 1, 1, '0969401237', '17:00:00', 0),
(12, 'Cần người dọn dẹp căn hộ', 800000, 'Tôi cần dọn dẹp căn hộ. 80m2. Gồm: rửa chén bat, thu gom quần áo, dọn dẹp sách báo, lâu nhà... \r\nAi có nhu cầu liên hệ.\r\nCô Bình.', 'quan-ao-bua-bon.jpg', 1, 1, 1, 1, 2, 0, '01228718779', '07:00:00', 0),
(13, 'Cần người dọn dẹp chặt cây biệt thự', 5000000, 'Tôi cần người chặt cây, dọn dẹp biệt thự tại quận 1.. Ai có nhu cầu liên hệ. ', 'biet-thu-JPG-8377-1510018716.jpg', 1, 1, 1, 1, 1, 1, '01228718779', '06:00:00', 0),
(14, 'Cần người phụ quán Ốc', 200000, 'Hiện tại quán ốc của tôi cần người phụ bán. Quán đông khách từ 7h toi den 11h khuya... Công việc đơn giản, quét dọn, phụ rửa chén bát...\r\nLiên hệ: 0986218559 Chị Hòa', 'diem-mat-nhung-quan-oc-ngon-let-banh-dan-dau-13-quan-o-sai-gon-72a443c8636065258253007057.jpg', 1, 1, 1, 1, 1, 1, '0986218559', '19:00:00', 0),
(15, 'Dòn tiệc tại nhà', 500000, 'Nhà tôi tổ chức tiệc vừa xong. Cần người phụ dọn dẹp bàn ghế chén bat. Ai có nhu cầu liên hệ: Anh Khấn.', 'Cong-chuc-dan-ngheo-Ha-Noi-do-xo-an-tiec-chay-mien-phi-1.jpg', 1, 1, 1, 1, 1, 1, '0969401237', '10:00:00', 0),
(16, 'Cần người quét dọn', 10000, 'fasdfa', '23467169_1480120298770329_8392893932772207575_o.jpg', 1, 1, 1, 1, 1, 0, '01228718779', '03:00:00', 0),
(17, 'Cần người giặt quần áo', 100000, 'Tôi nữ vừa bận công việc cần người giặt hộ 4 bộ quần áo công sở. Ai có nhu cầu liên hệ.', '1414209571-4.jpg', 3, 1, 1, 1, 15, 1, '0906951813', '07:00:00', 0),
(18, 'asdfa', 51561561, 'asdfa', '1414209571-4.jpg', 1, 1, 1, 1, 7, 0, 'sdfadf', '00:06:00', 0),
(19, 'Cần người sữa chữa nhà', 5000000, 'Nhà tôi ngập nước nên cần người sữa chữa, ai có nhu cầu liên hệ.', '20150721103252-a531.jpg', 2, 1, 1, 1, 13, 1, '01228718779', '07:00:00', 21);

-- --------------------------------------------------------

--
-- Table structure for table `profile_jobseekers`
--

CREATE TABLE `profile_jobseekers` (
  `Ma_profile` int(100) NOT NULL,
  `profile_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profile_date` date NOT NULL,
  `profile_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fk_job` int(100) NOT NULL,
  `fk_tinh` int(100) NOT NULL,
  `fk_quan` int(100) NOT NULL,
  `fk_phuong` int(100) NOT NULL,
  `fk_duong` int(100) NOT NULL,
  `fk_person` int(100) NOT NULL,
  `profile_mota` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `profile_check` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile_jobseekers`
--

INSERT INTO `profile_jobseekers` (`Ma_profile`, `profile_name`, `profile_date`, `profile_phone`, `fk_job`, `fk_tinh`, `fk_quan`, `fk_phuong`, `fk_duong`, `fk_person`, `profile_mota`, `profile_anh`, `profile_check`) VALUES
(24, 'Cao Toàn Tính', '1981-01-01', '09050709', 2, 1, 1, 1, 1, 21, 'Tôi có kinh nghiệm trong việc sữa chữa ống nước, ống nước nhà vệ sinh, ống nước sinh hoạt. Tôi trung thực thật thà\r\nMọi người có nhu cầu liên hệ tôi.\r\nChân thành cảm ơn!', '2_43266.jpg', 1),
(25, 'Nguyễn Thành Chung', '1993-08-12', '0969542245', 2, 1, 1, 1, 5, 23, 'Tôi có kinh nghiệm 5 trong việc sữa chữa điện, nước, hầm cầu, và chống thấm. Tôi trung thực thật thà thẳng thắng. Mọi người có việc làm cần tôi. Xin vui lòng liên hệ: 0969452245 Thành Chung', '16406856_142895339552379_1109882087600251234_n.jpg', 1),
(26, 'Nguyễn Thị Thanh Bình', '1994-01-20', '0979612312', 1, 1, 1, 1, 9, 24, 'Tôi có kinh nghiệm trong việc dọn dẹp. Tôi từng làm dọn dẹp cho các tòa nhà và văn phòng. Tôi thật thà thẳng thắng, trung thực. Tôi hi vong tìm được công việc thích hợp. Xin cảm ơn!', '23132136_928564727308784_7469780160844788021_n.jpg', 1),
(27, 'Nguyễn Phùng Ngọc Linh', '1994-06-20', '01686540550', 3, 1, 1, 1, 7, 25, 'Tôi là cô giáo trông trẻ. Tôi từng làm việc ở những nhà trong trẻ tại Tp. Hiện tại tôi vừa mới cưới nên không đi làm toàn thời gian. Nên hiện tại tôi có thể nhận trông trẻ theo giờ. Tôi hiền lành, chịu khó.', '23467169_1480120298770329_8392893932772207575_o.jpg', 1),
(28, 'Lê Duy Bình', '1993-08-20', '0979276246', 2, 1, 1, 1, 4, 26, 'Tôi có kinh nghiệm trong việc sữa chữa nhà phố, quán cafe, quán trà sữa. Tôi từng làm việc cho nhiều công ty lớn. Nhưng do tuổi tác nên tôi nghỉ hưu. Và hiện tại có thể sữa chữa một số hệ thống nhà phó nhỏ. ', '11873664_721892867922354_325271796725668734_n.jpg', 1),
(29, 'Trương Hồ Phương Nga', '1991-01-01', '0946641168', 3, 1, 1, 1, 8, 28, 'Tôi làm việc tại trung tâm chăm sóc trẻ em mồ côi. Nên có kinh nghiệm trong việc chăm sóc trẻ. Nhận chăm sóc trẻ theo giờ. Tôi hiền lành chịu khó kiếm tiền. Ai có nhu cầu liên hệ. Nga Trương', '20160923-hoa-hau-phuong-nga-tung-dong-hop-dong-tinh-ai-tren-phim-1.jpg', 1),
(30, 'Adam Lallana', '1984-10-20', '123456789', 3, 1, 1, 1, 15, 28, 'Tôi là người Anh. Hiện tại tôi đang du lịch ở Việt Nam, và tôi có khả năng nói tiếng Anh rất tốt. Nên tôi có thể làm gia sư Tiếng Anh cho những ai có nhu cầu giao tiếp. Mọi người vui lòng liên hệ tôi.', 'Adam-Lallana-764965.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `MaQH` int(100) NOT NULL,
  `TenQH` text COLLATE utf8_unicode_ci NOT NULL,
  `FK_TT` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quanhuyen`
--

INSERT INTO `quanhuyen` (`MaQH`, `TenQH`, `FK_TT`) VALUES
(1, 'Quận 1', 1),
(2, 'Quận 2', 1),
(3, 'Quận 3', 1),
(4, 'Quận 4', 1),
(5, 'Quận 5', 1),
(6, 'Quận 6', 1),
(7, 'Quận 7', 1),
(8, 'Quận 8', 1),
(9, 'Quận 9', 1),
(10, 'Quận 10', 1),
(11, 'Quận 11', 1),
(12, 'Quận 12', 1),
(13, 'Quận Thủ Đức', 1),
(14, 'Quận Bình Thạnh', 1),
(15, 'Quận Tân Bình', 1),
(16, 'Quận Tân Phú', 1),
(17, 'Quận Bình Tân', 1),
(18, 'Quận Gò Vấp', 1),
(19, 'Quận Phú Nhuận', 1),
(20, 'Huyện Bình Chánh', 1),
(21, 'Huyện Cần Giờ', 1),
(22, 'Huyện Củ Chi', 1),
(23, 'Huyện Hóc Môn', 1),
(24, 'Huyện Nhà Bè', 1),
(25, 'Quận Ba Đình', 2),
(26, 'Quận Bắc Từ Liêm', 2),
(27, 'Quận Cầu Giấy', 2),
(28, 'Quận Đống Đa', 2),
(29, 'Quận Hà Đông', 2),
(30, 'Quận Hai Bà Trưng', 2),
(31, 'Quận Hoàn Kiếm', 2),
(32, 'Quận Hoàng Mai', 2),
(33, 'Quận Long Biên', 2),
(34, 'Quận Nam Từ Liêm', 2),
(35, 'Quận Tây Hồ', 2),
(36, 'Quận Thanh Xuân', 2),
(37, 'Huyện Ba Vì', 2),
(38, 'Huyện Chương Mỹ', 2),
(39, 'Huyện Đan Phượng', 2),
(40, 'Huyện Đông Anh', 2),
(41, 'Huyện Gia Lâm', 2),
(42, 'Huyện Hoài Đức', 2),
(43, 'Huyện Mê Linh', 2),
(44, 'Huyện Mỹ Đức', 2),
(45, 'Huyện Phú Xuyên', 2),
(46, 'Huyện Phúc Thọ', 2),
(47, 'Huyện Quốc Oai', 2),
(48, 'Huyện Sóc Sơn', 2),
(49, 'Huyện Thạch Thất', 2),
(50, 'Huyện Thanh Oai', 2),
(51, 'Huyện Thường Tín', 2),
(52, 'Huyện Thanh Trì', 2),
(53, 'Huyện Ứng Hòa', 2),
(54, 'Huyện Sơn Tây', 2),
(55, 'Quận Cẩm Lệ', 3),
(56, 'Quận Hải Châu', 3),
(57, 'Quận Liên Chiểu', 3),
(58, 'Quận Ngũ Hành Sơn', 3),
(59, 'Quận Sơn Trà', 3),
(60, 'Quận Thanh Khê', 3),
(61, 'Huyện Đảo Hoàng Sa', 3),
(62, 'Huyện Hòa Vang', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `MaTT` int(100) NOT NULL,
  `TenTT` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`MaTT`, `TenTT`) VALUES
(1, 'TP Hồ Chí Minh'),
(2, 'Hà Nội'),
(3, 'Đà Nẵng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Ma_users` int(100) NOT NULL,
  `Ten_users` text COLLATE utf8_unicode_ci NOT NULL,
  `SDT_users` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi_users` text COLLATE utf8_unicode_ci NOT NULL,
  `Fk_person` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Ma_users`, `Ten_users`, `SDT_users`, `Diachi_users`, `Fk_person`) VALUES
(1, 'Le Anh Tuan', '01228718779', '245/53 Xo viet nghe tinh', 1),
(2, 'Anh Le', '0906951813', 'Binh Nguyen', 1),
(3, 'Nguyễn Thị Thanh Bình', '0906951813', '245/53 Xô Viết Nghệ Tĩnh P.17 Q.Bình Thạnh Tp.HCM', 8),
(4, 'Lê Anh Khoa', '0979612312', '268/12 Đường số 6 P.12 Q.Gò Vấp Tp.HCM', 8),
(5, 'Le Anh', '01228718779', 'Binh Dinh', 1),
(6, 'Le Anh Tuan', '01228718779', 'Binh Dinh', 1),
(7, 'Binh Nguyen', '01686540550', 'Binh Dinh', 1),
(8, 'Anhle', '01228718779', '268 Ly Thuoog Kiet', 1),
(9, 'Anhle', '01228718779', '268 Ly Thuoog Kiet', 1),
(10, 'adfa', '8786789', 'ewasfa', 1),
(11, 'Lê Công Tuấn Anh', '01228718779', 'An Hòa/ An Lão/ Bình Định', 1),
(12, 'Le Anh Tuan', '01228718779', 'ádflkj1234', 1),
(13, 'Le Anh Tuan', '165465', 'xgfcgh', 1),
(14, 'Lê Công Tuấn Anh', '01228718779', 'Hưng Nhượng/An Hòa/ An Lão/ Bình Định', 1),
(15, 'Vũ Thị Giang', '0984189858', 'Buôn Ma Thuột/ ĐăkLăk', 18),
(16, 'Nguyễn Thị Thanh Bình', '0979612312', 'Nguyễn Thị Minh Khai p.Đakao Q.1 Tp HCM', 8),
(17, 'Cao Toàn Tính', '0123456789', '268 Lý Thường Kiệt P.14 Q.10', 21),
(18, 'Lê Duy Bình', '0946464664', 'Lam Dong', 26),
(19, 'ádf', '0124', 'ádf', 25),
(20, 'Adam Lalana', '841228718779', 'Ho Chi Minh city, Vietnamese', 27),
(21, 'Adam Lallana', '841228718779', 'Ho Chi Minh city, Vietnamese', 27),
(22, 'Adam Lallana', '841228718779', 'Ho Chi Minh city, Vietnamese', 27),
(23, 'Lê Chi Na', '0946461168', 'Hồ Chí Minh', 28),
(24, 'Lê Duy Bình', '0979276246', 'Bảo Lộc - Lâm Đông', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duong`
--
ALTER TABLE `duong`
  ADD PRIMARY KEY (`MaD`),
  ADD KEY `FK_PX` (`FK_PX`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_images`),
  ADD KEY `Fk_person` (`Fk_person`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Id_Job`);

--
-- Indexes for table `matching`
--
ALTER TABLE `matching`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`MaPer`);

--
-- Indexes for table `phuongxa`
--
ALTER TABLE `phuongxa`
  ADD PRIMARY KEY (`MaPX`),
  ADD KEY `FK_QH` (`FK_QH`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_ID`),
  ADD KEY `fk_Job` (`fk_Job`),
  ADD KEY `fk_TT` (`fk_TT`),
  ADD KEY `fk_QH` (`fk_QH`),
  ADD KEY `fk_PX` (`fk_PX`),
  ADD KEY `fk_Dg` (`fk_Dg`);

--
-- Indexes for table `profile_jobseekers`
--
ALTER TABLE `profile_jobseekers`
  ADD PRIMARY KEY (`Ma_profile`),
  ADD KEY `fk_job` (`fk_job`),
  ADD KEY `fk_person` (`fk_person`),
  ADD KEY `fk_tinh` (`fk_tinh`),
  ADD KEY `fk_quan` (`fk_quan`),
  ADD KEY `fk_phuong` (`fk_phuong`),
  ADD KEY `fk_duong` (`fk_duong`);

--
-- Indexes for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`MaQH`),
  ADD KEY `FK_TT` (`FK_TT`);

--
-- Indexes for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`MaTT`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Ma_users`),
  ADD KEY `users_ibfk_1` (`Fk_person`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duong`
--
ALTER TABLE `duong`
  MODIFY `MaD` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id_images` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Id_Job` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matching`
--
ALTER TABLE `matching`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `MaPer` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `phuongxa`
--
ALTER TABLE `phuongxa`
  MODIFY `MaPX` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `profile_jobseekers`
--
ALTER TABLE `profile_jobseekers`
  MODIFY `Ma_profile` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  MODIFY `MaQH` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  MODIFY `MaTT` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Ma_users` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `duong`
--
ALTER TABLE `duong`
  ADD CONSTRAINT `duong_ibfk_1` FOREIGN KEY (`FK_PX`) REFERENCES `phuongxa` (`MaPX`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`Fk_person`) REFERENCES `person` (`MaPer`);

--
-- Constraints for table `phuongxa`
--
ALTER TABLE `phuongxa`
  ADD CONSTRAINT `phuongxa_ibfk_1` FOREIGN KEY (`FK_QH`) REFERENCES `quanhuyen` (`MaQH`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`fk_Job`) REFERENCES `job` (`Id_Job`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`fk_TT`) REFERENCES `quanhuyen` (`MaQH`),
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`fk_QH`) REFERENCES `quanhuyen` (`MaQH`),
  ADD CONSTRAINT `post_ibfk_4` FOREIGN KEY (`fk_PX`) REFERENCES `phuongxa` (`MaPX`),
  ADD CONSTRAINT `post_ibfk_5` FOREIGN KEY (`fk_Dg`) REFERENCES `duong` (`MaD`);

--
-- Constraints for table `profile_jobseekers`
--
ALTER TABLE `profile_jobseekers`
  ADD CONSTRAINT `profile_jobseekers_ibfk_1` FOREIGN KEY (`fk_job`) REFERENCES `job` (`Id_Job`),
  ADD CONSTRAINT `profile_jobseekers_ibfk_2` FOREIGN KEY (`fk_person`) REFERENCES `person` (`MaPer`),
  ADD CONSTRAINT `profile_jobseekers_ibfk_3` FOREIGN KEY (`fk_tinh`) REFERENCES `tinhthanh` (`MaTT`),
  ADD CONSTRAINT `profile_jobseekers_ibfk_4` FOREIGN KEY (`fk_quan`) REFERENCES `quanhuyen` (`MaQH`),
  ADD CONSTRAINT `profile_jobseekers_ibfk_5` FOREIGN KEY (`fk_phuong`) REFERENCES `phuongxa` (`MaPX`),
  ADD CONSTRAINT `profile_jobseekers_ibfk_6` FOREIGN KEY (`fk_duong`) REFERENCES `duong` (`MaD`);

--
-- Constraints for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD CONSTRAINT `quanhuyen_ibfk_1` FOREIGN KEY (`FK_TT`) REFERENCES `tinhthanh` (`MaTT`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Fk_person`) REFERENCES `person` (`MaPer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
