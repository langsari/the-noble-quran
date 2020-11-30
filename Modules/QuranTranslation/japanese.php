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
        <th width="1">Japanese</th>
      </tr>
      <thead>

      <tbody>

        <?php


          if (extract($_GET)) {
        $surah = isset($_GET['surah']) ? $_GET['surah'] : "";
          if (is_numeric($surah)) {
        $sql = "SELECT Arabic.*, Japanese.* FROM Arabic,Japanese WHERE Arabic.index_arabic=Japanese.index_japanese AND sura_arabic=$surah ORDER BY index_arabic ASC";
          } else if ($surah == "all") {
        $sql = "SELECT Arabic.*, Japanese.* FROM Arabic,Japanese WHERE Arabic.index_arabic=Japanese.index_japanese ORDER BY index_arabic ASC";
          }
        }


        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_array($result)) {

          $index_arabic = $row["index_arabic"];
          $sura_arabic = $row["sura_arabic"];
          $aya_arabic = $row["aya_arabic"];
          $text_arabic = $row["text_arabic"];

          $index_japanese = $row["index_japanese"];
          $sura_japanese = $row["sura_japanese"];
          $aya_japanese = $row["aya_japanese"];
          $text_japanese = $row["text_japanese"];

        ?>

          <tr>

            <td><?php echo $index_arabic ?></td>
            <td><?php echo $sura_arabic . ":" . $aya_arabic ?></td>
            <td><?php echo "<div align='right'>" . $text_arabic . "</div>";?></td>
            <td><?php echo $text_japanese ?></td>
          </tr>
        <?php
        }

        ?>

      </tbody>

  </table>

</body>

</html>