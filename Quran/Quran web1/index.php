<?php
//$url = "http://api.alquran.cloud/v1/edition";
//$ch = curl_init();
// Will return the response, if false it print the response
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
//curl_setopt($ch, CURLOPT_URL,$url);
// Execute
//$result=curl_exec($ch);
// Closing
//curl_close($ch);

// Will dump a beauty json :3
//print_r(json_decode($result, true));
?>

<!DOCTYPE html> 
<html>
<head>
    <title>الْقُرْآن الْكَرِيْم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" 
    crossorigin="anonymous">
</head>
<body>

     <div class="row" style="margin-top: 60px;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
             <h1 style="text-align: center;margin-bottom: : 60px;"> بِسْمِ ٱللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ </h1>
             <div class="row">
                <?php for ($i=1; $i < 31; $i++) { ?>
                    <div class="col-md-2 btn btn-primary" style="margin: 20px;"><a href="http://localhost/Quran/juz.php?id=<?php echo $i; ?> style="color: #fff;text-decoration: none;">Juz  <?php echo $i; ?></a></div>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-2"></div>
     </div>

</body>
</html>   