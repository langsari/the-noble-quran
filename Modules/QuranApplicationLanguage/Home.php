<?php
require 'vendor/autoload.php';
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\MessageSelector;
?>

<?php
$translator = new Translator('fr_FR', new MessageSelector());
?>