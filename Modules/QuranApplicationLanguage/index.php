<?php
include 'Template.php';
 $template = new Template;

 $alhadit = array('Al-Hadith', 'ฮาดิซ', 'Hadis');

 $template->assign('navbarBrand', 'Quran.com');
 $template->assign('Al-Hadith', $alhadit[1]);
 $template->assign('Al-Quran', 'อัลกุรอ่าน');


 $template->render('index');
?>
