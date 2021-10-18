<!DOCTYPE html>
<html lang="en">

<head>
     <meta chaset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=0.1">
     <title> PROJECT QURAN</title>
     <link rel="Stylesheet" href="resources/Ayat-index.css">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<style>

</style>

<body>
     <nav class="navbar navbar-light bg-info">

          <div class="container-fluid">
               <a class="navbar-brand" href="index.html">
                    <img width="45" height="30" class="d-inline-block align-top"
                         src="imgquran/quran.png" alt="" laoding="lazy">
                    <span class="text-white">Noble Qur-an</span>
               </a>

               <a class="nav-link bg-info text-white " style="margin-left: auto;" aria-current="page" href="#">Audio</a>

               <div class="dropdown">
                    <butto class="btn btn-outline-info text-white dropdown-toggle" type="buttom" id="language"
                         data-toggle="dropdown" aria-expanded="false">
                         Language
                    </butto>
                    <ul class="dropdown-menu dropdown-menu-info" style="margin-left:-40px" aria-labelledby="language">
                         <li><a class="dropdown-item" href="">ENGLISH</a></li>
                         <li><a class="dropdown-item" href="">THAI</a></li>
                         <li><a class="dropdown-item" href="">MALAY</a></li>
                         <li><a class="dropdown-item" href="">SPANISH</a>
                         <li>

                    </ul>

               </div>
          </div>

     </nav>
     <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

          <div class="col mt-5 p-3 ">
               <div class="text-left ml-3 text-white font-weight-bold ">
                    <h6>SURAH INFO</h6>
               </div>
               <div class="form-check form-switch mt-3">

                    <label class="form-check-label text-white text-right ml-0-auto" for="flexSwitchCheckDefault">READING
                         MODE</label>
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">

               </div>
               <div class="form-check form-switch mt-3">

                    <label class="form-check-label text-white" for="flexSwitchCheckDefault">NIGHT MODE</label>
                    <input onclick="myFunction()" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">

               </div>
               <div class="form-check form-switch mt-3">

                    <label class="form-check-label text-white" for="flexSwitchCheckDefault">LEARNING MODE</label>
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">

               </div>
          </div>
          <hr class="mt-5" style="background-color: white;">


          <div class="col mt-5 p-3">
               <div class="text-left text-white">
                    <span>RICITER</span>
                    <select name="riciters" id="navSelect"><img src="" alt="" width="20px" height="20px">
                         <option value="1">Muhammad Nabil</option>
                         <option value="2">Mubassir Salafi</option>
                         <option value="3">Mubassir Salafi</option>
                         <option value="4">Mubassir Salafi</option>
                    </select>
               </div>
               <div class="text-left mt-3 text-white">
                    <span>TRANSLATE</span>
                    <select class="" name="riciters" id="navSelect"><img src="" alt="" width="20px" height="20px">
                         <option value="1">English</option>
                         <option value="2">Thai</option>
                         <option value="3">Malay</option>
                         <option value="4">Indonesia</option>
                    </select>
               </div>

          </div>
          <hr class="mt-5" style="background-color: white;">
          <div class="col mt-5 p-3">
               <div class="text-left text-white ">
                    <h6>FONT SIZE</h6>
                    <br>
                    <label for="customRange1" class="form-label">AYAH</label><br>
                    <img style="cursor: zoom-out;" class="mb-3" src="PngPigture/minus.png" alt="" width="20px"
                         height="20px">
                    <input type="range" class="form-range" id="customRange1" style="width:75%;">
                    <img style="cursor: zoom-in;" class="mb-3" src="PngPigture/plus.png" alt="" width="15px"
                         height="15px">
                    <label for="customRange1" class="form-label">TRANSLATE</label><br>
                    <img style="cursor: zoom-out;" class="mb-3" src="PngPigture/minus.png" alt="" width="20px"
                         height="20px">
                    <input type="range" class="form-range" id="customRange1" style="width:75%;">
                    <img style="cursor: zoom-in;" class="mb-3" src="PngPigture/plus.png" alt="" width="15px"
                         height="15px">


               </div>
          </div>
     </div>


     <div class="container-fluid mt-0 bg-active p-3 ">
          <div class="d-inline float-left ml-5">
               <div class="dropdown ">
                    <button class="btn btn-outline-info  dropdown-toggle" id="surahmenu" data-toggle="dropdown"
                         aria-expanded="false" href="">
                         <strong class="text-info">Al-Fatihah</strong></button>
                    <ul class="dropdown-menu dropdown-menu" style="width:350px; height:auto;margin-top:110px;"
                         aria-labelledby="surahmenu">
                         <li><a class="dropdown-item" href="Al-fatihah.html">
                                   <h6>1.Al-Fatihah</h6><span class="text-info"> (The openner) </span>
                                   <h4 class="d-inline float-right text-info ">ٱلْفَاتِحَة</h4>
                              </a></li>
                              <li><hr class="dropdown-driver"></li>

                         <li><a class="dropdown-item" href="">
                                   <h6>2.Al-Baqarah</h6><span class="text-info"> (The cow)</span>
                                   <h4 class="d-inline float-right text-info">ٱلْبَقَرَة</h4>
                              </a></li>

                              <li><hr class="dropdown-driver"></li>
                         <li><a class="dropdown-item" href="">
                                   <h6>3.Al-Imran</h6><span class="text-info"> (The family of imran)</span>
                                   <h4 class="d-inline float-right text-info">آلِ عِمْرَان</h4>
                              </a></li>
                              <li><hr class="dropdown-driver"></li>
                         <li><a class="dropdown-item" href="">
                                   <h6>4.An-Nisa</h6><span class="text-info"> (The women)</span>
                                   <h4 class="d-inline float-right text-info">ٱلنِّسَاء</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h4 class="d-inline float-right text-info">ٱلْمَائِدَة</h4>
                                   <h6>5.Al-Maida</h6>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>6.Al-An'am</h6><span class="text-info"> (The cattle)</span>
                                   <h4 class="d-inline float-right text-info">ٱلْأَنْعَام</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>7.Al-A'raf</h6><span class="text-info"> (The heights)</span>
                                   <h4 class="d-inline float-right text-info">ٱلْأَعْرَاف</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>8.Al-Anfal</h6><span class="text-info"> ( The spoils of war )</span>
                                   <h4 class="d-inline float-right text-info">ٱلْأَنْفَال</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>9.At-Tawbah</h6><span class="text-info"> ( The repentance )</span>
                                   <h4 class="d-inline float-right text-info">ٱلتَّوْبَة</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>10.Yunus</h6><span class="text-info"> ( Jonaoh )</span>
                                   <h4 class="d-inline float-right text-info">يُونُس</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>11.Hud</h6><span class="text-info"> ( Hud )</span>
                                   <h4 class="d-inline float-right text-info">هُود</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>12.Yusuf</h6><span class="text-info"> ( Yusuf )</span>
                                   <h4 class="d-inline float-right text-info">يُوسُف</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>13.Ar-Ra'd</h6><span class="text-info"> ( The Thunder )</span>
                                   <h4 class="d-inline float-right text-info">ٱلرَّعْد</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>14.Ibrahim</h6><span class="text-info"> ( Abraham )</span>
                                   <h4 class="d-inline float-right text-info">إِبْرَاهِيم</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>15.	Al-Hijr</h6><span class="text-info"> ( The Rocky Trackt )</span>
                                   <h4 class="d-inline float-right text-info">ٱلْحِجْر</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>16.An-Nahl</h6><span class="text-info"> ( The Bee )</span>
                                   <h4 class="d-inline float-right text-info">ٱلنَّحْل</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>17.Al-Isra</h6><span class="text-info"> ( The Nighr Jurney )</span>
                                   <h4 class="d-inline float-right text-info">ٱلْإِسْرَاء</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>18.Al-Kahf</h6><span class="text-info"> ( The Cave )</span>
                                   <h4 class="d-inline float-right text-info">ٱلْكَهْف</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>19.Maryam</h6><span class="text-info"> ( Mary )</span>
                                   <h4 class="d-inline float-right text-info">مَرْيَم</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                                   <h6>20.Ta-Ha</h6><span class="text-info"> ( Ta-Ha )</span>
                                   <h4 class="d-inline float-right text-info">طه</h4>
                              </a></li>
                         <li>
                              <hr class="dropdown-driver">
                         </li>
                         <li><a class="dropdown-item" href="">
                              <h6>21.Al-Anbiya</h6><span class="text-info"> ( The Prophets )</span>
                              <h4 class="d-inline float-right text-info">ٱلْأَنْبِيَاء</h4>
                         </a></li>
                    <li>
                         <hr class="dropdown-driver">
                    </li>
                    <li><a class="dropdown-item" href="">
                         <h6>22.Al-Hajj</h6><span class="text-info"> ( The Pilgrimage )</span>
                         <h4 class="d-inline float-right text-info">ٱلْحَجّ</h4>
                    </a></li>
               <li>
                    <hr class="dropdown-driver">
               </li>
               <li><a class="dropdown-item" href="">
                    <h6>23.Al-Mu'minun</h6><span class="text-info"> ( The Believers )</span>
                    <h4 class="d-inline float-right text-info">ٱلْمُؤْمِنُون</h4>
               </a></li>
          <li>
               <hr class="dropdown-driver">
          </li>
          <li><a class="dropdown-item" href="">
               <h6>24.An-Nur</h6><span class="text-info"> ( The Light )</span>
               <h4 class="d-inline float-right text-info">ٱلنُّور</h4>
          </a></li>
     <li>
          <hr class="dropdown-driver">
     </li>
     <li><a class="dropdown-item" href="">
          <h6>25.Al-Furqan</h6><span class="text-info"> ( The Criterion )</span>
          <h4 class="d-inline float-right text-info">ٱلْفُرْقَان</h4>
     </a></li>
