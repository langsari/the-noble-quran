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
        <th width="1">Persian :	بهرام پور</th>
      </tr>
      <thead>

      <tbody>

        <?php


if (extract($_GET)) {
  $surah = isset($_GET['surah']) ? $_GET['surah'] : "";
  if (is_numeric($surah)) {
  $sql = "SELECT Arabic.*, Fa_bahrampour.* FROM Arabic,Fa_bahrampour WHERE Arabic.index_arabic=Fa_bahrampour.index_fa_bahrampour AND sura_arabic=$surah ORDER BY index_arabic ASC";
  } else if ($surah == "all") {
    $sql = "SELECT Arabic.*, Fa_bahrampour.* FROM Arabic,Fa_bahrampour WHERE Arabic.index_arabic=Fa_bahrampour.index_fa_bahrampour ORDER BY index_arabic ASC";
  }
}
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)) {

          $index_arabic = $row["index_arabic"];
          $sura_arabic = $row["sura_arabic"];
          $aya_arabic = $row["aya_arabic"];
          $text_arabic = $row["text_arabic"];

          $index_fa_bahrampour = $row["index_fa_bahrampour"];
          $sura_fa_bahrampour = $row["sura_fa_bahrampour"];
          $aya_fa_bahrampour = $row["aya_fa_bahrampour"];
          $text_fa_bahrampour = $row["text_fa_bahrampour"];

        ?>

          <tr>

            <td><?php echo $index_arabic ?></td>
            <td><?php echo $sura_arabic . ":" . $aya_arabic ?></td>
            <td><?php echo "<div align='right'>" . $text_arabic . "</div>";?></td>
            <td><?php echo $text_fa_bahrampour ?></td>
          </tr>
        <?php
        }

        ?>

      </tbody>

  </table>

</body>

</html>