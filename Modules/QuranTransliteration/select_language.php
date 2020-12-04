<!DOCTYPE html>
<html>

<body>

  <?php
  include('db.php');
  
  ?>

  <h2>Language: 
 
  <select class="form-control" name="id" id="id">
    <option value="" disabled selected>Select Language</option>
   
    <option value="thai.php">Thai</option>  
    <option value="english.php">English</option>
   
  </select>

</h2>

</body>

<script>
var urlmenu = document.getElementById( 'id' );
 urlmenu.onchange = function() {
  window.location.replace ( this.options[ this.selectedIndex ].value );
 };
 </script>


</html>