-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2026 at 12:49 PM
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
-- Database: `coreunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_hero_sections`
--

CREATE TABLE `about_hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'About Us',
  `main_title` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_hero_sections`
--

INSERT INTO `about_hero_sections` (`id`, `mini_title`, `main_title`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'From Dubai\'s best minds to\na global powerhouse', 1, '2026-10-08 07:07:53', '2026-10-08 07:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `about_industries_sections`
--

CREATE TABLE `about_industries_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `badge_text` varchar(255) NOT NULL DEFAULT 'Serving Diverse Sectors Across the UAE',
  `main_title` varchar(255) NOT NULL DEFAULT 'Industries We Serve',
  `bg_image` varchar(255) DEFAULT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`items`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_industries_sections`
--

INSERT INTO `about_industries_sections` (`id`, `badge_text`, `main_title`, `bg_image`, `items`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Serving Diverse Sectors Across the UAE', 'Industries We Serve', NULL, '[{\"title\":\"Real Estate\",\"description\":\"Leading with quality and effectively showcasing property\",\"icon\":\"state_img.png\"},{\"title\":\"Retail & eCommerce\",\"description\":\"Driving sales through optimized digital Experiences.\",\"icon\":\"retail_img.png\"},{\"title\":\"Healthcare & Wellness\",\"description\":\"Building trust with professional online solutions.\",\"icon\":\"health_img.png\"},{\"title\":\"Food & Beverage\",\"description\":\"Creating engaging brands that attract customers.\",\"icon\":\"food_img.png\"},{\"title\":\"Tech Startups\",\"description\":\"Supporting growth with scalable digital strategies.\",\"icon\":\"tect_img.png\"},{\"title\":\"Education\",\"description\":\"optimizing learning through modern digital platforms.\",\"icon\":\"edu_img.png\"},{\"title\":\"Hospitality & Tourism\",\"description\":\"Delivering seamless and engaging guest experiences.\",\"icon\":\"hospitality_image.png\"},{\"title\":\"Restaurant\",\"description\":\"Providing strong branding and curating digital Presence.\",\"icon\":\"restaurant_combo\"}]', 1, '2026-10-09 01:20:30', '2026-10-09 01:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `about_intro_sections`
--

CREATE TABLE `about_intro_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_prefix` varchar(255) NOT NULL DEFAULT 'We are a',
  `title_highlight` varchar(255) NOT NULL DEFAULT 'Creative Bold',
  `title_suffix` varchar(255) NOT NULL DEFAULT 'Digital Agency based In UAE',
  `paragraph_1` text DEFAULT NULL,
  `paragraph_2` text DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `floating_bg_image` varchar(255) DEFAULT NULL,
  `floating_logo` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_intro_sections`
--

INSERT INTO `about_intro_sections` (`id`, `title_prefix`, `title_highlight`, `title_suffix`, `paragraph_1`, `paragraph_2`, `main_image`, `floating_bg_image`, `floating_logo`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'We are a', 'Creative Bold', 'Digital Agency based In UAE', 'With <span class=\"font-bold text-black\">8 + years of experience</span>, 500+ prestigious clients, 50+ expert developers, and a 200+ strong team, Core Unity Solutions stands out as Dubai\'s No.1 digital transformation and marketing agency.', 'We deliver efficient web, mobile, and marketing solutions powered by Innovative AI and emerging tech like AR, VR, and Blockchain. After our proven track record in Dubai, we\'re now expanding globally across the USA and MENA region — empowering global brands to evolve, scale, and lead in this digital age.', NULL, NULL, NULL, 1, '2026-10-08 07:39:03', '2026-10-09 00:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `about_page_sections`
--

CREATE TABLE `about_page_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `section_key` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `edit_url` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_page_sections`
--

INSERT INTO `about_page_sections` (`id`, `page_id`, `section_order`, `name`, `section_key`, `description`, `edit_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'About Us Hero Section', 'about_hero', 'Top badge (\"About Us\") with glowing ping indicator, and main heading (\"From Dubai\'s best minds to a global powerhouse\").', '/admin/about-hero-sections/1/edit', 1, '2026-10-08 07:07:56', '2026-10-08 07:07:56'),
(2, 2, 2, 'About Intro Section', 'about_intro', 'Agency intro headline with red highlight (\"Creative Bold\"), 2 narrative paragraphs, team meeting image, and floating logo badge.', '/admin/about-intro-sections/1/edit', 1, '2026-10-08 07:39:04', '2026-10-08 07:39:04'),
(3, 2, 3, 'What Drives Us Forward (Values & Mission)', 'about_values', 'What Drives Us Forward headline, red glowing indicator, left background texture, and interactive Accordion items (Mission, Vision, Values).', '/admin/about-values-sections/1/edit', 1, '2026-10-09 01:20:32', '2026-10-09 01:20:32'),
(4, 2, 4, 'Industries We Serve', 'about_industries', 'Serving Diverse Sectors badge, Industries We Serve headline, subtle background texture, and 8-item industry cards grid (Real Estate, Retail, Healthcare, etc.).', '/admin/about-industries-sections/1/edit', 1, '2026-10-09 01:20:32', '2026-10-09 01:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `about_values_sections`
--

CREATE TABLE `about_values_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(255) NOT NULL DEFAULT 'What Drives Us\nForward',
  `bg_image` varchar(255) DEFAULT NULL,
  `arrow_icon` varchar(255) DEFAULT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`items`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_values_sections`
--

INSERT INTO `about_values_sections` (`id`, `headline`, `bg_image`, `arrow_icon`, `items`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'What Drives Us\nForward', NULL, NULL, '[{\"title\":\"Our Mission\",\"description\":\"To help ambitious brands grow into market leaders through digital strategies that actually deliver. As a trusted digital marketing agency in Dubai, we blend creativity, data, and technology into every campaign.\"},{\"title\":\"Our Vision\",\"description\":\"To build a future where every brand we work with has the digital edge to lead, not just compete. Our vision is to be the go-to digital marketing partner in Dubai, known for innovation, results, and setting new standards in how businesses connect with their audiences online.\"},{\"title\":\"Our Values\",\"description\":\"To make Innovation, integrity, and excellence guide everything we do at CoreUnity Solutions. We work as an extension of your team, combining fresh thinking with honest execution to deliver real impact, because your growth is how we measure our own success.\"}]', 1, '2026-10-09 01:19:05', '2026-10-09 01:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `blog_hero_sections`
--

CREATE TABLE `blog_hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Our Blogs',
  `main_title` text NOT NULL,
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_hero_sections`
--

INSERT INTO `blog_hero_sections` (`id`, `mini_title`, `main_title`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Our Blogs', 'Stories of strategy,\ncreativity, and measurable impact.', 'Real brands, real challenges, real transformations. Explore how we help\nteams grow with design, data, and intelligent marketing.', 1, '2026-10-09 03:35:33', '2026-10-09 04:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `blog_page_sections`
--

CREATE TABLE `blog_page_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `section_key` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `edit_url` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_page_sections`
--

INSERT INTO `blog_page_sections` (`id`, `page_id`, `section_order`, `name`, `section_key`, `description`, `edit_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 'Blog Hero Section', 'blog_hero', 'Top badge (\"Our Blogs\") with glowing red dot, headline (\"Stories of strategy, creativity, and measurable impact.\"), narrative description, and visibility toggle.', '/admin/blog-hero-sections/1/edit', 1, '2026-10-09 03:35:35', '2026-10-09 03:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `blog_sections`
--

CREATE TABLE `blog_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Our Blog',
  `main_title` text DEFAULT NULL,
  `overlay_text` varchar(255) NOT NULL DEFAULT 'View Full\nBlog',
  `date_icon` varchar(255) DEFAULT NULL,
  `category_icon` varchar(255) DEFAULT NULL,
  `posts` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`posts`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_sections`
--

INSERT INTO `blog_sections` (`id`, `mini_title`, `main_title`, `overlay_text`, `date_icon`, `category_icon`, `posts`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Our Blog', 'What\'s going on in the\nindustry?', 'View Full\nBlog', NULL, NULL, '[{\"title\":\"How to Get Your Local Business on Google Maps (Step-by-Step)\",\"date\":\"January 10, 2022\",\"category\":\"Local SEO\",\"excerpt\":\"If you run a local business and you\'re not showing up on Google Maps, you\'re handing customers straight to competitors who are...\",\"slug\":\"local-business-on-google-maps\",\"image\":null},{\"title\":\"Google Ads vs. Meta Ads: Which Is Right for Your Business?\",\"date\":\"January 10, 2022\",\"category\":\"Paid Marketing\",\"excerpt\":\"If you\'ve spent any time in a marketing Slack channel, a Facebook group for small business owners, or even just a late-night Google search...\",\"slug\":\"google-ads-vs-meta-ads\",\"image\":null},{\"title\":\"Daily Manual Tasks Your Business Should Automate Today\",\"date\":\"January 10, 2022\",\"category\":\"Business Growth\",\"excerpt\":\"If you\'ve been putting off the decision to automate manual tasks in your business, this is your sign to stop waiting...\",\"slug\":\"daily-manual-tasks\",\"image\":null},{\"title\":\"5 Must-Have Features Every Business Website Needs\",\"date\":\"January 10, 2022\",\"category\":\"Web Design\",\"excerpt\":\"Let\'s be honest for a second: most business owners don\'t think about their website until something goes wrong...\",\"slug\":\"business-website-features\",\"image\":null}]', 1, '2026-10-08 06:05:07', '2026-10-12 04:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:52:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:13:\"view_services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:15:\"create_services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:13:\"edit_services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:15:\"delete_services\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:10:\"view_pages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:12:\"create_pages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:10:\"edit_pages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:12:\"delete_pages\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:10:\"view_posts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:12:\"create_posts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:10:\"edit_posts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:12:\"delete_posts\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:17:\"view_case_studies\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:19:\"create_case_studies\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:17:\"edit_case_studies\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:19:\"delete_case_studies\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:17:\"view_testimonials\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:19:\"create_testimonials\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:17:\"edit_testimonials\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:19:\"delete_testimonials\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:9:\"view_team\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:11:\"create_team\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:9:\"edit_team\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:11:\"delete_team\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:13:\"view_our_work\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:15:\"create_our_work\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:13:\"edit_our_work\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:15:\"delete_our_work\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:16:\"view_our_clients\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:18:\"create_our_clients\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:16:\"edit_our_clients\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:18:\"delete_our_clients\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:11:\"view_footer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:13:\"create_footer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:11:\"edit_footer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:13:\"delete_footer\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:20:\"view_global_settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:22:\"create_global_settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:20:\"edit_global_settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:22:\"delete_global_settings\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:18:\"view_page_sections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:20:\"create_page_sections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:18:\"edit_page_sections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:20:\"delete_page_sections\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:10:\"view_users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:12:\"create_users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:10:\"edit_users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:12:\"delete_users\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:8:\"view_crm\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:10:\"create_crm\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:8:\"edit_crm\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:10:\"delete_crm\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:2:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"Super Admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:6:\"Editor\";s:1:\"c\";s:3:\"web\";}}}', 1792154030);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE `case_studies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `badge` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `hero_image` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `challenge_text` text NOT NULL,
  `solution_text` text NOT NULL,
  `content` longtext DEFAULT NULL,
  `blocks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`blocks`)),
  `highlights` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`highlights`)),
  `stats` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`stats`)),
  `faqs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`faqs`)),
  `gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`gallery`)),
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `metrics` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metrics`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_studies`
--

INSERT INTO `case_studies` (`id`, `client_name`, `project_title`, `title`, `slug`, `badge`, `category`, `excerpt`, `hero_image`, `featured_image`, `challenge_text`, `solution_text`, `content`, `blocks`, `highlights`, `stats`, `faqs`, `gallery`, `meta_title`, `meta_description`, `og_image`, `is_published`, `sort_order`, `metrics`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DentalZorg Clinics', 'DentalZorg : Modern Patient-Booking Platform', 'DentalZorg : From a Slow, Outdated Site to a Modern Patient-Booking Platform', 'website', 'Case Study (Website Development)', 'Healthcare & Web', 'A complete architectural redesign transforming a slow clinic website into a high-converting patient-booking engine in Dubai.', NULL, NULL, '<p>DentalZorg clinic was struggling with an outdated, sluggish website that took over 6 seconds to load. Patients faced high friction when attempting to book consultations online, causing an estimated 60% drop-off rate on mobile viewports. The clinic was losing prospective patients to competitors who offered modern, 1-click booking experiences.</p>', '<p>CoreUnity engineered a custom, high-speed patient portal built on Laravel and Tailwind CSS. We introduced an intuitive 3-step appointment scheduling funnel, instant WhatsApp consultation routing, automated SMS reminders, and an interactive team directory highlighting doctor credentials and clinic specialties.</p>', '<p>DentalZorg, a premier dental care provider in Dubai, needed to modernise its digital patient touchpoints to match the five-star service delivered in their physical clinic. Our team conducted an exhaustive user journey audit, eliminating non-essential booking fields and designing an ultra-clean mobile-first interface.</p>', '[]', '[{\"icon\":\"\\u2713\",\"title\":\"Sub-Second Page Speeds\",\"description\":\"Optimized Core Web Vitals resulting in 0.8s mobile load times.\"},{\"icon\":\"\\u2713\",\"title\":\"3-Step Seamless Booking\",\"description\":\"Frictionless appointment scheduling with real-time calendar slot picking.\"},{\"icon\":\"\\u2713\",\"title\":\"Automated Patient Reminders\",\"description\":\"Integrated WhatsApp & SMS notifications reducing no-show rates by 45%.\"}]', '[{\"number\":\"145%\",\"label\":\"Increase in Online Bookings\"},{\"number\":\"68%\",\"label\":\"Faster Page Load Speed\"},{\"number\":\"45%\",\"label\":\"Reduction in No-Shows\"},{\"number\":\"4.9\\/5\",\"label\":\"Patient Booking Satisfaction\"}]', '[{\"question\":\"How did the redesign improve patient acquisition?\",\"answer\":\"By streamlining the booking flow into 3 simple steps and optimizing for mobile viewports, mobile appointment conversions increased by 145% in the first 60 days.  \"}]', '[]', NULL, NULL, NULL, 1, 1, '{\"Online Bookings\":\"+145%\",\"Load Speed\":\"0.8s\",\"Mobile Bounce\":\"-52%\"}', '2026-10-09 05:31:46', '2026-10-12 07:50:25', NULL),
(2, 'UrbanCart UAE', 'UrbanCart: Custom Retail Shopping App', 'UrbanCart: Streamlining Retail with a Custom Shopping App [UrbanCart], Dubai', 'mobile-app', 'Case Study (Mobile App Development)', 'Retail & E-Commerce', 'Streamlining retail operations and unlocking mobile-first e-commerce growth for Dubai multi-brand retailer UrbanCart.', 'mob-app.jpg', 'mob-app.jpg', '<p>UrbanCart, a fast-growing multi-brand retail brand in Dubai, relied entirely on physical foot traffic across Deira and Business Bay. Without a dedicated mobile application, they had no direct communication channel to re-engage past shoppers, and third-party delivery aggregators were eating 25% of their net margins.</p>', '<p>CoreUnity developed a native-performing iOS and Android shopping application using Flutter. The app featured lightning-fast category search, Apple Pay / Google Pay one-tap checkout, personalized loyalty rewards, and push notifications announcing flash sales.</p>', '<p>UrbanCart transitioned from brick-and-mortar retail dependency into an omnichannel powerhouse. Within four months of launch, over 50,000 active shoppers in Dubai downloaded the app, generating over 40% of the brand\'s total retail sales directly through mobile.</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"One-Tap Apple Pay Checkout\",\"description\":\"Checkout completion time slashed from 3 minutes to under 20 seconds.\"},{\"icon\":\"\\u2713\",\"title\":\"Gamified Loyalty Rewards\",\"description\":\"Points earning system driving an immediate 35% boost in repeat monthly orders.\"},{\"icon\":\"\\u2713\",\"title\":\"Smart Push Notifications\",\"description\":\"Targeted re-engagement alerts achieving an average 22% open rate.\"}]', '[{\"number\":\"40%\",\"label\":\"Share of Total Sales from App\"},{\"number\":\"50K+\",\"label\":\"App Downloads in 90 Days\"},{\"number\":\"35%\",\"label\":\"Higher Repeat Order Rate\"},{\"number\":\"4.8\\u2605\",\"label\":\"Average Store Rating\"}]', NULL, NULL, NULL, NULL, NULL, 1, 2, '{\"Mobile Sales\":\"+40%\",\"Active Users\":\"50,000+\",\"Repeat Purchases\":\"+35%\"}', '2026-10-09 05:31:46', '2026-10-09 05:31:46', NULL),
(3, 'The Daily Grind F&B', 'The Daily Grind: Social Media Strategy', 'The Daily Grind: Building an Engaged Community for The Daily Grind, a Dubai-Based F&B Brand', 'smm', 'Case Study (Social Media Marketing)', 'Food & Beverage', 'Viral short-form storytelling and community engagement that turned a specialty café into an iconic Dubai lifestyle destination.', 'smm.jpg', 'smm.jpg', '<p>The Daily Grind café in Dubai had world-class artisanal coffee and a stunning interior aesthetic, yet their social media presence was static, generic, and failing to generate foot traffic. Posts received less than 50 likes, and customer discovery on Instagram was practically non-existent.</p>', '<p>CoreUnity revamped their entire visual strategy with high-aesthetic Instagram Reels and TikTok videos highlighting barista craftsmanship, secret menu drinks, and cozy study aesthetics. We engaged food creators and launched the viral #DubaiCoffeeVibes challenge.</p>', '<p>By shifting from static promotional images to dynamic, human-centered micro-videos, The Daily Grind exploded in popularity across Dubai. Weekday morning queues formed out the door, and the brand\'s Instagram following surged by 180% within 90 days.</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"High-Aesthetic Short-Form Video\",\"description\":\"12 monthly viral Reels showcasing barista art and coffee culture.\"},{\"icon\":\"\\u2713\",\"title\":\"Creator Collaboration Nights\",\"description\":\"Private tasting events generating hundreds of organic user tags.\"}]', '[{\"number\":\"180%\",\"label\":\"Instagram Follower Growth\"},{\"number\":\"3.5M+\",\"label\":\"Organic Video Impressions\"},{\"number\":\"65%\",\"label\":\"Surge in Weekend Foot Traffic\"},{\"number\":\"4.9\\u2605\",\"label\":\"Customer Google Review Score\"}]', NULL, NULL, NULL, NULL, NULL, 1, 3, '{\"Followers\":\"+180%\",\"Video Reach\":\"3.5M+\",\"Foot Traffic\":\"+65%\"}', '2026-10-09 05:31:46', '2026-10-09 05:31:46', NULL),
(4, 'Dubai Prime Real Estate', 'Dubai Prime Real Estate: Lead Generation', 'Dubai Prime Real Estate: Driving Qualified Leads for Dubai Prime Real Estate, a Dubai Real Estate Firm', 'ppc', 'Case Study (Pay Per Click Advertising)', 'Real Estate', 'Precision Google Ads and Meta campaigns generating high-net-worth investor inquiries and AED 25M in closed luxury property sales.', 'ppc.jpg', 'ppc.jpg', '<p>The Dubai luxury property market is fiercely competitive, with generic real estate lead costs exceeding AED 450 per lead with a 90% spam rate. Dubai Prime Real Estate was burning budget on low-intent clicks from unqualified buyers.</p>', '<p>CoreUnity completely overhauled their campaign architecture. We built dedicated, hyper-targeted landing pages for specific luxury developments in Downtown Dubai and Palm Jumeirah, enforced strict income and geo-targeting filters, and added mandatory WhatsApp pre-qualification.</p>', '<p>The new campaign funnel drove ultra-qualified international investors from Europe, the GCC, and India. Cost per qualified lead plummeted by 50%, and the agency closed AED 25,000,000 in luxury off-plan transactions within a 4-month period.</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Hyper-Targeted High-Net-Worth Audiences\",\"description\":\"Filtering by net worth indicators and accredited investor profiles.\"},{\"icon\":\"\\u2713\",\"title\":\"Instant WhatsApp CRM Routing\",\"description\":\"Connecting verified buyers with senior property brokers in under 60 seconds.\"}]', '[{\"number\":\"AED 25M+\",\"label\":\"Closed Property Deals\"},{\"number\":\"50%\",\"label\":\"Reduction in Cost Per Lead\"},{\"number\":\"4.2x\",\"label\":\"Return on Ad Spend (ROAS)\"},{\"number\":\"120+\",\"label\":\"Verified Buyer Inquiries \\/ Month\"}]', NULL, NULL, NULL, NULL, NULL, 1, 4, '{\"Closed Sales\":\"AED 25M+\",\"Cost Per Lead\":\"-50%\",\"Ad ROAS\":\"4.2x\"}', '2026-10-09 05:31:46', '2026-10-09 05:31:46', NULL),
(5, 'Al Hilal Restaurant', 'Al Hilal Restaurant (Deira): Print & Brand Media', 'Al Hilal Restaurant (Frij Murar): From Local Gem to Deira\'s Go-To Dining Destination', 'print', 'Case Study (Print Media & Branding)', 'Hospitality & Print', 'Complete print collateral overhaul, luxury embossed menus, and neighborhood flyer campaigns that doubled dining footfall in Deira.', 'print.jpg', 'print.jpg', '<p>Al Hilal, a beloved historic dining spot in Deira, had outdated, faded menus and no modern print branding to capture corporate lunch crowds and tourists exploring the historic district.</p>', '<p>CoreUnity designed and produced premium tactile menus featuring gold foil embossing, water-resistant textures, bilingual typography, branded takeout packaging, and promotional direct-mail inserts distributed to commercial offices across Deira.</p>', '<p>The sensory impact of the new print materials elevated the restaurant\'s perceived prestige, resulting in a 200% surge in dine-in foot traffic and an 80% boost in corporate catering contracts.</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Luxury Gold Foil Embossed Menus\",\"description\":\"Tactile, premium dining menus designed for longevity and luxury aesthetics.\"},{\"icon\":\"\\u2713\",\"title\":\"Eco-Friendly Takeout Packaging\",\"description\":\"Branded kraft paper packaging reinforcing sustainability and brand identity.\"}]', '[{\"number\":\"200%\",\"label\":\"Surge in Dining Footfall\"},{\"number\":\"80%\",\"label\":\"Increase in Corporate Catering\"},{\"number\":\"35%\",\"label\":\"Higher Average Order Value\"},{\"number\":\"10,000+\",\"label\":\"Branded Takeout Kits Delivered\"}]', NULL, NULL, NULL, NULL, NULL, 1, 5, '{\"Dine-in Growth\":\"+200%\",\"Catering Deals\":\"+80%\",\"AOV Increase\":\"+35%\"}', '2026-10-09 05:31:46', '2026-10-09 05:31:46', NULL),
(6, 'Kelly\'s Cajun Grill', 'Kelly\'s Cajun Grill: Local SEO Dominance', 'Kelly\'s Cajun Grill (UAE): From Mall Footfall to Digital Dominance via SEO', 'seo', 'Case Study (Search Engine Optimization)', 'Food & Local Search', 'Dominating Google Maps Local Pack across Dubai Mall and Mall of the Emirates, resulting in a 250% surge in local search volume.', 'seo.jpg', 'seo.jpg', '<p>Despite holding prime food court real estate in Dubai Mall and Mall of the Emirates, Kelly\'s Cajun Grill had zero digital footprint on Google Maps and search queries like \"Cajun food Dubai\" or \"best shrimp Dubai Mall\". Competitors were dominating the Google 3-Pack.</p>', '<p>CoreUnity executed an aggressive Local SEO campaign: verifying and optimizing Google Business Profiles with appetizing menu photography, structuring bilingual schema markup, and driving authentic verified customer reviews.</p>', '<p>Within 6 weeks, Kelly\'s Cajun Grill claimed the #1 spot on Google Maps for all key local queries, generating 250% more map direction requests and an immediate 40% uptick in daily delivery orders.</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Google 3-Pack Local Dominance\",\"description\":\"Ranked #1 for \\\"Cajun restaurant Dubai\\\" across high-density shopping districts.\"},{\"icon\":\"\\u2713\",\"title\":\"Review Generation Engine\",\"description\":\"Accumulated over 450 five-star verified customer reviews in 90 days.\"}]', '[{\"number\":\"250%\",\"label\":\"Surge in Google Maps Searches\"},{\"number\":\"40%\",\"label\":\"Increase in Delivery Orders\"},{\"number\":\"#1\",\"label\":\"Local Pack Rank in Dubai Mall\"},{\"number\":\"4.8\\u2605\",\"label\":\"Average Rating on Google\"}]', NULL, NULL, NULL, NULL, NULL, 1, 6, '{\"Map Searches\":\"+250%\",\"Delivery Volume\":\"+40%\",\"Google Rank\":\"#1 Spot\"}', '2026-10-09 05:31:46', '2026-10-09 05:31:46', NULL),
(7, 'Salwa Real Estate', 'Salwa Real Estate: Luxury Rebranding', 'Salwa Real Estate: From Brand Invisibility to Market Recognition', 'branding', 'Case Study (Brand Identity & Positioning)', 'Luxury & Real Estate', 'A luxury brand identity, high-fashion stationery suite, and market positioning that established Salwa as an elite boutique agency in Dubai.', 'branding-1.jpg', 'branding-1.jpg', '<p>Salwa Real Estate operated with an outdated visual identity that failed to reflect the ultra-luxury off-plan properties they represented. High-net-worth sellers were hesitant to list their AED 20M+ villas with a brand that looked amateurish.</p>', '<p>CoreUnity designed a bespoke corporate visual system: an elegant geometric monogram, deep emerald and champagne gold palette, ultra-premium cotton business cards, bespoke pitch decks, and a minimalist luxury website.</p>', '<p>The rebrand immediately unlocked relationships with premier Dubai developers (Emaar, Nakheel, Meraas) and positioned Salwa as an elite boutique real estate advisory, driving 180+ monthly high-net-worth inquiries.</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Bespoke Luxury Monogram\",\"description\":\"Precision geometric brandmark conveying architectural permanence and elegance.\"},{\"icon\":\"\\u2713\",\"title\":\"Developer Pitch Decks\",\"description\":\"Executive presentation collateral securing master-developer exclusive listings.\"}]', '[{\"number\":\"180+\",\"label\":\"Monthly HNW Buyer Leads\"},{\"number\":\"AED 40M+\",\"label\":\"Exclusive Listings Secured\"},{\"number\":\"100%\",\"label\":\"Brand Consistency Score\"},{\"number\":\"15 Days\",\"label\":\"Full Identity Rollout\"}]', NULL, NULL, NULL, NULL, NULL, 1, 7, '{\"HNW Inquiries\":\"180+\\/mo\",\"Listings Gained\":\"AED 40M+\",\"Brand Prestige\":\"Top Tier\"}', '2026-10-09 05:31:46', '2026-10-09 05:31:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_study_hero_sections`
--

CREATE TABLE `case_study_hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Case Studies',
  `main_title` text NOT NULL,
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_study_hero_sections`
--

INSERT INTO `case_study_hero_sections` (`id`, `mini_title`, `main_title`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Case Studies', 'Stories of strategy,\ncreativity, and measurable impact.', 'Real brands, real challenges, real transformations. Explore how we help\nteams grow with design, data, and intelligent marketing.', 1, '2026-10-09 02:50:22', '2026-10-09 04:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `case_study_page_sections`
--

CREATE TABLE `case_study_page_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `section_key` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `edit_url` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_study_page_sections`
--

INSERT INTO `case_study_page_sections` (`id`, `page_id`, `section_order`, `name`, `section_key`, `description`, `edit_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Case Studies Hero Section', 'case_study_hero', 'Top badge (\"Case Studies\") with glowing red dot, headline (\"Stories of strategy, creativity, and measurable impact.\"), narrative description, and visibility toggle.', '/admin/case-study-hero-sections/1/edit', 1, '2026-10-09 02:50:24', '2026-10-09 02:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `client_reviews_sections`
--

CREATE TABLE `client_reviews_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Client Testimonials',
  `main_title` varchar(255) NOT NULL DEFAULT 'Loved by your best customers',
  `description` text DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `reviews` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`reviews`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_reviews_sections`
--

INSERT INTO `client_reviews_sections` (`id`, `mini_title`, `main_title`, `description`, `bg_image`, `reviews`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Client Testimonials', 'Loved by your best customers', 'We\'re obsessed with delivering outstanding customer experiences that are a reflection of your brand.', 'white_bg.png', '[{\"service\":\"Digital Marketing\",\"name\":\"Ahmed Al Mansouri\",\"role\":\"Managing Director, Dubai-based Business\",\"review\":\"Working with the team completely changed the way we approached digital marketing. Their strategy was tailored to our Dubai market, and we saw a noticeable improvement in our online visibility, engagement, and lead generation. They were professional, responsive, and genuinely focused on our business goals.\",\"rating\":5},{\"service\":\"Social Media Marketing\",\"name\":\"Sara Khan\",\"role\":\"Founder, Dubai-based Lifestyle Brand\",\"review\":\"Our social media presence has grown significantly since partnering with the team. They understood our brand, created engaging content, and developed a strategy that connected with our target audience in Dubai. The consistency and quality of their work have made a real difference.\",\"rating\":5},{\"service\":\"SEO\",\"name\":\"Omar Rahman\",\"role\":\"Marketing Manager, Dubai-based Company\",\"review\":\"We were looking for a long-term SEO partner who understood the competitive Dubai market, and we found exactly that. Their approach was structured, transparent, and focused on sustainable growth. We\\u2019ve seen stronger search visibility and a steady increase in relevant organic traffic.\",\"rating\":5},{\"service\":\"Branding\",\"name\":\"Fatima Al Nuaimi\",\"role\":\"Founder, Dubai-based Startup\",\"review\":\"The branding process was seamless from start to finish. The team took the time to understand our vision and transformed it into a professional identity that truly represents our business. Our new brand has given us much more confidence when presenting ourselves to customers and partners in Dubai.\",\"rating\":5},{\"service\":\"PPC\",\"name\":\"Daniel Thomas\",\"role\":\"Business Owner, Dubai\",\"review\":\"Our previous PPC campaigns were generating clicks but not enough quality leads. The team completely reworked our approach, refined the targeting, and continuously optimized our campaigns. We now have a much clearer understanding of our paid marketing performance and are seeing better-quality enquiries.\",\"rating\":5},{\"service\":\"Mobile App Development\",\"name\":\"Khalid Al Hashimi\",\"role\":\"CEO, Dubai-based Technology Company\",\"review\":\"From the initial concept to the final launch, the development team handled our mobile app project with great professionalism. They understood our requirements, communicated clearly throughout the process, and delivered a solution that was both functional and user-friendly. We\\u2019re extremely pleased with the result.\",\"rating\":5},{\"service\":\"Branding & Digital Marketing\",\"name\":\"Aisha Malik\",\"role\":\"Co-Founder, UAE Business\",\"review\":\"We needed a partner who could bring our branding and digital marketing together under one clear strategy. The team delivered exactly that. From our visual identity to our online campaigns, everything now feels consistent, professional, and aligned with our business objectives.\",\"rating\":5},{\"service\":\"Digital Growth\",\"name\":\"Faisal Ahmed\",\"role\":\"Director, Dubai-based Enterprise\",\"review\":\"What stood out most was their understanding of the local market. They didn\\u2019t simply apply a generic digital strategy\\u2014they took the time to understand our audience, competition, and goals in Dubai. The results have been impressive, and we\\u2019re excited to continue growing with them.\",\"rating\":5}]', 1, '2026-10-08 06:16:18', '2026-10-08 06:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details_sections`
--

CREATE TABLE `contact_details_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_prefix` varchar(255) NOT NULL DEFAULT 'Get',
  `title_highlight` varchar(255) NOT NULL DEFAULT 'with',
  `title_suffix` varchar(255) NOT NULL DEFAULT 'us',
  `description` text DEFAULT NULL,
  `phone` varchar(255) NOT NULL DEFAULT '+971 50 555 9646',
  `email` varchar(255) NOT NULL DEFAULT 'contact@coreunitysolutions.com',
  `address` varchar(255) NOT NULL DEFAULT 'Churchill Tower, Business Bay, Dubai, UAE',
  `submit_button_text` varchar(255) NOT NULL DEFAULT 'Submit Message',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details_sections`
--

INSERT INTO `contact_details_sections` (`id`, `title_prefix`, `title_highlight`, `title_suffix`, `description`, `phone`, `email`, `address`, `submit_button_text`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Get', 'with', 'us', 'We\'d love to hear from you! Our team is here to provide dedicated support, answer your questions, and help bring your next project to life. Feel free to reach out to us', '+971 50 555 9646', 'contact@coreunitysolutions.com', 'Churchill Tower, Business Bay, Dubai, UAE', 'Submit Message', 1, '2026-10-09 03:49:54', '2026-10-09 04:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_hero_sections`
--

CREATE TABLE `contact_hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Contact Us',
  `main_title` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_hero_sections`
--

INSERT INTO `contact_hero_sections` (`id`, `mini_title`, `main_title`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'Lets get in touch and build\nsomething great together', 1, '2026-10-09 03:49:52', '2026-10-09 03:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `contact_page_sections`
--

CREATE TABLE `contact_page_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `section_key` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `edit_url` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_page_sections`
--

INSERT INTO `contact_page_sections` (`id`, `page_id`, `section_order`, `name`, `section_key`, `description`, `edit_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Contact Hero Section', 'contact_hero', 'Top badge (\"Contact Us\") with glowing red dot, headline (\"Lets get in touch and build something great together\"), and visibility toggle.', '/admin/contact-hero-sections/1/edit', 1, '2026-10-09 03:49:56', '2026-10-09 03:49:56'),
(2, 6, 2, 'Contact Details & Inquiry Form Section', 'contact_details', 'Left info (\"Get with us\", copy, Phone, Email, Address cards), right interactive lead submission form settings, and active toggle.', '/admin/contact-details-sections/1/edit', 1, '2026-10-09 03:49:56', '2026-10-09 03:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `core_strengths_sections`
--

CREATE TABLE `core_strengths_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) DEFAULT NULL,
  `main_title` varchar(255) DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `points` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`points`)),
  `collage_image_1` varchar(255) DEFAULT NULL,
  `collage_image_2` varchar(255) DEFAULT NULL,
  `collage_image_3` varchar(255) DEFAULT NULL,
  `collage_image_4` varchar(255) DEFAULT NULL,
  `collage_image_5` varchar(255) DEFAULT NULL,
  `collage_image_6` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_strengths_sections`
--

INSERT INTO `core_strengths_sections` (`id`, `mini_title`, `main_title`, `bg_image`, `points`, `collage_image_1`, `collage_image_2`, `collage_image_3`, `collage_image_4`, `collage_image_5`, `collage_image_6`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Our Core Strengths', 'What Makes Our Digital Marketing Agency Stand Out?', NULL, '[{\"number\":\"01\",\"title\":\"Results-Driven Approach\",\"description\":\"We focus on strategies that deliver scalable outcomes.\"},{\"number\":\"02\",\"title\":\"Transparent Communication\",\"description\":\"We keep everything clear, honest, and updated.\"},{\"number\":\"03\",\"title\":\"Customized Solutions\",\"description\":\"We tailor every solution to fit your unique needs.\"},{\"number\":\"04\",\"title\":\"Affordable & Scalable Services\",\"description\":\"We provide cost-effective solutions that grow with your business.\"},{\"number\":\"05\",\"title\":\"Full-Service Team\",\"description\":\"We handle everything from content creation to ads to seo under one roof.\"},{\"number\":\"06\",\"title\":\"Client-Centric Mindset\",\"description\":\"Your goals guide everything we do, we treat your brand as our own.\"}]', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2026-10-08 04:14:22', '2026-10-08 04:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `crm_forms`
--

CREATE TABLE `crm_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crm_forms`
--

INSERT INTO `crm_forms` (`id`, `name`, `slug`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us Page Form', 'contact-us-page', 'General contact requests, corporate inquiries, and project messages.', 1, '2026-10-14 03:00:50', '2026-10-14 03:00:50'),
(2, 'Consult an Expert', 'consult-an-expert', 'Direct consultation booking modal from header CTA.', 1, '2026-10-14 03:00:50', '2026-10-14 04:12:37'),
(3, 'Schedule Call Modal Form', 'schedule-call-modal', 'Homepage schedule a call conversion form.', 1, '2026-10-14 03:00:50', '2026-10-14 03:00:50'),
(4, 'Service Inquiry Form', 'service-inquiry-form', 'Inquiry form placed across individual service landing pages.', 1, '2026-10-14 03:00:50', '2026-10-14 03:00:50'),
(5, 'Newsletter Subscription Form', 'newsletter-subscription-form', 'Footer newsletter email subscription opt-ins.', 1, '2026-10-14 03:00:50', '2026-10-14 03:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_sections`
--

CREATE TABLE `footer_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `newsletter_title` varchar(255) NOT NULL DEFAULT 'Join Our Newsletter',
  `newsletter_subtitle` varchar(255) NOT NULL DEFAULT 'Subscribe now to stay updated on the latest market trends',
  `newsletter_button_text` varchar(255) NOT NULL DEFAULT 'Subscribe',
  `newsletter_is_active` tinyint(1) NOT NULL DEFAULT 1,
  `logo` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT 'contact@coreunitysolutions.com',
  `phone` varchar(255) NOT NULL DEFAULT '+971 50 555 9646',
  `facebook_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `tiktok_url` varchar(255) DEFAULT NULL,
  `col_2_title` varchar(255) NOT NULL DEFAULT 'Smart Technology Solutions',
  `col_2_links` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`col_2_links`)),
  `col_3_title` varchar(255) NOT NULL DEFAULT 'Digital Growth & Marketing',
  `col_3_links` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`col_3_links`)),
  `col_4_title` varchar(255) NOT NULL DEFAULT 'Industry',
  `col_4_links` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`col_4_links`)),
  `copyright_text` varchar(255) NOT NULL DEFAULT '© 2026. CoreUnity Solutions',
  `privacy_policy_url` varchar(255) NOT NULL DEFAULT '/privacy-policy',
  `terms_conditions_url` varchar(255) NOT NULL DEFAULT '/terms-and-conditions',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_sections`
--

INSERT INTO `footer_sections` (`id`, `newsletter_title`, `newsletter_subtitle`, `newsletter_button_text`, `newsletter_is_active`, `logo`, `address`, `email`, `phone`, `facebook_url`, `instagram_url`, `youtube_url`, `linkedin_url`, `tiktok_url`, `col_2_title`, `col_2_links`, `col_3_title`, `col_3_links`, `col_4_title`, `col_4_links`, `copyright_text`, `privacy_policy_url`, `terms_conditions_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Join Our Newsletter', 'Subscribe now to stay updated on the latest market trends', 'Subscribe', 1, NULL, 'Churchill Tower, Business Bay, Dubai, UAE', 'contact@coreunitysolutions.com', '+971 50 555 9646', 'https://www.facebook.com/coreunitysolutions', 'https://www.instagram.com/coreunitysolutions/', 'https://www.youtube.com/@coreunitysolutions', 'https://www.linkedin.com/company/coreunitysolutions', 'https://www.tiktok.com/@coreunitysolutions?lang=en', 'Smart Technology Solutions', '[{\"label\":\"Web Development\",\"url\":\"\\/services\\/ui-ux-design\"},{\"label\":\"UI\\/UX Design\",\"url\":\"\\/services\\/web-development\"},{\"label\":\"Ecommerce Web Development\",\"url\":\"\\/services\\/ecommerce-web-development\"},{\"label\":\"Mobile App Development\",\"url\":\"\\/services\\/mobile-app-development\"},{\"label\":\"Artificial Intelligence\",\"url\":\"\\/services\\/artificial-intelligence\"},{\"label\":\"Chatbot Development\",\"url\":\"\\/services\\/chatbot-development\"},{\"label\":\"Virtual Reality Development\",\"url\":\"\\/services\\/virtual-reality-development\"},{\"label\":\"Augmented Reality Development\",\"url\":\"\\/services\\/augmented-reality-development\"}]', 'Digital Growth & Marketing', '[{\"label\":\"Digital Marketing\",\"url\":\"\\/services\\/digital-marketing\"},{\"label\":\"Search Engine Optimization (SEO)\",\"url\":\"\\/services\\/search-engine-optimization\"},{\"label\":\"Generative Engine Optimization (GEO)\",\"url\":\"\\/services\\/generative-engine-optimization\"},{\"label\":\"Pay-Per-Click Advertising (PPC)\",\"url\":\"\\/services\\/pay-per-click-advertising\"},{\"label\":\"Social Media Marketing\",\"url\":\"\\/services\\/social-media-marketing\"},{\"label\":\"Influencer Marketing\",\"url\":\"\\/services\\/influencer-marketing\"},{\"label\":\"Branding & Creative Design\",\"url\":\"\\/services\\/branding-and-creative-design\"},{\"label\":\"AI Development Company\",\"url\":\"\\/services\\/ai-development-company\"}]', 'Industry', '[{\"label\":\"Real Estate\",\"url\":\"\\/industries\\/real-estate\"},{\"label\":\"Government\",\"url\":\"\\/industries\\/government\"},{\"label\":\"Healthcare\",\"url\":\"\\/industries\\/healthcare\"},{\"label\":\"Education\",\"url\":\"\\/industries\\/education\"},{\"label\":\"Hospitality\",\"url\":\"\\/industries\\/hospitality\"},{\"label\":\"legal & law\",\"url\":\"\\/industries\\/legal-and-law\"},{\"label\":\"FinTech\",\"url\":\"\\/industries\\/fintech\"}]', '© 2026. CoreUnity Solutions', '/privacy-policy', '/terms-and-conditions', 1, '2026-10-08 06:31:25', '2026-10-14 01:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `form_submissions`
--

