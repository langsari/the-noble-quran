<!DOCTYPE html>
<html>

<body>

  <?php
  include('db.php');
  ?>

  <h2>Surah :

    <select class="form-control" name="surah" id="surah">
      <option value="" disabled selected>Select surah</option>
      <option value="all">All</option>
      <?php
      for ($i = 1; $i <= 114; $i++) {
        echo "<option>$i</option>";
      }
      ?>
    </select>



  </h2>

</body>


<script>
var urlmenu = document.getElementById( 'surah' );
 urlmenu.onchange = function() {
  window.location.replace ( '?surah=' + this.options[ this.selectedIndex ].value );
 };
 </script>



</html>