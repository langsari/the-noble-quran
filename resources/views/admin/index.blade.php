@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
     

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn AdminLTE</title>

    <link rel="stylesheet" href="{{ URL::to('adminassets/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('adminassets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('adminassets/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('adminassets/css/skin.min.css') }}">
</head>
<body class="skin-blue">


    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
      
          <!-- Logo -->
        
      
          <!-- Header Navbar -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            
            <!-- Navbar Right Menu -->
           
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
      
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
      
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="{{ URL::to('adminassets/img/profile.jpeg') }}" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Admin</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
      
            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
              <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
              </div>
            </form>
            <!-- /.search form -->
      
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">HEADER</li>
              <!-- Optionally, you can add icons to the links -->
              <li class="active"><a href="crud-user/index.php"><i class="fa fa-link"></i> <span>จัดการคำแปลกุรอาน</span></a></li>
              <li><a href="m.users.php"><i class="fa fa-link"></i> <span>จัดการผู้ใช้</span></a></li>
              <li><a href="index.html"><i class="fa fa-link"></i> <span>จัดการกุรอานตัฟซีร</span></a></li>
              <li><a href="index.html"><i class="fa fa-link"></i> <span>จัดการโน้ต</span></a></li>
              <!-- <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#">Link in level 2</a></li>
                  <li><a href="#">Link in level 2</a></li>
                </ul>
              </li>
            </ul>-->
            <!-- /.sidebar-menu -->
          </section>
          <!-- /.sidebar -->
        </aside>
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <h1 class="mt-5">Infomation User</h1>
          <br>


