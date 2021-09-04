<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css " rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$url = 'http://localhost/Quran/juz.php?id='.$_GET['id'].'/ar.asad';
for ($i=0; $i < 31; $i++) { ?>
                
    <!--quran section-->
    <section class="quran">
        <h3>القرآن الكريم</h3>
        <div class="container">
            <div class="surahasContainer">
            </div>

        </div>

    </section>
    <!--End of Quran sectionn -->
<?php } ?>

    <!-- Pop UP-->
    <div class="surah-popup">
        <div class="close-popup">
            <i class="fas fa-times">X</i>
        </div>
        <div class="ayat">
        </div>
    </div>
    <!-- Js File-->
    <script src="script.js"></script>
</body>


<?php
if (!empty($_GET['id'])) {
    $url = 'http://api.alquran.cloud/v1/juz/'.$_GET['id'].'/ar.asad';
    $ch = curl_init();
    // Will return the response, if false it print the response
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Set the url
    curl_setopt($ch, CURLOPT_URL,$url);
    // Execute
    $result=curl_exec($ch);
    // Closing
    curl_close($ch);

    // Will dump a beauty json :3
    $data = json_decode($result, true);
    if (!empty($data) && $data['status'] == 'OK') {
        print_r($data['data']['surahs']);
    }
} ?>