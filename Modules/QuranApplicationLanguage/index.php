<?php
require_once("../../vendor/autoload.php");

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__. '/template');
$twig = new Environment($loader); 

echo $twig->render("index.html.twig", ['Title'=>'Quran.com']);
?>
