<?php
require_once("../../../vendor/autoload.php");
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

$translator = new Translator('my_MY');

$translator->addLoader('array', new ArrayLoader());
$translator->addResource('array', ['Hello'=>'Selamat'],'my_MY');

var_dump($translator->trans('Hello'));

echo $translator->trans('Hello')
?>