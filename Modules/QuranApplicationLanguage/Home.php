<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
    <?php
    use Symfony\Component\Translation\Translator;
    use Symfony\Component\Translation\MessageSelector;
    ?>
    <?php
    $translator = new Translator('fr_FR', new MessageSelector());
    ?>
    <?php
    $translator->addResource('array', array(
        'Hello World!' => 'Bonjour',
    ), 'fr_FR');
    ?>
    <?php
    echo "Hello World!";
    ?>
</body>
</html>