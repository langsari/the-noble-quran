<!DOCTYPE html>
<html>

<body>

  <?php
  include('db.php');
  ?>

  <h2>Language translation : 
 
  <select class="form-control" name="id" id="id">
    <option value="" disabled selected>Select Language</option>
    <option value="albanian.php">Albanian : Efendi Nahi</option> 
    <option value="sq_mehdiu.php">Albanian : Feti Mehdiu</option> 
    <option value="sq_ahmeti.php">Albanian : Sherif Ahmeti</option> 
    <option value="amazigh.php">Amazigh : At Mensur</option>
    <option value="amharic.php">Amharic : ሳዲቅ & ሳኒ ሐቢብ</option>
    <option value="azerbalijani.php">Azerbalijani : Məmmədəliyev & Bünyadov</option>
    <option value="az_musayev.php">Azerbalijani : Musayev</option>
    <option value="bengali.php">Bengali : জহুরুল হক</option>
    <option value="bn_bengali.php">Bengali : 	মুহিউদ্দীন খান</option>
    <option value="bosnian.php">Bosnian : Korkut </option>
    <option value="bs_mlivo.php">Bosnian : Mlivo </option>
    <option value="bulgarian.php">Bulgarian : Теофанов </option>
    <option value="chinese.php">Chinese : Ma Jian</option>
    <option value="zh_majian.php">Chienese : 	Ma Jian (Traditional)</option>
    <option value="czech.php">Czech : Hrbek</option>
    <option value="cs_nykl.php">Czech : Nykl</option>
    <option value="divehi.php">Divehi :	ދިވެހި </option>
    <option value="dutch.php">Dutch : Keyzer</option>
    <option value="nl_leemhuis.php">Dutch : Leemhuis</option>
    <option value="nl_siregar.php">Dutch : Siregar</option>
    <option value="en_ahmedali.php">English :	Ahmed Ali</option>
    <option value="en_ahmedraza.php">English :	Ahmed Raza</option>
    <option value="en_arberry.php">English :	Arberry</option>
    <option value="english.php">English :	Yusuf Ali</option>
    <option value="en_daryabadi.php">English :	Daryabadi</option>
    <option value="en_hilali.php">English :	Hilali & Khan</option>
    <option value="en_shakir.php">English :	Shakir</option>
    <option value="en_wahiduddin.php">English :	Wahiduddin Khan</option>
    <option value="french.php">French : Hamidullah </option>
    <option value="german.php">German : Abu Rida</option>
    <option value="de_bubenheim.php">German : Bubenheim & Elyas</option>
    <option value="de_khoury.php">German : 	Khoury</option>
    <option value="de_zaidan.php">German : Zaidan</option>
    <option value="hausa.php">Hausa : Gumi </option>
    <option value="hindi.php">Hindi : फ़ारूक़ ख़ान & नदवी</option>
    <option value="hi_farooq.php">Hindi : 	फ़ारूक़ ख़ान & अहमद </option>
    <option value="indonesian.php">Indonesian :	Bahasa Indonesia</option>
    <option value="id_muntakhab.php">Indonesian :	Quraish Shihab</option>
    <option value="id_jalalayn.php">Indonesian :	Tafsir Jalalayn</option>
    <option value="italian.php">Italian :	Piccardo</option>
    <option value="japanese.php">Japanese : Japanese</option>
    <option value="korean.php">Korean : Korean</option>
    <option value="kurdish.php">Kurdish : ته‌فسیری ئاسان </option>
    <option value="malayalam.php">Malayalam : കാരകുന്ന് & എളയാവൂര്</option>
    <option value="ml_abdulhameed.php">Malayalam : അബ്ദുല്‍ ഹമീദ് & പറപ്പൂര്‍</option>
    <option value="malay.php">Malay : Basmeih</option>
    <option value="norwegian.php">Norwegian :	Einar Berg</option>
    <option value="pashto.php">Pashto : عبدالولي </option>
    <option value="persian.php">Persian :	انصاریان</option>
    <option value="fa_ayati.php">Persian :	آیتی</option>
    <option value="fa_bahrampour.php">Persian :	بهرام پور</option>
    <option value="fa_gharaati.php">Persian : قرائتی</option>
    <option value="fa_ghomshei.php">Persian :	الهی قمشه‌ای</option>
    <option value="fa_khorramdel.php">Persian :خرمدل</option>
    <option value="fa_khorramshahi.php">Persian : خرمشاهی</option>
    <option value="fa_sadeqi.php">Persian :	صادقی تهرانی </option>
    <option value="fa_fooladvand.php">Persian : فولادوند</option>
    <option value="fa_mojtabavi.php">Persian : مجتبوی</option>
    <option value="fa_moezzi.php">Persian :	معزی</option>
    <option value="fa_makarem.php">Persian :	مکارم شیرازی </option>
    <option value="polish.php">Polish :	Bielawskiego</option>
    <option value="portuguese.php">Portuguese : El-Hayek</option>
    <option value="romanian.php">Romanian : Grigore</option>
    <option value="ru_abuadel.php">Russian : Абу Адель</option>
    <option value="russian.php">Russian : Аль-Мунтахаб</option>
    <option value="ru_krachkovsky.php">Russian : Krachkovsky</option>
    <option value="ru_kuliev.php">Russian : Кулиев</option>
    <option value="ru_osmanov.php">Russian : Османов</option>
    <option value="ru_porokhova.php">Russian : Порохова</option>
    <option value="ru_sablukov.php">Russian : Саблуков </option>
    <option value="sindhi.php">Sindhi : امروٽي</option>
    <option value="somali.php">Somali : Abduh </option> 
    <option value="es_bornez.php">Spanish : Bornez</option> 
    <option value="es_cortes.php">Spanish : Cortes</option>
    <option value="spanish.php">Spanish : Garcia</option>
    <option value="swahili.php">Swahili : Al-Barwani</option>
    <option value="swedish.php">Swedish : Bernström</option>
    <option value="tajik.php">Tajik :	Оятӣ</option>
    <option value="tamil.php">Tamil : ஜான் டிரஸ்ட்</option>
    <option value="tatar.php">Tatar :	Yakub Ibn Nugman</option>
    <option value="thai.php">Thai : ภาษาไทย</option>
    <option value="tr_golpinarli.php">Turkish : Abdulbakî Gölpınarlı </option>
    <option value="tr_bulac.php">Turkish : Alİ Bulaç</option>
    <option value="turkish.php">Turkish : Çeviriyazı</option>
    <option value="tr_diyanet.php">Turkish : Diyanet İşleri</option>
    <option value="tr_vakfi.php">Turkish : Diyanet Vakfı</option>
    <option value="tr_yuksel.php">Turkish : Edip Yüksel</option>
    <option value="tr_yazir.php">Turkish : Elmalılı Hamdi Yazır</option>
    <option value="Öztürk.php">Turkish : Öztürk</option>
    <option value="tr_yildirim.php">Turkish : Suat Yıldırım</option>
    <option value="tr_ates.php">Turkish : Süleyman Ateş</option>
    <option value="urdu.php">Urdu : ابوالاعلی مودودی</option>
    <option value="ur_kanzuliman.php">Urdu : 	احمد رضا خان</option>
    <option value="ur_ahmedali.php">Urdu : 	احمد علی</option>
    <option value="ur_jalandhry.php">Urdu : جالندہری</option>
    <option value="ur_qadri.php">Urdu :	طاہر القادری</option>
    <option value="ur_jawadi.php">Urdu : علامہ جوادی</option>
    <option value="ur_junagarhi.php">Urdu :	محمد جوناگڑھی</option>
    <option value="ur_najafi.php">Urdu : محمد حسین نجفی</option>
    <option value="uyghur.php">Uyghur : محمد صالح</option>
    <option value="uzbek.php">Uzbek : Мухаммад Содик</option>
   
 
    
    
    
   
  
    
  </select>

</h2>

</body>

<script>
var urlmenu = document.getElementById( 'id' );
 urlmenu.onchange = function() {
  window.location.replace ( this.options[ this.selectedIndex ].value + "?surah=all");
 };
 </script>


</html>