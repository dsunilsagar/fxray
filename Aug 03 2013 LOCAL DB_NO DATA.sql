-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for forexray
CREATE DATABASE IF NOT EXISTS `forexray` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `forexray`;


-- Dumping structure for table forexray.attachments
DROP TABLE IF EXISTS `attachments`;
CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `db_file_name` varchar(255) DEFAULT NULL,
  `original_file_name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `reference_id` int(2) DEFAULT NULL,
  `global_id` int(9) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.captcha
DROP TABLE IF EXISTS `captcha`;
CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.contactus
DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` longtext,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.deposits
DROP TABLE IF EXISTS `deposits`;
CREATE TABLE IF NOT EXISTS `deposits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.ecurrencies
DROP TABLE IF EXISTS `ecurrencies`;
CREATE TABLE IF NOT EXISTS `ecurrencies` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mode` enum('1','2','3') DEFAULT NULL,
  `flat_fees` float DEFAULT NULL,
  `description` text,
  `status` enum('1','0') DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.ecurrency_attachments
DROP TABLE IF EXISTS `ecurrency_attachments`;
CREATE TABLE IF NOT EXISTS `ecurrency_attachments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `attachments_id` int(10) NOT NULL DEFAULT '0',
  `ecurrency_id` int(10) NOT NULL DEFAULT '0',
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.footer_menus
DROP TABLE IF EXISTS `footer_menus`;
CREATE TABLE IF NOT EXISTS `footer_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned DEFAULT '0',
  `language_id` int(10) unsigned DEFAULT '1',
  `custom_url` varchar(512) DEFAULT '',
  `parent_id` int(10) unsigned DEFAULT '0',
  `show_in_main_menu` enum('1','0') CHARACTER SET latin1 DEFAULT '0',
  `order_num` int(10) unsigned DEFAULT '0',
  `name` varchar(512) DEFAULT '',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  `created_by` int(10) DEFAULT NULL,
  `ip_address` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.groups
DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.home_page
DROP TABLE IF EXISTS `home_page`;
CREATE TABLE IF NOT EXISTS `home_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned DEFAULT '0',
  `language_id` int(10) unsigned DEFAULT '1',
  `custom_url` varchar(512) DEFAULT '',
  `read_more_link` varchar(512) DEFAULT '',
  `parent_id` int(10) unsigned DEFAULT '0',
  `show_in_main_menu` enum('1','0') CHARACTER SET latin1 DEFAULT '0',
  `order_num` int(10) unsigned DEFAULT '0',
  `width` int(10) unsigned DEFAULT '0',
  `height` int(10) unsigned DEFAULT '0',
  `inline_styles` int(10) unsigned DEFAULT '0',
  `name` varchar(512) DEFAULT '',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  `created_by` int(10) DEFAULT NULL,
  `ip_address` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.languages
DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `abbr` varchar(125) DEFAULT '',
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.leverage
DROP TABLE IF EXISTS `leverage`;
CREATE TABLE IF NOT EXISTS `leverage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.login_trace
DROP TABLE IF EXISTS `login_trace`;
CREATE TABLE IF NOT EXISTS `login_trace` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `version` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `is_robot` enum('Y','N') DEFAULT 'N',
  `user_agent` varchar(255) DEFAULT NULL,
  `is_chrome_frame` enum('Y','N') DEFAULT 'N',
  `ip_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.media_gallery
DROP TABLE IF EXISTS `media_gallery`;
CREATE TABLE IF NOT EXISTS `media_gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `db_file_name` varchar(255) DEFAULT NULL,
  `original_file_name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `reference_id` int(2) DEFAULT NULL,
  `global_id` int(9) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.menus
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(10) unsigned DEFAULT '0',
  `language_id` int(10) unsigned DEFAULT '1',
  `custom_url` varchar(512) DEFAULT '',
  `parent_id` int(10) unsigned DEFAULT '0',
  `show_in_main_menu` enum('1','0') CHARACTER SET latin1 DEFAULT '0',
  `show_in_footer_menu` enum('1','0') CHARACTER SET latin1 DEFAULT '0',
  `order_num` int(10) unsigned DEFAULT '0',
  `footer_order_num` int(10) unsigned DEFAULT '0',
  `name` varchar(512) DEFAULT '',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  `created_by` int(10) DEFAULT NULL,
  `ip_address` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.news
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `language_id` int(10) unsigned NOT NULL DEFAULT '1',
  `news_categories_id` int(10) NOT NULL DEFAULT '0',
  `heading` varchar(255) DEFAULT NULL,
  `description` longtext,
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  `is_banner` enum('1','0') CHARACTER SET latin1 DEFAULT '0' COMMENT '1 for YES 2 for NO',
  `banner_order_num` int(10) DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.news_attachments
DROP TABLE IF EXISTS `news_attachments`;
CREATE TABLE IF NOT EXISTS `news_attachments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `attachments_id` int(10) NOT NULL DEFAULT '0',
  `news_id` int(10) NOT NULL DEFAULT '0',
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.news_categories
DROP TABLE IF EXISTS `news_categories`;
CREATE TABLE IF NOT EXISTS `news_categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.pages
DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url_key` varchar(255) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `content` longtext,
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(11) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.pages_backup
DROP TABLE IF EXISTS `pages_backup`;
CREATE TABLE IF NOT EXISTS `pages_backup` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `language_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url_key` varchar(255) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `content` longtext,
  `status` enum('1','0') DEFAULT '1',
  `date_added` timestamp NULL DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(11) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.pages_backup_mar11_2013
