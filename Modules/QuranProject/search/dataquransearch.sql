-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 20, 2020 at 09:48 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `quran_sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `alquran`
--

CREATE TABLE `alquran` (
  `id` int(11) NOT NULL,
  `surah` varchar(225) NOT NULL,
  `arabic` text NOT NULL,
  `meaning` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alquran`
--

INSERT INTO `alquran` (`id`, `surah`, `arabic`, `meaning`) VALUES
(1, 'Al-Fatihah(1:1)', 'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ ', 'In the Name of Allah—the Most Compassionate, Most Merciful'),
(2, 'Al-Fatihah(1:2)', 'الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ ', 'All praise is for Allah—Lord of all worlds'),
(3, 'Al-Fatihah(1:3)', 'الرَّحْمَٰنِ الرَّحِيمِ', 'the Most Compassionate, Most Merciful'),
(4, 'Al-Fatihah(1:4)', 'مَالِكِ يَوْمِ الدِّينِ', 'Master of the Day of Judgment'),
(5, 'Al-Fatihaht(1:5)', 'إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ ', 'You ˹alone˺ we worship and You ˹alone˺ we ask for help'),
(6, 'Al-Fatihah(1:6)', 'اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ', 'Guide us along the Straight Path'),
(7, 'Al-Fatithah(1:7)', 'صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ', 'the Path of those You have blessed—not those You are displeased with, or those who are astray'),
(8, 'Al-Baqarah(2:1)', 'الم', 'Alif-Lam-Mim'),
(9, 'Al-Baqarah(2:2)', 'ذَٰلِكَ الْكِتَابُ لَا رَيْبَ فِيهِ هُدًى لِّلْمُتَّقِينَ ', 'This is the Book! There is no doubt about it—a guide for those mindful ˹of Allah˺'),
(10, 'Al-Baqarah(2:3)', 'الَّذِينَ يُؤْمِنُونَ بِالْغَيْبِ وَيُقِيمُونَ الصَّلَاةَ وَمِمَّا رَزَقْنَاهُمْ يُنفِقُونَ ', 'who believe in the unseen, establish prayer, and donate from what We have provided for them'),
(11, 'Al-Baqarah(2:4)', 'وَالَّذِينَ يُؤْمِنُونَ بِمَا أُنزِلَ إِلَيْكَ وَمَا أُنزِلَ مِن قَبْلِكَ وَبِالْآخِرَةِ هُمْ يُوقِنُونَ ', 'and who believe in what has been revealed to you ˹O Prophet˺ and what was revealed before you, and have sure faith in the Hereafter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alquran`
--
ALTER TABLE `alquran`
  ADD PRIMARY KEY (`id`);