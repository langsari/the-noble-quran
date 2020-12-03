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
    
   
    <option value="bengali.php">Bengali</option>
    <option value="bosnian.php">Bosnian</option>
    <option value="bulgarian.php">Bulgarian</option>
    <option value="chinese.php">Chinese</option>
    <option value="czech.php">Czech</option>
    <option value="divehi.php">Divehi</option>
    <option value="dutch.php">Dutch</option>
    <option value="en_ahmedali.php">English :	Ahmed Ali</option>
    <option value="en_ahmedraza.php">English :	Ahmed Raza</option>
    <option value="en_arberry.php">English :	Arberry</option>
    <option value="english.php">English :	Yusuf Ali</option>
    <option value="en_daryabadi.php">English :	Daryabadi</option>
    <option value="en_hilali.php">English :	Hilali & Khan</option>
    <option value="en_shakir.php">English :	Shakir</option>
    <option value="en_wahiduddin.php">English :	Wahiduddin Khan</option>
    <option value="french.php">French</option>
    <option value="german.php">German : Abu Rida</option>
    <option value="de_zaidan.php">German : Zaidan</option>
    <option value="hausa.php">Hausa</option>
    <option value="hindi.php">Hindi</option>
    <option value="indonesian.php">Indonesian</option>
    <option value="italian.php">Italian</option>
    <option value="japanese.php">Japanese</option>
    <option value="korean.php">Korean</option>
    <option value="kurdish.php">Kurdish</option>
    <option value="malayalam.php">Malayalam</option>
    <option value="malay.php">Malay</option>
    <option value="norwegian.php">Norwegian</option>
    <option value="pashto.php">Pashto</option>
    <option value="persian.php">Persian</option>
    <option value="polish.php">Polish</option>
    <option value="portuguese.php">Portuguese</option>
    <option value="romanian.php">Romanian</option>
    <option value="russian.php">Russian : Аль-Мунтахаб</option>
    <option value="ru_krachkovsky.php">Russian : Krachkovsky</option>
    <option value="sindhi.php">Sindhi</option>
    <option value="somali.php">Somali</option> 
    <option value="es_bornez.php">Spanish : Bornez</option> 
    <option value="es_cortes.php">Spanish : Cortes</option>
    <option value="spanish.php">Spanish : Garcia</option>
    <option value="swahili.php">Swahili</option>
    <option value="swedish.php">Swedish</option>
    <option value="tajik.php">Tajik</option>
    <option value="tamil.php">Tamil</option>
    <option value="tatar.php">Tatar</option>
    <option value="thai.php">ภาษาไทย</option>
    <option value="turkish.php">Turkish : Çeviriyazı</option>
    <option value="Öztürk.php">Turkish : Öztürk</option>
    <option value="urdu.php">Urdu</option>
    <option value="uyghur.php">Uyghur</option>
    <option value="uzbek.php">Uzbek</option>
   
 
    
    
    
   
  
    
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