<li>
     <hr class="dropdown-driver">
</li>
<li><a class="dropdown-item" href="">
     <h6>26.Ash-Shu'ara</h6><span class="text-info"> ( The Poets )</span>
     <h4 class="d-inline float-right text-info">ٱلشُّعَرَاء</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
<li><a class="dropdown-item" href="">
     <h6>27.An-Naml</h6><span class="text-info"> ( The Ant, The Ants )</span>
     <h4 class="d-inline float-right text-info">ٱلنَّمْل</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
<li><a class="dropdown-item" href="">
     <h6>28.Al-Qasas</h6><span class="text-info"> ( The Stories )</span>
     <h4 class="d-inline float-right text-info">	ٱلْقَصَص</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
<li><a class="dropdown-item" href="">
     <h6>29.Al-Ankabut</h6><span class="text-info"> ( The Spider )</span>
     <h4 class="d-inline float-right text-info">ٱلْعَنْكَبُوت</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
<li><a class="dropdown-item" href="">
     <h6>30.Ar-Rum</h6><span class="text-info"> ( Rome, Byzantium )</span>
     <h4 class="d-inline float-right text-info">ٱلرُّوم</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
      
<li><a class="dropdown-item" href="">
     <h6>31.Luqmaan</h6><span class="text-info"> ( Luqman )</span>
     <h4 class="d-inline float-right text-info">لُقْمَان</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
      
