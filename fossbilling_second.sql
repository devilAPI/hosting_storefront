-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 10:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fossbilling_second`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_admin_history`
--

CREATE TABLE `activity_admin_history` (
  `id` bigint(20) NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_client_email`
--

CREATE TABLE `activity_client_email` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `recipients` text DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content_html` text DEFAULT NULL,
  `content_text` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_client_history`
--

CREATE TABLE `activity_client_history` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_system`
--

CREATE TABLE `activity_system` (
  `id` bigint(20) NOT NULL,
  `priority` tinyint(4) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `activity_system`
--

INSERT INTO `activity_system` (`id`, `priority`, `admin_id`, `client_id`, `message`, `ip`, `created_at`, `updated_at`) VALUES
(1, 6, NULL, NULL, 'Added new  email template #1', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(2, 6, NULL, NULL, 'Added new  email template #2', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(3, 6, NULL, NULL, 'Added new  email template #3', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(4, 6, NULL, NULL, 'Added new  email template #4', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(5, 6, NULL, NULL, 'Added new  email template #5', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(6, 6, NULL, NULL, 'Added new  email template #6', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(7, 6, NULL, NULL, 'Added new  email template #7', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(8, 6, NULL, NULL, 'Added new  email template #8', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(9, 6, NULL, NULL, 'Added new  email template #9', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(10, 6, NULL, NULL, 'Added new  email template #10', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(11, 6, NULL, NULL, 'Added new  email template #11', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(12, 6, NULL, NULL, 'Added new  email template #12', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(13, 6, NULL, NULL, 'Added new  email template #13', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(14, 6, NULL, NULL, 'Added new  email template #14', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(15, 6, NULL, NULL, 'Added new  email template #15', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(16, 6, NULL, NULL, 'Added new  email template #16', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(17, 6, NULL, NULL, 'Added new  email template #17', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(18, 6, NULL, NULL, 'Added new  email template #18', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(19, 6, NULL, NULL, 'Added new  email template #19', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(20, 6, NULL, NULL, 'Added new  email template #20', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(21, 6, NULL, NULL, 'Added new  email template #21', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(22, 6, NULL, NULL, 'Added new  email template #22', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(23, 6, NULL, NULL, 'Added new  email template #23', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(24, 6, NULL, NULL, 'Added new  email template #24', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(25, 6, NULL, NULL, 'Added new  email template #25', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(26, 6, NULL, NULL, 'Added new  email template #26', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(27, 6, NULL, NULL, 'Added new  email template #27', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(28, 6, NULL, NULL, 'Added new  email template #28', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(29, 6, NULL, NULL, 'Added new  email template #29', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(30, 6, NULL, NULL, 'Added new  email template #30', '::1', '2024-12-09 21:14:24', '2024-12-09 21:14:24'),
(31, 6, NULL, NULL, 'Added new  email template #31', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(32, 6, NULL, NULL, 'Added new  email template #32', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(33, 6, NULL, NULL, 'Added new  email template #33', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(34, 6, NULL, NULL, 'Added new  email template #34', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(35, 6, NULL, NULL, 'Added new  email template #35', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(36, 6, NULL, NULL, 'Added new  email template #36', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(37, 6, NULL, NULL, 'Added new  email template #37', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(38, 6, NULL, NULL, 'Added new  email template #38', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(39, 6, NULL, NULL, 'Added new  email template #39', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(40, 6, NULL, NULL, 'Added new  email template #40', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(41, 6, NULL, NULL, 'Added new  email template #41', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(42, 6, NULL, NULL, 'Added new  email template #42', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(43, 6, NULL, NULL, 'Added new  email template #43', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(44, 6, NULL, NULL, 'Added new  email template #44', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(45, 6, NULL, NULL, 'Added new  email template #45', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(46, 6, NULL, NULL, 'Added new  email template #46', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(47, 6, NULL, NULL, 'Added new  email template #47', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(48, 6, NULL, NULL, 'Added new  email template #48', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(49, 6, NULL, NULL, 'Generated email templates for installed extensions', '::1', '2024-12-09 21:14:25', '2024-12-09 21:14:25'),
(50, 6, NULL, NULL, 'Staff member 1 logged in', '::1', '2024-12-09 21:15:38', '2024-12-09 21:15:38'),
(51, 6, 1, NULL, 'Started executing cron jobs', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(52, 6, 1, NULL, 'Updated currency rates', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(53, 6, 1, NULL, 'Executed action to synchronize domain expiration dates with registrar', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(54, 6, 1, NULL, 'Pruned the filesystem cache', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(55, 6, 1, NULL, 'Executed action to try cover unpaid invoices with client credits', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(56, 6, 1, NULL, 'Executed action to activate paid invoices', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(57, 6, 1, NULL, 'Executed action to send invoice payment reminders', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(58, 6, 1, NULL, 'Executed action to invoke invoice due event', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(59, 6, 1, NULL, 'Executed action to suspend expired orders', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(60, 6, 1, NULL, 'Executed action to delete expired clients password reminders', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(61, 6, 1, NULL, 'Executed action to clear expired shopping carts from database', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(62, 6, 1, NULL, 'Cleared 0 outdated sessions from the database', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(63, 6, 1, NULL, 'Finished executing cron jobs', '::1', '2024-12-09 21:15:46', '2024-12-09 21:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `role` varchar(30) DEFAULT 'staff' COMMENT 'admin, staff',
  `admin_group_id` bigint(20) DEFAULT 1,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `protected` tinyint(1) DEFAULT 0,
  `status` varchar(30) DEFAULT 'active' COMMENT 'active, inactive',
  `api_token` varchar(128) DEFAULT NULL,
  `permissions` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `role`, `admin_group_id`, `email`, `pass`, `salt`, `name`, `signature`, `protected`, `status`, `api_token`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'felixseiboldt@gmail.com', '$2y$12$UarBc1THEX9Y524aDjf4Tu0Iz8mu1UGx5/xLMqR8LJOPMx/0Idhg6', NULL, 'Felix Seiboldt', NULL, 1, 'active', NULL, NULL, '2024-12-09 22:14:22', '2024-12-09 22:14:22'),
(2, 'cron', 1, 'WesM2VH7@5BRLah1k.com', '$2y$12$pwPvkSDD3JYyzvGfvTEtQeCabCWTCR9YEsji8jccVnfc3ql0X7obu', NULL, 'System Cron Job', '', 1, 'active', NULL, NULL, '2024-12-09 21:15:46', '2024-12-09 21:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `admin_group`
--

CREATE TABLE `admin_group` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin_group`
--

INSERT INTO `admin_group` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrators', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(2, 'Support', '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_reset`
--

CREATE TABLE `admin_password_reset` (
  `id` bigint(20) NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `api_request`
--

CREATE TABLE `api_request` (
  `id` bigint(20) NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `request` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `api_request`
--

INSERT INTO `api_request` (`id`, `ip`, `request`, `created_at`) VALUES
(1, '::1', '/api/guest/staff/login', '2024-12-09 21:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `session_id` varchar(32) DEFAULT NULL,
  `currency_id` bigint(20) DEFAULT NULL,
  `promo_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `session_id`, `currency_id`, `promo_id`, `created_at`, `updated_at`) VALUES
(1, 'fmpmam5ikt27etq0buapk35lau', 1, NULL, '2024-12-09 21:16:18', '2024-12-09 21:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE `cart_product` (
  `id` bigint(20) NOT NULL,
  `cart_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `config` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) NOT NULL,
  `aid` varchar(255) DEFAULT NULL COMMENT 'Alternative id for foreign systems',
  `client_group_id` bigint(20) DEFAULT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'client' COMMENT 'client',
  `auth_type` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'active' COMMENT 'active, suspended, canceled',
  `email_approved` tinyint(1) DEFAULT NULL,
  `tax_exempt` tinyint(1) DEFAULT 0,
  `type` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone_cc` varchar(10) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `company_vat` varchar(100) DEFAULT NULL,
  `company_number` varchar(255) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `document_type` varchar(100) DEFAULT NULL,
  `document_nr` varchar(20) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `lang` varchar(10) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `api_token` varchar(128) DEFAULT NULL,
  `referred_by` varchar(255) DEFAULT NULL,
  `custom_1` text DEFAULT NULL,
  `custom_2` text DEFAULT NULL,
  `custom_3` text DEFAULT NULL,
  `custom_4` text DEFAULT NULL,
  `custom_5` text DEFAULT NULL,
  `custom_6` text DEFAULT NULL,
  `custom_7` text DEFAULT NULL,
  `custom_8` text DEFAULT NULL,
  `custom_9` text DEFAULT NULL,
  `custom_10` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_balance`
--

CREATE TABLE `client_balance` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `rel_id` varchar(20) DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT 0.00,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_group`
--

CREATE TABLE `client_group` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `client_group`
--

INSERT INTO `client_group` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Default', '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client_order`
--

CREATE TABLE `client_order` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `form_id` bigint(20) DEFAULT NULL,
  `promo_id` bigint(20) DEFAULT NULL,
  `promo_recurring` tinyint(1) DEFAULT NULL,
  `promo_used` bigint(20) DEFAULT NULL,
  `group_id` varchar(255) DEFAULT NULL,
  `group_master` tinyint(1) DEFAULT 0,
  `invoice_option` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `unpaid_invoice_id` bigint(20) DEFAULT NULL,
  `service_id` bigint(20) DEFAULT NULL,
  `service_type` varchar(100) DEFAULT NULL,
  `period` varchar(20) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT 1,
  `unit` varchar(100) DEFAULT NULL,
  `price` double(18,2) DEFAULT NULL,
  `discount` double(18,2) DEFAULT NULL COMMENT 'first invoice discount',
  `status` varchar(50) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL COMMENT 'suspend/cancel reason',
  `notes` text DEFAULT NULL,
  `config` text DEFAULT NULL,
  `referred_by` varchar(255) DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `activated_at` datetime DEFAULT NULL,
  `suspended_at` datetime DEFAULT NULL,
  `unsuspended_at` datetime DEFAULT NULL,
  `canceled_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_order_meta`
--

CREATE TABLE `client_order_meta` (
  `id` bigint(20) NOT NULL,
  `client_order_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_order_status`
--

CREATE TABLE `client_order_status` (
  `id` bigint(20) NOT NULL,
  `client_order_id` bigint(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_password_reset`
--

CREATE TABLE `client_password_reset` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` bigint(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `code` varchar(3) DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT 0,
  `conversion_rate` decimal(13,6) DEFAULT 1.000000,
  `format` varchar(30) DEFAULT NULL,
  `price_format` varchar(50) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `title`, `code`, `is_default`, `conversion_rate`, `format`, `price_format`, `created_at`, `updated_at`) VALUES
(1, 'Euro', 'EUR', 1, 1.000000, '{{price}}€', '1', '2024-12-09 22:14:22', '2024-12-09 22:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `id` bigint(20) NOT NULL,
  `action_code` varchar(255) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL COMMENT 'general, domain, invoice, hosting, support, download, custom, license',
  `enabled` tinyint(1) DEFAULT 1,
  `subject` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `vars` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `action_code`, `category`, `enabled`, `subject`, `content`, `description`, `vars`) VALUES
(1, 'mod_client_confirm', 'client', 1, '[{{ guest.system_company.name }}] Please confirm your email address ', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Email confirmation</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Please verify your email by clicking on the link below:</p>\n    <a href=\"{{email_confirmation_link}}\" target=\"_blank\">Verify email address.</a>\n    <p>You may also <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'client/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(2, 'mod_client_password_reset_information', 'client', 1, '[{{ guest.system_company.name }}] Password Changed', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Password reset</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>The password to your account has been changed.</p>\n    <p>If you did not perform this request, please contact your support immediately.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'client/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(3, 'mod_client_password_reset_request', 'client', 1, '[{{ guest.system_company.name }}] Confirm Password Reset', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Password reset</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Recently a request was submitted to reset your password for the client area.</p>\n    <p>If you did not request this, please ignore this email. It will expire and will not work in 2 hours time.</p>\n\n    <p>To reset your password, please visit the link below:</p>\n    <a href=\"{{\'client/reset-password-confirm\'|link}}/{{ hash }}\" target=\"_blank\">Reset password.</a>\n\n    <p>You may then <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'client/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(4, 'mod_client_signup', 'client', 1, '[{{ guest.system_company.name }}] Welcome {{ c.first_name }}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Welcome</h1>\n	<p>Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below:</p>\n    <ul>\n        <li><strong>Email:</strong> {{ c.email }}</li>\n        <li><strong>Password:</strong> {{ password }}</li>\n    </ul>\n\n    {% if require_email_confirmation %}\n        <p>Please verify your email by clicking on the link below:</p>\n        <a href=\"{{email_confirmation_link}}\" target=\"_blank\">Verify email address.</a>\n    {% endif %}\n    \n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'client/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(5, 'mod_email_test', 'email', 1, '[{{ guest.system_company.name }}] FOSSBilling Email Test', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Test email from [{{ guest.system_company.name }}]</h1>\n	<p>Hi {{ staff_member_name }},</p>\n	<p>If you are reading this email, FOSSBilling is <strong>configured properly</strong> and is <strong>able to send emails</strong>.</p>\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(6, 'mod_invoice_created', 'invoice', 1, '[{{ guest.system_company.name }}] Invoice Created', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Invoice created</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>This is to notify that invoice {{ invoice.id }} was generated on {{ invoice.created_at|format_date }}.</p>\n    <ul>\n        <li><strong>Amount Due:</strong> {{ invoice.total | money(invoice.currency) }}</li>\n        <li><strong>Due Date:</strong>  {{ invoice.due_at|format_date }}</li>\n    </ul>\n\n    <p>You may view and pay the invoice <a href=\"{{\'invoice\'|link}}/{{invoice.hash}}\" target=\"_blank\">here.</a>\n    <p>You may also <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'client/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(7, 'mod_invoice_due_after', 'invoice', 1, '[{{ guest.system_company.name }}] Invoice Due', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Invoice past-due</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>This is a payment reminder that your invoice <strong>{{ invoice.serie_nr }}</strong> is past-due by {{ days_passed }} days.</p>\n    <ul>\n        <li><strong>Amount Due:</strong> {{ invoice.total | money(invoice.currency) }}</li>\n        <li><strong>Due Date:</strong>  {{ invoice.due_at|format_date }}</li>\n    </ul>\n\n    <p>You may view and pay the invoice <a href=\"{{\'invoice\'|link}}/{{invoice.hash}}\" target=\"_blank\">here.</a>\n    <p>You may also <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'client/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(8, 'mod_invoice_paid', 'invoice', 1, '[{{ guest.system_company.name }}] Payment Received', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Invoice paid</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>This is a payment receipt for invoice <strong>{{ invoice.serie_nr }}</strong> issued on {{ invoice.created_at|format_date }}</p>\n    <ul>\n        <li><strong>Total Paid:</strong> {{ invoice.total|money(invoice.currency) }}</li>\n        <li><strong>Date Paid:</strong>  {{ invoice.paid_at|format_date }}</li>\n    </ul>\n\n    <p>You may view the invoice <a href=\"{{\'invoice\'|link}}/{{invoice.hash}}\" target=\"_blank\">here.</a>\n    <p>You may also <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'client/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(9, 'mod_invoice_payment_reminder', 'invoice', 1, '[{{ guest.system_company.name }}] Payment Reminder', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Invoice payment reminder</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>This is to remind that your invoice <strong>{{ invoice.serie_nr }}</strong> is due in {{ invoice.due_at|daysleft }} days.</p>\n    <ul>\n        <li><strong>Amount Due:</strong> {{ invoice.total | money(invoice.currency) }}</li>\n        <li><strong>Due Date:</strong>  {{ invoice.due_at|format_date }}</li>\n    </ul>\n\n    <p>You may view and pay the invoice <a href=\"{{\'invoice\'|link}}/{{invoice.hash}}\" target=\"_blank\">here.</a>\n    <p>You may also <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'client/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(10, 'mod_servicecustom_activated', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Activated', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order is now active</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> is now activated.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'client/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(11, 'mod_servicecustom_canceled', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Canceled', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order canceled</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> that was activated on <strong>{{ order.activated_at|format_date }}</strong> is now canceled.</p>\n    {% if order.reason %}\n        <p><strong>Reason:</strong> {{ order.reason }}</p>\n    {% endif %}\n\n    <p>If you have any questions regarding this, please login to the members area and submit a support ticket.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'support\'|link({\'ticket\' : 1}) }}\" target=\"_blank\">submit a ticket.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(12, 'mod_servicecustom_renewed', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Renewed', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order renewed</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> has been renewed.</p>\n    {% if order.expires_at %}\n        <p><strong>Next renewal date:</strong> {{ order.expires_at|format_date }}</p>\n    {% endif %}\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(13, 'mod_servicecustom_suspended', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Suspended', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order suspended</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> that was activated on <strong>{{ order.activated_at|format_date }}</strong> is now suspended.</p>\n    {% if order.reason %}\n        <p><strong>Reason:</strong> {{ order.reason }}</p>\n    {% endif %}\n\n    <p>If you have any questions regarding this, please login to the members area and submit a support ticket.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'support\'|link({\'ticket\' : 1}) }}\" target=\"_blank\">submit a ticket.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(14, 'mod_servicecustom_unsuspended', 'servicecustom', 1, '[{{ guest.system_company.name }}] {{ order.title }} Reactivated ', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order unsuspended</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> is now unsuspended.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(15, 'mod_servicedomain_activated', 'servicedomain', 1, '[{{ guest.system_company.name }}] {{ order.title }}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order activated</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> is now activated.</p>\n    <p>Please keep in mind that your domain name may not be visible on the internet instantly due to the propagation process which may take up to 48 hours.</p>\n    <p>Your website and email will not function until the domain has propagated.</p>\n\n    <p>Domain details:</p>\n    <ul>\n        <li><strong>Domain:</strong> {{ service.domain }}</li>\n        <li><strong>Registration date:</strong> {{order.created_at|format_date}}</li>\n        <li><strong>Registration period:</strong> {{service.period}} Year(s)</li>\n        {% if order.expires_at %}<li><strong>Expires on:</strong> {{ order.expires_at|format_date }}</li>{% endif %}\n        {% if order.period %}<li><strong>Billing period:</strong> {{ order.total | money(order.currency) }} every {{ order.period | period_title }}</li>{% endif %}\n    </ul>\n\n    <p>Nameserver details:</p>\n    <ul>\n        <li><strong>Nameserver 1:</strong> {{ service.server.ns1 }}</li>\n        <li><strong>Nameserver 2:</strong> {{ service.server.ns2 }}</li>\n        {% if  service.server.ns3 %}<li><strong>Nameserver 4:</strong> {{ service.server.ns3 }}</li>{% endif %}\n        {% if  service.server.ns3 %}<li><strong>Nameserver 4:</strong> {{ service.server.ns4 }}</li>{% endif %}\n    </ul>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(16, 'mod_servicedomain_renewed', 'servicedomain', 1, '[{{ guest.system_company.name }}] {{ order.title }} Renewed', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order renewed</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> has been renewed.</p>\n    {% if order.expires_at %}\n        <p><strong>Next renewal date:</strong> {{ order.expires_at|format_date }}</p>\n    {% endif %}\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(17, 'mod_servicedomain_suspended', 'servicedomain', 1, '[{{ guest.system_company.name }}] {{ order.title }} Suspended', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order suspended</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> that was activated on <strong>{{ order.activated_at|format_date }}</strong> is now suspended.</p>\n    {% if order.reason %}\n        <p><strong>Reason:</strong> {{ order.reason }}</p>\n    {% endif %}\n\n    <p>If you have any questions regarding this, please login to the members area and submit a support ticket.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'support\'|link({\'ticket\' : 1}) }}\" target=\"_blank\">submit a ticket.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(18, 'mod_servicedomain_unsuspended', 'servicedomain', 1, '[{{ guest.system_company.name }}] {{ order.title }} Reactivated', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order unsuspended</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> is now unsuspended.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(19, 'mod_servicedownloadable_activated', 'servicedownloadable', 1, '[{{ guest.system_company.name }}] {{ order.title }} Ready to Download', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order activated</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> is now activated and ready for download.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'servicedownloadable/get-file\'|link }}/{{ order.id }}\" target=\"_blank\">download your order now.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(20, 'mod_servicehosting_activated', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Activated', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n        h2 {\n			font-size: 20px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order activated</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Thank you for ordering with us! Your hosting account has now been set up. This email contains all the information you will need in order to begin using your service.</p>\n    <p>Please keep in mind that if you ordered a domain, it may not be visible online instantly due to the propagation process which can take up to 48 hours. </p>\n\n    <h2>{{ order.title }}</h2>\n\n    <ul>\n        <li><strong>Activated:</strong> {{ order.activated_at|format_date }}</li>\n        {% if order.expires_at %}<li><strong>Expires:</strong> {{ order.expires_at|format_date }}</li>{% endif %}\n        {% if order.period %}<li><strong>Billing period:</strong> {{ order.total | money(order.currency) }} every {{ order.period | period_title }}</li>{% endif %}\n    </ul>\n\n    <p>Account information:<p>\n    <ul>\n        <li><strong>Hosting package:</strong> {{ service.hosting_plan.name }}</li>\n        <li><strong>Domain:</strong> {{ service.domain }}</li>\n        <li><strong>IP address:</strong> {{ service.server.ip }}</li>\n    </ul>\n\n    <p>Control panel login details:<p>\n    <ul>\n        <li><strong>Username:</strong> {{ service.username }}</li>\n        <li><strong>Password:</strong> {{ password }}</li>\n        <li><strong>Control panel URL:</strong> {{ service.server.cpanel_url }}</li>\n    </ul>\n\n    <p>Server information:<p>\n    <ul>\n        <li><strong>Server Name:</strong> {{ service.server.name }}</li>\n        <li><strong>Server IP:</strong> {{ service.server.ip }}</li>\n        <li><strong>Control panel URL:</strong> {{ service.server.cpanel_url }}</li>\n        <li><strong>Nameserver 1:</strong> {{ service.server.ns1 }}</li>\n        <li><strong>Nameserver 2:</strong> {{ service.server.ns2 }}</li>\n        {% if  service.server.ns3 %}<li><strong>Nameserver 4:</strong> {{ service.server.ns3 }}</li>{% endif %}\n        {% if  service.server.ns3 %}<li><strong>Nameserver 4:</strong> {{ service.server.ns4 }}</li>{% endif %}\n    </ul>\n\n    <p>FTP information:<p>\n    <ul>\n        <li><strong>Temporary FTP Hostname:</strong> {{ service.server.ip }}  </li>\n        <li><strong>Full FTP Hostname:</strong> {{ service.domain }}</li>\n        <li><strong>FTP Username:</strong> {{ service.username }}</li>\n        <li><strong>FTP Password:</strong> {{ password }}</li>\n    </ul>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'servicedownloadable/get-file\'|link }}/{{ order.id }}\" target=\"_blank\">download your order now.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(21, 'mod_servicehosting_canceled', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Canceled', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order canceled</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> that was activated on <strong>{{ order.activated_at|format_date }}</strong> is now canceled.</p>\n    {% if order.reason %}\n        <p><strong>Reason:</strong> {{ order.reason }}</p>\n    {% endif %}\n\n    <p>If you have any questions regarding this, please login to the members area and submit a support ticket.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'support\'|link({\'ticket\' : 1}) }}\" target=\"_blank\">submit a ticket.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(22, 'mod_servicehosting_renewed', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Renewed', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order renewed</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> has been renewed.</p>\n    {% if order.expires_at %}\n        <p><strong>Next renewal date:</strong> {{ order.expires_at|format_date }}</p>\n    {% endif %}\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(23, 'mod_servicehosting_suspended', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Suspended', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order suspended</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> that was activated on <strong>{{ order.activated_at|format_date }}</strong> is now suspended.</p>\n    {% if order.reason %}\n        <p><strong>Reason:</strong> {{ order.reason }}</p>\n    {% endif %}\n\n    <p>If you have any questions regarding this, please login to the members area and submit a support ticket.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'support\'|link({\'ticket\' : 1}) }}\" target=\"_blank\">submit a ticket.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(24, 'mod_servicehosting_unsuspended', 'servicehosting', 1, '[{{ guest.system_company.name }}] {{ order.title }} Reactivated', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order unsuspended</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> is now unsuspended.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(25, 'mod_servicelicense_activated', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Activated', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order is now active</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> is now activated.</p>\n\n    <p><strong>License key:</strong> {{ service.license_key }}</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(26, 'mod_servicelicense_canceled', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Canceled', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order canceled</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> that was activated on <strong>{{ order.activated_at|format_date }}</strong> is now canceled.</p>\n    {% if order.reason %}\n        <p><strong>Reason:</strong> {{ order.reason }}</p>\n    {% endif %}\n\n    <p>If you have any questions regarding this, please login to the members area and submit a support ticket.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'support\'|link({\'ticket\' : 1}) }}\" target=\"_blank\">submit a ticket.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(27, 'mod_servicelicense_renewed', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Renewed', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order renewed</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> has been renewed.</p>\n    {% if order.expires_at %}\n        <p><strong>Next renewal date:</strong> {{ order.expires_at|format_date }}</p>\n    {% endif %}\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(28, 'mod_servicelicense_suspended', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Suspended', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order suspended</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> that was activated on <strong>{{ order.activated_at|format_date }}</strong> is now suspended.</p>\n    {% if order.reason %}\n        <p><strong>Reason:</strong> {{ order.reason }}</p>\n    {% endif %}\n\n    <p>If you have any questions regarding this, please login to the members area and submit a support ticket.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'support\'|link({\'ticket\' : 1}) }}\" target=\"_blank\">submit a ticket.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(29, 'mod_servicelicense_unsuspended', 'servicelicense', 1, '[{{ guest.system_company.name }}] {{ order.title }} Reactivated', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Order unsuspended</h1>\n	<p>Hello {{ c.first_name }} {{ c.last_name }},</p>\n	<p>Your <strong>{{ order.title }}</strong> is now unsuspended.</p>\n\n    <p>You may <a href=\"{{\'login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{ \'order/service/manage\'|link }}/{{ order.id }}\" target=\"_blank\">manage your order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(30, 'mod_staff_client_order', 'staff', 1, '[{{ guest.system_company.name }}] New Order Placed', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>New order placed</h1>\n	<p>Hello {{ staff.name }},</p>\n	<p>Client <strong>{{ order.client.first_name }} {{ order.client.last_name }}</strong> placed a new order for <strong>{{ order.title }}</strong> on {{ order.created_at|format_date }}</p>\n\n    <p><a href=\"{{ \'order/manage\'|alink }}/{{ order.id }}\" target=\"_blank\">Manage order.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(31, 'mod_staff_client_signup', 'staff', 1, '[{{ guest.system_company.name }}] New Client Signed Up', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>New client signed up</h1>\n	<p>Hello {{ staff.name }},</p>\n	<p><strong>{{ c.first_name }} {{ c.last_name }}</strong> has just signed up with {{ guest.system_company.name }}</p>\n\n    <p><a href=\"{{\'client/manage\'|alink}}/{{c.id}}\" target=\"_blank\">Manage client.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(32, 'mod_staff_password_reset_approve', 'staff', 1, '[{{ guest.system_company.name }}] Password Changed', '\n<!DOCTYPE html>\n<html>\n<head>\n    <meta charset=\"utf-8\">\n    <style type=\"text/css\">\n        body {\n            font-family: Arial, sans-serif;\n            font-size: 14px;\n            color: #333333;\n        }\n\n        h1 {\n            font-size: 24px;\n            font-weight: bold;\n            margin: 0 0 20px;\n        }\n        \n        p {\n            margin: 0 0 10px;\n        }\n        \n        strong {\n            font-weight: bold;\n        }\n        \n        .signature {\n            font-style: italic;\n            color: #999999;\n            margin-top: 20px;\n            border-top: 1px solid #cccccc;\n            padding-top: 10px;\n        }\n    </style>\n</head>\n<body>\n    <h1>Password reset</h1>\n    <p>Hello {{ staff.name }},</p>\n    <p>Your password has been changed.</p>\n    \n    <p><a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">Click here to login.</a>\n    \n    <p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(33, 'mod_staff_password_reset_request', 'staff', 1, '[{{ guest.system_company.name }}] Confirm Password Reset', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Password reset</h1>\n	<p>Hello {{ c.name }},</p>\n	<p>Recently a request was submitted to reset your password for the client area.</p>\n    <p>If you did not request this, please ignore this email. It will expire and will not work in 2 hours time.</p>\n\n    <p>To reset your password, please visit the link below:</p>\n    <a href=\"{{\'admin/staff/email\'|link}}/{{ hash }}\" target=\"_blank\">Reset password.</a>\n\n    <p>Once visiting the link above, you will be emailed a new password that you may login with.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(34, 'mod_staff_pticket_close', 'staff', 1, '[{{ guest.system_company.name }}] {{ticket.subject}} [closed]', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket closed</h1>\n	<p>Hello {{ c.name }},</p>\n	<p>Public ticket <a href=\"{{ \'support/public-ticket/\'|alink }}/{{ticket.id}}\" target=\"_blank\">ID {{ticket.id}}</a> was closed by the client.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(35, 'mod_staff_pticket_open', 'staff', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket opened</h1>\n	<p>Hello {{ c.name }},</p>\n    <p>New public ticket received.</p>\n	<a href=\"{{\'support/public-ticket\'|alink }}/{{ ticket.id }}\" target=\"_blank\">Reply here.</a>\n    <p>Track the conversation <a href=\"{{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\" target=\"_blank\">here.</a></p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(36, 'mod_staff_pticket_reply', 'staff', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>New ticket reply</h1>\n	<p>Hello {{ c.name }},</p>\n\n    <p>Public ticket {{ticket.id}} has a new reply.</p>\n	<a href=\"{{ \'support/public-ticket/\'|alink }}/{{ticket.id}}\" target=\"_blank\">Reply here.</a></p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(37, 'mod_staff_ticket_close', 'staff', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket closed</h1>\n	<p>Hello {{ c.name }},</p>\n\n    <p><strong>{{ ticket.client.first_name }} {{ ticket.client.last_name }}</strong> closed support ticket #{{ ticket.id }}</p>\n	<a href=\"{{\'support/ticket\'|alink }}/{{ ticket.id }}\" target=\"_blank\">Review the ticket</a>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL);
INSERT INTO `email_template` (`id`, `action_code`, `category`, `enabled`, `subject`, `content`, `description`, `vars`) VALUES
(38, 'mod_staff_ticket_open', 'staff', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket opened</h1>\n	<p>Hello {{ c.name }},</p>\n\n    <p><strong>{{ ticket.client.first_name }} {{ ticket.client.last_name }}</strong>  opened a new support ticket #{{ ticket.id }}</p>\n	<a href=\"{{\'support/ticket\'|alink }}/{{ ticket.id }}\" target=\"_blank\">Review the ticket</a>\n\n    opened<h2>Ticket contents</h2>\n    <p>{{ ticket.messages[0].content }}</p>\n\n    <p>Ticket info</p>\n    <ul>\n        <li><strong>Ticket ID:</strong> #{{ticket.id}}</li>\n        <li><strong>Department:</strong> {{ticket.helpdesk.name}}</li>\n        <li><strong>Status:</strong> {{ticket.status|title}}</li>\n    </ul>\n\n    <a href=\"{{\'support/ticket\'|alink }}/{{ ticket.id }}\" target=\"_blank\">Reply<a>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(39, 'mod_staff_ticket_reply', 'staff', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket reply</h1>\n	<p>Hello {{ c.name }},</p>\n\n    <p><strong>{{ ticket.client.first_name }} {{ ticket.client.last_name }}</strong> replied to support ticket #{{ ticket.id }}</p>\n	<a href=\"{{\'support/ticket\'|alink }}/{{ ticket.id }}\" target=\"_blank\">Review the ticket</a>\n\n    <p>Ticket info</p>\n    <ul>\n        <li><strong>Ticket ID:</strong> #{{ticket.id}}</li>\n        <li><strong>Department:</strong> {{ticket.helpdesk.name}}</li>\n        <li><strong>Status:</strong> {{ticket.status|title}}</li>\n    </ul>\n\n    <a href=\"{{\'support/ticket\'|alink }}/{{ ticket.id }}\" target=\"_blank\">Reply<a>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(40, 'mod_support_helpdesk_ticket_open', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket opened</h1>\n\n    <h2>Ticket contents</h2>\n    <p>{{ ticket.messages[0].content }}</p>\n\n    <p>Ticket info</p>\n    <ul>\n        <li><strong>Ticket ID:</strong> #{{ticket.id}}</li>\n        <li><strong>Department:</strong> {{ticket.helpdesk.name}}</li>\n        <li><strong>Status:</strong> {{ticket.status|title}}</li>\n    </ul>\n\n    <a href=\"{{\'support/ticket\'|link}}/{{ ticket.id }}\" target=\"_blank\">Reply<a>\n    \n    <p>Please do not reply to this email directly. Use the link provided above.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(41, 'mod_support_pticket_open', 'support', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Public ticket opened</h1>\n\n    <p>Hi {{ ticket.author_name }},</p>\n\n    <p>Thank You for Your request. We will reply within 24 hours.</p>\n    <p>You can track and respond to this conversation <a href=\"{{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\" target=\"_blank\">here</a></p>\n\n    <p>Please do not reply to this email directly. Use the link provided above.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(42, 'mod_support_pticket_staff_close', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}} [closed]', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Public ticket opened</h1>\n\n    <p>Hi {{ ticket.author_name }},</p>\n\n    <p>This is a confirmation email to inform you that your ticket was closed.</p>\n    <p>You can track conversation <a href=\"{{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\" target=\"_blank\">here</a></p>\n\n    <p>Please do not reply to this email directly. Use the link provided above.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(43, 'mod_support_pticket_staff_open', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Public ticket opened</h1>\n\n    <p>Hi {{ ticket.author_name }},</p>\n\n    <p>{{ticket.messages[0].content}}</p>\n\n    <p>You can track and respond to this conversation <a href=\"{{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\" target=\"_blank\">here</a></p>\n    <p>Please do not reply to this email directly. Use the link provided above.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(44, 'mod_support_pticket_staff_reply', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Public ticket reply</h1>\n\n    <p>Hi {{ ticket.author_name }},</p>\n\n    <p>A new reply was posted to ticket <strong>{{ticket.subject}}</strong></p>\n\n    <p>You can track and respond to this conversation <a href=\"{{\'support/contact-us/conversation\'|link }}/{{ ticket.hash }}\" target=\"_blank\">here</a></p>\n    <p>Please do not reply to this email directly. Use the link provided above.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(45, 'mod_support_ticket_open', 'support', 1, '[{{ guest.system_company.name }}] {{ ticket.subject }}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket opened</h1>\n\n    <p>Thank you for contacting our support team. A support ticket has now been opened for your request.</p>\n    <p>You will be notified by email when your ticket receives a response. The details of your ticket are shown below.</p>\n\n    <p>Ticket info</p>\n    <ul>\n        <li><strong>Ticket ID:</strong> #{{ticket.id}}</li>\n        <li><strong>Department:</strong> {{ticket.helpdesk.name}}</li>\n        <li><strong>Status:</strong> {{ticket.status|title}}</li>\n    </ul>\n\n    <a href=\"{{\'support/ticket\'|link}}/{{ ticket.id }}\" target=\"_blank\">Reply<a>\n    \n    <p>Please do not reply to this email directly. Use the link provided above.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(46, 'mod_support_ticket_staff_close', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket closed</h1>\n\n    <p>Hi {{ c.first_name }} {{ c.last_name }},</p>\n\n    <p>This a notification message to inform you that ticket <strong>{{ticket.subject}}</strong> is now closed.</p>\n\n    <p>Ticket info</p>\n    <ul>\n        <li><strong>Ticket ID:</strong> #{{ticket.id}}</li>\n        <li><strong>Department:</strong> {{ticket.helpdesk.name}}</li>\n        <li><strong>Status:</strong> {{ticket.status|title}}</li>\n    </ul>\n\n    <a href=\"{{\'support/ticket\'|link}}/{{ ticket.id }}\" target=\"_blank\">Reply<a>\n    \n    <p>Please do not reply to this email directly. Use the link provided above.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(47, 'mod_support_ticket_staff_open', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket opened</h1>\n\n    <p>Hi {{ c.first_name }} {{ c.last_name }},</p>\n\n    <p>{{ticket.messages[0].content}}</p>\n\n    <p>Ticket info</p>\n    <ul>\n        <li><strong>Ticket ID:</strong> #{{ticket.id}}</li>\n        <li><strong>Department:</strong> {{ticket.helpdesk.name}}</li>\n        <li><strong>Status:</strong> {{ticket.status|title}}</li>\n    </ul>\n\n    <a href=\"{{\'support/ticket\'|link}}/{{ ticket.id }}\" target=\"_blank\">Reply<a>\n    \n    <p>Please do not reply to this email directly. Use the link provided above.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL),
(48, 'mod_support_ticket_staff_reply', 'support', 1, '[{{ guest.system_company.name }}] {{ticket.subject}}', '\n<!DOCTYPE html>\n<html>\n<head>\n	<meta charset=\"utf-8\">\n	<style type=\"text/css\">\n		body {\n			font-family: Arial, sans-serif;\n			font-size: 14px;\n			color: #333333;\n		}\n\n		h1 {\n			font-size: 24px;\n			font-weight: bold;\n			margin: 0 0 20px;\n		}\n\n		p {\n			margin: 0 0 10px;\n		}\n\n		strong {\n			font-weight: bold;\n		}\n\n		.signature {\n			font-style: italic;\n			color: #999999;\n			margin-top: 20px;\n			border-top: 1px solid #cccccc;\n			padding-top: 10px;\n		}\n	</style>\n</head>\n<body>\n	<h1>Ticket replied</h1>\n\n    <p>Hi {{ c.first_name }} {{ c.last_name }},</p>\n\n    <p>A new reply was posted to ticket <strong>{{ticket.subject}}</strong></p>\n\n    <p>Ticket info</p>\n    <ul>\n        <li><strong>Ticket ID:</strong> #{{ticket.id}}</li>\n        <li><strong>Department:</strong> {{ticket.helpdesk.name}}</li>\n        <li><strong>Status:</strong> {{ticket.status|title}}</li>\n    </ul>\n\n    <a href=\"{{\'support/ticket\'|link}}/{{ ticket.id }}\" target=\"_blank\">Reply<a>\n    \n    <p>Please do not reply to this email directly. Use the link provided above.</p>\n\n    <p>You may <a href=\"{{\'admin/staff/login\'|link({\'email\' : c.email }) }}\" target=\"_blank\">login</a> or <a href=\"{{\'admin/staff/profile\'|link}}\" target=\"_blank\">edit your profile.</a>\n\n	<p class=\"signature\">{{ guest.system_company.signature }}</p>\n</body>\n</html>\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `extension`
--

CREATE TABLE `extension` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `version` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `extension`
--

INSERT INTO `extension` (`id`, `type`, `name`, `status`, `version`) VALUES
(1, 'mod', 'news', 'installed', '1.0.0'),
(2, 'mod', 'branding', 'installed', '0.0.1'),
(3, 'mod', 'redirect', 'installed', '1.0.0'),
(4, 'mod', 'wysiwyg', 'installed', '1.0.0');

-- --------------------------------------------------------

--
-- Table structure for table `extension_meta`
--

CREATE TABLE `extension_meta` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `extension` varchar(255) DEFAULT NULL,
  `rel_type` varchar(255) DEFAULT NULL,
  `rel_id` varchar(255) DEFAULT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `extension_meta`
--

INSERT INTO `extension_meta` (`id`, `client_id`, `extension`, `rel_type`, `rel_id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mod_staff', NULL, NULL, 'config', NULL, '2024-12-09 21:15:25', '2024-12-09 21:15:25'),
(2, NULL, 'mod_support', NULL, NULL, 'config', NULL, '2024-12-09 21:15:39', '2024-12-09 21:15:39'),
(3, NULL, 'mod_hook', 'mod', 'activity', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(4, NULL, 'mod_hook', 'mod', 'activity', 'listener', 'onAfterClientLogin', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(5, NULL, 'mod_hook', 'mod', 'activity', 'listener', 'onAfterAdminLogin', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(6, NULL, 'mod_hook', 'mod', 'activity', 'listener', 'onBeforeAdminCronRun', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(7, NULL, 'mod_hook', 'mod', 'activity', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(8, NULL, 'mod_hook', 'mod', 'activity', 'listener', 'rmByClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(9, NULL, 'mod_hook', 'mod', 'api', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(10, NULL, 'mod_hook', 'mod', 'branding', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(11, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(12, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'addItem', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(13, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'isStockAvailable', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(14, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'isRecurrentPricing', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(15, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'isPeriodEnabledForProduct', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(16, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'removeProduct', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(17, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'changeCartCurrency', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(18, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'resetCart', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(19, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'removePromo', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(20, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'applyPromo', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(21, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'rm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(22, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(23, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'isClientAbleToUsePromo', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(24, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'promoCanBeApplied', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(25, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'isPromoAvailableForClientGroup', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(26, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'getCartProducts', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(27, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'checkoutCart', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(28, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'createFromCart', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(29, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'usePromo', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(30, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'getItemConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(31, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'cartProductToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(32, NULL, 'mod_hook', 'mod', 'cart', 'listener', 'getProductDiscount', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(33, NULL, 'mod_hook', 'mod', 'client', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(34, NULL, 'mod_hook', 'mod', 'client', 'listener', 'onAfterClientSignUp', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(35, NULL, 'mod_hook', 'mod', 'client', 'listener', 'toSessionArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(36, NULL, 'mod_hook', 'mod', 'client', 'listener', 'canChangeCurrency', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(37, NULL, 'mod_hook', 'mod', 'client', 'listener', 'addFunds', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(38, NULL, 'mod_hook', 'mod', 'client', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(39, NULL, 'mod_hook', 'mod', 'client', 'listener', 'getClientBalance', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(40, NULL, 'mod_hook', 'mod', 'client', 'listener', 'isClientTaxable', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(41, NULL, 'mod_hook', 'mod', 'client', 'listener', 'deleteGroup', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(42, NULL, 'mod_hook', 'mod', 'client', 'listener', 'remove', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(43, NULL, 'mod_hook', 'mod', 'client', 'listener', 'sendEmailConfirmationForClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(44, NULL, 'mod_hook', 'mod', 'client', 'listener', 'canChangeEmail', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(45, NULL, 'mod_hook', 'mod', 'client', 'listener', 'onBeforeAdminCronRun', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(46, NULL, 'mod_hook', 'mod', 'cron', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(47, NULL, 'mod_hook', 'mod', 'currency', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(48, NULL, 'mod_hook', 'mod', 'currency', 'listener', 'setAsDefault', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(49, NULL, 'mod_hook', 'mod', 'currency', 'listener', 'rm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(50, NULL, 'mod_hook', 'mod', 'currency', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(51, NULL, 'mod_hook', 'mod', 'currency', 'listener', 'onBeforeAdminCronRun', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(52, NULL, 'mod_hook', 'mod', 'email', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(53, NULL, 'mod_hook', 'mod', 'email', 'listener', 'findOneForClientById', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(54, NULL, 'mod_hook', 'mod', 'email', 'listener', 'rmByClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(55, NULL, 'mod_hook', 'mod', 'email', 'listener', 'rm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(56, NULL, 'mod_hook', 'mod', 'email', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(57, NULL, 'mod_hook', 'mod', 'email', 'listener', 'resend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(58, NULL, 'mod_hook', 'mod', 'email', 'listener', 'templateToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(59, NULL, 'mod_hook', 'mod', 'email', 'listener', 'updateTemplate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(60, NULL, 'mod_hook', 'mod', 'extension', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(61, NULL, 'mod_hook', 'mod', 'extension', 'listener', 'onBeforeAdminCronRun', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(62, NULL, 'mod_hook', 'mod', 'extension', 'listener', 'update', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(63, NULL, 'mod_hook', 'mod', 'extension', 'listener', 'activate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(64, NULL, 'mod_hook', 'mod', 'extension', 'listener', 'deactivate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(65, NULL, 'mod_hook', 'mod', 'extension', 'listener', 'uninstall', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(66, NULL, 'mod_hook', 'mod', 'formbuilder', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(67, NULL, 'mod_hook', 'mod', 'hook', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(68, NULL, 'mod_hook', 'mod', 'hook', 'listener', 'onAfterAdminActivateExtension', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(69, NULL, 'mod_hook', 'mod', 'hook', 'listener', 'onAfterAdminDeactivateExtension', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(70, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(71, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(72, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'onAfterAdminInvoicePaymentReceived', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(73, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'onAfterAdminInvoiceApprove', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(74, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'onAfterAdminInvoiceReminderSent', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(75, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'onAfterAdminCronRun', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(76, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'onEventAfterInvoiceIsDue', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(77, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'markAsPaid', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(78, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'countIncome', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(79, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'prepareInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(80, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'setInvoiceDefaults', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(81, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'approveInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(82, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'tryPayWithCredits', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(83, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'getTotalWithTax', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(84, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'getTax', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(85, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'getTotal', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(86, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'refundInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(87, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'updateInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(88, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'rmInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(89, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'deleteInvoiceByAdmin', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(90, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'deleteInvoiceByClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(91, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'renewInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(92, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'payInvoiceWithCredits', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(93, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'generateForOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(94, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'sendInvoiceReminder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(95, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'generateFundsInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(96, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'addNote', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(97, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'getPaymentInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(98, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'getBuyer', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(99, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'rmByClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(100, NULL, 'mod_hook', 'mod', 'invoice', 'listener', 'isInvoiceTypeDeposit', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(101, NULL, 'mod_hook', 'mod', 'news', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(102, NULL, 'mod_hook', 'mod', 'order', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(103, NULL, 'mod_hook', 'mod', 'order', 'listener', 'onAfterAdminOrderActivate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(104, NULL, 'mod_hook', 'mod', 'order', 'listener', 'onAfterAdminOrderRenew', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(105, NULL, 'mod_hook', 'mod', 'order', 'listener', 'onAfterAdminOrderSuspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(106, NULL, 'mod_hook', 'mod', 'order', 'listener', 'onAfterAdminOrderUnsuspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(107, NULL, 'mod_hook', 'mod', 'order', 'listener', 'onAfterAdminOrderCancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(108, NULL, 'mod_hook', 'mod', 'order', 'listener', 'onAfterAdminOrderUncancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(109, NULL, 'mod_hook', 'mod', 'order', 'listener', 'getOrderService', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(110, NULL, 'mod_hook', 'mod', 'order', 'listener', 'getConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(111, NULL, 'mod_hook', 'mod', 'order', 'listener', 'productHasOrders', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(112, NULL, 'mod_hook', 'mod', 'order', 'listener', 'getLogger', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(113, NULL, 'mod_hook', 'mod', 'order', 'listener', 'saveStatusChange', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(114, NULL, 'mod_hook', 'mod', 'order', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(115, NULL, 'mod_hook', 'mod', 'order', 'listener', 'createOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(116, NULL, 'mod_hook', 'mod', 'order', 'listener', 'getMasterOrderForClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(117, NULL, 'mod_hook', 'mod', 'order', 'listener', 'activateOrderAddons', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(118, NULL, 'mod_hook', 'mod', 'order', 'listener', 'activateOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(119, NULL, 'mod_hook', 'mod', 'order', 'listener', 'createFromOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(120, NULL, 'mod_hook', 'mod', 'order', 'listener', 'getOrderAddonsList', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(121, NULL, 'mod_hook', 'mod', 'order', 'listener', 'stockSale', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(122, NULL, 'mod_hook', 'mod', 'order', 'listener', 'updatePeriod', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(123, NULL, 'mod_hook', 'mod', 'order', 'listener', 'updateOrderMeta', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(124, NULL, 'mod_hook', 'mod', 'order', 'listener', 'updateOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(125, NULL, 'mod_hook', 'mod', 'order', 'listener', 'renewOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(126, NULL, 'mod_hook', 'mod', 'order', 'listener', 'renewFromOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(127, NULL, 'mod_hook', 'mod', 'order', 'listener', 'suspendFromOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(128, NULL, 'mod_hook', 'mod', 'order', 'listener', 'unsuspendFromOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(129, NULL, 'mod_hook', 'mod', 'order', 'listener', 'cancelFromOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(130, NULL, 'mod_hook', 'mod', 'order', 'listener', 'uncancelFromOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(131, NULL, 'mod_hook', 'mod', 'order', 'listener', 'rmInvoiceItemByOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(132, NULL, 'mod_hook', 'mod', 'order', 'listener', 'rmClientOrderStatusByOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(133, NULL, 'mod_hook', 'mod', 'order', 'listener', 'rmOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(134, NULL, 'mod_hook', 'mod', 'order', 'listener', 'deleteFromOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(135, NULL, 'mod_hook', 'mod', 'order', 'listener', 'updateOrderConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(136, NULL, 'mod_hook', 'mod', 'order', 'listener', 'orderStatusAdd', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(137, NULL, 'mod_hook', 'mod', 'order', 'listener', 'findForClientById', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(138, NULL, 'mod_hook', 'mod', 'order', 'listener', 'getOrderServiceData', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(139, NULL, 'mod_hook', 'mod', 'order', 'listener', 'getTotal', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(140, NULL, 'mod_hook', 'mod', 'order', 'listener', 'setUnpaidInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(141, NULL, 'mod_hook', 'mod', 'order', 'listener', 'unsetUnpaidInvoice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(142, NULL, 'mod_hook', 'mod', 'order', 'listener', 'getRelatedOrderIdByType', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(143, NULL, 'mod_hook', 'mod', 'order', 'listener', 'rmByClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(144, NULL, 'mod_hook', 'mod', 'page', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(145, NULL, 'mod_hook', 'mod', 'product', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(146, NULL, 'mod_hook', 'mod', 'product', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(147, NULL, 'mod_hook', 'mod', 'product', 'listener', 'updateProduct', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(148, NULL, 'mod_hook', 'mod', 'product', 'listener', 'updateConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(149, NULL, 'mod_hook', 'mod', 'product', 'listener', 'deleteProduct', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(150, NULL, 'mod_hook', 'mod', 'product', 'listener', 'updateCategory', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(151, NULL, 'mod_hook', 'mod', 'product', 'listener', 'removeProductCategory', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(152, NULL, 'mod_hook', 'mod', 'product', 'listener', 'toProductCategoryApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(153, NULL, 'mod_hook', 'mod', 'product', 'listener', 'getStartingFromPrice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(154, NULL, 'mod_hook', 'mod', 'product', 'listener', 'getUpgradablePairs', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(155, NULL, 'mod_hook', 'mod', 'product', 'listener', 'canUpgradeTo', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(156, NULL, 'mod_hook', 'mod', 'product', 'listener', 'getCategoryProducts', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(157, NULL, 'mod_hook', 'mod', 'product', 'listener', 'toProductPaymentApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(158, NULL, 'mod_hook', 'mod', 'product', 'listener', 'getStartingPrice', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(159, NULL, 'mod_hook', 'mod', 'product', 'listener', 'getProductAddons', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(160, NULL, 'mod_hook', 'mod', 'product', 'listener', 'toAddonArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(161, NULL, 'mod_hook', 'mod', 'product', 'listener', 'toPromoApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(162, NULL, 'mod_hook', 'mod', 'product', 'listener', 'updatePromo', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(163, NULL, 'mod_hook', 'mod', 'product', 'listener', 'deletePromo', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(164, NULL, 'mod_hook', 'mod', 'product', 'listener', 'isPromoLinkedToProduct', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(165, NULL, 'mod_hook', 'mod', 'product', 'listener', 'getProductDiscount', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(166, NULL, 'mod_hook', 'mod', 'product', 'listener', 'isPromoLinkedToTld', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(167, NULL, 'mod_hook', 'mod', 'product', 'listener', 'getOrdersForProduct', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(168, NULL, 'mod_hook', 'mod', 'profile', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(169, NULL, 'mod_hook', 'mod', 'profile', 'listener', 'changeAdminPassword', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(170, NULL, 'mod_hook', 'mod', 'profile', 'listener', 'generateNewApiKey', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(171, NULL, 'mod_hook', 'mod', 'profile', 'listener', 'updateAdmin', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(172, NULL, 'mod_hook', 'mod', 'profile', 'listener', 'getAdminIdentityArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(173, NULL, 'mod_hook', 'mod', 'profile', 'listener', 'updateClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(174, NULL, 'mod_hook', 'mod', 'profile', 'listener', 'resetApiKey', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(175, NULL, 'mod_hook', 'mod', 'profile', 'listener', 'changeClientPassword', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(176, NULL, 'mod_hook', 'mod', 'redirect', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(177, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(178, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'action_create', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(179, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'action_activate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(180, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'action_renew', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(181, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'action_suspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(182, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'action_unsuspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(183, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'action_cancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(184, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'action_uncancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(185, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'action_delete', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(186, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'getConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(187, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(188, NULL, 'mod_hook', 'mod', 'servicecustom', 'listener', 'customCall', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(189, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(190, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'action_create', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(191, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'action_activate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(192, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'action_renew', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(193, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'action_suspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(194, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'action_unsuspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(195, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'action_cancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(196, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'action_uncancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(197, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'action_delete', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(198, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'updateNameservers', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(199, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'updateContacts', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(200, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'getTransferCode', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(201, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'lock', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(202, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'unlock', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(203, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'enablePrivacyProtection', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(204, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'disablePrivacyProtection', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(205, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'canBeTransferred', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(206, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'isDomainAvailable', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(207, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(208, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'onBeforeAdminCronRun', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(209, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'tldUpdate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(210, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'tldRm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(211, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'tldToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(212, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'registrarGetConfiguration', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(213, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'registrarGetRegistrarAdapterConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(214, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'registrarGetRegistrarAdapter', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(215, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'registrarCopy', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(216, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'registrarUpdate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(217, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'registrarRm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(218, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'registrarToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(219, NULL, 'mod_hook', 'mod', 'servicedomain', 'listener', 'updateDomain', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(220, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(221, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'attachOrderConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(222, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'action_create', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(223, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'action_activate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(224, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'action_renew', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(225, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'action_suspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(226, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'action_unsuspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(227, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'action_cancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(228, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'action_uncancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(229, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'action_delete', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(230, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'hitDownload', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(231, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(232, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'uploadProductFile', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(233, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'updateProductFile', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(234, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'sendFile', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(235, NULL, 'mod_hook', 'mod', 'servicedownloadable', 'listener', 'saveProductConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(236, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(237, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'action_create', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(238, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'action_activate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(239, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'action_renew', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(240, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'action_suspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(241, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'action_unsuspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(242, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'action_cancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(243, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'action_uncancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(244, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'action_delete', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(245, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'changeAccountPlan', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(246, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'changeAccountUsername', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(247, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'changeAccountIp', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(248, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'changeAccountDomain', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(249, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'changeAccountPassword', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(250, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'sync', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(251, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', '_getAM', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(252, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(253, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'toHostingServerApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(254, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'update', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(255, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'deleteServer', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(256, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'updateServer', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(257, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'getServerManager', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(258, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'testConnection', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(259, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'deleteHp', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(260, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'toHostingHpApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(261, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'updateHp', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(262, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'getServerPackage', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(263, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'getServerManagerWithLog', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(264, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'getManagerUrls', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(265, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'generateLoginUrl', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(266, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'prependOrderConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(267, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'getDomainProductFromConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(268, NULL, 'mod_hook', 'mod', 'servicehosting', 'listener', 'getFreeTlds', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(269, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(270, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'attachOrderConfig', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(271, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'action_create', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(272, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'action_activate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(273, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'action_renew', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(274, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'action_suspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(275, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'action_unsuspend', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(276, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'action_cancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(277, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'action_uncancel', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(278, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'action_delete', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(279, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'reset', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(280, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'isLicenseActive', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(281, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'isValidIp', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(282, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'isValidVersion', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(283, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'isValidPath', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(284, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'isValidHost', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(285, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'getAdditionalParams', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(286, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'getOwnerName', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(287, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'getExpirationDate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(288, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(289, NULL, 'mod_hook', 'mod', 'servicelicense', 'listener', 'update', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(290, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(291, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'hasPermission', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(292, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'onAfterClientOrderCreate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(293, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'onAfterClientOpenTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(294, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'onAfterClientReplyTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(295, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'onAfterClientCloseTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(296, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'onAfterGuestPublicTicketOpen', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(297, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'onAfterClientSignUp', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(298, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'onAfterGuestPublicTicketReply', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(299, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'onAfterGuestPublicTicketClose', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(300, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'toModel_AdminApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(301, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'update', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(302, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'delete', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(303, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'changePassword', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(304, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'toAdminGroupApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(305, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'deleteGroup', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(306, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'updateGroup', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(307, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'toActivityAdminHistoryApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(308, NULL, 'mod_hook', 'mod', 'staff', 'listener', 'deleteLoginHistory', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(309, NULL, 'mod_hook', 'mod', 'stats', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(310, NULL, 'mod_hook', 'mod', 'support', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(311, NULL, 'mod_hook', 'mod', 'support', 'listener', 'onAfterClientOpenTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(312, NULL, 'mod_hook', 'mod', 'support', 'listener', 'onAfterAdminOpenTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(313, NULL, 'mod_hook', 'mod', 'support', 'listener', 'onAfterAdminCloseTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(314, NULL, 'mod_hook', 'mod', 'support', 'listener', 'onAfterAdminReplyTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(315, NULL, 'mod_hook', 'mod', 'support', 'listener', 'onAfterGuestPublicTicketOpen', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(316, NULL, 'mod_hook', 'mod', 'support', 'listener', 'onAfterAdminPublicTicketOpen', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(317, NULL, 'mod_hook', 'mod', 'support', 'listener', 'onAfterAdminPublicTicketReply', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(318, NULL, 'mod_hook', 'mod', 'support', 'listener', 'onAfterAdminPublicTicketClose', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(319, NULL, 'mod_hook', 'mod', 'support', 'listener', 'findOneByClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(320, NULL, 'mod_hook', 'mod', 'support', 'listener', 'getActiveTicketsCountForOrder', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(321, NULL, 'mod_hook', 'mod', 'support', 'listener', 'checkIfTaskAlreadyExists', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(322, NULL, 'mod_hook', 'mod', 'support', 'listener', 'closeTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(323, NULL, 'mod_hook', 'mod', 'support', 'listener', 'autoClose', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(324, NULL, 'mod_hook', 'mod', 'support', 'listener', 'canBeReopened', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(325, NULL, 'mod_hook', 'mod', 'support', 'listener', 'rmByClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(326, NULL, 'mod_hook', 'mod', 'support', 'listener', 'rm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(327, NULL, 'mod_hook', 'mod', 'support', 'listener', 'toApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(328, NULL, 'mod_hook', 'mod', 'support', 'listener', 'getClientApiArrayForTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(329, NULL, 'mod_hook', 'mod', 'support', 'listener', 'noteGetAuthorDetails', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(330, NULL, 'mod_hook', 'mod', 'support', 'listener', 'noteRm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(331, NULL, 'mod_hook', 'mod', 'support', 'listener', 'noteToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(332, NULL, 'mod_hook', 'mod', 'support', 'listener', 'helpdeskRm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(333, NULL, 'mod_hook', 'mod', 'support', 'listener', 'helpdeskToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(334, NULL, 'mod_hook', 'mod', 'support', 'listener', 'messageGetTicketMessages', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(335, NULL, 'mod_hook', 'mod', 'support', 'listener', 'messageGetRepliesCount', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(336, NULL, 'mod_hook', 'mod', 'support', 'listener', 'messageGetAuthorDetails', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(337, NULL, 'mod_hook', 'mod', 'support', 'listener', 'messageToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(338, NULL, 'mod_hook', 'mod', 'support', 'listener', 'ticketUpdate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(339, NULL, 'mod_hook', 'mod', 'support', 'listener', 'ticketMessageUpdate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(340, NULL, 'mod_hook', 'mod', 'support', 'listener', 'ticketReply', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(341, NULL, 'mod_hook', 'mod', 'support', 'listener', 'ticketCreateForAdmin', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(342, NULL, 'mod_hook', 'mod', 'support', 'listener', 'canClientSubmitNewTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(343, NULL, 'mod_hook', 'mod', 'support', 'listener', 'ticketCreateForClient', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(344, NULL, 'mod_hook', 'mod', 'support', 'listener', 'messageCreateForTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(345, NULL, 'mod_hook', 'mod', 'support', 'listener', 'publicCloseTicket', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(346, NULL, 'mod_hook', 'mod', 'support', 'listener', 'publicAutoClose', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(347, NULL, 'mod_hook', 'mod', 'support', 'listener', 'publicRm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(348, NULL, 'mod_hook', 'mod', 'support', 'listener', 'publicToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(349, NULL, 'mod_hook', 'mod', 'support', 'listener', 'publicMessageGetAuthorDetails', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(350, NULL, 'mod_hook', 'mod', 'support', 'listener', 'publicMessageToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(351, NULL, 'mod_hook', 'mod', 'support', 'listener', 'publicTicketUpdate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(352, NULL, 'mod_hook', 'mod', 'support', 'listener', 'publicTicketReply', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(353, NULL, 'mod_hook', 'mod', 'support', 'listener', 'publicTicketReplyForGuest', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(354, NULL, 'mod_hook', 'mod', 'support', 'listener', 'helpdeskUpdate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(355, NULL, 'mod_hook', 'mod', 'support', 'listener', 'cannedRm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(356, NULL, 'mod_hook', 'mod', 'support', 'listener', 'cannedToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(357, NULL, 'mod_hook', 'mod', 'support', 'listener', 'cannedCategoryRm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(358, NULL, 'mod_hook', 'mod', 'support', 'listener', 'cannedCategoryToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(359, NULL, 'mod_hook', 'mod', 'support', 'listener', 'cannedUpdate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(360, NULL, 'mod_hook', 'mod', 'support', 'listener', 'cannedCategoryUpdate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(361, NULL, 'mod_hook', 'mod', 'support', 'listener', 'noteCreate', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(362, NULL, 'mod_hook', 'mod', 'support', 'listener', 'ticketTaskComplete', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(363, NULL, 'mod_hook', 'mod', 'support', 'listener', 'kbHitView', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(364, NULL, 'mod_hook', 'mod', 'support', 'listener', 'kbRm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(365, NULL, 'mod_hook', 'mod', 'support', 'listener', 'kbToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(366, NULL, 'mod_hook', 'mod', 'support', 'listener', 'kbCategoryRm', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(367, NULL, 'mod_hook', 'mod', 'support', 'listener', 'kbCategoryToApiArray', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(368, NULL, 'mod_hook', 'mod', 'support', 'listener', 'kbUpdateCategory', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(369, NULL, 'mod_hook', 'mod', 'system', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(370, NULL, 'mod_hook', 'mod', 'system', 'listener', 'onBeforeAdminCronRun', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(371, NULL, 'mod_hook', 'mod', 'theme', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(372, NULL, 'mod_hook', 'mod', 'theme', 'listener', 'getCurrentThemePreset', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(373, NULL, 'mod_hook', 'mod', 'theme', 'listener', 'setCurrentThemePreset', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(374, NULL, 'mod_hook', 'mod', 'theme', 'listener', 'deletePreset', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(375, NULL, 'mod_hook', 'mod', 'theme', 'listener', 'getThemePresets', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(376, NULL, 'mod_hook', 'mod', 'theme', 'listener', 'getThemeSettings', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(377, NULL, 'mod_hook', 'mod', 'theme', 'listener', 'updateSettings', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(378, NULL, 'mod_hook', 'mod', 'theme', 'listener', 'regenerateThemeSettingsDataFile', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(379, NULL, 'mod_hook', 'mod', 'theme', 'listener', 'regenerateThemeCssAndJsFiles', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(380, NULL, 'mod_hook', 'mod', 'wysiwyg', 'listener', 'setDi', '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(381, NULL, 'mod_activity', NULL, NULL, 'config', NULL, '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(382, NULL, 'mod_theme', 'preset', 'current', 'huraga', 'Default', '2024-12-09 21:16:04', '2024-12-09 21:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `style` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_field`
--

CREATE TABLE `form_field` (
  `id` bigint(20) NOT NULL,
  `form_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `hide_label` tinyint(1) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `hidden` tinyint(1) DEFAULT NULL,
  `readonly` tinyint(1) DEFAULT NULL,
  `is_unique` tinyint(1) DEFAULT NULL,
  `prefix` varchar(255) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `options` text DEFAULT NULL,
  `show_initial` varchar(255) DEFAULT NULL,
  `show_middle` varchar(255) DEFAULT NULL,
  `show_prefix` varchar(255) DEFAULT NULL,
  `show_suffix` varchar(255) DEFAULT NULL,
  `text_size` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `nr` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL COMMENT 'To access via public link',
  `currency` varchar(25) DEFAULT NULL,
  `currency_rate` decimal(13,6) DEFAULT NULL,
  `credit` double(18,2) DEFAULT NULL,
  `base_income` double(18,2) DEFAULT NULL COMMENT 'Income in default currency',
  `base_refund` double(18,2) DEFAULT NULL COMMENT 'Refund in default currency',
  `refund` double(18,2) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `text_1` text DEFAULT NULL,
  `text_2` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'unpaid' COMMENT 'paid, unpaid',
  `seller_company` varchar(255) DEFAULT NULL,
  `seller_company_vat` varchar(255) DEFAULT NULL,
  `seller_company_number` varchar(255) DEFAULT NULL,
  `seller_address` varchar(255) DEFAULT NULL,
  `seller_phone` varchar(255) DEFAULT NULL,
  `seller_email` varchar(255) DEFAULT NULL,
  `buyer_first_name` varchar(255) DEFAULT NULL,
  `buyer_last_name` varchar(255) DEFAULT NULL,
  `buyer_company` varchar(255) DEFAULT NULL,
  `buyer_company_vat` varchar(255) DEFAULT NULL,
  `buyer_company_number` varchar(255) DEFAULT NULL,
  `buyer_address` varchar(255) DEFAULT NULL,
  `buyer_city` varchar(255) DEFAULT NULL,
  `buyer_state` varchar(255) DEFAULT NULL,
  `buyer_country` varchar(255) DEFAULT NULL,
  `buyer_zip` varchar(255) DEFAULT NULL,
  `buyer_phone` varchar(255) DEFAULT NULL,
  `buyer_phone_cc` varchar(255) DEFAULT NULL,
  `buyer_email` varchar(255) DEFAULT NULL,
  `gateway_id` int(11) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `taxname` varchar(255) DEFAULT NULL,
  `taxrate` varchar(35) DEFAULT NULL,
  `due_at` datetime DEFAULT NULL,
  `reminded_at` datetime DEFAULT NULL,
  `paid_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_item`
--

CREATE TABLE `invoice_item` (
  `id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `rel_id` text DEFAULT NULL,
  `task` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `period` varchar(10) DEFAULT NULL,
  `quantity` bigint(20) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `price` double(18,2) DEFAULT NULL,
  `charged` tinyint(1) DEFAULT 0,
  `taxed` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mod_email_queue`
--

CREATE TABLE `mod_email_queue` (
  `id` int(11) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `to_name` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `tries` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mod_massmailer`
--

CREATE TABLE `mod_massmailer` (
  `id` bigint(20) NOT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `filter` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay_gateway`
--

CREATE TABLE `pay_gateway` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `accepted_currencies` text DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT 1,
  `allow_single` tinyint(1) DEFAULT 1,
  `allow_recurrent` tinyint(1) DEFAULT 1,
  `test_mode` tinyint(1) DEFAULT 0,
  `config` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pay_gateway`
--

INSERT INTO `pay_gateway` (`id`, `name`, `gateway`, `accepted_currencies`, `enabled`, `allow_single`, `allow_recurrent`, `test_mode`, `config`) VALUES
(1, 'Custom', 'Custom', NULL, 1, 1, 1, 0, NULL),
(2, 'PayPal', 'PayPalEmail', NULL, 0, 1, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'draft' COMMENT 'active, draft',
  `image` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `publish_at` datetime DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `admin_id`, `title`, `description`, `content`, `slug`, `status`, `image`, `section`, `publish_at`, `published_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'FOSSBilling needs your donations', 'Donations are crucial for the success and sustainability of FOSSBilling and other open-source projects. We need your help.', 'Donations are crucial for the success and sustainability of FOSSBilling and other open-source projects. Without financial support from users and the broader community, it is difficult for these projects to continue to grow and evolve.\nDonations help to cover the costs of development and maintenance. Developing and maintaining software requires time and resources, and without financial support, it can be challenging for open-source projects to sustain their efforts.\n\nThe FOSSBilling project has expenses such as hosting, hardware, software, and other costs associated with developing and maintaining FOSSBilling and other open-source projects. Your donations also help cover some of the maintainers\' expenses.\nClick [here](https://fossbilling.org/donate) to donate to the FOSSBilling project.', 'fossbilling-needs-your-donations', 'active', NULL, NULL, NULL, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(2, 1, 'Check out great features of FOSSBilling', 'FOSSBilling supports automated billing, invoicing, product provisioning', '* Supports automated billing, invoicing, product provisioning\n* Automatically create accounts as soon as the payment is received, suspend when account becomes overdue, terminate when a specified amount of time passes.\n* FOSSBilling is perfectly created to sell shared and reseller hosting accounts, software licenses and downloadable products.\n* Integrated helpdesk, knowledgebase, news and announcements system.\n', 'great-features-of-fossbilling', 'active', NULL, NULL, NULL, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(3, 1, 'FOSSBilling is customizable', 'You can create your own simple or advanced hooks on FOSSBilling events.', '* You can create your own simple or advanced hooks on FOSSBilling events. For example, send notification via sms when new client signs up.\n* Create custom theme for your client interface\n', 'fossbilling-is-customizable', 'active', NULL, NULL, NULL, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `product_category_id` bigint(20) DEFAULT NULL,
  `product_payment_id` bigint(20) DEFAULT NULL,
  `form_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `unit` varchar(50) DEFAULT 'product',
  `active` tinyint(1) DEFAULT 1,
  `status` varchar(50) DEFAULT 'enabled' COMMENT 'enabled, disabled',
  `hidden` tinyint(1) DEFAULT 0,
  `is_addon` tinyint(1) DEFAULT 0,
  `setup` varchar(50) DEFAULT 'after_payment',
  `addons` text DEFAULT NULL,
  `icon_url` varchar(255) DEFAULT NULL,
  `allow_quantity_select` tinyint(1) DEFAULT 0,
  `stock_control` tinyint(1) DEFAULT 0,
  `quantity_in_stock` int(11) DEFAULT 0,
  `plugin` varchar(255) DEFAULT NULL,
  `plugin_config` text DEFAULT NULL,
  `upgrades` text DEFAULT NULL,
  `priority` bigint(20) DEFAULT NULL,
  `config` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_category_id`, `product_payment_id`, `form_id`, `title`, `slug`, `description`, `unit`, `active`, `status`, `hidden`, `is_addon`, `setup`, `addons`, `icon_url`, `allow_quantity_select`, `stock_control`, `quantity_in_stock`, `plugin`, `plugin_config`, `upgrades`, `priority`, `config`, `created_at`, `updated_at`, `type`) VALUES
(1, 1, NULL, NULL, 'Domains registration and transfer', 'domain-checker', NULL, 'product', 1, 'enabled', 0, 0, 'after_payment', NULL, NULL, 0, 0, 0, NULL, NULL, NULL, 1, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00', 'domain');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `icon_url` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `title`, `description`, `icon_url`, `created_at`, `updated_at`) VALUES
(1, 'Default category', NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_payment`
--

CREATE TABLE `product_payment` (
  `id` bigint(20) NOT NULL,
  `type` varchar(30) DEFAULT NULL COMMENT 'free, once, recurrent',
  `once_price` decimal(18,2) DEFAULT 0.00,
  `once_setup_price` decimal(18,2) DEFAULT 0.00,
  `w_price` decimal(18,2) DEFAULT 0.00,
  `m_price` decimal(18,2) DEFAULT 0.00,
  `q_price` decimal(18,2) DEFAULT 0.00,
  `b_price` decimal(18,2) DEFAULT 0.00,
  `a_price` decimal(18,2) DEFAULT 0.00,
  `bia_price` decimal(18,2) DEFAULT 0.00,
  `tria_price` decimal(18,2) DEFAULT 0.00,
  `w_setup_price` decimal(18,2) DEFAULT 0.00,
  `m_setup_price` decimal(18,2) DEFAULT 0.00,
  `q_setup_price` decimal(18,2) DEFAULT 0.00,
  `b_setup_price` decimal(18,2) DEFAULT 0.00,
  `a_setup_price` decimal(18,2) DEFAULT 0.00,
  `bia_setup_price` decimal(18,2) DEFAULT 0.00,
  `tria_setup_price` decimal(18,2) DEFAULT 0.00,
  `w_enabled` tinyint(1) DEFAULT 1,
  `m_enabled` tinyint(1) DEFAULT 1,
  `q_enabled` tinyint(1) DEFAULT 1,
  `b_enabled` tinyint(1) DEFAULT 1,
  `a_enabled` tinyint(1) DEFAULT 1,
  `bia_enabled` tinyint(1) DEFAULT 1,
  `tria_enabled` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` bigint(20) NOT NULL,
  `code` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'percentage' COMMENT 'absolute, percentage, trial',
  `value` decimal(18,2) DEFAULT NULL,
  `maxuses` int(11) DEFAULT 0,
  `used` int(11) DEFAULT 0,
  `freesetup` tinyint(1) DEFAULT 0,
  `once_per_client` tinyint(1) DEFAULT 0,
  `recurring` tinyint(1) DEFAULT 0,
  `active` tinyint(1) DEFAULT 0,
  `products` text DEFAULT NULL,
  `periods` text DEFAULT NULL,
  `client_groups` text DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `timeout` bigint(20) DEFAULT NULL,
  `iteration` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `queue_message`
--

CREATE TABLE `queue_message` (
  `id` bigint(20) NOT NULL,
  `queue_id` bigint(20) DEFAULT NULL,
  `handle` char(32) DEFAULT NULL,
  `handler` varchar(255) DEFAULT NULL,
  `body` longblob DEFAULT NULL,
  `hash` char(32) DEFAULT NULL,
  `timeout` double(18,2) DEFAULT NULL,
  `log` text DEFAULT NULL,
  `execute_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_custom`
--

CREATE TABLE `service_custom` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `plugin` varchar(255) DEFAULT NULL,
  `plugin_config` text DEFAULT NULL,
  `f1` text DEFAULT NULL,
  `f2` text DEFAULT NULL,
  `f3` text DEFAULT NULL,
  `f4` text DEFAULT NULL,
  `f5` text DEFAULT NULL,
  `f6` text DEFAULT NULL,
  `f7` text DEFAULT NULL,
  `f8` text DEFAULT NULL,
  `f9` text DEFAULT NULL,
  `f10` text DEFAULT NULL,
  `config` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_domain`
--

CREATE TABLE `service_domain` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `tld_registrar_id` bigint(20) DEFAULT NULL,
  `sld` varchar(255) DEFAULT NULL,
  `tld` varchar(100) DEFAULT NULL,
  `ns1` varchar(255) DEFAULT NULL,
  `ns2` varchar(255) DEFAULT NULL,
  `ns3` varchar(255) DEFAULT NULL,
  `ns4` varchar(255) DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `privacy` int(11) DEFAULT NULL,
  `locked` tinyint(1) DEFAULT 1,
  `transfer_code` varchar(255) DEFAULT NULL,
  `action` varchar(30) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_company` varchar(255) DEFAULT NULL,
  `contact_first_name` varchar(255) DEFAULT NULL,
  `contact_last_name` varchar(255) DEFAULT NULL,
  `contact_address1` varchar(255) DEFAULT NULL,
  `contact_address2` varchar(255) DEFAULT NULL,
  `contact_city` varchar(255) DEFAULT NULL,
  `contact_state` varchar(255) DEFAULT NULL,
  `contact_postcode` varchar(255) DEFAULT NULL,
  `contact_country` varchar(255) DEFAULT NULL,
  `contact_phone_cc` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `synced_at` datetime DEFAULT NULL,
  `registered_at` datetime DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_downloadable`
--

CREATE TABLE `service_downloadable` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_hosting`
--

CREATE TABLE `service_hosting` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `service_hosting_server_id` bigint(20) DEFAULT NULL,
  `service_hosting_hp_id` bigint(20) DEFAULT NULL,
  `sld` varchar(255) DEFAULT NULL,
  `tld` varchar(255) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `reseller` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_hosting_hp`
--

CREATE TABLE `service_hosting_hp` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quota` varchar(50) DEFAULT NULL,
  `bandwidth` varchar(50) DEFAULT NULL,
  `max_ftp` varchar(50) DEFAULT NULL,
  `max_sql` varchar(50) DEFAULT NULL,
  `max_pop` varchar(50) DEFAULT NULL,
  `max_sub` varchar(50) DEFAULT NULL,
  `max_park` varchar(50) DEFAULT NULL,
  `max_addon` varchar(50) DEFAULT NULL,
  `config` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_hosting_server`
--

CREATE TABLE `service_hosting_server` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `hostname` varchar(100) DEFAULT NULL,
  `assigned_ips` text DEFAULT NULL,
  `status_url` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `max_accounts` bigint(20) DEFAULT NULL,
  `ns1` varchar(100) DEFAULT NULL,
  `ns2` varchar(100) DEFAULT NULL,
  `ns3` varchar(100) DEFAULT NULL,
  `ns4` varchar(100) DEFAULT NULL,
  `manager` varchar(100) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `accesshash` text DEFAULT NULL,
  `password_length` tinyint(4) DEFAULT NULL,
  `port` varchar(20) DEFAULT NULL,
  `config` text DEFAULT NULL,
  `secure` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_license`
--

CREATE TABLE `service_license` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `license_key` varchar(255) DEFAULT NULL,
  `validate_ip` tinyint(1) DEFAULT 1,
  `validate_host` tinyint(1) DEFAULT 1,
  `validate_path` tinyint(1) DEFAULT 0,
  `validate_version` tinyint(1) DEFAULT 0,
  `ips` text DEFAULT NULL,
  `hosts` text DEFAULT NULL,
  `paths` text DEFAULT NULL,
  `versions` text DEFAULT NULL,
  `config` text DEFAULT NULL,
  `plugin` varchar(255) DEFAULT NULL,
  `checked_at` datetime DEFAULT NULL,
  `pinged_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_membership`
--

CREATE TABLE `service_membership` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `config` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` varchar(32) NOT NULL DEFAULT '',
  `modified_at` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `fingerprint` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `modified_at`, `created_at`, `content`, `fingerprint`) VALUES
('fmpmam5ikt27etq0buapk35lau', 1733778996, 1733778964, 'YWRtaW58YTo0OntzOjI6ImlkIjtpOjE7czo1OiJlbWFpbCI7czoyMzoiZmVsaXhzZWlib2xkdEBnbWFpbC5jb20iO3M6NDoibmFtZSI7czoxNDoiRmVsaXggU2VpYm9sZHQiO3M6NDoicm9sZSI7czo1OiJhZG1pbiI7fQ==', '{\"agentString\":\"f51bb482c660d0eeadd1f058058a2b35\",\"browser\":\"986c37480b1f1c2e443504b38b6361b4\",\"browserVersion\":\"9e99f4e97b9eb2f960dba5b2de7a1bc1\",\"os\":\"c16779500ebaa834bef554b25141d36f\",\"ip\":\"837ec5754f503cfaaee0929fd48974e7\",\"language\":\"9d4173200c34536ea8d8c079793f08a7\",\"encoding\":\"f815b8f7ccb4d41d714356548a11017e\",\"upgradeRequests\":\"c4ca4238a0b923820dcc509a6f75849b\",\"platform\":\"028435cf65d96720f19e954697cb994a\",\"mobile\":\"31cc7feb7e937ffbd95471aefba39d86\"}'),
('o5l6jhp8qb2c9rgntf6rmgti4d', 1733778938, 1733778924, '', '{\"agentString\":\"f51bb482c660d0eeadd1f058058a2b35\",\"browser\":\"986c37480b1f1c2e443504b38b6361b4\",\"browserVersion\":\"9e99f4e97b9eb2f960dba5b2de7a1bc1\",\"os\":\"c16779500ebaa834bef554b25141d36f\",\"ip\":\"837ec5754f503cfaaee0929fd48974e7\",\"referrer\":\"d00fe9571dc7a4a80da83b7386546fca\",\"language\":\"9d4173200c34536ea8d8c079793f08a7\",\"encoding\":\"f815b8f7ccb4d41d714356548a11017e\",\"platform\":\"028435cf65d96720f19e954697cb994a\",\"mobile\":\"31cc7feb7e937ffbd95471aefba39d86\"}');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) NOT NULL,
  `param` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `public` tinyint(1) DEFAULT 0,
  `category` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `param`, `value`, `public`, `category`, `hash`, `created_at`, `updated_at`) VALUES
(1, 'last_patch', '42', 0, NULL, NULL, '2024-01-04 12:00:00', '2024-01-04 12:00:00'),
(2, 'company_name', 'Company Name', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(3, 'company_email', 'company@email.com', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(4, 'company_signature', 'FOSSBilling.org - Client Management, Invoicing and Support Software', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(5, 'company_logo', 'themes/huraga/assets/img/logo.svg', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(6, 'company_logo_dark', 'themes/huraga/assets/img/logo_white.svg', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(7, 'company_address_1', 'Demo address line 1', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(8, 'company_address_2', 'Demo address line 2', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(9, 'company_address_3', 'Demo address line 3', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(10, 'company_tel', '+123 456 12345', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(11, 'company_tos', 'Sit ridiculus nascetur porta purus tortor, augue natoque, pulvinar integer nisi mattis dignissim mus, elementum nascetur, augue etiam. Mus mus tortor? A mauris habitasse dictumst, scelerisque, dis nec pulvinar magnis velit, integer, nisi, aliquet, elit phasellus? Parturient odio purus tristique porttitor augue diam pulvinar magna ac lacus in. Augue tincidunt sociis ultrices parturient aliquet dapibus sit. Pulvinar mauris platea in amet penatibus augue ut non ridiculus, nunc lundium. Duis dapibus a mid proin pellentesque lundium vut mauris egestas dolor nec? Diam eu duis sociis. Dapibus porta! Proin, turpis nascetur et. Aenean tristique eu in elit dolor, montes sit nec, magna amet montes, hac diam ac, pellentesque duis sociis, est placerat? Montes ac, nunc aliquet ridiculus nisi? Dignissim. Et aliquet sed.\n\nAuctor mid, mauris placerat? Scelerisque amet a a facilisis porttitor aenean dolor, placerat dapibus, odio parturient scelerisque? In dis arcu nec mid ac in adipiscing ultricies, pulvinar purus dis. Nisi dis massa magnis, porta amet, scelerisque turpis etiam scelerisque porttitor ac dictumst, cras, enim? Placerat enim pulvinar turpis a cum! Aliquam? Urna ut facilisis diam diam lorem mattis ut, ac pid, sed pellentesque. Egestas nunc, lacus, tempor amet? Lacus, nunc dictumst, ac porttitor magna, nisi, montes scelerisque? Cum, rhoncus. Pid adipiscing porta dictumst porta amet dignissim purus, aliquet dolor non sagittis porta urna? Tortor egestas, ultricies elementum, placerat velit magnis lacus? Augue nunc? Ac et cras ut? Ac odio tortor lectus. Mattis adipiscing urna, scelerisque nec aenean adipiscing mid.\n', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(12, 'company_privacy_policy', 'Ac dapibus. Rhoncus integer sit aliquam a! Natoque? Lacus porttitor rhoncus, aliquam porttitor in risus turpis adipiscing! Integer, mus mattis sed enim ac velit proin est et ut, amet eros! Hac augue et vel ac sit duis facilisis purus tincidunt, porttitor eu a penatibus rhoncus platea et mauris rhoncus magnis rhoncus, montes? Et porttitor, urna, dolor, dapibus elementum porttitor aliquam.\n\nCras risus? Turpis, mus tincidunt vel dolor lectus pulvinar aliquam nascetur parturient nunc proin aenean tortor, augue aenean ac penatibus vut arcu. Augue, aenean dapibus in nec. In tempor turpis dictumst cursus, nec eros, elit non, ut integer magna. Augue placerat magnis facilisis platea ridiculus tincidunt et ut porttitor! Cursus odio, aliquet purus tristique vel tempor urna, vut enim.\n\nPorta habitasse scelerisque elementum adipiscing elit pulvinar? Cursus! Turpis! Massa ac elementum a, facilisis eu, sed ac porta massa sociis nascetur rhoncus sed, scelerisque habitasse aliquam? Velit adipiscing turpis, risus ut duis non integer rhoncus, placerat eu adipiscing, hac? Integer cursus porttitor rhoncus turpis lundium nisi, velit? Arcu tincidunt turpis, nunc integer turpis! Ridiculus enim natoque in, eros odio.\n\nScelerisque tempor dolor magnis natoque cras nascetur lorem, augue habitasse ac ut mid rhoncus? Montes tristique arcu, nisi integer? Augue? Adipiscing tempor parturient elementum nunc? Amet mid aliquam penatibus. Aliquam proin, parturient vel parturient dictumst? A porttitor rhoncus, a sit egestas massa tincidunt! Nunc purus. Hac ac! Enim placerat augue cursus augue sociis cum cras, pulvinar placerat nec platea.\n\nPenatibus et duis, urna. Massa cum porttitor elit porta, natoque etiam et turpis placerat lacus etiam scelerisque nunc, egestas, urna non tincidunt cursus odio urna tempor dictumst dignissim habitasse. Mus non et, nisi purus, pulvinar natoque in vel nascetur. Porttitor phasellus sed aenean eu quis? Nec vel, dignissim magna placerat turpis, ridiculus cum est auctor, sagittis, sit scelerisque duis.\n', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(13, 'company_note', 'Amet auctor, sed massa lacus phasellus turpis urna mauris dictumst, dapibus turpis? Sociis amet, mid aliquam, sagittis, risus, eros porta mid placerat eros in? Elementum porta ac pulvinar porttitor adipiscing, tristique porta pid dolor elementum? Eros, pulvinar amet auctor, urna enim amet magnis ultrices etiam? Dictumst ultrices velit eu tortor aliquet, rhoncus! Magnis porttitor. Vel parturient, ac, nascetur magnis tincidunt.\n\nQuis, pid. Lacus lorem scelerisque tortor phasellus, duis adipiscing nec mid mus purus placerat nunc porttitor placerat, risus odio pulvinar penatibus tincidunt, proin. Est tincidunt aliquam vel, ut scelerisque. Enim lorem magna tempor, auctor elit? Magnis lorem ut cursus, nunc nascetur! Est et odio nunc odio adipiscing amet nunc, ridiculus magnis egestas proin, montes nunc tristique tortor, ridiculus magna.\n', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(14, 'invoice_series', 'FOSS', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(15, 'invoice_due_days', '5', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(16, 'invoice_auto_approval', '1', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(17, 'invoice_issue_days_before_expire', '14', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(18, 'theme', 'huraga', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(19, 'issue_invoice_days_before_expire', '7', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(20, 'invoice_refund_logic', 'credit_note', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(21, 'invoice_cn_series', 'CN-', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(22, 'invoice_cn_starting_number', '1', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(23, 'invoice_starting_number', '1', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(24, 'nameserver_1', NULL, 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(25, 'nameserver_2', NULL, 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(26, 'nameserver_3', NULL, 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(27, 'nameserver_4', NULL, 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(28, 'funds_min_amount', '10', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(29, 'funds_max_amount', '200', 0, NULL, NULL, '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(30, 'company_favicon', 'themes/huraga/assets/favicon.ico', 0, NULL, NULL, '2023-01-08 12:00:00', '2023-01-08 12:00:00'),
(31, 'hide_version_public', '1', 0, NULL, NULL, '2023-07-31 12:00:00', '2023-07-31 12:00:00'),
(32, 'hide_company_public', '1', 0, NULL, NULL, '2023-07-31 12:00:00', '2023-07-31 12:00:00'),
(33, 'last_error_reporting_nudge', '0.6.22', 0, NULL, NULL, '2024-12-09 22:14:22', '2024-12-09 22:14:22'),
(34, 'servicedomain_last_sync', '2024-12-09 21:15:46', 0, NULL, NULL, '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(35, 'invoice_overdue_invoked', '2024-12-09 21:15:46', 0, NULL, NULL, '2024-12-09 21:15:46', '2024-12-09 21:15:46'),
(36, 'last_cron_exec', '2024-12-09 21:15:46', 0, NULL, NULL, '2024-12-09 21:15:46', '2024-12-09 21:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `pay_gateway_id` bigint(20) DEFAULT NULL,
  `sid` varchar(255) DEFAULT NULL,
  `rel_type` varchar(100) DEFAULT NULL,
  `rel_id` bigint(20) DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `amount` double(18,2) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_helpdesk`
--

CREATE TABLE `support_helpdesk` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `close_after` smallint(6) DEFAULT 24,
  `can_reopen` tinyint(1) DEFAULT 0,
  `signature` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `support_helpdesk`
--

INSERT INTO `support_helpdesk` (`id`, `name`, `email`, `close_after`, `can_reopen`, `signature`, `created_at`, `updated_at`) VALUES
(1, 'General', 'info@yourdomain.com', 24, 0, 'It is always a pleasure to help.\nHave a Nice Day !', '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `support_kb_article`
--

CREATE TABLE `support_kb_article` (
  `id` bigint(20) NOT NULL,
  `kb_article_category_id` bigint(20) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `title` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'active' COMMENT 'active, draft',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `support_kb_article`
--

INSERT INTO `support_kb_article` (`id`, `kb_article_category_id`, `views`, `title`, `content`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 0, 'How to contact support', 'Registered clients can contact our support team:\n------------------------------------------------------------\n\n* Login to clients area\n* Select **Support** menu item\n* Click **Submit new ticket**\n* Fill the form and press *Submit*\n\nGuests can contact our support team:\n------------------------------------------------------------\n\n* Use our contact form.\n* Fill the form and click *Submit*\n', 'how-to-contact-support', 'active', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(2, 2, 0, 'How to place a new order', 'To place a new order, follow these steps:\n------------------------------------------------------------\n\n* Select the product/service you would like to order via the *Order* page.\n* Depending on your selected product/service, you might need to provide additional information to complete the order request.\n* Click \"Continue\". Your selected product/service will now be in the shopping cart.\n* If you have a promo code, you can apply it now and get a discount.\n* Click on \"Checkout\" button to proceed with the checkout process.\n    * If you are already logged in, you will be automatically redirected to the invoice for the newly purchased product/service.\n    * If you are a registered client but not logged in, you can provide your login details.\n    * If you have never purchased any service from us, please fill out the client sign up form and then continue the checkout process.\n* Choose your preferred payment method. A list of all available payment methods will be listed below the invoice details.\n* You will be redirected to the payment page, through which you can pay for the product/service you would like to order. \n* After successful payment, you will be redirected to the invoice page.\n* Depending on selected services your order may be reviewed and activated by our staff members, otherwise it will be activated automatically.\n* You will receive a confirmation email once your order is active, at which time you will be able to login and manage your services.\n', 'how-to-place-new-order', 'active', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(3, 2, 0, 'Example article', 'Example article heading\n------------------------------------------------------------\n\nCursus, parturient porta dis sit? Habitasse non, sociis porttitor, sagittis dapibus scelerisque? Pid, porttitor integer, montes. Hac, in? Arcu nunc integer nascetur dis nisi. In, sed a amet? Adipiscing odio mauris mauris, porta, integer, adipiscing habitasse, elementum phasellus, turpis in? Quis magna placerat eu, cursus urna mattis egestas, a ac massa turpis mus et odio pid in, urna dapibus ridiculus in turpis cursus ac a urna magna purus etiam ac nisi porttitor! Auctor est? In adipiscing, hac platea augue vut, hac est cum sagittis! Montes nascetur pulvinar tristique porta platea? Magnis vel etiam nisi augue auctor sit pulvinar! Aliquet rhoncus, elit porta? Magnis pulvinar eu turpis purus sociis a augue? Sit, nascetur! Mattis nisi, penatibus ac ac natoque auctor turpis.\n\nExample article heading\n------------------------------------------------------------\n\nUt diam cursus, elit pulvinar, habitasse purus? Enim. Urna? Velit arcu, rhoncus sociis sed, et, ultrices nascetur lacus vut purus tempor a. Vel? Sagittis integer scelerisque, dapibus lectus mid, magnis, augue duis velit etiam tortor! Eros, a et phasellus est ultricies integer elementum in, tempor sed parturient. Dictumst rhoncus, ut sed sagittis facilisis? In, proin? Urna augue in sociis enim dignissim! Velit magna tincidunt ac. Nunc, vel auctor porta enim integer. Phasellus amet eu. Tristique lundium arcu! In? Massa penatibus arcu, rhoncus augue ut pid pulvinar, porttitor, porta, et! A sit odio, proin natoque ultrices cras cras magna porttitor! Ultrices sed magna in! Porttitor nunc, tincidunt nec, amet integer aenean. Tincidunt, placerat nec dolor parturient et ac pulvinar a.\n', 'example-article-slug', 'active', '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `support_kb_article_category`
--

CREATE TABLE `support_kb_article_category` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `support_kb_article_category`
--

INSERT INTO `support_kb_article_category` (`id`, `title`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Frequently asked questions', 'Section for common issues', 'faq', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(2, 'How to\'s', 'Section dedicated for tutorials', 'how-to', '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `support_pr`
--

CREATE TABLE `support_pr` (
  `id` bigint(20) NOT NULL,
  `support_pr_category_id` bigint(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `support_pr`
--

INSERT INTO `support_pr` (`id`, `support_pr_category_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hello #1', 'Hello,\n\n\n\nThank you for using our services.', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(2, 1, 'Hello #2', 'Greetings,\n\n\n\nThank you.', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(3, 2, 'It was fixed', '\nIt was fixed for your account. If you have any more questions or requests, please let us to know.', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(4, 2, 'It was done as requested', '\nIt\'s done as you have requested. Please let us to know if you have any further requests or questions.', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(5, 2, 'Your website works fine', '\nI have just checked your website and it works fine. Please check it from your end and let us to know if you still experience any problems.', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(6, 3, 'Do you get any errors?', '\nDo you get any errors and maybe you can copy/paste full error messages?', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(7, 3, 'Domain is not pointing to our server', '\nYour domain is not pointing to our server. Please set our nameservers for your domain and give 24 hours until changes will apply worldwide.', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(8, 3, 'What is your domain and username?', '\nWhat is your domain name and username?', '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `support_pr_category`
--

CREATE TABLE `support_pr_category` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `support_pr_category`
--

INSERT INTO `support_pr_category` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Greetings', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(2, 'General', '2022-12-01 12:00:00', '2022-12-01 12:00:00'),
(3, 'Accounting', '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `support_p_ticket`
--

CREATE TABLE `support_p_ticket` (
  `id` bigint(20) NOT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `author_email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'open',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_p_ticket_message`
--

CREATE TABLE `support_p_ticket_message` (
  `id` bigint(20) NOT NULL,
  `support_p_ticket_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL COMMENT 'Filled when message author is admin',
  `content` text DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket`
--

CREATE TABLE `support_ticket` (
  `id` bigint(20) NOT NULL,
  `support_helpdesk_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `priority` int(11) DEFAULT 100,
  `subject` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'open' COMMENT 'open, closed, on_hold',
  `rel_type` varchar(100) DEFAULT NULL,
  `rel_id` bigint(20) DEFAULT NULL,
  `rel_task` varchar(100) DEFAULT NULL,
  `rel_new_value` text DEFAULT NULL,
  `rel_status` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket_message`
--

CREATE TABLE `support_ticket_message` (
  `id` bigint(20) NOT NULL,
  `support_ticket_id` bigint(20) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_ticket_note`
--

CREATE TABLE `support_ticket_note` (
  `id` bigint(20) NOT NULL,
  `support_ticket_id` bigint(20) DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` bigint(20) NOT NULL,
  `level` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `taxrate` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tld`
--

CREATE TABLE `tld` (
  `id` bigint(20) NOT NULL,
  `tld_registrar_id` bigint(20) DEFAULT NULL,
  `tld` varchar(15) DEFAULT NULL,
  `price_registration` decimal(18,2) DEFAULT 0.00,
  `price_renew` decimal(18,2) DEFAULT 0.00,
  `price_transfer` decimal(18,2) DEFAULT 0.00,
  `allow_register` tinyint(1) DEFAULT NULL,
  `allow_transfer` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1,
  `min_years` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tld`
--

INSERT INTO `tld` (`id`, `tld_registrar_id`, `tld`, `price_registration`, `price_renew`, `price_transfer`, `allow_register`, `allow_transfer`, `active`, `min_years`, `created_at`, `updated_at`) VALUES
(1, 1, '.com', 11.99, 11.99, 11.99, 1, 1, 1, 1, '2022-12-01 12:00:00', '2022-12-01 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tld_registrar`
--

CREATE TABLE `tld_registrar` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `registrar` varchar(255) DEFAULT NULL,
  `test_mode` tinyint(4) DEFAULT 0,
  `config` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tld_registrar`
--

INSERT INTO `tld_registrar` (`id`, `name`, `registrar`, `test_mode`, `config`) VALUES
(1, 'Custom', 'Custom', 0, NULL),
(2, 'Reseller Club', 'Resellerclub', 0, NULL),
(3, 'Internet.bs', 'Internetbs', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL,
  `invoice_id` bigint(20) DEFAULT NULL,
  `gateway_id` int(11) DEFAULT NULL,
  `txn_id` varchar(255) DEFAULT NULL,
  `txn_status` varchar(255) DEFAULT NULL,
  `s_id` varchar(255) DEFAULT NULL,
  `s_period` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `currency` varchar(10) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'received',
  `ip` varchar(45) DEFAULT NULL,
  `error` text DEFAULT NULL,
  `error_code` int(11) DEFAULT NULL,
  `validate_ipn` tinyint(1) DEFAULT 1,
  `ipn` text DEFAULT NULL,
  `output` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_admin_history`
--
ALTER TABLE `activity_admin_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id_idx` (`admin_id`);

--
-- Indexes for table `activity_client_email`
--
ALTER TABLE `activity_client_email`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `activity_client_history`
--
ALTER TABLE `activity_client_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `activity_system`
--
ALTER TABLE `activity_system`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id_idx` (`admin_id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `admin_group_id_idx` (`admin_group_id`);

--
-- Indexes for table `admin_group`
--
ALTER TABLE `admin_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_password_reset`
--
ALTER TABLE `admin_password_reset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id_idx` (`admin_id`);

--
-- Indexes for table `api_request`
--
ALTER TABLE `api_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id_idx` (`session_id`),
  ADD KEY `currency_id_idx` (`currency_id`),
  ADD KEY `promo_id_idx` (`promo_id`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id_idx` (`cart_id`),
  ADD KEY `product_id_idx` (`product_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `alternative_id_idx` (`aid`),
  ADD KEY `client_group_id_idx` (`client_group_id`);

--
-- Indexes for table `client_balance`
--
ALTER TABLE `client_balance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `client_group`
--
ALTER TABLE `client_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_order`
--
ALTER TABLE `client_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `product_id_idx` (`product_id`),
  ADD KEY `form_id_idx` (`form_id`),
  ADD KEY `promo_id_idx` (`promo_id`);

--
-- Indexes for table `client_order_meta`
--
ALTER TABLE `client_order_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_order_id_idx` (`client_order_id`);

--
-- Indexes for table `client_order_status`
--
ALTER TABLE `client_order_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_order_id_idx` (`client_order_id`);

--
-- Indexes for table `client_password_reset`
--
ALTER TABLE `client_password_reset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `action_code` (`action_code`);

--
-- Indexes for table `extension`
--
ALTER TABLE `extension`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extension_meta`
--
ALTER TABLE `extension_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_field`
--
ALTER TABLE `form_field`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_id_idx` (`form_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `invoice_item`
--
ALTER TABLE `invoice_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id_idx` (`invoice_id`);

--
-- Indexes for table `mod_email_queue`
--
ALTER TABLE `mod_email_queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mod_massmailer`
--
ALTER TABLE `mod_massmailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_gateway`
--
ALTER TABLE `pay_gateway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `admin_id_idx` (`admin_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `product_type_idx` (`type`),
  ADD KEY `product_category_id_idx` (`product_category_id`),
  ADD KEY `product_payment_id_idx` (`product_payment_id`),
  ADD KEY `form_id_idx` (`form_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_payment`
--
ALTER TABLE `product_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `start_index_idx` (`start_at`),
  ADD KEY `end_index_idx` (`end_at`),
  ADD KEY `active_index_idx` (`active`),
  ADD KEY `code_index_idx` (`code`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queue_message`
--
ALTER TABLE `queue_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `queue_id_idx` (`queue_id`);

--
-- Indexes for table `service_custom`
--
ALTER TABLE `service_custom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `service_domain`
--
ALTER TABLE `service_domain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `tld_registrar_id_idx` (`tld_registrar_id`);

--
-- Indexes for table `service_downloadable`
--
ALTER TABLE `service_downloadable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `service_hosting`
--
ALTER TABLE `service_hosting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `service_hosting_server_id_idx` (`service_hosting_server_id`),
  ADD KEY `service_hosting_hp_id_idx` (`service_hosting_hp_id`);

--
-- Indexes for table `service_hosting_hp`
--
ALTER TABLE `service_hosting_hp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_hosting_server`
--
ALTER TABLE `service_hosting_server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_license`
--
ALTER TABLE `service_license`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `license_key` (`license_key`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `service_membership`
--
ALTER TABLE `service_membership`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD UNIQUE KEY `unique_id` (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `param` (`param`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `pay_gateway_id_idx` (`pay_gateway_id`);

--
-- Indexes for table `support_helpdesk`
--
ALTER TABLE `support_helpdesk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_kb_article`
--
ALTER TABLE `support_kb_article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `kb_article_category_id_idx` (`kb_article_category_id`);

--
-- Indexes for table `support_kb_article_category`
--
ALTER TABLE `support_kb_article_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `support_pr`
--
ALTER TABLE `support_pr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_pr_category_id_idx` (`support_pr_category_id`);

--
-- Indexes for table `support_pr_category`
--
ALTER TABLE `support_pr_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_p_ticket`
--
ALTER TABLE `support_p_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_p_ticket_message`
--
ALTER TABLE `support_p_ticket_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_p_ticket_id_idx` (`support_p_ticket_id`),
  ADD KEY `admin_id_idx` (`admin_id`);
ALTER TABLE `support_p_ticket_message` ADD FULLTEXT KEY `content_idx` (`content`);

--
-- Indexes for table `support_ticket`
--
ALTER TABLE `support_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_helpdesk_id_idx` (`support_helpdesk_id`),
  ADD KEY `client_id_idx` (`client_id`);

--
-- Indexes for table `support_ticket_message`
--
ALTER TABLE `support_ticket_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_ticket_id_idx` (`support_ticket_id`),
  ADD KEY `client_id_idx` (`client_id`),
  ADD KEY `admin_id_idx` (`admin_id`);
ALTER TABLE `support_ticket_message` ADD FULLTEXT KEY `content_idx` (`content`);

--
-- Indexes for table `support_ticket_note`
--
ALTER TABLE `support_ticket_note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_ticket_id_idx` (`support_ticket_id`),
  ADD KEY `admin_id_idx` (`admin_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tld`
--
ALTER TABLE `tld`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tld` (`tld`),
  ADD KEY `tld_registrar_id_idx` (`tld_registrar_id`);

--
-- Indexes for table `tld_registrar`
--
ALTER TABLE `tld_registrar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_id_idx` (`invoice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_admin_history`
--
ALTER TABLE `activity_admin_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_client_email`
--
ALTER TABLE `activity_client_email`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_client_history`
--
ALTER TABLE `activity_client_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_system`
--
ALTER TABLE `activity_system`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_group`
--
ALTER TABLE `admin_group`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_password_reset`
--
ALTER TABLE `admin_password_reset`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `api_request`
--
ALTER TABLE `api_request`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_balance`
--
ALTER TABLE `client_balance`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_group`
--
ALTER TABLE `client_group`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_order`
--
ALTER TABLE `client_order`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_order_meta`
--
ALTER TABLE `client_order_meta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_order_status`
--
ALTER TABLE `client_order_status`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_password_reset`
--
ALTER TABLE `client_password_reset`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `extension`
--
ALTER TABLE `extension`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `extension_meta`
--
ALTER TABLE `extension_meta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_field`
--
ALTER TABLE `form_field`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice_item`
--
ALTER TABLE `invoice_item`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mod_email_queue`
--
ALTER TABLE `mod_email_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mod_massmailer`
--
ALTER TABLE `mod_massmailer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pay_gateway`
--
ALTER TABLE `pay_gateway`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_payment`
--
ALTER TABLE `product_payment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `queue_message`
--
ALTER TABLE `queue_message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_custom`
--
ALTER TABLE `service_custom`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_domain`
--
ALTER TABLE `service_domain`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_downloadable`
--
ALTER TABLE `service_downloadable`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_hosting`
--
ALTER TABLE `service_hosting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_hosting_hp`
--
ALTER TABLE `service_hosting_hp`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_hosting_server`
--
ALTER TABLE `service_hosting_server`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_license`
--
ALTER TABLE `service_license`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_membership`
--
ALTER TABLE `service_membership`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_helpdesk`
--
ALTER TABLE `support_helpdesk`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support_kb_article`
--
ALTER TABLE `support_kb_article`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `support_kb_article_category`
--
ALTER TABLE `support_kb_article_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `support_pr`
--
ALTER TABLE `support_pr`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `support_pr_category`
--
ALTER TABLE `support_pr_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `support_p_ticket`
--
ALTER TABLE `support_p_ticket`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_p_ticket_message`
--
ALTER TABLE `support_p_ticket_message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_ticket`
--
ALTER TABLE `support_ticket`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_ticket_message`
--
ALTER TABLE `support_ticket_message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_ticket_note`
--
ALTER TABLE `support_ticket_note`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tld`
--
ALTER TABLE `tld`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tld_registrar`
--
ALTER TABLE `tld_registrar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
