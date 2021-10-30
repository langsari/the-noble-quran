@extends('layouts.navbar');


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Quran in English and Arabic, with Recitations. القرآن الكريم with Easy Translation.</title>
    <meta name="description" content="Quran with English translation, and beautiful recitations. القرآن الكريم with Clear and Pure Translation. Good learning tool. Mobile-friendly, easy to use, flexible interface.">    

    <meta name="msvalidate.01" content="EF4D222644FDC2C4123C02CDCEC8F519" />
    <meta name="keywords" content="quran arabic english, clearquran, quran in english, quran english translation, koran, quran, quran recitations.">
    <meta name="author" content="Talal Itani">
    <meta name="robots" content="index, follow">
    <meta name="copyright" content="Talal Itani">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">

    <meta name="p:domain_verify" content="89dff068bdea0ecb8d0fbb015e4bd564"/> <!-- For Pinterest Verification -->

    <link type='text/css' rel='stylesheet' href='https://d33wubrfki0l68.cloudfront.net/bundles/e9dd5551ef13b4189552368b47b3245a19f6f239.css'/>
    

    <!-- WebFonts -->
    <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet" type="text/css"/>

    @section('content')

    <div class="content">


        <div id="title-bar" >
            <h1 class="title title-E">
                The noble Quran
            </h1>
            

        </div> <!-- end of title bar -->

        <div id="title-bar-b" >
            al-Fatihah
        </div>

        <div class="text text-columns" id="text-block">
            <div id="chapter-info" style="display:none" chapter="1"></div>

            <div id="row-xxx" class="row row-double" style="display:none">
                <div class= "sen sen-a modern-font" id="sen-xxx-a" lang="ar" style="direction:rtl"><span class="span-a">arabic-number-xxx</span>arabic-text-xxx</div><div class= "sen sen-e" lang="enxxx" style="direction:ltr"><span class="span-e">english-number-xxx</span>english-text-xxx</div>
            </div>

            <div class="row" id="row-1">
                <div class= "sen sen-a" id="sen-1-a" lang="ar"><span class="span-a">١ &nbsp;</span>{{ $ayah1 }}</div><div class= "sen sen-e"><span class="span-e">1 &nbsp;</span>In the name of God, the Gracious, the Merciful.</div>
            </div>
            <div class="row" id="row-2">
                <div class= "sen sen-a" id="sen-2-a" lang="ar"><span class="span-a">٢ &nbsp;</span>{{ $ayah2 }}</div><div class= "sen sen-e"><span class="span-e">2 &nbsp;</span>Praise be to God, Lord of the Worlds.</div>
            </div>
            <div class="row" id="row-3">
                <div class= "sen sen-a" id="sen-3-a" lang="ar"><span class="span-a">٣ &nbsp;</span>{{ $ayah3 }}</div><div class= "sen sen-e"><span class="span-e">3 &nbsp;</span>The Most Gracious, the Most Merciful.</div>
            </div>
            <div class="row" id="row-4">
                <div class= "sen sen-a" id="sen-4-a" lang="ar"><span class="span-a">٤ &nbsp;</span>{{ $ayah4 }}</div><div class= "sen sen-e"><span class="span-e">4 &nbsp;</span>Master of the Day of Judgment.</div>
            </div>
            <div class="row" id="row-5">
                <div class= "sen sen-a" id="sen-5-a" lang="ar"><span class="span-a">٥ &nbsp;</span>{{ $ayah5 }}</div><div class= "sen sen-e"><span class="span-e">5 &nbsp;</span>It is You we worship, and upon You we call for help.</div>
            </div>
            <div class="row" id="row-6">
                <div class= "sen sen-a" id="sen-6-a" lang="ar"><span class="span-a">٦ &nbsp;</span>{{ $ayah6 }}</div><div class= "sen sen-e"><span class="span-e">6 &nbsp;</span>Guide us to the straight path.</div>
            </div>
            <div class="row" id="row-7">
                <div class= "sen sen-a" id="sen-7-a" lang="ar"><span class="span-a">٧ &nbsp;</span>{{ $ayah7 }}</div><div class= "sen sen-e"><span class="span-e">7 &nbsp;</span>The path of those You have blessed, not of those against whom there is anger, nor of those who are misguided.</div>
            </div>

        </div> <!-- end of text -->

        <div class="bottom-bar"></div>



    </div>  <!-- content end -->

    @endsection

</html>