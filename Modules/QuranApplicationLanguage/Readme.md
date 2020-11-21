This module is for translating application interface 

**What I've done?

I used Symfony translation component as a function for translationg message in a website
I stored my translation configuration in config/config.php
if you run config.php with localhost you'll see the translation work which i changed the word "Hello" into "Selamat"

-------------------------------------------------------------------------------------------------------------------------------------------

**How it work?

//First to import 2 components are

1. use Symfony\Component\Translation\Translator;
2. use Symfony\Component\Translation\Loader\ArrayLoader;

//Second to set-up the locale ( Recomended ISO code ) here I've set-up for malay language as my_MY
Here's my code for the locale setting up

$translator = new Translator('my_MY');

//Third to use addLoader fucntion for load message catalogs 
Here's my code

$translator->addLoader('array', new ArrayLoader());

I used array as massege catalogs loader but there are still the other loaders can be used as well like Yaml Json and so on

//Fourth to add message I want to translate by using addResource function

$translator->addResource('array', ['Hello'=>'Selamat'],'my_MY');

My code here I translated from the word "Hello" into "Selamat" 

//And the last try to print it out

var_dump($translator->trans('Hello'));

echo $translator->trans('Hello');

I print the word "Hello" but it turn to the word selamat automatically by matching to my translation resource 

-------------------------------------------------------------------------------------------------------------------------------------------

**What's the next?

1. I want to move to more advanced step by using it with a real website together with twig template engine that I've already created
   index.php 
2. I'll use saperate loader like Yaml or Json 
3. Creat Routes for different languages by using symfony route
-------------------------------------------------------------------------------------------------------------------------------------------
kk