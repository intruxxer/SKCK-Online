-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 06:47 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skck_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_cookies`
--

CREATE TABLE IF NOT EXISTS `ci_cookies` (
`id` int(11) NOT NULL,
  `cookie_id` varchar(255) DEFAULT NULL,
  `netid` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `orig_page_requested` varchar(120) DEFAULT NULL,
  `php_session_id` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('dbbb8d6ea760bb909b0ef790f7b2a171', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36', 1428855480, '');

-- --------------------------------------------------------

--
-- Table structure for table `skck_administrators`
--

CREATE TABLE IF NOT EXISTS `skck_administrators` (
`id` int(11) NOT NULL,
  `staff_code` varchar(15) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `staff_username` varchar(20) NOT NULL,
  `staff_password` varchar(128) NOT NULL,
  `staff_rank` varchar(20) NOT NULL,
  `staff_role` int(1) NOT NULL DEFAULT '5',
  `staff_created_at` datetime NOT NULL,
  `staff_last_login` datetime DEFAULT NULL,
  `staff_last_logout` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `skck_cirifisik`
--

CREATE TABLE IF NOT EXISTS `skck_cirifisik` (
`id` int(11) NOT NULL,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_rambut` varchar(20) NOT NULL,
  `applicant_wajah` varchar(20) NOT NULL,
  `applicant_kulit` varchar(20) NOT NULL,
  `applicant_tinggibadan` varchar(3) NOT NULL,
  `applicant_beratbadan` varchar(3) NOT NULL,
  `applicant_tandakhusus` mediumtext,
  `applicant_rumussidikjari` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck_cirifisik`
--

INSERT INTO `skck_cirifisik` (`id`, `applicant_id`, `applicant_rambut`, `applicant_wajah`, `applicant_kulit`, `applicant_tinggibadan`, `applicant_beratbadan`, `applicant_tandakhusus`, `applicant_rumussidikjari`) VALUES
(1, '2798929.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(2, '7447441.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(3, '7027801.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(4, '400.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(5, '1817104.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(6, '1.0751841E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(7, '2640625.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(8, '1.3808656E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(9, '10816.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(10, '478864.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(11, '4562496.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(12, '6400.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(13, '2.0638849E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(14, '3629025.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(15, '1.7422276E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(16, '1034289.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(17, '8248384.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(18, '2.2420225E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(19, '1.7648401E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(20, '1.7969121E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(21, '2768896.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(22, '7851204.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(23, '3583449.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(24, '1.7994564E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(25, '1.7926756E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(26, '6135529.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(27, '1852321.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(28, '5044516.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(29, '9025.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(30, '326041.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(31, '3984016.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(32, '8208225.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(33, '1.6459249E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(34, '1.8792225E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(35, '2.4890121E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(36, '1.1978521E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(37, '9409.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(38, '2.1986721E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(39, '270400.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(40, '2893401.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(41, '9290304.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(42, '1.9909444E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(43, '1.0575504E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(44, '1.5784729E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(45, '7371225.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(46, '4334724.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(47, '1.7783089E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(48, '1.51321E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(49, '185761.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(50, '2.4970009E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(51, '2002225.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(52, '1225.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(53, '1.19716E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(54, '339889.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(55, '3538161.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(56, '8543929.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(57, '1399489.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(58, '6806881.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(59, '2169729.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(60, '1.4348944E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(61, '261121.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(62, '2.1104836E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(63, '259081.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(64, '3364.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(65, '1.6516096E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(66, '1406596.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(67, '564001.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(68, '1681.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(69, '1.7355556E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(70, '8196769.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(71, '2033476.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(72, '1.7464041E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(73, '231361.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(74, '1.5374241E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(75, '1.38384E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(76, '2.4462916E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(77, '3932289.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(78, '1795600.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(79, '222784.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(80, '2140369.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(81, '2143296.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(82, '749956.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(83, '375769.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(84, '2155024.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(85, '1625625.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(86, '5731236.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(87, '6646084.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(88, '2.1864976E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(89, '1.3875625E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(90, '2.3590449E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(91, '7236100.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(92, '22201.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(93, '1311025.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(94, '3575881.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(95, '2.4167056E7', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(96, '7834401.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(97, '5890329.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(98, '3678724.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(99, '393129.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(100, '1430416.0', 'Lurus', 'Lonjong', 'Sawo Matang', '170', '72', 'Luka bakar di tangan kiri', NULL),
(108, '11', 'Hitam Keriting', 'Bulat', 'Coklat', '166', '72', 'Tato', '-'),
(109, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(110, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(111, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(112, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(113, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(114, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(115, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(116, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(117, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(118, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(119, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(120, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(121, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(122, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(123, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-'),
(124, '177', 'Ikal', 'Bulat', 'Sawo', '156', '68', '', '-');

-- --------------------------------------------------------

--
-- Table structure for table `skck_documents`
--

CREATE TABLE IF NOT EXISTS `skck_documents` (
`id` int(11) NOT NULL,
  `applicant_id` varchar(20) NOT NULL,
  `skck_ktp` tinytext,
  `skck_passport` tinytext,
  `skck_familycard` tinytext,
  `skck_birthcert` tinytext,
  `skck_fingerprint` tinytext,
  `skck_corp_sponsor` tinytext,
  `skck_marital_letter` tinytext,
  `skck_report_evidence` tinytext
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck_documents`
--

