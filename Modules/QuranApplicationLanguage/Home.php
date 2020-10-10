<!DOCTYPE html>
<html>
<head>
<title>Quran.com</title>
</head>
<body>
    <?php
        $html = file_get_contents('https://quran.com/?local=en'); //get the html returned from the following url

        $quran_doc = new DOMDocument();

        libxml_use_internal_errors(TRUE); //disable libxml errors

        if(!empty($html)){ //if any html is actually returned

            $quran_doc->loadHTML($html);
            libxml_clear_errors(); //remove errors for yucky html
            
            $quran_xpath = new DOMXPath($quran_doc);

            //get all the h2's with an id
            $quran_header = $quran_xpath->query('//div[@class="container-fluid"]');

            if($quran_header->length > 0){
                foreach($quran_header as $row){
                    echo $row->nodeValue . "<a/>";
                }
            }
        }
    ?>
</body>
</html>