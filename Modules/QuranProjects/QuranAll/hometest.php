<?php
	require 'header.html';
   
    ?>
<!DOCTYPE html>

<div class="container"> 
          
   <!--  ใส่ลิงค์เว็บ <p>Quick links :&nbsp;&nbsp;<a style="text-decoration: none;" href="Al-fatihah.html">Al-Fatihah</a>&nbsp;<a href="" style="text-decoration:none">.....</a>&nbsp;&nbsp;|</p> -->
    
    <hr style="height:2px;border-width:0;color:gray;background-color:gray"> 
    

        <!--  <P>Surah (Chapter) | Juzz</P> -->
         <hr style="width:11.6%;text-align:left;margin-left:0px;"><br>
       
    <div class="row text-center">
         <div class="col-sm">
               <a href="Al-fatihah.php"><button style="height: 120px; width:320px;"   type="buttom" class="btn btn-outline-info" ><span>Al-Fatihah</span> (The openner) <h4>ٱلْفَاتِحَة</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="button" class="btn btn-outline-info"> <span>Al-Baqarah</span> (The cow,the cow) 
              <h4>ٱلْبَقَرَة</h4></button></a>
         </div>
         <div class="col-sm">
             <a href="tranlate.html"><button style="height: 120px; width:320px;"  type="button" class="btn btn-outline-info"><span>Al-Imran</span> (The family of imran)
         <h4>آلِ عِمْرَان</h4></button></a>
         </div>
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="<a href="detail.php?surah=<?= $data['index']?>&nama_surah=<?=$data
            ['surah_indonesia'] ?><?= $data['surah_indonesia']?>><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>An-Nisa</span> (The women)
              <h4>ٱلنِّسَاء</h4></button></a>
         </div>
         <div class="col-sm">
              <button style="height: 120px; width:320px;" type="button" class="btn btn-outline-info"><span>Al-Maidah</span> (The food ,The repast ,The table)
                   <h4>ٱلْمَائِدَة</h4> </button>
         </div>
         <div class="col-sm">
              
              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-An'am</span> (The cattle)
              <h4>ٱلْأَنْعَام</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-A'raf</span> (The Heights, The Faculty of Discernment)
              <h4>ٱلْأَعْرَاف</h4></button></a>
         </div>
         <div class="col-sm">
              <button style="height: 120px; width:320px;" type="button" class="btn btn-outline-info"><span>Al-Anfal</span> (The Spoils of War)
                   <h4> ٱلْأَنْفَال</h4> </button>
         </div>
         <div class="col-sm">
              
              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>At-Tawbah</span> (The Repentance)
                   <h4>ٱلتَّوْبَة</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Yunus</span> (Jonah)
              <h4>يُونُس</h4></button></a>
         </div>
         <div class="col-sm">
              <button style="height: 120px; width:320px;" type="button" class="btn btn-outline-info"><span>Hud</span> (Hud)
                   <h4>	هُود</h4> </button>
         </div>
         <div class="col-sm">
              
              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Yusuf</span> (	Joseph)
              <h4>	يُوسُف</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Ar-Raʿd</span> (The Thunder)
              <h4>	ٱلرَّعْد</h4></button></a>
         </div>
         <div class="col-sm">
              <button style="height: 120px; width:320px;" type="button" class="btn btn-outline-info"><span>Ibrahim</span> (Abraham)
                   <h4>	إِبْرَاهِيم</h4> </button>
         </div>
         <div class="col-sm">
              
              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Hijr</span> (The Rocky Tract, The Stoneland, The Rock City, Al-Hijr)
              <h4>ٱلْحِجْر</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href=""><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>An-nahl</span> (The Honey Bees, The Bee)
              <h4>ٱلنَّحْل</h4></button></a>
         </div>
         <div class="col-sm">
           
                   <a href=""><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Isra</span> (The Night Journey)
                        <h4>	ٱلْإِسْرَاء</h4></button></a>
         </div>
         <div class="col-sm">
              
              <button style="height: 120px; width:320px;" type="button" class="btn btn-outline-info"><span>Al-Kahf</span> (The Cave)
                   <h4>	ٱلْكَهْف</h4> </button>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="detail.php?surah=<?= $data['index']?>&nama_surah=<?=$data
            ['surah_indonesia'] ?>"><?= $data['surah_indonesia']?>"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Maryam</span> (Mary)
              <h4>	مَرْيَم</h4></button></a>
         </div>
         <div class="col-sm">
              <button style="height: 120px; width:320px;" type="button" class="btn btn-outline-info"><span>Ta-Ha</span> (Ṭāʾ Hāʾ (a name of Muhammad))
                   <h4>طه</h4> </button>
         </div>
         <div class="col-sm">
              
              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>The Prophets</span> (Al-Anbia)
              <h4>ٱلْأَنْبِيَاء</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Hajj</span> (The Pilgrimage, The Hajj)
              <h4>ٱلْحَجّ</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Mumeen</span> (The Believers)
                   <h4>ٱلْمُؤْمِنُون</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>An-Nur</span> (The Light)
              <h4>ٱلنُّور</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Furqan</span> (The Criterion, The Standard, The Standard of True and False)
              <h4>ٱلْفُرْقَان</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Ash-Shu'ara</span> (The poets)
                   <h4>ٱلشُّعَرَاء</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>An-Naml </span> (The Ant, The Ants)
              <h4>ٱلنَّمْل</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Qasas</span> (The Narrations, The Stories, The Story)
              <h4>ٱلْقَصَص</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Ankabut</span> (The Spider)
                   <h4>ٱلْعَنْكَبُوت/h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Ar-Rum</span> (Rome, Byzantium)
              <h4>	ٱلرُّوم</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Luqman</span> (Luqman)
              <h4>	لُقْمَان</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Sujada</span> (The Prostration, Worship, Adoration)
                   <h4>ٱلسَّجْدَة</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Ahzaab</span> (The Clans, The Confederates, The Combined Forces)
              <h4>ٱلْأَحْزَاب</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Saba (surah)</span> (Sheba)
              <h4>سَبَأ</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Faatir</span> (The Originator)
                   <h4>فَاطِر</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Yaseen</span> (Yāʾ Sīn (a name of Muhammad))
              <h4>يس</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>As-Saaffaat</span> (Those Who Set The Ranks, Drawn Up In Ranks, Those Ranged in Ranks)
              <h4>ٱلصَّافَّات</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Saad</span> (Ṣād)
                   <h4>	ص</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Az-Zumar</span> (The Crowds, The Troops, Throngs)
              <h4>ٱلزُّمَر</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Ghafir</span> (The Forgiver (God), Forgiving)
              <h4>غَافِر</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Fussilat</span> (Expounded, Explained In Detail, Clearly Spelled Out)
                   <h4>فُصِّلَت</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Ash_Shooraa</span> (The Consultation)
              <h4>	ٱلشُّورىٰ</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>	Az-Zukhruf</span> (The Gold Adornments, The Ornaments of Gold, Luxury, Gold)
              <h4>ٱلْزُّخْرُف</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Ad-Dukhaan</span> (The smoke)
                   <h4>	ٱلدُّخَان</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href=""><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Jaathiyah</span> (The Kneeling Down, Crouching)
              <h4>ٱلْجَاثِيَة</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Ahqaaf</span> (Winding Sand-tracts, The Dunes, The Sand-Dunes)
              <h4>	ٱلْأَحْقَاف</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Muhammad</span> (Muhammad)
              <h4>	مُحَمَّد</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Fath</span> (The Victory, Conquest)
              <h4>ٱلْفَتْح</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Hujuraat</span> (The Private Apartments, The Inner Apartments)
              <h4>ٱلْحُجُرَات</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Qaaf</span> (Q̈āf)
                   <h4>ق</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Adh-Dhaariyaat</span> (The Wind That Scatter, The Winnowing Winds, The Dust-Scattering Winds)
              <h4>ٱلذَّارِيَات</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>At-Toor</span> (The Mount, Mount Sinai)
              <h4>	ٱلطُّور</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>An-Najm</span> (The Star, The Unfolding)
                   <h4>	ٱلنَّجْم</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Qamar</span> (The Moon)
              <h4>ٱلْقَمَر</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Ar-Rahman</span> (The Most Merciful, The Most Gracious)
              <h4>	ٱلرَّحْمَٰن</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Waqi'a</span> (The Inevitable, The Event, That Which Must Come to Pass)
                   <h4>	ٱلْوَاقِعَة</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Hadeed</span> (The Iron)
              <h4>ٱلْحَدِيد</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Mujadila</span> (The Pleading, The Pleading Woman)
              <h4>	ٱلْمُجَادِلَة</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Hashr</span> (The Mustering, The Gathering, Exile, Banishment)
                   <h4>ٱلْحَشْر</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Mumtahanah</span> (The Examined One, She That Is To Be Examined)
              <h4>ٱلْمُمْتَحَنَة</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>As-Saff</span> (The Ranks, Battle Array)
              <h4>	ٱلصَّفّ</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Jumu'ah</span> (Congregation, Friday)
                   <h4>ٱلْجُمُعَة</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Munafiqoon</span> (The Hypocrites)
              <h4>ٱلْمُنَافِقُون</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>At-Taghabun</span> (The Cheating, The Mutual Disillusion, The Mutual Loss and Gain, Loss and Gain)
              <h4>ٱلتَّغَابُن</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>At-Talaq</span> (Divorce)
                   <h4>ٱلطَّلَاق</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>At-Tahreem</span> (The Prohibition)
              <h4>ٱلتَّحْرِيم    </h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Mulk</span> (The Dominion, Sovereignty, Control)
              <h4>ٱلْمُلْك</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Qalam</span> (The Pen)
                   <h4></h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Haaqqa</span> (The Sure Reality, The Laying-Bare of the Truth)
              <h4>	ٱلْحَاقَّة</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Ma'aarij</span> (The Ways of Ascent, The Ascending Stairways)
              <h4>ٱلْمَعَارِج</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Nooh</span> (Noah)
                   <h4>	نُوح</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Jinn</span> (The Jinn, The Spirits, The Unseen Beings)
              <h4>ٱلْجِنّ</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Muzzammil</span> (The Enfolded One, The Enshrouded One, Bundled Up, The Enwrapped One)
              <h4>ٱلْمُزَّمِّل</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Muddaththir</span> (The One Wrapped Up, The Cloaked One, The Man Wearing A Cloak, The Enfolded One)
                   <h4>ٱلْمُدَّثِّر</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Qiyamah</span> (Resurrection, The Day of Resurrection, Rising Of The Dead)
              <h4>	ٱلْقِيَامَة</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Insaan</span> (The Human, Man)
              <h4>ٱلْإِنْسَان</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Mursalaat</span> (Those Sent Forth, The Emissaries, Winds Sent Forth)
                   <h4>ٱلْمُرْسَلَات</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>An-Naba'</span> (The Great News, The Announcement, The Tiding)
              <h4>ٱلنَّبَأ</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>An-Naazi'aat</span> (Those Who Tear Out, Those Who Drag Forth, Soul-snatchers, Those That Rise)
              <h4>ٱلنَّازِعَات</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Abasa</span> (He Frowned)
                   <h4>عَبَسَ</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>At-Takweer</span> (The Folding Up, The Overthrowing, Shrouding in Darkness)
              <h4>ٱلتَّكْوِير</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Infitar</span> (The Cleaving Asunder, Bursting Apart)
              <h4>ٱلْإِنْفِطَار</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Mutaffifeen</span> (The Dealers in Fraud, Defrauding, The Cheats, Those Who Give Short Measure)
                   <h4>ٱلْمُطَفِّفِين</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Inshiqaaq</span> (The Rending Asunder, The Sundering, Splitting Open, The Splitting Asunder)
              <h4>	ٱلْإِنْشِقَاق</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Burooj</span> (The Mansions Of The Stars, The Constellations, The Great Constellations)
              <h4>	ٱلْبُرُوج</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>At-Taariq</span> (The Night-Visitant, The Morning Star, The Nightcomer, That Which Comes in the Night)
                   <h4>ٱلطَّارِق</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>	Al-A'laa</span> (The Most High, The All-Highest, Glory To Your Lord In The Highest)
              <h4>	ٱلْأَعْلَىٰ</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Ghaashiyah</span> (The Overwhelming Event, The Overshadowing Event, The Pall)
              <h4>ٱلْغَاشِيَة</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Fajr</span> (The Break of Day, The Daybreak, The Dawn)
                   <h4>ٱلْفَجْر/h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Balad</span> (The City, The Land)
              <h4>ٱلْبَلَد</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Ash-Shams</span> (The Sun)
              <h4>	ٱلشَّمْس</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Layl</span> (The Night)
                   <h4>ٱللَّيْل</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>	Ad-Dhuha</span> (The Glorious Morning Light, The Forenoon, Morning Hours, Morning Bright, The Bright Morning Hours)
              <h4>	ٱلضُّحَىٰ</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Ash-Sharh</span> (The Expansion of Breast, Solace, Consolation, Relief, Patient, The Opening-Up of the Heart)
              <h4>ٱلشَّرْح</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>ٱلتِّين</span> (The Fig Tree, The Fig)
                   <h4>ٱلتِّين</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-'Alaq</span> (The Clinging Clot, Clot of Blood, The Germ-Cell)
              <h4>	ٱلْعَلَق</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Qadr</span> (The Night of Honor, The Night of Decree, Power, Fate, Destiny)
              <h4>	ٱلْقَدْر</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Bayyinahh</span> (The Clear Evidence, The Evidence of the Truth)
                   <h4>ٱلْبَيِّنَة</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Az-Zalzalah</span> (The Earthquake)
              <h4>	ٱلزَّلْزَلَة</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-'Aadiyaat</span> (The Courser, The Chargers, The War Horse)
              <h4>	ٱلْعَادِيَات</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Qaari'ah</span> (The Striking Hour, The Great Calamity, The Stunning Blow, The Sudden Calamity)
                   <h4>ٱلْقَارِعَة</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 140px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>At-Takaathur</span> (The Piling Up, Rivalry in World Increase, Competition, Greed for More and More)
              <h4>ٱلتَّكَاثُر</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-'Asr</span> (The Time, The Declining Day, The Epoch, The Flight of Time)
              <h4>	ٱلْعَصْر</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Humazah</span> (The Scandalmonger, The Traducer, The Gossipmonger, The Slanderer)
                   <h4>ٱلْهُمَزَة</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Feel</span> (The Elephant)
              <h4>	ٱلْفِيل</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Quraysh</span> (The Quraysh)
              <h4>قُرَيْش</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Maa'oon</span> (The Neighbourly Assistance, Small Kindnesses, Almsgiving, Assistance)
                   <h4>ٱلْمَاعُون</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Kawthar</span> (Abundance, Plenty, Good in Abundance)
              <h4>	ٱلْكَوْثَر</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Kaafiroon</span> (The Disbelievers, The Kuffar, Those Who Deny the Truth)
              <h4>	ٱلْكَافِرُون</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>An-Nasr</span> (The Help, Divine Support, Victory, Succour)
                   <h4>	ٱلنَّصْر</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Masad</span> (The Plaited Rope, The Palm Fibre, The Twisted Strands)
              <h4>	ٱلْمَسَد</h4></button></a>
         </div>
        
    </div>
    <div class="row text-center mt-4">
         <div class="col-sm">
              
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Ikhlaas</span> (Purity of Faith, The Fidelity, The Declaration of [God's] Perfection)
              <h4>ٱلْإِخْلَاص</h4></button></a>
         </div>
         <div class="col-sm">
              <a href="#"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Falaq</span> (The Daybreak, Dawn, The Rising Dawn)
                   <h4>ٱلْفَلَق</h4></button></a>
         </div>
         <div class="col-sm">
              
              <a href="##"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-Naas</span> (Mankind, Men)
              <h4>	ٱلنَّاس</h4></button></a>
         </div>
        
</div>
</div>
</div>
<?php endwhile; ?>