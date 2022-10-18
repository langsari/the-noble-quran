@extends('quran.navbar')



<br>
<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <title>Tajweed</title>

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Mitr:wght@300&display=swap');
        .tajweed{
            text-align:center;
            color:#008997;
            margin-top:20px;
            font-family: 'Archivo Black', sans-serif;
            font-size:100px;
            font-size:150px;
        }
        .sakinah{
            margin-left:70px;
            margin-top:25px;
            font-family: 'Mitr', sans-serif;
            font-size:50px;
            color:#008997;
            
        }
        .memsakinah{
            margin-left:70px;
            margin-top:40px;
            font-family: 'Mitr', sans-serif;
            font-size:50px;
            color:#008997;

        }
        .hukum{
            margin-left:100px;
            margin-top:25px;
            font-family: 'Mitr', sans-serif;
            font-size:25px;
            color:#7B7D7D;

        }
        .expain{
            margin-left:120px;
            font-family: 'Mitr', sans-serif;
            font-size:17px;

        }
        .ayat{
            margin-left:250px;
            margin-top:20px;
            font-size:20px;
            color:#008997;

        }

    </style>
</head>


<body>
    <h1 class="tajweed">Tajweed</h1>
<h2 class="sakinah">นูนซากีนะห์</h2>
    @foreach($tajweed as $row)
    <div>
    <h5 class="hukum">{{$row->name}} </h5>
<p class="expain"> {{$row->audio}}</p>
<p class="ayat"> {{$row->ayat}}</p>
<h2 class="memsakinah"> {{$row->hukum}}</h2>
</div>@endforeach
<br>
<br>
</body>
</html>





































<!--  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <Style>
       
       html{
        background-color:#008997;
       }
        .taj{
            text-align:center;
            color:#008997;
        }
        .Ayat{
            text-align:center;
            margin-top:30px;

        }
        .Nun{
            margin-left:200px;
            margin-top: 50px;
        }
        h5{
            margin-left:20;
            font-family: 'Noto Sans Thai', sans-serif;
            
        }
        p{
            margin-left:15px;
        }

    </Style>

</head>
<body>
    <h1 class="taj"> Tajweed</h1>

<div class="Nun">
<h2> 1. นูนซากีนะห์</h2>
<p> อักษรนูนตาย หรือตันวีน ไปพบอักษรในภาษาอาหรับทั้งหมด จะเกิดบรรดาฮุดม 5 ฮุกม </p>
</div>

<div>
    <h5> 1.1 อิซฮาร ฮากีกีย์ </h5>
<p>  คือ การอ่านที่ชัดเจน หมายถึง การอ่านที่ชัดเจนโดยที่ไม่หน่วงเสียง อ่านชัดอักษรนูนตาย สระซ้อนสอง และชัดอักษรอิซฮารทั้งหมดตัวอย่าง เช่น </p>
<p> ข้อสังเกต ได้แก่อักษรนูนตาย หรือตันวีน ไปพบอักษรของอักษรอิซฮาร คือ هـ ء خ ع غ ح ตัวอย่างคือ </p>
<p class="Ayat"> ( وَيَنْئونَ مَنْ ءَا منَ كُلُّءَامَنَ فَسَيُنْغِضُوْنِ مِنْغِلٍّ عَزِيْزٌ غَفُوْرٌ يَنْحِتُوْنَ<mark>منْ حلُِّهِمْ</mark> عَلِيْمٌ حَكِيْمٌ )</p>
</div>
<br>
<br>

<div>
    <h5> 1.2 อิดฆอมมะอัลฆุนนะห์ </h5>
<p> คือ การอ่านเข้ากัน (กล้ำกัน) พร้อมหน่วงเสียง </p>
<p> ข้อสังเกต ได้แก่อักษรนูนตาย หรือตันวีน ไปพบ 4 อักษร คือ ي و م ن ตัวอย่างคือ </p>
<p class="Ayat"> ( مَّنْ يَقُوْلُ كُلُّ يَجْرٍي<mark>مِنْ وَلِيٍّ </mark> رَحِيْمٌ وَ دُوْدٌ مِنْ مَّرقَدِنَا عذاب مُقِيْمٌ مِنْ نِعْمَةٍ يَومَئِدٍ نَّاعِمَةٌ)</p>
</div>
<br>
<br>

<div>
    <h5> 1.3 อิดฆอมบิลาฆุนนะห์ </h5>
<p> คือ การอ่านเข้ากัน (กล้ำกัน) โดยที่ไม่หน่วงเสียง </p>
<p> ข้อสังเกต ได้แก่อักษรนูนตาย หรือตันวีน ไปพบ 2 อักษร คือ ل ر ตัวอย่างคือ </p>
<p class="Ayat"> (  وَيْلٌ لِكُلِّ هُمَزَ وَيْلٌ لِكُلِّ هُمَزَ<mark>ةٍ لُمَزَةٍ</mark> )</p>
</div> 
<br>
<br>

<div>
    <h5> 1.4 อิคฟาอ ฮากีกีย์ </h5> 
