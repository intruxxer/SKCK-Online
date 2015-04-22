-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: 192.168.23.16:3306
-- Generation Time: Apr 23, 2015 at 03:44 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `skck_administrators`
--

CREATE TABLE IF NOT EXISTS `skck_administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_code` varchar(15) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `staff_username` varchar(20) NOT NULL,
  `staff_password` varchar(128) NOT NULL,
  `staff_rank` varchar(20) NOT NULL,
  `staff_role` int(1) NOT NULL DEFAULT '5',
  `staff_created_at` datetime NOT NULL,
  `staff_last_login` datetime DEFAULT NULL,
  `staff_last_logout` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

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
  `applicant_siblings_addresses` text,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `skck_personaldata`
--

CREATE TABLE IF NOT EXISTS `skck_personaldata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `applicant_birthplace` varchar(30) NOT NULL,
  `applicant_birthdate` varchar(18) NOT NULL,
  `applicant_religion` varchar(18) NOT NULL,
  `applicant_citizenship` varchar(1) NOT NULL,
  `applicant_sex` varchar(1) NOT NULL,
  `applicant_marital_status` varchar(1) NOT NULL DEFAULT 'T',
  `applicant_occupation` varchar(20) NOT NULL,
  `applicant_address_doc` mediumtext NOT NULL,
  `applicant_address_now` mediumtext,
  `applicant_passport` varchar(10) DEFAULT NULL,
  `applicant_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

-- --------------------------------------------------------

--
-- Table structure for table `skck_registration`
--

CREATE TABLE IF NOT EXISTS `skck_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` varchar(20) NOT NULL,
  `applicant_name` varchar(50) NOT NULL,
  `unit_type` varchar(10) NOT NULL DEFAULT 'JATIM001C',
  `reg_type` varchar(1) NOT NULL,
  `status_type` varchar(1) NOT NULL DEFAULT 'D',
  `purpose_desc` mediumtext NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `application_id` varchar(12) NOT NULL,
  `timestamps` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

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
