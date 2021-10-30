-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2020 at 11:31 AM
-- Server version: 10.3.23-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumf5183_ciihuy`
--

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `quran_th_info`
--

CREATE TABLE `quran_th_info` (
  `ID` int(11) NOT NULL,
  `SuraID` int(11) NOT NULL,
  `VerseID` int(11) NOT NULL,
  `SuraName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Place` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `Link` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quran_th`
--
INSERT INTO `quran_th_info` (`ID`, `SuraID`, `VerseID`, `SuraName`, `Place`, `Name`, `Info`, `Link`) VALUES
(1, 1, 7, 'อัล-ฟาติหะฮฺ', 'นครมักกะฮฺ(มักกียะฮฺ)', 'สูเราะฮฺที่ 1 อัลฟาติหะฮฺมักกียะฮฺ มี 7 อายะฮฺชื่อบท “อัลฟาติหะฮฺ” มีความหมายว่า “บทเริ่มต้น” เพราะเป็นบทแรกของการจัดลำดับอัลกุรอาน', ' สูเราะฮฺสั้น ๆ ที่มีเพียง 7 อายะฮฺ แตกลับเป็นสูเราะฮฺทีมุสลิมอ่านซ้ำแล้วซ้ำเล่า ครั้งแล้วครั้งเล่าถึ่ง 17 ครั้งตลอดเวลาหนึ่งวันและหนึ่งคืนเป็นอย่างน้อย หรือมากกว่านั้นหากพวกเขาละหมาดซุนัต และจำนวนครั้งของการอานสูเราะฮฺสั้น ๆ สูเราะฮฺนี้จะเพิมขื้นอีกหลายเท่าทวีคูณอย่างไม่มีเขตจำกัด หากพวกเขาต้องการยืนอยู่ ณ ความโปรดปรานของอัลลอฮฺด้วยการอ่านในที่ที่นอกเหนือจากการอ่านในละหมาดฟัรฏูและซุนัต และการละหมาดจะไม่สามารถเกิดขึ้นได้โดยปราศจากการอ่านสูเราะฮฺนี้ เพราะมีหลักฐานปรากฏอยู่ในเศาะหีหฺทั้งสองเล่ม (อัลบุคอรียฺและมุสลิม) ในรายงานของท่านอุบาดะฮฺ อิบนุ ศอมิด จากท่านเราะซูลุลลอฮฺ(ศ็อลฯ) ว่า “ไม่เป็นการละหมาดสำหรับผู้ที่ไม่อ่านสูเราะฮฺอัลฟาตีหะฮฺ” 
          สูเราะฮฺอัลฟาตีหะฮฺเป็นส่วนหนึ่งของหลักความเชื่อของอิสลาม เป็นภาพรวมของความเข้าใจอิสลาม เป็นภาพรวมของความรู้สึกและตัวบงชี้ ที่ชี้ให้เห็นถึงสุดยอดแห่งปรัชญาที่มุสลิมเลือกที่จะอ่านซ้ำแล้วซ้ำเล่าครั้งแล้วครั้งเล่าในทุกร็อกอะฮฺของการละหมาด เป็นการบ่งบอกให้เห็นถึงสุดยอดแห่งปรัชญาอันเฉียบคมที่ชี้ให้เห็นว่าหากขาดสูเราะฮฺฟาติหะฮฺแล้ว การละหมาดจะไม่เป็นการละหมาดได้อีกต่อไป', 'https://www.youtube.com/embed/Suhx7Qmqm8Y?start=108&autoplay=1'),
(114, 114, 6, 'อัน-นาส', 'นครมักกะฮฺ(มักกียะฮฺ)', '', '', 'https://www.youtube.com/embed/iNyuaPJneN0?start=9&autoplay=1');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