DROP TABLE IF EXISTS `pages_backup_mar11_2013`;
CREATE TABLE IF NOT EXISTS `pages_backup_mar11_2013` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `language_id` int(10) unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url_key` varchar(255) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `content` longtext,
  `status` enum('1','0') DEFAULT '1',
  `date_added` timestamp NULL DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(11) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.references
DROP TABLE IF EXISTS `references`;
CREATE TABLE IF NOT EXISTS `references` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.register_types
DROP TABLE IF EXISTS `register_types`;
CREATE TABLE IF NOT EXISTS `register_types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.registrations
DROP TABLE IF EXISTS `registrations`;
CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `leverage_id` int(11) NOT NULL,
  `deposit_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_password` varchar(255) NOT NULL,
  `send_reports` varchar(255) NOT NULL,
  `verification_code` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `varification_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '/* Email Verification */',
  `account_verification` enum('1','0') NOT NULL DEFAULT '0' COMMENT '/* Admin -Doc Verification */',
  `user_type` enum('a','u') NOT NULL DEFAULT 'u',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.security_questions
DROP TABLE IF EXISTS `security_questions`;
CREATE TABLE IF NOT EXISTS `security_questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.sent_mails
DROP TABLE IF EXISTS `sent_mails`;
CREATE TABLE IF NOT EXISTS `sent_mails` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.settings
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) DEFAULT '',
  `title` varchar(256) DEFAULT '',
  `validation_classes` varchar(256) DEFAULT '',
  `type` enum('text','select','checkbox','radio') DEFAULT 'text',
  `select_table` varchar(126) DEFAULT '',
  `select_fields` varchar(126) DEFAULT '',
  `value` varchar(512) DEFAULT '',
  `status` enum('1','0') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.test
DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` longtext,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_modified` datetime DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `last_modified_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.testimonials
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) NOT NULL DEFAULT '0',
  `message` tinytext,
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_modified_by` int(11) NOT NULL,
  `ip_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.time_zones
DROP TABLE IF EXISTS `time_zones`;
CREATE TABLE IF NOT EXISTS `time_zones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.update_history_details
DROP TABLE IF EXISTS `update_history_details`;
CREATE TABLE IF NOT EXISTS `update_history_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_history_main_id` int(11) NOT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `old_value` varchar(100) DEFAULT NULL,
  `new_value` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `update_history_main_id` (`update_history_main_id`),
  CONSTRAINT `update_history_details_ibfk_1` FOREIGN KEY (`update_history_main_id`) REFERENCES `update_history_main` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.update_history_details_php
