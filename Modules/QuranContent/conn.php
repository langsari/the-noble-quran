<?php
    ini_set('display_errors', 1);
    error_reporting(~0);

    $serverName = 'localhost';
    $userName = 'root';
    $userPassword = '';
    $dbName = 'quran';

    $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

    $sql = 'SELECT * FROM quran_nam';

    $query = mysqli_query($conn, $sql);

?>