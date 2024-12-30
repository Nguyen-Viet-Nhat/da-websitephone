-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2023 lúc 06:01 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id` int(10) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_dang` varchar(255) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id`, `tieu_de`, `noi_dung`, `ngay_dang`, `trang_thai`) VALUES
(2, 'Ra mắt Iphone 15!', 'Chào mừng đến với thế hệ mới của sự đổi đen với Apple - iPhone 15, chiếc điện thoại thông minh đỉnh cao với sự tiến bộ đột phá và cái nhìn mới mẻ. iPhone 15 không chỉ là một bước nhảy vọt trong công nghệ, mà còn là biểu tượng của sự sang trọng và đẳng cấp.\r\n\r\nVới thiết kế siêu mỏng và vật liệu chất liệu cao cấp, iPhone 15 tạo nên một trải nghiệm cầm nắm mềm mại và sang trọng. Màn hình Super Retina XDR kích thước lớn, cung cấp độ phân giải ấn tượng và gam màu sống động, mang đến trải nghiệm xem hình ảnh và video tuyệt vời nhất.\r\n\r\nVới bộ xử lý chip A16 Bionic, iPhone 15 không chỉ nhanh chóng và mạnh mẽ mà còn thông minh hơn bao giờ hết. Điều này không chỉ cải thiện hiệu suất của chiếc điện thoại, mà còn tối ưu hóa độ trễ và tiết kiệm năng lượng, giúp bạn trải nghiệm mọi ứng dụng và trò chơi mượt mà và linh hoạt.\r\n\r\nHệ thống camera tiên tiến trên iPhone 15 không chỉ làm cho mọi khoảnh khắc trở nên sống động, mà còn mở ra một thế giới mới của nhiếp ảnh và quay phim sáng tạo. Khả năng chụp ảnh trong điều kiện ánh sáng yếu và chế độ chụp ảnh đêm đã được cải thiện, mang đến những bức ảnh đẹp như tranh với độ chi tiết tuyệt vời.\r\n\r\niPhone 15 cũng nổi bật với các tính năng an ninh tiên tiến như Face ID và một loạt các tùy chọn lưu trữ linh hoạt. Hệ điều hành iOS mới nhất không chỉ đem lại tính năng và ứng dụng mới mẻ mà còn tối ưu hóa trải nghiệm người dùng.\r\n\r\nChắc chắn, iPhone 15 là biểu tượng của sự đẳng cấp và đổi mới, làm dậy lên đam mê sáng tạo và tinh tế trong mỗi người dùng. Hãy chuẩn bị cho một hành trình mới với iPhone 15 - nơi nơi công nghệ và phong cách gặp nhau.', '2023-11-18', 0),
(4, 'Những dòng điện thoại HOT HIT 2023!!!!!', 'Đến nay, nhiều dòng điện thoại đã tạo nên sức hút lớn trong năm 2022, mang đến những trải nghiệm độc đáo và tính năng mạnh mẽ. Dòng điện thoại flagship của Apple, iPhone 13, tiếp tục ghi điểm với hiệu suất ổn định, camera cải tiến và màn hình nâng cấp. Trong khi đó, Samsung Galaxy S21 và S21 Ultra với màn hình Dynamic AMOLED và hệ thống camera đa dạng đang thu hút sự chú ý của người tiêu dùng.  Các đối thủ từ Trung Quốc như Xiaomi với dòng điện thoại Mi 11 và OnePlus với OnePlus 9 cũng đem đến sự đổi mới trong thiết kế và công nghệ. Bên cạnh đó, Google Pixel 6 với khả năng chụp ảnh đỉnh cao và trải nghiệm Android thuần túy cũng đã tạo ra làn sóng trong cộng đồng yêu công nghệ. Sự xuất hiện của các mô hình tiêu chuẩn giá hợp lý như Samsung Galaxy A52 và Xiaomi Redmi Note 10 cũng làm cho công nghệ cao cấp trở nên tiếp cận hơn với nhiều người. Năm 2022 thực sự là một năm đầy năng động và sôi động trong thế giới điện thoại di động.', '2023-11-18', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `id_san_pham` int(10) NOT NULL,
  `ngay_binh_luan` varchar(255) NOT NULL,
  `diem` int(10) DEFAULT NULL,
  `ngay_danh_gia` varchar(255) DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `id` int(10) NOT NULL,
  `ten_chuc_vu` varchar(255) NOT NULL,
  `mo_ta` varchar(255) DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chuc_vu`