CREATE TABLE `form_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crm_form_id` bigint(20) UNSIGNED DEFAULT NULL,
  `form_name` varchar(255) NOT NULL,
  `form_slug` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country_iso` varchar(10) DEFAULT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `specialist` varchar(255) DEFAULT NULL,
  `contact_method` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`payload`)),
  `status` varchar(255) NOT NULL DEFAULT 'new',
  `admin_notes` text DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_submissions`
--

INSERT INTO `form_submissions` (`id`, `crm_form_id`, `form_name`, `form_slug`, `name`, `email`, `phone`, `country_iso`, `country_code`, `service`, `specialist`, `contact_method`, `message`, `payload`, `status`, `admin_notes`, `ip_address`, `page_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Contact Us Page Form', 'contact-us-page', 'Sarah Al-Maktoum', 'sarah@enterprisedubai.ae', '+971 50 123 4567', NULL, NULL, 'Digital Transformation & Cloud', NULL, NULL, 'Looking to revamp our internal ERP and client-facing digital portal.', '{\"name\":\"Sarah Al-Maktoum\",\"email\":\"sarah@enterprisedubai.ae\",\"phone\":\"+971 50 123 4567\",\"service\":\"Digital Transformation & Cloud\",\"message\":\"Looking to revamp our internal ERP and client-facing digital portal.\",\"status\":\"new\",\"admin_notes\":null}', 'new', NULL, '127.0.0.1', 'http://127.0.0.1:8000', '2026-10-14 03:00:50', '2026-10-14 03:00:50'),
(2, 1, 'Contact Us Page Form', 'contact-us-page', 'David Miller', 'david.m@fintechcorp.com', '+971 52 987 6543', NULL, NULL, 'Fintech Security Architecture', NULL, NULL, 'Need consultation on payment gateway integration and compliance.', '{\"name\":\"David Miller\",\"email\":\"david.m@fintechcorp.com\",\"phone\":\"+971 52 987 6543\",\"service\":\"Fintech Security Architecture\",\"message\":\"Need consultation on payment gateway integration and compliance.\",\"status\":\"contacted\",\"admin_notes\":\"Reached out via email on Oct 12. Meeting scheduled for next Tuesday.\"}', 'contacted', 'Reached out via email on Oct 12. Meeting scheduled for next Tuesday.', '127.0.0.1', 'http://127.0.0.1:8000', '2026-10-14 03:00:50', '2026-10-14 03:00:50'),
(3, 2, 'Consult an Expert', 'consult-an-expert', 'Ahmed Mansoor', 'ahmed.m@techstart.io', '+971 55 456 7890', 'AE', '+971', NULL, 'Technical Architecture', 'whatsapp', 'Need urgent advice on scaling high-concurrency microservices.', '{\"name\":\"Ahmed Mansoor\",\"email\":\"ahmed.m@techstart.io\",\"phone\":\"+971 55 456 7890\",\"specialist\":\"Technical Architecture\",\"contact_method\":\"whatsapp\",\"message\":\"Need urgent advice on scaling high-concurrency microservices.\",\"status\":\"new\",\"admin_notes\":null}', 'new', NULL, '127.0.0.1', 'http://127.0.0.1:8000', '2026-10-14 03:00:50', '2026-10-14 04:12:37'),
(4, 2, 'Consult an Expert', 'consult-an-expert', 'Elena Rostova', 'elena@luxuryliving.ae', '+971 54 321 0987', 'AE', '+971', NULL, 'Creative UI/UX Design', 'email', 'We want a modern high-end redesign for our real estate showcase website.', '{\"name\":\"Elena Rostova\",\"email\":\"elena@luxuryliving.ae\",\"phone\":\"+971 54 321 0987\",\"specialist\":\"Creative UI\\/UX Design\",\"contact_method\":\"email\",\"message\":\"We want a modern high-end redesign for our real estate showcase website.\",\"status\":\"closed\",\"admin_notes\":\"Proposal accepted. Transferred to project delivery team.\"}', 'closed', 'Proposal accepted. Transferred to project delivery team.', '127.0.0.1', 'http://127.0.0.1:8000', '2026-10-14 03:00:50', '2026-10-14 04:12:37'),
(5, 3, 'Schedule Call Modal Form', 'schedule-call-modal', 'Rashid Khan', 'rashid@khanlogistics.com', '+971 50 789 0123', NULL, NULL, 'Web App & Core Development', NULL, NULL, 'We need custom fleet management tracking software built.', '{\"name\":\"Rashid Khan\",\"email\":\"rashid@khanlogistics.com\",\"phone\":\"+971 50 789 0123\",\"service\":\"Web App & Core Development\",\"message\":\"We need custom fleet management tracking software built.\",\"status\":\"new\",\"admin_notes\":null}', 'new', NULL, '127.0.0.1', 'http://127.0.0.1:8000', '2026-10-14 03:00:50', '2026-10-14 03:00:50'),
(6, 4, 'Service Inquiry Form', 'service-inquiry-form', 'Kareem Obeid', 'kareem@obeiddental.ae', '+971 58 654 3210', NULL, NULL, 'Search Engine Optimization (SEO)', NULL, NULL, 'Want to rank #1 locally in Dubai for dental cosmetic surgery.', '{\"name\":\"Kareem Obeid\",\"email\":\"kareem@obeiddental.ae\",\"phone\":\"+971 58 654 3210\",\"service\":\"Search Engine Optimization (SEO)\",\"message\":\"Want to rank #1 locally in Dubai for dental cosmetic surgery.\",\"status\":\"contacted\",\"admin_notes\":\"Shared initial SEO audit PDF via WhatsApp.\"}', 'contacted', 'Shared initial SEO audit PDF via WhatsApp.', '127.0.0.1', 'http://127.0.0.1:8000', '2026-10-14 03:00:50', '2026-10-14 03:00:50'),
(7, 5, 'Newsletter Subscription Form', 'newsletter-subscription-form', 'Subscriber', 'insights@digitalweekly.net', NULL, NULL, NULL, 'Newsletter', NULL, NULL, 'Subscribed to weekly tech newsletter.', '{\"name\":\"Subscriber\",\"email\":\"insights@digitalweekly.net\",\"phone\":null,\"service\":\"Newsletter\",\"message\":\"Subscribed to weekly tech newsletter.\",\"status\":\"closed\",\"admin_notes\":\"Added to mailing list.\"}', 'closed', 'Added to mailing list.', '127.0.0.1', 'http://127.0.0.1:8000', '2026-10-14 03:00:50', '2026-10-14 03:00:50'),
(10, 2, 'Consult an Expert', 'consult-an-expert', 'M. Hussain Lodhi', 'hasanlodhi000@gmail.com', '+923111990147', 'PK', '+92', NULL, 'Product Strategy', 'email', 'kuch bhi', '{\"form_type\":\"Consult an Expert\",\"country_iso\":\"PK\",\"country_dial_code\":\"+92\",\"full_phone\":\"+923111990147\",\"name\":\"M. Hussain Lodhi\",\"email\":\"hasanlodhi000@gmail.com\",\"phone\":\"+923111990147\",\"specialist\":\"Product Strategy\",\"contact_method\":\"email\",\"question\":\"kuch bhi\"}', 'new', NULL, '127.0.0.1', 'http://localhost:8000/', '2026-10-14 05:05:06', '2026-10-14 05:05:06'),
(11, 3, 'Schedule Call Modal Form', 'schedule-call-modal', 'Hasan Lodhi', 'hasanlodhi000@gmail.com', '03111990147', NULL, NULL, 'Growth & Performance Marketing', NULL, NULL, 'kllklkl', '{\"form_type\":\"Schedule Call Modal\",\"name\":\"Hasan Lodhi\",\"email\":\"hasanlodhi000@gmail.com\",\"phone\":\"03111990147\",\"service\":\"Growth & Performance Marketing\",\"message\":\"kllklkl\"}', 'new', NULL, '127.0.0.1', 'http://localhost:8000/', '2026-10-14 05:10:27', '2026-10-14 05:10:27'),
(12, 1, 'Contact Us Page Form', 'contact-us-page', 'Hussain Lodhi', 'hasanlodhi000@gmail.com', '03111990147', NULL, NULL, NULL, NULL, NULL, 'contact', '{\"form_type\":\"Contact Us Page\",\"first_name\":\"Hussain\",\"last_name\":\"Lodhi\",\"phone\":\"03111990147\",\"email\":\"hasanlodhi000@gmail.com\",\"message\":\"contact\",\"name\":\"Hussain Lodhi\"}', 'new', NULL, '127.0.0.1', 'http://localhost:8000/contact', '2026-10-14 06:00:39', '2026-10-14 06:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `global_seo_settings`
--

CREATE TABLE `global_seo_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_indexing_enabled` tinyint(1) NOT NULL DEFAULT 0,
  `meta_title_default` varchar(255) DEFAULT NULL,
  `meta_description_default` text DEFAULT NULL,
  `canonical_base_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `global_seo_settings`
--

INSERT INTO `global_seo_settings` (`id`, `site_indexing_enabled`, `meta_title_default`, `meta_description_default`, `canonical_base_url`, `created_at`, `updated_at`) VALUES
(1, 0, 'Core Unity Solutions | Digital Marketing Agency & IT Solutions Dubai', 'Core Unity Solutions is a results-driven digital marketing agency in Dubai, combining creativity, data, and technology to help ambitious brands grow.', 'http://127.0.0.1:8000', '2026-10-12 01:38:02', '2026-10-15 06:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `button_icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `globe_image` varchar(255) DEFAULT NULL,
  `global_presence` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`global_presence`)),
  `logo_ticker` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`logo_ticker`)),
  `media_logos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`media_logos`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_sections`
