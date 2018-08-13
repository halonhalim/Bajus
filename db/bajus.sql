-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 09:55 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bajus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`about_id`, `about_title`, `description`, `file_name`) VALUES
(1, 'ABOUT US', ' From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh status as the City of Gold and the jewellery destination of the world.<br>\r\n\r\n\r\n\r\nThis not-for profit trade body, formed with the support of BANGLADESH JEWELLERS Department of Economic Development; comprises of members representing the entire gamut of the trade, including bullion, manufacturing, wholesale & retail.<br>\r\n\r\n\r\n\r\nDGJG represents the interests of the fraternity through liaising with government organizations and spearheading various member beneficial initiatives. From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh.', 'product_images/add-15.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adds`
--

CREATE TABLE `tbl_adds` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `adverstiment` varchar(255) NOT NULL,
  `file_name1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_adds`
--

INSERT INTO `tbl_adds` (`id`, `file_name`, `link`, `adverstiment`, `file_name1`) VALUES
(4, 'product_images/download8.png', 'http://muljanhighschool.edu.bd/', 'http://muljanhighschool.edu.bd/', 'product_images/add-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `access_label` tinyint(1) NOT NULL COMMENT 'access_label=1 Super Admin and  access_label=2 Admin',
  `activation_status` tinyint(4) NOT NULL COMMENT 'activation_status=1 Active,activation_status=0 Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email_address`, `password`, `access_label`, `activation_status`) VALUES
(1, 'MD. Halim', 'halimpzs911@gmail.com', '96e79218965eb72c92a549dd5a330112', 1, 1),
(2, 'Md. Halon', 'halimzs91@yahoo.com', '123456', 2, 1),
(3, 'kamal', 'kamal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baners`
--

CREATE TABLE `tbl_baners` (
  `baners_id` int(11) NOT NULL,
  `baners_title` varchar(255) NOT NULL,
  `baners_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_baners`
--

INSERT INTO `tbl_baners` (`baners_id`, `baners_title`, `baners_image`) VALUES
(11, 'fsrfvg', 'baners_images/slider-14.png'),
(12, 'jhfgb', 'baners_images/slider-15.png'),
(19, 'dgfrtg', 'baners_images/slider-21.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(10, 'Laptop', '', 1),
(11, 'bfghm', 'fgtgn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comitee`
--

CREATE TABLE `tbl_comitee` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comitee`
--

INSERT INTO `tbl_comitee` (`id`, `slug`, `category`, `name`, `designation`, `mobile`, `email`, `adress`, `file_name`, `company`) VALUES
(13, 'general-comitee', 'general comitee', 'Mr. Ganga Charan Malaka', 'President', '54784514', '', 'Dhaka', 'comitee/com-17.png', ' Venus Jewellers Ltd.'),
(14, 'general-comitee', 'general comitee', 'Mr. Dilip Kumar Agarwala', 'General Secretary', '5445', '', 'Dhaka', 'comitee/com-27.png', 'Diamond World Ltd'),
(15, 'general-comitee', 'general comitee', 'Mr. M. A. Hannan Azad', 'Vice-President', '', '', 'Dhaka', 'comitee/com-3.png', 'Alankar Niketan (Pvt) Ltd'),
(16, 'general-comitee', 'general comitee', 'Mr. Enamul Haque Khan', 'Vice-President', '96574422', '', 'Dhaka', 'comitee/com-4.png', 'Sharmeen Jeweller'),
(17, 'general-comitee', 'general comitee', 'Mr. Gulzar Ahmed', 'Vice-President', '', '', 'Dhaka', 'comitee/com-5.png', 'The Apan Jewellers'),
(18, 'subcomitee', 'sub.comitee', 'Mehedy Hasan', 'General Manager', '8801711843311', 'gm@bajus.org', '3, Baitul Mukarram (1st floor), Dhaka-1000, Bangladesh.', 'comitee/1531730385.jpeg', 'Bangladesh Jewellers Samity'),
(19, 'subcomitee', 'sub.comitee', 'Khaled Akon', 'Office Secretary', '8801740984444', 'officesecretary@bajus.org', '3, Baitul Mukarram (1st floor), Dhaka-1000, Bangladesh.', 'comitee/1531731878.jpeg', ' Bangladesh Jewellers Samity'),
(20, 'district-comitee', 'district comitee', 'Md. Khurshid Alam Khan', 'Asst. Office Secretary', '8801913502575', 'mkakmasud@gmail.com', '3, Baitul Mukarram (1st floor), Dhaka-1000, Bangladesh.', 'comitee/1531732093.jpeg', 'Bangladesh Jewellers Samity'),
(21, 'office-staff', 'office staff', 'Gobinda Roy', 'Collector', '8801792416647', 'gobindaroy220@gmail.com', '3, Baitul Mukarram (1st floor), Dhaka-1000, Bangladesh.', 'comitee/1531732259.jpeg', 'Bangladesh Jewellers Samity'),
(22, 'office-staff', 'office staff', 'Md. Halan Sardar (Sumon)', 'Support Staff', '8801991088226', 'sumonsarder192@gmail.com', '3, Baitul Mukarram (1st floor), Dhaka-1000, Bangladesh.', 'comitee/1531903823.jpeg', 'Bangladesh Jewellers Samity'),
(23, 'district-comitee', 'district comitee', 'Mehedy Hasan', 'General Manager', '8801711843311', 'gm@bajus.org', '3, Baitul Mukarram (1st floor), Dhaka-1000, Bangladesh.', 'comitee/15317322591.jpeg', 'Bangladesh Jewellers Samity'),
(24, 'general-comitee', 'general comitee', 'Mr. M. A. Hannan Azad', 'Vice-President', '', '', 'rtytyjnmn', 'comitee/com-31.png', 'Alankar Niketan (Pvt) Ltd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `googlemap` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `company_name`, `mobile_no`, `phone_no`, `email`, `address`, `twitter`, `googleplus`, `youtube`, `googlemap`, `logo`, `facebook`) VALUES
(1, 'Bangladesh Jewellery Samity', 2147483647, '+88029550642', 'info@bajus.org', '3, Baitul Mukarram (1st floor), Dhaka-1000, Bangladesh', 'http://www.twitter.com', 'http://www.google.com', 'http://www.youtube.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1535.6886065863073!2d90.4114200878523!3d23.7294133371788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f7d6d3bf2b:0x5c61cf1a938edf6a!2sBaitul+Mukarram+National+Masjid!5e0!3m2!1sen!2sbd!4v15', 'product_images/logo12.png', 'http://www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gold`
--

CREATE TABLE `tbl_gold` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gold`
--

INSERT INTO `tbl_gold` (`id`, `number`, `title`, `price`, `file_name`) VALUES
(3, '1', '22/22 CARAT PER GRAM', '4370/-', 'baners_images/gold-price-191.jpg'),
(4, '2', '21/21 CARAT PER GRAM', '4175/-', 'baners_images/gold-price-192.jpg'),
(5, '3', '18/18 CARAT PER GRAM', '3740/-', 'baners_images/gold-price-193.jpg'),
(6, '4', 'TRADITIONAL METHOD PER GRAM', '2265/-', 'baners_images/gold-price-194.jpg'),
(7, '5', '21/21 CARAT SILVER (CADMIUM) PER GRAM', ' 90/-', 'baners_images/gold-price-195.jpg'),
(8, '6', '\"From being a group of Jewellery retailers who came together to support\"', '632541', 'baners_images/gold-price-196.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_govt`
--

CREATE TABLE `tbl_govt` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_govt`
--

INSERT INTO `tbl_govt` (`id`, `number`, `title`, `file_name`) VALUES
(2, '1', '“Bangladesh Jewellary Samiti, Assistant Officer\", Issue – 4 , May, 2016', 'baners_images/AUST_Preli_Question_Bank5.pdf'),
(3, '2', '“Bangladesh Jewellary Samiti, Sub-Assistant Officer\", Issue – 3 , April ,2016', 'baners_images/AUST_Preli_Question_Bank6.pdf'),
(4, '3', '“Bangladesh Jewellary Samiti, General Manager\", Issue – 2 , February- ,2016', 'baners_images/AUST_Preli_Question_Bank7.pdf'),
(5, '4', '“Bangladesh Jewellary Samiti, Assistant Manager\", Issue – 3 , April ,2016', 'baners_images/AUST_Preli_Question_Bank8.pdf'),
(6, '5', ' “Bangladesh Jewellary Samiti, General Manager\", Issue – 2 , February- ,2016', 'baners_images/AUST_Preli_Question_Bank9.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_link`
--

CREATE TABLE `tbl_link` (
  `link_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_link`
--

INSERT INTO `tbl_link` (`link_id`, `title`, `link`) VALUES
(5, 'Social Welfare Ministry', 'http://www.msw.gov.bd/'),
(6, 'National Education', 'http://www.educationboard.gov.bd/'),
(7, 'Ministry of Food', 'http://www.mofood.gov.bd/'),
(8, 'Ministry of finance', 'http://www.mof.gov.bd/'),
(9, 'Social Welfare Ministry', 'http://www.msw.gov.bd/'),
(10, 'National Education', 'http://www.educationboard.gov.bd/'),
(11, 'Ministry of Food', 'http://www.mofood.gov.bd/'),
(12, 'Ministry of finance', 'http://www.mof.gov.bd/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacture`
--

CREATE TABLE `tbl_manufacture` (
  `manufacture_id` int(11) NOT NULL,
  `manufacture_name` varchar(255) NOT NULL,
  `manufacture_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacture`
--

INSERT INTO `tbl_manufacture` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `publication_status`) VALUES
(4, 'Hp', 'Smart laptop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_market`
--

CREATE TABLE `tbl_market` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_market`
--

INSERT INTO `tbl_market` (`id`, `number`, `title`, `price`) VALUES
(3, '1', '22/22 CARAT PER GRAM', ' 4370/-'),
(4, '2', '21/21 CARAT PER GRAM', '4175/-'),
(5, '3', '18/18 CARAT PER GRAM', '3740/-'),
(6, '4', 'TRADITIONAL METHOD PER GRAM', '2265/-'),
(7, '5', '21/21 CARAT SILVER (CADMIUM) PER GRAM', ' 90/-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `member` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `slug`, `category`, `name`, `designation`, `company`, `member`, `mobile`, `email`, `adress`, `file_name`) VALUES
(2, 'general-members', 'general-members', 'Abdul Mannan Khan', 'Proprietor', 'New Khan Jewellers', 2, '029560651/+8801711536505', 'n.khanjewellers@gmail.com', '74, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-19.png'),
(3, 'general-members', 'general-members', 'Md. Mosarraf Hossain Khan', 'Proprietor', 'Khan Jewellers', 100, '029513950/+8801711460803', 'saroar003@gmail.com', '2, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-211.png'),
(4, 'general-members', 'general-members', 'Hazi Abdul Latif Munshi', 'Proprietor', 'Latif Jewellers', 16, '029555834/+8801913574449', '', '1/A, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-36.png'),
(5, 'general-members', 'general-members', 'Sree Gauranga Chandra Pal', 'Proprietor', 'Monikanchan Jewellers', 60, ' 029571821/+8801718264052', '', '75 ,Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-41.png'),
(6, 'general-members', 'general-members', 'Sanjoy Poddar', 'Proprietor', 'Konika Jewellers', 54, ' 029588069/+8801711826939', '', '1/D, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-51.png'),
(7, 'ecmembers', 'E.C.members', 'Hazi Iqbal Uddin', 'Proprietor', 'Sajoni Jewellers', 10, '029567214/+8801711564940', '', '2/A, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-110.png'),
(8, 'ecmembers', 'E.C.members', 'Rahul Shaha', 'Proprietor', 'S P Jewellers', 36, ' 029552020/+8801671075730', '', '1/B, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-212.png'),
(9, 'ecmembers', 'E.C.members', 'Alhaj Md.Hasem Ali', 'Proprietor', ' Shahanama Jewellers', 9, '029587561/+8801716215550', '', ' 2, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-37.png'),
(10, 'ecmembers', 'E.C.members', 'Aowlad Hossain', 'Proprietor', 'Nibir Jewellers', 74, '029512580/+8801711635817', '', '4/A, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-42.png'),
(11, 'ecmembers', 'E.C.members', 'Md.Kamruzzaman', 'Proprietor', 'Matri Gems Jewellers', 53, '+8801711530174', '', '4, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-213.png'),
(12, 'ecmembers', 'E.C.members', 'Md.Ruhul Amin', 'Proprietor', 'Riya Jewellers', 20, ' 029587928/+8801788877549', '', '5, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-43.png'),
(13, 'ecmembers', 'E.C.members', 'Md. Monir Hossain', 'Proprietor', 'Bismillah Jewellers', 23, '029518978/+8801715025301', 'bismillahjewellers@yahoo.com', '9, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-52.png'),
(14, 'district-members', 'district-members', 'Md.Daud Ali', 'Proprietor', 'Saika Silver Jewellery', 64, '029584785/+8801819436905', '', '10, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-111.png'),
(15, 'district-members', 'district-members', 'Bablu Dey', 'Proprietor', 'New Khaza Jewellers', 8, '029555844/+8801911381368', '', '10 ,Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-214.png'),
(16, 'district-members', 'district-members', 'Anower Hossain', 'Proprietor', 'Safa Jewellers', 61, '027112383/+8801819484070', 'safajewellers@yahoo.com', '12/A ,Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-38.png'),
(17, 'district-members', 'district-members', 'Kingkor Shaha', 'Proprietor', 'Hritu Jewellers', 14, '029515930/+8801711991238', '', '12/B, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-44.png'),
(18, 'district-members', 'district-members', 'Md.Rojob Ali Pathan', 'Proprietor', 'Gems World', 88, '029554315/+8801711544825', '', '14, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-53.png'),
(19, 'new-members', 'new-members', 'Teharun Nahar Beauty', 'Proprietor', 'Baitul Jewellers', 57, '029557998/+8801711538532', '', '16, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-112.png'),
(20, 'new-members', 'new-members', 'Shaon Ahmed Chawdhury', 'Proprietor', 'Basundhara Jewellers', 92, '029564588/+8801714209002', '', '18, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-215.png'),
(21, 'new-members', 'new-members', 'S.Anower Hossain', 'Proprietor', 'Shahanaj Jewellers', 13, ' 029551222/+8801755502084', '', '17, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-39.png'),
(22, 'new-members', 'new-members', 'Kazi Tahura Rashid', 'Proprietor', ' Sinthia Jewellers', 11, ' 029564365/+8801771992509', '', '17/A, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-45.png'),
(23, 'new-members', 'new-members', 'Mir Khalid Hossain', 'Proprietor', 'Aheli Jewellers', 52, '029559464/+8801711541744', '', '19, Baitul Mukarram Market (1st Floor), Dhaka', 'comitee/com-54.png'),
(24, 'ecmembers', 'E.C.members', 'Halim', 'Proprietor', 'Venus Jewellers Ltd.', 1245, '029560651/+8801711536505', 'admin123@gmail.com', 'asdefc', 'comitee/com-46.png'),
(25, 'general-members', 'general-members', 'halim', 'Proprietor', 'Venus Jewellers Ltd.', 123, '029560651/+8801711536505', 'admin123@gmail.com', 'asdec', 'comitee/com-47.png'),
(26, 'district-members', 'district-members', 'gfhjhy', 'Proprietor', 'Venus Jewellers Ltd.', 123, '029560651/+8801711536505', 'admin123@gmail.com', 'cvb', 'comitee/com-48.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membershipbenifits`
--

CREATE TABLE `tbl_membershipbenifits` (
  `membershipbenifits_id` int(11) NOT NULL,
  `membershipbenifits_title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_membershipbenifits`
--

INSERT INTO `tbl_membershipbenifits` (`membershipbenifits_id`, `membershipbenifits_title`, `description`) VALUES
(1, 'MEMBERSHIP BENIFITS', 'From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh status as the City of Gold and the jewellery destination of the world.<br><br>\r\n\r\nThis not-for profit trade body, formed with the support of BANGLADESH JEWELLERS Department of Economic Development; comprises of members representing the entire gamut of the trade, including bullion, manufacturing, wholesale & retail.<br><br>\r\n\r\nDGJG represents the interests of the fraternity through liaising with government organizations and spearheading various member beneficial initiatives. From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `title`, `date`, `description`, `images`) VALUES
(7, '\"From being a group of Jewellery retailer', '2018-07-24', 'From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh status as the City of Gold and the jewellery destination of the world.<br><br>\r\n\r\nThis not-for profit trade body, formed with the support of BANGLADESH JEWELLERS Department of Economic Development; comprises of members representing the entire gamut of the trade, including bullion, manufacturing, wholesale & retail.<br><br>\r\n\r\nDGJG represents the interests of the fraternity through liaising with government organizations and spearheading various member beneficial initiatives. From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh.', 'product_images/download3.png'),
(8, 'Skill For Employment', '2018-07-24', '                                                From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh status as the City of Gold and the jewellery destination of the world.<br><br>\r\n\r\nThis not-for profit trade body, formed with the support of BANGLADESH JEWELLERS Department of Economic Development; comprises of members representing the entire gamut of the trade, including bullion, manufacturing, wholesale & retail.<br><br>\r\n\r\nDGJG represents the interests of the fraternity through liaising with government organizations and spearheading various member beneficial initiatives. From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh.                                            ', 'product_images/add-117.png'),
(9, '\"From being a group of Jewellery retailers who', '2018-07-04', 'From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh status as the City of Gold and the jewellery destination of the world.<br><br>\r\n\r\nThis not-for profit trade body, formed with the support of BANGLADESH JEWELLERS Department of Economic Development; comprises of members representing the entire gamut of the trade, including bullion, manufacturing, wholesale & retail.<br><br>\r\n\r\nDGJG represents the interests of the fraternity through liaising with government organizations and spearheading various member beneficial initiatives. From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh.', 'product_images/add-118.png'),
(10, '\"From being a group of Jewellery retailers who came together to support\"', '2018-07-19', '                                                From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh status as the City of Gold and the jewellery destination of the world.<br><br>\r\n\r\nThis not-for profit trade body, formed with the support of BANGLADESH JEWELLERS Department of Economic Development; comprises of members representing the entire gamut of the trade, including bullion, manufacturing, wholesale & retail.<br><br>\r\n\r\nDGJG represents the interests of the fraternity through liaising with government organizations and spearheading various member beneficial initiatives. From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh.                                            ', 'product_images/add-123.png'),
(11, 'being a group of Jewellery retailers', '2018-07-18', '                                                                                                                                                From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh status as the City of Gold and the jewellery destination of the world.<br><br>\r\n\r\nThis not-for profit trade body, formed with the support of BANGLADESH JEWELLERS Department of Economic Development; comprises of members representing the entire gamut of the trade, including bullion, manufacturing, wholesale & retail.<br><br>\r\n\r\nDGJG represents the interests of the fraternity through liaising with government organizations and spearheading various member beneficial initiatives. From being a group of Jewellery retailers who came together to support the first edition of the DSF in the year 1996, today BANGLADESH JEWELLERS SAMITY has grown to a prestigious trade body that has more than 600 members committed to develop and Bangladesh.                                                                                                                                    ', 'product_images/add-122.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_partner`
--

INSERT INTO `tbl_partner` (`id`, `title`, `image`) VALUES
(2, 'sadewrf', 'product_images/c-13.png'),
(3, 'def', 'product_images/c-2.png'),
(4, 'swdefc', 'product_images/c-3.png'),
(5, 'dfcrf', 'product_images/c-4.png'),
(6, 'efdrfv', 'product_images/slider-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_policy`
--

CREATE TABLE `tbl_policy` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_policy`
--

INSERT INTO `tbl_policy` (`id`, `title`, `description`) VALUES
(1, 'policy ', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. <br><br>\r\n\r\nAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `manufacture_id` int(3) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_new_price` float(10,2) NOT NULL,
  `product_quantity` int(5) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `pic1` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `category_id`, `manufacture_id`, `product_name`, `product_short_description`, `product_long_description`, `product_price`, `product_new_price`, `product_quantity`, `is_featured`, `product_image`, `pic1`, `publication_status`) VALUES
(12, 5, 2, 'dfref', 'zxdsc', 'sdd', 45, 450.00, 5, 1, 'product_images/Koala1.jpg', 'product_images/Jellyfish.jpg', 1),
(13, 5, 2, 'felo', 'dfgreg', 'edgtg', 45, 450.00, 5, 1, 'product_images/Lighthouse3.jpg', 'product_images/Chrysanthemum1.jpg', 1),
(14, 5, 2, 'Man\'s', 'sfdrvf', 'প্রথম রমজান থেকে ঈদের দিন পর্যন্ত যেকোনো আজকেরডিল কেনাকাটায় বিকাশ পেমেন্ট করলে ২০% ইনস্ট্যান্ট ক্যাশব্যাক।ক) একজন ক্রেতা এই অফার চলাকালীন সময়ে প্রতি লেনদেনে \"সর্বোচ্চ ৩০০ টাকা\" ক্যাশব্যাক পাবে।খ) একটি বিকাশ ওয়ালেট নম্বর এ \"সর্বোচ্চ ৫০০ টাকা\" পর্যন্ত ক্যাশব্যাক পাওয়া যাবে।গ) ক্যাশব্যাক শুধুমাত্র সফল ডেলিভারীর ক্ষেত্রে প্রযোজ্য। (অগ্রিম মূল্য পরিশোধের ক্ষেত্রে মার্চেন্ট যদি অনিবার্য ', 600, 500.00, 5, 1, 'product_images/11.jpg', 'product_images/Penguins4.jpg', 1),
(15, 6, 3, 'zczdx', 'xzv cx', 'cxvx ', 45, 450.00, 6, 1, 'product_images/Tulips4.jpg', 'product_images/Penguins5.jpg', 1),
(16, 10, 3, 'Nokia', '555555555555555555', '666666666666666', 45, 450.00, 5, 1, 'product_images/0.jpg', 'product_images/589452-1999481.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE `tbl_report` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_report`
--

INSERT INTO `tbl_report` (`id`, `title`, `file_name`) VALUES
(2, '“Development of Professional Selling” BRAC Bank Limited-Volume-9 , Issue – 4 , May, 2016', 'baners_images/AUST_Preli_Question_Bank1.pdf'),
(3, ' “Development of Professional Selling” BRAC Bank Limited-Volume-9 , Issue – 3 , April ,2016', 'baners_images/AUST_Preli_Question_Bank2.pdf'),
(4, '“Development of Professional Selling” BRAC Bank Limited-Volume-9 , Issue – 2 , February- ,2016', 'baners_images/Recent_General_Knowledge.pdf'),
(5, '“Development of Professional Selling” BRAC Bank Limited-Volume-9 , Issue – 3 , April ,2016', 'baners_images/বাংলাদেশ_ব্যাংক_AD.pdf'),
(6, '“Development of Professional Selling” BRAC Bank Limited-Volume-9 , Issue – 2 , February- ,2016', 'baners_images/AUST_Preli_Question_Bank3.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_adds`
--
ALTER TABLE `tbl_adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_baners`
--
ALTER TABLE `tbl_baners`
  ADD PRIMARY KEY (`baners_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_comitee`
--
ALTER TABLE `tbl_comitee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_gold`
--
ALTER TABLE `tbl_gold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_govt`
--
ALTER TABLE `tbl_govt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_link`
--
ALTER TABLE `tbl_link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `tbl_market`
--
ALTER TABLE `tbl_market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_membershipbenifits`
--
ALTER TABLE `tbl_membershipbenifits`
  ADD PRIMARY KEY (`membershipbenifits_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_policy`
--
ALTER TABLE `tbl_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_adds`
--
ALTER TABLE `tbl_adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_baners`
--
ALTER TABLE `tbl_baners`
  MODIFY `baners_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_comitee`
--
ALTER TABLE `tbl_comitee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gold`
--
ALTER TABLE `tbl_gold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_govt`
--
ALTER TABLE `tbl_govt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_link`
--
ALTER TABLE `tbl_link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_manufacture`
--
ALTER TABLE `tbl_manufacture`
  MODIFY `manufacture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_market`
--
ALTER TABLE `tbl_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_membershipbenifits`
--
ALTER TABLE `tbl_membershipbenifits`
  MODIFY `membershipbenifits_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_policy`
--
ALTER TABLE `tbl_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
