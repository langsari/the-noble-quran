@extends('layouts.app');


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
                <div class= "sen sen-a" id="sen-1-a" lang="ar"><span class="span-a">0 &nbsp;</span>{{ $s2ayah0 }}</div><div class= "sen sen-e"><span class="span-e">0 &nbsp;</span>In the name of God, the Gracious, the Merciful.</div>
            </div>
            <div class="row" id="row-2">
                <div class= "sen sen-a" id="sen-2-a" lang="ar"><span class="span-a">١ &nbsp;</span>{{ $s2ayah1 }}</div><div class= "sen sen-e"><span class="span-e">1 &nbsp;</span>Praise be to God, Lord of the Worlds.</div>
            </div>
            <div class="row" id="row-3">
                <div class= "sen sen-a" id="sen-3-a" lang="ar"><span class="span-a">٢ &nbsp;</span>{{ $s2ayah2 }}</div><div class= "sen sen-e"><span class="span-e">2 &nbsp;</span>The Most Gracious, the Most Merciful.</div>
            </div>
            <div class="row" id="row-4">
                <div class= "sen sen-a" id="sen-4-a" lang="ar"><span class="span-a">٣ &nbsp;</span>{{ $s2ayah3 }}</div><div class= "sen sen-e"><span class="span-e">3 &nbsp;</span>Master of the Day of Judgment.</div>
            </div>
            <div class="row" id="row-5">
                <div class= "sen sen-a" id="sen-5-a" lang="ar"><span class="span-a">٤ &nbsp;</span>{{ $s2ayah4 }}</div><div class= "sen sen-e"><span class="span-e">4 &nbsp;</span>It is You we worship, and upon You we call for help.</div>
            </div>
            <div class="row" id="row-6">
                <div class= "sen sen-a" id="sen-6-a" lang="ar"><span class="span-a">٥ &nbsp;</span>{{ $s2ayah5 }}</div><div class= "sen sen-e"><span class="span-e">5 &nbsp;</span>Guide us to the straight path.</div>
            </div>
            <div class="row" id="row-7">
                <div class= "sen sen-a" id="sen-7-a" lang="ar"><span class="span-a">٦ &nbsp;</span>{{ $s2ayah6 }}</div><div class= "sen sen-e"><span class="span-e">6 &nbsp;</span>The path of those You have blessed, not of those against whom there is anger, nor of those who are misguided.</div>
            </div>
            <div class="row" id="row-1">
                <div class= "sen sen-a" id="sen-1-a" lang="ar"><span class="span-a">٧ &nbsp;</span>{{ $s2ayah7 }}</div><div class= "sen sen-e"><span class="span-e">7 &nbsp;</span>In the name of God, the Gracious, the Merciful.</div>
            </div>
            <div class="row" id="row-2">
                <div class= "sen sen-a" id="sen-2-a" lang="ar"><span class="span-a">٨ &nbsp;</span>{{ $s2ayah8 }}</div><div class= "sen sen-e"><span class="span-e">8 &nbsp;</span>Praise be to God, Lord of the Worlds.</div>
            </div>
            <div class="row" id="row-3">
                <div class= "sen sen-a" id="sen-3-a" lang="ar"><span class="span-a">٩ &nbsp;</span>{{ $s2ayah9 }}</div><div class= "sen sen-e"><span class="span-e">9 &nbsp;</span>The Most Gracious, the Most Merciful.</div>
            </div>
            <div class="row" id="row-4">
                <div class= "sen sen-a" id="sen-4-a" lang="ar"><span class="span-a">١٠ &nbsp;</span>{{ $s2ayah10 }}</div><div class= "sen sen-e"><span class="span-e">10 &nbsp;</span>Master of the Day of Judgment.</div>
            </div>
            <div class="row" id="row-5">
                <div class= "sen sen-a" id="sen-5-a" lang="ar"><span class="span-a">١١   &nbsp;</span>{{ $s2ayah11 }}</div><div class= "sen sen-e"><span class="span-e">11 &nbsp;</span>It is You we worship, and upon You we call for help.</div>
            </div>
            <div class="row" id="row-6">
                <div class= "sen sen-a" id="sen-6-a" lang="ar"><span class="span-a">١٢   &nbsp;</span>{{ $s2ayah12 }}</div><div class= "sen sen-e"><span class="span-e">12 &nbsp;</span>Guide us to the straight path.</div>
            </div>
            <div class="row" id="row-7">
                <div class= "sen sen-a" id="sen-7-a" lang="ar"><span class="span-a">١٣   &nbsp;</span>{{ $s2ayah13 }}</div><div class= "sen sen-e"><span class="span-e">13 &nbsp;</span>The path of those You have blessed, not of those against whom there is anger, nor of those who are misguided.</div>
            </div>
            <div class="row" id="row-1">
                <div class= "sen sen-a" id="sen-1-a" lang="ar"><span class="span-a">١٤   &nbsp;</span>{{ $s2ayah14 }}</div><div class= "sen sen-e"><span class="span-e">14 &nbsp;</span>In the name of God, the Gracious, the Merciful.</div>
            </div>
            <div class="row" id="row-2">
                <div class= "sen sen-a" id="sen-2-a" lang="ar"><span class="span-a">١٥   &nbsp;</span>{{ $s2ayah15 }}</div><div class= "sen sen-e"><span class="span-e">15 &nbsp;</span>Praise be to God, Lord of the Worlds.</div>
            </div>
            <div class="row" id="row-3">
                <div class= "sen sen-a" id="sen-3-a" lang="ar"><span class="span-a">١٦   &nbsp;</span>{{ $s2ayah16 }}</div><div class= "sen sen-e"><span class="span-e">16 &nbsp;</span>The Most Gracious, the Most Merciful.</div>
            </div>
            <div class="row" id="row-4">
                <div class= "sen sen-a" id="sen-4-a" lang="ar"><span class="span-a">١٧   &nbsp;</span>{{ $s2ayah17 }}</div><div class= "sen sen-e"><span class="span-e">17 &nbsp;</span>Master of the Day of Judgment.</div>
            </div>
            <div class="row" id="row-5">
                <div class= "sen sen-a" id="sen-5-a" lang="ar"><span class="span-a">١٨   &nbsp;</span>{{ $s2ayah18 }}</div><div class= "sen sen-e"><span class="span-e">18 &nbsp;</span>It is You we worship, and upon You we call for help.</div>
            </div>
            <div class="row" id="row-6">
                <div class= "sen sen-a" id="sen-6-a" lang="ar"><span class="span-a">١٩   &nbsp;</span>{{ $s2ayah19 }}</div><div class= "sen sen-e"><span class="span-e">19 &nbsp;</span>Guide us to the straight path.</div>
            </div>
            <div class="row" id="row-7">
                <div class= "sen sen-a" id="sen-7-a" lang="ar"><span class="span-a">٢٠   &nbsp;</span>{{ $s2ayah20 }}</div><div class= "sen sen-e"><span class="span-e">20 &nbsp;</span>The path of those You have blessed, not of those against whom there is anger, nor of those who are misguided.</div>
            </div>
            <div class="row" id="row-1">
                <div class= "sen sen-a" id="sen-1-a" lang="ar"><span class="span-a">٢١   &nbsp;</span>{{ $s2ayah21 }}</div><div class= "sen sen-e"><span class="span-e">21 &nbsp;</span>In the name of God, the Gracious, the Merciful.</div>
            </div>
            <div class="row" id="row-2">
                <div class= "sen sen-a" id="sen-2-a" lang="ar"><span class="span-a">٢٢   &nbsp;</span>{{ $s2ayah22 }}</div><div class= "sen sen-e"><span class="span-e">22 &nbsp;</span>Praise be to God, Lord of the Worlds.</div>
            </div>
            <div class="row" id="row-3">
                <div class= "sen sen-a" id="sen-3-a" lang="ar"><span class="span-a">٢٣   &nbsp;</span>{{ $s2ayah23 }}</div><div class= "sen sen-e"><span class="span-e">23 &nbsp;</span>The Most Gracious, the Most Merciful.</div>
            </div>
            <div class="row" id="row-4">
                <div class= "sen sen-a" id="sen-4-a" lang="ar"><span class="span-a">٢٤    &nbsp;</span>{{ $s2ayah24 }}</div><div class= "sen sen-e"><span class="span-e">24 &nbsp;</span>Master of the Day of Judgment.</div>
            </div>
            <div class="row" id="row-5">
                <div class= "sen sen-a" id="sen-5-a" lang="ar"><span class="span-a">٢٥   &nbsp;</span>{{ $s2ayah25 }}</div><div class= "sen sen-e"><span class="span-e">25 &nbsp;</span>It is You we worship, and upon You we call for help.</div>
            </div>
            <div class="row" id="row-6">
                <div class= "sen sen-a" id="sen-6-a" lang="ar"><span class="span-a">٢٦   &nbsp;</span>{{ $s2ayah26 }}</div><div class= "sen sen-e"><span class="span-e">26 &nbsp;</span>Guide us to the straight path.</div>
            </div>
            <div class="row" id="row-7">
                <div class= "sen sen-a" id="sen-7-a" lang="ar"><span class="span-a">٢٧   &nbsp;</span>{{ $s2ayah27 }}</div><div class= "sen sen-e"><span class="span-e">27 &nbsp;</span>The path of those You have blessed, not of those against whom there is anger, nor of those who are misguided.</div>
            </div>
            <div class="row" id="row-1">
                <div class= "sen sen-a" id="sen-1-a" lang="ar"><span class="span-a">٢٨   &nbsp;</span>{{ $s2ayah28 }}</div><div class= "sen sen-e"><span class="span-e">28 &nbsp;</span>In the name of God, the Gracious, the Merciful.</div>
            </div>
            <div class="row" id="row-2">
                <div class= "sen sen-a" id="sen-2-a" lang="ar"><span class="span-a">٢٩   &nbsp;</span>{{ $s2ayah29 }}</div><div class= "sen sen-e"><span class="span-e">29 &nbsp;</span>Praise be to God, Lord of the Worlds.</div>
            </div>
            <div class="row" id="row-3">
                <div class= "sen sen-a" id="sen-3-a" lang="ar"><span class="span-a">٣٠   &nbsp;</span>{{ $s2ayah30 }}</div><div class= "sen sen-e"><span class="span-e">30 &nbsp;</span>The Most Gracious, the Most Merciful.</div>
            </div>
            

        </div> <!-- end of text -->

        <div class="bottom-bar"></div>



    </div>  <!-- content end -->

    @endsection

</html>