INSERT INTO `skck_documents` (`id`, `applicant_id`, `skck_ktp`, `skck_passport`, `skck_familycard`, `skck_birthcert`, `skck_fingerprint`, `skck_corp_sponsor`, `skck_marital_letter`, `skck_report_evidence`) VALUES
(1, '1.3950225E7', '', '', '', '', '', '', '', ''),
(2, '2650384.0', '', '', '', '', '', '', '', ''),
(3, '9066121.0', '', '', '', '', '', '', '', ''),
(4, '2835856.0', '', '', '', '', '', '', '', ''),
(5, '8850625.0', '', '', '', '', '', '', '', ''),
(6, '196249.0', '', '', '', '', '', '', '', ''),
(7, '3025.0', '', '', '', '', '', '', '', ''),
(8, '5285401.0', '', '', '', '', '', '', '', ''),
(9, '519841.0', '', '', '', '', '', '', '', ''),
(10, '8726116.0', '', '', '', '', '', '', '', ''),
(11, '2.19024E7', '', '', '', '', '', '', '', ''),
(12, '410881.0', '', '', '', '', '', '', '', ''),
(13, '2.0921476E7', '', '', '', '', '', '', '', ''),
(14, '465124.0', '', '', '', '', '', '', '', ''),
(15, '1.1614464E7', '', '', '', '', '', '', '', ''),
(16, '1.4070001E7', '', '', '', '', '', '', '', ''),
(17, '3323329.0', '', '', '', '', '', '', '', ''),
(18, '2.2410756E7', '', '', '', '', '', '', '', ''),
(19, '9616201.0', '', '', '', '', '', '', '', ''),
(20, '1.6136289E7', '', '', '', '', '', '', '', ''),
(21, '1.3155129E7', '', '', '', '', '', '', '', ''),
(22, '804609.0', '', '', '', '', '', '', '', ''),
(23, '1345600.0', '', '', '', '', '', '', '', ''),
(24, '1.9465744E7', '', '', '', '', '', '', '', ''),
(25, '335241.0', '', '', '', '', '', '', '', ''),
(26, '2152089.0', '', '', '', '', '', '', '', ''),
(27, '2732409.0', '', '', '', '', '', '', '', ''),
(28, '755161.0', '', '', '', '', '', '', '', ''),
(29, '1144900.0', '', '', '', '', '', '', '', ''),
(30, '7569.0', '', '', '', '', '', '', '', ''),
(31, '6916900.0', '', '', '', '', '', '', '', ''),
(32, '1.6152361E7', '', '', '', '', '', '', '', ''),
(33, '9096256.0', '', '', '', '', '', '', '', ''),
(34, '394384.0', '', '', '', '', '', '', '', ''),
(35, '1.7842176E7', '', '', '', '', '', '', '', ''),
(36, '1811716.0', '', '', '', '', '', '', '', ''),
(37, '5112121.0', '', '', '', '', '', '', '', ''),
(38, '2.4980004E7', '', '', '', '', '', '', '', ''),
(39, '1.6499844E7', '', '', '', '', '', '', '', ''),
(40, '310249.0', '', '', '', '', '', '', '', ''),
(41, '1089936.0', '', '', '', '', '', '', '', ''),
(42, '1218816.0', '', '', '', '', '', '', '', ''),
(43, '3341584.0', '', '', '', '', '', '', '', ''),
(44, '505521.0', '', '', '', '', '', '', '', ''),
(45, '6300100.0', '', '', '', '', '', '', '', ''),
(46, '2.4770529E7', '', '', '', '', '', '', '', ''),
(47, '1.6032016E7', '', '', '', '', '', '', '', ''),
(48, '5044516.0', '', '', '', '', '', '', '', ''),
(49, '5866084.0', '', '', '', '', '', '', '', ''),
(50, '1.6257024E7', '', '', '', '', '', '', '', ''),
(51, '7595536.0', '', '', '', '', '', '', '', ''),
(52, '4826809.0', '', '', '', '', '', '', '', ''),
(53, '8031556.0', '', '', '', '', '', '', '', ''),
(54, '2374681.0', '', '', '', '', '', '', '', ''),
(55, '23409.0', '', '', '', '', '', '', '', ''),
(56, '3316041.0', '', '', '', '', '', '', '', ''),
(57, '1016064.0', '', '', '', '', '', '', '', ''),
(58, '480249.0', '', '', '', '', '', '', '', ''),
(59, '267289.0', '', '', '', '', '', '', '', ''),
(60, '2.2724289E7', '', '', '', '', '', '', '', ''),
(61, '2.2316176E7', '', '', '', '', '', '', '', ''),
(62, '1.6394401E7', '', '', '', '', '', '', '', ''),
(63, '1.1309769E7', '', '', '', '', '', '', '', ''),
(64, '1.07584E7', '', '', '', '', '', '', '', ''),
(65, '1.5531481E7', '', '', '', '', '', '', '', ''),
(66, '2.1864976E7', '', '', '', '', '', '', '', ''),
(67, '4372281.0', '', '', '', '', '', '', '', ''),
(68, '1.4025025E7', '', '', '', '', '', '', '', ''),
(69, '6110784.0', '', '', '', '', '', '', '', ''),
(70, '2002225.0', '', '', '', '', '', '', '', ''),
(71, '6932689.0', '', '', '', '', '', '', '', ''),
(72, '2365444.0', '', '', '', '', '', '', '', ''),
(73, '1.8966025E7', '', '', '', '', '', '', '', ''),
(74, '710649.0', '', '', '', '', '', '', '', ''),
(75, '746496.0', '', '', '', '', '', '', '', ''),
(76, '1666681.0', '', '', '', '', '', '', '', ''),
(77, '26896.0', '', '', '', '', '', '', '', ''),
(78, '17161.0', '', '', '', '', '', '', '', ''),
(79, '1.9114384E7', '', '', '', '', '', '', '', ''),
(80, '3381921.0', '', '', '', '', '', '', '', ''),
(81, '749956.0', '', '', '', '', '', '', '', ''),
(82, '8037225.0', '', '', '', '', '', '', '', ''),
(83, '1.9474569E7', '', '', '', '', '', '', '', ''),
(84, '1.0272025E7', '', '', '', '', '', '', '', ''),
(85, '2.2212369E7', '', '', '', '', '', '', '', ''),
(86, '419904.0', '', '', '', '', '', '', '', ''),
(87, '4096576.0', '', '', '', '', '', '', '', ''),
(88, '6210064.0', '', '', '', '', '', '', '', ''),
(89, '6985449.0', '', '', '', '', '', '', '', ''),
(90, '9326916.0', '', '', '', '', '', '', '', ''),
(91, '1890625.0', '', '', '', '', '', '', '', ''),
(92, '1623076.0', '', '', '', '', '', '', '', ''),
(93, '2515396.0', '', '', '', '', '', '', '', ''),
(94, '1.26736E7', '', '', '', '', '', '', '', ''),
(95, '2.0939776E7', '', '', '', '', '', '', '', ''),
(96, '180625.0', '', '', '', '', '', '', '', ''),
(97, '1.98025E7', '', '', '', '', '', '', '', ''),
(98, '49.0', '', '', '', '', '', '', '', ''),
(99, '2725801.0', '', '', '', '', '', '', '', ''),
(100, '1.1937025E7', '', '', '', '', '', '', '', ''),
(125, '177246806824', 'ktp_Penguins.jpg', NULL, NULL, 'akte_Desert.jpg', NULL, NULL, NULL, NULL),
(126, '177246806824', 'ktp_Penguins.jpg', NULL, NULL, 'akte_Desert.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skck_education`
--

CREATE TABLE IF NOT EXISTS `skck_education` (
`id` int(11) NOT NULL,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_edu_primary` varchar(45) DEFAULT NULL,
  `applicant_edu_primary_city` varchar(20) DEFAULT NULL,
  `applicant_edu_primary_year` varchar(4) DEFAULT NULL,
  `applicant_edu_secondary` varchar(45) DEFAULT NULL,
  `applicant_edu_secondary_city` varchar(20) DEFAULT NULL,
  `applicant_edu_secondary_year` varchar(4) DEFAULT NULL,
  `applicant_edu_tertiary` varchar(45) DEFAULT NULL,
  `applicant_edu_tertiary_city` varchar(20) DEFAULT NULL,
  `applicant_edu_tertiary_year` varchar(4) DEFAULT NULL,
  `applicant_edu_bachelor` varchar(45) DEFAULT NULL,
  `applicant_edu_bachelor_city` varchar(20) DEFAULT NULL,
  `applicant_edu_bachelor_year` varchar(4) DEFAULT NULL,
  `applicant_edu_master` varchar(45) DEFAULT NULL,
  `applicant_edu_master_city` varchar(20) DEFAULT NULL,
  `applicant_edu_master_year` varchar(4) DEFAULT NULL,
  `applicant_edu_doctoral` varchar(80) DEFAULT NULL,
  `applicant_edu_doctoral_city` varchar(30) DEFAULT NULL,
  `applicant_edu_doctoral_year` varchar(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck_education`
--

INSERT INTO `skck_education` (`id`, `applicant_id`, `applicant_edu_primary`, `applicant_edu_primary_city`, `applicant_edu_primary_year`, `applicant_edu_secondary`, `applicant_edu_secondary_city`, `applicant_edu_secondary_year`, `applicant_edu_tertiary`, `applicant_edu_tertiary_city`, `applicant_edu_tertiary_year`, `applicant_edu_bachelor`, `applicant_edu_bachelor_city`, `applicant_edu_bachelor_year`, `applicant_edu_master`, `applicant_edu_master_city`, `applicant_edu_master_year`, `applicant_edu_doctoral`, `applicant_edu_doctoral_city`, `applicant_edu_doctoral_year`) VALUES
(1, '2319529.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(2, '770884.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(3, '1.7707264E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(4, '2.4019801E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(5, '2209.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(6, '702244.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(7, '1737124.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(8, '1918225.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(9, '1.2837889E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(10, '9504889.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(11, '1.2013156E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(12, '7573504.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(13, '5640625.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(14, '2.1022225E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(15, '1.1655396E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(16, '6864400.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(17, '1.12896E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(18, '7678441.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(19, '6492304.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(20, '504100.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(21, '588289.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(22, '8543929.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(23, '2.4176889E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(24, '5085025.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(25, '480249.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(26, '67081.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(27, '9296401.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(28, '1901641.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(29, '2214144.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(30, '1.3271449E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(31, '3059001.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(32, '521284.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(33, '9721924.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(34, '9828225.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(35, '4012009.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(36, '2.4324624E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(37, '5276209.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(38, '6739216.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(39, '2601.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(40, '8720209.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(41, '1.8992164E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(42, '1.1015761E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(43, '3441025.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(44, '98596.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(45, '1.5429184E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(46, '2725801.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(47, '2.0985561E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(48, '2.0349121E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(49, '508369.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(50, '2424249.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(51, '1.5405625E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(52, '8282884.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(53, '1.0195249E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(54, '2181529.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(55, '1.2404484E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(56, '4515625.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(57, '2.2420225E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(58, '2013561.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(59, '7873636.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(60, '35344.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(61, '1.58404E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(62, '110224.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(63, '4756761.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(64, '4268356.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(65, '4730625.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(66, '2.2963264E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(67, '2.0539024E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(68, '6240004.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(69, '1390041.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(70, '1.5000129E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(71, '1.5697444E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(72, '279841.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(73, '2.36196E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(74, '1.5000129E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(75, '2.1492496E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(76, '1.3476241E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(77, '2.2202944E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(78, '5234944.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(79, '4028049.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(80, '760384.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(81, '1.5896169E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(82, '43681.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(83, '7043716.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(84, '228484.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(85, '6651241.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(86, '73984.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(87, '169744.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(88, '1092025.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(89, '2.2992025E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(90, '582169.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(91, '1.3980121E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(92, '544644.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(93, '1684804.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(94, '1.87489E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(95, '3164841.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(96, '2.0223009E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(97, '2.1114025E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(98, '5475600.0', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(99, '1.9909444E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(100, '1.0876804E7', 'SDN 009 Pagi Paseban, Senen', 'Jakarta Pusat', '1994', 'SMPN 22 Kemayoran, Senen', 'Jakarta Pusat', '1997', 'SMAN 1 Bogor', 'Kota Bogor', '2000', 'Fakultas Pertanian, Institut Pertanian Bogor', 'Bogor', '2005', 'Fakultas Kehutanan, Universitas Gadjah Mada', 'Yogyakarta', '2009', 'School of Agriculture and Forestry, Groningen University', 'Groningen, Netherland', '2014'),
(107, '11', 'SDN 1 Bungurasih', 'Sidoarjo', '1998', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(108, '11', 'SDN 1 Bungurasih', 'Sidoarjo', '1998', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(109, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(110, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(111, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(112, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(113, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(114, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(115, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(116, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(117, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(118, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(119, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(120, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(121, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(122, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(123, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1'),
(124, '177', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1', 'ASD', 'S', '1');

-- --------------------------------------------------------

--
-- Table structure for table `skck_family`
--

CREATE TABLE IF NOT EXISTS `skck_family` (
`id` int(11) NOT NULL,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_spouse_type` varchar(1) DEFAULT NULL,
  `applicant_spouse_name` varchar(50) DEFAULT NULL,
  `applicant_spouse_age` varchar(3) DEFAULT NULL,
  `applicant_spouse_religion` varchar(18) DEFAULT NULL,
  `applicant_spouse_citizenship` varchar(1) DEFAULT NULL,
  `applicant_spouse_occupation` varchar(20) DEFAULT NULL,
  `applicant_spouse_address` mediumtext,
  `applicant_father_name` varchar(50) NOT NULL,
  `applicant_father_age` varchar(45) NOT NULL,
  `applicant_father_religion` varchar(18) NOT NULL,
  `applicant_father_citizenship` varchar(1) NOT NULL,
  `applicant_father_occupation` varchar(20) NOT NULL,
  `applicant_father_address` mediumtext NOT NULL,
  `applicant_mother_name` varchar(50) NOT NULL,
  `applicant_mother_age` varchar(45) NOT NULL,
  `applicant_mother_religion` varchar(18) NOT NULL,
  `applicant_mother_citizenship` varchar(1) NOT NULL,
  `applicant_mother_occupation` varchar(20) NOT NULL,
  `applicant_mother_address` mediumtext NOT NULL,
  `applicant_siblings_names` longtext,
  `applicant_siblings_ages` mediumtext,
  `applicant_siblings_addresses` text
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck_family`
--

INSERT INTO `skck_family` (`id`, `applicant_id`, `applicant_spouse_type`, `applicant_spouse_name`, `applicant_spouse_age`, `applicant_spouse_religion`, `applicant_spouse_citizenship`, `applicant_spouse_occupation`, `applicant_spouse_address`, `applicant_father_name`, `applicant_father_age`, `applicant_father_religion`, `applicant_father_citizenship`, `applicant_father_occupation`, `applicant_father_address`, `applicant_mother_name`, `applicant_mother_age`, `applicant_mother_religion`, `applicant_mother_citizenship`, `applicant_mother_occupation`, `applicant_mother_address`, `applicant_siblings_names`, `applicant_siblings_ages`, `applicant_siblings_addresses`) VALUES
(1, '51529.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(2, '2.4970009E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(3, '1.9298449E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(4, '680625.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(5, '265225.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(6, '1971216.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(7, '125316.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(8, '501264.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(9, '1.33225E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(10, '2.4780484E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(11, '4900.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(12, '4214809.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(13, '1.296E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(14, '1.2630916E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(15, '1.7048641E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(16, '7778521.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(17, '1108809.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(18, '1742400.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(19, '9610000.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(20, '6095961.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(21, '4293184.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(22, '2096704.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(23, '1697809.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(24, '4941729.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(25, '1.8948609E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(26, '2.3319241E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(27, '2.4661156E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(28, '5189284.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(29, '1.4318656E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(30, '4919524.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(31, '3837681.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(32, '2.2486564E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(33, '1.5108769E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(34, '9193024.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(35, '2.0394256E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(36, '1.90969E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(37, '5026564.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(38, '1.1539609E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(39, '1.2759184E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(40, '2.1613201E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(41, '744769.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(42, '6869641.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(43, '9461776.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(44, '2.4631369E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(45, '4981824.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(46, '1.4992384E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(47, '749956.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(48, '25.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(49, '7873636.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(50, '3356224.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(51, '3364.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(52, '39601.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(53, '1129969.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(54, '1.1055625E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(55, '2.0584369E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(56, '1912689.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(57, '484416.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(58, '191844.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(59, '1.3359025E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(60, '318096.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(61, '2.2401289E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(62, '481636.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(63, '8444836.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(64, '10816.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(65, '1265625.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(66, '1.9439281E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(67, '2.2629049E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(68, '1.08241E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(69, '6528025.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(70, '749956.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(71, '20449.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(72, '2.0502784E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(73, '1825201.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(74, '7236100.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(75, '3748096.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(76, '1.2208036E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(77, '1.71396E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(78, '1.4130081E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(79, '4088484.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(80, '7209225.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(81, '1.7123044E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(82, '2686321.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(83, '338724.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(84, '8311689.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(85, '6901129.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(86, '2.2043025E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(87, '9042049.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(88, '1.1303044E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor');
INSERT INTO `skck_family` (`id`, `applicant_id`, `applicant_spouse_type`, `applicant_spouse_name`, `applicant_spouse_age`, `applicant_spouse_religion`, `applicant_spouse_citizenship`, `applicant_spouse_occupation`, `applicant_spouse_address`, `applicant_father_name`, `applicant_father_age`, `applicant_father_religion`, `applicant_father_citizenship`, `applicant_father_occupation`, `applicant_father_address`, `applicant_mother_name`, `applicant_mother_age`, `applicant_mother_religion`, `applicant_mother_citizenship`, `applicant_mother_occupation`, `applicant_mother_address`, `applicant_siblings_names`, `applicant_siblings_ages`, `applicant_siblings_addresses`) VALUES
(89, '196249.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(90, '960400.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(91, '2.2733824E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(92, '5875776.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(93, '1.5429184E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(94, '2399401.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(95, '180625.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(96, '3024121.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(97, '3845521.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(98, '1.1256025E7', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(99, '3678724.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(100, '9523396.0', 'I', 'Mutia Dewi', '32', 'Islam', 'I', 'Wiraswasta', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zainal Arifin', '59', 'Islam', 'I', 'Pensiunan PNS', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Siti Latifah', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', 'Zaskia Munawwaroh,Hanna Fahira,Boy Rafly Hasan', '24,22,20', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor, Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor'),
(107, '11', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'J', 'B', '0', 'Islam', 'I', 'W', 'J', 'Bowo|Bowie|', '34|20|17', 'Jln|Jln2|'),
(108, '11', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'J', 'B', '0', 'Islam', 'I', 'W', 'J', 'Bowo|Bowie|', '34|20|17', 'Jln|Jln2|'),
(109, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(110, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(111, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(112, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(113, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(114, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(115, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(116, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(117, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(118, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(119, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(120, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(121, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(122, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(123, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||'),
(124, '177', 'N', '', '0', 'Islam', 'I', '', '', 'A', '0', 'Islam', 'I', 'W', 'W', 'B', '0', 'Islam', 'I', 'W', 'W', '||', '17|17|17', '||');

-- --------------------------------------------------------

--
-- Table structure for table `skck_keterangan`
--

CREATE TABLE IF NOT EXISTS `skck_keterangan` (
`id` int(11) NOT NULL,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_hist_oversea` varchar(60) DEFAULT NULL,
  `applicant_hist_occupation` varchar(60) DEFAULT NULL,
  `applicant_hist_hobby` varchar(60) DEFAULT NULL,
  `applicant_curr_address` mediumtext,
  `applicant_wna_sponsor` varchar(50) DEFAULT NULL,
  `applicant_wna_sponsor_address` mediumtext,
  `applicant_wna_sponsor_occupation` varchar(20) DEFAULT NULL,
  `applicant_wna_sponsor_phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck_keterangan`
--

INSERT INTO `skck_keterangan` (`id`, `applicant_id`, `applicant_hist_oversea`, `applicant_hist_occupation`, `applicant_hist_hobby`, `applicant_curr_address`, `applicant_wna_sponsor`, `applicant_wna_sponsor_address`, `applicant_wna_sponsor_occupation`, `applicant_wna_sponsor_phone`) VALUES
(1, 'E2329090EW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'E2329780EW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, '11', '2010 ke Malaysia, TKI', '0', 'Memasak', '0', '0', '0', '0', '0'),
(109, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(110, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(111, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(112, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(113, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(114, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(115, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(116, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(117, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(118, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(119, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(120, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(121, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(122, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(123, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0'),
(124, '177', 'Ya, jadi TKI 2010 ke Taiwan.', '0', 'Bola', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `skck_pelanggaran`
--

CREATE TABLE IF NOT EXISTS `skck_pelanggaran` (
`id` int(11) NOT NULL,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_pidana` varchar(45) NOT NULL,
  `applicant_pidana_apa` varchar(45) DEFAULT NULL,
  `applicant_pidana_proses` varchar(45) DEFAULT NULL,
  `applicant_pidana_kasus` varchar(45) DEFAULT NULL,
  `applicant_pidana_sampaimana` varchar(45) DEFAULT NULL,
  `applicant_pidana_putusansementara` varchar(45) DEFAULT NULL,
  `applicant_pidana_putusanakhir` varchar(45) DEFAULT NULL,
  `applicant_pelanggaran` varchar(45) NOT NULL,
  `applicant_pelanggaran_apa` varchar(45) DEFAULT NULL,
  `applicant_pelanggaran_proses` varchar(45) DEFAULT NULL,
  `applicant_pelanggaran_sampaimana` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck_pelanggaran`
--

INSERT INTO `skck_pelanggaran` (`id`, `applicant_id`, `applicant_pidana`, `applicant_pidana_apa`, `applicant_pidana_proses`, `applicant_pidana_kasus`, `applicant_pidana_sampaimana`, `applicant_pidana_putusansementara`, `applicant_pidana_putusanakhir`, `applicant_pelanggaran`, `applicant_pelanggaran_apa`, `applicant_pelanggaran_proses`, `applicant_pelanggaran_sampaimana`) VALUES
(1, '2.4591681E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(2, '8381025.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(3, '2304.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(4, '178084.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(5, '9424900.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(6, '512656.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(7, '2.2165264E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(8, '2.2316176E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(9, '2.4730729E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(10, '90601.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(11, '5349969.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(12, '343396.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(13, '2.0016676E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(14, '5508409.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(15, '1.9105641E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(16, '2.4226084E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(17, '4173849.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(18, '8111104.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(19, '1.3293316E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(20, '712336.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(21, '1.6548624E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(22, '2.10681E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(23, '8468100.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(24, '4235364.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(25, '2.2259524E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(26, '1.8472804E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(27, '1.1082241E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(28, '1.3337104E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(29, '2.1576025E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(30, '1.5000129E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(31, '1.7623204E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(32, '1014049.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(33, '1.5888196E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(34, '1885129.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(35, '8242641.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(36, '327184.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(37, '1.1614464E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(38, '5812921.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(39, '7150276.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(40, '1.0465225E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(41, '3364.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(42, '7295401.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(43, '1.2545764E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(44, '2.3609881E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(45, '2099601.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(46, '1.7766225E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(47, '1132096.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(48, '1.8722929E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(49, '5139289.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(50, '1.4992384E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(51, '1.81476E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(52, '1.0850436E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(53, '504100.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(54, '5041.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(55, '323761.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(56, '268324.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(57, '1.0374841E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(58, '1868689.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(59, '2.4413481E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(60, '1633284.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(61, '9409.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(62, '8958049.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(63, '4096.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(64, '1181569.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(65, '2.2743361E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(66, '4410000.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(67, '1819801.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(68, '4558225.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(69, '1.5335056E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(70, '2.3155344E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(71, '2175625.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(72, '1.7656804E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(73, '1297321.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(74, '4682896.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(75, '1.7123044E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(76, '1.3220496E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(77, '7420176.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(78, '289.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(79, '256.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(80, '1.7098225E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(81, '1809025.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(82, '3139984.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(83, '4748041.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(84, '4318084.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(85, '2.49001E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(86, '1.5327225E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(87, '8673025.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(88, '7420176.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(89, '555025.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(90, '1.9766916E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(91, '1.6933225E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(92, '2446096.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(93, '25.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(94, '6640929.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(95, '2.3348224E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(96, '1359556.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(97, '3411409.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(98, '8732025.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(99, '35721.0', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(100, '1.6924996E7', 'Tidak Pernah', NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak Pernah', NULL, NULL, NULL),
(108, '11', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(109, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(110, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(111, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(112, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(113, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(114, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(115, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(116, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(117, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(118, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(119, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(120, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(121, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(122, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(123, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(124, '177', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `skck_personaldata`
--

CREATE TABLE IF NOT EXISTS `skck_personaldata` (
`id` int(11) NOT NULL,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `applicant_birthplace` varchar(30) NOT NULL,
  `applicant_birthdate` date NOT NULL,
  `applicant_religion` varchar(18) NOT NULL,
  `applicant_citizenship` varchar(1) NOT NULL,
  `applicant_sex` varchar(1) NOT NULL,
  `applicant_marital_status` varchar(1) NOT NULL DEFAULT 'T',
  `applicant_occupation` varchar(20) NOT NULL,
  `applicant_address_doc` mediumtext NOT NULL,
  `applicant_address_now` mediumtext,
  `applicant_passport` varchar(10) DEFAULT NULL,
  `applicant_phone` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck_personaldata`
--

INSERT INTO `skck_personaldata` (`id`, `applicant_id`, `applicant_name`, `applicant_birthplace`, `applicant_birthdate`, `applicant_religion`, `applicant_citizenship`, `applicant_sex`, `applicant_marital_status`, `applicant_occupation`, `applicant_address_doc`, `applicant_address_now`, `applicant_passport`, `applicant_phone`) VALUES
(1, '1.3373649E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(2, '4730625.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(3, '469225.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(4, '1505529.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(5, '2.4157225E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(6, '7946761.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(7, '2534464.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(8, '2.1353641E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(9, '5861241.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(10, '1.9501056E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(11, '7017201.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(12, '1205604.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(13, '9511056.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(14, '2.4443136E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(15, '1.2909649E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(16, '1.9149376E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(17, '2.0259001E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(18, '1.8774889E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(19, '4687225.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(20, '1800964.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(21, '1.9386409E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(22, '4056196.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(23, '5424241.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(24, '1000000.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(25, '5934096.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(26, '538756.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(27, '256.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(28, '1.1573604E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(29, '2.0115225E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(30, '1.13569E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(31, '5982916.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(32, '1125721.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(33, '2588881.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(34, '3441025.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(35, '1.6687225E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(36, '2903616.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(37, '2486929.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(38, '2.0629764E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(39, '2.0748025E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(40, '4218916.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(41, '1.6883881E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(42, '7128900.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(43, '1.3756681E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(44, '1.4561856E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(45, '2.2886656E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(46, '1.8627856E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(47, '1.2759184E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(48, '2985984.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(49, '2.12521E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(50, '831744.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(51, '688900.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(52, '2.4532209E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(53, '2.0214016E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(54, '7091569.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(55, '65536.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(56, '1.3111641E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(57, '2916.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(58, '6974881.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(59, '2739025.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(60, '2627641.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(61, '345744.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(62, '1495729.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(63, '1.6695396E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(64, '1.2383361E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(65, '9084196.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(66, '63001.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(67, '693889.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(68, '731025.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(69, '1.2766329E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(70, '657721.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(71, '1.5745024E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(72, '1.8011536E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(73, '2199289.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(74, '1.3801225E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(75, '2002225.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(76, '2499561.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(77, '144.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(78, '4726276.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(79, '1.36161E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(80, '1.9149376E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(81, '540225.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(82, '2411809.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(83, '8054244.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(84, '9186961.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(85, '1.95364E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(86, '524176.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(87, '273529.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(88, '1.2902464E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(89, '1.0810944E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(90, '1.6048036E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(91, '2019241.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(92, '2509056.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(93, '5776.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(94, '2.1049744E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(95, '1.5507844E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(96, '434281.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(97, '6250000.0', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(98, '2.2024249E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(99, '1.1985444E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(100, '1.9236996E7', 'Andri Hardiansyah', 'Bogor', '1985-11-04', 'Islam', 'I', 'M', 'T', 'PNS Dosen UI', 'Jln. Pajajaran No. 35 Kec. Bogor Timur Kota Bogor', NULL, 'T196784', '081246882840'),
(107, '11', 'Ali', 'Bkl', '0000-00-00', 'Islam', 'I', 'M', 'K', 'W', 'A', '', '', '0822'),
(108, '11', 'Ali', 'Bkl', '0000-00-00', 'Islam', 'I', 'M', 'K', 'W', 'A', '', '', '0822'),
(109, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(110, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(111, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(112, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(113, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(114, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(115, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(116, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(117, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(118, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(119, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(120, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(121, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(122, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(123, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298'),
(124, '177', 'Ali Fahmi Perwira Negara', 'Bengkulu', '0000-00-00', 'Islam', 'I', 'M', 'K', 'Swasta', 'Jalan', 'Jalan', 'U931', '082233043298');

-- --------------------------------------------------------

--
-- Table structure for table `skck_registration`
--

CREATE TABLE IF NOT EXISTS `skck_registration` (
`id` int(11) NOT NULL,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `unit_type` varchar(10) NOT NULL DEFAULT 'JATIM001C',
  `reg_type` varchar(1) NOT NULL,
  `status_type` varchar(1) NOT NULL DEFAULT 'D',
  `purpose_desc` mediumtext NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `application_id` varchar(12) NOT NULL,
  `timestamps` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skck_registration`
--

INSERT INTO `skck_registration` (`id`, `applicant_id`, `applicant_name`, `unit_type`, `reg_type`, `status_type`, `purpose_desc`, `staff_id`, `application_id`, `timestamps`) VALUES
(1, '1503076.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(2, '2.2553001E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(3, '1170724.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(4, '7890481.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(5, '4116841.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(6, '4060225.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(7, '63504.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(8, '1.4891881E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(9, '585225.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(10, '2.0376196E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(11, '5866084.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(12, '1.2257001E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(13, '277729.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(14, '1218816.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(15, '2845969.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(16, '9114361.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(17, '168100.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(18, '633616.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(19, '427716.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(20, '400.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(21, '5880625.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(22, '591361.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(23, '6724.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(24, '7398400.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(25, '9572836.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(26, '5080516.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(27, '2280100.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(28, '316969.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(29, '57600.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(30, '3511876.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(31, '2.4000201E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(32, '43681.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(33, '3115225.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(34, '3415104.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(35, '8020224.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(36, '2.2581504E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(37, '5736025.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(38, '1.4250625E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(39, '5669161.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(40, '6786025.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(41, '2122849.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(42, '9840769.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(43, '7823209.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(44, '1.2027024E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(45, '1.2013156E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(46, '3467044.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(47, '2196324.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(48, '1635841.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(49, '2.2137025E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(50, '2471184.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(51, '4235364.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(52, '7540516.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(53, '6071296.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(54, '8649481.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(55, '7612081.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(56, '201601.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(57, '2.1178404E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(58, '1.1868025E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(59, '1710864.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(60, '3441025.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(61, '2030625.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(62, '6145441.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(63, '522729.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(64, '5253264.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(65, '8862529.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(66, '1.3388281E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(67, '2.2686169E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(68, '3045025.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(69, '456976.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(70, '7396.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(71, '2.4117921E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(72, '881721.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(73, '2.3415921E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(74, '1.8913801E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(75, '114244.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(76, '5541316.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(77, '6155361.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(78, '1.9140625E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(79, '586756.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(80, '1.28881E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(81, '3575881.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(82, '1437601.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(83, '3857296.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(84, '2.4810361E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(85, '2271049.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(86, '5103081.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(87, '1.4122564E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(88, '2.2676644E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(89, '344569.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(90, '2.0106256E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(91, '1723969.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(92, '1026169.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(93, '3290596.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(94, '209764.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(95, '2.4820324E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(96, '2673225.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(97, '2832489.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(98, '1.4891881E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(99, '329476.0', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(100, '1.4455204E7', '', 'JATIM001C', '1', 'D', 'Melamar CPNS', NULL, '', '2015-04-05 11:00:00'),
(107, '11', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND12045295', '2015-04-12 19:34:20'),
(108, '11', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND12044665', '2015-04-12 19:34:44'),
(109, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204472796', '2015-04-12 22:06:43'),
(110, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204910894', '2015-04-12 22:11:34'),
(111, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204301941', '2015-04-12 22:11:49'),
(112, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204160021', '2015-04-12 22:45:51'),
(113, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204104863', '2015-04-12 22:46:09'),
(114, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204462653', '2015-04-12 23:00:52'),
(115, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204889467', '2015-04-12 23:08:19'),
(116, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204912472', '2015-04-12 23:08:42'),
(117, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204643682', '2015-04-12 23:09:03'),
(118, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204949913', '2015-04-12 23:09:21'),
(119, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204821237', '2015-04-12 23:52:17'),
(120, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204260233', '2015-04-12 23:53:32'),
(121, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204725377', '2015-04-12 23:54:19'),
(122, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204355037', '2015-04-12 23:57:16'),
(123, '177', '', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1204708319', '2015-04-12 23:57:42'),
(124, '177', 'Ali Fahmi Perwira Negara', 'JATIM001C', 'N', 'D', 'CPNS', NULL, 'ND1304949394', '2015-04-13 00:26:43'),
(125, '177246806824', 'Hamzah Haz', 'JATIM001C', 'N', 'D', '0', NULL, 'ND1804860677', '2015-04-18 11:19:28'),
(126, '177246806824', 'Hamzah Haz', 'JATIM001C', 'N', 'D', '0', NULL, 'ND1804705981', '2015-04-18 11:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `signup_date` datetime DEFAULT NULL,
  `phone_mobile` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `address_street` varchar(150) DEFAULT NULL,
  `address_city` varchar(100) DEFAULT NULL,
  `address_state` varchar(100) DEFAULT NULL,
  `address_country` varchar(100) DEFAULT NULL,
  `address_postalcode` varchar(20) DEFAULT NULL,
  `deleted` enum('Y','N') DEFAULT 'N',
  `user_status` enum('A','B') DEFAULT 'A' COMMENT 'A: Active; B: Blocked'
) ENGINE=MyISAM AUTO_INCREMENT=649 DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_cookies`
--
ALTER TABLE `ci_cookies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `skck_administrators`
--
ALTER TABLE `skck_administrators`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skck_cirifisik`
--
ALTER TABLE `skck_cirifisik`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `skck_documents`
--
ALTER TABLE `skck_documents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skck_education`
--
ALTER TABLE `skck_education`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `skck_family`
--
ALTER TABLE `skck_family`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `skck_keterangan`
--
ALTER TABLE `skck_keterangan`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `skck_pelanggaran`
--
ALTER TABLE `skck_pelanggaran`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `skck_personaldata`
--
ALTER TABLE `skck_personaldata`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `skck_registration`
--
ALTER TABLE `skck_registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_cookies`
--
ALTER TABLE `ci_cookies`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skck_administrators`
--
ALTER TABLE `skck_administrators`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skck_cirifisik`
--
ALTER TABLE `skck_cirifisik`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `skck_documents`
--
ALTER TABLE `skck_documents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `skck_education`
--
ALTER TABLE `skck_education`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `skck_family`
--
ALTER TABLE `skck_family`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `skck_keterangan`
--
ALTER TABLE `skck_keterangan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `skck_pelanggaran`
--
ALTER TABLE `skck_pelanggaran`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `skck_personaldata`
--
ALTER TABLE `skck_personaldata`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `skck_registration`
--
ALTER TABLE `skck_registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=649;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `skck_cirifisik`
--
ALTER TABLE `skck_cirifisik`
ADD CONSTRAINT `idcirifisik` FOREIGN KEY (`id`) REFERENCES `skck_registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skck_documents`
--
ALTER TABLE `skck_documents`
ADD CONSTRAINT `iddocuments` FOREIGN KEY (`id`) REFERENCES `skck_registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skck_education`
--
ALTER TABLE `skck_education`
ADD CONSTRAINT `ideducation` FOREIGN KEY (`id`) REFERENCES `skck_registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skck_family`
--
ALTER TABLE `skck_family`
ADD CONSTRAINT `idfamily` FOREIGN KEY (`id`) REFERENCES `skck_registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skck_keterangan`
--
ALTER TABLE `skck_keterangan`
ADD CONSTRAINT `idketerangan` FOREIGN KEY (`id`) REFERENCES `skck_registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skck_pelanggaran`
--
ALTER TABLE `skck_pelanggaran`
ADD CONSTRAINT `idpelanggaran` FOREIGN KEY (`id`) REFERENCES `skck_registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skck_personaldata`
--
ALTER TABLE `skck_personaldata`
ADD CONSTRAINT `idpersonal` FOREIGN KEY (`id`) REFERENCES `skck_registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
