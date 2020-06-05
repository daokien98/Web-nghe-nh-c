-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 04:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(5) NOT NULL,
  `tenalbum` varchar(50) CHARACTER SET utf8 NOT NULL,
  `duongdan` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tencasi` varchar(20) CHARACTER SET utf8 NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nhac` varchar(20) NOT NULL,
  `loinhac` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `tenalbum`, `duongdan`, `tencasi`, `theloai`, `nhac`, `loinhac`) VALUES
(1, 'Áo Hoa', 'images/AoHoa.jpg', 'Trung Quang', 'Bolero', 'music/AoHoa.mp3', ''),
(2, 'Bao Nhiêu Cách Để Quên', 'images/BaoNhieuCachDeQuen.jpg', 'Nguyễn Phi Hùng', '', '', ''),
(3, 'Bay Cùng Thời Gian', 'images/BayCungThoiGian.jpg', 'Khương Hùng', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `id` int(5) NOT NULL,
  `tenbaihat` varchar(50) CHARACTER SET utf8 NOT NULL,
  `casi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `duongdan` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`id`, `tenbaihat`, `casi`, `theloai`, `duongdan`) VALUES
(1, 'I Do', '911', 'Nhạc Nước Ngoài', 'src/Nhac/IDo.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `baihatmoi`
--

CREATE TABLE `baihatmoi` (
  `id` int(5) NOT NULL,
  `tenbaihat` varchar(50) CHARACTER SET utf8 NOT NULL,
  `duongdan` varchar(100) NOT NULL,
  `tencasi` varchar(20) CHARACTER SET utf32 NOT NULL,
  `nhac` varchar(50) NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `loinhac` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baihatmoi`
--

INSERT INTO `baihatmoi` (`id`, `tenbaihat`, `duongdan`, `tencasi`, `nhac`, `theloai`, `loinhac`) VALUES
(1, 'Anh Ơi Ở Lại', 'images/chipu.jpg', 'Chi Pu', ' music/AnhOiOLai.mp3', 'Nhạc Ballad', ''),
(2, 'Chân Ái', 'images/chanai.jpg', 'Orange', '', '', ''),
(3, 'Anh Thanh Niên', 'images/anhthanhnien.jpg', 'HuyR', ' music/AnhThanhNien.mp3', 'Nhạc Trẻ', ''),
(4, 'Thuận Theo Ý Trời', 'images/thuantheoytroi.jpg', 'Bùi Anh Tuấn', 'music/ThuanTheoYTroi.mp3', 'Nhạc Ballad', ''),
(5, 'Let Me Go', 'images/lemego.jpg', 'Han Sara', '', '', ''),
(6, 'Tomorrow', 'images/tomorrow.jpg', 'Vũ Cát Tường', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(5) NOT NULL,
  `duongdan` varchar(100) NOT NULL,
  `tenbaihat` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tencasi` varchar(30) CHARACTER SET utf8 NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nhac` varchar(50) NOT NULL,
  `loinhac` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `duongdan`, `tenbaihat`, `tencasi`, `theloai`, `nhac`, `loinhac`) VALUES
(1, 'images/anh2.jpg', 'Sao Em Nỡ Vội Lấy Chồng', 'Trung Quang', 'Bolero', 'music/SaoEmNoVoiLayChong.mp3', '<p>Chưa có lời nhạc</p>'),
(2, 'images/anh3.jpg', 'Ông Trời Để Lạc Em Ở Đây', 'Trọng Hiếu', 'Nhạc Pop', 'music/OngTroiDeLacEmODay.mp3', '<p>Chưa có lời nhạc</p>'),
(3, 'images/anh1.jpg', 'Chú Rể Không Là Anh', 'Đan Trường', 'Nhạc Trẻ', 'music/ChuReKhongLaAnh.mp3', '<p>Chưa có lời nhạc</p>');

-- --------------------------------------------------------

--
-- Table structure for table `bxhbaihatvn`
--

CREATE TABLE `bxhbaihatvn` (
  `id` int(11) NOT NULL,
  `tenbaihat` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tencasi` varchar(20) CHARACTER SET utf8 NOT NULL,
  `nhac` varchar(50) NOT NULL,
  `loinhac` text CHARACTER SET utf8 NOT NULL,
  `theloai` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bxhbaihatvn`
--

INSERT INTO `bxhbaihatvn` (`id`, `tenbaihat`, `tencasi`, `nhac`, `loinhac`, `theloai`) VALUES
(1, 'Chân Ái', 'Orange', 'music/ChanAi.mp3', '<p>Chorus :</p>\r\n\r\n<p>H&igrave;nh như em yếu đuối , cần một người</p>\r\n\r\n<p>Dang đ&ocirc;i tay n&oacute;i &quot;c&oacute; anh đ&acirc;y rồi &quot;</p>\r\n\r\n<p>H&igrave;nh như em trống vắng , sợ một m&igrave;nh</p>\r\n\r\n<p>Sao anh kh&ocirc;ng mau n&oacute;i c&acirc;u tỏ t&igrave;nh</p>\r\n\r\n<p>uuuuuuuuuuuuuuu</p>\r\n\r\n<p>uuuuuuuuuuuuuuu</p>\r\n\r\n<p>uuuuuuuuuuuuuuu</p>\r\n\r\n<p>Y&ecirc;u em l&agrave; ch&acirc;n &aacute;i</p>\r\n\r\n<p>uuuuuuuuuuuuuuu</p>\r\n\r\n<p>uuuuuuuuuuuuuuu</p>\r\n\r\n<p>uuuuuuuuuuuuuuu</p>\r\n\r\n<p>N&ecirc;n anh chớ ngần ngại</p>\r\n\r\n<p>Rap vers :</p>\r\n\r\n<p>1 st verse:</p>\r\n\r\n<p>Y&ecirc;u em như một th&oacute;i quen thi vị</p>\r\n\r\n<p>Y&ecirc;u em v&igrave; anh chỉ muốn cho đi</p>\r\n\r\n<p>Y&ecirc;u em mọi người đều &quot;ồ c&oacute; l&iacute;&quot;</p>\r\n\r\n<p>Y&ecirc;u em cũng dễ th&ocirc;i m&agrave; n&agrave;o đ&acirc;u kh&oacute; g&igrave;?</p>\r\n\r\n<p>Y&ecirc;u em để nhắc nhở m&igrave;nh từng vỡ tan</p>\r\n\r\n<p>Y&ecirc;u em tưởng nhớ v&agrave;i cuộc t&igrave;nh dở dang ????</p>\r\n\r\n<p>Y&ecirc;u em như thể đ&acirc;y l&agrave; giấc mơ v&agrave;ng</p>\r\n\r\n<p>Y&ecirc;u em tới nỗi... buồn anh cũng đem ra mở b&aacute;n ????</p>\r\n\r\n<p>Anh biết tấm duy&ecirc;n t&igrave;nh vẫn thường vỡ đ&ocirc;i</p>\r\n\r\n<p>V&agrave;i chuyện c&ograve;n cần gỡ rối</p>\r\n\r\n<p>V&agrave;i điều ch&acirc;n th&agrave;nh kh&ocirc;ng may lỡ thời</p>\r\n\r\n<p>N&ecirc;n việc gặp em chắc chỉ l&agrave; mơ th&ocirc;i</p>\r\n\r\n<p>V&igrave; anh tầm t&atilde; trong cơn mưa k&iacute; ức</p>\r\n\r\n<p>Sợ lại đ&acirc;u v&agrave;o đấy v&agrave;o một ng&agrave;y cũng phai ph&ocirc;i</p>\r\n\r\n<p>Cho niềm đau l&agrave; điều y&ecirc;u qu&yacute; nhất</p>\r\n\r\n<p>N&ecirc;n cơ hội c&oacute; tới vẫn băn khoăn kh&ocirc;ng nỡ đổi, em ơi!</p>\r\n', 'Nhạc Pop'),
(2, 'Forever', 'Mariah Carey', 'music/Forever.mp3', '<p>Those days of love are gone<br />\r\nOur time is through<br />\r\nStill I burn on and on<br />\r\nAll of my life<br />\r\nOnly for you</p>\r\n\r\n<p>From now<br />\r\nUntil forever<br />\r\nAnd ever my darling<br />\r\nForever</p>\r\n\r\n<p>You will always be the only one<br />\r\nYou will always be the only one</p>\r\n\r\n<p>As long as I shall live<br />\r\nI&#39;ll hold you dear<br />\r\nAnd I will reminisce<br />\r\nOf our love all through the years</p>\r\n\r\n<p>From now<br />\r\nUntil forever<br />\r\nAnd ever my darling<br />\r\nForever</p>\r\n\r\n<p>You will always be the only one<br />\r\nYou will always be the only one</p>\r\n\r\n<p>If you should ever need me<br />\r\nUnfailingly, I will return to your arms<br />\r\nAnd unburden your heart<br />\r\nAnd if you should remember<br />\r\nThat we belong together<br />\r\nNever be ashamed<br />\r\nCall my name<br />\r\nTell me I&#39;m the one you treasure</p>\r\n\r\n<p>Forever<br />\r\nAnd ever, my darling<br />\r\nForever<br />\r\nYou&hellip;</p>\r\n', 'Nhạc Nước Ngoài'),
(3, 'Hơn Cả Yêu', 'Đức Phúc', 'music/HonCaYeu.mp3', '<p>Em hay hỏi anh<br />\r\nRằng anh y&ecirc;u em nhiều kh&ocirc;ng?<br />\r\nAnh kh&ocirc;ng biết phải n&oacute;i thế n&agrave;o<br />\r\nĐể đ&uacute;ng với cảm x&uacute;c trong anh<br />\r\nKhi anh nh&igrave;n em<br />\r\nL&agrave; anh thấy cuộc đời em<br />\r\nL&agrave; qu&aacute; khứ v&agrave; cả tương lai<br />\r\nL&agrave; hiện tại kh&ocirc;ng bao giờ phai</p>\r\n\r\n<p>T&igrave;nh y&ecirc;u trong anh vẫn lu&ocirc;n thầm lặng<br />\r\nNhưng kh&ocirc;ng c&oacute; nghĩa kh&ocirc;ng rộng lớn<br />\r\nChỉ l&agrave; anh đ&ocirc;i khi kh&oacute; n&oacute;i n&ecirc;n lời<br />\r\nMong em h&atilde;y cảm nhận th&ocirc;i<br />\r\nCao hơn cả n&uacute;i d&agrave;i hơn cả s&ocirc;ng<br />\r\nRộng hơn cả đất xanh hơn cả trời<br />\r\nAnh y&ecirc;u em anh y&ecirc;u em nhiều thế th&ocirc;i</p>\r\n\r\n<p>Vượt qua ngọn gi&oacute; vượt qua đại dương<br />\r\nVượt qua cả &aacute;ng m&acirc;y thi&ecirc;n đường<br />\r\nDẫu c&oacute; n&oacute;i bao nhi&ecirc;u<br />\r\nCảm gi&aacute;c trong anh b&acirc;y giờ c&oacute; lẽ hơn cả y&ecirc;u</p>\r\n\r\n<p><strong>[ Đoạn 2 ]</strong>&nbsp;Lời 2 của b&agrave;i h&aacute;t<br />\r\nAnh vẫn c&ograve;n nhớ lần đầu ti&ecirc;n ta gặp nhau<br />\r\nChẳng biết trước lần đ&oacute; sẽ l&agrave;<br />\r\nLần cuối anh y&ecirc;u một ai tr&ecirc;n đời<br />\r\nAnh kh&ocirc;ng c&ograve;n mơ gặp v&agrave; y&ecirc;u ai được nữa<br />\r\nGiờ anh đ&atilde; c&oacute; em đ&acirc;y rồi<br />\r\nC&ugrave;ng em đi hết qu&atilde;ng đường đời</p>\r\n\r\n<p>T&igrave;nh y&ecirc;u trong anh vẫn lu&ocirc;n thầm lặng<br />\r\nNhưng kh&ocirc;ng c&oacute; nghĩa kh&ocirc;ng rộng lớn<br />\r\nChỉ l&agrave; anh đ&ocirc;i khi kh&oacute; n&oacute;i n&ecirc;n lời<br />\r\nMong em h&atilde;y cảm nhận th&ocirc;i<br />\r\nCao hơn cả n&uacute;i d&agrave;i hơn cả s&ocirc;ng<br />\r\nRộng hơn cả đất xanh hơn cả trời<br />\r\nAnh y&ecirc;u em anh y&ecirc;u em nhiều thế th&ocirc;i</p>\r\n\r\n<p>Vượt qua ngọn gi&oacute; vượt qua đại dương<br />\r\nVượt qua cả &aacute;ng m&acirc;y thi&ecirc;n đường<br />\r\nDẫu c&oacute; n&oacute;i bao nhi&ecirc;u<br />\r\nCảm gi&aacute;c trong anh b&acirc;y giờ c&oacute; lẽ hơn cả y&ecirc;u</p>\r\n\r\n<p>Cao hơn cả n&uacute;i d&agrave;i hơn cả s&ocirc;ng<br />\r\nRộng hơn cả đất xanh hơn cả trời<br />\r\nAnh y&ecirc;u em anh y&ecirc;u em nhiều thế th&ocirc;i<br />\r\nVượt qua ngọn gi&oacute; vượt qua đại dương<br />\r\nVượt qua cả &aacute;ng m&acirc;y thi&ecirc;n đường<br />\r\nDẫu c&oacute; n&oacute;i bao nhi&ecirc;u<br />\r\nCảm gi&aacute;c trong anh b&acirc;y giờ c&oacute; lẽ hơn cả y&ecirc;u</p>\r\n', 'Nhạc Ballad'),
(4, 'Anh Đang Ở Đâu Đấy Anh', 'Hương Giang Idol', ' music/AnhDangODauDayAnh.mp3', '<p><strong>Verse 1:</strong><br />\r\nEm, anh, c&ocirc; ta, chuyện ch&uacute;ng m&igrave;nh<br />\r\nGiờ đ&acirc;y phải l&agrave;m sao y&ecirc;n vui như ban đầu<br />\r\nNhớ, đau, c&ograve;n người vui nơi kh&aacute;c<br />\r\nHỏi phải chăng người ta chẳng đếm được ra m&igrave;nh l&agrave; người thứ ba</p>\r\n\r\n<p><strong>ĐK:</strong><br />\r\nAnh đang ở đ&acirc;u đấy anh<br />\r\nC&oacute; hay về em n&agrave;y<br />\r\nAnh chắc đang bận với nơi c&oacute; tiếng y&ecirc;u mới<br />\r\nN&ecirc;n anh đ&acirc;u n&agrave;o để &yacute;</p>\r\n\r\n<p>Anh đang ở đ&acirc;u, c&oacute; trở về kh&ocirc;ng<br />\r\nHay lạc nhau đến mu&ocirc;n đời<br />\r\nNg&agrave;y nh&igrave;n anh ra đi<br />\r\nMưa ngo&agrave;i trời trắng x&oacute;a như nỗi buồn trong em</p>\r\n\r\n<p><strong>Verse 2:</strong><br />\r\nĐếm, mong, con tim sao yếu mềm<br />\r\nV&igrave; anh đ&atilde; vội qu&ecirc;n y&ecirc;u thương l&uacute;c ban đầu<br />\r\nMắt, m&ocirc;i, chuyện buồn em che giấu<br />\r\nThấy nhưng em lờ đi, chẳng n&oacute;i một c&acirc;u đ&acirc;u phải chẳng biết được</p>\r\n\r\n<p><strong>ĐK:</strong><br />\r\nAnh đang ở đ&acirc;u đấy anh<br />\r\nC&oacute; hay về em n&agrave;y<br />\r\nAnh chắc đang bận với nơi c&oacute; tiếng y&ecirc;u mới<br />\r\nN&ecirc;n anh đ&acirc;u n&agrave;o để &yacute;</p>\r\n\r\n<p>Anh đang ở đ&acirc;u, c&oacute; trở về kh&ocirc;ng<br />\r\nHay lạc nhau đến mu&ocirc;n đời<br />\r\nNg&agrave;y nh&igrave;n anh ra đi<br />\r\nMưa ngo&agrave;i trời trắng x&oacute;a như nỗi buồn trong em</p>\r\n\r\n<p><strong>Bridge:</strong><br />\r\nAnh đang ở nơi rất xa<br />\r\nChắc chẳng thể quay về<br />\r\nEm vẫn chờ anh<br />\r\nSao chẳng c&oacute; điều k&igrave; t&iacute;ch</p>\r\n\r\n<p>Anh đang ở đ&acirc;u đấy anh<br />\r\nC&oacute; hay về em n&agrave;y<br />\r\nAnh chắc đang bận với nơi c&oacute; tiếng y&ecirc;u mới<br />\r\nN&ecirc;n, n&ecirc;n anh sẽ chẳng về nữa</p>\r\n\r\n<p>Anh đang ở đ&acirc;u, anh đang ở đ&acirc;u<br />\r\nTa lạc nhau đến mu&ocirc;n đời rồi<br />\r\nNg&agrave;y nh&igrave;n anh ra đi<br />\r\nMưa ngo&agrave;i trời trắng x&oacute;a như nỗi buồn trong em</p>\r\n', 'Nhạc Ballad'),
(5, 'Rời Bỏ', 'Hòa Minzy', 'music/RoiBo.mp3', '<p>Hết h&ocirc;m nay, l&agrave; em đi khỏi nơi đ&acirc;y<br />\r\n<br />\r\nAnh sẽ kh&ocirc;ng, phải nh&igrave;n thấy em nữa đ&acirc;u<br />\r\n<br />\r\nKhoảnh khắc đắm ch&igrave;m v&agrave;o nụ cười ấy<br />\r\n<br />\r\nL&agrave; điều cuối c&ugrave;ng em c&ograve;n lưu lại cho đến khi<br />\r\n<br />\r\nM&igrave;nh c&oacute; thể qu&ecirc;n hết đi<br />\r\n<br />\r\nV&igrave; em kh&ocirc;ng muốn trở th&agrave;nh một người<br />\r\n<br />\r\nKhiến anh cứ gợn nhớ thương<br />\r\n<br />\r\nKhi em chỉ l&agrave; tho&aacute;ng qua như m&acirc;y cuối trời<br />\r\n<br />\r\nV&agrave; em tự biết rằng m&igrave;nh l&agrave; ai<br />\r\nC&oacute; tư c&aacute;ch g&igrave; để mong<br />\r\n<br />\r\nT&igrave;nh cảm từ một tr&aacute;i tim đang y&ecirc;u một người kh&aacute;c<br />\r\n<br />\r\nChỉ v&igrave; em y&ecirc;u v&agrave; vui buồn v&ocirc; cớ<br />\r\n<br />\r\nN&ecirc;n kh&ocirc;ng bao giờ c&oacute; quyền n&oacute;i hết những g&igrave; để giữ ch&acirc;n ai đừng vội đi<br />\r\n<br />\r\nV&igrave; y&ecirc;u l&agrave; cho v&agrave; chấp nhận mất hết<br />\r\n<br />\r\nDẫu kh&ocirc;ng bao giờ anh được biết<br />\r\n<br />\r\nH&atilde;y đi đi<br />\r\n<br />\r\nVề với người anh y&ecirc;u đi ... !</p>\r\n', 'Nhạc Ballad');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `createdate` datetime NOT NULL,
  `is_block` tinyint(4) NOT NULL DEFAULT 0,
  `permision` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `email`, `fullname`, `createdate`, `is_block`, `permision`) VALUES
(1, 'kien2', '1', 'kien@gmail.com', 'Kiên Đào', '2020-04-26 21:59:14', 0, 0),
(7, 'hoat', '1', 'hoat@gmail.com', 'Minh Hoạt', '2020-04-26 22:05:18', 0, 0),
(9, 'kien', '1', 'daodung2', 'Kiên Đào', '2020-05-18 20:44:07', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `musicvideo`
--

CREATE TABLE `musicvideo` (
  `id` int(5) NOT NULL,
  `duongdan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musicvideo`
--

INSERT INTO `musicvideo` (`id`, `duongdan`) VALUES
(1, 'videos/Nothing.mp4'),
(2, 'videos/OnlyLove2.mp4'),
(3, 'videos/UntilYou.mp4'),
(4, 'videos/LoveToBeLovedByYou.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `nghesi`
--

CREATE TABLE `nghesi` (
  `id` int(5) NOT NULL,
  `tennghesi` varchar(20) CHARACTER SET utf8 NOT NULL,
  `anh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nghesi`
--

INSERT INTO `nghesi` (`id`, `tennghesi`, `anh`) VALUES
(1, 'Hương Giang', 'images/huonggiang.jpg'),
(2, 'Bích Phương', 'images/bichphuong.jpg'),
(3, 'Khởi My', 'images/khoimy.jpg'),
(4, 'Hòa Minzy', 'images/hoa.jpg'),
(5, 'Sơn Tùng MTP', 'images/sontung.jpg'),
(6, 'Issacc', 'images/issac.jpg'),
(7, 'Erik', 'images/erik.jpg'),
(8, 'Đức Phúc', 'images/ducphuc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(5) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `duongdan` varchar(100) NOT NULL,
  `casi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `ten`, `duongdan`, `casi`) VALUES
(1, 'Beautiful In White', 'videos/BeautifulInWhite.mp4', 'West Life'),
(2, 'Because You Live', 'videos/BecauseYouLive.mp4', 'Jesse Mccartney'),
(3, 'I Will Show You', 'videos/IWillShowYou.mp4', 'Ailee');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_public` tinyint(4) DEFAULT 0,
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `is_public`, `createdate`, `updatedate`) VALUES
(3, 'Top 3 ca sỹ mới ', '1. Đào Trung Kiên', 0, 1, '2020-05-01 21:45:02', '2020-05-01 21:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `thebest`
--

CREATE TABLE `thebest` (
  `id` int(5) NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 NOT NULL,
  `duongdan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thebest`
--

INSERT INTO `thebest` (`id`, `ten`, `duongdan`) VALUES
(1, 'The Best Of All', 'images/best1.jpg'),
(2, 'The Best Of Cover', 'images/best2.jpg'),
(3, 'The Best Of Vpop', 'images/best3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `hoten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_password`, `hoten`) VALUES
(2, 'kien@gmail.com', 'kiendao', '$2y$10$M/5.fZN./UX8qabNSdkW/O1DmwP9IU3NXJHHAzohfk58KSl.xjTxi', 'Đào Kiên'),
(4, 'admin@gmail.com', 'admin', '123456', 'Đào Kiên'),
(9, 'fsaufis@gmail.com', 'tét', 'fafa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baihatmoi`
--
ALTER TABLE `baihatmoi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bxhbaihatvn`
--
ALTER TABLE `bxhbaihatvn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `musicvideo`
--
ALTER TABLE `musicvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nghesi`
--
ALTER TABLE `nghesi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thebest`
--
ALTER TABLE `thebest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `baihat`
--
ALTER TABLE `baihat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `baihatmoi`
--
ALTER TABLE `baihatmoi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bxhbaihatvn`
--
ALTER TABLE `bxhbaihatvn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `musicvideo`
--
ALTER TABLE `musicvideo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nghesi`
--
ALTER TABLE `nghesi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thebest`
--
ALTER TABLE `thebest`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
