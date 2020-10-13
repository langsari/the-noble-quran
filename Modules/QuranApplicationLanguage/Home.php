<!DOCTYPE html>
<html>
<head>
<title>Quran.com</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class='container-fliud bg-dark'>
        <div style='color:red'>
            <?php
                //import simple_html_dom_parser
                include('M:\University Works\Modern Language\the-noble-quran\src\simple_html_dom.php');

                //Requests via url
                $quranPage = file_get_html('https://quran.com/?local=en');

                $hello = 'hello';
                
                //Navbar Scrp
                $nav = $quranPage->find('div[class="container-fluid"]',0);
                $nav_array = $nav->find('ul[class="hidden-xs hidden-sm nav navbar-nav navbar-right"]');
                //Iterate over navbar for finding the needed elements inside nav
                for($i = 0; $i < sizeof($nav_array); $i++){
                    echo $nav_array[$i];
                    echo $hello;
                    echo "<br>";
                };
            ?>
        </div>
    </div>
</body>
</html>