<div class ="container">
  <table class="table table-hover table-bordered border-success table-striped">
  
    <thead >
    <tr class="table-success">
        <th scope="col">ลำดับที่</th>
        <th scope="col">ชื่อซูเราะห์</th>
        <th scope="col">ชื่อภาษาอาหรับ</th>
        <th scope="col">ประทานที่</th>
        <th scope="col">จำนวนอายะห์</th>
     </tr> 
     <thead>
    <tbody>
    <tr class="table-success ">
        <td>1</td>
        <td>
       
          <a href ="{{ route('tafseer_detail') }}">
          Surah Al-Fatihah</a></td>
        <td>الفاتحة</td>
        <td>Mekkah</td>
        <td>7</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>2</td>
        <td>
          <a href ="tafseer_detail.php?surah=2&surah_name=Surah Al-Baqarah">
          Surah Al-Baqarah</a></td>
        <td>البقرة</td>
        <td>Madinah</td>
        <td>286</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>3</td>
        <td>
          <a href ="tafseer_detail.php?surah=3&surah_name=Surah Ali `Imran">
          Surah Ali `Imran</a></td>
        <td>آل عمران</td>
        <td>Madinah</td>
        <td>200</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>4</td>
        <td>
          <a href ="tafseer_detail.php?surah=4&surah_name=Surah An-Nisa`">
          Surah An-Nisa`</a></td>
        <td>النّساء</td>
        <td>Madinah</td>
        <td>176</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>5</td>
        <td>
          <a href ="tafseer_detail.php?surah=5&surah_name=Surah Al-Ma`idah">
          Surah Al-Ma`idah</a></td>
        <td>المآئدة</td>
        <td>Madinah</td>
        <td>120</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>6</td>
        <td>
          <a href ="tafseer_detail.php?surah=6&surah_name=Surah Al-An`am">
          Surah Al-An`am</a></td>
        <td>الانعام</td>
        <td>Mekkah</td>
        <td>165</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>7</td>
        <td>
          <a href ="tafseer_detail.php?surah=7&surah_name=Surah Al-A’raf">
          Surah Al-A’raf</a></td>
        <td>الأعراف</td>
        <td>Mekkah</td>
        <td>206</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>8</td>
        <td>
          <a href ="tafseer_detail.php?surah=8&surah_name=Surah Al-Anfal">
          Surah Al-Anfal</a></td>
        <td>الأنفال</td>
        <td>Madinah</td>
        <td>75</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>9</td>
        <td>
          <a href ="tafseer_detail.php?surah=9&surah_name=Surah At-Taubah">
          Surah At-Taubah</a></td>
        <td>التوبة‎‎</td>
        <td>Madinah</td>
        <td>129</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>10</td>
        <td>
          <a href ="tafseer_detail.php?surah=10&surah_name=Surah Yunus">
          Surah Yunus</a></td>
        <td>ينوس</td>
        <td>Mekkah</td>
        <td>109</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>11</td>
        <td>
          <a href ="tafseer_detail.php?surah=11&surah_name=Surah Hud">
          Surah Hud</a></td>
        <td>هود</td>
        <td>Mekkah</td>
        <td>123</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>12</td>
        <td>
          <a href ="tafseer_detail.php?surah=12&surah_name=Surah Yusuf">
          Surah Yusuf</a></td>
        <td>يسوف</td>
        <td>Mekkah</td>
        <td>111</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>13</td>
        <td>
          <a href ="tafseer_detail.php?surah=13&surah_name=Surah Ar-Ra’d">
          Surah Ar-Ra’d</a></td>
        <td>الرّعد</td>
        <td>Mekkah</td>
        <td>43</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>14</td>
        <td>
          <a href ="tafseer_detail.php?surah=14&surah_name=Surah Ibrahim">
          Surah Ibrahim</a></td>
        <td>إبراهيم</td>
        <td>Mekkah</td>
        <td>52</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>15</td>
        <td>
          <a href ="tafseer_detail.php?surah=15&surah_name=Surah Al-Hijr">
          Surah Al-Hijr</a></td>
        <td>الحجر</td>
        <td>Mekkah</td>
        <td>99</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>16</td>
        <td>
          <a href ="tafseer_detail.php?surah=16&surah_name=Surah An-Nahl">
          Surah An-Nahl</a></td>
        <td>النّحل</td>
        <td>Mekkah</td>
        <td>128</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>17</td>
        <td>
          <a href ="tafseer_detail.php?surah=17&surah_name=Surah Al-Isra`">
          Surah Al-Isra`</a></td>
        <td>الإسرا</td>
        <td>Mekkah</td>
        <td>111</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>18</td>
        <td>
          <a href ="tafseer_detail.php?surah=18&surah_name=Surah Al-Kahf">
          Surah Al-Kahf</a></td>
        <td>الكهف</td>
        <td>Mekkah</td>
        <td>110</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>19</td>
        <td>
          <a href ="tafseer_detail.php?surah=19&surah_name=Surah Maryam">
          Surah Maryam</a></td>
        <td>مريم</td>
        <td>Mekkah</td>
        <td>98</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>20</td>
        <td>
          <a href ="tafseer_detail.php?surah=20&surah_name=Surah Ta Ha">
          Surah Ta Ha</a></td>
        <td>طه</td>
        <td>Mekkah</td>
        <td>135</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>21</td>
        <td>
          <a href ="tafseer_detail.php?surah=21&surah_name=Surah Al-Anbiya">
          Surah Al-Anbiya</a></td>
        <td>الأنبياء</td>
        <td>Mekkah</td>
        <td>112</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>22</td>
        <td>
          <a href ="tafseer_detail.php?surah=22&surah_name=Surah Al-Hajj">
          Surah Al-Hajj</a></td>
        <td>الحجّ</td>
        <td>Madinah & Makkah</td>
        <td>78</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>23</td>
        <td>
          <a href ="tafseer_detail.php?surah=23&surah_name=Surah Al-Mu’minun">
          Surah Al-Mu’minun</a></td>
        <td>المؤمنون</td>
        <td>Mekkah</td>
        <td>118</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>24</td>
        <td>
          <a href ="tafseer_detail.php?surah=24&surah_name=Surah An-Nur">
          Surah An-Nur</a></td>
        <td>النّور</td>
        <td>Madinah</td>
        <td>64</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>25</td>
        <td>
          <a href ="tafseer_detail.php?surah=25&surah_name=Surah Al-Furqan">
          Surah Al-Furqan</a></td>
        <td>الفرقان</td>
        <td>Mekkah</td>
        <td>77</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>26</td>
        <td>
          <a href ="tafseer_detail.php?surah=26&surah_name=Surah Asy-Syu`ara`">
          Surah Asy-Syu`ara`</a></td>
        <td>الشّعراء</td>
        <td>Mekkah</td>
        <td>227</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>27</td>
        <td>
          <a href ="tafseer_detail.php?surah=27&surah_name=Surah An-Naml">
          Surah An-Naml</a></td>
        <td>النّمل</td>
        <td>Mekkah</td>
        <td>93</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>28</td>
        <td>
          <a href ="tafseer_detail.php?surah=28&surah_name=Surah Al-Qasas">
          Surah Al-Qasas</a></td>
        <td>القصص</td>
        <td>Mekkah</td>
        <td>88</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>29</td>
        <td>
          <a href ="tafseer_detail.php?surah=29&surah_name=Surah Al-`Ankabut">
          Surah Al-`Ankabut</a></td>
        <td>العنكبوت</td>
        <td>Mekkah</td>
        <td>69</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>30</td>
        <td>
          <a href ="tafseer_detail.php?surah=30&surah_name=Surah Ar-Rum">
          Surah Ar-Rum</a></td>
        <td>الرّوم</td>
        <td>Mekkah</td>
        <td>60</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>31</td>
        <td>
          <a href ="tafseer_detail.php?surah=31&surah_name=Surah Luqman">
          Surah Luqman</a></td>
        <td>لقمان</td>
        <td>Mekkah</td>
        <td>34</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>32</td>
        <td>
          <a href ="tafseer_detail.php?surah=32&surah_name=Surah As-Sajdah">
          Surah As-Sajdah</a></td>
        <td>السّجدة</td>
        <td>Mekkah</td>
        <td>30</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>33</td>
        <td>
          <a href ="tafseer_detail.php?surah=33&surah_name=Surah Al-Ahzab">
          Surah Al-Ahzab</a></td>
        <td>الْأحزاب</td>
        <td>Madinah</td>
        <td>73</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>34</td>
        <td>
          <a href ="tafseer_detail.php?surah=34&surah_name=Surah Saba’">
          Surah Saba’</a></td>
        <td>سبا</td>
        <td>Mekkah</td>
        <td>54</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>35</td>
        <td>
          <a href ="tafseer_detail.php?surah=35&surah_name=Surah Fatir">
          Surah Fatir</a></td>
        <td>فاطر</td>
        <td>Mekkah</td>
        <td>45</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>36</td>
        <td>
          <a href ="tafseer_detail.php?surah=36&surah_name=Surah Ya Sin">
          Surah Ya Sin</a></td>
        <td>يس</td>
        <td>Mekkah</td>
        <td>83</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>37</td>
        <td>
          <a href ="tafseer_detail.php?surah=37&surah_name=Surah As-Saffat">
          Surah As-Saffat</a></td>
        <td>الصّافات</td>
        <td>Mekkah</td>
        <td>182</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>38</td>
        <td>
          <a href ="tafseer_detail.php?surah=38&surah_name=Surah Sad">
          Surah Sad</a></td>
        <td>ص</td>
        <td>Mekkah</td>
        <td>88</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>39</td>
        <td>
          <a href ="tafseer_detail.php?surah=39&surah_name=Surah Az-Zumar">
          Surah Az-Zumar</a></td>
        <td>الزّمر</td>
        <td>Mekkah</td>
        <td>75</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>40</td>
        <td>
          <a href ="tafseer_detail.php?surah=40&surah_name=Surah Al-Mu’min">
          Surah Al-Mu’min</a></td>
        <td>المؤمن</td>
        <td>Mekkah</td>
        <td>85</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>41</td>
        <td>
          <a href ="tafseer_detail.php?surah=41&surah_name=Surah Fussilat">
          Surah Fussilat</a></td>
        <td>فصّلت</td>
        <td>Mekkah</td>
        <td>54</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>42</td>
        <td>
          <a href ="tafseer_detail.php?surah=42&surah_name=Surah Asy-Syura">
          Surah Asy-Syura</a></td>
        <td>الشّورى</td>
        <td>Mekkah</td>
        <td>53</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>43</td>
        <td>
          <a href ="tafseer_detail.php?surah=43&surah_name=Surah Az-Zukhruf">
          Surah Az-Zukhruf</a></td>
        <td>الزّخرف</td>
        <td>Mekkah</td>
        <td>89</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>44</td>
        <td>
          <a href ="tafseer_detail.php?surah=44&surah_name=Surah Ad-Dukhan">
          Surah Ad-Dukhan</a></td>
        <td>الدّخان</td>
        <td>Mekkah</td>
        <td>59</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>45</td>
        <td>
          <a href ="tafseer_detail.php?surah=45&surah_name=Surah Al-Jasiyah">
          Surah Al-Jasiyah</a></td>
        <td>الجاثية</td>
        <td>Mekkah</td>
        <td>37</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>46</td>
        <td>
          <a href ="tafseer_detail.php?surah=46&surah_name=Surah Al-Ahqaf">
          Surah Al-Ahqaf</a></td>
        <td>الَأحقاف</td>
        <td>Mekkah</td>
        <td>35</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>47</td>
        <td>
          <a href ="tafseer_detail.php?surah=47&surah_name=Surah Muhammad">
          Surah Muhammad</a></td>
        <td>محمّد</td>
        <td>Madinah</td>
        <td>38</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>48</td>
        <td>
          <a href ="tafseer_detail.php?surah=48&surah_name=Surah Al-Fath">
          Surah Al-Fath</a></td>
        <td>الفتح</td>
        <td>Madinah</td>
        <td>29</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>49</td>
        <td>
          <a href ="tafseer_detail.php?surah=49&surah_name=Surah Al-Hujurat">
          Surah Al-Hujurat</a></td>
        <td>الحجرات</td>
        <td>Madinah</td>
        <td>18</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>50</td>
        <td>
          <a href ="tafseer_detail.php?surah=50&surah_name=Surah Qaf">
          Surah Qaf</a></td>
        <td>ق</td>
        <td>Mekkah</td>
        <td>45</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>51</td>
        <td>
          <a href ="tafseer_detail.php?surah=51&surah_name=Surah Az-Zariyat">
          Surah Az-Zariyat</a></td>
        <td>الذّاريات</td>
        <td>Mekkah</td>
        <td>60</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>52</td>
        <td>
          <a href ="tafseer_detail.php?surah=52&surah_name=Surah At-Tur">
          Surah At-Tur</a></td>
        <td>الطّور</td>
        <td>Mekkah</td>
        <td>49</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>53</td>
        <td>
          <a href ="tafseer_detail.php?surah=53&surah_name=Surah An-Najm">
          Surah An-Najm</a></td>
        <td>النّجْم</td>
        <td>Mekkah</td>
        <td>62</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>54</td>
        <td>
          <a href ="tafseer_detail.php?surah=54&surah_name=Surah Al-Qamar">
          Surah Al-Qamar</a></td>
        <td>القمر</td>
        <td>Mekkah</td>
        <td>55</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>55</td>
        <td>
          <a href ="tafseer_detail.php?surah=55&surah_name=Surah Ar-Rahman">
          Surah Ar-Rahman</a></td>
        <td>الرّحْمن</td>
        <td>Madinah & Mekkah</td>
        <td>78</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>56</td>
        <td>
          <a href ="tafseer_detail.php?surah=56&surah_name=Surah Al-Waqi’ah">
          Surah Al-Waqi’ah</a></td>
        <td>الواقعه</td>
        <td>Mekkah</td>
        <td>96</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>57</td>
        <td>
          <a href ="tafseer_detail.php?surah=57&surah_name=Surah Al-Hadid">
          Surah Al-Hadid</a></td>
        <td>الحديد</td>
        <td>Madinah</td>
        <td>29</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>58</td>
        <td>
          <a href ="tafseer_detail.php?surah=58&surah_name=Surah Al-Mujadilah">
          Surah Al-Mujadilah</a></td>
        <td>المجادلة</td>
        <td>Madinah</td>
        <td>22</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>59</td>
        <td>
          <a href ="tafseer_detail.php?surah=59&surah_name=Surah Al-Hasyr">
          Surah Al-Hasyr</a></td>
        <td>الحشْر</td>
        <td>Madinah</td>
        <td>24</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>60</td>
        <td>
          <a href ="tafseer_detail.php?surah=60&surah_name=Surah Al-Mumtahanah">
          Surah Al-Mumtahanah</a></td>
        <td>الممتحنة</td>
        <td>Madinah</td>
        <td>13</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>61</td>
        <td>
          <a href ="tafseer_detail.php?surah=61&surah_name=Surah As-Saff">
          Surah As-Saff</a></td>
        <td>الصّفّ</td>
        <td>Madinah</td>
        <td>14</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>62</td>
        <td>
          <a href ="tafseer_detail.php?surah=62&surah_name=Surah Al-Jumu’ah">
          Surah Al-Jumu’ah</a></td>
        <td>الجمعة</td>
        <td>Madinah</td>
        <td>11</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>63</td>
        <td>
          <a href ="tafseer_detail.php?surah=63&surah_name=Surah Al-Munafiqun">
          Surah Al-Munafiqun</a></td>
        <td>المنافقون</td>
        <td>Madinah</td>
        <td>11</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>64</td>
        <td>
          <a href ="tafseer_detail.php?surah=64&surah_name=Surah At-Tagabun">
          Surah At-Tagabun</a></td>
        <td>التّغابن</td>
        <td>Madinah</td>
        <td>18</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>65</td>
        <td>
          <a href ="tafseer_detail.php?surah=65&surah_name=Surah At-Talaq">
          Surah At-Talaq</a></td>
        <td>الطّلاق</td>
        <td>Madinah</td>
        <td>12</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>66</td>
        <td>
          <a href ="tafseer_detail.php?surah=66&surah_name=Surah At-Tahrim">
          Surah At-Tahrim</a></td>
        <td>التّحريم</td>
        <td>Madinah</td>
        <td>12</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>67</td>
        <td>
          <a href ="tafseer_detail.php?surah=67&surah_name=Surah Al-Mulk">
          Surah Al-Mulk</a></td>
        <td>الملك</td>
        <td>Mekkah</td>
        <td>30</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>68</td>
        <td>
          <a href ="tafseer_detail.php?surah=68&surah_name=Surah Al-Qalam">
          Surah Al-Qalam</a></td>
        <td>القلم</td>
        <td>Mekkah</td>
        <td>52</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>69</td>
        <td>
          <a href ="tafseer_detail.php?surah=69&surah_name=Surah Al-Haqqah">
          Surah Al-Haqqah</a></td>
        <td>الحآقّة</td>
        <td>Mekkah</td>
        <td>52</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>70</td>
        <td>
          <a href ="tafseer_detail.php?surah=70&surah_name=Surah Al-Ma’arij">
          Surah Al-Ma’arij</a></td>
        <td>المعارج</td>
        <td>Mekkah</td>
        <td>44</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>71</td>
        <td>
          <a href ="tafseer_detail.php?surah=71&surah_name=Surah Nuh">
          Surah Nuh</a></td>
        <td>نوح</td>
        <td>Mekkah</td>
        <td>28</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>72</td>
        <td>
          <a href ="tafseer_detail.php?surah=72&surah_name=Surah Al-Jinn">
          Surah Al-Jinn</a></td>
        <td>الجنّ</td>
        <td>Mekkah</td>
        <td>28</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>73</td>
        <td>
          <a href ="tafseer_detail.php?surah=73&surah_name=Surah Al-Muzzammil">
          Surah Al-Muzzammil</a></td>
        <td>المزمّل</td>
        <td>Mekkah</td>
        <td>20</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>74</td>
        <td>
          <a href ="tafseer_detail.php?surah=74&surah_name=Surah Al-Muddassir">
          Surah Al-Muddassir</a></td>
        <td>المدشّر</td>
        <td>Mekkah</td>
        <td>56</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>75</td>
        <td>
          <a href ="tafseer_detail.php?surah=75&surah_name=Surah Al-Qiyamah">
          Surah Al-Qiyamah</a></td>
        <td>القيمة</td>
        <td>Mekkah</td>
        <td>40</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>76</td>
        <td>
          <a href ="tafseer_detail.php?surah=76&surah_name=Surah Al-Insan">
          Surah Al-Insan</a></td>
        <td>الْاٍنسان</td>
        <td>Madinah</td>
        <td>31</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>77</td>
        <td>
          <a href ="tafseer_detail.php?surah=77&surah_name=Surah Al-Mursalat">
          Surah Al-Mursalat</a></td>
        <td>المرسلات</td>
        <td>Mekkah</td>
        <td>50</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>78</td>
        <td>
          <a href ="tafseer_detail.php?surah=78&surah_name=Surah An-Naba’">
          Surah An-Naba’</a></td>
        <td>النّبا</td>
        <td>Mekkah</td>
        <td>40</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>79</td>
        <td>
          <a href ="tafseer_detail.php?surah=79&surah_name=Surah An-Nazi’at">
          Surah An-Nazi’at</a></td>
        <td>النّازعات</td>
        <td>Mekkah</td>
        <td>46</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>80</td>
        <td>
          <a href ="tafseer_detail.php?surah=80&surah_name=Surah `Abasa">
          Surah `Abasa</a></td>
        <td>عبس</td>
        <td>Mekkah</td>
        <td>42</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>81</td>
        <td>
          <a href ="tafseer_detail.php?surah=81&surah_name=Surah At-Takwir">
          Surah At-Takwir</a></td>
        <td>التّكوير</td>
        <td>Mekkah</td>
        <td>29</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>82</td>
        <td>
          <a href ="tafseer_detail.php?surah=82&surah_name=Surah Al-Infitar">
          Surah Al-Infitar</a></td>
        <td>الانفطار</td>
        <td>Mekkah</td>
        <td>19</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>83</td>
        <td>
          <a href ="tafseer_detail.php?surah=83&surah_name=Surah Al-Tatfif">
          Surah Al-Tatfif</a></td>
        <td>المطفّفين</td>
        <td>Mekkah</td>
        <td>36</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>84</td>
        <td>
          <a href ="tafseer_detail.php?surah=84&surah_name=Surah Al-Insyiqaq">
          Surah Al-Insyiqaq</a></td>
        <td>الانشقاق</td>
        <td>Mekkah</td>
        <td>25</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>85</td>
        <td>
          <a href ="tafseer_detail.php?surah=85&surah_name=Surah Al-Buruj">
          Surah Al-Buruj</a></td>
        <td>البروج</td>
        <td>Mekkah</td>
        <td>22</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>86</td>
        <td>
          <a href ="tafseer_detail.php?surah=86&surah_name=Surah At-Tariq">
          Surah At-Tariq</a></td>
        <td>الطّارق</td>
        <td>Mekkah</td>
        <td>17</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>87</td>
        <td>
          <a href ="tafseer_detail.php?surah=87&surah_name=Surah Al-A’la">
          Surah Al-A’la</a></td>
        <td>الْأعلى</td>
        <td>Mekkah</td>
        <td>19</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>88</td>
        <td>
          <a href ="tafseer_detail.php?surah=88&surah_name=Surah Al-Gasyiyah">
          Surah Al-Gasyiyah</a></td>
        <td>الغاشية</td>
        <td>Mekkah</td>
        <td>26</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>89</td>
        <td>
          <a href ="tafseer_detail.php?surah=89&surah_name=Surah Al-Fajr">
          Surah Al-Fajr</a></td>
        <td>الفجر</td>
        <td>Mekkah</td>
        <td>30</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>90</td>
        <td>
          <a href ="tafseer_detail.php?surah=90&surah_name=Surah Al-Balad">
          Surah Al-Balad</a></td>
        <td>البلد</td>
        <td>Mekkah</td>
        <td>20</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>91</td>
        <td>
          <a href ="tafseer_detail.php?surah=91&surah_name=Surah Asy-Syams">
          Surah Asy-Syams</a></td>
        <td>الشّمس</td>
        <td>Mekkah</td>
        <td>15</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>92</td>
        <td>
          <a href ="tafseer_detail.php?surah=92&surah_name=Surah Al-Lail">
          Surah Al-Lail</a></td>
        <td>الّيل</td>
        <td>Mekkah</td>
        <td>21</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>93</td>
        <td>
          <a href ="tafseer_detail.php?surah=93&surah_name=Surah Ad-Duha">
          Surah Ad-Duha</a></td>
        <td>الضحى‎‎</td>
        <td>Mekkah</td>
        <td>11</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>94</td>
        <td>
          <a href ="tafseer_detail.php?surah=94&surah_name=Surah Al-Insyirah">
          Surah Al-Insyirah</a></td>
        <td>الانشراح‎‎</td>
        <td>Mekkah</td>
        <td>8</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>95</td>
        <td>
          <a href ="tafseer_detail.php?surah=95&surah_name=Surah At-Tin">
          Surah At-Tin</a></td>
        <td>التِّينِ</td>
        <td>Mekkah</td>
        <td>8</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>96</td>
        <td>
          <a href ="tafseer_detail.php?surah=96&surah_name=Surah Al-`Alaq">
          Surah Al-`Alaq</a></td>
        <td>العَلَق</td>
        <td>Mekkah</td>
        <td>19</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>97</td>
        <td>
          <a href ="tafseer_detail.php?surah=97&surah_name=Surah Al-Qadr">
          Surah Al-Qadr</a></td>
        <td>الْقَدْرِ</td>
        <td>Mekkah</td>
        <td>5</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>98</td>
        <td>
          <a href ="tafseer_detail.php?surah=98&surah_name=Surah Al-Bayyinah">
          Surah Al-Bayyinah</a></td>
        <td>الْبَيِّنَةُ</td>
        <td>Madinah</td>
        <td>8</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>99</td>
        <td>
          <a href ="tafseer_detail.php?surah=99&surah_name=Surah Az-Zalzalah">
          Surah Az-Zalzalah</a></td>
        <td>الزلزلة‎‎</td>
        <td>Madinah</td>
        <td>8</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>100</td>
        <td>
          <a href ="tafseer_detail.php?surah=100&surah_name=Surah Al-`Adiyat">
          Surah Al-`Adiyat</a></td>
        <td>العاديات‎‎</td>
        <td>Mekkah</td>
        <td>11</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>101</td>
        <td>
          <a href ="tafseer_detail.php?surah=101&surah_name=Surah Al-Qari`ah">
          Surah Al-Qari`ah</a></td>
        <td>القارعة‎‎</td>
        <td>Mekkah</td>
        <td>11</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>102</td>
        <td>
          <a href ="tafseer_detail.php?surah=102&surah_name=Surah At-Takasur">
          Surah At-Takasur</a></td>
        <td>التكاثر‎‎</td>
        <td>Mekkah</td>
        <td>8</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>103</td>
        <td>
          <a href ="tafseer_detail.php?surah=103&surah_name=Surah Al-`Asr">
          Surah Al-`Asr</a></td>
        <td>العصر</td>
        <td>Mekkah</td>
        <td>3</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>104</td>
        <td>
          <a href ="tafseer_detail.php?surah=104&surah_name=Surah Al-Humazah">
          Surah Al-Humazah</a></td>
        <td>الهُمَزة‎‎</td>
        <td>Mekkah</td>
        <td>9</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>105</td>
        <td>
          <a href ="tafseer_detail.php?surah=105&surah_name=Surah Al-Fil">
          Surah Al-Fil</a></td>
        <td>الْفِيلِ</td>
        <td>Mekkah</td>
        <td>5</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>106</td>
        <td>
          <a href ="tafseer_detail.php?surah=106&surah_name=Surah Quraisy">
          Surah Quraisy</a></td>
        <td>قُرَيْشٍ</td>
        <td>Mekkah</td>
        <td>4</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>107</td>
        <td>
          <a href ="tafseer_detail.php?surah=107&surah_name=Surah Al-Ma’un">
          Surah Al-Ma’un</a></td>
        <td>الْمَاعُونَ</td>
        <td>Mekkah</td>
        <td>7</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>108</td>
        <td>
          <a href ="tafseer_detail.php?surah=108&surah_name=Surah Al-Kausar">
          Surah Al-Kausar</a></td>
        <td>الكوثر</td>
        <td>Mekkah</td>
        <td>3</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>109</td>
        <td>
          <a href ="tafseer_detail.php?surah=109&surah_name=Surah Al-Kafirun">
          Surah Al-Kafirun</a></td>
        <td>الْكَافِرُونَ</td>
        <td>Mekkah</td>
        <td>6</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>110</td>
        <td>
          <a href ="tafseer_detail.php?surah=110&surah_name=Surah An-Nasr">
          Surah An-Nasr</a></td>
        <td>النصر‎‎</td>
        <td>Madinah</td>
        <td>3</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>111</td>
        <td>
          <a href ="tafseer_detail.php?surah=111&surah_name=Surah Al-Lahab">
          Surah Al-Lahab</a></td>
        <td>المسد‎‎</td>
        <td>Mekkah</td>
        <td>5</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>112</td>
        <td>
          <a href ="tafseer_detail.php?surah=112&surah_name=Surah Al-Ikhlas">
          Surah Al-Ikhlas</a></td>
        <td>الإخلاص‎‎</td>
        <td>Mekkah</td>
        <td>4</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>113</td>
        <td>
          <a href ="tafseer_detail.php?surah=113&surah_name=Surah Al-Falaq">
          Surah Al-Falaq</a></td>
        <td>الْفَلَقِ</td>
        <td>Mekkah</td>
        <td>5</td>
    </tr> 
    </tbody> 
    <tbody>
    <tr class="table-success ">
        <td>114</td>
        <td>
          <a href ="tafseer_detail.php?surah=114&surah_name=Surah An-Nas">
          Surah An-Nas</a></td>
        <td>النَّاسِ</td>
        <td>Mekkah</td>
        <td>6</td>
    </tr> 
    </tbody> 
     
</table>
  <br>
  <br>
   	</div>


                  </div>
              </div>
      
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
      
        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- To the right -->
          <div class="pull-right hidden-xs">
          <strong>Quran.th &copy; 2021 <a href="#"></a></strong>
          </div>
          <!-- Default to the left -->
         
        </footer>
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Create the tabs -->
          <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
              <h3 class="control-sidebar-heading">Recent Activity</h3>
              <ul class="control-sidebar-menu">
                <li>
                  <a href="javascript:;">
                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
      
                    <div class="menu-info">
                      <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
      
                      <p>Will be 23 on April 24th</p>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- /.control-sidebar-menu -->
      
              <h3 class="control-sidebar-heading">Tasks Progress</h3>
              <ul class="control-sidebar-menu">
                <li>
                  <a href="javascript:;">
                    <h4 class="control-sidebar-subheading">
                      Custom Template Design
                      <span class="pull-right-container">
                          <span class="label label-danger pull-right">70%</span>
                        </span>
                    </h4>
      
                    <div class="progress progress-xxs">
                      <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- /.control-sidebar-menu -->
      
            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
              <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>
      
                <div class="form-group">
                  <label class="control-sidebar-subheading">
                    Report panel usage
                    <input type="checkbox" class="pull-right" checked>
                  </label>
      
                  <p>
                    Some information about this general settings option
                  </p>
                </div>
                <!-- /.form-group -->
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->
      
    

    <script src="{{ URL::to('adminassets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('adminassets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('adminassets/js/adminlte.min.js') }}"></script>
    <script>
        $('#myBox').boxWidget({
            animationSpeed: 500,
            collapseTrigger: '#boxBtn',
            removeTrigger: '#my-remove-button-trigger',
            collapseIcon: 'fa-minus',
            expandIcon: 'fa-plus',
            removeIcon: 'fa-times'
        })
    </script>
</body>
</html>

@endsection