<li><a class="dropdown-item" href="">
     <h6>32.As-Sajda</h6><span class="text-info"> ( The Prostration, Worship, Adoration )</span>
     <h4 class="d-inline float-right text-info">ٱلسَّجْدَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
      
<li><a class="dropdown-item" href="">
     <h6>33.Al-Ahzaab</h6><span class="text-info"> ( The Clans )</span>
     <h4 class="d-inline float-right text-info">ٱلْأَحْزَاب</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
      
<li><a class="dropdown-item" href="">
     <h6>34.Saba</h6><span class="text-info"> ( Sheba )</span>
     <h4 class="d-inline float-right text-info">سَبَأ</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
      
<li><a class="dropdown-item" href="">
     <h6>35.Faatir</h6><span class="text-info"> ( The Originator )</span>
     <h4 class="d-inline float-right text-info">فَاطِر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
<li><a class="dropdown-item" href="">
     <h6>36.Yaseen</h6><span class="text-info"> ( Yāʾ Sīn )</span>
     <h4 class="d-inline float-right text-info">يس</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
<li><a class="dropdown-item" href="">
     <h6>37.As-Saaffaat</h6><span class="text-info"> ( Those Who Set The Ranks )</span>
     <h4 class="d-inline float-right text-info">ٱلصَّافَّات</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>



