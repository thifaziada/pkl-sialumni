-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2024 at 12:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sialumni-pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birthday` date DEFAULT NULL,
  `leave_year` year(4) NOT NULL,
  `join_year` year(4) NOT NULL,
  `current_job` varchar(100) DEFAULT NULL,
  `current_company` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `first_name`, `last_name`, `birthday`, `leave_year`, `join_year`, `current_job`, `current_company`, `address`, `city`, `country`, `no_hp`, `linkedin`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Thifa Ziada', 'Taqiyya', '2003-08-13', '2019', '2016', 'Software Engineer', 'Deloitte', 'Perumnas Aur Duri Blok C No.109', 'Jambi', 'Indonesia', '+6282181501664', 'https://www.linkedin.com/in/thifaziada/', 'thifa.png', 'verified', NULL, NULL),
(2, 'Zhafira', 'Amanda', '2003-12-12', '2022', '2020', 'Data Analyst', 'Shopee', 'Jl.Antasari', 'Bangka', 'Indonesia', '+6282177801516', 'https://www.linkedin.com/in/firaamanda/', 'zhafira.png', 'verified', NULL, NULL),
(3, 'Zenobia Wirandi', 'Zenaide', '2003-12-02', '2021', '2020', 'UI/UX Designer', 'Gojek', 'Jl.Soekarno', 'Jakarta Selatan', 'Indonesia', '+6282233445566', 'https://www.linkedin.com/in/zenobia/', 'zenobia.png', 'verified', NULL, NULL),
(4, 'Athiya Puteri', 'Hidayat', '2003-08-19', '2019', '2018', 'Project Manager', 'KPMG', 'Jl.Maerasari', 'Jakarta Selatan', 'Indonesia', '+6282300987654', 'https://www.linkedin.com/in/athiyap/', 'athiya.png', 'verified', NULL, NULL),
(5, 'Faisal', 'Hakim', '1998-10-18', '2014', '2013', 'Software Developer', 'Intel', 'Jl. HR Rasuna Said', 'Jakarta Selatan', 'Indonesia', '+6285678901234', 'https://www.linkedin.com/in/faisalf/', 'faisal.png', 'verified', NULL, NULL),
(6, 'Budi', 'Santoso', '2002-05-10', '2018', '2017', 'Software Engineer', 'Google', 'Jl. Sudirman', 'Jakarta Pusat', 'Indonesia', '+6281123456789', 'https://www.linkedin.com/in/budis/', 'budi.png', 'verified', NULL, NULL),
(7, 'Cynthia', 'Wijaya', '2001-11-25', '2017', '2016', 'Data Scientist', 'Microsoft', 'Jl. Gatot Subroto', 'Jakarta Barat', 'Indonesia', '+6282345678901', 'https://www.linkedin.com/in/cynthiaw/', 'cynthia.png', 'verified', NULL, NULL),
(8, 'Dika', 'Pratama', '2000-02-15', '2016', '2015', 'Marketing Specialist', 'Facebook', 'Jl. Kebon Sirih', 'Jakarta Pusat', 'Indonesia', '+6283456789012', 'https://www.linkedin.com/in/dikap/', 'dika.png', 'verified', NULL, NULL),
(9, 'Eva', 'Rahayu', '1999-07-03', '2015', '2014', 'Product Manager', 'Amazon', 'Jl. Tebet', 'Jakarta Selatan', 'Indonesia', '+6284567890123', 'https://www.linkedin.com/in/evar/', 'eva.png', 'verified', NULL, NULL),
(10, 'George', 'Smith', '1997-04-22', '2013', '2012', 'Financial Analyst', 'Goldman Sachs', '123 Main St', 'New York', 'USA', '+1-555-123-4567', 'https://www.linkedin.com/in/georges/', 'george.png', 'verified', NULL, NULL),
(11, 'Hana', 'Tanaka', '1996-09-15', '2012', '2011', 'Marketing Manager', 'Sony', '456 Elm St', 'Tokyo', 'Japan', '+81-9012345678', 'https://www.linkedin.com/in/hanat/', 'hana.png', 'verified', NULL, NULL),
(12, 'Olivia', 'Jasmine', '1999-02-20', '2022', '2020', 'Software Engineer', 'Google', NULL, 'California', 'US', NULL, NULL, '1706755386_olivia.png', 'verified', NULL, NULL),
(14, 'Shawn', 'Mendes', NULL, '2020', '2018', NULL, NULL, NULL, 'New York', 'USA', NULL, NULL, '1706779588_shawn.png', 'verified', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `story_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(3, 17, 12, 'pp', '2024-02-01 00:25:55', '2024-02-01 00:25:55'),
(4, 17, 12, 'aa', '2024-02-01 00:30:13', '2024-02-01 00:30:13'),
(9, 22, 3, 'congrats!!', '2024-02-01 13:59:53', '2024-02-01 13:59:53'),
(10, 22, 1, 'congrats', '2024-02-01 20:29:21', '2024-02-01 20:29:21'),
(13, 28, 1, 'hai juga', '2024-02-27 03:35:17', '2024-02-27 03:35:17');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Could you provide more details about Elitery\'s referral program and the rewards it offers?', 'Elitery has a referral program in place, offering attractive rewards for those who participate.', 'approved', '2024-01-23 01:02:40', '2024-02-01 18:13:59'),
(2, 'Who qualifies as an Elitery alumnus?', 'All staff who have served for one year or more at Elitery are eligible to join the alumni network.', 'approved', '2024-01-23 01:02:40', '2024-02-06 05:44:05'),
(3, 'What reward programs does Elitery offer in its employee referral program?', 'kamuuu adalah', 'approved', '2024-01-24 02:20:56', '2024-02-01 20:33:27'),
(4, 'What are the core values of Elitery team, and how are innovation, collaboration, and personal growth emphasized?', 'The core values of Elitery\'s team revolve around innovation, collaboration, and personal growth. They believe in achieving extraordinary results through passionate teamwork.', 'approved', '2024-01-24 20:54:55', '2024-01-25 15:35:40'),
(5, 'What is Elitery main commitment to the workplace environment?', NULL, 'pending', '2024-01-28 21:43:57', '2024-01-28 21:43:57');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_18_023711_create_social_accounts_table', 1),
(7, '2024_01_18_101049_create_alumni_table', 2),
(9, '2024_01_18_101049_create_alumnis_table', 3),
(10, '2024_01_22_144308_create_stories_table', 4),
(11, '2024_01_24_022009_create_comments_table', 5);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `linkedin` varchar(20) DEFAULT NULL,
  `cv` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `user_id`, `first_name`, `last_name`, `email`, `linkedin`, `cv`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 'Azizah', 'Salsa', 'azizah@gmail.com', 'linkedin/in/azizah', '1_CV_AzizahSalsa', NULL, '2024-03-21 20:09:09', '2024-03-21 20:09:09'),