--

INSERT INTO `hero_sections` (`id`, `title`, `subtitle`, `description`, `button_text`, `button_link`, `created_at`, `updated_at`, `button_icon`, `image`, `globe_image`, `global_presence`, `logo_ticker`, `media_logos`) VALUES
(1, 'We are a bold and innovative digital<br className=\"hidden md:block\" /> agency based in the UAE.', 'Leading Digital Marketing & Web Agency in Dubai', 'CoreUnity Solutions empowers brands across UAE and globally with cutting-edge web development, creative branding, and ROI-driven marketing.', 'Schedule a call', '#contact', '2026-10-08 01:39:28', '2026-10-13 02:54:46', 'Core Unity Logo-05.svg', 'earth_globe.png', 'earth_globe.png', '[{\"country\":\"USA\"},{\"country\":\"UAE\"},{\"country\":\"Saudi Arabia\"},{\"country\":\"Pakistan\"}]', '[\"al-jazeera.png\",\"zaaya.png\",\"gulf_logo.png\",\"khaleej_logo.png\",\"arabian_logo.png\"]', '[{\"image\":\"hero\\/logos\\/al-jazeera.png\",\"title\":\"Al Jazeera\",\"url\":\"https:\\/\\/www.aljazeera.com\"},{\"image\":\"hero\\/logos\\/zaaya.png\",\"title\":\"Zaaya\",\"url\":\"\"},{\"image\":\"hero\\/logos\\/gulf_logo.png\",\"title\":\"Gulf News\",\"url\":\"https:\\/\\/gulfnews.com\"},{\"image\":\"hero\\/logos\\/khaleej_logo.png\",\"title\":\"Khaleej Times\",\"url\":\"https:\\/\\/www.khaleejtimes.com\"},{\"image\":\"hero\\/logos\\/arabian_logo.png\",\"title\":\"Arabian Business\",\"url\":\"https:\\/\\/www.arabianbusiness.com\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_sections`
--

CREATE TABLE `home_page_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_order` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `section_key` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `edit_url` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_sections`
--

INSERT INTO `home_page_sections` (`id`, `page_id`, `section_order`, `name`, `section_key`, `description`, `edit_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Hero Section', 'hero_section', 'Main headline, Subtitle, Description, CTA button, Earth globe, Global presence locations, Client logo ticker.', '/admin/hero-sections/1/edit', 1, '2026-10-08 02:55:41', '2026-10-08 02:55:41'),
(2, 1, 2, 'Services Highlights', 'services_highlights', 'Digital Marketing Services badge, Agency scaling headline, Websites & Branding, Growth Strategy link pills, Digital Marketing card.', '/admin/services-sections/1/edit', 1, '2026-10-08 02:55:41', '2026-10-08 02:55:41'),
(3, 1, 3, 'Core Strengths', 'core_strengths', 'Our Core Strengths badge, Stand Out headline, 6 key strength points (01 to 06), right background pattern, and center 6-image marketing collage.', '/admin/core-strengths-sections/1/edit', 1, '2026-10-08 04:16:41', '2026-10-08 04:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_08_18_063936_create_hero_sections_table', 1),
(5, '2026_08_18_075519_add_dynamic_fields_to_hero_sections_table', 1),
(6, '2026_08_18_104000_create_services_sections_table', 1),
(7, '2026_08_20_120001_create_pages_table', 1),
(8, '2026_08_20_120002_create_posts_table', 1),
(9, '2026_08_20_120003_create_case_studies_table', 1),
(10, '2026_10_05_110509_add_cms_fields_to_pages_table', 1),
(11, '2026_10_08_063517_add_description_and_image_to_hero_sections_table', 2),
(12, '2026_10_08_073000_add_cards_fields_to_services_sections_table', 3),
(13, '2026_10_08_073100_create_home_page_sections_table', 3),
(14, '2026_10_08_080000_create_core_strengths_sections_table', 4),
(15, '2026_10_08_083000_create_our_work_sections_table', 5),
(16, '2026_10_08_090000_create_our_clients_sections_table', 6),
(17, '2026_10_08_093000_create_team_sections_table', 7),
(18, '2026_10_08_100000_create_testimonial_sections_table', 8),
(19, '2026_10_08_103000_create_blog_sections_table', 9),
(20, '2026_10_08_110000_create_client_reviews_sections_table', 10),
(21, '2026_10_08_113000_create_footer_sections_table', 11),
(22, '2026_10_08_120000_create_about_page_sections_table', 12),
(23, '2026_10_08_120500_create_about_hero_sections_table', 12),
(24, '2026_10_08_130000_create_about_intro_sections_table', 13),
(25, '2026_10_09_120000_create_about_values_sections_table', 14),
(26, '2026_10_09_120100_create_about_industries_sections_table', 14),
(27, '2026_10_09_130000_create_services_page_sections_table', 15),
(28, '2026_10_09_130100_create_services_hero_sections_table', 15),
(29, '2026_10_09_130200_create_services_list_sections_table', 15),
(30, '2026_10_09_130300_create_services_industries_sections_table', 15),
(31, '2026_10_09_130400_create_services_smm_sections_table', 15),
(32, '2026_10_09_140000_create_case_study_page_sections_table', 16),
(33, '2026_10_09_140100_create_case_study_hero_sections_table', 16),
(34, '2026_10_09_150000_create_blog_page_sections_table', 17),
(35, '2026_10_09_150100_create_blog_hero_sections_table', 17),
(36, '2026_10_09_160000_create_contact_page_sections_table', 18),
(37, '2026_10_09_160100_create_contact_hero_sections_table', 18),
(38, '2026_10_09_160200_create_contact_details_sections_table', 18),
(39, '2026_10_09_170000_create_services_table', 19),
(40, '2026_10_09_170100_add_dynamic_fields_to_case_studies_table', 19),
(41, '2026_10_09_170200_add_dynamic_fields_to_posts_table', 19),
(42, '2026_10_09_180000_add_blocks_to_all_dynamic_models', 20),
(43, '2026_10_12_120000_create_global_seo_settings_table', 21),
(44, '2026_10_12_153000_add_cards_to_our_work_sections_table', 22),
(45, '2026_10_13_120000_add_media_logos_to_hero_sections_and_pages', 23),
(46, '2026_10_14_100000_create_site_settings_table', 24),
(47, '2026_10_14_100100_add_soft_deletes_to_critical_tables', 24),
(48, '2026_10_14_072514_create_permission_tables', 25),
(49, '2026_10_14_140000_create_crm_forms_and_submissions_tables', 26),
(50, '2026_10_14_143000_add_country_fields_to_form_submissions_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 3),
(9, 'App\\Models\\User', 3),
(13, 'App\\Models\\User', 3),
(17, 'App\\Models\\User', 3),
(21, 'App\\Models\\User', 3),
(25, 'App\\Models\\User', 3),
(29, 'App\\Models\\User', 3),
(33, 'App\\Models\\User', 3),
(37, 'App\\Models\\User', 3),
(41, 'App\\Models\\User', 3),
(49, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_clients_sections`
--

CREATE TABLE `our_clients_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Our Clients',
  `main_title` text DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `client_logos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`client_logos`)),
  `globe_image` varchar(255) DEFAULT NULL,
  `globe_text` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_clients_sections`
--

INSERT INTO `our_clients_sections` (`id`, `mini_title`, `main_title`, `bg_image`, `client_logos`, `globe_image`, `globe_text`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Our Clients', '5-Star Rated, Works \nwith CoreUnity Solutions', 'grid_bg.png', '[{\"image\":\"clients\\/salwa.png\",\"name\":\"Salwa Real Estate\",\"url\":\"\"},{\"image\":\"clients\\/dental.png\",\"name\":\"Dental Clinic\",\"url\":\"\"},{\"image\":\"clients\\/SkillBridge Academy.png\",\"name\":\"SkillBridge Academy\",\"url\":\"\"},{\"image\":\"clients\\/cajun.png\",\"name\":\"Cajun\",\"url\":\"\"},{\"image\":\"clients\\/UAEofplan.png\",\"name\":\"UAE Off Plan\",\"url\":\"\"},{\"image\":\"clients\\/alhilal.png\",\"name\":\"Al Hilal\",\"url\":\"\"},{\"image\":\"clients\\/fs.png\",\"name\":\"FS Group\",\"url\":\"\"},{\"image\":\"clients\\/handyman.png\",\"name\":\"Handyman\",\"url\":\"\"},{\"image\":\"clients\\/soulnsoil.png\",\"name\":\"Soul & Soil\",\"url\":\"\"},{\"image\":\"clients\\/appello.png\",\"name\":\"Appello\",\"url\":\"\"},{\"image\":\"clients\\/sukihana.png\",\"name\":\"Sukihana\",\"url\":\"\"}]', 'World.png', '500+ Clients \nworldwide', 1, '2026-10-08 05:00:56', '2026-10-13 02:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `our_work_sections`
--

CREATE TABLE `our_work_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) DEFAULT NULL,
  `main_title` varchar(255) DEFAULT NULL,
  `categories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`categories`)),
  `cards` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`cards`)),
  `card_1_title` varchar(255) DEFAULT NULL,
  `card_1_stat_number` varchar(255) DEFAULT NULL,
  `card_1_stat_desc` varchar(255) DEFAULT NULL,
  `card_1_button_text` varchar(255) DEFAULT NULL,
  `card_1_button_link` varchar(255) DEFAULT NULL,
  `card_1_image` varchar(255) DEFAULT NULL,
  `card_1_bg_image` varchar(255) DEFAULT NULL,
  `card_2_title` varchar(255) DEFAULT NULL,
  `card_2_stat_number` varchar(255) DEFAULT NULL,
  `card_2_stat_desc` varchar(255) DEFAULT NULL,
  `card_2_button_text` varchar(255) DEFAULT NULL,
  `card_2_button_link` varchar(255) DEFAULT NULL,
  `card_2_image` varchar(255) DEFAULT NULL,
  `card_2_bg_image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_work_sections`
--

INSERT INTO `our_work_sections` (`id`, `mini_title`, `main_title`, `categories`, `cards`, `card_1_title`, `card_1_stat_number`, `card_1_stat_desc`, `card_1_button_text`, `card_1_button_link`, `card_1_image`, `card_1_bg_image`, `card_2_title`, `card_2_stat_number`, `card_2_stat_desc`, `card_2_button_text`, `card_2_button_link`, `card_2_image`, `card_2_bg_image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'OUR WORK', '10+ yrs of expertise in providing innovative solutions', '[{\"label\":\"Website\",\"url\":\"\\/case-study\\/website\"},{\"label\":\"Mobile App\",\"url\":\"\\/mobile-app\"},{\"label\":\"SMM\",\"url\":\"\\/smm\"},{\"label\":\"PPC\",\"url\":\"\\/ppc\"},{\"label\":\"PRINT\",\"url\":\"\\/print\"},{\"label\":\"SEO\",\"url\":\"\\/seo\"},{\"label\":\"BRANDING\",\"url\":\"\\/branding\"}]', '[{\"title\":\"Website\\ndevelopment\",\"stat_number\":\"145 %\",\"stat_desc\":\"An increase in online bookings during the first 90 days.\",\"button_text\":\"View Case Study\",\"button_link\":\"\\/case-study\\/website\",\"image\":null,\"bg_image\":null},{\"title\":\"Mobile\\ndevelopment\",\"stat_number\":\"40 %\",\"stat_desc\":\"Share of total online sales driven through the mobile app.\",\"button_text\":\"View Case Study\",\"button_link\":\"\\/mobile-app\",\"image\":null,\"bg_image\":null}]', 'Website\ndevelopment', '145 %', 'An increase in online bookings during the first 90 days.', 'View Case Study', '/case-study/website', NULL, NULL, 'Mobile\ndevelopment', '40 %', 'Share of total online sales driven through the mobile app.', 'View Case Study', '/mobile-app', NULL, NULL, 1, '2026-10-08 04:38:40', '2026-10-12 06:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `hero_badge` varchar(255) DEFAULT NULL,
  `hero_headline` varchar(255) NOT NULL,
  `hero_subheadline` text DEFAULT NULL,
  `hero_cta_text` varchar(255) DEFAULT NULL,
  `hero_cta_url` varchar(255) DEFAULT NULL,
  `hero_image` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `blocks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`blocks`)),
  `sections` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sections`)),
  `media_logos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`media_logos`)),
  `global_presence` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`global_presence`)),
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `show_in_navbar` tinyint(1) NOT NULL DEFAULT 0,
  `navbar_order` int(11) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `hero_badge`, `hero_headline`, `hero_subheadline`, `hero_cta_text`, `hero_cta_url`, `hero_image`, `content`, `blocks`, `sections`, `media_logos`, `global_presence`, `meta_title`, `meta_description`, `show_in_navbar`, `navbar_order`, `is_published`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Home', 'home', 'DIGITAL AGENCY', 'we are a bold and innovative digital agency based in the UAE', 'Transforming brands across Dubai and globally with performance-driven marketing, web design & scalable tech.', 'Schedule a call', '#contact', NULL, '<p></p>', NULL, '[]', NULL, '[\"USA\",\"UAE\",\"Saudi Arabia\",\"Pakistan\"]', 'Digital Marketing Agency in Dubai, UAE | CoreUnity Solutions', 'CoreUnity Solutions is a Dubai-based digital marketing agency offering web development, SEO, branding & PPC. Trusted by 500+ clients.', 1, 1, 1, '2026-10-08 02:06:37', '2026-10-09 00:14:28', NULL),