<li><a class="dropdown-item" href="">
     <h6>38.Saad</h6><span class="text-info"> ( Ṣād )</span>
     <h4 class="d-inline float-right text-info">	ص</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>39.Az-Zumar</h6><span class="text-info"> ( The Crowds )</span>
     <h4 class="d-inline float-right text-info">ٱلزُّمَر	</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>40.Ghafir</h6><span class="text-info"> ( The Forgiver (God) )</span>
     <h4 class="d-inline float-right text-info">	غَافِر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>



<li><a class="dropdown-item" href="">
     <h6>41.Fussilat</h6><span class="text-info"> ( Expounded, Explained In Detail )</span>
     <h4 class="d-inline float-right text-info">	فُصِّلَت</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>42.	Ash_Shooraa</h6><span class="text-info"> ( The Consultation )</span>
     <h4 class="d-inline float-right text-info">ٱلشُّورىٰ</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>43.	Az-Zukhruf</h6><span class="text-info"> ( The Gold Adornments )</span>
     <h4 class="d-inline float-right text-info">ٱلْزُّخْرُف</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>44.Ad-Dukhaan</h6><span class="text-info"> ( The Smoke )</span>
     <h4 class="d-inline float-right text-info">ٱلدُّخَان</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>45.Al-Jaathiyah</h6><span class="text-info"> ( The Kneeling Down )</span>
     <h4 class="d-inline float-right text-info">ٱلْجَاثِيَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>46.	Al-Ahqaaf</h6><span class="text-info"> (  The Dunes )</span>
     <h4 class="d-inline float-right text-info">	ٱلْأَحْقَاف</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>47.	Muhammad</h6><span class="text-info"> ( Muhammad )</span>
     <h4 class="d-inline float-right text-info">	مُحَمَّد</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>48.Al-Fath</h6><span class="text-info"> ( 	The Victory )</span>
     <h4 class="d-inline float-right text-info">ٱلْفَتْح</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>49.Al-Hujuraat</h6><span class="text-info"> ( The Private Apartments )</span>
     <h4 class="d-inline float-right text-info">ٱلْحُجُرَات</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>50.</h6><span class="text-info"> ()</span>
     <h4 class="d-inline float-right text-info"></h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>51.	Qaaf</h6><span class="text-info"> ( Q̈āf )</span>
     <h4 class="d-inline float-right text-info">	ق</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>52.	Adh-Dhaariyaat</h6><span class="text-info"> ( The Wind That Scatter )</span>
     <h4 class="d-inline float-right text-info">	ٱلذَّارِيَات</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>53.	An-Najm</h6><span class="text-info"> ( The Star )</span>
     <h4 class="d-inline float-right text-info">	ٱلنَّجْم</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>54.Al-Qamar</h6><span class="text-info"> ( The Moon )</span>
     <h4 class="d-inline float-right text-info">ٱلْقَمَر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>55.Ar-Rahman</h6><span class="text-info"> ( The Most Merciful )</span>
     <h4 class="d-inline float-right text-info">	ٱلرَّحْمَٰن</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>56.	Al-Waqi'a	</h6><span class="text-info"> ( The Inevitable )</span>
     <h4 class="d-inline float-right text-info">	ٱلْوَاقِعَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>57.	Al-Hadeed</h6><span class="text-info"> (The Iron)</span>
     <h4 class="d-inline float-right text-info">ٱلْحَدِيد</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>58.	Al-Mujadila</h6><span class="text-info"> ( The Pleading )</span>
     <h4 class="d-inline float-right text-info">	ٱلْمُجَادِلَة  </h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>59.	Al-Hashr</h6><span class="text-info"> ( The Mustering )</span>
     <h4 class="d-inline float-right text-info">	ٱلْحَشْر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>60.	Al-Mumtahanah</h6><span class="text-info"> ( The Examined One )</span>
     <h4 class="d-inline float-right text-info">ٱلْمُمْتَحَنَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>61.	As-Saff</h6><span class="text-info"> ( The Ranks )</span>
     <h4 class="d-inline float-right text-info">ٱلصَّفّ</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>62.	Al-Jumu'ah</h6><span class="text-info"> ( 	Congregation, Friday )</span>
     <h4 class="d-inline float-right text-info">	ٱلْجُمُعَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>63.	Al-Munafiqoon</h6><span class="text-info"> ( The Hypocrites )</span>
     <h4 class="d-inline float-right text-info">ٱلْمُنَافِقُون</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>64.At-Taghabun</h6><span class="text-info"> ( The Cheating )</span>
     <h4 class="d-inline float-right text-info">	ٱلتَّغَابُن </h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>65.At-Talaq</h6><span class="text-info"> ( 	Divorce )</span>
     <h4 class="d-inline float-right text-info">ٱلطَّلَاق</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>66.At-Tahreem</h6><span class="text-info"> ( The Prohibition )</span>
     <h4 class="d-inline float-right text-info">	ٱلتَّحْرِيم</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>67.Al-Mulk</h6><span class="text-info"> ( The Dominion )</span>
     <h4 class="d-inline float-right text-info">ٱلْمُلْك</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>68.Al-Qalam</h6><span class="text-info"> ( The Pen )</span>
     <h4 class="d-inline float-right text-info">ٱلْقَلَم</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>69.	Al-Haaqqa</h6><span class="text-info"> ( The Sure Reality )</span>
     <h4 class="d-inline float-right text-info">ٱلْحَاقَّة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>70.	Al-Ma'aarij</h6><span class="text-info"> ( The Ways of Ascent )</span>
     <h4 class="d-inline float-right text-info">ٱلْمَعَارِج</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>71.Nooh</h6><span class="text-info"> ( Noah )</span>
     <h4 class="d-inline float-right text-info">	نُوح</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>72.	Al-Jinn</h6><span class="text-info"> ( The Jinn  )</span>
     <h4 class="d-inline float-right text-info">	ٱلْجِنّ</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>73.Al-Muzzammil</h6><span class="text-info"> ( The Enfolded One )</span>
     <h4 class="d-inline float-right text-info">ٱلْمُزَّمِّل</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>74.Al-Muddaththir</h6><span class="text-info"> ( The One Wrapped Up )</span>
     <h4 class="d-inline float-right text-info">	ٱلْمُدَّثِّر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>75.	Al-Qiyamah</h6><span class="text-info"> ( The Day of Resurrection )</span>
     <h4 class="d-inline float-right text-info">	ٱلْقِيَامَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>76.	Al-Insaan</h6><span class="text-info"> ( The Human )</span>
     <h4 class="d-inline float-right text-info">ٱلْإِنْسَان</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>77.	Al-Mursalaat</h6><span class="text-info"> ( Those Sent Forth )</span>
     <h4 class="d-inline float-right text-info">	المرسلات</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>78.An-Naba'</h6><span class="text-info"> ( The Great News )</span>
     <h4 class="d-inline float-right text-info">ٱلنَّبَأ</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>79.	An-Naazi'aat</h6><span class="text-info"> ( Those Who Tear Out )</span>
     <h4 class="d-inline float-right text-info">ٱلنَّازِعَات</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>80.Abasa</h6><span class="text-info"> ( He Frowned )</span>
     <h4 class="d-inline float-right text-info">	عَبَسَ</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>81.	At-Takweer</h6><span class="text-info"> ( The Folding Up )</span>
     <h4 class="d-inline float-right text-info">	ٱلتَّكْوِير</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>82.Al-Infitar</h6><span class="text-info"> ( The Cleaving Asunder )</span>
     <h4 class="d-inline float-right text-info">ٱلْإِنْفِطَار</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>83.	Al-Mutaffifeen</h6><span class="text-info"> ( The Dealers in Fraud )</span>
     <h4 class="d-inline float-right text-info">ٱلْمُطَفِّفِين</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>84.	Al-Inshiqaaq</h6><span class="text-info"> ( The Rending Asunder )</span>
     <h4 class="d-inline float-right text-info">ٱلْإِنْشِقَاق</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>85.	Al-Burooj</h6><span class="text-info"> ( The Mansions Of The Stars )</span>
     <h4 class="d-inline float-right text-info">	ٱلْبُرُوج</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>86.At-Taariq</h6><span class="text-info"> ( The Night-Visitant )</span>
     <h4 class="d-inline float-right text-info">ٱلطَّارِق </h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>




