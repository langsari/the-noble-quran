
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";





CREATE DATABASE quran_transliteration;
CREATE TABLE `Arabic` (
  `index_arabic` int(4) NOT NULL,
  `sura_arabic` int(3) NOT NULL DEFAULT 0,
  `aya_arabic` int(3) NOT NULL DEFAULT 0,
  `text_arabic` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `Arabic` (`index_arabic`, `sura_arabic`, `aya_arabic`, `text_arabic`) VALUES
(1, 1, 1, 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ'),
(2, 1, 2, 'الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ'),
(3, 1, 3, 'الرَّحْمَنِ الرَّحِيمِ'),
(4, 1, 4, 'مَالِكِ يَوْمِ الدِّينِ'),
(5, 1, 5, 'إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ'),
(6, 1, 6, 'اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ'),
(7, 1, 7, 'صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ'),

Table structure for table `Thai`
CREATE TABLE `Thai` (
  `index_thai` int(4) NOT NULL,
  `sura_thai` int(3) NOT NULL DEFAULT 0,
  `aya_thai` int(3) NOT NULL DEFAULT 0,
  `text_thai` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `Thai` (`index_thai`, `sura_thai`, `aya_thai`, `text_thai`) VALUES
(1, 1, 1, 'บิสมิล ลาฮิร เราะห์มานิร เราะฮีม'),
(2, 1, 2, 'อัลฮัมดุ ลิลลาฮิ ร็อบบิล อฺาละมีน'),
(3, 1, 3, 'อัรเราะห์มานิร เราะฮีม'),
(4, 1, 4, 'มาลิกิ เยามิด ดีน'),
(5, 1, 5, 'อีย์ยากะ นะอฺ์บุดุ วะอีย์ยากะ นัสตะอฺีน'),
(6, 1, 6, 'อิฮ์ดินัศ ศิรอฏ็อล มุสตะกฺีม'),
(7, 1, 7, 'ศิรอฏ็อล ละซีนะ อันอฺัมตะ อฺะลัยฮิม ฆ็อยริล มัฆฎูบิ อฺะลัยฮิม วะลัฎ ฎอ-ลลีน');

Table structure for table `English`

CREATE TABLE `English` (
  `index_english` int(4) NOT NULL,
  `sura_english` int(3) NOT NULL DEFAULT 0,
  `aya_english` int(3) NOT NULL DEFAULT 0,
  `text_english` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `English` (`index_english`, `sura_english`, `aya_english`, `text_english`) VALUES
(1, 1, 1, 'bis mi al-lahi al-rahmani al-rahimi'),
(2, 1, 2, 'al-hamdu lillahi rabbi al- alamina'),
(3, 1, 3, 'al-rahmani al-rahimi'),
(4, 1, 4, 'maliki yawmi al-dini.'),
(5, 1, 5, 'iyyaka na budu wa-iyyaka nasta inu.'),
(6, 1, 6, 'ih dina al-sirata al-mus taqima.'),
(7, 1, 7, 'sirata alladhina an amta alayhim ghayri al-maghdubi alayhim wala al-dalina.');


/* Indexes for table `Arabic`

*/
ALTER TABLE `Arabic`
  ADD PRIMARY KEY (`index_arabic`);



/* Indexes for table `Thai`
*/
ALTER TABLE `Thai`
  ADD PRIMARY KEY (`index_thai`);


/* Indexes for table `English`
*/
ALTER TABLE `English`
  ADD PRIMARY KEY (`index_english`);
