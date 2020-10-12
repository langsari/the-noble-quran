<!DOCTYPE html>
<html>
<head>
<title>Quran.com</title>
</head>
<body>
    <?php
    //Here is webscraping code section 
        include('M:\University Works\Modern Language\the-noble-quran\src\simple_html_dom.php');
        //Requests via url
        $quranPage = file_get_html('https://quran.com/?local=en');
        
        //Navbar Scrp
        $nav = $quranPage->find('div[class="container-fluid"]',0);
        $nav_array = $nav->find('ul[class="hidden-xs hidden-sm nav navbar-nav navbar-right"]');
        //Iterate over navbar for finding the needed elements inside nav
        for($i = 0; $i < sizeof($nav_array); $i++){
            echo $nav_array[$i];
            echo "<br>";
        };
    ?>
</body>
</html>