(2, 'About', 'about', 'ABOUT COREUNITY', 'From Dubai\'s best minds to a global powerhouse.', 'We started in the heart of Dubai with a single goal: help ambitious companies achieve digital excellence.', 'Speak to an Expert', '#contact', NULL, '<p></p>', NULL, '[]', NULL, '[\"USA\",\"UAE\",\"Saudi Arabia\",\"Pakistan\"]', 'About Us | CoreUnity Solutions - Dubai Digital Agency', 'Learn about CoreUnity Solutions, our leadership team, vision, and how we empower companies across the UAE and worldwide.', 1, 2, 1, '2026-10-08 02:06:37', '2026-10-08 07:25:51', NULL),
(3, 'Services', 'services', 'OUR EXPERTISE', 'Empowering Businesses with Full-Stack Digital Solutions.', 'Comprehensive suite of services covering Web Development, Branding, SEO, SMM, Mobile Apps, and PPC.', 'Explore Services', '#services', 'digital_image.png', NULL, NULL, NULL, NULL, '[\"USA\",\"UAE\",\"Saudi Arabia\",\"Pakistan\"]', 'Services | CoreUnity Solutions Dubai', 'Discover our full spectrum of digital marketing, UI/UX, web development, SEO, and branding services.', 1, 3, 1, '2026-10-08 02:06:37', '2026-10-08 02:06:37', NULL),
(4, 'Case Study', 'case-study', 'OUR WORK & IMPACT', 'Transformative Case Studies & Real Results.', 'Explore how we helped premier brands achieve exponential revenue and brand dominance across the UAE.', 'View Projects', '#projects', 'dpworld_image.png', NULL, NULL, NULL, NULL, '[\"USA\",\"UAE\",\"Saudi Arabia\",\"Pakistan\"]', 'Case Studies | CoreUnity Solutions', 'Real case studies and demonstrable results delivered for clients across real estate, fintech, retail, and hospitality.', 1, 4, 1, '2026-10-08 02:06:37', '2026-10-08 02:06:37', NULL),
(5, 'Blog', 'blog', 'KNOWLEDGE HUB', 'Insights, Strategies & Digital Marketing Trends.', 'Stay ahead of the curve with expert insights on SEO, digital transformation, branding, and conversion optimization.', 'Read Articles', '#articles', 'blog_image.png', NULL, NULL, NULL, NULL, '[\"USA\",\"UAE\",\"Saudi Arabia\",\"Pakistan\"]', 'Blog & Industry Insights | CoreUnity Solutions', 'Actionable digital marketing strategies, SEO techniques, and growth insights from Dubai leading digital experts.', 1, 5, 1, '2026-10-08 02:06:37', '2026-10-08 02:06:37', NULL),
(6, 'Contact', 'contact', 'GET IN TOUCH', 'Let\'s Build Something Extraordinary Together.', 'Have a project in mind or need expert digital advisory? Our Dubai team is ready to assist you.', 'Request Consultation', '#contact-form', 'marketing_image.png', NULL, NULL, NULL, NULL, '[\"USA\",\"UAE\",\"Saudi Arabia\",\"Pakistan\"]', 'Contact Us | CoreUnity Solutions Dubai', 'Get in touch with CoreUnity Solutions in Dubai, UAE. Request a free consultation or project proposal today.', 1, 6, 1, '2026-10-08 02:06:37', '2026-10-08 02:06:37', NULL),
(8, 'Contact (Copy)', 'contact-copy-1792066598', 'GET IN TOUCH', 'Let\'s Build Something Extraordinary Together.', 'Have a project in mind or need expert digital advisory? Our Dubai team is ready to assist you.', 'Request Consultation', '#contact-form', 'marketing_image.png', NULL, NULL, NULL, NULL, '[\"USA\",\"UAE\",\"Saudi Arabia\",\"Pakistan\"]', 'Contact Us | CoreUnity Solutions Dubai', 'Get in touch with CoreUnity Solutions in Dubai, UAE. Request a free consultation or project proposal today.', 1, 6, 1, '2026-10-15 07:16:38', '2026-10-15 07:16:44', '2026-10-15 07:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_services', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(2, 'create_services', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(3, 'edit_services', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(4, 'delete_services', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(5, 'view_pages', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(6, 'create_pages', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(7, 'edit_pages', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(8, 'delete_pages', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(9, 'view_posts', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(10, 'create_posts', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(11, 'edit_posts', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(12, 'delete_posts', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(13, 'view_case_studies', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(14, 'create_case_studies', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(15, 'edit_case_studies', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(16, 'delete_case_studies', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(17, 'view_testimonials', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(18, 'create_testimonials', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(19, 'edit_testimonials', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(20, 'delete_testimonials', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(21, 'view_team', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(22, 'create_team', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(23, 'edit_team', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(24, 'delete_team', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(25, 'view_our_work', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(26, 'create_our_work', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(27, 'edit_our_work', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(28, 'delete_our_work', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(29, 'view_our_clients', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(30, 'create_our_clients', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(31, 'edit_our_clients', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(32, 'delete_our_clients', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(33, 'view_footer', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(34, 'create_footer', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(35, 'edit_footer', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(36, 'delete_footer', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(37, 'view_global_settings', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(38, 'create_global_settings', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(39, 'edit_global_settings', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(40, 'delete_global_settings', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(41, 'view_page_sections', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(42, 'create_page_sections', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(43, 'edit_page_sections', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(44, 'delete_page_sections', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(45, 'view_users', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(46, 'create_users', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(47, 'edit_users', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(48, 'delete_users', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(49, 'view_crm', 'web', '2026-10-14 03:06:46', '2026-10-14 03:06:46'),
(50, 'create_crm', 'web', '2026-10-14 03:06:46', '2026-10-14 03:06:46'),
(51, 'edit_crm', 'web', '2026-10-14 03:06:46', '2026-10-14 03:06:46'),
(52, 'delete_crm', 'web', '2026-10-14 03:06:46', '2026-10-14 03:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `badge` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT 'CoreUnity Team',
  `excerpt` text DEFAULT NULL,
  `content` longtext NOT NULL,
  `blocks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`blocks`)),
  `highlights` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`highlights`)),
  `stats` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`stats`)),
  `faqs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`faqs`)),
  `gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`gallery`)),
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `featured_image` varchar(255) DEFAULT NULL,
  `hero_banner` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'draft',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `badge`, `category`, `author_name`, `excerpt`, `content`, `blocks`, `highlights`, `stats`, `faqs`, `gallery`, `meta_title`, `meta_description`, `og_image`, `is_published`, `sort_order`, `featured_image`, `hero_banner`, `status`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'How to Get Your Local Business on Google Maps (Step-by-Step)', 'local-business-on-google-maps', 'Local SEO Guide', 'Local SEO', 'Faraz & CoreUnity Team', 'If you run a local business and you\'re not showing up on Google Maps, you\'re handing customers straight to competitors who are. Here is the step-by-step blueprint to claim, verify, and optimize your Google Business Profile.', '<p>If you run a local business and you&#039;re not showing up on Google Maps, you&#039;re handing customers straight to competitors who are. Most people don&#039;t flip through a phone book anymore; they type &quot;plumber near me&quot; or &quot;coffee shop open now&quot; into Google and pick from whatever pops up on the map.</p><p>The good news is that getting listed doesn&#039;t cost anything, and it isn&#039;t complicated once you know the order of operations. This guide walks through how to create a Google Business Profile from scratch, get it verified, and set it up so it actually helps you win local customers instead of sitting there half-finished and ignored.</p><h3>Step 1: Check If Your Business Already Exists on Google Maps</h3><p>Before creating a new profile, make sure an unclaimed listing doesn&#039;t already exist. Google often auto-generates listings based on web directories and user reviews.</p><h3>Step 2: Sign In with a Dedicated Business Google Account</h3><p>Always use a shared corporate Google Workspace account (e.g. admin@yourbusiness.com) rather than personal Gmail addresses to ensure continuity.</p><h3>Step 3: Choose the Precise Business Category</h3><p>Your primary category carries the heaviest ranking weight in local algorithms. Be as specific as possible (e.g. &quot;Dental Clinic&quot; rather than generic &quot;Health&quot;).</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Mandatory Verification\",\"description\":\"Complete video or postcard verification within 14 days to appear in search.\"},{\"icon\":\"\\u2713\",\"title\":\"High-Resolution Photos\",\"description\":\"Listings with real storefront photos receive 42% more requests for directions.\"},{\"icon\":\"\\u2713\",\"title\":\"Consistent NAP Data\",\"description\":\"Exact Name, Address, and Phone matching across all online directories.\"}]', '[{\"number\":\"42%\",\"label\":\"More Direction Requests with Photos\"},{\"number\":\"250%\",\"label\":\"Average Increase in Local Calls\"},{\"number\":\"10 Steps\",\"label\":\"Complete Setup Checklist\"},{\"number\":\"100%\",\"label\":\"Free Verification Method\"}]', '[{\"question\":\"How long does Google Business Profile verification take?\",\"answer\":\"Phone or email verification can occur in minutes, while postal mail takes 5 to 14 business days.\"},{\"question\":\"Can I hide my physical address if I work from home?\",\"answer\":\"Yes, service-area businesses can define their operational radius while hiding their exact home address.\"}]', '[]', NULL, NULL, NULL, 1, 1, NULL, NULL, 'published', '2026-10-09 05:38:02', '2026-10-09 05:38:02', '2026-10-09 06:59:43', NULL),
(2, 1, 'Google Ads vs. Meta Ads: Which Is Right for Your Business?', 'google-ads-vs-meta-ads', 'Paid Advertising Comparison', 'Paid Marketing', 'CoreUnity Paid Media Team', 'If you\'ve spent any time in marketing channels, you\'ve heard debates about Google Ads vs. Meta Ads. Discover which platform delivers the highest ROI for your business model in the UAE.', '<p>The fundamental difference comes down to intent versus attention. Google Ads captures active search intent (people looking for solutions right now), whereas Meta Ads creates demand through visual disruption (introducing products to relevant demographics as they scroll).</p><p>For emergency services, real estate investors, and high-ticket B2B software, Google Search Ads almost always captures higher-quality immediate inquiries. For lifestyle products, fashion, F&B, and brand discovery, Meta\'s visual algorithm excels at building brand affinity.</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Google Ads = Demand Capture\",\"description\":\"Targets users actively searching with high buying intent.\"},{\"icon\":\"\\u2713\",\"title\":\"Meta Ads = Demand Generation\",\"description\":\"Targets hyper-specific lookalikes and interest demographics.\"}]', '[{\"number\":\"5.2x\",\"label\":\"Average ROAS on Blended Campaigns\"},{\"number\":\"45%\",\"label\":\"Lower CPL on Multi-Channel Funnels\"},{\"number\":\"60%\",\"label\":\"Higher Conversion with Remarketing\"},{\"number\":\"24\\/7\",\"label\":\"Continuous Algorithm Learning\"}]', '[{\"question\":\"Which platform should a small business start with?\",\"answer\":\"If you offer an urgent or problem-solving service, start with Google Search. If your product is visually captivating, start with Instagram Ads.\"}]', NULL, NULL, NULL, NULL, 1, 2, 'blog2_resized_584x348.png', 'blog2_resized_584x348.png', 'published', '2026-10-09 05:38:02', '2026-10-09 05:38:02', '2026-10-09 05:38:02', NULL),
(3, 1, 'Daily Manual Tasks Your Business Should Automate Today', 'daily-manual-tasks', 'Operational Efficiency Guide', 'Business Growth', 'CoreUnity Automation Lab', 'Still doing repetitive paperwork and data entry by hand? Discover the three daily manual tasks every business should automate today to save 20+ hours per week.', '<p>Every hour spent manually copying lead info between spreadsheets, chasing invoices, or answering repetitive customer questions is an hour stolen from strategic growth. Automation is no longer reserved for Fortune 500 companies; modern no-code workflows and AI agents allow any UAE SME to operate like a tech enterprise.</p><h3>1. Invoicing and Payment Reminders</h3><p>Manual invoice follow-ups drain cash flow. Automated accounting connections trigger scheduled payment reminders, reducing overdue invoices by up to 70%.</p><h3>2. Instant Lead Qualification & Routing</h3><p>Leads contacted within 5 minutes are 21x more likely to enter the sales cycle than those contacted after 30 minutes.</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Zero-Human Data Entry\",\"description\":\"Sync web inquiries directly into your CRM, Slack, and accounting software.\"},{\"icon\":\"\\u2713\",\"title\":\"Automated Review Requests\",\"description\":\"Trigger automated review requests right after delivery or consultation.\"}]', '[{\"number\":\"20+ Hrs\",\"label\":\"Saved Per Week on Data Entry\"},{\"number\":\"70%\",\"label\":\"Reduction in Overdue Invoices\"},{\"number\":\"21x\",\"label\":\"Higher Lead Qualification within 5 Min\"},{\"number\":\"99%\",\"label\":\"Zero Human Typo Error Rate\"}]', '[{\"question\":\"Do we need a programmer to set up business automations?\",\"answer\":\"No, tools like Zapier, Make, and webhook integrations allow us to connect your existing tools within days.\"}]', NULL, NULL, NULL, NULL, 1, 3, 'blog3_resized_584x348.png', 'blog3_resized_584x348.png', 'published', '2026-10-09 05:38:02', '2026-10-09 05:38:02', '2026-10-09 05:38:02', NULL),
(4, 1, '5 Must-Have Features Every Business Website Needs', 'business-website-features', 'Website Conversion Checklist', 'Web Design', 'CoreUnity Web Engineering', 'Most business owners don\'t think about their website until something goes wrong. Here are the 5 non-negotiable features every high-converting business website must have in 2026.', '<p>A modern corporate website is your hardest-working 24/7 salesperson. If it is slow, confusing, or lacks clear calls to action, visitors bounce to competitors within three seconds. In this checklist, we unpack the five essential architectural pillars that separate high-converting websites from digital ghost towns.</p><h3>1. Sub-Two-Second Mobile Speed</h3><p>Over 75% of your visitors in the UAE view your website on smartphones. If it doesn\'t load in under two seconds, half your paid ad budget is wasted.</p><h3>2. Clear Value Proposition Above the Fold</h3><p>Visitors must understand what you do, who you serve, and how to take action within 5 seconds of landing on your homepage.</p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Direct WhatsApp & Phone Click\",\"description\":\"Floating instant action buttons converting mobile browsers instantly.\"},{\"icon\":\"\\u2713\",\"title\":\"Social Proof Above the Fold\",\"description\":\"Client ratings, testimonials, and verified review badges.\"}]', '[{\"number\":\"2.0s\",\"label\":\"Target Maximum Load Time\"},{\"number\":\"3x\",\"label\":\"Conversion Increase with WhatsApp CTA\"},{\"number\":\"85%\",\"label\":\"Mobile Viewport Share in UAE\"},{\"number\":\"5 Pillars\",\"label\":\"Essential Performance Audit\"}]', '[{\"question\":\"How can I test my website speed right now?\",\"answer\":\"Use Google PageSpeed Insights to measure your Core Web Vitals on mobile and desktop.\"}]', NULL, NULL, NULL, NULL, 1, 4, 'blog4.png', 'blog4.png', 'published', '2026-10-09 05:38:02', '2026-10-09 05:38:02', '2026-10-09 05:38:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59'),
(2, 'Editor', 'web', '2026-10-14 02:30:59', '2026-10-14 02:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(7, 2),
(8, 1),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(13, 1),
(13, 2),
(14, 1),
(15, 1),
(15, 2),
(16, 1),
(17, 1),
(17, 2),
(18, 1),
(19, 1),
(19, 2),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `badge` varchar(255) DEFAULT 'Your Digital Partner',
  `category` varchar(255) DEFAULT NULL,
  `client_info` varchar(255) DEFAULT NULL,
  `excerpt` text DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `hero_banner` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `blocks` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`blocks`)),
  `highlights` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`highlights`)),
  `stats` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`stats`)),
  `faqs` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`faqs`)),
  `gallery` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`gallery`)),
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `badge`, `category`, `client_info`, `excerpt`, `featured_image`, `hero_banner`, `content`, `blocks`, `highlights`, `stats`, `faqs`, `gallery`, `meta_title`, `meta_description`, `og_image`, `is_published`, `sort_order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Web Development & Engineering', 'web-development', 'Your Web Development Partner', 'Engineering', 'Enterprises, Startups & Corporate Brands', 'We build fast, secure, and fully responsive websites that turn visitors into customers. From corporate portals to complex web apps, every platform is engineered for scale and speed.', NULL, NULL, '<p></p>', NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Clean, Scalable Architecture\",\"description\":\"Modern PHP & JavaScript tech stack built for 99.9% uptime and high traffic.\"},{\"icon\":\"\\u2713\",\"title\":\"SEO-Ready from Day One\",\"description\":\"Semantic HTML5 structure and Core Web Vitals optimization.\"},{\"icon\":\"\\u2713\",\"title\":\"Enterprise Security & Compliance\",\"description\":\"SSL encryption, CSRF protection, and strict UAE data compliance.\"}]', '[{\"number\":\"150+\",\"label\":\"Web Platforms Delivered\"},{\"number\":\"99.9%\",\"label\":\"Uptime Guarantee\"},{\"number\":\"68%\",\"label\":\"Average Speed Boost\"},{\"number\":\"4.9\\/5\",\"label\":\"Client Satisfaction Rating\"}]', '[{\"question\":\"What technologies do you use for custom web development?\",\"answer\":\"We specialize in Laravel, Next.js, React, Tailwind CSS, Node.js, and headless CMS integrations tailored to project requirements.\"},{\"question\":\"How long does an enterprise web development project take?\",\"answer\":\"Standard business sites take 3 to 5 weeks, while complex web applications with bespoke API integrations take 6 to 12 weeks.\"},{\"question\":\"Do you provide ongoing maintenance and support after launch?\",\"answer\":\"Yes, our Dubai team offers 24\\/7 technical monitoring, security patch management, automated backups, and continuous performance tuning.\"}]', '[]', NULL, NULL, NULL, 1, 1, '2026-10-09 05:31:33', '2026-10-09 06:44:00', NULL),
(2, 'UI/UX Product Design', 'ui-ux-design', 'Leading Design Agency in Dubai', 'Design & Creative', 'Digital Products & SaaS Platforms', 'Human-centric UI/UX design that blends aesthetics with conversion psychology. We transform complex digital ideas into intuitive, delightful user experiences.', NULL, NULL, '<p></p>', '[]', '[{\"icon\":\"\\u2713\",\"title\":\"User Research & Wireframing\",\"description\":\"In-depth persona mapping, user journey blueprints, and low-fidelity prototypes.\"},{\"icon\":\"\\u2713\",\"title\":\"Design System Creation\",\"description\":\"Scalable Figma component libraries ensuring consistency across all devices.\"},{\"icon\":\"\\u2713\",\"title\":\"Interactive Prototyping & Testing\",\"description\":\"High-fidelity clickable prototypes validated through rigorous usability testing.\"}]', '[{\"number\":\"180+\",\"label\":\"Interfaces Designed\"},{\"number\":\"30M+\",\"label\":\"End Users Engaged\"},{\"number\":\"45%\",\"label\":\"Avg Conversion Increase\"},{\"number\":\"100%\",\"label\":\"Pixel-Perfect Delivery\"}]', '[{\"question\":\"What deliverables do you provide in a UI\\/UX project?\",\"answer\":\"Complete Figma source files, interactive prototypes, documented design system tokens, assets exported in all resolutions, and developer handoff specs.\"},{\"question\":\"Can you redesign our existing application without disrupting users?\",\"answer\":\"Yes, we implement phased UI\\/UX overhauls based on real analytics data and A\\/B tests to maximize user retention.\"}]', '[]', NULL, NULL, NULL, 1, 2, '2026-10-09 05:31:33', '2026-10-12 00:20:36', NULL),
(3, 'E-Commerce Web Development', 'ecommerce-web-development', 'High-Converting Online Stores', 'Engineering', 'Retailers, D2C Brands & Wholesalers', 'Custom e-commerce platforms engineered for high conversions, lightning-fast checkout, and seamless payment gateway integrations across the UAE and GCC.', 'retail_img.png', 'retail_img.png', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"GCC Payment Gateways\",\"description\":\"Seamless integration with Stripe, Telr, Tabby, Tamara, and Apple Pay.\"},{\"icon\":\"\\u2713\",\"title\":\"Inventory & ERP Synchronization\",\"description\":\"Real-time stock management and automated order fulfillment pipelines.\"},{\"icon\":\"\\u2713\",\"title\":\"Frictionless 1-Click Checkout\",\"description\":\"Optimized checkout flows reducing cart abandonment rates.\"}]', '[{\"number\":\"85+\",\"label\":\"Online Stores Launched\"},{\"number\":\"AED 50M+\",\"label\":\"Annual GMV Processed\"},{\"number\":\"3.2x\",\"label\":\"Average ROI Multiplier\"},{\"number\":\"99.99%\",\"label\":\"Payment Gateway Uptime\"}]', '[{\"question\":\"Which e-commerce platforms do you build on?\",\"answer\":\"We develop custom headless storefronts (Shopify Plus, WooCommerce, and bespoke Laravel e-commerce engines) based on catalog volume.\"}]', NULL, NULL, NULL, NULL, 1, 3, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(4, 'Mobile App Development', 'mobile-app-development', 'iOS & Android App Specialists', 'Engineering', 'Startups, On-Demand Services & Enterprise Brands', 'Native and cross-platform mobile applications that users love. Intuitive interfaces, robust backend architecture, and seamless App Store & Google Play deployments.', 'mob-app.jpg', 'mob-app.jpg', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Cross-Platform Flutter & React Native\",\"description\":\"Single codebase delivering 60fps native performance on both iOS and Android.\"},{\"icon\":\"\\u2713\",\"title\":\"Offline-First Synchronization\",\"description\":\"Local database caching ensuring flawless app performance even with unstable networks.\"},{\"icon\":\"\\u2713\",\"title\":\"Push Notification Automations\",\"description\":\"Segmented real-time messaging driving high user retention and repeat orders.\"}]', '[{\"number\":\"65+\",\"label\":\"Apps Published\"},{\"number\":\"5M+\",\"label\":\"App Store Downloads\"},{\"number\":\"4.8\",\"label\":\"Average Store Rating\"},{\"number\":\"40%\",\"label\":\"Higher Retention Rate\"}]', '[{\"question\":\"Do you handle the App Store and Google Play submission process?\",\"answer\":\"Yes, our team manages end-to-end publishing, compliance checks, developer certificates, and store review approvals.\"}]', NULL, NULL, NULL, NULL, 1, 4, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(5, 'Digital Marketing & Growth', 'digital-marketing', 'Full-Funnel Growth Agency', 'Marketing', 'B2B & B2C Companies Seeking Revenue Growth', 'Data-driven digital marketing campaigns engineered to acquire high-value customers, lower CPA, and deliver predictable revenue across search, social, and programmatic channels.', 'marketing_image.png', 'marketing_image.png', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Multi-Channel Attribution\",\"description\":\"Full visibility into every customer touchpoint from initial impression to closed sale.\"},{\"icon\":\"\\u2713\",\"title\":\"High-Converting Creative Testing\",\"description\":\"Continuous creative iteration with high-engagement video assets and copy angles.\"},{\"icon\":\"\\u2713\",\"title\":\"CRO Landing Page Optimization\",\"description\":\"Bespoke high-converting landing pages tailored to specific audience segments.\"}]', '[{\"number\":\"200+\",\"label\":\"Growth Campaigns Executed\"},{\"number\":\"4.8x\",\"label\":\"Average ROAS Delivered\"},{\"number\":\"60%\",\"label\":\"Lower Cost Per Acquisition\"},{\"number\":\"AED 120M+\",\"label\":\"Revenue Generated for Clients\"}]', '[{\"question\":\"How soon can we expect results from digital marketing campaigns?\",\"answer\":\"Paid media campaigns deliver qualified leads within days, while SEO and brand positioning build compounding returns over 3 to 6 months.\"}]', NULL, NULL, NULL, NULL, 1, 5, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(6, 'Search Engine Optimization (SEO)', 'search-engine-optimization', 'Dubai #1 SEO Growth Agency', 'Marketing', 'Local UAE Businesses & Global Brands', 'Dominate Google search results and local Maps. We combine technical SEO audits, high-authority link acquisition, and keyword optimization to generate organic buyers.', 'seo.jpg', 'seo.jpg', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Local Google Maps Dominance\",\"description\":\"Google Business Profile optimization capturing high-intent \\\"near me\\\" local queries.\"},{\"icon\":\"\\u2713\",\"title\":\"Technical Architecture Audits\",\"description\":\"Fixing indexability, schema markup, core web vitals, and crawl budget bottlenecks.\"},{\"icon\":\"\\u2713\",\"title\":\"Topical Authority Content\",\"description\":\"Comprehensive pillar content strategies ranking for high-volume commercial keywords.\"}]', '[{\"number\":\"250%\",\"label\":\"Avg Search Traffic Surge\"},{\"number\":\"1,200+\",\"label\":\"#1 Page Rankings Achieved\"},{\"number\":\"90%\",\"label\":\"Client Retention Rate\"},{\"number\":\"350+\",\"label\":\"Audits Completed\"}]', '[{\"question\":\"How does CoreUnity approach local SEO in Dubai?\",\"answer\":\"We optimize bilingual Arabic\\/English citations, Google Business Profiles, localized landing pages, and verified UAE directories.\"}]', NULL, NULL, NULL, NULL, 1, 6, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(7, 'Pay-Per-Click Advertising (PPC)', 'pay-per-click-advertising', 'Certified Google Premier Partner', 'Marketing', 'Real Estate, Clinics, B2B & Luxury Retail', 'High-intent Google Ads and Bing search campaigns that connect you directly with customers searching for your products right now. Zero wasted ad spend.', 'ppc.jpg', 'ppc.jpg', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"High-Intent Search Campaigns\",\"description\":\"Laser-targeted keyword bidding eliminating unqualified clicks and negative match filters.\"},{\"icon\":\"\\u2713\",\"title\":\"Dynamic Remarketing & Display\",\"description\":\"Re-engaging visitors with personalized dynamic ads that close abandoned inquiries.\"},{\"icon\":\"\\u2713\",\"title\":\"Strict Budget & Bid Management\",\"description\":\"Real-time smart bidding strategies maximizing conversions within strict target CPA.\"}]', '[{\"number\":\"5.2x\",\"label\":\"Average ROAS Achieved\"},{\"number\":\"50%\",\"label\":\"Lower Cost Per Lead\"},{\"number\":\"AED 25M+\",\"label\":\"Closed Real Estate Deals\"},{\"number\":\"24\\/7\",\"label\":\"Live Bid Monitoring\"}]', '[{\"question\":\"Do you manage both Google Search and Meta Ads?\",\"answer\":\"Yes, we manage Google Search, YouTube, Google Shopping, Meta (Instagram\\/Facebook), and LinkedIn ads under one cohesive strategy.\"}]', NULL, NULL, NULL, NULL, 1, 7, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(8, 'Social Media Marketing (SMM)', 'social-media-marketing', 'Viral Content & Community Growth', 'Marketing', 'F&B, Hospitality, Fashion & Consumer Brands', 'Turn followers into brand evangelists. We produce scroll-stopping short-form video reels, manage vibrant online communities, and run targeted viral campaigns across the UAE.', 'smm.jpg', 'smm.jpg', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Original Video & Reels Production\",\"description\":\"High-aesthetic TikTok, Instagram Reels, and YouTube Shorts produced in Dubai studios.\"},{\"icon\":\"\\u2713\",\"title\":\"Active Community Management\",\"description\":\"Prompt DM responses, comment moderation, and active community cultivation 7 days a week.\"},{\"icon\":\"\\u2713\",\"title\":\"Data-Driven Content Calendars\",\"description\":\"Weekly scheduled content plans aligned with GCC cultural trends and peak engagement hours.\"}]', '[{\"number\":\"180%\",\"label\":\"Average Follower Surge\"},{\"number\":\"10M+\",\"label\":\"Monthly Video Views\"},{\"number\":\"4.2x\",\"label\":\"Engagement Boost\"},{\"number\":\"50+\",\"label\":\"Active Social Accounts\"}]', '[{\"question\":\"Do you handle photography and video shoots on location?\",\"answer\":\"Yes, our in-house production crew travels across Dubai and Abu Dhabi for monthly professional photo and video shoots.\"}]', NULL, NULL, NULL, NULL, 1, 8, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(9, 'Branding & Creative Design', 'branding-and-creative-design', 'Your Brand Identity Partner', 'Design & Creative', 'Luxury Brands, Corporates & Modern Startups', 'Build a brand that commands premium authority. From logo systems and typography to brand guidelines and packaging, we create unforgettable identities.', 'branding-1.jpg', 'branding-1.jpg', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Visual Identity & Logo Systems\",\"description\":\"Iconic brandmarks, wordmarks, color palettes, and typographic hierarchies.\"},{\"icon\":\"\\u2713\",\"title\":\"Comprehensive Brand Guidelines\",\"description\":\"Extensive design manuals governing digital, print, and physical brand touchpoints.\"},{\"icon\":\"\\u2713\",\"title\":\"Marketing Collateral & Packaging\",\"description\":\"Stationery, premium packaging, environmental signage, and digital asset packs.\"}]', '[{\"number\":\"120+\",\"label\":\"Brands Created \\/ Rebranded\"},{\"number\":\"15+\",\"label\":\"Global Design Awards\"},{\"number\":\"100%\",\"label\":\"Trademark Ready Assets\"},{\"number\":\"4.9\\/5\",\"label\":\"Client Satisfaction Score\"}]', '[{\"question\":\"What is included in a complete branding package?\",\"answer\":\"Primary logo, alternate marks, color tokens, typography licenses, stationery mockups, social media starter kits, and a comprehensive 40+ page brand style guide.\"}]', NULL, NULL, NULL, NULL, 1, 9, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(10, 'Artificial Intelligence Solutions', 'artificial-intelligence', 'Smart AI Automation for Enterprises', 'Artificial Intelligence', 'Enterprises Seeking Operational Automation', 'Leverage cutting-edge generative AI, machine learning models, and intelligent process automations to cut operational overhead and accelerate business decision-making.', NULL, NULL, '<p></p>', '[]', '[{\"icon\":\"\\u2713\",\"title\":\"Custom LLM & Agent Development\",\"description\":\"Fine-tuned internal AI assistants trained on proprietary enterprise knowledge bases.\"},{\"icon\":\"\\u2713\",\"title\":\"Predictive Analytics & Forecasting\",\"description\":\"Machine learning models predicting customer churn, demand, and inventory needs.\"},{\"icon\":\"\\u2713\",\"title\":\"Automated Workflow Pipelines\",\"description\":\"Connecting legacy databases with intelligent agents to automate repetitive tasks.\"}]', '[{\"number\":\"70%\",\"label\":\"Reduced Manual Work Hours\"},{\"number\":\"99.5%\",\"label\":\"Model Accuracy Rate\"},{\"number\":\"10x\",\"label\":\"Faster Data Processing\"},{\"number\":\"24\\/7\",\"label\":\"Autonomous Operation\"}]', '[{\"question\":\"Is our company data secure when training custom AI models?\",\"answer\":\"Yes, all AI infrastructure is deployed on private, encrypted virtual private clouds (VPC) with zero data sharing to third-party public models.\"}]', '[]', NULL, NULL, NULL, 1, 10, '2026-10-09 05:31:33', '2026-10-12 02:59:31', NULL),
(11, 'AI Chatbot Development', 'chatbot-development', 'Intelligent Conversational Agents', 'Artificial Intelligence', 'E-Commerce, Healthcare, Real Estate & Customer Support', '24/7 intelligent conversational bots integrated across WhatsApp, websites, and mobile apps that qualify leads, answer complex inquiries, and close sales autonomously.', 'phone_logo.png', 'tect_img.png', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Official WhatsApp Business API\",\"description\":\"Deploy verified WhatsApp conversational bots serving millions of UAE users.\"},{\"icon\":\"\\u2713\",\"title\":\"Multi-Language Support (Arabic & English)\",\"description\":\"Native bilingual comprehension with natural colloquial Arabic understanding.\"},{\"icon\":\"\\u2713\",\"title\":\"CRM & Lead Routing Integration\",\"description\":\"Instant synchronization with HubSpot, Salesforce, Zoho, and internal CRMs.\"}]', '[{\"number\":\"85%\",\"label\":\"Routine Inquiries Resolved\"},{\"number\":\"3 Sec\",\"label\":\"Average Response Time\"},{\"number\":\"3x\",\"label\":\"Increase in Lead Capture\"},{\"number\":\"24\\/7\",\"label\":\"Continuous Operation\"}]', '[{\"question\":\"Can the chatbot hand over conversations to human agents?\",\"answer\":\"Yes, our bots feature intelligent sentiment detection and seamless live chat handoff to human support representatives.\"}]', NULL, NULL, NULL, NULL, 1, 11, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(12, 'AI Development Company in Dubai', 'ai-development-company', 'Enterprise AI Systems', 'Artificial Intelligence', 'Government & Large Corporations', 'Full-lifecycle AI consulting, architecture, and engineering. We build secure, high-performance artificial intelligence platforms for visionary UAE organizations.', 'tect_img.png', 'tect_img.png', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Computer Vision & Recognition\",\"description\":\"Automated visual inspection, document scanning, and biometric verification.\"},{\"icon\":\"\\u2713\",\"title\":\"Enterprise NLP Solutions\",\"description\":\"Semantic document summarization, contract analysis, and sentiment monitoring.\"}]', '[{\"number\":\"40+\",\"label\":\"AI Models Deployed\"},{\"number\":\"99.8%\",\"label\":\"System Reliability\"},{\"number\":\"AED 15M+\",\"label\":\"Client Cost Savings\"},{\"number\":\"100%\",\"label\":\"Data Privacy Guaranteed\"}]', '[{\"question\":\"How do we get started with an enterprise AI evaluation?\",\"answer\":\"We conduct a 2-week discovery workshop to evaluate workflows, data readiness, and high-ROI automation opportunities.\"}]', NULL, NULL, NULL, NULL, 1, 12, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(13, 'Generative Engine Optimization (GEO)', 'generative-engine-optimization', 'Next-Gen AI Search Visibility', 'Marketing', 'Forward-Thinking Brands & Tech Companies', 'Optimize your brand to be cited and recommended by ChatGPT, Google Gemini, Perplexity, and AI Overviews. The future of organic search visibility.', 'growth_image.png', 'growth_image.png', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"LLM Citation Architecture\",\"description\":\"Structuring information so generative search models recognize your brand as the primary authority.\"},{\"icon\":\"\\u2713\",\"title\":\"Perplexity & Gemini Optimization\",\"description\":\"Direct optimization for conversational AI engines replacing traditional search.\"}]', '[{\"number\":\"320%\",\"label\":\"AI Citation Surge\"},{\"number\":\"15+\",\"label\":\"LLMs Monitored\"},{\"number\":\"85%\",\"label\":\"Recommendation Rate\"},{\"number\":\"1st\",\"label\":\"Mover Advantage\"}]', '[{\"question\":\"What is the difference between SEO and GEO?\",\"answer\":\"Traditional SEO focuses on blue links and keywords. GEO optimizes entity authority, structured knowledge graphs, and authoritative citations for generative AI engines.\"}]', NULL, NULL, NULL, NULL, 1, 13, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(14, 'Influencer Marketing Agency', 'influencer-marketing', 'UAE Top Creator Network', 'Marketing', 'Lifestyle, Tech, Beauty & Hospitality Brands', 'Connect your brand with the most authentic, influential creators across Dubai and the Middle East. Strategic influencer vetting, creative management, and measurable ROI.', 'managingpart_image.png', 'managingpart_image.png', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Vetted UAE Creator Roster\",\"description\":\"Strict verification eliminating fake followers and inflated engagement metrics.\"},{\"icon\":\"\\u2713\",\"title\":\"End-to-End Campaign Delivery\",\"description\":\"Briefing, gifting, contract negotiation, content approval, and usage rights.\"}]', '[{\"number\":\"500+\",\"label\":\"Vetted Creators Network\"},{\"number\":\"25M+\",\"label\":\"GCC Campaign Reach\"},{\"number\":\"3.8x\",\"label\":\"Average Earned Media Value\"},{\"number\":\"100%\",\"label\":\"Contract Compliant\"}]', '[{\"question\":\"Do you handle micro-influencers as well as tier-1 celebrities?\",\"answer\":\"Yes, we curate custom creator tiers based on campaign goals, from hyper-local niche micro-creators to top celebrity brand ambassadors.\"}]', NULL, NULL, NULL, NULL, 1, 14, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(15, 'Virtual Reality Development', 'virtual-reality-development', 'Immersive VR Experiences', 'Immersive Tech', 'Real Estate, Tourism, Education & Industrial Training', 'Photorealistic virtual reality walkthroughs, interactive 3D simulations, and Metaverse environments that transport users into unforgettable digital spaces.', 'growth_image.png', 'growth_image.png', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"Real Estate Virtual Tours\",\"description\":\"Interactive 1:1 off-plan architectural walkthroughs enabling remote international property sales.\"},{\"icon\":\"\\u2713\",\"title\":\"Unreal Engine 5 Photorealism\",\"description\":\"Industry-leading real-time lighting, spatial audio, and interactive physics.\"}]', '[{\"number\":\"45+\",\"label\":\"VR Experiences Built\"},{\"number\":\"60%\",\"label\":\"Faster Remote Sales Closes\"},{\"number\":\"95%\",\"label\":\"Immersion Satisfaction\"},{\"number\":\"4K\",\"label\":\"Ultra HD Resolution\"}]', '[{\"question\":\"Which VR headsets are supported?\",\"answer\":\"We develop for Meta Quest 3\\/Pro, Apple Vision Pro, HTC Vive, and WebXR browser-based interactive tours.\"}]', NULL, NULL, NULL, NULL, 1, 15, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL),
(16, 'Augmented Reality Development', 'augmented-reality-development', 'Interactive AR Solutions', 'Immersive Tech', 'E-Commerce, Furniture, Retail & Packaging', 'Blend digital models with physical environments. WebAR product previews, face filters, and interactive packaging that increase buyer confidence.', 'cs_image.png', 'cs_image.png', NULL, NULL, '[{\"icon\":\"\\u2713\",\"title\":\"App-Free WebAR Experiences\",\"description\":\"Instant AR launch directly through mobile browsers with zero app installation needed.\"},{\"icon\":\"\\u2713\",\"title\":\"Virtual Try-On Solutions\",\"description\":\"True-to-scale furniture placement and beauty try-on reducing return rates.\"}]', '[{\"number\":\"80+\",\"label\":\"WebAR Projects Deployed\"},{\"number\":\"40%\",\"label\":\"Reduction in Product Returns\"},{\"number\":\"2.5x\",\"label\":\"Average Dwell Time Boost\"},{\"number\":\"100%\",\"label\":\"Mobile Browser Compatible\"}]', '[{\"question\":\"Do users need to install an app to view our AR products?\",\"answer\":\"No, our WebAR technology works natively inside iOS Safari and Android Chrome via standard QR code or web link.\"}]', NULL, NULL, NULL, NULL, 1, 16, '2026-10-09 05:31:33', '2026-10-09 05:31:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services_hero_sections`
--

CREATE TABLE `services_hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Services We Offer',
  `main_title` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_hero_sections`
--

INSERT INTO `services_hero_sections` (`id`, `mini_title`, `main_title`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Services We Offer', 'From Dubai\'s best minds to\na global powerhouse', 1, '2026-10-09 02:23:08', '2026-10-09 02:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `services_industries_sections`
--

CREATE TABLE `services_industries_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Serving Diverse Sectors Across the UAE',
  `main_title` varchar(255) NOT NULL DEFAULT 'Industries We Serve',
  `industries` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`industries`)),
  `cta_title` varchar(255) NOT NULL DEFAULT 'Ready to grow your brand?',
  `cta_subtitle` varchar(255) NOT NULL DEFAULT 'Let''s build a strategy that delivers real results.',
  `cta_button_text` varchar(255) NOT NULL DEFAULT 'Connect with us',
  `cta_button_url` varchar(255) NOT NULL DEFAULT '/contact',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_industries_sections`
--

INSERT INTO `services_industries_sections` (`id`, `mini_title`, `main_title`, `industries`, `cta_title`, `cta_subtitle`, `cta_button_text`, `cta_button_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Serving Diverse Sectors Across the UAE', 'Industries We Serve', '[{\"title\":\"Real Estate\",\"desc\":\"Leading with quality and effectively showcasing property\",\"icon\":\"state_img.png\",\"link\":\"\\/industries\\/real-estate\"},{\"title\":\"Retail & eCommerce\",\"desc\":\"Driving sales through optimized digital Experiences.\",\"icon\":\"retail_img.png\",\"link\":\"\\/industries\\/retail\"},{\"title\":\"Healthcare & Wellness\",\"desc\":\"Building trust with professional online solutions.\",\"icon\":\"health_img.png\",\"link\":\"\\/industries\\/healthcare\"},{\"title\":\"Food & Beverage\",\"desc\":\"Creating engaging brands that attract customers.\",\"icon\":\"food_img.png\",\"link\":\"\\/industries\\/hospitality\"},{\"title\":\"Tech Startups\",\"desc\":\"Supporting growth with scalable digital strategies.\",\"icon\":\"tect_img.png\",\"link\":\"\\/industries\\/fintech\"},{\"title\":\"Education\",\"desc\":\"optimizing learning through modern digital platforms.\",\"icon\":\"edu_img.png\",\"link\":\"\\/industries\\/education\"},{\"title\":\"Hospitality & Tourism\",\"desc\":\"Delivering seamless and engaging guest experiences.\",\"icon\":\"hospitality_image.png\",\"link\":\"\\/industries\\/hospitality\"},{\"title\":\"Restaurant\",\"desc\":\"Providing strong branding and curating digital Presence.\",\"icon\":\"res_table_img.png\",\"link\":\"\\/industries\\/hospitality\"}]', 'Ready to grow your brand?', 'Let\'s build a strategy that delivers real results.', 'Connect with us', '/contact', 1, '2026-10-09 02:23:12', '2026-10-09 02:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `services_list_sections`
--

CREATE TABLE `services_list_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'What We Offer',
  `main_title` text DEFAULT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`)),
  `button_text` varchar(255) NOT NULL DEFAULT 'View all services',
  `button_url` varchar(255) NOT NULL DEFAULT '/services/all',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_list_sections`
--

INSERT INTO `services_list_sections` (`id`, `mini_title`, `main_title`, `services`, `button_text`, `button_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'What We Offer', 'Save time and grow your business\nwith our expert solutions', '[{\"num\":\"01\",\"title\":\"Branding\",\"desc\":\"Our agency combines creativity and strategy to build powerful brand identities that communicate your vision, and grow meaningful customer connections.\",\"href\":\"\\/services\\/branding-and-creative-design\"},{\"num\":\"02\",\"title\":\"Digital Marketing\",\"desc\":\"Our digital marketing solutions help you connect with your customers through SEO, social content marketing, and paid advertising.\",\"href\":\"\\/services\\/digital-marketing\"},{\"num\":\"03\",\"title\":\"Design & Creatives\",\"desc\":\"We create compelling visuals that capture attention, strengthen your brand identity, and communicate your message effectively across platforms.\",\"href\":\"\\/services\\/ui-ux-design\"}]', 'View all services', '/services/all', 1, '2026-10-09 02:23:10', '2026-10-09 02:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `services_page_sections`
--

CREATE TABLE `services_page_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `section_key` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `edit_url` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_page_sections`
--

INSERT INTO `services_page_sections` (`id`, `page_id`, `section_order`, `name`, `section_key`, `description`, `edit_url`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Services Hero Section', 'services_hero', 'Top badge (\"Services We Offer\") with glowing red dot, and main headline (\"From Dubai\'s best minds to a global powerhouse\").', '/admin/services-hero-sections/1/edit', 1, '2026-10-09 02:23:16', '2026-10-09 02:23:16'),
(2, 3, 2, 'What We Offer (Services List)', 'services_list', 'What We Offer badge, main headline, 3 dynamic service cards with active state transitions, and \"View all services\" CTA button.', '/admin/services-list-sections/1/edit', 1, '2026-10-09 02:23:16', '2026-10-09 02:23:16'),
(3, 3, 3, 'Industries We Serve & CTA Banner', 'services_industries', 'Serving Diverse Sectors badge, Industries We Serve headline, 8 industry cards grid (Real Estate, Retail, Healthcare, etc.), and red CTA banner (\"Ready to grow your brand?\").', '/admin/services-industries-sections/1/edit', 1, '2026-10-09 02:23:16', '2026-10-09 02:23:16'),
(4, 3, 4, 'Experience Growth with Leading SMM (Stats)', 'services_smm_stats', 'SMM headline (\"Experience Growth with Leading SMM\"), narrative copy, and 4 performance stat cards with dark/light styling.', '/admin/services-smm-sections/1/edit', 1, '2026-10-09 02:23:16', '2026-10-09 02:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `services_sections`
--

CREATE TABLE `services_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) DEFAULT NULL,
  `main_title` varchar(255) DEFAULT NULL,
  `cards` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`cards`)),
  `card_1_icon` varchar(255) DEFAULT NULL,
  `card_1_title` varchar(255) DEFAULT NULL,
  `card_1_description` text DEFAULT NULL,
  `card_1_image` varchar(255) DEFAULT NULL,
  `card_2_bg_image` varchar(255) DEFAULT NULL,
  `card_2_title_highlight` varchar(255) DEFAULT NULL,
  `card_2_title_main` varchar(255) DEFAULT NULL,
  `card_2_links` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`card_2_links`)),
  `card_3_icon` varchar(255) DEFAULT NULL,
  `card_3_title` varchar(255) DEFAULT NULL,
  `card_3_description` text DEFAULT NULL,
  `card_3_image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_sections`
--

INSERT INTO `services_sections` (`id`, `mini_title`, `main_title`, `cards`, `card_1_icon`, `card_1_title`, `card_1_description`, `card_1_image`, `card_2_bg_image`, `card_2_title_highlight`, `card_2_title_main`, `card_2_links`, `card_3_icon`, `card_3_title`, `card_3_description`, `card_3_image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing Services', 'How Our Agency Helps You Scale', NULL, NULL, 'WEBSITES &\nBRANDING', 'From branding to websites, every design is built to attract, engage, and convert.', NULL, NULL, 'GROWTH', 'STRATEGY', '[{\"label\":\"Signature Growth System\"},{\"label\":\"Venture Marketing\"},{\"label\":\"Marketing Strategy\"},{\"label\":\"Marketing Advisory\"},{\"label\":\"SEO Consulting\"}]', NULL, 'DIGITAL MARKETING', 'Intent-driven marketing across SEO, CRO, social media, and PR that attracts attention and drives results.', NULL, 1, '2026-10-08 02:54:13', '2026-10-08 04:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `services_smm_sections`
--

CREATE TABLE `services_smm_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `stats` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`stats`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_smm_sections`
--

INSERT INTO `services_smm_sections` (`id`, `main_title`, `description`, `stats`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Experience Growth\nwith Leading SMM', 'At CoreUnity Solutions, squeeze out each platform\'s power and scope and utilize it for your brand success. Our team of social media marketing strategists', '[{\"stat_number\":\"100+\",\"stat_label\":\"Brands Transformed\",\"is_highlighted\":false},{\"stat_number\":\"325+\",\"stat_label\":\"Wins Delivered\",\"is_highlighted\":false},{\"stat_number\":\"15+\",\"stat_label\":\"Years of Innovation\",\"is_highlighted\":true},{\"stat_number\":\"98%\",\"stat_label\":\"Satisfaction\",\"is_highlighted\":true}]', 1, '2026-10-09 02:23:14', '2026-10-09 02:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9JbTDwdnWYxMvWs8r0QQbdvvttoE2BRnpdQzYKd1', NULL, '127.0.0.1', 'curl/8.13.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZTBGNEFRSnlyWmZub2oxUXRSV1cxMjFrSldwa2lScDVGZEdXNHJ0UyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7czo1OiJyb3V0ZSI7czoyNToiZmlsYW1lbnQuYWRtaW4uYXV0aC5sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1792065936),
('jCfYsYcQ9DmpiuDNMzINYReRnEV1B34rMeRavARz', NULL, '127.0.0.1', 'curl/8.13.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoickRXTDhNb2k3NFQ4WHcxNnNCMHNWNzI0azhWWlRZVTZIWTJlWWRsZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1792062622),
('pS2mr9GfxnVYFKXWF7AnKrbF85uZdsAZUxHfvaAT', NULL, '127.0.0.1', 'curl/8.13.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0lubHJRTmR5cFJjcjhEMHJENHNMaXI0a2M3WXVqVUx3Qzh2UmlSSyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7czo1OiJyb3V0ZSI7czoyNToiZmlsYW1lbnQuYWRtaW4uYXV0aC5sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1792065357),
('QBltPkSeUN4N2UMxzIfI3S6P82IhM8Yyh7WUWO76', NULL, '127.0.0.1', 'curl/8.13.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmkwZ3JLZGhvSWpUV1VBTW9EZ05ScHgyMU04WWxvOU0yY2twVld5YSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7czo1OiJyb3V0ZSI7czoyNToiZmlsYW1lbnQuYWRtaW4uYXV0aC5sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1792062630),
('QXzTZrCtYhR7OHt3tyGRLWlr8XFI89bksuiOnra3', NULL, '127.0.0.1', 'curl/8.13.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUJjdnFRVURCUE1lV0JzV3NIQVJ0TGhJUk9CbmJ1TnJ5QnJialhqWSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7czo1OiJyb3V0ZSI7czoyNToiZmlsYW1lbnQuYWRtaW4uYXV0aC5sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1792066201),
('X3irHY0AtPTLdGciSHY1d3lr3zmpyGtyujSDvcRk', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/154.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiaWYzZFRPZVlZNkVPT2s4RUVURFdhZ3NrRE9lNXpZOU8xb1NIN3ZzQyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9wb3N0cyI7czo1OiJyb3V0ZSI7czozNjoiZmlsYW1lbnQuYWRtaW4ucmVzb3VyY2VzLnBvc3RzLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjQ6IjU5OTJlNjYzZTlkY2Q1ZTcwYWNhOWQ3YmVmNTVkYzAyNDU0NTNjNmViZjA5YTcxMDY1YjU5M2YzODFiMmNkZGQiO3M6NjoidGFibGVzIjthOjExOntzOjQwOiJhZTdmN2E1YWQyYWRiNGVhYzdmNWNiOGYxNWM0NWY5Yl9jb2x1bW5zIjthOjc6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoibmF2YmFyX29yZGVyIjtzOjU6ImxhYmVsIjtzOjE6IiMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InRpdGxlIjtzOjU6ImxhYmVsIjtzOjEwOiJQYWdlIFRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJzbHVnIjtzOjU6ImxhYmVsIjtzOjExOiJSb3V0ZSAvIFVSTCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTM6Imhlcm9faGVhZGxpbmUiO3M6NToibGFiZWwiO3M6MTU6IkJhbm5lciBIZWFkbGluZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6InNob3dfaW5fbmF2YmFyIjtzOjU6ImxhYmVsIjtzOjk6IkluIE5hdmJhciI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czo5OiJQdWJsaXNoZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9fXM6NDA6ImZiMzFlOGIxMTBkNWJiOWM2MWM5MDM1NjM1YmZmYTVjX2NvbHVtbnMiO2E6NDp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEzOiJzZWN0aW9uX29yZGVyIjtzOjU6ImxhYmVsIjtzOjc6IlNlY3Rpb24iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6Im5hbWUiO3M6NToibGFiZWwiO3M6MTI6IlNlY3Rpb24gTmFtZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjU6ImxhYmVsIjtzOjE5OiJPdmVydmlldyAvIEZlYXR1cmVzIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo5OiJpc19hY3RpdmUiO3M6NToibGFiZWwiO3M6NjoiQWN0aXZlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiJiZGVmZTJjM2FmZGRhMjg2YTczN2VlNTU3M2FjZWIxNl9jb2x1bW5zIjthOjc6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo4OiJIZWFkbGluZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6ODoic3VidGl0bGUiO3M6NToibGFiZWwiO3M6ODoiU3VidGl0bGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjowO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTE6ImJ1dHRvbl90ZXh0IjtzOjU6ImxhYmVsIjtzOjExOiJCdXR0b24gVGV4dCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTE6ImJ1dHRvbl9saW5rIjtzOjU6ImxhYmVsIjtzOjg6IkxpbmsgVVJMIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToiYnV0dG9uX2ljb24iO3M6NToibGFiZWwiO3M6NDoiSWNvbiI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTE6Imdsb2JlX2ltYWdlIjtzOjU6ImxhYmVsIjtzOjU6Ikdsb2JlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMjoiTGFzdCBVcGRhdGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiJhNjA3Y2RhNzNjYmRlNDQ2ZjhiYjY0Y2NkNzU2MDZlZV9jb2x1bW5zIjthOjc6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoic29ydF9vcmRlciI7czo1OiJsYWJlbCI7czoxOiIjIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czoxMzoiQXJ0aWNsZSBUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czo4OiJVUkwgU2x1ZyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6ODoiY2F0ZWdvcnkiO3M6NToibGFiZWwiO3M6ODoiQ2F0ZWdvcnkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjExOiJhdXRob3JfbmFtZSI7czo1OiJsYWJlbCI7czo2OiJBdXRob3IiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEyOiJpc19wdWJsaXNoZWQiO3M6NToibGFiZWwiO3M6OToiUHVibGlzaGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fX1zOjQwOiIxNWMxYTIzYjg2NmY0NTA0MjU4ODExY2MyMjJmYjliMF9jb2x1bW5zIjthOjY6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoic29ydF9vcmRlciI7czo1OiJsYWJlbCI7czoxOiIjIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czoxMzoiU2VydmljZSBUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NDoic2x1ZyI7czo1OiJsYWJlbCI7czoxMjoiRW5kcG9pbnQgVVJMIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo4OiJjYXRlZ29yeSI7czo1OiJsYWJlbCI7czo4OiJDYXRlZ29yeSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czo5OiJQdWJsaXNoZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9fXM6NDA6ImNmN2QxY2ZhYjkzYzEwY2NhNjg5MjI4M2JlMTA1MGRhX2NvbHVtbnMiO2E6Nzp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJzb3J0X29yZGVyIjtzOjU6ImxhYmVsIjtzOjE6IiMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjExOiJjbGllbnRfbmFtZSI7czo1OiJsYWJlbCI7czo2OiJDbGllbnQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEzOiJwcm9qZWN0X3RpdGxlIjtzOjU6ImxhYmVsIjtzOjEzOiJQcm9qZWN0IFRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJzbHVnIjtzOjU6ImxhYmVsIjtzOjg6IlVSTCBTbHVnIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo4OiJjYXRlZ29yeSI7czo1OiJsYWJlbCI7czo4OiJDYXRlZ29yeSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjU7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTI6ImlzX3B1Ymxpc2hlZCI7czo1OiJsYWJlbCI7czo5OiJQdWJsaXNoZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9fXM6NDA6Ijg1MGVmZTM5Y2MwZDc1MzVhNDY0YzQ1ZDI1NjcwM2U5X2NvbHVtbnMiO2E6OTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI6ImlkIjtzOjU6ImxhYmVsIjtzOjE6IiMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEyOiJTdWJtaXR0ZWQgQXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6ImZvcm1fbmFtZSI7czo1OiJsYWJlbCI7czoxMToiRm9ybSBTb3VyY2UiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjQ6Im5hbWUiO3M6NToibGFiZWwiO3M6MTI6IkNvbnRhY3QgTmFtZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToiZW1haWwiO3M6NToibGFiZWwiO3M6NToiRW1haWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE1OiJmb3JtYXR0ZWRfcGhvbmUiO3M6NToibGFiZWwiO3M6MTI6IlBob25lIE51bWJlciI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjY7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTY6InNlcnZpY2Vfb3JfdG9waWMiO3M6NToibGFiZWwiO3M6MTU6IlRvcGljIC8gU2VydmljZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjc7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTQ6ImNvbnRhY3RfbWV0aG9kIjtzOjU6ImxhYmVsIjtzOjEwOiJQcmVmZXJlbmNlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6ODthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo2OiJzdGF0dXMiO3M6NToibGFiZWwiO3M6NjoiU3RhdHVzIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI5NjA0YzBkMWYzMmUwOWY1MjI1MzUwMzQ0NWJjYjRmN19jb2x1bW5zIjthOjU6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyOiJpZCI7czo1OiJsYWJlbCI7czoyOiJJZCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjE7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjE6InNpdGVfaW5kZXhpbmdfZW5hYmxlZCI7czo1OiJsYWJlbCI7czoyNDoiSW5kZXhpbmcgU3RhdHVzIChSb2JvdHMpIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxODoibWV0YV90aXRsZV9kZWZhdWx0IjtzOjU6ImxhYmVsIjtzOjEzOiJEZWZhdWx0IFRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxODoiY2Fub25pY2FsX2Jhc2VfdXJsIjtzOjU6ImxhYmVsIjtzOjEzOiJDYW5vbmljYWwgVVJMIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO319czo0MDoiMjNkMDUxZGUzNTExN2EwMjNiMGNlYWI1Yzk4MTBmNzdfY29sdW1ucyI7YTo3OntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MjoiaWQiO3M6NToibGFiZWwiO3M6MjoiSWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjE2OiJuZXdzbGV0dGVyX3RpdGxlIjtzOjU6ImxhYmVsIjtzOjE2OiJOZXdzbGV0dGVyIHRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJlbWFpbCI7czo1OiJsYWJlbCI7czo1OiJFbWFpbCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToicGhvbmUiO3M6NToibGFiZWwiO3M6NToiUGhvbmUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjIwOiJuZXdzbGV0dGVyX2lzX2FjdGl2ZSI7czo1OiJsYWJlbCI7czoxNzoiTmV3c2xldHRlciBBY3RpdmUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6ImlzX2FjdGl2ZSI7czo1OiJsYWJlbCI7czo2OiJBY3RpdmUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo2O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiJlNjQ0ODMzZjRlNGUwODcxMjMxNWRhNzFiMzNmYWNkMl9jb2x1bW5zIjthOjY6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyOiJpZCI7czo1OiJsYWJlbCI7czoxOiIjIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJuYW1lIjtzOjU6ImxhYmVsIjtzOjQ6Ik5hbWUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6ImVtYWlsIjtzOjU6ImxhYmVsIjtzOjEzOiJFbWFpbCBBZGRyZXNzIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoicm9sZXMubmFtZSI7czo1OiJsYWJlbCI7czo1OiJSb2xlcyI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjQ7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTc6InBlcm1pc3Npb25zX2NvdW50IjtzOjU6ImxhYmVsIjtzOjE4OiJEaXJlY3QgUGVybWlzc2lvbnMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJDcmVhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9fXM6NDA6IjU5NDQwYThmNjg1MzJmMzM0MDI3N2Y4NjIzMzBjNzQ1X2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjI6ImlkIjtzOjU6ImxhYmVsIjtzOjI6IklkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoibWluaV90aXRsZSI7czo1OiJsYWJlbCI7czoxMDoiTWluaSB0aXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6Im1haW5fdGl0bGUiO3M6NToibGFiZWwiO3M6MTA6Ik1haW4gdGl0bGUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6ImlzX2FjdGl2ZSI7czo1OiJsYWJlbCI7czo5OiJJcyBhY3RpdmUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX19czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1792068750);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL DEFAULT 'CoreUnity Solutions',
  `header_logo` varchar(255) DEFAULT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `copyright_text` varchar(255) DEFAULT NULL,
  `primary_color` varchar(255) NOT NULL DEFAULT '#cc2936',
  `secondary_color` varchar(255) NOT NULL DEFAULT '#b71c1c',
  `social_links` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`social_links`)),
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `map_embed_url` text DEFAULT NULL,
  `header_cta_text` varchar(255) NOT NULL DEFAULT 'Speak to an expert',
  `header_cta_url` varchar(255) NOT NULL DEFAULT '#',
  `header_menu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`header_menu`)),
  `footer_menu_groups` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`footer_menu_groups`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `header_logo`, `footer_logo`, `favicon`, `copyright_text`, `primary_color`, `secondary_color`, `social_links`, `email`, `phone`, `whatsapp`, `address`, `map_embed_url`, `header_cta_text`, `header_cta_url`, `header_menu`, `footer_menu_groups`, `created_at`, `updated_at`) VALUES
(1, 'CoreUnity Solutions', NULL, NULL, NULL, '© 2026 CoreUnity Solutions. All Rights Reserved.', '#425747', '#050303', '[{\"platform\":\"Facebook\",\"url\":\"https:\\/\\/facebook.com\",\"icon\":null},{\"platform\":\"Instagram\",\"url\":\"https:\\/\\/instagram.com\",\"icon\":null},{\"platform\":\"LinkedIn\",\"url\":\"https:\\/\\/linkedin.com\",\"icon\":null},{\"platform\":\"YouTube\",\"url\":\"https:\\/\\/youtube.com\",\"icon\":null}]', 'contact@coreunitysolutions.com', '+971 50 555 9646', '+971505559646', 'Churchill Tower, Business Bay, Dubai, UAE', 'https://www.google.com/maps/embed?...', 'Speak to an expert', '#contact', '[{\"label\":\"Home\",\"url\":\"\\/\",\"open_in_new_tab\":false,\"is_active\":true},{\"label\":\"About\",\"url\":\"\\/about\",\"open_in_new_tab\":false,\"is_active\":true},{\"label\":\"Services\",\"url\":\"\\/services\",\"open_in_new_tab\":false,\"is_active\":true},{\"label\":\"Case Study\",\"url\":\"\\/portfolio\",\"open_in_new_tab\":false,\"is_active\":true},{\"label\":\"Blog\",\"url\":\"\\/blog\",\"open_in_new_tab\":false,\"is_active\":true},{\"label\":\"Contact\",\"url\":\"\\/contact\",\"open_in_new_tab\":false,\"is_active\":true}]', '[{\"group_title\":\"Quick Links\",\"links\":[{\"label\":\"About Us\",\"url\":\"\\/about\"},{\"label\":\"Services\",\"url\":\"\\/services\"},{\"label\":\"Case Studies\",\"url\":\"\\/portfolio\"},{\"label\":\"Blog Insights\",\"url\":\"\\/blog\"},{\"label\":\"Contact\",\"url\":\"\\/contact\"}]},{\"group_title\":\"Services\",\"links\":[{\"label\":\"Web Development\",\"url\":\"\\/services\\/web-development\"},{\"label\":\"Branding & Design\",\"url\":\"\\/services\\/branding-and-creative-design\"},{\"label\":\"AI Solutions\",\"url\":\"\\/services\\/ai-solutions\"},{\"label\":\"Social Media Marketing\",\"url\":\"\\/services\\/social-media-marketing\"},{\"label\":\"SEO Optimization\",\"url\":\"\\/services\\/search-engine-optimization\"}]},{\"group_title\":\"Industries\",\"links\":[{\"label\":\"Real Estate\",\"url\":\"\\/industries\\/real-estate\"},{\"label\":\"Healthcare\",\"url\":\"\\/industries\\/healthcare\"},{\"label\":\"Fintech\",\"url\":\"\\/industries\\/fintech\"},{\"label\":\"Hospitality\",\"url\":\"\\/industries\\/hospitality\"},{\"label\":\"Education\",\"url\":\"\\/industries\\/education\"}]}]', '2026-10-14 00:30:57', '2026-10-14 01:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `team_sections`
--

CREATE TABLE `team_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Our Passionate Team',
  `main_title` text DEFAULT NULL,
  `badge_logo` varchar(255) DEFAULT NULL,
  `members` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`members`)),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_sections`
--

INSERT INTO `team_sections` (`id`, `mini_title`, `main_title`, `badge_logo`, `members`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Our Passionate Team', 'The Brilliant Minds Behind\nOur Success', NULL, '[{\"name\":\"Faraz Shafi\",\"role\":\"CEO\",\"image\":null},{\"name\":\"Osama Rasheed\",\"role\":\"Managing Partner\",\"image\":null},{\"name\":\"Babar Ali Khan\",\"role\":\"Sr. Developer\",\"image\":null},{\"name\":\"Muhammad Jawed\",\"role\":\"Marketing Manager\",\"image\":null}]', 1, '2026-10-08 05:16:21', '2026-10-09 02:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_sections`
--

CREATE TABLE `testimonial_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mini_title` varchar(255) NOT NULL DEFAULT 'Our Clients',
  `main_title` varchar(255) NOT NULL DEFAULT 'Amazing Software Services',
  `review_text` text DEFAULT NULL,
  `author_name` varchar(255) NOT NULL DEFAULT 'Alex Hales',
  `author_role` varchar(255) NOT NULL DEFAULT 'Managing Partner',
  `author_image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_sections`
--

INSERT INTO `testimonial_sections` (`id`, `mini_title`, `main_title`, `review_text`, `author_name`, `author_role`, `author_image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Our Clients', 'Amazing Software Services', 'They crafted a digital experience tailored to our exact needs. From initial consultation to final deployment, their professionalism, responsiveness, and technical expertise were unmatched. The system they built has streamlined our operations, improved customer engagement, and scaled effortlessly with our growth We couldn\'t be happier with.', 'Alex Hales', 'Managing Partner', NULL, 1, '2026-10-08 05:32:40', '2026-10-08 05:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@coreunity.com', NULL, '$2y$12$HSkHyAVn3eTIvMDP.qMvDuBLYx8txIRg4N.GK35Sz/VXie6c4h4Cm', NULL, '2026-10-08 01:27:19', '2026-10-08 01:27:19'),
(3, 'Test User', 'test@example.com', NULL, '$2y$12$BqKnKIefpZ5D3pW7EoQUOexh084G.N8YoLEb6vm.wL35GxW7Q5Ne.', NULL, '2026-10-14 03:14:00', '2026-10-14 03:14:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_hero_sections`
--
ALTER TABLE `about_hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_industries_sections`
--
ALTER TABLE `about_industries_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_intro_sections`
--
ALTER TABLE `about_intro_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_page_sections`
--
ALTER TABLE `about_page_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `about_page_sections_section_key_unique` (`section_key`),
  ADD KEY `about_page_sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `about_values_sections`
--
ALTER TABLE `about_values_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_hero_sections`
--
ALTER TABLE `blog_hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_page_sections`
--
ALTER TABLE `blog_page_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_page_sections_section_key_unique` (`section_key`),
  ADD KEY `blog_page_sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `blog_sections`
--
ALTER TABLE `blog_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `case_studies_slug_unique` (`slug`);

--
-- Indexes for table `case_study_hero_sections`
--
ALTER TABLE `case_study_hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study_page_sections`
--
ALTER TABLE `case_study_page_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `case_study_page_sections_section_key_unique` (`section_key`),
  ADD KEY `case_study_page_sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `client_reviews_sections`
--
ALTER TABLE `client_reviews_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details_sections`
--
ALTER TABLE `contact_details_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_hero_sections`
--
ALTER TABLE `contact_hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_page_sections`
--
ALTER TABLE `contact_page_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_page_sections_section_key_unique` (`section_key`),
  ADD KEY `contact_page_sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `core_strengths_sections`
--
ALTER TABLE `core_strengths_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_forms`
--
ALTER TABLE `crm_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crm_forms_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_sections`
--
ALTER TABLE `footer_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_submissions_crm_form_id_foreign` (`crm_form_id`),
  ADD KEY `form_submissions_form_slug_index` (`form_slug`),
  ADD KEY `form_submissions_status_index` (`status`);

--
-- Indexes for table `global_seo_settings`
--
ALTER TABLE `global_seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_sections`
--
ALTER TABLE `home_page_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `home_page_sections_section_key_unique` (`section_key`),
  ADD KEY `home_page_sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `our_clients_sections`
--
ALTER TABLE `our_clients_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_work_sections`
--
ALTER TABLE `our_work_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `services_hero_sections`
--
ALTER TABLE `services_hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_industries_sections`
--
ALTER TABLE `services_industries_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_list_sections`
--
ALTER TABLE `services_list_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_page_sections`
--
ALTER TABLE `services_page_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_page_sections_section_key_unique` (`section_key`),
  ADD KEY `services_page_sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `services_sections`
--
ALTER TABLE `services_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_smm_sections`
--
ALTER TABLE `services_smm_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_sections`
--
ALTER TABLE `team_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_sections`
--
ALTER TABLE `testimonial_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_hero_sections`
--
ALTER TABLE `about_hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_industries_sections`
--
ALTER TABLE `about_industries_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_intro_sections`
--
ALTER TABLE `about_intro_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_page_sections`
--
ALTER TABLE `about_page_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_values_sections`
--
ALTER TABLE `about_values_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_hero_sections`
--
ALTER TABLE `blog_hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_page_sections`
--
ALTER TABLE `blog_page_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_sections`
--
ALTER TABLE `blog_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `case_study_hero_sections`
--
ALTER TABLE `case_study_hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `case_study_page_sections`
--
ALTER TABLE `case_study_page_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_reviews_sections`
--
ALTER TABLE `client_reviews_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_details_sections`
--
ALTER TABLE `contact_details_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_hero_sections`
--
ALTER TABLE `contact_hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_page_sections`
--
ALTER TABLE `contact_page_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_strengths_sections`
--
ALTER TABLE `core_strengths_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crm_forms`
--
ALTER TABLE `crm_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_sections`
--
ALTER TABLE `footer_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_submissions`
--
ALTER TABLE `form_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `global_seo_settings`
--
ALTER TABLE `global_seo_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_page_sections`
--
ALTER TABLE `home_page_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `our_clients_sections`
--
ALTER TABLE `our_clients_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_work_sections`
--
ALTER TABLE `our_work_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `services_hero_sections`
--
ALTER TABLE `services_hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_industries_sections`
--
ALTER TABLE `services_industries_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_list_sections`
--
ALTER TABLE `services_list_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_page_sections`
--
ALTER TABLE `services_page_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services_sections`
--
ALTER TABLE `services_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_smm_sections`
--
ALTER TABLE `services_smm_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_sections`
--
ALTER TABLE `team_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial_sections`
--
ALTER TABLE `testimonial_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_page_sections`
--
ALTER TABLE `about_page_sections`
  ADD CONSTRAINT `about_page_sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_page_sections`
--
ALTER TABLE `blog_page_sections`
  ADD CONSTRAINT `blog_page_sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `case_study_page_sections`
--
ALTER TABLE `case_study_page_sections`
  ADD CONSTRAINT `case_study_page_sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contact_page_sections`
--
ALTER TABLE `contact_page_sections`
  ADD CONSTRAINT `contact_page_sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD CONSTRAINT `form_submissions_crm_form_id_foreign` FOREIGN KEY (`crm_form_id`) REFERENCES `crm_forms` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `home_page_sections`
--
ALTER TABLE `home_page_sections`
  ADD CONSTRAINT `home_page_sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services_page_sections`
--
ALTER TABLE `services_page_sections`
  ADD CONSTRAINT `services_page_sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
