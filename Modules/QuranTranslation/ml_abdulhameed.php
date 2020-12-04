<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
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
  include('select_language.php');
  include('select_surah.php');
  ?>


  <table>
    <thead>
      <tr>
        <th width="1">No.</th>
        <th width="1">Surah:Ayat</th>
        <th width="1">Quran</th>
        <th width="1">Malayalam : അബ്ദുല്‍ ഹമീദ് & പറപ്പൂര്‍</th>
      </tr>
      <thead>

      <tbody>

        <?php


if (extract($_GET)) {
  $surah = isset($_GET['surah']) ? $_GET['surah'] : "";
  if (is_numeric($surah)) {
  $sql = "SELECT Arabic.*, Ml_abdulhameed.* FROM Arabic,Ml_abdulhameed WHERE Arabic.index_arabic=Ml_abdulhameed.index_ml_abdulhameed AND sura_arabic=$surah ORDER BY index_arabic ASC";
  } else if ($surah == "all") {
    $sql = "SELECT Arabic.*, Ml_abdulhameed.* FROM Arabic,Ml_abdulhameed WHERE Arabic.index_arabic=Ml_abdulhameed.index_ml_abdulhameed ORDER BY index_arabic ASC";
  }
}
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)) {

          $index_arabic = $row["index_arabic"];
          $sura_arabic = $row["sura_arabic"];
          $aya_arabic = $row["aya_arabic"];
          $text_arabic = $row["text_arabic"];

          $index_ml_abdulhameed = $row["index_ml_abdulhameed"];
          $sura_ml_abdulhameed = $row["sura_ml_abdulhameed"];
          $aya_ml_abdulhameed = $row["aya_ml_abdulhameed"];
          $text_ml_abdulhameed = $row["text_ml_abdulhameed"];

        ?>

          <tr>

            <td><?php echo $index_arabic ?></td>
            <td><?php echo $sura_arabic . ":" . $aya_arabic ?></td>
            <td><?php echo "<div align='right'>" . $text_arabic . "</div>";?></td>
            <td><?php echo $text_ml_abdulhameed ?></td>
          </tr>
        <?php
        }

        ?>

      </tbody>

  </table>

</body>

</html>