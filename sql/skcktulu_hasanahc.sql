-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: 192.168.23.16:3306
-- Generation Time: Apr 28, 2015 at 12:09 AM
-- Server version: 5.1.73
-- PHP Version: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skcktulu_hasanahc`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_cookies`
--

CREATE TABLE IF NOT EXISTS `ci_cookies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cookie_id` varchar(255) DEFAULT NULL,
  `netid` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `orig_page_requested` varchar(120) DEFAULT NULL,
  `php_session_id` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b5cb85dc286735497150c3c3b5b4638c', '116.68.250.62', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430146324, ''),
('d83a8f7896bc08fbd454d1886e392bda', '202.62.16.133', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0', 1430143076, ''),
('e38056080ee8f732dfd73466f11894b6', '116.68.250.62', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430145667, 'a:6:{s:9:"user_data";s:0:"";s:2:"id";s:1:"2";s:10:"staff_code";s:7:"HSNH007";s:14:"staff_username";s:5:"admin";s:13:"is_user_login";b:1;s:10:"staff_role";s:1:"5";}'),
('a20228a683ea94f776009cfcb305d563', '116.68.250.62', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430149495, 'a:6:{s:9:"user_data";s:0:"";s:2:"id";s:1:"2";s:10:"staff_code";s:7:"HSNH007";s:14:"staff_username";s:5:"admin";s:13:"is_user_login";b:1;s:10:"staff_role";s:1:"5";}'),
('4681fdb272aa8bb58febc095bceea199', '116.68.250.62', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430150011, ''),
('0b1ccda9f1c03d2b1d1af822a6ae7603', '116.68.250.62', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430150011, 'a:6:{s:9:"user_data";s:0:"";s:2:"id";s:1:"2";s:10:"staff_code";s:7:"HSNH007";s:14:"staff_username";s:5:"admin";s:13:"is_user_login";b:1;s:10:"staff_role";s:1:"5";}'),
('f9573064df86ab1f55911229c2de346d', '116.68.250.62', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36', 1430150929, 'a:6:{s:9:"user_data";s:0:"";s:2:"id";s:1:"2";s:10:"staff_code";s:7:"HSNH007";s:14:"staff_username";s:5:"admin";s:13:"is_user_login";b:1;s:10:"staff_role";s:1:"5";}');

-- --------------------------------------------------------

--
-- Table structure for table `skck_administrators`
--

CREATE TABLE IF NOT EXISTS `skck_administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_code` varchar(15) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_username` varchar(20) NOT NULL,
  `staff_password` varchar(128) NOT NULL,
  `staff_rank` varchar(20) NOT NULL,
  `staff_role` int(1) NOT NULL DEFAULT '5',
  `staff_created_at` datetime NOT NULL,
  `staff_last_login` datetime DEFAULT NULL,
  `staff_last_logout` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `skck_administrators`
--

INSERT INTO `skck_administrators` (`id`, `staff_code`, `staff_name`, `staff_username`, `staff_password`, `staff_rank`, `staff_role`, `staff_created_at`, `staff_last_login`, `staff_last_logout`) VALUES
(2, 'HSNH007', 'Administrator', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Developer', 5, '2015-04-24 00:00:00', '2015-04-27 23:08:52', NULL),
(3, 'NRP 68040189', 'Abul Imam, SH', 'ka.satintelkam', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'AKP', 9, '2015-04-26 00:00:00', NULL, NULL),
(4, 'NRP 15042600', 'Staff Sat Intelkam Polres Tulung Agung', 'staff.satintelkam', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Petugas SKCK', 5, '2015-04-26 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skck_cirifisik`
--

CREATE TABLE IF NOT EXISTS `skck_cirifisik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_rambut` varchar(20) NOT NULL,
  `applicant_wajah` varchar(20) NOT NULL,
  `applicant_kulit` varchar(20) NOT NULL,
  `applicant_tinggibadan` varchar(3) NOT NULL,
  `applicant_beratbadan` varchar(3) NOT NULL,
  `applicant_tandakhusus` mediumtext,
  `applicant_rumussidikjari` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `skck_cirifisik`
--

INSERT INTO `skck_cirifisik` (`id`, `applicant_id`, `applicant_rambut`, `applicant_wajah`, `applicant_kulit`, `applicant_tinggibadan`, `applicant_beratbadan`, `applicant_tandakhusus`, `applicant_rumussidikjari`) VALUES
(2, '206802100567002', 'Hitam Lurus', 'Oval Kaku', 'Sawo Matang', '174', '68', 'Berkacamata', '#'),
(10, '386802900377002', 'Hitam Keriting', 'Bulat Tirus', 'Sawo Matang', '176', '70', 'Bekas Luka Sayatan di Betis Kiri', '#'),
(11, '1771050406870012', 'Hitam Berombak', 'Bulat Tirus', 'Hitam', '174', '52', '', '-'),
(17, '4089720607722480', 'Hitam Lurus', 'Kotak Tirus', 'Coklat ', '172', '70', '', '#'),
(18, '12321312213213', 'coklat', 'oval', 'sawomatang', '193', '60', 'ada luka di hati', '1312313#1231312'),
(33, '10833468902468', 'Hitam Pendek', 'Bulat', 'Sawo Cerah', '166', '90', '', '#'),
(34, '1221111', 'Hitam', 'Oval', 'Sawo', '168', '70', 'Bekas Lecet Di Pelipis', '#'),
(35, '0767788', 'Ikal', 'Oval', 'Sawomatang', '176', '76', '', '#'),
(36, '3504030707830004', 'HITAM LURUS', 'OVAL', 'SAWO MATANG', '165', '78', 'TIDAK ADA', '#'),
(37, '12', 'A', 'A', 'A', '156', '72', '', '#'),
(38, '12', 'A', 'A', 'A', '156', '72', '', '#'),
(39, '12', 'A', 'A', 'A', '156', '72', '', '#'),
(40, '11', 'A', 'A', 'A', '11', '11', '', '#'),
(42, '3504021201760002', 'Keriting', 'Oval', 'Coklat', '170', '67', '-', '14-O-12-W-000-8#I-15-W-0I0'),
(43, '3504021201760002', 'Keriting', 'Oval', 'Coklat', '170', '67', '-', '14-O-12-W-000-8#I-15-W-0I0'),
(44, '3504121809890001', 'HITAM BERGELOMBANG', 'BULAT', 'SAWO MATANG', '169', '70', '', '--O-18-U-0I0-14#I-24-R-00I'),
(46, '3504013681096001', 'Hitam', 'Oval', 'Sawo Matang', '165', '60', 'Tidak Ada', '21 L 1 U Ooi 7# M 1 U Oii '),
(49, '204207270385004', 'Hitam', 'Oval', 'Sawo Matang', '169', '73', 'Bekas Luka Hati', '     #     '),
(50, '204207270385004', 'Hitam', 'Oval', 'Sawo Matang', '169', '73', 'Bekas Luka Hati', '     #     '),
(51, '204207270385004', 'Hitam', 'Oval', 'Sawo Matang', '169', '73', 'Bekas Luka Hati', '     #     '),
(52, '11', 'Qq', 'Qq', 'Qq', '168', '22', '', '     #     '),
(53, '34', '3', 'F', 'F', '3', '4', '', '     #     ');

-- --------------------------------------------------------

--
-- Table structure for table `skck_documents`
--

CREATE TABLE IF NOT EXISTS `skck_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_docs_exist` varchar(1) NOT NULL DEFAULT 'Y',
  `skck_ktp` tinytext,
  `skck_passport` tinytext,
  `skck_familycard` tinytext,
  `skck_birthcert` tinytext,
  `skck_fingerprint` tinytext,
  `skck_corp_sponsor` tinytext,
  `skck_marital_letter` tinytext,
  `skck_report_evidence` tinytext,
  `skck_surat_polsek` tinytext,
  `skck_surat_desa` tinytext,
  `skck_surat_kecamatan` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `skck_documents`
--

INSERT INTO `skck_documents` (`id`, `applicant_id`, `applicant_docs_exist`, `skck_ktp`, `skck_passport`, `skck_familycard`, `skck_birthcert`, `skck_fingerprint`, `skck_corp_sponsor`, `skck_marital_letter`, `skck_report_evidence`, `skck_surat_polsek`, `skck_surat_desa`, `skck_surat_kecamatan`) VALUES
(2, '206802100567002', 'Y', '', 'paspor_paspor.jpg', 'kk_kk.jpg', 'akte_akte_lahir.jpg', 'FP_Jellyfish.jpg', NULL, 'nikah_surat_nikah.jpg', NULL, NULL, NULL, NULL),
(10, '386802900377002', 'Y', 'ktp_ktp.jpg', 'paspor_paspor.jpg', 'kk_kk.jpg', 'akte_akte_lahir.jpg', NULL, NULL, 'nikah_surat_nikah.jpg', NULL, NULL, NULL, NULL),
(11, '1771050406870012', 'Y', 'ktp_ktp.jpg', 'paspor_paspor.jpg', 'kk_kk.jpg', 'akte_akte_lahir.jpg', NULL, NULL, 'nikah_surat_nikah.jpg', NULL, NULL, NULL, NULL),
(17, '4089720607722480', 'Y', 'ktp_ktp.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '12321312213213', 'N', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '10833468902468', 'Y', 'ktp_ktp.jpg', 'paspor_paspor.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '1221111', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, '0767788', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, '3504030707830004', 'Y', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '12', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '12', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, '12', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, '11', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '3504021201760002', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, '3504021201760002', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '3504121809890001', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '3504013681096001', 'N', NULL, NULL, NULL, 'akte_ny.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '204207270385004', 'Y', 'ktp_Cardlink_Engineers_Developers_Team_BRI_2010-2015.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, '204207270385004', 'Y', 'ktp_Cardlink_Engineers_Developers_Team_BRI_2010-2015.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, '204207270385004', 'Y', 'ktp_Cardlink_Engineers_Developers_Team_BRI_2010-2015.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, '11', 'Y', 'ktp_ktp.jpg', NULL, 'kk_kk.jpg', NULL, NULL, 'surat_polsek_Cardlink_Engineers_Developers_Team_BRI_2010-2015.jpg', 'surat_desa_Cardlink_Engineers_Developers_Team_BRI_2010-2015.jpg', 'surat_kecamatan_Cardlink_Engineers_Developers_Team_BRI_2010-2015.jpg', NULL, NULL, NULL),
(53, '34', 'Y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skck_education`
--

CREATE TABLE IF NOT EXISTS `skck_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_hist_school` varchar(1) NOT NULL DEFAULT 'Y',
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
  `applicant_edu_doctoral_year` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `skck_education`
--

INSERT INTO `skck_education` (`id`, `applicant_id`, `applicant_hist_school`, `applicant_edu_primary`, `applicant_edu_primary_city`, `applicant_edu_primary_year`, `applicant_edu_secondary`, `applicant_edu_secondary_city`, `applicant_edu_secondary_year`, `applicant_edu_tertiary`, `applicant_edu_tertiary_city`, `applicant_edu_tertiary_year`, `applicant_edu_bachelor`, `applicant_edu_bachelor_city`, `applicant_edu_bachelor_year`, `applicant_edu_master`, `applicant_edu_master_city`, `applicant_edu_master_year`, `applicant_edu_doctoral`, `applicant_edu_doctoral_city`, `applicant_edu_doctoral_year`) VALUES
(2, '206802100567002', 'Y', 'SDN 1 Cicaheum', 'Cimahi', '1972', 'SMPN 1 Bandung', 'Bandung', '1975', 'SMAN 3 Bandung ', 'Bandung', '1978', 'Arsitektur Institut Teknologi Bandung', 'Bandung', '1982', 'School of Urban Architecture, UC Berkeley', 'California, USA', '1988', '', '', ''),
(10, '386802900377002', 'Y', 'SDN 1 Cicaheum', 'Cimahi', '1979', 'SMPN 1 Bandung', 'Bandung', '1985', 'SMAN 1 Boyolangu', 'Tulung Agung', '1988', 'Fakultas Hukum Universita Airlangga', 'Surabaya', '1982', 'School of Law, Imperial College, UK', 'London, The UK', '1992', '', '', ''),
(11, '1771050406870012', 'Y', 'SDN 52 Bengkulu', 'Bengkulu', '2000', 'SMPN 4 Bengkulu', 'Bengkulu', '2003', 'SMAN 10 Bengkulu', 'Bengkulu', '2006', 'Fakultas KIP, Penjas, Univ. Bengkulu', 'Bengkulu', '2010', '', '', '', '', '', ''),
(17, '4089720607722480', 'N', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '12321312213213', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, '10833468902468', 'Y', 'SDN 1 BURENGAN KOTA KEDIRI', 'Kediri', '1999', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, '1221111', 'Y', 'SDN', 'Tulung Agung', '1992', 'SMP', 'Kediri', '1995', 'SMA', 'Bogor', '1998', 'S1', 'Bandung', '2002', 'S2', 'Texas', '2010', 'S3', 'Tokyo', '2017'),
(35, '0767788', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, '3504030707830004', 'Y', 'SDN KAMPUNGDALEM 5', 'TULUNGAGUNG', '1996', 'SMP N 2 TULUNGAGUNG', 'TULUNGAGUNG', '1999', 'SMU N 1 BOYOLANGU', 'TULUNGAGUNG', '2002', 'FAKULTAS HUKUM UNIV KADIRI', 'KEDIRI', '2009', '', '', '', '', '', ''),
(37, '12', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, '12', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '12', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, '11', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, '3504021201760002', 'Y', 'SDN BLIMBING', 'Malang', '1989', 'SMP1 ', 'Malang', '1991', 'SMA 8', 'Malang', '1994', '', '', '', '', '', '', '', '', ''),
(43, '3504021201760002', 'Y', 'SDN BLIMBING', 'Malang', '1989', 'SMP1 ', 'Malang', '1991', 'SMA 8', 'Malang', '1994', '', '', '', '', '', '', '', '', ''),
(44, '3504121809890001', 'Y', 'SDN 1 DEMUK', 'TULUNGAGUNG', '2002', 'SMP 1 NGUNUT', 'TULUNGAGUNG', '2005', 'SMA 1 NGUNUT', 'TULUNGAGUNG', '2008', '', '', '', '', '', '', '', '', ''),
(46, '3504013681096001', 'Y', 'SDN TENGGONG', '', '2003', 'SMP NGUNUT', '', '2009', 'SMA NGUNUT', '', '2012', '', '', '', '', '', '', '', '', ''),
(49, '204207270385004', 'N', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, '204207270385004', 'N', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, '204207270385004', 'N', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, '11', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '34', 'Y', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `skck_family`
--

CREATE TABLE IF NOT EXISTS `skck_family` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_spouse_type` varchar(1) DEFAULT NULL,
  `applicant_spouse_name` varchar(50) DEFAULT NULL,
  `applicant_spouse_age` varchar(3) DEFAULT NULL,
  `applicant_spouse_religion` varchar(18) DEFAULT NULL,
  `applicant_spouse_citizenship` varchar(1) DEFAULT NULL,
  `applicant_spouse_occupation` varchar(20) DEFAULT NULL,
  `applicant_spouse_address` mediumtext,
  `applicant_father_name` varchar(50) NOT NULL,
  `applicant_father_age` varchar(45) DEFAULT NULL,
  `applicant_father_religion` varchar(18) DEFAULT NULL,
  `applicant_father_citizenship` varchar(1) DEFAULT NULL,
  `applicant_father_occupation` varchar(20) DEFAULT NULL,
  `applicant_father_address` mediumtext,
  `applicant_mother_name` varchar(50) NOT NULL,
  `applicant_mother_age` varchar(45) DEFAULT NULL,
  `applicant_mother_religion` varchar(18) DEFAULT NULL,
  `applicant_mother_citizenship` varchar(1) DEFAULT NULL,
  `applicant_mother_occupation` varchar(20) DEFAULT NULL,
  `applicant_mother_address` mediumtext,
  `applicant_siblings_names` longtext,
  `applicant_siblings_ages` mediumtext,
  `applicant_siblings_addresses` text,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `skck_family`
--

INSERT INTO `skck_family` (`id`, `applicant_id`, `applicant_spouse_type`, `applicant_spouse_name`, `applicant_spouse_age`, `applicant_spouse_religion`, `applicant_spouse_citizenship`, `applicant_spouse_occupation`, `applicant_spouse_address`, `applicant_father_name`, `applicant_father_age`, `applicant_father_religion`, `applicant_father_citizenship`, `applicant_father_occupation`, `applicant_father_address`, `applicant_mother_name`, `applicant_mother_age`, `applicant_mother_religion`, `applicant_mother_citizenship`, `applicant_mother_occupation`, `applicant_mother_address`, `applicant_siblings_names`, `applicant_siblings_ages`, `applicant_siblings_addresses`) VALUES
(2, '206802100567002', 'I', 'Attaliya Kamil', '0', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jalan Merdeka Utara, Kota Bandung', 'Kamil Ananda', '0', 'Islam', 'I', 'PNS Dosen ITB', 'Jalan Merdeka Utara, Kota Bandung', 'Anisah Kamil', '0', 'Islam', 'I', 'PNS Dosen ITB', 'Jalan Merdeka Utara, Kota Bandung', 'Andri Kamil#####', '32#####', 'Jalan Cicaheum Bandung#####'),
(10, '386802900377002', 'I', 'Dewi Suryani', '0', '-', 'I', 'Ibu Rumah Tangga', 'Jalan Kertajaya, Ngunut, Tulung Agung', 'Kamil Ananda', '0', 'Islam', 'I', 'PNS Dosen ITB', 'Jalan Merdeka Utara, Kota Bandung', 'Anisah Kamil', '0', 'Islam', 'I', 'PNS Dosen ITB', 'Jalan Merdeka Utara, Kota Bandung', 'Ridwan Kamil,,', '36,17,17', 'Jalan Merdeka Utara, Kota Bandung 12800,,'),
(11, '1771050406870012', '0', '', '0', 'Islam', 'I', '', '', 'Supangat', '0', 'Islam', 'I', 'Wiraswasta', 'Jalan Salak II Gading Cempaka Kota Bengkulu 38224', 'Ngatiyem', '0', 'Islam', 'I', 'Wiraswasta', 'Jalan Salak II Gading Cempaka Kota Bengkulu 38224', ',,', ',,', ',,'),
(17, '4089720607722480', 'N', '', '0', 'Islam', 'I', '', '', 'Agus Susanto', '0', 'Islam', 'I', 'Petani', 'Jalan Desa 2 Wonogiri', 'Sukarti', '0', 'Islam', 'I', 'Wiraswasta', 'Jalan Desa 2 Wonogiri', '|####', '0|0#0#0#0#0', '|####'),
(18, '12321312213213', 'I', 'Aisyah', '20', 'Islam', 'A', '', '', 'sukirlan', '0', 'Islam', 'I', 'swasta', 'jalan sayang', 'sus', '0', 'Islam', 'I', 'swasta', 'jalan kasih', ',,', ',,', ',,'),
(33, '10833468902468', 'I', 'Lisa Nur Esmaya', '23', 'Islam', 'I', 'Guru', 'Jalan RM Panji Suroso 2 No. 58 Sidoarjo', 'Abdul Ghofur', '56', '-', 'I', 'Polisi', 'Jalan Manggis Kompleks Asrama Polri Resor Kediri No. 23 ', 'Siti Badriah', '50', 'Islam', 'I', 'Polisi', 'Jalan Manggis Kompleks Asrama Polri Resor Kediri No. 23 ', 'Achmad Rofi''i|####', '19|0#0#0#0#0', 'Jalan Manggis Kompleks Asrama Polri Resor Kediri No. 23 |####'),
(34, '1221111', 'I', 'Bhayangkari', '34', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jalan', 'Ayah', '60', 'Islam', 'I', 'Polisi', 'Jalan', 'Ibu', '58', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jalan', ',,', ',,', ',,'),
(35, '0767788', 'N', '', '0', 'Islam', 'I', '', '', 'Bla', '0', 'Islam', 'I', 'Tani', 'Cinta', 'Sun', '0', 'Islam', 'I', 'Wira', 'Cinta', '#####', '0#0#0#0#0#0', '#####'),
(36, '3504030707830004', 'I', 'EKO RETNONINGSIH', '31', 'Islam', 'I', 'PNS', 'RT. 01 RW. 02 DSN. RINGINSARI DS. RINGINPITU KEC. KEDUNGWARU KAB. TULUNGAGUNG', 'SUNARDJI', '61', 'Islam', 'I', 'WIRASWASTA', 'JL. P. ANTASARI RT. 1 RW. 5 KEL. KENAYAN KEC. / KAB. TULUNGAGUNG', 'SUPRIHATIN', '0', 'Islam', 'I', 'Wiraswasta', 'JL. P. ANTASARI RT. 1 RW. 5 KEL. KENAYAN KEC. / KAB. TULUNGAGUNG', ',,', ',,', ',,'),
(37, '12', 'N', '', '0', 'Islam', 'I', 'Tani', '', 'Q', '0', 'Islam', 'I', 'Tani', 'Q', 'Q', '0', 'Islam', 'I', 'Tani', 'Q', '#####', '0#0#0#0#0#0', '#####'),
(38, '12', 'N', '', '0', 'Islam', 'I', 'Tani', '', 'Q', '0', 'Islam', 'I', 'Tani', 'Q', 'Q', '0', 'Islam', 'I', 'Tani', 'Q', '#####', '0#0#0#0#0#0', '#####'),
(39, '12', 'N', '', '0', 'Islam', 'I', 'Tani', '', 'Q', '0', 'Islam', 'I', 'Tani', 'Q', 'Q', '0', 'Islam', 'I', 'Tani', 'Q', '#####', '0#0#0#0#0#0', '#####'),
(40, '11', 'N', '', '0', 'Islam', 'I', 'Tani', '', 'A', '0', 'Islam', 'I', 'Tani', 'Aa', 'A', '0', 'Islam', 'I', 'Tani', 'Aa', '#####', '0#0#0#0#0#0', '#####'),
(42, '3504021201760002', 'I', 'Jubaidah', '31', 'Islam', 'I', 'Swasta', 'Ds. Ringinpitu Kec. Kedungwaru', 'Marsam', '57', 'Islam', 'I', 'Tani', 'Malang', 'Dewi Kunti', '55', 'Islam', 'I', 'Tani', 'Malang', 'Jamjani,,', '19,0,0', 'Malang,,'),
(43, '3504021201760002', 'I', 'Jubaidah', '31', 'Islam', 'I', 'Swasta', 'Ds. Ringinpitu Kec. Kedungwaru', 'Marsam', '57', 'Islam', 'I', 'Tani', 'Malang', 'Dewi Kunti', '55', 'Islam', 'I', 'Tani', 'Malang', 'Jamjani#####', '19#0#0#0#0#0', 'Malang#####'),
(44, '3504121809890001', 'S', '', '0', 'Islam', 'I', 'Tani', '', 'MUJANI', '46', 'Islam', 'I', 'Tani', 'DS. DEMUK KEC. PUCANGLABAN', 'MARPUAH', '45', 'Islam', 'I', 'Tani', 'DS. DEMUK KEC. PUCANGLABAN', ',,', ',,', ',,'),
(46, '3504013681096001', '0', '-', '19', 'Islam', 'I', 'Swasta', 'Rt 1 Rw 2dsn. Krajan Ds Tenggong Kec. Rejotangan', 'Suyatun', '46', 'Islam', 'I', 'Swasta', 'Rt 1 Rw 2dsn. Krajan Ds Tenggong Kec. Rejotangan', 'Siti Msfiah', '38', 'Islam', 'I', 'Swasta', 'Rt 1 Rw 2dsn. Krajan Ds Tenggong Kec. Rejotangan', 'Adit,,', '7,0,0', ',,'),
(49, '204207270385004', 'I', 'Ayu Dwi Kusuma', '29', 'Islam', 'I', 'Pelajar/Mahasiswa', 'Jalan Sebrang Lor VII No. 20 Lodaya, Bogor Tengah, Bogor', 'Andanu Brojonegoro', '60', 'Islam', 'I', 'Swasta', 'Jalan Jabung No. 7 Surabaya', 'Siti Latifah', '56', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jalan Jabung No. 7 Surabaya', '12#####', '15#0#0#0#0#0', 'Jalan Merabu No. 39 Jakarta#####'),
(50, '204207270385004', 'I', 'Ayu Dwi Kusuma', '29', 'Islam', 'I', 'Pelajar/Mahasiswa', 'Jalan Sebrang Lor VII No. 20 Lodaya, Bogor Tengah, Bogor', 'Andanu Brojonegoro', '60', 'Islam', 'I', 'Swasta', 'Jalan Jabung No. 7 Surabaya', 'Siti Latifah', '56', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jalan Jabung No. 7 Surabaya', '12#####', '15#0#0#0#0#0', 'Jalan Merabu No. 39 Jakarta#####'),
(51, '204207270385004', 'I', 'Ayu Dwi Kusuma', '29', 'Islam', 'I', 'Pelajar/Mahasiswa', 'Jalan Sebrang Lor VII No. 20 Lodaya, Bogor Tengah, Bogor', 'Andanu Brojonegoro', '60', 'Islam', 'I', 'Swasta', 'Jalan Jabung No. 7 Surabaya', 'Siti Latifah', '56', 'Islam', 'I', 'Ibu Rumah Tangga', 'Jalan Jabung No. 7 Surabaya', '12#####', '15#0#0#0#0#0', 'Jalan Merabu No. 39 Jakarta#####'),
(52, '11', 'N', '', '0', 'Islam', 'I', 'Tani', '', 'Qq', '0', 'Islam', 'I', 'Tani', 'Qq', 'Qq', '0', 'Islam', 'I', 'Tani', 'Qq', '#####', '0#0#0#0#0#0', '#####'),
(53, '34', 'N', '', '0', 'Islam', 'I', 'Tani', '', '34', '0', 'Islam', 'I', 'Tani', '34', '34', '0', 'Islam', 'I', 'Tani', '34', '#####', '0#0#0#0#0#0', '#####');

-- --------------------------------------------------------

--
-- Table structure for table `skck_keterangan`
--

CREATE TABLE IF NOT EXISTS `skck_keterangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_hist_oversea` varchar(60) DEFAULT NULL,
  `applicant_hist_occupation` varchar(60) DEFAULT NULL,
  `applicant_hist_hobby` varchar(60) DEFAULT NULL,
  `applicant_curr_address` mediumtext,
  `applicant_wna_sponsor` varchar(50) DEFAULT NULL,
  `applicant_wna_sponsor_address` mediumtext,
  `applicant_wna_sponsor_occupation` varchar(20) DEFAULT NULL,
  `applicant_wna_sponsor_phone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `skck_keterangan`
--

INSERT INTO `skck_keterangan` (`id`, `applicant_id`, `applicant_hist_oversea`, `applicant_hist_occupation`, `applicant_hist_hobby`, `applicant_curr_address`, `applicant_wna_sponsor`, `applicant_wna_sponsor_address`, `applicant_wna_sponsor_occupation`, `applicant_wna_sponsor_phone`) VALUES
(2, '206802100567002', '', '', '', '', '', '0', '', ''),
(10, '386802900377002', '', '', '', '', '', '0', '', ''),
(11, '1771050406870012', '', '', '', '', '', '0', '', ''),
(17, '4089720607722480', '', '0', '', '0', '0', '0', '0', '0'),
(18, '12321312213213', '', '', '', '', '', '0', '', ''),
(33, '10833468902468', '', '', '', '', '', '', '', '0'),
(34, '1221111', '', '', '', '', '', '0', '', ''),
(35, '0767788', 'Blm', '', 'Baca', '', '', '', '', '0'),
(36, '3504030707830004', '', '', '', '', '', '0', '', ''),
(37, '12', '', '', '', '', '', '', '', '0'),
(38, '12', '', '', '', '', '', '', '', '0'),
(39, '12', '', '', '', '', '', '', '', '0'),
(40, '11', '', '', '', '', '', '', '', '0'),
(42, '3504021201760002', '', '', '', '', '', '0', '', ''),
(43, '3504021201760002', 'Tidak', '', 'Main Bola', '', '', '', '', '0'),
(44, '3504121809890001', '', '', '', '', '', '0', '', ''),
(46, '3504013681096001', '', '', '', '', '', '0', '', ''),
(49, '204207270385004', 'Ya, 2011 ke Malaysia untuk berlibur', '', 'Membaca', '', '', '', '', '0'),
(50, '204207270385004', 'Ya, 2011 ke Malaysia untuk berlibur', '', 'Membaca', '', '', '', '', '0'),
(51, '204207270385004', 'Ya, 2011 ke Malaysia untuk berlibur', '', 'Membaca', '', '', '', '', '0'),
(52, '11', '', '', '', '', '', '', '', '0'),
(53, '34', '', '', '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `skck_pelanggaran`
--

CREATE TABLE IF NOT EXISTS `skck_pelanggaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `applicant_pelanggaran_sampaimana` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `skck_pelanggaran`
--

INSERT INTO `skck_pelanggaran` (`id`, `applicant_id`, `applicant_pidana`, `applicant_pidana_apa`, `applicant_pidana_proses`, `applicant_pidana_kasus`, `applicant_pidana_sampaimana`, `applicant_pidana_putusansementara`, `applicant_pidana_putusanakhir`, `applicant_pelanggaran`, `applicant_pelanggaran_apa`, `applicant_pelanggaran_proses`, `applicant_pelanggaran_sampaimana`) VALUES
(2, '206802100567002', 'Tidak Pernah', '', 'TP', '', '', '', '', 'Tidak Pernah', '', '0', ''),
(10, '386802900377002', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(11, '1771050406870012', 'TP', '', 'TP', '', '', '', '', '0', '', '0', ''),
(17, '4089720607722480', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(18, '12321312213213', 'TP', '', 'TP', '', '', '', '', '0', '', '0', ''),
(33, '10833468902468', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(34, '1221111', 'TP', '', '', '', '', '', '', 'TP', '', '', ''),
(35, '0767788', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(36, '3504030707830004', 'P', 'dasdfrse', 'TPdfghrhhgh', 'segssgsg', 'fghsrrtth', 'ghfhfs', '2 ', 'TP', '', '0', ''),
(37, '12', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(38, '12', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(39, '12', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(40, '11', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(42, '3504021201760002', 'TP', '-', 'TP', '-', '-', '-', '-', 'TP', '', '0', ''),
(43, '3504021201760002', 'TP', '-', 'TP', '-', '-', '-', '-', 'TP', '', '0', ''),
(44, '3504121809890001', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(46, '3504013681096001', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', 'tidak pernah'),
(49, '204207270385004', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(50, '204207270385004', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(51, '204207270385004', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(52, '11', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', ''),
(53, '34', 'TP', '', 'TP', '', '', '', '', 'TP', '', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `skck_personaldata`
--

CREATE TABLE IF NOT EXISTS `skck_personaldata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `applicant_birthplace` varchar(30) NOT NULL,
  `applicant_birthdate` date NOT NULL,
  `applicant_religion` varchar(18) NOT NULL,
  `applicant_citizenship` varchar(1) NOT NULL,
  `applicant_sex` varchar(1) NOT NULL,
  `applicant_marital_status` varchar(2) NOT NULL DEFAULT 'T',
  `applicant_occupation` varchar(20) NOT NULL,
  `applicant_address_doc` text NOT NULL,
  `applicant_address_now` text,
  `applicant_passport` varchar(10) DEFAULT NULL,
  `applicant_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `skck_personaldata`
--

INSERT INTO `skck_personaldata` (`id`, `applicant_id`, `applicant_name`, `applicant_birthplace`, `applicant_birthdate`, `applicant_religion`, `applicant_citizenship`, `applicant_sex`, `applicant_marital_status`, `applicant_occupation`, `applicant_address_doc`, `applicant_address_now`, `applicant_passport`, `applicant_phone`) VALUES
(2, '206802100567002', 'Ridwan Kamil', 'Bandung', '1967-05-20', 'Islam', 'I', 'M', 'K', 'Walikota Bandung', 'Jalan Merdeka Utara, Kota Bandung 12550', '', 'T196782', '081344682348'),
(10, '386802900377002', 'Basuki Supangat', 'Tulung Agung', '1972-10-15', '-', 'I', 'M', 'K', 'Wiraswasta Mebel Kay', 'Jalan Kertarajasa, Kota Bandung 12550', '', 'AS192482', '081144082348'),
(11, '1771050406870012', 'Rachmat Abidin', 'Bengkulu', '1985-02-13', 'Islam', 'I', 'M', 'K', 'Karyawan Astra', 'Jalan Semangka VII Gading Cempaka Kota Bengkulu', '', '', '082347364059'),
(17, '4089720607722480', 'Yoga Adiwinata', 'Sleman', '1972-07-06', 'Islam', 'I', 'M', 'T', 'Karyawan Swasta', 'Jalan RA Kartini No. 23 Boyolangu', '', '', '08987664290763'),
(18, '12321312213213', 'guntur', 'gresik', '1986-12-20', 'Islam', 'I', 'M', 'K', 'bri', 'jalan cinta', '', '', '211232312312'),
(33, '10833468902468', 'Guntur Nur Happy ', 'Kediri', '1986-12-23', 'Islam', 'I', 'M', 'K', 'Polisi', 'Jalan RM Panji Suroso 2 No. 58 Sidoarjo', '', '', '0812448890246'),
(34, '1221111', 'Admin SKCK Polres Tulung Agung', 'Tulung Agung', '2015-04-25', 'Islam', 'I', 'M', 'K', 'Polisi', 'Jalan', 'Jalan', 'XD4688046', '0899'),
(35, '0767788', 'Gun', 'Gres', '2015-04-08', 'Islam', 'I', 'M', 'K', 'Wira', 'Jln Cinta', '', '', '8666'),
(36, '3504030707830004', 'IRWAN BUDI SASONGKO', 'TULUNGAGUNG', '1983-07-07', 'Islam', 'I', 'M', 'K', 'Wiraswasta', 'RT. 01 RW. 02 DSN. RINGINSARI DS. RINGINPITU KEC. KEDUNGWARU KAB. TULUNGAGUNG', 'RT. 01 RW. 02 DSN. RINGINSARI DS. RINGINPITU KEC. KEDUNGWARU KAB. TULUNGAGUNG', '', '081359334999'),
(37, '12', 'A', 'A', '2015-04-26', 'Islam', 'I', 'M', 'K', 'Tani', 'Jj', '', '', '08'),
(38, '12', 'A', 'A', '2015-04-26', 'Islam', 'I', 'M', 'K', 'Tani', 'Jj', '', '', '08'),
(39, '12', 'A', 'A', '2015-04-26', 'Islam', 'I', 'M', 'K', 'Tani', 'Jj', '', '', '08'),
(40, '11', 'A', 'Aa', '2015-04-01', 'Islam', 'I', 'M', 'K', 'Tani', 'Aa', '', '', '11'),
(42, '3504021201760002', 'Amir Machmud', 'Tulungagung', '1976-01-12', 'Islam', 'I', 'M', 'K', 'Guru', 'Perum Ringinpitu Estate C-12 Rt 5 Rw 2 Ds. Ringinpitu Kec. Kedungwaru Kab. Tulungagung', '', '-', '082234234234'),
(43, '3504021201760002', 'Amir Machmud', 'Tulungagung', '1976-01-12', 'Islam', 'I', 'M', 'K', 'Guru', 'Perum Ringinpitu Estate C-12 Rt 5 Rw 2 Ds. Ringinpitu Kec. Kedungwaru Kab. Tulungagung', '', '-', '082234234234'),
(44, '3504121809890001', 'LUKITO AHMAD', 'TULUNGAGUNG', '0089-09-18', 'Islam', 'I', 'M', 'T', 'Swasta', 'DS. DEMUK KEC. PUCANGLABAN ', '-', '-', '081231234345'),
(46, '3504013681096001', 'Diana Apida', 'Tulungagung', '1996-09-28', 'Islam', 'I', 'F', 'T', 'Swasta', 'Rt 1 Rw 2dsn. Krajan Ds Tenggong Kec. Rejotangan fgfgf gfgfg fgfgfg fgfgfgf', 'Rt 1 Rw 2dsn. Krajan Ds Tenggong Kec. Rejotan ganfg fgfgfgf gfgf', '', '081805530493'),
(49, '204207270385004', 'Azis Surachman', 'Cirebon', '1985-03-27', 'Islam', 'I', 'M', 'K', 'Tani', 'Jalan Merapi No. 2 RT/RW 01/05 Ds. Kutoarjo Kulon, Kec. G. Rejo Kab. Tulung Agung, 55250', '  ', 'AS800469', '0812448890246'),
(50, '204207270385004', 'Azis Surachman', 'Cirebon', '1985-03-27', 'Islam', 'I', 'M', 'K', 'Tani', 'Jalan Merapi No. 2 RT/RW 01/05 Ds. Kutoarjo Kulon, Kec. G. Rejo Kab. Tulung Agung, 55250', '  ', 'AS800469', '0812448890246'),
(51, '204207270385004', 'Azis Surachman', 'Cirebon', '1985-03-27', 'Islam', 'I', 'M', 'K', 'Tani', 'Jalan Merapi No. 2 RT/RW 01/05 Ds. Kutoarjo Kulon, Kec. G. Rejo Kab. Tulung Agung, 55250', '  ', 'AS800469', '0812448890246'),
(52, '11', 'A', 'A', '2015-04-21', 'Islam', 'I', 'M', 'K', 'Tani', 'Q Q Q', '  ', '', '12'),
(53, '34', 'F', 'F', '2015-04-07', 'Islam', 'I', 'M', 'K', 'Tani', 'Jalan Sidodadi Desa Kab  Kota Tulungagung', '  ', '', '343');

-- --------------------------------------------------------

--
-- Table structure for table `skck_registration`
--

CREATE TABLE IF NOT EXISTS `skck_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `applicant_email` varchar(50) DEFAULT '-',
  `unit_type` varchar(10) NOT NULL DEFAULT 'JATIM001C',
  `reg_type` varchar(1) NOT NULL,
  `status_type` varchar(1) NOT NULL DEFAULT 'D',
  `purpose_desc` mediumtext NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `application_id` varchar(12) NOT NULL,
  `print_id` int(11) DEFAULT NULL,
  `timestamps` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `skck_registration`
--

INSERT INTO `skck_registration` (`id`, `applicant_id`, `applicant_name`, `applicant_email`, `unit_type`, `reg_type`, `status_type`, `purpose_desc`, `staff_id`, `application_id`, `print_id`, `timestamps`) VALUES
(2, '206802100567002', 'Ridwan Kamil', '-', 'JATIM001C', 'N', 'P', 'Maju dalam Pemilukada Walikota Bandung 2015', NULL, 'ND2404301210', NULL, '2015-04-24 02:52:16'),
(10, '386802900377002', 'Basuki Supangat', '-', 'JATIM001C', 'N', 'P', 'Maju dalam Pemilukada Walikota Tulung Agung', NULL, '0', NULL, '2015-04-24 03:25:15'),
(11, '1771050406870012', 'Rachmat Abidin', '-', 'JATIM001C', 'N', 'D', 'Melamar Kerja', NULL, 'ND2404314138', NULL, '2015-04-24 03:52:27'),
(17, '4089720607722480', 'Yoga Adiwinata', '-', 'JATIM001C', 'N', 'D', 'Melamar Kerja', NULL, 'ND2404259529', NULL, '2015-04-24 04:20:16'),
(18, '12321312213213', 'guntur', '-', 'JATIM001C', 'N', 'P', 'mencari jodoh', NULL, 'ND2404236437', NULL, '2015-04-24 06:00:01'),
(33, '10833468902468', 'Guntur Nur Happy ', '-', 'JATIM001C', 'N', 'P', 'Naik Jabatan', NULL, 'ND2404598966', NULL, '2015-04-24 15:42:09'),
(34, '1221111', 'Admin SKCK Polres Tulung Agung', '-', 'JATIM001C', 'N', 'P', 'Iseng', NULL, 'ND2504345983', 6, '2015-04-24 18:04:47'),
(35, '0767788', 'Gun', '-', 'JATIM001C', 'N', 'P', 'Melamar Cinta', NULL, 'ND2504629463', 6, '2015-04-25 08:41:41'),
(36, '3504030707830004', 'IRWAN BUDI SASONGKO', '-', 'JATIM001C', 'N', 'P', 'MELAMAR PEKERJAAN DI BANK', NULL, '0', 7, '2015-04-25 11:39:31'),
(37, '12', 'A', '', 'JATIM001C', 'N', 'D', 'LAIN-LAIN', NULL, 'ND2704157835', NULL, '2015-04-26 17:51:16'),
(38, '12', 'A', '', 'JATIM001C', 'N', 'D', 'LAIN-LAIN', NULL, 'ND2704536268', NULL, '2015-04-26 17:53:01'),
(39, '12', 'A', '', 'JATIM001C', 'N', 'D', 'LAIN-LAIN', NULL, 'ND2704233725', NULL, '2015-04-26 17:54:35'),
(40, '11', 'A', 'aaa', 'JATIM001C', 'N', 'P', 'DAFTAR CPNS', NULL, 'ND2704723361', 11, '2015-04-27 02:14:41'),
(42, '3504021201760002', 'Amir Machmud', '', 'JATIM001C', 'N', 'P', 'ADOPSI', NULL, '0', 14, '2015-04-27 03:53:26'),
(43, '3504021201760002', 'Amir Machmud', '', 'JATIM001C', 'N', 'P', 'ADOPSI', NULL, 'ND2704766544', 12, '2015-04-27 04:00:58'),
(44, '3504121809890001', 'LUKITO AHMAD', '', 'JATIM001C', 'N', 'P', 'DAFTAR BUMN/BUMD', NULL, '0', 10, '2015-04-27 04:11:22'),
(46, '3504013681096001', 'Diana Apida', '', 'JATIM001C', 'N', 'P', 'DAFTAR CPNS', NULL, '0', 9, '2015-04-27 05:47:07'),
(49, '204207270385004', 'Azis Surachman', 'southblue@gmail.com', 'JATIM001C', 'N', 'P', 'DAFTAR CPNS', NULL, 'ND2704924030', 15, '2015-04-27 08:30:12'),
(50, '204207270385004', 'Azis Surachman', 'southblue@gmail.com', 'JATIM001C', 'N', 'P', 'DAFTAR CPNS', NULL, 'ND2704746422', 16, '2015-04-27 08:33:06'),
(51, '204207270385004', 'Azis Surachman', 'southblue@gmail.com', 'JATIM001C', 'N', 'D', 'DAFTAR CPNS', NULL, 'ND2704944784', NULL, '2015-04-27 08:42:19'),
(52, '11', 'A', '', 'JATIM001C', 'N', 'P', 'DAFTAR CPNS', NULL, 'ND2704576383', 15, '2015-04-27 08:53:47'),
(53, '34', 'F', '', 'JATIM001C', 'N', 'D', 'DAFTAR CPNS', NULL, 'ND2704680577', NULL, '2015-04-27 14:51:20');

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