<li><a class="dropdown-item" href="">
     <h6>87.Al-A'laa</h6><span class="text-info"> ( The Most High )</span>
     <h4 class="d-inline float-right text-info">ٱلْأَعْلَىٰ</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>88.Al-Ghaashiyah</h6><span class="text-info"> ( The Overwhelming Event )</span>
     <h4 class="d-inline float-right text-info">ٱلْغَاشِيَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>89.Al-Fajr</h6><span class="text-info"> ( The Break of Day )</span>
     <h4 class="d-inline float-right text-info">	ٱلْفَجْر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>89.</h6><span class="text-info"> ()</span>
     <h4 class="d-inline float-right text-info"></h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>90.Al-Balad</h6><span class="text-info"> ( The City )</span>
     <h4 class="d-inline float-right text-info">ٱلْبَلَد</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>91.Ash-Shams</h6><span class="text-info"> ( 	The Sun )</span>
     <h4 class="d-inline float-right text-info">	ٱلشَّمْس</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>92.Al-Layl</h6><span class="text-info"> ( The Night )</span>
     <h4 class="d-inline float-right text-info">ٱللَّيْل</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>93.	Ad-Dhuha</h6><span class="text-info"> ( The Forenoon )</span>
     <h4 class="d-inline float-right text-info">	ٱلضُّحَىٰ</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>94.Ash-Sharh</h6><span class="text-info"> ( The Expansion of Breast )</span>
     <h4 class="d-inline float-right text-info">	ٱلشَّرْح</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>95.At-Teen</h6><span class="text-info"> ( The Fig Tree, )</span>
     <h4 class="d-inline float-right text-info">ٱلتِّين</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>96.	Al-'Alaq</h6><span class="text-info"> ( The Clinging Clot )</span>
     <h4 class="d-inline float-right text-info">ٱلْعَلَق</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>97.	Al-Qadr</h6><span class="text-info"> ( The Night of Honor )</span>
     <h4 class="d-inline float-right text-info">ٱلْقَدْر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>98.	Al-Bayyinahh</h6><span class="text-info"> ( The Clear Evidence )</span>
     <h4 class="d-inline float-right text-info">	ٱلْبَيِّنَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>99.	Az-Zalzalah</h6><span class="text-info"> ( 	The Earthquake )</span>
     <h4 class="d-inline float-right text-info">	ٱلزَّلْزَلَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>100.	Al-'Aadiyaat</h6><span class="text-info"> ( The Courser )</span>
     <h4 class="d-inline float-right text-info">	ٱلْعَادِيَات</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>101.Al-Qaari'ah</h6><span class="text-info"> ( The Striking Hour )</span>
     <h4 class="d-inline float-right text-info">ٱلْقَارِعَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>102.At-Takaathur</h6><span class="text-info"> ( The Piling Up )</span>
     <h4 class="d-inline float-right text-info">	ٱلتَّكَاثُر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>103.	Al-'Asr</h6><span class="text-info"> ( The Time )</span>
     <h4 class="d-inline float-right text-info">	ٱلْعَصْر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>104.	Al-Humazah</h6><span class="text-info"> ( The Scandalmonger )</span>
     <h4 class="d-inline float-right text-info">ٱلْهُمَزَة</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>105.The Elephabt</h6><span class="text-info"> ( The Elephant )</span>
     <h4 class="d-inline float-right text-info">ٱلْفِيل  </h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>106.	Quraysh</h6><span class="text-info"> ( 	The Quraysh )</span>
     <h4 class="d-inline float-right text-info">	قُرَيْش</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>107.	Al-Maa'oon</h6><span class="text-info"> ( The Neighbourly Assistance )</span>
     <h4 class="d-inline float-right text-info">	ٱلْمَاعُون</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>108.Al-Kawthar</h6><span class="text-info"> ( Abundance )</span>
     <h4 class="d-inline float-right text-info">ٱلْكَوْثَر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>109.	Al-Kaafiroon</h6><span class="text-info"> ( The Disbelievers )</span>
     <h4 class="d-inline float-right text-info">	ٱلْكَافِرُون</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>110.	An-Nasr</h6><span class="text-info"> ( The Help )</span>
     <h4 class="d-inline float-right text-info">ٱلنَّصْر</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>111.Al-Masad</h6><span class="text-info"> ( The Plaited Rope )</span>
     <h4 class="d-inline float-right text-info">ٱلْمَسَد </h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>112.	Al-Ikhlaas</h6><span class="text-info"> ( Purity of Faith )</span>
     <h4 class="d-inline float-right text-info">	ٱلْإِخْلَاص</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>113.	Al-Falaq</h6><span class="text-info"> ( The Daybreak )</span>
     <h4 class="d-inline float-right text-info">ٱلْفَلَق</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>

