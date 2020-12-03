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
        <th width="1">Russian : krachkovsky</th>
      </tr>
      <thead>

      <tbody>

        <?php


if (extract($_GET)) {
  $surah = isset($_GET['surah']) ? $_GET['surah'] : "";
  if (is_numeric($surah)) {
  $sql = "SELECT Arabic.*, Ru_krachkovsky.* FROM Arabic,Ru_krachkovsky WHERE Arabic.index_arabic=Ru_krachkovsky.index_ru_krachkovsky AND sura_arabic=$surah ORDER BY index_arabic ASC";
  } else if ($surah == "all") {
    $sql = "SELECT Arabic.*, Ru_krachkovsky.* FROM Arabic,Ru_krachkovsky WHERE Arabic.index_arabic=Ru_krachkovsky.index_ru_krachkovsky ORDER BY index_arabic ASC";
  }
}
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)) {

          $index_arabic = $row["index_arabic"];
          $sura_arabic = $row["sura_arabic"];
          $aya_arabic = $row["aya_arabic"];
          $text_arabic = $row["text_arabic"];

          $index_ru_krachkovsky = $row["index_ru_krachkovsky"];
          $sura_ru_krachkovsky = $row["sura_ru_krachkovsky"];
          $aya_ru_krachkovsky = $row["aya_ru_krachkovsky"];
          $text_ru_krachkovsky = $row["text_ru_krachkovsky"];

        ?>

          <tr>

            <td><?php echo $index_arabic ?></td>
            <td><?php echo $sura_arabic . ":" . $aya_arabic ?></td>
            <td><?php echo "<div align='right'>" . $text_arabic . "</div>";?></td>
            <td><?php echo $text_ru_krachkovsky ?></td>
          </tr>
        <?php
        }

        ?>

      </tbody>

  </table>

</body>

</html>