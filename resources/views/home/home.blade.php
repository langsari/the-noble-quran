@extends('layouts.app');

@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!DOCTYPE html>

<html>
    <head>
        <title>Quran</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <link rel="stylesheet" href="css.home.css">
    </body>


    <!---<a href="something" class="button3">It's getting old</a>-->
    <main>
        <div class="container">
            <hr style="height:2px; border-width:0; color: gray;background-color: gray;"><br>


            <div class="row text-center">
                <!--01 Surah Al-Fatihah------------------------------------------------------------------------------------------------>
                <div class="col-sm"> 
                    <a href="text"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                1
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْفَاتِحَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Fatihah</span>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--02 Surah Al-Baqarah------------------------------------------------------------------------------------------------>
                <div class="col-sm"> 
                    <a href="2.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                2
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْبَقَرَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Baqarah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--03 Surah Ali 'Imran------------------------------------------------------------------------------------------------>
                <div class="col-sm"> 
                    <a href="3.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                3
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">آلِ عِمْرَان</div>
                                    <div class="eng-name">
                                        <span><br> Ali 'Imran</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--04 Surah An-Nisa--------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="4.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                4
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلنِّسَاء</div>
                                    <div class="eng-name">
                                        <span><br> An-Nisa</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
               <!--05 Surah Al-Ma'idah------------------------------------------------------------------------------------------------->
               <div class="col-sm"> 
                    <a href="5.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                5
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمَائِدَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Ma'idah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--06 Surah Al-An'am-------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="6.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                6
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْأَنْعَام</div>
                                    <div class="eng-name">
                                        <span><br> Al-An'am</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--07 Surah Al-A'raf-------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="7.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                7
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْأَعْرَاف</div>
                                    <div class="eng-name">
                                        <span><br> Al-A'raf</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--08 Surah Al-Anfal-------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="8.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                8
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْأَنْفَال</div>
                                    <div class="eng-name">
                                        <span><br> Al-Anfal</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--09 Surah At-Tawbah------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="9.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                9
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلتَّوْبَة</div>
                                    <div class="eng-name">
                                        <span><br> At-Tawbah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--10 Surah Yunus------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="10.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                10
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">يُونُس</div>
                                    <div class="eng-name">
                                        <span><br> Yunus</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--11 Surah Hud------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="11.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                11
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">هُود</div>
                                    <div class="eng-name">
                                        <span><br> Hud</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--12 Surah Yusuf------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="12.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                12
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">يُوسُف</div>
                                    <div class="eng-name">
                                        <span><br> Yusuf</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--13 Surah Ar-Ra'd------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="13.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                13
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلرَّعْد</div>
                                    <div class="eng-name">
                                        <span><br> Ar-Ra'd</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--14 Surah Ibrahim------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="14.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                14
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">إِبْرَاهِيم</div>
                                    <div class="eng-name">
                                        <span><br> Ibrahim</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--15 Surah Al-Hijr------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="15.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                15
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْحِجْر</div>
                                    <div class="eng-name">
                                        <span><br> Al-Hijr</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--16 Surah An-Nahl------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="16.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                16
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلنَّحْل</div>
                                    <div class="eng-name">
                                        <span><br> An-Nahl</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--17 Surah Al-Isra------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="17.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                17
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْإِسْرَاء</div>
                                    <div class="eng-name">
                                        <span><br> Al-Isra</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--18 Surah Al-Kahf------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="18.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                18
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْكَهْف</div>
                                    <div class="eng-name">
                                        <span><br> Al-Kahf</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--19 Surah Maryam------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="19.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                19
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">مَرْيَم</div>
                                    <div class="eng-name">
                                        <span><br> Maryam</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--20 Surah Ta-Ha------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="20.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                20
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">طه</div>
                                    <div class="eng-name">
                                        <span><br> Ta-Ha</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--21 Surah Al-Anbiya------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="21.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                21
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْأَنْبِيَاء</div>
                                    <div class="eng-name">
                                        <span><br> Al-Anbiya</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--22 Surah Al-Hajj------------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="22.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                22
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْحَجّ</div>
                                    <div class="eng-name">
                                        <span><br> Al-Hajj</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--23 Surah Al-Muminun------------------------------------------------------------------------------------------------>
                <div class="col-sm"> 
                    <a href="23.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                23
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمُؤْمِنُون</div>
                                    <div class="eng-name">
                                        <span><br> Al-Muminun</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--24 Surah An-Nur------------------------------------------------------------------------------------------------>
                <div class="col-sm"> 
                    <a href="24.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                24
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلنُّور</div>
                                    <div class="eng-name">
                                        <span><br> Al-Nur</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--25 Surah Al-Furqan------------------------------------------------------------------------------------------------>
                <div class="col-sm"> 
                    <a href="25.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                25
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْفُرْقَان</div>
                                    <div class="eng-name">
                                        <span><br> Al-Furqan</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--26 Surah Ash-Shu'ara----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="26.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                26
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلشُّعَرَاء</div>
                                    <div class="eng-name">
                                        <span><br> Ash-Shu'ara</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--27 Surah An-Naml----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="27.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                27
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلنَّمْل</div>
                                    <div class="eng-name">
                                        <span><br> An-Naml</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--28 Surah Al-Qasas----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="28.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                28
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْقَصَص</div>
                                    <div class="eng-name">
                                        <span><br> Al-Qasas</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--29 Surah Al-Ankabut----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="29.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                29
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْعَنْكَبُوت</div>
                                    <div class="eng-name">
                                        <span><br> Al-Ankabut</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--30 Surah Ar-Rum----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="30.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                30
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلرُّوم</div>
                                    <div class="eng-name">
                                        <span><br> Ar-Rum</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--31 Surah Luqmaan----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="31.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                31
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">لُقْمَان</div>
                                    <div class="eng-name">
                                        <span><br> Luqmaan</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--32 Surah As-Sajdah----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="32.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                32
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلسَّجْدَة</div>
                                    <div class="eng-name">
                                        <span><br> As-Sajdah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--33 Surah Al-Ahzaab----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="33.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                33
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْأَحْزَاب</div>
                                    <div class="eng-name">
                                        <span><br> Al-Ahzaab</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--34 Surah Saba----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="34.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                34
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">سَبَأ</div>
                                    <div class="eng-name">
                                        <span><br> Saba</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--35 Surah Faatir----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="35.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                35
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">فَاطِر</div>
                                    <div class="eng-name">
                                        <span><br> Faatir</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--36 Surah Ya-Sin----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="36.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                36
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">يس</div>
                                    <div class="eng-name">
                                        <span><br> Ya-Sin</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--37 Surah As-Saaffaat----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="37.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                37
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلصَّافَّات</div>
                                    <div class="eng-name">
                                        <span><br> As-Saaffaat</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--38 Surah Saad----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="38.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                38
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ص</div>
                                    <div class="eng-name">
                                        <span><br> Saad</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--39 Surah Saad----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="39.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                39
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلزُّمَر</div>
                                    <div class="eng-name">
                                        <span><br> Az-Zumar</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--40 Ghafir----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="40.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                40
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">غَافِر</div>
                                    <div class="eng-name">
                                        <span><br> Ghafir</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--41 Fussilat----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="41.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                41
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">فُصِّلَت</div>
                                    <div class="eng-name">
                                        <span><br> Fussilat</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--42 Ash-Shooraa----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="42.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                42
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلشُّورىٰ</div>
                                    <div class="eng-name">
                                        <span><br> Ash-Shooraa</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--43 Az-Zukhruf----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="43.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                43
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْزُّخْرُف</div>
                                    <div class="eng-name">
                                        <span><br> Az-Zukhruf</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--44 Ad-Dukhaan----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="44.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                44
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلدُّخَان</div>
                                    <div class="eng-name">
                                        <span><br> Ad-Dukhaan</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--45 Al-Jaathiyah----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="45.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                45
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْجَاثِيَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Jaathiyah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--46 Al-Ahqaaf----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="46.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                46
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْأَحْقَاف</div>
                                    <div class="eng-name">
                                        <span><br> Al-Ahqaaf</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--47 Muhammad----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="47.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                47
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">مُحَمَّد</div>
                                    <div class="eng-name">
                                        <span><br> Muhammad</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--48 Al-Fath----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="48.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                48
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْفَتْح</div>
                                    <div class="eng-name">
                                        <span><br> Al-Fath</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--49 Al-Hujuraat----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="49.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                49
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْحُجُرَات</div>
                                    <div class="eng-name">
                                        <span><br> Al-Hujuraat</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--50 Qaaf----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="50.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                50
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ق</div>
                                    <div class="eng-name">
                                        <span><br> Qaaf</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--51 Adh-Dhaariyaat----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="51.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                51
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلذَّارِيَات</div>
                                    <div class="eng-name">
                                        <span><br> Adh-Dhaariyaat</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--52 At-Toor----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="52.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                52
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلطُّور</div>
                                    <div class="eng-name">
                                        <span><br> At-Toor</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--53 An-Najm----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="53.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                53
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلنَّجْم</div>
                                    <div class="eng-name">
                                        <span><br> An-Najm</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--54 Al-Qamar----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="54.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                54
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْقَمَر</div>
                                    <div class="eng-name">
                                        <span><br> Al-Qamar</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--55 Ar-Rahman----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="55.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                55
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلرَّحْمَٰن</div>
                                    <div class="eng-name">
                                        <span><br> Ar-Rahman</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--56 Al-Waqi'a----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="56.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                56
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْوَاقِعَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Waqi'a</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--57 Al-Hadeed----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="57.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                57
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْحَدِيد</div>
                                    <div class="eng-name">
                                        <span><br> Al-Hadeed</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--58 Al-Mujadila----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="58.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                58
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمُجَادِلَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Mujadila</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--59 Al-Hashr----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="59.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                59
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْحَشْر</div>
                                    <div class="eng-name">
                                        <span><br> Al-Hashr</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--60 Al-Mumtahanah----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="60.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                60
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمُمْتَحَنَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Mumtahanah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--61 As-Saff----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="61.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                61
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلصَّفّ</div>
                                    <div class="eng-name">
                                        <span><br> As-Saff</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--62 Al-Jumu'ah----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="62.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                62
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْجُمُعَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Jumu'ah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--63 Al-Munafiqoon----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="63.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                63
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمُنَافِقُون</div>
                                    <div class="eng-name">
                                        <span><br> Al-Munafiqoon</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--64 At-Taghabun----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="64.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                64
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلتَّغَابُن</div>
                                    <div class="eng-name">
                                        <span><br> At-Taghabun</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--65 At-Taghabun----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="65.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                65
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلطَّلَاق</div>
                                    <div class="eng-name">
                                        <span><br> At-Talaq</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--66 At-Taghabun----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="66.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                66
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلتَّحْرِيم</div>
                                    <div class="eng-name">
                                        <span><br> At-Tahreem</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--67 Al-Mulk----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="67.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                67
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمُلْك</div>
                                    <div class="eng-name">
                                        <span><br> Al-Mulk</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--68 Al-Qalam----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="68.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                68
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْقَلَم</div>
                                    <div class="eng-name">
                                        <span><br> Al-Qalam</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--69 Al-Haaqqa----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="69.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                69
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْقَلَم</div>
                                    <div class="eng-name">
                                        <span><br> Al-Haaqqa</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--70 Al-Ma'aarij----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="70.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                70
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمَعَارِج</div>
                                    <div class="eng-name">
                                        <span><br> Al-Ma'aarij</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--71 Nuh----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="71.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                71
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">نُوح</div>
                                    <div class="eng-name">
                                        <span><br> Nuh</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--72 Al-Jinn----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="72.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                72
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْجِنّ</div>
                                    <div class="eng-name">
                                        <span><br> Al-Jinn</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--73 Al-Muzzammil----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="73.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                73
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمُزَّمِّل</div>
                                    <div class="eng-name">
                                        <span><br> Al-Muzzammil</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--74 Al-Muddaththir----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="74.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                74
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمُدَّثِّر</div>
                                    <div class="eng-name">
                                        <span><br> Al-Muddaththir</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--75 Al-Qiyamah----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="75.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                75
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْقِيَامَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Qiyamah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--76 Al-Insaan----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="76.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                76
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْإِنْسَان</div>
                                    <div class="eng-name">
                                        <span><br> Al-Insaan</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--77 Al-Mursalaat----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="77.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                77
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمُرْسَلَات</div>
                                    <div class="eng-name">
                                        <span><br> Al-Mursalaat</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--78 An-Naba'----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="78.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                78
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلنَّبَأ</div>
                                    <div class="eng-name">
                                        <span><br> An-Naba'</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--79 An-Naazi'aat----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="79.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                79
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلنَّازِعَات</div>
                                    <div class="eng-name">
                                        <span><br> An-Naazi'aat</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--80 Abasa----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="80.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                80
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">عَبَسَ</div>
                                    <div class="eng-name">
                                        <span><br> Abasa</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--81 At-Takweer----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="81.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                81
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلتَّكْوِير</div>
                                    <div class="eng-name">
                                        <span><br> At-Takweer</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--82 	Al-Infitar----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="82.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                82
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْإِنْفِطَار</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Infitar</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--83 	Al-Mutaffifeen----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="83.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                83
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمُطَفِّفِين</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Mutaffifeen</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--84 	Al-Mutaffifeen----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="84.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                84
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْإِنْشِقَاق</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Inshiqaaq</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--85 	Al-Burooj----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="85.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                85
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْبُرُوج</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Burooj</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--86 At-Taariq----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="86.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                86
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلطَّارِق</div>
                                    <div class="eng-name">
                                        <span><br> 	At-Taariq</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--87 Al-A'la----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="87.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                87
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْأَعْلَىٰ</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-A'la</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--88 Al-Ghaashiyah----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="88.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                88
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْغَاشِيَة</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Ghaashiyah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--89 Al-Fajr----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="89.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                89
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْفَجْر</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Fajr</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--90 Al-Fajr----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="90.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                90
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْبَلَد</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Balad</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--91 Ash-Shams----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="91.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                91
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلشَّمْس</div>
                                    <div class="eng-name">
                                        <span><br> 	Ash-Shams</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--92 Al-Layl----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="92.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                92
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱللَّيْل</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Layl</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--93 Ad-Dhuha----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="93.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                93
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلضُّحَىٰ</div>
                                    <div class="eng-name">
                                        <span><br> 	Ad-Dhuha</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--94 Ash-Sharh----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="94.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                94
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلشَّرْح</div>
                                    <div class="eng-name">
                                        <span><br> 	Ash-Sharh</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--95 At-Tin----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="95.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                95
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلتِّين</div>
                                    <div class="eng-name">
                                        <span><br> 	At-Tin</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--96 Al-Alaq----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="96.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                96
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْعَلَق</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Alaq</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--97 Al-Qadr----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="97.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                97
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْقَدْر</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Qadr</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--98 Al-Bayyinahh----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="98.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                98
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْبَيِّنَة</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Bayyinahh</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--99 Az-Zalzalah----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="99.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                99
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلزَّلْزَلَة</div>
                                    <div class="eng-name">
                                        <span><br> 	Az-Zalzalah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--100 Al-'Adiyat----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="100.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                100
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْعَادِيَات</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-'Adiyat</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--101 Al-Qaari'ah----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="101.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                101
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْقَارِعَة</div>
                                    <div class="eng-name">
                                        <span><br> 	Al-Qaari'ah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--102 At-Takathur----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="102.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                102
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلتَّكَاثُر</div>
                                    <div class="eng-name">
                                        <span><br> 	At-Takathur</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--103 Al-'Asr----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="103.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                103
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْعَصْر</div>
                                    <div class="eng-name">
                                        <span><br> Al-'Asr</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--104 Al-Humazah----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="104.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                104
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْهُمَزَة</div>
                                    <div class="eng-name">
                                        <span><br> Al-Humazah</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--105 Al-Fil----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="105.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                105
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْفِيل</div>
                                    <div class="eng-name">
                                        <span><br> Al-Fil</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--106 Quraysh----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="106.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                106
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">قُرَيْش</div>
                                    <div class="eng-name">
                                        <span><br> Quraysh</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--107 Al-Maa'oon----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="107.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                107
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمَاعُون</div>
                                    <div class="eng-name">
                                        <span><br> Al-Maa'oon</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--108 Al-Kawthar----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="108.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                108
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْكَوْثَر</div>
                                    <div class="eng-name">
                                        <span><br> Al-Kawthar</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--109 Al-Kaafiroon----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="109.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                109
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْكَافِرُون</div>
                                    <div class="eng-name">
                                        <span><br> Al-Kaafiroon</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--110 An-Nasr----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="110.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                110
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلنَّصْر</div>
                                    <div class="eng-name">
                                        <span><br> An-Nasr</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--111 Al-Masad----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="111.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                111
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْمَسَد</div>
                                    <div class="eng-name">
                                        <span><br> Al-Masad</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--112 Al-Ikhlaas----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="112.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                112
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْإِخْلَاص</div>
                                    <div class="eng-name">
                                        <span><br> Al-Ikhlaas</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--113 Al-Falaq----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="113.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                113
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلْفَلَق</div>
                                    <div class="eng-name">
                                        <span><br> Al-Falaq</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>
                <!--114 Al-Naas----------------------------------------------------------------------------------------------->
                <div class="col-sm"> 
                    <a href="114.php"><button class="btn-outline-info">
                        <div class="surah-block">
                            <div class="num">
                                114
                            </div>
                            <div class="surah-text">
                                <div class="surah-name">
                                    <div class="arabic">ٱلنَّاس</div>
                                    <div class="eng-name">
                                        <span><br> Al-Naas</span> 
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </button></a>
                </div>

        </div>

        

    
    </main>
</html>

@endsection

