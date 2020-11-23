<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<?php
include('db.php');
?> 


<!-- <h2><p><b>Language translation : </b></p></h2>
       
                                  <select class="form-control" name="id" id="id">
                                    <option value="" disabled selected>โปรดเลือกภาษา</option>
                                    <option value="1" >ไทย</option>
                                    <option value="2" >อังกฤษ</option>
                                    
                                    
                                    
                                    
                              
                                  </select></b></p></h2> -->


                                  <table>
                        <thead>
                          <tr>
                            <th width="1">No.</th>
                            <th width="1">Surah:Ayat</th>
                            <th width="1">Quran</th>
                            <th width="1">Enlish</th>
                            <th width="1">Thai</th>
                          </tr>
                          <thead>

                          <tbody>

                            <?php


                              $sql = "SELECT Arabic.*, English.*, Thai.* 
                              FROM Arabic
                              JOIN English ON English.index_english=Arabic.index_arabic
                              JOIN Thai ON Thai.index_thai=english.index_english";

                            $result = mysqli_query($connect, $sql);
                            while ($row = mysqli_fetch_array($result)) {

                              $index_arabic = $row["index_arabic"];
                              $sura_arabic = $row["sura_arabic"];
                              $aya_arabic = $row["aya_arabic"];
                              $text_arabic = $row["text_arabic"];

                              $index_english = $row["index_english"];
                              $sura_english = $row["sura_english"];
                              $aya_english = $row["aya_english"];
                              $text_english = $row["text_english"];

                              $index_thai = $row["index_thai"];
                              $sura_thai = $row["sura_thai"];
                              $aya_thai = $row["aya_thai"];
                              $text_thai = $row["text_thai"];
                              
                            ?>

                              <tr>
                                
                                <td><?php echo $index_arabic ?></td>
                                <td><?php echo $sura_arabic . ":" . $aya_arabic ?></td>
                                <td><?php echo $text_arabic ?></td>
                                <td><?php echo $text_english ?></td>
                                <td><?php echo $text_thai ?></td>
                              </tr>
                            <?php
                            }

                            ?>

                          </tbody>

                      </table>

</body>
</html>

