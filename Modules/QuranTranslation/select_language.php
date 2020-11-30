<!DOCTYPE html>
<html>

<body>

  <?php
  include('db.php');
  ?>

  <h2>Language translation : 
 
  <select class="form-control" name="id" id="id">
    <option value="" disabled selected>Select Language</option>
    <option value="albanian.php">Albanian</option> 
    <option value="amazigh.php">Amazigh</option>
    <option value="amharic.php">Amharic</option>
    <option value="bengali.php">Bengali</option>
    <option value="bosnian.php">Bosnian</option>
    <option value="bulgarian.php">Bulgarian</option>
    <option value="chinese.php">Chinese</option>
    <option value="czech.php">Czech</option>
    <option value="divehi.php">Divehi</option>
    <option value="dutch.php">Dutch</option>
    <option value="english.php">English</option>
    <option value="french.php">French</option>
    <option value="german.php">German</option>
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
    <option value="portuguese.php">Portuguese</option>
    <option value="russian.php">Russian</option>
    <option value="spanish.php">Spanish</option>
    <option value="swedish.php">Swedish</option>
    <option value="thai.php">ภาษาไทย</option>
    <option value="turkish.php">Turkish</option>
    <option value="urdu.php">Urdu</option>

    
   
 
    
    
    
   
  
    
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