<li><a class="dropdown-item" href="">
     <h6>104.	Al-Naas</h6><span class="text-info"> ( Mankind )</span>
     <h4 class="d-inline float-right text-info">	ٱلنَّاس</h4>
</a></li>
<li>
<hr class="dropdown-driver">
</li>
      
                    </ul>
               </div>
          </div>

          <div class="d-inline float-right mr-5" id="main">

               <span class="btn btn-outline-info" style="font-size:15px;cursor:pointer"
                    onclick="openNav()">Setting</span>
          </div>
          <div class="d-flex justify-content-center mt-0 mr-0">

               <a class="btn btn-outline-info" role="button" href="Al-fatihah.html"
                    style="height: 40px; width: 160px;"><strong>Reading Mode</strong></a>
               <a class="btn btn-outline-info ml-4" role="button" href="Alfatihah.tranlate.html"
                    style="width: 160px;"><strong>Translate</strong></a>
          </div>
     </div>







     </div>








     <p class="text-center mt-3">Al-Fatihah</p>
     <div id="kk" class="container">
          <div class="d-inline p-2 bg-dark text-white">00:00</div>
          <br><br>
          <i class="fa fa-chevron-circle-right text-gray-dark " style="font-size:30px"><span class="text-dark"
                    style="font-size: 20px; margin-left: 10px; ">PLAY</span></i>



          <p class="text-right">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</p>
          <p class="text-left">In the Name of Allah—the Most Compassionate, Most Merciful.</p>

          <hr>
          <div class="d-inline p-2 bg-dark text-white" style="cursor: pointer;">00:00</div>
          <br><br>
          <i class="fa fa-chevron-circle-right text-gray-dark " style="font-size:30px"><span class="text-dark"
                    style="font-size: 20px; margin-left: 10px; ">PLAY</span></i>
          <p class="text-right mt-5">اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ</p>
          <p class="text-left">All praise is for Allah—Lord of all worlds,</p>
          <hr>
          <div class="d-inline p-2 bg-dark text-white">00:00</div>
          <br><br>
          <i class="fa fa-chevron-circle-right text-gray-dark " style="font-size:30px"><span class="text-dark"
                    style="font-size: 20px; margin-left: 10px; ">PLAY</span></i>
          <p class="text-right mt-5">الرَّحْمٰنِ الرَّحِيْمِۙ</p>
          <p class="text-left">the Most Compassionate, Most Merciful,</p>
          <hr>

          <div class="d-inline p-2 bg-dark text-white">00:00</div>
          <br><br>
          <i class="fa fa-chevron-circle-right text-gray-dark " style="font-size:30px"><span class="text-dark"
                    style="font-size: 20px; margin-left: 10px; ">PLAY</span></i>
          <p class="text-right mt-5">مٰلِكِ يَوْمِ الدِّيْنِۗ</p>
          <p class="text-left">Master of the Day of Judgment.</p>
          <hr>
          <div class="d-inline p-2 bg-dark text-white">00:00</div>
          <br><br>
          <i class="fa fa-chevron-circle-right text-gray-dark " style="font-size:30px"><span class="text-dark"
                    style="font-size: 20px; margin-left: 10px; ">PLAY</span></i>
          <p class="text-right mt-5">اِيَّاكَ نَعْبُدُ وَاِيَّاكَ نَسْتَعِيْنُۗ</p>
          <p class="text-left">You ˹alone˺ we worship and You ˹alone˺ we ask for help.</p>
          <hr>
          <div class="d-inline p-2 bg-dark text-white">00:00</div>
          <br><br>
          <i class="fa fa-chevron-circle-right text-gray-dark " style="font-size:30px"><span class="text-dark"
                    style="font-size: 20px; margin-left: 10px; ">PLAY</span></i>
          <p class="text-right mt-5">اِهْدِنَا الصِّرَاطَ الْمُسْتَقِيْمَ ۙ</p>
          <p class="text-left">Guide us along the Straight Path,</p>
          <hr>
          <div class="d-inline p-2 bg-dark text-white">00:00</div>
          <br><br>
          <i class="fa fa-chevron-circle-right text-gray-dark " style="font-size:30px"><span class="text-dark"
                    style="font-size: 20px; margin-left: 10px; ">PLAY</span></i>
          <p class="text-right mt-5">صِرَاطَ الَّذِيْنَ اَنْعَمْتَ عَلَيْهِمْ ەۙ غَيْرِ الْمَغْضُوْبِ عَلَيْهِمْ وَلَا
               الضَّاۤلِّيْنَ</p>
          <p class="text-left">the Path of those You have blessed—not those You are displeased with, or those who are
               astray.1 </p>
          <hr>


    <!--select ayah x audio--> </div>
     <div id="audioControl" class="container-fluid" style="background-color: rgb(255, 255, 255);">
          <input type="range" class="form-range">

          <div class="container-fluid">
               <div class="row"> 
                    <div class="col-sm mt-4 ml-5" style="display: inline;">


                         <select class="form-select font-weight-bolder text-info"
                              style="width: 100px; height: 50px; cursor:pointer">

                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>

                         </select>

                    </div>
                    <div class="col-sm mt-4 ml-auto mr-auto text-center">
                         <div class="play-icon text white d-flex justify-content-center">

                              <i class="large material-icons mr-2 text-dark" style="font-size: 40px;">skip_previous</i>
                              <i class="large material-icons mr-2 text-dark"
                                   style="font-size:40px;">play_circle_filled</i>
                              <i class="large material-icons mr-2 text-dark" style="font-size: 40px;">skip_next</i>
                         </div>
                    </div>
                    <div class="col-sm mt-4  mr-5 ">

                         <select class="form-select font-weight-light font-weight-bolder text-info float-right"
                              style="width:175px; height: 50px; cursor:pointer">


                              <option value="1">Muhammad Nabil</option>
                              <option value="2">Mubassir Salafi</option>
                              <option value="3">Mubassir Salafi</option>
                              <option value="4">Mubassir Salafi</option>


                         </select>
                    </div>
               </div>
          </div>
          <hr>
     </div>


















     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
          integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
          crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js"
          integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF"
          crossorigin="anonymous"></script>
     <script>
          function openNav() {
               document.getElementById("mySidenav").style.width = "260px";
               document.getElementById("main").style.marginLeft = "0px";
          }

          function closeNav() {
               document.getElementById("mySidenav").style.width = "0";
               document.getElementById("main").style.marginLeft = "0";
          }
          function myFunction() {
               var element = document.body;
               element.classList.toggle("dark-mode");

          }
     </script> 
</body>

</html>