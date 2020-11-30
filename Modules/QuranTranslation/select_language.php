<!DOCTYPE html>
<html>

<body>

  <?php
  include('db.php');
  ?>

  <h2>Language translation : 
 
  <select class="form-control" name="id" id="id">
    <option value="" disabled selected>Select Language</option>
    <option value="chinese.php">Chinese</option>
    <option value="english.php">English</option>
    <option value="german.php">German</option>
    <option value="indonesian.php">Indonesian</option>
    <option value="italian.php">Italian</option>
    <option value="japanese.php">Japanese</option>
    <option value="korean.php">Korean</option>
    <option value="malay.php">Malay</option>
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