DROP TABLE IF EXISTS `update_history_details_php`;
CREATE TABLE IF NOT EXISTS `update_history_details_php` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update_history_main_php_id` int(11) NOT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `old_value` varchar(100) DEFAULT NULL,
  `new_value` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `update_history_main_php_id` (`update_history_main_php_id`),
  CONSTRAINT `update_history_details_php_ibfk_1` FOREIGN KEY (`update_history_main_php_id`) REFERENCES `update_history_main_php` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.update_history_main
DROP TABLE IF EXISTS `update_history_main`;
CREATE TABLE IF NOT EXISTS `update_history_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modify_date` datetime NOT NULL,
  `table_involved` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.update_history_main_php
DROP TABLE IF EXISTS `update_history_main_php`;
CREATE TABLE IF NOT EXISTS `update_history_main_php` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modify_date` datetime NOT NULL,
  `table_involved` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `users_id` int(11) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_password` varchar(255) NOT NULL,
  `send_reports` enum('1','0') NOT NULL DEFAULT '0',
  `verification_code` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `leverage_id` int(11) NOT NULL,
  `deposit_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `register_types_id` int(11) NOT NULL,
  `business_types_id` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `varification_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '/* Email Verification */',
  `account_verification` enum('1','0') NOT NULL DEFAULT '0' COMMENT '/* Admin -Doc Verification */',
  `user_type` enum('a','u') NOT NULL DEFAULT 'u',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.users_address
DROP TABLE IF EXISTS `users_address`;
CREATE TABLE IF NOT EXISTS `users_address` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `address` text,
  `zip` varchar(50) DEFAULT NULL,
  `countries_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_address_users` (`users_id`),
  CONSTRAINT `FK_users_address_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.users_attachments
DROP TABLE IF EXISTS `users_attachments`;
CREATE TABLE IF NOT EXISTS `users_attachments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `attachments_id` int(10) NOT NULL DEFAULT '0',
  `users_id` int(10) NOT NULL DEFAULT '0',
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.users_contacts
DROP TABLE IF EXISTS `users_contacts`;
CREATE TABLE IF NOT EXISTS `users_contacts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) DEFAULT NULL,
  `home_phone` varchar(50) DEFAULT NULL,
  `mobile_phone` varchar(50) DEFAULT NULL,
  `office_phone` varchar(50) DEFAULT NULL,
  `fax_no` varchar(50) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_contact_users` (`users_id`),
  CONSTRAINT `FK_users_contact_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.users_logs
DROP TABLE IF EXISTS `users_logs`;
CREATE TABLE IF NOT EXISTS `users_logs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) NOT NULL DEFAULT '0',
  `os` varchar(50) NOT NULL DEFAULT '0',
  `browser` varchar(50) DEFAULT NULL,
  `user_agent` varchar(50) DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logout_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.users_settings
DROP TABLE IF EXISTS `users_settings`;
CREATE TABLE IF NOT EXISTS `users_settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) DEFAULT NULL,
  `languages_id` int(10) DEFAULT NULL,
  `time_zones_id` int(10) DEFAULT NULL,
  `time_to_call` varchar(255) DEFAULT NULL,
  `time_zone` varchar(255) DEFAULT NULL,
  `communicate_lang` varchar(255) DEFAULT NULL,
  `newsletter` enum('1','0') DEFAULT '0',
  `ip_security` enum('1','0') DEFAULT '0',
  `security_questions_id` int(11) DEFAULT '0',
  `security_answer` varchar(50) DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(10) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_settings` (`users_id`),
  CONSTRAINT `FK_users_settings` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table forexray.widgets
DROP TABLE IF EXISTS `widgets`;
CREATE TABLE IF NOT EXISTS `widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `widget_type_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `form_data` longtext,
  `widget_code` longtext,
  `status` enum('1','0') CHARACTER SET latin1 DEFAULT '1',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `last_modified_by` int(11) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table forexray.widget_types
DROP TABLE IF EXISTS `widget_types`;
CREATE TABLE IF NOT EXISTS `widget_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `view_file` varchar(255) NOT NULL DEFAULT '',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
