<?php
include 'Template.php';
 $template = new Template;

 $template->assign('navbarBrand', 'Quran.com');

 $template->render('index')
?>