(2, 1, 'Keshia', 'Valerie', 'keshia@gmail.com', 'linkedin/in/keshia', '1_CV_KeshiaValerie', NULL, '2024-03-21 20:12:13', '2024-03-21 20:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `provider_id` varchar(255) NOT NULL,
  `provider_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `user_id`, `provider_id`, `provider_name`, `created_at`, `updated_at`) VALUES
(1, 1, '101540575336904577005', 'google', '2024-01-17 20:20:15', '2024-01-17 20:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `story` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`story_id`, `user_id`, `story`, `created_at`, `updated_at`) VALUES
(17, 1, 'haloo kamuu', '2024-01-30 05:37:35', '2024-01-30 05:37:35'),
(22, 11, 'I’m happy to share that I’m starting a new position as Marketing Manager at Sony Electronics', '2024-02-01 13:59:15', '2024-02-01 13:59:15'),
(23, 1, 'haii', '2024-02-01 20:29:10', '2024-02-01 20:29:10'),
(27, 1, 'hii', '2024-02-27 03:32:13', '2024-02-27 03:32:13'),
(28, 1, 'halo', '2024-02-27 03:32:46', '2024-02-27 03:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `testimonies`
--

CREATE TABLE `testimonies` (
  `testimony_id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonies`
--

INSERT INTO `testimonies` (`testimony_id`, `user_id`, `content`) VALUES
(1, 3, 'Working at Elitery is more than just a job – it\'s an exciting journey. The collaborative environment and innovative projects challenge me to grow both personally and professionally'),
(2, 11, 'The support and guidance I received at Elitery was instrumental in shaping my career. Diverse culture and creativity make every day worthwhile.'),
(3, 7, 'Elitery is not just a workplace; it is a community. The connections I have built with my colleagues and the valuable experiences I have gained have been invaluable throughout my career.'),
(4, 8, 'Elitery has given me the opportunity to explore new ideas and contribute to projects that have a real impact.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thifa Ziada Taqiyya', 'thifazia13@gmail.com', NULL, NULL, NULL, '13em5rc3zPHlqiv0KBE4OofjzUaoBSwyvo7IymvjKdcvgwoKtDFX1JTPqqyZ', '2024-01-17 20:20:15', '2024-01-17 20:20:15'),
(2, 'Zhafira Amanda', 'firaamanda1203@gmail.com', NULL, NULL, '$2y$12$IFazNXb1u9XWWLRDNfhuReimWtqTgwXvCp0UQFAS.s2Xi0u..B/22', NULL, '2024-01-19 23:01:05', '2024-01-19 23:01:05'),
(3, 'Zenobia Wirandi Zenaide', 'zenobia@gmail.com', NULL, NULL, '$2y$12$CXEi294zF3iMjxl2ql0u0uPb5wJjg1TOHhBbesYXRV1q1c6ZkVOJq', NULL, '2024-01-19 23:02:31', '2024-01-19 23:02:31'),
(4, 'Athiya Puteri Hidayat', 'athiya@gmail.com', NULL, NULL, '$2y$12$gJGCKoxeeM5EAyTz.pSKY.Ph3GQqnLJz79IU8/ofyR8wohDHvOIvu', NULL, '2024-01-19 23:03:07', '2024-01-19 23:03:07'),
(5, 'Faisal Hakim', 'faisal@gmail.com', NULL, NULL, '$2y$12$dQPLXkT5Kisok0vvKvCJC.UjBTd9prEcvDy84wUf8T8HmdrV0B8/y', NULL, '2024-01-19 23:03:55', '2024-01-19 23:03:55'),
(6, 'Budi Santoso', 'budi@gmail.com', NULL, NULL, '$2y$12$xiHSu2I9eP.D/F9QGS0vGu6Bhrl1tzKS/HugCSbo1wMcvtuQ1p9jm', NULL, '2024-01-19 23:05:01', '2024-01-19 23:05:01'),
(7, 'Cynthia Wijaya', 'cynthia@gmail.com', NULL, NULL, '$2y$12$vxbOZqDtwOrvZ/NKjRiNQ.gUNCD99cewmxf2PN0A1.R4jy.RVg5CK', NULL, '2024-01-19 23:05:41', '2024-01-19 23:05:41'),
(8, 'Dika Pratama', 'dika@gmail.com', NULL, NULL, '$2y$12$a23A61VHyXXuvpNKXahCvughTveKyiTNR/Tj227dXdk3Yv8te25T6', NULL, '2024-01-19 23:06:18', '2024-01-19 23:06:18'),
(9, 'Eva Rahayu', 'eva@gmail.com', NULL, NULL, '$2y$12$hM0.V2hU5s1905sXLhXoSOazACqiT/pHdcvdenbzsIgi8C4JnSNN.', NULL, '2024-01-19 23:07:04', '2024-01-19 23:07:04'),
(10, 'George Smith', 'george@gmail.com', NULL, NULL, '$2y$12$7qS6U9V69hVIO9e83rsUHO00uiDJkaD8dEqhgVhOPCyAPwavvUCda', NULL, '2024-01-19 23:07:38', '2024-01-19 23:07:38'),
(11, 'Hana Tanaka', 'hana@gmail.com', NULL, NULL, '$2y$12$qak7tdkUc6rTOf6k21ZQJOIkBpanxWqXT6hOXW92YuAYlS0J/UAPu', NULL, '2024-01-19 23:08:05', '2024-01-19 23:08:05'),
(12, 'Olivia Jasmine', 'olivia@gmail.com', NULL, NULL, '$2y$12$Oh6R8hEnr3BPDhuxzBxLpunFCNG3S5dqA5YG2B2o51hIFsFkeq.8q', NULL, '2024-01-30 20:04:42', '2024-01-30 20:04:42'),
(13, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$epTE/1iZj7fb8rZ2Lbcef.JotpXxiHFv0RNoBMQUGMnWAKJO3AL.y', NULL, '2024-02-01 01:52:19', '2024-02-01 01:52:19'),
(14, 'Shawn Mendes', 'shawn@gmail.com', NULL, NULL, '$2y$12$cOeQ8z/rcfDOaJQcmLj2Iux2jXCxbuDP902sUc5c.B8JJyw.WiMhO', NULL, '2024-02-01 02:24:44', '2024-02-01 02:24:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD KEY `fk_users_alumnis` (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_story_id_foreign` (`story_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_referral_alumni` (`user_id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_accounts_provider_id_unique` (`provider_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `stories_user_id_foreign` (`user_id`);

--
-- Indexes for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD PRIMARY KEY (`testimony_id`),
  ADD KEY `fk_testimonies_alumnis` (`user_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `story_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD CONSTRAINT `fk_users_alumnis` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`story_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `alumnis` (`id`);

--
-- Constraints for table `referrals`
--
ALTER TABLE `referrals`
  ADD CONSTRAINT `fk_referral_alumni` FOREIGN KEY (`user_id`) REFERENCES `alumnis` (`id`);

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `alumnis` (`id`);

--
-- Constraints for table `testimonies`
--
ALTER TABLE `testimonies`
  ADD CONSTRAINT `fk_testimonies_alumnis` FOREIGN KEY (`user_id`) REFERENCES `alumnis` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