<p> คือ การอ่านก้ำกึ่ง หรืออ่านซ่อนเสียง หรือการอ่านครึ่งของนูน หรือตันวีน และไปพบกับอักษรอิคฟาอ์พร้อมกับหน่วงเสียงเข้ากัน (กล้ำกัน) โดยไม่หน่วงเสียง </p>
<p> ข้อสังเกต ได้แก่อักษรนูนตาย หรือตันวีน ไปพบ 15 อักษร คือ ت ث ج د ذ ز س ش ص ض ط ظ ف ق ك ตัวอย่างคือ </p>
<p class="Ayat">( وَلاَ تَنْقُضُوْ<mark> مِنْ قَبْلِكُمْ</mark>كُلُّ شَيْئٍ قَدِيْر يَنْكُثُوْنَ مِنْ كُلِّ أَمْرٍ إِنَّ عَادًا كَفَرُوا )</p>
</div>
<br>
<br>

<div>
    <h5> 1.5 อิกลาบ </h5>
<p> คือ การอ่านเปลี่ยนเสียงพร้อมทั้งหน่วงเสียง หมายถึง การอ่านหน่วงเสียงของอักษรนูนตาย หรือ ตันวีน ให้เป็นเสียงอักษรมีม (ห้ามปิดปากมิดชิดระหว่างออกเสียงมีม) แล้วไปพบกับอักษร บา พร้อมกับหน่วงเสียง </p>
<p> ข้อสังเกต ได้แก่อักษรนูนตาย หรือตันวีน ไปพบ 1 อักษร คือ ب ตัวอย่างคือ </p>
<p class="Ayat">( وَأَمّا<mark> مَنْ بَخِلَ</mark>وَا سْتَغْنَى )</p>
</div>
<br>
<br>

<h2> 2. มีมซากีนะห์ </h2>
<p> อักษรมีมตาย จะเกิดบะะดาฮุกม 5 ฮุกม </p>

<div>
    <h5> 2.1 อิดฆอมมุตะมาษีลัยนมะอัลฆุนนะห์ซอฆีร </h5>
<p> การอ่านเข้ากันพร้อมหน่วงเสียง โดยเฉพาะอักษรมีม </p>
<p> ข้อสังเกต ได้แก่อักษรมีมตาย พบกับมีม ที่มีสระ ตัวอย่าง  </p>
<p class="Ayat"> ( قَالُوا طَائِرُ<mark>كُمْ مَعَكُمْ</mark> )</p>
</div>
<br>
<br>

<div>
    <h5> 2.2 อิคฟาอซาฟาวีย์ </h5>
<p> การอ่านซ่อนเสียงอักษรริมฝีปาก </p>
<p> ข้อสังเกต ได้เเก่อักษรมีมตาย พบกับตัวอักษรบา พร้อมหน่วงเสียง </p>
<p class="Ayat"> ( فَكَذَّبُوهُ فَعَقَرُوهَا فَدَمْدَمَ عَلَيْهِمْ<mark> رَبُّهُمْ بِذَنْبِهِمْ</mark> بِذَنْبِهِمْ فَسَوَّاهَا)</p>
</div>
<br>
<br>

<div>
    <h5> 2.3 อิซฮารซาฟาวีย์อะซัด </h5>
<p> การอ่านซัดที่อักษรริมฝีปาก และเน้นเสียง </p>
<p> ข้อสังเกต ได้เเก่อักษรมีมตาย พบกับ 2 ตัวอักษร คือ อักษร و กับ ف </p>
<p class="Ayat"> (لَكُمْ دِيْنَكُمْ وَ لِيَّدِيْن <mark> هُمْ فِيْهَا</mark> خَلدُون)</p>
</div>
<br>
<br>

<div>
    <h5> 2.4 อิซฮัรญาอิซ </h5>
<p> การอนุญาตให้ออกเสียงให้ชัดเจน ฮุกมนี้อนุญาตให้ตั้งชื่อใหม่ และอนุญาตให้อ่านออกเสียงชัดเจน ห้ามมิให้อ่านเป็นอิดฆอม (อ่านเข้ากัน) </p>
<p> ข้อสังเกต ได้แก่อักษรมีมตาย พบกับอักษรยาอ.  </p>
<p class="Ayat">( <mark>أَلَمْ يَجِدْ</mark> كَ يَتِيمًا فَآوَىٰ)</p>
</div>
<br>
<br>

<div>
    <h5> 2.5 อิซฮัรซาฟาวีย์ </h5>
<p> การอ่านออกเสียงที่ชัดเจนที่ริมฝีปาก โดยไม่หน่วงเสียง </p>
<p> ข้อสังเกต ได้แก่อักษรมีมตาย พบกับอักษรใดๆ ที่นอกเหนือจากอักษร  م ب و ف </p>
<p class="Ayat">( صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ<mark> عَلَيْهِمْ وَ</mark>لَا الضَّالِّينَ )</p>
</div>
<br>
<br>



</body>
</html>

-->