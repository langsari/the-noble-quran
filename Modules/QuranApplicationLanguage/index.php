<?php
include 'Template.php';
include 'LangsCatalog.php';
 $template = new Template;

 //Language Changer
$c = 1;

 //Navbar
 $template->assign('Al-Hadith', $alhadit[$c]);
 $template->assign('Al-Quran', $alquran[$c]);
 $template->assign('As-Sunah', $assunnah[$c]);
 $template->assign('Languages', $languages[$c]);
        //Dropdown
        $template->assign('English', $eng[$c]);
        $template->assign('Thai', $th[$c]);
        $template->assign('Malay', $ml[$c]);
 $template->render('index');
?>
