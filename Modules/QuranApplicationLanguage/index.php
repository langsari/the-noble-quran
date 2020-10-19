<?php
include 'Template.php';
include 'LangsCatalog.php';
 $template = new Template;


 $alhadit = array('Al-Hadith', 'ฮาดิซ', 'Hadis');
 $template->assign('navbarBrand', 'Quran.com');
 $template->assign('Al-Hadith', $alhadit[1]);
 $template->assign('Al-Quran', 'อัลกุรอ่าน');
 $template->assign('loop', $c);
 $template->render('index');
?>
