<!DOCTYPE html>
<html>
<head>
<title>Quran.com</title>
</head>
<body>
    <?php
    include ('M:\University Works\Modern Language\the-noble-quran\vendor\autoload.php');

    $client = new \Goutte\Client();
    $scrapping = $client->request('GET', 'https://quran.com/?local=en');
    $fullhtmlpage = $scrapping->html();
    ?>
</body>
</html>