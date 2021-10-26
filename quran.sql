-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 09:34 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Boody', 'boodyfatani2070@gmail.com', '$2y$10$VXCrEJ8fB6zbj2MSeopRKOivWPtdsMXyoaCzh4vpTRTOn8ax99ZB2', NULL, NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_18_165015_create_verses_table', 1),
(6, '2021_09_20_155916_create_ayats_table', 2),
(7, '2021_09_27_085247_create_videos_table', 3),
(8, '2021_09_27_090225_create_verse_translates_table', 3),
(10, '2021_10_11_084949_create_surahs_table', 4),
(11, '2021_10_19_034705_create_admins_table', 5),
(14, '2021_10_25_120948_create_quran_ths_table', 7),
(16, '2021_10_22_070356_create_nasihas_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `nasihas`
--

CREATE TABLE `nasihas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nasihas`
--

INSERT INTO `nasihas` (`id`, `title`, `description`, `img`, `approved`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'The Holy Quran', 'The Holy Quran is the sacred book of the Muslims. This is my favourite book. The word \"Quran\" means the \"Reading\". It is a book not written by human being. It was sent for Man\'s guidance by Allah Almighty through our Last Prophet (ﷺ). Hazrat Gabriel was used to carrying the message of God. It is the book widely read in the world.\r\n<br><br>\r\nThe Holy Quran is divided into 30 \'Paras\' and 114 \'Surahs\'. Each Surah contains a different number of verses. Out of 114 \'Surahs\' 92 were revealed at Makkah and 22 at Madinah. The Holly Quran contains 6,616 verses, 77, 934 words and 3, 23, 760 letters of Arabic. The opening chapter of the book is regarded with special reverence by the Muslims. It is called \'Surah Fateh\'. It contains seven verses. We recite it in our prayers.\r\n<br><br><br>\r\n<h2>What is the language that was revealed to the Qur\'an?</h2><br><br>\r\nThe holy Quran is written in Arabic which is a very forceful language. Its style is highly impressive and appealing. It is so perfect and lofty that neither men nor jinn can produce a single verse similar to it. The book was not sent for the Arabs alone, but for the whole world without distinction of color, creed, or caste. The book is our best guide. It is full of wisdom, truth, facts, philosophy, beauty, grace and love. This book covers all the aspects of life and gives guidance on all topics. It is a divine sacred book for the spiritual, social and personal guidance of human being.\r\n<br><br>\r\nThe Holy Quran is an everlasting book. Allah has declared in the Holy Book that it is He Who is responsible for its safety. This is why no one has succeeded as yet to alter even the smaller verse of the Holy Book. It was compiled during the caliphate of Hazrat Usman (R.A) who was interested in its compilation. The \'Araabs\' and other signs were put on the Holy Book by the two disciples of Hazrat Ali (R.A) under his guidance.', '1635230610.jpg', 1, 2, '2021-10-25 23:43:30', '2021-10-25 23:45:00');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surahs`
--

CREATE TABLE `surahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_th` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `surah_num` int(11) NOT NULL,
  `number_of_verses` int(11) NOT NULL,
  `revelation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `revelation_th` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surahs`
--

INSERT INTO `surahs` (`id`, `name`, `name_th`, `surah_num`, `number_of_verses`, `revelation`, `revelation_th`, `created_at`, `updated_at`) VALUES
(1, 'سُورَةُ ٱلْفَاتِحَةِ', 'อัล-ฟาติหะฮฺ', 1, 7, 'مكة', 'มักกะฮ์', NULL, NULL),
(112, 'سورة الإخلاص', 'อัล-อิคลาศ', 112, 4, 'مكة', 'มักกะฮ์', NULL, NULL),
(113, 'سورة الفلق', 'อัล-ฟะลัก', 113, 5, 'مكة', 'มักกะฮ์', NULL, NULL),
(114, 'سورة الناس', 'อัน-นาส', 114, 6, 'مكة', 'มักกะฮ์', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tfasirs`
--

CREATE TABLE `tfasirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url_th` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_th` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `surah_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tfasirs`
--

INSERT INTO `tfasirs` (`id`, `url_th`, `url_en`, `description_th`, `description_en`, `surah_id`, `user_id`) VALUES
(1, 'https://www.youtube.com/embed/Suhx7Qmqm8Y', 'https://www.youtube.com/embed/KcJPXUKdKuQ', '001 ซูเราะฮฺ อัล ฟาตีหะฮ : Al fatiha', 'Suratul FATIHA beautifully explained by Mufti Menk\n', 1, 4),
(3, 'https://www.youtube.com/embed/2gJrrpLhNSc', '0', '002 ซูเราะฮฺ อัล บะเกาะเราะต์ : Al bagorah', '0', 2, 3),
(5, 'https://www.youtube.com/embed/iNyuaPJneN0', 'https://www.youtube.com/embed/z_xg6Qx3oaY', '114 ซูเราะฮฺ อัน นาส : An-Nas', 'GET TO KNOW: Ep. 29 - Surah An-Nas - Nouman Ali Khan\n', 114, 0),
(112, 'https://www.youtube.com/embed/LtO2l2bojjw', 'https://www.youtube.com/embed/veLAwQVwMmE', '112 ซูเราะฮฺ อัล อิคลาศ : Al-Ikhlas\r\n', 'GET TO KNOW: Ep. 27 - Surah Al-Ikhlas - Nouman Ali Khan\r\n', 112, NULL),
(113, 'https://www.youtube.com/embed/6hsBjueafcY', 'https://www.youtube.com/embed/vnVPq2VwyLc', '113 ซูเราะฮฺ อัล ฟะลัก : Al-falak\r\n', 'GET TO KNOW: Ep. 28 - Surah Al-Falaq - Nouman Ali Khan\r\n', 113, 1);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Boody 3', 'boodyfatani2070ftu@ftu.ac.th', NULL, '$2y$10$VXCrEJ8fB6zbj2MSeopRKOivWPtdsMXyoaCzh4vpTRTOn8ax99ZB2', NULL, '2021-10-18 10:30:33', '2021-10-18 10:30:33'),
(3, 'อับดุลรอมาน', 'adnanmohamadsaleh@gmail.com', NULL, '$2y$10$ULYcRel3uppjy36s05BW0e0j5Ml9XJ3.YZoRgv.MGsleUmHACdhe6', NULL, '2021-10-18 10:31:14', '2021-10-18 10:31:14'),
(4, 'ddd', 'fatani-d@hotmail.com', NULL, '$2y$10$eJxwTRrDcxw5FoFxtbKYdeDB6suka7D6TspUy7o06UQVldbmEop2C', NULL, '2021-10-18 22:04:20', '2021-10-18 22:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `verse_translates`
--

CREATE TABLE `verse_translates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `translate_th` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `translate_en` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surah_id` int(10) UNSIGNED NOT NULL,
  `verse_number` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verse_translates`
--

INSERT INTO `verse_translates` (`id`, `translate_th`, `translate_en`, `surah_id`, `verse_number`, `created_at`, `updated_at`) VALUES
(1, 'ด้วยพระนามของอัลลอฮฺ ผู้ทรงกรุณาปราณี ผู้ทรงเมตตาเสมอ', NULL, 1, 1, NULL, NULL),
(2, 'การสรรเสริญทั้งหลายนั้น เป็นสิทธิของอัลลอฮฺผู้เป็นพระเจ้าแห่งสากลโลก', NULL, 1, 2, NULL, NULL),
(3, 'ผู้ทรงกรุณาปราณี ผู้ทรงเมตตาเสมอ', NULL, 1, 3, NULL, NULL),
(4, 'ผู้ทรงอภิสิทธิ์แห่งวันตอบแทน', NULL, 1, 4, NULL, NULL),
(5, 'เฉพาะพระองค์เท่านั้นที่พวกข้าพระองค์เคารพอิบาดะฮฺ และเฉพาะพระองค์เท่านั้นที่พวกข้าพระองค์ขอความช่วยเหลือ', NULL, 1, 5, NULL, NULL),
(6, 'ขอพระองค์ทรงแนะนำพวกข้าพระองค์ซึ่งทางอันเที่ยงตรง', NULL, 1, 6, NULL, NULL),
(7, '(คือ) ทางของบรรดาผู้ที่พระองค์ได้ทรงโปรดปราณแก่พวกเขา มิใช่ในทางของพวกที่ถูกกริ้ว และมิใช่ทางของพวกที่หลงผิด', NULL, 1, 7, NULL, NULL),
(15, 'จงกล่าวเถิด มุฮัมมัด ข้าพระองค์ขอความคุ้มครองต่อพระเจ้าแห่งมนุษย์ชาติ', NULL, 114, 1, NULL, NULL),
(16, 'พระราชาแห่งมนุษย์ชาติ\r\n', NULL, 114, 2, NULL, NULL),
(17, 'พระเป็นเจ้าแห่งมนุษย์ชาติ', NULL, 114, 3, NULL, NULL),
(18, 'ให้พ้นจากความชั่วร้ายของผู้กระซิบกระซาบที่หลอกล่อ', NULL, 114, 4, NULL, NULL),
(19, 'ที่กระซิบกระซาบในหัวอกของมนุษย์', NULL, 114, 5, NULL, NULL),
(20, 'จากหมู่ญินและมนุษย์', NULL, 114, 6, NULL, NULL),
(28, 'จงกล่าวเถิด มุฮัมมัด พระองค์คืออัลลอฮฺผู้ทรงเอกะ', NULL, 112, 1, NULL, NULL),
(29, 'อัลลอฮฺนั้นทรงเป็นที่พึ่ง', NULL, 112, 2, NULL, NULL),
(30, 'พระองค์ไม่ประสูติ และไม่ทรงถูกประสูติ', NULL, 112, 3, NULL, NULL),
(31, 'และไม่มีผู้ใดเสมอเหมือนพระองค์', NULL, 112, 4, NULL, NULL),
(36, 'จงกล่าวเถิด มุฮัมมัด ข้าพระองค์ขอความคุ้มครองต่อพระเจ้าแห่งรุ่งอรุณ', NULL, 113, 1, NULL, NULL),
(37, 'ให้พ้นจากความชั่วร้ายที่พระองค์ได้ทรงบันดาลขึ้น', NULL, 113, 2, NULL, NULL),
(38, 'และจากความชั่วร้ายแห่งความมืดของเวลากลางคืนเมื่อมันแผ่คลุม', NULL, 113, 3, NULL, NULL),
(39, 'และจากความชั่วร้ายของบรรดาผู้เสกเป่าในปมเงื่อน', NULL, 113, 4, NULL, NULL),
(45, 'และจากความชั่วร้ายของผู้อิจฉาเมื่อเขาอิจฉา', NULL, 113, 5, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- Indexes for table `nasihas`
--
ALTER TABLE `nasihas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `surahs`
--
ALTER TABLE `surahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tfasirs`
--
ALTER TABLE `tfasirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verse_translates`
--
ALTER TABLE `verse_translates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nasihas`
--
ALTER TABLE `nasihas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surahs`
--
ALTER TABLE `surahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `tfasirs`
--
ALTER TABLE `tfasirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verse_translates`
--
ALTER TABLE `verse_translates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
