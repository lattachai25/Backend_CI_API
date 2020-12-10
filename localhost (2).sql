-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2020 at 10:05 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpk`
--
CREATE DATABASE IF NOT EXISTS `mpk` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mpk`;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `img_top` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `img_people` varchar(250) NOT NULL,
  `people_name` varchar(250) NOT NULL,
  `people_detel` text NOT NULL,
  `img_center_left` varchar(250) NOT NULL,
  `content_center_left` text NOT NULL,
  `img_center_right` varchar(250) NOT NULL,
  `content_center_right` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `img_top`, `content`, `img_people`, `people_name`, `people_detel`, `img_center_left`, `content_center_left`, `img_center_right`, `content_center_right`, `status`) VALUES
(1, '4b61d-bg_03_1.png', '<div>\n	เราคือศุนย์นำเข้าและจำหน่ายอุปกรณ์แต่งรถมอเตอร์ไซต์</div>\n<div>\n	SUPERBIKE อย่างเป็นทางการ ทั้งปลีกและส่งจากหลากหลาย</div>\n<div>\n	แบรนด์ชั้นนำทั่วโลก สำหรับรถ DUCATI, BMW, TRIUMPH, &nbsp;</div>\n<div>\n	HONDA, KAWASAKI, SUZUKI และอื่นๆ รวมถึงการให้บริการ\n	<div>\n		ดูแลรถแบบ ONE STOP SERVICE</div>\n</div>\n', '508ce-img-man.png', 'คุณอาทิตย์ มนัสภากร', '<p>\n	หรือในวงการ SUPERBIKE เรียกกันว่า <span> &quot;พี่โจ๊ก MPK&quot; </span><br />\n	ผู้ก่อตั้งบริษัท MPKCONCEPT ตั้งแต่ปี 2005<br />\n	ด้วยความชื่นชอบและหลงใหลในเสน่ห์ ของรถ<br />\n	SUPERBIKE มาตั้งแต่เด็ก พร้อมคติที่ว่า<br />\n	&ldquo;MPK CONCEPT ไม่ใช่แค่ธุรกิจ แต่เป็นที่ที่ทำให้<br />\n	คนซึ่งหลงใหล ในสิ่งเดียวกันมาเจอกัน&rdquo;</p>\n', 'c5003-bg_03_1.png', '<div>\n	ด้วยความตั้งใจที่อยากให้ทุกคนได้ใช้สินค้า</div>\n<div>\n	ของแท้ที่มีคุณภาพ และได้รับข้อมูลเกี่ยวกับ</div>\n<div>\n	การแต่งรถที่ถูกต้อง เราจึงได้ทดลองสินค้า</div>\n<div>\n	ใหม่ๆ โดยการประกอบเข้ากับตัวรถและศึกษา</div>\n<div>\n	รายละเอียดข้อดีข้อเสียของสินค้าเพื่อที่จะ</div>\n<div>\n	สามารถแนะนำสินค้าให้ลูกค้าได้อย่างรู้จริงง</div>\n', '5711b-bg_03_1.png', '<div>\n	มากกว่านั้นคือเราจะไม่หยุดพัฒนา</div>\n<div>\n	เพื่อยกระดับคุณภาพการให้บริการให้ดียิ่งขึ้น</div>\n<div>\n	&quot;เพราะการสร้างประสบการณ์ที่ดี</div>\n<div>\n	สำหรับคุณ สำคัญสำหรับเรา&quot;</div>\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brand_category`
--

CREATE TABLE `brand_category` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(10) NOT NULL,
  `name_color` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name_color`) VALUES
(1, 'READ');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `map_url` varchar(255) NOT NULL,
  `content_link` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_product` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img_product`, `status`) VALUES
(1, '4f865-head.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_img_head`
--

CREATE TABLE `gallery_img_head` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_img_head`
--

INSERT INTO `gallery_img_head` (`id`, `img`, `status`) VALUES
(1, '734f6-head.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_img_logo`
--

CREATE TABLE `gallery_img_logo` (
  `id` int(11) NOT NULL,
  `img_logo` varchar(250) NOT NULL,
  `name_brand` varchar(250) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_img_logo`
--

INSERT INTO `gallery_img_logo` (`id`, `img_logo`, `name_brand`, `status`) VALUES
(8, 'ccb7c-bmw.png', 'BMW', '1'),
(9, '2b600-ducati.png', 'Ducati', '1'),
(10, '844ce-honda.png', 'Honda', '1'),
(11, '3be13-kawasaki.png', 'Kawasaki', '1'),
(12, '44379-norton.png', 'Norton', '1'),
(13, '52c8e-suzuki.png', 'Suzuki', '1');

-- --------------------------------------------------------

--
-- Table structure for table `homebike`
--

CREATE TABLE `homebike` (
  `id` int(11) NOT NULL,
  `img_logo` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `homeplaylist`
--

CREATE TABLE `homeplaylist` (
  `id` int(11) NOT NULL,
  `link_vdo` varchar(255) NOT NULL,
  `img_bg` text NOT NULL,
  `text` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `homeslide`
--

CREATE TABLE `homeslide` (
  `id` int(11) NOT NULL,
  `img_slide` text NOT NULL,
  `content` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homeslide`
--

INSERT INTO `homeslide` (`id`, `img_slide`, `content`, `status`) VALUES
(1, '7a789-slidebanner.jpg', '<p>\n	The Ultimate Race</p>\n', '1'),
(2, 'b5ece-slidebanner.jpg', '<p>\n	The Ultimate Race 2</p>\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `id` int(10) NOT NULL,
  `Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`id`, `Name`) VALUES
(1, 'Brake System'),
(2, 'Engine & Clutch'),
(3, 'Exhaust'),
(4, 'Fluid Tank'),
(5, 'Grips & Handlebar'),
(6, 'Indicator Light'),
(7, 'Maintenance & Care'),
(8, 'Mirrors'),
(9, 'Other'),
(10, 'Parts & Accessories'),
(11, 'Protection'),
(12, 'Steering & Suspension'),
(13, 'Transmission'),
(14, 'Wheel');

-- --------------------------------------------------------

--
-- Table structure for table `model_category`
--

CREATE TABLE `model_category` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model_category`
--

INSERT INTO `model_category` (`id`, `name`) VALUES
(1, 'C 650 SPORT GT'),
(2, 'R 1200 1250 GS'),
(3, 'R NINE T'),
(4, 'S 1000 R'),
(5, 'S 1000 RR 2015-2018'),
(6, 'S 1000 RR 2020'),
(7, 'S 1000 XR');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_show` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_show`, `img`, `detail`, `title`, `datetime`, `status`) VALUES
(1, 'ทำไมต้องใส่กันล้ม?', '90456-news1.jpg', '', '', '0000-00-00 00:00:00', '1'),
(2, 'ระยะเวลาการใช้งานของแบตเตอรี่', '02832-news2.jpg', '', '', '0000-00-00 00:00:00', '1'),
(3, 'กันล้มมีกี่ส่วน มีประโยชน์อะไรบ้าง?', '75655-news3.jpg', '', '', '0000-00-00 00:00:00', ''),
(4, 'การดูแลรักษาแบตเตอรี่', 'bf9ee-news4.jpg', '', '', '0000-00-00 00:00:00', ''),
(5, 'เลือกกันล้มแบบไหนดี?', 'a9b1b-news5.jpg', '', '', '0000-00-00 00:00:00', ''),
(6, 'ปลายแฮนด์ช่วยลดอาการมือชา', '2a766-news6.jpg', '', '', '0000-00-00 00:00:00', ''),
(7, 'อาการมือชาขณะขับมอเตอร์ไซค์ เกิดขึ้นได้อย่างไร?', '616c0-news7.jpg', '', '', '0000-00-00 00:00:00', ''),
(8, 'ปลายแฮนด์มีแบบไหนบ้าง?', '46179-news8.jpg', '', '', '0000-00-00 00:00:00', ''),
(9, 'เลือกยี่ห้อกันล้ม?', '6ae31-news9.jpg', '', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `Image_product1` varchar(250) NOT NULL,
  `Image_product2` varchar(250) NOT NULL,
  `Image_product3` varchar(250) NOT NULL,
  `Image_product4` varchar(250) NOT NULL,
  `Prict` varchar(250) NOT NULL,
  `Discount` varchar(250) NOT NULL,
  `Brand` varchar(250) NOT NULL,
  `Detail` text NOT NULL,
  `name_color` varchar(250) NOT NULL,
  `Size_product` varchar(250) NOT NULL,
  `Year` varchar(250) NOT NULL,
  `Main_Category` date NOT NULL,
  `Sub_category` date NOT NULL,
  `Type` int(200) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) NOT NULL,
  `id_brand_category` int(11) NOT NULL,
  `id_model_category` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `id_brand_category`, `id_model_category`, `name`, `description`, `date`, `status`) VALUES
(1, 8, 6, '6729e-1.png', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; background-color: rgb(255, 255, 255);\">\n	Lorem Ipsum คืออะไร?</h2>\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">\n	Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย</p>\n', '2020-12-10', 1),
(2, 9, 5, '5b62d-2.png', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; background-color: rgb(255, 255, 255);\">\n	Lorem Ipsum คืออะไร?</h2>\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">\n	Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย</p>\n', '2020-12-10', 1),
(3, 10, 4, '16c1b-3.png', '<h2 style=\"margin: 0px 0px 10px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px; background-color: rgb(255, 255, 255);\">\n	Lorem Ipsum คืออะไร?</h2>\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">\n	Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย</p>\n', '2020-12-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_status`
--

CREATE TABLE `product_status` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_status`
--

INSERT INTO `product_status` (`id`, `name`) VALUES
(1, 'HOT DEAL'),
(2, 'SAVE'),
(3, 'NEW');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_product`
--

CREATE TABLE `promotion_product` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount_price` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `date add` timestamp NOT NULL,
  `status` enum('1','0') NOT NULL,
  `update time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `promotion_slide`
--

CREATE TABLE `promotion_slide` (
  `id` int(11) NOT NULL,
  `img_slide` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `promotion_slide`
--

INSERT INTO `promotion_slide` (`id`, `img_slide`, `content`, `status`) VALUES
(1, 'ecade-1_03.png', '', '1'),
(2, 'd0743-1_03.png', '', ''),
(3, '04823-1_03.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `img`, `text`, `status`) VALUES
(1, 'b9dbd-bg_01.png', '', '1'),
(2, '82110-bg_02.png', '', ''),
(3, '1dc7e-bg_03.png', '', '1'),
(4, 'ed398-bg_04.png', '', '1'),
(5, '09f5f-bg_05.png', '', '1'),
(6, 'df6cb-bg_06.png', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  `img` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(10) NOT NULL,
  `name_subcategory` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name_subcategory`) VALUES
(1, 'Master Cylinder'),
(2, 'Caliper'),
(3, 'Brake Rotors'),
(4, 'Brake Pads'),
(5, 'Clear Clutch Cover'),
(6, 'Clutch Slave Cylinder'),
(7, 'Wet Clutch'),
(8, 'Dry Clutch'),
(9, 'Grips'),
(10, 'Handlebar & Clip on'),
(11, 'Handlebar End Cap'),
(12, 'Riser & Clamp'),
(13, 'Air Filter'),
(14, 'Oil Filter'),
(15, 'Brake Oil'),
(16, 'Engine Oil'),
(17, 'Battery'),
(18, 'Charger'),
(19, 'Cleaner'),
(20, 'Bike Cover'),
(21, 'Cruise Control'),
(22, 'Gear Position Indicator'),
(23, 'Paddock Stand'),
(24, 'Volt Guage'),
(25, 'Bolts'),
(26, 'Brake/Clutch Lever'),
(27, 'Carbon Part'),
(28, 'Exhuast Hanger'),
(29, 'Frame Plug'),
(30, 'Gas Cap'),
(31, 'Heel Guard'),
(32, 'Horn'),
(33, 'Hose Kit'),
(34, 'Kickstand'),
(35, 'License Plate'),
(36, 'Oil Breather'),
(37, 'Oil Filler Cap'),
(38, 'Other Parts'),
(39, 'Pegs'),
(40, 'Quickshifter'),
(41, 'Rearset'),
(42, 'Remote Adjuster'),
(43, 'Sprocket Cover'),
(44, 'Switch'),
(45, 'Tank Traction Grips'),
(46, 'Timing Belt Cover'),
(47, 'Timing Inspection Cover'),
(48, 'Water pump Protection'),
(49, 'Windscreen'),
(50, 'Proguard'),
(51, 'Radiator & Oil Cooler Guard'),
(52, 'Slider & Engine Guard'),
(53, 'Front Fork'),
(54, 'Rear Shock Absorber'),
(55, 'Steering Damper'),
(56, 'Chain'),
(57, 'Chain Adjuster'),
(58, 'Hub Kit '),
(59, 'Sprocket');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin_mpk', '9beb092784ee8aab75513cbdf3624074');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(10) NOT NULL,
  `name_year` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_category`
--
ALTER TABLE `brand_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_img_head`
--
ALTER TABLE `gallery_img_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_img_logo`
--
ALTER TABLE `gallery_img_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homebike`
--
ALTER TABLE `homebike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeplaylist`
--
ALTER TABLE `homeplaylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeslide`
--
ALTER TABLE `homeslide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_category`
--
ALTER TABLE `model_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_status`
--
ALTER TABLE `product_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_product`
--
ALTER TABLE `promotion_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_slide`
--
ALTER TABLE `promotion_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_category`
--
ALTER TABLE `brand_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_img_head`
--
ALTER TABLE `gallery_img_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_img_logo`
--
ALTER TABLE `gallery_img_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `homebike`
--
ALTER TABLE `homebike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homeplaylist`
--
ALTER TABLE `homeplaylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homeslide`
--
ALTER TABLE `homeslide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `model_category`
--
ALTER TABLE `model_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_status`
--
ALTER TABLE `product_status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `promotion_slide`
--
ALTER TABLE `promotion_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