--

INSERT INTO `chuc_vu` (`id`, `ten_chuc_vu`, `mo_ta`, `trang_thai`) VALUES
(1, 'khách hàng', 'khách hàng', 0),
(2, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(10) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL,
  `mo_ta` varchar(255) DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_danh_muc`, `mo_ta`, `trang_thai`, `img`) VALUES
(1, 'Iphone', '', 0, 'logo-iphone.jpg'),
(2, 'Samsung', '', 0, 'logo=samsung.png'),
(3, 'Oppo', '', 0, 'logo-oppo.png'),
(4, 'Xiaomi', '', 0, 'logo-xiaomi.png'),
(5, 'vertu', 'w', 0, 'logo-vertu.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(10) NOT NULL,
  `id_nguoi_nhan` int(10) NOT NULL,
  `ten_nguoi_nhan` varchar(255) NOT NULL,
  `email_nguoi_nhan` varchar(255) NOT NULL,
  `sdt_nguoi_nhan` varchar(20) NOT NULL,
  `dia_chi_nguoi_nhan` varchar(255) NOT NULL,
  `ngay_dat_hang` varchar(255) NOT NULL,
  `id_khuyen_mai` varchar(255) DEFAULT NULL,
  `tong_tien` int(10) NOT NULL,
  `pt_thanh_toan` tinyint(1) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `id_nguoi_nhan`, `ten_nguoi_nhan`, `email_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`, `ngay_dat_hang`, `id_khuyen_mai`, `tong_tien`, `pt_thanh_toan`, `trang_thai`) VALUES
(7, 1, 'tạ thị khánh linh', 'tu@b.com', '0967725130', 'hưng yên', '06:57:44 27/11/2023', NULL, 2720, 0, 0),
(8, 1, 'tạ thị khánh linh', 'tu@b.com', '0967725130', 'hưng yên', '07:37:05 27/11/2023', NULL, 2560, 0, 0),
(9, 2, 'nguyen van tu', 'ntu25258@gmail.com', '0967725130', 'đan phượngg', '08:30:21 28/11/2023', NULL, 980, 1, 0),
(10, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '08:49:17 28/11/2023', NULL, 99, 1, 0),
(15, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '09:06:58 28/11/2023', NULL, 2300, 1, 0),
(16, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '09:10:33 28/11/2023', NULL, 260, 0, 2),
(17, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '09:21:35 28/11/2023', NULL, 150, 1, 0),
(18, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '09:24:51 28/11/2023', NULL, 3500, 1, 0),
(19, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '09:25:37 28/11/2023', NULL, 2500, 1, 0),
(20, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '09:26:37 28/11/2023', NULL, 2500, 1, 0),
(21, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '09:28:18 28/11/2023', NULL, 1800, 1, 0),
(22, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '09:35:33 28/11/2023', NULL, 3506, 1, 0),
(23, 6, 'Nguyễn Văn Tú', 'ntu25258@gmail.com', '0967725130', '29 ngõ 3 xóm chùa', '09:36:36 28/11/2023', NULL, 980, 1, 0),
(24, 1, 'tạ thị khánh linh', 'tu@b.com', '0967725130', 'hưng yên', '09:56:29 28/11/2023', NULL, 2500, 1, 0),
(25, 1, 'tạ thị khánh linh', 'tu@b.com', '0967725130', 'hưng yên', '10:36:21 28/11/2023', NULL, 900, 1, 0),
(26, 1, 'tạ thị khánh linh', 'tu@b.com', '0967725130', 'hưng yên', '10:37:21 28/11/2023', NULL, 3510, 1, 0),
(27, 2, 'nguyen van tu', 'ntu25258@gmail.com', '0967725130', 'đan phượngg', '06:33:31 29/11/2023', NULL, 3510, 1, 0),
(28, 2, 'nguyen van tu', 'ntu25258@gmail.com', '0967725130', 'đan phượngg', '06:34:59 29/11/2023', NULL, 0, 1, 0),
(29, 2, 'nguyen van tu', 'ntu25258@gmail.com', '0967725130', 'đan phượngg', '06:36:03 29/11/2023', NULL, 0, 1, 0),
(30, 2, 'nguyen van tu', 'ntu25258@gmail.com', '0967725130', 'đan phượngg', '2023-11-29 06:39:08', NULL, 180, 1, 0),
(31, 2, 'nguyen van tu', 'ntu25258@gmail.com', '0967725130', 'đan phượngg', '2023-11-29 12:41:18', NULL, 950, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `id` int(10) NOT NULL,
  `id_don_hang` int(10) NOT NULL,
  `id_san_pham` int(10) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `img_sp` varchar(255) NOT NULL,
  `gia_san_pham` int(10) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `thanh_tien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`id`, `id_don_hang`, `id_san_pham`, `ten_san_pham`, `img_sp`, `gia_san_pham`, `so_luong`, `thanh_tien`) VALUES
