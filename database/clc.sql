-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 11, 2022 at 06:38 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `aqachieves`
--

CREATE TABLE `aqachieves` (
  `aqachieve_id` bigint(20) UNSIGNED NOT NULL,
  `examdate` date DEFAULT NULL,
  `examingboard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjects` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resultachieved` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `said` bigint(20) UNSIGNED NOT NULL,
  `iscompleted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aqachieves`
--

INSERT INTO `aqachieves` (`aqachieve_id`, `examdate`, `examingboard`, `subjects`, `qualification`, `resultachieved`, `said`, `iscompleted`, `created_at`, `updated_at`) VALUES
(1, '2022-10-12', 'Ftdzu', 'Flcmp', 'Mjdbu', 'Dfdhk', 1, NULL, '2022-10-08 19:37:05', '2022-10-08 19:37:05'),
(2, NULL, 'Irtxa', 'Etviy', 'Vlkqq', NULL, 1, NULL, '2022-10-08 19:37:05', '2022-10-08 19:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursetype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentlevel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_08_26_122402_create_fees_table', 1),
(5, '2022_09_29_131835_create_users_table', 1),
(6, '2022_09_30_045454_create_studentapplications_table', 1),
(7, '2022_09_30_055215_create_aqachieves_table', 1),
(8, '2022_09_30_055717_create_workexps_table', 1),
(9, '2022_10_05_062644_create_courses_table', 1),
(10, '2022_10_06_060525_create_inquiries_table', 1),
(11, '2022_10_06_104735_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Course access', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(2, 'Course edit', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(3, 'Course create', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(4, 'Course delete', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(5, 'Role access', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(6, 'Role edit', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(7, 'Role create', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(8, 'Role delete', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(9, 'User access', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(10, 'User edit', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(11, 'User create', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(12, 'User delete', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(13, 'Permission access', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(14, 'Permission edit', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(15, 'Permission create', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(16, 'Permission delete', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(17, 'Application access', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(2, 'writer', 'web', '2022-10-08 19:32:13', '2022-10-08 19:32:13');

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
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `studentapplications`
--

CREATE TABLE `studentapplications` (
  `said` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pfname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postalcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hometelno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edtouk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foundationcourses` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `undergraduatecourses` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modeofstudy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commencement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courseduration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feespaidby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engfirstlang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anyengcourse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proficiencytest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reasonforchoosing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `futureplan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kindofemp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interestandhobies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialneeds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statebenifits` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criminalrecord` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specificity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coursechoosen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intellectual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fluetandlogicoral` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fluetandlogicwritten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perseverance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leadership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creativity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concern` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refreesname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refreessign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refreesdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketinginfo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethicorigin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '4',
  `statusupdateddate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentapplications`
--

INSERT INTO `studentapplications` (`said`, `firstname`, `lastname`, `title`, `pfname`, `dob`, `gender`, `address`, `city`, `postalcode`, `hometelno`, `mobile`, `email`, `cob`, `nationality`, `edtouk`, `foundationcourses`, `undergraduatecourses`, `modeofstudy`, `commencement`, `courseduration`, `feespaidby`, `engfirstlang`, `anyengcourse`, `proficiencytest`, `reasonforchoosing`, `futureplan`, `kindofemp`, `interestandhobies`, `specialneeds`, `statebenifits`, `criminalrecord`, `specificity`, `coursechoosen`, `intellectual`, `fluetandlogicoral`, `fluetandlogicwritten`, `ability`, `perseverance`, `leadership`, `creativity`, `concern`, `refreesname`, `refreessign`, `refreesdate`, `marketinginfo`, `ethicorigin`, `religion`, `status`, `statusupdateddate`, `created_at`, `updated_at`) VALUES
(1, 'Beverly', 'Hills', 'Mrs', 'Beverly', '2022-10-11', 'Female', '4562 Beverly Dr', 'Beverly Hills', '90210', 'Pypdz', 'Hcjjg', NULL, 'RU', 'RU', 'Vwbcv', '1', NULL, '1', '1', '1', '1', 'yes', 'yes', 'yes', 'Kzqtw', 'Edlfe', 'Ysqpu', 'Bddhw', 'Fnitg', 'Bsjix', 'Ciokb', 'Beverly Hills', 'Heiju', '3', '3', '3', '3', '3', '3', '3', '3', 'Beverly Hills', 'Gazdw', 'Imatz', 'Newspaper/Magazine,Relative/Friend,Social Media,', '8', '6', '2', NULL, '2022-10-08 19:37:05', '2022-10-11 13:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `roleid` int(11) NOT NULL DEFAULT '3',
  `isdeleted` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `roleid`, `isdeleted`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2022-10-08 19:32:13', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 3018640237, 1, 0, 'odLoeOyyhT', '2022-10-08 19:32:13', '2022-10-08 19:32:13'),
(2, 'M Husnain Khursheed', 'husnain161616@gmail.com', '2022-10-08 19:34:57', '$2y$10$AgmRSpipwVJNto9LbuBW3e/YQY2T7u/vqzV3s2tKFFtA3ZgszukMu', 3093885400, 3, 0, NULL, '2022-10-08 19:33:50', '2022-10-08 19:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `workexps`
--

CREATE TABLE `workexps` (
  `workexps_id` bigint(20) UNSIGNED NOT NULL,
  `datefrom` date DEFAULT NULL,
  `dateto` date DEFAULT NULL,
  `ftpt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postsheld` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `despofduties` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `said` bigint(20) UNSIGNED NOT NULL,
  `iscompleted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workexps`
--

INSERT INTO `workexps` (`workexps_id`, `datefrom`, `dateto`, `ftpt`, `postsheld`, `orgname`, `orgaddress`, `despofduties`, `said`, `iscompleted`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Evxkb', 'Uyvyq', 'Beverly Hills', NULL, 'Hkjzf', 1, NULL, '2022-10-08 19:37:05', '2022-10-08 19:37:05'),
(2, NULL, NULL, 'Ercis', 'Midma', 'Beverly Hills', '4562 Beverly Dr', 'Hmrpa', 1, NULL, '2022-10-08 19:37:05', '2022-10-08 19:37:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aqachieves`
--
ALTER TABLE `aqachieves`
  ADD PRIMARY KEY (`aqachieve_id`),
  ADD KEY `aqachieves_said_foreign` (`said`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- Indexes for table `studentapplications`
--
ALTER TABLE `studentapplications`
  ADD PRIMARY KEY (`said`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workexps`
--
ALTER TABLE `workexps`
  ADD PRIMARY KEY (`workexps_id`),
  ADD KEY `workexps_said_foreign` (`said`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aqachieves`
--
ALTER TABLE `aqachieves`
  MODIFY `aqachieve_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentapplications`
--
ALTER TABLE `studentapplications`
  MODIFY `said` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workexps`
--
ALTER TABLE `workexps`
  MODIFY `workexps_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aqachieves`
--
ALTER TABLE `aqachieves`
  ADD CONSTRAINT `aqachieves_said_foreign` FOREIGN KEY (`said`) REFERENCES `studentapplications` (`said`);

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workexps`
--
ALTER TABLE `workexps`
  ADD CONSTRAINT `workexps_said_foreign` FOREIGN KEY (`said`) REFERENCES `studentapplications` (`said`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