(2, 7, 15, '', '', 160, 1, 160),
(3, 7, 37, '', '', 2560, 1, 2560),
(4, 8, 37, '', '', 2560, 1, 2560),
(5, 9, 26, '', '', 980, 1, 980),
(6, 10, 22, '', '', 99, 1, 99),
(7, 11, 22, '', '', 99, 1, 99),
(8, 12, 22, '', '', 99, 1, 99),
(9, 13, 22, '', '', 99, 1, 99),
(10, 14, 22, '', '', 99, 1, 99),
(11, 14, 29, '', '', 700, 1, 700),
(12, 15, 36, '', '', 2300, 1, 2300),
(13, 16, 17, '', '', 130, 1, 130),
(14, 16, 17, '', '', 130, 1, 130),
(15, 17, 13, '', '', 150, 1, 150),
(16, 18, 5, '', '', 1000, 1, 1000),
(17, 18, 35, '', '', 2500, 1, 2500),
(18, 19, 32, '', '', 2500, 1, 2500),
(19, 20, 32, '', '', 2500, 1, 2500),
(20, 21, 34, '', '', 1800, 1, 1800),
(21, 22, 38, '', '', 3506, 1, 3506),
(22, 23, 7, '', '', 980, 1, 980),
(23, 24, 35, 'Điện Thoại IVertu 5G Da Bê Màu Xanh Hoàng Gia', 'ac.jpg', 2500, 1, 2500),
(24, 25, 4, 'Iphone 11 Pro Max', 'ip11promax.jpg', 900, 1, 900),
(25, 26, 37, 'Điện thoại Vertu Ti Black Leather', 'aq.jpg', 2560, 1, 2560),
(26, 26, 31, 'Samsung Galaxy S22 Mỹ (5G) 8GB 128GB cũ 99%', 'abab.png', 950, 1, 950),
(27, 27, 6, 'Iphone 13 Pro Max', 'ip13.png', 950, 1, 950),
(28, 27, 37, 'Điện thoại Vertu Ti Black Leather', 'aq.jpg', 2560, 1, 2560),
(29, 30, 14, 'Xiaomi 13 (5G) 12GB 256GB Box', 'xiaomi13.png', 180, 1, 180),
(30, 31, 31, 'Samsung Galaxy S22 Mỹ (5G) 8GB 128GB cũ 99%', 'abab.png', 950, 1, 950);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id` int(10) NOT NULL,
  `ten_khach_hang` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noi_dung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`id`, `ten_khach_hang`, `so_dien_thoai`, `email`, `noi_dung`) VALUES
(5, 'tú', '0967725130', 'ntu25258@gmail.com', 'xin chào mày !');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `gia` double(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `luot_xem` int(10) DEFAULT NULL,
  `id_danh_muc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_san_pham`, `gia`, `img`, `mo_ta`, `luot_xem`, `id_danh_muc`) VALUES
(1, 'Iphone 15 Promax', 1000.00, 'ip15.jpg', 'Không còn sử dụng khung nhôm, Apple thay thế bằng Titanium trên iPhone 15 Pro Max. Vật liệu sở hữu nhiều đặc tính về độ bền cũng khả năng tối ưu trọng lượng tuyệt vời. Thân máy dày hơn nhưng nhẹ hơn đáng kể so với iPhone 14 Pro Max  iPhone 15 Pro Max 1TB sẽ có 4 màu sắc gồm Black Titanium, White Titanium, Blue Titanium, Natural Titanium (gam màu mới). Màn hình viên thuốc với tùy biến tính năng Dynamic Island độc đáo mang đến định dạng hiển thị ấn tượng. Chuẩn kháng nước, bụi bẩn IP68 giúp máy bền bỉ hoạt động trong nhiều điều kiện khác nhau. ', 123, 1),
(4, 'Iphone 11 Pro Max', 900.00, 'ip11promax.jpg', 'Hiện tại tính tới thời điểm này trên thị trường đã không còn iPhone 11 Pro Max hàng chính hãng, mà thay vào đó là chỉ còn những dòng máy iPhone 11 Pro Max cũ với chất lượng, bảo hành và giá cả khác nhau tùy thuộc vào những nơi bán khác nhau. Mua iPhone 11 Pro Max cũ được Clickbuy cam kết như thế nào. Đây là những cam kết bằng những hình ảnh, giấy tờ được thể hiện trên website và tại các cửa hàng.', NULL, 1),
(5, 'Iphone 12 Pro Max', 1000.00, 'ip12promax.jpg', 'Hiện tại tính tới thời điểm này trên thị trường đã không còn iPhone 12 Pro Max hàng chính hãng, mà thay vào đó là chỉ còn những dòng máy iPhone 12 Pro Max cũ với chất lượng, bảo hành và giá cả khác nhau tùy thuộc vào những nơi bán khác nhau. Mua iPhone 12 Pro Max cũ được Clickbuy cam kết như thế nào. Đây là những cam kết bằng những hình ảnh, giấy tờ được thể hiện trên website và tại các cửa hàng.', 543, 1),
(6, 'Iphone 13 Pro Max', 950.00, 'ip13.png', 'Hiện tại tính tới thời điểm này trên thị trường đã không còn iPhone 13 Pro Max hàng chính hãng, mà thay vào đó là chỉ còn những dòng máy iPhone 13 Pro Max cũ với chất lượng, bảo hành và giá cả khác nhau tùy thuộc vào những nơi bán khác nhau. Mua iPhone 13 Pro Max 128G cũ được Clickbuy cam kết như thế nào. Đây là những cam kết bằng những hình ảnh, giấy tờ được thể hiện trên website và tại các cửa hàng.', NULL, 1),
(7, 'Iphone 14 Pro Max', 980.00, 'ip14.jpg', 'iPhone 14 Pro cũ đẹp 99% - Cam kết không zin tặng máy\r\n\r\nKhi mua iPhone 14 Pro cũ tại Clickbuy quý khách sẽ cam kết bằng những hình ảnh, giấy tờ được thể hiện trên website và tại các cửa hàng.', NULL, 1),
(8, 'Iphone XS Max', 700.00, 'ipxsmax.webp', 'iPhone Xs Max cũ đẹp 99% - Không zin tặng máy\r\n\r\nMua iPhone Xs Max cũ được Clickbuy cam kết như thế nào. Đây là những cam kết bằng những hình ảnh, giấy tờ được thể hiện trên website và tại các cửa hàng.', 32, 1),
(12, 'Xiaomi Redmi Note 12 (5G) 6GB 128GB Box', 100.00, 'xiaominote12.jpg', 'Redmi Note 12 - một siêu phẩm giá rẻ, sử dụng tấm nền Samsung GOLED độ nét cao, với độ tương phản 4500000:1, mang đến chất lượng hình ảnh siêu cao. Hỗ trợ ba mức cài đặt: 60Hz, 90Hz và 120Hz, mang lại tiện ích cho người dùng. Tốc độ cảm ứng lên đến 240Hz giúp trải nghiệm vuốt chạm mượt mà hơn. Đồng thời, màn hình này còn tích hợp chế độ bảo vệ mắt, mang\r\n', NULL, 4),
(13, 'Xiaomi Redmi Note 12 Pro (5G) 8GB 256GB Box', 150.00, 'xiaomi12pro.png', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', 332, 4),
(14, 'Xiaomi 13 (5G) 12GB 256GB Box', 180.00, 'xiaomi13.png', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', 88, 4),
(15, 'Xiaomi Redmi K60 (5G) 8GB 256GB Box', 160.00, 'Xiaomi Redmi K60 (5G) 8GB 256GB Box.webp', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', NULL, 4),
(16, 'Xiaomi Mi 10T Pro (5G) 8GB 256GB Chính Hãng', 170.00, 'Xiaomi Mi 10T Pro (5G) 8GB 256GB Chính Hãng.webp', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', 77, 4),
(17, 'Xiaomi Civi 3 12GB 256GB Box', 130.00, 'Xiaomi Civi 3 12GB 256GB Box.png', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', NULL, 4),
(18, 'Oppo Reno 10 (5G) 8GB 256GB Chính Hãng', 165.00, 'Oppo Reno 10 (5G) 8GB 256GB Chính Hãng.png', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', 89, 3),
(19, 'Oppo Reno 8T (4G) 8GB 256GB Chính Hãng', 155.00, 'Oppo Reno 8T (4G) 8GB 256GB Chính Hãng.webp', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', NULL, 3),
(20, 'Oppo Reno 10 Pro (5G) 12GB 256GB Chính Hãng', 167.00, 'Oppo Reno 10 Pro (5G) 12GB 256GB Chính Hãng.webp', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', 424, 3),
(21, 'OPPO Reno6 (5G) 6GB 128GB Chính hãng', 123.00, 'OPPO Reno6 (5G) 6GB 128GB Chính hãng.webp', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', NULL, 3),
(22, 'Oppo A57 4GB 128GB Chính Hãng', 99.00, 'Oppo A57 4GB 128GB Chính Hãng.png', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', 555, 3),
(23, 'Oppo A16K 4GB 64GB Chính hãng', 98.00, 'Oppo A16K 4GB 64GB Chính hãng.webp', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', NULL, 3),
(24, 'Oppo Reno 8Z (5G) 8GB 256GB Chính Hãng', 180.00, 'Oppo Reno 8Z (5G) 8GB 256GB Chính Hãng.webp', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', 676, 3),
(25, 'Samsung Galaxy Z Fold5 12GB 256GB Chính Hãng', 1202.00, 'Samsung Galaxy Z Fold5 12GB 256GB Chính Hãng.png', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', NULL, 2),
(26, 'Samsung Galaxy Z Fold4 Chính hãng cũ đẹp 99% ( Fullbox, còn Bảo hành dài)', 980.00, 'samsunggggg.webp', 'Samsung không để người hâm mộ thất vọng khi có cải tiến về diện tích hiển thị cũng như cảm giác cầm nắm Samsung Galaxy Z Fold4 so với Galaxy Z Fold3 mặc dù chúng sở hữu ngoại hình không quá chênh lệch.   Viền màn hình mỏng hơn kèm với trọng lượng giảm xuống chỉ còn 263g., bản lề cũng cho ra trải nghiệm gập mở vô cùng tối ưu.', NULL, 2),
(27, 'Samsung Galaxy S23 Ultra (5G) 8GB 256GB Chính Hãng', 900.00, 'Samsung Galaxy S23 Ultra (5G) 8GB 256GB Chính Hãng.jpg', 'Máy mới 100%.\r\n\r\nNguyên hộp, đầy đủ phụ kiện từ nhà sản xuất.\r\n\r\nPhụ kiện gồm: Cáp, sạc, ốp lưng, que lấy sim, sách hướng dẫn, phụ kiện bảo hành theo thời gian bao test.\r\n\r\nBảo hành 15 tháng.\r\n\r\nLỗi là đổi trong 15 ngày.', 43, 2),
(28, 'Samsung Galaxy S21 Ultra 5G 12GB|128GB Mỹ (2 Sim) cũ 99%', 950.00, 'aaaaa.png', 'Samsung S21 Ultra cũ 99% - Thị trường Mỹ - Giá rẻ nhất\r\n\r\nSamsung S21 Ultra là một trong những mẫu điện thoại cao cấp của Samsung với những tính năng vượt trội và thiết kế đẹp mắt. Tuy nhiên, việc sử dụng điện thoại mới là một chi phí khá lớn đối với nhiều người. Vì vậy, nhiều người đang tìm mua Samsung S21 Ultra cũ để tiết kiệm chi phí.', NULL, 2),
(29, 'Samsung Galaxy S21 Plus 5G 8GB|128GB Mỹ (2 Sim) cũ 99%', 700.00, 'aaa.webp', 'Samsung S21 Plus cũ 99% - Thị trường Mỹ - Giá rẻ nhất\r\n\r\nSamsung S21 Plus cũ bản Mỹ là một trong những flagship thuộc dòng Galaxy S21 được ra mắt trong năm 2021. Tương tự 2 những người anh em của mình, model mới mang trong mình nhiều nâng cấp mới mẻ, cùng mức giá hấp dẫn đã để lại ấn tượng tốt trong lòng người dùng.', NULL, 2),
(30, 'Samsung S20 Ultra 5G 12GB|128GB Mỹ (2 Sim) cũ 99%', 700.00, 'aaa.png', 'Đây là thị trường Mỹ, hình thức máy likenew, phiên bản 5G. Máy được trang bị con chip Snapdragon 865 của Qualcomm. GPU Adreno 650 giúp xử mọi đồ họa một cách mượt mà', NULL, 2),
(31, 'Samsung Galaxy S22 Mỹ (5G) 8GB 128GB cũ 99%', 950.00, 'abab.png', 'Flagship trong năm 2022 của Samsung gọi tên Galaxy S22. Bên cạnh thiết kế cao cấp quen thuộc, sản phẩm còn gây ấn tượng mạnh với nhiều sự cải tiến liên quan đến cấu hình vượt trội hơn hẳn thế hệ S cũ', NULL, 2),
(32, 'Vertu Singature S Lưng Đá vỏ chế tác', 2500.00, 'a1.jpg', 'Vertu Singature S Lưng Đá vỏ chế tác là một trong những mẫu Vertu Cao Cấp có mức giá tốt nhất trên thị trường hiện nay. Vertu Singature S Lưng Đá vỏ chế tác hiện đang được phân phối tại Vertu Việt Nam với mức giá tốt nhất thị trường.', NULL, 5),
(33, ' Điện Thoại Vertu Aster T Like new chính hãng', 1200.00, 'a2.jpg', 'Điện Thoại Vertu Aster T Like new chính hãng là chiếc Smartphone được đánh giá là đẹp của Vertu bởi thiết kế khá đơn giản. Phong cách thiết kế...', NULL, 5),
(34, 'Điện thoại Vertu Constellation X 2 Sim Like New 99% Đủ Màu', 1800.00, 'a3.jpg', 'Vertu là hãng điện thoại nằm ở phân khúc siêu sang nên tất nhiên nó sẽ không ra mắt máy theo phong cách “gà đẻ” liên tục như nhiều hãng khác. Cho đến nay thì Vertu Constellation X dù được giới thiệu từ đầu năm 2017 nhưng vẫn đang là smartphone mới nhất của Vertu. Tất nhiên với một chiếc điện thoại như Vertu Constellation X thì không có khái niệm nào gọi là lỗi thời.', NULL, 5),
(35, 'Điện Thoại IVertu 5G Da Bê Màu Xanh Hoàng Gia', 2500.00, 'ac.jpg', 'Điện Thoại IVertu 5G IVertu 5G Da Bê Màu Xanh Hoàng Gia Likenew 99%được chế tác từ những vật liệu cao cấp nhất để làm nên những...', NULL, 5),
(36, 'Điện thoại METAVERTU Basic Carbon Fiber likewnew 99%', 2300.00, 'ax.jpg', 'Điện thoại METAVERTU Basic Carbon Fiber là sản phẩm mới nhất...', NULL, 5),
(37, 'Điện thoại Vertu Ti Black Leather', 2560.00, 'aq.jpg', '\r\nĐiện thoại Vertu Signature Touch 1 cánh chính hãng ( đủ màu)', NULL, 5),
(38, 'Điện thoại Vertu Aster P Full Gold Vàng nguyên khối like new 99%', 3506.00, 'ad.png', 'Điện thoại Vertu Aster P Full Gold – Đẳng cấp nhất dòng Aster P Vertu Aster P Gold Full Gold  là chiếc điện thoại đẳng cấp ĐƯỢC CHẾ TÁC VỚI...', NULL, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(10) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `ngay_sinh` varchar(255) DEFAULT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `chuc_vu` tinyint(1) NOT NULL DEFAULT 1,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten_dang_nhap`, `mat_khau`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `email`, `dia_chi`, `chuc_vu`, `trang_thai`) VALUES
(1, 'admin', '123', 'tạ thị khánh linh', '10/01/2004', '0967725130', 'tu@b.com', 'hưng yên', 2, 0),
(2, 'tu', '123', 'nguyen van tu', '09/08/2004', '0967725130', 'ntu25258@gmail.com', 'đan phượngg', 1, 0),
(6, 'tu123', '12345678', 'Nguyễn Văn Tú', '2004-08-09', '0967725130', 'ntu25258@gmail.com', '29 ngõ 3 xóm chùa', 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
